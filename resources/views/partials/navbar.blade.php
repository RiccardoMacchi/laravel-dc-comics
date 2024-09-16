@php
    $headermenu = config('datamenu.headermenu');
@endphp

<header>
    <div class="container">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </a>
        <nav>
            <ul>
                @foreach ($headermenu as $link)
                    <li><a class="{{ Route::currentRouteName() == $link['name'] ? 'active' : '' }}"
                            href="{{ route($link['name']) }}">{{ $link['title'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
