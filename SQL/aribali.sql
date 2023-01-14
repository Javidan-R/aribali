-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2020 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aribali`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `tarix` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `basliq` varchar(255) NOT NULL,
  `mezmun` text NOT NULL,
  `seo` varchar(500) NOT NULL,
  `sekil` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `sy_tarix` datetime NOT NULL,
  `tarix` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `basliq`, `mezmun`, `seo`, `sekil`, `file`, `sy_tarix`, `tarix`, `status`) VALUES
(2, 'Hərtərəfli öyrənmə', '<p>ARİBALİ MENTORSHİP olaraq sizlər üçün:</p>\r\n<ol>\r\n<li>Sürətli dəyişim proqramları</li>\r\n<li> Dil öyrənmə proqramları və kursları</li>\r\n<li>Şəxsi inkişaf proqramları</li>\r\n<li> Mentorluq proqramları Təqdim edirik.</li>\r\n</ol>\r\n<p>Təqdim etdiyimiz proqramların hamısı emosional zəka əsaslıdır.</p>\r\n<p>Proqramlarımızda və kurslarımızda individuallıq, daxili potensialın</p>\r\n<p>üzə çıxarılması və emosional zəka biliklərinin öyrənilməsi ve </p>\r\n<p>tətbiqi sizlər üçün hazırlanmışdır.</p>', 'herterefli-oyrenme', 'sekil/umumi/652-pen x.jpg', 'sekil/umumi/849-Cavidan-Recebli-cv.pdf', '2020-05-03 19:36:15', '2020-05-03 19:36:15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `course_about`
--

CREATE TABLE `course_about` (
  `id` int(11) NOT NULL,
  `basliq` varchar(255) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_about`
--

INSERT INTO `course_about` (`id`, `basliq`, `mezmun`, `sekil`, `video`) VALUES
(1, 'Aribali Mentorship', '<p>ARİBALİ MENTORSHİP olaraq sizlər üçün:</p>\r\n<ol>\r\n<li>Sürətli dəyişim proqramları</li>\r\n<li> Dil öyrənmə proqramları və kursları</li>\r\n<li>Şəxsi inkişaf proqramları</li>\r\n<li> Mentorluq proqramları Təqdim edirik.</li>\r\n</ol>\r\n<p>Təqdim etdiyimiz proqramların hamısı emosional zəka əsaslıdır.</p>\r\n<p>Proqramlarımızda və kurslarımızda individuallıq, daxili potensialın</p>\r\n<p>üzə çıxarılması və emosional zəka biliklərinin öyrənilməsi və</p>\r\n<p>tətbiqi sizlər üçün hazırlanmışdır.</p>', 'sekil/umumi/613-geriyəbaxmaq.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `basliq` varchar(255) NOT NULL,
  `mezmun` text NOT NULL,
  `seo` varchar(255) NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `sy_tarix` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tarix` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `basliq`, `mezmun`, `seo`, `sekil`, `sy_tarix`, `tarix`, `status`) VALUES
(20, 'New Generation', '<p class=\"lead\"> </p>\r\n<p class=\"lead\">AriBali Mentorship sizlər üçün təhsil, mentorluq və inkişaf proqramlarını özündə birləşdirən kompleks inkişaf mərkəzidir.</p>\r\n<p>Sizlər üçün hazırladığımız bütün təhsi paketlərinin, mentorluq və inkişaf proqramlarının innovativ olmasına çalışırıq. Buna görə də bizdən aldığınız təhsilin sonunda sadəcə bir sertifikat və ya diplomla kifayətlənməyəcəksiniz. Eyni zamanda hər bir proqramın sonunda praktiki bilik və bacarıqlara həmçinin konkret bir profilə sahib olacaqsınız.</p>\r\n<p>AriBali Mentorshipdən sizin üçün! Təcrübə proqramları. İş tapmaqda kömək. Konkret hədəf üçün dəstək. Təlimlər. Təcrübəli şəxslərin seminarları. Komanda qurmaq üçün kömək. Networking. Conversation club.</p>', 'new-generation', 'sekil/umumi/799-Medical_science_33-128.png', '2020-05-03 19:43:01', '2020-05-03 19:43:01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `haqqinda`
--

CREATE TABLE `haqqinda` (
  `id` int(11) NOT NULL,
  `sekil` varchar(50) NOT NULL,
  `video` varchar(255) NOT NULL,
  `basliq` varchar(250) NOT NULL,
  `mezmun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `haqqinda`
--

INSERT INTO `haqqinda` (`id`, `sekil`, `video`, `basliq`, `mezmun`) VALUES
(1, 'sekil/umumi/595-aribalilogo.jpg', 'sekil/video/414-Aribali.mp4', 'AriBali Mentorship  Haqqında', '<p class=\"lead\">AriBali Mentorship sizlər üçün təhsil, mentorluq və inkişaf proqramlarını özündə birləşdirən kompleks inkişaf mərkəzidir.</p>\r\n<p>Sizlər üçün hazırladığımız bütün təhsi paketlərinin, mentorluq və inkişaf proqramlarının innovativ olmasına çalışırıq. Buna görə də bizdən aldığınız təhsilin sonunda sadəcə bir sertifikat və ya diplomla kifayətlənməyəcəksiniz. Eyni zamanda hər bir proqramın sonunda praktiki bilik və bacarıqlara həmçinin konkret bir profilə sahib olacaqsınız.</p>\r\n<p>AriBali Mentorshipdən sizin üçün! Təcrübə proqramları. İş tapmaqda kömək. Konkret hədəf üçün dəstək. Təlimlər. Təcrübəli şəxslərin seminarları. Komanda qurmaq üçün kömək. Networking. Conversation club.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `meqale`
--

CREATE TABLE `meqale` (
  `id` int(11) NOT NULL,
  `basliq` varchar(250) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(50) NOT NULL,
  `seo` varchar(250) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `sy_tarix` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  `tarix` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meqale`
--

INSERT INTO `meqale` (`id`, `basliq`, `mezmun`, `sekil`, `seo`, `status`, `sy_tarix`, `tarix`) VALUES
(10, 'Təcrübəli mentorlar', '<p>İllər boyunca bazarda adını eşitdiyiniz mentorlar və müəllimlər. Həmçinin gənc nəsil .Yeni mentorlar</p>', 'sekil/meqale/847-why.jpg', 'tecrubeli-mentorlar', '1', '2020-05-03 15:53:56', '2020-05-03'),
(11, 'Hərtərəfli öyrənmə', '<p>Öyrəndiyinizi həm praktiki</p>\r\n<p>həm də nəzəri öyrənin.</p>\r\n<p>Həmçinin real təcrübələr qazanın.</p>', 'sekil/meqale/436-deeply.jpg', 'herterefli-oyrenme', '1', '2020-05-03 15:56:53', '2020-05-03'),
(12, 'Yüksək motivasiya', '<p>Yaşadığınız hər saniyə dünyaya verdiyiniz bir dəyərdir. Öz dəyərinizi və zamanınızın dəyərini bilin...</p>', 'sekil/meqale/312-yuksek_motivasiya.jpg', 'yuksek-motivasiya', '1', '2020-05-03 15:56:50', '2020-05-03'),
(13, 'Xarici tələbələr ilə ünsiyyət', '<p>Əslində siz də ingiliscə və ya istədiyiniz bir dildə danışa bilərsiniz. Sadəcə ünsiyyətə ehtiyacınız var. Bunu da biz təmin edirik.</p>', 'sekil/meqale/847-xarici_telebe.jpg', 'xarici-telebeler-ile-unsiyyet', '1', '2020-05-03 15:56:47', '2020-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `mina`
--

CREATE TABLE `mina` (
  `admin_id` int(11) NOT NULL,
  `admin_ad` varchar(30) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `admin_sifre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mina`
--

INSERT INTO `mina` (`admin_id`, `admin_ad`, `admin_mail`, `admin_sifre`) VALUES
(1, 'balim', 'mentorship@gmail.com', 'ozrggaribali.$4');

-- --------------------------------------------------------

--
-- Table structure for table `photo_com`
--

CREATE TABLE `photo_com` (
  `id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `AdSoyad` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mesaj` text NOT NULL,
  `ip` varchar(50) NOT NULL,
  `tarix` datetime NOT NULL,
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registr`
--

CREATE TABLE `registr` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `tarix` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reyler`
--

CREATE TABLE `reyler` (
  `id` int(11) NOT NULL,
  `xidmet_id` int(11) NOT NULL,
  `AdSoyad` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mesaj` text NOT NULL,
  `ip` varchar(25) NOT NULL,
  `tarix` datetime NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `unvan` varchar(250) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tel` bigint(4) NOT NULL,
  `mobil` bigint(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `poct` varchar(100) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL,
  `whatsapp` varchar(500) NOT NULL,
  `youtube` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `unvan`, `img`, `tel`, `mobil`, `email`, `poct`, `facebook`, `instagram`, `linkedin`, `whatsapp`, `youtube`) VALUES
(1, 'AriBali Mentorship sizlər üçün təhsil, mentorluq və inkişaf proqramlarını özündə birləşdirən kompleks inkişaf mərkəzidir', '“İnanırıq ki, daha yaxşı bir dünya üçün daha yaxşı bir cəmiyyət lazımdır və daha yaxşı bir cəmiyyət üçünsə daha yaxşı təhsil və inkişaf etmiş fərdlər lazımdır. Buna görə də fərdlərin inkişafı ilə daha yaxşı bir dünyanı birlikdə quraq.”', 'Bakı, Azərbaycan, AZ1141 Hüseyn Cavid prospekti, 186 (Mirvari Park kompleksi, D Bloku)', '', 994519992351, 35, 'aribali.mentorship.company.edu@gmail.com', 'AZ1141', 'https://www.facebook.com/AriBali-Mentorship-102678181210182/?modal=admin_todo_tour', 'https://www.instagram.com/aribalimentorship/', 'https://www.instagram.com/sayt_qur/', 'https://chat.whatsapp.com/JDzysnhzxmP5Cx5HStvTPk', 'https://www.instagram.com/sayt_qur/');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `AdSoyad` varchar(100) NOT NULL,
  `basliq` varchar(255) NOT NULL,
  `mezmun` text NOT NULL,
  `sekil` varchar(255) NOT NULL,
  `seo` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `sy_tarix` datetime NOT NULL,
  `tarix` datetime NOT NULL,
  `fb` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `wp` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `AdSoyad`, `basliq`, `mezmun`, `sekil`, `seo`, `status`, `sy_tarix`, `tarix`, `fb`, `insta`, `wp`, `linkedin`) VALUES
(19, 'Onur Yusubov', 'Şirkət direktoru və həmtəsisçi', '<p>ADAU Aqromühəndislik ixtisası ,2019-cu il məzunu. İki ildən artıqdır ki Soft skills təlimləri verir</p>', 'sekil/meqale/439-onur.jpg', 'sirket-direktoru-ve-hemtesisci', '1', '2020-05-03 20:17:56', '2020-05-03 19:34:12', 'https://www.facebook.com/Yusubovonur', 'https://www.linkedin.com/in/onur', 'kjb', 'Şirkət direktoru və həmtəsisçi'),
(20, 'Zaur Hacıbalayev', 'Həmtəsisçi', '<p>Azərbaycan Universteti , Finance ixtisası, 2015 məzunu . İki ildən artıqdır ki ingilis dili müəllimi işləyir</p>', 'sekil/meqale/319-creative.jpg', 'hemtesisci', '1', '2020-05-03 20:08:04', '2020-05-03 20:08:04', 'https://www.facebook.com/zaur.zaurchik?ref=br_tf&epa=SEARCH_BOX', 'https://www.linkedin.com/in/zaur-hajibalayev-986b69135/', '', ''),
(21, 'Rüstəm Alızadə', 'Research & Development', '<p>ADAU Melorasiya və su tikinti mühəndisliyi ixtisası .Startapçı , Research &amp; Development  mütəxəssisi</p>', 'sekil/meqale/615-creative.jpg', 'research-development', '1', '2020-05-03 20:10:26', '2020-05-03 20:10:26', 'https://www.facebook.com/rustem.elizade.566', 'https://www.facebook.com/rustem.elizade.566', '', ''),
(22, 'Goncha Mammadova', ' Cyber security expert', '<p>İT Mütəxəssisi .BMU tələbəsi, Sabah qrupları.Komandamızın maraqlı , savadlı və kəskin zəkalı üzvü</p>', 'sekil/meqale/873-qönçə.jpg', 'cyber-security-expert', '1', '2020-05-03 20:13:10', '2020-05-03 20:13:10', 'https://www.facebook.com', 'https://www.instagram.com', '', ''),
(23, 'Gulbaniz Alizade', 'Development specialist', '<p>Research and Development mütəxəssisi</p>\r\n<p class=\"lead\">Daima pozitiv, işinə məsulliyətli komanda üzvü</p>', 'sekil/meqale/888-gülbəniz.jpg', 'development-specialist', '1', '2020-05-03 20:14:40', '2020-05-03 20:14:40', 'https://www.facebook.com', 'https://www.instagram.com', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tedbirler`
--

CREATE TABLE `tedbirler` (
  `id` int(11) NOT NULL,
  `basliq` varchar(250) NOT NULL,
  `mezmun` text NOT NULL,
  `oxunma_vaxti` varchar(255) NOT NULL,
  `sekil` varchar(250) NOT NULL,
  `seo` varchar(500) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `sy_tarix` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tarix` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tedbirler`
--

INSERT INTO `tedbirler` (`id`, `basliq`, `mezmun`, `oxunma_vaxti`, `sekil`, `seo`, `status`, `sy_tarix`, `tarix`) VALUES
(8, 'AriBali Mentorship sizl', '<p>ARİBALİ MENTORSHİP olaraq sizlər üçün:</p>\r\n<ol>\r\n<li>Sürətli dəyişim proqramları</li>\r\n<li> Dil öyrənmə proqramları və kursları</li>\r\n<li>Şəxsi inkişaf proqramları</li>\r\n<li> Mentorluq proqramları Təqdim edirik.</li>\r\n</ol>\r\n<p>Təqdim etdiyimiz proqramların hamısı emosional zəka əsaslıdır.</p>\r\n<p>Proqramlarımızda və kurslarımızda individuallıq, daxili potensialın</p>\r\n<p>üzə çıxarılması və emosional zəka biliklərinin öyrənilməsi və</p>\r\n<p>tətbiqi sizlər üçün hazırlanmışdır.</p>', '3 deq', 'sekil/meqale/588-Screenshot from 2020-02-07 21-54-25.png', 'aribali-mentorship-sizl', '1', '2020-05-03 19:38:23', '2020-05-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_about`
--
ALTER TABLE `course_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haqqinda`
--
ALTER TABLE `haqqinda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meqale`
--
ALTER TABLE `meqale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mina`
--
ALTER TABLE `mina`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `photo_com`
--
ALTER TABLE `photo_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registr`
--
ALTER TABLE `registr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reyler`
--
ALTER TABLE `reyler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tedbirler`
--
ALTER TABLE `tedbirler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_about`
--
ALTER TABLE `course_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `haqqinda`
--
ALTER TABLE `haqqinda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meqale`
--
ALTER TABLE `meqale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mina`
--
ALTER TABLE `mina`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photo_com`
--
ALTER TABLE `photo_com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registr`
--
ALTER TABLE `registr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reyler`
--
ALTER TABLE `reyler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tedbirler`
--
ALTER TABLE `tedbirler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
