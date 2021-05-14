<?php
header("Permissions-Policy: interest-cohort=()");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン - Uniant News</title>
</head>
<body>
    <?php
    session_start();

    $error_message = "";

    if(isset($_POST["login"])) {

        if($_POST["user_name"] == "uniantnewsadmin" && $_POST["password"] == "m8d28e16l1996io") {
            $_SESSION["user_name"] = $_POST["user_name"];
            $login_success_url = "control.php";
            header("Location: {$login_success_url}");
            exit;
        }
    $error_message = "ID もしくはパスワードが違います。<br>Different ID or Password.";
    }
    ?>
    <?php
    if($error_message) {
        echo $error_message;
    }
    ?>
    <form action="index.php" method="POST">
        <p>ログインID：<input type="text" name="user_name"></p>
        <p>パスワード：<input type="password" name="password"></p>
        <input type="submit" name="login" value="ログイン">
    </form>
</body>
</html>