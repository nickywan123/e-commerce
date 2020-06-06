    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <style>
            .backgroundImage {
                width: 100vw;
                height: 100vh;
                background-image: url(/images/homepage.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
            }




            width: 100%;

            height: auto;


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
        @stack('style')
        {!! NoCaptcha::renderJs() !!}
    </head>

    <body class="backgroundImage">
        <div>
            <nav class="navbar navbar-expand-md navbar-dark  shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand " href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}

                        {{-- <img class="logo" width="60%" src="{{ asset('images/logo.png') }}" alt="No Logo"> --}}
                    </a>
                    <button class="navbar-toggler" style="color:#fbcc34;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto  ">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link " style="color:#f8f9fa; font-size:1.5rem;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" style="color:#f8f9fa; font-size:1.5rem;" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" style="color:#f8f9fa; font-size:1.5rem;" href="{{ url('/registrations/dealer') }}">{{ __('Be a Agent!') }}</a>
                            </li>
                            @endif

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>


                    </div>
                </div>
            </nav>



            <main class="py">

                @yield('content')
            </main>
        </div>
    </body>

    </html>