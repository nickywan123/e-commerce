@extends('panel.layouts.app');



@section('content')
    


{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}




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
     
      
      <tr>
        
        <td>454542</td>
        <td><input class="date form-control" type="text" placeholder="select delivery date">
           <button onclick="myFunction()" id="myBtn">Submit Date</button>
          </td>
        <td>Chair</td>
        <td>
          <select id="status" name="status">
          <option value="inProgress">In Progress</option>
          <option value="shipped">Order Shipped</option>
          <option value="cancelled">Cancelled</option>
         {{-- <input type="submit" value="Submit" > --}}
         
        </select>
        <button>Update Status </button>
      </td>
        <td>xxxx</td>                 
      
      </tr>
 

      <tr>
        
        <td>121213</td>
        <td><input class="date form-control" type="text"></td>
        <td>Table</td>
        <td></td>
        <td>yyyyyy</td>                 
      
      </tr>
 
    </tbody>
  </table>


  <script>
    function myFunction() {
      document.getElementById("myBtn").disabled = true;
    }
    </script>


 

@endsection