# Cómo subir el restaurante a tu GitHub

La cuenta conectada es `joseant7231`. Se recomienda crear **otro repositorio** para no mezclar esta aplicación con `TA-TALLER-` (Campus 360).

1. Entra a <https://github.com/new> e inicia sesión.
2. Nombre del repositorio: `restaurante-san-antonio-php`.
3. Elige **Private** (puedes cambiarlo después si tu profesor necesita verlo públicamente).
4. No marques la opción de crear README ni `.gitignore`, porque ya vienen en el proyecto. Crea el repositorio vacío.
5. Extrae el ZIP en tu computadora. Abre la terminal desde la carpeta `restaurante-san-antonio-php`.
6. Ejecuta los siguientes comandos, uno por uno:

```bash
git init
git branch -M main
git add .
git commit -m "Proyecto Restaurante San Antonio en PHP"
git remote add origin https://github.com/joseant7231/restaurante-san-antonio-php.git
git push -u origin main
```

Si Git te pide tu identidad, configura `git config --global user.name "Tu usuario"` y `git config --global user.email "Tu email de GitHub"` antes del `git commit`.

**Aviso:** GitHub almacena el código, pero GitHub Pages no ejecuta PHP ni MySQL. Para demostrar el sitio, utiliza XAMPP o un hosting compatible con PHP/MySQL.
