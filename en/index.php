<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Uniant - Official Home Page</title>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Uniant">
        <meta property="og:url" content="https://uniant.net/en/">
        <meta property="og:title" content="Uniant - Official Home Page">
        <meta property="og:description" content="Here is the Uniant Official Page. You can see the projects information and latest information of Uniant.">
        <meta property="og:image" content="uniantlogo.png">
        <link href="../style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../decoration.css">
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
                            <span style="font-size:20px;">Disturbes Product Family</span>
                            <span style="margin-top:50px;">Goodbye, Disturb Softwares.</span>
                            <a href="./projects/disturbes/" class="animebutton" style="top: 150px;">Download here &gt;</a>
                        </div>
                        <div class="swiper-slide"><img src="02.png">
                            <span style="font-size:20px;">Trownsoft became Uniant</span>
                            <span style="margin-top:50px;">New Environment, Unchange Thought.</span>
                            <a href="https://trownsoft-to-uniant.uniant.net/" class="animebutton" style="top: 150px;">More &gt;</a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="project">
                <div class="title1">
                    <span class="title1left">Projects</span>
                </div>
                <div class="projecttexts">
                    <div class="disturbes">
                        <img src="disturbes.png">
                        <p class="projecttext">Disturbes Product Family</p>
                        <span>Goodbye, Disturb Softwares.</span>
                        <br>
                        <a href="#" class="animebutton">Click here for the details ></a>
                    </div>
                    <div class="support">
                        <img src="support.png">
                        <p class="projecttext">Uniant Support</p>
                        <span>Support about Uniant.</span>
                        <br>
                        <a href="#" class="animebutton">See now ></a>
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
                    <span class="title1left">News</span>
                </div>
            </div>
        </div>
        <div class="news"><img src="news.png">
            <span class="textonimage" style="font-size:30px;">Latest News</span>
            <span class="textonimage" style="top:175px;">Latest News and Group Information.</span>
            <a href="./news/" class="textonimage animebutton" style="top:250px;">See more &gt;</a>
        </div>
        <div class="footer">
            <?php include('footer.php') ?>
        </div>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
    </body>
</html>