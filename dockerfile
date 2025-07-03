FROM php:8.2-cli

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    unzip zip git curl libzip-dev && \
    docker-php-ext-install zip

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Installer Xdebug pour coverage
RUN pecl install xdebug && docker-php-ext-enable xdebug
