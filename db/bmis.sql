-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jan 2020 pada 07.01
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bmis`
--

CREATE TABLE `bmis` (
  `ID_BMI` int(11) NOT NULL,
  `USER_ID` int(10) UNSIGNED NOT NULL,
  `ID_KATEGORIS` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bmis`
--

INSERT INTO `bmis` (`ID_BMI`, `USER_ID`, `ID_KATEGORIS`, `nilai`, `DATE`) VALUES
(1, 2, 2, 23.4375, '2017-11-19'),
(2, 1, 3, 48.6111, '2017-11-19'),
(3, 2, 3, 29.3878, '2017-11-19'),
(4, 1, 2, 23.8754, '2017-11-21'),
(5, 1, 2, 24.2215, '2017-12-10'),
(6, 3, 2, 20.202, '2019-05-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmis`
--
ALTER TABLE `bmis`
  ADD PRIMARY KEY (`ID_BMI`),
  ADD KEY `FK_DIKATEGORIKAN` (`ID_KATEGORIS`),
  ADD KEY `FK_MEMILIKI` (`USER_ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmis`
--
ALTER TABLE `bmis`
  MODIFY `ID_BMI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bmis`
--
ALTER TABLE `bmis`
  ADD CONSTRAINT `FK_DIKATEGORIKAN` FOREIGN KEY (`ID_KATEGORIS`) REFERENCES `kategoris` (`ID_KATEGORIS`),
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
