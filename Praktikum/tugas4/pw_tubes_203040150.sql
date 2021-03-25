-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 18.24
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040150`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `handphone`
--

CREATE TABLE `handphone` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `ROM` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `handphone`
--

INSERT INTO `handphone` (`id`, `Gambar`, `Nama`, `Status`, `RAM`, `ROM`, `Harga`) VALUES
(1, '1.PNG', 'OPPO A53', 'Baru', '6GB', '128GB', 'Rp.2.129.000'),
(2, '2.PNG', 'OPPO A15', 'Baru', '3GB', '32GB', 'Rp.1.700.000'),
(3, '3.PNG', 'OPPO A57', 'Second', '3GB', '32GB', 'Rp.700.000'),
(4, '4.PNG', 'OPPO Reno 4', 'Baru', '8GB', '128GB', 'Rp.3.625.000'),
(5, '5.PNG', 'OPPO Reno 5', 'Baru', '12GB', '256GB', 'Rp.3.800.000'),
(6, '6.PNG', 'OPPO A92s', 'Baru', '8GB', '256GB', 'Rp.3.200.000'),
(7, '7.PNG', 'OPPO A3s', 'Baru', '3GB', '32GB', 'Rp.1.350.000'),
(8, '8.PNG', 'OPPO A11k', 'Second', '2GB', '32GB', 'Rp.1.000.000'),
(9, '9.PNG', 'OPPO A92', 'Baru', '8GB', '128GB', 'Rp.3.500.000'),
(10, '10.PNG', 'OPPO A93', 'Second', '8GB', '128GB', 'Rp.2.500.000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
