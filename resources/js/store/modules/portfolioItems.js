import axios from 'axios';

const state = {
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
    maxIndex: (state) => state.portfolioItems.length
};

const actions = {
    async fetchPortfolioItems({ commit }) {
        try {
            let response = await axios.get('/p-items');
            commit('setPortfolioItems', response.data);
        } catch (err) {
            console.log(err);
        }
    },
    async fetchFeatured({ commit }) {
        try {
            let response = await axios.get('/featured-items');
            commit('setFeatured', response.data);
        } catch (err) {
            console.log(err);
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
    showFeaturedItemWithIndex({ commit }, index) {
        console.log('Showing item with index: ' + index);
        // get the object
        const activeItem = state.featured[index];
        //   update active property
        activeItem.active = true;
        //   commit the change
        commit('updateFeaturedActive', activeItem);
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
    showFeatured({ commit }, id) {
        // get index from id
        const index = state.featured.findIndex(item => item.id == id);
        console.log('Showing Featured item with index: ' + index + ' and id: ' + id);
        // get the object
        const activeItem = state.featured[index];
        //   update active property
        activeItem.active = true;
        //   commit the change
        commit('updateFeaturedActive', activeItem);
    },
    hideFeatured({ commit }, id) {
        // get index from id
        const index = state.featured.findIndex(item => item.id === id);
        console.log('Hiding Featured item with index: ' + index) + ' and id: ' + id;
        // get the object
        const activeItem = state.featured[index];
        //   update active property
        activeItem.active = false;
        //   commit the change
        commit('updateFeaturedActive', activeItem);
    }
};

const mutations = {
    updateFeaturedActive: function(state, activeItem) {
        const index = state.featured.findIndex(item => item.id === activeItem.id);
        state.featured[index] = activeItem;
    },
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
    },
    setFeatured: (state, featured) => (state.featured = featured)
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}