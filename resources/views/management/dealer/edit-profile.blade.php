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
    
<form action="{{route('shop.dashboard.dealer.profile.update',[$dealerProfile->account_id])}}" method="POST">
 <input type="hidden" name="_method" value="PATCH">
 <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
  <div class="row">
    <div class="offset-md-1 col-12 col-md-10">
        <div class="row">
          <div class="col-4">
            <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile.edit')}}" class="text-color-header "><strong>Edit My Profile</strong></a>
          </div>
        @hasrole('dealer')
          <div class="col-4">
            <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile.edit')}}" class="text-color-header " style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Edit Dealer Profile</strong></a>
          </div>
        @endhasrole
        @hasrole('panel')
          <div class="col-4">
            <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile.edit')}}" class="text-color-header " ><strong> Edit Panel Profile</strong></a>
          </div>
        @endhasrole          
        </div><hr>
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="form-group row ">
                <div class="col-md-4 m-0">
                  <h4>Dealer Information</h4>
                </div>
            </div><hr>
            <div class="form-group row ">
                <label for="dealer_id" class="col-md-2 col-form-label">Dealer ID</label>
                <div class="col-md-4 m-0">
                  <input type="text" name="dealer_id" id="dealer_id"
                         value="{{$dealerProfile->account_id}}"
                         class="form-control @error('dealer_id') is-invalid @enderror"
                         value="{{ old('dealer_id') }}" readonly >
                </div>
            </div>           
            <div class="form-group row ">
                <label for="gender" class="col-md-2 col-form-label">Gender</label>
                <div class="col-md-9 m-0">
                  <input type="text" name="gender" id="gender"
                        @if($dealerProfile->gender_id===1)
                        value="Male"
                        @else
                        value="Female"
                        @endif
                        class="form-control @error('gender') is-invalid @enderror"
                        value="{{ old('gender') }}" readonly>
                </div>         
                        @error('gender')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row">                          
                <label for="marital_id" class="col-md-2 col-form-label">Marital Status</label>
                <div class="col-md-9">    
                  <select name="marital_id" id="marital_id" class="form-control text-capitalize">
                    @foreach($maritals as $marital)
                     <option value="{{ $marital->id }}" {{ ($marital->id == $dealerProfile->marital_id)? 'selected' : '' }}>{{ $marital->name }}</option>
                    @endforeach
                  </select>
                </div>
                @error('marital_id')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror    
            </div>
            <div class="form-group row ">
                <div class="col-md-4 m-0 mt-md-2">
                  <h4>Employment Details</h4>
                </div>
            </div><hr>
            <div class="form-group row ">
                <label for="dealer_company_name" class="col-md-2 col-form-label">Company Name</label>
                <div class="col-md-9 m-0">
                    <input type="text" name="dealer_company_name" id="dealer_company_name"
                           value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_name : '' }}"
                           class="form-control @error('dealer_company_name') is-invalid @enderror"
                           value="{{ old('dealer_company_name') }}" >
                </div>               
            </div>
            <div class="form-group row ">
                <label for="dealer_company_address_1" class="col-md-2 col-form-label">Company Address</label>
                <div class="col-md-9 m-0">
                    <input type="text" name="dealer_company_address_1" id="dealer_company_address_1"
                           value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_1 : '' }} "
                           class="form-control @error('dealer_company_address_1') is-invalid @enderror"
                           value="{{ old('dealer_company_address_1') }}" >
                </div>         
                            @error('dealer_company_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
            </div>
            <div class="form-group row ">                         
                <div class="offset-md-2 col-md-9">
                <input type="text" name="dealer_company_address_2" id="dealer_company_address_2"
                       value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_2 : '' }}"
                       class="form-control @error('dealer_company_address_2') is-invalid @enderror"
                       value="{{ old('dealer_company_address_2') }}" >
                </div> 
                       @error('dealer_company_address_2')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
            </div>
            <div class="form-group row ">                         
                <div class="offset-md-2 col-md-9">
                  <input type="text" name="dealer_company_address_3" id="dealer_company_address_3"
                         value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_3 : '' }}"
                         class="form-control @error('dealer_company_address_3') is-invalid @enderror"
                         value="{{ old('dealer_company_address_3') }}" >
                </div>
                         @error('dealer_company_address_3')
                         <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="dealer_company_city" class="col-md-2 col-form-label">Company City</label>
              <div class="col-md-9 m-0">
                  <input type="text" name="dealer_company_city" id="dealer_company_city"
                         value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_city: '' }}"
                         class="form-control @error('dealer_company_city') is-invalid @enderror"
                         value="{{ old('dealer_company_city') }}" >
              </div>
                        @error('dealer_company_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="dealer_company_postcode" class="col-md-2 col-form-label">Company Postcode</label>
              <div class="col-md-9 m-0">
                <input type="text" name="dealer_company_postcode" id="dealer_company_postcode"
                                   value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_postcode : '' }}"
                                   class="form-control @error('dealer_company_postcode') is-invalid @enderror"
                                   value="{{ old('dealer_company_postcode') }}" >
              </div>
                        @error('dealer_company_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="dealer_company_state" class="col-md-2 col-form-label">Company State</label>
              <div class="col-md-9">
                <select name="dealer_company_state" id="dealer_company_state" class="form-control text-capitalize">
                  @foreach($states as $state)
                   <option value="{{ $state->id}}" {{ ($state->id == $dealerProfile->employmentAddress->company_state_id)? 'selected' : '' }}>{{$state->name}}</option>
                  @endforeach
                </select>
              </div>
                        @error('dealer_company_state')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <div class="col-md-4  m-0 mt-md-2">
                <h4>Spouse Information</h4>
              </div>
            </div><hr>
            <div class="form-group row ">
              <label for="spouse_name" class="col-md-2 col-form-label">Spouse Name</label>
              <div class="col-md-9 m-0">
                <input type="text" name="spouse_name" id="spouse_name"
                                   value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_name : '' }}"
                                   class="form-control @error('spouse_name') is-invalid @enderror"
                                   value="{{ old('spouse_name') }}"  >
              </div>
                        @error('spouse_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="spouse_occupation" class="col-md-2 col-form-label">Spouse Occupation</label>
                <div class="col-md-9 m-0">
                  <input type="text" name="spouse_occupation" id="spouse_occupation"
                                   value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_occupation : '' }}"
                                   class="form-control @error('spouse_occupation') is-invalid @enderror"
                                   value="{{ old('spouse_occupation') }}"  >
                </div>
                        @error('spouse_occupation')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="spouse_contact" class="col-md-2 col-form-label">Spouse Contact</label>
                <div class="col-md-9 m-0">
                  <input type="text" name="spouse_contact" id="spouse_contact"
                                    value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_contact_mobile : '' }}"
                                    class="form-control @error('spouse_contact') is-invalid @enderror"
                                    value="{{ old('spouse_contact') }}"  >
                 </div>
                        @error('spouse_contact')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="spouse_email" class="col-md-2 col-form-label">Spouse Email</label>
              <div class="col-md-9 m-0">
                  <input type="text" name="spouse_email" id="spouse_email"
                                    value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_email : '' }}"
                                    class="form-control @error('spouse_email') is-invalid @enderror"
                                    value="{{ old('spouse_email') }}" >
              </div>
                        @error('spouse_email')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row">
                <div class="offset-5 offset-md-7 col-md-5">
                  <input type="submit" class="btn grad2 bjsh-btn-gradient btn-small-screen margin-left-md margin-left-sm margin-left-xs margin-left-tablet margin-left-phone"
                         value="Update Profile">
                </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</form>


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

@media(min-width:300px) and (max-width:699px){
  .margin-left-phone{
    margin-left: 30px;
  }
}

@media(min-width:700px) and (max-width:999px){
  .margin-left-tablet{
    margin-left: 30px;
  }
}

@media(min-width:1000px) and (max-width:1199px){
  .margin-left-xs{
    margin-left: 70px;
  }
}

@media(min-width:1200px) and (max-width:1599px){
  .margin-left-sm{
    margin-left: 185px;
  }
}

@media(min-width:1600px) and (max-width:2000px){
  .margin-left-md{
    margin-left: 330px;
  }
}


</style>

@push('script')
<script>
$(document).ready(function() {
 // Disable spouse information if marital status is single or divorced
 $(document).on('change', 'select[name=marital_id]', function(e) {
    var el = $(this);
    if (el.val() == '1') { 
         $('input[name=spouse_name').val('');
         $('input[name=spouse_occupation').val('');
         $('input[name=spouse_contact').val('');
         $('input[name=spouse_email').val('');    
         $('#spouse_name').prop('readonly', true);
         $('#spouse_occupation').prop('readonly', true);
         $('#spouse_contact').prop('readonly', true);
         $('#spouse_email').prop('readonly', true);
    }

    if (el.val() == '2') {
         $('#spouse_name').prop('readonly',false);
         $('#spouse_occupation').prop('readonly',false);
         $('#spouse_contact').prop('readonly',false);
         $('#spouse_email').prop('readonly',false);
    }

    if (el.val() == '3') {  
      $('input[name=spouse_name').val('');
      $('input[name=spouse_occupation').val('');
      $('input[name=spouse_contact').val('');
      $('input[name=spouse_email').val('');
      $('#spouse_name').prop('readonly', true);
      $('#spouse_occupation').prop('readonly', true);
      $('#spouse_contact').prop('readonly', true);
      $('#spouse_email').prop('readonly', true);
    }
 });

    if($('#marital_id').val() == '1') {
         $('#spouse_name').prop('readonly', true);
         $('#spouse_occupation').prop('readonly', true);
         $('#spouse_contact').prop('readonly', true);
         $('#spouse_email').prop('readonly', true);          
        }
    
    if ($('#marital_id').val() == '2'){
         $('#spouse_name').prop('readonly', false);
         $('#spouse_occupation').prop('readonly', false);
         $('#spouse_contact').prop('readonly', false);
         $('#spouse_email').prop('readonly', false);
        }
    
    if ($('#marital_id').val() == '3'){
         $('#spouse_name').prop('readonly', true);
         $('#spouse_occupation').prop('readonly', true);
         $('#spouse_contact').prop('readonly', true);
         $('#spouse_email').prop('readonly', true);
        }
});
</script>
@endpush('script')

@endsection
