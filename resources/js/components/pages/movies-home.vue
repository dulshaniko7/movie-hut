<template>
    <div>
        <MainNav></MainNav>
        <div v-for="movie in movies" :key="movie.id" :movie="movie">
            <single-movie v-bind="movie"></single-movie>
        </div>
    </div>
</template>

<script>
    import MainNav from "../sub-components/MainNav";
    import SingleMovie from "../sub-components/singleMovie";

    export default {
        name: "movies-home",
        components: {SingleMovie, MainNav},
        data() {
            return {
                movies: null
            }
        },
        created() {

            const request = axios.get('api/products')
                .then(response => {
                    this.movies = response.data.data;
                })
                .catch(error => {
                    console.log('Data error'+error);
                });
        }

    }
</script>

<style scoped>

</style>
