FROM firethewall/mysql:v1

# Arguments
ARG user=leonardo
ARG uid=1000

COPY mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf

# Instalando extensões necessárias do PHP
FROM php:8.0-apache

# Arguments
ARG user=leonardo
ARG uid=1000

RUN rm -rf /var/www/html/project
RUN mkdir /var/www/html/project && mkdir /var/www/html/project/site && mkdir /var/www/html/project/api
COPY project.local.conf /etc/apache2/sites-available/project.local.conf
COPY limits-php.ini /usr/local/etc/php/conf.d/limits-php.ini
RUN a2ensite project.local.conf
RUN apt-get update && apt-get install -y --no-install-recommends \
    autoconf \
    build-essential \
    apt-utils \
    libjpeg-dev\ 
    zlib1g-dev \
    libzip-dev \
    unzip \
    zip \
    libmagick++-dev \
    libmagickwand-dev \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev && \
    apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


RUN docker-php-ext-install mysqli gd intl zip && a2enmod rewrite
# RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install -j$(nproc) gd
# RUN docker-php-ext-configure gd --with-jpeg
RUN docker-php-ext-enable gd
RUN service apache2 restart
EXPOSE 8060
EXPOSE 8061