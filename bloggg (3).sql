-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 19 Jan 2018 pada 17.20
-- Versi Server: 10.0.31-MariaDB-0ubuntu0.16.04.2
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloggg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'Laravel', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Bootstrap', 'Bootstrap', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'HTML CSS', 'html', '2018-01-16 17:00:00', NULL),
(4, 'PHP', 'php', '2018-01-16 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forums`
--

CREATE TABLE `forums` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `forums`
--

INSERT INTO `forums` (`id`, `judul`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 'Laravel', 'Cara instal laravel ?', 2, '2018-01-19 01:36:22', '2018-01-19 01:36:22');

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
(1, '2017_09_04_075839_create_categories_table', 1),
(2, '2017_09_04_080029_create_posts_table', 2),
(3, '2017_09_04_080158_create_comments_table', 3),
(4, '2018_01_08_032924_create_images_table', 4),
(5, '2018_01_19_032108_create_forums_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('muhammadfatichulichsan@gmail.com', '$2y$10$sbl/ZNciV8dH7PqtHNI8nOpEF87VBXZV1PgzEMdtdfMTJFFGJNkgC', '2018-01-08 00:37:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `slug`, `content`, `created_at`, `updated_at`, `link`) VALUES
(9, 1, 'Route Dan View Laravel', 'Route Dan View Laravel', 'Semua rute Laravel didefinisikan dalam file rute Anda, yang berada di dalam routesdirektori. File-file ini secara otomatis dimuat oleh framework. The berkas mendefinisikan rute yang untuk antarmuka web Anda. Rute ini diberi grup middleware, yang menyediakan fitur seperti status sesi dan perlindungan CSRF. Rute di negara tanpa kewarganegaraan dan diberi grup middleware.routes/web.php webroutes/api.php api\r\n\r\nUntuk sebagian besar aplikasi, Anda akan mulai dengan menentukan rute di file Anda . Rute yang didefinisikan dapat diakses dengan memasukkan URL rute yang ditentukan di browser Anda. Misalnya, Anda dapat mengakses rute berikut dengan menavigasi ke dalam browser Anda:routes/web.php routes/web.php http://your-app.dev/user', '2018-01-16 18:31:02', '2018-01-16 18:31:02', 'https://www.youtube.com/embed/6TDRPbJXJtQ'),
(11, 2, 'NGOBAR #1 : Membuat Website Portfolio dengan Bootstrap 3', 'ngobar-1-membuat-website-portfolio-dengan-bootstrap-3', 'Membuat Website Portfolio dengan Bootstrap 3', '2018-01-16 20:59:39', '2018-01-16 20:59:39', 'https://www.youtube.com/embed/NNW7Tg8CgAQ'),
(12, 2, 'NGOBAR #2 : Membuat NAVBAR & SMOOTH SCROLLING dengan BOOTSTRAP 3 & JQUERY', 'ngobar-2-membuat-navbar-smooth-scrolling-dengan-bootstrap-3-jquery', 'Membuat NAVBAR & SMOOTH SCROLLING dengan BOOTSTRAP 3 & JQUERY', '2018-01-16 21:00:50', '2018-01-16 21:00:50', 'https://www.youtube.com/embed/btYCEsKJ5k4'),
(13, 1, 'NGOBAR #3 : MEMBUAT PARALLAX EFFECT pada WEBSITE', 'ngobar-3-membuat-parallax-effect-pada-website', 'MEMBUAT PARALLAX EFFECT pada WEBSITE', '2018-01-16 21:02:05', '2018-01-16 21:02:05', 'https://www.youtube.com/embed/cEkCIn4rY4Q'),
(14, 1, 'Controller Dan Blade Laravel', 'controller-dan-blade-laravel', 'Tutorial Dasar Controller Dan Blade Laravel', '2018-01-16 23:08:47', '2018-01-16 23:08:47', 'https://www.youtube.com/embed/qDmnNmXwizg'),
(15, 1, 'Sistem templating blade', 'sistem-templating-blade', 'tutorial dasar sistem templating blade', '2018-01-16 23:10:01', '2018-01-16 23:10:01', 'https://www.youtube.com/embed/SMmdjlyM7Vk'),
(16, 1, 'mengenal eloquent', 'mengenal-eloquent', 'Dasar mengenal eloquent', '2018-01-16 23:11:52', '2018-01-16 23:11:52', 'https://www.youtube.com/embed/2mnZMs1egYs'),
(17, 1, 'Crud Elequent', 'crud-elequent', 'Dasar Crud Elequent', '2018-01-16 23:12:49', '2018-01-16 23:12:49', 'https://www.youtube.com/embed/I0IpPdNAlL8'),
(18, 1, 'Insert Dan Update', 'insert-dan-update', 'Dasar  Insert Dan Update', '2018-01-16 23:13:51', '2018-01-16 23:13:51', 'https://www.youtube.com/embed/zT8bG7kZkb8'),
(19, 1, 'Membuat halaman 404 dan Soft delete Laravel', 'membuat-halaman-404-dan-soft-delete-laravel', 'Dasar Membuat halaman 404 dan Soft delete Laravel', '2018-01-17 01:55:30', '2018-01-17 01:55:30', 'https://www.youtube.com/embed/c1mypJGc0rk'),
(20, 1, 'Dasar Validasi  Laravel', 'dasar-validasi-laravel', 'Dasar Validasi Di Laravel Guna Saat update ataupun insert data', '2018-01-17 01:58:16', '2018-01-17 01:58:16', 'https://www.youtube.com/embed/0VMa-xhRW-c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Fatichul Ichsan', 'muhammadfatichulichsan@gmail.com', '$2y$10$lrB/N4ybfIDfNKjzgBp3jej0KMmrcLbI3WsczMfj4qJaANzqy9rKK', 1, 'RywWHdaEpAA0CEc48oMwSjWATyaHI386MeaN4PkZXmnxZt90N4q5SLVbTMCq', '2018-01-06 01:46:18', '2018-01-06 01:46:18'),
(2, 'Andi Bagus', 'mmuhammadfatichulichsan@gmail.com', '$2y$10$qmPVeN1voqH0.ijWkFIPYulknwv6MYA96iM4XyL5IRUmocsrSLh6a', 0, 'gUHLqSKR4XArJr5PwKCYahvPatVjfWZnxocLj2933SpUuKfSnNg3I3B4uiC5', '2018-01-19 00:55:59', '2018-01-19 00:55:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
