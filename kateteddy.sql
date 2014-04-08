-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2014 at 01:14 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kateteddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuyenvienthuly`
--

CREATE TABLE IF NOT EXISTS `chuyenvienthuly` (
  `idChuyenVienThuLy` int(11) NOT NULL AUTO_INCREMENT,
  `NameCB` varchar(45) NOT NULL,
  `NgaySinh` date NOT NULL,
  `idDonViThuLy` int(11) NOT NULL,
  PRIMARY KEY (`idChuyenVienThuLy`),
  KEY `FK_CanBo_DVThuLy_idx` (`idDonViThuLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `congdan`
--

CREATE TABLE IF NOT EXISTS `congdan` (
  `idCongDan` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Ngaysinh` date NOT NULL,
  `QueQuan` varchar(45) NOT NULL,
  `SDT` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`idCongDan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dinhkemguihs`
--

CREATE TABLE IF NOT EXISTS `dinhkemguihs` (
  `idDinhKemGuiHS` int(11) NOT NULL AUTO_INCREMENT,
  `TenFileDinhKem` varchar(45) NOT NULL,
  `PathToFile` varchar(45) NOT NULL,
  PRIMARY KEY (`idDinhKemGuiHS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dinhkemnhanhs`
--

CREATE TABLE IF NOT EXISTS `dinhkemnhanhs` (
  `idDinhKemNhanHS` int(11) NOT NULL AUTO_INCREMENT,
  `TenFileDinhKem` varchar(45) NOT NULL,
  `PathToFile` varchar(45) NOT NULL,
  PRIMARY KEY (`idDinhKemNhanHS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dinhkemtthc`
--

CREATE TABLE IF NOT EXISTS `dinhkemtthc` (
  `idDinhKemTTHC` int(11) NOT NULL AUTO_INCREMENT,
  `TenFileDK` varchar(45) NOT NULL,
  `PathToFile` varchar(45) NOT NULL,
  PRIMARY KEY (`idDinhKemTTHC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donvithuly`
--

CREATE TABLE IF NOT EXISTS `donvithuly` (
  `idDonViThuLy` int(11) NOT NULL AUTO_INCREMENT,
  `NameDonViThuLy` varchar(45) NOT NULL,
  PRIMARY KEY (`idDonViThuLy`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donvithuly`
--

INSERT INTO `donvithuly` (`idDonViThuLy`, `NameDonViThuLy`) VALUES
(1, 'Giải Quyết Đất Đai');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `idFAQ` int(11) NOT NULL AUTO_INCREMENT,
  `idTTHC` int(11) NOT NULL,
  `NDCauHoi` varchar(45) NOT NULL,
  `NDCauTraLoi` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFAQ`),
  KEY `FK_FAQ_DichVu_idx` (`idTTHC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `functions`
--

CREATE TABLE IF NOT EXISTS `functions` (
  `idFunctions` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  `GroupFunction` int(11) NOT NULL,
  PRIMARY KEY (`idFunctions`),
  KEY `fk_Function_GroupFunction1_idx` (`GroupFunction`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `functions`
--

INSERT INTO `functions` (`idFunctions`, `name`, `path`, `GroupFunction`) VALUES
(1, 'Khởi Tạo Dữ Liệu', 'initialData', 1),
(3, 'Xử Lý Hồ Sơ', 'xulyhoso', 2),
(4, 'Phân Quyền TTHC', 'permission', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupfunction`
--

CREATE TABLE IF NOT EXISTS `groupfunction` (
  `idGroupFunction` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `Role` int(11) NOT NULL,
  PRIMARY KEY (`idGroupFunction`),
  KEY `fk_GroupFunction_Role1_idx` (`Role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groupfunction`
--

INSERT INTO `groupfunction` (`idGroupFunction`, `name`, `description`, `Role`) VALUES
(1, 'Nhóm Chức Năng Admin', 'admin', 1),
(2, 'Nhóm Chức Năng Lãnh Đạo', 'lanhdao', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoidaptt`
--

CREATE TABLE IF NOT EXISTS `hoidaptt` (
  `idHoiDapTT` int(11) NOT NULL AUTO_INCREMENT,
  `idDonViThuLy` int(11) NOT NULL,
  `idTTHC` int(11) NOT NULL,
  `idCongDan` int(11) NOT NULL,
  `CauHoi` varchar(45) NOT NULL,
  `CauTraLoi` varchar(45) DEFAULT NULL,
  `isHide` tinyint(1) NOT NULL,
  PRIMARY KEY (`idHoiDapTT`),
  KEY `FK_HoiDapTT_DichVu_idx` (`idTTHC`),
  KEY `FK_HoiDapTT_DVThuLy_idx` (`idDonViThuLy`),
  KEY `FK_HoiDapTT_CongDan_idx` (`idCongDan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosotthc`
--

CREATE TABLE IF NOT EXISTS `hosotthc` (
  `idHoSoTTHC` int(11) NOT NULL AUTO_INCREMENT,
  `idTTHC` int(11) NOT NULL,
  `idCongDan` int(11) NOT NULL,
  `idDonViThuLy` int(11) NOT NULL,
  `NgayNhan` date NOT NULL,
  `NgayHenTra` date NOT NULL,
  `idTinhTrangThuLy` int(11) NOT NULL,
  `idDinhKemGui` int(11) DEFAULT NULL,
  `idDinhKemNhan` int(11) DEFAULT NULL,
  `IsSentDVTL` tinyint(1) DEFAULT NULL,
  `IsRecieveDVTL` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idHoSoTTHC`),
  KEY `FK_HSTTHC_CongDan_idx` (`idCongDan`),
  KEY `FK_HSTTHC_TTHC_idx` (`idTTHC`),
  KEY `FK_HSTTHC_DVThuLy_idx` (`idDonViThuLy`),
  KEY `FK_HSTTHC_TTTL_idx` (`idTinhTrangThuLy`),
  KEY `FK_HSTTHC_DKNhan_idx` (`idDinhKemNhan`),
  KEY `FK_HSTTHC_DKGui_idx` (`idDinhKemGui`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `linhvuc`
--

CREATE TABLE IF NOT EXISTS `linhvuc` (
  `idLinhVuc` int(11) NOT NULL AUTO_INCREMENT,
  `NameDV` varchar(45) NOT NULL,
  `MoTaLinhVuc` varchar(255) NOT NULL,
  PRIMARY KEY (`idLinhVuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `linhvuc`
--

INSERT INTO `linhvuc` (`idLinhVuc`, `NameDV`, `MoTaLinhVuc`) VALUES
(1, 'Đất Đai', 'Quản lý thủ tục đất đai');

-- --------------------------------------------------------

--
-- Table structure for table `quyenhan`
--

CREATE TABLE IF NOT EXISTS `quyenhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `mota` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `quyenhan`
--

INSERT INTO `quyenhan` (`id`, `name`, `mota`) VALUES
(1, 'Niêm Yết', NULL),
(2, 'Tiếp Nhận', NULL),
(3, 'Xử Lý', NULL),
(4, 'Theo Dõi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quyentthc`
--

CREATE TABLE IF NOT EXISTS `quyentthc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mota` varchar(45) DEFAULT NULL,
  `User` int(11) DEFAULT NULL,
  `TTHC` int(11) NOT NULL,
  `Quyenhan` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_QuyenTTHC_User1_idx` (`User`),
  KEY `fk_QuyenTTHC_TTHC1_idx` (`TTHC`),
  KEY `fk_QuyenTTHC_Quyenhan1_idx` (`Quyenhan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quyentthc`
--

INSERT INTO `quyentthc` (`id`, `mota`, `User`, `TTHC`, `Quyenhan`) VALUES
(1, NULL, 1, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `role`) VALUES
(1, 'Admin', 'ROLE_ADMIN'),
(2, 'Lãnh Đạo', 'ROLE_LANHDAO'),
(3, 'Người Xử Lý', 'ROLE_XULY');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_functions`
--

CREATE TABLE IF NOT EXISTS `role_has_functions` (
  `Role_id` int(11) NOT NULL,
  `Functions_idFunctions` int(11) NOT NULL,
  PRIMARY KEY (`Role_id`,`Functions_idFunctions`),
  KEY `fk_Role_has_Functions_Functions1_idx` (`Functions_idFunctions`),
  KEY `fk_Role_has_Functions_Role1_idx` (`Role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_has_functions`
--

INSERT INTO `role_has_functions` (`Role_id`, `Functions_idFunctions`) VALUES
(1, 1),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `thontincanhan`
--

CREATE TABLE IF NOT EXISTS `thontincanhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(45) DEFAULT NULL,
  `quequan` varchar(45) DEFAULT NULL,
  `CMTND` varchar(45) DEFAULT NULL,
  `SDT` varchar(45) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thontincanhan`
--

INSERT INTO `thontincanhan` (`id`, `hoten`, `quequan`, `CMTND`, `SDT`, `ngaysinh`) VALUES
(1, '111', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrangthuly`
--

CREATE TABLE IF NOT EXISTS `tinhtrangthuly` (
  `idTinhTrangThuLy` int(11) NOT NULL AUTO_INCREMENT,
  `TinhTrangThuLy` varchar(45) NOT NULL,
  `Time` datetime NOT NULL,
  `idChuyenVienThuLy` int(11) NOT NULL,
  `ThuTuThuLy` int(11) NOT NULL,
  PRIMARY KEY (`idTinhTrangThuLy`),
  KEY `FK_TTTL_ChuyenVienTL_idx` (`idChuyenVienThuLy`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tthc`
--

CREATE TABLE IF NOT EXISTS `tthc` (
  `idTTHC` int(11) NOT NULL AUTO_INCREMENT,
  `NameTTHC` varchar(45) NOT NULL,
  `idLinhVuc` int(11) NOT NULL,
  `idDonViThuLy` int(11) NOT NULL,
  `NoiDungThucHien` varchar(255) DEFAULT NULL,
  `GiayToHoSo` varchar(45) DEFAULT NULL,
  `ThoiGianGiaiQuyet` varchar(45) DEFAULT NULL,
  `idDinhKem` int(11) DEFAULT NULL,
  `idVanBanLienQuan` int(11) DEFAULT NULL,
  `PhanQuyen` int(11) DEFAULT NULL,
  `IsHide` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idTTHC`),
  KEY `FK_TTHC_DichVu_idx` (`idLinhVuc`),
  KEY `FK_TTHC_DVThuLy_idx` (`idDonViThuLy`),
  KEY `FK_TTHC_DinhKem_idx` (`idDinhKem`),
  KEY `FK_TTHC_VBLQ_idx` (`idVanBanLienQuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tthc`
--

INSERT INTO `tthc` (`idTTHC`, `NameTTHC`, `idLinhVuc`, `idDonViThuLy`, `NoiDungThucHien`, `GiayToHoSo`, `ThoiGianGiaiQuyet`, `idDinhKem`, `idVanBanLienQuan`, `PhanQuyen`, `IsHide`) VALUES
(1, 'Cấp Phép Đất Đai', 1, 1, 'Cấp Phép Đất Đai', 'Cấp Phép Đất Đai', '3 ngày', NULL, NULL, 1, 1),
(2, 'trung', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tái Xử Dụng Đất Update', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Cải Tạo Đất', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ha duc trung 123', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Xin Mở Rộng Đất', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `Thontincanhan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `isActive_UNIQUE` (`isActive`),
  KEY `fk_User_Thontincanhan1_idx` (`Thontincanhan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `isActive`, `Thontincanhan`) VALUES
(1, 'admin', '123', NULL, NULL, NULL),
(2, 'admin1', '123', NULL, NULL, NULL),
(3, 'lanhdao12', '123', NULL, NULL, NULL),
(4, 'ket', '123', NULL, NULL, NULL),
(5, 'vi', '123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_role`
--

CREATE TABLE IF NOT EXISTS `user_has_role` (
  `User_id` int(11) NOT NULL,
  `Role_id` int(11) NOT NULL,
  PRIMARY KEY (`User_id`,`Role_id`),
  KEY `fk_User_has_Role_Role1_idx` (`Role_id`),
  KEY `fk_User_has_Role_User1_idx` (`User_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_has_role`
--

INSERT INTO `user_has_role` (`User_id`, `Role_id`) VALUES
(1, 1),
(5, 1),
(3, 2),
(5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE IF NOT EXISTS `vaitro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `mota` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`id`, `name`, `mota`) VALUES
(1, 'Niêm Yết', NULL),
(2, 'Tiếp Nhận', NULL),
(3, 'Xử Lý', NULL),
(4, 'Theo Dõi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vaitroxuly`
--

CREATE TABLE IF NOT EXISTS `vaitroxuly` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `User` int(11) NOT NULL,
  `Vaitro` int(11) NOT NULL,
  `HoSoTTHC` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Vaitroxuly_User1_idx` (`User`),
  KEY `fk_Vaitroxuly_Vaitro1_idx` (`Vaitro`),
  KEY `fk_Vaitroxuly_HoSoTTHC1_idx` (`HoSoTTHC`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `vaitroxuly`
--

INSERT INTO `vaitroxuly` (`id`, `User`, `Vaitro`, `HoSoTTHC`) VALUES
(2, 1, 1, 0),
(3, 5, 1, 0),
(4, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vanbanlienquan`
--

CREATE TABLE IF NOT EXISTS `vanbanlienquan` (
  `idVanBanLienQuan` int(11) NOT NULL AUTO_INCREMENT,
  `TenVBLQ` varchar(45) NOT NULL,
  `PathToVBLQ` varchar(45) NOT NULL,
  PRIMARY KEY (`idVanBanLienQuan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyenvienthuly`
--
ALTER TABLE `chuyenvienthuly`
  ADD CONSTRAINT `FK_CanBo_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `FK_FAQ_DichVu` FOREIGN KEY (`idTTHC`) REFERENCES `tthc` (`idTTHC`) ON UPDATE CASCADE;

--
-- Constraints for table `functions`
--
ALTER TABLE `functions`
  ADD CONSTRAINT `fk_Function_GroupFunction1` FOREIGN KEY (`GroupFunction`) REFERENCES `groupfunction` (`idGroupFunction`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `groupfunction`
--
ALTER TABLE `groupfunction`
  ADD CONSTRAINT `fk_GroupFunction_Role1` FOREIGN KEY (`Role`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hoidaptt`
--
ALTER TABLE `hoidaptt`
  ADD CONSTRAINT `FK_HoiDapTT_CongDan` FOREIGN KEY (`idCongDan`) REFERENCES `congdan` (`idCongDan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HoiDapTT_DichVu` FOREIGN KEY (`idTTHC`) REFERENCES `linhvuc` (`idLinhVuc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HoiDapTT_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `hosotthc`
--
ALTER TABLE `hosotthc`
  ADD CONSTRAINT `FK_HSTTHC_CongDan` FOREIGN KEY (`idCongDan`) REFERENCES `congdan` (`idCongDan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_DKGui` FOREIGN KEY (`idDinhKemGui`) REFERENCES `dinhkemguihs` (`idDinhKemGuiHS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_DKNhan` FOREIGN KEY (`idDinhKemNhan`) REFERENCES `dinhkemnhanhs` (`idDinhKemNhanHS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_TTHC` FOREIGN KEY (`idTTHC`) REFERENCES `tthc` (`idTTHC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HSTTHC_TTTL` FOREIGN KEY (`idTinhTrangThuLy`) REFERENCES `tinhtrangthuly` (`idTinhTrangThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `quyentthc`
--
ALTER TABLE `quyentthc`
  ADD CONSTRAINT `fk_QuyenTTHC_Quyenhan1` FOREIGN KEY (`Quyenhan`) REFERENCES `quyenhan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_QuyenTTHC_TTHC1` FOREIGN KEY (`TTHC`) REFERENCES `tthc` (`idTTHC`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_QuyenTTHC_User1` FOREIGN KEY (`User`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `role_has_functions`
--
ALTER TABLE `role_has_functions`
  ADD CONSTRAINT `fk_Role_has_Functions_Role1` FOREIGN KEY (`Role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Role_has_Functions_Functions1` FOREIGN KEY (`Functions_idFunctions`) REFERENCES `functions` (`idFunctions`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tinhtrangthuly`
--
ALTER TABLE `tinhtrangthuly`
  ADD CONSTRAINT `FK_TTTL_ChuyenVienTL` FOREIGN KEY (`idChuyenVienThuLy`) REFERENCES `chuyenvienthuly` (`idChuyenVienThuLy`) ON UPDATE CASCADE;

--
-- Constraints for table `tthc`
--
ALTER TABLE `tthc`
  ADD CONSTRAINT `FK_TTHC_DichVu` FOREIGN KEY (`idLinhVuc`) REFERENCES `linhvuc` (`idLinhVuc`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TTHC_DinhKem` FOREIGN KEY (`idDinhKem`) REFERENCES `dinhkemtthc` (`idDinhKemTTHC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TTHC_DVThuLy` FOREIGN KEY (`idDonViThuLy`) REFERENCES `donvithuly` (`idDonViThuLy`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TTHC_VBLQ` FOREIGN KEY (`idVanBanLienQuan`) REFERENCES `vanbanlienquan` (`idVanBanLienQuan`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_Thontincanhan1` FOREIGN KEY (`Thontincanhan`) REFERENCES `thontincanhan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_has_role`
--
ALTER TABLE `user_has_role`
  ADD CONSTRAINT `fk_User_has_Role_Role1` FOREIGN KEY (`Role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_has_Role_User1` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vaitroxuly`
--
ALTER TABLE `vaitroxuly`
  ADD CONSTRAINT `fk_Vaitroxuly_HoSoTTHC1` FOREIGN KEY (`HoSoTTHC`) REFERENCES `hosotthc` (`idHoSoTTHC`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vaitroxuly_User1` FOREIGN KEY (`User`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Vaitroxuly_Vaitro1` FOREIGN KEY (`Vaitro`) REFERENCES `vaitro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
