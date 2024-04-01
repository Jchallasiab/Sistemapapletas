@extends('layouts.plantillalogin')

@section('bodystyle')
    login-page
@endsection

@section('boxstyle')
    login-box
@endsection

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ route('login') }}" class="h1"><b>Admin</b>LTE</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Acceder para iniciar sesión</p>

            <form method="POST" action="{{ route('login') }}" autocomplete="off" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <div class="input-group">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="{{ __('Username') }}" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <div class="social-auth-links text-center mt-2 mb-3">
                    <button type="submit" class="btn btn-primary btn-block">
                        <strong>{{ __('Login') }}</strong> <i class="fas fa-sign-in-alt"></i>
                    </button>
                    <p class="mb-0">
                        <br>
                        <a href="{{ route('register') }}" class="text-center">Registrar nuevo usuario</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
