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

<div class="mainFour">
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

<div class="mainFive">
    <h2>Открой новые <span>горизонты</span> жизни на Марсе</h2>
    <button><a href="panorama.php">панорамный обзор</a></button>
</div>

<script src="java.js"></script>

    
</body>
</html>