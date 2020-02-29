require('./bootstrap');

const Vue = require('vue');

Vue.component('my-component-name', {});

const vm = new Vue({
    el: '#app'
});
