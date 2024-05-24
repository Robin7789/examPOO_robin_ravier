-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 mai 2024 à 08:30
-- Version du serveur : 8.2.0
-- Version de PHP : 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moto`
--

-- --------------------------------------------------------

--
-- Structure de la table `motos`
--

DROP TABLE IF EXISTS `motos`;
CREATE TABLE IF NOT EXISTS `motos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(250) NOT NULL,
  CONSTRAINT `chk_type` CHECK (
        (
            `type` in (
                _utf8mb4 'Enduro',
                _utf8mb4 'Custom',
                _utf8mb4 'Sportive',
                _utf8mb4 'Roadster'
            )
        )
    ),
  PRIMARY KEY (`id`)
) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
