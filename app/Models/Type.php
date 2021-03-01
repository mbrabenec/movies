<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'movie_types';

    public function movies () {
        return $this->belongsTo(Movie::class,'movie_type_id','id');
    }
}

