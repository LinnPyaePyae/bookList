<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wun Zinn') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class=" min-vh-100 d-flex flex-column">
        @include('layouts.nav')


        @if (session('status'))
            <div class="alert alert-success container mt-5" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <main class="py-4">
            @yield('content')
        </main>




    </div>

    <footer class="bg-dark text-light py-2">
        <div class="container text-center pt-1">
            <p>&copy; 2024 Wun Zinn</p>
        </div>
    </footer>

    @stack('script')

</body>

</html>
