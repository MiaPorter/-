-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Апр 08 2026 г., 16:36
-- Версия сервера: 8.0.43
-- Версия PHP: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `marinerHouses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buyHouse`
--

CREATE TABLE `buyHouse` (
  `id_buyHouse` int NOT NULL,
  `name_user` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_user` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `buyHouse`
--

INSERT INTO `buyHouse` (`id_buyHouse`, `name_user`, `phone_number`, `email_user`, `created_at`) VALUES
(1, 'Сергиенко Дарья Александровна', '+79062362013', 'serdusik@gmail.com', '2026-04-02 12:03:28'),
(2, 'Сергиенко Дарья Александровна', '+79062362013', 'serdusik@gmail.com', '2026-04-02 12:12:15'),
(3, 'Сергиенко Дарья Александровна', '+79062362013', 'serdusik@gmail.com', '2026-04-02 12:20:11');

-- --------------------------------------------------------

--
-- Структура таблицы `decoration`
--

CREATE TABLE `decoration` (
  `id_decoration` int NOT NULL,
  `decoration_houses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `decoration`
--

INSERT INTO `decoration` (`id_decoration`, `decoration_houses`) VALUES
(1, 'дизайнерская отделка'),
(2, 'без отделки');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id_email` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id_email`, `email`, `created_at`) VALUES
(9, 'you@mail.ru', '2026-02-11 15:34:43'),
(10, 'toxicotoxic2@gmail.com', '2026-02-17 13:32:17'),
(11, 'toxicotoxic2@gmail.com', '2026-02-17 13:35:40'),
(12, 'serdusik@gmail.com', '2026-04-02 12:31:02'),
(13, 'serdusik@gmail.com', '2026-04-02 12:31:41');

-- --------------------------------------------------------

--
-- Структура таблицы `houses`
--

CREATE TABLE `houses` (
  `id_house` int NOT NULL,
  `title_house` varchar(255) NOT NULL,
  `price_house` bigint NOT NULL,
  `area_houses` int DEFAULT NULL,
  `number_rooms` tinyint DEFAULT NULL,
  `number_floors` tinyint DEFAULT NULL,
  `decoration_houses` int DEFAULT NULL,
  `image_houses` varchar(999) DEFAULT NULL,
  `link_houses` varchar(999) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`id_house`, `title_house`, `price_house`, `area_houses`, `number_rooms`, `number_floors`, `decoration_houses`, `image_houses`, `link_houses`) VALUES
(1, 'Mariner One', 32567213559, 128, 2, 1, 1, 'houseOne.png', 'houseOne.php'),
(2, 'Astra Haven', 46854284845, 134, 2, 1, 1, 'houseTwo.png', 'houseTwo.php'),
(3, 'Red Valley Residence', 67394023435, 141, 3, 1, 2, 'houseThree.png', 'houseThree.php'),
(4, 'Helios Point', 87833981456, 157, 3, 1, 1, 'houseFour.png', 'houseFour.php'),
(5, 'Dustline Terrace', 116745574234, 192, 2, 2, 2, 'houseFive.png', 'houseFive.php'),
(6, 'Sol Ridge Home', 133834345796, 207, 2, 2, 1, 'houseSix.png', 'houseSix.php'),
(7, 'Crimson Horizon Villa', 299567213559, 224, 3, 2, 1, 'houseSeven.png', 'houseSeven.php'),
(8, 'Aurora Quarter', 315854284845, 236, 3, 2, 2, 'houseEight.png', 'houseEight.php'),
(9, 'Orbital Grove', 481394023435, 259, 4, 2, 1, 'houseNine.png', 'houseNine.php');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buyHouse`
--
ALTER TABLE `buyHouse`
  ADD PRIMARY KEY (`id_buyHouse`);

--
-- Индексы таблицы `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id_decoration`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_email`);

--
-- Индексы таблицы `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id_house`),
  ADD KEY `decoration_houses` (`decoration_houses`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buyHouse`
--
ALTER TABLE `buyHouse`
  MODIFY `id_buyHouse` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id_decoration` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_email` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `houses`
--
ALTER TABLE `houses`
  MODIFY `id_house` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`decoration_houses`) REFERENCES `decoration` (`id_decoration`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
