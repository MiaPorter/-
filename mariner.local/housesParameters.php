<?php

    $link = mysqli_connect('MySQL-8.0', 'root', '', 'marinerHouses') or die('Could not connect to database');
    $result = mysqli_query($link, 
    "SELECT decoration.decoration_houses, houses.title_house, houses.price_house, houses.area_houses, houses.number_rooms, houses.number_floors, houses.image_houses
    FROM houses
    LEFT JOIN decoration 
    ON houses.decoration_houses = decoration.id_decoration"
);

    function floorsWord($number) {
        $number = abs($number) % 100;
        $last = $number % 10;
        if ($last > 1 && $last < 5) {
            return 'этажа';
        } 
        if ($last == 1) {
            return 'этаж';
        }
        return 'этажей';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARINER - подбор домов по параметрам</title>
    <link rel="stylesheet" href="styleHousesParameters.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerRight">
        <a href="#">МЕНЮ</a>
    </div>
</header>

<div class="mainOne">
    <div class="mainOneLeft">
        <img src="images/arrows.png" alt="">
    </div>
    <div class="mainOneRight">
        <h2>ВЫБОР ПО <span>ПАРАМЕТРАМ</span></h2>
        <p>ДЛЯ КОМФОРТНОГО ВЫБОРА ДОМА ВАШЕЙ МЕЧТЫ</p>
    </div>
</div>

<div class="mainTwo">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="block">
            <div class="top">
                <img src="<?php echo "images/" . $row['image_houses']; ?>">
            </div>
            <div class="bottom">
                <h2><?php echo number_format($row['price_house'], 0, '', ' ') . ' ₽'; ?></h2>
                <div class="houseDescription">
                    <p><?php 
                        $floors = $row['number_floors'];
                        echo $floors . ' ' . floorsWord($floors);
                    ?></p>
                    <p><?php echo $row['number_rooms'] . ' ' . 'комнаты'?></p>
                    <p><?php echo $row['area_houses'] . ' ' . 'М²'?></p>
                    <p><?php echo $row['decoration_houses']?></p>
                </div>
            </div>
        </div>
    <?php } ?>
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
    
</body>
</html>