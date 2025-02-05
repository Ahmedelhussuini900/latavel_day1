
<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Display a list of books (Index)
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Show form to create a new book (Create)
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Save a new book (Store)
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Show a single book details (Show)
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

// Show form to edit an existing book (Edit)
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Update an existing book (Update)
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Delete a book (Destroy)
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');
