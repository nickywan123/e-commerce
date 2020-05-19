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
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    @stack('style')
</head>

<body class="promo-page-background-color font-family">

    <!-- Navigation bar -->
    @include('layouts.shop.navigation.navigation')
    {{-- @livewire('counter') --}}

    <!-- Side bar -->
    @include('layouts.shop.navigation.sidebar')

    <main id="body-content-collapse-sidebar">
        <div id="app">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('layouts.shop.footer.footer')

    <!-- Custom Scrollbar CDN -->
    <!-- TODO: Import using mix. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
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


            $('#body-content-collapse-sidebar,#footer-content-collapse-sidebar,.nav-content-sidebar-collapse').click(function(event) {
                if ($(event.target).attr('id') !== "sidebar" && $(event.target).attr('id') !== "sidebarCollapse") {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                }
            });
        });
    </script>
    <script type="text/javascript">
        function onPageLoadGetQuantity() {
            let getQuantityURL = "{{ route('web.shop.cart.quantity', ['id' => Auth::user()->id]) }}";
            const cartQuantityElement = $('#cart-quantity');
            const cartQuantityElementMobile = $('#cart-quantity-mobile');

            $.ajax({
                async: true,
                beforeSend: function() {
                    console.log('Request starting.');
                },
                complete: function() {
                    console.log('Request complete.');
                },
                url: getQuantityURL,
                type: 'GET',
                success: function(response) {
                    cartQuantityElement.text(response.data);
                    cartQuantityElementMobile.text(response.data);
                },
                error: function(response) {
                    console.log('Error');
                    console.log(response);
                }
            });
        }

        $(document).ready(function() {
            onPageLoadGetQuantity();
        });
    </script>
    @stack('script')
</body>

</html>