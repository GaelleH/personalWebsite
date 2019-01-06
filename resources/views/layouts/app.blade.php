<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gaelle Hardy') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <a href="/GaëlleHardy/public/">
                <img src="../storage/app/public/APProved.png" alt="Gaelle Hardy logo" class="logo" style="width:20%">
            </a>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
