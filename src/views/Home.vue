<template>
    <div class="home">
        <Middle/>
        <Footer/>
    </div>
</template>

<script>
    import Middle from "../components/home/Middle";
    import Footer from "../components/home/Footer";

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