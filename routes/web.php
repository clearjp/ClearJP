<?php
use Illuminate\Support\Facades\Route;

// Pagina de inicio (welcome.blade.php)
Route::get('/', function () {
    return view('welcome');
});

// Formulario unificado de inicio de sesion / registro
Route::get('/login', function () {
    return view('login');
});

// Ruta para Servicios.blade.php
Route::get('/servicios', function () {
    return view('servicios');
});

// Ruta para Productos.blade.php
Route::get('/productos', function () {
    return view('productos');
});

// Ruta para Faq.blade.php
Route::get('/faq', function () {
    return view('faq');
});
