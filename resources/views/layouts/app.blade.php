<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <!-- .navbar -->
        <nav class="navbar has-shadow is-primary" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                        <img src="/aenima/images/logo/logo_02.png" width="112" height="28" alt="Logo">
                    </a>

                </div>

                <div class="navbar-menu" id="navMenu">

                    <div class="navbar-end">
                        @guest
                            @if(\Route::current()->getName() != 'login')
                            <div class="navbar-item">
                                <div class="buttons">
                                    <a href="{{ route('login') }}" class="button">
                                        {{ __('Login') }}
                                    </a>
                                </div>
                            </div>
                           @endif
                        @else

                            <div class="navbar-item">
                                <div class="navbar-item">
                                    <div class="buttons">
                                        <a class="button" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </div>
                                </div>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <!-- .navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
