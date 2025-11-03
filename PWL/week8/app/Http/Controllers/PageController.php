<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movie;

//2
class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }

    public function movie()
    {
        $movie = Movie::all();
        return view('movie', ['key' => 'movie', 'my' => $movie]);
    }

    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }
}
