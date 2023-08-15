import {createRouter, createWebHistorg} from "vue-router";
    const routes = [
        {
            path: '/',
            name: 'home',
            component: helloworld,
        }
    ]

    const router = createRouter({
    history: createWebHistory(),
    routes
    })
    export default router;
    <script>
        console.log("hello");
    </script>
