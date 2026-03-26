FROM php:8.2-fpm

# Instalamos las extensiones pdo y pdo_mysql
RUN docker-php-ext-install pdo pdo_mysql
