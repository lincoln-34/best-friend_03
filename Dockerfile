FROM php:8.2-apache

# Aktifkan mod rewrite (aman buat PHP)
RUN a2enmod rewrite

# Copy semua file ke folder web
COPY . /var/www/html/

# Permission (biar nggak error)
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
