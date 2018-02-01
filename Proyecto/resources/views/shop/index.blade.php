@extends('master')
@section('title', 'Shop')
@section('content')
    <div class="container">
        <div class="well well bs-component">
            <form method="post" class="form-group">
                <input type="text" name="producto" id="producto" placeholder="Producto" class="form-control">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button type="submit" class="btn btn-success center-block">Buscar <span
                            class="glyphicon glyphicon-search"></span></button>
            </form>
        </div>
        <div class="well well bs-component">
            <div class="jumbotron">
                <a href="" class="btn btn-info"><h3>Comics</h3></a>
                <a href="" class="btn btn-info"><h3>Manga</h3></a>
                <a href="" class="btn btn-info"><h3>VideoJuegos</h3></a>
                <a href="" class="btn btn-info"><h3>Merchandising</h3></a>
                <a href="" class="btn btn-danger"><h3>Atras</h3></a>
            </div>

            @if ($producto->isEmpty()) <!--Comprobamos si hay peliculas-->
                <h3 class="jumbotron" style="text-align: center;"> No hay Productos </h3>
            @else
                @foreach($producto as $item)
                    <div class="well well bs-component">

                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection