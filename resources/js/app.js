window.Vue = require('vue');

Vue.component('Navigation', require('./components/MainNav.vue').default);
Vue.component('Portfolio', require('./components/Portfolio.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    mounted() {}
});