<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class VisitorController extends Controller
{
    public function searchmovie()
    {
        return view('searchmovie');
    }

    public function actsearchmovie(Request $request)
    {
        $search = $request->input('search');
        $movie = Movie::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('/actsearchmovie', ['search' => $movie]);
    }
}
