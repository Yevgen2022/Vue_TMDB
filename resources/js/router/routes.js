import { createRouter, createWebHistory } from 'vue-router';
// import HomePage from '../Pages/HomePage.vue';
import MoviesPage from '../Pages/MoviesPage.vue';
import ShowsPage from '../Pages/ShowsPage.vue';
import PeoplePage from "../Pages/PeoplePage.vue";


const routes = [

    // { path: '/', component: HomePage },

    {
        path: '/',
        name: 'Home',
        component: () => import('../Pages/HomePage.vue'),
    },

    { path: '/movies', component: MoviesPage },
    { path: '/shows', component: ShowsPage },
    { path: '/people', component: PeoplePage },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
