# Use the official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy the application code to the web server directory
COPY . /var/www/html/

# Install required PHP extensions (e.g., mysqli, pdo_mysql, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set proper permissions for the web files
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite (optional but often needed)
RUN a2enmod rewrite

# Expose port 80 for HTTP
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
