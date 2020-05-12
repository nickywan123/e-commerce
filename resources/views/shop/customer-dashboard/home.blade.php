@extends('layouts.management.main-customer')



@section('content')

<br>

{{----------Desktop Layout---------------------}}
<div class="row hidden-sm">

    <div class="col-3">
         <div class="row">
            <div class="card border-radius-card shadow" style="width:100%;height: 280px; max-width:470px;" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
                    </div>
                    <div class="col-6 ">
                     <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Edit</p>
                     </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-3">
                      <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
                    </div>
                    <div class="col-9 mt-3"> 
                       <p><b>Customer XXX</b></p>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-12">
                        <p style="color: #d6d4d4; line-height:10px;">Billing Address:</p>
                        <p style="font-size:11px; font-weight:bold; line-height: 1px;">Manas Hotel 285-287, Jalan Tunku Abdul Rahman 50100</p>
                        <p style="font-size:11px; font-weight:bold; line-height: 1px;">Kuala Lumpur,Malaysia</p>
                        <p style="font-size:11px; font-weight:bold; line-height: 1px;">012-2351232</p>
                    </div>
                  </div>
                </div>
            </div>  
         </div>

         <div class="row">
            <div class="card border-radius-card shadow" style="width:100%;height: 345px; max-width:470px;" >
              <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Value Records</h4>
                    </div>
                    <div class="col-6 ">
                     <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Show More</p>
                     </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-3">
                     <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                    </div>
                    <div class="col-5 mt-3">
                        <p><b>Bedsheet Moderate</b></p>
                    </div>
                    <div class="col-4 mt-3">
                        <p>Order Delivered</p>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                        <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_5.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                       </div>
                       <div class="col-5 mt-3">
                           <p><b>Bedsheet Premium</b></p>
                       </div>
                       <div class="col-4 mt-3">
                           <p>Order Shipping</p>
                       </div>      
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                        <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_3.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                       </div>
                       <div class="col-5 mt-3">
                           <p><b>Bedsheet Yamato</b></p>
                       </div>
                       <div class="col-4 mt-3">
                           <p>Order Shipping</p>
                       </div>      
                </div>
              </div>
            </div>
         </div>  
         
        <div class="row">
             <div class="card border-radius-card shadow" style="width:100%;height: 345px; max-width:470px;" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Perfect List</h4>
                    </div>
                    <div class="col-6 ">
                     <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Show More</p>
                     </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-3">
                     <img src="{{asset('/storage/uploads/images/products/ales-weathercoat-hybrid/ales-weathercoat-hybrid_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                    </div>
                    <div class="col-5 mt-3">
                        <p><b>ALES Anti Mosquito</b></p>
                    </div>
                    <div class="col-4 mt-3">
                        RM73.80 
                        <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                    </div>
                   
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                        <img src="{{asset('/storage/uploads/images/products/ales-weathercoat-hybrid/ales-weathercoat-hybrid_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                       </div>
                       <div class="col-5 mt-3">
                           <p><b>ALES Anti Mosquito Hybrid</b></p>
                       </div>
                       <div class="col-4 mt-3">
                        RM86.00
                        <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                       </div>      
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                        <img src="{{asset('/storage/uploads/images/products/ales-anti-mosq/ales-anti-mosq_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                       </div>
                       <div class="col-5 mt-3">
                           <p><b>ALES Weathercoat Hybrid</b></p>
                       </div>
                       <div class="col-4 mt-3">
                        RM43.00
                        <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                       </div>      
                    </div>
                  </div>
            </div>
        </div>  
    </div>
   


    <div class="col-9">
        <div class="row ml-5">
            <img src="{{asset('/storage/customer/welcome-banner.png')}}" alt="Welcome-Banner">
        </div>
        <div class="row ml-5 mt-5">
            <img src="{{asset('/storage/customer/ramadan-sale-banner.png')}}" alt="Welcome-Banner">
        </div>
    </div>


</div>





{{----------Mobile Layout---------------------}}
<div class="row hidden-md">
    <div class="row">
        <img src="{{asset('/storage/customer/welcome-banner.png')}}" style="height:100%; width:100%;" alt="Welcome-Banner">
    </div>
    <div class="row mt-1">
        <img src="{{asset('/storage/customer/ramadan-sale-banner.png')}}"  style="height:100%; width:100%;" alt="Welcome-Banner">
    </div>
    
    <div class="row mt-2">
        <div class="card border-radius-card shadow" style="width:100%;height:100%;" >
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                 <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
                </div>
                <div class="col-6 ">
                 <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Edit</p>
                 </div>
              </div>
              <div class="row mt-2">
                <div class="col-3">
                  <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
                </div>
                <div class="col-9 mt-3"> 
                   <p><b>Customer XXX</b></p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12">
                    <p style="color: #d6d4d4; line-height:10px;">Billing Address:</p>
                    <p style="font-size:11px; font-weight:bold; line-height: 1px;">Manas Hotel 285-287, Jalan Tunku Abdul Rahman 50100</p>
                    <p style="font-size:11px; font-weight:bold; line-height: 1px;">Kuala Lumpur,Malaysia</p>
                    <p style="font-size:11px; font-weight:bold; line-height: 1px;">012-2351232</p>
                </div>
              </div>
            </div>
        </div>  
    </div>


    <div class="row">
        <div class="card border-radius-card shadow" style="width:100%;height:100%; " >
          <div class="card-body">
              <div class="row">
                <div class="col-6">
                 <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Value Records</h4>
                </div>
                <div class="col-6 ">
                 <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Show More</p>
                 </div>
              </div>
              <div class="row mt-2">
                <div class="col-3">
                 <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                </div>
                <div class="col-5 mt-3">
                    <p><b>Bedsheet Moderate</b></p>
                </div>
                <div class="col-4 mt-3">
                    <p>Order Delivered</p>
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-3">
                    <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_5.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                   </div>
                   <div class="col-5 mt-3">
                       <p><b>Bedsheet Premium</b></p>
                   </div>
                   <div class="col-4 mt-3">
                       <p>Order Shipping</p>
                   </div>      
              </div>
              <div class="row mt-1">
                <div class="col-3">
                    <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_3.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                   </div>
                   <div class="col-5 mt-3">
                       <p><b>Bedsheet Yamato</b></p>
                   </div>
                   <div class="col-4 mt-3">
                       <p>Order Shipping</p>
                   </div>      
            </div>
          </div>
        </div>
     </div>  



     <div class="row">
        <div class="card border-radius-card shadow" style="width:100%;height:100%;" >
           <div class="card-body">
             <div class="row">
               <div class="col-6">
                <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Perfect List</h4>
               </div>
               <div class="col-6 ">
                <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Show More</p>
                </div>
             </div>
             <div class="row mt-2">
               <div class="col-3">
                <img src="{{asset('/storage/uploads/images/products/ales-weathercoat-hybrid/ales-weathercoat-hybrid_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
               </div>
               <div class="col-5 mt-3">
                   <p><b>ALES Anti Mosquito</b></p>
               </div>
               <div class="col-4 mt-3">
                   RM73.80 
                   <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
               </div>
              
             </div>
             <div class="row mt-1">
               <div class="col-3">
                   <img src="{{asset('/storage/uploads/images/products/ales-weathercoat-hybrid/ales-weathercoat-hybrid_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                  </div>
                  <div class="col-5 mt-3">
                      <p><b>ALES Anti Mosquito Hybrid</b></p>
                  </div>
                  <div class="col-4 mt-3">
                   RM86.00
                   <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                  </div>      
             </div>
             <div class="row mt-1">
               <div class="col-3">
                   <img src="{{asset('/storage/uploads/images/products/ales-anti-mosq/ales-anti-mosq_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                  </div>
                  <div class="col-5 mt-3">
                      <p><b>ALES Weathercoat Hybrid</b></p>
                  </div>
                  <div class="col-4 mt-3">
                   RM43.00
                   <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                  </div>      
               </div>
             </div>
       </div>
   </div> 




</div>


<style>

    .border-radius-card{
      border-radius: 15px;
    
    }
    
    .text-bold{
      font-weight: bold;
    }
    
    .sub-border-color{
      border: 2pt solid #fbcc34;
    }
    
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
    
    
    </style>

@endsection