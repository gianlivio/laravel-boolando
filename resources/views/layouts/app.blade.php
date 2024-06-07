<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <!-- Styles -->

        {{-- assets con direttiva vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            @yeld('content')
        </main>

  
    </body>
</html>
