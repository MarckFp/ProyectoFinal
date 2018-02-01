@extends('master')
@section('title', 'Ver Todos los Tickets')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> Tickets </h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if ($tickets->isEmpty()) <!--Comprobamos si hay tickets-->
                <h3 class="jumbotron" style="text-align: center;"> No hay Tickets</h3>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tickets as $ticket) <!--Mostramos los tickets en un bucle-->
                        <tr>
                            <td>{!! $ticket->id !!}</td>
                            <td>
                                <a href="{!! action('TicketsController@show', $ticket->slug) !!}">{!! $ticket->title !!}</a>
                            </td>
                            <td>{!! $ticket->status ? 'Pendiente' : 'Respondido' !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection﻿