# Use the official PHP image as the base
FROM php:8.1-cli

# Install system dependencies for Laravel (like Composer and extensions)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www

# Copy your Laravel project into the container
COPY . .

# Install Laravel dependencies
RUN composer install

# Expose the port PHP will run on
EXPOSE 8000

# Run the Laravel application using PHP's built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
