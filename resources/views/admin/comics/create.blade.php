@extends('layouts.app')
@section('title', 'Create new comic')
@section('main-content')
    <div class="container pt-5">
        <div class="row">
            @dump(Route::currentRouteName())
            <div class="col-12">
                @include('admin.comics.partials.form', [
                    'route' => 'admin.comics.store',
                    'method' => 'POST',
                    'comic' => $comic,
                ])
            </div>
        </div>
    </div>
@endsection
