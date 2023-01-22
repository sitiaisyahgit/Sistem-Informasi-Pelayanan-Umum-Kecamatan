-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 05:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekapitulasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahliwaris`
--

CREATE TABLE `ahliwaris` (
  `nomor_ahliwaris` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `nama_ahli_waris` varchar(100) NOT NULL,
  `tempat_tl_ah` varchar(100) NOT NULL,
  `tanggal_lahir_ah` date NOT NULL,
  `jenis_kelamin_ah` varchar(30) NOT NULL,
  `agama_ah` varchar(30) NOT NULL,
  `alamat_ah` varchar(255) NOT NULL,
  `nama_pewaris` varchar(100) NOT NULL,
  `tempat_tl_pw` varchar(100) NOT NULL,
  `tanggal_lahir_pw` date NOT NULL,
  `jenis_kelamin_pw` varchar(30) NOT NULL,
  `agama_pw` varchar(30) NOT NULL,
  `alamat_pw` varchar(255) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desnikah`
--

CREATE TABLE `desnikah` (
  `nomor_desnikah` varchar(30) NOT NULL,
  `nama_pria` varchar(100) NOT NULL,
  `tempat_tl_pria` varchar(100) NOT NULL,
  `tanggal_lahir_pria` date NOT NULL,
  `jenis_kelamin_pria` varchar(40) NOT NULL,
  `agama_pria` varchar(50) NOT NULL,
  `status_pria` varchar(50) NOT NULL,
  `nama_pr` varchar(100) NOT NULL,
  `tempat_tl_pr` varchar(100) NOT NULL,
  `jenis_kelamin_pr` varchar(20) NOT NULL,
  `agama_pr` varchar(30) NOT NULL,
  `status_pr` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `tanggal_lahir_pr` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ketusaha`
--

CREATE TABLE `ketusaha` (
  `nomor_ketusaha` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_tl` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketusaha`
--

INSERT INTO `ketusaha` (`nomor_ketusaha`, `nama`, `nik`, `jenis_kelamin`, `tempat_tl`, `tanggal_lahir`, `alamat`, `tanggal_buat`, `id`) VALUES
('1/009/KRDT/2021', 'hh', 'n', 'P', 'n', '1999-02-08', 'd', '1999-09-08', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `nomor_kk` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `no_kk` varchar(40) NOT NULL,
  `tempat_tl` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenkel` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `nomor_ktp` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_tl` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenkel` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `legalisasi`
--

CREATE TABLE `legalisasi` (
  `nomor_legalisasi` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_tl` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `warganegara` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `nomor_pindah` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_kk` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `jumlah_pindah` int(5) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pindahdes`
--

CREATE TABLE `pindahdes` (
  `nomor_pindahdes` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_kk` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `jumlah_pindah` int(5) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pindahkab`
--

CREATE TABLE `pindahkab` (
  `nomor_pindahkab` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_kk` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `jumlah_pindah` int(5) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `ID` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Saldo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`ID`, `Nama`, `Saldo`) VALUES
('ID-1', 'Aisah', 200000),
('ID-2', 'Budi', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `nomor_sktm` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_tl` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `warganegara` varchar(40) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawainan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbahliwaris`
--

CREATE TABLE `tbahliwaris` (
  `nomor_ahliwaris` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `nama_ahli_waris` varchar(100) NOT NULL,
  `tempat_tl_ah` varchar(100) NOT NULL,
  `tanggal_lahir_ah` date NOT NULL,
  `jenis_kelamin_ah` varchar(30) NOT NULL,
  `agama_ah` varchar(30) NOT NULL,
  `alamat_ah` varchar(255) NOT NULL,
  `nama_pewaris` varchar(100) NOT NULL,
  `tempat_tl_pw` varchar(100) NOT NULL,
  `tanggal_lahir_pw` date NOT NULL,
  `jenis_kelamin_pw` varchar(30) NOT NULL,
  `agama_pw` varchar(30) NOT NULL,
  `alamat_pw` varchar(255) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbahliwaris`
--

INSERT INTO `tbahliwaris` (`nomor_ahliwaris`, `tanggal_buat`, `nama_ahli_waris`, `tempat_tl_ah`, `tanggal_lahir_ah`, `jenis_kelamin_ah`, `agama_ah`, `alamat_ah`, `nama_pewaris`, `tempat_tl_pw`, `tanggal_lahir_pw`, `jenis_kelamin_pw`, `agama_pw`, `alamat_pw`, `id_user`) VALUES
('101AHWS2021', '2021-11-15', 'Sutisna', 'Garut', '1970-08-06', 'L', 'Islam', 'Pandeglang', 'Solehuddin', 'Cimahi', '2000-08-06', 'L', 'Islam', 'Labuan', ''),
('102AHWS2021', '2021-11-11', 'Alfi Raden', 'Sumedang', '1987-02-06', 'L', 'Islam', 'Pasir Muncang', 'Ridwan ', 'Garut', '2000-02-07', 'L', 'Islam', 'Cipareang', ''),
('103AHWS2021', '2021-11-08', 'Edi', 'Pandeglang', '1981-02-07', 'L', 'Islam', 'Cinangka', 'Taupik', 'Manabaya', '1999-02-07', 'L', 'Islam', 'Pedes', ''),
('104AHWS2021', '2021-11-07', 'Aep Hidayat', 'Garut', '1979-02-07', 'L', 'Islam', 'Cinangka', 'Jinal Miftahudin', 'Garut', '1998-07-08', 'L', 'Islam', 'Bunter', ''),
('105AHWS2021', '2021-11-14', 'Firdaus', 'Majalengka', '1989-02-07', 'L', 'Islam', 'Cicabe', 'Anugrah', 'Majalengka', '1998-02-07', 'L', 'Islam', 'Cicabe', ''),
('106AHWS2021', '2021-11-16', 'Dodi', 'Garut', '1978-02-01', 'L', 'Islam', 'Bunter', 'Farhan P', 'Garit', '1999-02-07', 'L', 'Islam', 'Bunter', ''),
('107AHWS2021', '2021-11-07', 'Rendi ', 'Pandeglang', '1981-02-07', 'L', 'Islam', 'Cinangka', 'Firdaus', 'Serang', '1997-02-07', 'L', 'Islam', 'Cinangka', ''),
('108AHWS2021', '2021-11-19', 'Komarudin', 'Cianjur', '1971-12-07', 'L', 'Islam', 'Salacau', 'Izal', 'Sumedang', '1998-02-07', 'L', 'Islam', 'Salacau', ''),
('109AHWS2021', '2021-11-17', 'Hidayat', 'Bogor', '1971-02-08', 'L', 'Islam', 'Perum SBG', 'Adzi', 'Bogor', '2000-02-07', 'L', 'Islam', 'Perum SBG', ''),
('110AHWS2021', '2021-11-12', 'Mulyana', 'Jakarta', '1967-02-07', 'L', 'Islam', 'Cuklik', 'Ade Roni', 'Jakarta', '1998-02-07', 'L', 'Islam', 'Cuklik', ''),
('111AHWS2021', '2021-11-21', 'Gunawan', 'Sumedang', '1997-02-05', 'L', 'Islam', 'Ciseupan', 'Atang', 'Sumedang', '1981-02-06', 'L', 'Islam', 'Pasithuni', ''),
('112AHWS2021', '2021-11-07', 'Fikri Sopian', 'Bogor', '1995-02-07', 'L', 'Islam', 'Bunter', 'Atep', 'Bogor', '1977-11-21', 'L', 'Islam', 'Bunter', ''),
('113AHWS2021', '2021-11-06', 'Riyan', 'Bandung', '1999-02-06', 'L', 'Islam', 'Cibulakan', 'Jamal', 'Bandung', '1967-12-08', 'L', 'Islam', 'Cibulakan', ''),
('114AHWS2021', '2021-11-07', 'Dika Permana', 'Subang', '2001-02-06', 'L', 'Islam', 'Cikadu', 'Dede Kustiwa', 'Subang', '1971-02-06', 'L', 'Islam', 'Cikadu', ''),
('115AHWS2021', '2021-11-11', 'Deden WIldan', 'Cimahi', '1999-02-06', 'L', 'Islam', 'Cipareuag', 'Sopian', 'Sumedang', '1871-07-08', 'L', 'Islam', 'Cipareuag', ''),
('116AHWS2021', '2021-11-06', 'Refi Hardiana', 'Subang', '1999-02-06', 'L', 'Islam', 'Cicabe', 'SUpradin', 'Cianjur', '1981-02-07', 'L', 'Islam', 'Cicabe', ''),
('117AHWS2021', '2021-11-17', 'Herdiansyah', 'Cianjur', '2000-02-07', 'L', 'Islam', 'Perum SBG', 'Nurkhosasih', 'Bogor', '1976-02-07', 'L', 'Islam', 'Perum SBG', ''),
('118AHWS2021', '2021-11-06', 'Tegar', 'Bandung', '1999-02-06', 'L', 'Islam', 'Lebakkaso', 'Deden', 'Bogor', '1967-02-07', 'L', 'Islam', 'Lebakkaso', ''),
('119AHWS2021', '2021-11-03', 'Rizkiyan', 'Serang', '1998-02-06', 'L', 'Islam', 'Cibenda', 'Mahdi', 'Pandeglang', '1987-02-05', 'L', 'Islam', 'Cibenda', ''),
('120AHWS2021', '2021-11-08', 'Firmasyah', 'Pandeglang', '1998-02-06', 'L', 'Islam', 'Perum SBG', 'Mulyana', 'Sumedang', '1967-11-08', 'L', 'Islam', 'Perum SBG', ''),
('121AHWS2021', '2021-11-08', 'Ryan Irawan', 'Jakarta', '1991-02-07', 'L', 'Islam', 'Perum Villa', 'Bahari', 'Jakarta', '1961-02-07', 'L', 'Islam', 'Perum Villa', ''),
('122AHWS2021', '2021-11-09', 'Gunawan', 'Subang', '1991-11-07', 'L', 'Islam', 'CIbubuhan', 'Adam Nugraha', 'Subang', '1956-02-07', 'L', 'Islam', 'CIbubuhan', ''),
('123AHWS2021', '2021-11-08', 'Yayan', 'Garut', '2000-02-07', 'L', 'Islam', 'Perum SBG', 'Mulyono', 'Garut', '1971-02-07', 'L', 'Islam', 'Perum SBG', ''),
('124AHWS2021', '2021-11-08', 'Sopiyan', 'Bandung', '2001-12-07', 'L', 'Islam', 'Pamatang', 'Diki Bahari', 'Garut', '1971-02-07', 'L', 'Islam', 'Pamatang', ''),
('125AHWS2021', '2021-11-07', 'Rafi', 'Pandeglang', '1997-11-08', 'L', 'Islam', 'Cibuntu', 'Hibatullah', 'Serang', '1967-02-07', 'L', 'Islam', 'CIbuntu', ''),
('126AHWS2021', '2021-11-19', 'Yayan', 'Garut', '2000-11-07', 'L', 'Islam', 'Cinangka', 'Mulyana', 'Subang', '1967-02-07', 'L', 'Islam', 'Cinangka', ''),
('127AHWS2021', '2021-11-08', 'Febriandi', 'Cimahi', '1999-02-07', 'L', 'Islam', 'Perum GPAA', 'Agung Lesmana', 'Bandung', '1949-02-08', 'L', 'Islam', 'Perum GPAA', ''),
('128AHWS2021', '2021-11-19', 'Mulana', 'Bandung', '1999-02-12', 'L', 'Islam', 'Nagrog', 'Nendi', 'Garut', '1956-02-07', 'L', 'Islam', 'Nagrog', ''),
('129AHWS2021', '2021-11-16', 'Kiki', 'Cimahi', '1998-02-07', 'L', 'Islam', 'Cikadaton', 'Suherman', 'Sumedang', '1956-11-08', 'L', 'Islam', 'Cikadaton', ''),
('130AHWS2021', '2021-11-11', 'Ujang', 'Garut', '1998-02-07', 'L', 'Islam', 'Sindulang', 'Sopiyan', 'Sumedang', '1967-11-07', 'L', 'Islam', 'Sindulang', ''),
('131AHWS2021', '2021-11-23', 'Bayu', 'Sumedang', '1999-02-06', 'L', 'Islam', 'Perum SBG', 'Pudin', 'Sumedang', '1976-02-07', 'L', 'Islam', 'Cibuntu', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbdesnikah`
--

CREATE TABLE `tbdesnikah` (
  `nomor_desnikah` varchar(30) NOT NULL,
  `nama_pria` varchar(100) NOT NULL,
  `tempat_tl_pria` varchar(100) NOT NULL,
  `tanggal_lahir_pria` date NOT NULL,
  `jenis_kelamin_pria` varchar(40) NOT NULL,
  `agama_pria` varchar(50) NOT NULL,
  `status_pria` varchar(50) NOT NULL,
  `nama_pr` varchar(100) NOT NULL,
  `tempat_tl_pr` varchar(100) NOT NULL,
  `tanggal_lahir_pr` date NOT NULL,
  `jenis_kelamin_pr` varchar(20) NOT NULL,
  `agama_pr` varchar(30) NOT NULL,
  `status_pr` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbdesnikah`
--

INSERT INTO `tbdesnikah` (`nomor_desnikah`, `nama_pria`, `tempat_tl_pria`, `tanggal_lahir_pria`, `jenis_kelamin_pria`, `agama_pria`, `status_pria`, `nama_pr`, `tempat_tl_pr`, `tanggal_lahir_pr`, `jenis_kelamin_pr`, `agama_pr`, `status_pr`, `tanggal_buat`) VALUES
('101DSNK2021', 'Salahuddin', 'Jakarta', '1998-08-05', 'L', 'Islam', 'Kawin', 'Risna Aprilia', 'Subang', '1999-07-05', 'P', 'Islam', 'Belum Kawin', '2021-11-15'),
('102DSNK2021', 'Hidayat', 'Sumedang', '1998-08-11', 'L', 'Islam', 'Belum Kawin', 'Eva Fatonah', 'Sumedang', '1999-02-07', 'P', 'Islam', 'Belum Kawin', '2021-11-11'),
('103DSNK2021', 'Aji', 'Pandeglang', '1998-12-31', 'L', 'islam', 'Belum Kawin', 'aisyah', 'pandeglang', '2000-01-31', 'P', 'Islam', 'Belum Kawin', '2021-11-11'),
('104DSNK2021', 'Atang', 'Garut', '1999-02-12', 'L', 'Islam', 'Belum Kawin', 'Erah', 'Garut', '1999-11-08', 'P', 'Islam', 'Belum Kawin', '2021-11-11'),
('105DSNK2021', 'Ciko Panada', 'Sumedang', '1998-11-02', 'L', 'Islam', 'Belum Kawin', 'Sipa', 'Jambi', '1999-12-08', 'P', 'Islam', 'Belum Kawin', '2021-11-22'),
('106DSNK2021', 'Fikri Fahrul', 'Banten', '1998-02-07', 'L', 'Islam', 'Belum Kawin', 'Astrid Nurhikmah', 'Banten', '1999-02-07', 'P', 'Islam', 'Belum Kawin', '2021-11-08'),
('107DSNK2021', 'Yoga Prastya', 'Cianjur', '1997-12-08', 'L', 'Islam', 'Belum Kawin', 'Lia Tri', 'Banten', '1999-02-04', 'P', 'Islam', 'Belum Kawin', '2021-11-12'),
('108DSNK2021', 'Rendi Jamal', 'Cirebon', '1998-02-07', 'L', 'Islam', 'Belum Kawin', 'Anita Pebrianti', 'Cianjur', '1998-02-03', 'P', 'Islam', 'Belum Kawin', '2021-11-17'),
('109DSNK2021', 'Nugi Saepul', 'Garut', '1997-02-08', 'L', 'Islam', 'Belum Kawin', 'Hana Rizki', 'Sumedang', '1999-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-07'),
('110DSNK2021', 'Dede Kustiwa', 'Jakarta', '1996-08-08', 'L', 'Islam', 'Belum Kawin', 'Putri Kamila', 'Sumedang', '1999-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-08'),
('111DSNK2021', 'Deri Agustina', 'Bandung', '1998-02-08', 'L', 'Islam', 'Belum Kawin', 'Salsabila ', 'Bandung', '1998-11-08', 'P', 'Islam', 'Belum Kawin', '2021-11-09'),
('112DSNK2021', 'Pipit Nuriah', 'Majalengka', '1996-11-07', 'L', 'Islam', 'Belum Kawin', 'Iis Nurhayati', 'Bandung', '1998-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-19'),
('113DSNK2021', 'Eka Yogi', 'Jakarta', '1997-02-07', 'L', 'Islam', 'Belum Kawin', 'Imas Yulianti', 'Sumedang', '1998-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-11'),
('114DSNK2021', 'Yayan', 'Bandung', '1998-01-11', 'L', 'Islam', 'Belum Kawin', 'Susi Apipah', 'Bandung', '1999-12-02', 'P', 'Islam', 'Belum Kawin', '2021-11-13'),
('115DSNK2021', 'Tegar Firmasyah', 'Bandung', '1999-02-11', 'L', 'Islam', 'Belum Kawin', 'Alya Latifa', 'Sumedang', '1998-02-04', 'P', 'Islam', 'Belum Kawin', '2021-11-16'),
('116DSNK2021', 'Rizkiyan', 'Banten', '1998-12-08', 'L', 'Islam', 'Belum Kawin', 'Fitri Blessandra', 'Bandung', '1999-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-17'),
('117DSNK2021', 'Deden Wildan', 'Pandeglang', '2001-12-08', 'L', 'Islam', 'Belum Kawin', 'Nur Aisyah', 'Sumedang', '2001-11-07', 'P', 'Islam', 'Belum Kawin', '2021-11-14'),
('118DSNK2021', 'Refi Hardiana', 'Cianjur', '1995-12-04', 'L', 'Islam', 'Belum Kawin', 'Linda', 'Bandung', '2000-04-04', 'P', 'Islam', 'Belum Kawin', '2021-11-14'),
('119DSNK2021', 'Dara Ayu', 'Jakarta', '1999-02-08', 'L', 'Islam', 'Cerai Mati', 'Rika Puspita', 'Bogor', '2000-03-04', 'P', 'Islam', 'Belum Kawin', '2021-11-15'),
('120DSNk2021', 'Didin Supradin', 'Sumedang', '1997-02-08', 'L', 'Islam', 'Belum Kawin', 'Alika Tsabita', 'Sumedang', '1998-03-05', 'P', 'Islam', 'Belum Kawin', '2021-11-16'),
('121DSNK2021', 'Koko Repian', 'Bandung', '1996-02-07', 'L', 'Islam', 'Belum Kawin', 'Sumiyati', 'Banten', '1999-02-07', 'P', 'Islam', 'Belum Kawin', '2021-11-07'),
('122DSNK2021', 'Cevi Nurdiansyah', 'Sumedang', '1998-02-06', 'L', 'Islam', 'Belum Kawin', 'Linda', 'Garut', '1999-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-07'),
('123DSNK2021', 'George Muhamad', 'Garut', '1998-02-08', 'L', 'Islam', 'Belum Kawin', 'Sheira Aria', 'Garut', '1999-02-04', 'P', 'Islam', 'Belum Kawin', '2021-11-08'),
('124DSNK2021', 'Taufik Rizkila', 'Cianjur', '1999-04-01', 'L', 'Islam', 'Belum Kawin', 'Ayu Nurahman', 'Cirebon', '1999-02-07', 'P', 'Islam', 'Belum Kawin', '2021-11-09'),
('125DSNK2021', 'Indra Maulana', 'Pandeglang', '1999-02-08', 'L', 'Islam', 'Belum Kawin', 'Siti Maemunah', 'Cirebon', '1999-02-07', 'P', 'Islam', 'Belum Kawin', '2021-11-16'),
('126DSNK2021', 'Bayu Pertama', 'Garut', '1996-02-08', 'L', 'Islam', 'Belum Kawin', 'Elsa Maya', 'Sumedang', '1998-02-07', 'P', 'islam', 'Belum Kawin', '2021-11-12'),
('127DSNK2021', 'Wahyu Kusuma', 'Cianjur', '2000-11-08', 'L', 'Islam', 'Belum Kawin', 'Maya Agustina', 'Bogor', '1999-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-18'),
('128DSNK2021', 'Muhammad Edi', 'Sumedang', '1999-02-08', 'L', 'Islam', 'Belum Kawin', 'Salsabila', 'Garut', '1998-02-07', 'P', 'Islam', 'Belum Kawin', '2021-11-07'),
('129DSNK2021', 'Saepullah', 'Garut', '1998-02-08', 'L', 'Islam', 'Belum Kawin', 'Wulandari', 'Bandung', '1999-02-08', 'P', 'Islam', 'Belum Kawin', '2021-11-21'),
('130DSNK2021', 'Muhammad Aji', 'Jakarta', '1990-02-07', 'L', 'Islam', 'Belum Kawin', 'Santi', 'Cianjur', '1998-03-07', 'P', 'Islam', 'Belum Kawin', '2021-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbketusaha`
--

CREATE TABLE `tbketusaha` (
  `nomor_ketusaha` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_tl` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbketusaha`
--

INSERT INTO `tbketusaha` (`nomor_ketusaha`, `nama`, `nik`, `jenis_kelamin`, `tempat_tl`, `tanggal_lahir`, `alamat`, `tanggal_buat`, `id_user`) VALUES
(1, 'Siti Aisyah', '360112680480002', 'P', 'Pandeglang', '1999-07-25', 'Cimahi', '2021-11-15', ''),
(2, 'Bela Sinta', '3211146003040001', 'P', 'Cimahi', '1989-02-07', 'Muncang', '2021-11-11', ''),
(3, 'Ridwan', '321114150920012', 'L', 'Sumedang', '2000-11-08', 'Cipareang', '0201-11-18', ''),
(4, 'Irma Rahayu', '3211144510020011', 'P', 'Garut', '1998-02-08', 'Cicabe', '2021-11-08', ''),
(5, 'Melsa Yuliani', '3211144806030009', 'P', 'Garut', '1997-02-11', 'Pasir Muncang', '2021-11-12', ''),
(6, 'DIni Alfiani', '3211146607030010', 'P', 'Subang', '2001-02-11', 'Bunter', '2021-11-08', ''),
(7, 'Aep Hidayat', '3211142308010003', 'L', 'Sumedang', '1999-02-07', 'Cicabe', '2021-11-08', ''),
(8, 'Rendi', '3204280410020003', 'L', 'Cimahi', '1998-02-08', 'Manabaya', '2021-11-01', ''),
(9, 'Maulan', '321114150920012', 'L', 'Cianjur', '1998-02-08', 'Situhiang', '2021-11-19', ''),
(10, 'Sena', '32111411090900010', 'P', 'Garut', '1998-02-08', 'Cinangka', '2021-11-16', ''),
(11, 'Adam Nugraha', '3211142707010015', 'L', 'Cianjur', '2001-02-08', 'Cibenda', '2021-11-21', ''),
(12, 'Diki Bahari', '3211141309020010', 'L', 'Sumedang', '1998-02-08', 'Cijaringao', '2021-11-19', ''),
(13, 'Retna Sry', '3211145003040003', 'P', 'Jakarta', '1991-11-08', 'Manabaya', '2021-11-17', ''),
(14, 'Ocih', '3211144107760148', 'P', 'Bandung', '1999-02-08', 'Cinagreg', '2021-11-19', ''),
(15, 'Dede Sapari', '3211140905990004', 'L', 'Garut', '2001-02-08', 'PasirWaru', '2021-11-08', ''),
(16, 'Yanto', '3211142702034005', 'L', 'Sumedang', '1999-02-08', 'Cibulakan', '2021-11-08', ''),
(17, 'Eti Rohaeti', '3211144604040003', 'P', 'Cianjur', '2000-02-07', 'Nusa', '2021-11-15', ''),
(18, 'Nuraeni', '3211146607030010', 'P', 'Bogor', '1996-11-08', 'Bangkir', '2021-11-08', ''),
(19, 'Mimin', '3211144710920004', 'P', 'Bandung', '1981-02-08', 'Pasir Huni', '2021-11-08', ''),
(20, 'Imam Muslim', '32111411090900010', 'L', 'Bandung', '1998-02-08', 'Bunter', '2021-11-14', ''),
(21, 'Rika Santika', '3211146903030004', 'P', 'Garut', '1998-11-08', 'Pasir Huni', '2021-11-08', ''),
(22, 'Sandi Nugraha', '3211140309010006', 'L', 'Garut', '1996-02-11', 'CIbulakan', '2021-11-21', ''),
(23, 'Silpa', '3211147011020012', 'P', 'Cianjur', '1997-02-07', 'Cicabe', '2021-11-08', ''),
(24, 'Jojon Saputra', '3211142606020007', 'L', 'Subang', '2001-02-11', 'Cinangka', '2021-11-17', ''),
(25, 'Lilis Sumiati', '3211144603070006', 'P', 'Sumedang', '2001-02-11', 'Batu Nangtung', '2021-11-14', ''),
(26, 'Adul Rohmat', '3211141807020006', 'L', 'Sumedang', '1997-02-21', 'Leuwi Liang', '2021-11-19', ''),
(27, 'Erwin', '3211141806020008', 'L', 'Cianjur', '1997-11-21', 'Lebak Kaso', '2021-11-17', ''),
(28, 'Elis Yeni', '3211145604800020', 'P', 'Cimahi', '1989-11-23', 'Cicabe', '2021-11-08', ''),
(29, 'Tuni Nuraini', '3206364508910001', 'P', 'Bandung', '1991-02-11', 'Nagrog', '2021-11-08', ''),
(30, 'Gita Herlina', '32170760030006', 'P', 'Sumedang', '1998-02-07', 'Manabaya', '2021-11-07', ''),
(31, 'Maemunah', '321114150920012', 'P', 'Cimahi', '1999-02-04', 'Bangkir', '2021-11-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbkk`
--

CREATE TABLE `tbkk` (
  `nomor_kk` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `no_kk` varchar(40) NOT NULL,
  `tempat_tl` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenkel` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbkk`
--

INSERT INTO `tbkk` (`nomor_kk`, `nama`, `nik`, `no_kk`, `tempat_tl`, `tanggal_lahir`, `jenkel`, `agama`, `pekerjaan`, `status_perkawinan`, `alamat`, `tanggal_buat`, `id_user`) VALUES
('101KK2021', 'Aminah S', '3601126505990003', '3601162374739749', 'Cianjur', '2004-11-20', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Pandeglang ', '2021-11-15', '0'),
('102KK2021', 'Tedi Hidayat', '321114090610011', '3211142506030005', 'Cimahi', '2000-02-04', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Warunenggang', '2021-11-06', '0'),
('103KK2021', 'Komar', '32114010810012', '32111410702002', 'Bandung', '2003-05-06', 'L', 'Islam', 'Bekerja', 'Kawin', 'Bojong', '2021-11-11', '0'),
('104KK2021', 'Fatonah', '3211145503030004', '321144090100020', 'Sumedang', '2001-03-23', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Cikandang', '2021-11-01', '0'),
('105KK2021', 'Dea', '32111809020011', '321144090100000', 'Cimahi', '2003-06-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', '2021-11-04', '0'),
('106KK2021', 'Putri Yani', '3211144208030007', '321144090100010', 'Garut', '2001-05-07', 'P', 'Islam', 'Bekeja', 'Kawin', 'Muncang', '2021-11-04', '0'),
('107KK2021', 'Muhammad Fajar', '3211140501040003', '321140060020020', 'Majalengka', '1999-06-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Bunter', '2021-11-05', '0'),
('108KK2021', 'RIka Amelia', '3211146310030002', '3211171009020002', 'Bandung', '2002-02-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', '2021-11-11', '0'),
('109KK2021', 'Aditiya ', '7211061804990001', '3211171009020001', 'Cimahi', '2001-06-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Salacau', '2021-11-07', '0'),
('110KK2021', 'Oktaf Dwi', '3211140107020163', '3211171601020001', 'Garut', '2004-02-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Nyalindung', '2021-11-20', '0'),
('112KK2021', 'Akmal Nabil ', '3211141612030002', '3211440901004020', 'Cicalengka', '1999-07-06', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Perum SBG', '2021-11-06', '0'),
('113KK2021', 'Nadisha Putri S', '3211145903040003', '321114808010001', 'Tasikmalaya', '2000-04-06', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Cuklik', '2021-11-11', '0'),
('114KK2021', 'Suci Nurliya', '3211145007030001', '321111829909920', 'Bandung', '2002-02-04', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cijaringao', '2021-11-17', '0'),
('115KK2021', 'Izal', '3211140905990004', '3211118299099200', 'Bogor', '2005-11-06', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Taneh Berem', '2021-11-19', '0'),
('116KK2021', 'Lathifah', '2171076912029002', '3211118299099201', 'Cimahi', '2003-07-06', 'P', 'islam ', 'Belum Bekerja', 'Belum Kawin', 'Perum SBG', '2021-11-12', '0'),
('117KK2021', 'Kinanti', '3211146703030006', '3211118299099101', 'Jambi', '2000-08-07', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Perum SBG', '2021-11-20', '0'),
('118KK2021', 'Fitri ', '3211144609010009', '3211118299099100', 'Cimahi', '2003-05-06', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cilaku', '2021-11-06', '0'),
('119KK2021', 'Resa Nurpadilah', '3211140107020225', '3211112009091101', 'Bogor', '2003-06-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Jengkol Condong', '2021-11-19', '0'),
('11KK2021', 'Isyam', '3211140107020164', '3211171599020002', 'Bandung', '2004-06-05', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Nyalindung', '2021-11-07', '0'),
('120KK2021', 'Nandang', '3277031502650013', '3211118202000300', 'Pandeglang', '2000-06-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cilaku', '2021-11-14', '0'),
('121KK2021', 'Lukman', '3211141107890006', '3211118202001200', 'Subang', '1999-01-12', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Bendungan', '2021-11-12', '0'),
('122KK2021', 'Tanti Dhea', '3211144610600006', '3211118299098710', 'Cimahi', '2002-03-27', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cinangka', '2021-11-17', '0'),
('123KK2021', 'Adul Rohmat', '3211141807020006', '32111451220442142', 'Bandung', '2001-02-23', 'L', 'Islam', 'Pelajar', 'Belum Kawin', 'Leuwi Liang', '2021-11-18', '0'),
('124KK2021', 'Erwin', '3211141806020008', '3211145202042012', 'Jakarta', '1998-02-11', 'L', 'Islam', 'Pelajar', 'Belum Kawin', 'Leuwi Liang', '2021-11-11', '0'),
('125KK2021', 'Ragil Yulianda', '3211144501020012', '3211118212099101', 'Subang', '2001-08-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Babakan', '2021-11-09', '0'),
('126KK2021', 'Kankan Aminudin', '3211142211010007', '3211118201210100', 'Banten', '2001-12-29', 'L', 'Islam', 'Pelajar', 'Belum Kawin', 'Cicabe', '2021-11-08', '0'),
('127KK2021', 'Kiki Suherman', '3211140410020011', '3211118211022102', 'Tangerang', '2001-02-07', 'L', 'Islam', 'Pelajar', 'Belum Kawin', 'Cicabe', '2021-11-07', '0'),
('128KK2021', 'Deliana Desi', '3204285212030011', '32111182020121100', 'Banten', '2001-11-28', 'P', 'Islam', 'Belum Bekeja', 'Belum Kawin', 'Cikadaton', '2021-11-11', '0'),
('129KK2021', 'Hila Heli', '3210076401040041', '3211145002320001', 'Sumedang', '2001-09-23', 'P', 'Islam', 'Pelajar', 'Kawin', 'Perum SBG', '2021-11-07', '0'),
('130KK2021', 'Salman', '3211142311030005', '3211145002293237', 'Bandung', '1999-01-21', 'L', 'Islam', 'Pelajar', 'Belum Kawin', 'baturumpil', '2021-11-05', '0'),
('131KK2021', 'Aisyah', '3211145003040002', '321111820200038', 'Cimahi', '1999-02-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', '2021-11-23', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbktp`
--

CREATE TABLE `tbktp` (
  `nomor_ktp` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_tl` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenkel` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbktp`
--

INSERT INTO `tbktp` (`nomor_ktp`, `tanggal_buat`, `nama`, `nik`, `tempat_tl`, `tanggal_lahir`, `jenkel`, `agama`, `pekerjaan`, `status_perkawinan`, `alamat`, `id_user`) VALUES
('101KTP2021', '2021-11-19', 'Melani ', '36011262002002', 'Cimahi', '2000-09-25', '', 'Islam ', 'Bekerja', 'Belum Kawin', 'Banten', ''),
('102KTP2021', '2021-11-19', 'Mulyana', '3601126205990000', 'Cicalengka', '2001-09-28', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Sumedang', ''),
('103KTP2021', '2021-11-20', 'Rizkiya Rahmawati', '323144704040005', 'Garut', '2004-02-07', 'P', 'Islam', 'Bekerja', 'Kawin', 'Taman Bukit', ''),
('104KTP2021', '2021-11-20', 'Ridwan Ibrahim', '3211141602040002', 'Cicalengka', '2004-08-07', '', 'Islam', 'Bekerja', 'Kawin', 'Perum SBG', ''),
('105KTP2021', '2021-11-20', 'Farhan Muhammad', '3211142502040004', 'Sumedang', '2004-07-31', 'L', 'Islam', 'Bekerja', 'Kawin', 'Peum SBG', ''),
('106KTP2021', '2021-11-20', 'Dewi Rengganis', '3211146304030005', 'Sumedang', '2004-08-06', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Cinangka', ''),
('107KTP2021', '2021-11-20', 'Alfi Dzulfikar Raden', '3211141505030005', 'Cinangka', '2003-08-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Perum Puteraco', ''),
('108KTP2021', '2021-11-20', 'Bela Sinta', '321116003040001', 'Manabaya', '2004-05-08', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Pasir Muncang', ''),
('109KTP2021', '2021-11-20', 'Ridwan', '321114150920012', 'Cicabe', '2005-08-06', 'L', 'Islam', 'Bekerja', 'Belum Kawin', 'Cipareang', ''),
('110KTP2021', '2021-11-20', 'Rendi Mohammad', '320480410020002', 'Cinangka', '2002-02-06', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Manabaya', ''),
('111KTP2021', '2021-11-20', 'Muhammad Taupik', '3211141711020010', 'Garut', '2004-02-08', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Pedes', ''),
('112KTP2021', '2021-11-20', 'Irma Sri Rahayu', '3211144510020011', 'Cianjur', '2005-02-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cipareuag', ''),
('113KTP2021', '2021-11-20', 'Risma Ramdani', '3211145111020007', 'Bandung', '2005-08-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Jenkol Condong', ''),
('114KTP2021', '2021-11-20', 'Melsa Yuliani', '3211144806030009', 'Garut', '2005-04-28', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Pasir Muncang', ''),
('115KTP2021', '2021-11-20', 'Dzulfikar Agung ', '3204284106930020', 'Cikajang', '2004-05-07', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Nusa', ''),
('116KTP2021', '2021-11-20', 'DIni ALfiani', '3211146607030010', 'Garut', '2004-02-28', 'L', 'Islam', 'Bekerja', 'Belum Kawin', 'Bunter', ''),
('117KTP2021', '2021-11-20', 'Jinal Miftahudin', '3211141004980002', 'Banten', '2005-05-07', 'L', 'Islam', 'Bekerja', 'Belum Kawin', 'Cicabe', ''),
('118KTP2021', '2021-11-19', 'Aep Hidayat', '3211142308010003', 'Jakarta', '2004-02-08', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', ''),
('119KTP2021', '2020-11-19', 'RIzki Lukman ', '32111410006030003', 'Bandung', '2005-03-07', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Cipareuag', ''),
('120KTP2021', '2021-11-20', 'Eti Sulastri', '3204354112710001', 'Garut', '2021-07-08', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Sindangnangoh', ''),
('121KTP2021', '2021-11-20', 'Adinda Cantika', '32111470030030006', 'Majalengka', '2004-02-04', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', ''),
('122KTP2021', '2021-11-20', 'Siti Aisyah', '360226505990002', 'Pandeglang', '2003-07-25', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Sumedang', ''),
('123KTP2021', '2021-11-18', 'Siti Nurmawati', '3211144409030006', 'Cianjur', '2005-08-06', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Cicabe', ''),
('124KTP2021', '2021-11-17', 'ELi Yuliani', '3211146506020011', 'Tasikmalaya', '2003-05-06', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Pasir Waru', ''),
('125KTP2021', '2021-11-16', 'Fajar Nugraha', '3211140404030015', 'Cianjur', '2004-05-07', 'L', 'Islam', 'Bekerja', 'Belum Kawin', 'Perum SBG', ''),
('126KTP2021', '2021-11-17', 'Neng imah', '3211144211020012', 'Cicalengka', '2004-05-07', 'P', 'Islam', 'Pelajar', 'Belum Kawin', 'Pasir Waru', ''),
('127KTP2021', '2021-11-11', 'Jani', '3211145611020002', 'Bandung', '2004-02-28', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Pasir Waru', ''),
('128KTP2021', '2021-11-19', 'Anggi Sumarni', '3211145110020002', 'Sumedang', '2005-06-07', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Pasir Waru', ''),
('129KTP2021', '2021-11-17', 'Synta', '32111457110020002', 'Bogor', '2003-03-23', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Damur', ''),
('130KTP2021', '2021-11-19', 'Mochamad Reza', '321114310020005', 'Garut', '2004-05-07', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Cihonje', ''),
('131KTP2021', '2021-11-10', 'Abdul Wahab', '32111711020012', 'Bogor', '2002-02-07', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Bunter', ''),
('132KTP2021', '2021-11-01', 'Andrian Maulana', '3211140402030008', 'Tasikmalaya', '2004-06-07', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Bunter', ''),
('133KTP2021', '2021-11-02', 'RIma Nurhalimah', '3211146202020003', 'Majalengka', '2005-06-07', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Bunter', ''),
('134KTP2021', '2021-11-04', 'Elsa Widia', '3211146312030003', 'Bandung', '2005-01-03', 'P', 'Islam', 'Bekerja', 'Belum Kawin', 'Bunter', ''),
('135KTP2021', '2021-11-11', 'Mulyana', '3211140607840012', 'Cimindi', '2003-09-23', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cihonje', ''),
('136KTP2021', '2021-11-10', 'Ade Roni', '32111405030008', 'Bogor', '2005-04-23', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Baturumpil', ''),
('137KTP2021', '2021-11-06', 'RIski Hardiatnat', '3211141501030007', 'Garut', '2004-06-07', 'L', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Pasir Waru', ''),
('138KTP2021', '2021-11-07', 'DIska Sagita', '32111449906030005', 'Bandung', '2005-09-28', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Babakan ', ''),
('139KTP2021', '2021-11-05', 'Vania Nurwina', '3211146202030004', 'Sumedang', '2005-06-05', 'P', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Santaka', ''),
('140KTP2021', '2021-11-08', 'Mochamad Rizy', '3211142506030005', 'Pandeglang', '2003-05-06', 'L', 'Islam', 'Belum Bekerja', 'Kawin', 'Perum SBG', ''),
('141KTP', '2021-11-23', 'Mela', '32111126599002', 'Cianjur', '1999-02-06', '', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'CIbuntu', ''),
('142KTP2021', '2021-11-23', 'Siti Aisyah', '321114150920012', 'Cimahi', '1999-08-06', '', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cimahi', ''),
('143KTP2021', '2021-11-23', 'Melani', '32111265990002', 'Sumedang', '1999-08-03', '', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cibuntu', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbpindah`
--

CREATE TABLE `tbpindah` (
  `nomor_pindah` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_kk` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `jumlah_pindah` int(5) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpindah`
--

INSERT INTO `tbpindah` (`nomor_pindah`, `nama`, `nik`, `no_kk`, `nama_kepala_kk`, `alamat_sekarang`, `alamat_tujuan`, `jumlah_pindah`, `tanggal_buat`, `id_user`) VALUES
('101KEC2021', 'Siti Aisyah', '360112680480000', '360117300211001', 'Muhammad Udin', 'Cigondang', 'Labuan', 3, '2021-11-15', ''),
('102KEC2021', 'Mey Sagita ', '3211145312030002', '3211118202000300', 'Ade Rama', 'Manabaya', 'Cibuntu', 2, '2021-11-11', ''),
('103KEC2021', 'Maya AMelia', '3211145605020012', '3211145611860001', 'Bahrudin', 'Cipanaruban', 'Cibubuhan', 1, '2021-11-12', ''),
('104KEC2021', 'Deden Irawan', '327220711030001', '3211145611350001', 'Haerudin', 'Cimande', 'Perum SBG', 1, '2021-11-14', ''),
('105KEC2021', 'Amelia', '3211144204040003', '3211145031350001', 'Deden', 'Manabaya', 'Perum GPAA', 1, '2021-11-15', ''),
('106KEC2021', 'Atria Daylani', '3211142909020007', '3211145031350020', 'Adam Maulana', 'Cipareuag', 'CIbuntu', 1, '2021-11-16', ''),
('107KEC2021', 'Nia Kurniati', '3211145610950008', '3211141032010001', 'Bahari', 'Perum GPAA', 'Perum SBG', 1, '2021-11-18', ''),
('108KEC2021', 'Yayan Mulyana', '3211141002020012', '3211141032010006', 'Bahari', 'Cibuntu', 'CIbenda', 1, '2021-11-11', ''),
('109KEC2021', 'Sena', '32111411090900010', '3211141078000001', 'Agung', 'Manabaya', 'Cibuntu', 1, '2021-11-19', ''),
('110KEC2021', 'Tasya Fanira', '3211144110050003', '3211141032010010', 'Baharo', 'Cibenda', 'Cinangka', 1, '2021-11-20', ''),
('111KEC2021', 'Aas Astuti', '3211144905020012', '3211118202000300', 'Deden', 'Cibubuhan', 'Cibuntu', 1, '2021-11-15', ''),
('112KEC2021', 'Siti Rohmatunisa', '3211146708030010', '3211118299099101', 'Iwan Irawan', 'Cibenda', 'Cimande', 1, '2021-11-18', ''),
('113KEC2021', 'Riana Febrianti', '3211146502040001', '3211148112000201', 'Bahrudin', 'CIbenda', 'Situhiang', 1, '2021-11-19', ''),
('114KEC2021', 'Juju Julaeha', '321114540202040001', '32111458214091101', 'Agustono', 'Cibuntu', 'Perum Putera', 1, '2021-11-17', ''),
('115KEC2021', 'Adam Nugraha', '3211142707010015', '3211145420220030', 'Bahraen', 'Cinangka', 'Situhiang', 1, '2021-11-20', ''),
('116KEC2021', 'Rafi Hibatullah', '3211141904040003', '3211141829909910', 'Edi Irawan', 'Cibuntu', 'Cinangka', 1, '2021-11-16', ''),
('117KEC2021', 'Diki Bahari', '3211141309020010', '3211145202044500', 'Asep Saepullah', 'Manabaya', 'Sawah Dadap', 1, '2021-11-16', ''),
('118KEC2021', 'Agung Lesmana', '3211140911010005', '3211118202000102', 'Wawan', 'Sindang Pakuon', 'CIbuntu', 1, '2021-11-18', ''),
('119KEC2021', 'Adhitya Warman', '3211141101030001', '3211118201890300', 'Wawan', 'Cicabe', 'Cibenda', 2, '2021-11-19', ''),
('120KEC2021', 'Muhammad Raul', '3211140103030016', '3211145212800900', 'Muhammad Edi', 'Cijaringao', 'Cibuntu', 1, '2021-11-01', ''),
('121KEC2021', 'Asep Nuriaman', '321114240300008', '3211141032010003', 'Erwin', 'Ciseupan', 'Cicabe', 2, '2021-11-01', ''),
('122KEC2021', 'Agus Junaedi', '3211141708010005', '321114500670001', 'Bahrudin', 'CIbuntu', 'Ciseupan', 2, '2021-11-02', ''),
('123KEC2021', 'Kanaya', '3211144408030003', '3211145441020001', 'Angga ', 'Cinangka', 'CIbuntu', 3, '2021-11-04', ''),
('124KEC2021', 'CIicanur', '3211144604040003', '3211145011080001', 'Ujang ', 'Legok Bitung', 'CIbuntu', 3, '2021-11-05', ''),
('125KEC2021', 'Ida Royani', '3211145010820030', '3211145501000001', 'Saepullah', 'Perum SBG', 'Perum GPAA', 2, '2021-11-06', ''),
('126KEC2021', 'Resli Afriyani', '3273156404040002', '321114500910001', 'Aminudin', 'Cibenda', 'CIbuntu', 3, '2021-11-07', ''),
('127KEC2021', 'Ratna Safira', '3211146804040002', '321114500220011', 'Atang', 'Lakbok', 'CIbuntu', 4, '2021-11-08', ''),
('128KEC2021', 'Gunawan', '3211142805030003', '3211145441031001', 'Atep Ramli', 'CIseupan', 'CIbenda', 2, '2021-11-09', ''),
('129KEC2021', 'Ciko Panada', '321114260603007', '3211145114020002', 'Jamaludin', 'CIjengkol', 'Cinangka', 2, '2021-11-10', ''),
('130KEC2021', 'Fahrul Sopian', '3211142905020006', '321114500610001', 'Kusnandar', 'Bunter', 'Ciseupan', 3, '2021-11-17', ''),
('131KEC2021', 'Bayu', '360112680480002', '3211118202000300', 'Agus', 'Cibuntu', 'Cicabe', 2, '2021-11-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbpindahdes`
--

CREATE TABLE `tbpindahdes` (
  `nomor_pindahdes` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_kk` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `jumlah_pindah` int(5) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpindahdes`
--

INSERT INTO `tbpindahdes` (`nomor_pindahdes`, `nama`, `nik`, `no_kk`, `nama_kepala_kk`, `alamat_sekarang`, `alamat_tujuan`, `jumlah_pindah`, `tanggal_buat`, `id_user`) VALUES
('101DES2021', 'Siti Aisyah', '360112680480000', '340900012030001', 'Malik', 'Labuan', 'Karabohong', 2, '2021-11-15', ''),
('102DES2021', 'Rijaluddin', '3211140403030011', '3211118202000300', 'Udin', 'Cibuntu', 'Perum SBG', 1, '2021-11-12', ''),
('103DES2021', 'Retna Sry', '3211145003040003', '3211118299099102', 'Saepudin', 'CInangka', 'Cicabe', 1, '2021-11-12', ''),
('104DES2021', 'SIti Nadia', '3211144407020002', '3211148202002500', 'Wawan Irawan', 'Cipareuag', 'CIbuntu', 1, '2021-11-14', ''),
('105DES2021', 'Muhammad Bayu', '3211140604210008', '3211118201890300', 'Saepullah', 'Cibenda', 'Mangunarga', 1, '2021-11-17', ''),
('106DES2021', 'Elma Elviana', '3211146204030002', '3211118202004500', 'Saepudin', 'Cipareuag', 'Cinangka', 2, '2021-11-17', ''),
('107DES2021', 'Wawan Gunawan', '3211142705970008', '3211112102000305', 'Muhammad Edi', 'Sindang Pakuon', 'CIbuntu', 1, '2021-11-06', ''),
('108DES2021', 'Ocih', '3211144107760148', '3211145212003300', 'Agustono', 'Perum SBG', 'Perum Putera', 3, '2021-11-11', ''),
('109DES2021', 'Delis Nur', '321111454030004', '3211118201100300', 'Muhammad Aji', 'Cibuntu', 'Perum SBG', 2, '2021-11-07', ''),
('110DES2021', 'Ananda Devi', '3211146304030007', '3211118299045101', 'Ilham', 'Nusa ', 'Bangkir', 2, '2021-11-10', ''),
('111DES2021', 'Ilham Maulana', '321114080203007', '3211118202000100', 'Sulaeman', 'Pedes', 'Babakan Situ', 5, '2021-11-18', ''),
('112DES2021', 'Tuni Nuraini', '3206364508910001', '3211118201000102', 'Agus', 'Ciburaleng', 'CIbuntu', 1, '2021-11-07', ''),
('113DES2021', 'Gita Herlina', '32170760030006', '3211145502001301', 'Haerudin', 'Tegal Saeutik', 'Pangsor', 3, '2021-11-08', ''),
('114DES2021', 'Nanda Agung', '3204051802040005', '3211118202011800', 'Asepullah', 'Nagrog', 'Cibenda', 3, '2021-11-19', ''),
('115DES2021', 'Elis Yeni', '3211145604800020', '3211112533003001', 'Edi Setiawan', 'Cicabe', 'Cinangka', 2, '2021-11-09', ''),
('116DES2021', 'Neng Sara', '3211145511020006', '3211118299099101', 'Abdullah', 'Cimunang ', 'Cibembem', 3, '2021-11-16', ''),
('117DES2021', 'Rizki Sagrul', '321114210599001', '3211112102100305', 'Asep', 'Cicabe', 'Cimuncang', 4, '2021-11-09', ''),
('118DES2021', 'Jojon Saputra', '3211142606020007', '3211118202001100', 'Bagusanjaya', 'Cibuntuk', 'Cicabe', 3, '2021-11-19', ''),
('119DES2021', 'Restu Eka', '3211147011020012', '3211118202000112', 'Edi Wahyu', 'Girilaya', 'Pasir Huni', 2, '2021-11-19', ''),
('120DES2021', 'Silpa', '3211147108950005', '3211114502002201', 'Udin', 'CIbuntu', 'Cicabe', 2, '2021-11-04', ''),
('121DES2021', 'Atang', '3211141710450001', '3211145441020001', 'Bahrudin', 'Cibuntu', 'Bunter', 1, '2021-11-01', ''),
('122DE2021', 'Erah', '321145008420003', '3211145470020001', 'Saepullaj', 'Pasithuni', 'Bunter', 2, '2021-11-02', ''),
('123DES2021', 'Sipa', '321114411020015', '3211145441061001', 'Rizkyan', 'Lakbok', 'Pasithuni', 3, '2021-11-03', ''),
('124DES2021', 'Atep Piyan', '3211140104020001', '3211145441050001', 'Atang', 'Cibulakan', 'Cinangka', 4, '2021-11-05', ''),
('125DES2021', 'Rendi Jamal', '3211142706030001', '3211145441001001', 'Sucipto', 'Babakan', 'Cibulakan', 2, '2021-11-06', ''),
('126DES2021', 'Adika Permana', '3211142507030011', '321145304040001', 'Epul', 'Pasirhuni', 'Cibuntu', 3, '2021-11-08', ''),
('127DES2021', 'Pipit Nuriah', '3211144401030007', '321114504040001', 'Mulyana', 'Cinangka', 'Cibuntu', 1, '2021-11-09', ''),
('128DES2021', 'Dede Kustiwa', '3211142002010006', '3211145441010006', 'Asepullah', 'Cibuntu', 'Cinangka', 1, '2021-11-10', ''),
('129DES2021', 'Anita Pebrianti', '3211145102040001', '3211145441040001', 'Mulyono', 'Baturumpil', 'Cibenda', 3, '2021-11-12', ''),
('130DES2021', 'Rizki Fikri', '3211145806030002', '3211145401020004', 'Adi', 'Cibuntu', 'Cinangka', 2, '2021-11-14', ''),
('131DES2021', 'Delfany', '360112680480002', '3211118299099101', 'Agustono', 'Cicabe', 'CIbuntu', 2, '2021-11-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbpindahkab`
--

CREATE TABLE `tbpindahkab` (
  `nomor_pindahkab` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `nama_kepala_kk` varchar(100) NOT NULL,
  `alamat_sekarang` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL,
  `jumlah_pindah` int(5) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpindahkab`
--

INSERT INTO `tbpindahkab` (`nomor_pindahkab`, `nama`, `nik`, `no_kk`, `nama_kepala_kk`, `alamat_sekarang`, `alamat_tujuan`, `jumlah_pindah`, `tanggal_buat`, `id_user`) VALUES
('101KAB2021', 'Siti Aisyah', '360112680480002', '3601173002110010', 'Nurfauji', 'Cimahi Selatan', 'Cimahi Utara', 3, '2021-11-15', ''),
('102KAB2021', 'Salsa Nurfasha', '3211146502030002', '3211118202000300', 'Muhammad Ridwan', 'Perum SBG', 'PerumPutera', 2, '2021-11-11', ''),
('103KAB2021', 'Dedi', '3211141302740005', '3211118299099101', 'Muhammad Rifki', 'Cicabe', 'Cilaku', 1, '2021-11-12', ''),
('104KAB2021', 'Kkom Komariah', '32111443027840014', '3211118202000301', 'Saripudin', 'Perum SBG', 'Cilaku', 1, '2021-11-03', ''),
('105KAB2021', 'Nissa Fadilah', '3211146009020007', '340900012030210', 'Didi ', 'Lebak Kaso', 'Bangkir', 1, '2021-11-14', ''),
('106KAB2021', 'Lismawati', '32111464090006', '3211118202000201', 'Asep', 'Cilaku', 'Cibenda', 1, '2021-11-07', ''),
('107KAB2021', 'Melayani', '321114700300300', '34090001203021', 'Pangestu', 'Cicabe', 'Cibenda', 1, '2021-11-18', ''),
('108KAB2021', 'Riska', '3211145107950009', '3211118201000300', 'Saepudin', 'Perum SBG', 'Nyalindung', 1, '2021-11-18', ''),
('109KAB2021', 'Satria Puspita', '3273306112200011', '340900012030211', 'Saprudin', 'Cuklik', 'CIbenda', 1, '2021-11-17', ''),
('110KAB2021', 'Siti Rahmah', '3211146501020005', '3211171002992110', 'Malik Muhammad', 'Cibuntu', 'Cibenda', 1, '2021-11-14', ''),
('111KAB2021', 'Velry Marselino H', '3211141303040007', '340900012030001', 'Aji Rama', 'Taneh Berem ', 'Cuklik', 1, '2021-11-19', ''),
('112KAB2021', 'Saripuddin', '321114212000006', '32111810028801200', 'Saepullah', 'CIcabe', 'CIbuntu', 2, '2021-11-20', ''),
('113KAB2021', 'Julaeha', '3209075910850001', '3409000120302001', 'Nandang', 'Cijaringao', 'CIbuntu', 1, '2021-11-11', ''),
('114KAB2021', 'Nurfagillah S', '3211141406030003', '3211118202000300', 'Kartono', 'Cicabe', 'Cisurupan', 2, '2021-11-20', ''),
('115KAB2021', 'Tini Kartini', '3211146011020003', '3211118299099101', 'Saepudin', 'Cipareuag', 'Cicabe', 1, '2021-11-11', ''),
('116KAB2021', 'Kokom Komariah', '3211144205750010', '3211118202000300', 'Muhammad Deden', 'Cimande', 'CIcabe', 1, '2021-11-18', ''),
('117KAB2021', 'Febriani Falentino', '3204071402030007', '3211112102000301', 'Agus', 'Pamatang', 'Manabaya', 1, '2021-11-01', ''),
('118KAB2021', 'Feri Gunawan', '3211142002880001', '3211112102000301', 'Gunawan', 'Cicabe', 'Cimande', 1, '2021-11-13', ''),
('119KAB2021', 'Sohipatul Aswa', '5203197112910025', '32111182020200100', 'Sarif', 'Perum Vila Bukit Asri', 'Perum SBG', 1, '2021-11-06', ''),
('120KAB2021', 'M Rafli Wiranata', '3211141404040401', '3211118299099100', 'Muhammad Edi', 'Perum SBG', 'Cicabe', 1, '2021-11-18', ''),
('121KAB2021', 'Nelsih P', '360112680480002', '3211118202000310', 'Rudiyansyah', 'CIbuntu', 'Cicabe', 1, '2021-11-29', ''),
('122KAB2021', 'Rfiki Rohmana', '3211141202030008', '3211118202060102', 'Deden', 'Sindulang', 'Sindangsari', 1, '2021-11-21', ''),
('123KAB2021', 'Angga Fermana', '3211140408080002', '3211141032210007', 'Safrudin', 'Sindangsari', 'Cinangka', 1, '2021-11-21', ''),
('124KAB2021', 'Eden Sopian', '3211140711020007', '3211145202042000', 'Bahrudin', 'Sindulang', 'Cikadaton', 2, '2021-11-19', ''),
('125KAB2021', 'Desi Liana', '321115503030010', '3211445002200237', 'Junaedi', 'GIrilaya', 'CIbulakan', 2, '2021-11-11', ''),
('126KAb2021', 'Alfi Arifah', '321114523030007', '3211141032010008', 'Faisal', 'Parakanmuncang', 'Girilaya', 2, '2021-11-01', ''),
('127KAB2021', 'Ayu Wandira', '3211145502020019', '3211141045010001', 'Herman', 'Cibulakan', 'CIbuntu', 2, '2021-11-02', ''),
('128KAB2021', 'Mida Silviani', '3211145807010005', '321114500220017', 'Asep', 'Cicabe', 'Cibulakan', 2, '2021-11-03', ''),
('129KAB2021', 'Muhamad Egi', '3211140912020011', '321114500220001', 'Agus', 'Parakanmucang', 'Cibuntu', 3, '2021-11-04', ''),
('130KAB2021', 'Uli Yulianti', '3211146504050002', '3211141032010001', 'Sopian', 'Cibubuhan', 'Cibulakan', 2, '2021-11-05', ''),
('131KAB2021', 'aji', '321114150920012', '3211118299099101', 'Agus', 'Cibuntu', 'Cibenda', 3, '2021-11-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbrekapitulasi`
--

CREATE TABLE `tbrekapitulasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `oleh` varchar(50) NOT NULL,
  `download` int(11) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbrekapitulasi`
--

INSERT INTO `tbrekapitulasi` (`id`, `judul`, `deskripsi`, `tanggal`, `oleh`, `download`, `data`) VALUES
(1, 'Rekapitulasi Bulan November', 'Jenis Pelayanan E-KTP', '2021-11-22 05:16:52', 'Siti Aisyah', 0, '0614b6356fd58983bf5ba849551584e7.pdf'),
(3, 'Rekapitulasi E-KTP', 'Bulan November', '2021-11-23 04:34:14', 'Siti Aisyah', 0, 'e5c88659a4bd1b2aea5a7183de6aabf9.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbsktm`
--

CREATE TABLE `tbsktm` (
  `nomor_sktm` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_tl` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `warganegara` varchar(40) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsktm`
--

INSERT INTO `tbsktm` (`nomor_sktm`, `nama`, `nik`, `tempat_tl`, `tanggal_lahir`, `jenis_kelamin`, `warganegara`, `agama`, `pekerjaan`, `status_perkawinan`, `alamat`, `tanggal_buat`, `id_user`) VALUES
('101SKTM2021', 'Measaroh', '360112680480002', 'Pandeglang', '1999-05-25', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cimahi', '2021-11-15', ''),
('102SKTM2021', 'Nopi Yani', '3211146801030009', 'Cikahuripan', '2004-08-06', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cikandang', '2021-11-11', ''),
('103SKTM2021', 'Siti Maesaroh', '3211146801030002', 'Cianjur', '2005-11-21', 'P', 'WNI', 'Islam', 'Bekerja', 'Kawin', 'Sindangkasih', '2021-11-06', ''),
('104SKTM2021', 'Riyanto', '3211142003010004', 'Bandung', '2001-09-07', 'L', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Lebak ', '2021-11-07', ''),
('105SKTM2021', 'Santi ', '3211146010030011', 'Bandung', '1999-12-28', 'P', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Pakuluran', '2021-11-17', ''),
('106SKTM2021', 'Sandi ', '3211140309010006', 'Bogor', '1998-03-31', 'L', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Dsn Cibulakan', '2021-11-17', ''),
('107SKTM2021', 'Imam', '3211141205030009', 'Sumedang', '2001-08-07', 'L', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Bunter', '2021-11-16', ''),
('108SKTM2021', 'Reni Maryeni', '321114620202004', 'Garut', '2000-06-07', 'P', 'WNI', 'Islam', 'Bekeja', 'Belum Kawin', 'Pasir Waru', '2021-11-15', ''),
('109SKTM2021', 'Sapari', '3211145440304005', 'Cimahi', '2005-02-27', 'L', 'WNI', 'islam', 'Belum Bekerja', 'Belum Kawin', 'pedes', '2021-11-11', ''),
('110SKTM2021', 'Regina ', '3211145440304005', 'Cianjur', '2003-01-08', 'P', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Babakan Situ', '2021-11-05', ''),
('111SKTM2021', 'Yanto', '3211142702034005', 'Bogor', '2005-02-06', 'L', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'CIbulakan', '2021-11-20', ''),
('112SKTM2021', 'Eti Rohaeti', '3211144604730007', 'Bandung', '2005-06-07', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Nusa', '2021-11-07', ''),
('113SKTM2021', 'Nuraeni', '3211146304020006', 'Bogor', '2002-06-07', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Bangkir', '2021-11-06', ''),
('114SKTM2021', 'Rika Santika', '3211146903030004', 'Jakarta', '2001-12-07', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Pasir Huni', '2021-11-07', ''),
('115SKTM2021', 'Mimin', '3211144710920004', 'Bandung', '2006-06-07', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Sindang Sari', '2021-11-18', ''),
('116SKTm2021', 'Herdian', '3211141804040004', 'Pandeglang', '2001-03-31', 'L', 'WNI', 'islam ', 'Belum Bekerja', 'Belum Kawin', 'Pangsor', '2021-11-18', ''),
('117SKTM2021', 'Rukiman', '3211141408620001', 'CImahi', '2001-01-06', 'L', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', '2021-11-09', ''),
('118SKTM2021', 'Nurleli', '3211145501030006', 'Sumedang', '2001-09-04', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cicabe', '2021-11-18', ''),
('119SKTM2021', 'Deva Astridia', '3211145410030002', 'Bandung', '2001-07-08', 'P', 'WNA', 'Islam', 'Bekerja', 'Belum Kawin', 'Cijaringao', '2021-11-10', ''),
('120SKTM2021', 'Nendi Nugraha', '3211145410030003', 'Bogor', '2001-01-31', 'L', 'WNI', 'Islam', 'Pelajar', 'Belum Kawin', 'Lebak Kaso', '2021-11-08', ''),
('121SKTM2021', 'Eiska Rahayu', '3211142107030003', 'Banten', '1999-02-06', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cinangka', '2021-11-01', ''),
('122SKTM2021', 'Tri Handayani', '3211147009030003', 'Sumedang', '1998-03-04', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Perum SBG', '2021-11-02', ''),
('123SKTM2021', 'Nugi Saepul', '3211141805030001', 'Garut', '0000-00-00', 'L', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Cijarinago', '2021-11-05', ''),
('124SKTM2021', 'Putri Kamila', '321146202030006', 'Banten', '2000-02-07', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Cikandang', '2021-11-06', ''),
('125SKTM2021', 'Salsabila', '3211145205040004', 'Bogor', '2001-08-04', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Perum SBG', '2021-11-06', ''),
('126SKTM2021', 'Panji Adithia', '3204041606040009', 'Subang', '2001-11-06', 'L', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Peum SBG', '2021-11-04', ''),
('127SKTM2021', 'Hana Aprilia', '3211144204040004', 'Bandung', '2004-11-06', 'P', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Perum SBG', '2021-11-14', ''),
('128SKTM2021', 'Iis Nurhayati', '321145105020009', 'Sumedang', '2001-12-31', 'P', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Legok', '2021-11-05', ''),
('129SKTM2021', 'Imas Yulianti', '3211146202750002', 'Garut', '2001-04-04', 'P', 'WNI', 'Islam', 'Bekerja', 'Belum Kawin', 'Lebakaso', '2021-11-15', ''),
('130SKTM2021', 'Rama Mulyana', '3211142601020005', 'Garut', '2001-11-04', 'L', 'WNI', 'Islam', 'Belum Bekerja', 'Belum Kawin', 'Lebak Kaso', '2021-11-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_legalisasi`
--

CREATE TABLE `tb_legalisasi` (
  `nomor_legalisasi` varchar(30) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tempat_tl` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `warganegara` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_legalisasi`
--

INSERT INTO `tb_legalisasi` (`nomor_legalisasi`, `tanggal_buat`, `nama`, `nik`, `tempat_tl`, `tanggal_lahir`, `jenis_kelamin`, `warganegara`, `agama`, `alamat`, `id_user`) VALUES
('101LGLS2021', '2021-11-15', 'Siti Aisyah', '360112680480000', 'Pandeglang', '1999-08-26', 'P', 'WNI', 'Islam', 'Sumedang', ''),
('102LGLS2021', '2021-11-11', 'Dewi Rengganis', '3211146304030008', 'Bandung', '1999-12-08', 'P', 'WNI', 'Islam', 'Perum SBG', ''),
('103LGLS2021', '2021-11-13', 'Bela Sinta', '3211146003040001', 'Pandeglang', '1999-02-07', 'P', 'WNI', 'Islam', 'Muncang', ''),
('104LGLS2021', '2021-11-17', 'Ridwan', '3211141509020012', 'Cimahi', '1999-02-08', 'L', 'WNI', 'Islam', 'Cipareang', ''),
('105LGLS2021', '2021-11-17', 'Rendi Mohammad', '3204280410020002', 'Banten', '1999-03-08', 'L', 'WNI', 'Islam', 'Manabaya', ''),
('106LGLS2021', '2021-11-09', 'Muhammad Taupik', '3211141711020010', 'Sumedang', '2001-12-08', 'L', 'WNI', 'Islam', 'Pedes', ''),
('107LGLS2021', '2021-11-08', 'Irma Sri', '3211144510020011', 'Cianjur', '2004-02-08', 'P', 'WNI', 'Islam', 'Cipareuag', ''),
('108LGLS2021', '2021-11-08', 'Risma Ramdani', '3211145111020007', 'Jambi', '2005-02-08', 'P', 'WNI', 'Islam', 'Jengkol Condong', ''),
('109LGLS2021', '2021-11-19', 'Melsa Yuliani', '3211144806030009', 'Bogor', '2004-02-09', 'P', 'WNI', 'Islam', 'Pasir Muncang', ''),
('110LGLS2021', '2021-11-08', 'Zulfikar Agung', '32042841067030010', 'Sumedang', '2004-03-07', 'L', 'WNI', 'Islam', 'Nusa', ''),
('111LGLS2021', '2021-11-07', 'Dini Alfiani', '3211146607030010', 'Bandung', '2003-02-07', 'P', 'WNI', 'Islam', 'Bunter', ''),
('112LGLS2021', '2021-11-07', 'Jinal Miftahudin', '3211141004980002', 'Bandung', '1999-02-08', 'L', 'WNI', 'Islam', 'Cicabe', ''),
('113LGLS2021', '2021-11-08', 'Aep Hidayat', '3211142308010003', 'Sumedang', '1999-02-07', 'L', 'WNI', 'Islam', 'Cicabe', ''),
('114LGLS2021', '2021-11-07', 'Rizki Lukman', '3211141006030003', 'Bogor', '1999-02-07', 'L', 'WNI', 'Islam', 'Cipareuag', ''),
('115LGLS2021', '2021-11-08', 'Eti Sulastri', '3204354112710001', 'Bogor', '1999-02-08', 'P', 'WNI', 'Islam', 'Sindangnangoh', ''),
('116LGLS2012', '2021-11-09', 'Adinda Cantika', '3211147003030006', 'Cimahi', '1998-03-07', 'P', 'WNI', 'Islam', 'Cipareuag', ''),
('117LGLS2021', '2021-11-17', 'Siti Nurmawati', '3211144409030006', 'Garut', '1999-02-07', 'P', 'WNI', 'Islam', 'Cicabe', ''),
('118LGLS2021', '2021-11-19', 'Jani', '3211145611020002', 'Sumedang', '1998-02-07', 'L', 'WNI', 'Islam', 'Cihonje', ''),
('119LGLS2021', '2021-11-21', 'Synta', '321114570400009', 'Cianjur', '1999-03-07', 'P', 'WNI', 'Islam', 'Damur', ''),
('120LGLS2021', '2021-11-20', 'Elsa Widia', '3211146312030002', 'Bandung', '1990-03-08', 'P', 'WNI', 'Islam', 'Bangkir', ''),
('121LGLS2021', '2021-11-21', 'Neng Irma', '3211144211020012', 'Cimahi', '2003-03-08', 'P', 'WNI', 'Islam', 'Pasir Waru', ''),
('122LGLS2021', '2021-11-17', 'Anggi Sumarni', '3211145110020002', 'Bandung', '1991-02-07', 'P', 'WNI', 'Islam', 'Pasir Waru', ''),
('123LGLS2021', '2021-11-15', 'Abdul Wahab', '32111711020012', 'Sumedang', '1991-03-06', 'L', 'WNI', 'Islam', 'Bunter', ''),
('124LGLS2021', '2021-11-16', 'Mulyana', '3211140607840012', 'Bandung', '2001-03-08', 'L', 'WNI', 'Islam', 'Cihonje', ''),
('125LGLS2021', '2021-11-01', 'Ade Roni', '3211140504030008', 'Cianjur', '1998-03-08', 'L', 'WNI', 'Islam', 'Baturumpil', ''),
('126LGLS2021', '2021-11-07', 'Riski Hardianta', '3211141201030007', 'Bogor', '2001-03-08', 'L', 'WNI', 'Islam', 'Pasir Waru', ''),
('127LGLS2021', '2021-11-04', 'Diska Sagita', '3211144906030005', 'Cimahi', '1991-03-07', 'P', 'WNI', 'Islam', 'Baturumpil', ''),
('128LGLS2021', '2021-11-06', 'Vania Nurwina', '321114620203004', 'Bandung', '1999-02-06', 'P', 'WNI', 'Islam', 'Cicabe', ''),
('129LGLS2021', '2021-11-07', 'Tedi Hidayat', '3211140906010011', 'Sumedang', '1998-03-07', 'L', 'WNI', 'Islam', 'Perum SBG', ''),
('130LGLS2021', '2021-11-05', 'Komaruddin', '321114010810012', 'Garut', '1999-07-01', 'L', 'WNA', 'Islam', 'Perum SBG', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  `register` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `jenkel`, `username`, `password`, `nohp`, `status`, `level`, `register`, `photo`) VALUES
('1', 'Siti Aisyah', 'sa0233261@gmail.com', 'P', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', '089618871405', 'Aktif', '2', '2021-11-23 04:24:46', 'd32f1bf9d17110a4208571ca5a722049.JPG'),
('2', 'Aisyah', 'isah@gmail.com', 'P', 'admin', '21232f297a57a5a743894a0e4a801fc3', '089618871405', 'Aktif', '1', '2021-11-15 14:18:56', '408d7f5862a72eaac8aa97518d0c4206.jpeg'),
('3', 'Bela Sinta', 'belasinta@gmail.com', 'P', 'pegawai2', 'fa23517aa1adfaab707494340009a330', '089738937437', 'Aktif', '2', '2021-11-21 14:52:39', '492313eba54664a5e731b04545525ba4.JPG'),
('4', 'Melayani', 'melayani2@gmail', 'P', 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', '0798765433456', 'Aktif', '3', '2021-11-22 13:28:19', 'b7f4b76cd34a41c8cf81251d441b82c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID` varchar(10) NOT NULL,
  `Nominal` int(50) NOT NULL,
  `Jenis` varchar(10) NOT NULL,
  `Tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`ID`, `Nominal`, `Jenis`, `Tanggal`) VALUES
('ID', 100000, 'Debit', '2018-09-11 16:00:00'),
('ID-2', 500000, 'Debit', '2018-09-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL,
  `level` enum('1','2','3') NOT NULL,
  `register` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahliwaris`
--
ALTER TABLE `ahliwaris`
  ADD PRIMARY KEY (`nomor_ahliwaris`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `desnikah`
--
ALTER TABLE `desnikah`
  ADD PRIMARY KEY (`nomor_desnikah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ketusaha`
--
ALTER TABLE `ketusaha`
  ADD PRIMARY KEY (`nomor_ketusaha`),
  ADD KEY `id_user` (`id`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`nomor_kk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`nomor_ktp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `legalisasi`
--
ALTER TABLE `legalisasi`
  ADD PRIMARY KEY (`nomor_legalisasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`nomor_pindah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pindahdes`
--
ALTER TABLE `pindahdes`
  ADD PRIMARY KEY (`nomor_pindahdes`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pindahkab`
--
ALTER TABLE `pindahkab`
  ADD PRIMARY KEY (`nomor_pindahkab`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`nomor_sktm`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbahliwaris`
--
ALTER TABLE `tbahliwaris`
  ADD PRIMARY KEY (`nomor_ahliwaris`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbdesnikah`
--
ALTER TABLE `tbdesnikah`
  ADD PRIMARY KEY (`nomor_desnikah`);

--
-- Indexes for table `tbketusaha`
--
ALTER TABLE `tbketusaha`
  ADD PRIMARY KEY (`nomor_ketusaha`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbkk`
--
ALTER TABLE `tbkk`
  ADD PRIMARY KEY (`nomor_kk`) USING BTREE,
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbktp`
--
ALTER TABLE `tbktp`
  ADD PRIMARY KEY (`nomor_ktp`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbpindah`
--
ALTER TABLE `tbpindah`
  ADD PRIMARY KEY (`nomor_pindah`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbpindahdes`
--
ALTER TABLE `tbpindahdes`
  ADD PRIMARY KEY (`nomor_pindahdes`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbpindahkab`
--
ALTER TABLE `tbpindahkab`
  ADD PRIMARY KEY (`nomor_pindahkab`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbrekapitulasi`
--
ALTER TABLE `tbrekapitulasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsktm`
--
ALTER TABLE `tbsktm`
  ADD PRIMARY KEY (`nomor_sktm`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_legalisasi`
--
ALTER TABLE `tb_legalisasi`
  ADD PRIMARY KEY (`nomor_legalisasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbketusaha`
--
ALTER TABLE `tbketusaha`
  MODIFY `nomor_ketusaha` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbrekapitulasi`
--
ALTER TABLE `tbrekapitulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ahliwaris`
--
ALTER TABLE `ahliwaris`
  ADD CONSTRAINT `ahliwaris_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `desnikah`
--
ALTER TABLE `desnikah`
  ADD CONSTRAINT `desnikah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ketusaha`
--
ALTER TABLE `ketusaha`
  ADD CONSTRAINT `ketusaha_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kk`
--
ALTER TABLE `kk`
  ADD CONSTRAINT `kk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktp`
--
ALTER TABLE `ktp`
  ADD CONSTRAINT `ktp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `legalisasi`
--
ALTER TABLE `legalisasi`
  ADD CONSTRAINT `legalisasi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pindah`
--
ALTER TABLE `pindah`
  ADD CONSTRAINT `pindah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pindahdes`
--
ALTER TABLE `pindahdes`
  ADD CONSTRAINT `pindahdes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pindahkab`
--
ALTER TABLE `pindahkab`
  ADD CONSTRAINT `pindahkab_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sktm`
--
ALTER TABLE `sktm`
  ADD CONSTRAINT `sktm_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
