#!/bin/env/bash

echo "setup of configuration files"
cp ./resources/configuration/.env.example ./code/.env

cp ./resources/configuration/phpunit.xml ./code/phpunit.xml