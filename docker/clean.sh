#! /bin/bash
echo "----------------------------------"
df -h /
echo "----------------------------------"

CONTAINERS=$(docker ps -a | grep -v 'CONTAINER ID' | awk '{ print $1 }')
IMAGES=docker images --no-trunc | grep '<none>' | awk '{ print $3 }'
VOLUMES=$(docker volume ls | grep -v 'VOLUME NAME' | awk '{ print $2 }')

echo "STOPPING CONTAINERS..."
docker stop $CONTAINERS
echo "=================================="

echo "REMOVING CONTAINERS..."
docker rm $CONTAINERS
echo "=================================="

echo "Clean up dead and exited containers..."
docker ps --filter status=dead --filter status=exited -aq | xargs docker rm -v
echo "=================================="

echo "ROMOVING UNUSED IMAGES..."
docker rmi $IMAGES
echo "=================================="

echo "REMOVING VOLUMES..."
docker volume rm $VOLUMES
echo "=================================="

echo "JOB DONE"
echo "----------------------------------"
df -h /
echo "----------------------------------"
