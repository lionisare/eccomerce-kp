-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 07:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tokodesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoices`
--

CREATE TABLE `tb_invoices` (
  `id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoices`
--

INSERT INTO `tb_invoices` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(14, 'Kelly', 'Jln.surapati No 34', '2022-11-21 21:25:09', '2022-11-22 21:25:09'),
(17, 'Vivi', 'Jln.surapati No.345', '2022-11-21 22:04:30', '2022-11-22 22:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`kategori_id`, `nama_kategori`) VALUES
(6, 'Test'),
(7, 'Pakaian'),
(8, 'Pakaian Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `tb_konfirmasi`
--

CREATE TABLE `tb_konfirmasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `dari_bank` varchar(100) NOT NULL,
  `ke_bank` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_konfirmasi`
--

INSERT INTO `tb_konfirmasi` (`id`, `nama`, `dari_bank`, `ke_bank`, `jumlah`, `gambar`) VALUES
(19, 'SOMIN SANTOSO', 'BJB', 'BRI', '200000', ''),
(20, 'a', 'BJB', 'BJB', '200000', ''),
(21, 'AHMAD', 'BRI', 'BJB', '200000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(12) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Dompet Wanita Bagus', 1, 55000, ''),
(2, 1, 2, 'Sepatu', 1, 200000, ''),
(3, 2, 4, 'Domba', 1, 300000, ''),
(4, 2, 7, 'Gantungan', 1, 10000, ''),
(5, 2, 6, 'Baju', 1, 65000, ''),
(6, 5, 7, 'Gantungan', 1, 10000, ''),
(7, 6, 1, 'Dompet Wanita Bagus', 1, 55000, ''),
(8, 6, 2, 'Sepatu', 1, 200000, ''),
(9, 7, 1, 'Dompet Wanita Bagus', 1, 55000, ''),
(10, 7, 2, 'Sepatu', 1, 200000, ''),
(11, 8, 1, 'Dompet Wanita Bagus', 1, 55000, ''),
(12, 9, 13, 'Pastel', 1, 1000, ''),
(13, 12, 14, 'Pupuk', 1, 150000, ''),
(14, 13, 15, 'Kue', 1, 2000, ''),
(15, 14, 11, 'Dompet Pria', 1, 50000, ''),
(16, 16, 11, 'Dompet Pria', 1, 50000, ''),
(17, 17, 12, 'Tas Wanita', 1, 300000, ''),
(18, 18, 11, 'Dompet Pria', 1, 50000, ''),
(19, 25, 14, 'Pupuk', 1, 150000, ''),
(20, 30, 10, 'Sapi', 1, 15000000, ''),
(21, 31, 13, 'Pastel', 1, 1000, ''),
(22, 32, 16, 'Baju', 1, 65000, ''),
(23, 33, 11, 'Dompet Pria', 1, 50000, ''),
(24, 40, 14, 'Pupuk', 1, 150000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_produk` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_produk SET stok = stok-NEW.jumlah WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_brg` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(70) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_brg`, `kategori_id`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(9, 0, 'Kambing', 'Cocok untuk hewan peliharaan', 'Peternakan', 300000, 5, 'kambing.png'),
(10, 0, 'Sapi', 'Cocok untuk di pelihara', 'Peternakan', 15000000, 3, 'sapi.png'),
(11, 0, 'Dompet Pria', 'Warna Hitam, Ukuran Sedang', 'UMKM', 50000, 2, 'dompet1.png'),
(12, 0, 'Tas Wanita', 'Dibuat dari rotan, cocok untuk ke kondangan mantan', 'UMKM', 300000, 9, 'tas2.png'),
(13, 0, 'Pastel', 'Enak', 'Makanan', 1000, 18, 'pastel.png'),
(14, 0, 'Pupuk', 'Bagus untuk tanaman', 'Pertanian', 150000, 7, 'pupuk.png'),
(15, 0, 'Kue', 'Enak', 'Makanan ', 2000, 6, 'kue.png'),
(16, 0, 'Baju', 'Baju Pria bagus', 'UMKM', 65000, 7, 'baju3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin', '1234', 1),
(2, 'joko', 'user', 'user', 0),
(3, 'user1', 'user1', '321', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_invoices`
--
ALTER TABLE `tb_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_invoices`
--
ALTER TABLE `tb_invoices`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
