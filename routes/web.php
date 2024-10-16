<?php

use Illuminate\Support\Facades\Route;
Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');

use App\Http\Controllers\AuthorController;

Route::resource('authors', AuthorController::class);

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
