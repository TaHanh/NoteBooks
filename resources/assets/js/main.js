window.Vue = require('vue');
import Vue from 'vue';
import Vuetify from 'vuetify';
Vue.use(Vuetify)
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import router from './router';
Vue.component('header-component', require('./components/Header.vue'));
const notebook = new Vue({
    el: '#notebook',
    router
});