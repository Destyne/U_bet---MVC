-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2017 at 05:16 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_bet`
--

-- --------------------------------------------------------

--
-- Table structure for table `evenements`
--

CREATE TABLE `evenements` (
  `id` int(11) NOT NULL,
  `nom_ev` varchar(50) CHARACTER SET utf8 NOT NULL,
  `team1` varchar(25) CHARACTER SET utf8 NOT NULL,
  `team2` varchar(25) CHARACTER SET utf8 NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `miseA` int(11) NOT NULL DEFAULT '1',
  `miseB` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evenements`
--

INSERT INTO `evenements` (`id`, `nom_ev`, `team1`, `team2`, `date_deb`, `date_fin`, `miseA`, `miseB`) VALUES
(55, 'Competition mondial', 'Tiger', 'Lion', '2017-09-26', '2017-10-01', 500, 51);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `login` text COLLATE utf8_bin NOT NULL,
  `pwd` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `date_inscription` date NOT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `status`, `login`, `pwd`, `email`, `date_inscription`, `token`) VALUES
(4, NULL, 'alexlepd', '9c8a202ca0a3db4e2ed1a3572739ba9f3eae17a0', 'alexleconnard@jotmail.fr', '0000-00-00', 0),
(5, NULL, 'cocodugetto', 'b8eb147caa2b8d8053c276a952401c40ade0fcda', 'corentin.coquen@epitech.eu', '0000-00-00', 0),
(8, NULL, 'blabla', '74b68e218aabdf8eb6f1086d024d975daa3a2bb9', 'lebret08@hotmail.fr', '0000-00-00', 0),
(9, 1, 'tortank', '669f3cbc46caf18664fb7f98dffe2c6f96bf0802', 'admin@exemple.com', '0000-00-00', 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
