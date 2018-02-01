@extends('master')
@section('title','Editar una pelicula')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <fieldset>
                    <legend>Editar Pelicula</legend>
                    <div class='form-group'>
                        <label for='title' class="col-lg-2 control-label">Titulo</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='titulo' placeholder="Title" name="titulo" value="{!! $films->titulo !!}">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='title' class="col-lg-2 control-label">Director</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='director' placeholder="Director" name="director" value="{!! $films->director !!}">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Descripción</label>
                        <div class='col-lg-10'>
                            <textarea class='form-control' rows='3' id='descripcion' name="descripcion" placeholder="Pon una breve descripción de tu pelicula.">{!! $films->descripcion !!}</textarea>
                            <span class='help-block'>Pon una breve descripción de tu pelicula.</span>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='title' class="col-lg-2 control-label">Fecha de Estreno</label>
                        <div class="col-lg-10">
                            <input type='date' class="form-control" id='fecha_estreno' placeholder="Fecha de Estreno" name="fecha_estreno" value="{!! $films->fecha_estreno !!}">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Duración</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='duracion' placeholder="Duracioón (Xh Xmin)" name="duracion" value="{!! $films->duracion !!}">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Imágen</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='imagen' placeholder="URL de la Imágen" name="imagen" value="{!! $films->imagen !!}">
                        </div>
                    </div>

                    <div class='form-group'>
                        <div class="col-lg-10 col-lg-offset-2">
                            <a class="btn btn-default" href="/films">Cancelar</a>
                            <button type='submit' class="btn btn-primary">Modificar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection