<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

     Fonts 
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     Styles 
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="min-vh-100 py-5 d-flex flex-column justify-content-center">
                        <h1>Benvenuti su Home.Blade!</h1>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html> --  forse non è necessaria questa parte.-->

@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <h1>Ecco tutti i film!</h1>
@endsection