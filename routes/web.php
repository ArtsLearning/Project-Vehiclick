<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/', function () {
    return view('');
});
Route::get('/', function () {
    return view('');
});