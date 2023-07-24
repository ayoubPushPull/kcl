<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('general.landing');
})->name('landing');

Route::get('/about', function () {
    return view('general.about');
})->name('about');


Route::get('/contact', function () {
    return view('general.contact');
})->name('contact');

Route::get('/services', function () {
    return view('general.services');
})->name('services');
