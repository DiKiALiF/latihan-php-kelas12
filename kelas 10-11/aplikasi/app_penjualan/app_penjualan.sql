-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 01:05 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebarang` varchar(5) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` float(10,0) NOT NULL,
  `persediaan` int(3) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebarang`, `namabarang`, `harga`, `persediaan`) VALUES
('A1', 'Keju', 5000, 25),
('A2', 'Minyak', 15000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `tanggal` varchar(100) NOT NULL,
  `pengeluaran` int(100) NOT NULL,
  `pemasukan` int(100) NOT NULL,
  `laba` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`tanggal`, `pengeluaran`, `pemasukan`, `laba`) VALUES
('1/3/2021', 150000, 300000, 150000),
('2/3/2021', 125000, 325000, 200000),
('3/3/2021', 175000, 300000, 125000),
('4/3/2021', 125000, 285000, 160000),
('5/3/2021', 150000, 450000, 300000),
('6/3/2021', 120000, 500000, 380000),
('7/3/2021', 110000, 325000, 215000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kodepelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kodepelanggan`, `nama`, `alamat`, `pekerjaan`) VALUES
(1, 'Gayus Tambunan', 'Nusakambangan', 'Korup'),
(2, 'Baloteli', 'Italy', 'Footballer');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `no` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `namabarang` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`no`, `tanggal`, `nama`, `namabarang`, `harga`, `jumlah`, `total`) VALUES
(1, '2021', 'rooftop', 'ayam', 10000, 10, 100000),
(2, '2021', 'bango', 'ayam', 10000, 3, 30000),
(3, '2021', 'jep bejos', 'Ayam + Nasi', 10000, 50, 500000),
(4, '2021', 'lupin', 'Ayam Geprek', 8000, 10, 80000),
(5, '2021-03-06', 'gordon', 'Ayam + Nasi', 10000, 5, 50000),
(6, '2021-03-06', 'wansay', 'Ayam Geprek', 8000, 2, 16000),
(7, '2021-03-06', 'rooftop', 'Ayam Geprek', 8000, 1, 8000),
(8, '2021-03-06', 'wansay', 'Ayam + Nasi', 10000, 3, 30000),
(9, '2021-03-06', 'rooftop', 'Ayam + Nasi', 10000, 5, 50000),
(10, '2021-03-06', 'wansay', 'Ayam + Nasi', 10000, 10, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'diki', 'dikialif550@gmail.com', '43b93443937ea642a9a43e77fd5d8f77', '2021-03-03 02:28:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD KEY `NewIndex` (`kodebarang`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`tanggal`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kodepelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `kodepelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
