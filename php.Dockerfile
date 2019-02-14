# from php:7.2-apache
FROM php
WORKDIR /var/www/html

# Install PDO for MySQL
RUN docker-php-ext-install pdo_mysql

# Run development server
CMD [ "sh", "-c", "php -S 0.0.0.0:80" ]