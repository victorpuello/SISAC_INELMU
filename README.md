# SISAC INELMU

Sistema de Seguimiento Acad\u00e9mico.

## Prop\u00f3sito

SISAC INELMU es una aplicaci\u00f3n web desarrollada con [Laravel](https://laravel.com) que permite realizar el seguimiento de la gesti\u00f3n acad\u00e9mica de una instituci\u00f3n educativa.

## Instalaci\u00f3n

1. Instale las dependencias de PHP mediante [Composer](https://getcomposer.org/):
   ```bash
   composer install
   ```
2. Instale las dependencias de JavaScript con [npm](https://www.npmjs.com/):
   ```bash
   npm install
   npm run dev
   ```
3. Copie el archivo de entorno y configure las credenciales:
   ```bash
   cp .env.example .env
   ```
   Ajuste los valores de conexi\u00f3n a la base de datos y ejecute:
   ```bash
   php artisan key:generate
   ```

## Uso b\u00e1sico

Inicie el servidor de desarrollo:
```bash
php artisan serve
```
Acceda luego a `http://localhost:8000` desde su navegador.

### Migraciones y Seeders

Ejecute las migraciones y cargue datos de ejemplo con:
```bash
php artisan migrate
php artisan db:seed
```

### Pruebas

Para ejecutar la suite de pruebas use:
```bash
php artisan test
```
