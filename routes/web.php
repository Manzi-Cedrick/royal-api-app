<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorController;

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
// Route::group(['middleware'=>'auth'],function () {
    Route::get('/', [AuthorController::class,'index']);
    Route::get('/author/show/{id}', [AuthorController::class, 'show'])->name('author.show');
    // });
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login',[UserController::class,'login']);
    Route::post('/authenticate',[UserController::class,'authenticate']);
});
// Route::get('/login',[UserController::class,'login'])->middleware('guest');