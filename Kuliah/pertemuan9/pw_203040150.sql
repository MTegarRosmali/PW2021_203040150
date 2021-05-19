-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2021 pada 08.29
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
-- Database: `pw_203040150`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Tegar', '203040150', 'tegar@gmail.com', 'Teknik informatika', 'a.png'),
(2, 'Samo', '203040151', 'samo@gmail.com', 'PWK', 'b.png'),
(3, 'Udin', '203040152', 'udin@gmail.com', 'Tenkik Industri', 'c.png'),
(4, 'Joni', '203040153', 'joni@gmail.com', 'Teknik Pangan', 'd.png'),
(5, 'Hady', '203040154', 'hady@gmail.com', 'Teknik Informatika', 'e.png'),
(6, 'Ilham', '203040155', 'ilham@gmail.com', 'Teknik mesin', 'f.png'),
(7, 'Lisa', '203040156', 'lisa@gmail.com', 'Teknik Industri', 'g.png'),
(8, 'Siti', '203040157', 'siti@gmail.com', 'teknik mesin', 'h.png'),
(9, 'Dodi', '203040158', 'Dodi@gmail.com', 'Teknik Informatika', 'i.png'),
(10, 'Nurul', '203040159', 'nurul@gmail.com', 'PWK', 'j.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
