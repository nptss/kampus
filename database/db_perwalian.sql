-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Feb 2018 pada 16.23
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perwalian`
--
CREATE DATABASE IF NOT EXISTS `db_perwalian` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_perwalian`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `kode` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `kode`, `password`) VALUES
(1, 'pangestika', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_catatan`
--

CREATE TABLE `tbl_catatan` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_catatan`
--

INSERT INTO `tbl_catatan` (`id`, `nim`, `nidn`, `isi`, `waktu`) VALUES
(7, 204141001, 180100, 'Jos Lah', '2018-01-19 17:46:17'),
(8, 204141003, 180100, 'Yahh Coba Saja', '2018-01-20 16:01:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat`
--

INSERT INTO `tbl_chat` (`id`, `id_pengirim`, `isi`, `waktu`) VALUES
(39, 180100, '  hiiii', '0000-00-00 00:00:00'),
(40, 204141019, 'Iya\n', '0000-00-00 00:00:00'),
(41, 204141019, '  iya', '0000-00-00 00:00:00'),
(42, 204141019, 'Sama sama', '0000-00-00 00:00:00'),
(43, 180100, '  kkkkk', '0000-00-00 00:00:00'),
(44, 180100, 'Yehhhh', '0000-00-00 00:00:00'),
(45, 204141008, '  jdshfagkadfvdfsbgfhb', '0000-00-00 00:00:00'),
(46, 204141008, '  Mas Dana?\n', '0000-00-00 00:00:00'),
(47, 204141008, 'jfghirhg', '0000-00-00 00:00:00'),
(48, 204141008, 'lp\n', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nidn` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nidn`, `nama_dosen`, `id_prodi`, `tgl_lahir`) VALUES
(180100, 'Fatimah Isnaeni, M.Kom', 1, '0000-00-00'),
(180101, 'Fatimah Isnaeni, M.Kom', 3, '0000-00-00'),
(180102, 'Fatimah Isnaeni, S.Kom', 4, '1997-07-29'),
(180103, 'Fatimah Isnaeni, M.Kom', 1, '0000-00-00'),
(180104, 'Fatimah Isnaeni, M.Kom', 3, '0000-00-00'),
(180105, 'Fatimah Isnaeni, M.Kom', 3, '0000-00-00'),
(180106, 'Fatimah Isnaeni, M.Kom', 4, '0000-00-00'),
(180107, 'Fatimah Isnaeni, M.Kom', 1, '0000-00-00'),
(180108, 'Pradi, S.Kom', 4, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`) VALUES
(1, '7A'),
(2, '7B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsul`
--

CREATE TABLE `tbl_konsul` (
  `id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konsul`
--

INSERT INTO `tbl_konsul` (`id`, `nim`, `nidn`, `isi`, `waktu`, `balasan`) VALUES
(1, 0, 0, 'Bingung', '2018-01-17 00:00:00', ''),
(2, 0, 0, 'Bingung', '2018-01-17 00:00:00', ''),
(3, 0, 0, 'Bingung', '2018-01-17 00:00:00', ''),
(4, 0, 0, 'Bingung', '2018-01-17 00:00:00', ''),
(5, 204141001, 180100, '\nSaya Bingung pak?', '2018-01-15 18:15:25', 'oooooooooooooooooooooooooooooooooooooooooooooooooo gitu'),
(9, 204141001, 180100, '\nSiap Pak Kalu Begitu', '2018-01-15 19:44:31', ''),
(10, 204141001, 180100, '\nSiap Pak Kalu Begitu\n\n===============================================\nBalasan\n\n\n===============================================\nJoossss\n', '2018-01-15 19:44:50', ''),
(11, 204141019, 180102, '\nSelamat malam pak dosen', '2018-01-16 16:52:17', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_krs`
--

CREATE TABLE `tbl_krs` (
  `id_krs` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `acc` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `periode` varchar(5) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nidn` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama_mhs`, `periode`, `id_prodi`, `id_kelas`, `nidn`, `tgl_lahir`) VALUES
(204141000, 'Ardi', '2018', 0, 1, 180100, '0000-00-00'),
(204141001, 'Mirna', '2018', 0, 1, 180100, '0000-00-19'),
(204141002, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141003, 'Surya Dwi Pamuji', '2018', 0, 1, 180100, '0000-00-00'),
(204141004, 'Ardi', '2018', 0, 1, 180100, '0000-00-00'),
(204141005, 'Pangestika Dian Saputri', '2018', 0, 1, 180103, '0000-00-00'),
(204141006, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141007, 'Pangestika Dian', '2018', 0, 1, 180103, '0000-00-00'),
(204141008, 'Ardi', '2018', 0, 1, 180103, '0000-00-00'),
(204141009, 'Pangestika Dian Saputri', '2018', 0, 1, 180107, '0000-00-00'),
(204141010, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141011, 'Pangestika Dian', '2018', 0, 1, 180107, '0000-00-00'),
(204141012, 'Ardi', '2018', 0, 1, 180100, '0000-00-00'),
(204141013, 'Pangestika Dian Saputri', '2018', 0, 1, 180103, '0000-00-00'),
(204141014, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141015, 'Pangestika Dian', '2018', 0, 1, 180107, '0000-00-00'),
(204141016, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141017, 'Pangestika Dian Saputri', '2018', 0, 1, 180102, '0000-00-00'),
(204141018, 'Ardi', '2018', 0, 1, 180104, '0000-00-00'),
(204141019, 'Pangestika Dian', '2018', 0, 1, 180102, '0000-00-00'),
(204141020, 'Ardi', '2018', 0, 1, 180104, '0000-00-00'),
(204141021, 'Pangestika Dian Saputri', '2018', 0, 1, 180102, '0000-00-00'),
(204141022, 'Ardi', '2018', 0, 1, 180104, '0000-00-00'),
(204141023, 'Pangestika Dian', '2018', 0, 1, 180105, '0000-00-00'),
(204141024, 'Ardi', '2018', 0, 1, 180106, '0000-00-00'),
(204141025, 'Pangestika Dian Saputri', '2018', 0, 1, 180105, '0000-00-00'),
(204141026, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141027, 'Pangestika Dian', '2018', 0, 1, 180106, '0000-00-00'),
(204141028, 'Ardi', '2018', 0, 1, 180101, '0000-00-00'),
(204141029, 'Pangestika Dian Saputri', '2018', 0, 1, 180104, '0000-00-00'),
(204141030, 'Ardi', '2018', 0, 1, 180105, '0000-00-00'),
(204141031, 'Pangestika Dian', '2018', 3, 1, 180102, '0000-00-00'),
(204141032, 'Ana Akbar', '2018', 4, 2, 180101, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, 'Sistem Informasi'),
(3, 'Teknik Informasi'),
(4, 'Biologi Manufaktur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_catatan`
--
ALTER TABLE `tbl_catatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD KEY `tbl_dosen_ibfk_1` (`id_prodi`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_konsul`
--
ALTER TABLE `tbl_konsul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `tbl_krs_ibfk_1` (`nim`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nidn` (`nidn`),
  ADD KEY `tbl_mahasiswa_ibfk_1` (`id_prodi`);

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_catatan`
--
ALTER TABLE `tbl_catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `nidn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180109;
--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_konsul`
--
ALTER TABLE `tbl_konsul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_krs`
--
ALTER TABLE `tbl_krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204141033;
--
-- AUTO_INCREMENT for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD CONSTRAINT `tbl_dosen_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tbl_prodi` (`id_prodi`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_krs`
--
ALTER TABLE `tbl_krs`
  ADD CONSTRAINT `tbl_krs_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
