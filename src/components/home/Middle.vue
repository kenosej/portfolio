<template>
    <div class="middle">
        <div class="name">
            <h2>Hello world</h2>
            <h1>I'm Kenan Sejmenović</h1>
            <h3>Full Stack Web Developer</h3>
        </div>
        <div class="gems">
            <span id="phpGem">•</span> <br>
            <span id="jqueryGem">•</span> <br>
            <span id="cssGem">•</span> <br>
            <span id="jsGem">•</span> <br>
            <span id="sqlGem">•</span> <br>
            <span id="xdGem">•</span> <br>
            <span id="linuxGem">•</span> <br>
            <span id="nodeGem">•</span> <br>
            <span id="vueGem">•</span> <br>
            <span id="wpGem">•</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Middle"
    }
</script>

<style scoped>
    .middle {
        flex-direction: column;
    }

    .middle:not(.gems) {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gems span:not(:last-child) {
        margin-right: 17px;
    }

    .name {
        text-align: center;
    }

    .name h2 {
        font-size: 26px;
    }

    .name h1 {
        font-size: 30px;
        padding: 20px 0 12px;
        position: relative;
    }

    .name h1:before {
        position: absolute;
        content: '';
        height: 1px;
        margin: 0 auto;
        left: 0;
        right: 0;
        bottom: 0;
        width: 90%;
        background: #707070;
    }

    .name h3 {
        margin-top: 20px;
        font-size: 24px;
        position: relative;
        padding: 0 0 12px;
    }

    .name h3:before {
        position: absolute;
        content: '';
        background: #707070;
        width: 70%;
        height: 1px;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
    }

    .gems {
        display: flex;
        margin-top: 10px;
    }

    #phpGem {
        color: #6582BC;
    }

    #jqueryGem {
        color: #0867AC;
    }

    #cssGem {
        color: #379AD6;
    }

    #jsGem {
        color: #F0DB4F;
    }

    #sqlGem {
        color: #F8981D;
    }

    #xdGem {
        color: #FF2BC2;
    }

    #linuxGem {
        color: #9CCD2A;
    }

    #nodeGem {
        color: #83CD29;
    }

    #vueGem {
        color: #41B883;
    }

    #wpGem {
        color: #3698C5;
    }

    @media only screen and (min-width: 768px) {
        .name h2 {
            font-size: 46px;
        }

        .name h1 {
            font-size: 50px;
        }

        .name h3 {
            font-size: 32px;
        }

        .gems {
            position: absolute;
            right: 10px;
            font-size: 28px;
            display: block;
            margin-top: 0;
            line-height: 1.5em;
        }

        .middle:not(.gems) {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gems span:not(:last-child) {
            margin-right: 0;
        }
    }

    @media only screen and (min-width: 1200px) {
        .name h2 {
            font-size: 93px;
        }

        .name h1 {
            font-size: 100px;
            padding: 25px 0 20px;
        }

        .name h3 {
            font-size: 65px;
            padding-bottom: 15px;
        }

        .middle {
            flex-direction: column;
        }
    }
</style>