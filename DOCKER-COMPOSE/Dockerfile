# Image de base
FROM php:latest

# Dossier de travail pour les commandes suivantes
WORKDIR /var/www/html

# Installation initiale de modules apache et php
RUN apt install -y apache2 \
	curl \
	php \
	php-common \
	php-cli \
	php-fpm \
	php-json \
	php-pdo \
	php-mysql \
	php-zip \
	php-gd \
	php-mbstring \
	php-curl \
	php-xml \
	php-pear \
	php-bcmath \
	libapache2-mod-php

#RUN a2enmod headers deflate expires rewrite
RUN docker-php-ext-install mysqli


EXPOSE 8080

# Redémarrage d'Apache pour prendre en compte ces modifications
RUN systemctl restart apache2

