<template>
  <div>
    <div class="row">
      <div class="col-12 col-md-4">
        <image-component />
      </div>

      <div class="col-12 col-md-8">
        <product-information />
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12">
        <product-category />
      </div>
    </div>
  </div>
</template>

<script>
import ImageComponent from "./childs/ProductImageComponent";
import ProductInformation from "./childs/ProductInformationComponent";
import ProductCategory from "./childs/ProductCategoryComponent";

export default {
    name: 'create-product',
    data () {
        return {
            // 
        }
    },
    components: {
      'image-component': ImageComponent,
      'product-information': ProductInformation,
      'product-category': ProductCategory,
    },
}
</script>

<style>
</style>