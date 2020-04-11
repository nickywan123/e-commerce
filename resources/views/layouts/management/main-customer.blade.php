<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- JQUERY for datepicker -->
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
<!--Bootstrap style for table form -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Tangerine&display=swap" rel="stylesheet">
</head>

<body class="app header-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.management.navigations.navigation-bar-customer')
    <div class="app-body">
        @include('layouts.management.navigations.side-bar-customer')
        <main class="main " style="margin-top:2%;">

            @yield('breadcrumbs')
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <!-- Content Here -->
                    @yield('content')
                </div>
            </div>
        </main>
        {{-- @include('layouts.management.components.aside') --}}
    </div>
    @include('layouts.management.components.footer')

    @stack('script')
 
</body>

</html>