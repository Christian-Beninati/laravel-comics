{{-- Main.blade --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Comics')

{{-- Main content --}}
@section('main-content')
    <div class="current-series">
        <a href="#">Current Series </a>
    </div>

    <section class="container ">
        <div class="card-container">
            @foreach ($comics as $comic)
                <div class="card">
                    <a href="{{ route('comic', ['index' => $loop->index]) }}">
                        <img src="{{ $comic['thumb'] }}" alt='{{ $comic['series'] }}'>
                        <h3>{{ $comic['series'] }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="load-more-button">
            <a href="#">Load More</a>
        </div>
    </section>
    {{-- related items --}}
    <section>
        <div class="related-items">
            <div class="container">
                <ul>
                    @foreach ($related_items as $item)
                        <li>
                            <img src="{{ Vite::asset('resources/img/' . $item['img']) }}" alt="{{ $item['text'] }}">
                            <h3>{{ $item['text'] }}</h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
