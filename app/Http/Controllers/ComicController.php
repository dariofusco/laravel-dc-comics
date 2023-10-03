<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', ['comics' => $comics]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$data = $request->all();
        $newComic = new Comic();
        
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ]);
            //$newComic->title = $data['title'];
            //$newComic->description = $data['description'];
            //$newComic->thumb = $data['thumb'];
            //$newComic->price = $data['price'];
            //$newComic->series = $data['series'];
            //$newComic->sale_date = $data['sale_date'];
            //$newComic->type = $data['type'];
            //$newComic->artists = $data['artists'];
            //$newComic->writers = $data['writers'];
            
            $newComic->fill($data);
            $newComic->save();

            return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        return view('comics.show', ['comics' => $comics]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);

        return view('comics.edit', ['comics' => $comics]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $comics = Comic::findOrFail($id);

        //$data = $request->all();
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ]);

        $comics->update($data);

        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $comics = Comic::findOrFail($id);

        $comics->delete();

        return redirect()->route('comics.index');
    }
}
