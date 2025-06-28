-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 27, 2025 lúc 07:10 PM
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
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `payment_method` enum('pay_on_spot','online') DEFAULT 'pay_on_spot',
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `full_name`, `phone`, `email`, `category_id`, `service_id`, `booking_date`, `booking_time`, `payment_method`, `note`, `created_at`) VALUES
(1, 3, 'Lê Thị Hồng Nhung', '0952186830', 'nhungle03@gmail.com', 2, 20, '2025-07-11', '14:30:00', 'pay_on_spot', 'Yêu cầu kỹ thuật viên nữ.', '2025-06-27 03:14:32'),
(2, 8, 'Bùi Minh Châu', '0942584308', 'minhchau08@gmail.com', 3, 24, '2025-07-01', '14:00:00', 'pay_on_spot', 'Khách đặt theo gói ưu đãi.', '2025-06-27 03:14:32'),
(3, 7, 'Vũ Thị Thanh', '0991575673', 'thanhvu07@gmail.com', 4, 34, '2025-06-30', '18:30:00', 'pay_on_spot', 'Khách đặt theo gói ưu đãi.', '2025-06-27 03:14:32'),
(4, 9, 'Ngô Thị Bích Hạnh', '0991281121', 'bichhanh09@gmail.com', 2, 13, '2025-07-02', '11:00:00', 'pay_on_spot', 'Liên hệ trước khi đến.', '2025-06-27 03:14:32'),
(5, 2, 'Trần Văn Khánh', '0911048432', 'khanhtran02@gmail.com', 1, 1, '2025-07-11', '14:30:00', 'pay_on_spot', 'Khách đặt theo gói ưu đãi.', '2025-06-27 03:14:32'),
(6, NULL, 'Phạm Hoài Kiệt', '0939790320', 'phamkiet22114@gmail.com', 1, 9, '2025-11-22', '09:00:00', 'pay_on_spot', 'oke', '2025-06-27 14:35:39'),
(7, 17, 'Nguyễn Thanh Sơn', '0939790320', 'nguyenthanhson@gmail.com', 2, 20, '2025-08-30', '10:00:00', 'pay_on_spot', 'dị ứng hải sản', '2025-06-27 16:21:58'),
(8, 17, 'Nguyễn Thanh Sơn', '0939790320', 'nguyenthanhson@gmail.com', 1, 10, '2025-09-25', '11:00:00', 'pay_on_spot', 'không có', '2025-06-27 16:27:40'),
(9, 17, 'Phạm Hoài Kiệt', '0939790320', 'phamkiet22114@gmail.com', 1, 10, '2025-11-22', '16:00:00', 'pay_on_spot', 'không có note', '2025-06-27 16:30:37'),
(10, 17, 'Phạm Hoài Kiệt', '0939790320', 'admin@gmail.com', 1, 1, '2025-11-22', '14:00:00', 'pay_on_spot', 'không có', '2025-06-27 16:32:10'),
(11, 17, 'Phạm Hoài Kiệt', '0939790320', 'phamkiet22114@gmail.com', 1, 10, '2025-11-22', '15:00:00', 'pay_on_spot', 'không có 3', '2025-06-27 16:34:08'),
(12, 17, 'Nguyễn Hoàng Phương Ling', '0939790320', '2251150058@ut.edu.vn', 2, 18, '2026-06-29', '16:00:00', 'pay_on_spot', 'yêu cầu cao', '2025-06-27 16:42:19'),
(13, 17, 'Hoàng Tiểu Mỹ', '0939790320', '2251150058@ut.edu.vn', 1, 6, '2026-06-25', '14:00:00', 'pay_on_spot', '', '2025-06-27 16:45:35'),
(14, 17, 'Nguyễn Hoàng Phương Linh', '0939790320', 'admin@gmail.com', 2, 13, '2026-06-25', '10:00:00', 'pay_on_spot', 'không có', '2025-06-27 16:47:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `category_id`, `title`, `image_path`, `description`, `price`, `duration`) VALUES
(1, 1, 'Chăm Sóc Da Cơ Bản', 'chamsocda1.jpg', 'Làm sạch sâu, cân bằng da, giúp da tươi sáng, mịn màng.', 450000.00, NULL),
(2, 1, 'Trị Mụn Chuyên Sâu', 'chamsocda2.jpg', 'Liệu trình làm sạch mụn, giảm viêm, ngăn ngừa sẹo, phục hồi da.', 750000.00, NULL),
(3, 1, 'Trẻ Hóa Nâng Cơ', 'chamsocda3.jpg', 'Cải thiện độ đàn hồi, giảm nếp nhăn, nâng cơ mặt hiệu quả.', 900000.00, NULL),
(4, 1, 'Dưỡng Trắng Sáng Da', 'chamsocda4.jpg', 'Giảm thâm nám, đều màu da, mang lại làn da trắng hồng rạng rỡ.', 800000.00, NULL),
(5, 1, 'Phục Hồi Da Nhạy Cảm', 'chamsocda5.jpg', 'Làm dịu da kích ứng, cấp ẩm sâu, tăng cường hàng rào bảo vệ da.', 700000.00, NULL),
(6, 1, 'Chăm Sóc Mắt Chuyên Biệt', 'chamsocda6.jpg', 'Giảm quầng thâm, bọng mắt, nếp nhăn vùng mắt, giúp mắt tươi trẻ.', 350000.00, NULL),
(7, 1, 'Thải Độc Da Mặt', 'chamsocda7.jpg', 'Loại bỏ độc tố, bụi bẩn sâu, giúp da thanh lọc, khỏe mạnh từ bên trong.', 600000.00, NULL),
(8, 1, 'Cấp Ẩm Chuyên Sâu', 'chamsocda8.jpg', 'Bổ sung độ ẩm tối đa, làm mềm mượt da khô, bong tróc.', 650000.00, NULL),
(9, 1, 'Chăm Sóc Da Nam Giới', 'chamsocda9.jpg', 'Liệu trình riêng biệt, làm sạch, cân bằng da, giảm dầu cho nam giới.', 500000.00, NULL),
(10, 1, 'Mặt Nạ Dưỡng Chất', 'chamsocda10.jpg', 'Tùy chọn mặt nạ phù hợp từng loại da, cấp dưỡng chất tức thì.', 250000.00, NULL),
(11, 2, 'Trẻ Hóa Da Laser', 'trilieu1.jpg', 'Xóa nhăn, làm đều màu, se khít lỗ chân lông bằng công nghệ laser hiện đại.', 1500000.00, NULL),
(12, 2, 'Nâng Cơ Hifu', 'trilieu2.jpg', 'Nâng cơ, săn chắc da không phẫu thuật, trẻ hóa gương mặt.', 2500000.00, NULL),
(13, 2, 'Trị Nám Tàn Nhang', 'trilieu3.jpg', 'Sử dụng công nghệ cao loại bỏ nám, tàn nhang, làm sáng da.', 1800000.00, NULL),
(14, 2, 'Triệt Lông Vĩnh Viễn', 'trilieu4.jpg', 'Loại bỏ lông không mong muốn, an toàn, hiệu quả dài lâu.', 600000.00, NULL),
(15, 2, 'Giảm Béo Công Nghệ', 'trilieu5.jpg', 'Phá hủy mỡ thừa, định hình vóc dáng, săn chắc cơ thể.', 2000000.00, NULL),
(16, 2, 'Cấy Trắng Nano', 'trilieu6.jpg', 'Đưa dưỡng chất làm trắng sâu vào da, bật tone rõ rệt.', 1200000.00, NULL),
(17, 2, 'Trị Sẹo Rỗ Laser', 'trilieu7.jpg', 'Cải thiện sẹo rỗ, tái tạo bề mặt da, làm mịn màng hơn.', 1600000.00, NULL),
(18, 2, 'Điện Di Vitamin C', 'trilieu8.jpg', 'Cung cấp Vitamin C tinh khiết, làm sáng da, chống oxy hóa.', 700000.00, NULL),
(19, 2, 'Chăm Sóc Da Mụn Chuẩn Y Khoa', 'trilieu9.jpg', 'Liệu trình chuyên sâu, kiểm soát mụn, phục hồi da theo phác đồ.', 950000.00, NULL),
(20, 2, 'Liệu Trình Detox Da', 'trilieu10.jpg', 'Thanh lọc da cấp độ tế bào, loại bỏ độc tố, giúp da khỏe mạnh.', 1000000.00, NULL),
(21, 3, 'Massage Thụy Điển', 'cothe1.jpg', 'Thư giãn toàn thân, giảm căng cơ, cải thiện tuần hoàn máu.', 600000.00, NULL),
(22, 3, 'Massage Đá Nóng', 'cothe2.jpg', 'Sức nóng từ đá giúp thư giãn sâu, giảm đau nhức cơ, giải tỏa căng thẳng.', 750000.00, NULL),
(23, 3, 'Massage Thái Cổ Truyền', 'cothe3.jpg', 'Kéo giãn cơ, ấn huyệt, giúp cơ thể dẻo dai, tăng cường năng lượng.', 700000.00, NULL),
(24, 3, 'Tẩy Tế Bào Chết Body', 'cothe4.jpg', 'Loại bỏ da chết, làm sáng mịn da toàn thân, chuẩn bị cho dưỡng chất.', 550000.00, NULL),
(25, 3, 'Ủ Dưỡng Trắng Body', 'cothe5.jpg', 'Cung cấp dưỡng chất, làm trắng sáng da toàn thân, mịn màng.', 850000.00, NULL),
(26, 3, 'Xông Hơi Thảo Dược', 'cothe6.jpg', 'Thanh lọc cơ thể, đào thải độc tố, thư giãn tinh thần hiệu quả.', 300000.00, NULL),
(27, 3, 'Massage Chân Thư Giãn', 'cothe7.jpg', 'Giảm mỏi chân, cải thiện lưu thông máu, thư giãn sâu toàn thân.', 400000.00, NULL),
(28, 3, 'Chăm Sóc Tay & Chân', 'cothe8.jpg', 'Làm sạch, dưỡng móng, massage thư giãn cho tay và chân.', 380000.00, NULL),
(29, 3, 'Trị Liệu Cổ Vai Gáy', 'cothe9.jpg', 'Tập trung giảm đau nhức, căng thẳng vùng cổ, vai, gáy.', 450000.00, NULL),
(30, 3, 'Gói Thư Giãn Toàn Diện', 'cothe10.jpg', 'Kết hợp massage, xông hơi, ủ dưỡng, mang lại trải nghiệm thư giãn tối đa.', 1200000.00, NULL),
(31, 4, 'Detox Toàn Diện', 'suckhoe1.jpg', 'Thanh lọc cơ thể, đào thải độc tố, tăng cường năng lượng.', 1500000.00, NULL),
(32, 4, 'Trị Liệu Giảm Stress', 'suckhoe2.jpg', 'Giúp thư giãn sâu, giảm căng thẳng, cải thiện giấc ngủ.', 800000.00, NULL),
(33, 4, 'Chăm Sóc Bầu & Sau Sinh', 'suckhoe3.jpg', 'Liệu trình an toàn, thư giãn cho mẹ bầu, phục hồi sau sinh.', 900000.00, NULL),
(34, 4, 'Ấn Huyệt Đả Thông Kinh Lạc', 'suckhoe4.jpg', 'Kích thích huyệt đạo, giải tỏa tắc nghẽn, cân bằng năng lượng.', 700000.00, NULL),
(35, 4, 'Liệu Pháp Hương Thơm', 'suckhoe5.jpg', 'Sử dụng tinh dầu thiên nhiên, tạo không gian thư thái, chữa lành.', 650000.00, NULL),
(36, 4, 'Gói Phục Hồi Năng Lượng', 'suckhoe6.jpg', 'Kết hợp đa liệu pháp giúp cơ thể và tinh thần hồi phục nhanh chóng.', 1100000.00, NULL),
(37, 4, 'Tư Vấn Sức Khỏe Toàn Diện', 'suckhoe7.jpg', 'Chuyên gia tư vấn lối sống, dinh dưỡng, chăm sóc sức khỏe cá nhân.', 500000.00, NULL),
(38, 4, 'Trị Liệu Giảm Đau Nhức', 'suckhoe8.jpg', 'Tập trung vào các vùng đau mỏi, giúp giảm đau, thư giãn cơ.', 750000.00, NULL),
(39, 4, 'Thiền Định Thư Giãn', 'suckhoe9.jpg', 'Hướng dẫn thiền, giúp tâm trí tĩnh lặng, giảm lo âu.', 400000.00, NULL),
(41, 4, 'Gói Chăm Sóc Theo Ngày', 'suckhoe10.jpg', 'Liệu trình trọn gói kéo dài cả ngày, trải nghiệm thư giãn tối đa.\r\n', 2500000.00, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_categories`
--

INSERT INTO `service_categories` (`id`, `category_name`) VALUES
(1, 'Chăm sóc da'),
(2, 'Công nghệ trị liệu'),
(3, 'Chăm sóc cơ thể'),
(4, 'Chăm sóc sức khỏe');

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
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `service_categories` (`id`),
  ADD CONSTRAINT `bookings_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Các ràng buộc cho bảng `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
