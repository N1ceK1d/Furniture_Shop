-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2023 г., 12:01
-- Версия сервера: 5.7.39-log
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `furniture`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Client`
--

CREATE TABLE `Client` (
  `id` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Голубой диван', 'https://idei.club/uploads/posts/2022-02/1645817904_43-idei-club-p-divan-sonata-m-stil-interer-krasivo-foto-75.jpg', 23000),
(2, 'Красный диван', 'https://kot-na-divane.ru/wa-data/public/shop/products/75/00/75/images/463/463.970.jpg', 15000),
(3, 'Компьютерный стол', 'https://elnaopt.ru/image/cache/catalog/language/en-gb/revolution/sk5e_thumb-800x800.jpg', 10000),
(4, 'Большой комод', 'https://rattan-mebel.ru/pic_goods/210000/B271-31_511444.jpg', 20000),
(5, 'Компактный комод', 'https://mkmgroup.ru/d/komod-v-interere-spalni.jpg', 12500),
(6, 'Игровой стол', 'https://wallytally.ru/upload/iblock/ffb/t7ftciow03d1f4rqw6qyp81sw3dfofxn.webp', 7500),
(7, 'Оранжевое кресло', 'https://ae01.alicdn.com/kf/HTB1QTZ5OFXXXXX.XVXXq6xXFXXXX.jpg', 23000),
(8, 'Классическое кресло', 'https://mebel-v-nsk.ru/wp-content/uploads/c/d/7/cd711288d6a3d4e3560bb5d4f3c0aff1.jpg', 12000),
(9, 'Встроенный шкаф', 'https://mkmgroup.ru/d/vstroennyj_shkaf_na_zakaz_oliviya.jpg', 27000),
(10, 'Кресло-мешок', 'https://cdn.100sp.ru/pictures/388418227', 12000),
(11, 'Корпусный шкаф', 'https://miamor-mebel.ru/image/cache/catalog/shkafy/korpusnye/piter/piter-1200x900.jpg', 34000),
(12, 'Белый комод', 'https://assets.thefurnish.ru/system/uploads/product_image/image/233715/961e549fbfbafec59204d8061d0e4392.jpeg', 13750),
(13, 'Диван с отоманкой', 'https://static.insales-cdn.com/images/products/1/26/130711578/%D0%9C%D0%B0%D1%80%D1%81%D0%B5%D0%BB%D1%8C.jpg', 34000),
(14, 'Кровать', 'https://yagoda-mebel.ru/upload/iblock/e95/e9518521fe891fd17de8c762c34e437d.jpg', 54000),
(15, 'Деревянная кровать', 'https://kimnatka.com/image/catalog/Manufacture/ArborDrev/Veneciya/kimnatka_Ligko_Veneciya_vilha_ArborDrev.jpg', 13000);

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `id` int(11) NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`id`, `text`) VALUES
(1, 'Недавно я купил красивый столик в магазине мебели и очень доволен своей покупкой. Качество мебели исключительное, обслуживание клиентов на высшем уровне'),
(2, 'Мебельный магазин предлагает широкий выбор стильной и доступной мебели. Мне удалось найти идеальный диван для моей гостиной, не потратив на это денег'),
(3, 'Я настоятельно рекомендую Мебельный магазин для всех ваших предпочтений в мебели. Их выбор обширен, персонал знающий и отзывчивый'),
(4, 'Мне очень понравилось делать покупки в Мебельном магазине. Персонал был дружелюбным и внимательным и помог мне найти идеальный спальный гарнитур для моего нового дома'),
(5, 'Мебельный магазин превзошел мои ожидания благодаря своей высококачественной мебели и отличному обслуживанию клиентов. Я определенно буду поддерживать клиента'),
(6, 'Меня впечатлило различные варианты мебели, доступные в «Мебельном магазине». У них есть все, от современного до традиционного стиля, что позволяет легко найти то, что соответствует моему вкусу'),
(7, 'Мебельный магазин предлагает конкурентоспособные цены без ущерба для качества. Благодаря доступным соединениям я смог обставить весь свой дом в рамках своего бюджета'),
(8, 'Служба доставки, предоставленная Мебельным магазином, была быстрой и профессиональной. Моя мебель прибыла в идеальном состоянии, а команда доставки даже помогла со сборкой'),
(9, 'Я ценю внимание к деталям, какая компания Мебельный магазин вкладывает в свою мебель. Мастерство видно в каждой детали, и это придает атмосферу очарования моему дому'),
(10, 'Мебельный магазин стал моим любимым магазином, где можно купить всю мебель. Широкий выбор, разумные цены и исключительное обслуживание клиентов привлекают среди конкурентов');

-- --------------------------------------------------------

--
-- Структура таблицы `UserCart`
--

CREATE TABLE `UserCart` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `UserCart`
--
ALTER TABLE `UserCart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `UserCart`
--
ALTER TABLE `UserCart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `UserCart`
--
ALTER TABLE `UserCart`
  ADD CONSTRAINT `usercart_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `Client` (`id`),
  ADD CONSTRAINT `usercart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
