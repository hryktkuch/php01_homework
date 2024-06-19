<!DOCTYPE html>
<html lang="en" style="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>百葉箱</title>
</head>
<body style="">
    <div style="display:flex; display:contents;">
        <form action="write.php" method="get">
            日付 <input type="date" name="date"><br>
            時間 <input type="time" name="time"><br>
            気温 <input type="range" id="temp" name="temp" min="0" max="40" step="1"> <span id="t">20度</span><br>
            天気 
            <input type="radio" name="weather" value="sun">晴
            <input type="radio" name="weather" value="cloud">曇
            <input type="radio" name="weather" value="rain">雨
            <input type="radio" name="weather" value="snow">雪<br>
            <input type="submit" value="送信">
        </form>
        <br>
        <a href="read.php">記録を見る</a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $("#temp").on("input change", function() {
                console.log($("#temp").val());
                $("#t").text($("#temp").val() + "度");
            })
        </script>
    </div>
</body>
</html>