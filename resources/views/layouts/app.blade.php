<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <title>{{ $title == config('app.name') ? $title : config('app.name') .' — ' .$title  }}</title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-black dark:bg-gray-900">
            @include('layouts.navigation')
            <div class="">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
            </div>

            <!-- Page Content -->
            <main class="">
                {{ $slot }}
            </main>
        @include('layouts.footer')
    </div>
    </body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            "once": true
        });
    </script>
    <script src="{{ asset('jquery.js') }}"></script>
</html>
