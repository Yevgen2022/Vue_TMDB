import {createRouter, createWebHistory} from 'vue-router';
// import HomePage from '../Pages/HomePage.vue';
// import MoviesPage from '../Pages/MoviesPage.vue';
// import ShowsPage from '../Pages/ShowsPage.vue';
// import PeoplePage from "../Pages/PeoplePage.vue";


const routes = [

    // Example of routing
    //  { path: '/', component: HomePage },
    //  {path: '/people', component: PeoplePage}
    //



    {
        path: '/',
        name: 'Home',
        component: () => import('../Pages/HomePage.vue'),
    },

    {
        path: '/movies',
        name: 'Movies',
        component: () => import('../Pages/MoviesPage.vue'),
    },

    {
        path: '/shows',
        name: 'TV Shows',
        component: () => import('../Pages/ShowsPage.vue'),
    },


    {
        path: '/people',
        name: 'People',
        component: () => import('../Pages/PeoplePage.vue'),
    },

];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
