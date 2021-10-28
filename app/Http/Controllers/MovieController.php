<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;


//compact che mi permette di passare direttamente il dato
class MovieController extends Controller
{   
    public function moviesList() {
        $movies = movie::all();
        return view('movies', compact('movies'));
    }

    public function movieDetails($id) {
        $movie = movie::where('id', $id)->get();
        return view('movie', compact('movie'));
    }
}
