-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 16 Haz 2021, 11:55:34
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

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
  `calisma_linki` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `uzanti` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kucuk_resim` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `calismalar`
--

INSERT INTO `calismalar` (`id`, `kategori_id`, `calisma_adi`, `calisma_linki`, `uzanti`, `kucuk_resim`, `resim_url`) VALUES
(4, 1, 'Tablo Çalışması', 'https://wtt.ozayakcan.xyz/odevler/09112020-tablo', 'HTML', '/images/calismalar/web-tasarimin-temelleri/tablo.png', '/images/calismalar/web-tasarimin-temelleri/tablo.png'),
(5, 1, 'Listeleme Biçimleri', 'https://wtt.ozayakcan.xyz/odevler/09112020-listeleme', 'HTML', '/images/calismalar/web-tasarimin-temelleri/listeleme.png', '/images/calismalar/web-tasarimin-temelleri/listeleme.png'),
(6, 1, 'Anchor Çalışması', 'https://wtt.ozayakcan.xyz/odevler/09112020-anchor', 'HTML', '/images/calismalar/web-tasarimin-temelleri/anchor.png', '/images/calismalar/web-tasarimin-temelleri/anchor.png'),
(7, 1, 'Frame Yapısı', 'https://wtt.ozayakcan.xyz/odevler/16112020-frame', 'HTML', '/images/calismalar/web-tasarimin-temelleri/frame.png', '/images/calismalar/web-tasarimin-temelleri/frame.png'),
(8, 3, 'Smart Filter Kullanımı', 'https://drive.google.com/file/d/1bHxaInja3oQ3ZTyx6_HJQXx99N1Cp5qZ/view?usp=sharing', 'PSD', '/images/calismalar/grafik-ve-animasyon-I/odev-1.png', 'https://drive.google.com/file/d/1Hop913ZGLrdsZuNY_uz7-q3h6R3gvEg5/view?usp=sharing'),
(9, 3, 'Katman Maskesi Kullanımı', 'https://drive.google.com/file/d/1_Sx-KxmcJmy6vGBAbG_yNjfmwHLQx49K/view?usp=sharing', 'PSD', '/images/calismalar/grafik-ve-animasyon-I/odev-2.png', 'https://drive.google.com/file/d/1LowCAzf36FRU1GOy-7MyYSRKnb9nQ0j5/view?usp=sharing'),
(10, 3, 'Curves ve Katman Maskesi Kullanımı', 'https://drive.google.com/file/d/1751HmZWIC9p76Ml_MEukt75ZXY3fxmNK/view?usp=sharing', 'PSD', '/images/calismalar/grafik-ve-animasyon-I/odev-3.png', 'https://drive.google.com/file/d/101Awah627YmQQG8ORwGdctan125WuvHE/view?usp=sharing'),
(11, 3, 'Katman Maskesi - Brightness - Color Balance Kullanımı', 'https://drive.google.com/file/d/1PsA3sWPSRGZD1CHRTMlu-NJXeRmUJRm2/view?usp=sharing', 'PSD', '/images/calismalar/grafik-ve-animasyon-I/odev-4.png', 'https://drive.google.com/file/d/1yUrXRRYTgJM4tddn14v05077w0oy7d1K/view?usp=sharing'),
(12, 2, 'C#\'ta Veri Tipleri - İsimlendirme Kuralları - Operatörler', 'https://drive.google.com/file/d/1pxXDIY4kVJOryFg_MgolED-el1-vwfNH/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-1.JPG', '/images/calismalar/programlama-temelleri/hafta-1.JPG'),
(13, 2, 'Referans ve Değer Veri Tipleri - İkilik ve Onluk Sayı Sistemleri', 'https://drive.google.com/file/d/1tcKAth9klE4IIDl2M9IRFNs9F5xVPD3m/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-2.JPG', '/images/calismalar/programlama-temelleri/hafta-2.JPG'),
(14, 2, 'Windows Form\'da Genel Kontroller - Erişim Belirteçleri', 'https://drive.google.com/file/d/1mtwpByKufufAJ4R1xUAOjs9MBKn-oe4D/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-3.JPG', '/images/calismalar/programlama-temelleri/hafta-3.JPG'),
(15, 2, 'Referans ve Değer Veri Tipleri - İkilik ve Onluk Sayı Sistemleri', 'https://drive.google.com/file/d/1fW_G10U4HFBosbPoRVzCFmEhYxppVU1K/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-4.JPG', '/images/calismalar/programlama-temelleri/hafta-4.JPG'),
(16, 2, 'Switch İfadesi Kullanımı - Diziler (Array)', 'https://drive.google.com/file/d/1bdaQFKyzgH7kuIh1v0OPvoqIzIr5fStu/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-5.JPG', '/images/calismalar/programlama-temelleri/hafta-5.JPG'),
(17, 2, 'For Döngüsü Kullanımı', 'https://drive.google.com/file/d/1Nrfyt38LBizxlWY6rYOWg8YogwxmlgYS/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-6.JPG', '/images/calismalar/programlama-temelleri/hafta-6.JPG'),
(18, 2, 'Değişkenlerin Varsayılan Değerleri - Sınıf(Class) Kütüphanesi', 'https://drive.google.com/file/d/1n3zg-lvei9SqbNmPvCvdF5jOJO50M01r/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-7.JPG', '/images/calismalar/programlama-temelleri/hafta-7.JPG'),
(19, 2, 'Sınıf Kütüphanesi - Properties', 'https://drive.google.com/file/d/1zbw5FyIFf1-jTgitm_4XWJjoLsSJ7Kdu/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-8.JPG', '/images/calismalar/programlama-temelleri/hafta-8.JPG'),
(20, 2, 'Çok Boyutlu Diziler - Foreach Kullanımı', 'https://drive.google.com/file/d/1GZbKAwyc-kyDFnDD9E8i_d9SifMLmkXf/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-9.JPG', '/images/calismalar/programlama-temelleri/hafta-9.JPG'),
(21, 2, 'Try/Catch İfadesi - DialogBox Kullanımı', 'https://drive.google.com/file/d/1IhoXusq5hjSpAKANu3w0RhYtQn-PBmw6/view?usp=sharing', 'PDF', '/images/calismalar/programlama-temelleri/hafta-10.JPG', '/images/calismalar/programlama-temelleri/hafta-10.JPG'),
(23, 8, 'Neon Poster Çalışması', 'https://drive.google.com/file/d/1_J3jD11ECS5YoPlY42lXt7pvNp_v_l0y/view?usp=sharing', 'PDF', '/images/calismalar/grafik-ve-animasyon-II/odev-1.png', '/images/calismalar/grafik-ve-animasyon-II/odev-1.png'),
(24, 8, 'Harf Logo Çalışması', 'https://drive.google.com/file/d/1KfSetn3y357AoKp3UWoeiGhhl573kOMu/view?usp=sharing', 'PDF', '/images/calismalar/grafik-ve-animasyon-II/odev-2.png', '/images/calismalar/grafik-ve-animasyon-II/odev-2.png');

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

--
-- Tablo döküm verisi `calismalar_kategori`
--

INSERT INTO `calismalar_kategori` (`id`, `adi`, `ogretim_gorevlisi`, `ogretim_gorevlisi_site`, `seo`, `resim_url`) VALUES
(1, 'Web Tasarımın Temelleri', 'Öğr. Gör. Taner KARATAŞ', 'https://www.tanerkaratas.com/', 'web-tasarimin-temelleri', '/images/calismalar/web-tasarimin-temelleri.png'),
(2, 'Programlama Temelleri', 'Dr. Öğr. Üyesi Özel SEBETCİ', '', 'programlama-temelleri', '/images/calismalar/programlama-temelleri.png'),
(3, 'Grafik ve Animasyon I', 'Öğr. Gör. Gizem GÜREL DÖNÜK', '', 'grafik-ve-animasyon-I', '/images/calismalar/grafik-ve-animasyon-I.png'),
(8, 'Grafik ve Animasyon II', 'Öğr. Gör. Gizem GÜREL DÖNÜK', '', 'grafik-ve-animasyon-II', '/images/calismalar/grafik-ve-animasyon-II.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fotogaleri`
--

CREATE TABLE `fotogaleri` (
  `id` int(11) NOT NULL,
  `resim_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `fotogaleri`
--

INSERT INTO `fotogaleri` (`id`, `resim_url`) VALUES
(1, '/images/fenerbahce/0.jpg'),
(2, '/images/fenerbahce/1.jpg'),
(3, '/images/fenerbahce/2.jpg'),
(4, '/images/fenerbahce/3.jpg'),
(5, '/images/fenerbahce/4.jpg'),
(6, '/images/fenerbahce/5.jpg'),
(7, '/images/fenerbahce/6.jpg'),
(8, '/images/fenerbahce/7.jpg'),
(9, '/images/fenerbahce/8.jpg'),
(10, '/images/fenerbahce/9.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_bilgileri`
--

CREATE TABLE `iletisim_bilgileri` (
  `id` int(11) NOT NULL,
  `bilgi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `fa_icon` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim_bilgileri`
--

INSERT INTO `iletisim_bilgileri` (`id`, `bilgi`, `fa_icon`) VALUES
(1, 'iletisim@ozayakcan.xyz', 'fa fa-envelope'),
(2, 'ozay.akcan97@gmail.com', 'fab fa-google');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `linkler`
--

CREATE TABLE `linkler` (
  `id` int(11) NOT NULL,
  `tur` int(1) NOT NULL,
  `adi` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ek` varchar(5) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `linki` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `linkler`
--

INSERT INTO `linkler` (`id`, `tur`, `adi`, `ek`, `linki`) VALUES
(1, 0, 'Fahrettin Özbay', 'ın', 'https://fahrettinozbay.site/'),
(2, 0, 'İbrahim Tavil', 'in', 'https://ibrahimtavil.xyz/'),
(3, 0, 'Ruhi Mertcan Zabun', 'un', 'https://mertcan.space/'),
(4, 0, 'Berk Osman Özdemir', 'in', 'https://berkosmanozdemir.xyz/'),
(5, 0, 'Doğukan Ateş', 'in', 'https://dogukanates.xyz/'),
(6, 1, 'Adnan Menderes Üniversitesi', 'nin', 'https://www.adu.edu.tr/'),
(7, 1, 'Aydın Meslek Yüksekokulu', 'nun', 'https://akademik.adu.edu.tr/myo/aymes/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteler`
--

CREATE TABLE `siteler` (
  `id` int(11) NOT NULL,
  `siteadi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `siteurlsi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `sitemapurlsi` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `siteler`
--

INSERT INTO `siteler` (`id`, `siteadi`, `siteurlsi`, `sitemapurlsi`) VALUES
(1, 'anasayfa', 'https://ozayakcan.xyz/', 'https://ozayakcan.xyz/sitemap.xml');

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
-- Tablo için indeksler `fotogaleri`
--
ALTER TABLE `fotogaleri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim_bilgileri`
--
ALTER TABLE `iletisim_bilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `linkler`
--
ALTER TABLE `linkler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siteler`
--
ALTER TABLE `siteler`
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
-- Tablo için AUTO_INCREMENT değeri `fotogaleri`
--
ALTER TABLE `fotogaleri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim_bilgileri`
--
ALTER TABLE `iletisim_bilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `linkler`
--
ALTER TABLE `linkler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `siteler`
--
ALTER TABLE `siteler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
