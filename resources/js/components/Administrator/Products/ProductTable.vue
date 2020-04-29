<template>
  <div>
    {{ currentUrl }}
    <table class="table">
      <tr>
        <th>Product Code</th>
        <th></th>
        <th>Product Name</th>
        <th>Categories</th>
      </tr>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <td>{{item.product_code}}</td>
          <td class="text-center">
            <img
              class="product-img"
              v-bind:src="'https://bujishu.com/storage/' + item.images[0].path + item.images[0].filename"
            />
          </td>
          <td>{{item.name}}</td>
          <td>
            <span
              style="padding: 2px; margin: 2px;"
              v-for="category in item.categories"
              :key="category.id"
            >{{ category.name }}</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>
.product-img {
  width: 80px;
  height: auto;
  border-radius: 100%;
  margin: 0 auto;
}
</style>

<script>
  export default {
    name: 'product-table',
    props: ['currentUrl'],
    data() {
      return {
        items: null
      }
    },
    created: function(){
        var currentUrl = window.location.pathname;
        console.log(currentUrl);
    },
    mounted() {
      axios
      .get('http://bujishu.test/administrator/products/json')
      .then(response => (this.items = response.data));
    }
  }
</script>
