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
    <!-- Expanded Side Menu -->
    <link rel="stylesheet" href="{{ asset('assets/css/expandedsidemenu/expandedsidemenu.css') }}">
    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    @stack('style')

    <script>
        jQuery(function() {
            expandedsidemenu.init({
                menuid: 'mysidebarmenu'
            })
        })
    </script>
    <style>
        /* Make sure the background image covers the screen */
        html {
            height: 100%;
        }

        body {
            height: 100%;
        }
    </style>
</head>

<body>

    <div class="bg-md bg-sm">
        <div class="row">
            <div class="col-6 offset-3 col-md-4 offset-md-4 text-center">
                <img class="mw-100 w-50-md" src="{{ asset('storage/logo/bujishu.png') }}" alt="">
            </div>
        </div>
        <div>
            <div class="card border-rounded-0 bg-bujishu-gold mt-4 guests-card">
                <h5 class="text-center bujishu-gold form-card-title">Sign in</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-row mb-2">
                            <div class="input-group col-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user bujishu-gold"></i></span>
                                </div>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Your email address">
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
                                    <input class="form-check-input" type="checkbox" name="remember-me" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label text-dark" for="remember">
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
                                <input type="submit" name="submit" class="btn btn-primary" value="LOGIN" style="background-color: #fff; color: #000000; font-weight: 700; border: 1px solid #ffd445; border-radius: 10px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>