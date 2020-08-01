window.Vue = require('vue');

import store from './store';
Vue.component('Navigation', require('./components/MainNav.vue').default);
Vue.component('Portfolio', require('./components/Portfolio.vue').default);
Vue.component('Featured', require('./components/FeaturedPortfolio.vue').default);
Vue.component('Modal', require('./components/Modal.vue').default);
Vue.component('Icon', require('./components/Icon.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import { mapState } from 'vuex';

const app = new Vue({
    el: '#app',
    store,
    computed: {
        ...mapState({
            isModalShowing: state => state.modal.modalShowing
        }),
    }
});