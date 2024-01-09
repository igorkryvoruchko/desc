import { createStore } from "vuex";
import UserRepository from "@/repositories/UserRepository";

export default createStore({
  state: {
    user: {
      id: null,
      name: null,
      email: null,
      roles: [],
    },
    token: null,
  },
  getters: {
    user(state) {
      return state.user;
    },
    token(state) {
      return state.token;
    },
  },
  mutations: {
    setUserToState(state, user) {
      state.user = user;
    },
    setTokenToState(state, token) {
      state.token = token;
    },
  },
  actions: {
    getUserData({ commit }, data) {
      return UserRepository.signIn(data).then((response) => {
        commit("setUserToState", response.data.data.user);
        commit("setTokenToState", response.data.data.token);

        return response.data.data;
      });
    },
  },
  modules: {},
});
