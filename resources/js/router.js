import Vue from 'vue'
import Router from "vue-router"

import Index from "./components/pages/index"
import MovieHome from "./components/pages/movies-home"
import OneMovie from "./components/pages/one-movie"

Vue.use(Router);

const routes = [
    {
        path: '/',
        component: Index,
        name:'home'
    },
    {
        path: '/movies',
        component: MovieHome,
        name: 'movies'
    },
    {
        path: '/:id',
        name: 'movie',
        component: OneMovie,
        params: true
    }
];

export default new Router({
    mode: 'history',
    routes
})
