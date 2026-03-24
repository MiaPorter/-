<?php

$link = mysqli_connect('MySQL-8.0', 'root', '', 'marinerHouses') or die('Could not connect to database');
    $result = mysqli_query($link, 
    "SELECT houses.id_house, decoration.decoration_houses, houses.title_house, houses.price_house, houses.area_houses, houses.number_rooms, houses.number_floors, houses.image_houses, houses.link_houses
    FROM houses
    LEFT JOIN decoration 
    ON houses.decoration_houses = decoration.id_decoration"
);

$result = mysqli_query($link, "SELECT * FROM houses");
$houses = [];
while ($row = mysqli_fetch_assoc($result)) {
    $houses[] = $row;
}

?>
<script>
    const houses = <?= json_encode($houses) ?>;
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARINER - просмотр домов на карте</title>
    <link rel="stylesheet" href="styleHousesInMap.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerRight">
        <a href="#" class="menu">МЕНЮ</a>
        <a href="housesParameters.php" class="parameters">ВЫБОР ПО ПАРАМЕТРАМ</a>
    </div>
</header>

<div class="mainOne">
    <div class="image"></div>
    <div class="houseItem">
        <a href="links/houseOne.php"><img src="images/selectHouseOne.png" class="one" data-id="0"></a>
        <a href="#"><img src="images/selectHouseTwo.png" class="two" data-id="1"></a>
        <a href="#"><img src="images/selectHouseThree.png" class="three" data-id="2"></a>
        <a href="#"><img src="images/selectHouseFour.png" class="four" data-id="3"></a>
        <a href="#"><img src="images/selectHouseFive.png" class="five" data-id="4"></a>
        <a href="#"><img src="images/selectHouseSix.png" class="six" data-id="5"></a>
        <a href="#"><img src="images/selectHouseSeven.png" class="seven" data-id="6"></a>
        <a href="#"><img src="images/selectHouseEight.png" class="eight" data-id="7"></a>
        <a href="#"><img src="images/selectHouseNine.png" class="nine" data-id="8"></a>
        <div class="infoHouses">
        <div class="infoOne" id="infoBox">
            <div class="infoOneTop top">
                <h2 id="houseId"></h2>
                <h3 id="houseTitle"></h3>
            </div>
            <div class="infoOneBottom bottom">
                <p id="houseFloors"></p>
                <p id="houseRooms"></p>
                <p id="houseArea"></p>
            </div>
        </div>
    </div>
    </div>
</div>


<footer>
    <div class="footerTop" id="footer">
        <div class="footerTopLeft">
            <a href="#" class="logoFooter"><img src="images/логотип.png" alt="" width="290px"></a>
            <div class="messengers">
                <a href="#"><img src="images/Telegram.png" alt="" width="60px"></a>
                <a href="#"><img src="images/VK Circled.png" alt="" width="60px"></a>
                <a href="#"><img src="images/Odnoklassniki Circled.png" alt="" width="60px"></a>
            </div>
        </div>
        <div class="footerTopMiddle">
            <h3>КОНТАКТЫ</h3>
            <p class="pOne">НОМЕР ТЕЛЕФОНА:</p>
            <p class="click" onclick="copyAndFeedback(this, '+79062362014')">+7 906 236 20 14</p>
            <p>ПОЧТА:</p>
            <p class="click" onclick="copyAndFeedback(this, 'marinerhouses@gmail.com')">MARINERHOUSES@GMAIL.COM</p>
            <p class="click" onclick="copyAndFeedback(this, 'serdusik@gmail.com')">SERDUSIK@GMAIL.COM</p>
        </div>
        <div class="footerTopRight">
            <h3>ОБРАТНАЯ СВЯЗЬ</h3>
            <form method="POST">
                <input type="email" id="email" name="email" placeholder="введите свою почту" required>
                <button type="submit"><img src="images/right.png" alt=""></button>
            </form>
        </div>
    </div>
    <div class="footerBottom">
        <div class="footerBottomLeft">
            <p>© sergienko daria все права защищены</p>
        </div>
        <div class="footerBottomRight">
            <a href="">вернуться к началу</a>
            <a href="#mainOne"><img src="images/Up.png" alt=""></a>
        </div>
    </div>
</footer>

<script src="javaHousesInMap.js"></script>
    
</body>
</html>