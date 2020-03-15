<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Tangerine&display=swap" rel="stylesheet">
</head>

<body >

    <div class="backgroundImage">
        <a href="/register-dealer " class="btn grad1 btn-dealer"><b>{{ __('Be A Dealer') }}</b></a>

        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-3 col-md-4">
                    <img class="my-md-5 logo" src="{{asset('/images/Logo.png')}}" alt="No Logo">
                
                </div>
                <div class="col-md-4">
               
                </div>
            </div>
        </div>
       
        <div class="container content">
            <div class="row"> 
                <div class="col-md-2"></div>
                <div class="col-md-8">
            <h2> A home is made of <i>
                    <p>hopes</p>
                </i> and <i>
                    <p>dreams</p>
                </i>
            </h2>
            <h2>Let us<i>
                    <p>inspire</p>
                </i> you to build the perfect home!</h2> <br>
            </div>
            <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
      
                    <a href="/login " class="btn grad1 grad2"><b>{{ __('LOGIN') }}</b></a>
            <a href="/register" class="btn grad1 grad2"><b>{{ __('SIGN UP') }}</b></a>
        </div>
        <div class="col-md-4"></div>

        </div>
        </div>
        
        </div>

    </div>
</body>

</html>