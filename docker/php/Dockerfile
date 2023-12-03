FROM php:8.3-cli-alpine

COPY --from=composer:2.6.5 /usr/bin/composer /usr/bin/composer

RUN apk update && apk add --no-cache --virtual .build-deps autoconf g++ make unzip linux-headers
RUN pecl install xdebug && docker-php-ext-enable xdebug

WORKDIR /app