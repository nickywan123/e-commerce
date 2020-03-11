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


    <style>
        .backgroundImage {

            background-image: url(/images/homepage.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100vw;
            height: 140vh;
        }

        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
            text-align: center;
        }

        .menu a {
            background-color: #e5e5e5;
            padding: 8px;
            margin-top: 7px;
            display: block;
            width: 100%;
            color: black;
        }

        .main {
            float: left;
            width: 60%;
            padding: 0 20px;
        }

        .right {
            background-color: #e5e5e5;
            float: left;
            width: 20%;
            padding: 15px;
            margin-top: 7px;
            text-align: center;
        }

        a.btn {

            color: black;
            border-radius: 10px;

        }

        #grad1 {

            background-image: linear-gradient(#ffe7a3, #ffca05, #faac18);

            border-image-slice: 1;


        }

        h1 {

            color: white;
        }

        .a {
            position: absolute;
            top: 50%;


        }
    </style>
</head>

<body style="font-family:Verdana;color:#aaaaaa;">

    <div class="wrapper">
        <div class="backgroundImage">
            <a href="/registrations/dealer " id="grad1" class="btn" style="float:right;"><b>{{ __('SIGN UP AS A DEALER') }}</b></a>
            <div class="container-fluid" style="position: relative; top: 50%;">
                <center>
                    <div class="container">
                        <h1>A homes is made of <i>
                                <p style="display:inline; font-size:75px;font-family: 'Dancing Script', cursive;
font-family: 'Tangerine', cursive;">hopes</p>
                            </i> and <i>
                                <p style="display:inline; font-size:75px; font-family: 'Dancing Script', cursive;
font-family: 'Tangerine', cursive;">dreams</p>
                            </i>
                        </h1>

                        <h1>Let us<i>
                                <p style="display:inline; font-size:75px;font-family: 'Dancing Script', cursive;
font-family: 'Tangerine', cursive;">inspire</p>
                            </i> you to build the perfect home!
                        </h1> <br>
                    </div>

                    <a href="/login " id="grad1" class="btn" style="margin-right:20px; font-size:20px;"><b>{{ __('LOGIN') }}</b></a>
                    <a href="/register   " id="grad1" class="btn" style="margin-left:20px; font-size:20px;"><b>{{ __('SIGN UP') }}</b></a>

                    <div class="container-fluid" style="position: absolute; left:60%; top:-150%;">
                </center>
            </div>
        </div>
    </div>

    </div>


</body>

</html>