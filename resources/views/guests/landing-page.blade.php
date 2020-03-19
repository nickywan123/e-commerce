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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Tangerine&display=swap" rel="stylesheet">
</head>

<body>

    <div class="backgroundImage">
        <div class="text-right p-3">
            <a href="/register-dealer " class="btn bjsh-btn-gold p-2"><b>{{ __('Be A Dealer') }}</b></a>
        </div>


        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col-4 col-md-4 mx-auto my-auto">
                    <img class="mw-100" src="{{ asset('storage/logo/Bujishu_logo.png') }}" alt="Bujishu">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mb-4">
                <div class="col-12 col-md-8 offset-md-2 text-center">
                    <h2 class="bujishu-motto">
                        A home is made of
                        <i>
                            <p class="bujishu-recursive">hopes</p>
                        </i>
                        and
                        <i>
                            <p class="bujishu-recursive">dreams</p>
                        </i>
                    </h2>
                    <h2 class="bujishu-motto">
                        Let us
                        <i>
                            <p class="bujishu-recursive">inspire</p>
                        </i>
                        you to build the perfect home!
                    </h2>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 col-md-4 offset-md-4 text-center">
                    <a href="/login " class="btn bjsh-btn-gold grad1 grad2"><b>{{ __('LOGIN') }}</b></a>
                    <a href="/register" class="btn bjsh-btn-gold grad1 grad2"><b>{{ __('SIGN UP') }}</b></a>
                </div>
            </div>
        </div>

    </div>

    </div>
</body>

</html>