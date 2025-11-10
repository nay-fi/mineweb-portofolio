<?php

use Illuminate\Support\Facades\Route;

//Halaman Utama
Route::get('/', function () {
    return view('main/index_home');
});
