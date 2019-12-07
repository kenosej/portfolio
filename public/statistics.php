<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <title>Statistics</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
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

        #app {
            width: 100%;
            background-color: #333333;
            color: #999999;
            font-family: "Open Sans", serif;
            overflow-y: hidden;
            position: absolute;
            overflow-x: hidden;
            min-height: 100vh;
        }

        .statistics {
            font-size: 18px;
            line-height: 1.6;
            margin-left: 5px;
            margin-top: 10vh;
        }

        .statistics span {
            display: block;
            margin-bottom: 10px;
        }

        @media only screen and (min-width: 768px) {
            .statistics {
                display: grid;
                grid-template-columns: 1fr 1fr;
                font-size: 16px;
                margin-left: 8px;
            }

            .left, .right {
                display: flex;
                flex-direction: column;
            }
        }

        @media only screen and (min-width: 1200px) {
            .stats {
                height: 90vh;
                overflow: hidden;
            }

            .statistics span {
                display: inline-block;
                margin-bottom: 0;
                margin-left: 3px;
            }

            .left, .right {
                justify-content: center;
                align-items: center;
            }
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['elonMusk']) && $_GET['elonMusk'] === 'isLegend') {
    ?>
    <div id="app">
        <div class="statistics">
            <div class="left">
                <p>Times opened with chrome: <span>{{totalChrome}}</span></p>
                <p>Times opened with firefox: <span>{{totalFirefox}}</span></p>
                <p>Times opened with opera: <span>{{totalOpera}}</span></p>
                <p>Times opened with safari: <span>{{totalSafari}}</span></p>
                <p>Times opened with phone: <span>{{totalPhone}}</span></p>
                <p>Times not opened with phone: <span>{{totalNotPhone}}</span></p>
                <p>Lang en-GB: <span>{{totalLandEnGB}}</span></p>
                <p>Average history: <span>{{avgHistory}}</span></p>
                <p>Total big screens: <span>{{totalBigScreens}}</span></p>
                <p>Total middle screens: <span>{{totalMiddleScreens}}</span></p>
                <p>Total small screens: <span>{{totalSmallScreens}}</span></p>
                <p>Time between 00:00-03:00: <span>{{totalFrom0To3}}</span></p>
                <p>Time between 03:00-06:00: <span>{{totalFrom3To6}}</span></p>
                <p>Time between 06:00-09:00: <span>{{totalFrom6To9}}</span></p>
                <p>Time between 09:00-12:00: <span>{{totalFrom9To12}}</span></p>
                <p>Time between 12:00-15:00: <span>{{totalFrom12To15}}</span></p>
                <p>Time between 15:00-18:00: <span>{{totalFrom15To18}}</span></p>
                <p>Time between 18:00-21:00: <span>{{totalFrom18To21}}</span></p>
                <p>Time between 21:00-00:00: <span>{{totalFrom21To24}}</span></p>
                <p>Instagram total pressed: <span>{{totalInstagram}}</span></p>
                <p>Average instagram pressed per user: <span>{{avgInstagram}}</span></p>
                <p>Github total pressed: <span>{{totalGithub}}</span></p>
                <p>Average Github pressed per user: <span>{{avgGithub}}</span></p>
                <p>Twitter total pressed: <span>{{totalTwitter}}</span></p>
                <p>Average Twitter pressed per user: <span>{{avgTwitter}}</span></p>
            </div>
            <div class="right">
                <p>Gmail total pressed: <span>{{totalGmail}}</span></p>
                <p>Average Gmail pressed per user: <span>{{avgGmail}}</span></p>
                <p>About total pressed: <span>{{totalAbout}}</span></p>
                <p>Average About pressed per user: <span>{{avgAbout}}</span></p>
                <p>Image total pressed: <span>{{totalImage}}</span></p>
                <p>Average image pressed per user: <span>{{avgImage}}</span></p>
                <p>Right total pressed: <span>{{totalRight}}</span></p>
                <p>Average right pressed per user: <span>{{avgRight}}</span></p>
                <p>Gmail from about total pressed: <span>{{totalGmailFromAbout}}</span></p>
                <p>Average Gmail from about per user: <span>{{avgGmailFromAbout}}</span></p>
                <p>Back to home total: <span>{{totalToHome}}</span></p>
                <p>Average Back to home pressed per user: <span>{{avgToHome}}</span></p>
                <p>Gmail from services total pressed: <span>{{totalGmailFromServices}}</span></p>
                <p>Average Gmail from services pressed per user: <span>{{avgGmailFromServices}}</span></p>
                <p>Total time spent: <span>{{totalTimeSpent}}s ({{totalTimeSpentFormatted}})</span></p>
                <p>Average time spent per user: <span>{{avgTimeSpent}}</span></p>
                <p>Views last 1h: <span>{{viewsLast1h}}</span></p>
                <p>Views last 3h: <span>{{viewsLast3h}}</span></p>
                <p>Views last 24h: <span>{{viewsLast24h}}</span></p>
                <p>Views last 3 days: <span>{{viewsLast3d}}</span></p>
                <p>Views last 7 days: <span>{{viewsLast7d}}</span></p>
                <p>Views last 10 days: <span>{{viewsLast10d}}</span></p>
                <p>Views last 15 days: <span>{{viewsLast15d}}</span></p>
                <p>Views last 30 days: <span>{{viewsLast30d}}</span></p>
                <p>Views total: <span>{{totalViews}}</span></p>
            </div>
        </div>
    </div>
    <script>
        let app = new Vue({
            el: '#app',
            data: {
                inputPsw: '',
                displayStats: false,
                totalChrome: 0,
                totalFirefox: 0,
                totalOpera: 0,
                totalSafari: 0,
                totalPhone: 0,
                totalNotPhone: 0,
                totalLandEnGB: 0,
                avgHistory: 0,
                totalBigScreens: 0,
                totalMiddleScreens: 0,
                totalSmallScreens: 0,
                totalFrom0To3: 0,
                totalFrom3To6: 0,
                totalFrom6To9: 0,
                totalFrom9To12: 0,
                totalFrom12To15: 0,
                totalFrom15To18: 0,
                totalFrom18To21: 0,
                totalFrom21To24: 0,
                totalInstagram: 0,
                totalGithub: 0,
                totalTwitter: 0,
                totalGmail: 0,
                totalAbout: 0,
                totalImage: 0,
                totalRight: 0,
                totalGmailFromAbout: 0,
                totalToHome: 0,
                totalGmailFromServices: 0,
                totalTimeSpent: 0,
                viewsLast1h: 0,
                viewsLast3h: 0,
                viewsLast24h: 0,
                viewsLast3d: 0,
                viewsLast7d: 0,
                viewsLast10d: 0,
                viewsLast15d: 0,
                viewsLast30d: 0,
                totalViews: 0,
            },
            computed: {
                avgInstagram() {
                    return this.roundAverage(this.totalInstagram);
                },
                avgGithub() {
                    return this.roundAverage(this.totalGithub);
                },
                avgTwitter() {
                    return this.roundAverage(this.totalTwitter);
                },
                avgGmail() {
                    return this.roundAverage(this.totalGmail);
                },
                avgAbout() {
                    return this.roundAverage(this.totalAbout);
                },
                avgImage() {
                    return this.roundAverage(this.totalImage);
                },
                avgRight() {
                    return this.roundAverage(this.totalRight);
                },
                avgGmailFromAbout() {
                    return this.roundAverage(this.totalGmailFromAbout);
                },
                avgGmailFromServices() {
                    return this.roundAverage(this.totalGmailFromServices);
                },
                avgToHome() {
                    return this.roundAverage(this.totalToHome);
                },
                avgTimeSpent() {
                    return this.roundAverage(this.totalTimeSpent);
                },
                totalTimeSpentFormatted() {
                    if (this.roundNum(this.totalTimeSpent / 60) < 60) {
                        return this.roundNum(this.totalTimeSpent / 60) + "m";
                    } else {
                        let hours = 0,
                            minutes = 0;

                        for (let i = 3600; i < this.totalTimeSpent; i += 3600) {
                            hours += 1;
                            minutes = this.totalTimeSpent - i;
                        }

                        return hours + "h and " + this.roundNum(minutes / 60) + "m";
                    }
                }
            },
            methods: {
                roundNum(value) {
                    return Math.round(value * 10) / 10;
                },
                roundAverage(value) {
                    return Math.round((value / this.totalViews) * 10) / 10;
                },
                getJson() {
                    return JSON.parse('<?php echo file_get_contents('../userData.json') ?>');
                },
                fillData() {
                    this.totalViews += this.getJson().views.length;

                    this.getJson().views.forEach(e => {
                        if (e.info.browser === "chrome") {
                            this.totalChrome++;
                        }
                        if (e.info.browser === "firefox") {
                            this.totalFirefox++;
                        }
                        if (e.info.browser === "opera") {
                            this.totalOpera++;
                        }
                        if (e.info.browser === "safari") {
                            this.totalSafari++;
                        }
                        if (e.info.phone) {
                            this.totalPhone++;
                        }
                        if (!e.info.phone) {
                            this.totalNotPhone++;
                        }
                        if (e.info.language === "en-US") {
                            this.totalLandEnGB++;
                        }
                        if (e.info.screenSize > 1200) {
                            this.totalBigScreens++;
                        }
                        if (e.info.screenSize > 768 &&
                            e.info.screenSize < 1200) {
                            this.totalMiddleScreens++;
                        }
                        if (e.info.screenSize < 768) {
                            this.totalSmallScreens++;
                        }
                        let date = new Date(e.info.time * 1000);
                        let hours = date.getHours() - 1;

                        if (hours > 0 && hours <= 3) {
                            this.totalFrom0To3++;
                        }
                        if (hours > 3 && hours <= 6) {
                            this.totalFrom3To6++;
                        }
                        if (hours > 6 && hours <= 9) {
                            this.totalFrom6To9++;
                        }
                        if (hours > 9 && hours <= 12) {
                            this.totalFrom9To12++;
                        }
                        if (hours > 12 && hours <= 15) {
                            this.totalFrom12To15++;
                        }
                        if (hours > 15 && hours <= 18) {
                            this.totalFrom15To18++;
                        }
                        if (hours > 18 && hours <= 21) {
                            this.totalFrom18To21++;
                        }
                        if (hours > 21 && hours <= 24) {
                            this.totalFrom21To24++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 3600) {
                            this.viewsLast1h++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 10800) {
                            this.viewsLast3h++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 86400) {
                            this.viewsLast24h++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 259200) {
                            this.viewsLast3d++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 604800) {
                            this.viewsLast7d++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 864000) {
                            this.viewsLast10d++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 1296000) {
                            this.viewsLast15d++;
                        }

                        if ((Math.floor(+new Date() / 1000) - e.info.time) < 2592000) {
                            this.viewsLast30d++;
                        }

                        if (e.info.instagram !== undefined)
                            this.totalInstagram += e.info.instagram;
                        if (e.info.github !== undefined)
                            this.totalGithub += e.info.github;
                        if (e.info.twitter !== undefined)
                            this.totalTwitter += e.info.twitter;
                        if (e.info.gmail !== undefined)
                            this.totalGmail += e.info.gmail;
                        if (e.info.about !== undefined)
                            this.totalAbout += e.info.about;
                        if (e.info.image !== undefined)
                            this.totalImage += e.info.image;
                        if (e.info.right !== undefined)
                            this.totalRight += e.info.right;
                        if (e.info.gmailAbout !== undefined)
                            this.totalGmailFromAbout += e.info.gmailAbout;
                        if (e.info.toHome !== undefined)
                            this.totalToHome += e.info.toHome;
                        if (e.info.gmailServices !== undefined)
                            this.totalGmailFromServices += e.info.gmailServices;
                        if (e.info.timeSpent !== undefined)
                            this.totalTimeSpent += e.info.timeSpent;
                        if (e.info.history !== undefined) {
                            this.avgHistory += e.info.history;
                        }
                    });

                    this.avgHistory = this.roundAverage(this.avgHistory);
                }
            },
            created() {
                this.fillData();
            }
        })
    </script>
    <?php
}
?>
</body>
</html>