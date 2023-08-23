<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') | @(yield 'title') }}</title> <!-- tutti gli env e yield stanno funzionando? perchè è tutto bianco? -->
    
    @yield('cdns')

    @vite('resources/js/app.js')
</head>
<body>
    <main>
        @yield('main')
</main>
    
</body>
</html>