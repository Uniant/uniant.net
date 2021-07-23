<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bridge - Uniant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../decoration.css">
    <link rel="stylesheet" href="./style.css">
</head>
  <body>
    <div class="header">
    <header>
          <div class="headerimg"><a href="/"><img src="../../uniantwhite.png" alt="Uniant" width="130px" height="30px"></a></div>
          <nav class="responsivelist" id="listresponsive">
              <ul>
                  <li><a href="https://uniant.net/projects/" class="list">プロジェクト</a></li>
                  <li><a href="https://uniant.net/news/" class="list">ニュース</a></li>
                  <li><a href="https://blog.uniant.net/" class="list">ブログ</a></li>
                  <li><a href="https://support.uniant.net/" class="list">お問い合わせ</a></li>
              </ul>
          </nav>
          <div class="hamburgermenu" id="ham">
              <div class="hamburger">
                  <span class="hamburgerline line1" id="hamline1"></span>
                  <span class="hamburgerline line2" id="hamline2"></span>
                  <span class="hamburgerline line3" id="hamline3"></span>
              </div>
          </div>
          <div class="headermenu">
              <nav>
                  <ul>
                      <div>
                          <li><a href="https://uniant.net/projects/">プロジェクト</a></li>
                          <li><a href="https://uniant.net/news/">ニュース</a></li>
                          <li><a href="https://blog.uniant.net/">ブログ</a></li>
                          <li><a href="https://support.uniant.net/">お問い合わせ</a></li>
                      </div>
                  </ul>
              </nav>
          </div>
      </header>
    </div>
<div class="top">
    <div class="topleft">
      <span class="title">コマンドはストレスフリーで。</span><br>
      <span>Linux のコマンドを Windows でも。<br>コマンドをストレスフリーで実行しましょう。</span><br>
      <a href="#" class="animebutton">ダウンロード</a>
    </div>
    <div class="topright">
      <div class="terminal">
        <span class="command linux">$ </span>
        <span class="command linux" id="typist"></span><br>
        <span class="command windows cannotview" id="commandwindows">C:\WINDOWS\system32> shutdown /s</span><br>
        <div class="command result"><span class="cannotview" id="commandresult">Windows will shut down in 60 minutes.</span></div>
      </div>
    </div>
  </div>
  <div class="introduction">
        <div class="howtouse">
            <img src="./introduction.png" alt="">
            <div class="textright">
                <span class="title">コマンドを入力するだけ。</span><br><br>
                <span style="position:relative;top:10px;">変換したいコマンドを入力して実行ボタンを押すだけで、コマンドが変換、実行されます。<br>Windows のコマンドはそのまま、Linux のコマンドは変換されて実行されます。</span>
            </div>
        </div>
    </div>
<div class="content">
    <span class="titlebig">今すぐストレスフリーに。</span>
    <div class="download">
        <a href="bridge.zip" class="downloadbutton" download>
            <img src="./download.svg">
            <span>Download for Windows 10</span>
        </a>
    </div>
</div>

<div class="footer">
    <?php include('../../footer.php') ?>
</div>
    <script src="https://unpkg.com/ityped@1.0.3"></script>
    <script src="https://uniant.net/script.js"></script>
    <script src="script.js"></script>
  </body>
</html>