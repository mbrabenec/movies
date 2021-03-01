<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index () 
    {
        $movies = Movie::with('Type')->where('year', '>', 2010)->paginate(10);

        return view('movies.index', compact('movies'));
    }

    

    
}
