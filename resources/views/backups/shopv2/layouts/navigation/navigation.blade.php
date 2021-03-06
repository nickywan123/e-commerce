<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        .mr-5 {
            margin-right: 5px;
        }

        .ml-5 {
            margin-left: 5px;
        }

        .w-100 {
            width: 100px;
        }

        .w-150 {
            width: 150px;
        }

        .w-250 {
            width: 250px;
        }




        .topBar {
            background-color: #ffffff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            font-size: 13px;
        }

        .topBar ul {
            margin: 0;
        }

        .topBar ul li {
            line-height: 42px;
        }

        .topBar a {
            color: #878c94;
            text-decoration: none;
        }

        .text-primary {
            color: #0cd4d2;
        }

        .topBar ul.topBarNav {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .topBar ul.topBarNav li {
            position: relative;
            display: inline-block;
            margin-right: -4px;
            border-right: 1px solid rgba(0, 0, 0, 0.08);
        }

        .topBar ul.topBarNav li:last-child {
            border-right: none;
        }

        .topBar ul.topBarNav li a {
            display: block;
            padding-left: 12px;
            padding-right: 12px;
        }



        .topBar ul.topBarNav li ul {
            background-color: #ffffff;
            position: absolute;
            top: 42px;
            left: auto;
            min-width: 10px;
            right: 4px;
            border-radius: 0px;
            border: solid 0px;
            margin-right: -4px;
            padding: 0;
            list-style-type: none;
            z-index: 9999;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-transition: all 0.1s ease-in-out;
            -ms-transition: all 0.1s ease-in-out;
            -o-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            -ms-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
        }

        .topBar ul.topBarNav li ul li {
            display: block;
            line-height: 30px;
            width: 100%;
            border: none;
        }

        .topBar ul.topBarNav li a {
            display: block;
            padding-left: 12px;
            padding-right: 12px;
        }

        .topBar .dropdown-menu>li>a {
            display: block;
            padding: 6px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.42857143;
            color: #878c94;
            font-size: 15px white-space: nowrap;
        }

        .topBar .dropdown-menu>li>a:hover,
        .dropdown-menu>li>a:focus {
            color: #00BCD4;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.02);
        }


        /*CART/////////////////////*/


        .cart-items::-webkit-scrollbar {
            width: 6px;
            background-color: #ECECEC;
        }

        .cart-items::-webkit-scrollbar-track {}

        .cart-items::-webkit-scrollbar-thumb {
            background-color: #084951;
            outline: 1px solid black;
        }

        .topBar ul.topBarNav li ul.cart .cart-items {
            padding: 10px;
            height: 200px;
            overflow: auto;
        }

        .topBar ul.topBarNav li ul.cart .cart-items .items {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .topBar ul.topBarNav li ul.cart .cart-items .items li {
            overflow: hidden;
            clear: left;
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .topBar ul.topBarNav li ul.cart .cart-items .items li .product-image {
            width: 60px;
            float: left;
        }

        .topBar ul.topBarNav li ul.cart .cart-items .items li a {
            margin: 0;
            padding: 0;
            line-height: normal;
            background-color: transparent;
            display: inline;
        }

        .topBar ul.topBarNav li ul.cart .cart-items .items li .product-details {
            position: relative;
            margin-left: 60px;
            padding: 0 15px 0 10px;
        }

        .topBar ul.topBarNav li ul.cart .cart-items .items li .product-details .close-icon {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 10px;
            line-height: normal;
        }

        .topBar ul.topBarNav li ul.cart .cart-footer {
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.02);
        }

        .topBar ul.topBarNav li ul.cart .cart-footer a {
            text-align: center;
            padding: 10px 20px;
            margin: 0;
            background-color: transparent;
        }

        #grad1 {

            background-image: linear-gradient(#ffe7a3, #ffca05, #faac18);

            border-image-slice: 1;


        }

        /*/////////////////////////middleBar//////////////////////*/

        .middleBar {
            padding: 10px 0 0 0;
            margin: 0;
            min-height: 70px;
            background-color: black;
        }

        @media (min-width: 767px) {

            .display-table {
                display: table;
                width: 100%;
            }

            .vertical-align {
                display: table-cell;
                vertical-align: middle;
                float: none;
            }

            .grid-space-1 div[class*="col-"] {
                padding: 0 1px;
            }
        }

        @media (max-width: 767px) {

            div[class^="col-"] {
                margin-bottom: 30px;
            }
        }

        .middleBar .form-control {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            box-shadow: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            border: 1px solid rgba(0, 0, 0, 0.15);
            background-color: #ffffff;
            -webkit-transition: all 0.1s ease-in;
            -moz-transition: all 0.1s ease-in;
            -ms-transition: all 0.1s ease-in;
            -o-transition: all 0.1s ease-in;
            transition: all 0.1s ease-in;
        }

        .form-control.input-lg {
            font-size: 15px;
        }

        .middleBar .btn.btn-default {
            color: black;
            background-color: #0cd4d2;
            border: 1px solid #0cd4d2;
            border-radius: 0px;
        }

        .middleBar .header-items .header-item {
            display: inline-block;
        }

        .middleBar .header-items .header-item a {
            position: relative;
            display: block;
            border: 1px solid rgba(0, 0, 0, 0.08);
            width: 40px;
            height: 40px;
            line-height: 40px;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            border-radius: 100%;
            text-align: center;
            color: #35404f;
        }

        .middleBar .header-items .header-item a sub {
            position: absolute;
            bottom: -8px;
            right: -8px;
            width: 20px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            background-color: #0cd4d2;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            border-radius: 100%;
            color: #ffffff;
            font-size: 9px;
            -webkit-transition: all 0.2s ease-in;
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        .middleBar .header-items .header-item a:hover {
            background-color: #0cd4d2;
            color: #ffffff;
        }

        /*/////////////////////////navbar-default///////////////*/

        .navbar-default {
            -webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-bottom: 0;
            border: none;
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:focus {
            color: #0cd4d2;
            background-color: transparent;
        }

        .navbar-default .navbar-nav>.open>a,
        .navbar-default .navbar-nav>.open>a:hover,
        .navbar-default .navbar-nav>.open>a:after {
            border-top: solid 2px #0cd4d2;

        }

        .navbar-default .dropdown-menu {
            padding: 0;
            font-size: 14px;
            background-color: #ffffff;
            color: #878c94;
            border: none;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            -ms-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.08);
            -webkit-transition: all 0.1s ease-in;
            -moz-transition: all 0.1s ease-in;
            -ms-transition: all 0.1s ease-in;
            -o-transition: all 0.1s ease-in;
            transition: all 0.1s ease-in;
        }

        .dropdown-menu>li>a {
            display: block;
            padding: 6px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.42857143;
            color: #878c94;
            white-space: nowrap;
        }

        .dropdown-menu>li>a:hover {
            color: #0cd4d2;
        }


        /*
            megaDropMenu
        */

        .navbar-default .container {
            position: relative;
        }

        .navbar-default .navbar-collapse li.dropdown.megaDropMenu {
            position: static;
        }

        .navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu {
            width: 100%;
        }

        .navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu li ul li:first-child {
            padding: 20px 0px 5px 15px;
            font-size: 16px;
            text-transform: uppercase;
            /* text-align: center; */
            color: #0cd4d2;
        }

        .navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu li ul li a {
            display: block;
            color: #878c94;
            font-size: 14px;
            text-decoration: none;
            padding: 8px 15px;
        }

        .navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu li ul li a:hover {
            color: #00BCD4;
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.02);
        }

        .navbar-default .navbar-collapse li.dropdown.megaDropMenu .dropdown-menu img {
            display: block;
            max-width: 100%;
            padding: 20px;
        }

        /* Author - Wan Shahruddin */
        .container-90 {
            max-width: 95%;
            margin: 0 auto;
        }

        .navigation-icon {
            font-size: 1.8rem;
            margin-left: 30px;
            color: #fbcc34;
        }

        .form-control {
            width: auto;
            display: inline-block;
        }

        .btn {
            vertical-align: inherit;
        }

        .w-65 {
            width: 65%;
        }

        .fa {
            vertical-align: middle;
        }

        .font-15 {
            font-size: 1.5rem;
        }

        .bottom-bar {
            padding: 10px 0 0 0;
            margin: 0;
            min-height: 50px;
            background-color: black;
        }

        @media (max-width: 576px) {
            .hidden-sm {
                display: none;
            }

            .w-100-sm {
                width: 100%;
            }

            .w-85-sm {
                width: 85%;
            }

            .navigation-logo {
                max-height: 56px;
                width: auto;
            }

            .justify-content-center-sm {
                -ms-flex-pack: center !important;
                justify-content: center !important;
                float: right;
            }
        }

        @media (min-width: 768px) {
            .hidden-md {
                display: none;
            }

            .float-right-md {
                float: right;
            }

            .float-left-md {
                float: left;
            }

            .w-50-md {
                width: 50%;
            }

            .w-65-md {
                width: 65%;
            }

            .navigation-logo {
                max-height: 72px;
                width: auto;
            }

            .justify-content-end-md {
                -ms-flex-pack: end !important;
                justify-content: end !important;
                float: right;

            }



        }
    </style>
</head>

<body>

    <!--=========MIDDEL-TOP_BAR============-->

    <div class="middleBar">
        <div class="container-90">
            <div class="row d-flex">
                <div class="col-sm-6 vertical-align hidden-xs">
                    <div class="row">

                        <div class="col-12 my-auto">
                            <a href="javascript:void(0);">
                                <img class="navigation-logo" style="margin-right: 30px;" src="http://demo3.bujishu.com/storage/logo/bujishu.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- end col -->

                <!-- end col -->
                <div class="col-sm-6  vertical-align hidden-xs my-auto float-right">
                    <!-- <div class="header-item mr-5">
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Wishlist"> <i class="fa fa-heart-o"></i> <sub>32</sub> </a>
                    </div>
                    <div class="header-item">
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Compare"> <i class="fa fa-refresh"></i> <sub>2</sub> </a>
                    </div> -->
                    <ul class=" nav justify-content-center-xs float-right  nav-right ">
                        <li class="nav-item m-1">
                            <a href="" class="btn" id="grad1"><b>Panel</b></a>
                        </li>
                        <li class="nav-item m-1">
                            <a href="" class=" btn" id="grad1"><b>Dealer</b></a>
                        </li>
                    </ul>
                </div>
                <!-- end col -->

            </div>
            <!-- end  row -->

        </div>

    </div>


</body>

</html>