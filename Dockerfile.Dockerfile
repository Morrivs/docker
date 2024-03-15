FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    libapache2-mod-php \
    php-mysqli

COPY ./config.php /app/config.php

CMD ["apache2-foreground"]
