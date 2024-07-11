<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\BookController;


Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{books}', [BookController::class, 'show']);
