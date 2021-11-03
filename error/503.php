<!DOCTYPE html>
<html lang="ja">
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Noto+Sans+JP:wght@400&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <meta name="robots" content="noindex">
    <link rel="icon" href="/favicon.png">
	<title>503 Service Unavailable - Uniant</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">
	<link href="https://uniant.net/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="https://uniant.net/assets/css/page/error.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php include('../header.php') ?>
        <main>
            <div class="top">
                <img src="../assets/image/error/maintenance.svg" alt="">
                <h1>The service is unavailable.</h1>
            </div>
            <div class="messages">
                <span>アクセスが集中しているため、ページを表示できません。</span>
            </div>
            <div class="button">
                <a href="/">トップページに戻る</a>
            </div>
        </main>
		<div class="footer">
			<?php include('../footer.php') ?>
		</div>
    <script src="../assets/js/script.js" type="text/javascript"></script>
  </body>
</html>
