-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 10:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idbrt` int(11) UNSIGNED NOT NULL,
  `namabrt` varchar(255) NOT NULL,
  `slugbrt` varchar(255) NOT NULL,
  `gbrbrt` varchar(255) NOT NULL,
  `isibrt` text DEFAULT NULL,
  `hitbrt` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idbrt`, `namabrt`, `slugbrt`, `gbrbrt`, `isibrt`, `hitbrt`) VALUES
(8, 'Novrianda Pimpin KNPI Balikpapan Kota, Terpilih Pada MUSCAM Di Gedung Graha Pemuda KNPI', 'novrianda-pimpin-knpi-balikpapan-kota-terpilih-pada-muscam-di-gedung-graha-pemuda-knpi', '7-3.jpg', '<p xss=removed>NAKHODA BARU:Novrianda (kedua dari kiri) salam komando bersama rekan-rekan pengurus KNPI Balikpapan usai terpilih sebagai Ketua KNPI PK Balikpapan Kota di Gedung Graha Pemuda KNPI.</p>\r\n\r\n<p xss=removed>Suarabalikpapan.com,BALIKPAPAN-Novrianda terpilih sebagai Ketua Pengurus Kecamatan (PK) KNPI Balikpapan Kota periode 2019-2022, dalam Musyarawah Kecamatan (Muscam) DPD KNPI Se-Kota Balikpapan, di Gedung Graha Pemuda KNPI Balikpapan, Sabtu (13/7/2019) pagi.</p>\r\n\r\n<p xss=removed><br>\r\nDalam Muscam tersebut Novrianda mendapat dukungan dari 40 organisasi kepemudaan (OKP) di internal KPNI Balikpapan. Usai dilantik Novrianda mengaku untuk tahap awal dirinya akan melakukan pembenahan organisasi dengan melakukan penyusunan pengurus organisasi.“Saya akan menyusun pengurus kecamatan terlebih dahulu. Kemudian menyusun program kerja jangka pendek dan jangka panjang,” kata Novrianda kepada media ini, usai pelantikan. Ia menuturkan, untuk program jangka pendek KNPI Balikpapan Kota akan mempersiapkan kegiatan untuk memeriahkan HUT ke-74 Kemerdekaan RI. Sedangkan jangka panjang akan mempersiapkan berbagai program pemberdayaan pemuda di Balikpapan kota. Seperti pelatihan keterampilan dan tenaga kerja.<br>\r\n“Untuk program jangka pendek mungkin ada kegiatan memeriahkan HUT RI. Seperti lomba-lomba tradisional, donor darah, bersih-bersih lingkungan dan lainnya.Sedangkan program jangka panjang seperti pelatihan mekanik bengkel dan UKM,” kata pengagum tokoh nasional Dahlan Iskan ini.</p>\r\n\r\n<p xss=removed>Selaku ketua PK KNPI Balikpapan Kota yang baru, dirinya meminta dukungan dari teman-teman pengurus KNPI, aparat terkait, pemerintah serta masyarakat Balikpapan Kota agar program yang direncanakan bisa terlaksana.<br>\r\n“Saya minta dukungan saja kepada masyarakat, teman-teman KNPI dan pihak-pihak terkait supaya program PK KNPI Balikpapan Kota bisa berjalan lancar,” kata pria yang senang nasi goreng serta hobi drone dan otomotif ini. Sementara itu, Ketua KNPI Kota Balikpapan Andi Ahmad Mutawally yang akrab disapa Andi Weli berharap Novrianda membawa perubahan pada KNPI Balikpapan Kota. “Saya berharap KNPI Balikpapan Kota ada perubahan dibawah kepemimpinan Novrianda,” kata Andi Weli lewat ponselnya. Ia juga meminta kepada Novrianda agar aktif menggelar pelatihan-pelatihan di internal KNPI Balikpapan Kota seperti pelatihan kepemimpinan dan kaderisasi serta aktif membangun komunikasi dengan komunitas-komunitas dan organisasi di luar KNPI. “Jadi saya berharap KNPI Balikpapan Kota aktif, tidak diam serta melaksanakan program kerja yang sinergi dengan program kerja pemerintah kota,” harapnya.(sb-02).</p>\r\n\r\n<p xss=removed>BIODATA<br>\r\nNama : Novrianda<br>\r\nLahir: Balikpapan 7 November 1985<br>\r\nIstri:Erni Ariyanti<br>\r\nAnak:Alifa Rafa Al fariza & M Rafi Al Faqih<br>\r\nAlamat:Jalan Telaga Sari 2, Kelurahan Telaga Sari Balikpapan Kota<br>\r\nPendidikan : SMA</p>\r\n\r\n<p xss=removed>PEKERJAAN<br>\r\nPemilik Rafajayatrans Transporter Alat Berat<br>\r\nPemilik BBRT Racing Team</p>\r\n\r\n<p xss=removed>KARIR ORGANISASI<br>\r\nKetua PK KNPI Kecamatan Balikpapan Kota<br>\r\nWakil Ketua Cabor Cricket Kota Balikpapan<br>\r\nWakil Ketua Kompartemen 4 Hipmi Kota Balikpapan<br>\r\nWakil Ketua II Gapeksindo Kota Balikpapan<br>\r\nPengurus Komunitas Drone Multirotor Balikpapan<br>\r\nSumber : <a href=\"http://suarabalikpapan.com/2019/07/13/novrianda-pimpin-knpi-balikpapan-kota-terpilih-pada-muscam-di-gedung-graha-pemuda-knpi/\">http://suarabalikpapan.com/2019/07/13/novrianda-pimpin-knpi-balikpapan-kota-terpilih-pada-muscam-di-gedung-graha-pemuda-knpi/</a></p>\r\n\r\n<div class=\"sharethis-inline-share-buttons st-left st-has-labels  st-inline-share-buttons st-animated\" id=\"st-1\">\r\n<div class=\"st-total \"> </div>\r\n</div>\r\n', 0),
(9, 'DPD KNPI Kota Balikpapan,Gelar Baksos Menyambut HUT ke 46 KNPI', 'dpd-knpi-kota-balikpapangelar-baksos-menyambut-hut-ke-46-knpi', 'IMG-20190712-WA0013-696x522.jpg', '<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Rangkaian peringatan HUT KNPI ke 46 diwarnai berbagai kegiatan. Sebagai pelopor tonggak kepemudaan yang selalu melahirkan pemimpin berkualitas di negeri yang tercinta ini. Seperti yang dilakukan Dewan Pimpinan Daerah (DPD) Komite Nasional Pemuda Indonesia (KNPI) kota Balikpapan, yang selalu giat dalam berbagai kegiatan sosial.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed><img alt=\"\" class=\"img-fluid\" src=\"/asset/vendor/fileman/Uploads/Images/IMG_20190712_WA0013_1_700x525.jpg\" xss=removed></span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Dalam aksinya, DPD KNPI Balikpapan, melaksanakan bakti sosial berupa bersih- bersih tuguh pemuda yang terletak di simpang tiga Gunung Pasir, Balikpapan Tengah, pada Jum’at (12/7/19). Kegiatan tersebut dimulai sejak pagi pukul 07.00 sampai 11.00. wita.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed><img alt=\"\" class=\"img-fluid\" src=\"/asset/vendor/fileman/Uploads/Images/IMG_20190712_WA0014.jpg\" xss=removed></span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed>Ketua panitia HUT ke 46 KNPI kota Balikpapan, Andi Fahri Arsal,ST, mengungkapakan, bahwa bentuk kegiatan yang dilaksanakan jajaran DPD KNPI Balikpapan, beragam. Selain bakti sosial, kegiatan kemasyaratan juga dilaksanakan.</span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed>“Kami sudah lakukan diawal, mulai baksos, lomba lomba dan banyak kegiatan lainnya,” katanya kepada Indonesiafakta.com (shinta/IF)</span></span></p>\r\n\r\n<p xss=removed> </p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed>sumber : </span></span><a href=\"https://www.indonesiafakta.com/2019/07/12/dpd-knpi-kota-balikpapangelar-baksos-menyambut-hut-ke-46-knpi/\">https://www.indonesiafakta.com/2019/07/12/dpd-knpi-kota-balikpapangelar-baksos-menyambut-hut-ke-46-knpi/</a></p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bidang`
--

CREATE TABLE `bidang` (
  `idbdng` int(11) NOT NULL,
  `namabdng` varchar(255) NOT NULL,
  `jbtnbdng` varchar(255) NOT NULL,
  `gbrbdng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `idglr` int(11) UNSIGNED NOT NULL,
  `namaglr` varchar(255) NOT NULL,
  `gbrglr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idglr`, `namaglr`, `gbrglr`) VALUES
(8, 'Novrianda Pimpin KNPI Balikpapan Kota', '7-3.jpg'),
(9, 'DPD KNPI Balikpapan Kota Gelar Baksos', 'IMG-20190712-WA0013-1-700x525.jpg'),
(10, 'Adi Pimpin KNPI Balikpapan Utara', 'balut_knpi--.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `idinf` int(11) UNSIGNED NOT NULL,
  `tlpinf` varchar(255) NOT NULL,
  `emailinf` varchar(255) NOT NULL,
  `fbinf` varchar(255) NOT NULL,
  `twitinf` varchar(255) NOT NULL,
  `iginf` varchar(255) NOT NULL,
  `almtinf` text NOT NULL,
  `susuninf` text DEFAULT NULL,
  `sjrhinf` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`idinf`, `tlpinf`, `emailinf`, `fbinf`, `twitinf`, `iginf`, `almtinf`, `susuninf`, `sjrhinf`) VALUES
(1, '08115544266', 'kontak@knpi.com', 'https://id-id.facebook.com/', 'https://twitter.com/knpi', 'https://www.instagram.com/?hl=id', 'Jl. Manuntung No.1, Gn. Bahagia, Kecamatan Balikpapan Selatan, Kota Balikpapan, Kalimantan Timur', '<p><strong>SUSUNAN DAN PERSONALIA</strong></p>\r\n\r\n<p><strong>DEWAN PENGURUS DAERAH</strong></p>\r\n\r\n<p><strong>KOMITE NASIONAL PEMUDA INDONESIA</strong></p>\r\n\r\n<p><strong>KOTA BALIKPAPAN PERIODE 2018-2021</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" class=\"table table-bordered table-sm table-striped\">\r\n <tbody>\r\n  <tr>\r\n   <td><strong>FOTO</strong></td>\r\n   <td><strong>JABATAN</strong></td>\r\n   <td><strong>NAMA PENGURUS</strong></td>\r\n  </tr>\r\n  <tr>\r\n   <td><img alt=\"\" class=\"img-responsive\" src=\"/www/dpdknpibalikpapan/asset/vendor/fileman/Uploads/Images/IMG_20190712_WA0014.jpg\" xss=removed></td>\r\n   <td>KETUA</td>\r\n   <td>Andi Achmad Mutawally</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang Organisasi </td>\r\n   <td>M. Ali Amin</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang Kaderisasi dan keanggotaan  </td>\r\n   <td>M. Rafi’I Hag</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang hubungan antar lembaga</td>\r\n   <td>Ir. Nelson tarihoran</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang politik, hukum dan HAM</td>\r\n   <td>Rony Nur Arieza Sekedang.SH</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang infrastruktur dan permukiman  </td>\r\n   <td>Andi Adi Kusuma Solong</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang Hankam dan bela Negara</td>\r\n   <td>Aguslimin</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang pemberdayaan perempuan Dan perlindungan perempuan</td>\r\n   <td>Yulishinta</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang keagamaan dan multicultural </td>\r\n   <td>Marban</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang penelitian dan pengembangan</td>\r\n   <td>Andreas Parulian Sitohang</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang Riset dan IPTEK</td>\r\n   <td>Rustam Jaseli</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang pemuda danOlahraga</td>\r\n   <td>Salahuddin</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang keselamatan dan bencana alam</td>\r\n   <td>M. Yussuf</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang lingkungan hidup </td>\r\n   <td>Mahfud Budianto. ST</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang ekonomi,industry dan perdagangan</td>\r\n   <td>Ken Arif Joni NG</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang koperasi dan UMKM </td>\r\n   <td>Achmad Betawi</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang Tenaga kerja </td>\r\n   <td>Suwanto. ST</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang budaya, kesenian, pariwisata dan ekonomi kreatif</td>\r\n   <td>M. Jais Jailani.SH</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang pendidikan, pelatihan dan pengembangan SDM pemuda </td>\r\n   <td>Effendi. SE</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang pelajar dan kemahasiswaan </td>\r\n   <td>Okvyan Rindu Aldi</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang kelautan dan pemberdayaan daerah pesisir</td>\r\n   <td>Andi Husein</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang energy sumberdaya alam </td>\r\n   <td>H. Taufik Jamal nur</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang pertanian, perkebuna dan peternakan </td>\r\n   <td>Nur Fathurahman Hidayat</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang antar daerah dan internasional</td>\r\n   <td> Andi Fachri. ST</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang kesehatan, kependudukan dan keluarga berencana</td>\r\n   <td>Husen Kadri</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang perhubungan dan transportasi </td>\r\n   <td>Jumadi B wibowo.SE</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang penanggulangan AIDS dan Anti Narkoba</td>\r\n   <td>Syarief Samsul. S.Sos</td>\r\n  </tr>\r\n  <tr>\r\n   <td> </td>\r\n   <td>Wakil Ketua bidang komunikasi, informatika dan pengabdian masyarakat </td>\r\n   <td>Eddie Ada</td>\r\n  </tr>\r\n </tbody>\r\n</table>\r\n', '<div> </div>\r\n\r\n<div>\r\n<p><strong>DEWAN PENGURUS DAERAH</strong></p>\r\n\r\n<p><strong>KOMITE NASIONAL PEMUDA INDONESIA</strong></p>\r\n\r\n<p><strong>KOTA BALIKPAPAN  PERIODE 2018-2021</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>KETUA                                                                           </strong>                                                                   <strong>: Andi</strong> <strong>Achmad</strong> <strong>Mutawally</strong></p>\r\n\r\n<ol>\r\n <li>Wakil Ketua bidang Organisasi                                                                                              : M. Ali Amin</li>\r\n <li>Wakil Ketua bidang Kaderisasi dan keanggotaan                                                                  : M. Rafi’I Hag</li>\r\n <li>Wakil Ketua bidang hubungan antar lembaga                                                                        : Ir. Nelson tarihoran</li>\r\n <li>Wakil Ketua bidang politik, hukum dan HAM                                                                          : Rony Nur Arieza Sekedang.SH</li>\r\n <li>Wakil Ketua bidang infrastruktur dan permukiman                                                                 : Andi Adi Kusuma Solong</li>\r\n <li>Wakil Ketua bidang Hankam dan bela Negara                                                                       : Aguslimin</li>\r\n <li>Wakil Ketua bidang pemberdayaan perempuan Dan perlindungan perempuan                    : Yulishinta</li>\r\n <li>Wakil Ketua bidang keagamaan dan multicultural                                                                  : Marban</li>\r\n <li>Wakil Ketua bidang penelitian dan pengembangan               : Andreas Parulian Sitohang</li>\r\n <li>Wakil Ketua bidang Risetdan IPTEK                                                : Rustam Jaseli</li>\r\n <li>Wakil Ketua bidang pemuda danOlahraga                             : Salahuddin</li>\r\n <li>Wakil Ketuabidang keselamatan dan bencana alam                                               : M. Yussuf</li>\r\n <li>Wakil Ketua bidang lingkungan hidup                                   : Mahfud Budianto. ST</li>\r\n <li>Wakil Ketua bidang ekonomi,industry dan perdagangan      : Ken Arif Joni NG</li>\r\n <li>Wakil Ketua bidang koperasi dan UMKM                             : Achmad Betawi</li>\r\n <li>Wakil Ketua bidang Tenaga kerja                                           : Suwanto. ST</li>\r\n <li>Wakil Ketua bidang budaya, kesenian, pariwisata dan ekonomi kreatif                                                               : M. Jais Jailani.SH</li>\r\n <li>Wakil Ketua bidang pendidikan, pelatihan dan pengembangan SDM pemuda            : Effendi. SE</li>\r\n <li>Wakil Ketua bidang pelajar dan kemahasiswaan                    : Okvyan Rindu Aldi</li>\r\n <li>Wakil Ketua bidang kelautan dan pemberdayaan daerah pesisir            : Andi Husein</li>\r\n <li>Wakil Ketua bidang energy sumberdaya alam                       : H. Taufik Jamal nur</li>\r\n <li>Wakil Ketua bidangpertanian, perkebuna dan peternakan                                                     : Nur Fathurahman Hidayat</li>\r\n <li>Wakil Ketua bidang antar daerah dan internasional               : AndiFachri. ST</li>\r\n <li>Wakil Ketuabidang kesehatan, kependudukan dan keluarga berencana                                                          : Husen Kadri</li>\r\n <li>Wakil Ketua bidang perhubungan dan transportasi                : Jumadi B wibowo.SE</li>\r\n <li>Wakil Ketua bidang penanggulangan AIDS dan Anti Narkoba            : Syarief Samsul. S.Sos.</li>\r\n <li>Wakil Ketua bidang komunikasi, informatika dan pengabdian masyarakat                                                   :  Eddie Ada</li>\r\n</ol>\r\n\r\n<p> </p>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kata`
--

CREATE TABLE `kata` (
  `idkata` int(11) UNSIGNED NOT NULL,
  `namakata` varchar(255) DEFAULT NULL,
  `jbtnkata` varchar(255) DEFAULT NULL,
  `gbrkata` varchar(255) DEFAULT NULL,
  `isikata` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kata`
--

INSERT INTO `kata` (`idkata`, `namakata`, `jbtnkata`, `gbrkata`, `isikata`) VALUES
(1, 'Saul Goodman', 'Ceo Founder', '1.jpg', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.'),
(2, 'Sara Wilsson', 'Designer', '2.jpg', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'),
(3, 'Jena Karlis', 'Store Owner', '3.jpg', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.'),
(4, 'Matt Brandon', 'Freelancer', 'testimonial-4.jpg', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `idkntk` int(11) UNSIGNED NOT NULL,
  `namakntk` varchar(255) DEFAULT NULL,
  `emailkntk` varchar(255) DEFAULT NULL,
  `pesankntk` text DEFAULT NULL,
  `balaskntk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(11);

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `idorg` int(11) UNSIGNED NOT NULL,
  `namaorg` varchar(255) DEFAULT NULL,
  `jnsorg` varchar(255) DEFAULT NULL,
  `namaketua` varchar(255) DEFAULT NULL,
  `gbrketua` varchar(255) DEFAULT NULL,
  `namasekre` varchar(255) DEFAULT NULL,
  `gbrsekre` varchar(255) DEFAULT NULL,
  `namabenda` varchar(255) DEFAULT NULL,
  `gbrbenda` varchar(255) DEFAULT NULL,
  `susunorg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`idorg`, `namaorg`, `jnsorg`, `namaketua`, `gbrketua`, `namasekre`, `gbrsekre`, `namabenda`, `gbrbenda`, `susunorg`) VALUES
(5, 'DPD ANGKATAN MUDA PEMBAHARUAN INDONESIA KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'DPD ANGKATAN MUDA ISLAM INDONESIA PERIODE KOTA BALIKPAPAN', 'OKP', 'M.Firdaus Ansyori,SH', NULL, 'Thiar Safriadi', NULL, 'Tina Orima A.md', NULL, NULL),
(7, 'PC GERAKAN PEMUDA ANSOR ( GP. ANSOR ) KOTA BALIKPAPAN', 'OKP', 'M.Husin Kadri', NULL, 'Firco Rois', NULL, 'M.Abdul Rozak', NULL, NULL),
(8, 'GENERASI MUDA TRIKORA KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'DPD BM. PAN KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'BAKORCAB FOKUS MAKER KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'PC 1801 GM.FKPPI KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'PC.  FATAYAT NU KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'DPD GEMA KOSGORO  KOTA  BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'DPD. GM. KOSGORO  KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'DPC GAMKI KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'GENERASI MUDA PEMBANGUNAN INDONESIA ( GMPI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'GENERASI MUDA KESATUAN PENERUS PERJUANGAN RI  ( GARUDA KPP   – RI ) KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'DPD GABUNGAN PEMUDA PEMBANGUNAN INDONESIA KOTA BALIKPAPAN', 'OKP', 'Rasman', NULL, 'Roy Yunita Novita', NULL, 'Irma Andriani', NULL, NULL),
(19, 'DPC. HIMPUNAN PEMUDA PEMBANGUNAN INDONESIA KOTA BALIKPAPAN', 'OKP', 'Muhammad Riski', NULL, 'Yunieke Amalia', NULL, 'Ali Agratama', NULL, NULL),
(20, 'DPC. HIMPUNAN MAHASISWA ISLAM ( HMI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'PC. IKATAN PUTRA PUTRI NAHDATUL ULAMA ( IPP NU ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'PD. IKATAN PELAJAR MUHAMMADIYAH KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'DPD. MAHASISWA PANCASILA ( MAPANCAS ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'DPD. MAHASISWA PEMBANGUNAN INDONESIA ( MPI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'PD. NASYIATUL AISYIYAH ( NA ) KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'PC. PEMUDA KATOLIK KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'PC. PEMUDA DEMOKRAT INDONESIA  KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'PC. PERGERAKAN MAHASISWA  ISLAM INDONESIA  KOTA BALIKPAPAN', 'OKP', 'Moh Faily', 'WhatsApp_Image_2019-10-19_at_16_45_50.jpeg', 'Muhammad Said Abdil', NULL, 'Muhammad Khayrul Anam', NULL, NULL),
(29, 'PC. PEMUDA BULAN BINTANG ( PBB ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'PD. PEMUDA MUHAMMADIYAH KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'MARKAS CABANG PEMUDA PANCA MARGA  KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'DPD. PEMUDA PENERUS AMANAT PERJUANGAN REPUBLIK NDONESIA ( PPAPRI ) KOTA BALIKPAPAN ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'SATUAN MAHASISWA PEMUDA PANCASILA ( SATMA PP ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Gerakan Mahasiswa Kristen Indonesia BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'IKATAN PEMUDA DARUD DAKWAH WAL ‘ IRSYAD ( IPDDI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'SRIKANDI PEMUDA PANCASILA KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'IKATAN PUTERA PUTERI INDONESIA ( IPPI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Baladika Karya Kota Balikpapan KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'DPD.Pemuda HKTI Kota Balikpapan ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'IKATAN PEMUDA KARYA  Kota Balikpapan ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'DPD.GARDA MUDA MERAH PUTIH (GMMP) PERIODE KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'DPD WIRAKARYA INDONESIA KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'DPD PMI ( Pemuda Muslimin Indonesia ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Generasi Muda MKGR Kota Balikpapan ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'DPW. Gerakan Pemuda Nahdatul Ummat Kota BALIKPAPAN  ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'DPC. Pemuda Islam Kota Balikpapan ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'DPC. Generasi Muda Mathla ‘ Ul Anwar KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'DPC. Gerakan Pemuda Islam Indonesia ( GPII ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'PR. Keluarga Besar Putra Putri Polri Kota BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'DPC. Gerakan Pemuda Islam ( GPI ) Kota BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Angkatan Muda  Ka’Bah KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Generasi Muda Sriwijaya Kota Balikpapan ', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Angkatan Muda Satuan Karya Ulama Ind ( AMSI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Angkatan Muda Satuan Karya Ulama Ind ( AMSI ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Barisan Muda Kosgoro ( BMK ) KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Ikatan Mahasiswa Muhammadiyah ( IMM ) Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Ikatan Pelajar Nahdatul Ulama ( IPNU ) Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Himpunan Mahasiswa Kosgoro 1957 ( Himma Kosgoro )', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'DPC. GMNI Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'DPD. GM GAKARI Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'DPC. GARDA BANGSA Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'PC. Gerakan Mahasiswa Islam Indonesia Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'DPD. Komunitas Muda Telematika Indonesia Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'DPD. Majelis Mahasiswa Indonesia Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'DPD. Angkatan Muda Thareqat Islam Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Patriot Bela Bangsa Cab. Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'DPD. GEMA PANCASILA Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'DPC. PEMUDA JUSTITIA Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'DPD. PEMUDA MANDALA TRIKORA Kota Balikpapan', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'DPD PERISAI KOTA BALIKPAPAN', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Gerekan Pemuda Ka’ bah', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Gerakan Pemuda Sehat', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'DPD Persaudaraan Pemuda PENA', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'Himpunan Kerukunan Tani Indonesia', 'OKP', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'PENGURUS KECAMATAN KNPI BALIKPAPAN TIMUR ', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'PENGURUS KECAMATAN KNPI BALIKPAPAN SELATAN', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'PENGURUS KECAMATAN KNPI BALIKPAPAN TENGAH ', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'PENGURUS KECAMATAN KNPI BALIKPAPAN UTARA ', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'PENGURUS KECAMATAN KNPI BALIKPAPAN BARAT', 'PK', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `idpngrs` int(11) UNSIGNED NOT NULL,
  `namapngrs` varchar(255) NOT NULL,
  `jbtnpngrs` varchar(255) NOT NULL,
  `gbrpngrs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`idpngrs`, `namapngrs`, `jbtnpngrs`, `gbrpngrs`) VALUES
(1, 'Andi Achmad Mutawally', 'Ketua', 'WhatsApp_Image_2019-07-17_at_10_23_321.jpeg'),
(2, 'Wenny GHS', 'Sekretaris', 'WhatsApp_Image_2019-07-17_at_10_24_18.jpeg'),
(3, 'Achmad Thoyyib', 'Bendahara', 'WhatsApp_Image_2019-07-17_at_10_24_37.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idusr` int(11) UNSIGNED NOT NULL,
  `namausr` varchar(255) DEFAULT NULL,
  `userusr` varchar(255) DEFAULT NULL,
  `passusr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idusr`, `namausr`, `userusr`, `passusr`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idbrt`);

--
-- Indexes for table `bidang`
--
ALTER TABLE `bidang`
  ADD PRIMARY KEY (`idbdng`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idglr`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`idinf`);

--
-- Indexes for table `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`idkata`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkntk`),
  ADD UNIQUE KEY `emailkntk` (`emailkntk`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`idorg`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`idpngrs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idusr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idbrt` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bidang`
--
ALTER TABLE `bidang`
  MODIFY `idbdng` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idglr` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `idinf` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kata`
--
ALTER TABLE `kata`
  MODIFY `idkata` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkntk` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `idorg` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `idpngrs` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idusr` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
