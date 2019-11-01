<template>
    <div class="footer">
        <div class="pic">
            <img src="../../assets/profile.jpg" alt="profilePhoto">
            <span>Quality isn't expensive, it's priceless!</span>
        </div>
        <div class="arrow">
            <img src="../../assets/arrow.png" alt="arrow">
        </div>
    </div>
</template>

<script>
    export default {
        name: "Footer"
    }
</script>

<style scoped>
    .footer {
        display: block;
    }

    .pic {
        margin-left: 0;
        margin-bottom: 0;
        position: relative;
        display: flex;
        height: 100%;
    }

    .pic:not(img) {
        align-items: center;
    }

    .pic img {
        max-height: calc(19.7vh - 3em);
        margin-left: 0.5em;
        border: 1px solid #6582BC;
        border-radius: 50%;
    }

    .pic span {
        margin-left: 0.7em;
        position: relative;
        padding-bottom: 4px;
        font-size: 13px;
    }

    .pic span, .pic img {
        margin-top: 1.7em;
    }

    .pic span:before {
        position: absolute;
        content: '';
        height: 1px;
        background: #707070;
        bottom: 0;
        left: 0;
        right: 0;
        width: 95%;
        margin: 0 auto;
    }

    .arrow {
        position: absolute;
        right: 2em;
        bottom: 7.5em;
    }

    .arrow img {
        height: 50px;
        transition: 0.4s;
        cursor: pointer;
    }

    .arrow img:hover {
        filter: brightness(1.3);
    }

    @media only screen and (min-width: 768px) {
        .footer {
            display: grid;
            grid-template-columns: 3fr 1fr;
        }

        .pic {
            display: flex;
            margin-left: 1em;
            margin-bottom: 0;
        }

        .pic span {
            margin-left: 1em;
            font-size: 18px;
        }

        .pic img {
            max-height: calc(19.7vh - 3em);
            margin-left: 0;
        }

        .pic span, .pic img {
            margin-top: 0.5em;
        }

        .arrow {
            display: flex;
            align-items: center;
            position: static;
            justify-content: flex-end;
            margin-right: 2em;
        }

        .arrow img {
            height: 80px;
        }
    }

    @media only screen and (min-width: 1200px) {
        .pic {
            margin-left: 1em;
            margin-bottom: 1em;
        }

        .pic span {
            font-size: 20px;
        }

        .pic img {
            max-height: calc(19.7vh - 2em);
        }

        .pic span, .pic img {
            margin-top: 0;
        }

        .arrow {
            margin-right: 3em;
        }

        .arrow img {
            height: 105px;
        }
    }
</style>