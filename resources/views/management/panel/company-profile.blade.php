@extends('layouts.management.main-customer')

@section('content')

@if(Session::has('successful_message'))
 <div class="alert alert-success">
  {{ Session::get('successful_message') }}
 </div>
@endif    
@if(Session::has('error_message'))
 <div class="alert alert-danger">
  {{ Session::get('error_message') }}
</div>
@endif
    
<div class="row">
  <div class="col-12 offset-md-1 col-md-10">           
    <div class="row">
      <div class="col-4">
        <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header "><strong>My Profile</strong></a>
      </div>
      @hasrole('dealer')
      <div class="col-4">
        <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header " ><strong>Agent Profile</strong></a>
      </div>
      @endhasrole
      @hasrole('panel')
      <div class="col-4">
        <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header " style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Panel Profile</strong></a>
      </div>
      @endhasrole          
    </div><hr>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="form-group row ">
            <div class="col-md-12 m-0" style="display: flex;">
               <h4>Panel Information</h4>
               <a style="margin-left:1rem;" href="{{route('management.company.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a>
            </div>
        </div><hr>  
        <div class="form-group row ">
          <label for="company_name" class="col-md-2 col-form-label">Company Name</label>
          <div class="col-md-4  m-0">
            <input type="text" name="company_name" id="company_name"
                   value="{{$companyProfile->company_name}}"
                   class="form-control @error('company_name') is-invalid @enderror"
                   value="{{ old('company_name') }}" readonly>
          </div>
        </div>
        <div class="form-group row ">
            <label for="company_ssm" class="col-md-2 col-form-label">Company SSM</label>
            <div class="col-md-4  m-0">
              <input type="text" name="company_ssm" id="company_ssm"
                     value="{{$companyProfile->ssm_number}}"
                     class="form-control @error('company_ssm') is-invalid @enderror"
                     value="{{ old('company_ssm') }}" readonly>
            </div>
          </div>
        <div class="form-group row ">
            <label for="company_address_1" class="col-md-2 col-form-label">Company Address</label>
            <div class="col-md-9 m-0">
                <input type="text" name="company_address_1" id="company_address_1"
                       value="{{$companyProfile->correspondenceAddress->address_1}}"
                       class="form-control @error('company_address_1') is-invalid @enderror"
                       value="{{ old('company_address_1') }}" readonly>
            </div>
        </div>
        <div class="form-group row "> 
            <div class="offset-md-2 col-md-9">
                <input type="text" name="company_address_2" id="company_address_2"
                       value="{{$companyProfile->correspondenceAddress->address_2}}"
                       class="form-control @error('company_address_2') is-invalid @enderror"
                       value="{{ old('company_address_2') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <div class="offset-md-2 col-md-9">
                <input type="text" name="company_address_3" id="company_address_3"
                       value="{{$companyProfile->correspondenceAddress->address_3}}"
                       class="form-control @error('company_address_3') is-invalid @enderror"
                       value="{{ old('company_address_3') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="city" class="col-md-2 col-form-label">City</label>
            <div class="col-md-4  m-0">
                <input type="text" name="city"
                       value="{{$companyProfile->correspondenceAddress->city}}" id="city"
                       class="form-control @error('city') is-invalid @enderror"
                       value="{{ old('city') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="postcode" class="col-md-2 col-form-label">Postcode</label>
            <div class="col-md-4  m-0">
                <input type="text" name="postcode"
                       value="{{$companyProfile->correspondenceAddress->postcode}}" id="postcode"
                       class="form-control @error('postcode') is-invalid @enderror"
                       value="{{ old('postcode') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="state" class="col-md-2 col-form-label">State</label>
            <div class="col-md-4  m-0">
                <input type="text" name="state"
                       value="{{$companyProfile->correspondenceAddress->state->name}}" id="state"
                       class="form-control @error('state') is-invalid @enderror"
                       value="{{ old('state') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="company_billing_address_1" class="col-md-2 col-form-label">Billing Address</label>
            <div class="col-md-9 m-0">
                <input type="text" name="company_billin_address_1" id="company_billin_address_1"
                       value="{{$companyProfile->billingAddress->address_1}}"
                       class="form-control @error('company_billin_address_1') is-invalid @enderror"
                       value="{{ old('company_billin_address_1') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <div class="offset-md-2 col-md-9">
                <input type="text" name="company_billing_address_2" id="company_billing_address_2"
                       value="{{$companyProfile->billingAddress->address_1}}"
                       class="form-control @error('company_billing_address_2') is-invalid @enderror"
                       value="{{ old('company_billing_address_2') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <div class="offset-md-2 col-md-9">
                <input type="text" name="company_billing_address_3" id="company_billing_address_3"
                       value="{{$companyProfile->billingAddress->address_3}}"
                       class="form-control @error('company_billing_address_3') is-invalid @enderror"
                       value="{{ old('company_billing_address_3') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="company_billing_city" class="col-md-2 col-form-label">Billing City</label>
            <div class="col-md-4 m-0">
                <input type="text" name="company_billing_city"
                       value="{{$companyProfile->billingAddress->city}}" id="company_billing_city"
                       class="form-control @error('company_billing_city') is-invalid @enderror"
                       value="{{ old('company_billing_city') }}" readonly>
            </div>
        </div>         
        <div class="form-group row ">
            <label for="company_billing_postcode" class="col-md-2 col-form-label">Billing Postcode</label>
            <div class="col-md-4 m-0">
                <input type="text" name="company_billing_postcode" id="company_billing_postcode"
                                   value="{{$companyProfile->billingAddress->postcode}}"
                                   class="form-control @error('company_billing_postcode') is-invalid @enderror"
                                   value="{{ old('company_billing_postcode') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="billing_state" class="col-md-2 col-form-label">Billing State</label>
            <div class="col-md-4 m-0">
                <input type="text" name="billing_state"
                       value="{{$companyProfile->billingAddress->state->name}}" id="billing_state"
                       class="form-control @error('billing_state') is-invalid @enderror"
                       value="{{ old('billing_state') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="company_phone_number" class="col-md-2 col-form-label">Company Number</label>
            <div class="col-md-4 m-0">
                <input type="text" name="company_phone_number" id="company_phone_number"
                                   value="{{$companyProfile->company_phone}}"
                                   class="form-control @error('company_phone_number') is-invalid @enderror"
                                   value="{{ old('company_phone_number') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="company_email" class="col-md-2 col-form-label">Company Email</label>
            <div class="col-md-4 m-0">
                <input type="text" name="company_email" id="company_email"
                                   value="{{$companyProfile->company_email}}"
                                   class="form-control @error('company_email') is-invalid @enderror"
                                   value="{{ old('company_email') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="company_information" class="col-md-2 col-form-label">ID Information</label>
            <div class="col-md-9 m-0">
                <input type="text" name="company_information" id="company_information" value="WIP"
                                   class="form-control @error('company_information') is-invalid @enderror"
                                   value="{{ old('company_information') }}" readonly>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<style>

.text-color-header{
    color:black;
    font-size: 12pt;
}
.text-bold{
  font-weight: bold;
}
.font-family-style{
  font-family:cursive;
}
 
</style>

@endsection
