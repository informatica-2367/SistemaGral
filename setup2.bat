@echo off
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
