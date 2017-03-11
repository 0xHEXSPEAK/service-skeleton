#!/usr/bin/env bash

cp ./.env.dist ./.env
docker-compose build
docker-compose up -d
composer install --prefer-dist --optimize-autoloader --ignore-platform-reqs

docker-compose run app console/yii app/setup --interactive=0


