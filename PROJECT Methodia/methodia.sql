-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2018 at 03:02 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `methodia`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `ID` int(11) NOT NULL,
  `city` text NOT NULL,
  `kilometers` int(11) NOT NULL,
  `recharges` int(11) NOT NULL,
  `price` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`ID`, `city`, `kilometers`, `recharges`, `price`, `file`) VALUES
(1, 'Амстердам', 2157, 6, '50,40', 'amsterdam.png'),
(2, 'Атина', 793, 2, '16,80', 'atina.png'),
(3, 'Берлин', 1634, 5, '42', 'berlin.png'),
(4, 'Братислава', 962, 3, '25,20', 'bratislava.png'),
(5, 'Брюксел ', 2113, 6, '50,40', 'bruksel.png'),
(6, 'Будапеща ', 768, 2, '16,80', 'budapeshta.png'),
(7, 'Букурещ', 357, 1, '8,40', 'bukuresht.png'),
(8, 'Валета', 1667, 5, '42', 'valeta.png'),
(9, 'Варшава ', 1630, 5, '42', 'varshava.png'),
(10, 'Виена ', 1004, 3, '25,20', 'viena.png'),
(11, 'Вилнюс ', 2113, 6, '50,40', 'vilnus.png'),
(12, 'Дъблин', 3091, 8, '67,20', 'dublin.png'),
(13, 'Загреб', 783, 2, '16,80', 'zagreb.png'),
(14, 'Копенхаген', 2068, 6, '50,40', 'kopenhagen.png'),
(15, 'Лисабон', 3532, 9, '75,60', 'lisabon.png'),
(16, 'Лондон ', 2487, 7, '58,80', 'london.png'),
(17, 'Любляна', 921, 3, '25,20', 'lublyana.png'),
(18, 'Люксембург', 1970, 5, '42', 'luksemburg.png'),
(19, 'Мадрид ', 2979, 8, '67,20', 'madrid.png'),
(20, 'Никозия', 1579, 4, '33,60', 'nikozia.png'),
(21, 'Париж ', 2171, 6, '50,40', 'paris.png'),
(22, 'Прага ', 1285, 4, '33,60', 'praga.png'),
(23, 'Рига', 2317, 6, '50,40', 'riga.png'),
(24, 'Рим  ', 1671, 5, '42', 'rome.png'),
(25, 'Стокхолм ', 2712, 7, '58,80', 'stockholme.png'),
(26, 'Талин', 2624, 7, '58,80', 'talin.png'),
(27, 'Хелзинки ', 2711, 7, '58,80', 'helzinki.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `name` text NOT NULL,
  `family` text NOT NULL,
  `mail` text NOT NULL,
  `profession` text NOT NULL,
  `car` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`name`, `family`, `mail`, `profession`, `car`) VALUES
('qw', 'q', 'mai@mail.bg', 'q', 'q'),
('qw', 'qw', 'mai1@mail.bg', 'qw', 'qw'),
('as', 'asd', 'asd@asds.ads', 'asd', 'asd'),
('12', '123', 'ma44i@mail.bg', '123', '123'),
('11', 'kl', 'mkjnai@mail.bg', 'jlk', 'kjl'),
('456', 'fhdfh', 'maigf@mail.bg', 'dhfd', 'dfhdfh'),
('asd', 'asd', 'as4d@asds.ads', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
