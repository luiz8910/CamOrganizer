FROM php:8.1-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libzip-dev \
    libgd-dev
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-external-gd
RUN docker-php-ext-install gd

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/tmp --filename=composer

USER root

# Copy application files and set ownership and permissions
COPY --chown=www:www . /var/www
RUN mkdir -p /var/www/vendor && \
    chown -R www:www /var/www && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/vendor



RUN mv /tmp/composer /usr/bin/composer

#RUN mkdir /var/www/vendor
#RUN chmod -R 775  /var/www/vendor/
#RUN chown -R $USER:$USER /var/www/vendor/


USER www

RUN git config --global --add safe.directory /var/www

# Set correct permissions for Laravel
#RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

RUN composer clear-cache

RUN composer install

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]