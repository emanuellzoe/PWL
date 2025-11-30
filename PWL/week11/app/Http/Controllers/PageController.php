<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Movie;
use Illuminate\Support\Facades\Storage;


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
        return redirect('/movie') -> with('alert', 'New movie has been added!');
    }

    public function movieeditform($id)
    {
        $movie = Movie::find($id);
        return view('movieeditform', ['key' => 'movie', 'mv' => $movie]);
    }

    public function movieupdate(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->imdb = $request->imdb;
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->year = $request->year;
        $movie->description = $request->description;
        
        

        if ($request->cover){
            if ($movie->cover) {
                Storage::disk('public')->delete('cover/'.$movie->cover);
            }
            $file_name = time().'-'.$request->file('cover')->getClientOriginalName();
            $path = $request->file('cover')->storeAs('cover', $file_name,'public');
            $movie->cover = $file_name;
            }
        $movie->save();
        return redirect('/movie') -> with('alert', 'Movie has been updated!');

    }

    public function moviedelete($id)
    {
        $movie = Movie::find($id);
        if ($movie->cover) {
            Storage::disk('public')->delete('cover/'.$movie->cover);
        }
        $movie->delete();
        return redirect('/movie') -> with('alert', 'Movie has been deleted!');
    }

    public function users()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('users', ['key' => 'users', 'users' => $users]);
    }

    public function usersaddform()
    {
        return view('usersaddform', ['key' => 'users']);
    }

    public function userssave(Request $request)
    {
        if($request->hasFile('photo'))
        {
            $file_name = time().'-'.$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('photo', $file_name,'public');
        } else
        {
            $file_name = null;
            $path = null;
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'photo' => $file_name
        ]);
        return redirect('/users') -> with('alert', 'New user has been added!');
    }

    public function usersdelete($id)
    {
        $users = User::find($id);
        if ($users->photo) {
            Storage::disk('public')->delete('photo/'.$users->photo);
        }
        $users->delete();
        return redirect('/users') -> with('alert', 'User has been deleted!');
    }

    public function setting()
    {
        return view('setting', ['key' => 'setting']);
    }

    public function updatepass(Request $request)
    {
        $user = auth()->user();

        if (!Auth::attempt(['email' => $user->email,'password'=> $request->password_lama]))
        {
            return redirect('/setting')->with('alert', 'Current password is incorrect!');
        }
        else
        {
            $user->password = bcrypt($request->password_baru);
            $user->save();
        }
        return redirect('/setting')->with('alert', 'Password has been updated!');
    }

}


