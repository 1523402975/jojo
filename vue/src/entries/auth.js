// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import router from '../router/auth'
import BootstrapVue from 'bootstrap-vue'
import Auth from '../components/Auth'
import VueResource from 'vue-resource'

import '../assets/paper-kit/css/bootstrap.min.css'
import '../assets/paper-kit/css/paper-kit.css?v=2.1.0'
import '../assets/paper-kit/css/demo.css'
import '../assets/paper-kit/css/nucleo-icons.css'

Vue.use(BootstrapVue)
Vue.use(VueResource)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
    el: '#auth',
    router,
    // template: '<App/>',
    components: { Auth }
})
