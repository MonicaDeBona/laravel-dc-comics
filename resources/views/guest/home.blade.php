@extends('layouts.guest')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @dump(Route::currentRouteName())
                <h1>DC COMICS homepage</h1>
            </div>
            <h1>Ciao caro utente</h1>
            <p>
                Se sei admin vai <a href="{{ route('admin.comics.home') }}">Qui</a>
            </p>
        </div>
    </div>
@endsection
