# ================================================
# ETAPA BASE
# ================================================
FROM php:8.2 AS base

ENV src=src

RUN apt-get update -y && apt-get install -y \
    openssl \
    zip \
    unzip \
    git \
    nodejs \
    npm \
    libonig-dev \
    libzip-dev \
    libpng-dev

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN docker-php-ext-install pdo pdo_mysql mbstring zip

RUN groupadd -g 1000 appuser && \
    useradd -u 1000 -g appuser -m appuser && \
    usermod -aG www-data appuser

USER appuser

WORKDIR /var/www/html

# ================================================
# ETAPA DE DESARROLLO
# ================================================
FROM base AS dev

USER appuser

COPY --chown=appuser:appuser ${src}/composer.* ./
COPY --chown=appuser:appuser ${src}/package*.json ./
# COPY --chown=appuser:appuser ./.env.example ./.env.example

RUN composer install --no-interaction --no-scripts && \
    npm install

COPY --chown=appuser:appuser docker/entrypoint.sh /app-entrypoint.sh
RUN chmod +x /app-entrypoint.sh
ENTRYPOINT ["/app-entrypoint.sh"]