<template>
    <div class="header">
        <div class="icons">
            <div class="icon">
                <img id="ig" src="../assets/instagram.png" alt="instagram">
                <a href="https://instagram.com/keno_sej" target="_blank" rel="noopener noreferrer">
                    <img id="coloredIg" src="../assets/colored_instagram.png" alt="instagram">
                </a>
            </div>
            <div class="icon">
                <a href="https://github.com/kenosej" target="_blank" rel="noopener noreferrer">
                    <img id="github" src="../assets/github.png" alt="github">
                </a>
            </div>
            <div class="icon">
                <img id="twitter" src="../assets/twitter.png" alt="twitter">
                <a href="https://twitter.com/keno_sej" target="_blank" rel="noopener noreferrer">
                    <img id="coloredTwitter" src="../assets/colored_twitter.png" alt="twitter">
                </a>
            </div>
            <div class="icon">
                <img id="gmail" src="../assets/gmail.png" alt="gmail">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=kenosej.business@gmail.com" target="_blank"
                   rel="noopener noreferrer">
                    <img id="coloredGmail" src="../assets/colored_gmail.png" alt="gmail">
                </a>
            </div>
        </div>
        <div class="about">
            <router-link :to="(about ? '/' : '/about')"><h1>{{(about ? 'HOME' : 'ABOUT')}}</h1></router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Header",
        props: {
            about: Boolean
        }
    }
</script>

<style scoped>
    .about h1 {
        color: #999999;
        z-index: 2;
    }

    .header {
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 10vh;
    }

    .icons {
        display: flex;
        margin-top: 2em;
        margin-left: 2em;
        max-height: 10vh;
    }

    .icon {
        position: relative;
        width: 1.7em;
    }

    .icons > .icon:not(:last-child) {
        margin-right: 1em;
    }

    .icons .icon > img {
        max-height: 20vh;
        width: 1.7em;
        position: absolute;
        cursor: pointer;
    }

    .icons .icon a > img {
        max-height: 20vh;
        width: 1.7em;
        position: absolute;
        cursor: pointer;
    }

    .about {
        display: flex;
        align-items: flex-start;
        position: relative;
        margin-top: 2em;
        margin-right: 2em;
        font-size: 18px;
        font-family: "Open Sans SemiBold", serif;
    }

    .about h1 {
        position: absolute;
        right: 0;
        cursor: pointer;
        transition: 0.8s;
    }

    .about h1:hover {
        filter: brightness(1.3);
    }

    #coloredIg {
        opacity: 0;
        transition: 0.8s;
    }

    #coloredIg:hover {
        opacity: 1;
    }

    #coloredTwitter {
        opacity: 0;
        transition: 0.4s;
    }

    #coloredTwitter:hover {
        opacity: 1;
    }

    #coloredGmail {
        opacity: 0;
        transition: 0.8s;
    }

    #coloredGmail:hover {
        opacity: 1;
    }

    #github {
        transition: 0.6s;
    }

    #github:hover {
        filter: brightness(1.3);
    }

    @media only screen and (min-width: 768px) {
        .about {
            font-size: 18px;
        }

        .icons > .icon:not(:last-child) {
            margin-right: 1.8em;
        }
    }

    @media only screen and (min-width: 1200px) {
        .about {
            font-size: 22px;
            margin-right: 3em;
        }

        .icons {
            margin-left: 3em;
        }
    }
</style>