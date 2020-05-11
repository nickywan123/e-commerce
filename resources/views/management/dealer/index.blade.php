@extends('layouts.management.main-dealer')



@section('content')

<br>

<div class="row">
 <div class="offset-1 col-10">
     <h3>Monthly Statement</h3>
 </div>
</div>

<br>

<div class="row">
 <div class="offset-1 col-11">
    <table class="table">
        <thead>
          <tr class="text-align-center" >
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
          <tr class="text-align-center">
            <th scope="row" >2020</th>
            <td><a href="{{route('dealer.statement',['Jan','02','2020'])}}">STM-01</a></td>
            <td><a href="{{route('dealer.statement',['Feb','03','2020'])}}">STM-02</a></td>
            <td><a href="{{route('dealer.statement',['Mar','04','2020'])}}">STM-03</a></td>
            <td><a href="{{route('dealer.statement',['Apr','05','2020'])}}">STM-04</a></td>
            <td><a href="{{route('dealer.statement',['May','06','2020'])}}">STM-05</a></td>
            <td><a href="{{route('dealer.statement',['Jun','07','2020'])}}">STM-06</a></td>
            <td><a href="{{route('dealer.statement',['Jul','08','2020'])}}">STM-07</a></td>
            <td><a href="{{route('dealer.statement',['Aug','09','2020'])}}">STM-08</a></td>
            <td><a href="{{route('dealer.statement',['Sep','10','2020'])}}">STM-09</a></td>
            <td><a href="{{route('dealer.statement',['Oct','11','2020'])}}">STM-10</a></td>
            <td><a href="{{route('dealer.statement',['Nov','12','2020'])}}">STM-11</a></td>
            <td><a href="{{route('dealer.statement',['Dec','01','2021'])}}">STM-12</a></td>

            
          </tr>
         
        </tbody>
      </table>
 </div>
</div>



<style>

.text-align-center{
text-align: center;
}

</style>


@endsection