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
    @stack('style')
    <!-- TODO: Use SCSS -->
    <style>
        .top-header .content .right-content .list li .sell-btn {
            font-size: 13px;
            font-weight: 600;
            color: #000000;
            border: 1px solid #000000;
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #FFDF00;
            font-size: 1rem;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #FFDF00;
            font-size: 1rem;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #FFDF00;
            font-size: 1rem;
        }

        .logo-header .helpful-links ul li.my-dropdown .my-dropdown-menu {
            width: 300px;
            position: absolute;
            top: 70%;
            right: 0%;
            border: 0px;
            padding: 0px;
            border-radius: 0px;
            -webkit-box-shadow: 0px 3px 25px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 3px 25px rgba(0, 0, 0, 0.15);
            background: #fff;
            z-index: 10;
            display: none;
        }

        .logo-header .search-box .categori-container {
            z-index: 9;
        }
    </style>
</head>

<body>
    <div id="app">
        @include('shopv2.layouts.navigation.navigation')
        <main>
            @yield('content')
        </main>
    </div>
    @stack('script')
</body>

</html>