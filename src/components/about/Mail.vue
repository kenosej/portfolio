<template>
    <div class="mail">
        <h1>CONTACT</h1>
        <div class="mailDiv">
            <img id="coloredMail" src="../../assets/colored_gmail.png" alt="gmail">
            <img id="classicMail" src="../../assets/gmail.png" alt="gmail">
            <span>kenosej.business@gmail.com</span>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Mail"
    }
</script>

<style scoped>
    .mail {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .mailDiv {
        display: flex;
        position: relative;
        align-items: center;
        margin-top: 1em;
    }

    .mailDiv span {
        margin-left: 0.5em;
        color: #D9D8D8;
    }

    #coloredMail {
        position: absolute;
        opacity: 0;
        transition: 0.6s;
    }

    #coloredMail:hover {
        opacity: 1;
    }

    .mail img {
        height: 20px;
    }

    .mail h1 {
        font-family: "Open Sans Regular", serif;
        font-size: 18px;
    }

    @media only screen and (min-width: 768px) {
        .mail {
            margin-bottom: 4em;
            grid-row: 2 / 3;
        }

        .mailDiv {
            margin-top: 2.2em;
        }

        .mail h1 {
            font-size: 22px;
        }
    }

    @media only screen and (min-width: 1200px) {
        .mail {
            grid-area: mail;
            margin-bottom: 3em;
        }

        .mail h1 {
            font-size: 28px;
        }
    }
</style>