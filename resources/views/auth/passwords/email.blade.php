@extends('layouts.auth')
@section('title','Recuperar contraseña')
@section('content')
<div class="container  pt-2 pb-2" style="height: 100vh">
    <div class="row align-items-center h-100">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
            <div class="card p-5">
                <a href="{{ route('home') }}" class="mx-auto text-center"><img src="{{ asset('img/logo/logo.svg') }}" alt="logo_vuama" width="70%"></a>
                    
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' error' : '' }}">
                        <div class="col-xs-12">
                            <i class="fa fa-fw fa-envelope-o left"></i>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="mi-correo@mail.com" autocomplete="off" autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-app d-block w-100 p-3">
                                Recuperar contraseña
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
