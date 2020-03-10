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

    <!-- TODO: Import using Mix -->
    <script src="{{ asset('assets/js/geniuscart/geniuscart.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--font awesome-->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/multilevel-dropdown.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
            background: #fbcc34;
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
                padding: 70px 55px 15px 35px;
                display: inline-block;
                color: #fbcc34;
            }

            .navbar-nav.side-nav.open {
                left: 0;
                color: #fbcc34;

            }

            .navbar-nav.side-nav {
                background: #fbcc34;
                box-shadow: 2px 1px 2px rgba(0, 0, 0, .1);
                position: absolute;
                top: 85px;
                flex-direction: column !important;
                left: -220px;


                padding-bottom: 40px
            }
        }

        .animate {
            -webkit-transition: all .3s ease-in-out;
            -moz-transition: all .3s ease-in-out;
            -o-transition: all .3s ease-in-out;
            -ms-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;

        }
    </style>
    @stack('style')
</head>

<body>

    <!-- Navigation bar -->
    @include('shopv2.layouts.navigation.navigation')
    <main>

        @yield('content')
    </main>

    <!-- Footer -->
    @include('shopv2.layouts.footer.footer')

    @stack('script')

    <script>
        $(document).ready(function() {
            $('.navbar-light .dmenu').hover(function() {
                $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
            });
        });
        $(document).ready(function() {
            $('.leftmenutrigger').on('click', function(e) {
                $('.side-nav').toggleClass("open");
                e.preventDefault();
            });
        });
    </script>
</body>

</html>