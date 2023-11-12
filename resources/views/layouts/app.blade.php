<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @stack('styles')
    @stack('scripts')
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
    <x-footer/>
</body>
</html>