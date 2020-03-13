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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Expanded Side Menu -->
    <link rel="stylesheet" href="{{ asset('assets/css/expandedsidemenu/expandedsidemenu.css') }}">
    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    @stack('style')

    <script>
        jQuery(function() {
            expandedsidemenu.init({
                menuid: 'mysidebarmenu'
            })
        })
    </script>
</head>

<body>
    @include('layouts.guest.navigation.navigation')
</body>

</html>