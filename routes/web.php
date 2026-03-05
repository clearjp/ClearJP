<?php
use Illuminate\Support\Facades\Route;

// sirvo la página de inicio (welcome.blade.php).
Route::get('/', function () {
    return view('welcome');
});

// sirvo el formulario unificado de inicio de sesión y registro.
Route::get('/login', function () {
    return view('login');
});

// sirvo la vista de servicios.
Route::get('/servicios', function () {
    return view('servicios');
});

// sirvo la vista de productos.
Route::get('/productos', function () {
    return view('productos');
});

// sirvo la vista de preguntas frecuentes.
Route::get('/faq', function () {
    return view('faq');
});
