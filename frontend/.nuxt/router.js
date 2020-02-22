import Vue from 'vue'
import Router from 'vue-router'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _dccdc2a2 = () => interopDefault(import('../pages/blog/index.vue' /* webpackChunkName: "pages/blog/index" */))
const _21fe7242 = () => interopDefault(import('../pages/blog/:slug.vue' /* webpackChunkName: "pages/blog/:slug" */))
const _0f6d38b8 = () => interopDefault(import('../pages/index.vue' /* webpackChunkName: "pages/index" */))

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: decodeURI('/'),
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
      path: "/blog",
      component: _dccdc2a2,
      name: "blog"
    }, {
      path: "/blog/:slug",
      component: _21fe7242,
      name: "blog-:slug"
    }, {
      path: "/",
      component: _0f6d38b8,
      name: "index"
    }],

  fallback: false
}

export function createRouter() {
  return new Router(routerOptions)
}
