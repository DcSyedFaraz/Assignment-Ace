import { createRouter, createWebHistory } from 'vue-router';
import home from './pages/home.vue';
import login from './pages/login.vue';
import register from './pages/register.vue';
import about from './pages/about.vue';
import order from './pages/order.vue';

const routes = [
    {
        path : '/',
        name : 'home',
        component : home
    },
    {
        path : '/login',
        name : 'login',
        component : login
    },
    {
        path : '/register',
        name : 'register',
        component : register
    },
    {
        path : '/about',
        name : 'about',
        component : about
    },
    {
        path : '/order',
        name : 'order',
        component : order
    },
]

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
