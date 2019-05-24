/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
import VeeValidate from 'vee-validate';
import bootstrap from 'bootstrap';
import routes from './routes';
import { dictionary } from './utils/dictionary';

/**
 * Use Statements of libraries that need to be loaded
 */
Vue.use(VueRouter);
Vue.use(VeeValidate, {
    aria: true,
    classes: true,
    dictionary: dictionary,
    events: 'input|blur'
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
