<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/images/favicon.jpg">
    <title>@yield('title')</title>
    {{-- Section for javascript logics --}}
    @vite('resources/css/app.css')
    @vite('resources/js/auth.js')
    @vite('resources/js/comment.js')
    {{-- Section for javascript logics --}}
    @stack('styles')
    @stack('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="flex flex-col min-h-screen">
    @if(Auth::check())
        <x-navbar/>
        
    @else
        <x-guest-nav />
    @endif
    <div class="flex-grow">
        @yield('content')
    </div>

    <div class="mt-auto">
        <x-footer/>
    </div>
</body>
</html>