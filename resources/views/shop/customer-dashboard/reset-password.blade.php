<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
        <!-- Scripts -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style>
        .backgroundImage {
            width: 100vw;
            height: 100vh;
            background-image: url(/images/homepage.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

    </style>
</head>

<body class="backgroundImage">
  

    {{-- {{$resetPassword}} --}}
    

    <div class="container font-family" style="position: relative; top: 150px;">
        <div class="row justify-content-center" align="center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="color:rgba(255, 202, 5, 1)">{{ __('Reset Password') }}</div>
    
                    <div class="card-body" style="font-family:cursive;">
                       <div class="form-group row">
                        The reset password link has been sent to your email address.
                       </div>
                       <div class="form-group row">
                        Please check your email and follow the instructions to reset your password.        
                       </div>
                       <div class="form-group row" style="color:red;">
                       Note: Please logout of your account first before clicking the reset password link
            
                       </div>
    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
