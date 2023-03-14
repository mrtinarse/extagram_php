FROM php:fpm
RUN docker-php-ext-install mysqli
RUN mkdir -p /var/www/html/upload/images
RUN chown 101:101 /var/www/html/upload/images
USER 101