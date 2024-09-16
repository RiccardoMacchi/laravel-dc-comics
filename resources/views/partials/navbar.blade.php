@php
    $headermenu = config('datamenu.headermenu');
@endphp

<header>
    <div class="container">
        <a href="{{ route('comics.index') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </a>
        <nav>
            <ul>
                {{-- @foreach ($headermenu as $link)
                    <li><a class="{{ Route::currentRouteName() == $link['name'] ? 'active' : '' }}"
                            href="{{ route($link['name']) }}">{{ $link['title'] }}</a></li>
                @endforeach --}}
                <li><a href="{{ route('comics.index') }}">Vai a tutti i Fummeti</a></li>
                <li><a href="{{ route('comics.create') }}">Aggiungi Fumetto</a></li>
            </ul>
        </nav>
    </div>
</header>
