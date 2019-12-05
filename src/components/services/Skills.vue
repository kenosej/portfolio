<template>
    <div class="skills">
        <div class="left">
            <div class="arrow">
                <router-link to="/"><img src="../../assets/reverse_arrow.png" alt="arrow"></router-link>
            </div>
            <div class="languages">
                <h1>SKILLS</h1>
                <p><span id="php">•</span> PHP</p>
                <p><span id="jquery">•</span> JQUERY</p>
                <p><span id="css">•</span> CSS3</p>
                <p><span id="javascript">•</span> JAVASCRIPT</p>
                <p><span id="vue">•</span> VUE.JS</p>
                <p><span id="sql">•</span> SQL</p>
                <p><span id="xd">•</span> ADOBE XD</p>
                <p><span id="linux">•</span> LINUX</p>
            </div>
        </div>
        <div class="right">
            <div class="projects">
                <h1>PROJECTS</h1>
                <p><span id="winitgram">•</span> <a href="https://winitgram.com" target="_blank">winitgram.com</a></p>
                <p><span id="tech">•</span> keno-sej.tech</p>
            </div>
            <div class="learning">
                <h1>LEARNING</h1>
                <p><span id="node">•</span> NODE.JS</p>
                <p><span id="wp">•</span> WORDPRESS</p>
                <p><span id="laravel">•</span> LARAVEL</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Skills"
    }
</script>

<style scoped>
    .skills {
        display: grid;
        grid-template-columns: 1fr 1fr;
        position: relative;
    }

    .left {
        display: grid;
        grid-template-rows: 16% 84%;
        position: relative;
    }

    .right {
        /*border: 1px solid deepskyblue;*/
        display: grid;
        grid-template-rows: 37% 63%;
        position: relative;
    }

    .arrow {
        margin-left: 2em;
    }

    .arrow img {
        height: 50px;
        transition: 0.4s;
    }

    .arrow img:hover {
        filter: brightness(1.3);
    }

    .languages {
        margin: 0 auto;
    }

    .languages h1 {
        padding: 15px 0 20px 10px;
    }

    .languages p {
        padding: 7px 0;
        font-size: 16px;
        color: #BBB9B9;
        line-height: 1.6;
    }

    .languages p #php {
        color: #6582BC;
    }

    .languages p #jquery {
        color: #0867AC;
    }

    .languages p #css {
        color: #379AD6;
    }

    .languages p #javascript {
        color: #F0DB4F;
    }

    .languages p #vue {
        color: #41B883;
    }

    .languages p #sql {
        color: #F8981D;
    }

    .languages p #xd {
        color: #FF2BC2;
    }

    .languages p #linux {
        color: #9CCD2A;
    }

    .projects {
        position: relative;
        margin: 0.5em auto 0;
    }

    .projects a {
        text-decoration: none;
        color: #BBB9B9;
    }

    .projects h1 {
        padding: 15px 0 20px 10px;
    }

    .projects p {
        font-family: "Open Sans SemiBold", serif;
        padding: 7px 0;
        font-size: 16px;
        color: #BBB9B9;
        line-height: 1.6;
    }

    .projects p #winitgram {
        color: #FAEB04;
    }

    .projects p #tech {
        color: #8F82FC;
    }

    .learning {
        margin: 0.5em auto 0;
    }

    .learning h1 {
        padding: 15px 0 20px 10px;
    }

    .learning p {
        padding: 7px 0;
        font-size: 16px;
        color: #BBB9B9;
        line-height: 1.6;
    }

    .learning p #node {
        color: #83CD29;
    }

    .learning p #wp {
        color: #3698C5;
    }

    .learning p #laravel {
        color: #ff6358;
    }

    .skills:before {
        position: absolute;
        content: '';
        background: #707070;
        width: 50%;
        height: 1px;
        bottom: 0;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    .projects:before {
        position: absolute;
        content: "";
        width: 70%;
        height: 1px;
        bottom: 0;
        left: 0;
        right: 0;
        background: #707070;
        margin: 0 auto;
    }
    .left:before {
        position: absolute;
        content: "";
        width: 1px;
        height: 80%;
        margin: auto 0;
        bottom: 0;
        top: 0;
        right:0;
        background: #707070;
    }
    .right:before {
        position: absolute;
        content: "";
        width: 70%;
        height: 1px;
        left: 0;
        right: 0;
        top: 0;
        margin: 0 auto;
        background: #707070;
    }

    @media only screen and (min-width: 768px) {
        .skills {
            grid-row: 3 / 4;
        }

        .right {
            grid-template-rows: 50% 50%;
        }

        .projects {
            padding: 2.5em 0;
            margin-bottom: 10px;
        }

        .skills:before {
            margin: 0 auto 3px;
        }

        .right:before {
            width: 0;
            height: 0;
        }
    }

    @media only screen and (min-width: 1200px) {
        .skills {
            grid-area: skills;
        }

        .left {
            grid-template-rows: 80% 20%;
        }

        .arrow {
            grid-row: 2/3;
            margin-left: 3em;
            margin-top: 1em;
        }

        .arrow img {
            height: 105px;
        }

        .languages {
            margin: auto 1em;
        }

        .right {
            position: fixed;
            right: 1em;
            bottom: 10vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 90vh;
        }

        .projects {
            position: relative;
            margin: 0;
            padding: 0;
        }

        .learning {
            margin: 2.2em 0 0;
        }

        .skills:before, .projects:before,
        .left:before, .right:before {
            width: 0;
            height: 0;
        }
    }
</style>