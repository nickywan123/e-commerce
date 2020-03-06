@extends('shopv2.layouts.main')

@section('content')

<body class=>
    <div class="backgroundImage">
        <div class="row">
            <div class="col-md-4 mx-auto my-auto col-12">
                <div class="form-body">
                    <ul class="nav nav-tabs final-login">
                        <li><a data-toggle="tab" href="#sectionA">LOGIN</a></li>
                        <li><a data-toggle="tab" href="#sectionB">REGISTER</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="sectionA" class="tab-pane fade show active">
                            <div class="innter-form" style="margin-top:-10px;">

                                <form class="sa-innate-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <label>Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    <a href="">Forgot Password?</a>
                                    <br>
                                    <center><button type="submit">LOGIN</button></center>
                                </form>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div id="sectionB" class="tab-pane fade">
                            <div class="innter-form" style="margin-top:-10px;">
                                <form class="sa-innate-form" method="post">
                                    <label>Name</label>
                                    <input type="text" name="username">
                                    <label>Email Address</label>
                                    <input type="text" name="username">
                                    <label>Password</label>
                                    <input type="password" name="password">
                                    <a href="">Forgot Password?</a>
                                    <br>
                                    <center><button type="submit">REGISTER</button></center>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
@endsection

@push('style')
<STYLE>
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