import axios from "axios";

// state
export const state = {
  users: [],
  user: {}
};

// getters
export const getters = {
  user: state => state.user,
  users: state => state.users
};

// mutations
export const mutations = {
  FETCH(state, users) {
    state.users = users;
  },
  FETCH_ONE(state, user) {
    state.user = user;
  }
};

// actions
export const actions = {
  fetch({ commit }) {
    return axios
      .get(route("users"))
      .then(response => commit("FETCH", response.data))
      .catch();
  },
  fetchOne({ commit }, id) {
    axios
      .get(route("show.user", id))
      .then(response => commit("FETCH_ONE", response.data))
      .catch();
  },
  deleteUser({}, id) {
    axios
      .delete(route("delete.user", id))
      .then(() => this.dispatch("user/fetch"))
      .catch();
  },
  editUser({}, user) {
    axios
      .post(route("update.user", user.id), {
        name: user.name,
        email: user.email
      })
      .then();
  },
  addUser({}, user) {
    axios
      .post(route("create.user"), {
        name: user.name,
        email: user.email
      })
      .then();
  }
};
