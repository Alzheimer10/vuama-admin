@extends('admin.layout.auth')

@section('content')
    <div class="form-inner w-100">
        <div class="logo text-uppercase">
            <span><img src="{{ asset('img/logo/logo-white.svg') }}" alt="logo_vuama"></span>
            <strong class="text-primary" style="font-size: 1rem; width: 100%;display: block">Dashboard</strong>
            
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
            @csrf

            <div class="form-group-material @if(isset($errors)) {{ $errors->has('email') ? ' has-error' : '' }} @endif">
                <input id="email" type="email" name="email" required class="input-material" value="{{ old('email') }}">
                <label for="email" class="label-material @if( !empty(old('email'))  ) active @endif">email</label>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group-material mb-2 @if(isset($errors)) {{ $errors->has('password') ? ' has-error' : '' }} @endif">
                <input id="password" type="password" name="password" required class="input-material">
                <label for="password" class="label-material" @if( !empty(old('password'))  ) active @endif>Password</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-12 mb-4 text-left">
                <div class="i-checks">
                    <input id="remember" type="checkbox"  {{ old('remember') ? 'checked' : '' }} class="form-control-custom">
                    <label for="remember"> Recuerdame</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary text-uppercase w-100 d-block">
                Entrar
            </button>
          <!-- This should be submit button but I replaced it with <a> for demo purposes-->
        </form>
{{--         <a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small
            ><a href="register.html" class="signup">Signup</a> --}}
    </div>
@endsection
