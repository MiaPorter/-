<?php
    // $admin_ip = "127.0.0.1";

    // if ($_SERVER['REMOTE_ADDR'] === $admin_ip) {
    //     header("Location: admin.php");
    //     exit;
    // }

    $link = mysqli_connect('MySQL-8.0', 'root', '', 'marinerHouses') or die('Could not connect to database');

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
    <title>MARINER - купить участок будущего</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerMiddle">
        <a href="#mainTwo">О ПРОЕКТЕ</a>
        <a href="#mainFour">АРХИТЕКТУРА</a>
        <a href="#mainFive">ВИДЫ</a>
        <a href="#mainSix">ИНФРАСТРУКТУРА</a>
        <a href="#footer">КОНТАКТЫ</a>
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
    <button id="chooseApartment"><a href="#mainEight">выбрать квартиру</a></button>
    <div class="textLeftBottom">
        <img src="images/Location.png" alt="" height="30px">
        <p>12 минут до олимпа</p>
    </div>
    <img src="images/Down.png" alt="" class="imgArrow">
</div>

<div class="mainTwo" id="mainTwo">
    <div class="mainTwoFirstBlock">
        <div class="mainTwoFirstBlockLeft">
            <div class="h2TextOne">
                <h2>01</h2>
            </div>
            <div class="textOne">
                <h2>2024</h2>
                <p>год основания</p>
            </div>
        </div>
        <div class="mainTwoFirstBlockRight">
            <div class="imgOne">
                <img src="images/счастливаяСемья.png" alt="" width="220px" class="happyFamily">
                <img src="images/картинкаКафешек.png" alt="" width="450px" class="imgCafe">
            </div>
        </div>
    </div>
    <div class="mainTwoSecondBlock">
        <div class="mainTwoSecondBlockLeft">
            <div class="imgTwo">
                <img src="images/домССемьей.png" alt="" width="450px" class="homeWithFamily">
                <img src="images/картинкаКафешек.png" alt="" width="220px" class="imgCafeTwo">
            </div>
        </div>
        <div class="mainTwoSecondBlockRight">
            <div class="h2TextTwo">
                <h2>02</h2>
            </div>
            <div class="textTwo">
                <h2>9</h2>
                <p>участков с домами</p>
            </div>
        </div>
    </div>
    <div class="mainTwoThirdBlock">
        <div class="mainTwoThirdBlockLeft">
            <div class="h2TextThree">
                <h2>02</h2>
            </div>
            <div class="textThree">
                <h2>15 000</h2>
                <p>коммерческих объектов</p>
            </div>
        </div>
        <div class="mainTwoThirdBlockRight">
            <div class="imgThree">
                <img src="images/домБлизко.png" alt="" width="550px" class="houseClosely">
            </div>
        </div>
    </div>
</div>

<div class="mainThree">
    <div class="mainThreeImage">
        <img src="images/картинкаКафешек.png" alt="">
    </div>
  <div class="mainThreeRight">
    <div class="mainThreeText">
      <div class="mainThreeTextTitle">
        <span class="mainThreeTextNumber">01</span>
        <span>Гарантия легитимности и юридической чистоты</span>
      </div>
      <div class="mainThreeTextMainText">
            Каждый участок на Марсе зарегистрирован в международном реестре космической недвижимости и сопровождается полным пакетом документов.
      </div>
    </div>
    <div class="mainThreeText">
      <div class="mainThreeTextTitle">
        <span class="mainThreeTextNumber">02</span>
        <span>Эксклюзивные локации с лучшими условиями для жизни</span>
      </div>
      <div class="mainThreeTextMainText">
            Мы продаем не просто землю, мы продаем место для жизни. Все наши участки тщательно отобраны по критериям: безопасность, ресурсы, вид.
      </div>
    </div>
    <div class="mainThreeText">
      <div class="mainThreeTextTitle">
        <span class="mainThreeTextNumber">03</span>
        <span>Полное сопровождение «под ключ»: от участка до готового дома</span>
      </div>
      <div class="mainThreeTextMainText">
            Мы ваш единый поставщик решений для жизни на Марсе. Вместе с участком мы предлагаем: Каталог готовых проектов домов, организацию транспортировки материалов и конструкций с Земли и помощь в настройке и запуске оборудования после заселения.
      </div>
    </div>
    <div class="mainThreeText">
      <div class="mainThreeTextTitle">
        <span class="mainThreeTextNumber">04</span>
        <span>Сообщество первопроходцев и инвестиции в будущее</span>
      </div>
      <div class="mainThreeTextMainText">
            Покупая у нас, вы становитесь частью частного клуба марсианских землевладельцев.
            Это нетворкинг с самыми прогрессивными людьми человечества.
      </div>
    </div>
    <div class="mainThreeText">
      <div class="mainThreeTextTitle">
        <span class="mainThreeTextNumber">05</span>
        <span>Технологии будущего уже сегодня</span>
      </div>
      <div class="mainThreeTextMainText">
            Мы не адаптируем земные проекты - мы создаем их с нуля для марсианских реалий. Покупая участок, вы получаете доступ к передовым строительным технологиям.
      </div>
    </div>
  </div>
</div>

<div class="mainFour" id="mainFour">
    <div class="mainFourCarousel">
        <div class="mainFourSlide">
            <img src="images/карусель1.png" alt="">
            <div class="mainFourSlideText active">Современная марсианская элегантность</div>
            <div class="mainFourSlideTextTwo active">Архитектура домов сочетает футуризм и минимализм, создавая гармонию между технологичностью и уютом. Кубические формы с плавными углами выглядят монументально и лаконично. Панорамные стеклянные фасады открывают обзор на горизонт и звёздное небо, наполняя пространство мягким внутренним светом, который будто растворяет грань между интерьером и внешним миром.</div>
        </div>
        <div class="mainFourSlide">
            <img src="images/карусель2.png" alt="">
            <div class="mainFourSlideText">Интеллектуальная форма комфорта</div>
            <div class="mainFourSlideTextTwo active">Каждый дом представляет собой идеальный баланс эстетики и функциональности. Прочные материалы, адаптированные к марсианским условиям, соседствуют с тёплым интерьерным освещением, создавая атмосферу защищённости и уюта. Разноуровневая застройка — от одноэтажных компактных модулей до просторных двухэтажных резиденций — формирует динамичную структуру поселения, где каждый элемент подчеркивает единую философию: жизнь на другой планете может быть не только возможной, но и по-настоящему красивой.</div>
        </div>
        <div class="mainFourSlide">
            <img src="images/карусель3.png" alt="">
            <div class="mainFourSlideText">Свет как элемент вашей жизни</div>
            <div class="mainFourSlideTextTwo active">Подсветка играет ключевую роль в архитектурной концепции района. Тонкие линии тёплого света очерчивают границы участков и создают ощущение живого дыхания посёлка среди тёмной марсианской равнины. Свет не только украшает, но и выполняет навигационную функцию, подчёркивая структуру застройки и обеспечивая безопасность передвижения. Вечером он превращает поселение в сияющий оазис цивилизации, словно напоминая, что даже на другой планете человек несёт с собой тепло и уют своего дома.</div>
        </div>
    </div>
    <div class="mainFourCarouselIndicators">
        <div class="indicator active" data-index="0"></div>
        <div class="indicator" data-index="1"></div>
        <div class="indicator" data-index="2"></div>
    </div>
</div>

<div class="mainFive" id="mainFive">
    <h2>Открой новые <span>горизонты</span> жизни на Марсе</h2>
    <button><a href="panorama.php">панорамный обзор</a></button>
</div>

<div class="mainSix" id="mainSix">
    <div class="mainSixTop">
        <div class="mainSixTopLeft">
            <img src="images/arrows.png" alt="">
        </div>
        <div class="mainSixTopRight">
            <h2><span>Инфраструктура</span> будущего — уже сегодня</h2>
            <p>Здесь всё создано для комфортной жизни — на другой планете</p>
        </div>
    </div>
    <div class="mainSixBottom">
        <div class="mainSixBottomOne">
            <div class="mainSixBottomOneTop top">
                <p>Купольные оазисы с биосадом</p>
            </div>
            <div class="mainSixBottomOneBottom bottom">
                <p>закрытые экосистемы с растениями, чистым воздухом и зоной отдыха</p>
                <img src="images/листок.png" alt="">
            </div>
        </div>
        <div class="mainSixBottomTwo">
            <div class="mainSixBottomTwoTop top">
                <p>хаб и обсерватория</p>
            </div>
            <div class="mainSixBottomTwoBottom bottom">
                <p>место встреч, отдыха и наблюдения за звёздами</p>
                <img src="images/звезда.png" alt="">
            </div>
        </div>
        <div class="mainSixBottomThree">
            <div class="mainSixBottomThreeTop top">
                <p>умные жилые модули</p>
            </div>
            <div class="mainSixBottomThreeBottom bottom">
                <p>дома с адаптивным климатом и регулируемой гравитацией</p>
                <img src="images/умнаяКолонка.png" alt="">
            </div>
        </div>
        <div class="mainSixBottomFour">
            <div class="mainSixBottomFourTop top">
                <p>Панорамные кафе</p>
            </div>
            <div class="mainSixBottomFourBottom bottom">
                <p>уютное пространство под куполом с видом на марсианский горизонт</p>
                <img src="images/кафе.png" alt="">
            </div>
        </div>
        <div class="mainSixBottomFive">
            <div class="mainSixBottomFiveTop top">
                <p>Подсвечивающиеся дороги</p>
            </div>
            <div class="mainSixBottomFiveBottom bottom">
                <p>умное покрытие, которое светится в темноте, реагируя на движение пешеходов</p>
                <img src="images/дорога.png" alt="">
            </div>
        </div>
        <div class="mainSixBottomSix">
            <div class="mainSixBottomSixTop top">
                <p>Площадь общения «Марс-Сфера»</p>
            </div>
            <div class="mainSixBottomSixBottom bottom">
                <p>центральное пространство района с амфитеатром, интерактивными экранами и вечерними световыми шоу</p>
                <img src="images/магазины.png" alt="">
            </div>
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
                <div class="mainSevenBottomTopImage" style="background-image: url(images/технологии1.png);"></div>
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
                <div class="mainSevenBottomTopImage" style="background-image: url(images/технологии2.png);"></div>
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
                <div class="mainSevenBottomTopImage" style="background-image: url(images/технологии3.png);"></div>
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
                <div class="mainSevenBottomTopImage" style="background-image: url(images/технологии4.png);"></div>
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
                <div class="mainSevenBottomTopImage" style="background-image: url(images/технологии5.png);"></div>
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

<div class="mainEight" id="mainEight">
    <h2>Выбери свой <span>дом</span></h2>
    <div class="btns">
        <button class="btn-left"><a href="panorama.php">выбрать на карте</a></button>
        <button class="btn-right"><a href="housesParameters.php">подбор по параметрам</a></button>
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

<script src="java.js"></script>

    
</body>
</html>