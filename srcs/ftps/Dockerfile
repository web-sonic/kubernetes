# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: ctragula <ctragula@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/16 11:43:00 by ctragula          #+#    #+#              #
#    Updated: 2021/04/18 10:29:36 by ctragula         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM alpine:3.12.3

LABEL maintainer ctragula@student.school-21.ru

RUN		apk update && apk upgrade
RUN		apk add --no-cache vsftpd supervisor openssl

COPY	vsftpd.conf			/etc/vsftpd/
COPY	supervisord.conf	/etc/supervisord.conf
RUN		openssl req -x509 -newkey rsa:4096 -keyout key.pem -out cert.pem -days 365 -subj '/CN=localhost' -nodes

RUN		mkdir /var/ctragula
RUN		adduser -D ctragula && echo "ctragula:pass" | chpasswd
RUN		chmod 777 /var/ctragula

EXPOSE	21 30021

CMD supervisord
