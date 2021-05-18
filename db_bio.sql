-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2021 at 08:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` varchar(60) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `NIDN` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `universitas` varchar(200) NOT NULL,
  `kode_pt` varchar(30) NOT NULL,
  `matakuliah` varchar(255) NOT NULL,
  `karir` text NOT NULL,
  `penelitian` text NOT NULL,
  `prestasi` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `dok` varchar(200) NOT NULL,
  `create_ad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fix` enum('baru','edit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_person`
--

CREATE TABLE `t_person` (
  `nomor_id` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('male','female','','') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `no_hp` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tentang` text NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_person`
--

INSERT INTO `t_person` (`nomor_id`, `name`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `jabatan`, `institusi`, `no_hp`, `email`, `tentang`, `image`) VALUES
('606d2b536aa06', 'Soekarno', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '085768137009', 'sukarno@gmail.com', 'Dr. Ir. H. Soekarno adalah Presiden pertama Republik Indonesia yang menjabat pada periode 1945–1967. Ia memainkan peranan penting dalam memerdekakan bangsa Indonesia dari penjajahan Belanda. Ia adalah Proklamator Kemerdekaan Indonesia yang terjadi pada tanggal 17 Agustus 1945', '606d2b536aa06.jpg'),
('606d52b1c8ad6', 'Soeharto', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '021232332', 'suharto@gmail.com', 'Jenderal Besar TNI H. M. Soeharto, adalah Presiden kedua Indonesia yang menjabat dari tahun 1967 sampai 1998, menggantikan Soekarno', '606d52b1c8ad6.jpg'),
('606d5c8738c38', 'Mohammad Hatta', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Wakil Presiden', 'Indonesia', '02132323', 'Hatta@gmail.com', 'Dr. Drs. H. Mohammad Hatta adalah negarawan dan ekonom Indonesia yang menjabat sebagai Wakil Presiden Indonesia pertama. Ia bersama Soekarno memainkan peranan sentral dalam perjuangan kemerdekaan Indonesia dari penjajahan Belanda sekaligus memproklamirkannya pada 17 Agustus', '606d5c8738c38.jpg'),
('606d5cd03af0c', 'Adam Malik', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Wakil Presiden', 'Indonesia', '021322', 'adam@gmail.com', 'H. Adam Malik Batubara adalah seorang politikus Indonesia dan mantan jurnalis yang menjabat sebagai wakil presiden ketiga. Sebelumnya ia menjabat sebagai ketua parlemen, menteri luar negeri, presiden Majelis Umum Perserikatan Bangsa-Bangsa, dan jurnalis. ', '606d5cd03af0c.jpg'),
('606d5d1217e75', 'B. J. Habibie', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '213123', 'habibie@gmail.com', 'Prof. Dr. Ing. H. Bacharuddin Jusuf Habibie, FREng adalah Presiden Republik Indonesia yang ketiga. Sebelumnya, B.J. Habibie menjabat sebagai Wakil Presiden Republik Indonesia ke-7, menggantikan Try Sutrisno. B. J. Habibie menggantikan Soeharto yang mengundurkan diri dari jabatan presiden pada tanggal 21 Mei 1998.', '606d5d1217e75.jpg'),
('606d5d6e159f1', 'Abdurrahman Wahid', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '021321321', 'Abdurrahman@gmail.com', 'Dr. K. H. Abdurrahman Wahid atau yang akrab disapa Gus Dur adalah tokoh Muslim Indonesia dan pemimpin politik yang menjadi Presiden Indonesia yang keempat dari tahun 1999 hingga 2001. Ia menggantikan Presiden B.J. Habibie setelah dipilih oleh Majelis Permusyawaratan Rakyat hasil Pemilu 1999.', '606d5d6e159f1.jpg'),
('606d5da68b3f0', 'Megawati Soekarnoputri', '', '0000-00-00', 'female', 'Jakarta', 'Mantan Presiden', 'Indonesia', '0213123', 'Megawati@gmail.com', 'Dr. Hj. Dyah Permata Megawati Setyawati Soekarnoputri atau umumnya lebih dikenal sebagai Megawati Soekarnoputri atau biasa disapa dengan panggilan \"Mbak Mega\" adalah Presiden Indonesia yang kelima yang menjabat sejak 23 Juli 2001 sampai 20 Oktober 2004', '606d5da68b3f0.jpg'),
('606d5e2f46d7a', 'Hamzah Haz', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Wakil Presiden', 'Indonesia', '0312311', 'hamzah@gmail.com', 'Dr. H. Hamzah Haz, M.A., Ph.D. adalah Wakil Presiden Republik Indonesia kesembilan yang menjabat sejak tahun 2001 bersamaan dengan naiknya Megawati Soekarnoputri menjadi Presiden Republik Indonesia. Dalam kepartaian, Hamzah Haz menjabat sebagai Ketua Umum Partai Persatuan Pembangunan tahun 1998–2007', '606d5e2f46d7a.jpg'),
('606d5ee39cc5e', 'Susilo Bambang Yudhoyono', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '02132123', 'Susilo@gmail.com', 'Jenderal TNI Prof. Dr. Dr. H. Susilo Bambang Yudhoyono, M.A., GCB., AC. adalah Presiden Indonesia ke-6 yang menjabat sejak 20 Oktober 2004 hingga 20 Oktober 2014.Ia adalah Presiden pertama di Indonesia yang dipilih melalui jalur pemilu', '606d5ee39cc5e.jpg'),
('606d9b768eb46', 'Jusuf Kalla', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '08313123', 'jusuf@gmail.com', 'Dr. Drs. H. Muhammad Jusuf Kalla, sering ditulis sebagai Jusuf Kalla atau JK adalah pengusaha dan politisi Indonesia yang menjabat sebagai Wakil Presiden Indonesia ke-10 dan ke-12. Ia merupakan Wakil Presiden Indonesia pertama yang menjabat 2 kali, ia menjadi Wapres dalam 2 masa jabatan yang tidak berturut-turut', '606d9b768eb46.jpg'),
('606d9bc789c99', 'Boediono', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Wakil Presiden', 'Indonesia', '08782342', 'Boediono@gmail.com', 'Prof. Dr. H. Boediono, B.Sc., M.Ec. adalah Wakil Presiden Indonesia kesebelas yang menjabat sejak 20 Oktober 2009 hingga 20 Oktober 2014. Ia terpilih dalam Pilpres 2009 bersama pasangannya, presiden yang sedang menjabat, Susilo Bambang Yudhoyono', '606d9bc789c99.jpg'),
('606d9d1d9d072', 'Joko Widodo', '', '0000-00-00', 'male', 'Jakarta', 'Mantan Presiden', 'Indonesia', '0866757', 'joko@gmail.com', 'Ir. H. Joko Widodo atau Jokowi adalah Presiden ke-7 Indonesia yang mulai menjabat sejak 20 Oktober 2014. Terpilih dalam Pemilu Presiden 2014, Jokowi menjadi Presiden Indonesia pertama sepanjang sejarah yang bukan berasal dari latar belakang elite politik atau militer Indonesia', '606d9d1d9d072.jpg'),
('608fce301c476', 'tessssssssssssss', '', '0000-00-00', 'male', 'wwwwwwwwwwww', 'wwwwwwwwwwww', 'wwwwwwwwwwww', '1111', 'test@gmail.com', 'Profile*', '608fce301c476.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `t_person`
--
ALTER TABLE `t_person`
  ADD PRIMARY KEY (`nomor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
