window.Vue = require('vue');
window.tippy = require('tippy.js');
window.WOW = require('wowjs');
window.axios = require('axios');
window.VueRouteLaravel = require('vue-route-laravel')
const queryString = require('query-string')
Vue.use(VueRouteLaravel, {
    baseroute: '/api/route/',
    axios: axios,
    queryString: queryString,
    csrf_token: document.head.querySelector("[name=csrf-token]").content
})
import Croppa from 'vue-croppa'
Vue.use(Croppa)   


//global registration
import Multiselect from 'vue-multiselect'
Vue.component('multiselect', Multiselect)

import VueFormWizard from 'vue-form-wizard'
import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
Vue.use(VueFormWizard)
Vue.use(VueFormWizard)

import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import VueFormGenerator from 'vue-form-generator'
Vue.use(VueFormGenerator)

import Element from 'element-ui'
// import 'element-ui/lib/theme-chalk/index.css'
import locale from 'element-ui/lib/locale/lang/es'
Vue.use(Element, { locale })

import moment from 'moment'
var VueTruncate = require('vue-truncate-filter')
Vue.filter('formatDateD', function(value) { return moment(String(value)).format('DD') })
Vue.filter('formatDateMY', function(value) { return moment(String(value)).format('MM YYYY') })
Vue.filter('projectStatus', function(value) {
	if(value)
		return 'Abierto'
	else
		return 'Cerrado'
})
Vue.use(VueTruncate)
      
Vue.component('pagination', require('laravel-vue-pagination'))
Vue.component('example-component', require('./components/ExampleComponent.vue'))
Vue.component('project-pagination-component', require('./components/project/PaginationProjectsComponent.vue'))
Vue.component('account-component', require('./components/account/AccountComponent.vue'))
Vue.component('avatar-component', require('./components/account/avatarComponent.vue'))

var vm = new Vue({
	el: '#app',
})