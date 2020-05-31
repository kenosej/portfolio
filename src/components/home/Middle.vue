<template>
    <div class="middle">
        <div class="name">
            <h2>Hello world</h2>
            <h1>I'm Kenan Sejmenović</h1>
            <h3>Full Stack Web Developer</h3>
        </div>
        <div class="gems">
            <div id="phpGem">
                •
                <span class="bubble">PHP</span>
            </div>
            <div id="jqueryGem">
                •
                <span class="bubble">jQuery</span>
            </div>
            <div id="cssGem">
                •
                <span class="bubble">CSS3</span>
            </div>
            <div id="jsGem">
                •
                <span class="bubble">Javascript</span>
            </div>
            <div id="sqlGem">
                •
                <span class="bubble">SQL</span>
            </div>
            <div id="xdGem">
                •
                <span class="bubble">Adobe XD</span>
            </div>
            <div id="linuxGem">
                •
                <span class="bubble">Linux</span>
            </div>
            <div id="nodeGem">
                •
                <span class="bubble">Node</span>
            </div>
            <div id="vueGem">
                •
                <span class="bubble">Vue</span>
            </div>
            <div id="laravelGem">
                •
                <span class="bubble">Laravel</span>
            </div>
            <div id="socketIOGem">
                •
                <span class="bubble">Socket.io</span>
            </div>
            <div id="redisGem">
                •
                <span class="bubble">Redis</span>
            </div>
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
        padding: 0 0 11px;
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

    #phpGem:hover {
        --main-hover-color: #6582BC;
    }

    #jqueryGem {
        color: #0867AC;
    }

    #jqueryGem:hover {
        --main-hover-color: #0867AC;
    }

    #cssGem {
        color: #379AD6;
    }

    #cssGem:hover {
        --main-hover-color: #379AD6;
    }

    #jsGem {
        color: #F0DB4F;
    }

    #jsGem:hover {
        --main-hover-color: #F0DB4F;
    }

    #sqlGem {
        color: #F8981D;
    }

    #sqlGem:hover {
        --main-hover-color: #F8981D;
    }

    #xdGem {
        color: #FF2BC2;
    }

    #xdGem:hover {
        --main-hover-color: #FF2BC2;
    }

    #linuxGem {
        color: #9CCD2A;
    }

    #linuxGem:hover {
        --main-hover-color: #9CCD2A;
    }

    #nodeGem {
        color: #83CD29;
    }

    #nodeGem:hover {
        --main-hover-color: #83CD29;
    }

    #vueGem {
        color: #41B883;
    }

    #vueGem:hover {
        --main-hover-color: #41B883;
    }

    #laravelGem {
        color: #ff6358;
    }

    #laravelGem:hover {
        --main-hover-color: #ff6358;
    }

    #socketIOGem {
        color: #ffffff;
    }

    #socketIOGem:hover {
        --main-hover-color: #ffffff;
    }

    #redisGem {
        color: #d92b21;
    }

    #redisGem:hover {
        --main-hover-color: #d92b21;
    }

    .gems div {
        position: relative;
        cursor: default;
        transition: 0.2s;
        font-size: 15px;
    }

    .gems div:not(:last-child) {
        margin-right: 15px;
    }

    .gems div:hover {
        transform: scale(1.4);
        text-shadow: 0 0 10px var(--main-hover-color);
    }

    .bubble {
        visibility: hidden;
        position: absolute;
        background-color: #4b4b4b;
        color: #fff;
        text-align: center;
        z-index: 1;
        border-radius: 6px;
        padding: 0 8px;
        top: -1%;
        right: 110%;
        font-size: 11px;
        margin-right: 7px;
        white-space: pre;
        text-shadow: none !important;
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

        .gems div {
            font-size: 23px;
            right: 5px;
        }

        .middle:not(.gems) {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gems div:not(:last-child) {
            margin-right: 0;
        }

        .bubble:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 98%;
            margin-top: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent transparent #4b4b4b;
        }

        .gems div:hover .bubble {
            visibility: visible;
        }
    }

    @-moz-document url-prefix() {
        @media only screen and (min-width: 768px) {
            .bubble:before {
                height: 2px;
                left: 96%;
            }
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
