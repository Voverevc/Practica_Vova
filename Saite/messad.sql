-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 04 2023 г., 15:25
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `messad`
--

-- --------------------------------------------------------

--
-- Структура таблицы `net`
--

CREATE TABLE `net` (
  `massed_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `email` text NOT NULL,
  `tema` text NOT NULL,
  `texti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `net`
--

INSERT INTO `net` (`massed_id`, `first_name`, `email`, `tema`, `texti`) VALUES
(1, 'ssdssd', 'sdsdsss', '', ''),
(2, 'ffdidufdiff', 'dfdfjkfkfefe', 'efeljkeflefee', 'eefkejefejfe;fef;e'),
(3, 'ВОВА', 'revin@hdsidsds', 'Пожар', 'Сгорел дом'),
(4, 'ВОВА', 'dfdfjkfkfefe', 'Пожар', 'дом сгорел'),
(5, 'буб', 'юбл', 'ппп', 'ппп'),
(6, '', '', '', ''),
(7, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `prava` varchar(50) NOT NULL DEFAULT 'user',
  `tel` int(11) NOT NULL,
  `approval` text NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `E-mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `prava`, `tel`, `approval`, `country`, `city`, `avatar`, `E-mail`) VALUES
(4, '', 'e10adc3949ba59abbe56e057f20f883e', 'jkijk', '', 2147483647, '', 'Россия', 'Богур', '', ''),
(5, '', '25f9e794323b453885f5181f1b624d0b', 'alenaiiii', '', 2147483647, '', 'Россия', 'Бор', '', ''),
(6, 'Mihneco', 'e10adc3949ba59abbe56e057f20f883e', 'Кристина авдеева', '', 2147483647, '', 'Россия', 'Богур', '', ''),
(7, '+7(952)5584080', 'c8837b23ff8aaa8a2dde915473ce0991', 'Кристина авдеева', 'user', 2147483647, '', 'Россия', 'Борисоглебск', '', ''),
(8, '+7(952)5584080', 'c8837b23ff8aaa8a2dde915473ce0991', 'Кристина авдеева', 'user', 2147483647, '', 'Россия', 'Борисоглебск', '', ''),
(9, '+7(952)5584080', 'c8837b23ff8aaa8a2dde915473ce0991', 'Кристина авдеева', 'user', 2147483647, '', 'Россия', 'Борисоглебск', '', ''),
(10, 'Revin', '827ccb0eea8a706c4c34a16891f84e7b', 'Вова', 'user', 2147483647, '', 'Россия', 'Борисоглебск', '', ''),
(11, 'Revin', '827ccb0eea8a706c4c34a16891f84e7b', 'Вова', 'user', 2147483647, '', 'Россия', 'Борисоглебск', '', ''),
(12, 'Gord', 'e10adc3949ba59abbe56e057f20f883e', 'hwjwdjd', 'admin', 0, 'on', ' ', ' ', '', ''),
(13, 'Gord', 'e10adc3949ba59abbe56e057f20f883e', 'hwjwdjd', 'admin', 0, 'on', ' ', ' ', '', ''),
(14, 'Gord', 'e10adc3949ba59abbe56e057f20f883e', 'hwjwdjd', 'admin', 5252226, 'on', ' ', ' ', '', 'rfgddhsjsd@.ru'),
(15, 'Gord', 'e10adc3949ba59abbe56e057f20f883e', 'hwjwdjd', 'admin', 5252226, 'on', ' ', ' ', '', 'rfgddhsjsd@.ru'),
(16, 'Gord', 'e10adc3949ba59abbe56e057f20f883e', 'вапупаууп', 'admin', 2147483647, 'on', 'Китай', 'Пекин', '', 'revim@.fdf'),
(17, 'Madf', '12345', 'Vova', 'admin', 89165555, '', 'Китай', 'Пекин', '', 'hgsdcfhws@.ri n'),
(18, 'revin', '827ccb0eea8a706c4c34a16891f84e7b', 'sddsdsdsd', 'user', 0, 'on', 'Китай', 'Пекин', '', 'dsdsdsdssd'),
(19, 'ddd', 'fcea920f7412b5da7be0cf42b8c93759', 'ddddd', 'user', 0, 'on', 'Япония', 'Токио', '', 'dddddd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `net`
--
ALTER TABLE `net`
  ADD PRIMARY KEY (`massed_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `net`
--
ALTER TABLE `net`
  MODIFY `massed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
