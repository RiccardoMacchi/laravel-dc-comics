{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <div id='wrapper_comics'>
        <div class="container">
            <div class="serie">
                <h2>SERIES</h2>
            </div>
            @foreach ($dataComics as $comic)
                <div class="my_card">
                    <div>
                        <img src="{{ $comic['thumb'] }}" alt="alt">
                    </div>
                    <div>
                        <h3>{{ $comic['title'] }}</h3>
                        <span>Prezzo: {{ $comic['price'] }}</span>
                    </div>
                </div>
            @endforeach

            <div class="btn_more">
                <h2>LOAD MORE</h2>
            </div>
        </div>
    </div>

    @include('./partials/bluebanner')
@endsection


@section('titlePage')
    COLLECTIBLES
@endsection
