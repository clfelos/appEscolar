<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            {{ config('app.name', 'AppEscolar') }} - @yield('title')
        </title>

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!--Custom css-->
        <style>
            body { background: #f5f7fb; }
            .card { border: none; border-radius: 16px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); }
            .card-header { background: transparent; border-bottom: none; font-weight: 600; padding-top: 1.5rem; }
            .btn-primary { border-radius: 8px; padding: 0.6rem 1.5rem; }
            .form-control { border-radius: 8px; padding: 0.6rem 1rem; border: 1px solid #e2e8f0; }
            .form-control:focus { box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15); border-color: #0d6efd; }
        </style>
    </head>

    <body>
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="w-100" style="max-width: 450px;">
                <div class="text-center mb-4">
                    <a href="/" class="text-decoration-none h2 fw-bold text-primary">
                        <i class="bi bi-journal-check me-2"></i>{{ config('app.name', 'AppEscolar') }}
                    </a>
                </div>

                @yield('content')

                @if(isset($slot))
                    {{ $slot }}
                @endif
            </div>
        </div>
    </body>
</html>
