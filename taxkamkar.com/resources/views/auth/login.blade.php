@extends('layouts.app')

@section('content')

 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: transparent !important;
    box-shadow: 0px 9px 12px 4px #ccc;">
                <div class="card-header"><center><img style="width: 200px;" src="http://taxkamkar.com/public/taxkamkar/assets/img/logo.png"></center></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <!-- Google Code -->
                            <a href="{{ url('auth/google') }}">
                                <button type="button" style="background:#4285f4;color:white;border:none;width: 200px;height:40px;border-radius: 6px;padding: 0px !important; margin-top: 10px;">
                                    <img src="https://www.iconfinder.com/data/icons/social-media-2210/24/Google-512.png" style="width:30px; background:white; border-radius:50%;" alt="">
                                    <b style="left: 5px; position: relative">Login with Google</b>
                                </button>
                            </a>
                            <!-- Google Code End -->
                            <!-- Register Button -->
                            <a href="{{ url('register') }}">
                                <button type="button" class="btn btn-primary">
                                    <b style="left: 5px; position: relative">Register</b>
                                </button>
                            </a>
                            <!-- Register Button Ends -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
