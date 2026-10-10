#!/bin/bash
echo "Setting up database..."

set -eux

# Run migrations
php artisan migrate --force

# Seed the database
php artisan db:seed --force
