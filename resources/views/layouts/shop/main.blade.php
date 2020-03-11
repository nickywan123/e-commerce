<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- TODO: Import using Mix -->
    <script src="{{ asset('assets/js/geniuscart/geniuscart.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- TODO: Import using Mix -->
    <!-- GeniusCart Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/geniuscart/geniuscart.css') }}">
    <!-- Icons -->
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('assets/css/icofont/icofont.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- TODO: Styles should be in it's respective scss file that will be compiled by Mix -->

    <!-- TODO: Use SCSS -->
    <style>
        @media (min-width: 768px) {
            .form-body {
                width: 100%;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 992px) {
            .form-body {
                max-width: 500px;
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 1200px) {}

        .navbar {
            background: black !important;

        }



        .dropdown {
            border-radius: 0;
            border: 0;
        }

        .dropdown-menu {
            background: #0c73cc;
            border: 0;
            top: 80%;
            border-radius: 0px 0px 5px 5px;
        }

        .dropdown-item:hover {
            background: #085ca5;
            color: #fff;
        }

        .dropdown-menu a {
            color: #fff;
        }

        .navbar .nav-item .nav-link {
            color: black !important;

        }

        .navbar .nav-item .nav-link:hover .navbar .nav-item .nav-link {
            color: red !important;

        }


        /*search button */

        .main {
            width: 50%;
            margin: 50px auto;
        }

        /* Bootstrap 4 text input with search icon */

        .has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        body {
            background: white;
        }

        #wrapper {
            padding: 90px 15px;
        }

        .navbar-expand-lg .navbar-nav.side-nav {
            flex-direction: column;
        }

        .card {
            margin-bottom: 15px;
            border-radius: 0;
            box-shadow: 0 3px 5px rgba(0, 0, 0, .1);
        }

        .header-top {
            box-shadow: 0 3px 5px rgba(0, 0, 0, .1)
        }

        .leftmenutrigger {
            display: none
        }

        @media(min-width:992px) {
            .leftmenutrigger {
                display: block;
                display: block;
                margin: 7px 20px 4px 0;
                cursor: pointer;
            }

            #wrapper {
                padding: 70px 55px 30px 35px;
                display: inline-block;
                color: #fbcc34;
            }

            .navbar-nav.side-nav.open {
                left: 0;
            }

            .navbar-nav.side-nav {
                background: #fbcc34;
                box-shadow: 2px 1px 2px rgba(0, 0, 0, .1);
                position: fixed;
                top: 56px;
                flex-direction: column !important;
                left: -220px;
                width: 200px;
                padding-bottom: 40px;
                top: 18%;

            }
        }

        .animate {
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out
        }

        
    </style>

  
</head>

<body>
    <div id="app">
        @include('shopv2.layouts.navigation.navigationshop')
        <main>
            @yield('content')
        </main>
        @include('shopv2.layouts.footer.footer')
    </div>
    @stack('script')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>
