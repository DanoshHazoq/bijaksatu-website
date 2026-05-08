FROM richarvey/nginx-php-fpm:latest

COPY . /var/www/html

COPY nginx-site.conf /etc/nginx/sites-enabled/default.conf

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN php artisan optimize:clear

RUN chmod -R 775 storage bootstrap/cache