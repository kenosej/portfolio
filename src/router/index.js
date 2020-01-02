import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import VueMeta from 'vue-meta'

Vue.use(VueRouter)
Vue.use(VueMeta, {
  refreshOnceOnNavigation: true
})

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/services',
    name: 'Services',
    component: () => import('../views/Services')
  }
]

const router = new VueRouter({
  routes,
  mode: "history"
})

export default router
