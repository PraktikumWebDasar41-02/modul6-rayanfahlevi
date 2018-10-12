-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.21
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
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `hobi` varchar(15) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`nama`, `nim`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('', '', 'MI01', 'lakilaki', 'jajan', 'Ekonomi bisnis', 'asfas df'),
('Rayan Fahlevi Dahlan', '1234567890', 'D3MI-41-02', 'Laki-laki', 'Olah raga', 'Ilmu Terapan', 'Bandung'),
('rayan', '1234567891', 'D3MI-41-01', 'laki-laki', 'masak', 'ilmu terapan', 'Bandung'),
('rayan', '1701170062', 'D3MI-41-01', 'laki-laki', 'masak', 'ilmu terapan', 'Bandung'),
('dela', 'dela', 'MI01', '', '', 'Ilmu terapan', ''),
('rayan', 'rayan', 'MI01', '', 'jajan', 'Ilmu terapan', 'bandung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
