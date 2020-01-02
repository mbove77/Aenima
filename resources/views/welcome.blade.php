<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aenima Turismo</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.4/dist/css/bulma-carousel.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    <!-- <link rel="stylesheet" href="css/debug.css"> -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</head>
<body>

<!-- .navbar -->
<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="images/logo/logo_01.png" width="112" height="28" alt="Logo">
            </a>
            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu" id="navMenu">
            <div class="navbar-end">
                <a class="navbar-item navbar-end nav-active">
                    HOME
                </a>
                <a class="navbar-item navbar-end nav-inactive">
                    TENDENCIAS
                </a>
                <a class="navbar-item navbar-end nav-inactive">
                    BLOG
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- .navbar -->

<!-- .hero -->
<section class="hero is-fullheight">

    <div id="carousel" class="slider is-fullheight">

        @foreach($sliders as $slider)
        <div class="slide item-{{$slider->id}} carusel-item is-fullheight" style="background-image:url('images/{{$slider->image_url}}')">

            <div class="indicator-block">
                <div><p>0{{$loop->iteration}}</p></div>
            </div>

            <div class="time-indicator"></div>

            <div class="title-block">
                <h1 class="title">
                    <img src="images/iconos/ic_pin.png" alt="Icono de lugar">
                    {{$slider->titulo_principal}}
                </h1>
                <h2 class="subtitle">
                    {{$slider->subtitulo_principal}}
                </h2>
                <p class="is-hidden-mobile">{{$slider->descripcion_principal}}</p>
            </div>

            <div class="subtitle-block is-hidden-mobile ">
                <h1 class="title is-size-6">
                    {{$slider->titulo_secundario}} &nbsp;
                    <img src="images/iconos/arrow.png" alt="icono de fecha">
                </h1>
                <h2 class="subtitle is-size-6">
                    {{$slider->subtitulo_secundario}}
                </h2>
                <p class="is-size-6">{{$slider->descripcion_secundario}}</p>
            </div>
            <div class="play-pause">
                <span class="icon"></span>
            </div>
        </div>
        @endforeach

    </div>

</section>
<!-- /.hero -->

<!-- /.tendencia -->
<section class="section tendencia">
    <div class="container">
        <h2 class="subtitle has-text-weight-bold">TENDENCIAS</h2>
        <div class="columns">

            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="images/card_01.png" alt="Imagen de Articulo de Tendencia">
                        </figure>
                    </div>
                    <div class="card-new">NUEVO</div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="media-content is-multiline">
                                    <h1 class="title-cards title is-6 ">Montañas y magia</h1>
                                    <p class="card-description">Aquí la descripción para <b>Montañas y magia</b>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-hidden-mobile">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="images/card_02.png" alt="Imagen de Articulo de Tendencia">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="media-content">
                                    <h1 class="title-cards title is-6">Playas y sol</h1>
                                    <p class="card-description">La descripción de <b>Playas y sol</b> debe ser esta.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-hidden-mobile">
                <div class="card">
                    <div class="card-image">
                        <figure class="image">
                            <img src="images/card_03.png" alt="Imagen de Articulo de Tendencia">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <div class="media-content">
                                    <h1 class="title-cards title is-6">Nieve y aventura</h1>
                                    <p class="card-description">Contiene la información de <b>Nieve y aventura</b>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /.section -->

<!-- /.blog -->
<section class="section blog">
    <div class="container">
        <h2 class="subtitle has-text-weight-bold">BLOG</h2>

        <div class="columns">
            <div class="column is-two-thirds">
                <div class="articulos" style="background-image:url('images/articulo_big_01.png')">

                    <p class="city">CIUDAD</p>
                    <h1 class="title">Artículo de puente</h1>
                    <p class="description is-hidden-mobile">Un puente es una construcción que permite salvar un accidente geográfico como un río.</p>
                    <h3 class="time"><img src="images/iconos/time.png" width="16" height="16" alt="Icono de reloj"> Hace 2m</h3>
                </div>

                <div class="articulos" style="background-image:url('images/articulo_big_02.png')">
                    <p class="city">AVENTURA</p>
                    <h1 class="title">Artículo de bosque</h1>
                    <p class="description is-hidden-mobile">Lugar poblado de árboles y arbustos. Área con una importante densidad de árboles.</p>
                    <h3 class="time"><img src="images/iconos/time.png" width="16" height="16" alt="Icono de reloj"> Hace 15m</h3>
                </div>
            </div>

            <div class="column is-hidden-mobile">
                <div class="blog-secondary-article">
                    <figure class="image is-fullwidth">
                        <img src="images/articulo_small_01.png" alt="Imagen de Articulo de Blog secundario">
                    </figure>
                    <h2 class="title">Artículo de elefante</h2>
                    <h3 class="time"><img src="images/iconos/time.png" width="16" height="16" alt="Icono de reloj"> Hace 3h</h3>
                </div>

                <div class="blog-secondary-article">
                    <figure class="image is-fullwidth">
                        <img src="images/articulo_small_02.png" alt="Imagen de Articulo de Blog secundario">
                    </figure>
                    <h2 class="title">Artículo de loro</h2>
                    <h3 class="time"><img src="images/iconos/time.png" width="16" height="16" alt="Icono de reloj"> Hace 4h</h3>
                </div>

                <div class="blog-secondary-article">
                    <figure class="image is-fullwidth">
                        <img src="images/articulo_small_03.png" alt="Imagen de Articulo de Blog secundario">
                    </figure>
                    <h2 class="title">Artículo de camino</h2>
                    <h3 class="time"><img src="images/iconos/time.png" width="16" height="16" alt="Icono de reloj"> Hace 8h</h3>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- /.section -->


<!-- /.footer -->
<footer class="footer">
    <div class="content ">
        <figure class="is-pulled-left">
            <img src="images/logo/logo_02.png" width="86" height="16" alt="Logo">
        </figure>

        <div class="is-pulled-right">
            <div class="is-inline-block">
                <img src="images/iconos/instagram.png" width="16" height="16" alt="Facebook logo">
            </div>
            <div class="is-inline-block">
                <img src="images/iconos/facebook.png" width="16" height="16" alt="Facebook logo">
            </div>
        </div>

    </div>

</footer>
<!-- /.footer -->
</body>

</html>
