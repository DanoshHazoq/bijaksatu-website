FROM richarvey/nginx-php-fpm:latest

ENV WEBROOT /var/www/html/public

COPY . /var/www/html

WORKDIR /var/www/html

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

RUN chmod -R 775 storage bootstrap/cache