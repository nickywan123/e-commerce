@extends('layouts.management.main-panel')



@section('content')

 <br>
<div>
    <h4 class="text-capitalize text-dark">Company Profile</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <form action="{{ route('management.user.panel.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-group row ">
                            <label for="company_propaganda" class="col-md-2 col-form-label">Company Propaganda</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="WIP" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                           

                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Company Name</label>
                            <div class="col-md-4">
                            <input type="text" name="company_name" id="company_name" value="{{$companyProfile->company_name}}" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                            <label for="company_name" class="col-md-2 col-form-label">Company SSM</label>
                            <div class="col-md-3">
                                <input type="text" name="company_name" id="company_name" value="{{$companyProfile->ssm_number}}" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                          
                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">Company Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="{{$companyProfile->correspondenceAddress->address_1}},{{$companyProfile->correspondenceAddress->address_2}},{{$companyProfile->correspondenceAddress->address_3}},{{$companyProfile->correspondenceAddress->postcode}},{{$companyProfile->correspondenceAddress->city}},Malaysia" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   

                            </div>  
                            <div class="col-md-1 col-form-label">
                             <i class="fa fa-pencil bujishu-gold"></i>
                            </div>
                           
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="company_name" value="{{$companyProfile->correspondenceAddress->postcode}}" id="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                            
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">Billing Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="{{$companyProfile->billingAddress->address_1}},{{$companyProfile->billingAddress->address_2}},{{$companyProfile->billingAddress->address_3}},{{$companyProfile->billingAddress->city}},Malaysia" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                            <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                               </div>
                           
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">Billing Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="company_name" id="company_name" value="{{$companyProfile->billingAddress->postcode}}" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                           
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                           
                           
                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Company Number</label> 
                            <div class="col-md-4">
                                <input type="text" name="company_name" id="company_name" value="{{$companyProfile->company_phone}}" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                                <div class="col-md-1 col-form-label">
                                  <i class="fa fa-pencil bujishu-gold"></i>
                                 </div>
                            
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                          
                        <div class="form-group row ">
                           
                            <label for="company_name" class="col-md-2 col-form-label">Company Email</label>
                            <div class="col-md-4">
                                <input type="text" name="company_name" id="company_name" value="{{$companyProfile->company_email}}" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                         
                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">ID Information</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="WIP" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" readonly>   
                            </div>  
                           
                                 
                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        

                       

                      
             

                        {{-- <div id="billing-address">
                            <div class="form-group">
                                <label for="billing_address_1">Billing Address Line 1</label>
                                <input type="text" name="billing_address_1" id="billing_address_1" placeholder="e.g  Lot 6, Tingkat 1" class="form-control @error('billing_address_1') is-invalid @enderror" value="{{ old('billing_address_1') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_1')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="billing_address_2">Billing Address Line 2</label>
                                <input type="text" name="billing_address_2" id="billing_address_2" placeholder="e.g  Lorong Seri Idaman, Taman Seri Idaman" class="form-control @error('billing_address_2') is-invalid @enderror" value="{{ old('billing_address_2') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_2')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class=" form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_postcode">Billing Address Postcode</label>
                                    <input type="text" name="billing_address_postcode" id="billing_address_postcode" placeholder="e.g 55610" class="form-control @error('billing_address_postcode') is-invalid @enderror" value="{{ old('billing_address_postcode') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_postcode')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_city">Billing Address City</label>
                                    <input type="text" name="billing_address_city" id="billing_address_city" placeholder="e.g Kuala Lumpur" class="form-control @error('billing_address_city') is-invalid @enderror" value="{{ old('billing_address_city') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_city')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="billing_state_id">Billing Address State</label>
                                <select name="billing_state_id" id="billing_state_id" class="form-control text-capitalize">
                                    <option value="default">Please choose state</option>
                                  
                                </select>
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_state_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div id="billing-address">
                            <div class="form-group">
                                <label for="billing_address_1">Billing Address Line 1</label>
                                <input type="text" name="billing_address_1" id="billing_address_1" placeholder="e.g  Lot 6, Tingkat 1" class="form-control @error('billing_address_1') is-invalid @enderror" value="{{ old('billing_address_1') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_1')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="billing_address_2">Billing Address Line 2</label>
                                <input type="text" name="billing_address_2" id="billing_address_2" placeholder="e.g  Lorong Seri Idaman, Taman Seri Idaman" class="form-control @error('billing_address_2') is-invalid @enderror" value="{{ old('billing_address_2') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_2')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class=" form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_postcode">Billing Address Postcode</label>
                                    <input type="text" name="billing_address_postcode" id="billing_address_postcode" placeholder="e.g 55610" class="form-control @error('billing_address_postcode') is-invalid @enderror" value="{{ old('billing_address_postcode') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_postcode')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_city">Billing Address City</label>
                                    <input type="text" name="billing_address_city" id="billing_address_city" placeholder="e.g Kuala Lumpur" class="form-control @error('billing_address_city') is-invalid @enderror" value="{{ old('billing_address_city') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_city')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="billing_state_id">Billing Address State</label>
                                <select name="billing_state_id" id="billing_state_id" class="form-control text-capitalize">
                                    <option value="default">Please choose state</option>
                                  
                                </select>
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_state_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="pic_name">PIC Name</label>
                            <input type="text" name="pic_name" id="pic_name" placeholder="e.g Robert Kiyosaki" class="form-control @error('pic_name') is-invalid @enderror" value="{{ old('pic_name') }}">

                            @error('pic_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pic_nric">PIC NRIC</label>
                            <input type="text" name="pic_nric" id="pic_nric" placeholder="e.g 951119106505" class="form-control @error('pic_nric') is-invalid @enderror" value="{{ old('pic_nric') }}">

                            @error('pic_nric')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="pic_contact">PIC Contact Number</label>
                                <input type="text" name="pic_contact" id="pic_contact" placeholder="e.g 0194039056" class="form-control @error('pic_contact') is-invalid @enderror" value="{{ old('pic_contact') }}">

                                @error('pic_contact')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="pic_email">PIC Email</label>
                                <input type="text" name="pic_email" id="pic_email" placeholder="e.g robert@gmail.com" class="form-control @error('pic_email') is-invalid @enderror" value="{{ old('pic_email') }}">

                                @error('pic_email')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 text-right">
                                <button type="submit" class="btn bjsh-btn-gradient">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </form>
</div>




@endsection
