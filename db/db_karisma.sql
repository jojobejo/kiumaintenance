-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 10:15 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karisma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_tracking_driver`
--

CREATE TABLE `tb_det_tracking_driver` (
  `id` int(12) NOT NULL,
  `norut` int(5) NOT NULL,
  `kd_deliveri` varchar(25) NOT NULL,
  `tgl_jalan` text NOT NULL,
  `kd_driver` varchar(25) NOT NULL,
  `kd_truk` varchar(25) NOT NULL,
  `destinasi` text NOT NULL,
  `sts_driver` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `nm_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_det_tracking_driver`
--

INSERT INTO `tb_det_tracking_driver` (`id`, `norut`, `kd_deliveri`, `tgl_jalan`, `kd_driver`, `kd_truk`, `destinasi`, `sts_driver`, `keterangan`, `nm_toko`) VALUES
(1, 0, 'KIUD2507230001', '2023-07-25', 'KIU1107230001', 'K1', 'Jember', 'READY', '', ''),
(2, 0, 'KIUD2507230001', '2023-07-25', 'KIU1107230002', 'K2', 'Lumajang', 'READY', '', ''),
(3, 0, 'KIUD2507230001', '2023-07-25', 'KIU1107230003', 'K3', 'Surabaya', 'READY', '', ''),
(4, 0, 'KIUD2507230001', '2023-07-25', 'KIU1107230004', '-', '-', 'PENDING', '-', ''),
(9, 0, 'KIUD2607230001', '2023-07-26', 'KIU1107230001', 'K1', 'Jember', 'READY', '', ''),
(10, 0, 'KIUD2607230001', '2023-07-26', 'KIU1107230002', 'K2', 'Malang', 'READY', '', ''),
(11, 0, 'KIUD2607230001', '2023-07-26', 'KIU1107230003', 'K3', 'Surabaya', 'ON THE ROAD', 'Dalam perjalanan', ''),
(12, 0, 'KIUD2607230001', '2023-07-26', 'KIU1107230004', '-', '-', 'PENDING', 'Sakit', ''),
(13, 1, 'KIUD2907230001', '2023-07-30', 'KIU1107230001', 'K1', 'Jember', 'READY', '', ''),
(14, 3, 'KIUD2907230001', '2023-07-30', 'KIU1107230002', 'K2', 'Surabaya', 'READY', '', ''),
(15, 2, 'KIUD2907230001', '2023-07-30', 'KIU1107230003', 'K3', 'Malang', 'READY', '', ''),
(16, 4, 'KIUD2907230001', '2023-07-30', 'KIU1107230004', 'K4', 'Probolinggo', 'READY', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_driver_pending`
--

CREATE TABLE `tb_driver_pending` (
  `id` int(12) NOT NULL,
  `kd_deliveri` varchar(25) NOT NULL,
  `tgl_jalan` text NOT NULL,
  `kd_driver` varchar(25) NOT NULL,
  `kd_truk` varchar(25) NOT NULL,
  `destinasi` text NOT NULL,
  `nm_toko` text NOT NULL,
  `note_pending` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id` int(11) NOT NULL,
  `kdinventaris` text NOT NULL,
  `kdowner` varchar(25) NOT NULL,
  `kat_inventaris` varchar(25) NOT NULL,
  `nama_barang` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_pembelian` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lap_distribusi`
--

CREATE TABLE `tb_lap_distribusi` (
  `id` int(255) NOT NULL,
  `nopol` varchar(255) NOT NULL,
  `nolambung` varchar(255) NOT NULL,
  `namadriver` varchar(255) NOT NULL,
  `namahelper` varchar(255) NOT NULL,
  `tujuan` text NOT NULL,
  `tglkeluar` text NOT NULL,
  `jamkeluar` varchar(255) NOT NULL,
  `kmkeluar` text NOT NULL,
  `tglmasuk` text NOT NULL,
  `jammasuk` varchar(255) NOT NULL,
  `kmmasuk` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `inputer` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_op_driver`
--

CREATE TABLE `tb_op_driver` (
  `id` int(11) NOT NULL,
  `kd_driver` varchar(25) NOT NULL,
  `nama_driver` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_op_driver`
--

INSERT INTO `tb_op_driver` (`id`, `kd_driver`, `nama_driver`, `status`, `create_at`) VALUES
(2, 'KIU1107230001', 'Ribut S', 'ACTIVE', '2023-07-11 06:45:49'),
(3, 'KIU1107230002', 'Sugianto', 'ACTIVE', '2023-07-11 06:45:49'),
(4, 'KIU1107230003', 'Timan', 'ACTIVE', '2023-07-11 06:45:49'),
(5, 'KIU1107230004', 'Joni', 'ACTIVE', '2023-07-11 06:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_op_plat`
--

CREATE TABLE `tb_op_plat` (
  `id` int(11) NOT NULL,
  `noplat` varchar(25) NOT NULL,
  `nm_truk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_op_plat`
--

INSERT INTO `tb_op_plat` (`id`, `noplat`, `nm_truk`) VALUES
(2, 'P8808UG', 'K1'),
(3, 'P8034UQ', 'K2'),
(4, 'P8035UQ', 'K3'),
(5, 'P8035UQ', 'K4'),
(6, 'P8305UK', 'K5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order_tracking_driver`
--

CREATE TABLE `tb_order_tracking_driver` (
  `id` int(11) NOT NULL,
  `kd_order` varchar(25) NOT NULL,
  `tgl_jalan` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order_tracking_driver`
--

INSERT INTO `tb_order_tracking_driver` (`id`, `kd_order`, `tgl_jalan`, `create_at`) VALUES
(1, 'KIUD2507230001', '2023-07-25', '2023-07-25 03:43:21'),
(3, 'KIUD2607230001', '2023-07-26', '2023-07-26 01:33:44'),
(4, 'KIUD2907230001', '2023-07-30', '2023-07-29 02:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_truck`
--

CREATE TABLE `tb_truck` (
  `id` int(11) NOT NULL,
  `nm_plat` varchar(25) NOT NULL,
  `no_plat` varchar(25) NOT NULL,
  `kd_driver` varchar(25) NOT NULL,
  `nm_driver` text NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `kode_user` varchar(25) NOT NULL,
  `nama_user` text NOT NULL,
  `departemen` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_lv` int(2) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `kode_user`, `nama_user`, `departemen`, `username`, `password`, `akses_lv`, `create_at`) VALUES
(3, 'KIU1007230001', 'SUPERADMIN', 'IT', 'admin', '$2y$10$MGM1lvOhXAOJA8qN7E6ddOtoiy6IwRKmE4NOFvs9vDOXrgbJYPZGi', 1, '2023-07-26 01:45:43'),
(4, 'KIU1007230002', 'Maulana Malik Ibrahim', 'KEUANGAN', 'bram', '$2y$10$356r0xaFtVhf07EAi8f/KOMbu2IdjfGQ8UMWIXLOmgcDWIGBxIjI6', 2, '2023-07-10 01:57:56'),
(5, 'KIU1107230001', 'Admin Logistik', 'LOGISTIK', 'logistik', '$2y$10$foKXIn2aqQgVpi9s7hHLEuKCSzZzANzO.O1P3MvPzkIpmjZNIP3I2', 1, '2023-07-11 01:41:57'),
(6, 'KIU3107230001', 'Yanto', 'HRD', 'HRD1', '$2y$10$.xAZu8QGLrYkkNpUYTkruesZvupQ3WxlRnylR9gaiTvaT07FRCsWW', 2, '2023-07-31 07:05:08'),
(7, 'KIU3107230002', 'Ria', 'HRD', 'HRD2', '$2y$10$.xAZu8QGLrYkkNpUYTkruesZvupQ3WxlRnylR9gaiTvaT07FRCsWW', 2, '2023-07-31 07:05:12'),
(8, 'KIU3107230003', 'Arif R', 'HRD', 'HRD3', '$2y$10$.xAZu8QGLrYkkNpUYTkruesZvupQ3WxlRnylR9gaiTvaT07FRCsWW', 2, '2023-07-31 07:05:16'),
(9, 'KIU3107230004', 'Security', 'HRD', 'HRD4', '$2y$10$.xAZu8QGLrYkkNpUYTkruesZvupQ3WxlRnylR9gaiTvaT07FRCsWW', 2, '2023-07-31 07:05:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_det_tracking_driver`
--
ALTER TABLE `tb_det_tracking_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_driver_pending`
--
ALTER TABLE `tb_driver_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lap_distribusi`
--
ALTER TABLE `tb_lap_distribusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_op_driver`
--
ALTER TABLE `tb_op_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_op_plat`
--
ALTER TABLE `tb_op_plat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order_tracking_driver`
--
ALTER TABLE `tb_order_tracking_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_truck`
--
ALTER TABLE `tb_truck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_det_tracking_driver`
--
ALTER TABLE `tb_det_tracking_driver`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_driver_pending`
--
ALTER TABLE `tb_driver_pending`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lap_distribusi`
--
ALTER TABLE `tb_lap_distribusi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_op_driver`
--
ALTER TABLE `tb_op_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_op_plat`
--
ALTER TABLE `tb_op_plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_order_tracking_driver`
--
ALTER TABLE `tb_order_tracking_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_truck`
--
ALTER TABLE `tb_truck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
