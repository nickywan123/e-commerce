@extends('layouts.management.main-panel')



@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<br>

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

{{--Desktop layout--}}
<div class="hidden-sm" style="font-size:small;">
  <div class="row">
    <div class="col-12 mb-3"><h1 style="font-weight:bold;">Orders Tracking</h1></div>
  </div>

  <div class="row mt-2 mb-3">
    <div class="col-12">
      <a href="/management/panel/orders" class="orders-text-style " style="border-bottom: 2px solid rgb(250, 172, 24);"><i><strong>All Orders</strong></i></a>        
      <a href="#" class="orders-text-style"><i><strong>New Orders</strong></i></a>
      <a href="#" class="orders-text-style"><i><strong>Pending Shipping</strong></i></a>
      <a href="#" class="orders-text-style"><i><strong>Pending Receiving</strong></i></a>
      <a href="#" class="orders-text-style"><i><strong>Completed</strong></i></a>
    </div>
  </div>

<table class="table table-bordered">
    <thead style="background-color:	#E8E8E8;" >  
      <tr>
        <th class="thead-font" scope="col">PO No.</th>
        <th scope="col">Product ID</th>
        <th scope="col">Product Description </th> 
        <th scope="col">Order Date</th>
        <th scope="col">Estimate Delivery Date</th>
        <th scope="col">Pending Days</th>
        <th scope="col">Product Status</th>
        <th scope="col">Order Received Date </th>
        <th scope="col">Claim Status </th>
      </tr>
    </thead>
    <tbody class="">      
      @foreach ($customerOrders as $customerOrder)
      @foreach ($customerOrder->items as $item)                  
         <tr>
           <form action="{{route('update.order.panel',[$customerOrder->order_number])}}" method="POST" > 
           <input type="hidden" name="_method" value="PUT">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <td><a href="/management/panel/orders/purchase-order-pdf/{{$customerOrder->order_number}}">{{$customerOrder->order_number}}</a></td>
            <td> {{ $item->product->parentProduct->product_code }}</td>
            <td>{{$item->product->parentProduct->name}}</td>
            <td>{{$customerOrder->getFormattedDate()}}</td>
            <td style="display:flex;"> <input name='delivery_date' value="{{$customerOrder->delivery_date}}" class="date form-control" type="text" placeholder="Select delivery date" required autocomplete="off"> <input type="submit" class="bjsh-btn-gradient" value="Submit">  </td>
            <td>{{$customerOrder->getPendingAttribute()}}</td> 
            @if ($customerOrder->order_status === 1001)
             <td>Order Placed</td>
            @elseif ($customerOrder->order_status === 1002)
             <td>Order Shipped</td>
            @else
            <td>Order Delivered</td>
            @endif
           
            <td>{{$customerOrder->received_date}}</td>
            <td>{{$customerOrder->claim_status}}</td>              
          </form>
         </tr>
      @endforeach
      @endforeach 
  
     
 
    </tbody>
  </table>

</div>


{{--MOBILE LAYOUT---}}

<div class="hidden-md">
  <div class="row">
    <div class="col-7  mt-4">
        <h3 style="font-size:20px; font-family: Nunito; "><strong class="text-font-family">Order
                Tracking</strong></h3>          
    </div>
    <div class="dropdown col-4 mt-3">
        <button class="btn btn-secondary  bjsh-btn-gradient" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            style="background-color:rgb(250, 172, 24); color:black;">
            Filter Orders <i style="font-size: 10px;" class="fa fa-arrow-down"> </i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">All Orders</a>
            <a class="dropdown-item" href="#">New Orders</a>
            <a class="dropdown-item" href="#">Pending Shipping</a>
            <a class="dropdown-item" href="#">Pending Receiving</a>
            <a class="dropdown-item" href="#">Completed</a>
        </div>

    </div>
</div>

 
    
    
         
      @foreach ($customerOrders as $customerOrder)
      @foreach ($customerOrder->items as $item)                  
        <div class="card">
          <div class="card-body">

         
           <form action="{{route('update.order.panel',[$customerOrder->order_number])}}" method="POST" > 
           <input type="hidden" name="_method" value="PUT">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">

           <div class="row">
             <div class="col-12 font-family-style text-bold">
                PO No:
                <a href="/management/panel/orders/purchase-order-pdf/{{$customerOrder->order_number}}">{{$customerOrder->order_number}}</a>
             </div>
           </div>

           <div class="row">
             <div class="col-12 font-family-style text-bold">
              Product ID: 
               {{ $item->product->parentProduct->product_code }}  
              </div>
            </div>
         
            <div class="row">
              <div class="col-12 font-family-style text-bold" style="margin-bottom:0px;">
               Product Description: 
               </div>
            <div class="col-12 text-bold">
              {{$item->product->parentProduct->name}}
            </div>
              </div>

             <div class="row">
              <div class="col-12 font-family-style text-bold">
               Order Date: 
               {{$customerOrder->getFormattedDate()}}
               </div>
             </div>

             <div class="row">
              <div class="col-12 font-family-style text-bold">
               Estimate Delivery Date: 
               <input name='delivery_date' value="{{$customerOrder->delivery_date}}" class="date form-control" type="text" placeholder="Select delivery date" required autocomplete="off">  
               </div>
             
            </div>

            <div class="row">
              <div class="col-12 font-family-style text-bold">
               Pending Days: 
               {{$customerOrder->getPendingAttribute()}} 
               </div>
            </div>

            <div class="row">
              <div class="col-12 font-family-style text-bold">
               Product Status: 
               @if ($customerOrder->order_status === 1000)
               Record Created
               @elseif ($customerOrder->order_status === 1001)
                Order Placed
               @elseif($customerOrder->order_status === 1002)
                Order Shipped
               @else
               Order Delivered
               @endif
               </div>
            </div>

            <div class="row">
              <div class="col-12 font-family-style text-bold">
                Order Received Date: 
                {{$customerOrder->received_date}}
              </div>
            </div>

            
            <div class="row">
              <div class="col-12 font-family-style text-bold">
                Claim Status: 
                {{$customerOrder->claim_status}} 
              </div>
            </div>
          <div class="row">
            <div class="offset-8 col-2 mt-4 ">
              <input type="submit" class="btn grad2 bjsh-btn-gradient btn-small-screen" value="Submit">
             </div>
           </div>

    
         </form>
        </div>
      </div>
        
         <hr style="background-color:black;">
      @endforeach
      @endforeach 
  
     
   

</div>


<style>


.text-bold{
  font-weight: bold;
}
.font-family-style{
  font-family: 'Nunito', sans-serif;
}
  .orders-text-style {
        color: rgb(250, 172, 24);
        margin-right: 45px;

    }
    .table .thead-light th{
     font-weight: bold;
     font-family: 'Nunito', sans-serif;
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


        .text-font-family {
          font-family: 'Nunito', sans-serif;
        }

</style>

<script>
    $( function() {
        $( ".date" ).datepicker({
           
          dateFormat: 'yy-mm-dd',
          minDate:0,
          changeMonth: true,
         changeYear: true
            
        });
    });
  </script>

@endsection
