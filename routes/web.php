<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/greeting', function () {
    return ('Hello World Angel Mejia 2024');
});

Route::get('/user', [UserController::class, 'index']);

Route::resource('books', BookController::class);


Route::get('/books/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books', [BookController::class, 'update'])->name('books.update');

