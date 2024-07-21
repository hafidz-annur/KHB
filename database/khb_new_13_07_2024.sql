-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2024 at 05:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `thumbnail`, `button_name`, `link`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'High Performance Concrete', '<p>Beton dengan berperforma tinggi (High Performance Concrete) adalah beton yang telah dirancang agar lebih tahan lama dan memiliki kinerja yang baik dalam penerapannya serta lebih kuat dari beton konvensional.</p>', 'banner-20240713050503.jpg', 'Lebih Detail', 'https://www.khbeton.com/#produk', 1, '2024-07-12 22:02:39', '2024-07-12 22:05:03'),
(2, 'Awesome Features and Innovation', '<p>Selalu berinovasi untuk meningkatkan daya saing produknya dengan sumber daya manusia dan tenaga yang berkualitas dengan bantuan peralatan yang handal dan canggih.</p>', 'banner-20240713050651.jpg', 'Hubungi Kami', 'https://www.khbeton.com/', 1, '2024-07-12 22:06:51', '2024-07-12 22:06:51'),
(3, 'Fully Service', '<p>Kami memberikan pelayanan penuh kepada para customer kami baik dari kualitas, harga, hingga pengiriman. Kami juga bisa menyediakan pelayanan jasa penurunan dan pemasangan untuk semua produk.</p>', 'banner-20240713050720.jpg', 'Hubungi Kami', 'https://www.khbeton.com/', 1, '2024-07-12 22:07:20', '2024-07-12 22:07:41'),
(4, 'Special For Ready Mix', '<p>Kami juga melayani pemesanan Ready Mix, dari berbagai macam mutu yaitu antara K175 sampai dengan K500, yang merupakan 100% dari material Kerikil, Semen, Pasir yang berkualitas</p>', 'banner-20240713050820.jpg', 'Hubungi Kami', 'https://www.khbeton.com/', 1, '2024-07-12 22:08:20', '2024-07-12 22:08:20'),
(5, 'The Most Durable and Beauty Pavement', '<p>Beton Pracetak dengan Mutu Tinggi (High Performance Concrete). Tahan lama 10x lebih awet dari Paving Konvensional serta 100x lebih tahan terhadap serangan lumut.</p>', 'banner-20240713050912.jpg', 'Hubungi Kami', 'https://www.khbeton.com/', 1, '2024-07-12 22:09:12', '2024-07-12 22:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `thumbnail`, `alt`, `title`, `description`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '185000-img2.jpg', 'Uji Kekuatan Beton dengan Hammer Test Oleh Balai Pengujian dan Peralatan Semarang (BP2)', 'Uji Kekuatan Beton dengan Hammer Test Oleh Balai Pengujian dan Peralatan Semarang (BP2)', 'Untuk menjaga kualitas atau mutu beton, KH Beton selalu merencanakan kegiatan Tes Pemeriksaan berkala salah satunya yaitu Uji Hammer Test pada produk Saluran Beton Pracetak, atau biasa di sebut saluran U Ditch. Pemeriksaan produk ini dilakukan oleh Balai Pengujian Dan Peralatan (BP2) , yang merupakan salah satu unit pelayanan teknis DPU Bina Marga dan Cipta Karya Provinsi Jawa Tengah.\n<br>\n<br>\nHammer test yaitu suatu alat pemeriksaan mutu beton tanpa merusak beton. Disamping itu dengan menggunakan metode ini akan diperoleh cukup banyak data dalam waktu yang relatif singkat dengan biaya murah.\n<br>\n<br>\nMetode pengujian ini dilakukan dengan menggunakan memberikan beban intact (tumbukan) pada permukaan beton dengan menggunakan suatu massa yang diaktifkan dengan menggunakan energi yang besarnya tertentu. Jarak pantulan yang timbul dari massa tersebut padaa saat terjadi tumbukan dengan permukaan beton benda uji dapat memberikan indikasi kekerasan juga setelah dikalibrasi. Alat ini sangat berguna untuk mengetahui keseragaman material beton pada struktur, karena kesederhanaanya, pengujian menggunakan alat ini sangat cepat sehingga dapat mencakup area pengujian yang luas dalam waktu yang singkat.', 'uji-kekuatan-beton-dengan-hammer-test-oleh-balai-pengujian-dan-peralatan-semarang-bp2', 1, '2019-04-17 17:00:00', '2019-04-17 17:00:00'),
(2, '093858-img1.jpg', 'KH BETON berpartisipasi Menjadi Sponsor pada Rapat Kerja INKINDO Provinsi DKI Jakarta', 'KH BETON berpartisipasi Menjadi Sponsor pada Rapat Kerja INKINDO Provinsi DKI Jakarta', 'DPP INKINDO DKI Jakarta akan menyelenggarakan Rapat Kerja Provinsi (Rakerprov) Tahun 2018 yang telah diselenggarakan pada Rabu 24 Oktober 2018 di Ruang Binakarna - Hotel Bidakara, dimana sebelum acara Rakerprov akan diadakan acara sosialisasi Perlem LPJK N No. 4 tahun 2017, No. 5 Tahun 2017 dan No. 7 Tahun 2017. IKATAN Nasional Konsultan Indonesia (Inkindo) Provinsi DKI Jakarta siap mengambil peran strategis sebagai mitra Pemerintah Provinsi DKI Jakarta dalam memajukan ibu kota Jakarta. Kesiapan Inkindo ini ditegaskan dalam Rapat Kerja Provinsi (Rakerprov) Inkindo DKI Jakarta 2018 di Hotel Bidakara, Jakarta, Rabu (24/10). Ini adalah Rakerprov pertama dalam kepengurusan DPP Inkindo DKI Jakarta Masa Bakti 2018-2022.\n<br>\n<br>\nDalam acara pertemuan rapat tersebut, KH Beton turut dalam menghadiri dan menjadi salah satu bagian sponsorship pertama perusahaan yang bergerak di dalam Industri Beton Pracetak. Tidak hanya itu, dalam acara tersebut terdapat area stand display, dimana semua sponsorship diberi kesempatan dan tempat untuk mengenalkan produk-produknya melalui pembukaan stand atau booth yang ada di luar ruangan rapat tersebut.', 'kh-beton-berpartisipasi-menjadi-sponsor-pada-rapat-kerja-inkindo-provinsi-dki-jakarta', 1, '2018-10-23 17:00:00', '2018-10-23 17:00:00'),
(3, '112016-img4.jpg', 'KH Beton Gelar Pengenalan Produk-Produk Inovatif di Aula DPUPR Kabupaten Kendal', 'KH Beton Gelar Pengenalan Produk-Produk Inovatif di Aula DPUPR Kabupaten Kendal', 'Selasa, tanggal 5 Februari 2019 Dinas Pekerjaan Umum dan Penataan Ruang Kabupaten Kendal sedang mengadakan kegiatan Rapat yang bertempat di Aula. Di sela -sela kegiatan Rapat, tim KH Beton di berikan kesempatan untuk memaparkan atau memperkenalkan salah satu jenis produk-produknya yaitu Paving .\n<br>\n<br>\nPaving yang diperkenalkan adalah jenis paving \"Wetcast\" atau cetak basah, dimana paving yang diperkenalkan berbeda dari jenis paving pada umumnya. Paving yang dihasilkan dari metode \"Wetcast\" ini sangatlah inovatif, karena paving ini memiliki permukaan yang halus dengan kualitas mutu yang jauh lebih tinggi  serta tahan terhadap lumut. Memang untuk dari segi harga paving ini mempunyai harga yang agak tinggi dari pada paving pada umumnya, akan tetapi dari segi ketahanan dan jangka panjang, paving ini dapat bertahan sampai 5 tahun kedepan. Paving tersebut juga merupakan produk Paving pertama kali yang ada di Indonesia.\n\n   ', 'kh-beton-gelar-pengenalan-produkproduk-inovatif-di-aula-dpupr-kabupaten-kendal', 1, '2019-02-06 17:00:00', '2019-02-06 17:00:00'),
(4, '100612-img3.jpg ', 'KH Beton Mendapat Kunjungan Kerja Langsung dari Dinas Pendidikan Kota Surakarta', 'KH Beton Mendapat Kunjungan Kerja Langsung dari Dinas Pendidikan Kota Surakarta', 'Sehubungan dengan dimulainya pembangunan atau revitalisasi di salah satu bangunan sekolahan yang ada di Kota Surakarta, Dinas Pendidikan Kota Surakarta melakukan kunjungan kerja di KH Beton Boyolali pada Kamis, 20 Juni 2019. Dalam kunjunagannya terebut, Kepala Dinas Pendidikan Kota Surakarta, beserta beberapa para staffnya, tiba di lokasi KH Beton Boyolali Pukul 14.00 WIB.\n<br>\n<br>\nKunjungan kerja tersebut langsung diterima oleh pimpianan KH Beton dan dilanjutkan dengan memaparkan mengenai produk paving unggulan KH Beton, dimana paving merupakan salah satu produk utama yang akan digunakan untuk pembangunan dan revitalisasi salah satu bangunan sekolahan yang ada di Kota Surakarta.\n<br>\n<br>\nDiharapkan, dalam kunjungan kerja ini dapat menjalin kerjasama antara KH Beton dan Dinas Pendidikan Kota Surakarta, dalam melakukan pembangunan yang ada di Kota Surakarta, terutama di salah satu pembangunan Sekolahan.\n\n    ', 'kh-beton-mendapat-kunjungan-kerja-langsung-dari-dinas-pendidikan-kota-surakarta', 1, '2019-06-19 17:00:00', '2019-06-19 17:00:00'),
(5, '190037-img7.jpg', 'Bersama BP2 Prov Jateng KH Beton Melakukan Uji Test Proyek Irigasi Panel di Wilayah Klaten', 'Bersama BP2 Prov Jateng KH Beton Melakukan Uji Test Proyek Irigasi Panel di Wilayah Klaten', 'Rabu, 14 Agustus 2019, KH Beton mengundang Balai Pengujian dan Peralatan (BP2) yang merupakan unit pelayanan teknis DPU Bina Marga Dan Cipta Karya  Prov Jawa Tengah untuk melakukan uji kekuatan dengan Hammer Test pada beberapa pengerjaan proyek saluran irigasi yang menggunakan pagar panel di beberapa titik lokasi di Wilayah Kabupaten Klaten.\n<br>\n<br>\nPada pekerjaan proyek irigasi dengan menggunakan pagar pane ini, merupakan sebuah inovasi dari KH Beton, dimana yang mulanya Pagar Panel Beton di ginakan untuk Pagar pada jalan tol, area industri, dan lain-lain, maka dalam pengerjaan proyek ini, pagar panel digunakan untuk  saluran irigasi, dan pengganti dari pasang batu atau talud.\n<br>\n<br>\nDisamping  mengunakan pagar panel sebagai saluran irigasi juga mempunyai banyak kelebihan salah satunya adalah mutu dan kualitas yang terjamin. Selain itu juga anti terhadap lumut, dan lebih kuat.\n\n\n\n\n   ', 'bersama-bp2-prov-jateng-kh-beton-melakukan-uji-test-proyek-irigasi-panel-di-wilayah-klaten', 1, '2019-08-13 17:00:00', '2019-08-13 17:00:00'),
(6, '214022-img8.jpg', 'Pengenalan Paving Block dengan Metode Wet Cast pada RSUD Kab Sukoharjo', 'Pengenalan Paving Block dengan Metode Wet Cast pada RSUD Kab Sukoharjo', 'Sukoharjo, Sabtu (27/04), KH Beton diberikan kesempatan untuk mengenalkan tentang produk unggulannya, yaitu Paving Wet Cast di RSUD Kab. Sukoharjo yang dimana nantinya akan dilakukan pemasangan Paving pada halaman di RSUD Kab. Sukoharjo. \n<br>\n<br>\nSebelumnya, pada halaman RSUD Kab. Sukoharjo tersebut sudah menggunakan paving, hanya saja paving yang digunakan adalah jenis Paving Dry Cast atau cetak kering, dimana  permukaannya kasar, serta mempunyai mutu yang rendah, hanya mencapai K200 saja. \n<br>\n<br>\nBerbeda dengan jenis Paving  dengan metode Wet Cast, yang menghasilkan mutu yang jauh lebih tinggi, yaitu K350 sampai K700, dan mempunyai permukaan yang halus. Selain itu Paving jenis Wet Cast ini juga mempunyai sisi kelebihan, diantaranya adalah tahan terhadap lumut, jadi untuk penggunaan dalam jangka panjang,  Paving jenis Wet Cast ini sangat di rekomendasikan.\n  ', 'pengenalan-paving-block-dengan-metode-wet-cast-pada-rsud-kab-sukoharjo', 1, '2019-04-26 17:00:00', '2019-04-26 17:00:00'),
(7, '220728-img9.jpg', 'KH Beton Berpartisipasi Menjadi Supporting Organization di Acara RAKERNAS INKINDO Yogyakarta', 'KH Beton Berpartisipasi Menjadi Supporting Organization di Acara RAKERNAS INKINDO Yogyakarta', 'INKINDO menyelenggarakan  Rapat Kerja Nasional (Rakernas) pada Jumat 5 April 2019, yang bertempat di Hotel Eastparc, Yogyakarta, dengan tema : 鈥?BERSAMA MEMBANGUN INKINDO YANG MODERN DAN PROFESIONAL\".\n<br>\n<br>\nDalam acara Rakernas yang di adakan di Yogyakarta ini, banyak sekali Konsultan Indonesia yang datang dari berbagai daerah untuk  hadir dalam acara tersebut, mulai dari perusahaan konsultan skala besar sampai dengan perusahaan konsultan skala menengah-kecil.\n<br>\n<br>\nTidak hanya perusahaan konsultan, sejumlah vendor  pun juga ikut dan hadir dalam acara Rakernas tersebut. Ada sekitar 40 vendor yang datang dan hadir untuk supporting  dalam acara Rakernas INKINDO yang di adakan di Yogyakarta tersebut. KH Beton merupakan salah sataunya perushaan  pertama  yang bergerak dalam bidang industri beton bangunan yang ikut dalam supporting acara Rakernas tersebut.\n   ', 'kh-beton-berpartisipasi-menjadi-supporting-organization-di-acara-rakernas-inkindo-yogyakarta', 1, '2019-04-04 17:00:00', '2019-04-04 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_certificate`
--

CREATE TABLE `client_certificate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('client','certificate') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_certificate`
--

INSERT INTO `client_certificate` (`id`, `image`, `alt`, `category`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'client-20240713045314.jpg', 'Waskita', 'client', 1, '2024-07-12 21:53:14', '2024-07-12 21:53:14'),
(2, 'client-20240713045334.jpg', 'PT Modern Widya Tehnic', 'client', 1, '2024-07-12 21:53:34', '2024-07-12 21:53:34'),
(3, 'client-20240713045347.jpg', 'Abipraya', 'client', 1, '2024-07-12 21:53:47', '2024-07-12 21:53:47'),
(4, 'client-20240713045407.jpg', 'PT Artadinata Azzahra Sejahtera', 'client', 1, '2024-07-12 21:54:07', '2024-07-12 21:54:07'),
(5, 'client-20240713045417.jpg', 'Wika', 'client', 1, '2024-07-12 21:54:17', '2024-07-12 21:54:17'),
(6, 'client-20240713045427.jpg', 'PUPR', 'client', 1, '2024-07-12 21:54:27', '2024-07-12 21:54:27'),
(7, 'client-20240713045505.jpg', 'PT Nindya Karya', 'client', 1, '2024-07-12 21:55:05', '2024-07-12 21:55:05'),
(8, 'certificate-20240713045837.png', 'Iso', 'certificate', 1, '2024-07-12 21:58:37', '2024-07-12 21:58:37'),
(9, 'certificate-20240713045926.png', 'Komite Akreditasi Nasional', 'certificate', 1, '2024-07-12 21:59:26', '2024-07-12 21:59:26'),
(10, 'certificate-20240713045943.png', 'SNI', 'certificate', 1, '2024-07-12 21:59:43', '2024-07-12 21:59:43'),
(11, 'certificate-20240713050007.png', 'Kementerian Perindustrian Republik Indonesia', 'certificate', 1, '2024-07-12 22:00:07', '2024-07-12 22:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `thumbnail`, `alt`, `title`, `description`, `location`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '095514-1_KH Beton Menghadiri Pertemuan dan Rapat pada Instansi INKINDO Yogyakarta.jpg', 'KH Beton Menghadiri Pertemuan dan Rapat Kerja pada Instansi INKINDO Yogyakarta', 'KH Beton Menghadiri Pertemuan dan Rapat Kerja pada Instansi INKINDO Yogyakarta', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '095609-2_Armada truck besar siap mengangkut Cover U-Ditch.jpg', 'Armada truck besar siap mengangkut Cover U-Ditch', 'Armada truck besar siap mengangkut Cover U-Ditch', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '095628-3_Survey Lokasi untuk Pembangunan Pagar Panel Beton di Pekalongan.jpg', 'Survey Lokasi untuk Pembangunan Pagar Panel Beton di Pekalongan', 'Survey Lokasi untuk Pembangunan Pagar Panel Beton di Pekalongan', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '095947-4_Menghadiri Rapat Kerja Provinsi INKINDO DKI Jakarta.jpg', 'Menghadiri Rapat Kerja Provinsi INKINDO DKI Jakarta', 'Menghadiri Rapat Kerja Provinsi INKINDO DKI Jakarta', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '100030-5_Proses Pengangkutan U-Ditch menggunakan Alat Crane.jpg', 'Proses Pengangkutan U-Ditch menggunakan Alat Crane', 'Proses Pengangkutan U-Ditch menggunakan Alat Crane', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '100049-6_Kunjungan Dari Dinas Pembangunan Umum Kendal.jpg', 'Kunjungan Dari Dinas Pembangunan Umum Kendal', 'Kunjungan Dari Dinas Pembangunan Umum Kendal', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '100109-7_Test Silinder di Lab. Fakultas Teknik Sipil Universitas Sebelas Maret (UNS).jpg', 'Test Silinder di Lab. Fakultas Teknik Sipil Universitas Sebelas Maret (UNS).', 'Test Silinder di Lab. Fakultas Teknik Sipil Universitas Sebelas Maret (UNS).', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '100605-8_Doa Bersama dalam Rangka Mengawali Pembangunan Pabrik KH Beton yang Baru.jpg', 'Doa Bersama dalam Rangka Mengawali Pembangunan Pabrik KH Beton yang Baru', 'Doa Bersama dalam Rangka Mengawali Pembangunan Pabrik KH Beton yang Baru', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '100620-9_Uji Hammer Test pada Produk Saluran U-Ditch oleh BP2 Semarang.jpg', 'Uji Hammer Test pada Produk Saluran U-Ditch oleh BP2 Semarang', 'Uji Hammer Test pada Produk Saluran U-Ditch oleh BP2 Semarang', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '100635-10_Kunjungan dan Survey dari salah satu Rekanan dari Semarang.jpg', 'Kunjungan dan Survey dari salah satu Rekanan dari Semarang', 'Kunjungan dan Survey dari salah satu Rekanan dari Semarang', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '100652-11_Pengenalan Salah Satu Produk Baru KH Beton di Dinas Pekerjaan Umum Kab.Magelang.jpg', 'Pengenalan Salah Satu Produk Baru KH Beton di Dinas Pekerjaan Umum Kab.Magelang', 'Pengenalan Salah Satu Produk Baru KH Beton di Dinas Pekerjaan Umum Kab.Magelang', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '100706-12_Acara Syukuran dan Doa Bersama semua Karyawan Staff pada Acara Soft Opening KH Beton.jpg', 'Acara Syukuran dan Doa Bersama semua Karyawan/ Staff pada Acara Soft Opening KH Beton', 'Acara Syukuran dan Doa Bersama semua Karyawan/ Staff pada Acara Soft Opening KH Beton', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '100737-13_Acara Meeeting Bersama akhir Tahun 2018 KH Beton.jpg', 'Acara Meeting Bersama Akhir Tahun 2018 KH Beton ', 'Acara Meeting Bersama Akhir Tahun 2018 KH Beton ', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '100753-14_Wujud Kantor Baru KH Beton.jpg', 'Wujud Kantor Baru KH Beton ', 'Wujud Kantor Baru KH Beton ', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '101402-15_Pengenalan Produk di Dinas Pekerjaan Umum Dan Penataan Ruang Kab.Kendal.jpg', 'Pengenalan Produk di Dinas Pekerjaan Umum Dan Penataan Ruang Kab.Kendal', 'Pengenalan Produk di Dinas Pekerjaan Umum Dan Penataan Ruang Kab.Kendal', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '101413-16_Kedatangan Tamu dari Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas.jpg', 'Kedatangan Tamu dari Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas', 'Kedatangan Tamu dari Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '100009-17_Pengenalan Inovasi Produk pada Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo.jpg', 'Pengenalan Inovasi Produk pada Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo', 'Pengenalan Inovasi Produk pada Dinas Pekerjaan Umum dan Penataan Ruang Kab.Sukoharjo', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '101838-18_Uji Hammer Test Bersama Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas.jpg', 'Uji Hammer Test Bersama Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas', 'Uji Hammer Test Bersama Dinas Pekerjaan Umum dan Penataan Ruang Kab.Banyumas', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '141132-19_Kedatangan Konsultan dari Pekalongan untuk Survey salah satu Produk Baru KH Beton.jpg', 'Kedatangan Konsultan dari Pekalongan Untuk Survey Produk INOVASI Saluran Beton Pracetak', 'Kedatangan Konsultan dari Pekalongan Untuk Survey Produk INOVASI Saluran Beton Pracetak', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '151540-20_Uji Hammer Test Terhadap Produk Saluran Beton yang Dilakukan BP2 Semarang .jpg', 'Uji Hammer Test Terhadap Produk Saluran Beton oleh BP2 Semarang', 'Uji Hammer Test Terhadap Produk Saluran Beton oleh BP2 Semarang', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '095048-21_Ikut_Berkontribusi Pada Acara_Rakernas_INKINDO 2019 Yogyakarta.jpg', 'Ikut Berkontribusi Pada Acara RAKERNAS INKINDO 2019 Yogyakarta ', 'Ikut Berkontribusi Pada Acara RAKERNAS INKINDO 2019 Yogyakarta ', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '101610-22_Proses Instalasi Pemasangan & Uji Coba Batching Plant .jpg', 'Proses Instalasi /Pemasangan & Uji Coba Batching Plant ', 'Proses Instalasi /Pemasangan & Uji Coba Batching Plant ', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '110256-23_Kunjungan Kepala Dinas Pekerjaan Umum Kab.Grobogan di Kantor KH Beton.jpg', 'Kunjungan Kepala Dinas Pekerjaan Umum Kab.Grobogan di Kantor KH Beton', 'Kunjungan Kepala Dinas Pekerjaan Umum Kab.Grobogan di Kantor KH Beton', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '143455-24_Kunjungan Kepala Dinas Pendidikan Kota Surakarta.jpg', 'Kunjungan Kepala Dinas Pendidikan Kota Surakarta', 'Kunjungan Kepala Dinas Pendidikan Kota Surakarta', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '163442-25_Kunjungan Semen Indonesia Group.jpg', 'Kunjungan Semen Indonesia Group', 'Kunjungan Semen Indonesia Group', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '093048-26_Uji_Hammer_Test_BP2_DPU Klaten_KHBeton .jpg', 'Pengujian \"Hammer Test\" Proyek Saluran Irigasi Pagar Panel Klaten', 'Pengujian \"Hammer Test\" Proyek Saluran Irigasi Pagar Panel Klaten', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '094006-27_Kunjungan_Kerja_DPU_Kab.Sleman.jpg', 'Kunjunga Kerja DPU Kab.Sleman', 'Kunjunga Kerja DPU Kab.Sleman', NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_07_05_100946_create_product_category_table', 1),
(7, '2024_07_05_101110_create_products_table', 1),
(8, '2024_07_05_101749_create_products_image_table', 1),
(9, '2024_07_05_102245_create_portofolio_table', 1),
(10, '2024_07_05_102514_create_gallery_table', 1),
(11, '2024_07_05_102631_create_blogs_table', 1),
(12, '2024_07_05_102758_create_blog_tags_table', 1),
(13, '2024_07_05_102928_create_contacts_table', 1),
(14, '2024_07_05_103305_create_profile_table', 1),
(15, '2024_07_05_105718_create_client_certificate_table', 1),
(16, '2024_07_06_061246_create_banners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` enum('BUMN','Swasta') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `thumbnail`, `alt`, `title`, `description`, `location`, `category`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '030800-Paving Holland_Alun_Alun_Pekalongan.jpg', 'Pemasangan Paving Holland Warna', 'Pemasangan Paving Holland Warna', NULL, 'Loc : Proyek Taman Alun Alun,Pekalongan', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(2, '024320-Paving Holland_Proyek_Revitalisasi_Pasar-Prambanan.jpg', 'Pemasangan Paving Holland Motif', 'Pemasangan Paving Holland Motif', NULL, 'Loc :  Proyek Revitalisasi Pasar Prambanan, Yogyakarta', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(3, '023150-Paving Difabel_Alun-Alun_Pekalongan.jpg', 'Pemasangan Paving Difabel', 'Pemasangan Paving Difabel', NULL, 'Loc : Proyek Alun Alun Pekalongan', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(4, '032930-Kansteen 50 Profil_Jalan_Kolonel_Sutarto-Solo.jpg', 'Pemasangan Kansteen 50 Profil', 'Pemasangan Kansteen 50 Profil', NULL, 'Loc : Proyek Sepanjang Jl.Kolonel Sutarto, Solo', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(5, '033000-Saluran Drainase U-Ditch-Proyek_Embung_Melikan_Boyolali.jpg', 'Pembangunan Saluran Pada Embung Melikan', 'Pembangunan Saluran Pada Embung Melikan', NULL, 'Loc :  Proyek Embung Melikan, Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(6, '033553-Saluran Drainase U-Ditch_Pasar Mlonggo_Jepara.jpg', 'Pemasangan Saluran U-Ditch', 'Pemasangan Saluran U-Ditch', NULL, 'Loc : Proyek Peningkatan Jalan Pasar Mlonggo, Lanjutan, Jepara', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(7, '023104-Saluran U Ditch_Proyek_Kawasan_Wisata_Borobudur.jpg', 'Pemasangan Saluran U-Ditch oleh KSPN Boronudur', 'Pemasangan Saluran U-Ditch oleh KSPN Boronudur', NULL, 'Loc : Proyek Sepanjang Kawasan Wisata Borobudur', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(8, '030617-Saluran U-Ditch_Proyek_Jalan_Ndoyo-Boyolali.jpg', 'Pekerjaan Pemasangan Saluran U-Ditch ', 'Pekerjaan Pemasangan Saluran U-Ditch ', NULL, 'Loc : Proyek Pembangunan Saluran Drainas Jl Ndoyo, Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(9, '024240-Paving Decorative_Proyek_Tol_Pemalang-Batang.jpg', 'Pemasangan Paving Decorative', 'Pemasangan Paving Decorative', NULL, 'Loc : Proyek Pembangunan Jalan Tol Pemalang - Batang', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(10, '023011-Box Culvert Ukuran Custom_Proyek_Jalan_Ruas_Jalan_Babadan_Ungaran_Timur.jpg', 'Box Culvert Ukuran Custom (2 Meter) Untuk Crossing Jalan', 'Box Culvert Ukuran Custom (2 Meter) Untuk Crossing Jalan', NULL, 'Loc : Proyek Ruas Jalan Babadan, Ungaran Timur', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(11, '121339-Box Culvert_Proyek_Saluran-Drainase_Tegaldowo_Pekalongan.jpg', 'Pemasangan Saluran Box Culvert ', 'Pemasangan Saluran Box Culvert ', NULL, 'Loc : Proyek Saluran Irigasi Dusun Tirto, Tegaldowo, Pekalongan', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(12, '121324-Kansteen S Besar_ Revitalisasi Danau UNS.jpg', 'Pemasangan Kansteen Type S Besar', 'Pemasangan Kansteen Type S Besar', NULL, 'Loc : Proyek Revitalisasi Danau UNS (Universitas Sebelas Maret)', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(13, '022621-Paving Grass Block_Revitalisasi_Pasar_Prambanan.jpg', 'Pemasangan Paving Grass Block Motif', 'Pemasangan Paving Grass Block Motif', NULL, 'Loc : Proyek Revitalisasi Pasar Prambanan, Yogyakarta', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(14, '025904-Paving Difabel_Proyek_MT Haryono-Semarang.jpg', 'Pemasangan Paving Difabel', 'Pemasangan Paving Difabel', NULL, 'Loc : Proyek Jalan MT Haryono, Semarang', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(15, '022606-Pagar Panel_Proyek_Tol_Solo-Kertosono.jpg', 'Pemasangan Pagar Panel Beton', 'Pemasangan Pagar Panel Beton', NULL, 'Loc : Proyek Jalan Tol Solo - Kertosono', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(16, '121232-Paving Around Of Trees_ Revitalisasi Pasar Prambanan.jpg', 'Pemasangan Paving Around Of Trees', 'Pemasangan Paving Around Of Trees', NULL, 'Loc : Pasar Prambanan, Yogyakarta', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(17, '141506-Ready_Mix_Proyek_Gedung_Bela_Negara_Boyolali.jpg', 'Pembangunan Gedung Bela Negara', 'Pembangunan Gedung Bela Negara', NULL, 'Loc : Proyek Gedung Bela Negara Kab. Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(18, '142854-Paving-Holand_Motif_Ruko Babadan Semarang.jpg', 'Pemasangan Paving Holland Motif', 'Pemasangan Paving Holland Motif', NULL, 'Loc : Proyek Ruko Babadan, Semarang', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(19, '144802-Proyek_Saluran_U-ditch_Jalan Tol Boyolali.jpg', 'Pemasangan Saluran U-Ditch Jalan Tol Boyolali', 'Pemasangan Saluran U-Ditch Jalan Tol Boyolali', NULL, 'Loc : Jalan Tol Ngasem, Exit Boyolali', 'BUMN', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(20, '145828-Proyek_Pembangunan_Saluran_Drainase_Penumping_Solo.jpg', 'Pembangunan Saluran Drainase Penumping Solo', 'Pembangunan Saluran Drainase Penumping Solo', NULL, 'Loc : Penumping, Laweyan, Solo', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(21, '151140-Ready_Mix_Proyek_Jalan_Papringan-Simo_Boyolali.jpg', 'Peningkatan Jalan Papringan - Simo', 'Peningkatan Jalan Papringan - Simo', NULL, 'Loc : Jalan Papringan Simo - Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(22, '151434-Ready_Mix_Proyek_Peningkatan_Jalan_Tompak-Cepgo.jpg', 'Pemeliharaan Jalan Tompak - Cepogo Boyolali', 'Pemeliharaan Jalan Tompak - Cepogo Boyolali', NULL, 'Loc : Jalan Tompak -Cepogo', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(27, '144753-Proyek_Saluran_U-Ditch_Sirkuit_Boyolali.jpg', 'Pembangunan Saluran Drainase di Sirkuit Gokart Boyolali', 'Pembangunan Saluran Drainase di Sirkuit Gokart Boyolali', NULL, 'Loc : Sirkuit Gokart Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(28, '150212-Proyek_Saluran_U-Ditch_Kel.Jayengan_Surakarta.jpg', 'Pembangunan Saluran Drainase, Jayengan Surakarta', 'Pembangunan Saluran Drainase, Jayengan Surakarta', NULL, 'Loc : Kelurahan Jayengan, Surakarta', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(29, '150632-Perbaikan_Jalan_Profesor_Soeharso_Boyolali.jpg', 'Proyek Perbaikan Jalan Profesor Soeharso, Boyolali', 'Proyek Perbaikan Jalan Profesor Soeharso, Boyolali', NULL, 'Loc : Jalan Profesor Soeharso, Kragilan, Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(30, '152515-Pekerjaan_Saluran_Cor_DiTempat.jpg', 'Pekerjaan Saluran Cor Di Tampat (Cast in Situ)', 'Pekerjaan Saluran Cor Di Tampat (Cast in Situ)', NULL, 'Loc : Jalan Susilo Harjodoyo, Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(31, '145353-Pemasangan_Paving_Holand_RSUD_Sukoharjo.jpg', 'Pemsangan Paving Holand Motif di Halaman RSUD Sukoharjo', 'Pemsangan Paving Holand Motif di Halaman RSUD Sukoharjo', NULL, 'Loc : RSUD Sukoharjo', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(32, '160802-Pemasangan_Box-Culvert_RSUD Moewardi Solo.jpg', 'Pekerjaan Irigasi Box Culvert di Jalur Pedestrian RSUD Moewardi Solo', 'Pekerjaan Irigasi Box Culvert di Jalur Pedestrian RSUD Moewardi Solo', NULL, 'Loc : Rumah Sakit RSUD Moewardi Surakarta', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(33, '161109-Ready_Mix_Proyek_Pembangunan_Pasar_Hewan-Boyolali.jpg', 'Pembangunan Pasar Hewan Boyolali', 'Pembangunan Pasar Hewan Boyolali', NULL, 'Loc : Pasar Hewan Boyolali', 'Swasta', 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utility` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `product_category_id`, `dimension`, `utility`, `quality`, `youtube_link`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Paving Holland', 'paving-holland', 'Paving Block yang dibuat dengan menggunakan metode \"WetCast\" atau cetak basah, sehingga menghasilkan jenis paving block yang innovative, dengan permukaan yang lebih halus dari pada paving pada umumnya. Paving ini juga mempunyai ukuran yang ideal, karena mudah diaplikasikan dan memiliki pola yang beraneka ragam serta berbagai pilihan warna.  ', 1, '20 x 10 x 6', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(2, 'Paving Difabel', 'paving-difabel', 'Paving block dengan ukuran dan bentuk standard internasional bermotif garis garis yang di produksi untuk menunjang aksesibilitas bagi penyandang disabilitas, yakni penyandang tuna netra. Dengan motif  bergaris - garis yang berfungsi untuk menandakan jalan lurus  ', 1, '30 x 30 x 5', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(3, 'Paving Blind Hold', 'paving-blind-hold', 'Paving block dengan ukuran dan bentuk standard internasional yang mempunyai motif bulat - bulat di permukaanya ,yang di produksi untuk menunjang aksesibilitas bagi penyandang disabilitas, yakni penyandang tuna netra. Dengan motif  bulat-bulat yang berfungsi untuk menandakan berhenti atau belok.  ', 1, '30 x 30 x 5', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(4, 'Paving Decorative', 'paving-decorative', 'Paving Block yang dibuat dengan menggunakan metode \"WetCast\" atau cetak basah, dan menghasilkan produk inovasi yaitu Paving Decorative, dengan motif yang berupa garis - garis diatas permukaanya, yang berfungsi untuk mengurangi licin pada saat musim hujan, karena air akan mengalir melalui garis - garis dan meresap dicelah - celah antara paving yang satu dengan yang lainya  ', 1, '50 x 25 x 6 ', 'Konstruksi Parkir, Jalan, Trotoar', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(5, 'Paving Grass Block Motif', 'paving-grass-block-motif', 'Paving Grass Block adalah produk inovasi dari paving block, yang dikhususkan untuk perkerasan area taman, dan sebagainya. Hampir sama fungsinya dengan Paving Block, hanya bedanya Paving tersebut memiliki rongga khusus yang dapat ditanami rumput, dan pada saat hujan air mudah dapat terserap kedalam tanah. ', 1, '25 x 25 x 6', 'Konstruksi, Taman', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(6, 'Paving Around Of Trees', 'paving-around-of-trees', 'Paving Around Of Trees meruakan produk inovasi dari paving block yang difungsikan untuk pengganti buis beton yang biasanya untuk ditanami pohon. Dengan lubang besar yang terdapat di  ditengah, digunakan untuk ditanami pohon, dan lubang kecil yang digunakan pada saat hujan, air dengan mudah dapat masuk kedalam tanah. Sehingga kesuburan pohon masih terjaga.  ', 1, '50 x 50 x 6', 'Konstruksi, Taman', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(7, 'Saluran U-Ditch Precast', 'saluran-uditch-precast', 'Saluran dari beton bertulang dengan  bentuk penampang huruf U dan juga  bisa diberi tutup. Umum nya digunakan  untuk saluran drainase atau irigasi.  Ketinggian saluran terbuka ini dapat  bervariasi mengikuti kebutuhan  dilapangan atau elevasi saluran yang  di inginkan.    \nProduk saluran U-DItch juga terbagi menjadi dua tipe yaitu Heavy Duty (HD) dan Light Duty (LD).  ', 3, 'Custom', 'Drainase, Saluran Irigasi', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(8, 'Cover U-Ditch Precast', 'cover-uditch-precast', 'Cover U-Ditch merupakan tutup saluran air drainase beton pracetak yang berbentuk huruf U atau U Ditch, yang berbahan semen, kerikil, abubatu dan pasir besi tulangan yang juga disertai air. Cover U Ditch tersebut juga memiliki dua macam tipe , yaitu Heavy Duty (HD) dan Light Duty (LD). ', 3, 'Custom', 'Tutup U-Ditch', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(9, 'Box Culvert Precast', 'box-culvert-precast', 'Box culvert adalah salah satu jenis beton precast yang sering digunakan pada konstruksi saluran air, sehingga kerap disebut juga dengan gorong-gorong.\nSesuai dengan namanya, Box Culvert adalah beton precast yang berbentuk persegi atau kotak dengan ukuran yang sudah ditentukan. Box Culvert juga memiliki spigot dan socketnya. Kegunaan spigot dan socketnya adalah untuk menjadikan box culvert ini kedap terhadap masuknya air tanah (eksfiltrasi) dan tetap menyatu saat terjadi pergeseran tanah.\nKami juga memiliki dua macam tipe Box Culvert, yaitu Heavy Duty (HD) dan Light Duty (LD).\n    ', 3, 'Custom', 'Saluran Drainase, Crossing', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(10, 'Kansteen Type L', 'kansteen-type-l', 'Kansteen type L  dengan metode \"Wet Cast\" atau cetak basah yang merupakan produk beton yang berfungsi sebagai penguat tepi jalan. Kansteen beton juga digunakan pada trotoar, separator, tepi badan jalan, jalan taman, boulevard, pembatas taman dan sebagainya. Dinamakan Kansteen L karena bentuk dan desain menyerupai huruf L.    ', 4, '60 x 38 x (27 x 12)', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(11, 'Kansteen Type L Profil', 'kansteen-type-l-profil', 'Kansteen type L Profil, merupakan produk beton yang dicetak dengan menggunakan metode \"Wet Cast\" cetak basah, yang berfungsi sebagai penguat tepi jalan yang dipasang  pada trotoar, separator, tepi badan jalan, jalan taman, boulevard, pembatas taman dan sebagainya. Berbeda dari Kansteen L biasa, Kansteen L Profil ini mempunyai tinggi dan ketebalan yang khusus.            ', 4, '60 x 40 x (12 x 20)', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(12, 'Kansteen Type S Kecil', 'kansteen-type-s-kecil', 'Kansteen type S Kecil, merupakan kansteen yang berbentuk seperti huruf S dengan memiliki ketebalan dan tinggi yang khusus, serta mempunyai fungsi yang sama dari model Kansteen sebelumnya. Kansteen type S Kecil ini sudah menggunakan metode Cetak Basah \n(Wet Cast) dimana permukaan dan teksturnya sudah halus sehingga saat pemasangan tidak diwajibkan untuk di finishing / di cat.     ', 4, '50 x 35 x ( 7 x 14 )', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(13, 'Kansteen Type S Besar', 'kansteen-type-s-besar', 'Kansteen type S Besar, merupakan kansteen yang berbentuk seperti huruf S dengan memiliki ketebalan dan tinggi yang khusus, serta mempunyai fungsi yang sama dari model Kansteen sebelumnya. Kansteen type S Besar ini sudah menggunakan metode Cetak Basah (Wet Cast) dimana permukaan dan teksturnya sudah halus sehingga saat pemasangan tidak diwajibkan untuk di finishing / di cat.     ', 4, '60 x 30 x (11 x 17)', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(14, 'Kansteen Type 50 Profil', 'kansteen-type-50-profil', 'Kansteen 50 Profil merupakan produk beton yang mempunyai fungsi sama dengan Kansteen jenis lainnya, hanya saja Kansteen 50 Profil ini mempunyai bentuk dan ukuran yang berbeda dari Kansteen lainnya.     ', 4, '50 x 50 x 15', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(16, 'Kansteen Precast Persegi', 'kansteen-precast-persegi', 'Kansteen Persegi merupakan produk beton yang berfungsi sebagai penguat tepi jalan yang dipasang paving block. Kanstein beton juga digunakan pada trotoar, separator, tepi badan jalan, jalan taman, boulevard, pembatas taman dan sebagainya.  Dinamakan kansteen persegi karena mempunyai bentuk yang sama dengan bidang persegi  . ', 4, '(50/40) x 20 x 10', 'Trotoar, Tepi Badan Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(17, 'Pagar Panel Beton Standard', 'pagar-panel-beton-standard', 'Pagar Panel Beton Standard merupakan salah satu produk beton precast atau precast concrete, yang disusun pada kolom penjepit untuk kebutuhan pagar tembok karena pengerjaannya yang lebih praktis dan cepat.     ', 2, 'Custom', 'Pagar, Konstruksi Pengairan atau Irigasi.', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(18, 'Pagar Panel Beton Decorative', 'pagar-panel-beton-decorative', 'Pagar Panel Decorative merupakan salah satu produk beton precast atau precast concrete, yang disusun pada kolom penjepit untuk kebutuhan pagar tembok yang memiliki textsture dan motif yang berbeda dari Panel Standard.  ', 2, 'Custom', 'Pagar, Konstruksi Pengairan atau Irigasi.', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(19, 'Concrete Barrier Precast', 'concrete-barrier-precast', 'Barrier merupakan beton bertulang pra cetak yang digunakan sebagai dinding pemisah, pembatas jalan atau penahan di jalan raya dan di jalan tol, dengan ketinggian dan bentuk yang bervariasi. ', 5, 'Custom', 'Pembatas Jalan', 'K350 s/d K700', NULL, 1, '2024-07-11 17:00:00', '2024-07-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `thumbnail`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'Decorative PAVING Block', '<p>Decorative PAVING Block</p>', 'category-20240712153304.png', 'Decorative PAVING Block', '2024-07-11 17:00:00', '2024-07-12 08:38:03'),
(2, 'Panel Beton Precast', NULL, NULL, 'Panel Beton Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(3, 'U-Ditch & Box Culvert', '<p>U-Ditch &amp; Box Culvert</p>', 'category-20240712153844.png', 'U-Ditch & Box Culvert', '2024-07-11 17:00:00', '2024-07-12 08:39:30'),
(4, 'Kansteen Kerb All Type', '<p>Kansteen Kerb All Type</p>', 'category-20240712154002.png', 'Kansteen Kerb All Type', '2024-07-11 17:00:00', '2024-07-12 08:40:02'),
(5, 'Concrete Barrier', '<p>Concrete Barrier</p>', 'category-20240712153918.png', 'Concrete Barrier', '2024-07-11 17:00:00', '2024-07-12 08:39:18'),
(6, 'Precast Concrete Pile', NULL, NULL, 'Precast Concrete Pile', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(7, 'Special READY MIX', NULL, NULL, 'Special READY MIX', '2024-07-11 17:00:00', '2024-07-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(1, 1, '094248-paving_holand.png', 'Paving Holland', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(2, 1, 'holand_spesifikasi.jpg', 'Paving Holland', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(3, 1, 'holand_teknik.jpg', 'Paving Holland', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(5, 2, '162739-paving_difabel.png', 'Paving Difabel', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(6, 2, 'difabel_spesifikasi.jpg', 'Paving Difabel', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(7, 2, 'difabel_teknik.jpg', 'Paving Difabel', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(8, 2, 'difabel_pemasangan.jpg', 'Paving Difabel', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(9, 3, '162756-paving_blind_hold.png', 'Paving Blind Hold', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(10, 3, 'blindhold_spesifikasi.jpg', 'Paving Blind Hold', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(11, 3, 'blindhold_teknik.jpg', 'Paving Blind Hold', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(12, 3, 'blindhold_pemasangan.jpg', 'Paving Blind Hold', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(13, 4, '055858-paving_decorative.png', 'Paving Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(14, 4, 'decorative_spesifikasi.jpg', 'Paving Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(15, 4, 'decorative_teknik.jpg', 'Paving Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(16, 4, 'decorative_pemasangan.jpg', 'Paving Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(17, 5, '055526-paving_grass_block_motif.png', 'Paving Grass Block Motif', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(18, 5, 'grassblock_spesifikasi.jpg', 'Paving Grass Block Motif', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(19, 5, 'grassblock_teknik.jpg', 'Paving Grass Block Motif', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(20, 5, 'grassblock_pemasangan.jpg', 'Paving Grass Block Motif', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(21, 6, '162814-paving_around_of_trees.png', 'Paving Around Of Trees', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(22, 6, 'around_spesifikasi.jpg', 'Paving Around Of Trees', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(23, 6, 'around_teknik.jpg', 'Paving Around Of Trees', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(24, 6, 'around_pemasangan.jpg', 'Paving Around Of Trees', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(25, 7, '095248-uditch.png', 'Saluran U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(26, 7, 'u-ditch_spesifikasi.jpg', 'Saluran U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(27, 7, 'u-ditch_teknik.jpg', 'Saluran U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(28, 7, 'u-ditch_ukuran.jpg', 'Saluran U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(29, 7, 'u-ditch_pemasangan.jpg', 'Saluran U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(30, 8, '101702-cover_uditch.png', 'Cover U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(31, 8, 'cover_spesifikasi.jpg', 'Cover U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(32, 8, 'cover_teknik.jpg', 'Cover U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(33, 8, 'cover_ukuran.jpg', 'Cover U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(34, 8, 'cover_pemasangan.jpg', 'Cover U-Ditch Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(35, 9, '095722-box_culvert.png', 'Box Culvert Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(36, 9, 'box-culvert_spesifikasi.jpg', 'Box Culvert Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(37, 9, 'box-culvert_teknik.jpg', 'Box Culvert Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(38, 9, 'box-culvert_ukuran.jpg', 'Box Culvert Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(39, 9, 'box-culvert_pemasangan.jpg', 'Box Culvert Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(40, 10, '161722-kansteen_L.png', 'Kansteen Type L', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(41, 10, 'kansteen-l_spesifikasi.jpg', 'Kansteen Type L', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(42, 10, 'kansteen-l_teknik.jpg', 'Kansteen Type L', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(43, 10, 'kansteen-l_pemasangan.jpg', 'Kansteen Type L', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(44, 11, '161243-kansteen_L_profil.png', 'Kansteen Type L Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(45, 11, 'kansteen-l-profil_spesifikasi.jpg', 'Kansteen Type L Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(46, 11, 'kansteen-l-profil_teknik.jpg', 'Kansteen Type L Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(47, 12, '094942-kansteen_s_kecil.png', 'Kansteen Type S Kecil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(48, 12, 'kansteen-s-kecil_spesifikasi.jpg', 'Kansteen Type S Kecil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(49, 12, 'kansteen-s-kecil_teknik.jpg', 'Kansteen Type S Kecil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(50, 13, '092650-kansteen_s_besar.png', 'Kansteen Type S Besar', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(51, 13, 'kansteen-s-besar_spesifikasi.jpg', 'Kansteen Type S Besar', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(52, 13, 'kansteen-s-besar_teknik.jpg', 'Kansteen Type S Besar', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(53, 14, '104340-kansteen_50_profil.png', 'Kansteen Type 50 Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(54, 14, 'kansteen-50-profil_spesifikasi.jpg', 'Kansteen Type 50 Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(55, 14, 'kansteen-50-profil_teknik.jpg', 'Kansteen Type 50 Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(56, 14, 'kansteen-50-profil_pemasangan.jpg', 'Kansteen Type 50 Profil', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(57, 16, '104104-kansteen_persegi.png', 'Pagar Panel Beton Standard', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(58, 16, 'kansteen-persegi_spesifikasi.jpg', 'Pagar Panel Beton Standard', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(59, 16, 'kansteen-persegi_teknik.jpg', 'Pagar Panel Beton Standard', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(60, 17, '091728-pagear_panel_beton.png', 'Pagar Panel Beton Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(61, 17, 'panel_spesifikasi.jpg', 'Pagar Panel Beton Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(62, 17, 'panel_teknik.jpg', 'Pagar Panel Beton Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(63, 17, 'panel_ukuran.jpg', 'Pagar Panel Beton Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(64, 17, 'panel_pemasangan.jpg', 'Pagar Panel Beton Decorative', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(65, 18, '092148-pagear_panel_beton_decorative.png', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(66, 18, 'panel-decorative_spesifikasi.jpg', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(67, 18, 'panel-decorative_teknik.jpg', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(68, 18, 'panel-decorative_ukuran.jpg', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(69, 19, '092951-bariier.png', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(70, 19, 'barrier_spesifikasi.jpg', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(71, 19, 'barrier_teknik.jpg', 'Concrete Barrier Precast', '2024-07-11 17:00:00', '2024-07-11 17:00:00'),
(73, 1, 'product-20240712155609.jpg', 'Paving Holand', '2024-07-12 08:56:09', '2024-07-12 08:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_white` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_number_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_number_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `logo_color`, `logo_white`, `title`, `tagline`, `email`, `office_number`, `location`, `wa_number_1`, `wa_number_2`, `instagram_account`, `x_account`, `facebook_account`, `linkedin_account`, `created_at`, `updated_at`) VALUES
(1, 'logo_color-20240712151828.png', 'logo_white-20240712151828.png', 'KH Beton', 'Tingkatkan Keuntungan Anda dengan Kualitas yang Unggul', 'khbetonhpc@gmail.com', '(0276) 320015', '<p>Jl. Raya Boyolali - Magelang KM 5 Peleman Jelok, Cepogo, Kab.Boyolali, Jawa Tengah</p>', '+6281286777333', '+6285786777333', 'khbetonofficial', '@khbetonchannel8032', 'khbeton', NULL, '2024-07-12 08:12:00', '2024-07-12 22:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Clara Heaney', 'amparo22@example.org', NULL, '$2y$10$noOmVYE5QXSWfuPp8yi9ieYl2hWgpwK5J5/acrNX74PGUNtBGdZuK', NULL, '2024-07-12 08:12:00', '2024-07-12 08:12:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tags_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `client_certificate`
--
ALTER TABLE `client_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_certificate`
--
ALTER TABLE `client_certificate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
