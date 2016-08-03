import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const state = {
}

import BackendInterface from './../../../common/backend-interface'
let serverUrl = 'http://localhost:8888/ciblog/04-Vuex/index.php';
let backendInterface = new BackendInterface(serverUrl);

export const mutations = {
  LOGIN_CONFIRM(state, toSend) {
    let path = '/login/applogin/verify';
    let onSuccessClosure = (serverResponse) => {
      
      // Se previsto, salva le informazioni di login
      if (toSend.rememberme) {
        localStorage.setItem("login-info", JSON.stringify({
          email: toSend.email,
          password: toSend.password,
          token: serverResponse.token
        }));
      }

      // Invoca il server per navigazione su finestra principale
      backendInterface.redirect('/dashboard/dashboard/');
    }
    backendInterface.sendEvent(path, 'POST', toSend, onSuccessClosure);
  }
}

export default new Vuex.Store({
  state,
  mutations
})