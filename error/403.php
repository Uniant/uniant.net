<?php
header("Permissions-Policy: interest-cohort=()");
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>403 Forbidden - Uniant</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link href="../style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../decoration.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <?php include('../header.php') ?>
        </div>
        <div class="content">
            <div style="text-align:center;padding-top:50px;">
                <span style="font-size:30px;">このサイトにはアクセスできません。</span><br>
                <span style="font-size:20px;">We are sorry, you cannot see your request.</span>
            </div>
        </div>
        <div class="footer">
            <?php include('../footer.php') ?>
        </div>
        <script src="../script.js" type="text/javascript"></script>
    </body>
</html>