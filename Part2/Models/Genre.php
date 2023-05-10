<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
    public static function createGenre($name)
    {
        $genre = new Genre;
        $genre->name = $name;
        $genre->save();
        return $genre;
    }
}

