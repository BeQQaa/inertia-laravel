FROM php:8.1-fpm

RUN apt-get update && apt-get install -y openssl git unzip libbz2-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chmod +x /usr/local/bin/composer

RUN docker-php-ext-install bcmath
RUN docker-php-ext-install bz2
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

RUN docker-php-ext-enable pdo
RUN docker-php-ext-enable pdo_mysql
RUN docker-php-ext-enable bcmath
RUN docker-php-ext-enable bz2

WORKDIR /var/www/html

RUN mkdir /var/cache/prod
RUN mkdir /var/sessions
RUN touch /var/log/fpm-php.log

RUN chown -R www-data:www-data /var/cache
RUN chown -R www-data:www-data /var/sessions
RUN chmod -R 777 /var/cache
RUN chmod -R 777 /var/log
RUN chmod -R 777 /var/sessions
