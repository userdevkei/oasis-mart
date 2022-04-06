<style>
    .login-page
    {
        margin: 50px auto;
        width: 60%;
        box-shadow: 2px 2px 6px 2px rgba(255,165,0,0.7);
        padding: 10px;
    }
    .login-page h4
    {
        font-weight: bold;
        font-size: 20px;
        margin: 10px auto;
        width: 50%;
        text-align: center;
        background: orange;
        color: white;
    }

    .login-page .btn-primary
    {
        color: white !important;
        border: none !important;
        background: orange !important;
    }
    @media only screen and (max-width: 980px) {
        .login-page
        {
            margin: 10px auto;
            width: 70%;
            box-shadow: 2px 2px 6px 2px rgba(255,165,0,0.7);
            padding: 10px;
        }
        .login-page h4
         {
             font-size: 14px;
         }
        .login-img
        {
            margin: 1px auto;
            width: 100%;
            padding: 1px;
        }
        .login-img img
        {
            border-radius: 50%;
        }
    }
    .login-img
    {
        margin: 10px auto;
        width: 20%;
        padding: 20px;

    }
    .login-img img
    {
        border-radius: 50%;
    }
    .login-page .form-group .col-md-8 button .fa
    {
        font-size: 15px;
        color: white;
        margin-right: 5px;
    }
</style>
@extends('layouts.app')

@section('content')
    <section class="login">
        <div class="container">
            <div class="login-page">
                <h4>User Authorization</h4>
                    <div class="login-img">
                        <img class="d-block w-100" src="{{ url('/storage/images/avatar-1.png') }}"
                             alt="First slide">
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa">@fas('lock-open')</i> {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                <hr>
                <p class="text-center">
                    I don't have an account <a class="btn-link" href="{{ route('register') }}">register here</a> .
                </p>
                </div>
            </div>
    </section>
@endsection
