<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@UniantJapan">
    <meta property="og:url" content="https://uniant.net/projects/disturbes/">
    <meta property="og:title" content="Disturbes - Uniant">
    <meta property="og:description" content="Disturbes 製品群のページです。">
    <meta property="og:image" content="https://uniant.net/uniantlogo.png">
    <title>Disturbes - Uniant</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../decoration.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        .title {
            font-size: 30px;
        }
        .titleunderline {
            width: 50%;
            color: #000000;
            box-shadow: 0px 2px 10px #777777;
        }
        .titleunderline2 {
            width: 30%;
            color: #222222;
            box-shadow: 0px 2px 10px #777777;
        }
        .catchcopy {
            font-size: 20px;
            margin-top: 10px;
        }
        .description {
            margin-top: 10px;
        }
        .attention {
            margin-top: 20px;
        }
        .attention .title, .download .title {
            font-size: 20px;
        }
        .usla, .download {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php include('../../header.php') ?>
    </div>
    <div class="content">
        <div class="title">
            <span>Disturbes 製品群</span><br>
            <hr class="titleunderline">
        </div>
        <span class="catchcopy">さよなら、迷惑ソフト。</span>
        <div class="description">
            <div class="about">
                <span>数々の手段でコンピューターに負荷を与える迷惑ソフトを、これ 1 つで簡単に削除します。</span>
            </div>
            <div class="attention">
                <span class="title">注意事項</span>
                <hr class="titleunderline2">
                <span>管理者権限で実行してください。</span><br>
            </div>
        </div>
        <div class="usla">
            <span>このソフトは、Uniant ソフトウェアライセンス契約に同意の上でご利用ください。</span><br>
            <a href="../../docs/usla.php" class="animebutton">Uniant ソフトウェアライセンス契約</a>
        </div>
        <div class="download">
            <span class="title">ダウンロード</span><br>
            <hr class="titleunderline2">
            <span>GitHub の公式リポジトリからご利用ください。</span><br>
            <a href="https://github.com/Uniant/Disturbes" class="animebutton" target="_blank" rel="noopener noreferrer">リポジトリはこちら</a>
        </div>
    </div>
    <div class="footer">
        <?php include('../../footer.php') ?>
    </div>
</body>
</html>