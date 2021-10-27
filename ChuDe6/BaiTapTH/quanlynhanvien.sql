-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 06:39 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlynhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `loainhanvien`
--

CREATE TABLE `loainhanvien` (
  `maLoaiNV` varchar(20) NOT NULL,
  `tenLoaiNV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loainhanvien`
--

INSERT INTO `loainhanvien` (`maLoaiNV`, `tenLoaiNV`) VALUES
('LNV001', 'Nhân viên nhân sự'),
('LNV002', 'Nhân viên hành chính'),
('LNV003', 'Nhân viên quản lý'),
('LNV004', 'Phòng 4');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` varchar(20) NOT NULL,
  `Ho` varchar(255) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(4) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Anh` varchar(255) NOT NULL,
  `maLoaiNV` varchar(20) NOT NULL,
  `maPhong` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `Ho`, `Ten`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Anh`, `maLoaiNV`, `maPhong`) VALUES
('NV001', 'Trần Thị', 'Thắm', '2000-12-12', 0, 'Nha Trang', 'a2', 'LNV001', 'PB001'),
('NV002', 'Lê Văn', 'Hùng', '2000-11-11', 1, 'Nha Trang', 'a1', 'LNV002', 'PB002'),
('NV003', 'Nguyễn Huy', 'Khôi', '2000-10-10', 1, 'Nha Trang', 'a3', 'LNV003', 'PB003'),
('NV006', 'Trần', 'k', '2021-10-14', 1, 'ádasd', 'ádad', 'LNV001', 'PB001');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `maPhong` varchar(20) NOT NULL,
  `tenPhong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`maPhong`, `tenPhong`) VALUES
('PB001', 'Phòng nhân sự'),
('PB002', 'Phòng hành chính'),
('PB003', 'Phòng quản lý'),
('PB004', 'toàn'),
('PB005', 'Phòng 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loainhanvien`
--
ALTER TABLE `loainhanvien`
  ADD PRIMARY KEY (`maLoaiNV`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`),
  ADD KEY `maLoaiNV` (`maLoaiNV`),
  ADD KEY `maPhong` (`maPhong`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`maPhong`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`maLoaiNV`) REFERENCES `loainhanvien` (`maLoaiNV`),
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`maPhong`) REFERENCES `phongban` (`maPhong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
