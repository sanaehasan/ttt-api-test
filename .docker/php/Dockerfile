FROM php:7.4-fpm

WORKDIR /var/www




RUN docker-php-ext-install opcache

RUN docker-php-ext-install exif
RUN docker-php-ext-configure exif --enable-exif
# requires libonig-dev


# requires libpng-dev libjpeg62-turbo-dev libfreetype6-dev


RUN echo "opcache.enable=1" > /usr/local/etc/php/conf.d/opcache.ini
RUN printf "\n" | pecl install apcu mongodb
RUN docker-php-ext-enable apcu mongodb

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && mv composer.phar /usr/local/bin/composer

EXPOSE 9000
CMD ["php-fpm"]
