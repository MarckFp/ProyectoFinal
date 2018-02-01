<nav class="navbar navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Inicio
                <div class="glyphicon glyphicon-home"></div>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="/events">Eventos
                        <div class="glyphicon glyphicon-list-alt"></div>
                        <span class="sr-only">(current)</span></a></li>
                <li><a href="/shop">Tienda Online
                        <div class="glyphicon glyphicon-euro"></div>
                    </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Secciones
                        <div class="glyphicon glyphicon-star-empty"></div>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="hidden"><a href="/comics">Ryota-<strong>Comics</strong></a></li>
                        <li class="hidden"><a href="/series">Ryota-<strong>Series</strong></a></li>
                        <li><a href="/films">Ryota-<strong>Pelis</strong></a></li>
                        <li class="hidden"><a href="/manga">Ryota-<strong>Manga</strong></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/about">Sobre Nosotros</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cart">Carro
                        <div class="glyphicon glyphicon-shopping-cart"></div>
                    </a></li>
                <li><a href="/contact">Contactar
                        <div class="glyphicon glyphicon-bullhorn"></div>
                    </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Usuario
                        <div class="glyphicon glyphicon-user"></div>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if (session('usuario'))
                            <li><a href="/tickets">Mis Tickets
                                    <div class="glyphicon glyphicon-paperclip"></div>
                                </a></li>
                            <li><a href="/profile">Mi Perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout">Log Out
                                    <div class="glyphicon glyphicon-lock"></div>
                                </a></li>
                        @else
                            <li><a href="/login">Log in</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>