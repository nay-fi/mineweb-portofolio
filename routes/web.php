<?php

use Illuminate\Support\Facades\Route;

//Halaman Utama
Route::get('/', function () {
    return view('main/index_home');
});
Route::get('/project', function () {
    return view('main/project');
})->name('index.project');
