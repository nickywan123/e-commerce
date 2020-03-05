
@extends('dealer.layouts.app');

 @section('content')
  




   
                <table class="table table-light ">
                    <thead class="thead-dark">
                      
                      <tr>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Product</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Expected Delivery</th>
                        <th scope="col">Order Details</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Purchase Order</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @foreach($customerOrders as $order)
                      <tr>
                        <td>{{ $order->user->userInfo->name }}</td>
                        <td>{{$order->product_name}}</td>
                        <td>{{$order->order_date}}</td>
                        <td>{{$order->delivery_date}}</td>
                        <td>{{$order->order_details}}</td>                     
                        <td>{{$order->order_status}}</td>
                        <td>  <a href="" a>
                          <h5>View Invoice</h5>
                        </td>
                        
                        

                      
                      </tr>
                   @endforeach
                    </tbody>
                  </table>
         


 @endsection
  

