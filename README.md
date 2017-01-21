# registryd-storage
simple micro service written as a helper for storing data from registryd client.

---
# Docker installation
**Before installation**

1. Read about [docker] (https://docker.com) and install it.
2. Then add `127.0.0.1` `service-storage.dev` to your `/ets/hosts` file.

# Installation
1. Follow [docker install] (https://docs.docker.com/engine/installation/) instruction
2. Copy `.env.dist` to `.env` in the project root
3. Run `docker-compose build`
4. Run `docker-compose up -d`
5. Run locally `composer install --prefer-dist --optimize-autoloader --ignore-platform-reqs`
6. Setup application with `docker-compose run app console/yii app/setup`
7. That's all - your application is accessible on `http://service-storage.dev`

# Docker FAQ
**How do i run yii console command?**

1. `docker-compose exec app console/yii help`
2. `docker-compose exec app console/yii migrate`
3. `docker-compose exec app console/yii migrate/down`
etc.

**How to connect to the application database with my workbench?**

MySQL is available on `service-storage.dev`, port `3306`. User - `api_dbu`, password - `api_pass`.
