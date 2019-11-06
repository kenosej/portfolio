<template>
    <div id="about">
        <keep-alive>
            <Bio/>
        </keep-alive>
        <keep-alive>
            <Info/>
        </keep-alive>
        <keep-alive>
            <Mail/>
        </keep-alive>
    </div>
</template>

<script>
    import Bio from "../components/about/Bio";
    import Info from "../components/about/Info";
    import Mail from "../components/about/Mail";

    export default {
        name: "Services",
        components: {
            Bio,
            Info,
            Mail
        }
    }
</script>

<style>
    #about {
        height: 833px;
        display: grid;
        grid-auto-rows: 70% 18% 12%;
        width: 100%;
    }

    @media only screen and (min-width: 768px) {
        #about {
            height: 90vh;
            grid-auto-rows: 75% 15% 10%;
        }
    }

    @media only screen and (min-width: 1200px) {
        #about {
            grid-template-rows: 80vh 10vh;
            grid-template-columns: repeat(3, 1fr);
            grid-template-areas: "bio bio bio" "info mail info2";
        }
    }
</style>