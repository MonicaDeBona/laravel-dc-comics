@extends('layouts.app')

@section('main-content')
    <div class="container pt-5">
        <div class="card">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            <div class="card-body">
                <h2 class="card-title">{{ $comic->title }}</h2>
                <p class="card-text">{{ $comic->description }}</p>
                <p>
                    {{ $comic->price }}
                    {{ $comic->series }}
                    {{ $comic->sale_date }}
                    {{ $comic->type }}
                </p>
            </div>
        </div>
    </div>
@endsection
