<?php

namespace App\Http\Controllers;
use App\Models\Genre;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function show_all()
    {
        $genres = Genre::all();
        return view('genres.all', compact('genres'));
    }
    public function show_one(Genre $genre)
    {
        $movies = $genre->movies;
        return view('genres.one', compact('genre', 'movies'));
    }
    public function create()
    {
        return view('genres.create');
    }

    public function store(Request $request)
    {
        $genre = new Genre();
        $genre->name = $request->input('name');
        $genre->save();

        return redirect()->route('genres.all');
    }

}
