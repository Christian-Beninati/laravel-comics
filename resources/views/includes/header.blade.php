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
                {{-- foreach on links --}}
                @foreach ($links as $link)
                    <li><a @if (Route::is($link['route'])) class="active" @endif {{-- add class active --}}
                            href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
                @endforeach
            </ul>
        </nav>
        {{-- Search bar --}}
        <div class="search-bar"><input type="text" placeholder="Search"></div>
    </div>
</header>
