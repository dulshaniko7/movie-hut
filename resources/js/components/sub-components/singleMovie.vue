<template>
    <div>
        <router-link :to="{ name:'movie',params:{id:id} }">
            <h3>{{name}}</h3>

        </router-link>
    </div>
</template>

<script>
    export default {
        name: "singleMovie",
       props: {"name":String,"price":Number,"id":Number}
    }
</script>

<style scoped>

</style>
