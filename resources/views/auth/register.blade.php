@extends('layouts.auth')
@section('title','Registro')

@section('content')
    <div class="container pt-2 pb-2">
        <div class="row align-items-center h-100">
            <div class="col-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
                <div class="card p-5">
                    <a href="{{ route('home') }}" class="mx-auto text-center"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" width="70%"></a>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="row">                        
                            <div class="form-group mb-0 col-xs-12 col-md-6">
                                <label for="name" class="col-form-label pb-0">Nombre</label>
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus autocomplete="false">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group mb-0 col-xs-12 col-md-6">
                                <label for="lastname" class="col-form-label pb-0">Apellido</label>
                                <input id="lastname" type="text" class="form-control {{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Apellido" name="lastname" value="{{ old('lastname') }}" required autocomplete="false">
                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-0 col-xs-12 col-md-6">
                                <label for="email" class="col-form-label pb-0">Correo electrónico</label>
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Apellido" name="email" value="{{ old('email') }}" required autocomplete="false">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group mb-0 col-xs-12 col-md-6">
                                <label for="ci" class="col-form-label pb-0">Cédula de Identidad</label>
                                <input id="ci" type="text" class="form-control {{ $errors->has('ci') ? ' is-invalid' : '' }}" placeholder="Cédula de Identidad" name="ci" value="{{ old('ci') }}" required autocomplete="false">
                                @if ($errors->has('ci'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ci') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <label for="password" class="col-form-label pb-0">Contraseña</label>
                            <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password" required autocomplete="false">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-4">
                            <label for="password_confirmation" class="col-form-label pb-0">Confirmar contraseña</label>
                            <input id="password_confirmation" type="password" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password_confirmation" required autocomplete="false">
                            @if ($errors->has('password_confirmation'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col">
                                <button type="submit" class="btn btn-app d-block w-100 p-3">
                                    COMENZAR!
                                </button>
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Poseo una cuenta
                                </a>
                            </div>
                        </div>


                    </form>

                    <div class="row">
                        <div class="login-or text-center d-bock w-100">
                          <hr class="hr-or">
                          <span class="span-or">o</span>
                        </div>

                        <div class="form-group col-6 mb-0">
                            <button class="btn btn-primary b-block w-100"><i class="fab fa-facebook"></i> <span> Facebook </span></button>
                        </div>
                        <div class="form-group col-6 mb-0">
                            <button class="btn btn-danger b-block w-100"><i class="fab fa-google"></i> <span> google </span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
