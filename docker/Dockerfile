FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql

# COPY ../src/ /var/www/html/
WORKDIR /var/www/html
CMD [ "php", "../src/index.php" ]
