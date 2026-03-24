<?php

    // /adminPanel.php?key=mariner2026
    $key = "mariner2026";
    if (!isset($_GET['key']) || $_GET['key'] !== $key) {
        header("Location: adminPanel.php");
        exit();
    }

    $link = mysqli_connect('MySQL-8.0', 'root', '', 'marinerHouses') or die('Could not connect to database');

    // УДАЛЕНИЕ
    if (isset($_GET['delete'])) {
        $id = (int)$_GET['delete'];
        mysqli_query($link, "DELETE FROM houses WHERE id_house = $id");
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    // ДОБАВЛЕНИЕ
    if( isset($_POST['add'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $area = $_POST['area'];
        $rooms = $_POST['rooms'];
        $floors = $_POST['floors'];
        $decoration = $_POST['decoration'];
        $image = $_POST['image'];
        $link_house = $_POST['link'];

        mysqli_query($link, "
        INSERT INTO houses 
        (title_house,price_house,area_houses,number_rooms,number_floors,decoration_houses,image_houses,link_houses)
        VALUES
        ('$title','$price','$area','$rooms','$floors','$decoration','$image','$link_house')
        ");

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

    // ИЗМЕНЕНИЕ
    if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $area = $_POST['area'];
    $rooms = $_POST['rooms'];
    $floors = $_POST['floors'];
    $decoration = $_POST['decoration'];
    $image = $_POST['image'];
    $link_house = $_POST['link'];

    mysqli_query($link, "
    UPDATE houses SET
    title_house='$title',
    price_house='$price',
    area_houses='$area',
    number_rooms='$rooms',
    number_floors='$floors',
    decoration_houses='$decoration',
    image_houses='$image',
    link_houses='$link_house'
    WHERE id_house = $id
    ");

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
    }

    $result = mysqli_query($link, "SELECT * FROM houses");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleAdminPanel.css">
</head>
<body>

<header>
    <div class="headerLeft">
        <a href="#"><img src="images/логотип.png" alt="" width="240px"></a>
    </div>
    <div class="headerRight">
        <a href="#" onclick="history.back(); return false;">назад</a>
    </div>
</header>

<div class="mainOne">
    <div class="mainOneLeft">
        <img src="images/arrows.png" alt="">
    </div>
    <div class="mainOneRight">
        <h2>АДМИН <span>ПАНЕЛЬ</span></h2>
    </div>
</div>

<div class="mainTwo">
    <h2>Добавить дом</h2>
    <form method="POST">
        <input name="title" placeholder="Название"><br>
        <input name="price" placeholder="Цена"><br>
        <input name="area" placeholder="Площадь"><br>
        <input name="rooms" placeholder="Комнаты"><br>
        <input name="floors" placeholder="Этажи"><br>
        <input name="decoration" placeholder="Отделка (1 или 2)"><br>
        <input name="image" placeholder="Картинка"><br>
        <input name="link" placeholder="Ссылка"><br>
        <button name="add">Добавить</button>
    </form>
</div>

<div class="mainThree">
    <h2>Все дома</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Цена</th>
            <th>Площадь</th>
            <th>Комнаты</th>
            <th>Этажи</th>
            <th>Отделка</th>
            <th>Картинка</th>
            <th>Файл</th>
            <th>Действия</th>
        </tr>
        <?php while($row=mysqli_fetch_assoc($result)){ ?>
        <tr>
            <form method="POST">
                <td>
                    <?php echo $row['id_house']; ?>
                    <input type="hidden" name="id" value="<?php echo $row['id_house']; ?>">
                </td>
                <td>
                    <input name="title" value="<?php echo $row['title_house']; ?>">
                </td>
                <td>
                    <input name="price" value="<?php echo $row['price_house']; ?>">
                </td>
                <td>
                    <input name="area" value="<?php echo $row['area_houses']; ?>">
                </td>
                <td>
                    <input name="rooms" value="<?php echo $row['number_rooms']; ?>">
                </td>
                <td>
                    <input name="floors" value="<?php echo $row['number_floors']; ?>">
                </td>
                <td>
                    <input name="decoration" value="<?php echo $row['decoration_houses']; ?>">
                </td>
                <td>
                    <input name="image" value="<?php echo $row['image_houses']; ?>">
                </td>
                <td>
                    <input name="link" value="<?php echo $row['link_houses']; ?>">
                </td>
                <td>
                    <button name="edit">Сохранить</button>
                    <a href="?delete=<?php echo $row['id_house']; ?>">Удалить</a>
                </td>
            </form>
        </tr>
    <?php } ?>
    </table>
</div>


    
</body>
</html>