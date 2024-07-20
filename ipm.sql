-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipm`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_kader`
--

CREATE TABLE `calon_kader` (
  `id_calon` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_kader`
--

INSERT INTO `calon_kader` (`id_calon`, `id_anggota`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `email`, `foto`) VALUES
(11, 1, 'ape', 'Palangka Raya', '1999-08-09', 'Laki-laki', 'saddsas', '087327328331', 'peni@gmail.com', '1716304906-Logo-IPM.jpg'),
(12, 0, 'sads', 'Palangka Raya', '1999-06-09', 'Laki-laki', 'sadad', '087327328331', 'peni@gmail.com', '1716307327-images.jpg'),
(13, 0, 'sads', 'Palangka Raya', '1999-06-09', 'Laki-laki', 'sadad', '087327328331', 'peni@gmail.com', '1716307390-images.jpg'),
(14, 0, 'sads', 'Palangka Raya', '1999-06-09', 'Laki-laki', 'sadad', '087327328331', 'peni@gmail.com', '1716307572-images.jpg'),
(15, 0, 'Apriyani', 'Palangka Raya', '1999-05-04', 'Laki-laki', 'dfsfsf', '087327328331', 'peni@gmail.com', '1716308274-61d440096969e.jpg'),
(16, 0, 'sads', 'assa', '1999-08-15', 'Laki-laki', 'sadadsad', '087327328331', 'peni@gmail.com', '1716467157-61d440096969e.jpg'),
(17, 0, 'Siti Norhalisa', 'Palangka Raya', '2000-04-18', 'Perempuan', 'Jl. Ahmad Yani IV', '087327328331', 'peni@gmail.com', '1716467214-35cd39d2-8661-4d0a-bbad-5c4c30a851ad_43.jpeg'),
(18, 0, 'sads', 'sda', '2000-04-23', 'Laki-laki', 'dsaas', '087327328331', 'peni@gmail.com', '1716468460-feedImage_2023_10_30_1698668875381-ztvslj.jpeg'),
(19, 0, 'Wulan', 'Palangka Raya', '2024-05-02', 'Perempuan', 'Jl. Piranha', '085249675041', 'budionojabiren@gmail.com', '1716468866-RZA_2164.JPG'),
(20, 0, 'Elga', 'Palangka Raya', '1999-07-15', 'Laki-laki', 'Jl. Melati Pandan', '087327328331', 'peni@gmail.com', '1716470578-feedImage_2023_10_30_1698668875381-ztvslj.jpeg'),
(21, 0, 'Lia', 'Palangka Raya', '1997-07-09', 'Perempuan', 'Jl. Adam Malik', '087327328331', 'lisa@gmail.com', '1716474452-feedImage_2023_10_30_1698668875381-ztvslj.jpeg'),
(22, 0, 'Mail', 'Palangka Raya', '1999-03-12', 'Laki-laki', 'Jl. Kebun', '087327328331', 'lisa@gmail.com', '1716622084-61d440096969e.jpg'),
(23, 0, 'Hendriansyah', 'Palangka Raya', '1999-04-23', 'Laki-laki', 'Jl. Seth Adji', '087327328331', 'hendri@gmail.com', '1716649249-61d440096969e.jpg'),
(24, 0, 'Hendri', 'Palangka Raya', '2024-05-20', 'Laki-laki', 'Jl. Setadji', '081352092503', 'hendri@gmail.com', '1716734083-WhatsApp_Image_2024-01-22_at_12_16_43_e3dcef65.jpg'),
(25, 14, 'Hendri', 'Palangka Raya', '2024-05-20', 'Laki-laki', 'Jl. Tjilik Riwut', '085787006595', 'hendri@gmail.com', '1716735287-35cd39d2-8661-4d0a-bbad-5c4c30a851ad_43.jpeg'),
(26, 15, 'Wulandari', 'Palangka Raya', '2000-07-26', 'Perempuan', 'Jl. Piranha IV', '087327328331', 'wulan@gmail.com', '1716738870-61d440096969e.jpg'),
(27, 16, 'Reza Mahesa', 'Kuala Kurun', '2005-06-08', 'Laki-laki', 'Jl. Seth Adji IV', '087327328331', 'reza@gmail.com', '1716814350-61d440096969e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_kegiatan`
--

CREATE TABLE `galeri_kegiatan` (
  `id_galerik` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri_kegiatan`
--

INSERT INTO `galeri_kegiatan` (`id_galerik`, `judul`, `isi`) VALUES
(1, 'Galeri IPM', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_about`
--

CREATE TABLE `p_about` (
  `id_about` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_about`
--

INSERT INTO `p_about` (`id_about`, `judul`, `isi`) VALUES
(1, 'Sejarah Terbentuknya IPM', '<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; color: #313233; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Berdirinya&nbsp;<a style=\"box-sizing: border-box; text-decoration-line: none; background: none; transition-property: background, box-shadow, border, color, opacity, transform; transition-duration: 0.3s; outline: none !important;\" href=\"https://ipm.or.id/\">Ikatan Pelajar Muhammadiyah</a>&nbsp;(IPM) tidak lepas dari latar belakang berdirinya Muhammadiyah sebagai gerakan dakwah Islam amar ma&rsquo;ruf nahi munkar sekaligus sebagai konsekuensi dari banyaknya sekolah yang merupakan amal usaha&nbsp;<a style=\"box-sizing: border-box; text-decoration-line: none; background: none; transition-property: background, box-shadow, border, color, opacity, transform; transition-duration: 0.3s; outline: none !important;\" href=\"http://muhammadiyah.or.id/\">Muhammadiyah</a>&nbsp;untuk membina dan mendidik kader.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 1.5rem; color: #313233; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Selain itu, situasi dan kondisi politik di Indonesia tahun 60-an yaitu pada masa berjayanya orde lama dan PKI, Muhammadiyah mendapat tantangan yang sangat berat untuk menegakkan dan menjalankan misinya. Oleh karena itu, IPM terpanggil untuk mendukung misi Muhammadiyah serta menjadi pelopor, pelangsung dan penyempurna perjuangan Muhammadiyah.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px; color: #313233; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify; background-color: #ffffff;\">Dengan demikian, kelahiran IPM mempunyai dua nilai strategis. Pertama, IPM sebagai aksentuator gerakan dakwah amar ma&rsquo;ruf nahi mungkar di kalangan pelajar. Kedua, IPM sebagai lembaga kaderisasi Muhammadiyah yang dapat membawa misi Muhammadiyah pada masa mendatang.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `p_artikel`
--

CREATE TABLE `p_artikel` (
  `partikelid` int(11) NOT NULL,
  `pa_judul` text NOT NULL,
  `pa_tgl` date NOT NULL,
  `pa_isi` text NOT NULL,
  `pa_link` varchar(99) NOT NULL,
  `pa_file` varchar(99) NOT NULL,
  `pa_penulis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_artikel`
--

INSERT INTO `p_artikel` (`partikelid`, `pa_judul`, `pa_tgl`, `pa_isi`, `pa_link`, `pa_file`, `pa_penulis`) VALUES
(1, 'berita utama hari ini', '2020-10-24', 'Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod.', 'berita-utama-hari-ini', '1.png', 'adjie'),
(2, 'What is Lorem Ipsum?', '2020-10-24', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'What-is-Lorem-Ipsum', '2.png', 'admin'),
(3, 'Where does it come from?', '2020-10-23', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Where-doe-it-come-rom', '3.png', 'admin'),
(4, 'Where can I get some', '2020-10-24', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Where-can-I-get-some', '4.png', 'anonim'),
(7, 'Mencabut Rumput', '2024-05-20', '<p>sdfjajfjkadbajdsjakjbajkb</p>', 'Mencabut-Rumput', '664b6e92c90a2.jpeg', 'IPM'),
(9, 'Jokowi Bertemu Ikatan Pelajar Muhammadiyah', '2024-05-25', 'Presiden Joko Widodo (Jokowi) berharap para kader Ikatan Pelajar Muhammadiyah (IPM) dapat menjadi teladan untuk mewujudkan generasi muda muslim yang berkelanjutan.\r\n\"Yang penguasaan ipteknya hebat, sekaligus memiliki moral, memiliki budi pekerti, memiliki mental juga yang hebat. Buat saya itulah sosok pelajar Muhammadiyah idaman,\" kata Presiden Jokowi saat memberikan sambutan dalam Muktamar XXIII IPM di Medan, Sumatra Utara, Sabtu.', 'Jokowi-Bertemu-Ikatan-Pelajar-Muhammadiyah', '6651f458b323d.jpg', 'Muhammad Radityo Priyasmoro'),
(10, 'Jokowi Terima Kunjungan PP Ikatan Pelajar Muhammadiyah di Istana Merdeka', '2024-05-25', 'Presiden RI Joko Widodo (Jokowi) didampingi Sekretaris Kabinet (Seskab) Pramono Anung menerima Pimpinan Pusat Ikatan Pelajar Muhammadiyah (PP IPM), Selasa (08/08/2023), di Istana Merdeka, Jakarta. Ketua Umum PP IPM, Nashir Efendi, dalam keterangannya mengatakan bahwa pihaknya bertemu dengan Presiden Jokowi untuk menyampaikan rencana Muktamar IPM ke-23 yang akan diselenggarakan di Kota Medan, Sumatera Utara.\r\n\r\nRead more: https://setkab.go.id/presiden-jokowi-terima-pp-ikatan-pelajar-muhammadiyah/', 'Jokowi-Terima-Kunjungan-PP-Ikatan-Pelajar-Muhammadiyah-di-Istana-Merdeka', '6651f5ca3ac93.jpeg', 'Lizsa Egeham'),
(11, 'Presiden terima Pelajar Muhammadiyah dan Kesatuan Mahasiswa Hindu', '2024-05-25', '<p>Presiden Joko Widodo menerima pengurus Ikatan Pelajar Muhammadiyah dan Presidium Kesatuan Mahasiswa Hindu Dharma Indonesia (KMHDI) di Istana Kepresidenan, Jakarta, Selasa.Berdasarkan keterangan yang disampaikan usai pertemuan, kedua perhimpunan pelajar dan mahasiswa itu menyampaikan undangan kongres kepada Presiden Joko Widodo.</p>', 'Presiden-terima-Pelajar-Muhammadiyah-dan-Kesatuan-Mahasiswa-Hindu', '6651fa8848b78.jpg', 'Guido Merung');

-- --------------------------------------------------------

--
-- Table structure for table `p_galeri`
--

CREATE TABLE `p_galeri` (
  `pfotoid` int(11) NOT NULL,
  `pf_judul` text NOT NULL,
  `pf_tanggal` date NOT NULL,
  `pf_ket` text NOT NULL,
  `pfuserid` varchar(50) NOT NULL,
  `pf_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_galeri`
--

INSERT INTO `p_galeri` (`pfotoid`, `pf_judul`, `pf_tanggal`, `pf_ket`, `pfuserid`, `pf_file`) VALUES
(1, 'photo bersama', '2024-05-26', 'bagus', '1', 'img/bg-img/664b6906019a6.jpeg'),
(3, 'test 2', '2024-05-20', 'test', '1', 'img/bg-img/664b6924df1e6.jpeg'),
(6, 'photo ad', '2024-05-20', 'ada', '1', 'img/bg-img/664b69343515b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `p_kegiatan`
--

CREATE TABLE `p_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_kegiatan`
--

INSERT INTO `p_kegiatan` (`id_kegiatan`, `judul`, `isi`) VALUES
(1, 'Kegiatan IPM', '<p style=\"text-align: justify;\">Kegiatan ini dirancang untuk membekali anggota dengan keterampilan kepemimpinan dan manajemen organisasi. Pelatihan meliputi pengembangan kemampuan berkomunikasi, pengambilan keputusan, dan pengelolaan program. Tujuannya adalah untuk mencetak pemimpin-pemimpin muda yang mampu mengarahkan dan memajukan organisasi.</p>\r\n<p style=\"text-align: justify;\">IPM aktif dalam berbagai kegiatan sosial yang bertujuan untuk membantu masyarakat sekitar. Kegiatan seperti bakti sosial, penggalangan dana untuk korban bencana, dan program kesehatan masyarakat menjadi bagian dari upaya IPM untuk menumbuhkan rasa kepedulian dan solidaritas di kalangan anggotanya.</p>\r\n<p style=\"text-align: justify;\">IPM juga mengapresiasi bakat dan minat anggota dalam bidang seni dan budaya. Pameran seni, pertunjukan drama, dan festival budaya merupakan beberapa kegiatan yang diselenggarakan untuk menyalurkan kreativitas dan memperkaya wawasan kebudayaan anggota.</p>\r\n<p style=\"text-align: justify;\">Dengan berbagai kegiatan yang komprehensif, Ikatan Pelajar Muhammadiyah berkomitmen untuk membentuk generasi muda yang cerdas, berakhlak, dan berkontribusi positif bagi masyarakat. Setiap kegiatan dirancang untuk mengembangkan potensi anggota secara holistik, sehingga mereka siap menghadapi tantangan masa depan dan menjadi agen perubahan yang membawa kebaikan bagi lingkungan sekitar.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `p_regis`
--

CREATE TABLE `p_regis` (
  `id_anggota` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_regis`
--

INSERT INTO `p_regis` (`id_anggota`, `username`, `email`, `password`) VALUES
(1, 'Ape', 'peni@gmail.com', '$2y$10$R9OtOMzhxt9tgXxtG0STa.Pd4IpFM7MDalzeU0YUB0Xxg3glRoJT2'),
(2, 'peeni', 'ape@gmail.com', '$2y$10$GmSGUx8Md29kUrDyYrSwfeDnftrFm7bOHhLCVkvj145jMu7tMVeIq'),
(4, 'sitinorhalisa11', 'norhalisasiti003@gmail.com', '$2y$10$MuF3s8kkbnoYDqF/lrgZVuh.XWlDAZdcCFDXu.Xc08Y2JMEn2z4ua'),
(5, 'Lisa', 'lisa@gmail.com', '$2y$10$Idw.ZuaDJuw22CVojdhO5Od.ccs8A68P6idVdzFuvza4mhYwhs0Gq'),
(6, 'sitinorhalisa114', 'norhalisasiti003@gmail.com', '$2y$10$g7k3jGWm4MMmkU8SXkxFEOipzxSGog.iqQ2rYdWfO9a.TwZiZFlQ6'),
(7, 'sitinorhalisa114', 'norhalisasiti003@gmail.com', '$2y$10$zoV01F7Pz2i6QatIiPDDd.Zi9X37CMM7j03CU1u9bOAF8uWFM2xBe'),
(9, 'anis', '', '$2y$10$1U08HV53LS3MI8O03h9jgOMZDG9VGaSKs4Yxo.8vgIBM3sM/kPUJu'),
(10, 'lisa12', '', '$2y$10$2oGifCnvsQAQbgTIVW9NSuS4Q2Nv0039VxS.w8VQahphrcZcB06/K'),
(11, 'wulan', '', '$2y$10$on5bzATyFONAqjdrKvL38.t9Tloi9sdL5qkj1LZRmK2JwxnIs/rN6'),
(12, 'apede', '', '$2y$10$j7PT9CXcCv.xerRiVzImYusCEYQPRWLZPigJPGgP7Q2iSLNxZcprm'),
(13, 'elga', 'elga@gmail.com', '$2y$10$jYtUq.NO4CQc1e9F3whElO8DgoEMmltEg.qd7gFm2g7lK09Cx5T3.'),
(14, 'Hendri', 'hendri@gmail.com', '$2y$10$mqXexhGH.nC01xOae4TvmuUnxbNnfPUI5.OBwUOCKs14Ybr1UpqDe'),
(15, 'Wulandari', 'wulan@gmail.com', '$2y$10$eZL8CslTKb5mVxRmmnGea.g3KPr3Z16/jDpRRpmU74.Gdgcx2zlV.'),
(16, 'Reza', 'reza@gmail.com', '$2y$10$xh5UFMprGPSAwNicKPGk1ey0UXuIZXD6Uy7ubhHdv.YICZy7aWR/y');

-- --------------------------------------------------------

--
-- Table structure for table `p_user`
--

CREATE TABLE `p_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `role` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_user`
--

INSERT INTO `p_user` (`id_user`, `username`, `password`, `role`) VALUES
(8, 'admin', '$2y$10$ZoADrrccmFCoTua6iEdBIuTiFgF7AwPIQdx6wgv7D5raD/5kFy4JK', '1'),
(10, 'Reza', '$2y$10$CVqojmfDM/gP9kM6fneNROv1PIUa8e1zjwJ/FJGbz3twGfvASPx1.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_seting` int(11) NOT NULL,
  `judul` text NOT NULL,
  `telp` text NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `logo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_seting`, `judul`, `telp`, `alamat`, `email`, `logo`) VALUES
(1, 'IKATAN PELAJAR MUHAMMADIYAH', '+6282281022494', 'Jl. RTA Milono, Langkai, Kec. Pahandut, Kota Palangka Raya, Kalimantan Tengah 74874', 'ipmpky@gmail.com', '664a129d7be8d.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_kader`
--
ALTER TABLE `calon_kader`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `galeri_kegiatan`
--
ALTER TABLE `galeri_kegiatan`
  ADD PRIMARY KEY (`id_galerik`);

--
-- Indexes for table `p_about`
--
ALTER TABLE `p_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `p_artikel`
--
ALTER TABLE `p_artikel`
  ADD PRIMARY KEY (`partikelid`);

--
-- Indexes for table `p_galeri`
--
ALTER TABLE `p_galeri`
  ADD PRIMARY KEY (`pfotoid`);

--
-- Indexes for table `p_kegiatan`
--
ALTER TABLE `p_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `p_regis`
--
ALTER TABLE `p_regis`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `p_user`
--
ALTER TABLE `p_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_seting`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_kader`
--
ALTER TABLE `calon_kader`
  MODIFY `id_calon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `galeri_kegiatan`
--
ALTER TABLE `galeri_kegiatan`
  MODIFY `id_galerik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_about`
--
ALTER TABLE `p_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_artikel`
--
ALTER TABLE `p_artikel`
  MODIFY `partikelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `p_galeri`
--
ALTER TABLE `p_galeri`
  MODIFY `pfotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `p_kegiatan`
--
ALTER TABLE `p_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_regis`
--
ALTER TABLE `p_regis`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `p_user`
--
ALTER TABLE `p_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_seting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
