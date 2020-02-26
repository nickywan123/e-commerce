
@extends('dealer.layouts.app');

 @section('content')
  




   
                <table class="table table-light ">
                    <thead class="thead-dark">
                      
                      <tr>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Product</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Expected Delivery</th>
                        <th scope="col">Order Details(via Bar Code)</th>
                        <th scope="col">Order Status</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach($customerOrders as $orders)
                      <tr>
                        
                        <td>{{$orders->id}}</td>
                        <td>{{$orders->product_name}}</td>
                        <td>{{$orders->order_date}}</td>
                        <td>{{$orders->delivery_date}}</td>
                        <td>{{$orders->order_details}}</td>                     
                        <td>{{$orders->order_status}}</td>
                        

                      
                      </tr>
                   @endforeach
                    </tbody>
                  </table>
         


 @endsection
  

