<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Punto de Venta en Laravel

Puntos realizados:

* PHP 7.3 o superior.
  * * Se utilizó PHP 8.4.
* Se necesita desarrollar una API REST utilizando Laravel 9 o superior.
  * * Se utilizó Laravel 12.
* Implementar seguridad para proteger los endpoints.
  * * Se utilizó Sanctum.
* Para la persistencia de datos utilizar el gestor de base de datos de PostgreSQL o MySQL.
  * * Se utilizó MySQL.

* Construir el modelo anterior a Clases de Dominio.
* Generar CRUD de las 4 clases de dominio anteriores.
* Generar controladores (endpoints) con los métodos GET, POST, PUT, DELETE.


* Seguridad: Crear 2 roles de usuarios: ROLE_ADMIN, ROLE_GUEST
  * * ROLE_ADMIN: puede realizar todos los métodos: GET,POST,PUT,DELETE
  * * ROLE_GUEST : puede sólo realizar operaciones GET.
 
Para el manejo de las peticiones se adjunta el archivo JSON de Insomnia:

 [Archivo Insomnia](https://github.com/CamiQ627/Punto-Venta/blob/main/PuntoVentaUrls.json)
