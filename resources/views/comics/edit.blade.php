@extends('layouts.main')

@section('content')
    <h1>MODIFICA IL FUMETTO</h1>
    <div class="my_form">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="input_form">
                <label for="title">TITOLO</label>
                <input class="@error('title') wrong @enderror" type="text" name="title"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="thumb">URL IMG</label>
                <input class="@error('thumb') wrong @enderror" type="text" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="price">PREZZO</label>
                <input class="@error('price') wrong @enderror" type="text" name="price"
                    value="{{ old('price', $comic->price) }}">
                @error('price')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="sale_date">DATA VENDITA</label>
                <input class="@error('sale_date') wrong @enderror" type="text" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="type">TIPO</label>
                <input class="@error('type') wrong @enderror" type="text" name="type"
                    value="{{ old('type', $comic->type) }}">
                @error('type')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="series">SERIE</label>
                <input class="@error('series') wrong @enderror" type="text" name="series"
                    value="{{ old('series', $comic->series) }}">
                @error('series')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="description">DESCRIZIONE</label>
                <textarea class="@error('description') wrong @enderror" name="description" id="" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div id="div_btn">
                <button class="my_btn success" type="submit">Modifica</button>
                <button class="my_btn delete" type="reset">Annulla</button>
            </div>
        </form>

    </div>
@endsection
