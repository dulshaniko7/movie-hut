<template>
    <div>
        <h2>{{movie.name}}</h2>
        <p>{{ movie.description}}</p>
        <h2>Price</h2>
        <p>{{movie.price}}</p>
        <h2>Actors</h2>
        <p>{{movie.actors}}</p>
<p>{{movie.image}}</p>
    </div>
</template>

<script>
    export default {
        name: "one-movie",
        data() {
            return {
                movie: null
            }
        },

        created() {
            axios.get(`api/Products/${this.$route.params.id}`)
                .then(response => {
                    this.movie = response.data.data
                })
                .catch(error => {
                    console.log("error")
                })
        }
    }
</script>

<style scoped>

</style>
