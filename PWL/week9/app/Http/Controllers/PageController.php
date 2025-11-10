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
        $movie = Movie::orderBy('id', 'desc')->get();
        return view('movie', ['key' => 'movie', 'mv' => $movie]);
    }

    public function genre()
    {
        return view('genre', ['key' => 'genre']);
    }
    public function movieaddform()
    {
        return view('movieaddform', ['key' => 'movie']);
    }

    public function moviesave(Request $request)
    {
        if($request->hasFile('cover'))
        {
            $file_name = time().'-'.$request->file('cover')->getClientOriginalName();
            $path = $request->file('cover')->storeAs('cover', $file_name,'public');
        } else
        {
            $file_name = null;
            $path = null;
        }
        Movie::create([
            'imdb' => $request->imdb,
            'title' => $request->title,
            'genre' => $request->genre,
            'year' => $request->year,
            'description' => $request->description,
            'cover' => $file_name
        ]);
        return redirect('/movie');
    }

    public function movieeditform($id)
    {
        $movie = Movie::find($id);
        return view('movieeditform', ['key' => 'movie', 'mv' => $movie]);
    }

}
