<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### npm instal
### php artisan migrate // php artisan migrate::fresh
### npm run dev
### php artisan serve


# Belajar Laravel

## Routes 
## Migrate database
1. create table php = artisan make:migration create_flights_table
2. add column php = artisan make:migration add_column_to_students_table 
3. The migrate:fresh command will drop all tables from the database and then execute the migrate command:
### php artisan migrate:fresh
### php artisan migrate:fresh --seed
3. php artisan make:migration add_class_id_colum_to_students_table (membuat relasi id class ke tabel students )
### $table->unsignedBigInteger('class_id')->required();
membuat column class id  
### $table->foreign('class_id')->references('id')->on('class'); 
mengisi user id dengan referensi id dari table class
## MVC
### 