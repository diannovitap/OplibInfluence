<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');

    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="h-fit min-h-screen w-full absolute flex flex-col sm:justify-center items-center bg-gray-100"
        style="background-image: url('/assets/oplib.png'); background-size: cover;">
        <div class="relative top-0 h-fit min-h-screen w-full font-inter grid place-items-center py-8" style="background-color: rgba(255, 255, 255, 0.5)">
                {{ $slot }}
        </div>
    </div>
</body>

</html>
