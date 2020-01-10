
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('articulos', require('./components/ArticulosComponent.vue').default);



const app = new Vue({
    el: '#app',
});
