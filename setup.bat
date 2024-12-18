@echo off
:: Verifica si la carpeta actual se llama "SistemaGral"
setlocal
for %%F in ("%cd%") do set "currentFolderName=%%~nF"

if /i "%currentFolderName%" neq "SistemaGral" (
    echo Error: Este script debe ejecutarse dentro de la carpeta "SistemaGral".
    pause
    exit /b 1
)

echo Verificado: Carpeta actual es "SistemaGral".
echo.

:: Copiar .env.example a .env
if exist .env (
    echo El archivo .env ya existe.
) else (
    echo Copiando .env.example a .env...
    copy .env.example .env >nul
    if errorlevel 1 (
        echo Error al copiar el archivo .env.example.
        pause
        exit /b 1
    )
)

:: Instalar dependencias con Composer
echo Instalando dependencias con Composer...
composer install
if errorlevel 1 (
    echo Error al ejecutar Composer.
    pause
    exit /b 1
)

:: Generar clave de la aplicación
echo Generando clave para la aplicación...
php artisan key:generate
if errorlevel 1 (
    echo Error al generar la clave.
    pause
    exit /b 1
)

:: Ejecutar migraciones
echo Ejecutando migraciones...
php artisan migrate
if errorlevel 1 (
    echo Error al ejecutar migraciones.
    pause
    exit /b 1
)

:: Poblar base de datos con UserSeeder
echo Poblando base de datos con UserSeeder...
php artisan db:seed --class=UserSeeder
if errorlevel 1 (
    echo Error al ejecutar UserSeeder.
    pause
    exit /b 1
)

:: Iniciar el servidor
echo Iniciando el servidor...
php artisan serve
if errorlevel 1 (
    echo Error al iniciar el servidor.
    pause
    exit /b 1
)

echo.
echo Configuración completada exitosamente.
pause
