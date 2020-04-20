@extends('layouts.management.main-customer')



@section('content')


<br>
<div>
    <h4 class="text-capitalize text-dark">My Profile</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    
   
    <form action="" method="POST">
        {{ csrf_field() }}
        {{ method_field('patch') }}
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-group row ">
                            <label for="company_propaganda" class="col-md-2 col-form-label">Avatar:</label>
                            <div class="col-md-1">
                                <img src="{{asset('/storage/avatar/default-avatar.jpg')}}" style="max-width:80px; max-height:80px;"
                                    alt="avatar">
                            </div>
                            <div class="col-md-1 mt-3 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div>


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Bujishu ID</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="{{$customerInfo->userInfo->account_id}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>

                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Full Name(NRIC)</label>
                            <div class="col-md-3">
                                <input type="text" name="company_name" id="company_name" value="{{$customerInfo->userInfo->full_name}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                               <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>
                           

                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">Billing Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->mailingAddress->address_1}},{{$customerInfo->userInfo->mailingAddress->address_2}},{{$customerInfo->userInfo->mailingAddress->address_3}},{{$customerInfo->userInfo->mailingAddress->postcode}},{{$customerInfo->userInfo->mailingAddress->city}},Malaysia"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
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
                                <input type="text" name="company_name" id="company_name" value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>




                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">Shipping Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->shippingAddress->address_1}},{{$customerInfo->userInfo->shippingAddress->address_2}},{{$customerInfo->userInfo->shippingAddress->address_3}},{{$customerInfo->userInfo->shippingAddress->postcode}},{{$customerInfo->userInfo->shippingAddress->city}},Malaysia"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div>


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">Shipping Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Mobile Phone</label>
                            <div class="col-md-3">
                                <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div>
                            {{-- <label for="company_name" class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-3">
                                <input type="text" name="company_name" id="company_name"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div> --}}


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">User ID Information</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="WIP"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
 --}}




                        <div class="form-group row ">

                            <label for="company_name" class="col-md-2 col-form-label">Email Address</label>
                            <div class="col-md-4">
                                <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->email}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>

                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_address" class="col-md-2 col-form-label">ID Information</label>
                            <div class="col-md-9">
                                <input type="text" name="company_name" id="company_name" value="WIP"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>


                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                    </div>
                </div>
            </div>

           
        </div>
      
    </form>
</div>

@endsection
