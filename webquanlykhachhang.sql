-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2021 lúc 03:49 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webquanlykhachhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daily`
--

CREATE TABLE `daily` (
  `id` int(11) NOT NULL,
  `tendaily` varchar(250) NOT NULL,
  `chusohuu` varchar(250) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nganhban` varchar(500) NOT NULL,
  `ngaydangky` date NOT NULL,
  `hopdong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `daily`
--

INSERT INTO `daily` (`id`, `tendaily`, `chusohuu`, `diachi`, `sodienthoai`, `email`, `nganhban`, `ngaydangky`, `hopdong`) VALUES
(2, 'Tạp hóa Trang Nhơn', 'Thùy Trang', 'Quảng Bình', 365412368, 'hung29manh@gmail.com', 'Bánh kẹo', '2021-11-15', 20210611),
(3, 'Mỹ phẩm KT', 'Đăng Phát', 'Hà Nội', 394012365, 'dangphjat@gmail.com', 'Mỹ phẩm trang điểm', '2021-11-15', 202165478);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `gioitinh` varchar(250) NOT NULL,
  `ngaysinh` date NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `nghenghiep` varchar(250) NOT NULL,
  `socmnd` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `daily`
--
ALTER TABLE `daily`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `daily`
--
ALTER TABLE `daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
