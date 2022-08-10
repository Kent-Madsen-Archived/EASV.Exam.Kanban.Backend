#!/bin/env/bash
echo "installation script"
echo "installing php libraries"
composer install -q --no-ansi --no-interaction --no-scripts --no-progress --prefer-dist

echo "generating key"
php artisan key:generate

