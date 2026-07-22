FROM php:8.3-apache

# 1. Aktifkan modul mod_rewrite Apache
RUN a2enmod rewrite

# 2. Izinkan Apache membaca file .htaccess (AllowOverride All)
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# 3. Copy source code ke direktori web
COPY . /var/www/html/

# 4. Atur permission
RUN chown -R www-data:www-data /var/www/html
