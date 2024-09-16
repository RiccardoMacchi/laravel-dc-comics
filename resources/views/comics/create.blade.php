@extends('layouts.main')

@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">TITOLO</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="thumb">URL IMG</label>
            <input type="text" name="thumb">
        </div>
        <div>
            <label for="price">PREZZO</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="sale_date">DATA VENDITA</label>
            <input type="text" name="sale_date">
        </div>
        <div>
            <label for="type">TIPO</label>
            <input type="text" name="type">
        </div>
        <div>
            <label for="series">SERIE</label>
            <input type="text" name="series">
        </div>
        <div>
            <label for="description">DESCRIZIONE</label>
            <input type="textarea" name="description">
        </div>
        <button type="submit">Aggiungi</button>
        <button type="reset">Annulla</button>
    </form>
@endsection
