-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Haz 2022, 10:07:23
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tremglobal`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `address` text COLLATE utf8_turkish_ci NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `email`, `phone`, `address`, `state`) VALUES
(1, 'Murat', 'mrt.ozcan.94@gmail.com', '5393340638', 'Esenyurt / İstanbul', 1),
(2, 'Ali', 'aliguz@gmail.com', '5555555555', 'Pendik / İstanbul', 1),
(3, 'Ayşe ', 'ayse.sezer@gmail.com', '5555555555', 'Bakırköy / İstanbul', 1),
(4, 'Bülent ', 'bulentb@gmail.com', '555 555 55 55', 'Silivri / İstanbul', 1),
(5, 'Aysun Dinç', 'dincay@gmail.com', '555 555 55 55', 'Başakşehir / İstanbul', 1),
(6, 'Veli Kırkayak', 'kirkayak@gmail.com', '555 555 55 55', 'Başakşehir / İstanbul', 1),
(7, 'Ramazan Şahin', 'ramazan@gmail.com', '555 555 55 55', 'Başakşehir / İstanbul', 1),
(8, 'Sude Yılmaz', 'sude@gmail.com', '555 555 55 55', 'Başakşehir / İstanbul', 1),
(9, 'Kerem Yılmaz', 'kerem@gmail.com', '555 555 55 55', 'Büyükçekmece/ İstanbul', 1),
(10, 'Serpil Korusuz Yılmaz', 'serpil@gmail.com', '555 555 55 55', 'Küçükçekmece / İstanbul', 1),
(11, 'Nazar Gülmez', 'nazar@gmail.com', '555 555 55 55', 'Küçükçekmece / İstanbul', 1),
(12, 'Selim Kurt', 'selim@gmail.com', '555 555 55 55', 'Küçükçekmece / İstanbul', 1),
(13, 'Ali Kılıç', 'alikilic@gmail.com', '5555555555', 'başakşehir / ist', 1),
(14, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(37, 'Ahmet ', 'cabus@gmail.com', '234324324234234', 'dsadsadsad', 1),
(36, 'mali', 'mali@gmail.com', '432423432', 'fdsfdsfds', 1),
(45, 'Arnavut', 'arnavut@gmail.com', '324324324', 'fdsfsdfds', 1),
(38, 'Talip', 'talip@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(67, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(42, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(66, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(48, 'Fırat ', 'firat@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(50, 'Murat ÖZCAN', 'mrt@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(51, 'Murat ÖZCAN', 'mrt.oz@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(52, 'Buse', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(65, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(54, 'Ayshe', 'ayshe@com.tr', '05393340638', 'deneme', 1),
(55, 'Murat ÖZCAN', 'm@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(56, 'Murat ÖZCAN', 'mm@gmail.com', '05555555555', 'deneme mah', 1),
(58, 'deneme deneme', 'deneme@deneme.com', '05393340638', 'deneme', 1),
(59, 'Mert Müldür', 'mert@gmail.com', '90+90 555 555 55 55', 'deneme', 1),
(73, 'Kerem Şahin', 'aliguz2@gmail.com', '+213 66665858', 'deneme mah', 1),
(61, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '44+44 888 888 88 88', 'Ardıçlı Mah ESENYURT/İST', 1),
(63, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '+90 5393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(69, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(70, 'Murat ÖZCAN', 'mrt.ozcan.94@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1),
(71, 'deneme deneme', 'murat@', '05393340638', 'deneme', 1),
(72, 'Murat ÖZCAN', 'mrtt@gmail.com', '05393340638', 'Ardıçlı Mah ESENYURT/İST', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
