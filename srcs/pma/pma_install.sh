#!/bin/sh

cd /var/www/
wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.tar.gz
tar zxvf phpMyAdmin-5.1.0-all-languages.tar.gz
rm phpMyAdmin-5.1.0-all-languages.tar.gz
mv phpMyAdmin-5.1.0-all-languages phpmyadmin

