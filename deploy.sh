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
echo "==> Clearing and rebuilding caches"
docker compose exec -T php php artisan config:clear
docker compose exec -T php php artisan cache:clear
docker compose exec -T php php artisan route:clear
docker compose exec -T php php artisan view:clear
docker compose exec -T php php artisan config:cache
docker compose exec -T php php artisan route:cache
docker compose exec -T php php artisan view:cache

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
