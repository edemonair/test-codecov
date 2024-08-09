FROM php:8.3-cli-alpine

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN set -eux \
    && apk update \
    && apk upgrade \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS bash curl wget \
    && chmod +x /usr/local/bin/install-php-extensions \
    && install-php-extensions mbstring

ENV COMPOSER_ALLOW_SUPERUSER="1" \
    COMPOSER_MEMORY_LIMIT="-1" \
    COMPOSER_CACHE_DIR="/.composer_cache" \
    COMPOSER_HOME="/.composer"

RUN install-php-extensions @composer

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \
    && apk add --update linux-headers \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY . /app

WORKDIR /app

CMD [ "php", "./src/index.php" ]