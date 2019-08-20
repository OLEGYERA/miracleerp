import Vue from 'vue';

const Modules = {
    header: Vue.component('header-welcome', require('./components/WelcomeMiracle/modules/header.vue')),
    footer: Vue.component('footer-welcome', require('./components/WelcomeMiracle/modules/footer.vue')),

}


export default Modules;