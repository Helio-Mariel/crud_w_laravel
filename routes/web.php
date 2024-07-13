<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Rotas do Livro 
//Route::get('/books', [BookController::class, 'index']);
Route::resource('books', BookController::class);
Route::post('/books/create', [BookController::class, 'store'])->name('book.create');
Route::get('/books/{books}', [BookController::class, 'show']);
Route::get('/books/{books}/edit', [BookController::class, 'edit']);
Route::put('/books/{books}', [BookController::class, 'update'])->name('book.update');
Route::delete('/books/{books}', [BookController::class, 'destroy'])->name('books.destroy');

//---------------------------------------------------------------------------------