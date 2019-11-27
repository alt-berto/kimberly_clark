require('./bootstrap');

window.Vue = require('vue');

Vue.component( 'side-menu-component', require( './components/SideMenuComponent.vue' ).default );

const app = new Vue({
    el: '#app'
});