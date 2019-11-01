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
                <p><span id="sql">•</span> SQL</p>
                <p><span id="xd">•</span> ADOBE XD</p>
                <p><span id="linux">•</span> LINUX</p>
            </div>
        </div>
        <div class="right">
            <div class="projects">
                <h1>PROJECTS</h1>
                <p><span id="winitgram">•</span> winitgram.com</p>
                <p><span id="tech">•</span> keno-sej.tech</p>
            </div>
            <div class="learning">
                <h1>LEARNING</h1>
                <p><span id="node">•</span> NODE.JS</p>
                <p><span id="vue">•</span> VUE.JS</p>
                <p><span id="wp">•</span> WORDPRESS</p>
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
        /*border: 1px solid greenyellow;*/
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

    .learning p #vue {
        color: #41B883;
    }

    .learning p #wp {
        color: #3698C5;
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
</style>