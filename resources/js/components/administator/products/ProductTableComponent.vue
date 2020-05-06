<template>
  <div>
    <table v-if="paginator" class="table table-striped">
      <thead>
        <tr>
          <th>Product Code</th>
          <th>Product Name</th>
          <th>Categories</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in paginator.data" :key="item.id">
          <td class="my-auto" style="width: 10%;">
            <p>{{ item.product_code }}</p>
          </td>
          <td style="width: 50%;">
            <div class="row">
              <div class="col-2">
                <img
                  style="width: 80px; border-radius: 100%; margin: 5px;"
                  v-bind:src="'https://bujishu.com/storage/' + item.images[0].path + item.images[0].filename"
                  alt
                />
              </div>
              <div class="col-10 my-auto">{{ item.name }}</div>
            </div>
          </td>
          <td class="my-auto" style="width: 20%;">
            <ul class="list-unstyled">
              <li class="mb-1" v-for="category in item.categories" :key="category.id">
                <span
                  style="background-color: #fafafa; padding: 4px 8px; border-radius: 10px;"
                >{{ category.name }}</span>
              </li>
            </ul>
          </td>
          <td class="my-auto" style="width: 15%;">
            <button class="btn btn-sm btn-secondary" style="display: inline-block;">Edit</button>
            <button class="btn btn-sm btn-danger" style="display: inline-block">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>

    <ul class="pagination">
      <li class="page-item" v-if="paginator.current_page > 1">
        <a
          class="page-link"
          href="javascript:void(0)"
          aria-label="Previous"
          v-on:click.prevent="changePage(paginator.current_page - 1)"
        >
          <span aria-hidden="true">«</span>
        </a>
      </li>
      <li
        class="page-item"
        v-for="page in pagesNumber"
        :key="page"
        :class="{'active': page == paginator.current_page}"
      >
        <a
          class="page-link"
          href="javascript:void(0)"
          v-on:click.prevent="changePage(page)"
        >{{ page }}</a>
      </li>
      <li class="page-item" v-if="paginator.current_page < paginator.last_page">
        <a
          class="page-link"
          href="javascript:void(0)"
          aria-label="Next"
          v-on:click.prevent="changePage(paginator.current_page + 1)"
        >
          <span aria-hidden="true">»</span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
    name: 'product-table',
    data() {
        return {
            requestUrl: 'http://bujishu.test/administrator/products/resource',
            paginator: [],
            offset: 4
        }
    },
    created () {
       axios
       .get(this.requestUrl)
       .then(response => (this.paginator = response.data));
    },
    computed: {
      pagesNumber() {
        if (!this.paginator.to) {
          return [];
        }
        let from = this.paginator.current_page - this.offset;
        if (from < 1) {
          from = 1;
        }
        let to = from + (this.offset * 2);
        if (to >= this.paginator.last_page) {
          to = this.paginator.last_page;
        }
        let pagesArray = [];
        for (let page = from; page <= to; page++) {
          pagesArray.push(page);
        }
          return pagesArray;
        }
    },
    methods : {
      changePage(page) {
        axios
            .get(this.requestUrl + '?page=' + page)
            .then((response) => {
                this.paginator = response.data;
                this.paginator.current_page = page;
            })
            .catch(() => {
                console.log('handle server error from here');
            });
      }
    }
}
</script>

<style>
/*  */
</style>