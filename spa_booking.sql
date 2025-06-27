-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2025 lúc 07:01 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spa_booking`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Nguyễn Thị Mai Lan', 'mailan01@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(2, 'Trần Văn Khánh', 'khanhtran02@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(3, 'Lê Thị Hồng Nhung', 'nhungle03@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(4, 'Phạm Minh Quân', 'minhquan04@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(5, 'Hoàng Thị Kim Ngân', 'kimngan05@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(6, 'Đỗ Văn Long', 'longdo06@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(7, 'Vũ Thị Thanh', 'thanhvu07@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(8, 'Bùi Minh Châu', 'minhchau08@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(9, 'Ngô Thị Bích Hạnh', 'bichhanh09@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(10, 'Lý Văn Dũng', 'dungly10@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(11, 'Phan Thị Tuyết', 'tuyetphan11@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(12, 'Huỳnh Gia Huy', 'huyhuynh12@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(15, 'Dương Thị Ánh', 'anhduong15@gmail.com', '123456', 'user', '2025-06-26 23:52:21'),
(16, 'Quản Trị Viên', 'admin@spabooking.vn', '$2y$10$wxMR91zJmmKVSwomxtM3qugaHTjD7Ok/ksoW2PRau1cZkw2UERGam', 'admin', '2025-06-26 23:52:22'),
(17, 'Nguyễn Thanh Sơn', 'nguyenthanhson@gmail.com', '$2y$10$OJTeymxMtqzW2T6ZEJsvIOLyNa.hfau6s97qZqZXer/LPGQCwZhSu', 'user', '2025-06-27 15:05:25'),
(19, 'Huỳnh Minh Chương', 'chuonghuynh@gmail.com', '$2y$10$M43yB.Mahcw0WnU1OAqJLOwNoOxWYNJF0gc6fA44zjrEGqIoPLSye', 'user', '2025-06-27 16:18:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
