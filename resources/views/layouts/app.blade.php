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
            <!-- <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:white;  opacity: 0.3">
                <div class="container-fluid">
                    <a class="navbar-brand " href="{{ url('/') }}">
                        {{-- {{ config('app.name', 'Laravel') }} --}}

                        {{-- <img class="logo" width="60%" src="{{ asset('images/logo.png') }}" alt="No Logo"> --}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent"-->
            <!-- Left Side Of Navbar -->
            <!--<ul class="navbar-nav mr-auto">

                        </ul-->

            <!-- Right Side Of Navbar -->
            <!--ul class="navbar-nav ml-auto"-->
            <!-- Authentication Links -->
            <!-- @guest

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
                                <a class="nav-link" style="color:#f8f9fa; font-size:1.5rem;" href="{{ url('/registrations/dealer') }}">{{ __('Be a Dealer!') }}</a>
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
            </nav-->

            <div class="">
                <div class="row">
                    <div class="col-md-offset-2 col-md-6">

                        <form class="form-horizontal">
                            <div class="header">Your Details</div>

                            <div class="form-content">


                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                        <input class="form-control" value="{{ $user->userInfo->name }}" id="" placeholder=" " type="text" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                                        <input class="form-control" value="{{ $user->userAddresses[0]->address_1 }}" id="" placeholder="" type="text" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="control-label" for="exampleInputName2"><i class="fa fa-envelope-o"></i></label>
                                        <input class="form-control" value="{{ $user->userContacts[0]->mobile_num }}" id="exampleInputName2" placeholder="" type="email" disabled>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label class="control-label" for="exampleInputName2"><i class="fa fa-lock"></i></label>
                                            @if($user->orders != null)
                                            <input class="form-control" value="123" id="exampleInputName2" placeholder="" type="text" disabled>
                                            @else
                                            <input class="form-control" value="No data" id="exampleInputName2" placeholder="" type="text" disabled>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>



                                <div class="clearfix"></div>



                                <div class="clearfix">
                                    <a href="/shop" type="submit" class="btn btn-default btnmk"> Close</a>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

            <main class="py">
                {{-- <img src="{{ asset('images/homepage.jpg') }}" class="responsive" alt="No Logo"> --}}
                @yield('content')


            </main>
        </div>
    </body>

    </html>

    <style>
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