@extends('panel.layouts.app');


<style>

.container {
  width: 200px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}

</style>

@section('content')
    
<div class="container">
<h3>Product Upload:</h3>
<br>
<form action="{{route('post_upload.product')}}" method="POST">
    @csrf
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="product_name" required><br><br>
    <label for="product_price">Product Price(RM):</label>
    <input type="text" id="product_price" name="product_price" required><br><br>
    <label for="product_desc">Product Description:</label>
    <input type="textarea" id="product_desc" name="product_desc" required><br><br>
    <label for="product_summary">Product Summary:</label>
    <input type="textarea" id="product_summary" name="product_summary" required><br><br>
    <label for="product_color">Product Color:</label>
    <select id="product_color" name="product_color" required>
        <option value="black">Black</option>
        <option value="red">Red</option>
        <option value="yellow">Yellow</option>
      
      </select><br><br>
    <label for="product_length">Product Length:</label>
    <input type="text" id="product_length" name="product_length" required><br><br> 
    <label for="width">Width:</label>
    <input type="text" id="width" name="width" required><br><br>
    <label for="height">Height:</label>
    <input type="text" id="height" name="height" required><br><br>
    <label for="depth">Depth:</label>
    <input type="text" id="depth" name="depth" required><br><br>
    <label for="product_measurement">Product Measurement Unit:</label>
    <select id="product_measurement" name="product_measurement" required>
        <option value="cm">cm</option>
        <option value="m">m</option>
        <option value="inch">inch</option>
      
      </select><br><br>
    <label for="img">Select image:</label>
    <input type="file" id="img" name="img" accept="image/*" required><br><br>
   



    <input type="submit" value="Submit">
  </form>
</div>





@endsection()