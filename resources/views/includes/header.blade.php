{{-- Config --}}
@php
    $links = config('header_menu');
@endphp

<header>
    <div class=" header-container container">
        <figure>
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo"></a>
        </figure>
        <nav>
            <ul>
                @foreach ($links as $link)
                    <li><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
