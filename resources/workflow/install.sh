#!/bin/env/bash

echo "installation script"
echo "installing php libraries"
composer install

echo "installing javascript dependices "
npm upgrade

php artisan key:generate

