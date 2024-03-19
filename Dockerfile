FROM php:7.4-apache

# Instalar las extensiones PHP necesarias
RUN docker-php-ext-install mysqli

# Copiar el archivo de configuración de la aplicación
COPY ./config.php /opt/lampp/htdocs/app/config.php

# Establecer el directorio de trabajo
WORKDIR /opt/lampp/htdocs

# Exponer el puerto de Apache
EXPOSE 80

# Iniciar Apache
CMD ["/opt/lampp/lampp", "startapache"]
