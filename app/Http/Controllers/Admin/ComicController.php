<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create', ['comic' => new Comic()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic = $request->all();

        $request->validate(
            [
                'title' => 'required|string|min:2|max:200|unique:comics, title',
                'description' => 'required|string|min:10',
                'thumb' => 'required|url|min:5',
                'price' => 'required|numeric|between:0.01,999999.99',
                'series' => 'required|string|max:100',
                'sale_date' => 'required|date',
                'type' => 'required|min:2|max:30',
            ],
            [
                'title.required' => 'Missing title',
                'title.min' => 'Title must be at least :min characters',
                'title.max' => 'Title cannot be longer than :max characters',
                'description.required' => 'Missing description',
                'description.min' => 'Description must be at least :min characters',
                'thumb.required' => 'Missing image URL',
                'thumb.url' => 'Invalid image URL',
                'thumb.min' => 'Image URL must be at least :min characters',
                'price.required' => 'Missing price',
                'price.numeric' => 'Price must be a number',
                'price.between' => 'Price must be between :min and :max',
                'series.required' => 'Missing serie',
                'series.max' => 'Serie must not exceed :max characters',
                'sale_date.required' => 'Missing sale date',
                'sale_date.date' => 'Sale date must be a valid date',
                'type.required' => 'Missing type',
                'type.min' => 'Type must be at least :min characters',
                'type.max' => 'Type must not exceed :max characters',
            ]
        );

        $newComic = new Comic();
        $newComic->fill($comic);
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $comic = Comic::findOrFail($id);

        $request->validate(
            [
                'title' => 'required|string|min:2|max:200',
                'description' => 'required|string|min:10',
                'thumb' => 'required|url|min:5',
                'price' => 'required|numeric|between:0.01,999999.99',
                'series' => 'required|string|max:100',
                'sale_date' => 'required|date',
                'type' => 'required|min:2|max:30',
            ],
            [
                'title.required' => 'Missing title',
                'title.min' => 'Title must be at least :min characters',
                'title.max' => 'Title cannot be longer than :max characters',
                'description.required' => 'Missing description',
                'description.min' => 'Description must be at least :min characters',
                'thumb.required' => 'Missing image URL',
                'thumb.url' => 'Invalid image URL',
                'thumb.min' => 'Image URL must be at least :min characters',
                'price.required' => 'Missing price',
                'price.numeric' => 'Price must be a number',
                'price.between' => 'Price must be between :min and :max',
                'series.required' => 'Missing serie',
                'series.max' => 'Serie must not exceed :max characters',
                'sale_date.required' => 'Missing sale date',
                'sale_date.date' => 'Sale date must be a valid date',
                'type.required' => 'Missing type',
                'type.min' => 'Type must be at least :min characters',
                'type.max' => 'Type must not exceed :max characters',
            ]
        );


        $comic->update($formData);
        return redirect()->route('admin.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}
