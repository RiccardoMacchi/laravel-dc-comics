@extends('layouts.main')

@section('content')
    <h1>AGGIUNGI QUI IL TUO FUMETTO</h1>
    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h5>{{ $error }}</h5>
        @endforeach
    @endif --}}
    <div class="my_form">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="input_form">
                <label for="title">TITOLO</label>
                <input class="@error('title') wrong @enderror" type="text" name="title" placeholder="Inserisci il titolo"
                    value="{{ old('title') }}">
                @error('title')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="thumb">URL IMG</label>
                <input class="@error('thumb') wrong @enderror" type="text" name="thumb"
                    placeholder="Inserisci l'url dell'immagine" value="{{ old('thumb') }}">
                @error('thumb')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="price">PREZZO</label>
                <input class="@error('price') wrong @enderror" type="text" name="price"
                    placeholder="Inserisci il prezzo" value="{{ old('price') }}">
                @error('price')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="sale_date">DATA VENDITA</label>
                <input class="@error('sale_date') wrong @enderror" type="text" name="sale_date"
                    placeholder="Inserisci la data di vendita" value="{{ old('sale_date') }}">
                @error('sale_date')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="type">TIPO</label>
                <input class="@error('type') wrong @enderror" type="text" name="type" placeholder="Inserisci il tipo"
                    value="{{ old('type') }}">
                @error('type')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="series">SERIE</label>
                <input class="@error('series') wrong @enderror" type="text" name="series"
                    placeholder="Inserisci la serie" value="{{ old('series') }}">
                @error('series')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="input_form">
                <label for="description">DESCRIZIONE</label>
                <textarea class="@error('description') wrong @enderror" name="description" id="" cols="30" rows="10"
                    placeholder="Inserisci la descrizione del fumetto">{{ old('description') }}</textarea>
                @error('description')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div id="div_btn">
                <button class="my_btn success" type="submit">Aggiungi</button>
                <button class="my_btn delete" type="reset">Annulla</button>
            </div>
        </form>

    </div>
@endsection
