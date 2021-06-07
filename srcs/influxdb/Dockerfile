FROM alpine:3.12.3

LABEL maintainer ctragula@student.school-21.ru

RUN apk update && apk upgrade
RUN apk add  --no-cache influxdb
RUN apk add supervisor
RUN	apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/community/ --allow-untrusted
RUN mkdir -p etc/telegraf
RUN telegraf --input-filter docker --output-filter influxdb config > etc/telegraf/telegraf.conf
COPY supervisord.conf /etc/


EXPOSE 8086

CMD supervisord
