-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 05:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastemade`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `iduser` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`iduser`, `email`, `password`) VALUES
(1, 'fer@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'nata@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'wira@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'wiranata@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `namamakanan` text NOT NULL,
  `src` varchar(255) NOT NULL,
  `srcimg` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `bahan` text NOT NULL,
  `intruksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id`, `namamakanan`, `src`, `srcimg`, `deskripsi`, `bahan`, `intruksi`) VALUES
(1, 'Nasi Goreng Hitam', 'https://renditions3-tastemade-web.akamaized.net/d16e00d0-s29_485_nasi-goreng-hitam_l_id/mp4/d16e00d0-s29_485_nasi-goreng-hitam_l_id-432-1100-mp4.mp4', '//truffle-assets.imgix.net/aa1c4335-s29_485_nasi-goreng-hitam_l_id.png?w=600&fl=progressive&auto=format,compress&cs=tinysrgb&dpr=1', 'Gurihnya nasi goreng dengan rasa tinta cumi yang khas dengan campuran seafood yang menggoda!', '1 piring nasi putih aduk dengan minyak sedikit\r\n2 sdm margarin\r\n1 btr telur, kocok lepas\r\n½ buah bawang bombai, iris tipis\r\n3 siung bawang putih, iris tipis\r\n3 ekor cumi\r\n5 buah bakso ikan, potong tipis\r\n1 sdm Saus tiram\r\n1 sdm kecap ikan\r\n1 sdm tinta hitam cumi \r\nLada\r\nGaram \r\nGula\r\n1 buah cabai merah besar, iris\r\n1 btg daun bawang, iris tipis', '1. Bersihkan cumi, potong kotak. Berikan perasan jeruk nipis dan sedikit garam, diamkan selama 5 menit. Kemudian goreng cumi, angkat dan tiriskan. Sisihkan.\r\n2. Panaskan margarin, masukkan telur lalu masak sambil di aduk hingga setengah matang.\r\n3. Tambahkan bawang bombai dan bawang putih. Aduk rata dan masak hingga wangi dan setengah matang.\r\n4. Masukkan cumi goreng dan bakso ikan, aduk rata.\r\n5. Tambahkan kecap ikan, saus tiram dan tinta cumi, aduk rata lalu masukkan nasi putih. Aduk lagi hingga tercampur rata.\r\n6. Bumbui dengan garam, lada dan gula sesuai selera. Masukkan daun bawang dan cabai merah besar. Aduk rata. Sajikan.'),
(2, 'Es Krim Pisang Goreng', 'https://renditions3-tastemade-web.akamaized.net/898dc34a-s28_483_es-krim-pisang-goreng_l_id/mp4/898dc34a-s28_483_es-krim-pisang-goreng_l_id-432-1100-mp4.mp4', '//truffle-assets.imgix.net/5fe39eca-s28_483_es-krim-pisang-goreng_l.jpg?w=600&fl=progressive&auto=format,compress&cs=tinysrgb&dpr=1', 'Pisang gorengmu kini dalam bentuk Es Krim yang renyah di luar dan lembut di dalam! ', '3 buah Pisang matang\r\n80 g Kental manis\r\n100 g Gula Pasir\r\n450 ml Whipped cream\r\n5 lbr Roti tawar\r\n2 btr Telur, kocok lepas\r\n200 g Tepung roti/tepung panir\r\nMinyak untuk menggoreng\r\nAlumunium foil ', '1. Kocok whipped cream dengan mixer hingga agak kaku. Sisihkan.\r\n2. Masukkan pisang, gula dan kental manis ke dalam blender, haluskan.\r\n3. Campur ke dalam kocokan whipped cream hingga tercampur rata.\r\n4. Masukkan ke dalam loyang. Bekukan selama 6 jam atau sampai mengeras.\r\n5. Pipihkan roti tawar, ambil es krim pisang lalu bungkus dengan alumunium foil sampai berbentuk bulat. Bekukan kembali selama 4 jam atau sampai mengeras.\r\n6. Setelah mengeras, baluri ke dalam kocokan telur lalu tepung panir.\r\n7. Goreng hingga kecokelatan.\r\n8. Angkat dan tiriskan. Sajikan dengan hiasan kesukaanmu.'),
(3, 'Kepiting Tauco', 'https://renditions3-tastemade-web.akamaized.net/b40e540f-s28_482_kepiting-tauco_l_id/mp4/b40e540f-s28_482_kepiting-tauco_l_id-432-1100-mp4.mp4', '//truffle-assets.imgix.net/25542bdf-s28_482_kepiting-tauco_l_d.png?w=600&fl=progressive&auto=format,compress&cs=tinysrgb&dpr=1', 'Lembutnya daging kepiting dalam balutan bumbu tauco yang gurih!', '1-2 ekor kepiting\r\n2 sdm minyak untuk menumis\r\n3 buah cabai merah besar, iris tipis\r\n3 sdm tauco\r\n2 sdm kecap manis\r\n1 sdm saus tiram \r\n100 ml air\r\n2 batang daun bawang\r\nGaram\r\nLada\r\nMinyak untuk menumis\r\n\r\nHaluskan:\r\n3 siung bawang putih\r\n6 butir bawang merah \r\n2 cm jahe\r\nMinyak', '1. Bagi kepiting menjadi beberapa bagian.\r\n2. Panaskan minyak kemudian goreng kepiting. Angkat dan tiriskan.\r\n3. Haluskan bawang merah, bawang putih dan jahe dengan sedikit minyak. Sisihkan.\r\n4. Panaskan sedikit minyak, tumis bumbu yang telah dihaluskan. Tambahkan cabai merah, tauco, kecap manis dan saus tiram. Aduk rata.\r\n5. Bumbui dengan garam dan lada sesuai selera.\r\n6. Tambahkan air, aduk lagi hingga semua tercampur rata.\r\n7. Masukkan kepiting yang telah digoreng, aduk rata. Tambahkan daun bawang lalu sajikan.'),
(4, 'Tengkleng Bakar', 'https://renditions3-tastemade-web.akamaized.net/66fddb61-s28_481_tengkleng-bakar_l_id/mp4/66fddb61-s28_481_tengkleng-bakar_l_id-432-1100-mp4.mp4', '//truffle-assets.imgix.net/bba61155-s28_481_tengkleng-bakar_l_id.png?w=600&fl=progressive&auto=format,compress&cs=tinysrgb&dpr=1', 'Nikmati kelembutan Tengkleng yang dibakar dengan kuah gulai yang bercita rasa gurih dan sedikit pedas khas Solo ini!', '1 kg tulang iga kambing\r\n1 batang serai\r\n2 lembar daun salam\r\n4 lembar daun jeruk\r\n1 ruas lengkuas\r\n1 ruas jahe\r\n1 L santan cair \r\n2 sdm kecap\r\n5 buah cabai rawit merah\r\n1 sdm garam\r\n1 sdm gula merah, disisir\r\n1 sdt lada\r\n1 sdm air asam jawa\r\n1 batang daun bawang, iris tipis\r\n\r\nBumbu Halus :\r\n3 siung Bawang putih\r\n5 siung Bawang Merah\r\n1 ruas kunyit\r\n1 sdt ketumbar sangrai\r\n2 btr Kemiri\r\n5 buah cabai merah keriting\r\nMinyak \r\n\r\nBumbu bakar :\r\n1 sdm bumbu halus matang\r\n4 sdm kecap manis\r\n1 sdm bawang goreng', '1. Haluskan semua bahan bumbu sampai halus, sisihkan.\r\n2. Siapkan panci, panaskan sedikit minyak, tumis bumbu halus hingga harum.\r\n3. Masukkan serai, daun salam, daun jeruk, lengkuas dan jahe. Tumis hingga bumbu mengeluarkan aroma. Ambil satu sendok bumbu, sisihkan.\r\n4. Tambahkan santan, kemudian masukkan tulang iga kambing, aduk merata.\r\n5. Kecilkan api, masak selama 15 menit, bumbui dengan garam, gula merah, lada, air asam jawa dan kecap manis. Aduk rata lalu tambahkan cabai rawit. Masak hingga daging pada tulang lembut.\r\n6. Angkat tulang lalu bakar sambil di oles dengan bumbu bakaran. Sisihkan.\r\n7. Sajikan dengan siraman kuahnya.'),
(5, 'Kukis Asian Games', 'https://renditions3-tastemade-web.akamaized.net/b64c5e5b-kukis-asian-games_l_id/mp4/b64c5e5b-kukis-asian-games_l_id-432-1100-mp4.mp4', '//truffle-assets.imgix.net/a2621b12-kukis-asian-games_l_id.jpg?w=600&fl=progressive&auto=format,compress&cs=tinysrgb&dpr=1', 'Ayo ikut mensukseskan Asian Games 2018 dengan kukis manis yang di bentuk menjadi salah satu icon Asian Games 2018, Kaka si Badak bercula satu!', '', ''),
(6, 'Nasi Liwet Merah Putih ', 'https://renditions3-tastemade-web.akamaized.net/a8d34413-s28_479_nasi-liwet-merah-putih_l_id/mp4/a8d34413-s28_479_nasi-liwet-merah-putih_l_id-432-1100-mp4.mp4', '//truffle-assets.imgix.net/809a0067-s28_479_nasi-liwet-merah-putih_l_id.jpg?w=600&fl=progressive&auto=format,compress&cs=tinysrgb&dpr=1', 'Rayakan kemerdekaan HUT RI Ke-73 dengan nikmatnya Nasi Liwet Merah Putih yang dihiasi dengan ayam goreng, tahu dan tempe goreng kesukaanmu! ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `namamakanan` varchar(255) NOT NULL,
  `src` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `hreflogin` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `namamakanan`, `src`, `href`, `hreflogin`, `deskripsi`) VALUES
(1, 'Nasi Goreng Hitam', 'https://renditions3-tastemade-web.akamaized.net/d16e00d0-s29_485_nasi-goreng-hitam_l_id/mp4/d16e00d0-s29_485_nasi-goreng-hitam_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Welcome/resep_login', 'Gurihnya nasi goreng dengan rasa tinta cumi yang khas dengan campuran seafood yang menggoda!'),
(2, 'Es Krim Pisang Goreng', 'https://renditions3-tastemade-web.akamaized.net/898dc34a-s28_483_es-krim-pisang-goreng_l_id/mp4/898dc34a-s28_483_es-krim-pisang-goreng_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Welcome/resep_login', 'Pisang gorengmu kini dalam bentuk Es Krim yang renyah di luar dan lembut di dalam! '),
(3, 'Kepiting Tauco', 'https://renditions3-tastemade-web.akamaized.net/b40e540f-s28_482_kepiting-tauco_l_id/mp4/b40e540f-s28_482_kepiting-tauco_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Welcome/resep_login', 'Lembutnya daging kepiting dalam balutan bumbu tauco yang gurih!'),
(4, 'Tengkleng Bakar', 'https://renditions3-tastemade-web.akamaized.net/66fddb61-s28_481_tengkleng-bakar_l_id/mp4/66fddb61-s28_481_tengkleng-bakar_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Welcome/resep_login', 'Nikmati kelembutan Tengkleng yang dibakar dengan kuah gulai yang bercita rasa gurih dan sedikit pedas khas Solo ini!'),
(5, 'Kukis Asian Games ', 'https://renditions3-tastemade-web.akamaized.net/b64c5e5b-kukis-asian-games_l_id/mp4/b64c5e5b-kukis-asian-games_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Welcome/resep_login', 'Ayo ikut mensukseskan Asian Games 2018 dengan kukis manis yang di bentuk menjadi salah satu icon Asian Games 2018, Kaka si Badak bercula satu!'),
(6, 'Nasi Liwet Merah Putih ', 'https://renditions3-tastemade-web.akamaized.net/a8d34413-s28_479_nasi-liwet-merah-putih_l_id/mp4/a8d34413-s28_479_nasi-liwet-merah-putih_l_id-432-1100-mp4.mp4', 'Welcome/resep', 'Welcome/resep_login', 'Rayakan kemerdekaan HUT RI Ke-73 dengan nikmatnya Nasi Liwet Merah Putih yang dihiasi dengan ayam goreng, tahu dan tempe goreng kesukaanmu! ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
