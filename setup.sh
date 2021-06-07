#!/bin/sh

minikube start --vm-driver=virtualbox

eval $(minikube docker-env)
minikube addons enable metallb
docker pull metallb/speaker:v0.8.2
docker pull metallb/controller:v0.8.2

#volumes and configmap
kubectl apply -f srcs/configmap.yaml
kubectl apply -f srcs/volumes/db_volume.yaml
kubectl apply -f srcs/volumes/wp_volume.yaml
kubectl apply -f srcs/volumes/influx_volume.yaml

#docker containers
docker build srcs/nginx/ -t nginx_image
docker build srcs/mysql/ -t mysql_image
docker build srcs/wp/ -t wp_image
docker build srcs/pma/ -t pma_image
docker build srcs/ftps/ -t ftps_image
docker build srcs/grafana/ -t grafana_image
docker build srcs/influxdb/ -t influxdb_image

kubectl apply -f srcs/nginx.yaml
kubectl apply -f srcs/mysql.yaml
kubectl apply -f srcs/wp.yaml
kubectl apply -f srcs/pma.yaml
kubectl apply -f srcs/ftps.yaml
kubectl apply -f srcs/influxdb.yaml
kubectl apply -f srcs/grafana.yaml
