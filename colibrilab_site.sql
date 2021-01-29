-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 29 2021 г., 13:36
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
  `site_name` varchar(20) NOT NULL,
  `link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `published` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cv_students`
--

INSERT INTO `cv_students` (`id`, `email`, `password`, `name`, `profession`, `about_me`, `cv_email`, `phon`, `address`, `published`) VALUES
(1, 'dfdf@kk.lo', '123', NULL, '', '', '', '', '', 0),
(2, 'dfdf@kk.lo', '123', NULL, '', '', '', '', '', 0),
(3, 'dd@kk.op', '123', NULL, '', '', '', '', '', 0),
(4, 'aaa@mail.ru', '456', NULL, '', '', '', '', '', 0),
(5, 'aaa@mail.ru', '567', NULL, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `education`
--

CREATE TABLE `education` (
  `id` int(5) NOT NULL,
  `cv_student_id` int(5) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `startid_at` varchar(20) NOT NULL,
  `ended_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `cv_students_id` int(11) NOT NULL,
  `job_title` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `description` varchar(191) NOT NULL,
  `started_at` int(11) NOT NULL,
  `ended_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(4) NOT NULL,
  `cv_students_id` int(5) NOT NULL,
  `language` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 4, 2, 82),
(13, 12, 3, 16),
(14, 12, 1, 15),
(15, 12, 2, 94);

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cv_students`
--
ALTER TABLE `cv_students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `education`
--
ALTER TABLE `education`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
