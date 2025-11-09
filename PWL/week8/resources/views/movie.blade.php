@extends('layouts.main')
@section('title', 'Movie') 
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/movie/addform" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>
        </div>
        <div class="card-body">
            <table id="example" class="display" style="width: 100%" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ImDB</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Cover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mv as $idx => $m)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $m->imdb }}</td>
                        <td>{{ $m->title }}</td>
                        <td>{{ $m->genre }}</td>
                        <td>{{ $m->year }}</td>
                        <td>
                            @if ($m->cover)
                                <img src="{{ asset('/storage/cover/'.$m->cover) }}" alt="$m->cover" width="80" height="80">
                            @else
                                <img src="{{ asset('/storage/cover/no-image.jpg')}}" alt="No Image" width="80" height="80">
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection