<template>
    <div class="contact">
        <h1>CONTACT</h1>
        <div class="mail">
            <div class="icon">
                <img id="coloredGmail" src="../../assets/colored_gmail.png" alt="gmail">
                <img id="classicGmail" src="../../assets/gmail.png" alt="gmail">
                <span>kenankenosej@gmail.com</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Contact"
    }
</script>

<style scoped>
    .contact {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        margin-top: 0.1em;
    }

    .contact:before {
        position: absolute;
        content: "";
        width: 65%;
        height: 1px;
        bottom: 0;
        left: 0;
        right: 0;
        background: #707070;
        margin: 0 auto;
    }

    .mail {
        margin: 15px 0;
    }

    .icon {
        position: relative;
        display: flex;
    }

    .icon span {
        padding-left: 10px;
        color: #D9D8D8;
    }

    .icon img {
        height: 16px;
    }

    #coloredGmail {
        position: absolute;
        opacity: 0;
        transition: 0.6s;
    }

    #coloredGmail:hover {
        opacity: 1;
    }

    @media only screen and (min-width: 768px) {
        .mail {
            margin: 15px 0;
        }

        .contact h1 {
            margin-bottom: 25px;
        }

        .contact:before {
            width: 35%;
        }

        .contact:after {
            position: absolute;
            content: "";
            width: 25%;
            height: 1px;
            top: 0;
            left: 0;
            right: 0;
            background: #707070;
            margin: 0 auto;
        }
    }
</style>