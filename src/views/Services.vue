<template>
    <div class="services">
        <Offers/>
        <Skills/>
        <Contact/>
        <Ending/>
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
    }
</style>