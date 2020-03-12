@extends('layouts.shop.main')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-8">
        <div class="row">
        <div class="col-6">
            <img
            src="https://www.w3schools.com/bootstrap4/cinqueterre.jpg"
            class="img-fluid custom-position-1"
            alt=""
            />
        </div>
        <div class="col-6">
            <img
            src="https://www.w3schools.com/bootstrap4/cinqueterre.jpg"
            class="img-fluid custom-position-2"
            alt=""
            />
        </div>
        <div class="col-12">
            <img
            src="https://www.w3schools.com/bootstrap4/cinqueterre.jpg"
            class="img-fluid custom-position-3"
            alt=""
            />
        </div>
        </div>
    </div>
    <div class="col-4 d-flex">
        <div class="d-flex flex-column">
        <div class="flex-grow-1">
            <img
            src="https://www.w3schools.com/bootstrap4/cinqueterre.jpg"
            class=" img-fluid custom-position-4"
            alt=""
            />
        </div>
        <div class="flex-grow-1">
            <img
            src="https://www.w3schools.com/bootstrap4/cinqueterre.jpg"
            class="img-fluid custom-position-5"
            alt=""
            />
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('style')
<style>


.row {
  margin-bottom: 30px;
}

img {
    width: 100%;
}
[class*="col-"], .flex-grow-1 {
    border: 1px solid black;
}


.custom-position-1{
 position: relative;
 bottom: -160px;
 left: 50px;
 height:100px;
 object-fit: cover;
}


.custom-position-2{
 position:relative;
 right:100px;
 object-fit:cover;
}


.custom-position-3{
 position: relative;
 bottom: -160px;
 left: 50px;
 height:100px;
 object-fit: cover;
}

.custom-position-4{
 position: relative;
 height: 400px;
 width:800px;
 object-fit: cover;
}




.custom-position-5{

    position: relative;
    height:300px;
 left:50px;
 top: 100px;
 object-fit: cover;
}




    body{

        background-color: black;
    }

   /* Bottom right text */
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
.container {
  position: relative;
 
}

img{
    width:100%;
    border-radius: 20px;
}

    .heading-part {
        border-bottom: 3px solid #e5e5e5;
        display: inline-block;
        width: 100%;
    }

    .main-title {
        margin-bottom: 0;
        font-size: 1.5rem;
        float: left;
        text-transform: uppercase;
    }

    .main-title::after {
        border-bottom: 3px solid #552244;
        content: "";
        display: block;
        margin-bottom: -3px;
        padding: 2px;
    }
</style>
@endpush



@push('script')
<script>
    $(document).ready(function() {
        // Example get request
        // $.get('https://swapi.co/api/people/1/', // url
        //     function(data, textStatus, jqXHR) { // success callback
        //         alert('status: ' + textStatus + ', data:' + data.name);
        //     });
    });

  
</script>
@endpush