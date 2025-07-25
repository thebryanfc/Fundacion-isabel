<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('pages.index'))->name('index');
Route::get('/nosotros', fn () => view('pages.nosotros'))->name('nosotros');
Route::get('/programas', fn () => view('pages.talleres'))->name('talleres');
Route::get('/contacto', fn () => view('pages.contacto'))->name('contacto');