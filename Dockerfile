FROM php:8.2.0-fpm

# Set timezone
RUN apt-get update && apt-get install -y tzdata
RUN ln -snf /usr/share/zoneinfo/Asia/Manila /etc/localtime && echo "Asia/Manila" > /etc/timezone

# Install dependencies
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl

# Install PHP extensions
RUN docker-php-ext-install -j$(nproc) pdo_mysql zip pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html

# Install dependencies
RUN composer install --no-interaction --no-ansi --no-scripts --verbose

# Copy everything else
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data . && \
    chmod -R 775 storage && \
    chmod -R 775 bootstrap/cache

# Expose port 9000 for PHP-FPM
EXPOSE 9000