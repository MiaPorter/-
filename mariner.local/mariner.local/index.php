<?php
    // $admin_ip = "127.0.0.1";

    // if ($_SERVER['REMOTE_ADDR'] === $admin_ip) {
    //     header("Location: admin.php");
    //     exit;
    // }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARINER - купить участок будущего</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerMiddle">
        <a href="#">О ПРОЕКТЕ</a>
        <a href="#">АРХИТЕКТУРА</a>
        <a href="#">ВИДЫ</a>
        <a href="#">ИНФРАСТРУКТУРА</a>
        <a href="#">КОНТАКТЫ</a>
    </div>
    <div class="headerRight">
        <a href="#">МЕНЮ</a>
    </div>
</header>

<div class="mainOne">
    <div class="image"></div>
    <div class="textMainOne">
        <h1><span>новая жизнь</span> там,</h1>
        <h1 class="textTwo">где новый дом</h1>
    </div>
    <button id="chooseApartment">выбрать квартиру</button>
    <div class="textLeftBottom">
        <img src="images/Location.png" alt="" height="30px">
        <p>12 минут до олимпа</p>
    </div>
    <img src="images/Down.png" alt="" class="imgArrow">
</div>

<div class="mainTwo">
    <div class="mainTwoFirstBlock">
        <div class="mainTwoFirstBlockLeft">
            <div class="textOne">
                <h2>01</h2>
                <h2>2024</h2>
                <p>год основания</p>
            </div>
        </div>
        <div class="mainTwoFirstBlockRight">
            <div class="imgOne">
                <img src="images/счастливаяСемья.png" alt="" width="220px">
                <img src="images/картинкаКафешек.png" alt="" width="500px">
            </div>
        </div>
    </div>
    <div class="mainTwoSecondBlock">
        <div class="mainTwoSecondBlockLeft">
            
        </div>
        <div class="mainTwoSecondBlockRight">
            <div class="textTwo">
                <h2>02</h2>
                <h2>9</h2>
                <p>участков с домами</p>
            </div>
        </div>
    </div>
    <div class="mainTwoThirdBlock">
        <div class="mainTwoThirdBlockLeft"></div>
        <div class="mainTwoThirdBlockRight"></div>
    </div>
</div>

<script src="java.js"></script>
    
</body>
</html>