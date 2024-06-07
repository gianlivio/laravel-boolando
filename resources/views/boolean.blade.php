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


        <a href="http://127.0.0.1:8000/">
            <img src="{{ Vite::asset("resources/img/boolean-logo.png")}}" alt="">
        </a>
  
    </body>
</html>
