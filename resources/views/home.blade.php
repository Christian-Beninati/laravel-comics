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
@endsection
