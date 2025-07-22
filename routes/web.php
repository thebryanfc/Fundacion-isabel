<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn () => view('pages.inicio'))->name('inicio');
Route::get('/nosotros', fn () => view('pages.nosotros'))->name('nosotros');
Route::get('/programas', fn () => view('pages.programas'))->name('programas');
Route::get('/contacto', fn () => view('pages.contacto'))->name('contacto');