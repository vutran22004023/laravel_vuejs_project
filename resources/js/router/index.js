import { createRouter, createWebHistory } from 'vue-router';
import invoiceIndex from '../components/invoices/index.vue';
import NotFounds from '../components/NotFound.vue';

const routes = [
    {
        path:'/',
        component: invoiceIndex
    },
    {
        path: '/:pathMatch(.*)*',
        component: NotFounds
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;