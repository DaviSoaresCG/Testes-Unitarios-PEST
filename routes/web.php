<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::post('/submit', [HomeController::class, 'store'])->name('submit');

Route::get('/show-hash', [MainController::class, 'showHash']);

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/logout', function(){
    return view('logout');
})->name('logout');
