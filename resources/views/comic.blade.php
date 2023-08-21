{{-- Main.blade --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', $comic['series'])


@section('main-content')
    {{-- Comic --}}
    <section class="comic">
        {{-- Blue Bar --}}
        <div class="blue-bar">
            {{-- Container --}}
            <div class="container">
                {{-- Card Comic --}}
                <div class="card-comic">
                    <img src="{{ $comic['thumb'] }}" alt='{{ $comic['series'] }}'>
                </div>
            </div>
        </div>

        {{-- Container --}}
        <div class="container">
            {{-- Row --}}
            <div class="row">
                {{-- Card Left --}}
                <div class="card-left">
                    {{-- Title --}}
                    <h2>{{ $comic['title'] }}</h2>
                    {{-- Available --}}
                    <div class="available">
                        <div class="left-side">
                            {{-- Price --}}
                            <div class="price"> U.S. Price: <span>{{ $comic['price'] }}</span></div>
                            {{-- Status --}}
                            <div class="status">AVAILABLE</div>
                        </div>
                        {{-- Check --}}
                        <div class="right-side">Check Availability</div>
                    </div>
                    {{-- Desciption --}}
                    <p class="description">{{ $comic['description'] }}</p>
                </div>
                {{-- Card Right --}}
                <div class="card-right">
                    <h5>ADVERTISEMENT</h5>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="ADV">
                </div>
            </div>
        </div>

        {{-- Info Comic --}}
        <div class="info-comic">
            <div class="container">
                <div class="row">
                    {{-- Talent --}}
                    <div class="col">
                        <h4>Talent</h4>
                        <div class="row-info">
                            {{-- Art By --}}
                            <div class="col-left">Art by:</div>
                            <div class="col-right">
                                @foreach ($comic['artists'] as $artist)
                                    {{ $artist }},
                                @endforeach
                            </div>
                        </div>
                        {{-- Written By --}}
                        <div class="row-info">
                            <div class="col-left">Written by:</div>
                            <div class="col-right">
                                @foreach ($comic['writers'] as $writers)
                                    {{ $writers }},
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- Specs --}}
                    <div class="col">
                        <h4>SPECS</h4>
                        {{-- Series --}}
                        <div class="row-info">
                            <div class="col-left">Series:</div>
                            <div class="col-right">
                                {{ $comic['series'] }}
                            </div>
                        </div>
                        {{-- U.S. Price --}}
                        <div class="row-info">
                            <div class="col-left">U.S. Price:</div>
                            <div class="col-right color-black">
                                {{ $comic['price'] }}
                            </div>
                        </div>
                        {{-- On Sale Date --}}
                        <div class="row-info">
                            <div class="col-left">On Sale Date:</div>
                            <div class="col-right color-black">
                                {{ $comic['sale_date'] }}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
