-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2021 pada 05.14
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewagedung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtpaket`
--

CREATE TABLE `dtpaket` (
  `idpaket` int(11) NOT NULL,
  `namapaket` varchar(25) NOT NULL,
  `jadwal` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `dp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dtpaket`
--

INSERT INTO `dtpaket` (`idpaket`, `namapaket`, `jadwal`, `harga`, `dp`) VALUES
(9, 'Pernikahan', 'Pagi (09:00 - 14:00)', '115000000', '10000000'),
(10, 'Pernikahan', 'Malam (18:30 - 22:00)', '125000000', '12000000'),
(11, 'Perpisahan', 'Pagi (09:00 - 14:00)', '110000000', '5000000'),
(12, 'Wisuda', 'Pagi (09:00 - 14:00)', '110000000', '5000000'),
(13, 'Seminar', 'Pagi (09:00 - 14:00)', '110000000', '5000000'),
(14, 'Kesenian', 'Pagi (09:00 - 14:00)', '125000000', '12000000'),
(15, 'Kesenian', 'Malam (18:30 - 22:00)', '150000000', '15000000'),
(16, 'Bazar', 'Fullday (08:30-22:30)', '225000000', '25000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtpesan`
--

CREATE TABLE `dtpesan` (
  `idpesan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpaket` int(11) NOT NULL,
  `namapaket` varchar(25) NOT NULL,
  `tglkontrak` date NOT NULL,
  `tglacara` date DEFAULT NULL,
  `jadwal` varchar(25) NOT NULL,
  `buktibayar` varchar(25) NOT NULL,
  `statusbayar` int(1) NOT NULL,
  `statuspesan` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dtpesan`
--

INSERT INTO `dtpesan` (`idpesan`, `iduser`, `idpaket`, `namapaket`, `tglkontrak`, `tglacara`, `jadwal`, `buktibayar`, `statusbayar`, `statuspesan`, `status`) VALUES
(4, 3, 9, 'Pernikahan', '2021-04-01', '2021-05-02', 'Pagi (09:00 - 14:00)', '20210104_0935162.jpg', 1, 0, 0),
(11, 5, 10, 'Pernikahan', '2021-04-05', '2021-05-12', 'Malam (18:30 - 22:00)', '', 0, 0, 0),
(12, 6, 11, 'Perpisahan', '2021-05-05', '2021-06-16', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(13, 10, 12, 'Wisuda', '2021-05-11', '2021-06-12', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(14, 13, 13, 'Seminar', '2021-05-08', '2021-06-08', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(15, 11, 13, 'Seminar', '2021-05-20', '2021-06-20', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(16, 8, 15, 'Kesenian', '2021-05-18', '2021-05-19', 'Malam (18:30 - 22:00)', 'KUJICAM_2019-08-26-09-37-', 1, 0, 0),
(59, 3, 16, 'Bazar', '2021-06-01', '2021-06-04', 'Fullday (08:30-22:30)', '', 0, 0, 0),
(61, 3, 9, 'Pernikahan', '2021-07-01', '2021-07-03', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(62, 3, 11, 'Perpisahan', '2021-07-01', '2022-10-03', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(63, 3, 9, 'Pernikahan', '2021-07-01', '2021-07-02', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(64, 3, 9, 'Pernikahan', '2021-07-01', '2021-07-10', 'Pagi (09:00 - 14:00)', '', 0, 0, 0),
(65, 3, 9, 'Pernikahan', '2021-07-01', '2021-08-12', 'Pagi (09:00 - 14:00)', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtuser`
--

CREATE TABLE `dtuser` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `noktp` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dtuser`
--

INSERT INTO `dtuser` (`iduser`, `nama`, `nohp`, `alamat`, `noktp`, `username`, `password`, `role_id`) VALUES
(3, 'Wati', '089876555344', 'plaju', '161726663999', 'wati', 'user', '2'),
(5, 'Thomas', '089756454343', 'simpang kades', '161726663999', 'Thomas', 'thomas', '2'),
(6, 'Agung', '081234566777', 'kenten', '161726638834', 'Agung', 'agung', '2'),
(7, 'Amalia', '087864688233', 'Plaju', '162763888299', 'Amel', 'amel', '2'),
(8, 'Fauzan', '081352773884', 'Kenten', '1674849930028', 'Fauzan', 'fauzan', '2'),
(9, 'Reynaldi', '082117848666', 'Jakabaring', '1637664992833', 'Rey', 'rey', '2'),
(10, 'Bella', '082697743929', 'Kertapati', '197266383677', 'Bella', 'bella', '2'),
(11, 'Novita', '081972779929', 'Batu raja', '19773620022333', 'Novi', 'novi', '2'),
(12, 'Sendi', '085627289982', 'Lahat', '167266388203', 'Sendi', 'sendi', '2'),
(13, 'Raka', '089873887442', 'Km 14', '1983779948333', 'Raka', 'raka', '2'),
(14, 'admin', '0', '0', '0', 'admin', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dtpaket`
--
ALTER TABLE `dtpaket`
  ADD PRIMARY KEY (`idpaket`);

--
-- Indeks untuk tabel `dtpesan`
--
ALTER TABLE `dtpesan`
  ADD PRIMARY KEY (`idpesan`);

--
-- Indeks untuk tabel `dtuser`
--
ALTER TABLE `dtuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dtpaket`
--
ALTER TABLE `dtpaket`
  MODIFY `idpaket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `dtpesan`
--
ALTER TABLE `dtpesan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `dtuser`
--
ALTER TABLE `dtuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
