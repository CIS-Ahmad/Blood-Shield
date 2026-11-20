
FROM php:8.4-cli-trixie

# Install PHP extensions and system dependencies
RUN apt-get update && apt-get install -y \
    git unzip \
    libcurl4-openssl-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    libzip-dev \
    && docker-php-ext-install \
    curl dom mbstring pdo_sqlite xml zip intl bcmath \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install Node.js and npm
COPY --from=node:22-bookworm-slim /usr/local/bin/node /usr/local/bin/node
COPY --from=node:22-bookworm-slim /usr/local/lib/node_modules /usr/local/lib/node_modules

RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm

WORKDIR /var/www/html

# Copy application
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Build frontend assets
RUN npm ci && npm run build

# Prepare Laravel directories
RUN mkdir -p storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    bootstrap/cache \
    && touch database/database.sqlite \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 10000

# Start Laravel
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]
