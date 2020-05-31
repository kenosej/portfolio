<template>
    <div class="footer">
        <div class="pic">
            <img src="../../assets/profile.jpg" alt="profilePhoto" @click="imgClick">
        </div>
    </div>
</template>

<script>
    export default {
        name: "Footer",
        data() {
            return {
                timeSpent: Math.floor(+new Date() / 1000) - this.$time
            }
        },
        methods: {
            imgClick() {
                fetch(`https://keno-sej.tech/data/updateInfo.php?id=${this.$id}&timeSpent=${this.timeSpent}&imgClick=1`)
            }
        }
    }
</script>

<style scoped>
    .footer {
        display: block;
    }

    .pic {
        margin-left: 0;
        margin-bottom: 0;
        position: relative;
        display: flex;
        height: 100%;
    }

    .pic img {
        max-height: calc(19.7vh - 3em);
        margin-left: 0.5em;
        border: 1px solid #6582BC;
        border-radius: 50%;
        margin-top: 1.7em;
    }

    @media only screen and (min-width: 768px) {
        .footer {
            display: grid;
            grid-template-columns: 3fr 1fr;
        }

        .pic {
            display: flex;
            margin-left: 1em;
            margin-bottom: 0;
        }

        .pic img {
            max-height: calc(19.7vh - 3em);
            margin-left: 0;
            margin-top: 0.5em;
        }
    }

    @media only screen and (max-width: 815px) and (orientation: landscape) {
        .pic img {
            max-height: calc(19.7vh - 0.5em);
            margin-top: 0;
        }
    }

    @media only screen and (min-width: 1200px) {
        .pic {
            margin-left: 1em;
            margin-bottom: 1em;
        }

        .pic img {
            max-height: calc(19.7vh - 2em);
            margin-top: 0;
        }
    }
</style>
