FROM php:8.2.11

# Set the working directory
WORKDIR /var/www/html

# Copy the PHP files to the working directory
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Start PHP server
CMD ["php", "-S", "0.0.0.0:80"]