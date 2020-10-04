<!DOCTYPE html>
<html>
<head>
    <title>Ablaze</title>
    <link rel="stylesheet" type="text/css" href="/material/slide/slide.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
</head>
<body>
    <?php
        $header = file_get_contents("header.html");
        echo "$header";
    ?>



    <article>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="../material/slide/Ablaze.png" style="width: 100%; height: auto" />
                    <div class="slide-hello">
                        <h1>Hello world</h1>
                        <p>
                            はじめまして、Ablaze代表の#NEKOと申します。
                            このチームは、様々なソフトウェアやサービスを提供...
                        </p>
                        <a href="column/team/hello/">
                            続きを見る
                            <i class="fas fa-chevron-right" style="margin-left: 10px"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="../material/slide/nekoLinux.png" style="width: 100%; height: auto" />
                    <div class="slide-neko">
                        <img src="../material/slide/nekolinux-logo.png" />
                        <p>
                            あなたと共に成長するLinux
                        </p>
                        <a href="products/nekoLinux/">
                            試す
                            <i class="fas fa-chevron-right" style="margin-left: 10px"></i>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="../material/slide/neloLinux.png" style="width: 100%; height: auto" />
                    <div class="slide-nelo">
                        <img src="../material/slide/nelolinux-logo.png" />
                        <p>
                            スリム・スマートをいつまでも
                        </p>
                        <a>
                            試す
                            <i class="fas fa-chevron-right" style="margin-left: 10px"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </article>

    <footer class="float-end">
        フッター
    </footer>
        <!--スライドショー-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });
    </script>
</body>
</html>