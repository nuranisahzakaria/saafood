-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 06:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safood3`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_addres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_addres`) VALUES
(1, 'Nur Anisah', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '+6282272538581', 'nur.200170015@mhs.unimal.ac.id', 'Desa Paya Tukai, Kecamatan Langkahan, Kabupaten Aceh Utara'),
(2, 'finalansia2', 'finalansia2', '5f9e05f15f48a5ae11134f83f5f97a59', '082272538581', 'nur.200170015@mhs.unimal.ac.id', 'aceh');

-- --------------------------------------------------------

--
-- Table structure for table `db_category`
--

CREATE TABLE `db_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_category`
--

INSERT INTO `db_category` (`category_id`, `category_name`) VALUES
(17, 'Peunajoh Resto'),
(18, 'Foodies Resto'),
(19, 'Bungong Jeumpa Resto'),
(20, 'Master Resto'),
(21, 'Sasaa Cake');

-- --------------------------------------------------------

--
-- Table structure for table `dp_product`
--

CREATE TABLE `dp_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_images` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dp_product`
--

INSERT INTO `dp_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_images`, `product_status`, `date_created`) VALUES
(52, 18, 'Mie Aceh Goreng Original', 17000, '', 'produk1639196698.jpg', 1, '2021-12-11 04:24:58'),
(53, 19, 'Mie Aceh Tumis Daging', 23000, '<p>enak banget rasanya</p>\r\n', 'produk1639196870.jpeg', 1, '2021-12-11 04:27:50'),
(54, 20, 'Mie Aceh Tumis Daging Sapi', 23000, '<p>ss</p>\r\n', 'produk1639225287.jpeg', 1, '2021-12-11 12:21:27'),
(55, 17, 'Mie Aceh Kuah Udang', 20000, '<p>aa</p>\r\n', 'produk1639225340.jpg', 1, '2021-12-11 12:22:20'),
(56, 17, 'Mie Aceh Tumis Udang', 20000, '<p>Gratis Ongkir untuk daerah Lhokseumawe dan sekitarnya</p>\r\n', 'produk1639225584.jpg', 1, '2021-12-11 12:26:24'),
(57, 18, 'Ayam Tangkap', 30000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639394715.jpg', 1, '2021-12-13 11:25:15'),
(58, 19, 'Dendeng Aceh', 30000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639394782.jpg', 1, '2021-12-13 11:26:22'),
(59, 17, 'Kuah Beulangong', 30000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639394818.jpg', 1, '2021-12-13 11:26:58'),
(60, 18, 'Kuah Asam Keu Eeung Ikan Bandeng', 25000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639394937.jpg', 1, '2021-12-13 11:28:57'),
(61, 18, 'Mie Jalak Sabang', 20000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639394984.jpg', 1, '2021-12-13 11:29:44'),
(62, 17, 'Pacri Nanas', 20000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639395019.jpg', 1, '2021-12-13 11:30:19'),
(63, 18, 'Sate Matang', 30000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639395056.jpg', 1, '2021-12-13 11:30:56'),
(64, 19, 'Sie Reuboh', 30000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639395093.jpg', 1, '2021-12-13 11:31:33'),
(65, 20, 'Eungkot Keumamah', 25000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639395134.jpg', 1, '2021-12-13 11:32:14'),
(66, 21, 'Kue Aneuk Mamplam', 15000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 15 kue.</p>\r\n', 'produk1639395793.jpg', 1, '2021-12-13 11:43:13'),
(67, 21, 'Kue Bada Raket', 15000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 4 potong.</p>\r\n', 'produk1639395857.jpg', 1, '2021-12-13 11:44:17'),
(68, 21, 'Bakpia Aceh', 15000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 5 kue.</p>\r\n', 'produk1639395964.jpg', 1, '2021-12-13 11:46:04'),
(69, 21, 'Halua Breuh', 10000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 2 kue</p>\r\n', 'produk1639396024.jpg', 1, '2021-12-13 11:47:04'),
(70, 21, 'Jadah Lemang', 15000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 3 kue</p>\r\n', 'produk1639396064.jpg', 1, '2021-12-13 11:47:44'),
(71, 21, 'Kue Ade', 35000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639396142.jpg', 1, '2021-12-13 11:49:02'),
(72, 21, 'Kue Seupet', 10000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 20 kue.</p>\r\n', 'produk1639396201.jpg', 1, '2021-12-13 11:50:01'),
(73, 21, 'Rasidah', 25000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 7 kue</p>\r\n', 'produk1639396262.jpg', 1, '2021-12-13 11:51:02'),
(74, 19, 'Payeh Udeung', 25000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 2 pepes.</p>\r\n', 'produk1639397309.jpg', 1, '2021-12-13 12:08:29'),
(75, 17, 'Kuah Payeh Khas Aceh Besar', 25000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639397448.jpg', 1, '2021-12-13 12:10:48'),
(76, 21, 'Timphan', 12000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n\r\n<p>Satu porsi isi 8 kue.</p>\r\n', 'produk1639397539.jpg', 1, '2021-12-13 12:12:19'),
(77, 19, 'Kuah Pliek Gule', 23000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639397860.jpg', 1, '2021-12-13 12:17:40'),
(78, 20, 'Kuah Pliek Eungkot', 23000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639397927.jpg', 1, '2021-12-13 12:18:47'),
(79, 17, 'Kuah Masak Mirah', 25000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639398118.jpg', 1, '2021-12-13 12:21:58'),
(80, 18, 'Martabak Aceh', 12000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639398567.jpg', 1, '2021-12-13 12:29:27'),
(81, 19, 'Asam Kareng', 20000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639399065.jpg', 1, '2021-12-13 12:37:45'),
(82, 18, 'Sambal Udeung Boh Limeng', 23000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639399109.jpg', 1, '2021-12-13 12:38:29'),
(83, 20, 'Kuah Masak Puteh', 30000, '<p>Gratis ongkir untuk wilayah Lhokseumawe dan sekitarnya.</p>\r\n', 'produk1639399412.jpg', 1, '2021-12-13 12:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`) VALUES
(1, 'nnuranisahh@gmail.com', '1234', 'Nur Anisah', '082272538581', 'Padang Sakti, Muara Satu, Kota Lhokseumawe'),
(2, 'nur.200270015@mhs.unimal.ac.id', '1234', 'nisa', '082272538581', 'padang sakti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `dp_product`
--
ALTER TABLE `dp_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_category`
--
ALTER TABLE `db_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dp_product`
--
ALTER TABLE `dp_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
