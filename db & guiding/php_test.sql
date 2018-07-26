-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 26, 2018 lúc 02:28 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `content` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `style` int(11) DEFAULT NULL,
  `created_time` date DEFAULT NULL,
  `id_tintuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`content`, `style`, `created_time`, `id_tintuc`) VALUES
('Lorem Ipsum has been the industry\'s standard dummy text ever since', 1, '2018-07-20', 3),
('Lorem Ipsum has been the industry\'s standard dummy text ever since', 1, '2018-07-11', 4),
('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 1, '2018-07-28', 5),
('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 1, '2018-07-04', 6),
('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout yes', 1, '2018-07-27', 7),
('Khởi tố, bắt tạm giam người “tiếp tay” nâng điểm thi ở Hà Giang. Hình ảnh nước ngập mênh mông ở ngoại thành Hà Nội', 1, '2018-07-26', 8),
('It is a long established fact that a reader will be distracted', 1, '2018-07-23', 9),
('It is a long established fact that a reader will be distracted', 0, '2018-07-23', 10),
('The point of using Lorem Ipsum is that it has a more-or-less normal distribution', 1, '2018-07-24', 11),
('Hình ảnh nước ngập mênh mông ở ngoại thành Hà Nội', 0, '2018-07-05', 13),
('Hình ảnh nước ngập mênh mông ở ngoại thành Hà Nội', 0, '2018-07-12', 14),
('Chủ tịch Viettel Nguyễn Mạnh Hùng làm Bí thư Ban cán sự đảng Bộ TT&TT', 0, '2018-07-20', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kind` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `kind`) VALUES
('ANguyen', 'anguyen@gmail.com', '123456', 1),
('BNguyen', 'bnguyen@gmail.com', '123456', 2),
('DNguyen', 'dnguyen@gmail.com', '123456', 1),
('ENguyen', 'enguyen@gmail.com', '123456', 2),
('1', '1', '1', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
