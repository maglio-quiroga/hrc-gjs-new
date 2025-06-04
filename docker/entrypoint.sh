#!/bin/bash
set -e

# Configuración inicial solo si no existe .env
if [ ! -f .env ]; then
    cp .env.example .env
    php artisan key:generate --no-interaction --ansi
    echo "Created .env file and generated app key"
fi

# Instalar dependencias si no existen
if [ ! -d "vendor" ]; then
    composer install --no-interaction --no-scripts
    echo "Installed Composer dependencies"
fi

if [ ! -d "node_modules" ]; then
    npm install
    echo "Installed Node.js dependencies"
fi

# Ejecutar migraciones si DB_CONNECTION está configurada
if [ -n "$DB_CONNECTION" ]; then
    php artisan migrate --force --ansi
    echo "Executed database migrations"
fi

# Iniciar servidores según entorno
if [ "$APP_ENV" = "production" ]; then
    npm run build
    exec php artisan serve --host=0.0.0.0 --port=${APP_PORT:-8000}
else
    # Desarrollo: Iniciar Vite en background y PHP en foreground
    npm run build
    npm run dev -- --host 0.0.0.0 --port ${VITE_PORT:-5173} &
    exec php artisan serve --host=0.0.0.0 --port=${APP_PORT:-8000}
fi