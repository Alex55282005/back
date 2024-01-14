FROM php:8.2-apache

RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-install mysqli

RUN apt-get update && apt-get upgrade -y && apt-get install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN /usr/sbin/a2enmod rewrite

COPY app.conf /etc/apache2/sites-enabled/000-default.conf

RUN chmod -R 777 /var/www/html

