<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Blade pages
*/
Route::get('/', fn() => view('index'));
Route::get('/login', fn() => view('login'));
Route::get('/registro', fn() => view('registro'));
Route::get('/productos', fn() => view('productos'));
Route::get('/servicios', fn() => view('servicios'));
Route::get('/faq', fn() => view('faq'));

/*
|--------------------------------------------------------------------------
| Legacy static URLs (.html)
|--------------------------------------------------------------------------
| Permanent redirects so old links keep working.
*/
Route::redirect('/index.html', '/', 301);
Route::redirect('/servicios.html', '/servicios', 301);
Route::redirect('/productos.html', '/productos', 301);
Route::redirect('/faq.html', '/faq', 301);
Route::redirect('/login.html', '/login', 301);
Route::redirect('/registro.html', '/registro', 301);
