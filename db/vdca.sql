-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 11:13 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vdca`
--

-- --------------------------------------------------------

--
-- Table structure for table `vdcalogin`
--

CREATE TABLE `vdcalogin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `apps` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vdcalogin`
--

INSERT INTO `vdcalogin` (`id`, `username`, `password`, `role`, `apps`) VALUES
(1, 'admin', 'admin123', 'qwer', 0),
(2, 'admin', 'admingo', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vdcaplayers`
--

CREATE TABLE `vdcaplayers` (
  `id` int(11) NOT NULL,
  `name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `institute` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fide_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `irtg` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vdca_no` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vdcaplayers`
--

INSERT INTO `vdcaplayers` (`id`, `name`, `father_name`, `address`, `city`, `phone`, `institute`, `dob`, `email_id`, `fide_no`, `irtg`, `vdca_no`, `year`) VALUES
(9, 'Abishek Raj.B				', 'D.Balaji', '7/36,Alamarathupatti	', 'Tiruthangal', 0, '		Lions Mat.HSS	', '26-07-2002', '', '', '', '908', '2014 - 2015'),
(3, 'Aadhityan.V', 'R.Vetrivel', '103/9F,Ramamoorthy Road\r\n', 'Virudhunagar', 0, 'RJ Mantra', '13-09-2000', '', '', '', '342', '2014 - 2015'),
(4, 'Aakash.				', 'SS.Selvam', '683.Aringar Anna colony	', 'Sivakasi', 0, 'Muslim High school', '20-03-2004', '', '', '', '917', '2014 - 2015'),
(5, 'Aarya.V', 'R.Vetrivel', '103/9F,Ramamoorthy Road	', 'Virudhunagar', 0, 'KVS Centeneary', '03-08-2005', '', '', '', '343', '2014 - 2015'),
(6, 'Abhijeet.M', 'N.Madhavan', '4/8698,P.S.K.Nagar,Hussain colony\r\n', 'Sivakasi', 0, '', '25-04-2001', '', '', '', '601', '2014 - 2015'),
(7, 'Abi Manikandan.E', 'P.Esakkimuthu', '76/2 Rattinpatti\r\n', 'Srivilliputtur', 0, '', '16-06-2002', '', '', '', '706', '2014 - 2015'),
(8, 'Abimanyu				', 'A.Murugan', '11/234,A46,II cross st,P.R.R.Nagar', 'Rajapalayam		', 0, 'Sri Ramana Vidhyalaya', '25-05-2000', '', '', '', '503', '2014 - 2015'),
(10, 'Abishek H', 'HHH', '', '', 0, '', '02-07-1993', '', '', '', '830', '2014 - 2015'),
(11, 'Abishek.R			', 'S.Ramasamy', 'Ramasamy Nagar,Alamarathupatti	', 'Tiruthangal		', 0, 'S.N.M.Mat.HSS', '17-03-2001', '', '', '', '918', '2014 - 2015'),
(12, 'Adhityaa.A				', 'V.Aramudhan', '2/1587, Thangapanadar,Vembakottai Road	', 'Sivakasi', 0, 'SSVM', '02-07-1993', '', '', '', '491', '2014 - 2015'),
(13, 'Aiswarya.S', 'M.Sivalingam', '279,Ambalapuzi Bazaar St\r\n', 'Rajapalayam', 0, 'Chinmaya', '10-10-2002', '', '', '', '423', '2014 - 2015'),
(14, 'Aiswarya.S', 'ssss', '', '', 0, '', '01-07-1900', '', '', '', '816', '2014 - 2015'),
(15, 'Akash.B', 'bbbb', '', '', 0, '', '01-07-1900', '', '', '', '843', '2014 - 2015'),
(16, 'Akashkumar.S', 'Y.Sivakumar', '37/2,Kulanthaivelpuram,Vellakottai\r\n', 'Aruppukottai', 0, '', '13-10-2003', '', '', '', '467', '2014 - 2015'),
(17, 'Akilan.A.R', 'rrrr', '', '', 0, '', '19-10-2007', '', '', '', '801', '2014 - 2015'),
(18, 'Akshaya.P', 'A.Poorajan', '2/2194/1,Theivanai Nagar\r\n', 'Sivakasi', 0, 'Sivakasi Lions', '11-08-2003', '', '25083023', '1218', '408', '2014 - 2015'),
(19, 'Akshaya.S', 'G.Senthil kumar', '263K,Mullai Nagar\r\n', 'Rajapalayam', 0, 'Ramana Vidthyalaya', '17-01-2008', '', '', '', '646', '2014 - 2015'),
(20, 'Akshayaraj.P', 'PPPP', '', '', 0, '', '01-07-1900', '', '', '', '820', '2014 - 2015'),
(21, 'Alagar samy.P', 'Pandi', 'North st,Chidambarapuram\r\n', 'Vellur', 0, 'GHSS,Vellur', '03-07-2000', '', '', '', '648', '2014 - 2015'),
(22, 'Amirthavarshini.S', 'SSSS', '', '', 0, '', '01-07-1900', '', '', '', '832', '2014 - 2015'),
(23, 'Amutha.M', 'MMMM', '', '', 0, '', '01-07-1900', '', '', '', '819', '2014 - 2015'),
(24, 'Anandh murugeswaran.B', 'G.Balasubramanian', '305,Gandhi Nagar\r\n', 'Rajapalayam', 0, 'Rotary', '27-08-2000', '', '', '', '365', '2014 - 2015'),
(25, 'Angu selvam.A', 'G.M.Angeswaran', '3/382,Ayyanar colony\r\n', 'Sivakasi', 0, 'S.S.V.M.School', '07-04-2001', '', '', '', '602', '2014 - 2015'),
(26, 'Anithahelan', 'Amalarajan.G', '6/906/3,Karuupasamy Nagar,Virudhunagar\r\n', 'Virudhunagar', 0, '', '01-01-1992', '', '25052675', '', '863', '2014 - 2015'),
(27, 'Anjali.S', 'C.Sugumar', '2/350A,State bank colony\r\n', 'Sivakasi', 0, 'S.C.M.S.G.H.S.S', '11-01-2001', '', '', '', '309', '2014 - 2015'),
(28, 'Annamalairaja.C', 'K.Chidambaram', '807/B,Teachers colony\r\n', 'Sivakasi', 9443136351, 'jaycees', '02-01-2001', '', '35004344', '1275', '404', '2014 - 2015'),
(29, 'Anuhyaa.L', 'R.Lakshmanan', '3/8720 Vasantham Nagar,Padanthal\r\n', 'Sattur', 8300175667, 'Kamma mahajana', '23-01-2002', '', '', '', '469', '2014 - 2015'),
(30, 'Anusuya S', 'R.Sakthivel', '420,Sirukulam colony,Railway feeder road, Sivakasi\r\n', 'Sivakasi', 9786957254, '', '20-07-2002', '', '', '', '455', '2014 - 2015'),
(31, 'Aravind.P', 'M.Palani guru', '1/309, Labavinayagar Kovil st\r\n', 'Samusigapuram', 9843368867, 'Sathya CBSE,Pillayarkulam', '04-04-2004', '', '', '', '494', '2014 - 2015'),
(32, 'Aravind.S', 'T.A.Somasundaram', '595/A4/1 Krishna colony,Srirengapalayam\r\n', 'Rajapalayam', 9043350517, 'Cinmaya Vidyalaya', '30-09-2000', '', '35053116', '1394', '501', '2014 - 2015'),
(33, 'Aravindh.R', 'information needed', '', '', 0, '', '02-07-1993', '', '', '', '822', '2014 - 2015'),
(34, 'Aravindkumar.P', 'Periasamy.T', '138,Palaniandavarpuram colony\r\n', 'Sivakasi', 9787715099, 'Svks lions school', '07-11-2001', '', '', '', '600', '2014 - 2015'),
(35, 'Aravinth.R', 'R.Rajasekaran', '2/280Q State bank colony,\r\n', 'Sivakasi', 9786395594, 'KMKA', '12-07-2006', '', '', '', '572', '2014 - 2015'),
(36, 'Arjun.B.R', 'B.Ramanathaveilumuthu', '39E(1) old post office st\r\n', 'Aruppukottai', 9443722657, 'SBK,APK', '06-03-2003', '', '', '', '529', '2014 - 2015'),
(37, 'Arumugam.S', 'S.Sivaramasubramaniyan', 'J.C.Jeyadevi Quarters,Melakandamangalem\r\n', 'Aruppukottai', 9976344551, 'Gandhi Vidyalaya', '06-06-2000', '', '', '', '508', '2014 - 2015'),
(38, 'Arun prasath.S', 'Selvaraj', '', 'Virudhunagar', 0, '', '02-07-1993', '', '', '', '644', '2014 - 2015'),
(39, 'Arun.V', 'A.Vanchinathan', '4/8,607C, V.O.C.Nagar\r\n', 'Sivakasi', 9597023981, 'Goodshepard', '27-03-2004', '', '', '', '380', '2014 - 2015'),
(40, 'Arunkumar.M', 'R.Manikandan', '', '', 9003216595, 'Sri Vidya Mat.H.S.S', '14-10-2003', '', '', '', '910', '2014 - 2015'),
(41, 'Arunkumar.P', 'Periasamy.T', '138,Palaniandavarpuram colony\r\n', 'Sivakasi', 9787715099, 'Svks lions school', '10-04-1999', '', '', '1496', '573', '2014 - 2015'),
(42, 'Arunkumar.P', 'information needed', '', '', 0, 'Kamarajar', '27-01-2007', '', '', '', '603', '2014 - 2015'),
(43, 'Arunsankar.V', 'information needed', '', '', 0, 'Shenbaga', '02-07-1993', '', '', '', '565', '2014 - 2015'),
(44, 'Ashok kumar', 'A.Rajan', '216, Pound street,Muthuramanpatti,Virudhuunagar\r\n', 'Virudhunagar', 8056659944, '', '07-01-1995', 'kingashoka.18@gmail.com', '25026844', '', '864', '2014 - 2015'),
(45, 'Ashok Manickam P', 'M.Palani selvam', '233,Manickavinayagar Colony,Sivakasi\r\n', 'Sivakasi', 9842126869, '', '06-05-2000', 'ashokfifteen@gmail.com', '35041169', '', '433', '2014 - 2015'),
(46, 'Ashokkumar.A', 'S.Ayyanar', '1/27,Kathachinnapatti,S.N.Puram Road\r\n', 'Tiruthangal', 9842198299, 'Glory Mat.H.S.S', '03-07-2001', '', '', '', '709', '2014 - 2015'),
(47, 'Ashokkumar.R', 'information needed', '', '', 0, '', '02-07-1993', '', '', '', '833', '2014 - 2015');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_access_report`
--

CREATE TABLE `vdca_access_report` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `pass` text NOT NULL,
  `page` text NOT NULL,
  `datetime` datetime NOT NULL,
  `ip` text NOT NULL,
  `success` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_access_report`
--

INSERT INTO `vdca_access_report` (`id`, `uname`, `pass`, `page`, `datetime`, `ip`, `success`) VALUES
(1, 'admin', 'admin123', 'Sri Vani School', '2020-01-30 18:04:40', '192.168.57.30', 'YES'),
(2, 'admin', 'admin123', 'Sri Vani School', '2020-01-30 18:17:56', '192.168.57.30', 'YES'),
(3, 'admin', 'admin123', 'Sri Vani School', '2020-01-31 09:43:56', '192.168.57.180', 'YES'),
(4, 'admin', 'admin123', 'Sri Vani School', '2020-01-31 10:07:48', '192.168.57.180', 'YES'),
(5, 'admin', 'admin123', 'Sri Vani School', '2020-01-31 14:51:51', '192.168.57.27', 'YES'),
(6, 'admin', 'admin123', 'Sri Vani School', '2020-02-03 09:46:18', '192.168.57.180', 'YES'),
(7, 'ADMIN', 'ADMIN123', 'Sri Vani School', '2020-02-03 14:37:19', '192.168.57.180', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_advertisement`
--

CREATE TABLE `vdca_advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `addate` date NOT NULL,
  `adimage` text NOT NULL,
  `active` int(2) NOT NULL,
  `cby` mediumtext NOT NULL,
  `cdate` datetime NOT NULL,
  `cip` mediumtext NOT NULL,
  `mby` mediumtext NOT NULL,
  `mdate` mediumtext NOT NULL,
  `mip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_advertisement`
--

INSERT INTO `vdca_advertisement` (`id`, `title`, `addate`, `adimage`, `active`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(2, 'IA Anantharam with Anand drawing his number in the opening ceremony of Tata Steel Chess 2019 tournament', '2020-01-09', 'gallery/[IAAnantharamwithAnanddrawinghisnumberintheopeningceremonyofTataSteelChess2019tournament]578070_1578568812.jpg', 0, 'admin', '2020-01-09 16:50:12', '192.168.57.180', '', '', ''),
(3, '2017 - 3rd SCS  -Kunal_winner', '2020-01-09', 'gallery/[2017-3rdSCS-Kunal_winner]145924_1578568832.JPG', 0, 'admin', '2020-01-09 16:50:32', '192.168.57.180', '', '', ''),
(4, '2016 - 3rd SCS', '2020-01-09', 'gallery/[2016-3rdSCSRating-ChampionIMSaravanaKrishnanP]915767_1578568892.jpg', 0, 'admin', '2020-01-09 16:51:32', '192.168.57.180', '', '', ''),
(5, '2005 - GM Deep Sengupta and WGM Soumya Swaminathan won the National Junior at Sivakasi', '2020-01-09', 'gallery/[2005-GMDeepSenguptaandWGMSoumyaSwaminathanwontheNationalJunioratSivakasi]150716_1578568920.png', 0, 'admin', '2020-01-09 16:52:00', '192.168.57.180', '', '', ''),
(6, '2015 - 1st SCS Rating - GM Deepan Chakravarthy with trophy', '2020-01-09', 'gallery/[2015-1stSCSRating-GMDeepanChakravarthywithtrophy]597672_1578568957.jpg', 0, 'admin', '2020-01-09 16:52:37', '192.168.57.180', '', '', ''),
(7, '2019 - 5th SCS  - IM Shyaamnikhil P receives the winner trophy', '2020-01-09', 'gallery/[2019-5thSCS-IMShyaamnikhilPreceivesthewinnertrophy]849692_1578568992.jpg', 0, 'admin', '2020-01-09 16:53:12', '192.168.57.180', '', '', ''),
(8, '2018 - 4th SCS - IM AL Muthaiah finished second', '2020-01-09', 'gallery/[2018-4thSCS-IMALMuthaiahfinishedsecond]430435_1578569072.jpg', 0, 'admin', '2020-01-09 16:54:32', '192.168.57.180', '', '', ''),
(10, 'yrtyr', '2020-02-03', 'gallery/[2009StatelevelChessfestival_Press]726686_1580713654.jpg', 1, 'admin', '2020-02-03 12:37:34', '192.168.57.180', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_event`
--

CREATE TABLE `vdca_event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `datetime` date NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `active` int(11) NOT NULL,
  `datee` date NOT NULL,
  `checkit` varchar(25) NOT NULL,
  `cby` mediumtext NOT NULL,
  `cdate` datetime NOT NULL,
  `cip` mediumtext NOT NULL,
  `mby` mediumtext NOT NULL,
  `mdate` mediumtext NOT NULL,
  `mip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_event`
--

INSERT INTO `vdca_event` (`id`, `title`, `datetime`, `description`, `image`, `active`, `datee`, `checkit`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(1, 'K Marimuthu of Sivakasi Chess Club wins fide rated tournament for visually impaired at Hyderabad', '2020-01-30', 'K Marimuthu of Sivakasi Chess Club wins fide rated tournament for visually impaired at Hyderabad.', '', 0, '2020-02-29', 'checked', 'admin', '2020-01-30 17:30:49', '192.168.57.180', '', '', ''),
(2, 'M Kunal of Trichy wins Ramco IT FIDE Rated tournament, Rajapalayam', '2020-01-02', 'M Kunal of Trichy wins Ramco IT FIDE Rated tournament, Rajapalayam.', '', 1, '2020-02-29', 'checked', 'admin', '2020-01-30 17:31:17', '192.168.57.180', '', '', ''),
(3, 'Shaadurshan R of Aruppukottai is third at the State School Games', '2020-01-04', 'Shaadurshan R of Aruppukottai is third at the State School Games', '', 0, '2020-03-28', '', 'admin', '2020-01-30 17:31:36', '192.168.57.180', '', '', ''),
(7, 'testing', '2020-02-03', 'xbgdfhd', '', 1, '2020-04-10', '', 'admin', '2020-01-31 14:37:59', '192.168.57.180', '|admin', '|2020-02-03-14:41:52', '|192.168.57.180'),
(9, 'ruttttttttttttttttttttttttttt', '2020-02-05', 'hjhjhjhjhjhj', '', 1, '2020-02-12', '', 'admin', '2020-02-03 14:47:41', '192.168.57.180', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_feedback`
--

CREATE TABLE `vdca_feedback` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email_id` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_feedback`
--

INSERT INTO `vdca_feedback` (`id`, `fname`, `lname`, `email_id`, `message`, `date`) VALUES
(1, 'Pilaps', '', 'plilaps@nithra.mobi', 'Testing FeedBack-1', '2020-01-30'),
(2, 'Co Tester', '', 'cotester@nithra.mobi', 'Test Feedback-2', '2020-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_files`
--

CREATE TABLE `vdca_files` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(2) NOT NULL,
  `cby` varchar(255) NOT NULL,
  `cip` varchar(255) NOT NULL,
  `mby` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `mip` varchar(255) NOT NULL,
  `mdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vdca_files`
--

INSERT INTO `vdca_files` (`id`, `title`, `date`, `image`, `active`, `cby`, `cip`, `mby`, `cdate`, `mip`, `mdate`) VALUES
(2, '79', '2019-11-15', '2-tick3.png', 0, 'admin', '192.168.57.180', '', '2019-11-12', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_gallery`
--

CREATE TABLE `vdca_gallery` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
  `active` int(11) NOT NULL,
  `cby` mediumtext NOT NULL,
  `cdate` datetime NOT NULL,
  `cip` mediumtext NOT NULL,
  `mby` mediumtext NOT NULL,
  `mdate` mediumtext NOT NULL,
  `mip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_gallery`
--

INSERT INTO `vdca_gallery` (`id`, `title`, `date`, `description`, `image`, `active`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(1, '', '2020-02-03', '', 'gallery/[2012 ICF team reciving the RVCE trophy for winning the TN State FIDE Rated team championship]992157_1580709673.JPG,gallery/[2019  Sivakasi Rapid  WGM R Vaishali receives the champions trophy]249733_1580709642.jpg,gallery/[1979  Asian Junior was held for the first time in India at Sivaksi]216814_1580706776.png,gallery/[1996  GM Magesh Chandran P won the National Sub Junior at Sivakasi]887569_1580706776.png,gallery/[1999  GM SS Ganguly was the champion in the National Junior at Sivakasi]568569_1580706777.png,gallery/[2005  GM Deep Sengupta and WGM Soumya Swaminathan won the National Junior at Sivakasi]818436_1580706777.png', 0, 'admin', '2020-02-03 10:42:56', '192.168.57.180', '|admin|admin', '|2020-02-03-11:30:42|2020-02-03-11:31:13', '|192.168.57.180|192.168.57.180'),
(2, '', '2020-02-03', '', 'gallery/[2015  1st SCS Rating  GM Deepan Chakravarthy with trophy]712905_1580708479.jpg,gallery/[2016  3rd SCS Rating   Champion IM Saravana Krishnan P]350946_1580706814.jpg', 0, 'admin', '2020-02-03 10:43:34', '192.168.57.180', '|admin', '|2020-02-03-11:11:19', '|192.168.57.180');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_payment`
--

CREATE TABLE `vdca_payment` (
  `id` int(11) NOT NULL,
  `pid` varchar(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `mode` text CHARACTER SET utf8mb4 NOT NULL,
  `bankcode` text NOT NULL,
  `txnid` text NOT NULL,
  `bank_ref_num` text NOT NULL,
  `encrypted_paymentId` text NOT NULL,
  `payumoneyId` text NOT NULL,
  `cardnum` text NOT NULL,
  `name_on_card` text NOT NULL,
  `txnStatus` text NOT NULL,
  `txnMessage` text NOT NULL,
  `cdate` datetime NOT NULL,
  `cip` text NOT NULL,
  `cby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vdca_players_db`
--

CREATE TABLE `vdca_players_db` (
  `id` int(11) NOT NULL,
  `fide_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `Institution` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `aicf` varchar(50) NOT NULL,
  `tnsca` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `alter_phone_no` int(14) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `father_name` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `lapsed` datetime NOT NULL,
  `birth_cf` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `vdca_id` varchar(20) NOT NULL,
  `otp` int(6) NOT NULL,
  `age` int(2) NOT NULL,
  `year` text NOT NULL,
  `ststus` text NOT NULL,
  `active` int(11) NOT NULL,
  `dist` text NOT NULL,
  `paid_at` text NOT NULL,
  `cip` text NOT NULL,
  `cby` text NOT NULL,
  `cdate` date NOT NULL,
  `mby` text NOT NULL,
  `mip` text NOT NULL,
  `mdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vdca_players_db`
--

INSERT INTO `vdca_players_db` (`id`, `fide_id`, `name`, `gender`, `city`, `Institution`, `rating`, `aicf`, `tnsca`, `dob`, `phone_no`, `alter_phone_no`, `email_id`, `father_name`, `address`, `lapsed`, `birth_cf`, `photo`, `vdca_id`, `otp`, `age`, `year`, `ststus`, `active`, `dist`, `paid_at`, `cip`, `cby`, `cdate`, `mby`, `mip`, `mdate`) VALUES
(1, '25154052', 'Aananda Prakash V', 'Male', '', '', '', '', '', '25-06-05', '9092643011', 0, 'vijayasankar1976@gmail.com', 'Vijayan Sankar', '21/A6 west Ponnagram, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0003', 0, 14, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(2, '', 'Aavaenthekaah K P', 'Female', '', '', '', '', '', '01-04-10', '9842996744', 0, 'krsaraja24@gmail.com', 'Krishnan P', '5/2c, madavar Vilagans, South st., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0006', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(3, '', 'Abitha S', 'Male', '', '', '', '', '', '04-06-12', '9786144961', 0, '', 'Senthur Pandi G', '1/310,North st., Kilavikulam', '2031-03-20 12:59:00', '', '', 'VDCA_0008', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(4, '25954156', 'Abraham Justin S', 'Male', '', '', '', '', '', '31-07-06', '9042799328', 0, 'abrahamjustin104@gmail.com', 'Samuel John wesley', '1-36-6, Indra nagar, Palayampatti, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0009', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(5, '', 'Adithya Vyshavi M', 'Female', '', '', '', '', '', '07-12-09', '8270599047', 2147483647, '', 'Murugan K', '3/9, North Kuppanapuram', '2031-03-20 12:59:00', '', '', 'VDCA_0011', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(6, '', 'Agaash V', 'Male', '', '', '', '', '', '23-01-05', '9443139483', 0, 'mahalakshmivichu@gmail.com', 'Vignesh', '169/V Kattalai Patti Road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0012', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(7, '', 'Agasthya V', 'Male', '', '', '', '', '', '20-11-09', '9894895470', 0, '', 'Venkateshan', '', '2031-03-20 12:59:00', '', '', 'VDCA_0013', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(8, '', 'Ahamed Mohideen M', 'Male', '', '', '', '', '', '07-10-86', '8610774260', 0, 'mmydeenmhp@gmail.com', 'Mohamed Alijinnah', '6/233, Palathottam,Madurai rd., Maharajapuram', '2031-03-20 12:59:00', '', '', 'VDCA_0014', 0, 33, '', '', 0, 'VNR', 'Paid at office', '', '', '0000-00-00', '', '', '0000-00-00'),
(9, '', 'Ahilan A R', 'Male', '', '', '', '', '', '19-10-07', '9952533289', 0, 'ramaraju_ahilan@gmail.com', 'Ramaraju', 'South vai thainatahapuram st., rajaplayam', '2031-03-20 12:59:00', '', '', 'VDCA_0015', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(10, '', 'Ajay Murugan S', 'Male', '', '', '', '', '', '22-08-08', '9865443002', 0, '', 'Senthil kumaran A', '134, Sangaralinga nadar St., Dhalavaipuram', '2031-03-20 12:59:00', '', '', 'VDCA_0016', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(11, '', 'Akash R', 'Male', '', '', '', '', '', '12-05-08', '9976630553', 0, '', 'Raja A', '123, Subburaj nagar 1st st, vellaikottai, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0017', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(12, '', 'Akhilesh V', 'Male', '', '', '', '', '', '22-05-11', '9487844666', 0, '', 'Vairamuthu  S', '239 Kottaipatti North St.,Kottaipatti Sriviliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0018', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(13, '', 'Akshat Agarwal', 'Male', '', '', '', '', '', '12-10-08', '9442181000', 0, '', 'Mukesh Agarwal', '7K Velayutham Road, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0019', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(14, '', 'Akshath R', 'Male', '', '', '', '', '', '27-04-12', '7358891195', 0, 'abinaya.vin@gmail.com', 'Ramanujam M', '146/C5/4 Ramana Nagar, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0021', 0, 6, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(15, '25128140', 'Akshay J', 'Male', '', '', '', '', '', '23-05-11', '9715611149', 0, '', 'jayamohan', '288/260 Sakkaraja Kottai St., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0022', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(16, '', 'Akshaya Shree R', 'Female', '', '', '', '', '', '01-12-09', '9150207022', 0, '', 'Ramaraj P', '2A, Vadapathra Sayanar sanathi St., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0023', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(17, '', 'Akul Vishruth T', 'Male', '', '', '', '', '', '01-01-10', '9843123488', 2147483647, 'ai.tirumalai@gmail.com', 'Thirumalai Kumaran A I', '337, Gnanagiri rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0024', 0, 9, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(18, '', 'Alex Amalan R', 'Male', '', '', '', '', '', '22-04-09', '9042200808', 0, '', 'Rajkumar', '101, Raittenpatti St., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0025', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(19, '45004854', 'Alex R', 'Male', '', '', '', '', '', '25-10-09', '9786183526', 0, '', 'Ramamoorthi K', '3/775, Pillayar kovil St., Kelavarakularamapuram', '2031-03-20 12:59:00', '', '', 'VDCA_0026', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(20, '25989383', 'Amutha M', 'Female', '', '', '', '', '', '19-04-04', '9865146765', 0, '', 'Murugan T', '1/1984/19 jakka devi nagar, pandian nagar,', '2031-03-20 12:59:00', '', '', 'VDCA_0027', 0, 12, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(21, '', 'Anandha Krishnan R', 'Male', '', '', '', '', '', '14-11-10', '9894646473', 0, 'rajeshbalajia@gmail.com', 'Rajesh A', '46, Seethakthi Street, Viruthunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0029', 0, 9, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(22, '', 'Ananya A', 'Female', '', '', '', '', '', '24-11-09', '9043200001', 0, 'arunselvi22@gmail.com', 'Arunkumar G', '10, Pilliyar Koil St., sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0031', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(23, '', 'AnasMohammed S', 'Male', '', '', '', '', '', '24-07-11', '8056634032', 0, 'sikkandarsat@gmail.com', 'Sikkandar sait R', '16 Maraikayar street, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0032', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(24, '', 'Anu Haasini T', 'Female', '', '', '', '', '', '03-10-10', '8489398331', 0, 'tjothi13@gmail.com', 'Thalaimalairaja G', '114, Vallalar North st., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0033', 0, 9, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(25, '35041169', 'Anupriya S', 'Female', '', '', '', '', '', '13-02-00', '9943282225', 0, 'anumani1322000@gmail.com', 'Seenivasan T', '94/1A Mohammed Shapuram 5th St., Thirumangalam', '2031-03-20 12:59:00', '', '', 'VDCA_0034', 0, 19, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(26, '', 'Anusha S', 'Female', '', '', '', '', '', '18-12-10', '9894884938', 0, 'nsivasankar1987@gmail.com', 'Sivasankar N', '2/584 A Kanna nagara, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0035', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(27, '', 'Arav A', 'Male', '', '', '', '', '', '23-11-12', '9789493817', 0, 'na.roshan@gmail.com', 'Amar nagarajan ', '75/6 B, KA Colony III Street, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0037', 0, 7, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(28, '', 'Arun M', 'Male', '', '', '', '', '', '30-11-08', '9597909871', 0, 'arunmaheswari@gmail.com', 'Murugesan', '130, Sownthar Rajapuram Street, Arupukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0042', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(29, '', 'Ashwin A', 'Male', '', '', '', '', '', '19-06-10', '9865820622', 0, '', 'Anantham P', '111, Maruthu nagar west, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0045', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(30, '35049097', 'ashwin A', 'Female', '', '', '', '', '', '02-11-10', '9843805019', 0, '', 'Venkataperumal R', '146/5/5/8 Aandalpuram, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0046', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(31, '', 'Asmath Riswana S', 'Female', '', '', '', '', '', '14-04-09', '9865628737', 0, '', 'Sarkarai Sahul Hameed S', '52/26, Valavanthapuram Muslim big st., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0047', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(32, '', 'Avinash Kumar G', 'Male', '', '', '', '', '', '05-04-00', '6379277922', 0, 'gavinashkumar2000@gmail.com', 'Ganesan T', '211, Chellam South St, Rajapalayam ', '2031-03-20 12:59:00', '', '', 'VDCA_0048', 0, 19, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(33, '', 'Baladharsan R', 'Male', '', '', '', '', '', '25-12-13', '9626066182', 0, '', 'Rajamurugesh B', '5/597A Transport nagar, 2nd st., Krishnankovil', '2031-03-20 12:59:00', '', '', 'VDCA_0049', 0, 6, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(34, '', 'Baladharsan V', 'Male', '', '', '', '', '', '28-12-05', '9600740475', 0, 'vellaipandian05@gmail.com', 'Vellaipandian S', '550 muthu nagar, marriamman kovil street, krishnankovil', '2031-03-20 12:59:00', '', '', 'VDCA_0050', 0, 14, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(35, '45023654', 'Balakamanl G', 'Male', '', '', '', '', '', '24-08-07', '7708271177', 0, 'kingbala@gmail.com', 'Ganesh S', '257 9th street, Sankarankovil road, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0052', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(36, '', 'Banu Priya A', 'Female', '', '', '', '', '', '19-03-09', '9344935615', 0, 'avudaiyan1980@gmail.com', 'Avudaiyan A', '6/66, Ayyanarpuram, Kandaneri PO, Maharajapuram Via, Watrap (TK)', '2031-03-20 12:59:00', '', '', 'VDCA_0053', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(37, '45023662', 'Bharathan P', 'Male', '', '', '', '', '', '06-08-11', '8190990757', 0, '', 'Pandiyarajan A', 'Illathar Kinatru St., Seithur', '2031-03-20 12:59:00', '', '', 'VDCA_0055', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(38, '', 'Bhavesh Divyan J', 'Male', '', '', '', '', '', '09-01-09', '9443129079', 2147483647, 'insourceincprint@gmail.com', 'Jeyachandran C M', '396/54 Railway feeder rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0056', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(39, '', 'Boophesh Kumar M', 'Male', '', '', '', '', '', '29-04-05', '9843322439', 0, '', 'Mani Kandan P', '1327 Solai Colony, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0058', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(40, '', 'Brabhu Sankar Raja R', 'Male', '', '', '', '', '', '12-02-09', '9486737398', 0, 'nanthanraja123@gmail.com', 'Raja S', '4/173A, AJ Nagar, Pallapatti Road, Thiruthangal', '2031-03-20 12:59:00', '', '', 'VDCA_0059', 0, 10, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(41, '', 'Chanakkiyan P', 'Male', '', '', '', '', '', '18-05-11', '9750899015', 0, '', 'Poopathi Rajan C', '18/2B/123, Amman Nagar, srivilliputthur', '2031-03-20 12:59:00', '', '', 'VDCA_0061', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(42, '', 'Chandra Devi R', 'Female', '', '', '', '', '', '21-03-84', '8056644705', 0, 'devibalaji@gmail.com', 'Nagarathinam', '46, Seethakathi street, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0062', 0, 35, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(43, '', 'Chellapandi V', 'Male', '', '', '', '', '', '18-10-08', '9791482973', 0, '', 'Veerapandian C', '24 A Mettu st., srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0063', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(44, '', 'Darshan G', 'Male', '', '', '', '', '', '30-01-13', '6383335228', 0, 'arunanagendran@gmail.com', 'Gurukanthan J', '23C/16, rajaji Nagar, B B Road, Viruthunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0064', 0, 6, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(45, '', 'Deepasri M', 'Male', '', '', '', '', '', '17-03-11', '9786951001', 0, '', 'Muthuvazhi', '1/33 southstreet, kilavaikulam, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0065', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(46, '', 'Dhaarukeesh A', 'Male', '', '', '', '', '', '18-10-07', '9843355551', 0, '', 'Arun Kumar S', '6/1438, Srivilliputhur Road, Sachiyapuram, Sivakasi.', '2031-03-20 12:59:00', '', '', 'VDCA_0066', 0, 12, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(47, '', 'Dhanush S', 'Male', '', '', '', '', '', '01-05-05', '9445528637', 0, '', 'Sundaramahalingam L', '6/8A, Raijtonpatti St., Srivilipputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0069', 0, 14, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(48, '45023689', 'Dharan kumar M P', 'Male', '', '', '', '', '', '05-01-08', '6380955459', 0, 'gayapadma@gmail.com', 'Padmanaban M A', '74, Vettaiperumal kovil nagar, Kalangaperi road, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0070', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(49, '', 'Dharani M', 'Female', '', '', '', '', '', '26-02-09', '9944852697', 0, '', 'Muthu vel G', 'Ujji Samy kovil 4th cross st., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0071', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(50, '', 'Dharsan J R', 'Male', '', '', '', '', '', '03-01-10', '9943856898', 0, 'jrdharsan2010@gmail.com', 'Raja pandian K', '10-4-61B, Balaji Nagar, T Kallupatti', '2031-03-20 12:59:00', '', '', 'VDCA_0073', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(51, '25671383', 'Dharshan Raaghav', 'Male', '', '', '', '', '', '27-09-09', '9600409401', 0, 'vragavan.wisdom@gmail.om', 'Vijaya ragavan', '1/1168, Vivekananda st., Pandian Nagar, Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0074', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(52, '', 'Dharun V', 'Male', '', '', '', '', '', '13-10-08', '9443570057', 0, '', 'Vairamuthu M', '5-34-4D Kamarajar Nagar, Aruppukottai ', '2031-03-20 12:59:00', '', '', 'VDCA_0076', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(53, '', 'Dheetshita R', 'Female', '', '', '', '', '', '15-07-09', '8344525364', 2147483647, '', 'Rameshkannan K', '4, Maninagaram Cross st., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0077', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(54, '', 'Dhiyanesh G', 'Male', '', '', '', '', '', '13-10-09', '7598870188', 0, 'gopipandi50@gmail.com', 'Gopi P', '1-38-13, Shanmugavel nagar, 1st st., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0078', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(55, '45023727', 'Dinesh Kumar B', 'Male', '', '', '', '', '', '20-02-07', '9443179060', 0, 'smmanikam@gmail.com', 'Balamurugan M', 'No-5 2nd st., Weavers colony, Madurai Rd., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0079', 0, 12, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(56, '', 'Divesh P', 'Male', '', '', '', '', '', '06-05-12', '7708722926', 0, '', 'Pragalathan R', '75/1 Srirengapalayam, Rajapalayam.', '2031-03-20 12:59:00', '', '', 'VDCA_0080', 0, 7, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(57, '', 'Divya Prabha B', 'Female', '', '', '', '', '', '24-03-01', '9629358848', 0, 'oviyadivya_1@gmail.com', 'Bala Murugan K', '32/A, Chairman N K R Road, Arum nagar, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0081', 0, 18, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(58, '', 'Durga Prasath S', 'Male', '', '', '', '', '', '21-01-06', '7868842903', 0, '', 'Sankar T', '250/311, mariamman Kovil St., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0082', 0, 13, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(59, '', 'Eashwaran S', 'Male', '', '', '', '', '', '08-08-11', '9385315961', 0, 'sgpc.svk@gmail.com', 'Sokkalinga Rajan S', '272/53, R.K. Complex P S R road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0083', 0, 8, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(60, '', 'Gangatharan N', 'Male', '', '', '', '', '', '10-11-12', '9345674474', 0, '', 'Nallathambi', '410, Santhanamariamman kovil backside, kammapatti, thirumalapuram,srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0084', 0, 7, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(61, '', 'Gayash S', 'Male', '', '', '', '', '', '18-10-10', '9943430178', 0, 'senthilmuruganbba@gmail.com', 'Senthil Murugan P', '2/2199E Devi nagar, Sithurajapuram, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0086', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(62, '', 'Gayathri S', 'Female', '', '', '', '', '', '05-10-07', '8925366965', 0, '', 'Shanmugavel K', '150, Visvasam Nagar, Mamiapuram VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0088', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(63, '', 'Girinandhanakumaar M', 'Male', '', '', '', '', '', '16-10-10', '9942466619', 0, 'mrpmani1978@gmail.com', 'Manikanda Raja Perumal', '177, South st., Palavantham Arupuukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0089', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(64, '', 'Girivappriyan R', 'Male', '', '', '', '', '', '30-09-09', '9566735805', 0, '', 'Ramachandran D', '5/107, South st., Kotthiyak post , srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0090', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(65, '25682520', 'Gokul S', 'Male', '', '', '', '', '', '15-09-01', '9489917943', 0, 'gokulchess2001@gmail.com', 'Sekar R', '6/781-23 Anuman nagar, Alampatti , Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0092', 0, 18, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(66, '45009619', 'GopalaKrishnan K', 'Male', '', '', '', '', '', '20-12-04', '9150462432', 0, 'shrgopi@gmail.com', 'Karthikeyan R', '35, Jyodhi Ram Nagar, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0093', 0, 15, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(67, '', 'Gowtham G', 'Male', '', '', '', '', '', '09-11-07', '9843801185', 0, 'rathinavelpandian@gmail.com', 'Gurusaamy S', '50, Karthigaipatti, Malli Srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0094', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(68, '', 'Gowtham M', 'Male', '', '', '', '', '', '01-12-10', '9597838337', 0, '', 'Murugan', 'Airunthiyar St, Seithur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0095', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(69, '', 'Guhan K H', 'Male', '', '', '', '', '', '26-10-11', '8940147444', 0, 'rnrn.karhikeyan@gmail.com', 'Karthikeyan N', '6/643, 1st cross st., Lakshmi nagar, Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0096', 0, 8, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(70, '', 'Gurubaran K', 'Male', '', '', '', '', '', '21-10-05', '9843037910', 0, '', 'Kamalakannan V', '75, Vetri Gnaniyar Street, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0098', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(71, '', 'Guruganesh M', 'Male', '', '', '', '', '', '20-08-07', '9443926149', 2147483647, 'ushamuruganavm@gmail.com', 'Murugan A V', 'VOC nagar, Pearaiyur', '2031-03-20 12:59:00', '', '', 'VDCA_0099', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(72, '', 'Haranitha Y B', 'Female', '', '', '', '', '', '10-10-08', '9944109052', 0, '', 'Yogaraja T', '59/116 throopathiamman kovil street, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0101', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(73, '', 'Hari Haran A C G', 'Male', '', '', '', '', '', '18-04-01', '9443360629', 0, 'acganeshsvks@gmail.com', 'A C Ganesh', '2/2186E 3, Sri srinivasa Nagar, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0103', 0, 18, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(74, '', 'Haribalan K', 'Male', '', '', '', '', '', '18-08-09', '9791501133', 0, '', 'kanagavel P', '2/356F, South Street, Poolapurani, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0104', 0, 10, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(75, '45090866', 'Haridharshini M', 'Male', '', '', '', '', '', '30-07-11', '7667358410', 0, '', 'Muthuraj C', 'Middle st, T.reddiyapatti, Sankaran Kovil', '2031-03-20 12:59:00', '', '', 'VDCA_0105', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(76, '', 'Hariharan', 'Male', '', '', '', '', '', '10-10-09', '9787167278', 0, '', 'Thulasi', '3/371 Amman kovil street, athikulam', '2031-03-20 12:59:00', '', '', 'VDCA_0106', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(77, '', 'Hariharan M', 'Male', '', '', '', '', '', '16-01-11', '9787232197', 0, '', 'Maheshkumar M', '5/231 A mohammed nagar, S.Pudhupatti road, sivaksi', '2031-03-20 12:59:00', '', '', 'VDCA_0107', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(78, '', 'Harikaran S', 'Male', '', '', '', '', '', '30-11-10', '9488934701', 0, '', 'Selvaraj', 'Sammbathapuram, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0108', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(79, '', 'Harikrishnan S', 'Male', '', '', '', '', '', '20-05-10', '9944764264', 0, '', 'Surriya Rajan', '2/6 P K S A Arumuga nadar rd., sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0109', 0, 9, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(80, '', 'Harini M D', 'Female', '', '', '', '', '', '26-02-09', '9994454253', 0, 'Rammani497@gmail.com', 'Manikandan R', '2/1677, Bhellapa Nagar, Reserve line, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0110', 0, 10, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(81, '25121731', 'Harishkumar C', 'Male', '', '', '', '', '', '31-08-11', '9750898739', 0, '', 'Chandramohan K', '1-5-1 A velmurugan colony, palayampatti, aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0111', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(82, '', 'Harishkumar K', 'Male', '', '', '', '', '', '08-06-11', '9790303678', 0, '', 'Karuppiya K', 'kaladevi amman  kovil  street, seithur', '2031-03-20 12:59:00', '', '', 'VDCA_0112', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(83, '', 'Harshaan R', 'Male', '', '', '', '', '', '20-05-07', '9597960776', 0, '', 'Ragu nathan M', '3/645, Gandhi nagar, Ceylon colony, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0113', 0, 12, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(84, '', 'Harshitha S', 'Female', '', '', '', '', '', '06-04-08', '9486738430', 0, 'jini_saravanan@yahoo.com', 'Saravanan A', '14A3 T.P.Mills rd, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0114', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(85, '', 'Harshithaa K K', 'Female', '', '', '', '', '', '28-11-07', '9840483608', 0, 'skavithamecad@gmail.com', 'Kamala Kannan A', 'Staff Quarters-1 A2, KLU campus, Krishnankovil', '2031-03-20 12:59:00', '', '', 'VDCA_0115', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(86, '', 'Harsith P', 'Male', '', '', '', '', '', '15-05-13', '9943080929', 0, 'selvamarchu@live.com', 'panner selvam P', 'jairam Nagar, LBS nagar, Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0116', 0, 6, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(87, '', 'Harsith V', 'Male', '', '', '', '', '', '15-06-10', '9842109638', 0, 'preethikarmasamy34@gmail.com', 'Vairamuthu G', '66A, Thambapillai Street, rajapalayam.', '2031-03-20 12:59:00', '', '', 'VDCA_0117', 0, 9, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(88, '', 'Hema chandran V', 'Male', '', '', '', '', '', '17-03-08', '9944944976', 0, 'balahemachandran@gmail.com', 'Velmayil P', '164, North st., Keelapottal patti, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0118', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(89, '', 'Hemanth S', 'Male', '', '', '', '', '', '24-04-07', '9600478445', 0, '', 'Selvam R', '118/A south, srivilliputhurstreet, lakshimiyapuram pudhur, Inamkarisalkulam post', '2031-03-20 12:59:00', '', '', 'VDCA_0119', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(90, '', 'Hitesh S', 'Female', '', '', '', '', '', '28-09-08', '8122179799', 0, '', 'Sermaraja C', '78, Athi nadar St., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0120', 0, 11, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(91, '', 'Inbaraj B', 'Male', '', '', '', '', '', '13-01-11', '8939594789', 0, '', 'Balakrishnan', '8G/1, V V R colony, Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0122', 0, 8, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(92, '', 'Inian G', 'Male', '', '', '', '', '', '18-08-10', '9486040303', 0, 'janusid.indu@gmail.com', 'Gopinath P N', '51, LIG Colony(opp Bombay Arangam) VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0123', 0, 9, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(93, '', 'Jagendran kamak N', 'Male', '', '', '', '', '', '29-05-06', '9843426884', 0, 'nnk30@gmil.com', 'Narandran Kamak N', '1/462 K1, NGO Colony, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0124', 0, 13, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(94, '45023816', 'Janani P', 'Female', '', '', '', '', '', '28-09-09', '8903968852', 0, '', 'parameswaran S', '1/49/34, Thirukumaran Nagar, 1 st st. Palayampatti Arupukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0127', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(95, '', 'Januj V', 'Male', '', '', '', '', '', '24-11-09', '9025610902', 0, 'rajivinoth2006@gmail.com', 'Vinothbabu D', '6/372/10 T.K.S.P Nagar, 1st street madurai road, virdhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0129', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(96, '25180231', 'Jason Jebakirosh A', 'Male', '', '', '', '', '', '27-07-09', '9894888697', 0, '', 'Amase Jeyasingh', '264, Kasthuri Complex, kandapuram colony, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0130', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(97, '', 'Jaya Sivaraman T', 'Male', '', '', '', '', '', '21-09-07', '6382008386', 0, '', 'Thangamariyappan G', 'Society St., Punalveli', '2031-03-20 12:59:00', '', '', 'VDCA_0131', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(98, '', 'Jayanthi P', 'Female', '', '', '', '', '', '29-06-09', '7010323869', 0, 'jayajothijayathi@gmail.com', 'Prabhu J', '327 East St., Muthukudi, S amalingapuram Post, Rajaplayam', '2031-03-20 12:59:00', '', '', 'VDCA_0132', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(99, '25947524', 'Jayasurya Karthikeyan', 'Male', '', '', '', '', '', '21-03-09', '9003828931', 0, 'kaarthiknr@gmail.com', 'Karthikeyan Nagarajan ', '153, F First floor madasamy kovil st., Rajaplayam', '2031-03-20 12:59:00', '', '', 'VDCA_0134', 0, 10, '', '', 0, 'VNR', 'Ramco', '', '', '0000-00-00', '', '', '0000-00-00'),
(100, '25759523', 'Jayavardhani J K', 'Female', '', '', '', '', '', '02-03-11', '9842926643', 0, '', 'Kudiyarasu J', '172, Kammapatti middle st., Kammapatti, srivilliputthur', '2031-03-20 12:59:00', '', '', 'VDCA_0135', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(101, '', 'Jeevasarathy T', 'Male', '', '', '', '', '', '11-05-08', '9566604101', 0, '', 'Thirumoorthi R', '3/1 nallakutralam st., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0138', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(102, '', 'Jegathees M', 'Male', '', '', '', '', '', '17-08-00', '7305655834', 0, 'jegarex09@gmail.com', 'Mariyappan K P', '60/B Sathya Nagar, Thiruthangal', '2031-03-20 12:59:00', '', '', 'VDCA_0140', 0, 19, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(103, '25932004', 'Jegatishkumar L', 'Male', '', '', '', '', '', '12-09-10', '9791712850', 0, '', 'Loganathan P', '3rd St, PRR nagar samushigapuram Post , Rajapalayalam', '2031-03-20 12:59:00', '', '', 'VDCA_0141', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(104, '45073856', 'Jemina Srinithi R', 'Female', '', '', '', '', '', '08-01-08', '9894738961', 0, 'yamina986@gmail.com', 'Ramachandran M', 'A16, 3rd St., LBS nagar , Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0142', 0, 11, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(105, '', 'Jeya Guru M', 'Male', '', '', '', '', '', '22-04-10', '6369033954', 0, '', 'Murugan', '', '2031-03-20 12:59:00', '', '', 'VDCA_0143', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(106, '45022259', 'Jeyadurga C', 'Female', '', '', '', '', '', '13-11-07', '9940833988', 0, '', 'Chandrasekar J', '6/1031-4 Hanuman nagar Allampatti, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0145', 0, 12, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(107, '', 'Jeyalakshmi S', 'Female', '', '', '', '', '', '07-03-83', '9486040089', 0, 'jeyagurusursara@gmail.com', 'Gandhi C', '6/672  B Pandian street, lakshmi nagar,VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0146', 0, 36, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(108, '', 'Jeyasri M', 'Female', '', '', '', '', '', '09-01-09', '9976808145', 0, '', 'mahes', 'Main Road, Seithur, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0148', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(109, '5037417', 'Jiveethra shree R P', 'Female', '', '', '', '', '', '19-12-09', '9944870060', 0, '', 'Pechimuthu R', '77 Sarasamuthura agragaram, chinna soorakaipatti , Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0149', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(110, '', 'Jothi Sankari M', 'Female', '', '', '', '', '', '03-07-01', '9843128263', 0, 'sakthim.svks@gmail.com', 'Murugesan S', '7/12, Matthi st, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0152', 0, 18, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(111, '', 'Kabilan K', 'Male', '', '', '', '', '', '30-08-04', '9894677619', 0, '953614114010@ritrjpm.ac.in', 'Karuppalagu S', '95/125, K M D V P Street, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0154', 0, 15, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(112, '', 'Kalaiyarasu P', 'Male', '', '', '', '', '', '16-07-06', '9865250360', 0, '', 'Perumal P', '15, 52-L Ramasamy Nagar , Sithurajapuram, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0155', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(113, '', 'Kalimuthu K', 'Male', '', '', '', '', '', '06-05-09', '9659391032', 0, '', 'Kartheeswaran M', '145 Kottai thalai vasal', '2031-03-20 12:59:00', '', '', 'VDCA_0157', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(114, '', 'Kamaleshwaran A', 'Male', '', '', '', '', '', '30-03-11', '9444015064', 0, '', 'Archunan S', '1/226, North St., Ayan karisalkulam Maharajapuram Via ', '2031-03-20 12:59:00', '', '', 'VDCA_0158', 0, 8, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(115, '', 'Kanagalakshmi N', 'Male', '', '', '', '', '', '21-10-11', '9047860428', 0, '', 'Narayanamoorthy', '127 North street, Kilavikulan, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0159', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(116, '25671502', 'Kanirathinam A', 'Male', '', '', '', '', '', '19-01-05', '9976810902', 0, '', 'Abrahamdevadhas ', '3/219V Sivan Kovil Street, Mankudi, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0160', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(117, '45023859', 'Kanishk N C', 'Male', '', '', '', '', '', '27-01-10', '8838405005', 0, 'nivikanisht20102@gmail.com', 'Chinna Thambi', '485A, Sri venugopalsamy temple back side Krishnan koil', '2031-03-20 12:59:00', '', '', 'VDCA_0161', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(118, '', 'Kanishka B', 'Female', '', '', '', '', '', '06-03-10', '8940120884', 0, '', 'Balakrishnan', '40 Vairavasamy Kovil St., Seithur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0162', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(119, '', 'Kanthavel G', 'Male', '', '', '', '', '', '26-10-09', '8300058414', 0, '', 'Ganesan T', 'Andal nagar, Renganathapuram Srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0163', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(120, '', 'Karthick Nissanth N', 'Male', '', '', '', '', '', '14-09-01', '9486030295', 0, 'niveniss1814@gmail.com', 'Nagarajan S', '30, Javuli Kadai Veethi, Thiruthangal', '2031-03-20 12:59:00', '', '', 'VDCA_0164', 0, 18, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(121, '', 'Karthick V', 'Male', '', '', '', '', '', '16-09-05', '9123589106', 0, '', 'Vallinayagam K', '2/319 Muthanathi, Kilavikulam Post, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0165', 0, 14, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(122, '', 'Karthieswari K', 'Female', '', '', '', '', '', '19-05-10', '9500205296', 0, '', 'kannan', '130, Asamani medu st., Mullikulam Malli, Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0166', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(123, '', 'Karthik raja k', 'Male', '', '', '', '', '', '04-10-08', '9566734238', 0, '', 'Karutha pandi', '', '2031-03-20 12:59:00', '', '', 'VDCA_0167', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(124, '', 'Karuppasamy M', 'Male', '', '', '', '', '', '01-07-71', '9787338289', 0, '', 'Macha Kala A', '64 A, K.K Nagar, Thiruthangal', '2031-03-20 12:59:00', '', '', 'VDCA_0168', 0, 48, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(125, '', 'kathiran R', 'Male', '', '', '', '', '', '10-03-06', '9843240277', 0, 'bamarajeshkumar@gmail.com', 'Rajesh Kumar', '10/28 A Nachiarpatti post , srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0169', 0, 13, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(126, '', 'Kathiravan Ethiraj Sakthi N', 'Male', '', '', '', '', '', '26-01-08', '8903429637', 0, 'devinirmal@gmail.com', 'Nirmal Sakthi S', '37/133 Easts cara st., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0170', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(127, '', 'Kaviarasu G', 'Male', '', '', '', '', '', '13-09-09', '8489280332', 0, 'jeevagan.j1994@gmail.com', 'Ganeshram', '2/53B, Bazzar st., Kunnur, Watrap ', '2031-03-20 12:59:00', '', '', 'VDCA_0171', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(128, '', 'Kavipriyan K', 'Male', '', '', '', '', '', '09-03-09', '8825538933', 0, '', 'Kalirajan K', '907A/4 Gandhi nagar, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0172', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(129, '25954210', 'Kaviya V', 'Female', '', '', '', '', '', '12-11-11', '9566455695', 0, '', 'Venkatesh k', '217, muthumari nagar, chockalingapuram.', '2031-03-20 12:59:00', '', '', 'VDCA_0173', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(130, '', 'Keerthanaparameshwari M', 'Female', '', '', '', '', '', '17-11-07', '9994752350', 0, '', 'Manikandan G', '38H/9 chettiyakudi kaliyamman kovil street, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0177', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(131, '', 'Keerthi Rajan M', 'Male', '', '', '', '', '', '14-03-08', '9688980208', 0, 's.muthuvel.com@gmail.com', 'Muthuvel S', '39/c Sakkaraikulam St., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0178', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(132, '', 'Keerthivasan R', 'Male', '', '', '', '', '', '06-02-10', '9750303140', 0, '', 'Ramasubramanian J', '254/1 weavers colony, ESI hospital near, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0179', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(133, '25014668', 'Kevin Anderson I', 'Male', '', '', '', '', '', '27-10-08', '9994171199', 0, 'irudhayamlawrence@gmail.com', 'Irudhayam I', '1/210, Matha Kovil St., Sundaranachiarpuram Post, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0180', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(134, '', 'Khavin M', 'Male', '', '', '', '', '', '20-07-10', '9941055532', 0, 'spicymadhan@gmail.com', 'Madhan K', '35,Anna Nagar, Sattur', '2031-03-20 12:59:00', '', '', 'VDCA_0181', 0, 9, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(135, '', 'Kirija sri K', 'Male', '', '', '', '', '', '23-10-12', '8903548179', 0, '', 'Kannan ', '2/91 c Koyyathoppu, valayapatti sallipatti srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0182', 0, 7, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(136, '25954229', 'Kiruthick P', 'Male', '', '', '', '', '', '09-10-11', '9363118587', 0, '', 'Palanichamy M', '25 Bahuji nagar, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0184', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(137, '', 'Kiruthick V', 'Male', '', '', '', '', '', '24-03-08', '6383002650', 0, '', ' Vellaichamy A', '', '2031-03-20 12:59:00', '', '', 'VDCA_0185', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(138, '', 'Kisan Karthik S', 'Male', '', '', '', '', '', '16-05-09', '9994424706', 0, 'mahalaxsmi@gmail.com', 'Sivaraman M', '6, Koonankulam New St., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0187', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(139, '25682644', 'Kishan R', 'Male', '', '', '', '', '', '08-01-05', '7708160776', 0, '', 'Ragu nathan M', '3/645, Gandhi nagar, Ceylon colony, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0188', 0, 14, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(140, '', 'Kishna Venika m', 'Female', '', '', '', '', '', '13-08-12', '9442115404', 0, 'sakthisreemariappan@gmail.com', 'Mahesh Kumar M', '500/133A Railway feeder Road, Thendral nagar, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0189', 0, 7, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(141, '', 'Kishor S', 'Male', '', '', '', '', '', '18-03-05', '9842198625', 0, '', 'Siva Guru nathan ', '46, Manjapoo St, Srivilliputhur.', '2031-03-20 12:59:00', '', '', 'VDCA_0190', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(142, '25128205', 'Kishor S V', 'Male', '', '', '', '', '', '26-05-03', '9865691812', 0, '', 'Venu Gopal S', '1/448-I, Muneesnagar, Jaycees School, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0191', 0, 16, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(143, '', 'Kishore M', 'Male', '', '', '', '', '', '21-06-08', '7598342766', 0, '', 'Murugan S', 'p-6, police quarters, Malaiyadipatti, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0192', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(144, '', 'Kishore yadav I', 'Male', '', '', '', '', '', '04-01-08', '8754420677', 0, '', 'IlayaRaja G', '65/4, Arraichipatti, Pilliyar Kovil st., Srivilliputur', '2031-03-20 12:59:00', '', '', 'VDCA_0193', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(145, '45023956', 'Kishorekumar R', 'Male', '', '', '', '', '', '28-04-09', '9443571621', 2147483647, '', 'Ragunathan V', '30, Thiruvalluvar street, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0194', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(146, '', 'Krithik Nivas P', 'Male', '', '', '', '', '', '26-09-12', '9487575324', 0, 'bisundhapurusothaman@gmail.com', 'Purusothaman K', '2/653B, K S A Rajadurai nagar, Villampatti Rd., Near Jaycees school, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0195', 0, 7, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(147, '', 'Kumaresh A', 'Male', '', '', '', '', '', '08-06-04', '9442803418', 0, 'kumareshayyachamy0408@gmail.com', 'Ayyachamy K', '78 A, A T M P N Nagar, Viruthunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0196', 0, 15, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(148, '', 'Lakshin Yugan C T', 'Male', '', '', '', '', '', '28-02-12', '9443126276', 0, 'venkateshhh78@gmail.com', 'Thangamani Venkatesh C', '27/2, kattalai patti road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0197', 0, 7, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(149, '', 'Lakshitha devi m', 'Female', '', '', '', '', '', '30-05-11', '7871315522', 0, '', 'mariappan R', '45A Valaiyar new St., Seithur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0198', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(150, '', 'Lakshminarayani S', 'Female', '', '', '', '', '', '21-07-06', '9788634516', 0, '', 'Samuthiraselvam S', '561 Keelepatti pillayar kovil street, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0200', 0, 13, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(151, '', 'Lenin AG', 'Male', '', '', '', '', '', '21-04-72', '9894257913', 0, '', 'Gurusamy A', '8/3 South Street, Chatrmatti, Rajapalauam', '2031-03-20 12:59:00', '', '', 'VDCA_0201', 0, 47, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(152, '', 'Lithanyasree V P', 'Female', '', '', '', '', '', '09-09-09', '9940679698', 0, '', 'Vijayakumar ', '778 A Annamamraja nagar, rajapalay', '2031-03-20 12:59:00', '', '', 'VDCA_0203', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(153, '', 'Lokesh V S', 'Male', '', '', '', '', '', '13-08-09', '9789223722', 0, 'kodangipatti@gmail.com', 'Sureshkumar V', '446 Bankar\'s colony, thiruvalluvar nagar, rajapalayam.', '2031-03-20 12:59:00', '', '', 'VDCA_0205', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(154, '', 'Lokith G', 'Male', '', '', '', '', '', '09-09-09', '7904501676', 0, 'ganesh.vigneshwari@gmail.com', 'Ganesh Kumar V', '1-26, 20/7, Shanmugavel nagar, Madurai Rd., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0206', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(155, '', 'Madhava Chakkaran L', 'Male', '', '', '', '', '', '04-04-12', '8189838382', 0, '', 'Lingasamy', '4/14 Ramaraja SR, Koomapatty', '2031-03-20 12:59:00', '', '', 'VDCA_0208', 0, 7, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(156, '', 'Madhesh N T', 'Male', '', '', '', '', '', '11-03-07', '9942304277', 0, '', 'Thiruppathi N', '155/1 A V T Padasali St., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0209', 0, 12, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(157, '', 'Maheswaran B', 'Male', '', '', '', '', '', '18-02-08', '9360295577', 0, ' ', 'Balaraman N', '6TA, Sevalpatti South street, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0210', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(158, '', 'Maheswaran P', 'Male', '', '', '', '', '', '10-10-86', '9843372842', 0, 'maheswaranpalsamy@gmail.com', 'Palsamy M', '249/1 Ayyapan Colony, attalai Patti Road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0211', 0, 33, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(159, '', 'Mahima Roshini', 'Female', '', '', '', '', '', '23-06-10', '8072084184', 0, '', 'Sakthieswari S', '266 Amman Kovil patti , middle st., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0212', 0, 9, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(160, '25954253', 'Mangaiyarkarasi T', 'Female', '', '', '', '', '', '15-09-06', '9489519733', 0, 'thulasidansano@gmail.com', 'Thulasidasan', '16/11 Chettiyakudi st, Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0213', 0, 13, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(161, '25756559', 'Mani Sharma G S', 'Male', '', '', '', '', '', '03-03-07', '9944735480', 0, '', 'Saravanan M', '9B, Perumal Sannathi st., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0214', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(162, '', 'Manjuru T', 'Male', '', '', '', '', '', '12-12-09', '9585387789', 0, '', 'Thangakesavan K', '2/22 Southcolony, managaseri, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0215', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(163, '25999800', 'Manoj M', 'Male', '', '', '', '', '', '07-05-10', '8056751365', 0, '', 'Madasamy M', '456, Malaydipatti , Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0216', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(164, '', 'Mareeswaran M', 'Male', '', '', '', '', '', '19-05-10', '7868919177', 0, 'mareesm3398@gmail.com', 'Muthu vijaya baskara raja A', '1/528, Krishna Nagar, Krishnankovil', '2031-03-20 12:59:00', '', '', 'VDCA_0217', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(165, '', 'Mareeswari K', 'Female', '', '', '', '', '', '24-11-03', '9942962962', 0, 'mareeswari406@gmail.com', 'Karuppasamy G', '1/307. Colony Street, Kilavikulam, rajapalayam ', '2031-03-20 12:59:00', '', '', 'VDCA_0218', 0, 16, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(166, '', 'Mari Muthu K', 'Male', '', '', '', '', '', '12-01-01', '6381224266', 0, 'Chessmari@gmail.com', 'Karuppasamy', '724-A, Kamraj Salai, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0219', 0, 18, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(167, '25999460', 'Mariavalan K', 'Male', '', '', '', '', '', '08-03-06', '9942996161', 0, '', 'Kithiyon Vrathanayagam', '1/196-c1, Guru colony , Devarkullam Rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0220', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(168, '25682717', 'Meenatchi M', 'Female', '', '', '', '', '', '04-11-08', '9487690257', 0, 'pearls1967@gmail.com', 'Muthu M', '21 A7/2/1, Ponnagaram, Ramnagar, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0221', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(169, '', 'Menaga J', 'Female', '', '', '', '', '', '07-11-04', '9159133979', 0, 'mahalakshmimahalakshmi@gmail.com', 'Jeya Bhasher G', '2/2/39/11, Sri srinivasa Nagar, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0222', 0, 15, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(170, '', 'Mithradevi K', 'Male', '', '', '', '', '', '12-09-12', '8056568093', 0, '', 'Kamatchinathan P', 'East street, Kilavikulam', '2031-03-20 12:59:00', '', '', 'VDCA_0223', 0, 7, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(171, '', 'Mohamed Abubakkar sithik', 'Male', '', '', '', '', '', '31-10-08', '6384073773', 0, '', 'Saiyed Abshar M', '18 Muslim east street, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0224', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(172, '', 'Mohammed asif ismail S', 'Male', '', '', '', '', '', '12-01-08', '8122485224', 0, '', 'SyedIbrahim A', '21-1k/Dr.abdulkalam nagar, sommanathapuram, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0225', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00');
INSERT INTO `vdca_players_db` (`id`, `fide_id`, `name`, `gender`, `city`, `Institution`, `rating`, `aicf`, `tnsca`, `dob`, `phone_no`, `alter_phone_no`, `email_id`, `father_name`, `address`, `lapsed`, `birth_cf`, `photo`, `vdca_id`, `otp`, `age`, `year`, `ststus`, `active`, `dist`, `paid_at`, `cip`, `cby`, `cdate`, `mby`, `mip`, `mdate`) VALUES
(173, '', 'Mohammed Bilal', 'Male', '', '', '', '', '', '07-12-09', '9677476095', 0, '', 'Ashira A', 'Sammantapuram, Rajaplayam', '2031-03-20 12:59:00', '', '', 'VDCA_0226', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(174, '45024065', 'Mohammed Shajith B', 'Male', '', '', '', '', '', '03-02-08', '9943334269', 0, '', '', '', '2031-03-20 12:59:00', '', '', 'VDCA_0227', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(175, '', 'Mohana Tamil v', 'Male', '', '', '', '', '', '05-12-11', '9150437903', 0, '', 'Vanakkam Samy', '2/165 main road, Kottaiyur', '2031-03-20 12:59:00', '', '', 'VDCA_0228', 0, 8, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(176, '', 'Mohnish S', 'Male', '', '', '', '', '', '04-06-06', '9994378280', 0, 'sujasubbu2@gmail.com', 'Subburaj E', '1/583 - South St Narnapuram, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0230', 0, 13, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(177, '', 'Monika K', 'Female', '', '', '', '', '', '27-08-06', '9498184147', 0, 'vasanthimonica1983@gmail.com', 'Kannan M', 'Mari amman Kovil st., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0231', 0, 13, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(178, '35070592', 'Monish Ragavendra G', 'Male', '', '', '', '', '', '12-11-06', '9865777798', 0, 'srganeshkumar_i@yahoo.com', 'Ganesh kumar S R', '112/3c, Kamarajar Rd., Arasan nagar, Sachiyapuram , sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0232', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(179, '', 'Mukesh Kumar P', 'Male', '', '', '', '', '', '13-04-11', '8110089973', 0, '', 'Poothathan', '17 weststreet, kilavikulam', '2031-03-20 12:59:00', '', '', 'VDCA_0237', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(180, '', 'Mukesh V', 'Male', '', '', '', '', '', '09-06-08', '8778452429', 0, 'sanjumugi@gmail.com', 'Vanaraj S', '146 F 1, Chinna Suraki Patti Street', '2031-03-20 12:59:00', '', '', 'VDCA_0240', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(181, '', 'Murugeshwari P', 'Female', '', '', '', '', '', '30-08-11', '9791873766', 0, '', 'Pandikumar R', 'Middle st., Kilavikulam', '2031-03-20 12:59:00', '', '', 'VDCA_0242', 0, 8, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(182, '25682881', 'Muthheeswari P', 'Female', '', '', '', '', '', '08-03-09', '7639047740', 0, '', 'Pandi', '2/165, Main Rd., Kottaiyur', '2031-03-20 12:59:00', '', '', 'VDCA_0243', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(183, '', 'Muthukumar J', 'Male', '', '', '', '', '', '04-11-10', '7598282931', 0, 'janarthanan07189@gmail.com', 'Janarthanan R', '73, P.K.S St., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0244', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(184, '', 'Muthumari V', 'Female', '', '', '', '', '', '09-06-10', '9894243684', 0, '', 'Vairamutu', '464 P/3 Indira Colony Muthukudi , Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0245', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(185, '', 'Muthuraj P', 'Male', '', '', '', '', '', '17-06-09', '9842520899', 0, 'paramasivamrjpm@gmail.com', 'Paramasivam K', '72, Gnanasambandhar North st.,Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0246', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(186, '', 'Nallammal G', 'Female', '', '', '', '', '', '16-01-10', '8489284782', 0, '', 'Ganeshan', 'Kattabomman Nagar, Seithur , Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0248', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(187, '', 'Nandhini R', 'Female', '', '', '', '', '', '17-10-00', '8825569494', 0, 'nandhur1710@gmail.com', 'Raghavan G', 'S.R Rajan, 41/15A, AC colony Vilampatti Rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0249', 0, 19, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(188, '25042564', 'Navdeep Raja T', 'Male', '', '', '', '', '', '02-01-08', '9442665811', 0, '', 'Thangaraj R', '3/9/605, Thirupathinagar Cylon colony, Reserve Line sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0250', 0, 11, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(189, '', 'Naveen K', 'Male', '', '', '', '', '', '24-09-09', '9943308787', 0, '', 'Kanagaraj L', 'Koonankulam new St., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0252', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(190, '', 'Naveen kumar B', 'Male', '', '', '', '', '', '24-05-05', '9976747004', 0, 'nathankboomi@gmail.com', 'Boominathan K', '5/36 mill krishnapuram KR Nagar, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0253', 0, 14, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(191, '', 'Naveen Kumar m', 'Male', '', '', '', '', '', '28-09-06', '9442422348', 0, '', 'Muthukumar S', '185A, chinna suraikaipatti st., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0254', 0, 13, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(192, '', 'Naveen Saravana Kumar', 'Male', '', '', '', '', '', '30-08-07', '9585773307', 0, 'naveensaravanakumar@gmail.com', 'Saravanakumar T S', '134, Palaniandavar Puram Colony, E.B Back side, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0255', 0, 12, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(193, '45024138', 'Nidharshana S', 'Female', '', '', '', '', '', '05-07-12', '9486510655', 0, '', 'Sri Sakthimyndhau', '59, LBS nagar, Perali Road, Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0256', 0, 7, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(194, '', 'Nigash S', 'Male', '', '', '', '', '', '31-05-07', '9965653715', 0, '', 'Senthikumar S', '5-28-26D theerthakarai nagar, palayampatti, Aruppukkottai', '2031-03-20 12:59:00', '', '', 'VDCA_0257', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(195, '', 'Nikhil Kumar M', 'Male', '', '', '', '', '', '12-12-07', '9894154781', 0, 'nikhilkrishnan74@gmail.com', 'Murali Krishnan s', '161, Sakthi nagar, senbhagathoppu rd., rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0258', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(196, '', 'Nithin J', 'Male', '', '', '', '', '', '17-03-09', '9944088427', 0, '', 'IlayaRaja G', '65/4, Arraichipatti, Pilliyar Kovil st., Srivilliputur', '2031-03-20 12:59:00', '', '', 'VDCA_0260', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(197, '', 'Nithiswaran S', 'Male', '', '', '', '', '', '10-08-10', '8110954102', 0, '', 'Sathish Kumar', 'Maravaar St., Kottaiyur', '2031-03-20 12:59:00', '', '', 'VDCA_0261', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(198, '25682776', 'Nithya Padmashree K', 'Female', '', '', '', '', '', '15-09-08', '9994446880', 0, 'balajikannanti@gmail.com', 'Kannan M', '73/D, Linkroad, Viruthunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0262', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(199, '25671715', 'Nithyasree P J', 'Female', '', '', '', '', '', '10-04-08', '9944163830', 0, 'vajamcolourpvints@gmail.com', 'palanivel p', '1361 pkn road, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0263', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(200, '', 'Noorul Safana M', 'Female', '', '', '', '', '', '20-02-11', '9843421132', 0, 'safasvks@gmail.com', 'Mohamed Musthafa R', '270 D Kanthapuram colony, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0264', 0, 8, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(201, '46655298', 'Oviya B', 'Female', '', '', '', '', '', '07-09-04', '9566734363', 0, 'divyaoviya@gmail.com', 'Bala Murugan K', '82/A, Chairman, N K R road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0267', 0, 15, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(202, '', 'Pandiyarajan P', 'Male', '', '', '', '', '', '10-09-07', '9894398553', 0, '', 'Perumal', '101,6 north street, laksipuram pudhur, Inamkarisal kulam, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0270', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(203, '', 'Parthibha rajan R', 'Male', '', '', '', '', '', '06-03-07', '9843568099', 0, 'vishwaparthibharajan0301@gmail.com', 'Rajamuthuvel K', '5-34-3, Kamarajar nagar, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0271', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(204, '', 'Paul Nithish Raja P', 'Male', '', '', '', '', '', '14-04-08', '9790450656', 0, '', 'Paulraj', 'Ricemill st., Menachipuram', '2031-03-20 12:59:00', '', '', 'VDCA_0272', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(205, '', 'Pon mahalakshmi K', 'Female', '', '', '', '', '', '07-10-09', '9994637611', 0, '', 'Kamala Sekar S', '48/159, Pethaiah St., Rajapalayam ', '2031-03-20 12:59:00', '', '', 'VDCA_0274', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(206, '', 'Ponkiruthika m', 'Female', '', '', '', '', '', '01-09-09', '9443814100', 0, '', 'Muthusamy', '2/1 Indra Colony, Athikulam, Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0275', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(207, '', 'Ponmalai M', 'Male', '', '', '', '', '', '14-09-08', '9150484813', 0, '', 'mani R', '23A, noth st., Thailakulam, Athikulam, Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0276', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(208, '', 'Ponmalar P', 'Female', '', '', '', '', '', '26-09-06', '9047540616', 0, 'pandiapp@gmail.com', 'Pandimurugam V', '2/1934-C, PSR nagar, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0277', 0, 13, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(209, '', 'Porkalaivani N', 'Female', '', '', '', '', '', '13-09-03', '9894926761', 0, 'greenpearl68150@gmail.com', 'Nagarajan R', '1/2171, Muthal Nagar, Pandian Nagar, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0278', 0, 16, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(210, '25682792', 'Pragalathan J', 'Male', '', '', '', '', '', '16-08-08', '9486407116', 0, 'thillaisumanju@gmail.com', 'Jayaraman C', '264F, Kasthuri Complex, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0279', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(211, '', 'Prajit A', 'Male', '', '', '', '', '', '11-01-11', '8608782302', 0, '', 'Ashok Raju', '6, M K Thangavel Nadar St., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0280', 0, 8, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(212, '', 'Prakashraj A', 'Male', '', '', '', '', '', '09-04-09', '9790198195', 0, '', 'Anthony Raj F', '261/14 Muneeswamy Nagar, near police station S.N.Puram Rd., Thiruthangal ', '2031-03-20 12:59:00', '', '', 'VDCA_0281', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(213, '', 'Pranav J', 'Male', '', '', '', '', '', '24-04-05', '9790333308', 0, '', 'Jeyakumar', '30ft rd.,Samukaval, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0282', 0, 14, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(214, '45002592', 'Pranav S', 'Male', '', '', '', '', '', '16-11-12', '9442661383', 0, 'senthilkarpagam75@gmail.com', 'Senthil Kumar S', '2/773 B , Ezhil nagar, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0283', 0, 7, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(215, '', 'Prasanna Devi', 'Female', '', '', '', '', '', '23-12-10', '9944979080', 0, '', 'Muthumari G', 'Magapuram street,', '2031-03-20 12:59:00', '', '', 'VDCA_0285', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(216, '', 'Prasanna Kumar', 'Male', '', '', '', '', '', '19-05-05', '9367704590', 0, 'mv05051978@gmail.com', 'Mugunthan A', '13, A V T Middle st., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0286', 0, 14, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(217, '', 'Pratyush S', 'Male', '', '', '', '', '', '08-01-12', '9942438834', 2147483647, '', 'Saravana R', '25/G 3 Alagudevan kulam rd., Awarampatti , Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0287', 0, 7, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(218, '', 'Preethi B', 'Female', '', '', '', '', '', '29-03-09', '8508887456', 0, '', 'Balakrishna I', 'Kamarajar se AKDR womens college opp, sembagathoppu road', '2031-03-20 12:59:00', '', '', 'VDCA_0289', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(219, '', 'Priyadharshini P', 'Female', '', '', '', '', '', '27-06-09', '9943222591', 0, '', 'Pandiyarajan A', '152/B1, Avalappa samy koil st., kattayapuram Virudunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0290', 0, 10, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(220, '', 'Priyanarayani V', 'Male', '', '', '', '', '', '02-12-11', '9442571265', 0, '', 'Vinayagamoorthi S', '42/65 vazhaikulam street, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0291', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(221, '', 'Priyavathi S', 'Female', '', '', '', '', '', '14-06-09', '9787825743', 0, '', 'Selvam V', '8/1225-2 Parasakthi nagar, pavali', '2031-03-20 12:59:00', '', '', 'VDCA_0292', 0, 10, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(222, '', 'Ragavan M', 'Male', '', '', '', '', '', '03-09-08', '9843559904', 0, '', 'Muthuvali V', '', '2031-03-20 12:59:00', '', '', 'VDCA_0293', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(223, '', 'Ragavan R K', 'Male', '', '', '', '', '', '06-02-09', '9443134244', 0, '', 'Ramesh Kannan K', '4/8/275, Nehruji Nagar, Reserve Line, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0294', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(224, '25759949', 'Ragavendra Vishwanaath V S', 'Male', '', '', '', '', '', '08-12-05', '9486001605', 0, '', 'Venkatasubramaniam', '3, Majeeth Nagar, Srivilliputthur', '2031-03-20 12:59:00', '', '', 'VDCA_0295', 0, 14, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(225, '25759680', 'Raja Vaishnave J', 'Female', '', '', '', '', '', '10-05-08', '9487602188', 0, 'vimaladevijk@gmail.com', 'Jaya Kumar V', '9/1, Narayana Madam Street, Viruthunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0297', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(226, '45024260', 'Rajajeevananthan T', 'Male', '', '', '', '', '', '30-06-08', '9003664396', 0, 'rajajeeva2008@gmail.com', 'Thangaraj ', '36, Chiorambapuram Street, Thirynagarm, Arupukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0298', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(227, '', 'Rajalakshmi G', 'Female', '', '', '', '', '', '30-05-08', '9003783326', 0, '', 'Gnnaguru M', '183/7 keelpatti pillar kovil street, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0299', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(228, '', 'Rakesh narayana Varma A', 'Male', '', '', '', '', '', '14-02-09', '9943334875', 0, '', 'Arun kumar', 'South street, Kottiyur', '2031-03-20 12:59:00', '', '', 'VDCA_0302', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(229, '', 'Raksana P', 'Male', '', '', '', '', '', '03-10-09', '9842574765', 0, '', 'Pothi raj G', 'Ujji Samy kovil 4th cross st., Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0303', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(230, '', 'Rama Guru R', 'Male', '', '', '', '', '', '17-05-12', '9943559635', 0, '', 'Ramachandran Gurumoorthy', '1/9, South St., Kilavikulam', '2031-03-20 12:59:00', '', '', 'VDCA_0304', 0, 7, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(231, '', 'Ranjith Kumar R', 'Male', '', '', '', '', '', '17-10-10', '9245199514', 0, 'rajkumarp.rvs.com@gmail.com', 'Rajkumar P', '69A, Kammapatti St., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0306', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(232, '', 'Reya Bala veni P', 'Female', '', '', '', '', '', '26-12-05', '9443962210', 0, 'reyapaul26@gmail.com', 'Paulraj S', '427, Bankers Colony Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0307', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(233, '', 'Rhea S', 'Female', '', '', '', '', '', '28-03-10', '9787628179', 0, 'Sundar007701@gmail.com', 'Shyam Sundar G V', '40, Gnanagiri Road, Cornation Colony, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0308', 0, 9, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(234, '', 'Rishi Prannav', 'Male', '', '', '', '', '', '05-02-07', '9585010981', 0, 'b.arunadevi@klin.in', 'kalimuthu', 'B2, staff Quarters - 2 KARE campus, Krishnankoil', '2031-03-20 12:59:00', '', '', 'VDCA_0310', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(235, '', 'Rithik Roshan S', 'Male', '', '', '', '', '', '09-02-09', '9865009899', 0, 'S.ranjani.ba@gmail.com', 'Selvarajn P', '43, Sevalpatti  south street, rajapalayam, viedhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0314', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(236, '', 'Rogesh J', 'Male', '', '', '', '', '', '15-02-09', '9597668981', 0, '', 'Jaya velan', 'Ezhil Nagar, 2/783 A 6th cross st., housing board, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0316', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(237, '', 'Rogesh J', 'Male', '', '', '', '', '', '15-02-09', '9597008981', 0, '', 'Jayabalan J', 'e-52 thiruvalluvar nagar, rajapalayam.', '2031-03-20 12:59:00', '', '', 'VDCA_0317', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(238, '', 'Rosario F', 'Male', '', '', '', '', '', '30-10-07', '9944991523', 0, 'Francisjeyabalan@gmail.com', 'Francis Jeyabalan', '250, Palaniandavarpuram Colony, Gnanagiri Rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0319', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(239, '', 'Roshini I', 'Female', '', '', '', '', '', '27-05-10', '9790082360', 0, '', 'Illaiyaraja', '67, Thenkasi main rd., seithur , rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0320', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(240, '', 'Rubanathan C', 'Male', '', '', '', '', '', '02-04-02', '8825503982', 0, 'rbnsathish@gmail.com', 'Chandrasekar P', '47/158 Bharathi Nagar, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0322', 0, 17, '', '', 0, 'VNR', 'Rotary FIDE - Thalavaipuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(241, '', 'Rubavathi S', 'Female', '', '', '', '', '', '07-11-08', '7502412525', 0, '', 'Sekar M', '88, kaliyammal kovil St., Srivilliputthur', '2031-03-20 12:59:00', '', '', 'VDCA_0323', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(242, '', 'Sabareesh S', 'Male', '', '', '', '', '', '19-12-09', '8110910481', 0, '', 'Siva A', '11/234-C-2 Manicavasagar St., PRR nagar Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0325', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(243, '', 'Sadhur Devi N', 'Female', '', '', '', '', '', '12-01-09', '9095326292', 0, '', 'Nallathambi S', '410, Santhana Mariamman Kovil Back side, Kammapatti Srivilliputthur', '2031-03-20 12:59:00', '', '', 'VDCA_0326', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(244, '', 'Sahana S', 'Female', '', '', '', '', '', '15-12-10', '9842996480', 0, '', 'Selvaraj', '3/21 A L Kottanipatti, Nallamaram T.kallupatti, Peraiyur Madurai', '2031-03-20 12:59:00', '', '', 'VDCA_0327', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(245, '', 'Sahana sri krishna lakshmi K', 'Male', '', '', '', '', '', '03-03-13', '9677533039', 0, '', 'Kannan S T', '27/2 DR Ambetkar nagar, cooperative mill, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0328', 0, 6, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(246, '', 'Sahanaa M R', 'Female', '', '', '', '', '', '25-10-07', '9884453763', 0, '', 'Meenatchi Sundaram S', '121/11B, JNTUC Nagar, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0329', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(247, '', 'Sajan J', 'Male', '', '', '', '', '', '11-12-05', '9843669670', 0, '', 'Jai kumar A', '830, Mundagannadar Street, Periyandavar Colony, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0330', 0, 14, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(248, '', 'Sakthi M', 'Male', '', '', '', '', '', '20-12-10', '9791530705', 0, '', 'Muruguraja', 'E-52 thiruvalluvar nagar, rajapalayam.', '2031-03-20 12:59:00', '', '', 'VDCA_0331', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(249, '', 'Sakthivel K', 'Male', '', '', '', '', '', '11-11-08', '9629915746', 0, '', 'Kaliswaran M', '90/29 East st., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0332', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(250, '', 'Sakthivel K', 'Male', '', '', '', '', '', '18-08-07', '9003522970', 0, 'krishnasamyarunkumarsakthivel@gmail.com', 'Krishnasamy S', '2a/12, Krishnakovil st., Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0333', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(251, '', 'Sanjana G', 'Female', '', '', '', '', '', '18-08-11', '8098633665', 0, 'karthikiselvi@gmail.com', 'Ganeshamurthy P', '2/28 namaskarithanpatti S.N.Puram Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0335', 0, 8, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(252, '', 'Sanjay Krishna G', 'Male', '', '', '', '', '', '20-06-06', '9491088901', 0, '', 'Gopala Krishna M', '2/2237, Sasi nagar Noth NSR, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0337', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(253, '', 'Sanjay shakthi bose A', 'Male', '', '', '', '', '', '27-02-07', '9003922386', 0, 'kcbananth@yahoo.co.in', 'Anantha muthu kumar KCB', '9/D alagapuri rajapalam', '2031-03-20 12:59:00', '', '', 'VDCA_0339', 0, 12, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(254, '', 'Sanjeevrajja J', 'Male', '', '', '', '', '', '17-12-07', '9994922487', 0, '', 'jeeva M', '18/c Chinnayaraja', '2031-03-20 12:59:00', '', '', 'VDCA_0342', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(255, '', 'Sanjit P', 'Male', '', '', '', '', '', '10-05-09', '9865002170', 0, 'rithap2016@gmail.com', 'Palanisamy M', '1-1-82F, KRK nagar, Peraiyur Madurai', '2031-03-20 12:59:00', '', '', 'VDCA_0343', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(256, '', 'Santhosh Kumar R', 'Male', '', '', '', '', '', '17-06-09', '8098211853', 0, '', 'Rama chandran N', '418, South st., Valanthalpuram', '2031-03-20 12:59:00', '', '', 'VDCA_0345', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(257, '', 'Santhuru P', 'Male', '', '', '', '', '', '21-09-10', '9042886599', 0, '', 'Packyaraj', 'Indra Nagar, narnapuram rd, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0348', 0, 9, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(258, '', 'Saravana M', 'Male', '', '', '', '', '', '07-07-09', '9994601282', 0, '', 'Murugesaraja D', '17, Mathang kovil street, near nava bharath school, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0349', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(259, '', 'Saravanakumar A', 'Male', '', '', '', '', '', '15-11-07', '9865945499', 0, '', 'Arumugam M', '53c, Nambi naidu st.,', '2031-03-20 12:59:00', '', '', 'VDCA_0350', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(260, '', 'Saravanan A', 'Male', '', '', '', '', '', '09-05-89', '6380256959', 0, 'saravanasankar@gmail.com', 'Alagarsamy P', '1/114 West Street, Mettugundu(PO) VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0351', 0, 30, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(261, '', 'Saravanan M S', 'Male', '', '', '', '', '', '23-02-10', '8754445055', 0, '', 'Malaiselvan S', '1/199A Samathuvapuram main rd., Valayapatti, Krishnankovil', '2031-03-20 12:59:00', '', '', 'VDCA_0352', 0, 9, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(262, '', 'Saravaneswaran G', 'Male', '', '', '', '', '', '21-02-11', '8344018869', 0, '', 'Gurusamy V', '11 Neer Main Road,Seithur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0353', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(263, '', 'Selva Kishore', 'Male', '', '', '', '', '', '28-09-07', '9498184686', 0, '', 'Senthil Kumar A', 'Postal colony , Palayampatti, Arupukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0354', 0, 12, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(264, '', 'Selvarani K V', 'Female', '', '', '', '', '', '04-10-08', '9597074340', 0, '', 'Kumar P', 'Lakshmana perumal kovil street, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0356', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(265, '', 'Selwin Samuel S', 'Male', '', '', '', '', '', '13-06-11', '9566996639', 0, '', 'Samuel John wesley', '1-36-6 Indra nagar palayampatti Arupukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0357', 0, 8, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(266, '', 'Shajid Yahya Hassan M Z', 'Male', '', '', '', '', '', '25-11-06', '9944762244', 0, 'zindhamalar@gmail.com', 'Mohmed Zindha Madhar', '67, Muslim Sedhakath North St., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0359', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(267, '', 'Shakil Ahamed A', 'Male', '', '', '', '', '', '26-02-07', '7010172091', 0, '', 'Abi bullah S', '299G8 chinnasuraikaipatti, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0360', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(268, '', 'sharmila M', 'Female', '', '', '', '', '', '24-07-08', '9677983737', 0, 'sabariram2007@gmail.com', 'Muthukumar', '13, Weavers Colony, Madurai rd,Arupuukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0362', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(269, '', 'Sharvesh S', 'Male', '', '', '', '', '', '30-05-12', '9600256577', 0, '', 'Sivakumar A', '32, Natarajan Colony, Arumugam rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0363', 0, 7, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(270, '', 'Shiva karthik K R ', 'Male', '', '', '', '', '', '24-05-12', '9150055755', 0, 'ragurampk@gmail.com', 'Rahuram P K', '108/3 Velayutham rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0365', 0, 7, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(271, '', 'Shivani A R', 'Female', '', '', '', '', '', '14-10-08', '9659316031', 0, '', 'Rajavel M', '47, Kariyam Velliyam St., Telephone raod, Arupukkotai', '2031-03-20 12:59:00', '', '', 'VDCA_0366', 0, 11, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(272, '', 'Shreechandran S.A', 'Male', '', '', '', '', '', '22-08-08', '7373291000', 0, 'anudoss@Yahoo.com', 'Sivanesh Kumaran J', '17B, Chairman A R Arunachalam Road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0367', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(273, '', 'Shri Nimeshika K', 'Female', '', '', '', '', '', '22-11-08', '9629298889', 0, 'niranchala@gmail.com', 'Karthikeyan V', '1/604,E N G O Colony, Satchiyapuram, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0368', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(274, '', 'Sivanandha V', 'Male', '', '', '', '', '', '08-12-02', '9952156275', 0, '', 'Vijayan M', '6/618,lakshmi Nagar, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0372', 0, 17, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(275, '', 'Sivaprakash J', 'Male', '', '', '', '', '', '11-10-05', '7598577691', 0, '', 'Jai Ganesh Prabhu R P', '2/257 C State bank Colony , satchiayapuram Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0374', 0, 14, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(276, '', 'Sivasubramanian S', 'Male', '', '', '', '', '', '13-11-09', '8508583125', 0, 'prema63saravanan@gmail.com', 'Saravanan P', '48/4 North street, solapuram, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0375', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(277, '', 'Sivasubramaninan', 'Male', '', '', '', '', '', '30-05-08', '9655754474', 0, 'Maharasivelmurugan1987@gmail.com', 'Velmurugan K', '122, North street , villupunar, VNR', '2031-03-20 12:59:00', '', '', 'VDCA_0376', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(278, '', 'Soundar Rajan S', 'Male', '', '', '', '', '', '06-06-09', '9865210068', 0, '', 'Seshathri R', '2/3 Andal Sannathi St., Srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0378', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(279, '', 'Sreeshanth C', 'Male', '', '', '', '', '', '08-07-11', '9629212505', 0, '', 'Chandrasekaran S', 'kaladevi amman ', '2031-03-20 12:59:00', '', '', 'VDCA_0379', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(280, '', 'Sri Aadhya S A', 'Female', '', '', '', '', '', '21-11-11', '9750957908', 0, 'sjsivanesh@gmail.com', 'Sivanesh Kumaran J', '17B, Chairman A R Arunachalam Road, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0380', 0, 8, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(281, '', 'Srimathi V', 'Female', '', '', '', '', '', '12-05-10', '9751116758', 0, 'vaitheemangalam@gmail.com', 'Vaitheeswaran N', '5F/1 Thiruvananthapuram street, pachamadam, rajapalayam.', '2031-03-20 12:59:00', '', '', 'VDCA_0383', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(282, '', 'Srisivagiri P', 'Male', '', '', '', '', '', '31-05-13', '9842627130', 0, '', 'Pannerselvan S', '528-1-A Weavers colony, Theerthakarai, EB colony Extn, palayankottai, Aruppukkottai', '2031-03-20 12:59:00', '', '', 'VDCA_0385', 0, 6, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(283, '', 'Srivetrivel K', 'Male', '', '', '', '', '', '06-05-10', '9578546433', 0, '', 'Kannan D K', '5 Mariamman kovil street, Mamsapuram, Srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0386', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(284, '', 'Stanley S', 'Male', '', '', '', '', '', '04-09-08', '9965044690', 0, '', 'Selvagam D', '', '2031-03-20 12:59:00', '', '', 'VDCA_0387', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(285, '', 'Sudharsan G', 'Male', '', '', '', '', '', '22-02-07', '9442418971', 0, '', 'Govindaraj K', '33D Ayyampatti pillaiyarkovil street, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0388', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(286, '', 'Sujitha B', 'Female', '', '', '', '', '', '11-01-09', '9842344850', 0, '', 'Balasubramani P', '11/249, P.R.R nagar 1st st., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0389', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(287, '', 'Sunitha P', 'Female', '', '', '', '', '', '27-12-07', '9786765917', 0, '', 'Perumal samay S', 'Main rd., idaiyankulam', '2031-03-20 12:59:00', '', '', 'VDCA_0391', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(288, '', 'Suresh Kumar R', 'Male', '', '', '', '', '', '29-01-10', '9677609521', 0, '', 'Ramar S', 'Five Shop St., Seithur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0392', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(289, '', 'Surya kumar S', 'Male', '', '', '', '', '', '31-05-08', '9994428179', 0, 'Shyar@uhhinched.com', 'Shyam Sunder G V ', '40, Gnangiri Road, Cornation Colony, Sivakasi.', '2031-03-20 12:59:00', '', '', 'VDCA_0393', 0, 11, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(290, '', 'Tejas Balaji S K', 'Male', '', '', '', '', '', '20-10-09', '9486003840', 0, '', 'Kumarasamy B', '640/587A Singarajakottai big street', '2031-03-20 12:59:00', '', '', 'VDCA_0394', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(291, '', 'Tennarasu M S', 'Male', '', '', '', '', '', '16-11-03', '9942087068', 0, '', 'Selvarajn M', '5/190 Pillayarkovilstreet, meenachipuram', '2031-03-20 12:59:00', '', '', 'VDCA_0395', 0, 15, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(292, '', 'Tharun bala P', 'Male', '', '', '', '', '', '06-04-12', '9894355709', 0, '', 'PerumalRaja G', '87 mariamman kovil street, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0398', 0, 7, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(293, '', 'Theja B', 'Female', '', '', '', '', '', '22-11-06', '7550334992', 0, '', 'Balaji R', '171, Soundi St., Allampatti Virudhunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0399', 0, 13, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(294, '', 'Thirumalai rajan M', 'Male', '', '', '', '', '', '22-04-78', '9488392209', 0, 'thirurajan6666@gmail.com', 'Mottaiyan M', '6/638/9A, Cholan Street,Lakshmi Nagar, VNR.', '2031-03-20 12:59:00', '', '', 'VDCA_0400', 0, 41, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(295, '', 'Thirunavukarasu m', 'Male', '', '', '', '', '', '20-02-06', '9843040474', 0, 'manismpx@gmail.com', 'manikandan R M', '17 B J.nagar , N K R Periyannan Rd, sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0401', 0, 13, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(296, '', 'Thiruppathiraja R', 'Male', '', '', '', '', '', '11-09-09', '8870000087', 0, '', 'Ramasundraraj', 'Illathar St., Seithur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0402', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(297, '', 'Udhaya Kumaran T', 'Male', '', '', '', '', '', '18-12-07', '9445927561', 0, '', 'Thanga Pandian S K', '4/33, Thiyagarayapuram ndadar middle st., Mudalipati , Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0403', 0, 12, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(298, '', 'Uma Maheshwari K R', 'Female', '', '', '', '', '', '21-09-01', '7010036892', 0, '', 'Ramarajaguru K', '', '2031-03-20 12:59:00', '', '', 'VDCA_0404', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(299, '', 'Uthaya Giri P', 'Male', '', '', '', '', '', '06-10-08', '9443743621', 0, 'giriprabhu2008@gmail.com', 'Prabhu', '2/248, Colony st., Rengapalayam , Maharajapuram Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0405', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(300, '', 'Vaibah S', 'Male', '', '', '', '', '', '01-05-11', '9500804348', 0, 'saravanankalimuthu1978@gmail.com', 'Saravanan K', '4/356, North st., Ramachandrapuram , Srivilliputtur', '2031-03-20 12:59:00', '', '', 'VDCA_0406', 0, 8, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(301, '', 'Vaibhav K', 'Male', '', '', '', '', '', '25-11-07', '9360067678', 0, 'krishnashyanyanonline@gmail.com', 'Krishna Shythanyam A B', '23, Singaraja Kottai, Big st., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0407', 0, 12, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(302, '', 'Varsha V', 'Female', '', '', '', '', '', '27-02-08', '9944086117', 2147483647, 'varsa27@gmail.com', 'Vijayaraghavan V', '148/1 Rajivgandhi nagar, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0409', 0, 11, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(303, '', 'Vasanth S ', 'Male', '', '', '', '', '', '20-10-06', '9787287159', 0, 'jeyanthmass@gmail.com', 'Srinivasamurugesan A', '1/122 middle Street, Meenampatti, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0410', 0, 13, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(304, '', 'Veerajothilaksmi P', 'Female', '', '', '', '', '', '28-07-06', '9489580516', 0, '', 'Periyasamy S', '301 church street, malli', '2031-03-20 12:59:00', '', '', 'VDCA_0411', 0, 13, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(305, '', 'Veeramani G', 'Male', '', '', '', '', '', '07-11-05', '9944976456', 0, '', 'Ganesan G', '121/c, Chollapuram Mallur Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0413', 0, 14, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(306, '', 'Velrajan M', 'Male', '', '', '', '', '', '30-12-08', '9786458618', 0, '', 'Mahindran', '', '2031-03-20 12:59:00', '', '', 'VDCA_0414', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(307, '', 'Vidya C', 'Female', '', '', '', '', '', '05-12-85', '9843428179', 0, 'shyam@arasanshirts.com', 'Chandra Mohan C', '40, Gnanagiri Road, Cornation Colony, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0416', 0, 34, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(308, '', 'Vighna Raj R N', 'Male', '', '', '', '', '', '13-06-12', '9751620602', 2147483647, 'drajaprabhu@gmail.com', 'Raja Prabhu D', '63F, Coronation colony 5th st., Gnanagiri rd., Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0417', 0, 7, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(309, '', 'Vigneshwaran K', 'Male', '', '', '', '', '', '29-08-02', '8248948132', 0, 'vpmfriends88707@gmail.com', 'Karuppasamy G', '724-A, Kamraj Salai, Sivakasi', '2031-03-20 12:59:00', '', '', 'VDCA_0419', 0, 17, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(310, '', 'Vijaya Kumar M', 'Male', '', '', '', '', '', '05-04-03', '9360485320', 0, '', 'Murugan V', '46, Maniapoo Street, rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0420', 0, 16, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(311, '', 'Vijayaharshitha B', 'Female', '', '', '', '', '', '06-07-08', '9942613777', 0, '', 'Baskaran S', '6/879 Hanuman nagar Allampatti', '2031-03-20 12:59:00', '', '', 'VDCA_0421', 0, 11, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(312, '', 'Vikash K', 'Male', '', '', '', '', '', '21-10-09', '8940606711', 0, '', 'Kanagaraj', '5/8/1672 Indira nagar, Reserve Line, Sivakasi west', '2031-03-20 12:59:00', '', '', 'VDCA_0423', 0, 10, '', '', 0, 'VNR', 'PC Lord Lions, Sivakasi', '', '', '0000-00-00', '', '', '0000-00-00'),
(313, '', 'Vimal Kumar S', 'Male', '', '', '', '', '', '03-10-10', '9488717564', 0, '', 'Sundaramurthi K', '63, Subramania Kovil St., Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0424', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(314, '', 'Vishnu Karthik M', 'Male', '', '', '', '', '', '18-01-08', '9942545047', 0, '', 'Mani Ganesh', '33/1 West st., Elanthiraikondan, sundaranachiyarpuram', '2031-03-20 12:59:00', '', '', 'VDCA_0426', 0, 11, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(315, '', 'Vishnu Vardhan', 'Male', '', '', '', '', '', '18-10-08', '9585909725', 0, '', 'Saravanan T', 'Middle st., Thallapuram', '2031-03-20 12:59:00', '', '', 'VDCA_0429', 0, 11, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(316, '', 'Visvesh M', 'Male', '', '', '', '', '', '21-07-06', '9944930033', 0, '', 'Manickam P', '181 6 B2/ A Pound Street, Muthuraman Patti, Virythunagar', '2031-03-20 12:59:00', '', '', 'VDCA_0432', 0, 13, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(317, '', 'Visvesh S', 'Male', '', '', '', '', '', '22-12-06', '9952195649', 0, 'chitrasankar01@gmail.com', 'Sankar G', '63, Sivakamipuram St., Rajaplayam', '2031-03-20 12:59:00', '', '', 'VDCA_0433', 0, 13, '', '', 0, 'VNR', 'Ramco', '', '', '0000-00-00', '', '', '0000-00-00'),
(318, '', 'Vivek Arun N R', 'Male', '', '', '', '', '', '31-05-03', '9443132022', 0, 'chitrad976@gmail.com', 'Rajendhran N K', '436, Dharnama Raja Big Street, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0434', 0, 16, '', '', 0, 'VNR', 'SCS', '', '', '0000-00-00', '', '', '0000-00-00'),
(319, '', 'Yashmeen Kathija Begum S', 'Female', '', '', '', '', '', '14-03-82', '9003118657', 0, 'yashrajabegum@gmail.com', 'SyedGulam S', '53 muslim east street, Aruppukottai', '2031-03-20 12:59:00', '', '', 'VDCA_0435', 0, 37, '', '', 0, 'VNR', 'Womens Champion ship', '', '', '0000-00-00', '', '', '0000-00-00'),
(320, '', 'Yashwin V', 'Male', '', '', '', '', '', '22-10-09', '9994243052', 0, '', 'Velmurugan N', '', '2031-03-20 12:59:00', '', '', 'VDCA_0436', 0, 10, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(321, '', 'Yaswant K', 'Male', '', '', '', '', '', '22-07-10', '9944511916', 0, '', 'Kandasamypandian C', '186 chinnasurraikkaipatti street, Rajapalayam', '2031-03-20 12:59:00', '', '', 'VDCA_0437', 0, 9, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(322, '', 'Yoga sakthivel J', 'Male', '', '', '', '', '', '13-11-07', '8124875050', 0, '', 'Jayabalan J', '120, Kumapatti', '2031-03-20 12:59:00', '', '', 'VDCA_0438', 0, 12, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(323, '', 'Yogesh bala K', 'Male', '', '', '', '', '', '24-11-09', '9894748472', 0, '', 'Karthikeyan B', 'Aruna Hotel opposite, T.kallupatti', '2031-03-20 12:59:00', '', '', 'VDCA_0439', 0, 10, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(324, '', 'Yogeshwar T', 'Male', '', '', '', '', '', '09-02-06', '9865627951', 0, '', 'Shylandar T', '239 VOC nagar, srivilliputhur', '2031-03-20 12:59:00', '', '', 'VDCA_0440', 0, 13, '', '', 0, 'VNR', 'Casa Di mar', '', '', '0000-00-00', '', '', '0000-00-00'),
(325, '', 'Yogeshwari K', 'Male', '', '', '', '', '', '17-07-09', '9751201107', 0, '', 'Kannan', '7/17, North street ,Suraikaipatty', '2031-03-20 12:59:00', '', '', 'VDCA_0441', 0, 10, '', '', 0, 'VNR', 'Akkanapuram', '', '', '0000-00-00', '', '', '0000-00-00'),
(326, '', 'Yuvan Adhiban S', 'Male', '', '', '', '', '', '11-09-10', '8838747473', 0, 'sadhibant@gmail.com', 'Saravanakumar J', '1, Koodalinga Nallur St., Thiruthangal', '2031-03-20 12:59:00', '', '', 'VDCA_0442', 0, 9, '', '', 0, 'VNR', 'Living Hope', '', '', '0000-00-00', '', '', '0000-00-00'),
(327, '', 'Tester', 'Male', 'Namakkal', '', '', '', '', '2-12-2019', '9485963244', 0, 'pavi@nithra.mobi', 'test', '2 / 205, 87  Goundampalayams,', '0000-00-00 00:00:00', '../../upload_category/1580471963_2.png', '../../upload_category/1580471963_1.png ', 'VDCA_0327', 0, 0, '', '', 0, '', '', '192.168.57.180', '', '2020-01-31', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_ratedplayer`
--

CREATE TABLE `vdca_ratedplayer` (
  `id` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `irtg` varchar(25) NOT NULL,
  `club` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `fide_id` varchar(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `active` int(2) NOT NULL,
  `cip` varchar(25) NOT NULL,
  `cby` varchar(24) NOT NULL,
  `cdate` date NOT NULL,
  `mby` varchar(24) NOT NULL,
  `mdate` date NOT NULL,
  `mip` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vdca_ratedplayer`
--

INSERT INTO `vdca_ratedplayer` (`id`, `name`, `irtg`, `club`, `dob`, `fide_id`, `title`, `active`, `cip`, `cby`, `cdate`, `mby`, `mdate`, `mip`) VALUES
(1, 'Maheswaran P.', '2191', 'SVKS', '1986-00-00', '5013232', 'FM', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(2, 'Safira Shahnaz', '2117', 'RJPM', '1977-00-00', '5003482', 'WFM', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(3, 'Sri Prasanth S.', '2063', 'SVKS', '1989-00-00', '5016460', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(4, 'Manimaran M.', '2041', 'SVKS', '1992-00-00', '5029716', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(5, 'Jaya Ananthram A D', '2009', 'SVPR', '1989-00-00', '5039410', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(6, 'Nagaarjuna A', '1980', 'SVKS', '1993-00-00', '5043808', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(7, 'Kedharnath A', '1973', 'SVKS', '1992-00-00', '5044413', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(8, 'Murali Krishnan P', '1959', 'RJPM', '0000-00-00', '5037441', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(9, 'Soundaram M.', '1950', 'RJPM', '1990-00-00', '5030064', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(10, 'Sakthivel Pandian V S', '1937', 'SVKS', '1996-00-00', '5037646', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(11, 'Giri Selvam M G', '1907', 'SVKS', '1994-00-00', '25012029', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(12, 'Suresh Kumar G', '1870', 'RJPM', '1984-00-00', '5036895', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(13, 'Prabhu M', '1802', 'RJPM', '1994-00-00', '5063868', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(14, 'Visalatchi R', '1758', 'SVKS', '1993-00-00', '5037611', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(15, 'Iyan Karkuvel Rajan A', '1699', 'SVKS', '1990-00-00', '25016571', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(16, 'Nandhini Devi C S', '1698', 'SVKS', '1990-00-00', '5037468', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(17, 'Rathish T.J.', '1697', 'VNR', '2000-00-00', '25042513', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(18, 'Paramasivam M.', '1693', 'APK', '1973-00-00', '5010276', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(19, 'Raja Chokkarvel Y', '1671', 'VNR', '1996-00-00', '25026984', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(20, 'Saravanan G', '1667', 'SVKS', '1972-00-00', '5053005', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(21, 'Vigneshwar M', '1667', 'SVKS', '1995-00-00', '25004034', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(22, 'Marimuthu K', '1663', 'SVKS', '2001-00-00', '45023859', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(23, 'Saravana Ganesh Pandian V', '1651', 'SVKS', '1992-00-00', '5052998', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(24, 'Ruban Sanjay M', '1630', 'Vemba', '2004-00-00', '35070592', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(25, 'Gokul S', '1629', 'VNR', '2001-00-00', '35040014', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(26, 'Mariappan R', '1628', 'VNR', '1967-00-00', '5096618', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(27, 'Kumaresh A', '1613', 'VNR', '2004-00-00', '45022259', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(28, 'Sritharan J D', '1602', 'VNR', '1955-00-00', '35016709', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(29, 'Malik Jan Mohamed A.', '1594', 'RJPM', '1947-00-00', '25006622', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(30, 'Nanduja R', '1594', 'SVKS', '1992-00-00', '5037476', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(31, 'Infant Nisanth A', '1582', 'VNR', '1998-00-00', '25026887', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(32, 'Hariraj.K', '1562', 'VNR', '1992-00-00', '5058317', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(33, 'Shadhursshaan R', '1561', 'APK', '2007-00-00', '45024138', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(34, 'Poonkuzhali.A.', '1558', 'SVKS', '1993-00-00', '5087031', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(35, 'Sneha Preethi E', '1557', 'SVKS', '1995-00-00', '25003950', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(36, 'Vishnu V', '1545', 'VNR', '1992-00-00', '5006295', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(37, 'Rajashakkthivel K K', '1541', 'SVKS', '1998-00-00', '25091263', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(38, 'Arun Kumar P', '1536', 'SVKS', '1999-00-00', '25044346', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(39, 'Subburaj V', '1520', 'VNR', '1992-00-00', '35006193', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(40, 'Sundar Rajan M', '1516', 'VNR', '1967-00-00', '5096820', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(41, 'Vishnu Viswanathan P', '1516', 'SVKS', '2002-00-00', '25042777', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(42, 'Pulkit Rathi V', '1514', 'SVKS', '2001-00-00', '25015109', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(43, 'Ashok Manickam P', '1508', 'SVKS', '2000-00-00', '35041169', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(44, 'Gokul Kannan M', '1492', 'VNR', '1998-00-00', '25098357', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(45, 'Oswin Sebastin A', '1489', 'VNR', '1996-00-00', '25026968', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(46, 'Gowri M', '1480', 'SVKS', '1994-00-00', '5096537', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(47, 'Yogesh Kumar A', '1478', 'SVKS', '2000-00-00', '25075390', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(48, 'Cibe Hariharan K.', '1477', 'VNR', '1992-00-00', '5032806', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(49, 'Sajan J', '1460', 'SVKS', '2005-00-00', '45009880', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(50, 'Sanjay Ganesh Pandi', '1459', 'SVKS', '2005-00-00', '25682873', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(51, 'Thirumoorthy', '1437', 'SVKS', '1993-00-00', '5037573', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(52, 'Sanjith Karthikesh Chocka', '1432', 'VNR', '2001-00-00', '45022232', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(53, 'Vigneshwaran K', '1431', 'SVKS', '2002-00-00', '45024260', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(54, 'Harish B', '1412', 'VNR', '1997-00-00', '25074105', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(55, 'Divya Charaneeshwar R P', '1410', 'VNR', '1998-00-00', '25088408', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(56, 'Anandharaj K', '1408', 'TTL', '2000-00-10', '35018965', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(57, 'Kailash G', '1406', 'SVKS', '1999-00-00', '5084601', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(58, 'Porkalaivani N', '1399', 'VNR', '2003-00-00', '35085255', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(59, 'Srimathi S', '1396', 'VNR', '2005-00-00', '45016143', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(60, 'Sri Vishnu Praba S', '1396', 'RJPM', '2000-00-00', '25042653', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(61, 'Jayashri K K', '1394', 'SVKS', '2001-00-00', '25091115', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(62, 'Siva Anand C', '1392', 'Srivi', '1994-00-00', '25035754', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(63, 'Gokul Vijay J', '1387', 'VNR', '1997-00-00', '35006266', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(64, 'Indhuja S D R', '1381', 'SVKS', '1995-00-00', '5079390', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(65, 'Balaji V', '1380', 'VNR', '2000-00-00', '46623353', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(66, 'Marconi M', '1376', 'SVKS', '1992-00-00', '25017055', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(67, 'Hariharan A C G', '1375', 'SVKS', '2001-00-00', '45023727', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(68, 'Senthi Kumar Ra', '1372', 'SVKS', '1993-00-00', '25010956', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(69, 'Barath Kumar K M', '1366', 'RJPM', '2001-00-00', '35084283', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(70, 'Kalidass C.', '1366', 'SVKS', '1953-00-00', '5036380', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(71, 'Siva Harish R', '1365', 'RJPM', '1997-00-00', '25042610', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(72, 'Shiva Rajan K', '1362', 'VNR', '2001-00-00', '45074020', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(73, 'Muthukumaran R', '1360', 'VNR', '1995-00-00', '45023905', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(74, 'Pandiyarajan', '1356', 'APK', '2001-00-00', '?33302170', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(75, 'Akshaya P', '1349', 'SVKS', '2003-00-00', '25083023', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(76, 'Arun Prasath S', '1342', 'VNR', '1982-00-00', '35041134', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(77, 'Surya Sathiaguru', '1342', 'VNR', '2007-00-00', '25682920', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(78, 'Rishi Hariharan.S.N', '1341', 'VNR', '1999-00-00', '25074555', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(79, 'Hari Varshan S R', '1340', 'RJPM', '2003-00-00', '25042254', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(80, 'Nirupan R', '1336', 'Srivi', '1997-00-00', '25042432', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(81, 'Vigneshwar D P', '1328', 'VNR', '2003-00-00', '25042734', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(82, 'Annamalai Raja C', '1319', 'SVKS', '2001-00-00', '35004344', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(83, 'Sarath Kumar M', '1316', 'VNR', '1994-00-00', '25042548', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(84, 'Sonaa R', '1313', 'SVKS', '1997-00-00', '5079632', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(85, 'Aravind S', '1311', 'SVKS', '2000-00-00', '35053116', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(86, 'Vivek P', '1301', 'VNR', '1996-00-00', '45024286', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(87, 'Lenin A G', '1294', 'RJPM', '0000-00-00', '5037417', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(88, 'Suriya Prakash J S', '1285', 'SVKS', '2000-00-00', '25015206', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(89, 'Siva Natraj D P', '1279', 'VNR', '2001-00-00', '25042629', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(90, 'Iyan Adeendren', '1258', 'SVKS', '1991-00-00', '25954202', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(91, 'Sanjita S', '1251', 'RJPM', '2001-00-00', '35084410', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(92, 'Nandhini R', '1248', 'SVKS', '2000-00-00', '25014668', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(93, 'Saranjith Arunesh Chockan', '1240', 'VNR', '2001-00-00', '45022240', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(94, 'Aravind Kumar P', '1231', 'SVKS', '2001-00-00', '25044338', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(95, 'Sivanandha V', '1230', 'VNR', '2002-00-00', '46655298', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(96, 'Mareeshwaran P', '1230', 'VNR', '1993-00-00', '45090920', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(97, 'Vijayalakshmi S', '1217', 'Srivi', '1998-00-00', '35006258', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(98, 'Ram Satvat J', '1215', 'SVKS', '2003-00-00', '25671600', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(99, 'Dharanidharan M', '1215', 'VNR', '2007-00-00', '45023662', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(100, 'Rishi Raghav Karthik T', '1214', 'VNR', '2004-00-00', '45024871', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(101, 'Thanga Kumar S', '1211', 'SVKS', '2000-00-00', '35006215', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(102, 'Jagendran Kamak N', '1206', 'SVKS', '2006-00-00', '45009619', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(103, 'Kirpesh I', '1201', 'SVKS', '2008-00-00', '25759523', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(104, 'Eyal Amuthan Gb', '1195', 'SVKS', '2004-00-00', '35041240', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(105, 'Sudharshun SS', '1194', 'VNR', '2003-00-00', '45024189', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(106, 'Moorthy R', '1191', 'SVKS', '1954-00-00', '35016466', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(107, 'Jeyam Subbaiah C', '1189', 'SVKS', '2002-00-00', '45023786', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(108, 'Meenakshi Sundram G', '1185', 'RJPM', '2003-00-00', '35041304', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(109, 'Sri Hariharan K', '1183', 'SVKS', '2001-00-00', '45024170', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(110, 'Karthik B', '1183', 'SVKS', '2003-00-00', '25640275', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(111, 'Guruvignesh V', '1181', 'VNR', '2005-00-00', '25671383', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(112, 'Viveka Balaji R', '1181', 'VNR', '2000-00-00', '35039431', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(113, 'Santhosh Sivam M', '1177', 'WAT', '2001-00-00', '46623140', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(114, 'Baraneetharan R', '1176', 'SVKS', '1999-00-00', '46654640', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(115, 'Shaaru Dharshini A', '1173', 'RJPM', '2000-00-00', '35041428', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(116, 'Kishore S V', '1172', 'SVKS', '2003-00-00', '45073856', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(117, 'Vinodh Madhusudhanan M P', '1170', 'Srivi', '1986-00-00', '45091153', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(118, 'Hariganesh R', '1169', 'SVKS', '2000-00-00', '35065742', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(119, 'Jothi Sankari M', '1169', 'SVKS', '2001-00-00', '35019775', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(120, 'Vignesh E', '1166', 'Srivi', '2008-00-00', '25759680', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(121, 'Anandh Murugeswaran B', '1159', 'RJPM', '2000-00-00', '46684662', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(122, 'Ohm Kumar A', '1150', '', '1976-00-00', '25128205', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(123, 'Vasanthaalakshmi M', '1146', 'RJPM', '1998-00-00', '35006240', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(124, 'Guru Muni Pandi M', '1146', 'Karia', '2001-00-00', '45023700', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(125, 'Inesh G', '1145', 'SVKS', '2005-00-00', '45084203', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(126, 'Shenbaga Meena T', '1143', 'RJPM', '2004-00-00', '25671693', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(127, 'Binesh Pravin R', '1142', 'SVKS', '2001-00-00', '46654666', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(128, 'Avinash Kumar G', '1140', '', '2000-00-00', '46684700', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(129, 'Sathiya Ramanan V', '1140', 'Srivi', '2001-00-00', '45024103', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(130, 'Vetrivel Karunapandi', '1137', 'APK', '2007-00-00', '25758110', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(131, 'Shriram Sakisnu R', '1136', 'RJPM', '2002-00-00', '25042599', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(132, 'Palani Rajan M', '1136', 'SVKS', '1977-00-00', '45023956', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(133, 'Naveen G', '1135', 'RJPM', '2003-00-00', '25625810', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(134, 'Vetrivel Karunapandi', '1130', 'Tiruchuzhi', '2007-00-00', '25758110', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(135, 'Rudhraa S', '1125', 'RJPM', '1998-00-00', '46623116', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(136, 'Shrinimeshika K', '1117', 'SVKS', '2008-00-00', '25671715', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(137, 'Saran S', '1115', 'SVKS', '2002-00-00', '35041401', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(138, 'Vishnupriya S', '1114', 'VNR', '2007-00-00', '25682830', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(139, 'Dhananjeyan M', '1112', 'VNR', '2007-00-00', '45023654', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(140, 'Jegathees M', '1108', 'VKS', '2000-00-00', '45090866', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(141, 'Murugan K', '1108', 'RJPM', '1970-00-00', '35084356', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(142, 'Mega R', '1103', 'SVKS', '2002-00-00', '35041312', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(143, 'Karthika S', '1097', 'VNR', '1998-00-00', '45016119', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(144, 'Karuppasamy M', '1093', 'TTL', '1971-00-00', '45023816', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(145, 'Sanjay Sekar', '1093', 'RJPM', '2003-00-00', '25682881', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(146, 'Harrish A', '1088', 'RJPM', '2001-00-00', '46684816', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(147, 'Inakshi G', '1087', 'SVKS', '2005-00-00', '45084190', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(148, 'Manichselvam J', '1086', 'VNR', '1975-00-00', '25703366', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(149, 'Vimal Arul Francis S', '1084', 'RJPM', '2002-00-00', '45091137', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(150, 'Nelson Pandian T', '1073', 'SVKS', '1994-00-00', '45090998', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(151, 'Jayarathi Kamak N', '1071', 'SVKS', '2008-00-00', '45052034', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(152, 'Bhavana Priyadharshini G', '1068', 'SVKS', '2006-00-00', '45090726', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(153, 'Rubanathan C', '1067', '', '2002-00-00', '33302200', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(154, 'Arun Murugesan', '1065', 'APK', '2008-00-00', '25159801', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(155, 'Rithika S', '1062', 'VNR', '2007-00-00', '45024065', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(156, 'Pranav Krishna S', '1061', 'SVKS', '2000-00-00', '35041339', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(157, 'Ayyanar K', '1060', 'RJPM', '1985-00-00', '25915142', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(158, 'Kishor S', '1058', 'SVKS', '2005-00-00', '25932004', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(159, 'Nagaraj M', '1057', 'RJPM', '2001-00-00', '45073910', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(160, 'Kasinathan K', '1054', 'RJPM', '2003-00-00', '25671464', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(161, 'Dhaarukeesh A', '1053', 'SVKS', '2007-00-00', '25759485', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(162, 'Santhosh T', '1052', 'VNR', '2008-00-00', '25709534', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(163, 'Mareeswari K', '1051', 'RJPM', '2003-00-00', '25671502', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(164, 'Akash Arun Babu', '1050', 'VNR', '1999-00-00', '45090653', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(165, 'Karthic U', '1049', 'APK', '2007-00-00', '25659073', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(166, 'Dhiwahar K', '1046', 'RJPM', '2000-00-00', '45061203', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(167, 'Saravana Selvan V', '1044', 'RJPM', '2000-00-00', '45024090', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(168, 'Haresh R', '1042', 'RJPM', '2001-00-00', '25671391', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(169, 'Gurubaran K', '1040', 'SVKS', '2005-00-00', '45090815', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(170, 'Mohankumar R', '1040', 'VNR', '2000-00-00', '25756508', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(171, 'Premkumar G', '1036', 'RJPM', '2000-00-00', '25625837', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(172, 'Vivek S', '1034', 'RJPM', '1997-00-00', '46623256', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(173, 'Veerarajan A', '1032', 'VNR', '1974-00-00', '45024243', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(174, 'Rajendra Prasad', '1028', 'APK', '1987-00-00', '25671588', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(175, 'Anandhakrishnan', '1027', 'VNR', '2010-00-00', '25128140', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(176, 'Kanirathinam A', '1025', 'RJPM', '2005-00-00', '25709364', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(177, 'Sangeth Nivaas S', '1020', 'VNR', '2007-00-00', '25682741', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(178, 'Lokesh P', '1015', 'SVKS', '2005-00-00', '25645250', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(179, 'Esvar Ramkumar', '1014', 'VNR', '2004-00-00', '45023670', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(180, 'Shruthi K', '1013', 'RJPM', '2000-00-00', '25042602', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(181, 'Sanjeevi Kumar G', '1012', '', '2001-00-00', '25709585', '', 0, '', '', '0000-00-00', '', '0000-00-00', ''),
(182, 'Inian G', '1011', 'VNR', '2010-00-00', '25682520', '', 0, '', '', '0000-00-00', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vdcalogin`
--
ALTER TABLE `vdcalogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdcaplayers`
--
ALTER TABLE `vdcaplayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_access_report`
--
ALTER TABLE `vdca_access_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_advertisement`
--
ALTER TABLE `vdca_advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_event`
--
ALTER TABLE `vdca_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_feedback`
--
ALTER TABLE `vdca_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_files`
--
ALTER TABLE `vdca_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_gallery`
--
ALTER TABLE `vdca_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_payment`
--
ALTER TABLE `vdca_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_players_db`
--
ALTER TABLE `vdca_players_db`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `vdca_ratedplayer`
--
ALTER TABLE `vdca_ratedplayer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vdcalogin`
--
ALTER TABLE `vdcalogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vdcaplayers`
--
ALTER TABLE `vdcaplayers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `vdca_access_report`
--
ALTER TABLE `vdca_access_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vdca_advertisement`
--
ALTER TABLE `vdca_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vdca_event`
--
ALTER TABLE `vdca_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vdca_feedback`
--
ALTER TABLE `vdca_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vdca_files`
--
ALTER TABLE `vdca_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vdca_gallery`
--
ALTER TABLE `vdca_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vdca_payment`
--
ALTER TABLE `vdca_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vdca_players_db`
--
ALTER TABLE `vdca_players_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;
--
-- AUTO_INCREMENT for table `vdca_ratedplayer`
--
ALTER TABLE `vdca_ratedplayer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
