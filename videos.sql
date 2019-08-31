-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 06:33 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kino`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(255) NOT NULL,
  `country` varchar(80) NOT NULL,
  `cat` varchar(11) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `year` varchar(20) NOT NULL,
  `quality` varchar(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `trailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `description`, `country`, `cat`, `pic`, `year`, `quality`, `code`, `trailer`) VALUES
(2, 'ԽԱՂ ԻՄ ԿԱՆՈՆՆԵՐՈՎ - XAX IM KANONNEROV', 'Ռոմանտիկ ԿԻՆՈԿԱՏԱԿԵՐԳՈՒԹՅՈՒՆ\r\nՌեժիսոր՝ Միքայել Բագրազյան\r\nԳլխավոր Պրոդյուսեր՝Սարգիս Սեպուհյան\r\nԳլխավոր դերերում՝\r\nԱՆԻ ԵՐԱՆՅԱՆ, ՄՈՎՍԵՍ ԵՐԵՄՅԱՆ, ԱՐԹՈՒՐ ՊԵՏՐՈՍՅԱՆ, ԼԻԱ ԶԱԽԱՐՅԱՆ, ՀԱՅԿ ԱՎԱԳՅԱՆ, ԱՐԹՈՒՐ ՍԱՀԱԿՅԱՆ', '2', '4', '2019-08-31-17-48-23-Без названия.jpg', '2014', '3', 'https://www.youtube.com/embed/ywgwcE5b-8s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'https://www.youtube.com/embed/xeiH8T2_E_c\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'),
(3, 'Poker.Am', '«Poker.Am»-ը հայկական սուր ու լարված սյուժեով կատակերգություն է, որի պրեմիերան տեղի է ունեցել 2012 թվականին։ Ֆիլմը հայերեն լեզվով է՝ ռուսերեն և անգլերեն լուսագրերով։ Այն կրկնօրինակված է նաև վրացերեն և ռուսերեն։', '2', '4', '2019-08-31-17-52-51-Poker_ֆիլմ.jpg', '2012', '3', 'https://www.youtube.com/embed/zBeY388FWMs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'https://www.youtube.com/embed/sP4JfUY7PTg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'),
(4, 'Դե Տժժա - De Tjja', 'Թվում է, թե «արգելված պտուղը քաղցր է» տարբերակով իր գովազդային արշավն արած ֆիլմը կլինի ծայրից ծայր վուլգար ու տհաճ դիտման համար, բայց սա ընդամենը թվում է: Սաստիկ կինոկատակերգություն դիրքավորված ֆիլմում միակ բանը, որ սաստիկ էր, դա հումորն էր, որը ստիպում է', '2', '4', '2019-08-31-18-08-42-Без названия (1).jpg', '2016', '4', 'https://www.youtube.com/embed/k17pM6GjIWs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'https://www.youtube.com/embed/4X3zA8oJbyY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'),
(5, 'Հյուսիս-Հարավ / Hyusis-Harav', 'Ֆիլմի հիմքում 4 տղայի ընկերությունն է. նրանցից մեկը փորձանքի մեջ է ընկնում, իսկ ընկերներն օգնում են «ջրից չոր դուրս գալ»:\r\nԿրտսեր գիտաշխատող Նվերը, մասնագիտական պատվեր ստանալով, մեծահարուստ Լամբերտ Խաչատուրովիչից, որոշում է օգտվել առիթից և ընկերների համար', '2', '4', '2019-08-31-18-11-30-Без названия (2).jpg', '2015', '3', 'https://www.youtube.com/embed/37gI5M3AId0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'https://www.youtube.com/embed/iYSXXbo6MpM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture'),
(6, 'Siro Gorcakic /Սիրո Գործակից', 'Երկու ընկերներ, որոնք ունեն համատեղ բիզնես, որոշում են գումար հայթայթել այն փրկելու համար։ Նրանք որոշում են անելանելի դրությունից դուրս գալու համար դիմել կանացի թենիսի մրցախաղին առնչվող խարդախության։ Թենիսիստուհիներից մեկին սիրահարված հերոսին, սակայն, ուզ', '2', '4', '2019-08-31-18-15-43-Без названия (3).jpg', '2015', '4', 'https://www.youtube.com/embed/7jVbGbpE97Y\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture', 'https://www.youtube.com/embed/Qjc-ymP2ryQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
