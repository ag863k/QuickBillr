#!/usr/bin/env bash
# exit on error
set -o errexit

# Install PHP dependencies
echo "Installing PHP dependencies..."
composer install --no-interaction --no-dev --optimize-autoloader

# Install Node.js dependencies
echo "Installing Node.js dependencies..."
npm ci

# Build assets
echo "Building assets..."
npm run build

# Generate application key if not set
echo "Generating application key..."
php artisan key:generate --force

# Clear and cache config
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Link storage
echo "Setting up storage..."
php artisan storage:link

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

echo "Build process completed successfully!"
