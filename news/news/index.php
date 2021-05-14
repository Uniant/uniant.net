<?php
header("Permissions-Policy: interest-cohort=()");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $json = file_get_contents('./data.json');
        $json = json_decode($json, true);
        foreach($json as $key => $value) {
            echo "<h1>".$value["title"]."</h1>";
            echo "<p>投稿：".$value["date"]."</p>";
            echo "<p>".$value["content"]."</p>";
        }
        ?>
    </body>
</html>
