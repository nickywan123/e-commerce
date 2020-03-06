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
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <style>
        .backgroundImage {

            background-image: url(/images/homepage.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body>
    <div style="width: 100vw; height: 100vh;" class="backgroundImage">
        <div class="container-fluid" style="position: relative; top: 50%;">
            <center>
                <h1 style="color: white; opacity:0.8; margin-bottom: 40px; font-size:40px;">Welcome to a world of <i>
                        <p style="display:inline; font-family: 'Pacifico', cursive;">Inspiration</p>
                    </i> for your home</h1>
                <a href="/login " class="btn success" style="color:black; margin-right:20px; font-size:25px;"><b>{{ __('LOGIN') }}</b></a>
                <a href="/register  " class="btn success" style="color:black;  margin-left:20px; font-size:25px;"><b>{{ __('SIGN UP') }}</b></a>
            </center>
        </div>
    </div>
</body>

</html>

<style>
    .margin {
        margin-top: 400px;
        margin-bottom: 80px;
    }

    .btn {
        border: 3px solid black;
        background-color: #fbcc34;
        color: black;
        padding: 4px 24px;
        font-size: 16px;
        cursor: pointer;
        margin-right: 20px;
    }


    /* black */
    .success {
        border-color: silver;
        border-radius: 8px;
        color: black;
    }



    :root {
        --color_0: #FFDF00;

        --color_1: #FFDF00;
        --color_2: #000000;
        --color_3: #000000;
    }



    form {
        font-family: 'Roboto', sans-serif;
        margin-top: 180px;
        opacity: 0.9;

    }

    .form-horizontal .header {
        background: linear-gradient(135deg, var(--color_2), var(--color_3), var(--color_2), var(--color_3));
        padding: 30px 25px;
        font-size: 30px;
        color: #FFDF00;
        ;
        text-align: center;
        text-transform: uppercase;
        border-radius: 3px 3px 0 0;
    }

    .form-horizontal .heading {
        font-size: 16px;
        color: #2655c1;
        margin: 10px 0 20px 0;
        text-transform: capitalize;
    }

    .form-horizontal .form-content {
        padding: 25px;
        background: #FFDF00;
        ;
    }

    .form-horizontal .form-control {
        padding: 12px 16px 12px 39px;
        height: 50px;
        font-size: 14px;
        color: #000000;
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        box-shadow: none;
        margin-bottom: 15px;
    }

    .form-horizontal .form-control:focus {
        border-color: #2655c1;
        box-shadow: none;
    }

    .form-horizontal .control-label {
        font-size: 17px;
        color: #000000;
        position: absolute;
        top: 5px;
        left: 27px;
        text-align: center;
    }

    .form-horizontal textarea.form-control {
        resize: vertical;
        height: 130px;
    }

    .form-horizontal .btn {
        font-size: 18px;
        color: #FFDF00;
        float: right;
        margin: 10px 0;
        border: 2px solid #ccc;
        border-radius: 0;
        padding: 10px 25px;
        transition: all 0.5s ease 0s;
    }

    .btnmk {
        background: linear-gradient(135deg, var(--color_2), var(--color_3), var(--color_2), var(--color_3));
        color: var(--color_1) !important;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .form-horizontal .btn:hover {
        background: #fff;
        border-color: #2655c1;
        color: #000 !important;
    }

    .col-sm-6 {
        float: left;
    }

    .col-md-offset-2.col-md-6 {

        margin: 0 auto;

    }
</style>