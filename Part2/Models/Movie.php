<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public static function createMovie($title, $description, $release_date)
    {
        $movie = new Movie;
        $movie->title = $title;
        $movie->description = $description;
        $movie->release_date = $release_date;
        $movie->save();
        return $movie;
    }

}

