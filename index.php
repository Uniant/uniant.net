<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Uniant - Official Home Page</title>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Uniant">
        <meta property="og:url" content="https://uniant.net/">
        <meta property="og:title" content="Uniant - Official Home Page">
        <meta property="og:description" content="Uniant 公式ホームページです。 Uniant の製品情報および最新の情報をご覧になれます。">
        <meta property="og:image" content="uniantlogo.png">
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="decoration.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.js"></script>
    </head>
    <body>
        <div class="header">
            <?php include('header.php') ?>
        </div>
        <div class="content">
            <div class="sample01">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="01.jpg">
                            <span style="font-size:20px;">Disturbes 製品群</span>
                            <span style="margin-top:50px;">さよなら、迷惑ソフト。</span>
                            <a href="./projects/disturbes/" class="animebutton" style="top: 150px;">ダウンロードはこちら &gt;</a>
                        </div>
                        <div class="swiper-slide"><img src="02.png">
                            <span style="font-size:20px;">Trownsoft は Uniant になりました</span>
                            <span style="margin-top:50px;">新しい環境、変わらない信念。</span>
                            <a href="https://trownsoft-to-uniant.uniant.net/" class="animebutton" style="top: 150px;">詳しく &gt;</a>
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
                        <img src="disturbes.png">
                        <p class="projecttext">Disturbes 製品群</p>
                        <span>さよなら、迷惑ソフト。</span>
                        <br>
                        <a href="#" class="animebutton">詳細はこちら ></a>
                    </div>
                    <div class="support">
                        <img src="support.png">
                        <p class="projecttext">Uniant Support</p>
                        <span>Uniant に関するお問い合わせ</span>
                        <br>
                        <a href="#" class="animebutton">今すぐ見る ></a>
                    </div>
                    <div class="comingsoon">
                        <img src="comingsoon1.png">
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
        <div class="news"><img src="news.png">
            <span class="textonimage" style="font-size:30px;">Latest News</span>
            <span class="textonimage" style="top:175px;">最新のニュースとグループの情報</span>
            <a href="./news/" class="textonimage animebutton" style="top:250px;">もっと見る &gt;</a>
        </div>
        <div class="footer">
            <?php include('footer.php') ?>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>