<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation {{ $order->order_number }}</title>

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
                <h5 class="card-title text-center p-4 font-weight-bold" style="background-color: #fccb34;">Order Received Confirmation</h5>
                <div class="pl-4 pr-4 pt-2 pb-2">
                    <p class="card-text font-weight-bold">Hi, {{ $order->purchase->user->userInfo->full_name }}</p>
                    <p class="card-text mb-3 font-weight-bold">Thank you for your order, please give your purchase experience a rating.</p>

                    <br>

                    <div>
                        @foreach($order->items as $item)
                        <input type="hidden" name="product_id[]" id="product_id" value="{{ $item->product_id }}">

                        <div class="row no-gutters">
                            <div class="col-4 col-md-2 pl-1 pr-1">
                                <img class="mw-100 rounded d-inline" src="{{ asset('storage/' . $item->product->parentProduct->defaultImage->path . '/' . $item->product->parentProduct->defaultImage->filename) }}" alt="">
                            </div>
                            <div class="col-8 col-md-10 pl-1 pr-1">
                                <p class="text-left mb-1">
                                    {{ $item->product->parentProduct->name }}
                                </p>
                                <p class="text-left mb-2">
                                    @if(array_key_exists('product_temperature', $item->product_information))
                                    {{ $item->product_information['product_temperature'] }}
                                    @endif
                                    @if(array_key_exists('product_size', $item->product_information))
                                    {{ $item->product_information['product_size'] }}
                                    @endif
                                    @if(array_key_exists('product_color_name', $item->product_information))
                                    {{ $item->product_information['product_color_name']}}
                                    @endif
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Rate Panel -->
                    <div>
                        <form action="{{route('update.order.panel.received.date',[$order->order_number])}}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="text-center text-md-left">
                                <p class="mb-2">Experience Rating (1 - 5)</p>
                                <div class="rating">
                                    <label>
                                        <input type="radio" id="star-1" name="stars" value="1" />
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                    </label>

                                    <label>
                                        <input type="radio" id="star-2" name="stars" value="2" />
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                    </label>

                                    <label>
                                        <input type="radio" id="star-3" name="stars" value="3" />
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                    </label>

                                    <label>
                                        <input type="radio" id="star-4" name="stars" value="4" />
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                    </label>

                                    <label>
                                        <input type="radio" id="star-5" name="stars" value="5" />
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                        <span class="icon">
                                            <i class="far fa-star"></i>
                                        </span>
                                    </label>
                                </div>

                                <div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Comments</label>
                                        <textarea name="rating_comment" class="form-control" id="rating_comment" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <p class="card-text mb-3">
                                <input type="hidden" name="order_number" value="{{ $order->order_number }}">
                                <button type="submit" class="btn bjsh-btn-gradient">Submit</button>
                            </p>
                        </form>
                    </div>

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