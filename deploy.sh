#!/bin/bash
set -e

APP_DIR="/var/www/allcatholicmedia"
CONTAINER="acm-php-fpm"

echo "=================================================="
echo "  Deploying allcatholicmedia"
echo "  $(date)"
echo "=================================================="

cd "$APP_DIR"

echo ""
echo "==> Putting site into maintenance mode"
docker compose exec -T php php artisan down --retry=60 || true

echo ""
echo "==> Pulling latest code from git"
git pull origin main

echo ""
echo "==> Rebuilding PHP container (in case Dockerfile changed)"
docker compose build php

echo ""
echo "==> Starting/recreating PHP container"
docker compose up -d --force-recreate

echo ""
echo "==> Waiting for PHP-FPM to be ready"
sleep 3

echo ""
echo "==> Installing Composer dependencies"
docker compose exec -T php composer install --no-dev --optimize-autoloader

echo ""
echo "==> Installing npm dependencies and building assets"
if [ -f package.json ]; then
    if command -v npm >/dev/null 2>&1; then
        npm install
        npm run build 2>/dev/null || npm run production 2>/dev/null || echo "No build/production npm script found, skipping"
    else
        echo "npm not found on host, skipping frontend build"
    fi
fi

echo ""
echo "==> Publishing CMS assets"
docker compose exec -T php php artisan cms:publish:assets || true

echo ""
echo "==> Running database migrations"
docker compose exec -T php php artisan migrate --force

echo ""
echo "==> Linking storage"
docker compose exec -T php php artisan storage:link || true

echo ""
echo "==> Clearing caches"
# NOTE: intentionally NOT running config:cache / route:cache / view:cache here.
# Those commands bake the *absolute path Laravel sees at cache-time* into
# bootstrap/cache/*.php. Inside this container the code lives at /var/www/html,
# but the container bind-mounts $APP_DIR from the host, so that cached file is
# written to the same files the host's cron (running native host PHP against
# /var/www/allcatholicmedia) then reads — with the wrong path baked in. That
# previously broke storage/cache/log writes for every scheduled command
# (e.g. homepage:refresh-sections) until the stale cache was cleared.
# Leaving config/routes/views uncached lets each context (container vs. host
# cron) resolve its own correct base path dynamically. Do not re-add caching
# here unless the container path and $APP_DIR are made identical.
docker compose exec -T php php artisan config:clear
docker compose exec -T php php artisan cache:clear
docker compose exec -T php php artisan route:clear
docker compose exec -T php php artisan view:clear

echo ""
echo "==> Fixing ownership and permissions"
chown -R 33:33 "$APP_DIR/storage" "$APP_DIR/bootstrap/cache"
chmod -R 775 "$APP_DIR/storage" "$APP_DIR/bootstrap/cache"

echo ""
echo "==> Reloading Nginx and PHP-FPM"
nginx -t && systemctl reload nginx
docker compose restart php

echo ""
echo "==> Bringing site back up"
docker compose exec -T php php artisan up

echo ""
echo "=================================================="
echo "  Deployment complete!"
echo "  $(date)"
echo "=================================================="
