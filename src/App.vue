<template>
    <div id="app">
        <div id="nav">
            <Header v-bind:about="this.isAbout"/>
        </div>
        <transition
                :name="((this.goingTo === 'Services' && this.comingFrom === 'home') || (this.goingTo === 'home' && this.comingFrom === 'Services') ? 'services' : 'landing')">
            <router-view/>
        </transition>
    </div>
</template>

<script>
    import Header from "./components/Header";

    export default {
        name: 'app',
        components: {
            Header
        },
        watch: {
            $route(to, from) {
                this.isAbout = to.name === "about";
                this.goingTo = to.name;
                this.comingFrom = from.name;
            }
        }
    }
</script>

<style>
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section {
        display: block;
    }

    body {
        line-height: 1;
    }

    ol, ul {
        list-style: none;
    }

    blockquote, q {
        quotes: none;
    }

    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    body {
        height: 100vh;
        max-height: 100vh;
    }

    #app {
        width: 100%;
        background-color: #333333;
        color: #999999;
        font-family: "Open Sans", serif;
        overflow-y: hidden;
        position: absolute;
        overflow-x: hidden;
    }

    .landing-enter-active,
    .landing-leave-active {
        transition: 1s;
    }


    .landing-enter {
        transform: translateX(-100%);
        opacity: 0;
        position: absolute;
    }

    .landing-enter-to {
        position: static;
        transform: translateX(0);
        opacity: 1;
    }

    .landing-leave {
        transform: translateX(0);
        opacity: 1;
        position: static;
    }

    .landing-leave-to {
        transform: translateX(-100%);
        position: absolute;
        opacity: 0;
    }

    /**/

    .services-enter-active,
    .services-leave-active {
        transition: 1s;
    }

    .services-enter-active {
        animation: coming 1s;
    }

    .services-leave-active {
        animation: going 1s;
    }

    @keyframes coming {
        from {
            transform: translateX(100%);
            opacity: 0;
            position: absolute;
        }
        to {
            position: static;
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes going {
        from {
            transform: translateX(0);
            opacity: 1;
            position: static;
        }

        to {
            transform: translateX(100%);
            position: absolute;
            opacity: 0;
        }
    }
</style>