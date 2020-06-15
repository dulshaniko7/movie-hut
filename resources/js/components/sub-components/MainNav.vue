<template>
    <div>
        <div class="main-nav">
            <ul class="nav-ul">
                <li class="nav-li"><a href="/movies">Movie</a></li>
                <li class="nav-li"><a href="/movies">TV</a></li>
                <li class="nav-li"><a href="/movies">Hindi</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "MainNav"
    }
</script>

<style scoped>
    .main-nav {
        line-height: 4rem;
        z-index: 4;
    }

    .nav-ul {
        float: left;
        list-style: none;
    }

    .nav-li {
        float: left;
        width: 10rem;
        height: 3rem;
        font-size: 2rem;
        color: whitesmoke;
    }

    .nav-li:nth-child(1) {
        margin-left: 50rem;
    }

</style>
