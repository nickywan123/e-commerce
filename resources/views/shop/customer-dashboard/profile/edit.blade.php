@extends('layouts.management.main-customer')



@section('content')


<br>

{{--Desktop layout--}}

<div class="mt-3 mt-md-0 hidden-sm">
    <h4 class="text-capitalize text-dark">Edit Your Profile</h4>
    {{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
</div>
@endif --}}

<!--Edit Form Submit -->
<form action="{{route('profile.update',[$customerInfo->id])}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-group row ">
                        <label for="avatar" class="col-md-2 col-form-label">Avatar:</label>
                        <div class="col-md-1">
                            <img src="{{asset('/storage/avatar/default-avatar.jpg')}}"
                                style="max-width:80px; max-height:80px;" alt="avatar">
                        </div>
                        {{-- <div class="col-md-1 mt-3 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        {{-- @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror --}}
                    </div>

                    <div class="form-group row ">
                        <label for="account_id" class="col-md-2 col-form-label">Bujishu ID</label>
                        <div class="col-md-9">
                            <input type="text" name="account_id" value="{{$customerInfo->userInfo->account_id}}"
                                class="form-control @error('account_id') is-invalid @enderror"
                                value="{{ old('account_id') }}" readonly>
                        </div>

                        @error('account_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="full_name" class="col-md-2 col-form-label">Full Name(NRIC)</label>
                        <div class="col-md-3">
                            <input type="text" name="full_name" value="{{$customerInfo->userInfo->full_name}}"
                                class="form-control @error('full_name') is-invalid @enderror"
                                value="{{ old('full_name') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('full_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="billing_address_1" class="col-md-2 col-form-label">Billing Address </label>
                        <div class="col-md-9">
                            <input type="text" name="billing_address_1"
                                value="{{$customerInfo->userInfo->mailingAddress->address_1}}"
                                class="form-control @error('billing_address_1') is-invalid @enderror"
                                value="{{ old('billing_address_1') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('billing_address_1')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="billing_address_2" class="col-md-2 col-form-label">Billing Address </label> --}}
                        <div class=" offset-2 col-md-9">
                            <input type="text" name="billing_address_2"
                                value="{{$customerInfo->userInfo->mailingAddress->address_2}}"
                                class="form-control @error('billing_address_2') is-invalid @enderror">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('billing_address_2')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="billing_address_3" class="col-md-2 col-form-label">Billing Address </label> --}}
                        <div class="offset-2 col-md-9">
                            <input type="text" name="billing_address_3"
                                value="{{$customerInfo->userInfo->mailingAddress->address_3}}"
                                class="form-control @error('billing_address_3') is-invalid @enderror">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('billing_address_3')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="billing_postcode" class="col-md-2 col-form-label">Billing Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="billing_postcode"
                                value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                                class="form-control @error('billing_postcode') is-invalid @enderror"
                                value="{{ old('billing_postcode') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('billing_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="billing_city" class="col-md-2 col-form-label">Billing City</label>
                        <div class="col-md-4">
                            <input type="text" name="billing_city"
                                value="{{$customerInfo->userInfo->mailingAddress->city}}"
                                class="form-control @error('billing_city') is-invalid @enderror"
                                value="{{ old('billing_city') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('billing_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">Shipping Address </label>
                        <div class="col-md-9">
                            <input type="text" name="shipping_address_1"
                                value="{{$customerInfo->userInfo->shippingAddress->address_1}}"
                                class="form-control @error('shipping_address_1') is-invalid @enderror"
                                value="{{ old('shipping_address_1') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('shipping_address_1')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="company_address" class="col-md-2 col-form-label">Shipping Address </label> --}}
                        <div class="offset-2 col-md-9">
                            <input type="text" name="shipping_address_2"
                                value="{{$customerInfo->userInfo->shippingAddress->address_2}}"
                                class="form-control @error('shipping_address_2') is-invalid @enderror"
                                value="{{ old('shipping_address_2') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('shipping_address_2')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="company_address" class="col-md-2 col-form-label">Shipping Address </label> --}}
                        <div class="offset-2 col-md-9">
                            <input type="text" name="shipping_address_3"
                                value="{{$customerInfo->userInfo->shippingAddress->address_3}}"
                                class="form-control @error('shipping_address_3') is-invalid @enderror"
                                value="{{ old('shipping_address_3') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>


                        @error('shipping_address_3')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">Shipping Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="shipping_postcode"
                                value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                                class="form-control @error('shipping_postcode') is-invalid @enderror"
                                value="{{ old('shipping_postcode') }}">
                        </div>

                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>
                        @error('shipping_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="shipping_city" class="col-md-2 col-form-label">Shipping City </label>
                        <div class="col-md-4">
                            <input type="text" name="shipping_city"
                                value="{{$customerInfo->userInfo->shippingAddress->city}}"
                                class="form-control @error('shipping_city') is-invalid @enderror"
                                value="{{ old('shipping_city') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>
                        @error('shipping_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="mobile_phone" class="col-md-2 col-form-label">Mobile Phone</label>
                        <div class="col-md-4">
                            <input type="text" name="mobile_phone"
                                value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                                class="form-control @error('mobile_phone') is-invalid @enderror"
                                value="{{ old('mobile_phone') }}">
                        </div>
                        <div class="col-md-1 col-form-label">
                            <i class="fa fa-pencil bujishu-gold"></i>
                        </div>
                        {{-- <label for="gender" class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-3">
                                <input type="text" name="gender"
                                    class="form-control @error('gender') is-invalid @enderror"
                                    value="{{ old('mobile_phone') }}" readonly>
                    </div> --}}


                    @error('mobile_phone')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="form-group row">

                    <label for="email" class="col-md-2 col-form-label">Email Address</label>
                    <div class="col-md-4">
                        <input type="text" name="email" value="{{$customerInfo->email}}"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            readonly>
                    </div>

                    @error('email')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group row ">
                    <label for="id_information" class="col-md-2 col-form-label">ID Information</label>
                    <div class="col-md-9">
                        <input type="text" name="id_information" value="WIP"
                            class="form-control @error('id_information') is-invalid @enderror" readonly>
                    </div>


                    @error('id_information')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group row ">

                    <div class="offset-9 col-md-2" style="margin-left: 890px;">
                        <input type="submit" class="bjsh-btn-gradient" value="Update Profile">
                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

</form>
</div>



{{------MOBILE LAYOUT-------}}


<div class="mt-3 mt-md-0 hidden-md">
    <h4 class="text-capitalize text-dark text-font-family">Edit Your Profile</h4>
    {{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
</div>
@endif --}}

<!--Edit Form Submit -->
<form action="{{route('profile.update',[$customerInfo->id])}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-group row ">
                        <label for="avatar" class="col-md-2 col-form-label text-font-family">Avatar:</label>
                        <div class="col-md-1">
                            <img src="{{asset('/storage/avatar/default-avatar.jpg')}}"
                                style="max-width:80px; max-height:80px;" alt="avatar">
                        </div>
                        {{-- <div class="col-md-1 mt-3 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        {{-- @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror --}}
                    </div>

                    <div class="form-group row ">
                        <label for="account_id" class="col-md-2 col-form-label text-font-family">Bujishu ID</label>
                        <div class="col-md-9">
                            <input type="text" name="account_id" value="{{$customerInfo->userInfo->account_id}}"
                                class="form-control @error('account_id') is-invalid @enderror"
                                value="{{ old('account_id') }}" readonly>
                        </div>

                        @error('account_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="full_name" class="col-md-2 col-form-label text-font-family">Full Name(NRIC)</label>
                        <div class="col-md-3">
                            <input type="text" name="full_name" value="{{$customerInfo->userInfo->full_name}}"
                                class="form-control @error('full_name') is-invalid @enderror"
                                value="{{ old('full_name') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('full_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="billing_address_1" class="col-md-2 col-form-label text-font-family">Billing Address
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="billing_address_1"
                                value="{{$customerInfo->userInfo->mailingAddress->address_1}}"
                                class="form-control @error('billing_address_1') is-invalid @enderror"
                                value="{{ old('billing_address_1') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('billing_address_1')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="billing_address_2" class="col-md-2 col-form-label">Billing Address </label> --}}
                        <div class="col-12">
                            <input type="text" name="billing_address_2"
                                value="{{$customerInfo->userInfo->mailingAddress->address_2}}"
                                class="form-control @error('billing_address_2') is-invalid @enderror">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('billing_address_2')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="billing_address_3" class="col-md-2 col-form-label">Billing Address </label> --}}
                        <div class="col-12">
                            <input type="text" name="billing_address_3"
                                value="{{$customerInfo->userInfo->mailingAddress->address_3}}"
                                class="form-control @error('billing_address_3') is-invalid @enderror">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('billing_address_3')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="billing_postcode" class="col-md-2 col-form-label text-font-family">Billing
                            Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="billing_postcode"
                                value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                                class="form-control @error('billing_postcode') is-invalid @enderror"
                                value="{{ old('billing_postcode') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('billing_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="billing_city" class="col-md-2 col-form-label text-font-family">Billing City</label>
                        <div class="col-md-4">
                            <input type="text" name="billing_city"
                                value="{{$customerInfo->userInfo->mailingAddress->city}}"
                                class="form-control @error('billing_city') is-invalid @enderror"
                                value="{{ old('billing_city') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('billing_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label text-font-family">Shipping Address
                        </label>
                        <div class="col-md-9">
                            <input type="text" name="shipping_address_1"
                                value="{{$customerInfo->userInfo->shippingAddress->address_1}}"
                                class="form-control @error('shipping_address_1') is-invalid @enderror"
                                value="{{ old('shipping_address_1') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('shipping_address_1')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="company_address" class="col-md-2 col-form-label">Shipping Address </label> --}}
                        <div class="col-12">
                            <input type="text" name="shipping_address_2"
                                value="{{$customerInfo->userInfo->shippingAddress->address_2}}"
                                class="form-control @error('shipping_address_2') is-invalid @enderror"
                                value="{{ old('shipping_address_2') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('shipping_address_2')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        {{-- <label for="company_address" class="col-md-2 col-form-label">Shipping Address </label> --}}
                        <div class="col-12">
                            <input type="text" name="shipping_address_3"
                                value="{{$customerInfo->userInfo->shippingAddress->address_3}}"
                                class="form-control @error('shipping_address_3') is-invalid @enderror"
                                value="{{ old('shipping_address_3') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}


                        @error('shipping_address_3')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label text-font-family">Shipping
                            Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="shipping_postcode"
                                value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                                class="form-control @error('shipping_postcode') is-invalid @enderror"
                                value="{{ old('shipping_postcode') }}">
                        </div>

                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}
                        @error('shipping_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="shipping_city" class="col-md-2 col-form-label text-font-family">Shipping City
                        </label>
                        <div class="col-md-4">
                            <input type="text" name="shipping_city"
                                value="{{$customerInfo->userInfo->shippingAddress->city}}"
                                class="form-control @error('shipping_city') is-invalid @enderror"
                                value="{{ old('shipping_city') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}
                        @error('shipping_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="mobile_phone" class="col-md-2 col-form-label text-font-family">Mobile Phone</label>
                        <div class="col-md-4">
                            <input type="text" name="mobile_phone"
                                value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                                class="form-control @error('mobile_phone') is-invalid @enderror"
                                value="{{ old('mobile_phone') }}">
                        </div>
                        {{-- <div class="col-md-1 col-form-label">
                                <i class="fa fa-pencil bujishu-gold"></i>
                            </div> --}}
                        {{-- <label for="gender" class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-3">
                                <input type="text" name="gender"
                                    class="form-control @error('gender') is-invalid @enderror"
                                    value="{{ old('mobile_phone') }}" readonly>
                    </div> --}}


                    @error('mobile_phone')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <div class="form-group row">

                    <label for="email" class="col-md-2 col-form-label text-font-family">Email Address</label>
                    <div class="col-md-4">
                        <input type="text" name="email" value="{{$customerInfo->email}}"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            readonly>
                    </div>

                    @error('email')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group row ">
                    <label for="id_information" class="col-md-2 col-form-label text-font-family">ID Information</label>
                    <div class="col-md-9">
                        <input type="text" name="id_information" value="WIP"
                            class="form-control @error('id_information') is-invalid @enderror" readonly>
                    </div>


                    @error('id_information')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror

                </div>

                <div class="form-group row ">

                    <div class="offset-9 col-md-2" style="margin-left: 890px;">
                        <input type="submit" class="bjsh-btn-gradient" value="Update Profile">
                    </div>

                </div>


                <div class="form-group row ">
                    <div class="offset-6 col-2">

                        <input type="submit" class="btn grad2 bjsh-btn-gradient btn-small-screen"
                            value="Update Profile">

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

</form>
</div>






<style>
    @media(max-width:767px) {
        .hidden-sm {
            display: none;
        }

    }

    @media(min-width:767px) {
        .hidden-md {
            display: none;
        }
    }


    .text-font-family {
        font-family: cursive;
    }

</style>
@endsection
