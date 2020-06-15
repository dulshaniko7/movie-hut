<template>
    <div>
        <div class="mainPic">
            <MainNav></MainNav>
        </div>
        <h2 class="text-center mt-3">Recent Movies</h2>
        <div class="container">
        <singleMovie></singleMovie>
        </div>
    </div>
</template>

<script>

    import MainNav from "../sub-components/MainNav"
    import singleMovie from "../sub-components/singleMovie"

    export default {
        name: "index",
        components: {
            MainNav,
            singleMovie
        }
    }
</script>

<style scoped>
    .mainPic {
        position: relative;
        z-index: 0;
        display: grid;
        height: 95vh;
        background-image: url("../../images/mainpic1.jpg");
        background-size: cover;

        background-position: center;
    }
</style>