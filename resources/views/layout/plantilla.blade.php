<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-...tu-codigo-de-integridad..." crossorigin="anonymous">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>

    <body >


        <main>
            <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            <div class="text-center">
                @yield('contenido')
            </div>
            
        </main>

    </body>
</html>