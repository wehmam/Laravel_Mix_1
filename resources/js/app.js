require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Index from './components/Index.vue'
import Create from './components/Create.vue'

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const routes = [
    { path: '/' , component: Index},
    { path: '/create', component: Create}
]

const router = new VueRouter({
    routes
})

const app = new Vue({
    // el: '#app',
    router
}).$mount('#app');
