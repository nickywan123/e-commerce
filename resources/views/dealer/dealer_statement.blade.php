@extends('dealer.layouts.app');

@section('content')
    


<table class="table table-light ">
    <thead class="thead-dark">
      
      <tr>
        <th scope="col">Month</th>
        <th scope="col">Invoice</th>
        <th scope="col">View</th>
        <th scope="col">Download</th>
      </tr>
    </thead>
    <tbody>
     
     
      <tr>
        
        <td>January</td>
        <td>Invoice123</td>
        <td>
          <a href="" a>
          <h5>View Invoice</h5>
        </a>
      </td>
        <td>
          <a href="https://ia803103.us.archive.org/14/items/goodytwoshoes00newyiala/goodytwoshoes00newyiala.pdf" a>
            <h5>Download Invoice</h5>
          </a>
        </td>
       
        

      
      </tr>
  
    </tbody>
  </table>
@endsection
