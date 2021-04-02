<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Uniant - Official Home Page</title>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@UniantJapan">
        <meta property="og:url" content="https://uniant.net/">
        <meta property="og:title" content="Uniant - Official Home Page">
        <meta property="og:description" content="Uniant 公式ホームページです。 Uniant の製品情報および最新の情報をご覧になれます。">
        <meta property="og:image" content="https://uniant.net/uniantlogoblack.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="decoration.css" type="text/css">
        <link rel="stylesheet" href="swiper-bundle.min.css" type="text/css">
        <style>
            .swiper-container {
                height: 400px;
            }
            .swiper-slide {
                position: relative;
            }
            .swiper-slide span, .swiper-slide a {
                position: absolute;
                top: 75px;
                left: 5%;
                text-shadow: 0px 0px 10px #000000;
            }
            .title {
                font-size: 50px;
                letter-spacing: 15px;
            }
            .titleunder {
                font-size: 20px;
                margin-left: 30px;
            }
            .news {
                position: relative;
                overflow: hidden;
            }
            .news img {
                object-fit: cover;
                z-index: -2;
            }
            .news > .textonimage {
                left: 10%;
            }
            .project {
                margin-top: 50px;
            }
            .projecttext {
                font-size: 20px;
            }
            .latest {
                margin-top: 50px;
            }
            .projecttexts {
                display: flex;
                justify-content: space-between;
            }
            .title1 {
                display: inline-block;
                margin-bottom: 10px;
            }
            .title1left {
                font-size: 30px;
            }
            .title1right {
                font-size: 20px;
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <?php include('header.php') ?>
        </div>
        <div class="content">
            <div class="sample01">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="01.png" class="swiper-slide-img" alt="" width="100%" height="auto">
                            <span style="font-size:20px;">Disturbes 製品群</span>
                            <span style="margin-top:50px;">さよなら、迷惑ソフト。</span>
                            <a href="./projects/disturbes/" class="animebutton" style="top: 150px;">ダウンロードはこちら</a>
                        </div>
                        <div class="swiper-slide">
                            <img src="02.jpg" class="swiper-slide-img" alt="" width="100%" height="auto">
                            <span style="font-size:20px;">Trownsoft は Uniant になりました</span>
                            <span style="margin-top:50px;">新しい環境、変わらない信念。</span>
                            <a href="https://trownsoft-to-uniant.uniant.net/" class="animebutton" style="top: 150px;">詳しく</a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="project">
                <div class="title1">
                    <span class="title1left">プロジェクト</span><span class="title1right">|  Projects</span>
                </div>
                <div class="projecttexts">
                    <div class="disturbes">
                        <img src="disturbes.jpg" alt="disturbes" width="200px" height="200px">
                        <p class="projecttext">Disturbes 製品群</p>
                        <span>さよなら、迷惑ソフト。</span>
                        <br>
                        <a href="#" class="animebutton">詳細はこちら</a>
                    </div>
                    <div class="support">
                        <img src="support.png" alt="support" width="200px" height="200px">
                        <p class="projecttext">Uniant Support</p>
                        <span>Uniant に関するお問い合わせ</span>
                        <br>
                        <a href="#" class="animebutton">今すぐ見る</a>
                    </div>
                    <div class="comingsoon">
                        <img src="comingsoon1.jpg" alt="coming soon..." width="200px" height="200px">
                        <p class="projecttext">Coming Soon...</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="latest">
                <div class="title1">
                    <span class="title1left">ニュース</span><span class="title1right">|  News</span>
                </div>
            </div>
        </div>
        <div class="news"><img src="news.jpg" alt="" width="100%" height="500px">
            <span class="textonimage" style="font-size:30px;">Latest News</span>
            <span class="textonimage" style="top:175px;">最新のニュースとグループの情報</span>
            <a href="./news/" class="textonimage animebutton" style="top:250px;">もっと見る</a>
        </div>
        <div class="footer">
            <?php include('footer.php') ?>
        </div>
        <script src="swiper-bundle.min.js"></script>
        <script>
            var mySwiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        </script>
    </body>
</html>