<template>
    <div class="offers">
        <h1>WHAT CAN I DO FOR YOU:</h1>
        <p><span>•</span> MAKE ENTIRE WEBSITE FROM SCRATCH</p>
        <p><span>•</span> BACK-END / FRONT-END</p>
        <p><span>•</span> FIND AND RESOLVE BUGS</p>
        <p><span>•</span> FROM OLD PHP TO PHP 7.3.11</p>
        <p><span>•</span> OPTIMIZE PAGE LOAD SPEED</p>
        <p><span>•</span> CONFIGURE/OPTIMISE DATABASE</p>
        <p><span>•</span> ENHANCE SEO</p>
        <p><span>•</span> CONVERT TO HTML/CSS/JS (FROM PSD...)</p>
        <p><span>•</span> MAKE WEBSITE RESPONSIVE</p>
        <p><span>•</span> DESIGN WEBSITE IN ADOBE XD</p>
    </div>
</template>

<script>
    export default {
        name: "Offers"
    }
</script>

<style scoped>
    .offers {
        display: flex;
        flex-direction: column;
        padding: 30px 15px;
    }

    .offers p > span {
        color: #8F82FC;
    }

    .offers h1 {
        padding: 0 0 15px 10px;
    }

    .offers p {
        padding: 7px 0;
        font-size: 16px;
        color: #BBB9B9;
        line-height: 1.6;
    }

    @media only screen and (min-width: 768px) {
        .offers {
            margin: auto;
            padding: 15px 0;
        }

        .offers h1 {
            padding: 0 0 40px 10px;
        }
    }

    @media only screen and (min-width: 1200px) {
        .offers {
            grid-area: offers;
        }
    }
</style>