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


Route::get('/about', function () {
    return view('about', ['tittle' => 'About Page']);
});

Route::get('/', function () {
    return view('home', [
        "nama" => "Dylan",
        "nomor" => "081238472534",
        "tittle" => "Home Page"
    ]);
});

Route::get('/blog', function () {
    return view('blog', ["tittle" => "Blog Page"]);
});

Route::get('/contact', function () {
    return view('contact', [
        "nama" => "Dylan",
        "nomor" => "081238472534"
    ]);
});