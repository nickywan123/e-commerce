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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('layouts.administration.navigations.navigation-bar')
    <div class="app-body">
        @include('layouts.administration.navigations.side-bar')
        <main class="main">
            @include('layouts.administration.components.breadcrumbs')
            <div class="container-fluid">
                <div class="animated fadeIn">
                    <!-- Content Here -->
                    @yield('content')
                </div>
            </div>
        </main>
        @include('layouts.administration.components.aside')
    </div>
    @include('layouts.administration.components.footer')

    @stack('script')
</body>

</html>