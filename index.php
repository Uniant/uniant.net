<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Uniant - Official Home Page</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Uniant">
    <meta property="og:url" content="https://uniant-new-homepage.akatsuka0426.repl.co">
    <meta property="og:title" content="Uniant - Official Home Page">
    <meta property="og:description" content="Uniant 公式ホームページです。 Uniant の製品情報および最新の情報をご覧になれます。">
    <meta property="og:image" content="uniantlogo.png">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="decoration.css">
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
            <a href="/" class="animebutton" style="top: 150px;">ダウンロードはこちら &gt;</a>
            </div>
            <div class="swiper-slide"><img src="02.png">
            <span style="font-size:20px;">Trownsoft は Uniant になりました</span>
            <span style="margin-top:50px;">新しい環境、変わらない信念。</span>
            <a href="/" class="animebutton" style="top: 150px;">詳しく &gt;</a>
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
          <div class="unp">
            <img src="unp.png">
            <p class="projecttext">Uniant Necessary Protection</p>
            <span>コンピューターの強力な礎石。</span>
            <br>
            <a href="#" class="animebutton">今すぐダウンロード ></a>
          </div>
          <div class="disturbes">
            <img src="disturbes.png">
            <p class="projecttext">Disturbes 製品群</p>
            <span>さよなら、迷惑ソフト。</span>
            <br>
            <a href="#" class="animebutton">詳細はこちら ></a>
          </div>
        </div>
      </div>
      <div class="latest">
        <div class="title1">
          <span class="title1left">ニュース</span><span class="title1right">|  News</span>
        </div>
        <div class="news"><img src="news.png">
        <span class="textonimage" style="font-size:30px;">Latest News</span>
        <span class="textonimage" style="top:175px;">最新のニュースとグループの情報</span>
        <a href="/" class="textonimage animebutton" style="top:250px;">もっと見る &gt;</a>
        </div>
      </div>
    </div>
    <div class="alertie">
      <div class="ieunder">
        <span class="ietitle">本サイトは Internet Explorer に対応しておりません。</span><br>
        <span>Microsoft Edge, Google Chrome 等最新のブラウザーをご利用ください。</span>
        <a class="ieclose">閉じる</a>
      </div>
    </div>
    <div class="footer">
      <?php include('footer.php') ?>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>