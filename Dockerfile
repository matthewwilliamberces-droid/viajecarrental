# ==========================================
# Stage 1: Install Composer Dependencies
# ==========================================
FROM composer:2.8 AS composer
WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --no-autoloader \
    --no-scripts \
    --ignore-platform-reqs

COPY . .
RUN composer dump-autoload --optimize --no-dev --classmap-authoritative

# ==========================================
# Stage 2: Build Frontend Assets (Vite)
# ==========================================
FROM node:22-alpine AS frontend
WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci --no-audit --prefer-offline

COPY resources/ resources/
COPY public/ public/
COPY vite.config.js tailwind.config.js* postcss.config.js* ./
COPY --from=composer /app/vendor /app/vendor

RUN npm run build

# ==========================================
# Stage 3: Production Runtime
# ==========================================
FROM php:8.4-fpm-alpine AS production

LABEL maintainer="VIAJE DevOps"

# Install System Dependencies & Process Supervisor
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libpng-dev \
    libzip-dev \
    icu-dev \
    sqlite-dev \
    oniguruma-dev \
    bash

# Install & Configure PHP Extensions
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions \
    bcmath \
    ctype \
    curl \
    dom \
    fileinfo \
    filter \
    gd \
    intl \
    mbstring \
    opcache \
    pcntl \
    pdo_sqlite \
    session \
    sqlite3 \
    tokenizer \
    xml \
    zip

# Harden PHP Runtime (Suppress Fingerprinting & Fix Upload Exploits)
RUN echo "expose_php = Off" > /usr/local/etc/php/conf.d/security.ini && \
    echo "session.upload_progress.enabled = Off" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "session.upload_progress.cleanup = Off" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "upload_max_filesize = 32M" >> /usr/local/etc/php/conf.d/security.ini && \
    echo "post_max_size = 32M" >> /usr/local/etc/php/conf.d/security.ini

# Production OPcache Tuning
RUN echo "opcache.enable = 1" > /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.memory_consumption = 128" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.interned_strings_buffer = 16" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.max_accelerated_files = 10000" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.validate_timestamps = 0" >> /usr/local/etc/php/conf.d/opcache.ini && \
    echo "opcache.save_comments = 1" >> /usr/local/etc/php/conf.d/opcache.ini

WORKDIR /var/www/html

# Copy Application Code & Pre-built Artifacts
COPY --chown=www-data:www-data . .
COPY --chown=www-data:www-data --from=composer /app/vendor /var/www/html/vendor
COPY --chown=www-data:www-data --from=frontend /app/public/build /var/www/html/public/build

# Copy Docker Service Configurations
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh && \
    mkdir -p /var/log/supervisor /var/log/nginx /var/run/nginx && \
    chown -R www-data:www-data /var/log/nginx /var/run/nginx storage bootstrap/cache

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
