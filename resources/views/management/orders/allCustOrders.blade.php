@extends('layouts.management.main')

@section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection

@section('content')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        <th scope="col">PO Number</th>
          <th scope="col">Product Code</th>
        <th scope="col">Delivery Date(editable) </th> 
        <th scope="col">Order Status(editable)</th>
        <th scope="col">QR Code Info</th>
        <th scope="col">Claim</th>
      </tr>
    </thead>
    <tbody>
     
     
    
    
      <tr>
        <form action="#" method="POST" > 
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        

        <td><a href="/purchase-order" target="_blank" rel="noopener noreferrer" >12310543</a></td>
       
        <td>CH93</td>
        <td>
          
          <input  name='delivery_date' value="2020-03-04" class="date form-control" type="text" placeholder="Select delivery date" required autocomplete="off">
        
       
        </td>
        <td>
          In Progress
         
          <select name="status">
          <option value="In Progress">In Progress</option>
          <option value="Order Shipped">Order Shipped</option>
          <option value="Cancelled">Cancelled</option>
         
      
        </select>
       
      </td>
        <td>PO
       
        </td>  
        
        <td> Claim 123</td>                 
         
        
    
      </form>
      </tr>
 

     
 
    </tbody>
  </table>
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