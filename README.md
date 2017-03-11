# service-skeleton
Microservice skeleton based on yii2 framework.

---
# Docker installation
**Before installation**

1. Read about [docker] (https://docker.com). You should be familiar with basic concepts before starting.

# Installation
1. Follow [docker install] (https://docs.docker.com/engine/installation/) instruction
2. Install composer globally (https://getcomposer.org/download/)
3. Run the following command from the project root `docker/start.sh`

# Docker FAQ
**How do i run yii console command?**

1. `docker-compose exec app console/yii help`
2. `docker-compose exec app console/yii migrate`
3. `docker-compose exec app console/yii migrate/down`
etc.

**How to connect to the application database with my workbench?**

MySQL is available on `localhost`, port `33061`. User - `api_dbu`, password - `api_pass`.
