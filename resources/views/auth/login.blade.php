<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #fafafa">
 <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row " >
                <div class="col-md-4 pt-5 offset-4">
                    <div class="card" style="width: 100%;">
                        <div class="">
                            <div class="card-body">
                                <div class="card-title align-items-center justify-content-between pt-3" align="center">
                                   <a href="#">
                                       <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo-2x.png/1b47f9d0e595.png 2x"
                                            width="150px">
                                   </a>
                                </div>
                                <div class="pt-4">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group row pr-2 pl-2 " align="center">
                                            <div class="col-md-12">
                                                <input id="email" placeholder="Phone number, username, or email" style="background-color: #fafafa" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row row pr-2 pl-2">
                                            <div class="col-md-12">
                                                <input id="password" placeholder="Password" style="background-color: #fafafa" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0 row pr-2 pl-2">
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary" style="width: 100%;height: 30px;line-height: 1px">
                                                    {{ __('Log in') }}
                                                </button>
                                            </div>
                                        </div>



                                        <div class="form-group" align="center">
                                            <br/>
                                            <hr style="margin: 0px"/>
                                            <button class="btn" style="z-index: 9999;position: absolute;margin-left: -20px;margin-top: -18px;background-color: #ffffff">OR</button>
                                            <br/>
                                            <a class="btn btn-link font-weight-bold" style="color: #385185" href="{{ route('password.request') }}">
                                                {{ __('Log in with Facbook') }}
                                            </a>
                                            @if (Route::has('password.request'))

                                                <a class="btn btn-link "  href="{{ route('password.request') }}">
                                                    {{ __('forget Password ?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 pt-3 offset-4">
                    <div class="card" style="width: 100%;">
                        <div class="">
                            <div class="card-body" align="center">
                                <label class="font-weight-normal text-dark"> Don't have an account ?
                                    <a href="/registeration" class="font-weight-bold text-decoration-none" >
                                        Sign up
                                    </a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
</body>
</html>
