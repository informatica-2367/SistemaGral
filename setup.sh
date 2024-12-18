#!/bin/bash

# Verifica si la carpeta actual se llama "SistemaGral"
currentFolderName=$(basename "$PWD")

if [[ "$currentFolderName" != "SistemaGral" ]]; then
    echo "Error: Este script debe ejecutarse dentro de la carpeta 'SistemaGral'."
    exit 1
fi

echo "Verificado: Carpeta actual es 'SistemaGral'."
echo

# Copiar .env.example a .env
if [[ -f .env ]]; then
    echo "El archivo .env ya existe."
else
    echo "Copiando .env.example a .env..."
    if cp .env.example .env; then
        echo "Archivo copiado correctamente."
    else
        echo "Error al copiar el archivo .env.example."
        exit 1
    fi
fi

# Instalar dependencias con Composer
echo "Instalando dependencias con Composer..."
if composer install; then
    echo "Dependencias instaladas correctamente."
else
    echo "Error al ejecutar Composer."
    exit 1
fi

# Generar clave de la aplicación
echo "Generando clave para la aplicación..."
if php artisan key:generate; then
    echo "Clave generada correctamente."
else
    echo "Error al generar la clave."
    exit 1
fi

# Ejecutar migraciones
echo "Ejecutando migraciones..."
if php artisan migrate; then
    echo "Migraciones ejecutadas correctamente."
else
    echo "Error al ejecutar migraciones."
    exit 1
fi

# Poblar base de datos con UserSeeder
echo "Poblando base de datos con UserSeeder..."
if php artisan db:seed --class=UserSeeder; then
    echo "Base de datos poblada correctamente."
else
    echo "Error al ejecutar UserSeeder."
    exit 1
fi

# Iniciar el servidor
echo "Iniciando el servidor..."
if php artisan serve; then
    echo "Servidor iniciado correctamente."
else
    echo "Error al iniciar el servidor."
    exit 1
fi

echo
echo "Configuración completada exitosamente."
