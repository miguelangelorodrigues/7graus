FROM composer as base

WORKDIR /usr/src/7graus

COPY ./composer.json /usr/src/7graus/composer.json

RUN composer install

FROM php:7.4-cli

WORKDIR /usr/src/7graus

COPY --from=base /usr/src/7graus/vendor /usr/src/7graus/vendor

COPY ./docker /usr/src/7graus/docker
COPY ./src /usr/src/7graus/src
COPY ./tests /usr/src/7graus/tests

CMD vendor/bin/phpunit tests