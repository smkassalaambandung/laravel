<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 100;
});

Route::resource('user', UserController::class);
Route::resource('book', BookController::class);
Route::resource('pengarang', PengarangController::class);