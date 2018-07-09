import VueRouter from 'vue-router';
import Vue from 'vue'
Vue.use(VueRouter)
import NoteBook from './notebook/NoteBook';
import Diary from './notebook/Diary';
import Goal from './notebook/Goal';
const routes = [
    // {
    //     path: '/login',
    //     component: Login,
    //     name: 'login',
    //     // beforeEnter: (to, from, next) => {

    //     //     if (localStorage.getItem('authenticated')) {
    //     //         next('/admin/company');
    //     //     } else {
    //     //         next();
    //     //     }
    //     // }
    // },
     {
        path: '/notebook',
        component: NoteBook,
        children: [
            {
                path: 'diary',
                name: 'diary',
                component: Diary,
            },
            {
                path: 'goal',
                name: 'goal',
                component: Goal,
            },
            
        ],
    //     beforeEnter: (to, from, next) => {

    //         if (!localStorage.getItem('authenticated') && to.path !== '/admin/login') {
    //             next('/admin/login');
    //         } else {
    //             next();
    //         }
    //     }
    },
    // {
    //     path: '*',
    //     redirect: {
    //         name: 'login'
    //     }
    // },
];
const router = new VueRouter({
    mode: 'history',
    routes
});

export default router;