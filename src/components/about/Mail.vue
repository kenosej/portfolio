<template>
    <div class="mail">
        <h1>CONTACT</h1>
        <div class="mailDiv">
            <a id="anchorImg" href="mailto:kenosej.business@gmail.com"
               rel="noopener noreferrer">
                <img id="coloredMail" src="../../assets/colored_gmail.png" alt="gmail">
            </a>
            <img id="classicMail" src="../../assets/gmail.png" alt="gmail">
            <a href="mailto:kenosej.business@gmail.com"
               rel="noopener noreferrer">
                <span>kenosej.business@gmail.com</span>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Mail",
        data() {
            return {
                timeSpent: Math.floor(+new Date() / 1000) - this.$time
            }
        }
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

    .mailDiv a {
        text-decoration: none;
    }

    .mailDiv span {
        margin-left: 0.5em;
        color: #D9D8D8;
        cursor: pointer;
        transition: 0.4s;
    }

    .mailDiv span:hover {
        color: #d44638;
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
        cursor: pointer;
    }

    .mail h1 {
        font-family: "Open Sans Regular", serif;
        font-size: 18px;
    }

    #anchorImg {
        padding-bottom: 20px;
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

    @media screen and (min-width: 768px) and (max-width: 1200px) and (orientation: landscape) {
        .mail {
            margin-bottom: 0 !important;
        }
    }
</style>
