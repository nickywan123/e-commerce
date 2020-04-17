<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bujishu - Thank you - Order Delivered</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .rating {
            display: inline-block;
            position: relative;
            height: 23px;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            height: 100%;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .rating label .icon i {
            float: left;
            color: transparent;
            font-size: 23px;
        }

        .rating label:last-child .icon i {
            color: #fccb34;
        }

        .rating:not(:hover) label input:checked~.icon i,
        .rating:hover label:hover input~.icon i {
            color: #fccb34;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3 mt-3 mb-2">
                <img class="mx-auto mw-100" src="{{ asset('storage/logo/bujishu.png') }}" alt="">
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center p-4" style="background-color: #fccb34;">Order Received Confirmation</h5>
                <div class="pl-4 pr-4 pt-2 pb-2">
                    <p class="card-text mb-3 font-weight-bold">
                        Thank you for your feedback! You may close this window now.
                    </p>

                    <p class="card-text">Regards,</p>
                    <h5>
                        DC Living Signature Sdn Bhd
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#star-1').on('click', function() {
                $('.rating label').children('span').children('i').removeClass().addClass('far fa-star')
                $(this).siblings('span').children('i').removeClass('far fa-star').addClass('fa fa-star');
            });

            $('#star-2').on('click', function() {
                $('.rating label').children('span').children('i').removeClass().addClass('far fa-star')
                $(this).siblings('span').children().removeClass('far fa-star').addClass('fa fa-star');
            });

            $('#star-3').on('click', function() {
                $('.rating label').children('span').children('i').removeClass().addClass('far fa-star')
                $(this).siblings('span').children().removeClass('far fa-star').addClass('fa fa-star');
            });

            $('#star-4').on('click', function() {
                $('.rating label').children('span').children('i').removeClass().addClass('far fa-star')
                $(this).siblings('span').children().removeClass('far fa-star').addClass('fa fa-star');
            });

            $('#star-5').on('click', function() {
                $('.rating label').children('span').children('i').removeClass().addClass('far fa-star')
                $(this).siblings('span').children().removeClass('far fa-star').addClass('fa fa-star');
            });
        });
    </script>
</body>

</html>