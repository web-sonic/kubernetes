#!/bin/sh

mysql_install_db --user=root
mysqld & sleep 5
mysql < tmp/db.sql
pkill mysqld && sleep 5; /usr/bin/supervisord
