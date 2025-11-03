@extends('layouts.main')
@section('title', 'Movie') 
@section('content')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ImDB</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Poster</th>
                    </tr>
                </thead>
                <body>
                    <tr>
                        <td>1</td>
                        <td>tt098765</td>
                        <td>Abdadi nan Jaya</td>
                        <td>Horor</td>
                        <td>2025</td>
                        <td>image.jpg</td>
                    </tr>
                </body>
            </table>
        </div>
    </div>
@endsection