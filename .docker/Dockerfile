FROM php:7.4.3-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update && \
    apt-get install -y \
    libonig-dev\
    git \
    zip \
    curl \
    sudo \
    unzip \
    graphviz \
    libicu-dev \
    libzip-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev \
    default-mysql-client \
    g++ && \
    docker-php-ext-install \
    bz2 \
    intl \
    iconv \
    bcmath \
    opcache \
    calendar \
    mbstring \
    pdo_mysql \
    zip && \
    a2enmod rewrite headers && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    useradd -ms /bin/bash the_user -g www-data && \
    chown the_user:www-data -R /var/www/html 
    
USER the_user
WORKDIR /var/www/html



EXPOSE 80