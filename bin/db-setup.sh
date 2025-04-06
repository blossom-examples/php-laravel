#!/bin/bash
echo "Setting up database..."
echo "DATABASE_URL: $DATABASE_URL"

set -eux

# Run migrations
php artisan migrate --force

# Seed the database
php artisan db:seed --force
