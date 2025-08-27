FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    curl \
    git \
    && docker-php-ext-install pdo_pgsql sockets pcntl

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-autoloader

# Copiar resto dos arquivos
COPY . .

# Finalizar autoloader
RUN composer dump-autoload --optimize

# Criar diretórios e definir permissões ANTES de trocar de usuário
RUN mkdir -p storage/framework/views \
    storage/framework/cache \
    storage/framework/sessions \
    storage/logs \
    bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

EXPOSE 8080

USER www-data

CMD php artisan serve --host=0.0.0.0 --port=8080