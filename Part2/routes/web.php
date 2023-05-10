<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MovieController;
use \App\Http\Controllers\GenreController;

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
    return redirect()->route('all_movies');
});
Route::get('/movies', [MovieController::class, 'all_movies'])->name('all_movies');
Route::get('/movies/create', [MovieController::class, 'create_movie']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/{id}', [MovieController::class, 'show_movie'])->name('show_movie');
Route::post('/movies/{id}/attach-genre', [MovieController::class, 'attachGenre'])->name('movies.attach_genre');

Route::get('/genres', [GenreController::class, 'all_genres'])->name('all_genres');
Route::get('/genres/create', [GenreController::class, 'create_genre']);
Route::post('/genres', [GenreController::class, 'store']);
Route::get('/genres/{id}', [GenreController::class, 'show_genre'])->name('show_genre');
Route::post('/genres/{id}/attach-movie', [GenreController::class, 'attachMovie'])->name('genres.attach_movie');

