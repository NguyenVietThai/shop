-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2018 lúc 05:34 AM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `homestead`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `product` varchar(100) NOT NULL,
  `qty` int(30) NOT NULL,
  `price` int(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `total` int(100) NOT NULL,
  `options` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`product`, `qty`, `price`, `size`, `total`, `options`) VALUES
('Áo thun Nam 10001L', 2, 300000, 'L', 600000, ''),
('Áo thun Nam 10001L\r\n', 10, 69850000, 'L', 1324650000, 'blablabla\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(30) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('thaicpb11@gmail.com', '$2y$10$agxCevz3pcTV7MIHD2oRPeNGHLYCDwI3tkyzqtZmNL.hklLOpoSaW', '2018-11-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `img3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `description`, `name`, `price`, `quantity`, `img1`, `img2`, `img3`, `created_at`, `updated_at`) VALUES
(3, 1, 'Chất lượng tốt', 'Áo thun Nam 10001L', 300000, 30, '1542508020benxe.jpg', '1542508021cach-luoc-mang-tay-ngon-0.jpg', '1542508021images.jpg', '2018-11-07 02:25:57', '2018-11-17 19:27:01'),
(4, 2, 'chất lượng rất tốt', 'Áo sơ mi Nam 24007L', 350000, 20, 'default.png', '1542411789avatar.jpg', 'default.png', '2018-11-07 03:08:03', '2018-11-16 16:43:09'),
(5, 5, 'chất lượng tốt', 'Đầm nữ 23000XL', 510000, 30, '1541592751dam_nu_39__1__500x750.jpg', '1541593044dam_nu_39__1__500x750.jpg', '1541593044dam_nu_39__1__500x750.jpg', '2018-11-07 03:09:27', '2018-11-07 05:17:24'),
(6, 3, 'quần short đời mới', 'Quần short nữ 10034XL', 50000, 12, 'default.png', 'default.png', 'default.png', '2018-11-07 03:15:21', '2018-11-07 03:15:21'),
(7, 5, 'đầm Trung Quốc', 'Đầm nữ 46000L', 250000, 20, 'default.png', 'default.png', 'default.png', '2018-11-07 03:19:12', '2018-11-07 03:19:12'),
(8, 1, 'chất liệu và thiết kết tốt', 'Áo thun nữ 2000XS', 450000, 5, 'default.png', 'default.png', 'default.png', '2018-11-07 03:28:15', '2018-11-07 03:28:15'),
(9, 2, 'Chất liệu tốt', 'Áo sơ mi Nữ 57000XL', 650000, 40, 'default.png', 'default.png', 'default.png', '2018-11-07 03:29:09', '2018-11-07 03:29:09'),
(10, 1, 'thiết kế đẹp', 'Áo thun Nam 10045XL', 150000, 30, '1541593019thun_nam_5__1__500x750.jpg', '1541593019thun_nam_5__1__500x750.jpg', '1541593019thun_nam_5__1__500x750.jpg', '2018-11-07 03:29:47', '2018-11-07 05:16:59'),
(11, 3, 'thiết kế đẹp', 'Quần short Nam 7811XL', 560000, 29, 'default.png', 'default.png', 'default.png', '2018-11-07 03:30:26', '2018-11-07 03:30:44'),
(12, 2, 'tốt', 'Áo sơ mi Nam 1600XL', 100000, 10, 'default.png', 'default.png', 'default.png', '2018-11-07 04:33:51', '2018-11-07 04:33:51'),
(13, 4, 'chất lượng tốt', 'Quần Jean Nam 1998101', 100000, 10, '1541621593pencil.jpg', 'default.png', 'default.png', '2018-11-07 13:13:13', '2018-11-07 13:13:13'),
(14, 1, 'tốt', 'Áo thun Nam 20147XL', 200000, 10, '1541622031product-03.jpg', 'default.png', 'default.png', '2018-11-07 13:20:31', '2018-11-07 13:20:31'),
(15, 1, 'Mẫu mới nhất 2018', 'Áo thun Adidas 2018', 500000, 5, '1542508411benxe.jpg', '1542508411xe.jpg', '1542508411xe.jpg', '2018-11-17 19:33:32', '2018-11-17 19:33:32'),
(16, 4, 'Loại mới nhất', 'Quần bò Nam 2018', 1000000, 13, '1542510143jean1.jpg', '1542510143jean2.jpg', '1542510143jean3.jpg', '2018-11-17 20:02:24', '2018-11-17 20:02:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Tran My Hanh', 'tranhanh@gmail.com', '$2y$10$qwNMzpvhm3Lkv80YeGkLCu0FzjpRIpBokk7HXZ0yR8xwWLgexN7jy', '2018-11-17', '2018-11-17'),
(2, 'thai', 'thaicpb11@gmail.com', '$2y$10$.nMs2mStBmmGwqN15MHf4.e3QUBdG0waEv24DzjHD3PZoJmrsiNNG', '2018-11-17', '2018-11-17'),
(3, 'thai', 'thai@gmail.com', '$2y$10$/s9XtQXwJ8EP.NwHEGzNaeo1dzzWC4IUwSdnfl04blWmMBRyzURQe', '2018-11-17', '2018-11-17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
