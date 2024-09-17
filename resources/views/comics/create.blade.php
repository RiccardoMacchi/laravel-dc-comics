@extends('layouts.main')

@section('content')
    <h1>AGGIUNGI QUI IL TUO FUMETTO</h1>
    <div class="my_form">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="input_form">
                <label for="title">TITOLO</label>
                <input type="text" name="title">
            </div>
            <div class="input_form">
                <label for="thumb">URL IMG</label>
                <input type="text" name="thumb">
            </div>
            <div class="input_form">
                <label for="price">PREZZO</label>
                <input type="text" name="price">
            </div>
            <div class="input_form">
                <label for="sale_date">DATA VENDITA</label>
                <input type="text" name="sale_date">
            </div>
            <div class="input_form">
                <label for="type">TIPO</label>
                <input type="text" name="type">
            </div>
            <div class="input_form">
                <label for="series">SERIE</label>
                <input type="text" name="series">
            </div>
            <div class="input_form">
                <label for="description">DESCRIZIONE</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <div id="div_btn">
                <button class="my_btn success" type="submit">Aggiungi</button>
                <button class="my_btn delete" type="reset">Annulla</button>
            </div>
        </form>

    </div>
@endsection
