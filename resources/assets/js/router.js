import M from './modules.js';
import C from './components.js';
import Vue from 'vue';
import VueRouter from 'vue-router'
Vue.use(VueRouter);

const router = new VueRouter
({
    mode: 'history',
    routes: [
        {path: '/', component: C.main, name: 'mainWelcome'},
        {path: '/login', component: C.login, name: 'login'},
        {path: '/signin', component: C.sign, name: 'signin'},
        {path: '/confirmation/email/:email', component: C.confirmation, name: 'confirmation'},
        {path: '/reference/confirmation/:email/:token', component: C.reference, name: 'reference'},

    ]
})




export default router;