-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 16 2021 г., 12:55
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `colibrilab_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `login` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `connections`
--

CREATE TABLE `connections` (
  `id` int(4) NOT NULL,
  `cv_students_id` int(5) NOT NULL,
  `facebook` varchar(80) NOT NULL,
  `linkedIn` varchar(80) NOT NULL,
  `twitter` varchar(80) NOT NULL,
  `dribble` varchar(80) NOT NULL,
  `github` varchar(80) NOT NULL,
  `behance` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `connections`
--

INSERT INTO `connections` (`id`, `cv_students_id`, `facebook`, `linkedIn`, `twitter`, `dribble`, `github`, `behance`) VALUES
(1, 4, 'https://www.facebook.com/andranik.hoghmrtsyan', 'dddddddddddddddd', 'hjhjhjhj', 'mmmmmmmmmmmmmm', 'cccccccc', 'tytytyty'),
(2, 6, '', '', '', '', '', ''),
(3, 8, 'fghfgh', 'vcbcvb', 'bcvbcvb', '', '', ''),
(4, 10, '', '', '', '', '', ''),
(5, 12, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `cv_students`
--

CREATE TABLE `cv_students` (
  `id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `profession` varchar(50) NOT NULL,
  `about_me` text NOT NULL,
  `cv_email` varchar(50) NOT NULL,
  `phon` varchar(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `image` varchar(80) NOT NULL,
  `published` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cv_students`
--

INSERT INTO `cv_students` (`id`, `email`, `password`, `name`, `profession`, `about_me`, `cv_email`, `phon`, `address`, `image`, `published`) VALUES
(1, 'dfdf@kk.lo', '123', NULL, '', '', '', '', '', '', 0),
(2, 'dfdf@kk.lo', '123', NULL, '', '', '', '', '', '', 0),
(3, 'dd@kk.op', '123', NULL, '', '', '', '', '', '', 0),
(4, 'aaa@mail.ru', '456', '', '', 'I am junior developer', 'aaa@mail.ru', '094680601', 'Yerevan 28,Abovjan 26', 'news10736-main.jpeg', 1),
(5, 'aaa@mail.ru', '567', NULL, '', '', '', '', '', '', 0),
(6, 'ddd@gggg.ru', '123', 'Armen', '', '', 'ddd@gggg.ru', '', '', '', 1),
(7, 'aaa@yandex.ru', '123', NULL, '', '', '', '', '', '', 0),
(8, 'ddd@mail.ru', '123', 'ghgh', 'ghghg', 'hghgh', 'ddd@mail.ru', '65454', 'fhjfghfg', '', 1),
(9, 'mmm@mail.ru', '123', NULL, '', '', '', '', '', '', 0),
(10, 'nnn@mail.ru', '456', '', '', '', 'nnn@mail.ru', '', '', '', 1),
(11, 'ddd@mail.ru', '456', NULL, '', '', '', '', '', '', 0),
(12, 'kkk@ggg.com', '123', '', '', '', 'kkk@ggg.com', '', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id` int(5) NOT NULL,
  `cv_student_id` int(5) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `education` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `begin_month` varchar(20) NOT NULL,
  `begin_year` int(4) NOT NULL,
  `end_month` varchar(20) NOT NULL,
  `end_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `education`
--

INSERT INTO `education` (`id`, `cv_student_id`, `specialization`, `education`, `description`, `begin_month`, `begin_year`, `end_month`, `end_year`) VALUES
(30, 4, 'engineer', 'YGU', 'ok good', 'September', 1979, 'May', 1984),
(36, 4, 'programmer', 'high', 'hello,how are you', 'September', 1988, 'May', 1994),
(37, 8, 'fgfg', 'fgfgfgfgfg', 'lklklkl', 'January', 2021, 'January', 2021),
(38, 10, 'dfd', 'dfsdf', '', 'January', 2021, 'January', 2021),
(39, 4, 'web disign', 'school', 'ccc jjjkjk', 'March', 2008, 'May', 2013);

-- --------------------------------------------------------

--
-- Структура таблицы `experiences`
--

CREATE TABLE `experiences` (
  `id` int(4) NOT NULL,
  `cv_students_id` int(11) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `company` varchar(40) NOT NULL,
  `description` varchar(191) NOT NULL,
  `start_month` varchar(20) NOT NULL,
  `start_year` int(11) NOT NULL,
  `end_month` varchar(15) NOT NULL,
  `end_year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `experiences`
--

INSERT INTO `experiences` (`id`, `cv_students_id`, `job_title`, `company`, `description`, `start_month`, `start_year`, `end_month`, `end_year`) VALUES
(7, 4, 'title', 'company', 'description', 'February', 2020, 'May', 2015),
(8, 4, 'TITLE', 'COMPANY', 'DESCRIPTION', 'February', 2020, 'December', 1901),
(9, 4, 'TITLE1', 'COMPANY', 'DESCRIPTION', 'February', 2020, 'December', 1901),
(10, 4, '', '', '', 'May', 2012, 'January', 2021),
(11, 8, 'ooo', 'ppppp', 'gg nn', 'January', 2020, 'January', 2021);

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(4) NOT NULL,
  `cv_students_id` int(5) NOT NULL,
  `language` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `cv_students_id`, `language`) VALUES
(3, 4, 'armenia'),
(4, 8, 'fdfdfdfdf'),
(5, 8, 'bbbb');

-- --------------------------------------------------------

--
-- Структура таблицы `skills`
--

CREATE TABLE `skills` (
  `id` int(5) NOT NULL,
  `cv_students_id` int(5) NOT NULL,
  `language` int(1) NOT NULL,
  `percent` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skills`
--

INSERT INTO `skills` (`id`, `cv_students_id`, `language`, `percent`) VALUES
(25, 4, 3, 50),
(27, 4, 2, 71),
(28, 4, 1, 67),
(29, 8, 1, 50),
(30, 8, 2, 50),
(31, 7, 1, 68),
(32, 7, 2, 83),
(33, 10, 1, 65),
(34, 10, 2, 65),
(35, 12, 2, 50),
(41, 12, 1, 80);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(4) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `course_type` varchar(40) NOT NULL,
  `confirm_type` varchar(40) NOT NULL,
  `agree_term` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  `mail_sended` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `fullname`, `age`, `phone`, `email`, `course_type`, `confirm_type`, `agree_term`, `comment`, `mail_sended`) VALUES
(50, 'Andranik Hoghmrtsyan', 58, '454558', 'hoghmrtsyan.and@mail.ru', 'Full Stack Web Development', 'one', 'a:3:{i:0;s:4:\"true\";i:1;s:4:\"true\";i:2;s:4:\"true\";}', 'comment', 1),
(51, 'aaa bbb', 58, '055369852', 'ddd@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:4:\"true\";}', 'mmmm yjhj', 0),
(52, 'Andranik', 58, '4545', 'hoghmrtsyan.and@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:4:\"true\";}', 'fdgdfg', 0),
(53, 'Andranik', 58, '4545', 'hoghmrtsyan.and@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:5:\"false\";}', 'fdgdfg', 0),
(54, 'Andranik', 58, '4545', 'hoghmrtsyan.and@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:5:\"false\";}', 'fdgdfg', 0),
(55, 'Andranik', 58, '4545', 'hoghmrtsyan.and@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:5:\"false\";}', 'fdgdfg', 0),
(56, 'Andranik', 58, '4545', 'hoghmrtsyan.and@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:5:\"false\";}', 'fdgdfg', 0),
(57, 'Andranik', 58, '4545', 'hoghmrtsyan.and@mail.ru', 'Front-End React Web Development', '2 Õ¸Ö‚Õ½Õ¡Õ¶Õ¸Õ² 10% Õ¦Õ¥Õ²Õ¹', 'a:3:{i:0;s:4:\"true\";i:1;s:5:\"false\";i:2;s:5:\"false\";}', 'fdgdfg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `connections`
--
ALTER TABLE `connections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cv_students`
--
ALTER TABLE `cv_students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `connections`
--
ALTER TABLE `connections`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cv_students`
--
ALTER TABLE `cv_students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
