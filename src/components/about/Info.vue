<template>
    <div class="info">
        <div class="place">
            <img src="../../assets/place.png" alt="place">
            <span>Maglaj, BiH, Europe</span>
        </div>
        <div class="school">
            <div class="spans">
                <span>Gymnasium "Edhem Mulabdić" - 2020</span>
                <span>B.SE. - 2024</span>
            </div>
            <img src="../../assets/school.png" alt="school">
        </div>
    </div>
</template>

<script>
    export default {
        name: "Info"
    }
</script>

<style scoped>
    .info {
        display: grid;
        grid-template-rows: 1fr 1fr;
        position: relative;
    }

    .info:before {
        position: absolute;
        content: "";
        width: 80%;
        background: #707070;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        height: 1px;
    }

    .place span, .school span {
        font-size: 14px;
    }

    .place {
        display: flex;
        align-items: center;
        padding-left: 1em;
        padding-top: 0.5em;
    }

    .place span {
        padding-left: 0.5em;
    }

    .school {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding-right: 1em;
        padding-bottom: 0.5em;
    }

    .spans {
        text-align: center;
        line-height: 1.4;
        padding-right: 0.5em;
    }

    .spans span {
        display: block;
    }

    .info img {
        height: 25px;
        transition: 0.4s;
    }

    .info img:hover {
        filter: brightness(1.3);
    }

    @media only screen and (min-width: 768px) {
        .info:before {
            width: 0;
            height: 0;
        }

        .info {
            grid-template-columns: 1fr 1fr;
        }

        .place {
            align-items: center;
            padding-left: 1em;
            padding-top: 0.5em;
            position: fixed;
            bottom: 1em;
            left: 0;
        }

        .school {
            position: fixed;
            bottom: 1em;
            right: 0;
            padding-bottom: 0;
        }
    }

    @media only screen and (max-width: 830px) and (min-width: 768px) and (orientation: landscape) {
        .info {
            grid-template-rows: 2fr 0;
        }

        .place {
            margin-left: 1em;
            position: static;
            padding-left: 0;
            padding-top: 0;
        }

        .school {
            position: static;
            margin-right: 1em;
            padding-right: 0;
        }
    }
</style>