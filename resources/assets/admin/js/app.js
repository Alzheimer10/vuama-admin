/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.Vue = require('vue')
window.tippy = require('tippy.js')
window.WOW = require('wowjs')
window.axios = require('axios')
window.VueRouteLaravel = require('vue-route-laravel')
window.VueTruncate = require('vue-truncate-filter')
Vue.use(VueTruncate)
const queryString = require('query-string')
Vue.use(VueRouteLaravel, {
    baseroute: '/api/route/',
    axios: axios,
    queryString: queryString,
    csrf_token: document.head.querySelector("[name=csrf-token]").content
})


import VueFormWizard from 'vue-form-wizard'
import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)

import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import VueFormGenerator from 'vue-form-generator'
Vue.use(VueFormGenerator)

import Element from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/es'
Vue.use(Element, { locale })
import moment from 'moment'

Vue.filter('status', function(value) {
    if (value) return 'Habilitado'
    return 'Deshabilitado'
})

Vue.component('pagination', require('laravel-vue-pagination'))
// Vue.component('services-component', require('./components/servicesa/servicesCompoenent.vue'))
Vue.component('services-component', require('./components/services/ServiceComponent.vue'))
Vue.component('customers-component', require('./components/customers/CustomerComponent.vue'))
new Vue({
	el: '#app',
})