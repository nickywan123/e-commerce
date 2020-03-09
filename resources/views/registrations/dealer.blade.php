<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Dealer</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- JQUERY for date picker-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    {!! NoCaptcha::renderJs() !!}
</head>
<body>
 <a href="/">Return to Home</a>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-secondary">
                    <div class="card-header">{{ __('Registration Dealer Form') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" id="RegistrationForm" name="RegistrationForm" value="2">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name (Per IC)') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nric" class="col-md-4 col-form-label text-md-right">{{ __('IC') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nric" type="text" class="form-control @error('nric') is-invalid @enderror" name="nric" value="{{ old('nric') }}" required autocomplete="nric" autofocus>
    
                                    @error('nric')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
    
                                    @error('number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="emergency" class="col-md-4 col-form-label text-md-right">{{ __('Emergency Number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="emergency" type="text" class="form-control @error('emergency') is-invalid @enderror" name="emergency" value="{{ old('emergency') }}" required autocomplete="emergency" autofocus>
    
                                    @error('emergency')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
    
                            <div class="form-group row">
                                <label for="homeaddress1" class="col-md-4 col-form-label text-md-right">{{ __('Address 1') }}</label>
    
                                <div class="col-md-6">
                                    <input id="homeaddress1" type="text" class="form-control @error('homeaddress1') is-invalid @enderror" name="homeaddress1" value="{{ old('homeaddress1') }}" required autocomplete="homeaddress1" autofocus>
    
                                    @error('homeaddress1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="homeaddress2" class="col-md-4 col-form-label text-md-right">{{ __('Address 2') }}</label>
    
                                <div class="col-md-6">
                                    <input id="homeaddress2" type="text" class="form-control @error('homeaddress2') is-invalid @enderror" name="homeaddress2" value="{{ old('homeaddress2') }}" required autocomplete="homeaddress2" autofocus>
    
                                    @error('homeaddress2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="homeaddress3" class="col-md-4 col-form-label text-md-right">{{ __('Address 3') }}</label>
    
                                <div class="col-md-6">
                                    <input id="homeaddress3" type="text" class="form-control @error('homeaddress3') is-invalid @enderror" name="homeaddress3" value="{{ old('homeaddress3') }}" required autocomplete="homeaddress3" autofocus>
    
                                    @error('homeaddress3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="postcode" class="col-md-4 col-form-label text-md-right">{{ __('Post Code ') }}</label>
    
                                <div class="col-md-6">
                                    <input id="postcode" type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') }}" required autocomplete="postcode" autofocus>
    
                                    @error('postcode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender:') }}</label>
                                <div class="col-md-6">
                                   
                                    <input type="radio" name="gender" value="male" required> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth ') }}</label>
    
                                <div class="col-md-6">
                                    <input id="dob" type="text"  class="date form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
    
                                    @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="race" class="col-md-4 col-form-label text-md-right">{{ __('Ethnicity') }}</label>
    
                                <div class="col-md-6">
                                    <input id="race" type="text"  class="form-control @error('race') is-invalid @enderror" name="race" value="{{ old('race') }}" required autocomplete="race" autofocus>
    
                                    @error('race')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation ') }}</label>
    
                                <div class="col-md-6">
                                    <input id="occupation" type="text"  class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete="dob" autofocus>
    
                                    @error('occupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label text-md-right"></label>
                                <div class="col-md-6">
                                    {!! app('captcha')->display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script>
        $( function() {
            $( ".date" ).datepicker({
               
              dateFormat: 'yy-mm-dd',
              maxDate:0,
                
            });
        });
      </script>

</body>
</html>
