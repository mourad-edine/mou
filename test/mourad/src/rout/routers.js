import index from '../components/index.vue'
import index2 from '../components/index2.vue'
import * as VueRouter from 'vue-router'


const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'Home',
            component: index
        },
        {
            path: '/about',
            name: 'About',
            component: index2
        }
    ]
})

export default router;