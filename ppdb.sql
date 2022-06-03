-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2021 pada 12.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `konten` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `judul`, `konten`, `image`) VALUES
(2, 'BERMAIN', 'Dengan Bermain Belajar Akan Jadi Menyenangkan', 'IMG_1510.JPG'),
(3, '', '', 'IMG_1483.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `image`) VALUES
(1, 'Jungkat-jungkit', 'IMG_1548.JPG'),
(6, 'Ayunan', 'IMG_15481.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `image`) VALUES
(2, 'Bermain', 'IMG_1483.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `nama`, `image`) VALUES
(2, 'Struktur Organisasi', 'StrukturOrganisasi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_les`
--

CREATE TABLE `tb_les` (
  `id` int(11) NOT NULL,
  `no_pendaftar` varchar(125) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_anak` varchar(125) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `agama` varchar(125) NOT NULL,
  `tgl_anak` date NOT NULL,
  `usia` varchar(128) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `jarak_rumah_sekolah` varchar(128) NOT NULL,
  `tinggi` varchar(128) NOT NULL,
  `berat_badan` varchar(128) NOT NULL,
  `hobi` varchar(125) NOT NULL,
  `cita_cita` varchar(125) NOT NULL,
  `kk` varchar(125) NOT NULL,
  `nama_ayah` varchar(125) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `tgl_ayah` date NOT NULL,
  `nama_ibu` varchar(125) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `tgl_ibu` date NOT NULL,
  `penghasilan` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_les`
--

INSERT INTO `tb_les` (`id`, `no_pendaftar`, `nisn`, `nama_anak`, `nik_anak`, `agama`, `tgl_anak`, `usia`, `alamat`, `jarak_rumah_sekolah`, `tinggi`, `berat_badan`, `hobi`, `cita_cita`, `kk`, `nama_ayah`, `nik_ayah`, `tgl_ayah`, `nama_ibu`, `nik_ibu`, `tgl_ibu`, `penghasilan`, `status`) VALUES
(35, '202112001', 202112001, 'Nugraha', '123456', 'Islam', '2000-01-22', '21', 'wew', '123', '12', '12', 'we', 'we', '4.jpg', 'we', '123', '1996-12-31', 'wa', '123', '1997-12-31', '1 jt', 'Ditolak'),
(37, '202112002', 11111, 'Nugraha', '123', 'Islam', '2017-01-22', '4', 'qwe', '123', '12', '12', 'we', '121w', '3.jpg', 'we', '123', '2021-12-20', 'wa', '123', '2021-12-15', '1 jt', ''),
(38, '202112003', 10001, 'Nugraha', '1234', 'Kristen', '2013-12-29', '7', 's', '123', '12', '12', '', 'we', 'IMG_1510.JPG', 'we', '123', '2021-12-31', 'wa', '123', '2020-12-31', '1 jt', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tk`
--

CREATE TABLE `tb_tk` (
  `id` int(11) NOT NULL,
  `no_pendaftar` varchar(125) NOT NULL,
  `nama_anak` varchar(125) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `agama` varchar(125) NOT NULL,
  `tgl_anak` date NOT NULL,
  `usia` varchar(128) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `jarak_rumah_sekolah` varchar(128) NOT NULL,
  `tinggi` varchar(128) NOT NULL,
  `berat_badan` varchar(128) NOT NULL,
  `hobi` varchar(125) NOT NULL,
  `cita_cita` varchar(125) NOT NULL,
  `kk` varchar(125) NOT NULL,
  `nama_ayah` varchar(125) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `tgl_ayah` date NOT NULL,
  `nama_ibu` varchar(125) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `tgl_ibu` date NOT NULL,
  `penghasilan` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tk`
--

INSERT INTO `tb_tk` (`id`, `no_pendaftar`, `nama_anak`, `nik_anak`, `agama`, `tgl_anak`, `usia`, `alamat`, `jarak_rumah_sekolah`, `tinggi`, `berat_badan`, `hobi`, `cita_cita`, `kk`, `nama_ayah`, `nik_ayah`, `tgl_ayah`, `nama_ibu`, `nik_ibu`, `tgl_ibu`, `penghasilan`, `status`) VALUES
(33, '202112001', 'Nugraha', '123456', 'Islam', '2000-01-22', '21', 'Jln.Bojong Koneng', '1', '160', '40', 'Coding', 'Hacker', 'visimisi.jpg', 'UwU', '123456', '1987-12-31', 'OwO', '123456', '1987-12-31', '5.000.000', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tpq`
--

CREATE TABLE `tb_tpq` (
  `id` int(11) NOT NULL,
  `no_pendaftar` varchar(125) NOT NULL,
  `nama_anak` varchar(125) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `agama` varchar(125) NOT NULL,
  `tgl_anak` date NOT NULL,
  `usia` varchar(128) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `jarak_rumah_sekolah` varchar(128) NOT NULL,
  `tinggi` varchar(128) NOT NULL,
  `berat_badan` varchar(128) NOT NULL,
  `hobi` varchar(125) NOT NULL,
  `cita_cita` varchar(125) NOT NULL,
  `kk` varchar(125) NOT NULL,
  `nama_ayah` varchar(125) NOT NULL,
  `nik_ayah` varchar(16) NOT NULL,
  `tgl_ayah` date NOT NULL,
  `nama_ibu` varchar(125) NOT NULL,
  `nik_ibu` varchar(16) NOT NULL,
  `tgl_ibu` date NOT NULL,
  `penghasilan` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tpq`
--

INSERT INTO `tb_tpq` (`id`, `no_pendaftar`, `nama_anak`, `nik_anak`, `agama`, `tgl_anak`, `usia`, `alamat`, `jarak_rumah_sekolah`, `tinggi`, `berat_badan`, `hobi`, `cita_cita`, `kk`, `nama_ayah`, `nik_ayah`, `tgl_ayah`, `nama_ibu`, `nik_ibu`, `tgl_ibu`, `penghasilan`, `status`) VALUES
(35, '202112001', 'Nugraha', '123456', 'Kristen', '2014-12-30', '6', 'aas', '123', '12', '12', 'we', '121w', '41.jpg', 'we', '123', '2020-12-31', 'wa', '123', '2020-12-31', '1 jt', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(14, 'UwU', 'UwU@gmail.com', '$2y$10$OUmMX9LRV8jBap2RQY0cSOZ2fgUNSKyYos9RuWIjUVBgiuXZGMixO', '1024px-User_font_awesome_svg.png', 1, 1, 1638173249),
(35, 'Nugraha', 'Nugraha@gmail.com', '$2y$10$hKKhy6uLePtu6TJCNo4GPuB/itlVqOUy9yGkBgzFG2uA5MP0vFYKq', 'abstract-blue-geometric-powerpoint-templates2.jpg', 2, 1, 1638157578),
(36, 'Tets', 'Test@gmail.com', '$2y$10$ideoMm.KTboi1Ljd2D9s3uo4pe6.xTG9FUX5MyWwwf5EFvxw9LANu', 'abstract-blue-geometric-powerpoint-templates.jpg', 1, 1, 1638183130);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Petugas'),
(4, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `nama`, `image`) VALUES
(1, 'Visi & Misi', 'VisiMisi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_les`
--
ALTER TABLE `tb_les`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tk`
--
ALTER TABLE `tb_tk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tpq`
--
ALTER TABLE `tb_tpq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_les`
--
ALTER TABLE `tb_les`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_tk`
--
ALTER TABLE `tb_tk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_tpq`
--
ALTER TABLE `tb_tpq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
