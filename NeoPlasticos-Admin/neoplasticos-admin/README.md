# NeoPlásticos Admin

Sistema web administrativo desarrollado con **Laravel 13 y PHP 8.3** como parte de un proyecto académico de Ingeniería de Software.

## Descripción del proyecto

NeoPlásticos Admin es un prototipo de sistema web para la administración de una empresa dedicada a la fabricación y comercialización de productos de polietileno.

El proyecto cuenta con tres secciones principales:

- **Página principal:** presentación de la empresa y sus servicios.
- **Inicio de sesión:** interfaz de acceso para usuarios.
- **Panel administrativo:** visualización de indicadores y datos de demostración.

## Tecnologías utilizadas

- PHP 8.3
- Laravel 13
- Composer
- Blade
- HTML5
- CSS3
- Bootstrap 5.3

## Estructura principal

| Directorio o archivo | Función |
|---|---|
| `app/Http/Controllers/` | Controladores de las páginas |
| `resources/views/` | Vistas Blade |
| `routes/web.php` | Rutas de la aplicación |
| `public/` | Recursos públicos |
| `composer.json` | Dependencias del proyecto |
| `composer.lock` | Versiones específicas de las dependencias |

## Requisitos

- PHP 8.3 o superior.
- Composer.
- Extensiones de PHP requeridas por Laravel.
- Git (opcional, para control de versiones).

## Instalación y ejecución

1. Descargar o clonar el repositorio.
2. Abrir una terminal en la carpeta del proyecto.
3. Instalar las dependencias:

   ```bash
   composer install
   ```

4. Crear el archivo de configuración:

   ```bash
   copy .env.example .env
   ```

5. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

6. Ejecutar las migraciones:

   ```bash
   php artisan migrate
   ```

7. Iniciar el servidor local:

   ```bash
   php artisan serve
   ```

8. Abrir `http://127.0.0.1:8000` en el navegador.

## Rutas disponibles

| Ruta | Descripción |
|---|---|
| `/` | Página principal |
| `/login` | Inicio de sesión de demostración |
| `/panel` | Panel administrativo |

## Estado actual

El proyecto es un prototipo funcional de interfaz. El inicio de sesión, los formularios y los datos del panel son demostrativos; todavía no cuentan con autenticación ni persistencia de datos propia.

## Sobre Laravel

Laravel es un framework de PHP que facilita el desarrollo de aplicaciones web mediante herramientas como enrutamiento, controladores, plantillas Blade, migraciones y gestión de dependencias.

Documentación oficial: https://laravel.com/docs