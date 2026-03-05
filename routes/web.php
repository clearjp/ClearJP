<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Blade pages
*/
Route::view('/', 'welcome')->name('home');
Route::view('/servicios', 'servicios')->name('servicios');
Route::view('/productos', 'productos')->name('productos');
Route::view('/faq', 'faq')->name('faq');
Route::view('/login', 'login')->name('login');

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
Route::redirect('/registro.html', '/login', 301);