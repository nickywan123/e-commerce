@extends('layouts.management.main-dealer')



@section('content')

<br>

<div class="row">
 <div class="offset-1 col-10">
     <h3>Monthly Statement</h3>
 </div>
</div>


<div class="row">
 <div class="offset-1 col-11">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Year</th>
            <th scope="col">Jan</th>
            <th scope="col">Feb</th>
            <th scope="col">Mar</th>
            <th scope="col">Apr</th>
            <th scope="col">May</th>
            <th scope="col">Jun</th>

            <th scope="col">Jul</th>
            <th scope="col">Aug</th>

            <th scope="col">Sept</th>
            <th scope="col">Oct</th>

            <th scope="col">Nov</th>
            <th scope="col">Dec</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2020</th>
            <td><a href="/management/dealer/statements">Statement</a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            
          </tr>
          <tr>
            <th scope="row">2021</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">2022</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
 </div>
</div>





@endsection