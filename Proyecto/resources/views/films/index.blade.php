@extends('master')
@section('title', 'Peliculas')
@section('content')
    <link rel="stylesheet" href="/css/films/filmsindex.less">
    <div class="container">
        <div class="jumbotron">
            <form action="{!! action('FilmsController@show') !!}" method="post">
                <input type="text" name="titulo" id="titulo" placeholder="Titulo">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button type="submit" class="btn btn-success">Buscar <span class="glyphicon glyphicon-search"></span></button>
            </form>
            <p>¿No encuentras tu pelicula? ¡Creala!</p>
            <a href="/films/create" class="btn btn-info">Crear <span class="glyphicon glyphicon-plus"></span></a>
            <a href="/genFilm" class="btn btn-info">Generar Datos de Prueba</a>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($films->isEmpty()) <!--Comprobamos si hay peliculas-->
        <h3 class="jumbotron" style="text-align: center;"> No hay Peliculas :C</h3>
        @else

            @foreach($films as $pelicula) <!--Mostramos los tickets en un bucle-->
            <div class="well well bs-component">
                <div>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{!! $pelicula->imagen !!}" class="img-thumbnail" alt>
                            <h1>{!! $pelicula->titulo !!}</h1>
                        </div>
                        <div class="col-md-7">
                            <h2>Datos</h2>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Fecha de Estreno</th>
                                    <th>Director</th>
                                    <th>Duración</th>
                                </tr>
                                </thead>
                                <tbody>
                                <td>{!! $pelicula->fecha_estreno !!}</td>
                                <td>{!! $pelicula->director !!}</td>
                                <td>{!! $pelicula->duracion !!}</td>
                                </tbody>
                            </table>
                            <p>{!! $pelicula->descripcion !!}</p>
                        </div>
                    </div>
                </div>

                <div class='well well bs-component row' id="herramientas">
                    <div class="col-md-3 col-md-push-1">
                        <a href="{!!  action('FilmsController@edit', $pelicula->id) !!}"
                           class="btn btn-info">Editar </a>
                    </div>
                    <div class="col-md-4 col-md-push-2">
                        <a href="{!!  action('FilmsController@like', $pelicula->id) !!}" class="btn btn-info">Me
                            gusta</a>
                        {!! $pelicula->likes !!}
                        <span class="glyphicon glyphicon-heart"></span>
                    </div>
                    <form method="post" action="{!!  action('FilmsController@destroy', $pelicula->id) !!}"
                          class="col-md-3 col-md-push-2">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <input type="submit" value="Eliminar" class="btn btn-danger"/>
                    </form>
                </div>
            </div>

            @endforeach
        @endif
    </div>
@endsection