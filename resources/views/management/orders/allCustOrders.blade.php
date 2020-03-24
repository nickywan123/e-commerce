@extends('layouts.management.main')

@section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection

@section('content')

@if(Session::has('successful_message'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
{{ Session::get('successful_message') }}
</div>
@endif

@if(Session::has('error_message'))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
{{ Session::get('error_message') }}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<table class="table table-light ">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Delivery Date </th>
        <th scope="col">Order Info</th>
        <th scope="col">Order Status</th>
        <th scope="col">Purchase Order</th>
      </tr>
    </thead>
    <tbody>
     
      @foreach ($customerOrders as $customerOrder)
    
    
      <tr>
        <form action="{{ route('update.order',['id'=>$customerOrder->order_id]) }}" method="POST" > 
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        

        <td>{{$customerOrder->order_id}}</td>
        <td>
          
            <input  name='delivery_date' value="{{$customerOrder->delivery_date}}" class="date form-control" type="text" placeholder="Select delivery date" required autocomplete="off">
          
         
          </td>
        <td>{{$customerOrder->product_name}}</td>
        <td>
          {{$customerOrder->order_status}}
          <br>
          <br>
          <select name="status">
          <option value="In Progress">In Progress</option>
          <option value="Order Shipped">Order Shipped</option>
          <option value="Cancelled">Cancelled</option>
         
      
        </select>
       
      </td>
        <td>{{$customerOrder->purchase_order}}
         <hr>
          <input type="submit" value="Update Order"> 
        </td>                 
        
    
      </form>
      </tr>
 

      @endforeach
 
    </tbody>
  </table>

@endsection