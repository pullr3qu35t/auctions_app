# Set the base image for subsequent instructions
FROM php:7.4

# Update packages
RUN apt-get update

# Install PHP and composer dependencies
RUN apt-get install -qq git curl ftp libonig-dev libmcrypt-dev libjpeg-dev libpng-dev libfreetype6-dev libbz2-dev libzip-dev zip wget ncftp

# Clear out the local repository of retrieved package files
RUN apt-get clean

# Install node
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash
RUN apt-get install -y nodejs

# Install needed extensions
# Here you can install any other extension that you need during the test and deployment process
RUN docker-php-ext-install mbstring pdo_mysql zip

# Install Composer
RUN curl --silent --show-error "https://getcomposer.org/installer" | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP Code Sniffer Globally
# Add local and global vendor bin to PATH.
ENV PATH ./vendor/bin:/composer/vendor/bin:/root/.composer/vendor/bin:/usr/local/bin:$PATH

# Install PHP_CodeSniffer
RUN composer global require "squizlabs/php_codesniffer=*"
