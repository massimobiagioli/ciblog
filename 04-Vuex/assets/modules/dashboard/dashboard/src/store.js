import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
}

import BackendInterface from './../../../common/backend-interface'
let serverUrl = 'http://localhost:8888/ciblog/04-Vuex/index.php';
let backendInterface = new BackendInterface(serverUrl);

export const mutations = {
  
}

export default new Vuex.Store({
  state,
  mutations
})