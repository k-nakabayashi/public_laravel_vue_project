import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import accout_cards from '../design/components/tw/bar/accout_cards.vue';
const routes = [
    {
        path: '/home',
        components: {
          accout_cards: accout_cards,
        },
    },
];

// 5.
const router = new VueRouter({

    mode: 'history',
    routes,
})

// 6.
export default router;