<?php

    $link = mysqli_connect('MySQL-8.0', 'root', '', 'marinerHouses') or die('Could not connect to database');
    $result = mysqli_query($link, 
    "SELECT decoration.decoration_houses, houses.title_house, houses.price_house, houses.area_houses, houses.number_rooms, houses.number_floors, houses.image_houses, houses.link_houses
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

    $conditions = [];
    if (!empty($_GET['rooms'])) {
        $rooms = (int)$_GET['rooms'];
        $conditions[] = "houses.number_rooms = $rooms";
    }
    if (!empty($_GET['floors'])) {
        $floors = (int)$_GET['floors'];
        $conditions[] = "houses.number_floors = $floors";
    }
    if (!empty($_GET['decoration'])) {
        $decoration = (int)$_GET['decoration'];
        $conditions[] = "houses.decoration_houses = $decoration";
    }
    if (!empty($_GET['price_from']) && !empty($_GET['price_to'])) {
        $from = (int)$_GET['price_from'];
        $to = (int)$_GET['price_to'];
        $conditions[] = "houses.price_house BETWEEN $from AND $to";
    }
    if (!empty($_GET['area_from']) && !empty($_GET['area_to'])) {
        $from = (int)$_GET['area_from'];
        $to = (int)$_GET['area_to'];
        $conditions[] = "houses.area_houses BETWEEN $from AND $to";
    }
    $where = "";
    if (!empty($conditions)) {
        $where = "WHERE " . implode(" AND ", $conditions);
    }
    $result = mysqli_query($link,
    "SELECT decoration.decoration_houses, houses.title_house, houses.price_house, houses.area_houses, houses.number_rooms, houses.number_floors, houses.image_houses, houses.link_houses
    FROM houses
    LEFT JOIN decoration 
    ON houses.decoration_houses = decoration.id_decoration
    $where
    ");

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

<div class="filters">
    <div class="filtersLeft">
        <div class="filterRooms">
            <p>комнаты</p>
            <form method="GET">
                <div class="btnsRooms">
                    <a href="?rooms=2&floors=<?=$_GET['floors'] ?? ''?>&decoration=<?=$_GET['decoration'] ?? ''?>">2</a>
                    <a href="?rooms=3&floors=<?=$_GET['floors'] ?? ''?>&decoration=<?=$_GET['decoration'] ?? ''?>">3</a>
                    <a href="?rooms=4&floors=<?=$_GET['floors'] ?? ''?>&decoration=<?=$_GET['decoration'] ?? ''?>">4</a>
                    <a href="housesParameters.php">Все</a>
                </div>
            </form>
        </div>
        <div class="filterFloors">
            <p>этажи</p>
            <form method="GET">
                <div class="btnsFloors">
                    <a href="?floors=1&rooms=<?=$_GET['rooms'] ?? ''?>&decoration=<?=$_GET['decoration'] ?? ''?>">1</a>
                    <a href="?floors=2&rooms=<?=$_GET['rooms'] ?? ''?>&decoration=<?=$_GET['decoration'] ?? ''?>">2</a>
                    <a href="housesParameters.php">Все</a>
                </div>
            </form>
        </div>
        <div class="filterDecoration">
            <p>отделка</p>
            <form method="GET">
                <div class="btnsDecoration">
                    <a href="?decoration=1&rooms=<?=$_GET['rooms'] ?? ''?>&floors=<?=$_GET['floors'] ?? ''?>">дизайнерская отделка</a>
                    <a href="?decoration=2&rooms=<?=$_GET['rooms'] ?? ''?>&floors=<?=$_GET['floors'] ?? ''?>">без отделки</a>
                    <a href="housesParameters.php">Все</a>
                </div>
            </form>
        </div>
    </div>
    <div class="filtersRight">
        <div class="filtersCount">
            <p>СТОИМОСТЬ, ₽</p>
            <form method="GET" id="priceForm">
                <div class="priceInputs">
                    <div>
                        <span>ОТ</span>
                        <input type="text" id="minPriceDisplay" readonly>
                    </div>
                    <div>
                        <span>ДО</span>
                        <input type="text" id="maxPriceDisplay" readonly>
                    </div>
                </div>
                <div class="range-slider">
                    <div class="slider-track"></div>
                    <input type="range" id="minRange" name="price_from" value="<?= $_GET['price_from'] ?? 32567213559 ?>" min="32567213559" max="481394023435" step="1000000000">
                    <input type="range" id="maxRange" name="price_to" value="<?= $_GET['price_to'] ?? 481394023435 ?>" min="32567213559" max="481394023435" step="1000000000">
                </div>
                <button type="submit">Показать</button>
            </form>
        </div>
        <div class="filtersArea">
            <p>ПЛОЩАДЬ, М²</p>
            <form method="GET" id="areaForm">
                <div class="areaInputs">
                    <div>
                        <span>ОТ</span>
                        <input type="text" id="minAreaDisplay" readonly>
                    </div>
                    <div>
                        <span>ДО</span>
                        <input type="text" id="maxAreaDisplay" readonly>
                    </div>
                </div>
                <div class="range-slider">
                    <div class="slider-track-area"></div>
                    <input type="range" id="minAreaRange" name="area_from" value="<?= $_GET['area_from'] ?? 128 ?>" min="128" max="259" step="1">
                    <input type="range" id="maxAreaRange" name="area_to" value="<?= $_GET['area_to'] ?? 259 ?>" min="128" max="259" step="1">
                </div>
                <button type="submit">Показать</button>
            </form>
            <a href="housesParameters.php" class="sbrosFilters">Сбросить фильтры</a>
        </div>
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
                    <div class="descTop">
                        <div class="params">
                            <p>
                                <?php 
                                    $floors = $row['number_floors'];
                                    echo $floors . ' ' . floorsWord($floors);
                                ?>
                            </p>
                            <p><?php echo $row['number_rooms'] . ' комнаты'?></p>
                            <p><?php echo $row['area_houses'] . ' М²'?></p>
                        </div>
                        <div class="arrow">
                            <a href="<?php echo "links/" . $row['link_houses']; ?>"><img src="images/infoArrow.png" alt="" width="70px"></a>
                        </div>
                    </div>
                    <p class="decoration"><?php echo $row['decoration_houses']?></p>
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

<script src="javaParameters.js"></script>
    
</body>
</html>