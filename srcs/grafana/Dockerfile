FROM alpine:3.12.3

LABEL maintainer ctragula@student.school-21.ru

RUN apk update && apk upgrade
RUN apk add grafana --repository=http://dl-cdn.alpinelinux.org/alpine/edge/community/
RUN apk add supervisor

COPY	supervisord.conf	/etc/supervisord.conf
COPY grafana.db usr/share/grafana/data/
CMD supervisord
