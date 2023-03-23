FROM railwayapp/php:latest
WORKDIR /app
COPY . /app
RUN composer install --no-dev \
    apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql && \
    chmod -R 777 storage && \
    chmod -R 777 bootstrap/cache

CMD php artisan serve --host=0.0.0.0 --port=8080
EXPOSE 8080
