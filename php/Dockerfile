FROM php:7.3-apache
RUN docker-php-ext-install pdo_mysql mysqli mbstring

RUN apt-get update
RUN apt-get install msmtp msmtp-mta wget unzip -y
RUN rm -rf /var/lib/apt/lists/*
COPY ./php/msmtprc /etc/msmtprc
RUN chown www-data:www-data /etc/msmtprc
RUN chmod 600 /etc/msmtprc

RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-all-languages.zip
RUN unzip phpMyAdmin-4.9.2-all-languages.zip
RUN rm phpMyAdmin-4.9.2-all-languages.zip
RUN mv phpMyAdmin-4.9.2-all-languages /var/www/html/net.phpmyadmin
RUN chown -R www-data:www-data /var/www/html/net.phpmyadmin
COPY ./phpmyadmin/config.inc.php /var/www/html/net.phpmyadmin/config.inc.php
RUN chown -R www-data:www-data /var/www/html/net.phpmyadmin/config.inc.php
RUN chmod 660 /var/www/html/net.phpmyadmin/config.inc.php


