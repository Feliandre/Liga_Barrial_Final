FROM railwayapp/php
WORKDIR /app
COPY . /app
RUN composer install --no-dev
RUN php artisan optimize
CMD php artisan serve --host 0.0.0.0 --port $PORT