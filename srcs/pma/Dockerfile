# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: ctragula <ctragula@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/24 21:17:03 by kemaritsu         #+#    #+#              #
#    Updated: 2021/04/07 17:36:24 by ctragula         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.12.3

LABEL maintainer ctragula@student.school-21.ru

RUN apk update && apk upgrade
RUN apk add --no-cache nginx openssl
RUN apk add php7-fpm php7-common php7-iconv php7-json php7-gd php7-curl \
    php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo php7-pdo_mysql \
    php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap \
    php7-ctype php7-dom php7-mbstring  php7-session
RUN apk add supervisor

COPY pma_install.sh tmp/pma_install.sh
RUN chmod 755 tmp/pma_install.sh
RUN tmp/pma_install.sh && rm tmp/pma_install.sh
RUN mkdir /var/www/phpmyadmin/tmp && chmod 777 /var/www/phpmyadmin/tmp
RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj \
"/C=RU/ST=Tatarstan/L=Kazan/O=School21/OU=Student/CN=ctragula/emailAddress=ctragula@student.21-school.ru"  \
-keyout /etc/ssl/private/nginx-ss.key -out /etc/ssl/certs/nginx-ss.crt

RUN mkdir -p /run/nginx/
COPY default.conf /etc/nginx/conf.d/
COPY config.inc.php /var/www/phpmyadmin/

COPY supervisord.conf /etc/

EXPOSE 5000

CMD supervisord
