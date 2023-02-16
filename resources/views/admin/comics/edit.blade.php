@extends('layouts.app')
@section('title', "Edit $comic->title")
@section('main-content')
    <div class="container pt-5">
        <div class="row">
            @if (session('message'))
                <div class="alert alert-{{ session('alert-type') }}">
                    {{ session('message') }}
                </div>
            @endif
            @dump(Route::currentRouteName())
            <div class="col-12">
                @include('admin.comics.partials.form', [
                    'route' => 'admin.comics.update',
                    'method' => 'PUT',
                    'comic' => $comic,
                ])
            </div>
        </div>
    </div>
@endsection
