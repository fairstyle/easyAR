<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EasyAR') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/theme.js') }}" defer></script>
        <script src="{{ asset('js/feather.min.js') }}"></script>
    </head>
    <body>
        <div class="main-wrapper">
            {{ $slot }}
        </div>
    </body>
</html>
