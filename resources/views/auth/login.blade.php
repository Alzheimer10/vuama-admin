@extends('layouts.auth')
@section('title','Iniciar Sesión')

@section('content')
<div class="container pt-2 pb-2" style="height: 100vh">
    <div class="row align-items-center h-100">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
            <div class="card p-5">
                <a href="{{ route('home') }}" class="mx-auto text-center"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" width="70%"></a>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group mb-0">
                        <label for="email" class="col-form-label pb-0">Correo electrónico</label>
                        <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group mb-4">
                        <label for="password" class="col-form-label pb-0">Contraseña</label>
                        <input id="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-app d-block w-100 p-3">
                                ENTRAR
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                            <a class="btn btn-link float-right" href="{{ route('register') }}">
                                Registrarse
                            </a>
                        </div>
                    </div>


                </form>

                <div class="row mt-2">
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
@endsection


@section('scripts')
@endsection



