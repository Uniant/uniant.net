<?php
header("Permissions-Policy: interest-cohort=()");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>斎藤遥人 - Uniant</title>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@UniantJapan">
        <meta property="og:url" content="https://uniant.net/members/saito010513">
        <meta property="og:title" content="斎藤遥人 - Uniant">
        <meta property="og:description" content="Uniant に所属する会員の情報をご覧になれます。">
        <meta property="og:image" content="https://uniant.net/uniantlogoblack.png">
        <link href="../style.css" rel="stylesheet" type="text/css">
        <link href="./style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../decoration.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="header">
            <?php include('../header.php') ?>
        </div>
        <div class="membersname">
            <div class="membersnametext">
                <span class="name">斎藤 遥人</span><br>
                <span class="nameeng">Saito Haruto</span><br><br>
                <span class="mail">saito010513@uniant.net</span>
            </div>
        </div>
        <div class="content">
            <div class="about">
                <div class="position">
                    <span class="title2">役　職</span><br>
                    <div class="positioncontent">
                        <span class="exective">幹　部</span>
                        <span class="development">開発部</span>
                        <span class="publicrelations">広報部</span>
                    </div>
                </div>
                <div class="projects">
                    <span class="title2">プロジェクト</span><br>
                    <div class="projectscontent">
                        <span class="server">Server</span>
                        <span class="blog">Blog</span>
                        <div class="support">Support</div>
                    </div>
                </div>
                <div class="sns">
                    <span class="title2">ソーシャルアカウント</span><br>
                    <div class="snscontent">
                    <span class="twitter"><a href="https://twitter.com/NIKUZUKI_spoon" target="_blank" rel="noopener noreferrer"><img src="twitter.png" alt="Twitter:" class="socialicon">@NIKUZUKI_spoon</a></span>
                    <span class="github"><a href="https://github.com/nikuzuki29" target="_blank" rel="noopener noreferrer"><img src="github.png" alt="GitHub:" class="socialicon">@nikuzuki29</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <?php include('../footer.php') ?>
        </div>
        <script src="../script.js" type="text/javascript"></script>
    </body>
</html>