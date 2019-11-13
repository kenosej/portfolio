<template>
    <div class="contact">
        <h1>CONTACT</h1>
        <div class="mail">
            <div class="icon">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=kenosej.business@gmail.com"
                   target="_blank" rel="noopener noreferrer" @click="gmailServicesClick">
                    <img id="coloredGmail" src="../../assets/colored_gmail.png" alt="gmail">
                </a>
                <img id="classicGmail" src="../../assets/gmail.png" alt="gmail">
                <span>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=kenosej.business@gmail.com"
                       target="_blank" rel="noopener noreferrer" @click="gmailServicesClick">kenosej.business@gmail.com</a>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Contact",
        data() {
            return {
                timeSpent: Math.floor(+new Date() / 1000) - this.$time
            }
        },
        methods: {
            gmailServicesClick() {
                fetch(`https://keno-sej.tech/data/updateInfo.php?id=${this.$id}&timeSpent=${this.timeSpent}&gmailServicesClick=1`)
            }
        }
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
    }

    .icon span a {
        transition: 0.4s;
    }

    .icon span:hover a {
        color: #d44638;
    }

    .icon span a {
        text-decoration: none;
        color: #D9D8D8;
    }

    .icon img {
        height: 16px;
        cursor: pointer;
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

    @media only screen and (min-width: 1200px) {
        .contact {
            grid-area: contact;
            padding-top: 10px;
        }

        .contact:before, .contact:after {
            width: 0;
            height: 0;
        }

        .contact h1 {
            font-size: 32px;
        }

        .contact span {
            font-size: 27px;
        }

        .icon img {
            height: 27px;
        }
    }
</style>