@extends('shopv2.layouts.main')

@section('content')
<body>
    <div id="login" class="backgroundImage">
      
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-12">
                    <div id="login-box">
                          <div class="col-md-12" style=" background-color: black;">   <h3 class="text-center " style=" color: #fbcc34;">REGISTER NOW</h3></div>
                         
                        <form id="login-form" class="form" action="{{ route('login') }}" method="post">
                        <div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
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
  margin-top: 100px;
 
  height: 400px;
  border: 1px solid #9C9C9C;
  background-color: #fbcc34;
  width:1070px;
 
}

#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}


.img-logo{
    background-color:#fbcc34;
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