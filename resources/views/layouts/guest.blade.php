<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        @if (cache()->has('darkTheme'))
            @if(cache()->get('darkTheme'))
                <link rel="stylesheet" href="{{ asset('theme/css/appdark.css') }}">
            @else
                <link rel="stylesheet" href="{{ asset('theme/css/app.css') }}">
            @endif
        @else
            <link rel="stylesheet" href="{{ asset('theme/css/app.css') }}">
            @php cache()->set('darkTheme', false); @endphp
        @endif
        <link rel="stylesheet" href="{{ asset('theme/css/iconfont.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('theme/js/app.js') }}" defer></script>
        <script src="{{ asset('theme/js/feather.min.js') }}" defer></script>
    </head>
    <body>
        <div class="main-wrapper">
            {{ $slot }}
        </div>
    </body>
</html>
