import Vue from 'vue';

const Components = {
    Template: Vue.component('start-welcome', require('./components/WelcomeMiracle/StartTemplate.vue')),
    main: Vue.component('main-welcome', require('./components/WelcomeMiracle/main.vue')),
    login: Vue.component('login', require('./components/WelcomeMiracle/Auth/login.vue')),

    //
    // header: Vue.component('header-welcome', require('./components/ExampleComponent.vue')),
}


export default Components;