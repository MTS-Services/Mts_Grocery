FROM php:8.3-fpm

# 1. System dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    supervisor \
    gnupg2 \
    ca-certificates \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd

# 2. Node.js & npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# 3. Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# 4. Working directory
WORKDIR /var/www

# 5. Copy source
COPY . .

# 6. Laravel permissions
RUN mkdir -p storage/framework/{views,sessions,cache} \
    && mkdir -p bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# 7. PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# 8. Frontend build
RUN if [ -f package.json ]; then npm install && npm run build; fi

# 9. Artisan commands
RUN php artisan key:generate \
    && php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && php artisan migrate --force || true

# 10. Nginx & Supervisor config
RUN rm -f /etc/nginx/sites-enabled/default
COPY ./docker/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# 11. Expose port
EXPOSE 80

# 12. Start services
CMD ["/usr/bin/supervisord", "-n"]
