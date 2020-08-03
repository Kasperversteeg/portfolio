import axios from 'axios';

const state = {
    items: [],
    portfolioItems: [],
    featured: []
};

const getters = {
    allPortfolioItems: (state) => state.portfolioItems,
    featuredPortfolioItems: (state) => state.featuredPortfolioItems,
    portfolioItem: (state) => (id) => {
        return state.portfolioItems.find(item => item.id === id);
    },
    featuredItem: (state) => (id) => {
        return state.featured.find(item => item.id === id);
    },
};

const actions = {
    async fetchFeatured({ commit }) {
        try {
            let response = await axios.get('/featured-items');
            commit('setPortfolioItems', response.data);
        } catch (err) {
            console.log(err);
        }
    },
    async fetchAll({ commit }) {
        try {
            let response = await axios.get('/portfolio-items');
            commit('setPortfolioItems', response.data);
        } catch (error) {
            console.log(error);
        }
    },
    showItemWithIndex({ commit }, index) {
        console.log('Showing item with index: ' + index);
        // get the object
        const activeItem = state.portfolioItems[index];
        //   update active property
        activeItem.active = true;
        //   commit the change
        commit('updateActive', activeItem);
    },
    hideItemWithIndex({ commit }, index) {
        console.log('hide item with index: ', index);
        const activeItem = state.portfolioItems[index];
        activeItem.active = false;
        commit('updateActive', activeItem);
    },
    showItem({ commit }, id) {
        // get index from id
        const index = state.portfolioItems.findIndex(item => item.id == id);
        console.log('Showing item with index: ' + index + ' and id: ' + id);
        // get the object
        const activeItem = state.portfolioItems[index];
        //   update active property
        activeItem.active = true;
        //   commit the change
        commit('updateActive', activeItem);
    },
    hideItem({ commit }, id) {
        // get index from id
        const index = state.portfolioItems.findIndex(item => item.id === id);
        console.log('Hiding item with index: ' + index) + ' and id: ' + id;
        // get the object
        const activeItem = state.portfolioItems[index];
        //   update active property
        activeItem.active = false;
        //   commit the change
        commit('updateActive', activeItem);
    },
};

const mutations = {
    updateActive: function(state, activeItem) {
        const index = state.portfolioItems.findIndex(item => item.id === activeItem.id);
        state.portfolioItems[index] = activeItem;
    },
    setPortfolioItems: function(state, portfolioItems) {
        const mappedArray = portfolioItems.map((item) => {
            item.active = false
            return item
        });
        state.portfolioItems = mappedArray;
        state.items = mappedArray;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}