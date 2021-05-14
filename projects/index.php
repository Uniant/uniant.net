<?php
header("Permissions-Policy: interest-cohort=()");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@UniantJapan">
    <meta property="og:url" content="https://uniant.net/projects/">
    <meta property="og:title" content="プロジェクト - Uniant">
    <meta property="og:description" content="Uniant が提供するプロジェクトの一覧です。">
    <meta property="og:image" content="https://uniant.net/uniantlogoblack.png">
    <title>プロジェクト - Uniant</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../decoration.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <?php include('../header.php') ?>
    </div>
    <div class="content">
        <div class="project">
            <div class="backimage">
                <img src="../01.png" alt="">
            </div>
            <div class="textonimage">
                <span class="titleproject">Disturbes 製品群</span><br>
                <span class="mintitleproject">さよなら、迷惑ソフト。</span><br>
                <a href="./disturbes/" class="animebutton">詳しく見る</a>
            </div>
        </div>
        <!--<div class="project">
            <div class="backimage">
                <img src="dark.png" alt="">
            </div>
            <div class="textonimage">
                <span class="titleproject white">Delete File</span><br>
                <span class="mintitleproject white">超効率、超高速のファイル削除。</span><br>
                <a href="./deletefile/" class="animebutton white">詳しく見る</a>
            </div>
        </div> -->
    </div>
    <div class="footer">
        <?php include('../footer.php') ?>
    </div>
    <script src="../script.js" type="text/javascript"></script>
</body>
</html>