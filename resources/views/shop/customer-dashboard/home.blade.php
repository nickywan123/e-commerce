@extends('layouts.management.main-customer')



@section('content')



{{----------Desktop Layout---------------------}}

 <div class="row hidden-sm ">
    <div class="col-5">

         {{-- <div class="row ml-1">
           <div class="col-12">
            <div class="card border-radius-card shadow" >
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title  font-size" style="font-weight:700; ">Profile</h4>
                    </div>
                    <div class="col-6 ">
                     <a href="{{route('shop.dashboard.customer.profile.edit')}}"><p class="card-title " style="float: right; color:#ffcc00;">Edit</p></a>
                    </div>
                  </div>
                  <div class="row mt-2 ">
                    <div class="col-3">
                      <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
                    </div>
                    <div class="col-9 mt-3"> 
                       <p class="font-size"><b>{{$userProfile->full_name}}</b></p>
                    </div>
                  </div>
                  <div class="row mt-3 ">
                    <div class="col-12">
                        <p  style="color: black; line-height:10px; font-size:14pt;">Billing Address:</p>
                        <p  style="font-size:10pt; font-weight:700; line-height: 1px;">{{$userProfile->mailingAddress->address_1}},{{$userProfile->mailingAddress->address_2}},{{$userProfile->mailingAddress->address_3}}</p>
                        <p  style="font-size:10pt; font-weight:700; line-height: 1px;">{{$userProfile->mailingAddress->postcode}},{{$userProfile->mailingAddress->city}},Malaysia</p>
                        <p  style="font-size:10pt; font-weight:700; line-height: 1px;">{{$userProfile->mobileContact->contact_num}}</p>
                    </div>
                  </div>
                </div>
                </div>
            </div>  
         </div> --}}

         <div class="row ml-1">
           <div class="col-12">
            <div class="card border-radius-card shadow" >
              <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title  font-size" style="font-weight:700; ">Value Records</h4>
                    </div>
                    <div class="col-6 ">
                     <a href="{{route('shop.customer.orders')}}"><p class="card-title " style="float: right; color:#ffcc00;">Show More</p></a>
                    </div>
                  </div>
                @if(!$purchases->isEmpty())
                  @foreach ($purchases as $purchase)
                   @foreach ($purchase->orders as $order)
                    @foreach ($order->items as $item)
                  <div class="row mt-1">
                    <div class="col-3">
                     <img src="{{asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename)}}" alt="product-image" style="width: 80px; height:80px;">
                    </div>
                    <div class="col-5 mt-3">
                        <p class=""><b>{{ $item->product->parentProduct->name}}</b></p>
                    </div>
                    <div class="col-4 mt-3">
                        <p class="" style="float: right; font-weight:700;">
                          @if ($order->order_status === 1000)
                           Record Created
                          @elseif ($order->order_status === 1001)
                           Order Placed
                          @elseif($order->order_status === 1002)
                           Order Shipped
                          @else
                           Order Delivered
                          @endif
                        </p>
                    </div>
                  </div>
                  @endforeach
                  @endforeach       
                  @endforeach
                  @else
                   <div class="row mt-1">
                     <div class="col-5 col-md-6 mt-1">
                      <strong class="" style="font-size: 11pt;">There are no orders found.</strong>
                     </div>
                     <div class="col-2 col-md-3 offset-md-3 ">
                      <a class="btn bjsh-btn-gradient  padding-sm  button-size-laptop" href="/shop">Continue Shopping</a>
                     </div>       
                   </div>
                  @endif
                </div>
              </div>
            </div>
         </div>  
         
        <div class="row ml-1">
          <div class="col-12">
             <div class="card border-radius-card shadow"  >
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title  font-size" style="font-weight:700; ">Perfect List</h4>
                    </div>
                    <div class="col-6 ">
                     <a href="{{route('shop.wishlist.home')}}"><p class="card-title " style="float: right; color:#ffcc00;">Show More</p></a>
                    </div>
                  </div>
                  @if(count($favourite))
                  @foreach ($favourite as $item)   
                  <div class="row mt-2">
                    <div class="col-3">
                     <img src="{{asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename)}}" alt="product-image" style="width: 80px; height:80px;">
                    </div>
                    <div class="col-5 mt-3">
                        <p class=""><b>{{$item->product->parentProduct->name}}</b></p>
                    </div>
                    <div class="col-4 mt-3" style="font-weight: 700;">
                      <?php echo 'RM ' . number_format(($item->product->price / 100), 2); ?>
                        <img src="{{asset('/storage/customer/add-to-cart.png')}}"  alt="product-image" >   
                    </div>         
                  </div>
                  @endforeach
                  @else
                  <div class="row mt-2">
                    <div class="col-12">
                      <h5>No Perfect List</h5>
                    </div>
                  </div>
                  @endif
                  {{-- <div class="row mt-1">
                    <div class="col-3">
                        <img src="{{asset('/storage/uploads/images/products/ales-weathercoat-hybrid/ales-weathercoat-hybrid_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                       </div>
                       <div class="col-5 mt-3">
                           <p class=""><b>ALES Anti Mosquito Hybrid</b></p>
                       </div>
                       <div class="col-4 mt-3" style="font-weight: 700;">
                        RM86.00
                        <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                       </div>      
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                        <img src="{{asset('/storage/uploads/images/products/ales-anti-mosq/ales-anti-mosq_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                       </div>
                       <div class="col-5 mt-3">
                           <p class=""><b>ALES Weathercoat Hybrid</b></p>
                       </div>
                       <div class="col-4 mt-3" style="font-weight: 700;">
                        RM43.00
                        <img src="{{asset('/storage/customer/add-to-cart.png')}}" alt="product-image" >   
                       </div>      
                    </div> --}}
                  </div>
                </div>
            </div>
        </div>  
    </div>
   


    <div class="col-7">
        <div class="row">
          <div class="col-12 col-md-12">
            <img class="img-fluid" src="{{asset('/storage/customer/welcome-banner.png')}}" alt="Welcome-Banner" >
          </div>
            
        </div>
        <div class="row mt-3">
           <div class="col-12 col-md-12">
            <img class="img-fluid" src="{{asset('/storage/customer/ramadan-sale-new.jpg')}}" alt="Ramadan-Banner" >
           </div>
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
                 <h4 class="card-title " style="font-weight:700; font-size:15pt;">Profile</h4>
                </div>
                <div class="col-6 ">
                 <p class="card-title " style="float: right;margin-right:30px; color:#ffcc00;">Edit</p>
                 </div>
              </div>
              <div class="row mt-2">
                <div class="col-3">
                  <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
                </div>
                <div class="col-9 mt-3"> 
                   <p class=""><b>Customer XXX</b></p>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12">
                    <p class="" style="color: #d6d4d4; line-height:10px;">Billing Address:</p>
                    <p class="" style="font-size:11px; font-weight:700; line-height: 1px;">Manas Hotel 285-287, Jalan Tunku Abdul Rahman 50100</p>
                    <p class="" style="font-size:11px; font-weight:700; line-height: 1px;">Kuala Lumpur,Malaysia</p>
                    <p class="" style="font-size:11px; font-weight:700; line-height: 1px;">012-2351232</p>
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
                 <h4 class="card-title " style="font-weight:700; font-size:15pt;">Value Records</h4>
                </div>
                <div class="col-6 ">
                 <p class="card-title " style="float: right;margin-right:30px; color:#ffcc00;">Show More</p>
                 </div>
              </div>
              <div class="row mt-2">
                <div class="col-3">
                 <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                </div>
                <div class="col-5 mt-3">
                    <p class=""><b>Bedsheet Moderate</b></p>
                </div>
                <div class="col-4 mt-3">
                    <p class="">Order Delivered</p>
                </div>
              </div>
              <div class="row mt-1">
                <div class="col-3">
                    <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_5.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                   </div>
                   <div class="col-5 mt-3">
                       <p class=""><b>Bedsheet Premium</b></p>
                   </div>
                   <div class="col-4 mt-3">
                       <p class="">Order Shipping</p>
                   </div>      
              </div>
              <div class="row mt-1">
                <div class="col-3">
                    <img src="{{asset('/storage/uploads/images/products/bedsheet-moderate/bedsheet-moderate_3.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
                   </div>
                   <div class="col-5 mt-3">
                       <p class=""><b>Bedsheet Yamato</b></p>
                   </div>
                   <div class="col-4 mt-3">
                       <p class="">Order Shipping</p>
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
                <h4 class="card-title  " style="font-weight:700; font-size:15pt;">Perfect List</h4>
               </div>
               <div class="col-6 ">
                <p class="card-title " style="float: right;margin-right:30px; color:#ffcc00;">Show More</p>
                </div>
             </div>
             <div class="row mt-2">
               <div class="col-3">
                <img src="{{asset('/storage/uploads/images/products/ales-weathercoat-hybrid/ales-weathercoat-hybrid_1.jpg')}}" alt="product-image" style="width: 80px; height:80px;">
               </div>
               <div class="col-5 mt-3">
                   <p class=""><b>ALES Anti Mosquito</b></p>
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
                      <p class=""><b>ALES Anti Mosquito Hybrid</b></p>
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
                      <p class=""><b>ALES Weathercoat Hybrid</b></p>
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
          .font-size{
            font-size: 15pt;
          }
     }

     /*Laptop screen*/
     @media (max-width: 1800px) and (min-width: 1200px){
      .font-size{
        font-size: 13pt;
      }

      .button-size-laptop{
        font-size: 7pt;
      }

     }
    
    
    </style>

@endsection