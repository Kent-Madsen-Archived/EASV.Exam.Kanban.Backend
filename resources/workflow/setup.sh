#!/bin/env/bash

cp ./resources/configuration/.env.example ./code/.env.example
cp ./resources/configuration/phpunit.xml ./code/phpunit.xml

cd ./code

composer install
npm upgrade