<!DOCTYPE html>

<head>
    <meta charset=“utf-8”>
    <meta name=“viewport” content=“width=device-width, initial-scale=1”>
    <title>Laravel</title>
    <!-- Fonts -->
    <link href=“https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&displayswap” rel=“stylesheet”>
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <main class=“bg-light”>
        <div class=“container”>
            <div class=“row”>
                <div class=“col-12”>
                    <h5> {{ $Movie->title }}</h5>
                    <h4>{{ $Movie->original_title}}</h4>
                    <h6>{{ $Movie->date }}</h6>
                    <div class=“min-vh-100 py-5 d-flex flex-column justify-content-center”>
                        <h1>Benvenuti su Movie.Blade!</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>