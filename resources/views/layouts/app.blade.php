<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        Dashboard Escolar - @yield('title')
    </title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!--Custom css-->
    <style>
        body { background: #f5f7fb; }
        .card { border: none; border-radius: 16px; }
        .card-header { background: transparent; border-bottom: none; font-weight: 600; }
        .table th { font-size: 0.8rem; text-transform: uppercase; color: #6c757d; }
        .badge-status { font-size: 0.7rem; }
    </style>

    </head>
    <body>
        @include('layouts.navigation')

        <div class="container py-4">

            @yield('content')

        </div>

    </body>
</html>
