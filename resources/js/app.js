require('./bootstrap');

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { Link } from '@inertiajs/inertia-vue'
import moment from 'moment'
import $ from 'jquery';

window.jQuery = window.$ = $;
Vue.prototype.$route = route
Vue.component('inertia-link', Link);
Vue.prototype.moment = moment;

const app = document.getElementById('app')

if (app) {
  createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
      new Vue({
        render: h => h(App, props),
      }).$mount(el)
    },
  })
}