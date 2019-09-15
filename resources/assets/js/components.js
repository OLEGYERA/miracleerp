import Vue from 'vue';

const Components = {
    Template: Vue.component('start-welcome', require('./components/WelcomeMiracle/StartTemplate.vue')),
    main: Vue.component('main-welcome', require('./components/WelcomeMiracle/main.vue')),
    login: Vue.component('login', require('./components/WelcomeMiracle/Auth/login.vue')),
    sign: Vue.component('sign', require('./components/WelcomeMiracle/Auth/sign.vue')),
    confirmation: Vue.component('confirmation', require('./components/WelcomeMiracle/Auth/confirmation.vue')),
    reference: Vue.component('reference', require('./components/WelcomeMiracle/Auth/reference.vue')),


    //
    // header: Vue.component('header-welcome', require('./components/ExampleComponent.vue')),
}


export default Components;