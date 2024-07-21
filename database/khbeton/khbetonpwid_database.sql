-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2024 at 01:09 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khbetonpwid_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama`, `email`, `password`, `foto`) VALUES
('justnewbie', 'Ichsan Maulana', 'justn3wbi3@gmail.com', '6fbda87099f944dc2e155bb75fe629188059a142', '091636-Untitled-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `balasan`
--

CREATE TABLE `balasan` (
  `kd_balasan` int(11) NOT NULL,
  `kd_komentar` int(11) NOT NULL,
  `tgl_bls` date NOT NULL,
  `balasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `kd_berita` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(200) NOT NULL,
  `judul_seo` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(224) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kd_berita`, `tanggal`, `judul`, `judul_seo`, `isi`, `foto`) VALUES
(1, '2019-04-18', 'Uji Kekuatan Beton dengan Hammer Test Oleh Balai Pengujian dan Peralatan Semarang (BP2)', 'uji-kekuatan-beton-dengan-hammer-test-oleh-balai-pengujian-dan-peralatan-semarang-bp2', 'Untuk menjaga kualitas atau mutu beton, KH Beton selalu merencanakan kegiatan Tes Pemeriksaan berkala salah satunya yaitu Uji Hammer Test pada produk Saluran Beton Pracetak, atau biasa di sebut saluran U Ditch. Pemeriksaan produk ini dilakukan oleh Balai Pengujian Dan Peralatan (BP2) , yang merupakan salah satu unit pelayanan teknis DPU Bina Marga dan Cipta Karya Provinsi Jawa Tengah.\r\n<br>\r\n<br>\r\nHammer test yaitu suatu alat pemeriksaan mutu beton tanpa merusak beton. Disamping itu dengan menggunakan metode ini akan diperoleh cukup banyak data dalam waktu yang relatif singkat dengan biaya murah.\r\n<br>\r\n<br>\r\nMetode pengujian ini dilakukan dengan menggunakan memberikan beban intact (tumbukan) pada permukaan beton dengan menggunakan suatu massa yang diaktifkan dengan menggunakan energi yang besarnya tertentu. Jarak pantulan yang timbul dari massa tersebut padaa saat terjadi tumbukan dengan permukaan beton benda uji dapat memberikan indikasi kekerasan juga setelah dikalibrasi. Alat ini sangat berguna untuk mengetahui keseragaman material beton pada struktur, karena kesederhanaanya, pengujian menggunakan alat ini sangat cepat sehingga dapat mencakup area pengujian yang luas dalam waktu yang singkat.', '185000-img2.jpg'),
(2, '2018-10-24', 'KH BETON berpartisipasi Menjadi Sponsor pada Rapat Kerja INKINDO Provinsi DKI Jakarta', 'kh-beton-berpartisipasi-menjadi-sponsor-pada-rapat-kerja-inkindo-provinsi-dki-jakarta', 'DPP INKINDO DKI Jakarta akan menyelenggarakan Rapat Kerja Provinsi (Rakerprov) Tahun 2018 yang telah diselenggarakan pada Rabu 24 Oktober 2018 di Ruang Binakarna - Hotel Bidakara, dimana sebelum acara Rakerprov akan diadakan acara sosialisasi Perlem LPJK N No. 4 tahun 2017, No. 5 Tahun 2017 dan No. 7 Tahun 2017. IKATAN Nasional Konsultan Indonesia (Inkindo) Provinsi DKI Jakarta siap mengambil peran strategis sebagai mitra Pemerintah Provinsi DKI Jakarta dalam memajukan ibu kota Jakarta. Kesiapan Inkindo ini ditegaskan dalam Rapat Kerja Provinsi (Rakerprov) Inkindo DKI Jakarta 2018 di Hotel Bidakara, Jakarta, Rabu (24/10). Ini adalah Rakerprov pertama dalam kepengurusan DPP Inkindo DKI Jakarta Masa Bakti 2018-2022.\r\n<br>\r\n<br>\r\nDalam acara pertemuan rapat tersebut, KH Beton turut dalam menghadiri dan menjadi salah satu bagian sponsorship pertama perusahaan yang bergerak di dalam Industri Beton Pracetak. Tidak hanya itu, dalam acara tersebut terdapat area stand display, dimana semua sponsorship diberi kesempatan dan tempat untuk mengenalkan produk-produknya melalui pembukaan stand atau booth yang ada di luar ruangan rapat tersebut.', '093858-img1.jpg'),
(3, '2019-02-07', 'KH Beton Gelar Pengenalan Produk-Produk Inovatif di Aula DPUPR Kabupaten Kendal', 'kh-beton-gelar-pengenalan-produkproduk-inovatif-di-aula-dpupr-kabupaten-kendal', 'Selasa, tanggal 5 Februari 2019 Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Kendal sedang mengadakan kegiatan Rapat yang bertempat di Aula. Di sela -sela kegiatan Rapat, tim KH Beton di berikan kesempatan untuk memaparkan atau memperkenalkan salah satu jenis produk-produknya yaitu Paving .\r\n<br>\r\n<br>\r\nPaving yang diperkenalkan adalah jenis paving \"Wetcast\" atau cetak basah, dimana paving yang diperkenalkan berbeda dari jenis paving pada umumnya. Paving yang dihasilkan dari metode \"Wetcast\" ini sangatlah inovatif, karena paving ini memiliki permukaan yang halus dengan kualitas mutu yang jauh lebih tinggi  serta tahan terhadap lumut. Memang untuk dari segi harga paving ini mempunyai harga yang agak tinggi dari pada paving pada umumnya, akan tetapi dari segi ketahanan dan jangka panjang, paving ini dapat bertahan sampai 5 tahun kedepan. Paving tersebut juga merupakan produk Paving pertama kali yang ada di Indonesia.\r\n\r\n   ', '112016-img4.jpg'),
(4, '2019-06-20', 'KH Beton Mendapat Kunjungan Kerja Langsung dari Dinas Pendidikan Kota Surakarta', 'kh-beton-mendapat-kunjungan-kerja-langsung-dari-dinas-pendidikan-kota-surakarta', 'Sehubungan dengan dimulainya pembangunan atau revitalisasi di salah satu bangunan sekolahan yang ada di Kota Surakarta, Dinas Pendidikan Kota Surakarta melakukan kunjungan kerja di KH Beton Boyolali pada Kamis, 20 Juni 2019. Dalam kunjunagannya terebut, Kepala Dinas Pendidikan Kota Surakarta, beserta beberapa para staffnya, tiba di lokasi KH Beton Boyolali Pukul 14.00 WIB.\r\n<br>\r\n<br>\r\nKunjungan kerja tersebut langsung diterima oleh pimpianan KH Beton dan dilanjutkan dengan memaparkan mengenai produk paving unggulan KH Beton, dimana paving merupakan salah satu produk utama yang akan digunakan untuk pembangunan dan revitalisasi salah satu bangunan sekolahan yang ada di Kota Surakarta.\r\n<br>\r\n<br>\r\nDiharapkan, dalam kunjungan kerja ini dapat menjalin kerjasama antara KH Beton dan Dinas Pendidikan Kota Surakarta, dalam melakukan pembangunan yang ada di Kota Surakarta, terutama di salah satu pembangunan Sekolahan.\r\n\r\n    ', '100612-img3.jpg '),
(5, '2019-08-14', 'Bersama BP2 Prov Jateng KH Beton Melakukan Uji Test Proyek Irigasi Panel di Wilayah Klaten', 'bersama-bp2-prov-jateng-kh-beton-melakukan-uji-test-proyek-irigasi-panel-di-wilayah-klaten', 'Rabu, 14 Agustus 2019, KH Beton mengundang Balai Pengujian dan Peralatan (BP2) yang merupakan unit pelayanan teknis DPU Bina Marga Dan Cipta Karya  Prov Jawa Tengah untuk melakukan uji kekuatan dengan Hammer Test pada beberapa pengerjaan proyek saluran irigasi yang menggunakan pagar panel di beberapa titik lokasi di Wilayah Kabupaten Klaten.\r\n<br>\r\n<br>\r\nPada pekerjaan proyek irigasi dengan menggunakan pagar pane ini, merupakan sebuah inovasi dari KH Beton, dimana yang mulanya Pagar Panel Beton di ginakan untuk Pagar pada jalan tol, area industri, dan lain-lain, maka dalam pengerjaan proyek ini, pagar panel digunakan untuk  saluran irigasi, dan pengganti dari pasang batu atau talud.\r\n<br>\r\n<br>\r\nDisamping  mengunakan pagar panel sebagai saluran irigasi juga mempunyai banyak kelebihan salah satunya adalah mutu dan kualitas yang terjamin. Selain itu juga anti terhadap lumut, dan lebih kuat.\r\n\r\n\r\n\r\n\r\n   ', '190037-img7.jpg'),
(6, '2019-04-27', 'Pengenalan Paving Block dengan Metode Wet Cast pada RSUD Kab Sukoharjo', 'pengenalan-paving-block-dengan-metode-wet-cast-pada-rsud-kab-sukoharjo', 'Sukoharjo, Sabtu (27/04), KH Beton diberikan kesempatan untuk mengenalkan tentang produk unggulannya, yaitu Paving Wet Cast di RSUD Kab. Sukoharjo yang dimana nantinya akan dilakukan pemasangan Paving pada halaman di RSUD Kab. Sukoharjo. \r\n<br>\r\n<br>\r\nSebelumnya, pada halaman RSUD Kab. Sukoharjo tersebut sudah menggunakan paving, hanya saja paving yang digunakan adalah jenis Paving Dry Cast atau cetak kering, dimana  permukaannya kasar, serta mempunyai mutu yang rendah, hanya mencapai K200 saja. \r\n<br>\r\n<br>\r\nBerbeda dengan jenis Paving  dengan metode Wet Cast, yang menghasilkan mutu yang jauh lebih tinggi, yaitu K350 sampai K700, dan mempunyai permukaan yang halus. Selain itu Paving jenis Wet Cast ini juga mempunyai sisi kelebihan, diantaranya adalah tahan terhadap lumut, jadi untuk penggunaan dalam jangka panjang,  Paving jenis Wet Cast ini sangat di rekomendasikan.\r\n  ', '214022-img8.jpg'),
(7, '2019-04-05', 'KH Beton Berpartisipasi Menjadi Supporting Organization di Acara RAKERNAS INKINDO Yogyakarta', 'kh-beton-berpartisipasi-menjadi-supporting-organization-di-acara-rakernas-inkindo-yogyakarta', 'INKINDO menyelenggarakan  Rapat Kerja Nasional (Rakernas) pada Jumat 5 April 2019, yang bertempat di Hotel Eastparc, Yogyakarta, dengan tema : â€BERSAMA MEMBANGUN INKINDO YANG MODERN DAN PROFESIONAL\".\r\n<br>\r\n<br>\r\nDalam acara Rakernas yang di adakan di Yogyakarta ini, banyak sekali Konsultan Indonesia yang datang dari berbagai daerah untuk  hadir dalam acara tersebut, mulai dari perusahaan konsultan skala besar sampai dengan perusahaan konsultan skala menengah-kecil.\r\n<br>\r\n<br>\r\nTidak hanya perusahaan konsultan, sejumlah vendor  pun juga ikut dan hadir dalam acara Rakernas tersebut. Ada sekitar 40 vendor yang datang dan hadir untuk supporting  dalam acara Rakernas INKINDO yang di adakan di Yogyakarta tersebut. KH Beton merupakan salah sataunya perushaan  pertama  yang bergerak dalam bidang industri beton bangunan yang ikut dalam supporting acara Rakernas tersebut.\r\n   ', '220728-img9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `kd_galeri` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`kd_galeri`, `judul`, `foto`) VALUES
(1, 'KH Beton Menghadiri Pertemuan dan Rapat Kerja pada Instansi INKINDO Yogyakarta', '095514-1_KH Beton Menghadiri Pertemuan dan Rapat pada Instansi INKINDO Yogyakarta.jpg'),
(2, 'Armada truck besar siap mengangkut Cover U-Ditch', '095609-2_Armada truck besar siap mengangkut Cover U-Ditch.jpg'),
(3, 'Survey Lokasi untuk Pembangunan Pagar Panel Beton di Pekalongan', '095628-3_Survey Lokasi untuk Pembangunan Pagar Panel Beton di Pekalongan.jpg'),
(4, 'Menghadiri Rapat Kerja Provinsi INKINDO DKI Jakarta', '095947-4_Menghadiri Rapat Kerja Provinsi INKINDO DKI Jakarta.jpg'),
(5, 'Proses Pengangkutan U-Ditch menggunakan Alat Crane', '100030-5_Proses Pengangkutan U-Ditch menggunakan Alat Crane.jpg'),
(6, 'Kunjungan Dari Dinas Pembangunan Umum Kendal', '100049-6_Kunjungan Dari Dinas Pembangunan Umum Kendal.jpg'),
(7, 'Test Silinder di Lab. Fakultas Teknik Sipil Universitas Sebelas Maret (UNS).', '100109-7_Test Silinder di Lab. Fakultas Teknik Sipil Universitas Sebelas Maret (UNS).jpg'),
(8, 'Doa Bersama dalam Rangka Mengawali Pembangunan Pabrik KH Beton yang Baru', '100605-8_Doa Bersama dalam Rangka Mengawali Pembangunan Pabrik KH Beton yang Baru.jpg'),
(9, 'Uji Hammer Test pada Produk Saluran U-Ditch oleh BP2 Semarang', '100620-9_Uji Hammer Test pada Produk Saluran U-Ditch oleh BP2 Semarang.jpg'),
(10, 'Kunjungan dan Survey dari salah satu Rekanan dari Semarang', '100635-10_Kunjungan dan Survey dari salah satu Rekanan dari Semarang.jpg'),
(11, 'Pengenalan Salah Satu Produk Baru KH Beton di Dinas Pekerjaan Umum Kab.Magelang', '100652-11_Pengenalan Salah Satu Produk Baru KH Beton di Dinas Pekerjaan Umum Kab.Magelang.jpg'),
(12, 'Acara Syukuran dan Doa Bersama semua Karyawan/ Staff pada Acara Soft Opening KH Beton', '100706-12_Acara Syukuran dan Doa Bersama semua Karyawan Staff pada Acara Soft Opening KH Beton.jpg'),
(13, 'Acara Meeting Bersama Akhir Tahun 2018 KH Beton ', '100737-13_Acara Meeeting Bersama akhir Tahun 2018 KH Beton.jpg'),
(14, 'Wujud Kantor Baru KH Beton ', '100753-14_Wujud Kantor Baru KH Beton.jpg'),
(15, 'Pengenalan Produk di Dinas Pekerjaan Umum Dan Penataan Ruang Kab.Kendal', '101402-15_Pengenalan Produk di Dinas Pekerjaan Umum Dan Penataan Ruang Kab.Kendal.jpg'),
(16, 'Kedatangan Tamu dari Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas', '101413-16_Kedatangan Tamu dari Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas.jpg'),
(17, 'Pengenalan Inovasi Produk pada Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo', '100009-17_Pengenalan Inovasi Produk pada Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo.jpg'),
(18, 'Uji Hammer Test Bersama Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas', '101838-18_Uji Hammer Test Bersama Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas.jpg'),
(19, 'Kedatangan Konsultan dari Pekalongan Untuk Survey Produk INOVASI Saluran Beton Pracetak', '141132-19_Kedatangan Konsultan dari Pekalongan untuk Survey salah satu Produk Baru KH Beton.jpg'),
(20, 'Uji Hammer Test Terhadap Produk Saluran Beton oleh BP2 Semarang', '151540-20_Uji Hammer Test Terhadap Produk Saluran Beton yang Dilakukan BP2 Semarang .jpg'),
(21, 'Ikut Berkontribusi Pada Acara RAKERNAS INKINDO 2019 Yogyakarta ', '095048-21_Ikut_Berkontribusi Pada Acara_Rakernas_INKINDO 2019 Yogyakarta.jpg'),
(22, 'Proses Instalasi /Pemasangan & Uji Coba Batching Plant ', '101610-22_Proses Instalasi Pemasangan & Uji Coba Batching Plant .jpg'),
(23, 'Kunjungan Kepala Dinas Pekerjaan Umum Kab.Grobogan di Kantor KH Beton', '110256-23_Kunjungan Kepala Dinas Pekerjaan Umum Kab.Grobogan di Kantor KH Beton.jpg'),
(24, 'Kunjungan Kepala Dinas Pendidikan Kota Surakarta', '143455-24_Kunjungan Kepala Dinas Pendidikan Kota Surakarta.jpg'),
(25, 'Kunjungan Semen Indonesia Group', '163442-25_Kunjungan Semen Indonesia Group.jpg'),
(29, 'Pengujian \"Hammer Test\" Proyek Saluran Irigasi Pagar Panel Klaten', '093048-26_Uji_Hammer_Test_BP2_DPU Klaten_KHBeton .jpg'),
(30, 'Kunjunga Kerja DPU Kab.Sleman', '094006-27_Kunjungan_Kerja_DPU_Kab.Sleman.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `general_information`
--

CREATE TABLE `general_information` (
  `no` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_information`
--

INSERT INTO `general_information` (`no`, `judul`, `isi`) VALUES
(1, 'Informasi Umum Mengenai KH BETON', '<p>KH Beton adalah perusahaan manufaktur yang bergerak di bidang Industri Beton Mutu Tinggi (High Performance Concrete). Sebagai badan usaha swasta, KH Beton lahir dan memulai usaha industri beton practak pada tahun 2014 dengan mengembangkan produk-produknya yang di dasari oleh semangat \"Innovative Concrete Industry\".</p><p>Pengembangan produk - produk tersebut telah berhasil&nbsp; menghasilkan beberapa produk yang inovatif. Dalam perkembangan produk-produknya, KH Beton selalu mengedepankan mutu dan kualitas beton, dengan cara memilih bahan baku material yang berkualitas, menggunakan peralatan yang mendukung, serta memiliki sumber daya manusia yang berpengalaman dan profesional<br></p> ');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `no` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`no`, `judul`, `isi`) VALUES
(1, 'Sejarah Berdirinya KH. BETON', '<p>Berawal dari usaha industri beton sederhana yang didirikan pada tahun 1990 yang terletak di provinsi Sumatera Selatan dengan nama \"BUMI MAS\". </p><p>Kemudian pada tahun 2010 perushaan industri Beton yang berlokasi di Sumatera Selatan, berpindah lokasi di Jawa Tengah, tepatnya di Boyolali dan berganti nama menjadi \"MASTER BETON\".</p><p> Untuk melerbarkan sayap dan mengembangkan produk - produk beton, pada Tahun 2014 berdirilah divisi baru yang diberi nama KH Beton - High Performance Concrete, sebagai industri pra-cetak Beton Bermutu Tinggi dengan didasari semangat \"Innovative Concrete Industry\" <br></p>       ');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kd_kategori` char(5) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kd_kategori`, `nm_kategori`) VALUES
('K0001', 'Decorative PAVING Block'),
('K0002', 'Panel Beton Precast'),
('K0003', 'U-Ditch & Box Culvert'),
('K0004', 'Kansteen Kerb All Type'),
('K0005', 'Concrete Barrier'),
('K0006', 'Precast Concrete Pile'),
('K0007', 'Special READY MIX');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `kd_komentar` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `kd_berita` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` int(50) NOT NULL,
  `komentar` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`kd_komentar`, `tgl`, `kd_berita`, `nama`, `email`, `telp`, `komentar`, `status`) VALUES
(4, '2019/10/07', 5, 'a', 'a', 0, ' a', 1),
(5, '2019/10/28', 4, 'q', 'q', 0, 'q ', 1),
(6, '2020/09/21', 4, 'dscgbBahThydayWeds@gmail.com', 'pfafrBahThydayWeds@gmail.com', 2147483647, 'casino blackjack  free casino games  &lt;a href=&quot;http://onlinecasinouse.com/# &quot;&gt;casino games &lt;/a&gt; online slot games  http://onlinecasinouse.com/#  ', 0),
(7, '2020/09/21', 0, 'sdsktBahThydayWeds@gmail.com', 'bgcvgBahThydayWeds@gmail.com', 2147483647, 'slot games  http://onlinecasinouse.com/#  - online casino real money  online casinos  &lt;a href=&quot;http://onlinecasinouse.com/# &quot;&gt;casino bonus codes &lt;/a&gt; play slots online  ', 0),
(8, '2020/09/21', 0, 'qgozhBahThydayWeds@gmail.com', 'nptbkBahThydayWeds@gmail.com', 2147483647, 'casino play  slots for real money  &lt;a href=&quot;http://onlinecasinouse.com/# &quot;&gt;no deposit casino &lt;/a&gt; real money casino  http://onlinecasinouse.com/#  ', 0),
(9, '2020/09/28', 7, 'lrtzaBahThydayWeds@gmail.com', 'ikmfjBahThydayWeds@gmail.com', 2147483647, 'http://onlinecasinouse.com/#  play slots online  http://onlinecasinouse.com/#  - casino play  &lt;a href=&quot;http://onlinecasinouse.com/# &quot;&gt;vegas slots online &lt;/a&gt; ', 0),
(10, '2021/12/15', 0, 'mooregracehgvl36530@gmail.com', 'mooregracehgvl36530@gmail.com', 2147483647, 'Hello. And Bye. \r\nhttps://zootovaryvsem.org/ \r\nhttp://mayandigitalmedia.com/for/\r\n \r\nhttps://sites.google.com/view/dsj1alsy7d', 0),
(11, '2022/01/29', 5, 'ZAP', 'ZAP', 0, ' ', 0),
(12, '2022/01/29', 6, 'ZAP', 'ZAP', 0, ' ', 0),
(13, '2022/01/29', 3, 'ZAP', 'ZAP', 0, ' ', 0),
(14, '2022/03/29', 4, 'Roassycop@maill1.xyz', 'Roassycop@maill1.xyz', 2147483647, 'Cuujrn https://oscialipop.com - Cialis Hpocui Mgbdwr Canada Prescription Drugs &lt;a href=https://oscialipop.com&gt;Cialis&lt;/a&gt; Primary Care Propecia Myhflx https://oscialipop.com - cialis viagra combo pack Ivxrlb', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `no` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `telp1` varchar(20) NOT NULL,
  `telp2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`no`, `alamat`, `email`, `telp`, `telp1`, `telp2`) VALUES
(1, 'Jl. Raya Boyolali - Magelang KM 5 Peleman,\r\nJelok, Cepogo, Kab.Boyolali, Jawa Tengah', 'khbetonhpc@gmail.com', '0276-320015', '0812 86 777 333', '0857 86 777 333');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `no` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`no`, `judul`, `isi`) VALUES
(1, 'Pelayanan KH.Beton', '<p>Kepuasan pelanggan merupakan salah satu bagian komitmen utama kami, demi memberikan pengalaman terbaik KH. Beton hadir&nbsp; dengan memberikan pelayanan terbaiknya :<br><br></p><ol><li>Kualitas : Dari Segi Kualitas, Perushaan Kami Mempunyai Kualitas&nbsp; Standard Mutu Beton Yaitu K350 Sampai Dengan K700.<br><br></li><li>&nbsp;Pengiriman : Dari Segi Pegiriman, Perusahaan Kami Mampu Memastikan Setiap Produk Yang DiKirim Akan Terjamin, Karena diLakukan Secara Cepat dan <br><br></li><li>Harga : Harga Yang Kompetitif, Dimana Harga Yang Kami Berikan Berbanding Lurus Dengan Kualitas Produk Yang Kami <br><br></li><li>Innoative : Perusahaan Kami Mampu Memproduksi Dan Mengembangkan Beberapa Produk Yang Inovatif, Dan Telah Berhasil Menjadi Produk Terkemuka Di Pasar. <br></li></ol><p><br></p>          ');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `kd_portofolio` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`kd_portofolio`, `judul`, `keterangan`, `kategori`, `foto`) VALUES
(1, 'Pemasangan Paving Holland Warna', 'Loc : Proyek Taman Alun Alun,Pekalongan', 'Swasta', '030800-Paving Holland_Alun_Alun_Pekalongan.jpg'),
(2, 'Pemasangan Paving Holland Motif', 'Loc :  Proyek Revitalisasi Pasar Prambanan, Yogyakarta', 'BUMN', '024320-Paving Holland_Proyek_Revitalisasi_Pasar-Prambanan.jpg'),
(3, 'Pemasangan Paving Difabel', 'Loc : Proyek Alun Alun Pekalongan', 'Swasta', '023150-Paving Difabel_Alun-Alun_Pekalongan.jpg'),
(4, 'Pemasangan Kansteen 50 Profil', 'Loc : Proyek Sepanjang Jl.Kolonel Sutarto, Solo', 'Swasta', '032930-Kansteen 50 Profil_Jalan_Kolonel_Sutarto-Solo.jpg'),
(5, 'Pembangunan Saluran Pada Embung Melikan', 'Loc :  Proyek Embung Melikan, Boyolali', 'Swasta', '033000-Saluran Drainase U-Ditch-Proyek_Embung_Melikan_Boyolali.jpg'),
(6, 'Pemasangan Saluran U-Ditch', 'Loc : Proyek Peningkatan Jalan Pasar Mlonggo, Lanjutan, Jepara', 'Swasta', '033553-Saluran Drainase U-Ditch_Pasar Mlonggo_Jepara.jpg'),
(7, 'Pemasangan Saluran U-Ditch oleh KSPN Boronudur', 'Loc : Proyek Sepanjang Kawasan Wisata Borobudur', 'BUMN', '023104-Saluran U Ditch_Proyek_Kawasan_Wisata_Borobudur.jpg'),
(8, 'Pekerjaan Pemasangan Saluran U-Ditch ', 'Loc : Proyek Pembangunan Saluran Drainas Jl Ndoyo, Boyolali', 'Swasta', '030617-Saluran U-Ditch_Proyek_Jalan_Ndoyo-Boyolali.jpg'),
(9, 'Pemasangan Paving Decorative', 'Loc : Proyek Pembangunan Jalan Tol Pemalang - Batang', 'BUMN', '024240-Paving Decorative_Proyek_Tol_Pemalang-Batang.jpg'),
(10, 'Box Culvert Ukuran Custom (2 Meter) Untuk Crossing Jalan', 'Loc : Proyek Ruas Jalan Babadan, Ungaran Timur', 'Swasta', '023011-Box Culvert Ukuran Custom_Proyek_Jalan_Ruas_Jalan_Babadan_Ungaran_Timur.jpg'),
(11, 'Pemasangan Saluran Box Culvert ', 'Loc : Proyek Saluran Irigasi Dusun Tirto, Tegaldowo, Pekalongan', 'Swasta', '121339-Box Culvert_Proyek_Saluran-Drainase_Tegaldowo_Pekalongan.jpg'),
(12, 'Pemasangan Kansteen Type S Besar', 'Loc : Proyek Revitalisasi Danau UNS (Universitas Sebelas Maret)', 'BUMN', '121324-Kansteen S Besar_ Revitalisasi Danau UNS.jpg'),
(13, 'Pemasangan Paving Grass Block Motif', 'Loc : Proyek Revitalisasi Pasar Prambanan, Yogyakarta', 'BUMN', '022621-Paving Grass Block_Revitalisasi_Pasar_Prambanan.jpg'),
(14, 'Pemasangan Paving Difabel', 'Loc : Proyek Jalan MT Haryono, Semarang', 'Swasta', '025904-Paving Difabel_Proyek_MT Haryono-Semarang.jpg'),
(15, 'Pemasangan Pagar Panel Beton', 'Loc : Proyek Jalan Tol Solo - Kertosono', 'BUMN', '022606-Pagar Panel_Proyek_Tol_Solo-Kertosono.jpg'),
(16, 'Pemasangan Paving Around Of Trees', 'Loc : Pasar Prambanan, Yogyakarta', 'Swasta', '121232-Paving Around Of Trees_ Revitalisasi Pasar Prambanan.jpg'),
(17, 'Pembangunan Gedung Bela Negara', 'Loc : Proyek Gedung Bela Negara Kab. Boyolali', 'Swasta', '141506-Ready_Mix_Proyek_Gedung_Bela_Negara_Boyolali.jpg'),
(18, 'Pemasangan Paving Holland Motif', 'Loc : Proyek Ruko Babadan, Semarang', 'Swasta', '142854-Paving-Holand_Motif_Ruko Babadan Semarang.jpg'),
(19, 'Pemasangan Saluran U-Ditch Jalan Tol Boyolali', 'Loc : Jalan Tol Ngasem, Exit Boyolali', 'BUMN', '144802-Proyek_Saluran_U-ditch_Jalan Tol Boyolali.jpg'),
(20, 'Pembangunan Saluran Drainase Penumping Solo', 'Loc : Penumping, Laweyan, Solo', 'Swasta', '145828-Proyek_Pembangunan_Saluran_Drainase_Penumping_Solo.jpg'),
(21, 'Peningkatan Jalan Papringan - Simo', 'Loc : Jalan Papringan Simo - Boyolali', 'Swasta', '151140-Ready_Mix_Proyek_Jalan_Papringan-Simo_Boyolali.jpg'),
(22, 'Pemeliharaan Jalan Tompak - Cepogo Boyolali', 'Loc : Jalan Tompak -Cepogo', 'Swasta', '151434-Ready_Mix_Proyek_Peningkatan_Jalan_Tompak-Cepgo.jpg'),
(27, 'Pembangunan Saluran Drainase di Sirkuit Gokart Boyolali', 'Loc : Sirkuit Gokart Boyolali', 'Swasta', '144753-Proyek_Saluran_U-Ditch_Sirkuit_Boyolali.jpg'),
(28, 'Pembangunan Saluran Drainase, Jayengan Surakarta', 'Loc : Kelurahan Jayengan, Surakarta', 'Swasta', '150212-Proyek_Saluran_U-Ditch_Kel.Jayengan_Surakarta.jpg'),
(29, 'Proyek Perbaikan Jalan Profesor Soeharso, Boyolali', 'Loc : Jalan Profesor Soeharso, Kragilan, Boyolali', 'Swasta', '150632-Perbaikan_Jalan_Profesor_Soeharso_Boyolali.jpg'),
(30, 'Pekerjaan Saluran Cor Di Tampat (Cast in Situ)', 'Loc : Jalan Susilo Harjodoyo, Boyolali', 'Swasta', '152515-Pekerjaan_Saluran_Cor_DiTempat.jpg'),
(31, 'Pemsangan Paving Holand Motif di Halaman RSUD Sukoharjo', 'Loc : RSUD Sukoharjo', 'Swasta', '145353-Pemasangan_Paving_Holand_RSUD_Sukoharjo.jpg'),
(32, 'Pekerjaan Irigasi Box Culvert di Jalur Pedestrian RSUD Moewardi Solo', 'Loc : Rumah Sakit RSUD Moewardi Surakarta', 'Swasta', '160802-Pemasangan_Box-Culvert_RSUD Moewardi Solo.jpg'),
(33, 'Pembangunan Pasar Hewan Boyolali', 'Loc : Pasar Hewan Boyolali', 'Swasta', '161109-Ready_Mix_Proyek_Pembangunan_Pasar_Hewan-Boyolali.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kd_produk` char(7) NOT NULL,
  `nm_produk` varchar(100) NOT NULL,
  `judul_seo` varchar(200) NOT NULL,
  `kd_kategori` char(5) NOT NULL,
  `ukuran_dimensi` varchar(100) NOT NULL,
  `penggunaan` varchar(100) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `spek1` varchar(225) NOT NULL,
  `spek2` varchar(225) NOT NULL,
  `spek3` varchar(225) NOT NULL,
  `spek4` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `nm_produk`, `judul_seo`, `kd_kategori`, `ukuran_dimensi`, `penggunaan`, `kualitas`, `deskripsi`, `gambar`, `spek1`, `spek2`, `spek3`, `spek4`) VALUES
('PRD0001', 'Paving Holland', 'paving-holland', 'K0001', '20 x 10 x 6', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', 'Paving Block yang dibuat dengan menggunakan metode \"WetCast\" atau cetak basah, sehingga menghasilkan jenis paving block yang innovative, dengan permukaan yang lebih halus dari pada paving pada umumnya. Paving ini juga mempunyai ukuran yang ideal, karena mudah diaplikasikan dan memiliki pola yang beraneka ragam serta berbagai pilihan warna.  ', '094248-paving_holand.png', 'holand_spesifikasi.jpg', 'holand_teknik.jpg', 'holand_pemasangan.jpg', ''),
('PRD0002', 'Paving Difabel', 'paving-difabel', 'K0001', '30 x 30 x 5', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', 'Paving block dengan ukuran dan bentuk standard internasional bermotif garis garis yang di produksi untuk menunjang aksesibilitas bagi penyandang disabilitas, yakni penyandang tuna netra. Dengan motif  bergaris - garis yang berfungsi untuk menandakan jalan lurus  ', '162739-paving_difabel.png', 'difabel_spesifikasi.jpg', 'difabel_teknik.jpg', 'difabel_pemasangan.jpg', ''),
('PRD0003', 'Paving Blind Hold', 'paving-blind-hold', 'K0001', '30 x 30 x 5', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', 'Paving block dengan ukuran dan bentuk standard internasional yang mempunyai motif bulat - bulat di permukaanya ,yang di produksi untuk menunjang aksesibilitas bagi penyandang disabilitas, yakni penyandang tuna netra. Dengan motif  bulat-bulat yang berfungsi untuk menandakan berhenti atau belok.  ', '162756-paving_blind_hold.png', 'blindhold_spesifikasi.jpg', 'blindhold_teknik.jpg', 'blindhold_pemasangan.jpg', ''),
('PRD0004', 'Paving Decorative', 'paving-decorative', 'K0001', '50 x 25 x 6 ', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', 'Paving Block yang dibuat dengan menggunakan metode \"WetCast\" atau cetak basah, dan menghasilkan produk inovasi yaitu Paving Decorative, dengan motif yang berupa garis - garis diatas permukaanya, yang berfungsi untuk mengurangi licin pada saat musim hujan, karena air akan mengalir melalui garis - garis dan meresap dicelah - celah antara paving yang satu dengan yang lainya  ', '055858-paving_decorative.png', 'decorative_spesifikasi.jpg', 'decorative_teknik.jpg', 'decorative_pemasangan.jpg', ''),
('PRD0005', 'Paving Grass Block Motif', 'paving-grass-block-motif', 'K0001', '25 x 25 x 6', 'Konstruksi, Taman', 'K350 s/d K700', 'Paving Grass Block adalah produk inovasi dari paving block, yang dikhususkan untuk perkerasan area taman, dan sebagainya. Hampir sama fungsinya dengan Paving Block, hanya bedanya Paving tersebut memiliki rongga khusus yang dapat ditanami rumput, dan pada saat hujan air mudah dapat terserap kedalam tanah. ', '055526-paving_grass_block_motif.png', 'grassblock_spesifikasi.jpg', 'grassblock_teknik.jpg', 'grassblock_pemasangan.jpg', ''),
('PRD0006', 'Paving Around Of Trees', 'paving-around-of-trees', 'K0001', '50 x 50 x 6', 'Konstruksi, Taman', 'K350 s/d K700', 'Paving Around Of Trees meruakan produk inovasi dari paving block yang difungsikan untuk pengganti buis beton yang biasanya untuk ditanami pohon. Dengan lubang besar yang terdapat di  ditengah, digunakan untuk ditanami pohon, dan lubang kecil yang digunakan pada saat hujan, air dengan mudah dapat masuk kedalam tanah. Sehingga kesuburan pohon masih terjaga.  ', '162814-paving_around_of_trees.png', 'around_spesifikasi.jpg', 'around_teknik.jpg', 'around_pemasangan.jpg', ''),
('PRD0007', 'Saluran U-Ditch Precast', 'saluran-uditch-precast', 'K0003', 'Custom', 'Drainase, Saluran Irigasi', 'K350 s/d K700', 'Saluran dari beton bertulang dengan  bentuk penampang huruf U dan juga  bisa diberi tutup. Umum nya digunakan  untuk saluran drainase atau irigasi.  Ketinggian saluran terbuka ini dapat  bervariasi mengikuti kebutuhan  dilapangan atau elevasi saluran yang  di inginkan.    \r\nProduk saluran U-DItch juga terbagi menjadi dua tipe yaitu Heavy Duty (HD) dan Light Duty (LD).  ', '095248-uditch.png', 'u-ditch_spesifikasi.jpg', 'u-ditch_teknik.jpg', 'u-ditch_ukuran.jpg', 'u-ditch_pemasangan.jpg'),
('PRD0008', 'Cover U-Ditch Precast', 'cover-uditch-precast', 'K0003', 'Custom', 'Tutup U-Ditch', 'K350 s/d K700', 'Cover U-Ditch merupakan tutup saluran air drainase beton pracetak yang berbentuk huruf U atau U Ditch, yang berbahan semen, kerikil, abubatu dan pasir besi tulangan yang juga disertai air. Cover U Ditch tersebut juga memiliki dua macam tipe , yaitu Heavy Duty (HD) dan Light Duty (LD). ', '101702-cover_uditch.png', 'cover_spesifikasi.jpg', 'cover_teknik.jpg', 'cover_ukuran.jpg', 'cover_pemasangan.jpg'),
('PRD0009', 'Box Culvert Precast', 'box-culvert-precast', 'K0003', 'Custom', 'Saluran Drainase, Crossing', 'K350 s/d K700', 'Box culvert adalah salah satu jenis beton precast yang sering digunakan pada konstruksi saluran air, sehingga kerap disebut juga dengan gorong-gorong.\r\nSesuai dengan namanya, Box Culvert adalah beton precast yang berbentuk persegi atau kotak dengan ukuran yang sudah ditentukan. Box Culvert juga memiliki spigot dan socketnya. Kegunaan spigot dan socketnya adalah untuk menjadikan box culvert ini kedap terhadap masuknya air tanah (eksfiltrasi) dan tetap menyatu saat terjadi pergeseran tanah.\r\nKami juga memiliki dua macam tipe Box Culvert, yaitu Heavy Duty (HD) dan Light Duty (LD).\r\n    ', '095722-box_culvert.png', 'box-culvert_spesifikasi.jpg', 'box-culvert_teknik.jpg', 'box-culvert_ukuran.jpg', 'box-culvert_pemasangan.jpg'),
('PRD0010', 'Kansteen Type L', 'kansteen-type-l', 'K0004', '60 x 38 x (27 x 12)', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', 'Kansteen type L  dengan metode \"Wet Cast\" atau cetak basah yang merupakan produk beton yang berfungsi sebagai penguat tepi jalan. Kansteen beton juga digunakan pada trotoar, separator, tepi badan jalan, jalan taman, boulevard, pembatas taman dan sebagainya. Dinamakan Kansteen L karena bentuk dan desain menyerupai huruf L.    ', '161722-kansteen_L.png', 'kansteen-l_spesifikasi.jpg', 'kansteen-l_teknik.jpg', 'kansteen-l_pemasangan.jpg', ''),
('PRD0011', 'Kansteen Type L Profil', 'kansteen-type-l-profil', 'K0004', '60 x 40 x (12 x 20)', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', 'Kansteen type L Profil, merupakan produk beton yang dicetak dengan menggunakan metode \"Wet Cast\" cetak basah, yang berfungsi sebagai penguat tepi jalan yang dipasang  pada trotoar, separator, tepi badan jalan, jalan taman, boulevard, pembatas taman dan sebagainya. Berbeda dari Kansteen L biasa, Kansteen L Profil ini mempunyai tinggi dan ketebalan yang khusus.            ', '161243-kansteen_L_profil.png', 'kansteen-l-profil_spesifikasi.jpg', 'kansteen-l-profil_teknik.jpg', '', ''),
('PRD0012', 'Kansteen Type S Kecil', 'kansteen-type-s-kecil', 'K0004', '50 x 35 x ( 7 x 14 )', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', 'Kansteen type S Kecil, merupakan kansteen yang berbentuk seperti huruf S dengan memiliki ketebalan dan tinggi yang khusus, serta mempunyai fungsi yang sama dari model Kansteen sebelumnya. Kansteen type S Kecil ini sudah menggunakan metode Cetak Basah \r\n(Wet Cast) dimana permukaan dan teksturnya sudah halus sehingga saat pemasangan tidak diwajibkan untuk di finishing / di cat.     ', '094942-kansteen_s_kecil.png', 'kansteen-s-kecil_spesifikasi.jpg', 'kansteen-s-kecil_teknik.jpg', '', ''),
('PRD0013', 'Kansteen Type S Besar', 'kansteen-type-s-besar', 'K0004', '60 x 30 x (11 x 17)', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', 'Kansteen type S Besar, merupakan kansteen yang berbentuk seperti huruf S dengan memiliki ketebalan dan tinggi yang khusus, serta mempunyai fungsi yang sama dari model Kansteen sebelumnya. Kansteen type S Besar ini sudah menggunakan metode Cetak Basah (Wet Cast) dimana permukaan dan teksturnya sudah halus sehingga saat pemasangan tidak diwajibkan untuk di finishing / di cat.     ', '092650-kansteen_s_besar.png', 'kansteen-s-besar_spesifikasi.jpg', 'kansteen-s-besar_teknik.jpg', '', ''),
('PRD0014', 'Kansteen Type 50 Profil', 'kansteen-type-50-profil', 'K0004', '50 x 50 x 15', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', 'Kansteen 50 Profil merupakan produk beton yang mempunyai fungsi sama dengan Kansteen jenis lainnya, hanya saja Kansteen 50 Profil ini mempunyai bentuk dan ukuran yang berbeda dari Kansteen lainnya.     ', '104340-kansteen_50_profil.png', 'kansteen-50-profil_spesifikasi.jpg', 'kansteen-50-profil_teknik.jpg', 'kansteen-50-profil_pemasangan.jpg', ''),
('PRD0016', 'Kansteen Precast Persegi', 'kansteen-precast-persegi', 'K0004', '(50/40) x 20 x 10', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', 'Kansteen Persegi merupakan produk beton yang berfungsi sebagai penguat tepi jalan yang dipasang paving block. Kanstein beton juga digunakan pada trotoar, separator, tepi badan jalan, jalan taman, boulevard, pembatas taman dan sebagainya.  Dinamakan kansteen persegi karena mempunyai bentuk yang sama dengan bidang persegi  . ', '104104-kansteen_persegi.png', 'kansteen-persegi_spesifikasi.jpg', 'kansteen-persegi_teknik.jpg', '', ''),
('PRD0017', 'Pagar Panel Beton Standard', 'pagar-panel-beton-standard', 'K0002', 'Custom', 'Pagar, Konstruksi Pengairan atau Irigasi.', 'K350 s/d K700', 'Pagar Panel Beton Standard merupakan salah satu produk beton precast atau precast concrete, yang disusun pada kolom penjepit untuk kebutuhan pagar tembok karena pengerjaannya yang lebih praktis dan cepat.     ', '091728-pagear_panel_beton.png', 'panel_spesifikasi.jpg', 'panel_teknik.jpg', 'panel_ukuran.jpg', 'panel_pemasangan.jpg'),
('PRD0018', 'Pagar Panel Beton Decorative', 'pagar-panel-beton-decorative', 'K0002', 'Custom', 'Pagar, Konstruksi Pengairan atau Irigasi.', 'K350 s/d K700', 'Pagar Panel Decorative merupakan salah satu produk beton precast atau precast concrete, yang disusun pada kolom penjepit untuk kebutuhan pagar tembok yang memiliki textsture dan motif yang berbeda dari Panel Standard.  ', '092148-pagear_panel_beton_decorative.png', 'panel-decorative_spesifikasi.jpg', 'panel-decorative_teknik.jpg', 'panel-decorative_ukuran.jpg', ''),
('PRD0019', 'Concrete Barrier Precast', 'concrete-barrier-precast', 'K0005', 'Custom', 'Pembatas Jalan', 'K350 s/d K700', 'Barrier merupakan beton bertulang pra cetak yang digunakan sebagai dinding pemisah, pembatas jalan atau penahan di jalan raya dan di jalan tol, dengan ketinggian dan bentuk yang bervariasi. ', '092951-bariier.png', 'barrier_spesifikasi.jpg', 'barrier_teknik.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `no` int(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`no`, `judul`, `isi`) VALUES
(1, 'Visi dan Misi KH Beton', '<h4><strong><span style=\"font-family: \">VISI</span></strong><strong></strong><br><strong></strong></h4><p>Menjadi Perusahaan Industri Beton yang menghasilkan produk berkualitas, dengan mengutamakan \"research and development\" serta inovasi, sehingga menjadi perusahaan industri beton yang betaraf Internasional.<br></p><p><br></p><h4><strong>MISI</strong></h4><ol><li><strong></strong>Menghasilkan produk - produk inovatif dan berkualitas, yang dapat mengikuti perubahan dan perkembangan zaman.<br></li><li>Menjalin kerja sama dengan mengedepankan profesionalisme, integritas, kejujuran dan keadilan&nbsp; yang berfokus pada kebutuhan pelanggan.<br></li><li>Mewujudkan SDM ketenagakerjaan yang kompeten, dan membuka akses kesempatan kerja yang lebih luas.<br></li></ol><p><br></p>\r\n\r\n ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `balasan`
--
ALTER TABLE `balasan`
  ADD PRIMARY KEY (`kd_balasan`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kd_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`kd_galeri`);

--
-- Indexes for table `general_information`
--
ALTER TABLE `general_information`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`kd_komentar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`kd_portofolio`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balasan`
--
ALTER TABLE `balasan`
  MODIFY `kd_balasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `kd_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `kd_galeri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `general_information`
--
ALTER TABLE `general_information`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `kd_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `kd_portofolio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
