<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Home</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico') }}">

    {{-- Import asset --}}
    @vite('resources/js/app.js')
</head>

<body>
    <h1>
        Hello word
    </h1>
</body>

</html>
