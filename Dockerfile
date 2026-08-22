FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev libpng-dev libxml2-dev libicu-dev libonig-dev unzip git \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
