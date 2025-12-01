<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieAPIController extends Controller
{

    public function apimovies()
    {
        $movie = Movie::orderby("id", "desc")->get();
        return response()->json(
            [
                'success' => true,
                'message' => 'Berhasil ditampilkan',
                'data' => $movie
            ],
            200
        );
    }
}
