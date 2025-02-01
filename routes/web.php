<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/book/create', [BookController::class, 'create']);
Route::post('/books/save', [BookController::class, 'store'])->name('book.save');




