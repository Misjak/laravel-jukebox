<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genres;
use App\Author;

class Video extends Model
{
    public function author() {

        // return $this->belongsTo('App\Author');
        // return $this->belongsTo(\App\Author::class);
        return $this->belongsTo(Author::class); // the same like up 
    }

    public function genres() {

        return $this->belongsToMany((Genre::class));
    }
}
