<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $nama = "John Doe";
        $koleksi = ["HTML", "CSS", "JavaScript", "PHP"];
        return view ('home', ['nama' => $nama, 'kol' => $koleksi]);
    }

    public function galery()
    {
        return view('galery');
    }

    public function profile()
    {
        return view('profile');
    }

    public function submit(Request $request)
    {
        $kode = $request->input('kode');
        $gambar = $request->file('gambar');
        return $kode.": ".$gambar;
    }
}
