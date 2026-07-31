<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])
->name('about');

Route::get('/marketplace', function () {
    return view('marketplace');
})->name('marketplace');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']
)->name('posts.index');
