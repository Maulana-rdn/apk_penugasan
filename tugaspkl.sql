-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 03:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaspkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin', 'admin123', 1),
(2, 'Wali Kelas', 'wakel', 'wakel123', 2),
(3, 'Muhamad Maulana Ramdani', 'maul', 'maul123', 3),
(4, 'Nurvara Adinda Khudzori', 'vara', 'vara123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` int(10) NOT NULL,
  `nis` int(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `id_login` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `tgl_lahir`, `jurusan`, `alamat`, `email`, `no_telp`, `id_login`, `foto`) VALUES
(1234567901, 12345678, 'Muhamad Maulana  Ramdani', '2003-11-12', 'Rekayasa Perangkat Lunak', 'Kp. Rawajamun RT 05/04', 'maulanaa@gmail.com', '088xxxx', 3, 'images (13).jpeg'),
(1234567902, 22345678, 'Nurvara Adinda Khudzori', '2004-04-20', 'Rekayasa Perangkat Lunak', 'Kp. Tipar RT03/04', 'varaa@gmail.com', '088xxxx', 4, 'images (13).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(11) NOT NULL,
  `id_wakel` int(11) NOT NULL,
  `nama_siswa` varchar(35) NOT NULL,
  `tugas` varchar(30) NOT NULL,
  `tgl_tuntas` date NOT NULL,
  `tgl_batas` date NOT NULL,
  `pai` varchar(255) NOT NULL,
  `indo` varchar(255) NOT NULL,
  `matematika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `id_wakel`, `nama_siswa`, `tugas`, `tgl_tuntas`, `tgl_batas`, `pai`, `indo`, `matematika`) VALUES
(1, 1, 'Muhamad Maulana Ramdani', 'Tuntas', '2021-09-06', '2021-09-30', 'Tuntas', 'Tuntas', 'Tuntas'),
(2, 1, 'Nurvara Adinda Khudzori', 'Belum Tuntas', '0000-00-00', '2021-09-30', 'Daring 5', 'Tuntas', 'Tuntas');

-- --------------------------------------------------------

--
-- Table structure for table `wakel`
--

CREATE TABLE `wakel` (
  `id_wakel` int(11) NOT NULL,
  `nama_wakel` varchar(35) NOT NULL,
  `id_login` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wakel`
--

INSERT INTO `wakel` (`id_wakel`, `nama_wakel`, `id_login`, `foto`) VALUES
(1, 'Maul', 2, 'images (13).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `nisn` (`nama_siswa`),
  ADD KEY `id_wakel` (`id_wakel`),
  ADD KEY `nisn_2` (`nama_siswa`);

--
-- Indexes for table `wakel`
--
ALTER TABLE `wakel`
  ADD PRIMARY KEY (`id_wakel`),
  ADD KEY `id_login` (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `nisn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567914;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wakel`
--
ALTER TABLE `wakel`
  MODIFY `id_wakel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
