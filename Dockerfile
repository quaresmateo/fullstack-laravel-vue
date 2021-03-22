FROM php:7.4-fpm-alpine as backend

WORKDIR /var/www/html

ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo pdo_mysql gd zip exif

RUN docker-php-ext-install mysqli pdo pdo_mysql exif

# develop stage
FROM node:alpine as frontend
WORKDIR /app
ONBUILD COPY --chown=app:app ./frontend/package*.json .
RUN npm install
COPY . .


