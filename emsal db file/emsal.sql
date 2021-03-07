-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Mar 2021, 18:04:31
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `emsal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `room_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test Mesajı Mehmet', '2021-03-01 14:48:40', '2021-03-01 14:48:40'),
(2, 1, 1, 'mesaj Mehmet', '2021-03-02 14:26:15', '2021-03-02 14:26:15'),
(5, 2, 1, 'Test Umut', '2021-03-02 14:54:24', '2021-03-02 14:54:24'),
(6, 1, 1, 'TEst 2 Mehmet', '2021-03-02 14:54:24', '2021-03-02 14:54:24'),
(8, 2, 1, 'mehmet nasılsın ', '2021-03-02 15:31:46', '2021-03-02 15:31:46'),
(9, 1, 1, 'Bu Mesaj Mehmet TArafından gönderildi', '2021-03-02 17:12:16', '2021-03-02 17:12:16'),
(10, 1, 1, 'Bu Mesaj Mehmet TArafından gönderildi', '2021-03-02 17:12:20', '2021-03-02 17:12:20'),
(11, 1, 1, 'deneme mesajı', '2021-03-02 17:13:14', '2021-03-02 17:13:14'),
(12, 2, 1, 'umut deneme mesajı', '2021-03-02 17:13:40', '2021-03-02 17:13:40'),
(18, 1, 1, 'Denemeeeeee', '2021-03-02 18:41:40', '2021-03-02 18:41:40'),
(19, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:16:42', '2021-03-03 17:16:42'),
(20, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:17:42', '2021-03-03 17:17:42'),
(22, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:21:42', '2021-03-03 17:21:42'),
(23, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:21:42', '2021-03-03 17:21:42'),
(24, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:25:42', '2021-03-03 17:25:42'),
(25, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:25:42', '2021-03-03 17:25:42'),
(26, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:26:42', '2021-03-03 17:26:42'),
(27, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:26:42', '2021-03-03 17:26:42'),
(28, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:27:42', '2021-03-03 17:27:42'),
(29, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20', '2021-03-03 17:27:42', '2021-03-03 17:27:42'),
(30, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20:28', '2021-03-03 17:28:42', '2021-03-03 17:28:42'),
(31, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20:28', '2021-03-03 17:28:42', '2021-03-03 17:28:42'),
(32, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20:29', '2021-03-03 17:29:42', '2021-03-03 17:29:42'),
(33, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20:29', '2021-03-03 17:29:42', '2021-03-03 17:29:42'),
(34, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20:30', '2021-03-03 17:30:42', '2021-03-03 17:30:42'),
(35, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20:30', '2021-03-03 17:30:42', '2021-03-03 17:30:42'),
(36, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20:36', '2021-03-03 17:36:27', '2021-03-03 17:36:27'),
(37, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20:36', '2021-03-03 17:36:27', '2021-03-03 17:36:27'),
(38, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !20:43', '2021-03-03 17:43:23', '2021-03-03 17:43:23'),
(39, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !20:43', '2021-03-03 17:43:23', '2021-03-03 17:43:23'),
(41, 3, 1, 'Alarm Çalıyor GUK GUK SAAT !21:09', '2021-03-03 18:09:53', '2021-03-03 18:09:53'),
(42, 3, 2, 'Alarm Çalıyor GUK GUK SAAT !21:09', '2021-03-03 18:09:54', '2021-03-03 18:09:54'),
(44, 1, 1, 'Deneme Mesajı', '2021-03-07 16:02:17', '2021-03-07 16:02:17'),
(45, 1, 2, 'Deneme Mesaj Odası 2\r\n,', '2021-03-07 16:02:40', '2021-03-07 16:02:40'),
(46, 2, 1, 'Deneme Mesajı Umut', '2021-03-07 16:06:15', '2021-03-07 16:06:15'),
(47, 1, 1, 'deneme test', '2021-03-07 16:47:28', '2021-03-07 16:47:28'),
(48, 1, 1, '12345678910', '2021-03-07 16:47:41', '2021-03-07 16:47:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_01_170707_create_rooms_table', 1),
(5, '2021_03_01_172015_create_messages_table', 1),
(6, '0000_00_00_000000_create_websockets_statistics_entries_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('publish','passive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'passive',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Mesaj Odası1', 'publish', 'Bu Mesaj Odasının Açıklaması Mesaj Odası1', '2021-03-01 14:48:40', '2021-03-01 14:48:40'),
(2, 'Mesaj Odası 2', 'publish', 'Bu Mesaj Odasının Açıklaması Mesaj Odası2', '2021-03-01 17:54:58', '2021-03-01 17:54:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehmet Parlak', 'mhmttparlak@gmail.com', '2021-03-01 14:48:40', '$2b$10$pL4ML77DYChNciipQpAkJ.KujUxqPgQ5McVeFVkx9hAgsRNnYx6W6', 'wJW3MJy9ELV0t1cWreDwitPmeCsMWERtJe8j66TDuCl5P7Uie02wmsFBfdxJ', NULL, NULL),
(2, 'Umut Test', 'mhmttparlak123@gmail.com', NULL, '$2y$10$UsyP31k/JIgL0pZub9yhneGHyYRooFZRYt7RmJrlIjhBe1yE3/sFK', NULL, '2021-03-02 11:33:17', '2021-03-02 11:33:17'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$dXVHX7wIrPMAsRxc5E843.ZalHJLQ2sCY2r.Kt1raCCckKXDmmBVq', NULL, '2021-03-03 17:12:20', '2021-03-03 17:12:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_room_id_foreign` (`room_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Tablo için indeksler `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
