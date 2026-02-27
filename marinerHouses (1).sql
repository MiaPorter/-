-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Фев 27 2026 г., 10:33
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
(11, 'toxicotoxic2@gmail.com', '2026-02-17 13:35:40');

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
  `image_houses` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `houses`
--

INSERT INTO `houses` (`id_house`, `title_house`, `price_house`, `area_houses`, `number_rooms`, `number_floors`, `decoration_houses`, `image_houses`) VALUES
(1, 'Mariner One', 32567213559, 128, 2, 1, 1, 'houseOne.png'),
(2, 'Astra Haven', 46854284845, 134, 2, 1, 1, 'houseTwo.png'),
(3, 'Red Valley Residence', 67394023435, 141, 3, 1, 2, 'houseThree.png'),
(4, 'Helios Point', 87833981456, 157, 3, 1, 1, 'houseFour.png'),
(5, 'Dustline Terrace', 116745574234, 192, 2, 2, 2, 'houseFive.png'),
(6, 'Sol Ridge Home', 133834345796, 207, 2, 2, 1, 'houseSix.png'),
(7, 'Crimson Horizon Villa', 299567213559, 224, 3, 2, 1, 'houseSeven.png'),
(8, 'Aurora Quarter', 315854284845, 236, 3, 2, 2, 'houseEight.png'),
(9, 'Orbital Grove', 481394023435, 259, 4, 2, 2, 'houseNine.png');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id_decoration` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_email` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `houses`
--
ALTER TABLE `houses`
  MODIFY `id_house` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
