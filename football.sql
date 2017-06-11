-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2017 at 03:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `ID_CLUB` int(11) NOT NULL,
  `ID_FORMASI` int(11) DEFAULT NULL,
  `ID_LOGO` varchar(12) DEFAULT NULL,
  `NAMA_CLUB` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formasi`
--

CREATE TABLE `formasi` (
  `ID_FORMASI` int(11) NOT NULL,
  `BELAKANG` int(11) NOT NULL,
  `TENGAH` int(11) NOT NULL,
  `DEPAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `ID_LOGO` varchar(12) NOT NULL,
  `ID_CLUB` int(11) DEFAULT NULL,
  `NAMAFILE` varchar(100) DEFAULT NULL,
  `SIZEFILE` int(11) DEFAULT NULL,
  `TIPEFILE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `ID_PEMAIN` varchar(12) NOT NULL,
  `ID_CLUB` int(11) DEFAULT NULL,
  `NAMA_PEMAIN` varchar(50) NOT NULL,
  `NO_PUNGGUNG` int(11) NOT NULL,
  `POSISI` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `ID_PERTANDIGAN` int(11) NOT NULL,
  `NAMA_PERTANDINGAN` varchar(30) NOT NULL,
  `NAMA_STADION` varchar(20) NOT NULL,
  `TANGGAL_PERTANDINGAN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `ID_CLUB` int(11) NOT NULL,
  `ID_PERTANDIGAN` int(11) NOT NULL,
  `STATUS` char(4) DEFAULT NULL,
  `SCORES` int(11) NOT NULL,
  `POSSESION` int(11) NOT NULL,
  `SHOTS` int(11) NOT NULL,
  `FOULS` int(11) NOT NULL,
  `CORNER_KICKS` int(11) NOT NULL,
  `FREE_KICKS` int(11) NOT NULL,
  `PASS_COMPLETED` int(11) NOT NULL,
  `CROSSES` int(11) NOT NULL,
  `INTERCEPTIONS` int(11) NOT NULL,
  `TACKLES` int(11) NOT NULL,
  `SAVE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$HW8R/5HYfS7HIwFuY0fht.41WBWBNWNmBa4M9hiIoTY/Z7LgL3wdC', 'sOQuPEdWYacasPpJJOGnAYxEAB6axeJbQGlzUzz9TZcpcyhcAgBvphSUzfoT', '2017-06-11 05:16:33', '2017-06-11 05:16:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`ID_CLUB`),
  ADD KEY `FK_MEMPUNYAI` (`ID_FORMASI`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_LOGO`);

--
-- Indexes for table `formasi`
--
ALTER TABLE `formasi`
  ADD PRIMARY KEY (`ID_FORMASI`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`ID_LOGO`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_CLUB`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`ID_PEMAIN`),
  ADD KEY `FK_MEMILIKI` (`ID_CLUB`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`ID_PERTANDIGAN`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`ID_CLUB`,`ID_PERTANDIGAN`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_PERTANDIGAN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_FORMASI`) REFERENCES `formasi` (`ID_FORMASI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_LOGO`) REFERENCES `logo` (`ID_LOGO`);

--
-- Constraints for table `logo`
--
ALTER TABLE `logo`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_CLUB`) REFERENCES `club` (`ID_CLUB`);

--
-- Constraints for table `pemain`
--
ALTER TABLE `pemain`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_CLUB`) REFERENCES `club` (`ID_CLUB`) ON DELETE SET NULL;

--
-- Constraints for table `statistik`
--
ALTER TABLE `statistik`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_CLUB`) REFERENCES `club` (`ID_CLUB`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_PERTANDIGAN`) REFERENCES `pertandingan` (`ID_PERTANDIGAN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
