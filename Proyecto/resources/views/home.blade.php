@extends('master')
@section('title', 'Home')
@section('content')

    <link rel="stylesheet" href="/css/home.less">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="/Imagenes/manga_store.jpg" alt="Tienda">
                <div class="carousel-caption">
                    <h3>Nuestra Tienda</h3>
                    <p>Ven a nuestra Tienda repletas de comis y manga</p>
                </div>
            </div>

            <div class="item">
                <img src="/Imagenes/comic_store.jpg" alt="Tienda">
                <div class="carousel-caption">
                    <h3>Nuestra Tienda</h3>
                    <p>Ven a nuestra Tienda repletas de comis y manga</p>
                </div>
            </div>

            <div class="item ">
                <img src="/Imagenes/movies.jpg" alt="Peliculas">
                <div class="carousel-caption">
                    <h3>Seguimiento de Peliculas</h3>
                    <p>Seguimiento de tus peliculas favoritas</p>
                </div>
            </div>

            <div class="item ">
                <img src="/Imagenes/series.jpg" alt="Peliculas">
                <div class="carousel-caption">
                    <h3>Seguimiento de Series</h3>
                    <p>Seguimiento de tus series favoritas de Netflix, HBO, y muchos más.</p>
                </div>
            </div>

            <div class="item">
                <img src="/Imagenes/302729-Marvel_Comics-Civil_War_comics.jpg" alt="Marvel Comics">
                <div class="carousel-caption">
                    <h3>Comics de Marvel y DC</h3>
                    <p>Los mejores comics y selecciones de DC comis y Marvel a tu disposición</p>
                </div>
            </div>

            <div class="item">
                <img src="/Imagenes/anime-crossover-background-11.jpg" alt="Jump">
                <div class="carousel-caption">
                    <h3>Jump</h3>
                    <p>¡Disfruta de las Revistas Jump, Jump Festa y Shonen Jump traducidas e importadas desde
                        Japón!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class='container'>
        <div class='well well bs-component'>
            <header>
                <h1>Ryota</h1>
            </header>
            <p>Tu nueva web de seguimiento y compra online. Visita nuestra tienda con todo tipo de comics, mangas y series y pelis en
                BlueRay, además en nuestra web podras seguir al día y ver tu registro. Ofrecemos soporte
                para:</p>
            <ul>
                <li>Series</li>
                <li>Peliculas</li>
                <li>Anime</li>
                <li>Comics</li>
                <li>Manga</li>
            </ul>
            <p>Proximamente: Libros y Videojuegos</p>
        </div>

        <div class="jumbotron">
            <h2>¡Visitanos!</h2>
            <p>Visita nuestra tienda fisica para darnos una alegria :)</p>
            <h3>¿Como llegar?</h3>
            <p>Sencillo solo tienes que coger el <u>tren cercanias</u> hasta <strong>Sol</strong> o
                puedes ir tambien hasta el <u>metro</u> de <strong>Sol</strong> o <strong>Gran Vía</strong></p>
            <p>Facil sencillo y centrico para que todos nuestros amados clientes puedan visitarnos</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1518.7471072512112!2d-3.7057354419677706!3d40.42005423683887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287da44b4713%3A0x2d0ecfd311f6ed14!2sGran+V%C3%ADa%2C+35%2C+28013+Madrid!5e0!3m2!1ses!2ses!4v1516354253802"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
@endsection