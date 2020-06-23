import Vue from 'vue'
import Router from "vue-router"

import Index from "./components/pages/index"
import MovieHome from "./components/pages/movies-home"
import OneMovie from "./components/pages/one-movie"
import AddMovie from "./components/pages/add-movie"

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
        path: '/add',
        component: AddMovie,
        name: 'add'
    }

];

export default new Router({
    mode: 'history',
    routes
})
