import Vue from 'vue'
import Router from 'vue-router'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _727a7df4 = () => interopDefault(import('../pages/blog/index.vue' /* webpackChunkName: "pages/blog/index" */))
const _02dfd187 = () => interopDefault(import('../pages/blog/:slug.vue' /* webpackChunkName: "pages/blog/:slug" */))
const _db76bb5a = () => interopDefault(import('../pages/index.vue' /* webpackChunkName: "pages/index" */))

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: decodeURI('/'),
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
      path: "/blog",
      component: _727a7df4,
      name: "blog"
    }, {
      path: "/blog/:slug",
      component: _02dfd187,
      name: "blog-:slug"
    }, {
      path: "/",
      component: _db76bb5a,
      name: "index"
    }],

  fallback: false
}

export function createRouter() {
  return new Router(routerOptions)
}
