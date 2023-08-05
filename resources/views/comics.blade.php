{{-- Main.blade --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Comics')

{{-- Main content --}}
@section('main-content')
    <section class="container ">
        <div class="card-container">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt='{{ $comic['series'] }}'>
                    <h3>{{ $comic['series'] }}</h3>
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
