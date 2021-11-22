<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
{{--    <ul>--}}
{{--        @foreach($films as $film)--}}
{{--            <li><span>Film {{ $film->title }} (directory by: <strong>{{ $film->director->name }}</strong>)</span></li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
    <ul>
        @foreach($directors as $director)
            <li>{{ $director->name }}</li>
            <hr>
            <ul>
                @foreach($director->films as $film)
                    <li>{{ $film->title }}</li>
                @endforeach
            </ul>
            <hr>
        @endforeach

    </ul>
</div>
</body>
</html>
