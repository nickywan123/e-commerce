@extends('panel.layouts.app');



@section('content')
    

<table class="table table-light ">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Order ID</th>
        <th scope="col">Delivery Date</th>
        <th scope="col">Order Info</th>
        <th scope="col">Order Status</th>
        <th scope="col">Claim</th>
      </tr>
    </thead>
    <tbody>
     
      
      <tr>
        
        <td>454542</td>
        <td>03-04-2020</td>
        <td>Chair</td>
        <td>Received</td>
        <td>xxxx</td>                 
      
      </tr>
 

      <tr>
        
        <td>121213</td>
        <td>15-05-2020</td>
        <td>Table</td>
        <td>Purchase Order</td>
        <td>yyyyyy</td>                 
      
      </tr>
 
    </tbody>
  </table>



@endsection