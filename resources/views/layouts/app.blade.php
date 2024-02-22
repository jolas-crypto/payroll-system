<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="{{ asset('/images/icons/pay-point-pay-svgrepo-com_logo.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('scripts')
</head>
<body>
    <div id="app" class="bg-white">
        @include('includes.header')
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>