#!/bin/bash
set -e

echo "Starting VIAJE Car Rental Production Deployment..."

# 1. Enter maintenance mode with a bypass secret
php artisan down --secret="viaje-admin-bypass" || true

# 2. Install production PHP dependencies
composer install --no-dev --optimize-autoloader --no-interaction

# 3. Migrate database with force flag
php artisan migrate --force

# 4. Rebuild production caches
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# 5. Compile production frontend bundle
npm run build

# 6. Restart background queue workers
php artisan queue:restart

# 7. Bring application back online
php artisan up

echo "Deployment complete! Application is live and optimized."
