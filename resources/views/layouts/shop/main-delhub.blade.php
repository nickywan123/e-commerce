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
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nexa' rel='stylesheet'>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    @stack('style')
</head>

<body class="promo-page-background-color " >

    <!-- Navigation bar -->
    {{-- @include('layouts.shop.navigation.navigation-delhub') --}}

    <!-- Side bar -->
    {{-- @include('layouts.shop.navigation.sidebar') --}}

    <main id="body-content-collapse-sidebar">
        <div id="app">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    {{-- @include('layouts.shop.footer.footer-delhub') --}}

    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    
</body>


<style>
.delhub-digital-bg-img{
background-image: url(/images/delhub/delhub-digital-bg.jpg);
background-repeat: no-repeat;
background-position: fixed;
background-size: cover;
/* background-size: 100vw 100vh; */
background-size:fixed;
/* width: 100vw;
height: 100vh; */
}

.delhub-digital-bg-mobile-img{
background-image: url(/images/delhub/delhub-digital-bg-mobile.jpg);
background-repeat: no-repeat;

background-size: cover;
background-size: 100% 100%;


}

/* body{
    height: 100%;
} */


</style>
</html>