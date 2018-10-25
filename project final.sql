-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2018 at 05:32 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Id` int(11) NOT NULL,
  `Brand Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Id`, `Brand Name`) VALUES
(5, 'Asus'),
(6, 'HTC'),
(3, 'Nokia'),
(4, 'One+'),
(2, 'Sumsung'),
(1, 'xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `C_ID` int(11) NOT NULL,
  `M_ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `TPrice` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `ipath` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `Email`, `ipath`) VALUES
(4, 'sshihabb007@gmail.com', 'uploads/ScreenShot_20171201231210.png'),
(7, 'sri.subroto.saha@gmail.com', 'uploads/amazing-sunset-nature-1440x2560.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobile feature`
--

CREATE TABLE `mobile feature` (
  `Id` int(50) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Dimensions` varchar(50) NOT NULL,
  `Weight` varchar(50) NOT NULL,
  `Body Build` varchar(50) NOT NULL,
  `Sim` varchar(50) NOT NULL,
  `Technology` varchar(50) NOT NULL,
  `Display Type` varchar(50) NOT NULL,
  `Display Size` varchar(50) NOT NULL,
  `Display Protection` varchar(50) NOT NULL,
  `Multitouch` varchar(100) NOT NULL,
  `OS` varchar(50) NOT NULL,
  `Chipset` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `GPU` varchar(50) NOT NULL,
  `Card Slort` varchar(50) NOT NULL,
  `Internal Memory` varchar(50) NOT NULL,
  `Primary Camera` varchar(50) NOT NULL,
  `Camera Feature` varchar(50) NOT NULL,
  `Video Quality` varchar(50) NOT NULL,
  `Secondary Camera` varchar(50) NOT NULL,
  `Alert` varchar(50) NOT NULL,
  `Loudspeaker` varchar(50) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Sold Quantity` int(255) NOT NULL DEFAULT '0',
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile feature`
--

INSERT INTO `mobile feature` (`Id`, `Image`, `Model`, `Brand`, `Dimensions`, `Weight`, `Body Build`, `Sim`, `Technology`, `Display Type`, `Display Size`, `Display Protection`, `Multitouch`, `OS`, `Chipset`, `CPU`, `GPU`, `Card Slort`, `Internal Memory`, `Primary Camera`, `Camera Feature`, `Video Quality`, `Secondary Camera`, `Alert`, `Loudspeaker`, `Quantity`, `Sold Quantity`, `Price`) VALUES
(4, '../Image/xiaomi_redmi_note_4.jpg', 'redmi note 4', 'xiaomi', 'dssjh', '157g', 'metal body', '2 sim', '2G 3G 4G', 'capasetiv touch', '5.5 inches', 'gorila glass v3', 'Yes', 'MIUIv9 ( Android 7.0)', 'Snapdragon 625', '2.9GHz', 'arino5.0', 'yes upto 128GB', 'RAM 3GB ROM 32GB', '16MP', 'blur,infinity focus', '4K', '13MP', '.mp3 alarm', 'yes ', 996, 0, 18000),
(5, '../Image/note3.jpg', 'Xiaomi Redmi Note 3', 'xiaomi', '150 x 76 x 8.7 mm (5.91 x 2.99 x 0.34 in)', '164 g (5.78 oz)', 'Aluminum body', 'Hybrid Dual SIM (Micro-SIM/Nano-SIM, dual stand-by', 'GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2', 'IPS LCD capacitive touchscreen, 16M colors', '5.5 inches, 82.6 cm2 (~72.4% screen-to-body ratio)', 'asda asdasd', 'yes', ' 6.0.1 (Marshmallow)', 'Qualcomm MSM8956 Snapdragon 650', 'Hexa-core (4x1.4 GHz Cortex-A53 & 2x1.8 ', 'Adreno 510', '1 slot', '32GB', '16 MP, f/2.0, phase detection autofocus, dual-LED', 'Geo-tagging, touch focus, face/smile detection', '1080p@30fps', '5 MP, f/2.0, 1080p', 'yes', 'yes', 25, 0, 18000),
(6, '../Image/oneplus5tvsiphonex-580x358.png', 'OnePlus 5T', 'One+', '156.1 x 75 x 7.3 mm (6.15 x 2.95 x 0.29 in)', '162 g (5.71 oz)', 'Front glass, aluminum frame, back', 'Dual SIM (Nano-SIM, dual stand-by)', 'GSM / CDMA / HSPA / LTE', 'Optic AMOLED capacitive touchscreen, 16M colors', '6.01 inches, 93.7 cm2 (~80.0% screen-to-body ratio', 'Corning Gorilla Glass 5  	- DCI-P3 - Oxygen OS 5.0', 'Yes', 'Android 7.1.1 (Nougat), upgradable to Android 8.0 ', 'Qualcomm MSM8998 Snapdragon 835', 'Octa-core (4x2.45 GHz Kryo & 4x1.9 GHz Kryo)', 'Adreno 540', 'No', '128 GB, 8 GB RAM or 64 GB, 6 GB RAM', 'Dual: 16 MP (f/1.7, 27mm, 1/2.8\", 1.12 Âµm, gyro E', 'Geo-tagging, touch focus, face detection, HDR, pan', '2160p@30fps, 1080p@30/60fps, 720p@30/120fps', '16 MP (f/2.0, 20mm, 1.0 Âµm), gyro EIS, Auto HDR, ', 'Vibration; MP3, WAV ringtones', 'Yes', 47, 0, 51900),
(7, '../Image/14149-9-1.jpg', 'Asus Zenfone 5 ZE620', 'Asus', '153 x 75.7 x 7.9 mm (6.02 x 2.98 x 0.31 in)', '155 g (5.47 oz)', 'Front glass, aluminum body', 'Dual SIM (Nano-SIM, dual stand-by)', 'GSM / HSPA / LTE', 'IPS LCD capacitive touchscreen, 16M colors', '6.2 inches, 96.9 cm2 (~83.6% screen-to-body ratio)', 'Corning Gorilla Glass (unspecified version)', 'Yes', 'Android 8.0 (Oreo)', 'Qualcomm SDM636 Snapdragon 636', 'Octa-core Kryo 260', 'Adreno 509', 'microSD, up to 400 GB (uses SIM 2 slot)', '64 GB, 4/6 GB RAM', 'Dual: 12 MP (f/1.8, 24 mm, 1/2.55\", 1.4 Âµm, PDAF)', 'Geo-tagging, touch focus, face detection, HDR, pan', '2160p@30fps, 1080p@30/60fps', '8 MP (f/2.0, 24 mm, 1/4\", 1.12 Âµm), gyro EIS, 108', 'Vibration; MP3, WAV ringtones', 'Yes, with dual speakers', 70, 0, 15000),
(8, '../Image/Selfi.png', 'Asus Zenfone Selfie ', 'Asus', '156.5 x 77.2 x 10.8 mm (6.16 x 3.04 x 0.43 in)', '170 g (6.00 oz)', 'Plastic body', 'Dual SIM (Micro-SIM, dual stand-by)', 'GSM / HSPA / LTE', 'IPS LCD capacitive touchscreen, 16M colors', '5.5 inches, 82.6 cm2 (~68.3% screen-to-body ratio)', 'Corning Gorilla Glass 4, oleophobic coating', 'Yes', 'Android 5.0 (Lollipop), upgradable to 6.0 (Marshma', 'Qualcomm MSM8939 Snapdragon 615', 'Octa-core (4x1.7 GHz Cortex-A53 & 4x1.0 GHz Cortex', 'Adreno 405', 'microSD, up to 256 GB (dedicated slot)', '16/32 GB, 2/3 GB RAM', '13 MP (f/2.0, 28mm, 1/3\"), laser autofocus, dual-L', 'Geo-tagging, touch focus, face detection, panorama', '1080p@30fps', '13 MP, f/2.2, 1080p, autofocus, dual-LED dual-tone', 'Vibration; MP3, WAV ringtones', 'Yes', 78, 2, 16290),
(9, '../Image/nokia_7_plus-ROW-details-black.png.jpg', 'Nokia 7', 'Nokia', '141.2 x 71.5 x 7.9 mm (5.56 x 2.81 x 0.31 in)', 'NA', 'Front/back glass, aluminum frame (7000 series)', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'GSM / CDMA / HSPA / EVDO / LTE', 'IPS LCD capacitive touchscreen, 16M colors', '5.2 inches, 74.5 cm2 (~73.8% screen-to-body ratio)', 'Corning Gorilla Glass 3', 'Yes', 'Android 7.1.1 (Nougat), planned upgrade to Android', 'Qualcomm SDM630 Snapdragon 630', 'Octa-core 2.2 GHz Cortex-A53', 'Adreno 508', 'microSD, up to 256 GB (uses SIM 2 slot)', '64 GB, 4/6 GB RAM', '16 MP (f/1.8, 1.12 Âµm), phase detection autofocus', 'Geo-tagging, touch focus, face detection, panorama', '2160p@30fps', '5 MP (f/2.0, 1.4 Âµm), autofocus', 'Vibration; MP3, WAV ringtones', 'Yes', 30, 0, 40000),
(10, '../Image/nokia_8-the_details-blue_polished.png.jpg', 'Nokia 8', 'Nokia', '151.5 x 73.7 x 7.9 mm (5.96 x 2.90 x 0.31 in)', '160 g (5.64 oz)', 'Front glass, aluminum body (6000 series)', 'Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM', 'GSM / HSPA / LTE', 'IPS LCD capacitive touchscreen, 16M colors', '5.3 inches, 77.4 cm2 (~69.4% screen-to-body ratio)', 'Corning Gorilla Glass 5', 'Yes', 'Android 7.1.1 (Nougat), upgradable to Android 8.1 ', 'Qualcomm MSM8998 Snapdragon 835', 'Octa-core (4x2.5 GHz Kryo & 4x1.8 GHz Kryo)', 'Adreno 540', 'microSD, up to 256 GB (uses SIM 2 slot)', '128 GB, 6 GB RAM or 64 GB, 4 GB RAM', 'Dual: 13 MP (f/2.0, 1.12 Âµm), phase detection & l', 'Geo-tagging, touch focus, face detection, HDR, pan', '2160p@30fps, 1080p@30fps', '13 MP (f/2.0, 1.12 Âµm), 2160p, PDAF', 'Vibration; MP3, WAV ringtones', 'Yes', 25, 0, 52999),
(11, '../Image/S7.jpg', 'Samsung Galaxy S7', 'Sumsung', '142.4 x 69.6 x 7.9 mm (5.61 x 2.74 x 0.31 in)', '152 g (5.36 oz)', 'Front/back glass (Gorilla Glass 4), aluminum frame', 'Single SIM (Nano-SIM) - G930F Hybrid Dual SIM (Nan', 'GSM / HSPA / LTE', 'Super AMOLED capacitive touchscreen, 16M colors', '5.1 inches, 71.5 cm2 (~72.1% screen-to-body ratio)', 'Corning Gorilla Glass 4', 'Yes', 'Android 6.0 (Marshmallow), upgradable to 7.0 (Noug', 'Exynos 8890 Octa', 'Octa-core (4x2.3 GHz Mongoose & 4x1.6 GHz Cortex-A', 'Mali-T880 MP12', 'microSD, up to 256 GB (uses SIM 2 slot) - dual SIM', '32/64 GB, 4 GB RAM', '12 MP (f/1.7, 26mm, 1/2.5\", 1.4 Âµm, Dual Pixel PD', 'Geo-tagging, simultaneous 4K video and 9MP image r', '2160p@30fps, 1080p@60fps, 720p@240fps, HDR, dual-v', '5 MP (f/1.7, 22mm, 1/4.1\", 1.34 Âµm), dual video c', 'Vibration; MP3, WAV ringtones', 'Yes', 45, 0, 64900),
(12, '../Image/S8.jpg', 'Samsung Galaxy S8', 'Sumsung', '148.9 x 68.1 x 8 mm (5.86 x 2.68 x 0.31 in)', '155 g (5.47 oz)', 'Front/back glass (Gorilla Glass 5), aluminum frame', 'Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM', 'GSM / HSPA / LTE', 'Super AMOLED capacitive touchscreen, 16M colors', '5.8 inches, 84.8 cm2 (~83.6% screen-to-body ratio)', 'Corning Gorilla Glass 5', 'Yes', 'Android 7.0 (Nougat), upgradable to Android 8.0 (O', 'Exynos 8895 Octa - EMEA', 'Octa-core (4x2.3 GHz Mongoose M2 & 4x1.7 GHz Corte', 'Mali-G71 MP20 - EMEA', 'microSD, up to 256 GB (uses SIM 2 slot) - dual SIM', '64 GB, 4 GB RAM', '12 MP (f/1.7, 26mm, 1/2.5\", 1.4 Âµm, Dual Pixel PD', 'Geo-tagging, simultaneous 4K video and 9MP image r', '2160p@30fps, 1080p@60fps, 720p@240fps, HDR, dual-v', '8 MP (f/1.7, 25mm, 1/3.6\", 1.22 Âµm), autofocus, 1', 'Vibration; MP3, WAV ringtones', 'Yes', 70, 0, 79900),
(13, '../Image/xiaomi-redmi-note-5-pro.jpg', 'Xiaomi Redmi Note 5 ', 'xiaomi', '158.6 x 75.4 x 8.1 mm (6.24 x 2.97 x 0.32 in)', '181 g (6.38 oz)', 'Front glass, aluminum body', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'GSM / HSPA / LTE', 'IPS LCD capacitive touchscreen, 16M colors', '5.99 inches, 92.6 cm2 (~77.4% screen-to-body ratio', 'Corning Gorilla Glass (unspecified version)', 'Yes', 'Android 7.1.2 (Nougat) MIUI 9', 'Qualcomm SDM636 Snapdragon 636', 'Octa-core 1.8 GHz Kryo 260', 'Adreno 509', 'microSD, up to 256 GB (uses SIM 2 slot)', '64 GB, 4/6 GB RAM', 'Dual: 12 MP (f/2.2, 1.25 Î¼m) + 5 MP (f/2.0, 1.12 ', 'Geo-tagging, touch focus, face detection, panorama', '1080p@30fps', '20 MP (f/2.2, 1/2.8\", 1 Î¼m), LED flash, 1080p', 'Vibration; MP3, WAV ringtones', 'Yes', 28, 0, 23990),
(14, '../Image/htc-desire-816-300x300.jpg', 'HTC Desire 816', 'HTC', '156.6 x 78.7 x 7.9 mm (6.17 x 3.10 x 0.31 in)', '165 g (5.82 oz)', 'N/A', 'Nano-SIM', '2G/3G/4G', 'Super LCD2 capacitive touchscreen, 16M colors', '5.5 inches, 83.4 cm2 (~67.7% screen-to-body ratio)', 'N/A', 'Yes', 'Android 4.4.2 (KitKat), upgradable to 6.0 (Marshma', 'Qualcomm MSM8928 Snapdragon 400', 'Quad-core 1.6 GHz Cortex-A7', 'Adreno 305', 'microSD, up to 256 GB (dedicated slot)', '8 GB, 1.5 GB RAM', '13 MP (f/2.2, 28mm), autofocus, LED flash', 'Geo-tagging, touch focus, face detection, HDR', '1080p@30fps, 720p@60fps', '5 MP, f/2.8, 1080p', 'Vibration; MP3, WAV ringtones', '	Yes, with stereo speakers', 1000, 0, 22500),
(15, '../Image/htc m9.jpeg', 'HTC One M9', 'HTC', '144.6 x 69.7 x 9.6 mm (5.69 x 2.74 x 0.38 in)', '157 g (5.54 oz)', 'Aluminum body', 'Nano-SIM', '2G/3G/4G', 'Super LCD3 capacitive touchscreen, 16M colors', '5.0 inches, 68.9 cm2 (~68.4% screen-to-body ratio)', 'Corning Gorilla Glass 3  	- HTC Sense UI 7.0', 'Yes', 'Android 5.0 (Lollipop), upgradable to 7.0 (Nougat)', 'Qualcomm MSM8994 Snapdragon 810', 'Octa-core (4x1.5 GHz Cortex-A53 & 4x2.0 GHz Cortex', 'Adreno 430', 'microSD, up to 256 GB (dedicated slot)', '32 GB, 3 GB RAM', '20 MP (f/2.2, 28mm, 1/2.4', 'Geo-tagging, touch focus, face/smile detection, HD', '2160p@30fps, 1080p@60fps, 720p@120fps, HDR, stereo', '4 MP (f/2.0, 27mm, 1/3', 'Vibration; MP3, WAV ringtones', 'Yes, with stereo speakers', 499, 1, 33990);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `O_ID` int(11) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Product` varchar(5000) NOT NULL,
  `Date` date NOT NULL,
  `Stutas` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Payment Type` varchar(50) NOT NULL,
  `Price` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`O_ID`, `Email`, `Product`, `Date`, `Stutas`, `Address`, `Payment Type`, `Price`) VALUES
(4, 'sri.subroto.saha@gmail.com', 'redmi note 4 [3] ', '2018-04-15', 'not deleverd', 'seedd', 'Cash on Delevery', 54000),
(5, 'sri.subroto.saha@gmail.com', 'Nokia 7 [3] OnePlus 5T [3] Samsung Galaxy S7 [3] Samsung Galaxy S8 [4] ', '2018-04-15', 'deleverd', 'fffff', 'Cash on Delevery', 790000),
(7, 'subrotosaha1@gmail.com', 'Asus Zenfone 5 ZE620 [4] ', '2018-04-20', 'deleverd', 'nai nai', 'Cash on Delevery', 60000),
(8, 'sri.subroto.saha@gmail.com', 'redmi note 4 [3] ', '2018-04-21', 'not deleverd', 'dddd', 'Cash on Delevery', 54000),
(9, 'sri.subroto.saha@gmail.com', 'Xiaomi Redmi Note 3 [3] ', '2018-04-21', 'not deleverd', 'ddxxx', 'Cash on Delevery', 54000),
(10, 'sri.subroto.saha@gmail.com', 'redmi note 4 [3] ', '2018-04-21', 'not deleverd', 'ffffdddd', 'Cash on Delevery', 54000),
(11, 'subrotosaha1@gmail.com', 'redmi note 4 [4] ', '2018-04-22', 'not deleverd', 'yhv', 'Cash on Delevery', 72000),
(12, 'subrotosaha1@gmail.com', 'redmi note 4 [4] ', '2018-04-22', 'not deleverd', 'rrrrrr', 'Cash on Delevery', 72000),
(13, 'subrotosaha1@gmail.com', 'redmi note 4 [4] ', '2018-04-22', 'not deleverd', 'fyyyyyyy', 'Cash on Delevery', 72000),
(14, 'sri.subroto.saha@gmail.com', 'redmi note 4 [4] ', '2018-04-24', 'not deleverd', 'dfrrrffddd', 'Cash on Delevery', 72000),
(15, 'as@gmail.com', 'Xiaomi Redmi Note 3 [2] ', '2018-04-29', 'not deleverd', '214,Murasjjfnf', 'Cash on Delevery', 36000),
(16, 'as@gmail.com', 'Xiaomi Redmi Note 3 [2] ', '2018-04-29', 'not deleverd', 'dff', 'Cash on Delevery', 36000),
(17, 'as@gmail.com', 'OnePlus 5T [3] ', '2018-04-29', 'not deleverd', 'sdsd', 'Cash on Delevery', 155700),
(18, 'sri.subroto.saha@gmail.com', 'HTC One M9 [1] ', '2018-04-29', 'not deleverd', 'fddd', 'Cash on Delevery', 33990),
(19, 'sri.subroto.saha@gmail.com', 'HTC One M9 [1] ', '2018-04-29', 'not deleverd', 'fddd', 'Cash on Delevery', 33990),
(20, 'sri.subroto.saha@gmail.com', 'Asus Zenfone Selfie  [2] ', '2018-04-29', 'not deleverd', 'ddww', 'Cash on Delevery', 32580);

-- --------------------------------------------------------

--
-- Table structure for table `order details`
--

CREATE TABLE `order details` (
  `Id` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Quantity` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Tprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order details`
--

INSERT INTO `order details` (`Id`, `O_ID`, `Model`, `Quantity`, `Price`, `Tprice`) VALUES
(1, 4, 'redmi note 4', '3', 18000, 54000),
(2, 5, 'Nokia 7', '3', 40000, 120000),
(3, 5, 'OnePlus 5T', '3', 51900, 155700),
(4, 5, 'Samsung Galaxy S7', '3', 64900, 194700),
(5, 5, 'Samsung Galaxy S8', '4', 79900, 319600),
(7, 7, 'Asus Zenfone 5 ZE620', '4', 15000, 60000),
(8, 8, 'redmi note 4', '3', 18000, 54000),
(9, 9, 'Xiaomi Redmi Note 3', '3', 18000, 54000),
(10, 10, 'redmi note 4', '3', 18000, 54000),
(11, 11, 'redmi note 4', '4', 18000, 72000),
(12, 12, 'redmi note 4', '4', 18000, 72000),
(13, 13, 'redmi note 4', '4', 18000, 72000),
(14, 14, 'redmi note 4', '4', 18000, 72000),
(15, 15, 'Xiaomi Redmi Note 3', '2', 18000, 36000),
(16, 16, 'Xiaomi Redmi Note 3', '2', 18000, 36000),
(17, 17, 'OnePlus 5T', '3', 51900, 155700),
(18, 18, 'HTC One M9', '1', 33990, 33990),
(19, 18, 'HTC One M9', '1', 33990, 33990),
(20, 20, 'Asus Zenfone Selfie ', '2', 16290, 32580);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `DOB` date NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`First Name`, `Last Name`, `Email`, `Gender`, `DOB`, `Password`, `Phone`, `Type`) VALUES
('normal', 'user', 'a', 'Male', '1990-03-06', '25d55ad283aa400af464c76d713c07ad', '12458675211', 'user'),
('asdf', 'sa', 'as@gmail.com', 'Male', '1995-01-01', '25f9e794323b453885f5181f1b624d0b', '01521331264', 'user'),
('dddd', 'dddd', 'jkhjkhs@jjjj.com', 'Male', '2018-04-20', '4d6d955ca289f82e3a6e1f52f40108f3', '11111111111', 'user'),
('subroto', 'saha', 'sri.subroto.saha@gmail.com', 'Male', '1997-09-25', 'af32cbe079c624794509102a685453a4', '01792445055', 'admin'),
('subroto', 'saha', 'subrotosaha1@gmail.com', 'Male', '2015-03-20', '0c78245ba4866b4569bced2e3e61863a', '01792445056', 'user'),
('Sudepto', 'Saha', 'sudeptosaha@gmail.com', 'Male', '2001-02-28', '0c78245ba4866b4569bced2e3e61863a', '01773620906', 'user'),
('zs', 'zs', 'zs@gmail.com', 'Male', '1996-12-27', 'bd1a80ff19961c26d953527aa2b7e717', '01750295578', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Brand Name_2` (`Brand Name`),
  ADD KEY `Brand Name` (`Brand Name`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`C_ID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `Model` (`Model`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile feature`
--
ALTER TABLE `mobile feature`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `unique` (`Model`,`Brand`) USING BTREE,
  ADD KEY `Model` (`Model`),
  ADD KEY `Brand` (`Brand`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `order details`
--
ALTER TABLE `order details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mobile feature`
--
ALTER TABLE `mobile feature`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order details`
--
ALTER TABLE `order details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chart`
--
ALTER TABLE `chart`
  ADD CONSTRAINT `chart_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`),
  ADD CONSTRAINT `chart_ibfk_2` FOREIGN KEY (`Model`) REFERENCES `mobile feature` (`Model`),
  ADD CONSTRAINT `chart_ibfk_3` FOREIGN KEY (`M_ID`) REFERENCES `mobile feature` (`Id`);

--
-- Constraints for table `mobile feature`
--
ALTER TABLE `mobile feature`
  ADD CONSTRAINT `mobile feature_ibfk_1` FOREIGN KEY (`Brand`) REFERENCES `brand` (`Brand Name`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
