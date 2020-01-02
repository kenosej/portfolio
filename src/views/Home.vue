<template>
    <div class="home">
        <keep-alive>
            <Middle/>
        </keep-alive>
        <keep-alive>
            <Footer/>
        </keep-alive>
    </div>
</template>

<script>
    import Middle from "../components/home/Middle";
    import Footer from "../components/home/Footer";

    export default {
        name: "Home",
        metaInfo: {
            titleTemplate: '%s | Portfolio',
            title: 'Kenan Sejmenović',
            meta: [
                { name: 'description', content:  "Hello world, I'm Kenan Sejmenović and this is my portfolio website." }
            ]
        },
        components: {
            Middle,
            Footer
        },
        data() {
            return {
                timeSpent: Math.floor(+new Date() / 1000) - this.$time
            }
        },
        created() {
            fetch(`https://keno-sej.tech/data/updateInfo.php?id=${this.$id}&timeSpent=${this.timeSpent}&homeCreated=1`)
        }
    }
</script>

<style>
    .home {
        display: grid;
        height: 90vh;
        width: 100%;
        overflow: hidden;
        grid-template-rows: 70vh 20vh;
    }
</style>