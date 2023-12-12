-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2023 at 11:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(5) NOT NULL,
  `id_ibu` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `id_ibu`, `nama`, `tgl_lahir`, `jenis_kelamin`) VALUES
(3, 3, 'Rehan Putra', '2023-11-03', 'L'),
(4, 9, 'Damar Aji', '2023-11-04', 'L'),
(5, 10, 'Key Bings', '2023-11-04', 'P'),
(6, 11, 'Marina Putri', '2023-11-01', 'P'),
(10, 9, 'Satin Zaneta', '2023-11-01', 'P'),
(11, 8, 'Bagas Dewangga', '2023-11-04', 'L'),
(14, 25, 'Arvhie Putra', '2023-11-01', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id_ibu` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ibu`
--

INSERT INTO `ibu` (`id_ibu`, `nama`, `tgl_lahir`, `no_telp`, `alamat`) VALUES
(3, 'Wulan', '1981-02-17', '086755657865', 'Jl. Kodam Raya No. 2 Bandung '),
(8, 'Darminah', '1980-07-10', '09878776767', 'Jl. Kodam Raya No. 3 Bandung '),
(9, 'Sarah Wijaya', '1984-06-05', '08767776567', 'Jl. Pundung No. 15 Bandung'),
(10, 'Siti Maimunah', '1985-07-19', '0988876565', 'Jl. Sutomo, Bandung Selatan'),
(11, 'Shita', '1981-06-10', '0876555676', 'Jl. Bunda, No. 60, Bandung'),
(24, 'Almira P', '2023-11-23', '0876777676', 'Jl. Ngringin, No. 23 Bandung Selatan'),
(25, 'Maya', '1977-02-24', '08786667877', 'Jl. Padjajaran, No. 1 Bandung Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(5) NOT NULL,
  `id_anak` int(5) NOT NULL,
  `id_petugas` int(5) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `imunisasi` varchar(200) NOT NULL,
  `deteksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `id_anak`, `id_petugas`, `tgl_imunisasi`, `imunisasi`, `deteksi`) VALUES
(1, 11, 3, '2023-11-16', 'DPT-HB-Hib 1 Polio 2', 'Tidak Ada'),
(3, 3, 3, '2023-11-17', ' Campak', 'Tidak Ada'),
(4, 4, 5, '2023-11-14', 'BCG Polio 1', 'Tidak Ada'),
(5, 5, 1, '2023-11-23', 'BCG Polio 1', 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `mpasi`
--

CREATE TABLE `mpasi` (
  `id_mpasi` int(5) NOT NULL,
  `id_pertumbuhan` int(5) NOT NULL,
  `menu_utama` varchar(100) NOT NULL,
  `snack` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id_penimbangan` int(5) NOT NULL,
  `id_anak` int(5) NOT NULL,
  `id_petugas` int(5) NOT NULL,
  `tgl_penimbangan` date NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `deteksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penimbangan`
--

INSERT INTO `penimbangan` (`id_penimbangan`, `id_anak`, `id_petugas`, `tgl_penimbangan`, `berat_badan`, `tinggi_badan`, `deteksi`) VALUES
(1, 3, 3, '2023-11-02', 10, 60, 'Tidak Ada'),
(2, 4, 3, '2023-11-03', 12, 77, 'Tidak Ada'),
(5, 5, 2, '2023-11-11', 12, 77, 'Tidak Ada'),
(6, 14, 1, '2023-11-23', 9, 19, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhan`
--

CREATE TABLE `pertumbuhan` (
  `id_pertumbuhan` int(5) NOT NULL,
  `id_penimbangan` int(5) NOT NULL,
  `id_imunisasi` int(5) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `id_anak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertumbuhan`
--

INSERT INTO `pertumbuhan` (`id_pertumbuhan`, `id_penimbangan`, `id_imunisasi`, `tgl_periksa`, `keterangan`, `id_anak`) VALUES
(3, 1, 3, '2023-11-16', 'Tidak Ada', 3),
(4, 5, 5, '2023-11-23', 'Tidak Ada', 5);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'Renna', 'Jl. Kantil No. 368 Bandung', '08656664567'),
(2, 'Putri Ayu', 'Jl. Padjajaran, Bandung Selatan', '08767776543'),
(3, 'Mega Dwi Anisa', 'Jl. Kusuma Raya, Bandung', '08675554211'),
(5, 'Tasya Alvi', 'Jl. Kuningan, No. 3 Bandung', '0987666676');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` int(5) NOT NULL,
  `userName` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`),
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `mpasi`
--
ALTER TABLE `mpasi`
  ADD PRIMARY KEY (`id_mpasi`),
  ADD KEY `id_pertumbuhan` (`id_pertumbuhan`);

--
-- Indexes for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`),
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  ADD PRIMARY KEY (`id_pertumbuhan`),
  ADD KEY `id_penimbangan` (`id_penimbangan`),
  ADD KEY `id_imunisasi` (`id_imunisasi`),
  ADD KEY `id_anak` (`id_anak`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mpasi`
--
ALTER TABLE `mpasi`
  MODIFY `id_mpasi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id_penimbangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  MODIFY `id_pertumbuhan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `idAdmin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `imunisasi_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `imunisasi_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `mpasi`
--
ALTER TABLE `mpasi`
  ADD CONSTRAINT `mpasi_ibfk_1` FOREIGN KEY (`id_pertumbuhan`) REFERENCES `pertumbuhan` (`id_pertumbuhan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD CONSTRAINT `penimbangan_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `penimbangan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pertumbuhan`
--
ALTER TABLE `pertumbuhan`
  ADD CONSTRAINT `pertumbuhan_ibfk_1` FOREIGN KEY (`id_penimbangan`) REFERENCES `penimbangan` (`id_penimbangan`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pertumbuhan_ibfk_2` FOREIGN KEY (`id_imunisasi`) REFERENCES `imunisasi` (`id_imunisasi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pertumbuhan_ibfk_3` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
