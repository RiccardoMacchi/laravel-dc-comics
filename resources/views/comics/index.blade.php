{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
    <div id='wrapper_comics'>
        <div class="wrapimg">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbo">
        </div>
        <div class="container">
            <div class="serie">
                <h2>CURRENT SERIES</h2>
            </div>
            @foreach ($dataComics as $comic)
                <div class="my_card">
                    <div class="wrap_img">
                        <img src="{{ $comic['thumb'] }}" alt="alt">
                    </div>

                    <h3>{{ $comic['title'] }}</h3>
                    <h5>Prezzo: {{ $comic['price'] }}</h5>
                    <div class="wrap_btn">
                        <a class="my_btn" href="{{ route('comics.show', $comic['id']) }}">DETTAGLI</a>
                        <form action="{{ route('comics.destroy', $comic['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="my_btn" type="submit">CANCELLA</button>
                        </form>
                        <a class="my_btn" href="{{ route('comics.edit', $comic['id']) }}">MODIFICA</a>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="btn_more">
            <h2>LOAD MORE</h2>
        </div>
    </div>

    @include('./partials/bluebanner')
@endsection


@section('titlePage')
    home
@endsection
