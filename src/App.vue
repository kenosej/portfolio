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
        data() {
            return {
                browserInfo:
                    navigator.browserInfo = (function () {
                        let output, tem, ua;
                        ua = navigator.userAgent;
                        tem = void 0;

                        output = ua.match(/(android)\s([0-9.]*)/i) || ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];

                        if (/android/i.test(output[1])) {
                            return {
                                name: 'android',
                                version: parseInt(output[2])
                            };
                        }

                        if (/trident/i.test(output[1])) {
                            tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                            return {
                                name: 'ie',
                                version: parseInt(tem[1]) || ''
                            };
                        }

                        if (output[1] === 'Chrome') {
                            tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
                            if (tem !== null) {
                                return {
                                    name: tem[1].replace('OPR', 'opera'),
                                    version: parseInt(tem[2])
                                };
                            }
                        }

                        output = output[2] ? [output[1], output[2]] : [navigator.appName, navigator.appVersion, '-?'];

                        if ((tem = ua.match(/version\/(\d+)/i)) !== null) {
                            output.splice(1, 1, tem[1]);
                        }

                        return {
                            name: output[0].toLowerCase(),
                            version: parseInt(output[1])
                        };
                    })().name,
                userOS: (() => {
                    let OSName = "Unknown OS";

                    if (navigator.appVersion.indexOf("Win") !== -1) OSName = "Windows";

                    if (navigator.appVersion.indexOf("Mac") !== -1) OSName = "MacOS";

                    if (navigator.appVersion.indexOf("X11") !== -1) OSName = "UNIX";

                    if (navigator.appVersion.indexOf("Linux") !== -1) OSName = "Linux";

                    return OSName;
                })(),
                userPhone: (() => {
                    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
                })(),
                userLang: (() => {
                    return window.navigator.language;
                })(),
                userReferrer: (() => {
                    return document.referrer;
                })(),
                userHistoryNum: (() => {
                    return history.length;
                })(),
                userScreenWidth: (() => {
                    return screen.width;
                })()

            }
        },
        watch: {
            $route(to, from) {
                this.isAbout = to.name === "about";
                this.goingTo = to.name;
                this.comingFrom = from.name;
            }
        },
        created() {
            const userData =
                {
                    id: this.$id,
                    info: {
                        browser: this.browserInfo,
                        system: this.userOs,
                        phone: this.userPhone,
                        language: this.userLang,
                        referrer: this.userReferrer,
                        history: this.userHistoryNum,
                        screenSize: this.userScreenWidth,
                        time: this.$time,
                        instagram: 0,
                        github: 0,
                        twitter: 0,
                        gmail: 0,
                        about: 0,
                        image: 0,
                        right: 0,
                        gmailAbout: 0,
                        toHome: 0,
                        gmailServices: 0,
                        timeSpent: 0
                    }
                };

            fetch(`https://keno-sej.tech//data/info.php?firstInfo=${JSON.stringify(userData)}`)
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

    .services-enter {
        transform: translateX(100%);
        opacity: 0;
        position: absolute;
    }

    .services-enter-to {
        position: static;
        transform: translateX(0);
        opacity: 1;
    }

    .services-leave {
        transform: translateX(0);
        opacity: 1;
        position: static;
    }

    .services-leave-to {
        transform: translateX(100%);
        position: absolute;
        opacity: 0;
    }
</style>