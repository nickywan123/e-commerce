@extends('layouts.shop.main')

@section('content')


  <!--CSS Grid to display home page images -->
<div class="wrapper">

    <div class=" bed"><img src="{{asset('/images/Home_Bed.jpg')}}" alt=""></div>
    <div class="pillow"><img src="{{asset('/images/Home_Pillow.jpg')}}" alt=""></div>
    <div class=" kitchen"><img src="{{asset('/images/Home_Kitchen.jpg')}}" alt=""></div>
    <div class=" living-room"><img src="{{asset('/images/Shop_Page.jpg')}}" alt=""></div>
    <div class=" sofa"><img src="{{asset('/images/Home_Sofa.jpg')}}" alt=""></div>




</div>

@endsection

@push('style')
<style>

@media (max-width: 700px) {

.bed {
  grid-column: 1/-1;
  grid-row: 1 / -3;
}
.pillow {
  grid-column: 3;
  grid-row: 1 / 3;
}



.kitchen {
  grid-column: 3;
  grid-row: 2 / 5;
}



.living-room {
  grid-column: 1 / 3;
  grid-row: 3 / -1;
}



.sofa {
  grid-column-start: 3;
  grid-row: 5 / -1;
}

}

.wrapper {
  display: grid;
  grid-template-columns: 3fr 2fr 3fr;
  grid-template-rows: repeat(8, 1fr);
  padding: 5em;
  grid-gap: 2.5em;
  background-color: black;
  width: 2000px;
  height: 900px;
  max-width: 100%;
}

.wrapper>div {
  position: relative;
}

.wrapper>div::after {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  background-color: black;
  color: white;
  padding: .5rem;
}

.bed {
  grid-column: 1/2;
  grid-row: 1/3;
}



.pillow {
  grid-column: 2;
  grid-row: 1 / 3;
}



.kitchen {
  grid-column: 3;
  grid-row: 2 / 5;
}



.living-room {
  grid-column: 1 / 3;
  grid-row: 3 / -1;
}



.sofa {
  grid-column-start: 3;
  grid-row: 5 / -1;
}



img {
  width: 100%;
  height: 100%;
  border-radius: 20px;
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
