FROM php:7.4-apache

COPY ./phpscript /var/www/html

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

RUN chown -R www-data:www-data /var/www/html

RUN chmod -R 774 /var/www/html
EXPOSE 80
