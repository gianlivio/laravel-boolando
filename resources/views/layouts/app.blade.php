<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Styles -->

        {{-- assets con direttiva vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('content')
        </main>

  
    </body>
</html>
