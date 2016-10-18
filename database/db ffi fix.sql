-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2015 at 09:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ffi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `useradmin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`useradmin`, `password`) VALUES
('adminAE', '123456'),
('adminBE', '123456'),
('adminBPH', '123456'),
('adminHE', '123456'),
('adminHRD', '123456'),
('adminPR', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `keanggotaan`
--

CREATE TABLE IF NOT EXISTS `keanggotaan` (
  `ID_Anggota` varchar(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `HP` varchar(15) NOT NULL,
  `Tempat_lahir` varchar(25) NOT NULL,
  `Tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keanggotaan`
--

INSERT INTO `keanggotaan` (`ID_Anggota`, `Nama`, `Jabatan`, `Email`, `HP`, `Tempat_lahir`, `Tanggal_lahir`) VALUES
('001', 'Riski Adi Kurniawan', 'Ketua', 'riskiadi.kurniawan@yahoo.com', '085715706611', 'Jakarta', '1993-08-26'),
('002', 'Try Maryati ', 'Wakil Ketua', 'subiha@ymail.com', '081906372449', 'Serang', '1993-03-11'),
('003', 'Diardian Febiani', 'Sekretaris 1', 'diardian_febiani@yahoo.com', '08567239365', 'Bogor', '1994-02-19'),
('004', 'Dini Hanifa', 'Sekretaris 2', 'dini_hanifa@rocketmail.com', '085693860128', 'Jakarta', '1995-09-16'),
('005', 'Yulinda Devianty', 'Bendahara', 'ydevianty@gmail.com', '083820211023', 'Bandung', '1994-07-24'),
('006', 'Feriansyah', 'Koordinator AE', 'feriansyah0209@gmail.com', '089639167250', 'Jakarta', '1993-09-02'),
('007', 'Ratih Septiyanti', 'Anggota AE', 'ratihseptiyanti@yahoo.com', '085697798066', 'Jakarta', '1994-09-03'),
('008', 'Akbar Nur Pribadi', 'Anggota AE', 'akbar.nur.pribadi@gmail.com', '085719728885', 'Bogor', '1993-10-21'),
('009', 'Abdul Aris Pradana', 'Anggota AE', 'elwolves.pradana@gmail.com', '089609534120', 'Biak', '1994-04-15'),
('010', 'Jawa Arum Mewangi', 'Anggota AE', 'arumagh50@gmail.com', '085645768224', 'Ponorogo', '1994-08-09'),
('011', 'Diah Adwi Septian', 'Anggota AE', 'diah_adwiseptian@yahoo.com', '085720665532', 'Purwakarta', '1994-09-22'),
('012', 'Irfan Fajar Satrio', 'Anggota AE', 'irfanfajar.satrio@yahoo.com', '081310129503', 'Samaso', '1995-03-22'),
('013', 'Alvian Rizky', 'Anggota AE', 'alvian.rizky@rocketmail.com', '089604468696', 'Jakarta', '1994-08-30'),
('014', 'Dani Arwan', 'Anggota AE', 'danar1717@gmail.com', '085786208426', 'Pemalang', '1993-01-26'),
('015', 'Annisa Fathia Nurfitriani', 'Anggota AE', 'fathiannisa47@gmail.com', '087878863486', 'Jakarta', '1995-07-04'),
('016', 'Muhammad Farhan', 'Anggota AE', 'farhan.agh49@gmail.com', '085799099282', 'Kebumen', '1994-05-19'),
('017', 'Cahya Sholihatin Misiasari', 'Koordinator BE', 'Sholihatin.Misiasari@rocketmai', '085233896288', 'Madiun', '1993-11-18'),
('018', 'Muhammad Iqbal', 'Anggota BE', 'iqbalipb48@gmail.com', '08979838000', 'Medan', '1994-01-09'),
('019', 'Zara Fathia Muflihani', 'Anggota BE', 'zarafathia@ymail.com', '085693378477', 'Bogor', '1993-02-23'),
('020', 'Suci Ayu Lestari', 'Anggota BE', 'suciayu26@gmail.com', '087808061640', 'Tangerang', '1996-01-26'),
('021', 'Rifqy Azmy Al Hanif', 'Anggota BE', 'rifqyalhanif@gmail.com', '085717404498', 'Bogor', '1995-03-26'),
('022', 'Lisda Septiani', 'Anggota BE', 'lisdaseptiani28@yahoo.com', '0896.017.517.86', 'Rangkasbitung', '1996-09-28'),
('023', 'Diana', 'Anggota BE', 'diana_eksyar@gmail.com', '085764292273', 'Lampung', '1995-04-12'),
('024', 'Bayu Galang Ramadhani', 'Anggota BE', 'ramadhani@apps.ipb.ac.id', '083847932896', 'Jember', '1995-02-13'),
('025', 'Annisa Nur Azizah', 'Anggota BE', 'annisa.azizah@yahoo.com', '085718929450', 'Jakarta', '1996-08-05'),
('026', 'Tiara Gita Lestari', 'Anggota BE', 'tiara_gita92@yahoo.com', '083895955085', 'Jakarta', '1995-10-18'),
('027', 'Afrini Palentin br Hombing', 'Anggota BE', 'afrini@gmail.com', '089649388068', 'Pangkalan Brandan', '1994-04-19'),
('028', 'Endah Purwa Ari P.', 'Anggota BE', 'endahpurwaari@gmail.com', '08995777880', 'Pati', '1994-07-14'),
('029', 'Muhammad Rizqi Mubarok', 'Koordinator PR', 'sayarizqi@gmail.com', '08561958930', 'Jakarta', '1993-05-02'),
('030', 'Mahesa Jenar', 'Anggota PR', 'mahesa.janara@gmail.com', '085284765049', 'Bogor', '1994-10-19'),
('031', 'Astrid Rahmawati Erianto', 'Anggota PR', 'itsdastridre@gmail.com', '081289995119', 'Jakarta', '1996-07-17'),
('032', 'Nurul Iqamah Elza', 'Anggota PR', 'nuruliqamahelza@gmail.com', '087745321358', 'Jakarta', '1994-03-05'),
('033', 'Nityaningrum Duatibumi', 'Anggota PR', 'duatibumi@gmail.com', '085692339333', 'Depok', '1994-12-23'),
('034', 'Sarah Nabilah', 'Anggota PR', 'sarahnabilah27@yahoo.com', '08568945000', 'Bogor', '1993-05-27'),
('035', 'Selamet Widodo', 'Koordinator HRD', 'selametwid@gmail.com', '085697600003', 'Bogor', '1993-01-09'),
('036', 'Dhia Adiati', 'Anggota HRD', 'dhia_adiati_a3@yahoo.com', '085780792560', 'Jakarta', '1993-09-27'),
('037', 'Aliza Putry', 'Anggota HRD', 'jaalizaputry@yahoo.com', '087788267104', 'Bogor', '1995-11-03'),
('038', 'Fadya Widi Seputri', 'Anggota HRD', 'fadyaa@rocketmail.com', '081907750650', 'Sumbawa', '1997-10-25'),
('039', 'Raisya Noor Azizah Usni', 'Anggota HRD', 'raisyanoorazizah@yahoo.com', 'Jakarta', '1994-10-09', '0000-00-00'),
('040', 'Risti Rinati', 'Koordinator HE', 'ristirinati4@gmail.com', '089665665579', 'Banjarnegara', '1993-06-07'),
('041', 'Sintya Aprina', 'Anggota HE', 'sintyaaprina@ymail.com', '085719514887', 'Bogor', '1993-04-24'),
('042', 'Astuti Rahmawati', 'Anggota HE', 'ratnapatmawati.rp@gmail.com', '085655687631', 'Sangatta', '1993-07-13'),
('043', 'Ratna Patmawati', 'Anggota HE', 'ratnapatmawati.rp@gmail.com', '089676108061', 'Bangkalan', '1994-04-16'),
('044', 'Suzandhita Soraya', 'Anggota HE', 'Suzandhitasoraya@gmail.com', '085716399085', 'Pati', '1995-06-22'),
('045', 'Nindy Loanita Primaswari', 'Anggota HE', 'nindynindy22@gmail.com', '085269881127', 'Purworejo', '1996-01-22'),
('046', 'Mutiara Dewi Lestari', 'Anggota HE', 'mutiaradewiletari@gmail.com', '085717596602', 'Jakarta', '1994-03-28'),
('047', 'Desyliana', 'Anggota HE', 'desyliana@yahoo.com', '081994009677', 'Jakarta', '1994-12-01'),
('048', 'Mullina Rosullih', 'Anggota HE', 'mullinarosullih@yahoo.com', '081299230349', 'Tanggerang', '1994-08-31'),
('049', 'Inas Majida', 'Anggota HE', 'inasmajida@gmail.com', '087723502019', 'Malang', '1995-05-15'),
('050', 'Siti Aisyah Nurhayati', 'Anggota HE', 'sitiaisyahipb@gmail.com', '089657132462', 'Bandung', '1995-06-26'),
('051', 'Dewi Maghfiroh', 'Anggota HE', 'dee3wy@gmail.com', '085731804323', 'Malang', '1994-06-10'),
('052', 'Anggit Ahmat Syihabuddin', 'Anggota HE', 'anggitahmat@gmail.com', '085648884066', 'Lamongan', '1995-05-05'),
('053', 'Nunu Fauzan Helwah', 'Anggota HE', 'nufahel@gmail.com', '085720455724', 'Lebak', '1995-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE IF NOT EXISTS `keuangan` (
`ID_file` int(11) NOT NULL,
  `Nama_file` varchar(50) NOT NULL,
  `Pemasukan` varchar(10) NOT NULL,
  `Pengeluaran` varchar(10) NOT NULL,
  `Saldo_akhir` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`ID_file`, `Nama_file`, `Pemasukan`, `Pengeluaran`, `Saldo_akhir`) VALUES
(1, 'Laporan Keuangan Donasi April 2014', '4.000.000', '152.500', '3.847.500'),
(2, 'Laporan Keuangan Donasi Mei 2014', '350.000', '1.788.800', '2.408.700'),
(3, 'Laporan Keuangan Donasi Juni 2014', '0', '521.000', '1.887.700'),
(4, 'Laporan Keuangan Donasi Juli 2014', '0', '1.257.000', '630.700'),
(5, 'Laporan Keuangan Donasi Agustus 2014', '0', '0', '630.700'),
(6, 'Laporan Keuangan Donasi September 2014', '3.904.000', '825.100', '3.709.600'),
(7, 'Laporan Keuangan Donasi Oktober 2014', '0', '57.000', '3.652.600'),
(8, 'Laporan Keuangan Donasi November 2014', '200.000', '487.300', '3.365.300'),
(9, 'Laporan Keuangan Donasi Desember 2014', '650.000', '325.100', '3.690.200'),
(10, 'Laporan Keuangan Donasi Januari 2015', '0', '130.000', '3.560.200'),
(11, 'Laporan Keuangan Donasi Februari 2015', '0', '160.000', '3.400.200'),
(12, 'Laporan Keuangan Donasi Maret 2015', '297000', '0', '3.697.200');

-- --------------------------------------------------------

--
-- Table structure for table `notulensi_rapat`
--

CREATE TABLE IF NOT EXISTS `notulensi_rapat` (
`ID_file` int(11) NOT NULL,
  `Nama_file` varchar(50) NOT NULL,
  `Tanggal_rapat` date NOT NULL,
  `Agenda_rapat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notulensi_rapat`
--

INSERT INTO `notulensi_rapat` (`ID_file`, `Nama_file`, `Tanggal_rapat`, `Agenda_rapat`) VALUES
(1, 'Rapat BPH 1', '2014-09-01', 'Obrolan Sabtu, HBH'),
(2, 'Rapat BPH 2', '2014-09-11', 'Tugas BPH'),
(3, 'Rapat BPH 3', '2014-09-15', 'Kadiv keluar'),
(4, 'Rapat BPH 4', '2014-10-13', 'Membahas konfirmasi'),
(5, 'Rapat BPH 5', '2014-11-03', 'Membahas kegiatan FFI'),
(6, 'Rapat BPH 6', '2014-12-15', 'Membahas kegiatan FFI'),
(7, 'Rapat BPH 7', '2015-01-24', 'Membahas kegiatan FFI'),
(8, 'Rapat Pimpinan 1', '2014-04-28', 'Rapim Perdana'),
(9, 'Rapat Pimpinan 2', '2014-05-05', 'Progress Divisi'),
(10, 'Rapat Pimpinan 3', '2014-05-12', 'RKAT dan CDT'),
(11, 'Rapat Pimpinan 4', '2014-05-19', 'Penetapan Anggota'),
(12, 'Rapat Pimpinan 5', '2014-05-26', 'Progress RKAT'),
(13, 'Rapat Pimpinan 6', '2014-06-20', 'Progress Divisi dan Acara FFI'),
(14, 'Rapat Pimpinan 7', '2014-09-01', 'Progress Divisi & Acara FFI'),
(15, 'Rapat Pimpinan 8', '2014-09-16', 'Progress Divisi'),
(16, 'Rapat Pimpinan 9', '2014-09-24', 'Progress Divisi'),
(17, 'Rapat Pimpinan 10', '2014-10-01', 'Rapim bersama SC'),
(18, 'Rapat Pimpinan 11', '2014-11-03', 'Progress Divisi'),
(19, 'Rapat Pimpinan 12', '2014-11-08', 'Progress Divisi'),
(20, 'Rapat Pimpinan 13', '2014-11-17', 'Progress Divisi'),
(21, 'Rapat Pimpinan 14', '2014-12-01', 'Progress Divisi'),
(22, 'Rapat Pimpinan 15', '2014-12-08', 'Progress Divisi'),
(23, 'Rapat Pimpinan 16', '2014-12-15', 'Progress Divisi'),
(24, 'Rapat Pimpinan 17', '2015-02-09', 'Progress Divisi'),
(25, 'Rapat Pimpinan 18', '2015-02-27', 'Rapim bersama SC'),
(26, 'Rapat Pimpinan 19', '2015-03-09', 'Calon LR'),
(27, 'Rapat Pimpinan 20', '2015-03-16', 'LPJ'),
(28, 'Rapat General 1', '2014-05-23', 'Pengumuman Volunteer'),
(29, 'Rapat General 2', '2014-09-02', 'Obrolan Sabtu dan HBH'),
(30, 'Rapat General 3', '2014-09-29', ':Summit, Visi dan misi'),
(31, 'Rapat General 4', '2014-11-13', 'Curhat Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
`TimelineID` int(11) NOT NULL,
  `Nama_acara` text NOT NULL,
  `Tanggal_acara` varchar(30) NOT NULL,
  `Waktu` varchar(8) NOT NULL,
  `Tempat` varchar(20) NOT NULL,
  `Divisi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`TimelineID`, `Nama_acara`, `Tanggal_acara`, `Waktu`, `Tempat`, `Divisi`) VALUES
(1, 'Observasi lapangan I', '1 Mei 2014', '08:00', 'Desa Cihideung Udik', 'Agriculture and Environment'),
(2, 'Pengadaan Bank Sampah (TPSA)', '14 Juni 2014', '08:00', 'Desa Cihideung Udik', 'Agriculture and Environment'),
(3, 'Pengadaan tempat sampah terpisah di enam titik', '12 Juli 2014', '09:00', 'Desa Cihideung Udik', 'Agriculture and Environment'),
(4, 'Pendidikan', '30 Agustus 2014', '08:00', 'Desa Cihideung Udik', 'Health and Education'),
(5, 'Kesenian', '11 Oktober 2014', '08:00', 'Desa Cihideung Udik', 'Health and Education'),
(6, 'Penyuluhan gigi', '13 September 2014', '08:00', 'Desa Cihideung Udik', 'Health and Education'),
(7, 'Penguluhan Kesehatan', '4 Oktober 2014', '09:00', 'Desa Cihideung Udik', 'Health and Education'),
(8, 'Observasi produk dan pasar', '20 September 2014', '08:00', 'Desa Cihideung Udik', 'Business and Entepreneur'),
(9, 'Produksi dan pemasaran', '25 oktober 2014', '09:00', 'Desa Cihideung Udik', 'Business and Entepreneur'),
(10, 'Pengembangan pasar', '13 Desember 2014', '08:00', 'Desa Cihideung Udik', 'Business and Entepreneur'),
(11, 'Rekap keuangan', '3 Januari 2015', '10:00', 'Desa Cihideung Udik', 'Business and Entepreneur'),
(12, 'Program Donatur Sejuta Umat', '14 Maret 2015', '08:00', 'Desa Cihideung Udik', 'Public Relation and Information'),
(13, 'Media Informasi', '28 Februari 2015', '08:00', 'Desa Cihideung Udik', 'Public Relation and Information'),
(14, 'Upgrading', '21 Februari 2015', '08:00', 'Desa Cihideung Udik', 'Human Resource and Development'),
(15, 'Family Gathering', '7 Maret 2015', '09:00', 'Desa Cihideung Udik', 'Human Resource and Development');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('AE', '123456'),
('BE', '123456'),
('BPH', '123456'),
('HE', '123456'),
('HRD', '123456'),
('PR', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`useradmin`);

--
-- Indexes for table `keanggotaan`
--
ALTER TABLE `keanggotaan`
 ADD PRIMARY KEY (`ID_Anggota`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
 ADD PRIMARY KEY (`ID_file`);

--
-- Indexes for table `notulensi_rapat`
--
ALTER TABLE `notulensi_rapat`
 ADD PRIMARY KEY (`ID_file`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
 ADD PRIMARY KEY (`TimelineID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
MODIFY `ID_file` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `notulensi_rapat`
--
ALTER TABLE `notulensi_rapat`
MODIFY `ID_file` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
MODIFY `TimelineID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
