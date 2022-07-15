FROM php:8.1.7-fpm-alpine

WORKDIR /var/www

RUN apk --update add wget \
    curl \
    build-base \
    libmemcached \
    libmcrypt \
    libxml2 \
    pcre \
    zlib \
    autoconf \
    cyrus-sasl \
    libgsasl \
    oniguruma \
    openssl \
    libpq

RUN docker-php-ext-install mysqli pdo pdo_mysql pcntl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN rm /var/cache/apk/*
