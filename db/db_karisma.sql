-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 09:49 AM
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
  `kd_helper` varchar(25) NOT NULL,
  `kd_truk` varchar(25) NOT NULL,
  `destinasi` text NOT NULL,
  `jml_kios` int(25) NOT NULL,
  `tonase` int(25) NOT NULL,
  `kubikasi` int(25) NOT NULL,
  `sts_driver` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `nm_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_det_tracking_driver`
--

INSERT INTO `tb_det_tracking_driver` (`id`, `norut`, `kd_deliveri`, `tgl_jalan`, `kd_driver`, `kd_helper`, `kd_truk`, `destinasi`, `jml_kios`, `tonase`, `kubikasi`, `sts_driver`, `keterangan`, `nm_toko`) VALUES
(1, 1, 'KIUD0508230001', '2023-08-06', 'KIU0508230003', 'KIU0508230020', 'K 21', 'Lumajang', 20, 10, 20, 'READY', '', ''),
(2, 2, 'KIUD0508230001', '2023-08-06', 'KIU0508230004', 'KIU0508230019', 'K 88', 'Malang', 10, 10, 30, 'READY', '', ''),
(3, 3, 'KIUD0508230001', '2023-08-06', 'KIU0508230005', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(4, 4, 'KIUD0508230001', '2023-08-06', 'KIU0508230006', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(5, 5, 'KIUD0508230001', '2023-08-06', 'KIU0508230007', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(6, 6, 'KIUD0508230001', '2023-08-06', 'KIU0508230008', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(7, 7, 'KIUD0508230001', '2023-08-06', 'KIU0508230009', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(8, 8, 'KIUD0508230001', '2023-08-06', 'KIU0508230010', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(9, 9, 'KIUD0508230001', '2023-08-06', 'KIU0508230011', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(10, 10, 'KIUD0508230001', '2023-08-06', 'KIU0508230012', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(11, 11, 'KIUD0508230001', '2023-08-06', 'KIU0508230013', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(12, 12, 'KIUD0508230001', '2023-08-06', 'KIU0508230014', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(13, 13, 'KIUD0508230001', '2023-08-06', 'KIU0508230015', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(14, 14, 'KIUD0508230001', '2023-08-06', 'KIU0508230016', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(15, 15, 'KIUD0508230001', '2023-08-06', 'KIU0508230017', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(16, 16, 'KIUD0508230001', '2023-08-06', 'KIU0508230018', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(17, 17, 'KIUD0508230001', '2023-08-06', 'KIU0508230001', '-', '-', '', 0, 0, 0, 'READY', '', ''),
(18, 18, 'KIUD0508230001', '2023-08-06', 'KIU0508230002', '-', '-', '', 0, 0, 0, 'READY', '', '');

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
-- Table structure for table `tb_expedisi`
--

CREATE TABLE `tb_expedisi` (
  `id` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `jammasuk` varchar(255) NOT NULL,
  `jamkeluar` varchar(255) NOT NULL,
  `nopol` varchar(255) NOT NULL,
  `namadriver` varchar(255) NOT NULL,
  `notlpndriver` varchar(255) NOT NULL,
  `perusahaanpengirim` varchar(255) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `jumlahbarang` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
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
-- Table structure for table `tb_issue`
--

CREATE TABLE `tb_issue` (
  `id` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `issue` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan_keluarmasuk`
--

CREATE TABLE `tb_karyawan_keluarmasuk` (
  `id` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jamkeluar` varchar(255) NOT NULL,
  `jammasuk` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
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
  `no_urut_hr_i` int(12) NOT NULL,
  `kd_driver` varchar(25) NOT NULL,
  `nama_driver` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_op_driver`
--

INSERT INTO `tb_op_driver` (`id`, `no_urut_hr_i`, `kd_driver`, `nama_driver`, `status`, `create_at`) VALUES
(7, 17, 'KIU0508230001', 'TIMAN', 'ACTIVE', '2023-08-05 04:51:45'),
(8, 18, 'KIU0508230002', 'SAMHADI', 'ACTIVE', '2023-08-05 04:51:45'),
(9, 1, 'KIU0508230003', 'JONI', 'ACTIVE', '2023-08-05 04:51:45'),
(10, 2, 'KIU0508230004', 'GOVIL', 'ACTIVE', '2023-08-05 04:51:45'),
(11, 3, 'KIU0508230005', 'ALI WAFA', 'ACTIVE', '2023-08-05 04:51:45'),
(12, 4, 'KIU0508230006', 'FANDI', 'ACTIVE', '2023-08-05 04:51:45'),
(13, 5, 'KIU0508230007', 'ROHMAN', 'ACTIVE', '2023-08-05 04:51:45'),
(14, 6, 'KIU0508230008', 'ANANG', 'ACTIVE', '2023-08-05 04:51:45'),
(15, 7, 'KIU0508230009', 'SUGIHARTONO', 'ACTIVE', '2023-08-05 04:51:45'),
(16, 8, 'KIU0508230010', 'MAKRUF', 'ACTIVE', '2023-08-05 04:51:45'),
(17, 9, 'KIU0508230011', 'ADE', 'ACTIVE', '2023-08-05 04:51:45'),
(18, 10, 'KIU0508230012', 'RIBUT', 'ACTIVE', '2023-08-05 04:51:45'),
(19, 11, 'KIU0508230013', 'MUSTAJAB', 'ACTIVE', '2023-08-05 04:51:45'),
(20, 12, 'KIU0508230014', 'IMAM T', 'ACTIVE', '2023-08-05 04:51:45'),
(21, 13, 'KIU0508230015', 'KRISTIAN', 'ACTIVE', '2023-08-05 04:51:45'),
(22, 14, 'KIU0508230016', 'SUYONO', 'ACTIVE', '2023-08-05 04:51:45'),
(23, 15, 'KIU0508230017', 'HERI H', 'ACTIVE', '2023-08-05 04:51:45'),
(24, 16, 'KIU0508230018', 'RAHMAT', 'ACTIVE', '2023-08-05 04:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `tb_op_helper`
--

CREATE TABLE `tb_op_helper` (
  `id` int(12) NOT NULL,
  `kd_helper` varchar(25) NOT NULL,
  `nama_helper` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_op_helper`
--

INSERT INTO `tb_op_helper` (`id`, `kd_helper`, `nama_helper`, `status`, `create_at`) VALUES
(2, 'KIU0508230020', 'Billy', 'ACTIVE', '2023-08-05 04:44:54'),
(5, 'KIU0508230019', 'Yoga', 'ACTIVE', '2023-08-05 05:11:35'),
(6, 'KIU0508230019', 'Yono', 'ACTIVE', '2023-08-05 05:20:19');

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
(2, 'P 8925 GC', 'K 22'),
(3, 'P 9962 UG', 'K 15'),
(4, 'P 9805 UG', 'K 25'),
(5, 'P 8808 G', 'K 21'),
(6, 'P 8305 UK', 'K 16'),
(8, 'P 8241 UG', 'K 89'),
(9, 'P 9695 UG', 'K 57'),
(10, 'P 9068 UG', 'K 11'),
(11, 'P 8306 UK', 'K 17'),
(12, 'P 8060 UG', 'K 59'),
(13, 'P 9276 UG', 'K 12'),
(14, 'P 9880 UG', 'K 58'),
(15, 'P 8058 UQ', 'K 45'),
(16, 'P 9905 UG', 'K 36'),
(17, 'P 8290 UG', 'K 28'),
(18, 'P 8092 UG', 'K 78'),
(19, 'P 9904 UG', 'K 27'),
(20, 'P 9629 UG', 'K 23'),
(21, 'P 8242 UG', 'K 88'),
(22, 'P 9161 UG', 'K 77'),
(23, 'P 9475 UG', 'K 18'),
(24, 'P 8297 UQ', 'K 99'),
(25, 'P 8252 GE', 'GRANDMAX'),
(26, 'P 9611 GE', 'FUTURA');

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
(1, 'KIUD0508230001', '2023-08-06', '2023-08-05 05:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jumlahpersonil` varchar(255) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `jammasuk` text NOT NULL,
  `jamkeluar` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `tb_expedisi`
--
ALTER TABLE `tb_expedisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_issue`
--
ALTER TABLE `tb_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan_keluarmasuk`
--
ALTER TABLE `tb_karyawan_keluarmasuk`
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
-- Indexes for table `tb_op_helper`
--
ALTER TABLE `tb_op_helper`
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
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_driver_pending`
--
ALTER TABLE `tb_driver_pending`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_expedisi`
--
ALTER TABLE `tb_expedisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_issue`
--
ALTER TABLE `tb_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_karyawan_keluarmasuk`
--
ALTER TABLE `tb_karyawan_keluarmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_lap_distribusi`
--
ALTER TABLE `tb_lap_distribusi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_op_driver`
--
ALTER TABLE `tb_op_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_op_helper`
--
ALTER TABLE `tb_op_helper`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_op_plat`
--
ALTER TABLE `tb_op_plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_order_tracking_driver`
--
ALTER TABLE `tb_order_tracking_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
