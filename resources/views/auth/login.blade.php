@extends('layouts.guest.main')

@section('content')
<div class="bg-md bg-sm">
    <div>
        <div class="card border-rounded-0 bg-bujishu-gold login-card">
            <h5 class="text-center bujishu-gold form-card-title">Sign in</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-row mb-2">
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input class="form-control" type="email" name="email" id="email" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="form-row mb-2">
                        <div class="input-group col-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Your password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mb-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember-me" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-6 text-right mb-1">
                            <input type="submit" name="submit" class="btn btn-primary" value="Login">
                        </div>
                        <div class="col-12 text-right mb-1">
                            <a class="text-dark" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    /* Make sure the background image covers the screen */
    html {
        height: 100%;
    }

    body {
        height: 100%;
    }
</style>
@endpush