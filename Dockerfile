FROM railwayapp/python
RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zlib1g-dev \
    libzip-dev \
    zip \
    git \
    curl
RUN docker-php-ext-install pdo pdo_pgsql zip bcmath gd
RUN pecl install mcrypt-1.0.2 && docker-php-ext-enable mcrypt
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . /app
RUN composer install --no-dev
RUN php artisan optimize
CMD php artisan serve --host 0.0.0.0 --port $PORT