<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthorController::class,'index'])->name('author');
Route::get('/author/show/{id}', [AuthorController::class, 'show'])->name('author.show');
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::get('/create/book', [BookController::class, 'create'])->name('books.create');
Route::post('/store/book', [BookController::class, 'store'])->name('books.store');
Route::delete('/delete/book/{id}', [BookController::class, 'delete'])->name('delete');

Route::group(['middleware' => 'guest'], function () {
    Route::post('/authenticate',[UserController::class,'authenticate']);
    Route::get('/login',[UserController::class,'login'])->name('login');
});