/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require("@fortawesome/fontawesome-free");
require("@coreui/coreui");
require("signature_pad");
require("slick-carousel");
require("ion-rangeslider");
require("select2");
require("dropzone");
require("bootstrap-colorpicker");

window.Dropzone = require('dropzone');
window.toastr = require('toastr');
window.DataTable = require('datatables.net-bs4');
window.Inputmask = require('inputmask');
window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue').default
);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


/* 
* Custom scripts
*/

// Initialize select2 when 'select2' class is used.
$(document).ready(function () {
    $('.select2').select2();
});
