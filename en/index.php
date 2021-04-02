<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Uniant - Official Home Page</title>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Uniant">
        <meta property="og:url" content="https://uniant.net/en/">
        <meta property="og:title" content="Uniant - Official Home Page">
        <meta property="og:description" content="Here is the Uniant Official Page. You can see the projects information and latest information of Uniant.">
        <meta property="og:image" content="https://uniant.net/uniantlogoblack.png">
        <link href="../style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../decoration.css">
        <link rel="stylesheet" href="../swiper-bundle.min.css">
        <style>
            .swiper-slide-img {
                width: 100%;
            }
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
                width: 100%;
                height: 500px;
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
            .comingsoon img, .disturbes img, .support img {
                width: 200px;
                height: 200px;
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
                        <div class="swiper-slide"><img src="01.jpg">
                            <span style="font-size:20px;">Disturbes Product Family</span>
                            <span style="margin-top:50px;">Goodbye, Disturb Softwares.</span>
                            <a href="./projects/disturbes/" class="animebutton" style="top: 150px;">Download here</a>
                        </div>
                        <div class="swiper-slide"><img src="02.png">
                            <span style="font-size:20px;">Trownsoft became Uniant</span>
                            <span style="margin-top:50px;">New Environment, Unchange Thought.</span>
                            <a href="https://trownsoft-to-uniant.uniant.net/" class="animebutton" style="top: 150px;">More</a>
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
                        <a href="#" class="animebutton">Click here for the details</a>
                    </div>
                    <div class="support">
                        <img src="support.png">
                        <p class="projecttext">Uniant Support</p>
                        <span>Support about Uniant.</span>
                        <br>
                        <a href="#" class="animebutton">See now</a>
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
            <a href="./news/" class="textonimage animebutton" style="top:250px;">See more</a>
        </div>
        <div class="footer">
            <?php include('footer.php') ?>
        </div>
        <script src="../swiper-bundle.min.js"></script>
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