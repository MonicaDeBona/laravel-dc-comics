@extends('layouts.app')
@section('title', 'Create new comic')
@section('main-content')
    <div class="container pt-5">
        @dump(str_starts_with(Route::currentRouteName(), 'admin.comics'))
        <form action="{{ route('admin.comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">
                    Title
                </label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Description
                </label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Image
                </label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Price
                </label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Serie
                </label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Sale date
                </label>
                <input type="date" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Type
                </label>
                <input type="text" class="form-control" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
