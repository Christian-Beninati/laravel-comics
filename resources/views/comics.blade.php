{{-- Main.blade --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Comics')

{{-- Main content --}}
@php
    $comics = config('comics');
@endphp

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
    {{-- Main Links --}}
    <section>
        <div class="main-links">
            <div class="container">
                <ul>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="DC">
                            <h3>Digital Comics</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC">
                            <h3>DC Merchandise</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="DC">
                            <h3>Subscription</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="DC">
                            <h3>Comic Shop Locator</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC">
                            <h3>DC Power Visa</h3>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
