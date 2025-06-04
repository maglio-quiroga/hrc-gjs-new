# HRC - Página web Hospital Regional de Copiapó 

## Entorno de Desarrollo con Docker

### Requisitos Previos
- Docker y Docker Compose instalados
- Sistema operativo:
  - Windows: Docker Desktop
  - Linux: Consultar documentación oficial de Docker
  - macOS: Docker Desktop

### Instalación en Windows
1. Instalar Docker Desktop:
   - Descargar desde: https://www.docker.com/products/docker-desktop/
   - Seguir el instalador
   - Asegurarse de tener WSL 2 habilitado
   - Reiniciar el sistema después de la instalación

2. Configurar Docker Desktop:
   - Abrir Docker Desktop
   - Ir a Settings > Resources > WSL Integration
   - Habilitar la integración con WSL 2
   - Asegurarse de tener suficiente memoria asignada (mínimo 4GB)

3. Clonar el repositorio:
```bash
git clone https://github.com/jakemanray/hrc.git
cd hrc
```

4. Copiar archivo de configuración:
```bash
cp .env.example .env
```

5. Iniciar los servicios:
```bash
docker-compose up -d
```

El script de entrada (entrypoint.sh) manejará automáticamente:
- Generación de la clave de aplicación
- Instalación de dependencias PHP y Node.js
- Ejecución de migraciones de base de datos
- Inicio de los servidores (Vite para desarrollo y PHP para la API)

7. Acceder a la aplicación:
   - App: http://localhost:8000
   - PhpMyAdmin: http://localhost:8080

### Características del Entorno de Desarrollo
- Hot reloading para assets (Vite)
- Desarrollo en tiempo real
- Montaje de volumen del directorio `src`
- Logs accesibles:
  - `docker-compose logs -f app` para logs de la aplicación

### Comandos Útiles
- Parar los servicios: `docker-compose down`
- Reiniciar los servicios: `docker-compose restart`
- Ver logs en tiempo real: `docker-compose logs -f`
- Ejecutar comandos en el contenedor:
  ```bash
  docker-compose exec app php artisan ...
  docker-compose exec app npm run ...
  ```

## Estructura del Proyecto
```
src/
├── app/              # Lógica de negocio y controladores
├── bootstrap/        # Configuración inicial
├── config/          # Archivos de configuración
├── database/        # Migraciones y seeders
├── public/          # Archivos públicos
├── resources/       # Vistas y assets
├── routes/          # Definición de rutas
└── tests/          # Tests unitarios y funcionales
```

<!-- ## Licencia
Por definir -->

## Versiones
- Laravel 11.9
- PHP 8.2
- MySQL 8.0
- Node.js 22.x
- Vite 5.0
- TailwindCSS 4.1.6
- Bootstrap 5.3.5
- Alpine.js 3.14.8

## Variables de Entorno

### Variables de Aplicación
- `APP_KEY`: Clave de encriptación de la aplicación (se genera automáticamente)
- `APP_NAME`: Nombre de la aplicación
- `APP_ENV`: Entorno de la aplicación (`local`, `production`)
- `APP_DEBUG`: Habilitar/deshabilitar modo debug (`true`/`false`)
- `APP_URL`: URL base de la aplicación
- `APP_PORT`: Puerto de la aplicación (por defecto: 8000)

### Variables de Base de Datos
- `DB_CONNECTION`: Driver de base de datos (mysql)
- `DB_HOST`: Host de la base de datos (mysql)
- `DB_PORT`: Puerto de la base de datos (3306)
- `DB_DATABASE`: Nombre de la base de datos (hrc)
- `DB_USERNAME`: Usuario de la base de datos
- `DB_PASSWORD`: Contraseña de la base de datos

### Variables de Vite
- `VITE_APP_NAME`: Nombre de la aplicación para Vite
- `VITE_PORT`: Puerto de Vite para hot reloading (5173)

### Variables de Docker Compose (Avanzado)
#### MySQL
- `MYSQL_DATABASE`: Nombre de la base de datos
- `MYSQL_PORT`: Puerto de MySQL
- `MYSQL_USER`: Usuario de MySQL
- `MYSQL_PASSWORD`: Contraseña de MySQL
- `MYSQL_ROOT_PASSWORD`: Contraseña del usuario root de MySQL

#### PHPMyAdmin
- `PMA_HOST`: Host de la base de datos
- `PMA_PORT`: Puerto de la base de datos
- `PMA_USER`: Usuario para PHPMyAdmin
- `PMA_PASSWORD`: Contraseña para PHPMyAdmin