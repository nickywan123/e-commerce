@extends('layouts.shop.main')

@section('content')

<div class="container mt-5" style="min-height: 75vh;">
    <div class="row">
        <div class="col-12 offset-md-4 col-md-6">
            <h1 style="color:#ffcc00; font-weight:700;">We're here to help</h1>
            <h5 class="ml-md-4" style="color:#ffcc00;">Frequently asked Questions</h5>
        </div>
    </div>
    <div class="row mt-md-4">
        <div class="col-12">
            <div class="accordion " id="faqExample">
                <div class="card" style="border-radius:15px;">
                    <div class="card-header p-2" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link stretched-link" style="color:black; float:left;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              1. How to check my order?
                            </button>
                          </h5>
                    </div>

                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#faqExample">
                        <div class="card-body">
                           <p>Step 1: At BUJISHU home page, click on “MY ACCOUNT” at the top right hand corner, select “My Dashboard”.</p>
                           <p>Step 2: Select “Value Records”.</p>
                           <p>Step 3: Select the Purchase# and you may find the order status in there.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="border-radius:15px;">
                    <div class="card-header p-2" id="headingTwo">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed stretched-link" style="color:black; float:left;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          2. How to Contact Bujishu Customer Service?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                        <div class="card-body">
                            <p>Drop us an email at bujishu-cs@delhubdigital.com</p>
                            <p>Call our customer service at 03-2181 8821 during office hour (Mon – Fri 9:00am -6:00pm except Saturday, Sunday and Public Holiday).</p>
                            <p>Walk in to our office at 1.26.5 Menara Bangkok Bank during office hour (Mon - Fri 9:00am -6:00pm except Saturday, Sunday and Public Holiday).</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="border-radius:15px;">
                    <div class="card-header p-2" id="headingThree">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed stretched-link" style="color:black; float:left;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          3. How to reset password?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                        <div class="card-body">
                           <p>Step 1: At BUJISHU login page, click on “Forgot Password”</p>
                           <p>Step 2: Enter your login ID which is your email address and click “Sent Password Reset Link”</p>
                           <p>Step 3: Check your electronic mail box, you will receive an email from us “Reset Password Notification”.  Just click on the “Reset Password” button in the email.</p>
                           <p>Step 4:  Enter a new password and reconfirm the new password.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="border-radius:15px;">
                    <div class="card-header p-2" id="headingFour">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed stretched-link" style="color:black; float:left;" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          4. How to update my personal data?
                        </button>
                      </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                        <div class="card-body">
                            <p>Step 1: At BUJISHU home page, click on “MY ACCOUNT” at the top right hand corner, select “Profile”.</p>
                            <p>Step 2: Under “My Profile”, you may update your billing address, shipping address, and phone numbers.  Once completed, click on “Update Profile” to save your data.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="border-radius:15px; border-bottom:0px;">
                    <div class="card-header p-2" id="headingFive">
                        <h5 class="mb-0">
                        <button class="btn btn-link collapsed stretched-link button-left-margin" style="color:black; float:left;" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           5. Can I change my shipping address after placing an order?
                        </button>
                       </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                        <div class="card-body">
                           <p>Shipping address can be change before payment made.Once payment is made, shipping address CANNOT change.</p>
                           <p style="font-weight: 700;">Scenario 1: Update shipping address permanently.</p>
                           <p>Step 1: At BUJISHU home page, click on “MY ACCOUNT” at the top right hand corner, select “Profile”.</p>
                           <p>Step 2: Under “User Profile”, click on the pencil beside the field, update your shipping address.Once completed, click on “Update Profile” to save your data.</p>
                           <p style="font-weight: 700;">Scenario 2: Update shipping address for the specific purchase.</p>
                           <p>Step 1: Go to BUJISHU website to do shopping and add selected items to your shopping cart.</p>
                           <p>Step 2: Go to your shopping cart at the top right hand corner below “MY ACCOUNT”, select the items you wanted to check out, click on “PROCEED TO CHECKOUT” button.</p>
                           <p>Step 3: Select the Payment Method.</p>
                           <p>Step 4: You may edit the Shipping details for this purchase.</p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

<style>
.card-border-radius{
        border-radius: 15px;    
    }
@media(max-width:500px){
        .button-left-margin{
            margin-left: -1rem;
    }
}
</style>
@endsection