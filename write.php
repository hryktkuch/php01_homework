<?php
$date = $_GET["date"];
$time = $_GET["time"];
$temp = $_GET["temp"];
$weather = $_GET["weather"];
$data = $date . "," . $time . "," . $temp . "," . $weather . "\n";
file_put_contents("data.txt", $data, FILE_APPEND);
?>
記録ができました。<br>
<a href="read.php">記録を見る</a><br>
<a href="index.php">ホームに戻る</a>