-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.08
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jurnal6`
--

CREATE TABLE `t_jurnal6` (
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `hobi` varchar(200) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jurnal6`
--

INSERT INTO `t_jurnal6` (`username`, `password`, `nim`, `nama`, `kelas`, `jk`, `hobi`, `fakultas`, `alamat`) VALUES
('egn234', '81dc9bdb52d04dc20036dbd8313ed055', '6701174110', 'egan kusmaya', 'D3MI0', 'Laki-Laki', 'Membaca, Main Game, Sepakbola, Jalan Kaki, ', 'FIT', 'qe dsas ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
