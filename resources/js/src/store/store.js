//store.js
import { createStore } from 'vuex';

const store = createStore({
    state: {
        formData: []
    },
    mutations: {
        updateFormData(state, newFormData) {
            state.formData.push(newFormData);
        }
    },
    actions: {
        saveFormData({ commit }, newFormData) {
            commit('updateFormData', newFormData);
        }
    }
});

//app.use(store);
export default store;

/*import { createStore } from 'vuex';

const store = createStore({
    state() {
        return {
            count: 0,
        };
    },
    mutations: {
        increment(state) {
            state.count++;
        },
    },
});

export default store;*/

