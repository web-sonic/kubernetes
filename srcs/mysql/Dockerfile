# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: ctragula <ctragula@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/22 15:55:09 by kemaritsu         #+#    #+#              #
#    Updated: 2021/04/18 13:31:14 by ctragula         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.12.3

LABEL maintainer ctragula@student.school-21.ru

RUN apk update && apk upgrade
RUN apk add mysql mysql-client
RUN apk add supervisor
COPY mysql.sh /tmp/mysql.sh
COPY my.cnf /etc/mysql/my.cnf
COPY db.sql tmp/db.sql
RUN chmod 755 /tmp/mysql.sh
RUN mkdir -p /run/mysqld
COPY supervisord.conf /etc/supervisord.conf
EXPOSE 3306
CMD tmp/mysql.sh

