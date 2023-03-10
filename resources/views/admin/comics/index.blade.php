@extends('layouts.app')
@section('title', 'Comic')
@section('main-content')
    <div class="container pt-5">
        @if (session('message'))
            <div class="alert alert-{{ session('alert-type') }}">
                {{ session('message') }}
            </div>
        @endif
        @dump(Route::currentRouteName())
        <a href="{{ route('admin.comics.create') }}" class="btn btn-sm btn-primary">
            Create new comic
        </a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a href="{{ route('admin.comics.show', $comic->id) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('admin.comics.edit', $comic->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST"
                                class="d-inline-block form-deleter" data-element-name="{{ $comic->title }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    @vite('resources/js/deleteForm.js')
@endsection
