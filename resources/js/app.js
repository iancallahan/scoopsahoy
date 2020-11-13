require('./bootstrap');

window.Vue = require('vue');

Vue.component('app', require('./components/App.vue').default);
Vue.component('add-item', require('./components/AddItem.vue').default);

const app = new Vue({
    el: '#app',
});
