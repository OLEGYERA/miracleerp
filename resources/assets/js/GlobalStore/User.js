import Axios from 'axios';

let state = {
    todos: 123,
};

let getters = {
    TODOS: state => {
        return state.todos;
    },
};

let mutations = {
    // SET_TODO: (state, payload) => {
    //     state.todos = payload;
    // },
    //
    // ADD_TODO: (state, payload) => {
    //     state.todos.push(payload);
    // },
};

let actions = {
    // GET_TODO: async (context, payload) => {
    //     let {data} = await Axios.get('http://yourwebsite.com/api/todo');
    //     context.commit('SET_TODO', data);
    // },
    //
    // SAVE_TODO: async (context, payload) => {
    //     let {data} = await Axios.post('http://yourwebsite.com/api/todo');
    //     context.commit('ADD_TODO', payload);
    // },
};

export default {
    state,
    getters,
    mutations,
    actions,
};
