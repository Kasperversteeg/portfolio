import Vuex from 'vuex';
import Vue from 'vue';
import portfolioItems from './modules/portfolioItems';
import modal from './modules/modal';

// Load VueX
Vue.use(Vuex);


// Create store
export default new Vuex.Store({
    modules: {
        portfolioItems,
        modal
    }
});