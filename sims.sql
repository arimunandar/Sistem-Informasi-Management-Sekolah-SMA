-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2015 pada 03.25
-- Versi Server: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi-evan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `galeri_nama` varchar(50) DEFAULT NULL,
  `galeri_link` text,
  PRIMARY KEY (`galeri_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_hari` varchar(25) DEFAULT NULL,
  `jam_id` int(11) DEFAULT NULL,
  `pelajaran_id` int(11) DEFAULT NULL,
  `kelas_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`jadwal_id`),
  KEY `pelajaran_id` (`pelajaran_id`,`kelas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
  `jam_id` int(11) NOT NULL AUTO_INCREMENT,
  `jam_nama` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`jam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kelas_id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas_nama` varchar(25) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`kelas_id`),
  KEY `users_id` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date DEFAULT NULL,
  `nama_file` varchar(100) DEFAULT NULL,
  `tipe_file` varchar(10) DEFAULT NULL,
  `ukuran_file` varchar(20) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `pelajaran_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelajaran_nama` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`pelajaran_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `sekolah_id` int(11) NOT NULL AUTO_INCREMENT,
  `sekolah_nama` varchar(50) DEFAULT NULL,
  `sekolah_telp` varchar(16) DEFAULT NULL,
  `sekolah_alamat` text,
  `sekolah_akreditasi` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`sekolah_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `semester_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester_nama` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_nama`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE IF NOT EXISTS `tahun` (
  `tahun_id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_nama` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`tahun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`tahun_id`, `tahun_nama`) VALUES
(2, '2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_noinduk` int(11) DEFAULT NULL,
  `users_nama` varchar(25) DEFAULT NULL,
  `users_username` varchar(25) DEFAULT NULL,
  `users_password` varchar(25) DEFAULT NULL,
  `users_level` varchar(25) DEFAULT NULL,
  `users_telp` varchar(16) DEFAULT NULL,
  `users_alamat` text,
  `users_email` varchar(50) DEFAULT NULL,
  `users_status` varchar(25) DEFAULT NULL,
  `users_foto` text,
  `kelas_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`users_id`),
  KEY `kelas_id` (`kelas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`users_id`, `users_noinduk`, `users_nama`, `users_username`, `users_password`, `users_level`, `users_telp`, `users_alamat`, `users_email`, `users_status`, `users_foto`, `kelas_id`) VALUES
(1, 123, 'Administrator', 'admin', 'admin', 'admin', '2234', 'fsd', 'admin@admin.com', 'PNS', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
