@extends('shopv2.layouts.main')

@section('content')

<body>
    <div id="login" class="backgroundImage">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box"">
                          <div class=" col-md-12" style=" background-color: black;">
                        <h3 class="text-center " style=" color: #fbcc34;">LOGIN NOW</h3>
                    </div>

                    <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color:white;"><i class="fa fa-user " style="color:#fbcc34"></i></div>
                            </div>
                            <input id="email" type="email" placeholder="Type Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color:white;width:37px; height:35px; margin-top:8px; "><img class=”img-logo” src="{{ asset('images/image.png') }}" style="width:25px;font-weight:bold;margin-left:-5px;" /></div>
                            </div>
                            <input id="password" type="password" placeholder="Type Password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="remember-me"><span><input id="remember-me" name="remember-me" class="form-check-input" type="checkbox" {{ old('remember') ? 'checked' : '' }} style="  transform: scale(1.5);margin-left:5px;"></span><span style="color:black;margin-left:20px;">Remember Password</span></label><br>
                            <center> <input type="submit" name="submit" style="background-color:white;font-weight: bold;" class="btn btn-md" value="LOGIN"></center>
                        </div>
                        <div id="register-link" class="text-right">

                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" style="color:black;">Forgot Password?</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

@endsection

@push('style')
<STYLE>
    body {
        margin: 0;
        padding: 0;
        background-color: #fbcc34;
        height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
        margin-top: 180px;
        max-width: 600px;
        height: 260px;
        border: 1px solid #9C9C9C;
        background-color: #fbcc34;

    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -80px;
    }


    .img-logo {
        background-color: #fbcc34;
    }

    /* form */
    .backgroundImage {
        width: 100vw;
        height: 100vh;
        background-image: url(/images/homepage.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .form-body {
            width: 100%;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 992px) {
        .form-body {
            max-width: 500px;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 1200px) {}

    .form-body {
        background: #fbcc34;
        padding: 20px;
        margin-top: 300px;
    }

    .login-form {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-top: 3px solid#3e4043;
    }

    .innter-form {
        padding-top: 20px;

    }

    .final-login li {
        width: 50%;
    }

    .nav-tabs {
        border-bottom: none !important;
    }

    .nav-tabs>li {
        color: black;
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:hover,
    .nav-tabs>li.active>a:focus {
        color: #FFCC00;
        background-color: BLACK;
        border: none !important;
        border-bottom-color: transparent;
        border-radius: none !important;
    }

    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.428571429;
        border: none !important;
        border-radius: none !important;
        text-transform: uppercase;
        font-size: 16px;
        color: #FFCC00;
        background-color: black;
    }



    .sa-innate-form input[type=text],
    input[type=password],
    input[type=file],
    textarea,
    select,
    email {
        font-size: 13px;
        padding: 10px;
        border: 1px solid#ccc;
        outline: none;
        width: 100%;
        margin: 8px 0;

    }

    .sa-innate-form input[type=submit] {
        border: 1px solid#e64b3b;
        background: #e64b3b;
        color: #fff;
        padding: 10px 25px;
        font-size: 14px;
        margin-top: 5px;
    }

    .sa-innate-form input[type=submit]:hover {
        border: 1px solid#db3b2b;
        background: #db3b2b;
        color: #fff;
    }

    .sa-innate-form button {
        border: 1px solid;
        background: WHITE;
        color: BLACK;
        padding: 10px 35px;
        font-size: 14px;
        margin-top: 10px;
    }

    .sa-innate-form button:hover {
        border: 1px solid;
        background: BLACK;
        color: #FFCC00;
    }

    .sa-innate-form p {
        font-size: 13px;
        padding-top: 10px;
    }
</STYLE>
@endpush