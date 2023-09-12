# Utiliza una imagen base de PHP con el servidor web Apache
FROM php:7.4-apache

# Copia los archivos PHP de tu aplicación al directorio del servidor web
COPY ./index.php /var/www/html

# Expone el puerto 80 (puerto predeterminado para HTTP)
EXPOSE 80
