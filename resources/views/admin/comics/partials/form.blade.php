<form action="{{ route($route, $comic->id) }}" method="POST">
    @csrf
    @method($method)
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif
    <div class="mb-3">
        <label class="form-label">
            Title
        </label>
        <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            Description
        </label>
        <textarea class="form-control" name="description">{{ $comic->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">
            Image
        </label>
        <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            Price
        </label>
        <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            Serie
        </label>
        <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            Sale date
        </label>
        <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="mb-3">
        <label class="form-label">
            Type
        </label>
        <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
