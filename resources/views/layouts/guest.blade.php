<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EasyAR') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/theme.js') }}" defer></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
    </head>
    <body>

        <div class="page-content">
            {{ $slot }}
        </div>

        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
            <p class="text-muted text-center text-md-left">Copyright © 2021 <a href="" target="_blank">Andrw</a>. Todos los derechos reservados</p>
        </footer>
    </body>
</html>
