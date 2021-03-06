<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('style')

    <style>
        /* Make sure the background image covers the screen */
        html {
            height: 100%;
        }

        body {
            height: 100%;
        }

        .remember-check {
            width: 15px;
            height: 15px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="bg-md bg-sm ">
        <div class="row">
            <div class="col-6 offset-3 col-md-4 offset-md-4 text-center">
                <img class="mw-100 w-50-md" src="{{ asset('storage/logo/bujishu-logo-2020.png') }}" alt="">
            </div>
        </div>
        <div class="">
            <div class="card bg-bujishu-gold mt-4 guests-card" style="border-radius: 10px;">
                <h5 class="text-center bujishu-gold form-card-title " style="border-radius: 10px;"><b>SIGN IN</b></h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-row mb-2">
                            <div class="input-group col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bujishu-gold"></i></span>
                                </div>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Your email address">
                            </div>
                            <div class="col-12">
                                @error('email')
                                <span class="text-danger mt-1" role="alert">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row mb-2">
                            <div class="input-group col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-key bujishu-gold"></i></span>
                                </div>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Your password">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-1">
                                <div class="form-check">
                                    <input class="form-check-input remember-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-dark" style="padding-top: 1px;" for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-right mb-1">
                                <a class="text-dark" href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 text-center mb-1">
                                <button type="submit" class="btn" style="background-color: #ffffff;">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>