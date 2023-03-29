import axios from '@/http'
import { createStore } from 'vuex'

const store = createStore({
  state() {
    return {
      uoms: [],
      currencies: [],
      chargeTo: []
    }
  },
  getters: {
    getUoms: (state) => state.uoms,
    getCurrencies: (state) => state.currencies,
    getChargeTo: (state) => state.chargeTo
  },
  actions: {
    async loadData({ commit }) {
      try {
        const res = await axios.get('load-data')
        const data = await res.data

        commit('LOAD_DATA', data)
      } catch (e: any) {
        console.error(e)
      }
    }
  },
  mutations: {
    LOAD_DATA(state, payload) {
      state.uoms = payload.uoms
      state.currencies = payload.currencies
      state.chargeTo = payload.chargeTo
    }
  }
})

export default store
