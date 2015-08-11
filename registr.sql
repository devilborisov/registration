-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 11 2015 г., 10:49
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `registr`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `login`, `email`, `pass`, `dt`, `link`) VALUES
(15, 'dfdsf', 'dsfdsf', 'devil', 'diavol8@yandex.ru', 'aQ1', '2015-07-15 19:40:38', '/avatar/15/Lighthouse.jpg'),
(16, 'dsfsdf', 'dsfsdf', 'dssdfsdf', 'diavol8@yandex.ru', 'aQ1', '2015-07-15 19:48:14', '/avatar/16/Jellyfish.jpg'),
(17, 'grisha', 'dsfdsf', 'karatel', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 19:10:23', '/avatar/17/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(18, 'dssdf', 'dsfds', 'dsfdsf', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 19:36:02', '/avatar/18/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(19, 'dsf', 'dsf', 'dsf', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 19:37:18', '/avatar/19/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(20, 'dsfds', 'dsfds', 'dsfsdf', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 19:54:03', '/avatar/20/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(21, 'sfdsf', 'dsfdsf', 'dsfds', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 19:57:00', '/avatar/21/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(22, 'dsfdsf', 'dsfdsf', 'dsfdf', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 20:01:49', '/avatar/22/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(23, 'dsfds', 'dsfdsf', 'sdfdsf', 'diavol8@yandex.ru', 'aQ1', '2015-07-29 20:04:14', ''),
(24, 'dsfdsf', 'dsfdsf', 'sdfdsfdsf', 'diavol8@yandex.ru', 'aQ1', '2015-08-03 13:06:13', '/avatar/24/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(25, 'dsfdsf', 'lklkl', 'hhhhhh', 'diavol8@yandex.ru', 'aQ1', '2015-08-03 13:10:36', '/avatar/25/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(26, 'dfgdfg', 'dsfgdfg', 'dfgdfg', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 08:28:24', ''),
(27, 'huhu', 'uhuhu', 'uhuhu', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 08:32:51', ''),
(28, 'jhjhj', 'jhjhj', 'jhjhjh', 'diavol8@yandex.ru', 'aQ!', '2015-08-10 08:34:00', ''),
(29, 'kjkjk', 'kjkjk', 'kjkjkjk', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 08:35:13', ''),
(30, 'dsfdsf', 'dsfdsf', 'efdsf', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 08:37:22', ''),
(31, 'hjhjh', 'jhjhj', 'hjhjhj', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 08:39:53', ''),
(32, 'sdsfdsf', 'dsfdsf', 'dsfdsfssss', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:02:10', ''),
(33, 'kknkn', 'knkn', 'knkn', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:05:17', '/avatar/33/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(34, 'hkjkj', 'kjkjkj', 'kjkjkjkjk', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:05:37', ''),
(35, 'knnknk', 'knknkn', 'knknkn', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:06:13', ''),
(36, 'kjkj', 'kjkjkj', 'kjkjklnn', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:12:56', ''),
(37, 'mnnmnmn', 'mnmnmnm', 'nbnbnbnm', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:13:55', ''),
(38, 'lllllklk', 'lklklk', 'lkllkkjkk', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:15:03', ''),
(39, 'kmkmk', 'hbhbhb', 'hbhbhb', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:17:05', ''),
(40, 'kmkmk', 'mmkkmm', 'mmbbbv', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:19:05', ''),
(41, 'jnjnj', 'nnjnjn', 'jnjnjnjnj', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:20:00', ''),
(42, 'kjkjkjk', 'kjkjkj', 'kjkjkj', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:21:00', ''),
(43, 'lklklk', 'lklklkl', 'lklklk', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:21:39', ''),
(44, 'lklkl', 'lklkl', 'lklkljjhj', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:23:29', '/avatar/44/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(45, 'kjjkjkk', 'kjkjk', 'kjkjk', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 17:36:07', '/avatar/45/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(46, 'kjkjk', 'kjkjk', 'hdhdhdhdh', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 20:25:30', '/avatar/46/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(47, 'jhjhjhj', 'jhjhjhj', 'jhjhhdded', 'diavol8@yandex.ru', 'aQ1', '2015-08-10 20:25:52', '/avatar/47/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(48, 'kjhkjjk', 'kjkjkj', 'devilborisov', 'diavol8@yandex.ru', 'aQ1', '2015-08-11 06:33:51', '/avatar/48/hq-wallpapers_ru_nature_32120_1920x1200.jpg'),
(49, 'jjhjh', 'jhjhj', 'jhjhj', 'diavol8@yandex.ru', 'aQ1', '2015-08-11 07:45:08', '/avatar/49/hq-wallpapers_ru_nature_32120_1920x1200.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
