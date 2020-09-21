-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2020 pada 16.33
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `no_kk` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `id_stat_hbkel` int(100) NOT NULL,
  `no_rt` int(100) NOT NULL,
  `tanggal_create` datetime DEFAULT NULL,
  `tanggal_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_penduduk`
--

INSERT INTO `data_penduduk` (`no_kk`, `nik`, `nama_lengkap`, `id_stat_hbkel`, `no_rt`, `tanggal_create`, `tanggal_update`) VALUES
('085846097245', '085846097244', 'SUBHAN ARDIANSYAH', 1, 1, '2020-09-21 08:19:04', '2020-09-21 14:32:08'),
('6403060211090003', '6403060902140001', 'ABDUL HABIB MAULANA', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403061211150002', '6403064209980001', 'ADE MARPINA', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403061702150001', '6403060709150001', 'ABDIAN SYAH PRATAMA', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403061909080025', '6403062802030002', 'ADI INRA FEBRIADI', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062111120002', '6403064902130001', 'AISYAH MUMTAZAH', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062307080036', '6403060107670002', 'AHMAD', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062307080058', '6403061307850001', 'AGUS RIADI', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080001', '6403060101670001', 'ABDUL MAJID', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080010', '6403061801610001', 'ABDUL RAHMAN', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080022', '6403060101700005', 'ADDUL', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080023', '6403062007040001', 'ABDUL RAHMAN', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080042', '6403064107710003', 'AINUN ZARIAH', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080043', '6403060107510003', 'ADAM', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('6403062407080054', '6403061406620001', 'ABDUR RASYID', 1, 1, '0000-00-00 00:00:00', '2020-09-21 14:38:57'),
('6403062407080057', '6403061907080001', 'AFGHAN AL-BANNA', 4, 1, '0000-00-00 00:00:00', '2020-09-21 14:38:03'),
('6403062407080066', '6403062102810001', 'AGUS DIANTORO', 4, 1, '0000-00-00 00:00:00', '2020-09-21 14:27:05'),
('6403062407080079', '6403061503770001', 'ABDUL MU\'IS', 1, 1, '0000-00-00 00:00:00', '2020-09-21 14:27:24'),
('6403062609130003', '6403062804140001', 'AHMAD IMAM AL HAFIZH', 4, 1, '0000-00-00 00:00:00', '2020-09-21 14:36:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungan_keluarga`
--

CREATE TABLE `hubungan_keluarga` (
  `id_stat_hbkel` int(100) NOT NULL,
  `stat_hbkel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hubungan_keluarga`
--

INSERT INTO `hubungan_keluarga` (`id_stat_hbkel`, `stat_hbkel`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Suami'),
(3, 'Istri'),
(4, 'Anak'),
(5, 'Menantu'),
(6, 'Cucu'),
(7, 'Orang Tua'),
(8, 'Mertua'),
(9, 'Famili Lain'),
(10, 'Pembantu'),
(11, 'Lainnya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `hubungan_keluarga`
--
ALTER TABLE `hubungan_keluarga`
  ADD PRIMARY KEY (`id_stat_hbkel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
