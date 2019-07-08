ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; \
    apk upgrade;

WORKDIR /tmp
COPY . .

RUN docker-php-ext-install mysqli
