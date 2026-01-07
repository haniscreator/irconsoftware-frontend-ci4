FROM php:8.1-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && rm -r /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install intl zip mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy application configuration for Apache
# Copying custom apache config if we had one, but strictly for CI4, we need to point DocumentRoot to public.
# We can do this by modifying the default site config.
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions for writable directory
RUN chown -R www-data:www-data writable/
RUN chmod -R 775 writable/

EXPOSE 80
