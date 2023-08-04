<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Title --}}
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    {{-- Icon --}}
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">

    <style>
        body {
            display: none
        }
    </style>


    {{-- Import asset --}}
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Main --}}
    <main>
        {{-- Jumbotron --}}
        @include('includes.jumbotron')
        {{-- Main content --}}
        @yield('main-content')
    </main>

    {{-- Footer --}}
    @include('includes.footer')

</body>

</html>
