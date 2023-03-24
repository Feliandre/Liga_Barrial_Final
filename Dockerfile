FROM php:7.4-apache

# Copiar los archivos composer.json y composer.lock a la imagen
COPY composer.json composer.lock /var/www/html/

# Cambiar el directorio de trabajo a la carpeta de la aplicación Laravel
WORKDIR /var/www/html

# Ejecutar el comando para instalar las dependencias de Laravel
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        && \
    docker-php-ext-install zip && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    php composer.phar install --no-dev && \
    chown -R www-data:www-data /var/www/html
    
# esto no creo que va

RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan optimize

CMD php artisan serve --host 0.0.0.0 --port $PORT