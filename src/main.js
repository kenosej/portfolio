import Vue from 'vue'
import App from './App.vue'
import router from './router'

Vue.config.productionTip = false
Vue.prototype.$id = Math.random().toString(36).substr(2, 9);
Vue.prototype.$time = Math.floor(+new Date()/1000);

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
