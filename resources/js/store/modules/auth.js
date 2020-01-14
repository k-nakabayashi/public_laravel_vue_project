const state = () => ({

  auth_data: "",
})

const actions = {

  actAuth: function (context, value) {
    console.log("act : " + value);
    context.commit('mutateAuth', value);
  },
}

const mutations = {
  mutateAuth: function (state, value) {
    console.log("mutate : " + value);

    state.auth_data = value;
  },   
}

const getters = {
  getAuth_Vuex:  state => {
      return state.auth_data;
  }
}

export default {
  namespaced: true,
  state,
  mutations,
  actions,
  getters
}
/*
export const plugins = [
  createPersistedState(),
]*/