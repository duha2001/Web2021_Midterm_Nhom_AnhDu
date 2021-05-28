-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2021 lúc 05:35 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaCTHD` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaHH` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaCTHD`, `MaHD`, `MaHH`, `SoLuong`) VALUES
(1, 1, 2, 34),
(2, 1, 2, 43),
(3, 2, 1, 322),
(4, 2, 4, 123),
(5, 2, 2, 23),
(6, 4, 5, 41),
(7, 5, 2, 131),
(8, 3, 2, 411);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MaHH` int(11) NOT NULL,
  `TenHH` varchar(300) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `Hinh` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MaHH`, `TenHH`, `DonGia`, `Hinh`) VALUES
(1, 'Iphone', 23131131, 'iphone12.png'),
(2, 'laptop dell', 12312312, 'laptop.png'),
(3, 'Chuột gaming', 12312, 'chuotgaming.png'),
(4, 'tai nghe có dây', 12313, 'tainghecoday.png'),
(5, 'tai nghe không dây', 213213, 'tainghekhongday.png'),
(6, 'Bàn phím gaming', 32423423, 'banphimgaming.png'),
(7, 'Màn hình led', 21323, 'manhinhled.png'),
(8, 'chuột không dây', 32323, 'chuotkhongday.png'),
(9, 'bàn phím không dây', 3242432, 'banphimkhongday.png'),
(10, 'màn hình không dây', 224234, 'manhinhkhongday.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `NgayLapHD` date NOT NULL,
  `MaKH` int(11) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayLapHD`, `MaKH`, `TongTien`) VALUES
(1, '2021-05-04', 5, 2212),
(2, '2021-05-13', 1, 21241434),
(3, '2021-05-18', 4, 1343134),
(4, '2021-05-18', 10, 333133),
(5, '2021-05-12', 8, 1343143),
(6, '2021-05-26', 3, 143424),
(7, '2021-05-13', 6, 432423423),
(8, '2021-05-05', 4, 234234),
(9, '2021-05-12', 3, 234234),
(10, '2021-05-18', 9, 234234234);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `HoTen` varchar(300) NOT NULL,
  `DienThoai` int(11) NOT NULL,
  `Email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `HoTen`, `DienThoai`, `Email`) VALUES
(1, 'Hồ Tài', 122343455, 'vantai@gmail.com'),
(2, 'Anh Dự ', 122344555, 'anhdu@gmail.com'),
(3, 'Bảo Lộc', 12232323, 'baoloc@gmail.com'),
(4, 'Lương Thơm', 101010012, 'luongthom@gmail.com'),
(5, 'Anh Đài', 30300330, 'anhdai@gmail.com'),
(6, 'Phương Vi', 101010202, 'phuongvi@gmail.com'),
(7, 'Bá Tước', 203030, 'batuoc@gmail.com'),
(8, 'Hách Não', 20020220, 'hachnao@gmail.com'),
(9, 'Long Nhựt', 20200031, 'longnhut@gmail.com'),
(10, 'Bạch Tử', 101001100, 'bachtu@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(1000) NOT NULL,
  `Mota` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`MaLoai`, `TenLoai`, `Mota`) VALUES
(1, 'Điện Thoại', 'Điện Thoại Di Động'),
(2, 'LapTop', 'LapTop Dell'),
(3, 'Tai Nghe', 'Tai Nghe Không Dây'),
(4, 'Tai Nghe ', 'Tai Nghe Bule Tút'),
(5, 'Chuột', 'Chuột Gaming'),
(6, 'Bàn Phím', 'Bàn Phím Gaming'),
(7, 'Airport', 'Tai Nghe IPhone'),
(8, 'Màn Hình', 'Màn Hinh LEd');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaCTHD`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MaHH`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `MaCTHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MaHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
