<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function all_movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
    public function create_movie()
    {
        return view('create_movie');
    }
    public function store(Request $request)
    {
        $movie = Movie::createMovie($request->title, $request->description, $request->release_date);
        return redirect('/movies');
    }
    public function show_movie($id)
    {
        $movie = Movie::find($id);
        $movie_genres = $movie->genres;
        $genres = Genre::all();
        return view('movie', compact('movie', 'movie_genres', 'genres'));
    }
    public function attachGenre(Request $request, $id)
    {
        $movie = Movie::find($id);
        $genre_id = $request->input('genre_id');
        $movie->genres()->attach($genre_id);
        return redirect()->back();
    }

}

