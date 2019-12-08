<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administracion de Aenima Turismo</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}" />
    <!-- todo ver el color del enlace en el navbar -->

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<!-- .navbar -->
<nav class="navbar has-shadow is-primary" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="/aenima/images/logo/logo_02.png" width="112" height="28" alt="Logo">
            </a>
            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="/aenima/sliders" class="navbar-item">
                    Home
                </a>
            </div>
            <div class="navbar-end">
                @guest
                    <a href="{{ route('login') }}" class="navbar-item">
                        {{ __('Login') }}
                    </a>
                @else
                <a class="navbar-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
<!-- .navbar -->



    <div class="section">
        <div class="container">
            @yield("content")
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        if ($navbarBurgers.length > 0) {
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
</html>
