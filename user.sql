-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: sept. 04, 2024 la 05:59 PM
-- Versiune server: 8.3.0
-- Versiune PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `user`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) COLLATE utf8mb3_swedish_ci NOT NULL,
  `date` datetime NOT NULL,
  `message` text COLLATE utf8mb3_swedish_ci NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=3563 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Eliminarea datelor din tabel `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`) VALUES
(3562, 'Comment', '2024-09-03 23:29:24', 'This is the first comment. Try to edit me . ');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `uid` varchar(127) COLLATE utf8mb3_swedish_ci NOT NULL,
  `article` text CHARACTER SET utf8mb3 COLLATE utf8mb3_swedish_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Eliminarea datelor din tabel `post`
--

INSERT INTO `post` (`cid`, `uid`, `article`, `date`) VALUES
(71, 'Article', 'România este un stat situat în sud-estul Europei Centrale, pe cursul inferior al Dunării, la nord de peninsula Balcanică și la țărmul nord-vestic al Mării Negre.[8] România este plasată geografic și în Europa de Est, Europa de Sud-Est respectiv parțial în Europa Centrală. Din punct de vedere geopolitic, România este un stat situat în Europa Centrală și de Est iar din punct de vedere cultural se încadrează parțial în conceptul de „Mitteleuropa” (i.e., Europa de mijloc sau Europa Centrală în limba germană) prin regiunile istorice Transilvania, Banat și Bucovina. Pe teritoriul ei este situată aproape toată suprafața Deltei Dunării și partea sudică și centrală a Munților Carpați. Se învecinează cu Bulgaria la sud, Serbia la sud-vest, Ungaria la nord-vest, Ucraina la nord și est și Republica Moldova la est, iar țărmul Mării Negre se găsește la sud-est.\r\n\r\nDe-a lungul istoriei, diferite porțiuni ale teritoriului de astăzi al României au fost în componența sau sub administrația Daciei, grecilor pontici (e.g., Histria, Tomis și Callatis), Imperiului Roman, Imperiului Roman de Răsărit (sau Imperiul Bizantin), Republicii Genova (i.e., coloniile genoveze din România), Republicii Venețiene (i.e., anumite colonii comerciale precum San Giorgio/Giurgiu și Barilla/Brăila) Imperiului Otoman, Imperiului Rus, Imperiul Habsburgic/Imperiului Austriac și, respectiv, Austro-Ungariei.\r\n\r\nRomânia a apărut ca stat, condus de Domnitorul Alexandru Ioan Cuza, în 1859, prin unirea dintre Moldova și Țara Românească, păstrând autonomia și statutul de stat tributar față de Imperiul Otoman, pe care-l aveau cele două principate. A fost recunoscută ca țară independentă 19 ani mai târziu. În 1918, în urma Primului Război Mondial, Transilvania, Banatul, Bucovina și Basarabia s-au unit cu Vechiul Regat formând România Mare sau România interbelică, care a avut cea mai mare extindere teritorială din istoria României (mai precis 295.641 km2).\r\n\r\nÎn timpul celui de-Al Doilea Război Mondial (în 1940), România Mare (i.e., Regatul României extins după 1918), sub presiunea Germaniei Naziste, a cedat teritorii Ungariei (nord-estul Transilvaniei), Bulgariei (Cadrilaterul) și Uniunii Sovietice (Basarabia, Herța și Bucovina de Nord). După abolirea dictaturii lui Antonescu la 23 august 1944, România s-a retras din alianța cu Puterile Axei, trecând de partea Puterilor Aliate (Regatul Unit, Statele Unite, Franța și Uniunea Sovietică). Prin Tratatul de pace de la Paris semnat la 10 februarie 1947, din teritoriile cedate ale fostei Românii Mari, a fost recuperat Transilvania de Nord.', '2024-09-03');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` varchar(128) COLLATE utf8mb3_swedish_ci NOT NULL,
  `pwd` varchar(128) COLLATE utf8mb3_swedish_ci NOT NULL,
  `articol` text COLLATE utf8mb3_swedish_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_swedish_ci;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `uid`, `pwd`, `articol`, `date`) VALUES
(15, 'Ilin', '1234', '', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
