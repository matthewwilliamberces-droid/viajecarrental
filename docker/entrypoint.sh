#!/bin/sh
set -e

# Ensure SQLite file exists if using sqlite
if [ "$DB_CONNECTION" = "sqlite" ] || [ -z "$DB_CONNECTION" ]; then
    mkdir -p /var/www/html/database
    if [ ! -f /var/www/html/database/database.sqlite ]; then
        touch /var/www/html/database/database.sqlite
    fi
    chown -R www-data:www-data /var/www/html/database
    chmod 775 /var/www/html/database
    chmod 664 /var/www/html/database/database.sqlite
fi

# Ensure storage directories exist and are writable
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/framework/cache
mkdir -p /var/www/html/storage/app/public
mkdir -p /var/www/html/bootstrap/cache

chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Create storage symlink if APP_KEY is provided
if [ -n "$APP_KEY" ]; then
    php artisan storage:link --force || true
    php artisan optimize:clear
fi

exec "$@"
