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