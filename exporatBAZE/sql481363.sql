-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Хост: sql4.freesqldatabase.com
-- Время создания: Июн 22 2015 г., 20:45
-- Версия сервера: 5.5.43-0ubuntu0.12.04.1
-- Версия PHP: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sql481363`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(80) NOT NULL,
  `email_kontakt` varchar(80) NOT NULL,
  `web_site` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `naziv`, `email_kontakt`, `web_site`) VALUES
(1, 'maxfactor', 'maxfactor@factor.hr', 'www.maxfactor-russia.ru/'),
(2, 'mejbelin', 'pita@maybelline.hr', 'www.maybelline.com');

-- --------------------------------------------------------

--
-- Структура таблицы `korisnik`
--

CREATE TABLE IF NOT EXISTS `korisnik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `ime` varchar(80) NOT NULL,
  `prezime` varchar(80) NOT NULL,
  `lozinka` varchar(80) NOT NULL,
  `tip_korisnika_id` int(11) NOT NULL,
  `podton` varchar(80) NOT NULL,
  `tip_koze` varchar(80) NOT NULL,
  `ten` varchar(80) NOT NULL,
  `boja_ociju` varchar(80) NOT NULL,
  `velicina_ociju` varchar(80) NOT NULL,
  `nijansa_usana` varchar(80) NOT NULL,
  `nijansa_obrva` varchar(80) NOT NULL,
  `velicina_usana` varchar(80) NOT NULL,
  `duzina_trepavica` varchar(80) NOT NULL,
  `gustoca_trepavica` varchar(80) NOT NULL,
  `uvijenost_trepavica` varchar(80) NOT NULL,
  `nijansa_trepavica` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tip` (`tip_korisnika_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `korisnik`
--

INSERT INTO `korisnik` (`id`, `email`, `ime`, `prezime`, `lozinka`, `tip_korisnika_id`, `podton`, `tip_koze`, `ten`, `boja_ociju`, `velicina_ociju`, `nijansa_usana`, `nijansa_obrva`, `velicina_usana`, `duzina_trepavica`, `gustoca_trepavica`, `uvijenost_trepavica`, `nijansa_trepavica`) VALUES
(4, 'ananikolic@miliondolara.rs', 'Ana', 'Nikolic', 'a', 3, 'neutralni', 'normalna', 'topli', 'zelena', 'mala', '#ff0000', 'tamnoplava', 'normalna', 'normalna', 'gusta', 'uvijene', 'svjetla'),
(5, 'nikolija@niki.rs', 'Nikolija', 'Jovanovic', 'b', 1, 'rozi', 'normalna', 'hladni', '', '', '#80ffff', 'svjetlosmedja', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `kozmeticki_proizvod`
--

CREATE TABLE IF NOT EXISTS `kozmeticki_proizvod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL,
  `tip_proizvoda_id` int(11) NOT NULL,
  `naziv` varchar(80) NOT NULL,
  `cijena` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `trajnost` int(11) NOT NULL,
  `url_slika` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`,`tip_proizvoda_id`),
  KEY `tip_proizvoda_id` (`tip_proizvoda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Дамп данных таблицы `kozmeticki_proizvod`
--

INSERT INTO `kozmeticki_proizvod` (`id`, `brand_id`, `tip_proizvoda_id`, `naziv`, `cijena`, `kolicina`, `trajnost`, `url_slika`) VALUES
(2, 1, 1, 'Accentuatore', 34, 3, 3, 'img/no_pic.jpg'),
(3, 1, 1, 'Naglasavac 44', 4, 13, 13, 'img/no_pic.jpg'),
(5, 1, 1, 'Eyebrowz', 4, 4, 4, 'img/no_pic.jpg'),
(6, 1, 1, 'Obrvissimus', 5, 5, 6, 'img/no_pic.jpg'),
(7, 1, 1, 'Obrverio obrvini', 4, 4, 5, 'img/no_pic.jpg'),
(8, 1, 2, 'lashez', 5, 5, 5, 'img/no_pic.jpg'),
(9, 2, 1, 'Obrverio obrvilijani', 500, 400, 55, 'img/no_pic.jpg'),
(10, 1, 1, 'Eyebrow lashes', 55, 2, 66, 'img/no_pic.jpg'),
(11, 1, 2, 'Eyelashes 300', 555, 5, 44, 'img/no_pic.jpg'),
(12, 1, 2, 'Eyelashes500', 44, 44, 44, 'img/no_pic.jpg'),
(13, 1, 3, 'Facial Cream 333', 44, 55, 44, 'img/no_pic.jpg'),
(14, 1, 4, 'Eyes Chacha', 700, 7, 55, 'img/no_pic.jpg'),
(15, 1, 1, 'Eyebrows Machine 400', 600, 6, 7, 'img/no_pic.jpg'),
(16, 1, 4, 'Max factor Bezobrazno zelene', 400, 200, 6, 'img/no_pic.jpg'),
(17, 2, 5, 'Lip Gloss MB', 200, 2, 44, 'img/no_pic.jpg'),
(18, 1, 5, 'Lip Gloss', 300, 3, 22, 'img/no_pic.jpg'),
(19, 1, 4, 'Oci plave cela mi mladost ostade tu', 222, 2, 12, 'img/Oci plave cela mi mladost ostade tu.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `kozmetika_lice`
--

CREATE TABLE IF NOT EXISTS `kozmetika_lice` (
  `kozmeticki_proizvod_id` int(11) NOT NULL,
  `podton` varchar(80) NOT NULL,
  `tip_koze` varchar(80) NOT NULL,
  `ten` varchar(80) NOT NULL,
  `nijansa` varchar(80) NOT NULL,
  KEY `kozmeticki_proizvod_id` (`kozmeticki_proizvod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `kozmetika_lice`
--

INSERT INTO `kozmetika_lice` (`kozmeticki_proizvod_id`, `podton`, `tip_koze`, `ten`, `nijansa`) VALUES
(13, 'neutralni', 'suha', 'topli', '#1b0d93');

-- --------------------------------------------------------

--
-- Структура таблицы `kozmetika_obrve`
--

CREATE TABLE IF NOT EXISTS `kozmetika_obrve` (
  `kozmeticki_proizvod_id` int(11) NOT NULL,
  `nijansa_obrva` varchar(80) NOT NULL,
  `nijansa` varchar(80) NOT NULL,
  KEY `kozmeticki_proizvod_id` (`kozmeticki_proizvod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `kozmetika_obrve`
--

INSERT INTO `kozmetika_obrve` (`kozmeticki_proizvod_id`, `nijansa_obrva`, `nijansa`) VALUES
(2, 'svjetlosmedja', '#249b7a'),
(3, 'tamnoplava', '#0000a0'),
(5, 'svjetlosmedja', '#8080ff'),
(6, 'svjetlosmedja', '#000000'),
(7, 'tamnosmedja', '#000000'),
(9, 'svjetlosmedja', '#000000'),
(10, 'tamnosmedja', '#bf7bfd'),
(15, 'svjetlosmedja', '#8080c0');

-- --------------------------------------------------------

--
-- Структура таблицы `kozmetika_oci`
--

CREATE TABLE IF NOT EXISTS `kozmetika_oci` (
  `kozmeticki_proizvod_id` int(11) NOT NULL,
  `boja_ociju` varchar(80) NOT NULL,
  `velicina_ociju` varchar(80) NOT NULL,
  `nijansa` varchar(80) NOT NULL,
  KEY `kozmeticki_proizvod_id` (`kozmeticki_proizvod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `kozmetika_oci`
--

INSERT INTO `kozmetika_oci` (`kozmeticki_proizvod_id`, `boja_ociju`, `velicina_ociju`, `nijansa`) VALUES
(14, 'zelena', 'mala', '#800080'),
(16, 'smedja', 'mala', '#ff00ff'),
(19, 'plava', 'mala', '#3aa3ef');

-- --------------------------------------------------------

--
-- Структура таблицы `kozmetika_trepavice`
--

CREATE TABLE IF NOT EXISTS `kozmetika_trepavice` (
  `kozmeticki_proizvod_id` int(11) NOT NULL,
  `nijansa_trepavica` varchar(80) NOT NULL,
  `duzina_trepavica` varchar(80) NOT NULL,
  `gustoca_trepavica` varchar(80) NOT NULL,
  `uvijenost_trepavica` varchar(80) NOT NULL,
  `trusenje` varchar(80) NOT NULL,
  KEY `kozmeticki_proizvod_id` (`kozmeticki_proizvod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `kozmetika_trepavice`
--

INSERT INTO `kozmetika_trepavice` (`kozmeticki_proizvod_id`, `nijansa_trepavica`, `duzina_trepavica`, `gustoca_trepavica`, `uvijenost_trepavica`, `trusenje`) VALUES
(11, 'tamna', 'kratka', 'gusta', 'neuvijene', 'da'),
(12, 'svjetla', 'normalna', 'rijetka', 'uvijene', 'da');

-- --------------------------------------------------------

--
-- Структура таблицы `kozmetika_usne`
--

CREATE TABLE IF NOT EXISTS `kozmetika_usne` (
  `kozmeticki_proizvod_id` int(11) NOT NULL,
  `velicina_usana` varchar(80) NOT NULL,
  `nijansa` varchar(80) NOT NULL,
  KEY `kozmeticki_proizvod_id` (`kozmeticki_proizvod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `kozmetika_usne`
--

INSERT INTO `kozmetika_usne` (`kozmeticki_proizvod_id`, `velicina_usana`, `nijansa`) VALUES
(18, 'normalna', '#400040');

-- --------------------------------------------------------

--
-- Структура таблицы `ocjena`
--

CREATE TABLE IF NOT EXISTS `ocjena` (
  `kozmeticki_proizvod_id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `ocjena` int(11) NOT NULL,
  PRIMARY KEY (`kozmeticki_proizvod_id`,`korisnik_id`),
  KEY `korisnik_id` (`korisnik_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `ocjena`
--

INSERT INTO `ocjena` (`kozmeticki_proizvod_id`, `korisnik_id`, `ocjena`) VALUES
(2, 4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `pretraga`
--

CREATE TABLE IF NOT EXISTS `pretraga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `korisnik_id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `cijena` int(11) NOT NULL,
  `id_tip` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `korisnik_id` (`korisnik_id`,`brand_id`,`id_tip`),
  KEY `brand_id` (`brand_id`),
  KEY `id_tip` (`id_tip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `pretraga`
--

INSERT INTO `pretraga` (`id`, `korisnik_id`, `brand_id`, `cijena`, `id_tip`) VALUES
(4, 4, NULL, 4, 1),
(5, 4, NULL, 4, 1),
(6, 4, 1, 4, 1),
(7, 4, 1, 4, 1),
(8, 4, NULL, 44, 3),
(9, 4, NULL, 44, 3),
(10, 4, 1, 44, 3),
(11, 4, NULL, 4, 1),
(12, 4, 1, 44, 3),
(13, 4, NULL, 300, 5),
(14, 4, NULL, 700, 4),
(15, 4, NULL, 400, 4),
(16, 4, NULL, 222, 4),
(17, 5, NULL, 34, 1),
(18, 5, NULL, 4, 1),
(19, 5, NULL, 5, 1),
(20, 5, NULL, 500, 1),
(21, 5, NULL, 600, 1),
(22, 5, 1, 34, 1),
(23, 5, 1, 4, 1),
(24, 5, 1, 5, 1),
(25, 5, 1, 600, 1),
(26, 5, NULL, 34, 1),
(27, 5, NULL, 4, 1),
(28, 5, NULL, 5, 1),
(29, 5, NULL, 500, 1),
(30, 5, NULL, 600, 1),
(31, 5, 1, 34, 1),
(32, 5, 1, 4, 1),
(33, 5, 1, 5, 1),
(34, 5, 1, 600, 1),
(35, 5, NULL, 34, 1),
(36, 5, NULL, 4, 1),
(37, 5, NULL, 5, 1),
(38, 5, NULL, 500, 1),
(39, 5, NULL, 600, 1),
(40, 4, NULL, 4, 1),
(41, 4, NULL, 4, 1),
(42, 4, NULL, 44, 3),
(43, 4, NULL, 44, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `tip_korisnika`
--

CREATE TABLE IF NOT EXISTS `tip_korisnika` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(80) NOT NULL,
  `opis` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `tip_korisnika`
--

INSERT INTO `tip_korisnika` (`id`, `naziv`, `opis`) VALUES
(1, 'obicni korisnik', 'obicni,registrirani korisnik'),
(2, 'mod', 'moderator je zaposlenik'),
(3, 'admin', 'administrator je najvisi tip korisnika, sa najvecim ovlastima');

-- --------------------------------------------------------

--
-- Структура таблицы `tip_proizvoda`
--

CREATE TABLE IF NOT EXISTS `tip_proizvoda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(80) NOT NULL,
  `opis` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `tip_proizvoda`
--

INSERT INTO `tip_proizvoda` (`id`, `naziv`, `opis`) VALUES
(1, 'kozmetika za obrve', 'u tvome dahu ima nesto sto pomera sat'),
(2, 'kozmetika za trepavice', 'kozmetika za trepavice'),
(3, 'kozmetika za lice', 'licna'),
(4, 'kozmetika za oci', 'ocna'),
(5, 'kozmetika za usne', 'usnasta');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `korisnik`
--
ALTER TABLE `korisnik`
  ADD CONSTRAINT `korisnik_ibfk_1` FOREIGN KEY (`tip_korisnika_id`) REFERENCES `tip_korisnika` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `kozmeticki_proizvod`
--
ALTER TABLE `kozmeticki_proizvod`
  ADD CONSTRAINT `kozmeticki_proizvod_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kozmeticki_proizvod_ibfk_2` FOREIGN KEY (`tip_proizvoda_id`) REFERENCES `tip_proizvoda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `kozmetika_lice`
--
ALTER TABLE `kozmetika_lice`
  ADD CONSTRAINT `kozmetika_lice_ibfk_1` FOREIGN KEY (`kozmeticki_proizvod_id`) REFERENCES `kozmeticki_proizvod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `kozmetika_obrve`
--
ALTER TABLE `kozmetika_obrve`
  ADD CONSTRAINT `kozmetika_obrve_ibfk_1` FOREIGN KEY (`kozmeticki_proizvod_id`) REFERENCES `kozmeticki_proizvod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `kozmetika_oci`
--
ALTER TABLE `kozmetika_oci`
  ADD CONSTRAINT `kozmetika_oci_ibfk_1` FOREIGN KEY (`kozmeticki_proizvod_id`) REFERENCES `kozmeticki_proizvod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `kozmetika_trepavice`
--
ALTER TABLE `kozmetika_trepavice`
  ADD CONSTRAINT `kozmetika_trepavice_ibfk_1` FOREIGN KEY (`kozmeticki_proizvod_id`) REFERENCES `kozmeticki_proizvod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `kozmetika_usne`
--
ALTER TABLE `kozmetika_usne`
  ADD CONSTRAINT `kozmetika_usne_ibfk_1` FOREIGN KEY (`kozmeticki_proizvod_id`) REFERENCES `kozmeticki_proizvod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `ocjena`
--
ALTER TABLE `ocjena`
  ADD CONSTRAINT `ocjena_ibfk_1` FOREIGN KEY (`kozmeticki_proizvod_id`) REFERENCES `kozmeticki_proizvod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ocjena_ibfk_2` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `pretraga`
--
ALTER TABLE `pretraga`
  ADD CONSTRAINT `pretraga_ibfk_1` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pretraga_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pretraga_ibfk_3` FOREIGN KEY (`id_tip`) REFERENCES `tip_proizvoda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
