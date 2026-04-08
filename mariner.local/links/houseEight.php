<?php

    $link = mysqli_connect('MySQL-8.0', 'root', '', 'marinerHouses') 
    or die('Ошибка подключения к БД');

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email_user'])) {
        if (!$link->connect_error) {
            $name = $link->real_escape_string($_POST['name_user']);
            $phone = $link->real_escape_string($_POST['phone_number']);
            $email = $link->real_escape_string($_POST['email_user']);

            $query = "INSERT INTO buyHouse (name_user, phone_number, email_user, created_at) 
            VALUES ('$name', '$phone', '$email', NOW())
            ";

            if ($link->query($query)) {
                echo "<script>alert('Спасибо! Заявка отправлена 🚀');</script>";
            } else {
                echo "<script>alert('Ошибка при отправке');</script>";
            }
            $link->close();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        if (!$link->connect_error) {
            $email = $link->real_escape_string($_POST['email']);
            $link->query("INSERT INTO feedback (email) VALUES ('$email')");
            $link->close();
            
            echo "<script>console.log('Email сохранен: " . addslashes($_POST['email']) . "');</script>";
            echo "<script>alert('Спасибо! Ваш email отправлен нам. В течение суток мы с вами свяжемся!');</script>";
        }
    }

?>

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
        <img src="../images/houseEight.png" alt="" width="700px">
    </div>
    <div class="mainOneRight">
        <div class="mainOneRightTop">
            <h2>315 854 284 845 ₽</h2>
        </div>
        <div class="mainOneRightMiddle">
            <h2><span>2</span> этаж</h2>
            <h2><span>без</span> отделки</h2>
            <h2><span>3</span> комнат</h2>
            <h2><span>236</span> М²</h2>    
        </div>
        <div class="mainOneRightBottom">
            <a href="#" class="parameters" id="parameters">ЗАКАЗАТЬ ЗВОНОК</a>
        </div>
    </div>
</div>

<div class="mainSeven">
    <div class="mainSevenTop">
        <h2>технологии будущего уже внутри <span>вашего дома</span></h2>
        <p>Марс ещё никогда не был таким комфортным для жизни</p>
    </div>
    <div class="mainSevenBottom">
        <div class="mainSevenBottomTop">
            <div class="mainSevenBottomTopCard mainSevenBottomTopCardLarge">
                <div class="mainSevenBottomTopImage" style="background-image: url(../images/технологии1.png);"></div>
                <div class="mainSevenBottomTopText">
                    <div class="mainSevenBottomTopTextTop">
                        <p>Система чистой питьевой воды</p>
                    </div>
                    <div class="mainSevenBottomTopTextBottom">
                        <div class="mainSevenBottomTopTextBottomFull">
                            <p>ВОДА ПРОИЗВОДИТСЯ ЧЕРЕЗ НЕСКОЛЬКО УРОВНЕЙ ОЧИСТКИ: ОТ ГРУБОЙ МЕХАНИКИ И НАНОФИЛЬТОРОВ ДО МИНЕРАЛИЗАТОРОВ И БИОМЕМБРАН, КОТОРЫЕ УДАЛЯЮТ ДАЖЕ МОЛЕКУЛЯРНЫЕ ПРИМЕСИ.</p>
                            <p>ПО ЧИСТОТЕ ТАКАЯ ВОДА ПРЕВОСХОДИТ СТАНДАРТЫ ПИТЬЕВОЙ ВОДЫ НА ЗЕМЛЕ: ОНА НЕ СОДЕРЖИТ БАКТЕРИЙ, МИКРОЧАСТИЦ, ТЯЖЕЛЫХ МЕТАЛЛОВ ИЛИ СЛЕДОВ ХИМИИ — ТОЛЬКО ИДЕАЛЬНО СБАЛАНСИРОВАННЫЕ МИНЕРАЛЫ, НЕОБХОДИМЫЕ ДЛЯ РАБОТЫ ОРГАНИЗМА В УСЛОВИЯХ НИЗКОЙ ГРАВИТАЦИИ.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mainSevenBottomTopCard mainSevenBottomTopCardLarge">
                <div class="mainSevenBottomTopImage" style="background-image: url(../images/технологии2.png);"></div>
                <div class="mainSevenBottomTopText">
                    <div class="mainSevenBottomTopTextTop">
                        <p>Климат-контроль зон</p>
                    </div>
                    <div class="mainSevenBottomTopTextBottom">
                        <div class="mainSevenBottomTopTextBottomFull">
                            <p>КАЖДАЯ ЗОНА – СПАЛЬНЯ, ГОСТИНАЯ, КУХНЯ, РАБОЧИЙ МОДУЛЬ – ИМЕЕТ СВОЙ АВТОНОМНЫЙ МИКРОКЛИМАТ.</p>
                            <p>СИСТЕМА ПОСТОЯННО АНАЛИЗИРУЕТ ТЕМПЕРАТУРУ, ВЛАЖНОСТЬ, ЯРКОСТЬ И СО2, СОЗДАВАЯ В КАЖДОЙ КОМНАТЕ ОПТИМАЛЬНЫЕ ПАРАМЕТРЫ – НЕЗАВИСИМО ОТ ТОГО, КАКАЯ СРЕДА ЗА ОКНОМ. МАРСИАНСКАЯ НОЧЬ, ПЫЛЕВАЯ БУРЯ ИЛИ СОЛНЕЧНЫЙ ЛИК.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainSevenBottomBottom">
            <div class="mainSevenBottomTopCard mainSevenBottomTopCardSmall">
                <div class="mainSevenBottomTopImage" style="background-image: url(../images/технологии3.png);"></div>
                <div class="mainSevenBottomTopText">
                    <div class="mainSevenBottomTopTextTop">
                        <p>Герметичные стеклопанели-фотопанели</p>
                    </div>
                    <div class="mainSevenBottomTopTextBottom">
                        <div class="mainSevenBottomTopTextBottomFull">
                            <p>КАЖДАЯ ПАНЕЛЬ СОСТОИТ ИЗ МНОГОСЛОЙНОЙ СТРУКТУРЫ: СВЕРХПРОЧНЫЙ ПРОЗРАЧНЫЙ КОМПОЗИТ УДЕРЖИВАЕТ ВНУТРЕННЕЕ ДАВЛЕНИЕ, А ВСТРОЕННЫЕ ФОТОПЛАСТИНЫ СОБИРАЮТ СОЛНЕЧНУЮ ЭНЕРГИЮ ДАЖЕ ПРИ РАССЕЯННОМ СВЕТЕ МАРСА.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainSevenBottomTopCard mainSevenBottomTopCardSmall">
                <div class="mainSevenBottomTopImage" style="background-image: url(../images/технологии4.png);"></div>
                <div class="mainSevenBottomTopText">
                    <div class="mainSevenBottomTopTextTop">
                        <p>AI-кухня</p>
                    </div>
                    <div class="mainSevenBottomTopTextBottom">
                        <div class="mainSevenBottomTopTextBottomFull">
                            <p>ГОТОВКА ПРОИСХОДИТ АВТОМАТИЧЕСКИ: РОБОТИЗИРОВАННЫЕ МАНИПУЛЯТОРЫ, ВСТРОЕННЫЕ ИНДУКЦИОННЫЕ ПОВЕРХНОСТИ, ТОЧНЫЕ ДОЗАТОРЫ, МИКРОКАПСУЛЫ СПЕЦИЙ, ИНТЕЛЛЕКТУАЛЬНАЯ ТЕРМИЧЕСКАЯ ОБРАБОТКА.</p>
                            <p>СИСТЕМА АНАЛИЗИРУЕТ ЕЖЕДНЕВНЫЙ УРОВЕНЬ АКТИВНОСТИ, СОСТАВ ПИТАНИЯ И ВНОСИТ КОРРЕКТИРОВКИ В РЕЦЕПТУРУ ДЛЯ ПОДДЕРЖАНИЯ ОПТИМАЛЬНОГО БАЛАНСА ПИТАТЕЛЬНЫХ ВЕЩЕСТВ.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainSevenBottomTopCard mainSevenBottomTopCardSmall">
                <div class="mainSevenBottomTopImage" style="background-image: url(../images/технологии5.png);"></div>
                <div class="mainSevenBottomTopText">
                    <div class="mainSevenBottomTopTextTop">
                        <p>Личная система безопасности воздуха</p>
                    </div>
                    <div class="mainSevenBottomTopTextBottom">
                        <div class="mainSevenBottomTopTextBottomFull">
                            <p>ВНУТРИ ДОМА УСТАНОВЛЕНЫ МУЛЬТИСПЕКТРАЛЬНЫЕ СЕНСОРЫ СОСТАВА АТМОСФЕРЫ, КОТОРЫЕ АНАЛИЗИРУЮТ ГАЗОВЫЕ ПОКАЗАТЕЛИ В НЕПРЕРЫВНОМ РЕЖИМЕ, СЧИТЫВАЯ МЕЛЬЧАЙШИЕ ОТКЛОНЕНИЯ: СОДЕРЖАНИЕ СО2, МИКРОПЫЛЕВЫЕ ЧАСТИЦЫ МАРСИАНСКОГО РЕГИОНА, ВЛАЖНОСТЬ, ОЗОН, ДАВЛЕНИЕ И ДАЖЕ МИКРОСЛЕДЫ ПОЛИМЕРНЫХ ПАРОВ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mainFour" id="mainFour">
    <div class="mainFourCarousel">
        <div class="mainFourSlide">
            <img src="../images/decorationOne.png" alt="">
        </div>
        <div class="mainFourSlide">
            <img src="../images/decorationTwo.png" alt="">
        </div>
        <div class="mainFourSlide">
            <img src="../images/decorationThree.png" alt="">
        </div>
    </div>
    <div class="mainFourCarouselIndicators">
        <div class="indicator active" data-index="0"></div>
        <div class="indicator" data-index="1"></div>
        <div class="indicator" data-index="2"></div>
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

<div class="modal" id="modal">
    <div class="modalContent">
        <button class="closeBtn" id="closeModal">✕</button>
        <h2>ЗАКАЗАТЬ ЗВОНОК</h2>
        <form method="POST">
            <input type="text" name="name_user" placeholder="Ваше имя" required>
            <input type="tel" name="phone_number" placeholder="Телефон" required>
            <input type="email" name="email_user" placeholder="Email" required>
            <button type="submit" class="sendBtn">Отправить</button>
        </form>
    </div>
</div>

<script src="javaHouseOne.js"></script>
    
</body>
</html>