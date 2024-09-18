<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\Helper;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataComics = Comic::all();
        return view('comics.index', compact('dataComics'));
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

        $request->validate([
            'title' => 'required|min:5|max:50',
            'text' => 'required|min:10',
            'thumb' => 'required|max:255',
            'price' => 'required|min:0|max:10',
            'series' => 'required|min:3|max:100',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:50',
        ]);

        $data = $request->all();

        $data['slug'] = Helper::generateSlug($data['title'], Comic::class);
        $new_comic = new Comic();

        // utilizziamo il fillable
        $new_comic->fill($data);


        // $new_comic = new Comic();
        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        // $new_comic->series = $data['series'];
        // $new_comic->slug = Helper::generateSlug($data['title'], Comic::class);
        $new_comic->save();
        // dump($new_comic);

        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->except('_token', '_method');
        // dd($data);
        $comic = Comic::find($id);
        if($comic->title != $data['title']){
            $data['slug'] = Helper::generateSlug($data['title'], Comic::class);
        }
        // salviamo i data dentro al comic che mandiamo al DB
        $comic->update($data);
        // dd($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
