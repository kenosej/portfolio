<template>
    <div class="bio">
        <h1>ABOUT ME</h1>
        <p class="mobile">
            <span>I'm 18 and already found my passion.</span>
            <span>I've been working on a web for almost 2 years.</span>
            <span>Web development and helping people achieve</span>
            <span>their goals through digital services</span>
            <span>is one of my missions.</span>
            <span>Working every waking hour and making</span>
            <span>things better is what excites me.</span>
            <span>You need any of services that I offer?</span>
            <span>Understanding your "why" and improving</span>
            <span>your business is what you can find here.</span>
            <span>You can change the world and</span>
            <span>I can help you achieve it.</span>
            <span>Don't fall behind with cheaper alternative</span>
            <span>that won't meet your requirements.</span>
            <span>I stand behind the work that I do</span>
            <span>and nothing than quality will be served.</span>
            <span>Contact me for collaboration.</span>
            <span>We will make things better!</span>
        </p>
        <p class="tablet">
            <span>I'm 18 and already found my passion.</span>
            <span>I've been working on a web for almost 2 years.</span>
            <span>Web development and helping people achieve their goals</span>
            <span>through digital services is one of my missions.</span>
            <span>Working every waking hour and making things better is what excites me.</span>
            <span>You need any of services that I offer?</span>
            <span>Understanding your "why" and improving your business is what you can find here.</span>
            <span>You can change the world and I can help you achieve it.</span>
            <span>Don't fall behind with cheaper alternative that won't meet your requirements.</span>
            <span>I stand behind the work that I do and nothing than quality will be served.</span>
            <span>Contact me for collaboration.</span>
            <span>We will make things better!</span>
        </p>
        <p class="desktop">
            <span>I'm 18 and already found my passion.</span>
            <span>I've been working on a web for almost 2 years.</span>
            <span>Web development and helping people achieve their goals through digital services is one of my missions.</span>
            <span>Working every waking hour and making things better is what excites me.</span>
            <span>You need any of services that I offer?</span>
            <span>Understanding your "why" and improving your business is what you can find here.</span>
            <span>You can change the world and I can help you achieve it.</span>
            <span>Don't fall behind with cheaper alternative that won't meet your requirements.</span>
            <span>I stand behind the work that I do and nothing than quality will be served.</span>
            <span>Contact me for collaboration.</span>
            <span>We will make things better!</span>
        </p>
    </div>
</template>

<script>
    export default {
        name: "Bio"
    }
</script>

<style scoped>
    .tablet, .desktop {
        display: none;
    }

    .bio {
        text-align: center;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 623px;
        margin-top: 15px;
    }

    .bio:before {
        position: absolute;
        content: "";
        width: 80%;
        height: 1px;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
        background: #707070;
    }

    .bio h1 {
        font-family: "Open Sans Regular", serif;
        font-size: 18px;
        margin-bottom: 25px;
    }

    .bio p {
        line-height: 1.8;
    }

    .bio p span {
        display: block;
    }

    @media only screen and (min-width: 768px) {
        .mobile {
            display: none;
        }

        .tablet {
            display: block;
        }

        .bio {
            margin-top: 2%;
            min-height: 0;
        }

        .bio h1 {
            font-size: 22px;
            margin-bottom: 0;
        }

        .bio p {
            line-height: 2;
            margin-top: 2em;
        }

        .bio:before {
            width: 50%;
            margin: 0 auto 4em;
        }
    }

    @media only screen and (min-width: 1200px) {
        .tablet {
            display: none;
        }

        .desktop {
            display: block;
        }

        .bio {
            grid-area: bio;
            margin-bottom: 5vh;
        }

        .bio p {
            font-size: 18px;
        }

        .bio h1 {
            font-size: 28px;
        }

        .bio:before {
            width: 0;
            height: 0;
        }
    }

    @media only screen and (min-width: 768px) and (max-width: 1200px) and (orientation:landscape) {
        .bio:before {
            margin-bottom: 0.5em !important;
        }
    }
</style>