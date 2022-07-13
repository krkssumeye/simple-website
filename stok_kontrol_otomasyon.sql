-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220609.11e34a6fec
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Haz 2022, 13:34:00
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stok_kontrol_otomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel_bilgileri`
--

CREATE TABLE `personel_bilgileri` (
  `PERSONEL_ID` int(11) NOT NULL,
  `PERSONEL_ADI` varchar(50) NOT NULL,
  `PERSONEL_SOYAD` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sifre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personel_bilgileri`
--

INSERT INTO `personel_bilgileri` (`PERSONEL_ID`, `PERSONEL_ADI`, `PERSONEL_SOYAD`, `email`, `sifre`) VALUES
(8, 'Sumeyye', 'Karakas', 'karakassumeyye3@gmail.com', 'Sumeyye55'),
(16, 'Yıldız', 'yık', 'yıldız@gmail.com', 'sumeyye93');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urunler_ıd` int(11) NOT NULL,
  `urun_adi` varchar(20) NOT NULL,
  `urun_kategori` varchar(20) NOT NULL,
  `urun_sezon` varchar(20) NOT NULL,
  `urun_adet` int(20) NOT NULL,
  `urun_fiyat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urunler_ıd`, `urun_adi`, `urun_kategori`, `urun_sezon`, `urun_adet`, `urun_fiyat`) VALUES
(19, 'Yırtmaçlı Kot Pantol', 'Alt Giyim', 'Yaz', 200, 190);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `personel_bilgileri`
--
ALTER TABLE `personel_bilgileri`
  ADD PRIMARY KEY (`PERSONEL_ID`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urunler_ıd`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `personel_bilgileri`
--
ALTER TABLE `personel_bilgileri`
  MODIFY `PERSONEL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urunler_ıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



