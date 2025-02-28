# Dockerfile
FROM php:8.4-cli

# Install dependensi
RUN apt-get update && apt-get install -y \
  curl \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  unzip \
  libicu-dev \
  zlib1g-dev \
  libzip-dev

# Install ekstensi PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip

# Install Node.js dan npm
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
  apt-get install -y nodejs

# Set working directory
WORKDIR /app

# Copy file project
COPY . .

# Expose port
EXPOSE 8001

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]
