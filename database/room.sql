-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 16, 2023 lúc 11:43 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chatbot`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id_room` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_history` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_room` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `id_user`, `code_history`, `name_room`, `created_at`, `updated_at`) VALUES
(1, 1, '763fceb3c3780ed', '', '2023-03-25 01:41:52', '2023-04-12 01:41:52'),
(2, 1, '9cf18671f6c7e5f', '', '2023-02-24 02:18:54', '2023-04-24 02:18:54'),
(3, 1, '8d4dd827d46bfa5', '', '2022-04-24 02:26:49', '2023-04-24 02:26:49'),
(4, 1, '2a74e95a17adbce', '', '2023-04-24 02:27:56', '2023-04-24 02:27:56'),
(5, 1, 'cc156de965ce533', '', '2023-04-24 02:29:03', '2023-04-24 02:29:03'),
(6, 1, '74d07c42f945f62', '', '2023-04-24 02:42:50', '2023-04-24 02:42:50'),
(7, 1, 'fd2b3ed63600514', '', '2023-04-24 02:46:25', '2023-04-24 02:46:25'),
(8, 1, 'c0b60a18b8e3e8b', 'UTT', '2023-04-24 02:47:31', '2023-04-24 02:47:37'),
(9, 1, '289c873c6d5d89a', '', '2023-04-25 01:35:53', '2023-04-25 01:35:53'),
(10, 1, '286180cefea11e4', '', '2023-05-16 02:05:42', '2023-05-16 02:05:42'),
(11, 1, 'a330cf329a00856', '', '2023-05-16 02:22:21', '2023-05-16 02:22:21'),
(12, 1, '8e69ce1c672725e', '', '2023-05-16 02:30:13', '2023-05-16 02:30:13'),
(13, 1, '70fbd9734f7ccb0', '', '2023-05-16 02:31:13', '2023-05-16 02:31:13'),
(14, 1, 'fcd61adb7cd690d', '', '2023-05-16 02:42:49', '2023-05-16 02:42:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
