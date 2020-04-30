<template>
  <div>
    <div class="form-row">
      <div class="col-12 col-md-6 form-group">
        <label for="product_name">Product Name</label>
        <input class="form-control" type="text" name="product_name" id="product_name" />
      </div>

      <div class="col-12 col-md-6 form-group">
        <label for="product_code">Product Code</label>
        <input class="form-control" type="text" name="product_code" id="product_code" />
      </div>
    </div>

    <div class="form-row">
      <div class="col-12 col-md-6 form-group">
        <label for="product_details">Product Details</label>
        <textarea
          class="form-control"
          name="product_details"
          id="product_details"
          cols="30"
          rows="5"
        ></textarea>
      </div>

      <div class="col-12 col-md-6 form-group">
        
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: 'product-information',
}
</script>

<style>
</style>