<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARINER - панорамный вид из окон</title>
    <link rel="stylesheet" href="stylePanorama.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerRight">
        <a href="index.php">назад</a>
    </div>
</header>

<div class="mainPanorama" id="panorama">
    <button class="day-btn active" data-image="images/панорамаЛендинг.png">день</button>
    <button class="night-btn" data-image="images/панорамаЛендингНочь.png">ночь</button>
</div>

<script src="javaPanorama.js"></script>
    
</body>
</html>