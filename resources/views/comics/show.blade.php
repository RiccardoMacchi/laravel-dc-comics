@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="my_card">
            <h1>{{ $comic['title'] }}</h1>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h4>Serie: {{ $comic['series'] . ' - ' . $comic['type'] }} </h4>
            <span> Prezzo di: {{ $comic['price'] }} In vendita dal: {{ $comic['sale_date'] }}</span>
        </div>
        <p class="description"><b>DESCRIZIONE:</b> <br>{{ $comic['description'] }}</p>
    </div>
@endsection
