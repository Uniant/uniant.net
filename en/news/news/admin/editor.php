<?php
$title = $_POST["title"];
$content = $_POST["content"];
$date = date ("Y 年 m 月 d 日");

$json = file_get_contents('../data.json');
$json = json_decode($json, true);
array_push($json, array("title"=>$title, "date"=>$date, "content"=>$content));
$json = json_encode($json);
file_put_contents('../data.json', $json);
header("Location: ../");
?>