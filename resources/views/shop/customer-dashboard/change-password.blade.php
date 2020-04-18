@extends('layouts.management.main-panel')



@section('content')

@if(Session::has('successful_message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
{{ Session::get('successful_message') }}
</div>
@endif



 <br>
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" >Change Your Password</div>
   
                <div class="card-body">
                    <form method="POST" action="{{ route('shop.change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>

                            
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-4">
                                <button type="submit" class="btn bjsh-btn-gradient">
                                    Update Password
                                </button>
                            </div>
                            <div class="col-md-4 col-form-label ">
                                <a class="" href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
