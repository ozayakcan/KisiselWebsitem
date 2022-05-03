-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 May 2022, 16:22:32
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ozayakcan`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calismalar`
--

CREATE TABLE `calismalar` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `calisma_adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `altsayfa` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '',
  `calisma_linki` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `uzanti` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kucuk_resim` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calismalar_kategori`
--

CREATE TABLE `calismalar_kategori` (
  `id` int(11) NOT NULL,
  `adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ogretim_gorevlisi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ogretim_gorevlisi_site` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `seo` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_bilgileri`
--

CREATE TABLE `iletisim_bilgileri` (
  `id` int(11) NOT NULL,
  `yerel` int(1) NOT NULL DEFAULT 0,
  `bilgi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `fa_icon` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_bilgileri`
--

INSERT INTO `iletisim_bilgileri` (`id`, `yerel`, `bilgi`, `fa_icon`) VALUES
(1, 1, 'iletisim', 'fa fa-envelope'),
(2, 0, 'ozay.akcan97@gmail.com', 'fab fa-google');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `calismalar`
--
ALTER TABLE `calismalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `calismalar_kategori`
--
ALTER TABLE `calismalar_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim_bilgileri`
--
ALTER TABLE `iletisim_bilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `calismalar`
--
ALTER TABLE `calismalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `calismalar_kategori`
--
ALTER TABLE `calismalar_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim_bilgileri`
--
ALTER TABLE `iletisim_bilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
