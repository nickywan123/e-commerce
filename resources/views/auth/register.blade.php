@extends('shopv2.layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-secondary">
                <div class="card-header">{{ __('Customer Registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <input type="hidden" id="RegistrationForm" name="RegistrationForm" value="1">
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('IC') }}</label>

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
                                <input id="nric" type="text" class="form-control @error('emergency') is-invalid @enderror" name="emergency" value="{{ old('emergency') }}" required autocomplete="emergency" autofocus>

                                @error('emergency')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="homeaddress1" class="col-md-4 col-form-label text-md-right">{{ __('Home Address 1') }}</label>

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
                            <label for="homeaddress2" class="col-md-4 col-form-label text-md-right">{{ __('Home Address 2') }}</label>

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
                            <label for="homeaddress3" class="col-md-4 col-form-label text-md-right">{{ __('Home Address 3') }}</label>

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
                            <label for="shippingaddress" class="col-md-4 col-form-label text-md-right">{{ __('Shipping Address ') }}</label>

                            <div class="col-md-6">
                                <input id="shippingaddress" type="text" class="form-control @error('shippingaddress') is-invalid @enderror" name="shippingaddress" value="{{ old('shippingaddress') }}" required autocomplete="shippingaddress" autofocus>

                                @error('shippingaddress')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dealerID" class="col-md-4 col-form-label text-md-right">{{ __('Dealer ID ') }}</label>

                            <div class="col-md-6">
                                <input id="dealerID" type="text" placeholder="optional" class="form-control @error('dealerID') is-invalid @enderror" name="dealerID" value="{{ old('dealerID') }}" autocomplete="dealerID" autofocus>

                                @error('dealerID')
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
@endsection
