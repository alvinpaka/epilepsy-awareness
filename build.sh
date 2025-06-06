#!/usr/bin/env bash
# exit on error
set -o errexit

# Install dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Generate app key
php artisan key:generate

# Optimize configuration loading
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Install npm dependencies and build assets
npm install
npm run build