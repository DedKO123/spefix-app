<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('logo.jpeg') }}">
        <title>{{ $title ?? 'Spefix App' }}</title>
    </head>
    <body>
    <header>
        @include('partials.header')
    </header>
        {{ $slot }}
    </body>
</html>
