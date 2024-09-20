<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Video Club AppLiewire

## Pasos:
Previamente debe tener instalado XAMPP, LAMPP o WAMPP y git, ademas debe estar iniciado el servidor (ejecutar los comandos en la terminal, cmd o powershell)
### Paso 1:
```bash
git clone https://github.com/BugaPunk/video_club.git
```

### Paso 2:
Ingresar a la carpeta clonada
```bash
cd video_club
```

### Paso 3:
Instala dependencias
```bash
composer install
npm i
npm run build
```


### Paso 4:
Crear archivo `.env`
```bash
cp .env.example .env
```

### Paso 5:
Generar clave de app
```bash
php artisan key:generate
```

### Paso 6:
Crear y realizar migraciones a la base de datos (si es por primera vez dar en SI crear base de datos)
```bash
php artisan migrate
```

### Paso 7:
Ejecutar servidor
```bash
php artisan serve
```