# Pasos a seguir para levantar la aplicación

## Instalar dependencias
Para instalar Sail con todas sus dependencias, se utiliza un pequeño contenedor Docker que contiene PHP y Composer para instalar las dependencias de la aplicación:
```
docker run --rm \
-u "$(id -u):$(id -g)" \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php83-composer:latest \
composer install --ignore-platform-reqs
```
https://laravel.com/docs/11.x/sail#installing-composer-dependencies-for-existing-projects

## Configurar ambiente
- Crear un archivo *.env* a partir de *.env.example* (descomentando la configuración de la Base de Datos de Postgres).    
	Los puertos **APP_PORT** y **FORWARD_BD_PORT** pueden modificarse a gusto.
- Generar la **APP_KEY** con el siguiente comando:  
	`./vendor/bin/sail artisan key:generate`

## Levantar aplicación
Asegurarse de que Docker está corriendo y ejecutar:  
`./vendor/bin/sail up --build (-d para iniciarlo en segundo plano)`