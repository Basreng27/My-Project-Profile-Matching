-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Feb 2022 pada 23.57
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekomendasi_dospem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `nama`, `password`) VALUES
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `keahlian` varchar(500) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `keinginan` varchar(500) NOT NULL,
  `kuota` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `gelar`, `pendidikan_terakhir`, `status`, `keahlian`, `kode`, `no_telepon`, `keinginan`, `kuota`, `password`) VALUES
('-', 'Rin Rin Nuraeni', 'M.IT', '', 'n', '', 'RR', '087822975126', 'mobile', 0, ''),
('0403027304', 'Uro Abdulrohim', 'S.Kom.,MT', '', 'y', '', 'UA', '087822988483', 'mobile, iot', 1, '0403027304'),
('0410087711', 'Yus Jayusman', 'S.Kom,.MT', '', 'y', '', 'YJ', '081809809020', 'Data Mining, IoT', 1, ''),
('0411048105', 'Dedy Apriadi', 'M.Si', '', 'y', '', 'DA', '0812559884', '', 1, ''),
('0413026101', 'Dani Pradana', 'MT', 'S2', 'y', 'Management Proyek', 'DP', '08129677654', 'Management Proyek', 1, ''),
('0424118401', 'Indra Maulana Yusuf Kusumah', 'M.Kom', '', 'y', '', 'IM', '081223488456', '', 1, ''),
('0826098201', 'Mina Ismu Rahayu', 'M.T.', 'Magister', 'y', 'Image Processing, AI', 'MN', '081321131982', 'Image Processing, Deep Learning', 1, '0826098201'),
('1017078801', 'Siti Yuliyanti', 'ST., M.Kom.', 'S2 - Ilmu Komputer', 'y', 'Data Mining, Sistem Informasi Rekomendasi, UX (User Experience)', 'SY', '081285879875', 'Data Mining, Sistem Informasi Rekomendasi, UX (User Experience), Supplay Chain Management', 1, '1017078801'),
('123', 'Rayandra Wandi Marselana', 'S.Kom', 'S1', 'n', 'WEB', 'RM', '0881023313247', 'WEB', 0, '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul`
--

CREATE TABLE `judul` (
  `id` int(11) NOT NULL,
  `nim` int(7) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul`
--

INSERT INTO `judul` (`id`, `nim`, `judul`, `kode`, `nama`, `status`) VALUES
(50, 1218001, 'Sistem Pemberian Cat Feed Otomatis Menggunakan Microkontroler Arduino Uno Berbasis Internet of Things', 'UA', 'Uro Abdulrohim', 'membimbing'),
(51, 1218620, 'Perancangan Bangun Alat Deteksi Kebocoran GAS LPG Berbasis Arduino', 'UA', 'Uro Abdulrohim', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `jenis_mahasiswa` varchar(25) NOT NULL,
  `dosen_wali` varchar(100) NOT NULL,
  `angkatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `no_hp`, `jurusan`, `jenis_mahasiswa`, `dosen_wali`, `angkatan`) VALUES
(1218001, 'Mutiara Azzahra', '0895422509663', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218007, 'Firman Putra Ariansyah', '087737975025', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218011, 'Gita Purnamasari', '083829393702', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218013, 'Tantra', '087739859278', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218015, 'Adrian Nugraha', '089637214475', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218018, 'Mochamad Fiqri Novansyah', '085863432745', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218022, 'Rayandra Wandi Marselana', '0881023313247', 'Sistem Informasi', 'Reguler (A)', 'Siti Yuliyanti', 2018),
(1218023, 'Muhammad Miftakhul Rizky', '082126915297', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218620, 'Dede Suarna Ramdhani', '088218978287', 'Teknik Informatika', 'Reguler (B)', 'Mina Ismu Rahayu', 2018),
(3218003, 'Fitri Setiyani', '088809497220', 'Sistem Informasi', 'Reguler (A)', 'Siti Yuliyanti', 2018),
(3218010, 'Yuslan Septian', '082114865866', 'Sistem Informasi', 'Reguler (A)', 'Siti Yuliyanti', 2018),
(3218013, 'Qolby Fahrul Rizky', '085559400834', 'Sistem Informasi', 'Reguler (A)', 'Siti Yuliyanti', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `status` varchar(8) NOT NULL,
  `nim` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `judul`, `kategori`, `status`, `nim`) VALUES
(1, 'Perancangan Aplikasi Iuran Kas Warga di Manglayang Baru I Berbasis Android', 'Mobile', 'diterima', 1218015),
(3, 'Aplikasi Resep Masakan Berbasis Android', 'Mobile', 'diterima', 1218007),
(4, 'Pendeteksi Penyakit Jantung Koroner Menggunakan Algoritma Fuzzy Logic Berbasis Web', 'Web', 'diterima', 3218003),
(5, 'Aplikasi Monitoring Perkembangan Gizi Balita Menggunaka Metode Fuzzy Tahani (Studi Kasus : Posyandu Bhakti Pertiwi)', 'Web', 'diterima', 1218011),
(6, 'Pendeteksi Website Phising', 'Web', 'diterima', 1218018),
(7, 'Aplikasi Penyedia Icon Untuk Developer', 'Web', 'diterima', 1218023),
(9, 'Deteksi Dini Retinoblastoma Menggunakan Metode CNN', 'Mobile', 'diterima', 3218013),
(10, 'Sistem Pengambilan Keputusan Rekomendasi Dosen Pembimbing Skripsi Menggunakan Metode Profile Matching (Studi Kasus : STMIK Bandung)', 'Web', 'diterima', 1218022),
(11, 'Identifikasi Kecanduan Game Online Terhadap Pelajar Dengan Metode Forward Chaining Berbasis Android', 'Mobile', 'diterima', 1218013),
(12, 'Identifikasi Penggunaan masker menggunakan YOLO 5', 'Sensor', 'diterima', 3218010);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `judul`
--
ALTER TABLE `judul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode` (`kode`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `judul`
--
ALTER TABLE `judul`
  ADD CONSTRAINT `judul_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `dosen` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
