<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }} - Disabled</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            /* Image location */
            background-image: url(/assets/images/background-image/bujishu-home-lg.jpg);

            /* Background image is centered vertically and horizontally at all times */
            background-position: center center;

            /* Background image doesn't tile */
            background-repeat: no-repeat;

            /* 
            Background image is fixed in the viewport so that it doesn't move when 
            the content's height is greater than the image's height 
            */
            background-attachment: fixed;

            /* 
            This is what makes the background image rescale based
            on the container's size 
            */
            background-size: cover;

            /* 
            Set a background color that will be displayed
            while the background image is loading 
            */
            background-color: #464646;
        }

        .logo-container {
            margin-top: 3rem;
            margin-bottom: 2rem;
        }

        .bujishu-logo {
            width: 240px;
            height: auto;
        }

        a.btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center logo-container">
            <img class="mw-100 bujishu-logo" src="{{ asset('storage/logo/bujishu-logo-2020.png') }}" alt="">
        </div>

        <div class="card shadow-sm border-rounded-0 bg-bujishu-gold">
            <div class="card-body">
                <div class="text-center pt-3 pb-3">
                    <h2>Sorry, this page has been temporarily disabled.</h2>
                </div>
                <div class="text-center">
                    <a href="/" class="btn" style="background-color: #ffffff;">Go Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>

    </script>
</body>

</html>