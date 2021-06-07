# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: ctragula <ctragula@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/17 15:19:48 by ctragula          #+#    #+#              #
#    Updated: 2021/04/18 12:03:06 by ctragula         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.12.3

LABEL maintainer ctragula@student.school-21.ru

RUN apk update && apk upgrade
RUN apk add --no-cache nginx 
RUN apk add openssl openssh
RUN apk add supervisor
EXPOSE 80 443 22
COPY index.html /var/www
COPY default.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisord.conf
RUN mkdir -p run/nginx/
RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj \
"/C=RU/ST=Tatarstan/L=Kazan/O=School21/OU=Student/CN=ctragula/emailAddress=ctragula@student.21-school.ru"  \
-keyout /etc/ssl/private/nginx-ss.key -out /etc/ssl/certs/nginx-ss.crt
CMD supervisord
