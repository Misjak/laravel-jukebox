<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Video;

class Author extends Model
{
    public function videos() {

        return $this->hasMany(Video::class);
    }

    public function genres() {

        return $this->belongsToMany(Genre::class);
    }

    
}
