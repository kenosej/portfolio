<template>
    <div class="home">
        <Middle/>
        <Footer/>
    </div>
</template>

<script>
    import Middle from "./home/Middle";
    import Footer from "./home/Footer";

    export default {
        name: "Home",
        components: {
            Middle,
            Footer
        }
    }
</script>

<style>
    .home {
        display: grid;
        height: 90vh;
        overflow: hidden;
        grid-template-rows: 70vh 20vh;
    }
</style>