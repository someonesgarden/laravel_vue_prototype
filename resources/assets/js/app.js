import Vue from 'vue'
import VueRouter from 'vue-router'

require('./bootstrap');

Vue.use(VueRouter);

window.Vue = require('vue');


Vue.component('example', require('./components/Example.vue'));

Vue.component('navbar', require('./components/Layouts/Navbar.vue'));

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/app', component: require('./components/Index.vue') },
        { path: '/about', component: require('./components/About.vue') },
    ]
})


const app = new Vue({

    router,
    el: '#app'
});
