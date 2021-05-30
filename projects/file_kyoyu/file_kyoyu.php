<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@UniantJapan">
    <meta property="og:url" content="https://uniant.net/projects/file_kyoyu">
    <meta property="og:title" content="（wifi間での）ファイル共有 - Uniant">
    <meta property="og:description" content="（pcとスマホ間での）ファイル共有ソフト">
    <meta property="og:image" content="https://uniant.net/uniantlogoblack.png">
    <title>（wifi間での）ファイル共有ソフト - Uniant</title>
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
            <span>（wifi間で）ファイル共有ソフト</span><br>
            <hr class="titleunderline">
        </div>
        <span class="catchcopy">wifi間でのファイルを共有</span>
        <div class="description">
            <div class="about">
                <span>お使いのパソコンのファイルをスマホにwifiを経由してqrコードで共有するソフト</span>
            </div>
            <div class="attention">
                <span class="title">注意事項</span>
                <hr class="titleunderline2">
                <span>1.同じwifiにつないでなければファイルは共有されません。2.全世界でファイルが共有されるわけではありません。</span><br>
                <span>3.あとはソフト内に書かれている注意書きをよく読んでください。</span><br>
		<img src="https://raw.githubusercontent.com/Uniant/file_kyoyu/master/logo.png" style="width:500px;">
            </div>
        </div>
        <div class="usla">
            <span>このソフトは、Uniant ソフトウェアライセンス契約に同意の上でご利用ください。</span><br>
            <a href="../../docs/usla.php" class="animebutton">Uniant ソフトウェアライセンス契約</a>
        </div>
        <div class="download">
            <span class="title">ダウンロード</span><br>
            <hr class="titleunderline2">
            <span>最新版をダウンロード（推奨）</span><br>
            <a href="https://github.com/Uniant/file_kyoyu/releases/download/v1.0.0/file_kyoyu.zip" class="animebutton">ダウンロード</a><br>
            <span>GitHub の公式リポジトリからダウンロードする</span><br>
            <a href="https://github.com/Uniant/file_kyoyu" class="animebutton" target="_blank" rel="noopener noreferrer">リポジトリはこちら</a>
        </div>
    </div>
    <div class="footer">
        <?php include('../../footer.php') ?>
    </div>
    <script src="../../script.js" type="text/javascript"></script>
</body>
</html>
