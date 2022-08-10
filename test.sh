#!/bin/env/bash

bash ./resources/workflow/setup.sh

bash ./resources/workflow/install.sh

cd code

echo "$PWD"
php artisan test