FROM fedora:rawhide

ENV PHPRC /etc/php.ini

RUN dnf install -y nginx
RUN dnf install -y php

COPY ./app /static
COPY ./vendor /vendor
COPY ./config/nginx.conf /etc/nginx/nginx.conf
COPY ./config/www.conf /etc/php-fpm.d/www.conf
COPY ./config/php.ini /etc/php.ini

RUN mkdir /run/php-fpm

ENTRYPOINT nginx && php-fpm -F
