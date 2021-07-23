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
    <link rel="stylesheet" href="https://uniant.net/style.css">
    <link rel="stylesheet" href="https://uniant.net/decoration.css">
    <link rel="stylesheet" href="../style.css">
</head>
  <body>
    <div class="header">
        <header>
          <div class="headerimg"><a href="/"><img src="https://uniant.net/uniantwhite.png" alt="Uniant" width="130px" height="30px"></a></div>
          <nav class="responsivelist" id="listresponsive">
              <ul>
                  <li><a href="/projects/" class="list">プロジェクト</a></li>
                  <li><a href="/news/" class="list">ニュース</a></li>
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
<div class="top" style="margin:100px 10%;text-align:center;">
    <span class="bigtitle">Bridge をご利用くださりありがとうございます。</span>
</div>
  <div class="introduction">
        <div class="howtouse">
            <img src="../introduction.png" alt="">
            <div class="textright">
                <span class="title">コマンドを入力するだけ。</span><br><br>
                <span style="position:relative;top:10px;">変換したいコマンドを入力して実行ボタンを押すだけで、コマンドが変換、実行されます。<br>Windows のコマンドはそのまま、Linux のコマンドは変換されて実行されます。</span>
            </div>
        </div>
    </div>
    <div class="lisence">
        <span class="title">ライセンス</span><br>
        <span>ご利用になるには、Uniant ソフトウェアライセンス契約に合意してください。</span><br>
        <div style="margin-top:50px;height:80px;"><a href="" class="downloadbutton">ライセンスを見る</a></div>
    </div>
</div>
<div class="support">
    <span class="title">何かお困りですか？</span><br>
    <span>サポートが必要な際は、Uniant サポートに気軽にご連絡ください。</span><br>
    <div class="buttonall">
        <a href="https://support.uniant.net/" class="button" target="_blank" rel="noopener noreferrer">サポートサイトを見る</a><br style="display:none;"><br style="display:none;">
        <a href="https://twitter.com/UniantSupport" class="button" target="_blank" rel="noopener noreferrer" style="margin-left:30px;">Twitter でサポートに連絡する</a>
    </div>
</div>
<div class="history">
    <span class="title">更新履歴</span>
    <div class="historyblock">
        <div class="date">
            <span>July 23th, 2021</span>
        </div>
        <div class="version">
            <span>Alpha 1.0 を公開しました。</span>
        </div>
    </div>
</div>
<div class="footer">
    <?php include('../../../footer.php') ?>
</div>
    <script src="https://unpkg.com/ityped@1.0.3"></script>
    <script src="https://uniant.net/script.js"></script>
    <script src="script.js"></script>
  </body>
</html>