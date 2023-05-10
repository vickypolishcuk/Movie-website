<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show_all()
    {
        $movies = Movie::all();
        return view('movies.all', compact('movies'));
    }
    public function show_one(Movie $movie)
    {
        return view('movies.one', compact('movie'));
    }
    public function create()
    {
        $genres = Genre::all();

        return view('movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->description = $request->input('description');
        $movie->release_date = $request->input('release_date');
        $movie->genre_id = $request->input('genre_id');
        $movie->save();

        return redirect()->route('movies.all');
    }

}
