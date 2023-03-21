<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/x-icon">
    <title>{{ $title == config('app.name') ? null : config('app.name') . ' — ' . $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-geistForeground">
    <div class="font-basement bg-geistForeground text-geistForeground antialiased">
        {{ $slot }}
    </div>
</body>
</html>
