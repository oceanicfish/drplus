FROM php:7.1-fpm

# turn on 'pdo' and 'pdo_mysql' extension, otherwise, laravel will give us a 'could no find driver' exeption.
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /usr/laravel

EXPOSE 8001

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8001"]
