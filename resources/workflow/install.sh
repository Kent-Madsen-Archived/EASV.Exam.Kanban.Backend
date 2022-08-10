#!/bin/env/bash

cd code

echo "installation script"
echo "installing php libraries"
composer install -q --no-ansi --no-interaction --no-scripts --no-progress

echo "generating key"
php artisan key:generate

