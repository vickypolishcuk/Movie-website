<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function all_genres()
    {
        $genres = Genre::all();
        return view('genres', compact('genres'));
    }
    public function create_genre()
    {
        return view('create_genre');
    }
    public function store(Request $request)
    {
        $genre = Genre::createGenre($request->name);
        return redirect('/genres');
    }
    public function show_genre($id)
    {
        $genre = Genre::find($id);
        $genre_movies = $genre->movies;
        $movies = Movie::all();
        return view('genre', compact('genre', 'genre_movies', 'movies'));
    }
    public function attachMovie(Request $request, $id)
    {
        $genre = Genre::find($id);
        $movie_id = $request->input('movie_id');
        $genre->movies()->attach($movie_id);
        return redirect()->back();
    }

}
