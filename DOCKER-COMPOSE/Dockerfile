# Image de base
FROM php:latest

RUN a2enmod headers deflate expires rewrite 
EXPOSE 80

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Redémarrage d'Apache pour prendre en compte ces modifications
RUN service apache2 restart

WORKDIR /var/www/html

