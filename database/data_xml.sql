-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2022 pada 10.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_xml`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(200) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `Fakultas` varchar(200) NOT NULL,
  `Prodi` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `Fakultas`, `Prodi`, `Gender`, `Alamat`) VALUES
(2021001, 'Fikri Rijal  ass', 'FIKOM', 'Marketing', 'Laki-laki', 'DKI Jakarta'),
(2021002, 'Irfan Hakim', 'FASILKOM', 'Informatika', 'Laki-laki', 'Bandung'),
(2021003, 'Intan', 'FH', 'Hukum Pidana', 'Perempuan', 'Makasar'),
(2021004, 'Funy', 'FE', 'Manajemen', 'Perempuan', 'Surabaya'),
(20200801, 'Michlee Septian Chandra', 'ilmu Komputer', 'Teknik Informatika', 'Laki-laki', 'DKI Jakarta');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
