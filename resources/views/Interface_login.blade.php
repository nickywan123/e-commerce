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

    <style>
        .backgroundImage {

            background-image: url(/images/homepage.jpg);
            background-repeat: no-repeat;

            background-size: relative;

            /* //background-size:contain;
            
            //background-position: center center; */
            width: 100%;
            /* min-height: 100%; */
            height: auto;
            /* margin: 10% 10% 10% 10%; */


        }
    </style>

</head>

<body class="backgroundImage">
    <div>


        <center>
            <div class="container-fluid margin">
                <a href="https://www.behance.net/sakiran" target="_blank" class="themeBtn4">Follow @ Behance</a>
                <a class="nav-link " style="color:black; font-size:1.5rem;" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
        </center>
    </div>
</body>

</html>

<style>
    .margin {
        margin-top: 500px;
        margin-bottom: 20px;
    }

    .themeBtn {
        background: #ff5c00;
        color: #ffffff !important;
        display: inline-block;
        font-size: 15px;
        font-weight: 500;
        height: 50px;
        line-height: 0.8;
        padding: 18px 30px;
        text-transform: capitalize;
        border-radius: 1px;
        letter-spacing: 0.5px;
        border: 0px !important;
        cursor: pointer;
        border-radius: 100px;

    }

    a:hover {
        color: #ffffff;
        text-decoration: none;
    }

    .themeBtn4 {
        background: #006eff;
        color: #ffffff !important;
        display: inline-block;
        font-size: 15px;
        font-weight: 500;
        height: 50px;
        line-height: 0.8;
        padding: 18px 30px;
        text-transform: capitalize;
        border-radius: 1px;
        letter-spacing: 0.5px;
        border: 0px !important;
        cursor: pointer;
        border-radius: 100px;

    }

    .themeBtn4:hover {
        background: rgb(0, 110, 255);
        color: #ffffff;
        box-shadow: 0 10px 25px -2px rgba(0, 110, 255, 0.6);
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