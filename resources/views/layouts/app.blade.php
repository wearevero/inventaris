<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/x-icon" />
    <title>{{ $title == config('app.name') ? null : config('app.name') . ' — ' . $title }}</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" data-theme="dark">
    <div class="min-h-screen bg-geistForeground">
        @include('layouts.navigation')
        <div class="">
            @if (isset($header))
                <header class="bg-geistForeground shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
        </div>
        <main class="">
            {{ $slot }}
        </main>
        @include('layouts.footer')
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            "once": true
        });
    </script>
</body>
</html>
