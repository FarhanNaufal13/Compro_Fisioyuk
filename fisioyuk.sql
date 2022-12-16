-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2022 pada 08.59
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisioyuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Fisioyuk', 'Hallo warga bekasi -tanggerang-jakarta kita kenalan sama fisioyuk Kini layanan Fisioterapi datang ke rumah bisa lohh Untuk seluruh daerah kota Bekasi- Tanggerang - Jkrt dan Sekitarnya, solusinya bersama Fisioyuk anda Ingin berobat tapi terhambat karna kesibukan atau gak sempat untuk pergi ke Klinik/ Rumah Saki??? Jangan tunda keluhan anda semakin membuat anda tidak nyaman.\r\n\r\nYuk Segera Appoitment Di (+)0877-7884-0699 ,Semua keluhan anda menjadi kewajiban kami untuk membuat anda kembali nyaman tanpa harus ke Rumah sakit atau Klinik, Kini Layanan Fisioterapi Bisa di lakukan di rumah anda dan anda tetap aman di rumah bersama fisioyuk.', 'about2.png', '2022-12-08 08:30:38', '2022-12-13 05:55:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `category`, `isi`, `penulis`, `sebagai`, `sumber`, `tanggal`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Apa yang dimaksud dengan FIsioterapi ?', 'fisioterapy', 'Fisioterapi adalah tindakan rehabilitasi untuk menghindari atau meminimalkan keterbatasan fisik akibat cedera atau penyakit. Fisioterapi bisa dilakukan pada pasien dari semua rentang usia dengan berbagai macam tujuan, mulai dari meredakan sakit punggung hingga persiapan olahraga dan persalinan.', 'dr. Meva Nareza', 'Peninjau', 'https://www.alodokter.com/apa-yang-dimaksud-dengan-fisioterapi', '2022-11-19', 'fisioterapi1.jpg', '2022-12-12 03:08:49', '2022-12-12 03:08:49'),
(4, 'Manfaat Fisioterapi Terhadap Kesehatan', 'kesehatan', 'Anda pernah dengar sekilas tentang fisioterapi atau pernah berkunjung ke klinik fisioterapi? Fisioterapi merupakan bentuk layanan kesehatan yang diberikan pada seseorang untuk mengembangkan, memelihara, dan memulihkan gerak dan fungsi tubuh. Jika Anda mengalami cedera atau penyakit yang membuat Anda sulit menjalankan kegiatan sehari-hari.', 'dr. Edwin Halim', 'Reviewer', 'https://www.ciputramedicalcenter.com/manfaat-fisioterapi/', '2021-03-10', 'kesehatan1.jpg', '2022-12-12 03:12:39', '2022-12-12 03:12:39'),
(5, '5 jenis Olahraga yang Aman Dilakukan Saat Nyeri Sendi', 'gayaHidup', 'Olahraga penting dilakukan untuk menjaga kesehatan dan kebugaran tubuh. Ternyata, olahraga juga dianjurkan bagi pengidap nyeri sendi. Jenis olahraga tentunya harus disesuaikan dengan kondisi pengidap. Hindari melakukan olahraga berlebihan karena malah akan mencederai sendi.', 'Redaksi Halodoc', 'Peninjau', 'https://www.halodoc.com/artikel/5-jenis-olahraga-yang-aman-dilakukan-saat-nyeri-sendi', '2019-03-15', 'gaya hidup1.jpg', '2022-12-12 03:14:42', '2022-12-12 03:14:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_home`
--

CREATE TABLE `banner_home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner_home`
--

INSERT INTO `banner_home` (`id`, `title`, `description`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'PERTAMA DI INDONESIA', 'PESAN FISIO TERAPIS KE\r\nRUMAH ANDA TANPA\r\nPERLU MENGANTRI\r\nSEKARANG JUGA!', 'Shoomatic offers yours very comfortable time on walking and exercise.', 'backgorund.jpg', '2022-12-10 01:10:31', '2022-12-13 06:42:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner_promo`
--

CREATE TABLE `banner_promo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner_promo`
--

INSERT INTO `banner_promo` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Punya Keluhan Pegal?', 'KAMI PUNYA SOLUSINYA\r\nDISCOUNT UP TO 20%', 'banner.jpg', '2022-12-11 00:34:57', '2022-12-13 07:25:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps_embed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `name`, `description`, `logo`, `alamat`, `email`, `telepon`, `maps_embed`, `created_at`, `updated_at`) VALUES
(1, 'FIsioyuk', 'Hallo warga bekasi -tanggerang-jakarta kita kenalan sama fisioyuk Kini layanan Fisioterapi datang ke rumah bisa lohh Untuk seluruh daerah kota Bekasi- Tanggerang - Jkrt dan Sekitarnya, solusinya bersama Fisioyuk anda Ingin berobat tapi terhambat karna kesibukan atau gak sempat untuk pergi ke Klinik/ Rumah Saki??? Jangan tunda keluhan anda semakin membuat anda tidak nyaman.\r\n\r\nYuk Segera Appoitment Di (+)0877-7884-0699 ,Semua keluhan anda menjadi kewajiban kami untuk membuat anda kembali nyaman tanpa harus ke Rumah sakit atau Klinik, Kini Layanan Fisioterapi Bisa di lakukan di rumah anda dan anda tetap aman di rumah bersama fisioyuk.', 'logo persegi panjang 4.png', 'Sentra Summarecon Bekasi, Jl. Boulevard Ahmad Yani, Marga Mulya, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17142', 'jamar@gmail.com', '+62 882 2036 1123', '!1m18!1m12!1m3!1d3966.2848219908983!2d107.00107639999999!3d-6.226127600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c71cf814d97%3A0xd22a5d56809f070a!2sSummarecon%20Mall%20Bekasi!5e0!3m2!1sid!2sid!4v1668332615053!5m2!1sid!2sid', '2022-12-08 04:58:01', '2022-12-13 08:08:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `fiturs`
--

CREATE TABLE `fiturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fiturs`
--

INSERT INTO `fiturs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Visit Sekarang', 'Visit sekarang, visit satu kali pertemuan dengan fisioterapis atau tentukan tanggal lain sesuai keinginan Anda.', 'book-of-black-cover-closed blue.png', '2022-12-12 02:45:56', '2022-12-14 00:18:48'),
(6, 'Visit Excetive', 'Visit Paket 4 kali pertemuan, tentukan jadwal terapi sesuai keinginan Anda.', 'chat blue.png', '2022-12-12 02:46:38', '2022-12-14 00:19:07'),
(7, 'Visit Suite', 'Visit Paket 6 kali pertemuan, tentukan jadwal terapi sesuai keinginan Anda', 'paper-plane blue.png', '2022-12-12 02:47:16', '2022-12-14 00:19:18'),
(8, 'Visit Luxury', 'Visit Paket 8 kali pertemuan, tentukan jadwal terapi sesuai keinginan Anda', 'diamond blue.png', '2022-12-12 02:47:50', '2022-12-14 00:19:30'),
(9, 'Lifestyle Fisioteraphy', 'Pesan Fisioterapis online sebagai personal Fisioterapis Anda untuk membantu meningkatkan performa Anda', 'smile blue.png', '2022-12-12 02:48:25', '2022-12-14 00:19:42'),
(10, 'Fisoteraphy Event', 'Pesan Fisioterapis untuk event Anda! Kami akan menyediakan kebutuhan Fisioterapis untuk acara Anda.', 'calendar blue.png', '2022-12-12 02:48:55', '2022-12-14 00:19:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_04_154527_create_service_table', 2),
(6, '2022_12_04_173437_create_services_table', 3),
(7, '2022_12_05_090522_create_services_table', 4),
(8, '2022_12_05_130346_create_testimonis_table', 5),
(9, '2022_12_06_120958_create_fiturs_table', 6),
(10, '2022_12_07_094552_create_partners_table', 7),
(11, '2022_12_08_074259_create__banners_table', 8),
(12, '2022_12_08_074259_create_banners_table', 9),
(13, '2022_12_08_074934_create_banners_table', 10),
(14, '2022_12_08_080249_create_banners_table', 11),
(16, '2022_12_08_114110_create_tentang_table', 12),
(17, '2022_12_08_143026_change_table_contact_name', 13),
(18, '2022_12_08_145221_create_about_table', 14),
(20, '2022_12_10_074111_create_banner_home_table', 15),
(21, '2022_12_11_071238_create_banner_promo_table', 16),
(22, '2022_12_11_120606_rename_contact_column', 17),
(23, '2022_12_11_123402_create_artikel_table', 18),
(24, '2022_12_11_125327_create_artikels_table', 19),
(25, '2022_12_13_072556_alter_table_contact_change_description', 20),
(26, '2022_12_13_082003_create_team_table', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Augusta', 'l (2).svg', '2022-12-12 02:52:18', '2022-12-12 02:52:31'),
(5, 'Puma', 'l (1).svg', '2022-12-12 02:59:55', '2022-12-12 03:00:19'),
(6, 'BF GOOD RICH', 'l (3).svg', '2022-12-12 03:01:20', '2022-12-12 03:01:35'),
(7, 'Champion', 'l (4).svg', '2022-12-12 03:01:53', '2022-12-12 03:04:02'),
(8, 'Lacoste', 'l (6).svg', '2022-12-12 03:02:06', '2022-12-12 03:04:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Sakit Pinggang', 'sakit pinggang.jpg', '2022-12-12 02:23:57', '2022-12-12 02:23:57'),
(12, 'Fisioterapi Stroke', 'stroke.jpg', '2022-12-12 02:24:40', '2022-12-12 02:24:40'),
(13, 'Nyeri Leher', 'nyeri leher.jpeg', '2022-12-12 02:24:58', '2022-12-12 02:24:58'),
(14, 'Vertigo', 'vertigo.jpg', '2022-12-12 02:25:22', '2022-12-12 02:25:22'),
(15, 'Nyeri Pergelangan Tangan', 'nyeri pergelangan tangan.jpg', '2022-12-12 02:26:07', '2022-12-12 02:26:07'),
(16, 'Nyeri Sikut', 'nyeri sikut.jpg', '2022-12-12 02:26:29', '2022-12-12 02:26:29'),
(17, 'Nyeri Bahu', 'nyeri bahu.jpg', '2022-12-12 02:26:51', '2022-12-12 02:26:51'),
(18, 'Nyeri/Baal Pada Jari', 'nyeri jari.jpg', '2022-12-12 02:27:23', '2022-12-12 02:27:23'),
(19, 'Nyeri Lutut', 'nyeri lutut.jpg', '2022-12-12 02:27:51', '2022-12-12 02:27:51'),
(20, 'Nyeri Angkel', 'nyeri angkle.jpg', '2022-12-12 02:28:14', '2022-12-12 02:28:14'),
(21, 'Lambat Tumbuh Kembang', 'lambat tumbuh kembang.jpg', '2022-12-12 02:28:39', '2022-12-12 02:28:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Brilian Nasrulloh Azmi S.Tr.Kes', 'Ttl : Cianjur,30 Desember 1999 Jabatan : Fisioterapist Agama : Islam Instagram : @briliannasaz Moto hidup : berjuang di jalan allah & tetap bermanfaat untuk orang banyak\r\n\r\nYuk Segera Appoitment Di (+)0877-7884-0699 ,Semua keluhan anda menjadi kewajiban kami untuk membuat anda kembali nyaman tanpa harus ke Rumah sakit atau Klinik, Kini Layanan Fisioterapi Bisa di lakukan di rumah anda dan anda tetap aman di rumah bersama fisioyuk.', 'bril8.png', '2022-12-13 01:28:09', '2022-12-13 08:17:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonis`
--

INSERT INTO `testimonis` (`id`, `name`, `profession`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Samuel Alexander', 'Photographer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (3).jpg', '2022-12-12 02:31:02', '2022-12-12 02:31:02'),
(6, 'Martina Siregar', 'Content Creator', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (9).jpg', '2022-12-12 02:31:47', '2022-12-12 02:31:47'),
(7, 'Marco Christian', 'Digital Marketer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (8).jpg', '2022-12-12 02:32:29', '2022-12-12 02:32:29'),
(8, 'Noel Austin', 'Programer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (6).jpg', '2022-12-12 02:33:16', '2022-12-12 02:33:16'),
(9, 'Lee Maok', 'Designer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (2).jpg', '2022-12-12 02:33:45', '2022-12-12 02:33:45'),
(10, 'Reena Gaby', 'Student', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (7).jpg', '2022-12-12 02:34:36', '2022-12-12 02:34:36'),
(11, 'Laura Kim', 'Admin Slot', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (4).jpg', '2022-12-12 02:35:11', '2022-12-12 02:35:11'),
(12, 'Jack Way', 'Accountant', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (5).jpg', '2022-12-12 02:35:45', '2022-12-12 02:35:45'),
(13, 'Lisa Sandrina', 'Animator', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga libero facere magni architecto maiores repudiandae quis,', 'a (1).jpg', '2022-12-12 02:36:38', '2022-12-12 02:36:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Jamar', 'jamar123@gmail.com', NULL, '$2y$10$pSnVceyg0nxv1FEI.IW5oOsrfhwbsHG/jBMpPV/V0.cuG7sgrEngW', NULL, '2022-12-03 09:19:55', '2022-12-03 09:19:55', ''),
(5, 'gc', 'grace@gmail.com', NULL, '12345', NULL, '2022-12-11 01:23:10', '2022-12-11 01:23:10', 'GC.jpg'),
(6, 'admin', 'admin123@gmail.com', NULL, '123', NULL, '2022-12-12 01:28:23', '2022-12-12 01:28:23', 'hinggil2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_home`
--
ALTER TABLE `banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner_promo`
--
ALTER TABLE `banner_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `banner_home`
--
ALTER TABLE `banner_home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `banner_promo`
--
ALTER TABLE `banner_promo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fiturs`
--
ALTER TABLE `fiturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
