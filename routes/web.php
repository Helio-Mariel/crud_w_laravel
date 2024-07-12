<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Rotas do Livro 
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/{books}', [BookController::class, 'show']);

//-----------------------------------------------------------------------------------------------