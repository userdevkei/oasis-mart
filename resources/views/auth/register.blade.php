<style>
    .register-page h4
    {
        font-size: 20px;
        text-align: center;
        background: orange;
        color: white;
        margin: 50px auto;
        width: 40%;
    }
    .register-page
    {
        margin: 50px auto;
        width: 60%;
        box-shadow: 2px 2px 6px 2px rgba(255,165,0,0.7);
        padding: 10px;
    }
    @media only screen and (max-width: 980px){
        .register-page h4
        {
            margin: 10px auto;
            font-size: 14px;
        }

        .register-page
        {
            margin: 10px auto;
            width: 70%;
            box-shadow: 2px 2px 6px 2px rgba(255,165,0,0.7);
            padding: 10px;
        }
    }
    .register-page .form-group .btn-primary
    {
        color:  white; !important;
        background: orange !important;
        border: none !important;

    }
    .register-page .form-group button .fa
    {
        font-size: 15px;
        margin-right: 7px;
        color: white;

    }
</style>
@extends('layouts.app')

@section('content')
    <section class="register">
        <div class="container">
            <div class="register-page">
                <h4>User Registration</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                               <i class="fa">@fas('user-plus')</i> {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
