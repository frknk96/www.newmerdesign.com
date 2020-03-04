-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2018 at 11:01 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keremsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'admin', 'newdesign347', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_foto` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_hakkimizda` varchar(2000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_telefon`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_adres`, `ayar_mail`, `ayar_foto`, `ayar_hakkimizda`) VALUES
(1, '', '05071163286', 'NewMer Design', 'Bu site çok estetik mermer tasarımları yapar1', 'mermer,taşşşşşş', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'Çıkmaz ayın son perşembesi123', 'info@newmerdesign.com', '', 'Derin Mermer Masa Metal Mobilya ve Dekorasyon 2012’dan bu yana gösterdiği performansla beraber başarı da elde etmiş bir firmadır. Küçük bir atölye olarak başlayan firmamızın ilk hedefi yurdumuzda hızlı olarak gelişen firmalar ve yurt dışında faaliyet gösteren Türk firmalar öncelikli tercih sebebiydi. Derin Mermer Masa Metal Mobilya ve Dekorasyon firması olarak her bitirdiğimiz bir projeyi hedefimize hızla ulaşabilmek için yerleştirdiğimiz uzun bir yol çizgisi idi.   Şimdi ki dönemde ise profesyonel ekibimiz sayesinde aynı mantıkta yeni fikirlerimizle hedefler koyarak en hızlı şekilde ilerlemektedir. Derin Mermer Masa Metal Mobilya ve Dekorasyon yurtdışında şimdiye kadar birçok ülke başarılı projelere imza atarak da tarihe adını yazmıştır.  Derin Mermer Masa Metal Mobilya ve Dekorasyon her daim müşterilerin isteği doğrultusunda projeler çıkaran aynı zamanda müşterinin sıkıntı yaşadığı noktalarda ise onlara ayrı alternatif çözümler sunan bir firmadır. Bu sayede Derin Mermer Masa Metal Mobilya ve Dekorasyon projelerini hesaplı, sağlam ve uzun vadeli olarak üretmektedir. Ekonomik bazda çalışan ekibimiz bunun yanı sıra dünya standart’ına göre malzeme kullanmaktadır. Yani üzerinde çalışılan projenin ortamına göre uyumlu ve sağlam olarak yapılmaktadır.'),
(2, 'img/logos/envato.jpg', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', '', '', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `menuler`
--

CREATE TABLE `menuler` (
  `tablo_id` int(11) NOT NULL,
  `tablo_menuad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tablo_menuurl` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `tablo_menusira` varchar(50) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `menuler`
--

INSERT INTO `menuler` (`tablo_id`, `tablo_menuad`, `tablo_menuurl`, `tablo_menusira`) VALUES
(1, 'Hizmetlerimiz', '#services', '0'),
(3, 'Hakkımızda', '#about', '0'),
(4, 'İletişim', '#contact', '0'),
(5, 'Ürünler', '#portfolio', '0');

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(40) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyati` int(100) NOT NULL,
  `urun_aciklamasi` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_resim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `fotograf_link` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `urun_fiyati`, `urun_aciklamasi`, `urun_resim`, `fotograf_adi`, `fotograf_link`) VALUES
(10, 'sehpa2', 2500, 'Çok dehşet bir sehpa', 'uploads/23916226203041728022sehpa2.jpg', '2', ''),
(12, 'sehpa4', 3500, 'Oha böyle bişey yok', 'uploads/27568302183166022125sehpa4.jpg', '4', ''),
(13, 'sehpa5', 2000, 'Çok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpaÇok güzel bir sehpa', 'uploads/26075211182215426142sehpa1.jpg', '5', ''),
(14, 'sehpa9', 1000, 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdv', 'uploads/21007310202945320460sehpa5.jpg', '7', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`tablo_id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `menuler`
--
ALTER TABLE `menuler`
  MODIFY `tablo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
