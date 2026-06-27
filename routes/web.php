<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/marketplace', function () {
    return view('marketplace');
})->name('marketplace');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');
