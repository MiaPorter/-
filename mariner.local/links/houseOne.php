<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>МАРИНЕР - дом 1</title>
    <link rel="stylesheet" href="../styles/styleHouseOne.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="../images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerRight">
        <a href="#" class="menu">МЕНЮ</a>
        <a href="#" class="back" onclick="history.back(); return false;">назад</a>
    </div>
</header>

<div class="mainOne">
    <div class="mainOneLeft">
        <img src="../images/houseOne.png" alt="" width="500px">
    </div>
    <div class="mainOneRight">
        <div class="mainOneRightTop">
            <h2>32 567 213 559 ₽</h2>
        </div>
        <div class="mainOneRightMiddle">
            <h2>2 этаж</h2>
            <h2>отделка дизайнерская</h2>
            <h2>2 комнат</h2>
            <h2>192 М²</h2>
        </div>
        <div class="mainOneRightBottom">
            <a href="#" class="parameters">СДЕЛАТЬ ЗВОНОК</a>
        </div>
    </div>
</div>

<footer>
    <div class="footerTop" id="footer">
        <div class="footerTopLeft">
            <a href="#" class="logoFooter"><img src="../images/логотип.png" alt="" width="290px"></a>
            <div class="messengers">
                <a href="#"><img src="../images/Telegram.png" alt="" width="60px"></a>
                <a href="#"><img src="../images/VK Circled.png" alt="" width="60px"></a>
                <a href="#"><img src="../images/Odnoklassniki Circled.png" alt="" width="60px"></a>
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
                <button type="submit"><img src="../images/right.png" alt=""></button>
            </form>
        </div>
    </div>
    <div class="footerBottom">
        <div class="footerBottomLeft">
            <p>© sergienko daria все права защищены</p>
        </div>
        <div class="footerBottomRight">
            <a href="">вернуться к началу</a>
            <a href="#mainOne"><img src="../images/Up.png" alt=""></a>
        </div>
    </div>
</footer>
    
</body>
</html>