FROM php:8.2-apache

# Instalamos las extensiones necesarias para conectar con MySQL
# IMPORTANTE: La imagen base NO trae drivers de MySQL por defecto, hay que instalarlos así:
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY index.php /var/www/html/