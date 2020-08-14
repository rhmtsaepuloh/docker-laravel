FROM php:7.2-fpm-alpine

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data: /var/www/html
RUN chmod -R 777 /var/www/html/