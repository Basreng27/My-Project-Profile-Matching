-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Jun 2022 pada 00.33
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
('0403027304', 'Uro Abdurohim', '0403027304'),
('admin', 'Rayandra Wandi Marselana', 'admin');

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
  `riwayat` varchar(500) NOT NULL,
  `score` double NOT NULL,
  `kuota` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `gelar`, `pendidikan_terakhir`, `status`, `keahlian`, `kode`, `no_telepon`, `riwayat`, `score`, `kuota`, `password`) VALUES
('-', 'Rin Rin Nuraeni', 'M.IT', '', 'n', '', 'RR', '087822975126', '', 0, 0, ''),
('0403027304', 'Uro Abdurohim', 'S.Kom.,MT', 'S2', 'y', 'Web', 'UA', '087822988483', ', Web, Data mining, Ai', 2, 2, '0403027304'),
('0410087711', 'Yus Jayusman', 'S.Kom,.MT', '', 'y', 'IoT', 'YJ', '081809809020', '', 0, 2, '0410087711'),
('0411048105', 'Dedy Apriadi', 'M.Si', '', 'y', '', 'DA', '0812559884', '', 0, 2, ''),
('0413026101', 'Dani Pradana', 'MT', 'S2', 'y', 'Management Proyek, WEB', 'DP', '08129677654', '', 1.4, 2, ''),
('0424118401', 'Indra Maulana Yusuf Kusumah', 'M.Kom', '', 'y', '', 'IM', '081223488456', '', 0, 2, ''),
('0826098201', 'Mina Ismu Rahayu', 'M.T.', 'Magister', 'y', 'Image Processing, AI', 'MN', '081321131982', '', 0, 2, '0826098201'),
('1017078801', 'Siti Yuliyanti', 'ST., M.Kom.', 'S2 - Ilmu Komputer', 'y', 'Data Mining, Sistem Informasi Rekomendasi, UX (User Experience)', 'SY', '081285879875', ', Mobile, Data mining', 0, 2, '1017078801');

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
  `progres` varchar(500) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `kategori1` varchar(100) NOT NULL,
  `kategori2` varchar(50) NOT NULL,
  `kategori3` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul`
--

INSERT INTO `judul` (`id`, `nim`, `judul`, `kode`, `nama`, `progres`, `ta`, `kategori1`, `kategori2`, `kategori3`, `semester`, `status`) VALUES
(50, 1218001, 'Sistem Pemberian Cat Feed Otomatis Menggunakan Microkontroler Arduino Uno Berbasis Internet of Things', 'UA', 'Uro Abdulrohim', '', '2018/2019', '', '', '', 'ganjil', 'lulus'),
(51, 1218620, 'Perancangan Bangun Alat Deteksi Kebocoran GAS LPG Berbasis Arduino', 'UA', 'Uro Abdulrohim', '', '2021/2022', '', '', '', 'ganjil', 'bimbingan'),
(56, 1218022, 'Sistem Rekomendasi Dosen Pembimbing Skripsi Menggunakan Metode Profile Matching (Studi Kasus : STMIK Bandung)', 'DP', 'Dani Pradana', '', '2020/2021', '', '', '', 'ganjil', 'bimbingan'),
(57, 1218022, 'SPK Dosen Pembimbing', 'UA', 'Uro Abdurohim', 'bab 2 lanjut bab 3', '2018/2019', '', '', '', 'ganjil', 'lulus'),
(58, 1218001, 'aa', 'DP', 'Dani Pradana', '', '2018/2019', '', '', '', 'ganjil', 'bimbingan'),
(61, 1211068, 'SISTEM MONITORING PERPUSTAKAAN DALAM MENINGKATKAN MINAT BACA PADA PERPUSTAKAAN DI SMK AL-HUDA SARIWANGI', 'MN', 'Mina Ismu Rahayu', '', '2016/2017', 'IoT', 'Web', 'Lainnya', 'ganjil', 'lulus'),
(62, 1209003, 'Aplikasi Pembelajaran Iqra Berbasis Android ', 'SY', 'Siti Yuliyanti', '', '2010/2011 ', 'Mobile', 'Data Mining', 'Lainnya', 'ganjil', 'lulus'),
(63, 1205016, 'Sistem Pakar Diagnosis Kerusakan Hardware dan Software ASA Komputer ', 'UA', 'Uro Abdurohim', '', '2010/2011 ', 'Web', 'Data Mining', 'AI', 'ganjil', 'lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(20) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(3, 'Web'),
(4, 'Mobile'),
(5, 'IoT'),
(6, 'Data Mining'),
(7, 'AI');

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
(1205016, 'ADHIWIRIA MUHAMMAD HAEKHAL', '081313141533', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2005),
(1209003, 'NENENG NURHASANAH', '08989195129', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2009),
(1209008, 'KARTINI MARBUN', '085287287100', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2009),
(1209611, 'AGUS SOLIHIN', '081320423653', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2009),
(1210712, 'MOCHAMAD NASIR', '082118953639', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2010),
(1211068, 'DADANG SARIP', '085351989594', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211069, 'SIROJUDIN', '08572473169', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211071, 'ADI SA\'ADILAH', '085723670059', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211077, 'II ISMAIL', '085310792677', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211079, 'MOCHAMAD IQBAL TAWAKAL SUBANDI', '089656505338', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211102, 'SITI ALIYAH', '083826555703', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211119, 'CEP YUDI FAJAR S', '085722644494', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211121, 'RIVA RINALDY', '08987810829', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211156, 'IWAN IRAWAN', '081912720194', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211157, 'ARI SUBAGJA', '085659118100', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211176, 'NISA INDRIYA RAHAYU', '089619207709', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211178, 'RADIX GINANJAR SAPUTRO', '089666330858', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211605, 'YUGA KARTIWA', '085722533291', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211755, 'AGUS SUGIANA', '0811232275', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1211760, 'GUSMON MALTHA', '08127685242', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2011),
(1212604, 'GUGI GUNAWAN', '081214025954', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212610, 'RAYHAN FIRDAUS', '082310646496', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212613, 'MOCHAMMAD SYAIFUL BARKAH PRATAMA', '085102494169', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212701, 'ARIF DARYANTO', '081339599575', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212702, 'ENDRA ABDUL HADI', '085223294223', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212706, 'RADEN MOHAMMAD FURQANA FATHUZZAMAN', '08170061133', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212713, 'MAHENDRI WINATA', '085721821555', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1212723, 'KRISNA BAYU SAKTI ANDRIANSYAH', '085722307480', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2012),
(1213001, 'AKBAR ROSMANDA', '089669907509', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213002, 'AZHAR PRATAMA', '08814579468', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213004, 'ARIEF RAHMAN PUTRA', '082218377729', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213005, 'AZIS ERDIYANA', '088697618182', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213007, 'MUHAMMAD ALIYA AKBAR TAUHID', '085861777633', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213015, 'YUNUS AHMAD HASAN BAKTIR', '083822508161', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213018, 'SELA SOPIANTI', '085221377076', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213020, 'FERA ANGGUN PRATIWI', '085659045144', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213021, 'YULIANTI', '08985777155', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213022, 'DELIS PUJI SOLIHAT SYAMBAS', '08893611127', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213023, 'Joao Da Conceicao ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213024, 'ASEP HERMAWAN', '081223984364', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213025, 'DIKA HANDIKA HIKMAWAN', '8973623909', 'TEKNIK INFORMATIKA', 'Reguler (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213032, 'Illiyin Almeito ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213045, 'Akhmad Yazid Arifin ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213047, 'Novo Christian Randy S ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213601, 'Lidya Maria Ulfa ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1213716, 'Ahmad Basyari Alwi ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2013),
(1215005, 'Mita Aryanti ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215006, 'Farida Affianti ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215007, 'Zalfa Siti Asa Salsabilla ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215008, 'Radityo Yoga Pratama ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215010, 'Hanif Hairulloh ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215017, 'Agung Firmansyah ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215023, 'Aini ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215029, 'Andarip ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215056, 'Didi Tarmadi ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215062, 'Dwi Riyadi ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215075, 'Heni Angreni ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215092, 'Lasminto ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215099, 'Leli Suryani ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215113, 'Megi Harya Kusumah ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215128, 'Muhamad Daniat ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215157, 'Rahagustian Sumarna ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215164, 'Rapikah Dury ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215184, 'Silvi Nur Afifah ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215187, 'Siska Andriani ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215201, 'Tara Kamandaka ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215602, 'Nasratul Hasnah ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1215701, 'Bayu Rohmat Desplantika Sukmana', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1216706, 'Bayu Handono ', '', 'TEKNIK INFORMATIKA', 'REGULER (A)', 'Mina Ismu Rahayu.M.T', 2015),
(1218001, 'Mutiara Azzahra', '0895422509663', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218007, 'Firman Putra Ariansyah', '087737975025', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218011, 'Gita Purnamasari', '083829393702', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218013, 'Tantra', '087739859278', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218015, 'Adrian Nugraha', '089637214475', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218018, 'Mochamad Fiqri Novansyah', '085863432745', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218022, 'Rayandra Wandi Marselana', '0881023313247', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218023, 'Muhammad Miftakhul Rizky', '082126915297', 'Teknik Informatika', 'Reguler (A)', 'Mina Ismu Rahayu', 2018),
(1218620, 'Dede Suarna Ramdhani', '088218978287', 'Teknik Informatika', 'Reguler (B)', 'Mina Ismu Rahayu', 2018),
(3211004, 'ERZAN ROSBRIANTO ', '083821577080', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211017, 'ACEP SOPIAN FIRMANSYAH', '085654200418', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211094, 'DEDEN KUSWANDI ', '083817392444', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211097, 'TATANG SETIADI ', '085864699985', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211100, 'ISWANDI', '087728358655', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211134, 'DANI SUKMANA ', '081220578762', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211141, 'ANI SITI SUMARNI ', '085720544942', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211144, 'DEDE SUHERMAN ', '081323071173', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211183, 'CECEP RIDWAN FAUZI ', '085793511929', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211185, 'IWAN SUWANDI ', '081909791993', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211191, 'HANDI PURNAMA ', '085797154990', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211193, 'GILANG HILDAYANTI NURANDAYA', '082298986432', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211195, 'RINA MUHRIATI ', '087714544499', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211617, 'IRFAN TAUFIK ', '081394002880', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211628, 'NURUL CHOERUNNISA', '087821665606', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211629, 'FITRI YANTI ', '02261333316', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211702, 'RISYAD RAHMAN ', '085255172617', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211712, 'MUDAMADYA MAULIE AKBAR', '081251033999', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211742, 'SOFYAN FATUROCHMAN ', '085282156050', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211743, 'AZMI SANUSI ', '085710170000', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211755, 'NURDINI RIZKI UTAMI ', '08997057827', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211775, 'TINI SARTINI ', '085860339073', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3211776, 'MARYANTI RAHMAWATI ', '082126473214', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2011),
(3212059, 'RIO REYNALDI', '0877703744324', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2012),
(3212087, 'CHEP ANGGA KURNIA NUGRAHA', '085223180069', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2012),
(3212703, 'DINA ROSTIANA', '083829782095', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2012),
(3213001, 'CHRISTY AFRIYANI', '089613777793', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213010, 'HANNA SARA DWI AGUSTINA', '082115566727', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213021, 'RATIH MAWARNI', '082118069846', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213030, 'MUHAMAD IMAN SEPTIANTO', '087820326807', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213031, 'LUKMAN NURHAKIM', '085220219554', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213032, 'ERNA ANJANI', '085798550977', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213035, 'LISDA HOLISOH', '081572247653', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213037, 'AS\'ARI MATURIDI', '082217477293', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3213901, 'MADE BAGUS DWIHARDHANA', '087800060802', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3214006, 'ACEP RIZA', '085347518238', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3214021, 'AHMAD SUFYAN', '085828266481', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3214024, 'MIRAWATI', '081364711786', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3214032, 'AHMAD WAHYUDI', '085654713945', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3214043, 'AINUN FITRIA ELMAYANTI', '082255467924', 'SISTEM INFORMASI', 'Reguler (A)', 'Siti Yuliyanti.ST.,M.Kom', 2013),
(3214163, 'Sri Rosmayanti ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2014),
(3215002, 'Reza Fernanda ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215003, 'Nida Nur Apridayanti ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215007, 'Marina Hasbi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215008, 'Husna.H.M.Lasindue ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215012, 'Ulpa Yanti ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215016, 'Herul ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215019, 'Ajeng Ima Maulani Rachman', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215023, 'Mala Agung Tina ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215030, 'Achmad Sidik ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215032, 'Eko Fajar Sulistyawan ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215034, 'Wahyudi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215038, 'Tulus Sartika ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215039, 'Wisnu Ramdhani ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215045, 'Hasrun ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215051, 'Arina Al - Haque ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215052, 'Ulva Ustahdiana ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215055, 'Fatkhurohman ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215056, 'Maurien Desiana Effendi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215070, 'Andriyani Susilawati ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215073, 'Handoyo ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215074, 'Rudi Sumartono ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215077, 'Lintan Rizkia ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215080, 'Abdul Rahman ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215087, 'Santi Yulianti ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215093, 'Elya Siska Anggraeni ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215094, 'Tika Rismayanti ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215098, 'Heni Rohaeni Amiati ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215123, 'Siti Nurannisa ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215129, 'Handi Sopandi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215142, 'Suhudi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215157, 'Takwa Setya Budi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215166, 'Riska Triani ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215171, 'Rani Nurbaeti ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215178, 'Dewi Aulia Suryani ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215187, 'Ai Nurdiawati ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215190, 'Fauzan Sururi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215197, 'Reza Sifa Fauzia ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215202, 'Yenti Silviyani ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215206, 'Yayu Yulia Rahmatillah ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215208, 'Yohanes Agung ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215211, 'Lina Nurhayati ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215214, 'Siti Fauziah ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215243, 'Syamsudin Nurjaman ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215245, 'Fitria Dewi ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215249, 'Andri Irawan ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215602, 'Farida Rizki Lestari ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215608, 'Resa Rizki Ratnasari ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
(3215902, 'Muhammad Yusuf Hawasy ', '', 'SISTEM INFORMASI', 'REGULER (A)', 'Siti Yuliyanti.ST.,M.Kom', 2015),
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
  `kategori1` varchar(50) NOT NULL,
  `kategori2` varchar(50) NOT NULL,
  `kategori3` varchar(50) NOT NULL,
  `ta` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `status` varchar(8) NOT NULL,
  `nim` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `judul`, `kategori1`, `kategori2`, `kategori3`, `ta`, `semester`, `status`, `nim`) VALUES
(1, 'Perancangan Aplikasi Iuran Kas Warga di Manglayang Baru I Berbasis Android', 'Mobile', '', '', '2018/2019', 'genap', 'diterima', 1218015),
(3, 'Aplikasi Resep Masakan Berbasis Android', 'Mobile', 'AI', 'Lainnya', '2018/2019', 'genap', 'diterima', 1218007),
(4, 'Pendeteksi Penyakit Jantung Koroner Menggunakan Algoritma Fuzzy Logic Berbasis Web', 'Web', '', '', '2018/2019', 'ganjil', 'diterima', 3218003),
(5, 'Aplikasi Monitoring Perkembangan Gizi Balita Menggunaka Metode Fuzzy Tahani (Studi Kasus : Posyandu Bhakti Pertiwi)', 'Web', '', '', '2018/2019', 'ganjil', 'diterima', 1218011),
(6, 'Pendeteksi Website Phising', 'Web', '', '', '2018/2019', 'genap', 'diterima', 1218018),
(7, 'Aplikasi Penyedia Icon Untuk Developer', 'Web', '', '', '2018/2019', 'genap', 'diterima', 1218023),
(9, 'Deteksi Dini Retinoblastoma Menggunakan Metode CNN', 'Mobile', '', '', '2018/2019', 'genap', 'diterima', 3218013),
(11, 'Identifikasi Kecanduan Game Online Terhadap Pelajar Dengan Metode Forward Chaining Berbasis Android', 'Mobile', '', '', '2018/2019', 'genap', 'diterima', 1218013),
(12, 'Identifikasi Penggunaan masker menggunakan YOLO 5', 'Sensor', '', '', '2018/2019', 'genap', 'diterima', 3218010),
(14, 'Sistem rekomendasi pembimbing skripsi', 'web', '', '', '2021/2022', 'genap', 'diterima', 1218022),
(15, 'SPK Rekomendasi Dosen Pembimbing Skripsi', 'Web', 'AI', 'Data Mining', '2018/2019', 'ganjil', 'diterima', 1218022),
(16, 'Sistem Informasi Notaris Pembuatan Akta Jaminan Fidusia dengan Studi Kasus : Kantor Notaris dan PPAT Nofinus Ginting, SH', 'Web', 'Web', 'Lainnya', '2010/2011 ', 'ganjil', 'diterima', 1205016),
(18, 'Pembuatan Aplikasi Enkripsi dan Deskripsi SMS Menggunakan Algoritma RSA pada Pemograman Java ', 'Web', 'Mobile', 'AI', '2010/2011 ', 'ganjil', 'diterima', 1209008),
(19, 'Sistem Informasi Persediaan Barang Gudang Spare Part PT.Putera Mulya Terang Indah Textile Industries ', 'Web', 'Web', 'Web', '2010/2011 ', 'ganjil', 'diterima', 1209611),
(20, 'Sistem Pengelolaan Tender Untuk Dokumentasi Data Peralatan ', 'Mobile', 'Web', 'Data Mining', '2010/2011 ', 'ganjil', 'diterima', 1210712);

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
  ADD KEY `kode` (`kode`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `judul`
--
ALTER TABLE `judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `judul`
--
ALTER TABLE `judul`
  ADD CONSTRAINT `judul_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `dosen` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `judul_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
