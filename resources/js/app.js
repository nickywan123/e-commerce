/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
require("@fortawesome/fontawesome-free");
require("@coreui/coreui");
require("signature_pad");
require("slick-carousel");
require("ion-rangeslider");

window.Vue = require("vue");

Vue.component(
    "example-component",
    require("./components/ExampleComponent.vue").default
);

Vue.component(
    "product-table",
    require("./components/Administrator/Products/ProductTable.vue").default
);

/**
 * We will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app"
});
