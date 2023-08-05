{{-- Config --}}
@php
    $links = config('header_menu');
@endphp

<header>
    {{-- Top Header --}}
    <div class="top-header">
        <div class="top-header-container">
            <a href="#">dc power visa</a>
            <a href="#">additional dc site</a>
        </div>
    </div>

    {{-- Main Header --}}
    <div class=" header-container container">
        <figure>
            <a href="{{ route('home') }}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo"></a>
        </figure>
        <nav>
            <ul>
                {{-- foreach on links --}}
                @foreach ($links as $link)
                    <li><a @if (Route::is($link['route'])) class="active" @endif {{-- add class active --}}
                            href="{{ route($link['route']) }}">{{ $link['text'] }}
                            {{-- Blue arrow --}}
                            @if ($link['text'] === 'shop')
                                <i class="fa-solid fa-sort-down blue-arrow"></i>
                            @endif
                        </a></li>
                @endforeach
            </ul>
        </nav>
        {{-- Search bar --}}
        <div class="search-bar"><input type="text" placeholder="Search"></div>
    </div>
</header>
