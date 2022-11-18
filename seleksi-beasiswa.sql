-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 03:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seleksi-beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `nama_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Suharjo', 'admin@gmail.com', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int(10) UNSIGNED NOT NULL,
  `nama_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countdown` datetime DEFAULT NULL,
  `awal_daftar` date DEFAULT NULL,
  `akhir_daftar` date DEFAULT NULL,
  `pengumuman` date DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `deskripsi`, `countdown`, `awal_daftar`, `akhir_daftar`, `pengumuman`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SELEKSI BARU BEASISWA PROGRAM KIP KULIAH ANGKATAN 2022', 'Beasiswa KIP adalah program bantuan biaya pendidikan (beasiswa) dari Pemerintah melalui Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemdikbudristek) bekerja sama dengan Politeknik Caltex Riau', NULL, '2022-10-05', '2022-11-23', '2022-12-23', '0', '2022-11-02 05:41:45', NULL),
(2, 'SELEKSI BARU BEASISWA PRESTASI DALAM PROVINSI RIAU PROGRAM DOKTORAL (S3) ANGKATAN 2022', 'Beasiswa ini adalah beasiswa program Doktoral(S3) tahun 2022', NULL, '2022-09-07', '2022-11-15', '2022-12-22', '0', '2022-11-02 05:42:07', NULL),
(3, 'SELEKSI BARU BEASISWA PRESTASI DALAM PROVINSI RIAU ANGKATAN 2021 PROGRAM MAGISTER (S2) TAHUN 2022', 'Beasiswa ini adalah beasiswa program Magister(S2) tahun 2022', NULL, '2022-11-16', '2022-12-15', '2023-01-18', '0', '2022-11-02 05:43:42', NULL),
(4, 'SELEKSI BARU BEASISWA PRESTASI JALUR TAHFIZ QUR\'AN ANGKATAN 2022 PROGRAM D3/D4 DAN S1 PEMERINTAH', 'Beasiswa ini adalah beasiswa program JALUR TAHFIZ QUR\'AN tahun 2022', NULL, '2022-11-09', '2022-12-14', '2023-01-25', '0', '2022-11-02 05:44:13', NULL),
(5, 'SELEKSI BARU BEASISWA PRESTASI PROGRAM S1/D4 PEMERINTAH PROVINSI RIAU ANGKATAN TAHUN 2021', 'Beasiswa ini adalah beasiswa program S1/D4 Pemprov Riau tahun 2022', NULL, '2022-12-06', '2023-01-10', '2023-02-23', '0', '2022-11-02 05:44:41', NULL),
(6, 'SELEKSI BARU BEASISWA BIDIKMISI BHAKTI NEGERI PROGRAM S1 ANGKATAN TAHUN 2022 PEMERINTAH PROVINSI RIAU', 'Beasiswa ini adalah beasiswa program S1 Bidikmisi Bhakti Negeri tahun 2022', NULL, '2022-11-08', '2022-12-31', '2023-01-26', '0', '2022-11-02 05:45:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berkas_lanjutan`
--

CREATE TABLE `berkas_lanjutan` (
  `id_berkas_lanjutan` bigint(20) UNSIGNED NOT NULL,
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `ukt` int(11) NOT NULL,
  `nilai_ukt` int(11) NOT NULL,
  `nama_ayah` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `nama_ibu` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `total_penghasilan_perjumlahAnggota` int(11) NOT NULL,
  `jml_anggota` int(11) NOT NULL,
  `filename_status_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename_status_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename_status_kip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename_status_tdk_mampu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename_status_kks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ayah` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_ibu` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_kip` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_tdk_mampu` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `status_kks` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `hasil` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berkas_lanjutan`
--

INSERT INTO `berkas_lanjutan` (`id_berkas_lanjutan`, `id_mahasiswa`, `ukt`, `nilai_ukt`, `nama_ayah`, `penghasilan_ayah`, `nama_ibu`, `penghasilan_ibu`, `total_penghasilan_perjumlahAnggota`, `jml_anggota`, `filename_status_ayah`, `filename_status_ibu`, `filename_status_kip`, `filename_status_tdk_mampu`, `filename_status_kks`, `status_ayah`, `status_ibu`, `status_kip`, `status_tdk_mampu`, `status_kks`, `hasil`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 4, 1, 2400000, 'Asbet simbolon', 2400000, 'Nurani Simanjuntak', 300000, 900000, 3, 'Rizky nathamael_status_ayah_202211020637.pdf', 'Rizky nathamael_status_ibu_202211020637.pdf', 'Rizky nathamael_kip_202211020637.pdf', 'Rizky nathamael_status_tdk_mampu_202211020637.pdf', 'Rizky nathamael_kks_202211020637.pdf', '1', '1', '1', '1', '1', '1', NULL, NULL, '2022-11-06 01:44:13'),
(8, 5, 2, 1825000, 'John arya', 3400000, 'mawar melik', 500000, 975000, 4, 'Arya mas_status_ayah_202211061413.pdf', 'Arya mas_status_ibu_202211061413.pdf', 'Arya mas_kip_202211061413.pdf', 'Arya mas_status_tdk_mampu_202211061413.pdf', 'Arya mas_kks_202211061413.pdf', '1', '0', '1', '1', '1', '1', NULL, NULL, '2022-11-06 07:26:19');

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
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(10) UNSIGNED NOT NULL,
  `nama_fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(2, 'Dakwah dan Komunikasi\r\n'),
(1, 'Ekonomi dan Ilmu Sosial'),
(6, 'Pertanian dan Peternakan\r\n'),
(8, 'Psikologi\r\n'),
(3, 'Sains dan Teknologi\r\n'),
(5, 'Syari\'ah dan Hukum\r\n'),
(4, 'Tarbiyah dan Perguruan\r\n'),
(7, 'Ushuluddin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `id_fakultas` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_ukt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_fakultas`, `nama_jurusan`, `nilai_ukt`) VALUES
(1, 1, 'Ilmu Administrasi Negara\r\n', 2400000),
(2, 2, 'Bimb. Konseling Islam\r\n', 2400000),
(4, 3, 'Teknik Industri\r\n', 3600000),
(6, 5, 'Ilmu Hukum\r\n', 3200000),
(7, 4, 'Pendidikan Bahasa Inggris\r\n', 2550000),
(8, 4, 'Pendidikan Agama Islam\r\n', 3220000),
(9, 4, 'Pendidikan Bahasa Indonesia\r\n', 3220000),
(10, 4, 'Pendidikan Geografi\r\n', 2400000),
(11, 1, 'Akuntansi\r\n', 2400000),
(12, 4, 'Pendidikan Guru MI\r\n', 2800000),
(13, 5, 'Hk. Ekonomi Syariah (Mua)\r\n', 2400000),
(14, 4, 'Manajemen Pend. Islam\r\n', 3220000),
(15, 4, 'Tadris IPA\r\n', 4140000),
(16, 5, 'Ekonomi Syariah\r\n', 1925000),
(17, 6, 'Agroteknologi\r\n', 2000000),
(18, 4, 'Bimbingan dan Konseling Pendidikan Islam\r\n', 2400000),
(19, 4, 'Pendidikan Matematika', 1925000),
(20, 4, 'Pend. Islam Anak Usia Dini\r\n', 1000000),
(21, 4, 'Pendidikan Ekonomi\r\n', 1925000),
(22, 7, 'Studi Agama Agama\r\n', 1825000),
(24, 4, 'Tadris IPS\r\n', 2600000),
(25, 6, 'Peternakan\r\n', 2000000),
(26, 6, 'GIZI\r\n', 2750000),
(27, 3, 'Teknik Informatika\r\n', 2250000),
(29, 8, 'Psikologi\r\n', 1925000),
(32, 5, 'Hk. Tata Negara (Siyasah)\r\n', 1825000),
(33, 7, 'Ilmu Alquran dan Tafsir\r\n', 400000),
(34, 7, 'Ilmu Hadis\r\n', 1825000),
(35, 4, 'Pendidikan Bahasa Arab\r\n', 400000),
(38, 2, 'Ilmu Komunikasi\r\n', 3200000),
(39, 3, 'Teknik Elektro', 2075000),
(40, 7, 'Studi Agama Agama', 1825000),
(41, 4, 'Tadris IPS', 2600000),
(42, 5, 'Hk. Tata Negara (Siyasah)', 1825000),
(43, 7, 'Ilmu Alquran dan Tafsir', 400000),
(44, 7, 'Ilmu Hadis', 400000),
(45, 3, 'Matematika', 2900000),
(46, 2, 'Peng. Masyarakat Islam', 2400000),
(47, 5, 'Hukum Keluarga (AH)', 2400000),
(48, 1, 'Manajemen', 1825000),
(49, 5, 'Perbandingan Madzhab', 2800000),
(50, 2, 'Manajemen Dakwah', 1925000),
(51, 3, 'Sistem Informasi', 2900000),
(52, 7, 'Aqidah dan Filsafat Islam', 2400000),
(53, 4, 'Pendidikan Kimia', 3600000),
(54, 1, 'D-III Perpajakan', 2400000),
(55, 1, 'D-III Man. Perusahaan', 1825000),
(56, 5, 'D-III Perbankan Syariah', 3200000),
(57, 1, 'D-III Akuntansi', 3200000);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `fakultas` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_beasiswa` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `email`, `nama_mhs`, `password`, `tgl_lahir`, `fakultas`, `jurusan`, `status_beasiswa`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, '2057301116', 'rizky@gmail.com', 'Rizky nathamael', 'rizky', '2022-11-01', 'Ekonomi dan Ilmu Sosial', 'Ilmu Alquran dan Tafsir', '1', NULL, '2022-10-20 15:18:28', '2022-10-20 15:18:28'),
(5, '2057301145', 'arya@gmail.com', 'Arya mas', 'arya', '2022-11-01', 'Ekonomi dan Ilmu Sosial', 'Ilmu Alquran dan Tafsir', '1', NULL, '2022-10-29 19:19:18', '2022-10-29 19:19:18');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_17_142353_mahasiswa', 1),
(6, '2022_10_17_144102_mahasiswa', 2),
(7, '2022_10_17_152756_mahasiswa', 3),
(8, '2022_10_17_153018_mahasiswa', 4),
(9, '2022_10_20_063653_mahasiswa', 5),
(10, '2022_10_20_063903_berkas_lanjutan', 6),
(11, '2022_10_24_122723_fakultas', 7),
(12, '2022_10_24_122650_jurusan', 8),
(13, '2022_10_24_123431_jurusan', 9),
(14, '2022_10_29_114919_admin', 10),
(15, '2022_10_29_115358_admin', 11),
(16, '2022_11_02_051354_beasiswa', 12),
(17, '2022_11_02_053431_beasiswa', 13),
(18, '2022_11_02_053904_beasiswa', 14),
(19, '2022_11_02_054109_beasiswa', 15);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admin_email_admin_unique` (`email_admin`);

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `berkas_lanjutan`
--
ALTER TABLE `berkas_lanjutan`
  ADD PRIMARY KEY (`id_berkas_lanjutan`),
  ADD KEY `berkas_lanjutan_id_mahasiswa_foreign` (`id_mahasiswa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`),
  ADD UNIQUE KEY `fakultas_nama_fakultas_unique` (`nama_fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `fakultas_nama_jurusan_unique` (`nama_jurusan`),
  ADD KEY `jurusan_id_fakultas_foreign` (`id_fakultas`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berkas_lanjutan`
--
ALTER TABLE `berkas_lanjutan`
  MODIFY `id_berkas_lanjutan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkas_lanjutan`
--
ALTER TABLE `berkas_lanjutan`
  ADD CONSTRAINT `berkas_lanjutan_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_id_fakultas_foreign` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
