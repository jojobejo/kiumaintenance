-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2025 pada 09.44
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiucoid_karismaerp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(11) NOT NULL,
  `nama_customer` text DEFAULT NULL,
  `nama_kios` text DEFAULT NULL,
  `alamat_kios` text DEFAULT NULL,
  `telp1` text DEFAULT NULL,
  `telp2` text DEFAULT NULL,
  `regional` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_zahir`
--

CREATE TABLE `tb_data_zahir` (
  `id` int(11) NOT NULL,
  `no_faktur` varchar(25) NOT NULL,
  `kd_customer` varchar(25) NOT NULL,
  `kd_barang` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `nominal_penjualan` float NOT NULL,
  `lot` varchar(25) NOT NULL,
  `exp_date` date NOT NULL,
  `inputer_jual` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_zahir`
--

INSERT INTO `tb_data_zahir` (`id`, `no_faktur`, `kd_customer`, `kd_barang`, `qty`, `satuan`, `nominal_penjualan`, `lot`, `exp_date`, `inputer_jual`) VALUES
(1, 'A25000051', 'REHA01', 'QBAST03', 12, 'Btl', 1, '24RFS2183', '2027-06-01', 'Nurul'),
(2, 'A25000052', 'QIMT01', 'QMETA09', 6, 'Btl', 144, '24032004', '2029-02-01', 'Nurul'),
(3, 'A25000053', 'LIVI01', 'QRATG01', 5, 'Pack', 240, '5005DD5013', '2026-12-01', 'Nurul'),
(4, 'A25000054', 'MUHA80', 'QBRAV04', 1, 'Btl', 53, '41118361', '2029-11-01', 'Nurul'),
(5, 'A25000055', 'NURJ01', 'QKARI16', 1, 'Btl', 48, 'L060724', '2029-07-01', 'Nurul'),
(6, 'B25000265', 'TANI149', 'QGAND03', 288, 'Pack', 4, 'BN2449', '2027-07-01', 'Nurul'),
(7, 'B25000265', 'TANI149', 'QGAND01', 288, 'Pack', 4, 'BN3414', '2027-08-01', 'Nurul'),
(8, 'B25000266', 'SETI01', 'QBIGG04', 200, 'Sach', 1, '3032023', '2029-12-01', 'Nurul'),
(9, 'B25000267', 'TULU01', 'QVALL01', 10, 'Pack', 650, 'PNB41003386', '2029-08-01', 'Nurul'),
(10, 'B25000268', 'TANI122', 'QKARI03', 4, 'Pack', 4, '31153301', '2027-06-01', 'Nurul'),
(11, 'B25000268', 'TANI122', 'QKARI01', 10, 'Pack', 4, '28193301', '2027-10-01', 'Nurul'),
(12, 'B25000268', 'TANI122', 'QKARI03', 21, 'Pack', 4, '28193321', '2027-10-01', 'Nurul'),
(13, 'B25000268', 'TANI122', 'QACEO04', 25, 'Pack', 4, '24031212', '2029-02-01', 'Nurul'),
(14, 'B25000268', 'TANI122', 'QMAES01', 10, 'Btl', 4, '20240729', '2029-07-01', 'Nurul'),
(15, 'B25000268', 'TANI122', 'QMAES02', 20, 'Btl', 4, '20241129', '2029-11-01', 'Nurul'),
(16, 'B25000269', 'SUMB144', 'QPADI41', 20, 'Pack', 1, '2353PDH602', '2025-05-19', 'Nurul'),
(17, 'B25000270', 'SUMB144', 'QTIMU29', 20, 'Pack', 820, '2711224138', '2026-06-24', 'Nurul'),
(18, 'B25000271', 'PODO05', 'QBENA01', 75, 'Kg', 2, '0', '1000-01-01', 'Nurul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_det_do`
--

CREATE TABLE `tb_det_do` (
  `id` int(11) NOT NULL,
  `kd_do` varchar(25) DEFAULT NULL,
  `kd_barang` varchar(25) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `satuan` text DEFAULT NULL,
  `nominal_penjualan` float DEFAULT NULL,
  `lot` text DEFAULT NULL,
  `exp_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_do`
--

CREATE TABLE `tb_do` (
  `id` int(11) NOT NULL,
  `kd_do` varchar(25) NOT NULL,
  `kd_faktur` varchar(25) NOT NULL,
  `kd_customer` varchar(25) NOT NULL,
  `nolambung` text NOT NULL,
  `total_barang` int(11) NOT NULL,
  `nominal_total` float NOT NULL,
  `tgl_pengiriman` date NOT NULL,
  `tgl_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `nm_karyawan` text DEFAULT NULL,
  `departemen` varchar(20) DEFAULT NULL,
  `jobdesk` text DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `akses_lv` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nik`, `nm_karyawan`, `departemen`, `jobdesk`, `username`, `password`, `akses_lv`) VALUES
(1, 'QIUK00000001', 'Superadmin', 'DEP02', 'LOGISTIK', 'admlog', '$2y$10$KeBGAKJTXGYXt39wb.FZYedFST5fbIuxQ8hRcHRsYTxsauhoxyNbO', 1),
(2, 'QIUK00000000', 'Annelia', 'DEP00', 'DIREKTUR', 'direktur', '$2y$10$KeBGAKJTXGYXt39wb.FZYedFST5fbIuxQ8hRcHRsYTxsauhoxyNbO', 5),
(3, 'QIUK10000000', 'Admin Keuangan', 'DEP01', 'ADMINKEU', 'adminkeu', '$2y$10$KeBGAKJTXGYXt39wb.FZYedFST5fbIuxQ8hRcHRsYTxsauhoxyNbO', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tmp_do`
--

CREATE TABLE `tb_tmp_do` (
  `id` int(11) NOT NULL,
  `no_fakturjual` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_truk`
--

CREATE TABLE `tb_truk` (
  `id` int(11) NOT NULL,
  `nolambung` varchar(25) DEFAULT NULL,
  `noplat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_zahir`
--
ALTER TABLE `tb_data_zahir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_det_do`
--
ALTER TABLE `tb_det_do`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_do`
--
ALTER TABLE `tb_do`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tmp_do`
--
ALTER TABLE `tb_tmp_do`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_truk`
--
ALTER TABLE `tb_truk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_data_zahir`
--
ALTER TABLE `tb_data_zahir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_det_do`
--
ALTER TABLE `tb_det_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_do`
--
ALTER TABLE `tb_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_tmp_do`
--
ALTER TABLE `tb_tmp_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_truk`
--
ALTER TABLE `tb_truk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
