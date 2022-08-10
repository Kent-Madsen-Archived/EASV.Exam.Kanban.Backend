#!/bin/env/bash

bash ./resources/workflow/setup.sh

bash ./resources/workflow/moveHome.sh
bash ./resources/workflow/install.sh

php artisan test