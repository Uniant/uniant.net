<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>管理パネル - Uniant News</title>
    </head>
    <body>
        <?php
        session_start();

        if(!isset($_SESSION["user_name"])) {
            $no_login_url = "index.php";
            header("Location: {$no_login_url}");
            exit;
        }
        ?>
    </body>
</html>