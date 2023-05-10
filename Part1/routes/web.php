<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Моделі та робота з БД в Laravel
Продемонструвати роботу з моделями, а саме:
-щоб в бд були такі сутності між якими буде встановлений зв’язок 1 до багатьох та багато до багатьох
-hasMany
-belongsToMany
-побудувати відповідні рути та контролери, які дозволять вам мати навігацію на сайті
*/

Route::get('/', function () {
    return redirect()->route('movies.all');
});

Route::get('/movies', [MovieController::class, 'show_all'])->name('movies.all');
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/{movie}', [MovieController::class, 'show_one'])->name('movies.one');

Route::get('/genres', [GenreController::class, 'show_all'])->name('genres.all');
Route::get('/genres/create', [GenreController::class, 'create']);
Route::post('/genres', [GenreController::class, 'store']);
Route::get('/genres/{genre}', [GenreController::class, 'show_one'])->name('genres.one');
