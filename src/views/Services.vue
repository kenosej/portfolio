<template>
    <div class="services">
<!--        <keep-alive>-->
            <Offers/>
<!--        </keep-alive>-->
<!--        <keep-alive>-->
            <Skills/>
<!--        </keep-alive>-->
<!--        <keep-alive>-->
            <Contact/>
<!--        </keep-alive>-->
<!--        <keep-alive>-->
            <Ending/>
<!--        </keep-alive>-->
    </div>
</template>

<script>
    import Offers from "../components/services/Offers";
    import Skills from "../components/services/Skills";
    import Contact from "../components/services/Contact";
    import Ending from "../components/services/Ending";

    export default {
        name: "Services",
        components: {
            Offers,
            Skills,
            Contact,
            Ending
        }
    }
</script>

<style>
    .services h1 {
        font-family: "Open Sans SemiBold", serif;
        font-size: 18px;
    }

    .services {
        display: grid;
        grid-template-rows: 43% 40% 9% 8%;
        height: 1158px;
        width: 100%;
    }

    @media only screen and (min-width: 768px) {
        .services {
            grid-template-rows: 45% 12% 36% 7%;
            height: 1400px;
        }

        .services h1 {
            font-size: 22px;
        }
    }

    @media only screen and (min-width: 1200px) {
        .services {
            height: 90vh;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: 1.4fr 0.6fr;
            grid-template-areas: "skills offers offers ." "skills contact contact ending";
        }

        .services h1 {
            font-size: 28px;
        }

        .services .skills p, .services .offers p {
            font-size: 20px;
        }
    }
</style>