@extends('layouts.management.main')

{{-- @section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection --}}

@section('content')

<br>

<div class="row">
<div class="col-12">
    <div class="form-group row">
      @hasrole('dealer')
        <h3 style="font-weight:bold; font-family:Century Gothic;">Personal Information</h3>
      @endhasrole
      @hasrole('panel')
        <h3 style="font-weight:bold; font-family:Century Gothic;">Company Profile</h3>
      @endhasrole
      </div>
 
</div>
</div> <br>

<div class="row">
    <div class="col-12">
        <form>

          @hasrole('panel')

          <div class="form-group row">
            <label for="company_info" class=" col-sm-2 col-form-label">Company Information</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_info"  readonly>
            </div>
          </div>
      
          <div class="form-group row">
            <label for="company_name" class="col-sm-2 col-form-label">Company Name(editable)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_name"  readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="company_ssm" class="col-sm-2 col-form-label">Company SSM(editable)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_ssm"  readonly>
            </div>
          </div>


          <div class="form-group row">
            <label for="company_address" class="col-sm-2 col-form-label">Company Address(editable)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_address"  readonly>
            </div>
          </div>


          <div class="form-group row">
            <label for="company_billing_address" class="col-sm-2 col-form-label">Billing Address(editable)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_billing_address"  readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="company_num" class="col-sm-2 col-form-label">Company Phone Number (editable)</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_num"  readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="company_id" class="col-sm-2 col-form-label">ID Information</label>
            <div class="col-sm-10">
              <input type="text" class="form-control col-6" id="company_id"  readonly>
            </div>
          </div>



          
          @endhasrole

          @hasrole('dealer')
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name (editable)</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name"  readonly>
              </div>
            </div>
        
            <div class="form-group row">
              <label for="billing_address" class="col-sm-2 col-form-label">Billing Address (editable)</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="billing_address"  readonly>
              </div>
            </div>

            <div class="form-group row">
              <label for="shipping_address" class="col-sm-2 col-form-label">Shipping Address (editable)</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="shipping_address"  readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="mobile_num" class="col-sm-2 col-form-label">Contact Number(Mobile) (editable)</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="mobile_num"  readonly>
              </div>
            </div>
            
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="gender"  readonly>
                </div>
              </div>
           
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email"  readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="user_id" class="col-sm-2 col-form-label">User ID</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="user_id"  readonly>
                </div>
              </div>
            
              
              @endhasrole
          
      
          
      
          
             
          
           
      
      
         
          </form>

    </div>
</div>

@endsection