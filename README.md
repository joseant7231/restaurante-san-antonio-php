# Restaurante San Antonio — Trabajo de curso en PHP

Versión **adaptada para Taller de Programación 2** del sitio web del Restaurante San Antonio. Está escrita con **PHP procedimental, HTML, Bootstrap 5, JavaScript y MySQL**. La base se administra con **phpMyAdmin**.

Esta versión es una **adaptación sencilla para clases**: no requiere Python, Flask, PostgreSQL ni Composer.

## ¿Qué incluye?

- Carta pública de entradas, segundos y bebidas.
- Registro de clientes con nombre, celular, dirección y contraseña.
- Inicio de sesión mediante `$_SESSION` y contraseñas protegidas con `password_hash()` y `password_verify()`.
- Formulario de pedidos con cantidades, observaciones, tipo de entrega y total calculado con JavaScript y verificado por PHP.
- Historial de pedidos y solicitud de cancelación.
- Menú semanal y página "Quiénes somos".
- Libro de reclamos y consulta de reclamos propios.
- Acceso del administrador, gestión de pedidos, platos, menú semanal, clientes y reclamos.
- Reportes sencillos de ventas y platos más solicitados.

## Instalación con XAMPP (Windows)

1. Instala XAMPP con PHP 8.1+ y MySQL/MariaDB. Inicia **Apache** y **MySQL**.
2. Copia esta carpeta en `C:\xampp\htdocs\restaurante-san-antonio-php`.
3. Abre `http://localhost/phpmyadmin` y selecciona **Importar**.
4. Selecciona `database/restaurante.sql` y ejecuta el script. El script crea la base `restaurante_san_antonio` y las tablas necesarias. **Importa el script una sola vez** para evitar duplicar los platos de ejemplo.
5. Abre `http://localhost/restaurante-san-antonio-php/`.
6. Para configurar al administrador por primera vez, visita `http://localhost/restaurante-san-antonio-php/admin/crear_admin.php`. Elige un usuario y una contraseña propia. Después ingresa desde `admin/login.php`.

La conexión de ejemplo está en `includes/conexion.php`. Usa `localhost`, usuario `root` y contraseña vacía, que son frecuentes en XAMPP local. Si tu MySQL tiene otra contraseña, cambia esos valores o configura `DB_HOST`, `DB_USER`, `DB_PASSWORD` y `DB_NAME` en el servidor. **No subas credenciales reales a GitHub.**

## Estructura

```text
restaurante-san-antonio-php/
├── index.php                    Página de inicio y carta
├── registro.php / login.php     Registro e inicio de sesión
├── pedido.php / mis_pedidos.php Pedidos del cliente
├── menu_semanal.php             Menú del día
├── quienes_somos.php            Historia del local
├── reclamos.php                 Reclamos de clientes
├── logout.php
├── admin/                      Panel de administración
├── includes/                   Conexión, funciones, header y footer
├── assets/                     Estilos CSS y JavaScript
├── database/restaurante.sql    Base de datos MySQL
└── static/                      Carpetas para imágenes
```

## Conceptos PHP aplicados

- `include` / `require_once`: compartir cabecera, pie y conexión.
- `$_POST`: procesar los formularios.
- `$_SESSION`: mantener la sesión del cliente o administrador.
- `mysqli_connect()` y consultas preparadas: leer y actualizar MySQL.
- `if`, `foreach`, funciones y arrays: controlar la lógica.
- `password_hash()` / `password_verify()`: proteger las contraseñas.
- `htmlspecialchars()`: evitar imprimir HTML introducido por otros usuarios.

## Sobre las imágenes y la versión anterior

Las capturas recibidas mostraban carpetas `static/imagenes_entrada`, `static/imagenes_plato`, `static/imagenes_bebida`, `static/nosotros` y fondos, **pero no se adjuntaron los archivos de imagen originales**. Se conservaron las carpetas vacías con `.gitkeep`. Puedes copiar tus imágenes originales a ellas o subir nuevas imágenes desde el panel de platos.

La versión previa estaba en Python/Flask y utilizaba PostgreSQL. Este proyecto **no es una conversión línea por línea** de aquella aplicación: simplifica personalizaciones, combinaciones de menú, comprobantes y gráficos para ajustarse a las clases de PHP. Conserva los flujos básicos del negocio. Los datos históricos de PostgreSQL **no se migran automáticamente** y deben importarse por separado si los necesitas.

## Seguridad y límites

Proyecto **académico y de demostración local**, no listo para exponer públicamente sin pruebas y medidas adicionales (autorización, protección contra fuerza bruta, HTTPS, copias de seguridad, validaciones y revisión de permisos de archivos). El primer administrador debe crearse antes de ponerlo en línea. No contiene contraseñas reales ni datos de clientes.

No se ha probado la conexión a una base MySQL real en esta entrega. Los 23 archivos PHP han pasado una comprobación básica de sintaxis (`php -l`).
