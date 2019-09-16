import Vue from 'vue';

const Modules = {
    header: Vue.component('header-welcome', require('./components/WelcomeMiracle/modules/header.vue')),
    footer: Vue.component('footer-welcome', require('./components/WelcomeMiracle/modules/footer.vue')),

    stickers: Vue.component('sticker', require('./GlobalModules/stickers.vue'))
}


export default Modules;