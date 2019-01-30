#!/bin/bash

echo Uploading Application Container
docker-compose up -d

echo Copying the configuration example file
docker exec -it delivery-app cp .env.example .env

echo Install dependencies
docker exec -it delivery-app composer install

echo Generate key
docker exec -it delivery-app php artisan key:generate

echo Make migrations
docker exec -it delivery-app php artisan migrate

echo Make seed
docker exec -it delivery-app php artisan db:seed

echo Informations of containers
docker ps -a