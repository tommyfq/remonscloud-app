-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2018 at 12:00 PM
-- Server version: 5.7.13-log
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `remons`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_subs` int(11) NOT NULL,
  `tanggal_subs` date NOT NULL,
  `status_transaksi` varchar(50) NOT NULL,
  `jenis_payment` varchar(50) NOT NULL,
  `bukti_transfer` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `nama_role`) VALUES
(1, 'User'),
(688, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subs`
--

CREATE TABLE `tbl_subs` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `device` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subs`
--

INSERT INTO `tbl_subs` (`id`, `jenis`, `device`, `harga`) VALUES
(0, 'Tidak Subscribe', 0, 0),
(1, 'Subscribe 1', 5, 1000),
(2, 'Subscribe 2', 10, 2000),
(3, 'Subscribe 3', 20, 3000),
(688, 'Super Admin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `id_subs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `id_role`, `username`, `password`, `email`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `telepon`, `alamat`, `jenis_kelamin`, `id_subs`) VALUES
(1, 688, 'SuperAdmin', '21232f297a57a5a743894a0e4a801fc3', 'admin@duoms.id', 'Super', 'Admin', '1971-01-01', '0811111111111', 'Rumah Admin', 'L', 688),
(2, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', 'Admin', '-', '1991-09-20', '08111111111111', 'Rumah saya', 'P', 0),
(3, 1, 'richaer', '21232f297a57a5a743894a0e4a801fc3', 'richaer@admin.com', 'Richaer', 'Admin', '1995-06-28', '081213981141', 'Jl. Keadilan RT.01/06 No.34, Curug, Tangerang', 'L', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subs`
--
ALTER TABLE `tbl_subs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `id_subs` (`id_subs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=689;
--
-- AUTO_INCREMENT for table `tbl_subs`
--
ALTER TABLE `tbl_subs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=689;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `tbl_role` (`id`),
  ADD CONSTRAINT `tbl_user_ibfk_2` FOREIGN KEY (`id_subs`) REFERENCES `tbl_subs` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
