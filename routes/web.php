<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

Route::get('/', function () {
    $books = Book::get();
    return view('books.index', ['books' => $books]);
});
Route::resource('books', BookController::class);
Route::get('/books/{id}/delete', [BookController::class, 'delete'])->name('books.delete');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');