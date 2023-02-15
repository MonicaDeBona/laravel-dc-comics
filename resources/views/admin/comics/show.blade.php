@extends('layouts.app')
@section('title', "Comic - $comic->title")
@section('main-content')
    <div class="container pt-5">
        @dump(Route::currentRouteName())
        <div class="card">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            <div class="card-body">
                <h2 class="card-title">{{ $comic->title }}</h2>
                <p class="card-text">{{ $comic->description }}</p>
                <p>
                    Price: {{ $comic->price }} <br>
                    Series: {{ $comic->series }} <br>
                    Sale date: {{ $comic->sale_date }} <br>
                    Type: {{ $comic->type }}
                </p>
                <div>
                    <a href="{{ route('admin.comics.edit', $comic->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    {{-- <a href="{{ route('admin.comics.show', $comic->id) }}" class="btn btn-sm btn-primary">Delete</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
