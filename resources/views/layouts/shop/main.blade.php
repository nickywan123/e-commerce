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

    @stack('style')
</head>

<body>

    <!-- Navigation bar -->
    @include('shopv2.layouts.navigation.navigationshop')


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
        $(document).ready(function() {

            $(".dropdown-submenu").click(function(event) {
                // stop bootstrap.js to hide the parents
                event.stopPropagation();
                // hide the open children
                $(this).find(".dropdown-submenu").removeClass('open');
                // add 'open' class to all parents with class 'dropdown-submenu'
                $(this).parents(".dropdown-submenu").addClass('open');
                // this is also open (or was)
                $(this).toggleClass('open');
            });

        });
        $(document).ready(function() {
            $('#side-menu-trigger').click(function() {
                console.log('button clicked.');
                $('.sidemenu').css('left', '0');
            });
        });
    </script>
</body>

</html>