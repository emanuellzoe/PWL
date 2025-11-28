@extends('layouts.main')
@section('title', 'User') 
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/users/addform" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>
        </div>
        <div class="card-body">
            @if (session('alert'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('alert') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table id="example" class="display" style="width: 100%" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ImDB</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Cover</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($us as $idx => $u)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $u->imdb }}</td>
                        <td>{{ $u->title }}</td>
                        <td>{{ $u->genre }}</td>
                        <td>{{ $u->year }}</td>
                        <td>
                            @if ($u->cover)
                                <img src="{{ asset('/storage/cover/'.$u->cover) }}" alt="{{ $u->cover }}" width="80" height="80">
                            @else
                                <img src="{{ asset('storage/cover/no-image.jpg') }}" alt="No Image" width="80" height="80">
                            @endif
                        </td>
                        <td>
                            <a href="/users/deleteform/{{ $u->id }}" class="btn btn-success"> <i class="bi bi-pencil-square"></i></a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection