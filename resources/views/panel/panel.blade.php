@extends('panel.layouts.app');



@section('content')
    


{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}




<table class="table table-light ">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Delivery Date</th>
        <th scope="col">Order Info</th>
        <th scope="col">Order Status</th>
        <th scope="col">Purchase Order</th>
      </tr>
    </thead>
    <tbody>
     
      
      <tr>
        
        <td>454542</td>
        <td><input class="date form-control" type="text"></td>
        <td>Chair</td>
        <td>Received</td>
        <td>xxxx</td>                 
      
      </tr>
 

      <tr>
        
        <td>121213</td>
        <td><input class="date form-control" type="text"></td>
        <td>Table</td>
        <td>Purchase Order</td>
        <td>yyyyyy</td>                 
      
      </tr>
 
    </tbody>
  </table>





 

@endsection