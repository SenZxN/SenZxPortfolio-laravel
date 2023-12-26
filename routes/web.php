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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/product', function () {
    return view('product', [
        "title" => "Product"
    ]);
});

Route::get('/socialmedia', function () {
    return view('socialmedia', [
        "title" => "Social Media"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});