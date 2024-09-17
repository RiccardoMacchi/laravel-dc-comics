@extends('layouts.main')

@section('content')
    <div class="my_form">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input_form">
                <label for="title">TITOLO</label>
                <input type="text" name="title" value="{{ $comic->title }}">
            </div>
            <div class="input_form">
                <label for="thumb">URL IMG</label>
                <input type="text" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="input_form">
                <label for="price">PREZZO</label>
                <input type="text" name="price" value="{{ $comic->price }}">
            </div>
            <div class="input_form">
                <label for="sale_date">DATA VENDITA</label>
                <input type="text" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="input_form">
                <label for="type">TIPO</label>
                <input type="text" name="type" value="{{ $comic->type }}">
            </div>
            <div class="input_form">
                <label for="series">SERIE</label>
                <input type="text" name="series" value="{{ $comic->series }}">
            </div>
            <div class="input_form">
                <label for="description">DESCRIZIONE</label>
                <textarea name="description" id="" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>
            <div id="div_btn">
                <button class="my_btn success" type="submit">Modifica</button>
                <button class="my_btn delete" type="reset">Annulla</button>
            </div>
        </form>

    </div>
@endsection
