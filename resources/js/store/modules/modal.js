const state = {
    modalShowing: false,
    activeIndex: 0,
};

const getters = {
    isModalShowing: (state) => state.modalShowing,
    activeIndex: (state) => state.activeIndex
};

const actions = {
    openModal({ commit, dispatch }, index) {
        if (index || index === 0) {
            console.log('opening modal with index: ' + index);
            commit('openModal', index);
            // show portfolioitem with id
            dispatch('portfolioItems/showItemWithIndex', index, { root: true });
        } else {
            console.log('Cannot open without index');
        }
    },
    closeModal({ commit, dispatch }) {
        const currentIndex = state.activeIndex;
        commit('closeModal');
        setTimeout(() => { dispatch('portfolioItems/hideItemWithIndex', currentIndex, { root: true }) }, 200);

    },
    fetchActiveIndex({ commit }, index) {
        commit('updateActiveIndex', index);
    },
};

const mutations = {
    openModal: function(state, index) {
        state.modalShowing = true;
        state.activeIndex = index;
    },
    closeModal: function(state) {
        console.log('closing modal view and resetting activeIndex');
        state.activeIndex = 0;
        state.modalShowing = false;
    },
    updateActiveIndex: (state, index) => (state.activeIndex = index),
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}