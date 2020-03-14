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

    <!-- Navigation bar -->
    @include('layouts.shop.navigation.navigation')

    <!-- Side bar -->
    @include('layouts.shop.navigation.sidebar')

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.shop.footer.footer')
    
    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{ asset('assets/js/expandedsidemenu/expandedsidemenu.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $(function() {
                expandedsidemenu.init({
                    menuid: 'mysidebarmenu'
                });
            });
        });
    </script>
    @stack('script')
</body>

</html>