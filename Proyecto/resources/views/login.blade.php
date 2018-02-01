@extends('master')
@section('title','Log In')
@section('content')

    <div class='container col-md-8 col-md-offset-2'>
        <div class='well well bs-component'>
            <form class='form-horizontal' method="post">
                @if(!(empty($errors->all())))
                    <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Log In</legend>
                    <div class='form-group'>
                        <label for='title' class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type='email' class="form-control" id='email' placeholder="Email" name="email"
                                   value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Password</label>
                        <div class="col-lg-10">
                            <input type='password' class="form-control" id='password' placeholder="Password"
                                   name="password">
                        </div>
                    </div>

                    <div class='form-group'>
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="/" class="btn btn-default">Cancelar</a>
                            <button type='submit' class="btn btn-primary">Log In</button>
                            <a href="#" class="btn btn-danger">¿No Recuerda Su Contraseña?</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class='well well bs-component'>
            <form class='form-horizontal' method="post">
                @if(!(empty($errors->all())))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Register</legend>
                    <div class='form-group'>
                        <label for='title' class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type='email' class="form-control" id='email' placeholder="Email" name="email">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Name</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='name' placeholder="Name" name="name">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Surnames</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='surn' placeholder="Surnames" name="surn">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Address</label>
                        <div class="col-lg-10">
                            <input type='text' class="form-control" id='addr' placeholder="Address" name="addr">
                        </div>
                    </div>

                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Password</label>
                        <div class="col-lg-10">
                            <input type='password' class="form-control" id='pwd' placeholder="Password" name="pwd">
                        </div>
                    </div>
                    <div class='form-group'>
                        <label for='content' class='col-lg-2 control-label'>Repeat Password</label>
                        <div class="col-lg-10">
                            <input type='password' class="form-control" id='rpwd' placeholder="Password" name="rpwd">
                        </div>
                    </div>

                    <div class='form-group'>
                        <div class="col-lg-10 col-lg-offset-2">
                            <a href="/" class="btn btn-default">Cancelar</a>
                            <button type='submit' class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>

@endsection