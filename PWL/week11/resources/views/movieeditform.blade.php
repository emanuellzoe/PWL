@extends('layouts.main')
@section('title', 'Movie')
@section('content')
    <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/movie/update/{{ $mv->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="imdb">Imdb</label>
                <input type="text" name="imdb" class="form-control" id="imdb" value="{{ $mv->imdb }}" >
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $mv->title }}">
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <select name="genre" id="genre" class="form-control">
                    <option value="0" hidden>--Pilih Genre--</option>
                    <option value="Action" {{ $mv->genre == 'Action' ? 'selected' : '' }}>Action</option>
                    <option value="Comedy" {{ $mv->genre == 'Comedy' ? 'selected' : '' }}>Comedy</option>
                    <option value="Drama" {{ $mv->genre == 'Drama' ? 'selected' : '' }}>Drama</option>
                    <option value="Fantasy" {{ $mv->genre == 'Fantasy' ? 'selected' : '' }}>Fantasy</option>
                    <option value="Horror" {{ $mv->genre == 'Horror' ? 'selected' : '' }}>Horror</option>
                    <option value="Mystery" {{ $mv->genre == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                    <option value="Romance" {{ $mv->genre == 'Romance' ? 'selected' : '' }}>Romance</option>
                    <option value="Sci-fi">Sci-fi</option>
                    <option value="Thriller">Thriller</option>
                </select>
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" min="1900" max="2025" name="year" id="year" class="form-control" value="{{ $mv->year }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $mv->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="cover">Cover</label>
                <input type="file" name="cover" id="cover" accept="image/*" class="form-control">
                <div  class="mt-2">
                    @if (!empty($mv->cover))
                        <img src="{{ asset('storage/cover/' . $mv->cover) }}" alt="{{ $mv->title }}" width="80" height="80">
                    @else
                        <img src="{{ asset('storage/cover/no-image.jpg') }}" alt="No Image" width="80" height="80">
                    @endif

                <br><small><i>*foto sebelumnya</i></small>
            </div>

            </div>

            

            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

   
@endsection