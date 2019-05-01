-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2019 г., 01:08
-- Версия сервера: 5.7.25
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `belisa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(6, 'БРИТВА ЭЛЕКТРИЧЕСКАЯ L\'ORNAY LA-2301', 'Электробритва L\'ORNAY LA-2301 с корпусом их нескользящего пластика. Лезвия выполнены из высококачественной нержавеющей стали. Время работы от встроенного Ni-CD аккумулятора – 45 мин. В комплекте идет щеточка для чистки и защитная крышка для лезвий.', '21.00'),
(7, 'МАШИНКА ДЛЯ СТРИЖКИ ARESA AR-1805', 'Характеристики:\r\n\r\nМощность: 10 Вт \r\nРегулируемая длина лезвия \r\nАксессуары: 4 направляющие насадки, щеточка для чистки лезвия, расческа, масленка, ножницы \r\nЭргономический дизайн', '26.90'),
(13, 'БОКОРЕЗЫ 130ММ STARTUL MASTER', 'Используются при монтажных и ремонтных работах, где требуется повышенная точность. Никелевое покрытие препятствует образованию коррозии и увеличивает износостойкость инструмента. ', '3.75'),
(14, 'МАРКЕР ПЕРМАНЕНТНЫЙ 3ММ', 'Наконечник пулевидный 3 мм, спиртовая основа. Подходит для письма на любых поверхностях. Цвет синий.', '0.74'),
(15, 'МОЛОТОК 0,4КГ С КВ. БОЙКОМ', 'Инструмент изготовлен из стали (40Х или 45Ст), а на него нанесено медное покрытие. Омедненный инструмент взрывобезопасный предназначен для работы на взрывоопасных производствах и участках.', '9.15'),
(16, 'КЛЮЧ 12ММ ВОЛАТ', 'Ключ комбинированный ВОЛАТ представляет собой сочетание из рожкового и накидного ключа, расположенных на одной общей рукоятке.', '1.25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `login` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`login`, `password`, `level`) VALUES
('admin', '$2y$10$oKuctY9TgtETVc38zqiLOukt6ngDJ.LMfZCStZis7kFPIhOl3A.KG', 5),
('user', '$2y$10$SA5bcEDWQ7GRqbRsNp7iKug5j/5hRFyWBjBmFT0jJK8QiZqaxQiGG', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
