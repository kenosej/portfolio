<template>
    <div class="ending">
        <h2>MAKING WEB BETTER!</h2>
        <span>© - 2019</span>
    </div>
</template>

<script>
    export default {
        name: "Ending"
    }
</script>

<style scoped>
    .ending {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
    }

    .ending h2 {
        margin: 1.3em 0;
        font-size: 18px;
        color: #8F82FC;
    }

    .ending span {
        font-size: 12px;
    }

    @media only screen and (min-width: 1200px) {
        .ending {
            grid-area: ending;
        }

        .ending h2 {
            font-size: 25px;
            margin: auto;
        }

        .ending span {
            position: fixed;
            bottom: 0.5em;
            right: 1em;
        }
    }
</style>