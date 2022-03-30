    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        @include('panels.styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>
        @yield('content')
        @include('panels.scripts')
    </body>

    </html>
