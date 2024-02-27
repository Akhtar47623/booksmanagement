<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookManagementController::class, 'index']);
Route::get('/create/book', [BookManagementController::class, 'create'])->name('create.book');
Route::any('/add/book', [BookManagementController::class, 'store'])->name('add.book');
Route::any('/delete/book/{id}', [BookManagementController::class, 'destroy'])->name('delete.book');
Route::any('/show/{id}', [BookManagementController::class, 'show'])->name('show.book');
Route::any('/edit/{id}', [BookManagementController::class, 'edit'])->name('edit.book');
Route::any('/update/book/{id}', [BookManagementController::class, 'update'])->name('update.book');
