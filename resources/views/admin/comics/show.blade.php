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
                    <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST"
                        class="d-inline-block form-deleter"
                        data-element-name="{{ $comic->title }}>
                        @csrf
                        @method('DELETE')
                        <button class="btn
                        btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/deleteForm.js')
@endsection
