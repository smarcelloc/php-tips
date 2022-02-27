FROM php:7.4-apache

ENV USER=docker
ENV UID=1000
ENV WORKDIR=/var/www/html

# Enable .htaccess
RUN a2enmod rewrite

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

# Create user in Docker
RUN useradd -G www-data,root -u ${UID} -d /home/${USER} ${USER}

# Install system dependencies
RUN apt-get update
RUN apt-get install -y libzip-dev zip unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions PHP (PERL)
RUN docker-php-ext-install pdo_mysql zip

# Set working directory and user
WORKDIR ${WORKDIR}
USER ${USER}