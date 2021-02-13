<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Search Results - Uniant</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.0.js"></script>
    </head>
    <body>
        <div class="header">
            <?php include('../header.php') ?>
        </div>
        <div class="content">
            <span class="titlesearchresult" id="titleresult">Search Results</span>
            <ul id="ul"></ul>
        </div>
        <div class="footer">
            <?php include('../footer.php') ?>
        </div>
        <script>
            let value = new URLSearchParams(window.location.search);
            value = value.get('search');
            const urlLists = [
                "/data/xml/",
                "/site-speed/asynchronous/",
                "/site-speed/for_while/",
                "/site-speed/async-2/"
                ];
            document.getElementById('titleresult').innerText = "Search Results for " + value;
            document.title = "Search Results for " + value + " - Uniant";
            $.each(urlLists, function(i) {
                $.ajax({
                    url　: urlLists[i],
                    dataType : 'php',
                    success　: function(data){
                        if( $(data).find("#article").text().indexOf(v) !== -1) {
                        $('<li><a href="' + urlLists[i] + '">' +$(data).find("h1").text() + '</a></li>').appendTo('ul');
                        }
                    },
                    error: function(data){
                    console.log("error")
                    }
                });
            });
        </script>
    </body>
</html>