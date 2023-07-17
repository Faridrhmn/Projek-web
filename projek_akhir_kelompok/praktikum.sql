-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 07:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `id_user`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_roti`
--

CREATE TABLE `data_roti` (
  `nama_roti` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `id_roti` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_roti`
--

INSERT INTO `data_roti` (`nama_roti`, `harga`, `id_roti`) VALUES
('Rasberry Cake', 30000, 3),
('Chocolate Cake', 25000, 4),
('Brownies', 12000, 9),
('Biskuit', 10000, 12),
('Cupcake', 15000, 13);

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `jenis` varchar(20) NOT NULL,
  `biaya` int(10) NOT NULL,
  `id_eks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekspedisi`
--

INSERT INTO `ekspedisi` (`jenis`, `biaya`, `id_eks`) VALUES
('JNE', 14000, 1),
('JNT', 15000, 2),
('SiCepat', 12000, 3),
('SiEmens', 20000, 4),
('Cargo', 18000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `mk` varchar(50) NOT NULL,
  `jurusan` varchar(2) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `mk`, `jurusan`, `id_lab`, `id_waktu`) VALUES
(1, 'Sturktur Data', 'IF', 12, 1),
(2, 'Arduino', 'IF', 12, 1),
(4, 'AI', 'IF', 12, 1),
(5, 'Game Dev', '', 23, 1),
(7, 'YOKA', 'IF', 12, 1),
(8, 'RO', 'IF', 12, 1),
(9, 'resr', 'IF', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id_lab` int(11) NOT NULL,
  `lab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id_lab`, `lab`) VALUES
(12, 'Basis Data'),
(13, 'IoT'),
(14, 'Fisika'),
(15, 'Kimia'),
(16, 'Biologi'),
(17, 'Geografi'),
(18, 'Matematika'),
(19, 'Informatika'),
(20, 'IMK'),
(27, 'Elektronika');

-- --------------------------------------------------------

--
-- Table structure for table `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `kategori` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `id_metode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_bayar`
--

INSERT INTO `metode_bayar` (`kategori`, `harga`, `id_metode`) VALUES
('BNI', 1000, 1),
('Mandiri', 1500, 2),
('Dana', 500, 3),
('BRI', 2000, 4),
('BCA', 2500, 5),
('Paypal', 5000, 6),
('BSI', 1000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `rekap`
--

CREATE TABLE `rekap` (
  `tanggal` date NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `nama_roti` varchar(20) NOT NULL,
  `total_biaya` int(15) NOT NULL,
  `id_rekap` int(5) NOT NULL,
  `id_struk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `struk`
--

CREATE TABLE `struk` (
  `nama_pelanggan` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `total_biaya` int(15) NOT NULL,
  `id_struk` int(5) NOT NULL,
  `id_eks` int(5) NOT NULL,
  `id_metode` int(5) NOT NULL,
  `id_roti` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struk`
--

INSERT INTO `struk` (`nama_pelanggan`, `jumlah`, `total_biaya`, `id_struk`, `id_eks`, `id_metode`, `id_roti`) VALUES
('udin', 3, 90000, 1, 1, 4, 9),
('qe', 8, 100, 9, 3, 2, 4),
('sedunia', 5, 45500, 10, 2, 3, 3),
('Eko', 8, 34500, 11, 5, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'user', 'user'),
(2, 'admin', 'admin'),
(3, 'test', 'test'),
(4, 'test', 'test'),
(5, 'test', 'test'),
(6, 'test', 'test'),
(8, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu_mulai`, `waktu_selesai`) VALUES
(1, '09:00:00', '12:00:00'),
(2, '13:00:00', '15:00:00'),
(3, '07:00:00', '10:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `data_roti`
--
ALTER TABLE `data_roti`
  ADD PRIMARY KEY (`id_roti`);

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`id_eks`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indexes for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id_rekap`),
  ADD KEY `id_struk` (`id_struk`);

--
-- Indexes for table `struk`
--
ALTER TABLE `struk`
  ADD PRIMARY KEY (`id_struk`),
  ADD KEY `id_eks` (`id_eks`),
  ADD KEY `id_metode` (`id_metode`),
  ADD KEY `id_roti` (`id_roti`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_roti`
--
ALTER TABLE `data_roti`
  MODIFY `id_roti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  MODIFY `id_eks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id_rekap` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `struk`
--
ALTER TABLE `struk`
  MODIFY `id_struk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `struk`
--
ALTER TABLE `struk`
  ADD CONSTRAINT `struk_ibfk_1` FOREIGN KEY (`id_metode`) REFERENCES `metode_bayar` (`id_metode`),
  ADD CONSTRAINT `struk_ibfk_2` FOREIGN KEY (`id_eks`) REFERENCES `ekspedisi` (`id_eks`),
  ADD CONSTRAINT `struk_ibfk_3` FOREIGN KEY (`id_roti`) REFERENCES `data_roti` (`id_roti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
