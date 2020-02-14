-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 01:45 PM
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
(1, 'aa', 'ff', 'Sri Vani School', '2017-11-30 10:31:48', '::1', 'NO'),
(2, 'sdsd', 'asdad', 'Sri Vani School', '2017-11-30 10:35:03', '::1', 'NO'),
(3, 'admin', 'admin', 'Sri Vani School', '2017-11-30 10:35:12', '::1', 'YES'),
(4, 'sdrfsfs', 'sdfsdf', 'Sri Vani School', '2017-11-30 10:41:33', '::1', 'NO'),
(5, 'admin', 'admin', 'Sri Vani School', '2017-11-30 10:41:42', '::1', 'YES'),
(6, 'admin', 'ebadmin', 'Sri Vani School', '2017-11-30 10:47:12', '192.168.1.101', 'NO'),
(7, 'admin', 'admin', 'Sri Vani School', '2017-11-30 10:47:19', '192.168.1.101', 'YES'),
(8, 'admin', 'admin', 'Sri Vani School', '2017-11-30 10:51:06', '192.168.1.101', 'YES'),
(9, 'admin', 'admin', 'Sri Vani School', '2017-11-30 10:56:57', '::1', 'YES'),
(10, 'admin', 'admin', 'Sri Vani School', '2017-11-30 11:37:04', '::1', 'YES'),
(11, 'admin', 'admin', 'Sri Vani School', '2017-11-30 11:55:37', '::1', 'YES'),
(12, 'admin', 'admin', 'Sri Vani School', '2017-11-30 05:00:28', '::1', 'YES'),
(13, 'admin', 'admin', 'Sri Vani School', '2017-11-30 05:02:39', '::1', 'YES'),
(14, 'Admin', 'admin', 'Sri Vani School', '2017-11-30 05:04:32', '::1', 'YES'),
(15, 'admin', 'admin', 'Sri Vani School', '2017-11-30 05:04:43', '::1', 'YES'),
(16, 'admin', 'admin', 'Sri Vani School', '2017-12-01 09:46:08', '::1', 'YES'),
(17, 'admin', 'admin', 'Sri Vani School', '2017-12-01 11:57:03', '::1', 'YES'),
(18, 'admin', 'admin', 'Sri Vani School', '2017-12-01 02:26:53', '::1', 'YES'),
(19, 'admin', 'admin', 'Sri Vani School', '2017-12-01 04:19:43', '192.168.1.101', 'YES'),
(20, 'admin', 'admin', 'Sri Vani School', '2017-12-01 04:38:55', '::1', 'YES'),
(21, 'admin', 'admin', 'Sri Vani School', '2017-12-02 09:39:22', '::1', 'YES'),
(22, 'admin', 'admin', 'Sri Vani School', '2017-12-04 09:32:03', '::1', 'YES'),
(23, 'admin', 'admin', 'Sri Vani School', '2017-12-04 10:11:55', '192.168.1.105', 'YES'),
(24, 'admin', 'admin', 'Sri Vani School', '2017-12-04 10:31:28', '192.168.1.104', 'YES'),
(25, 'admin', 'admin', 'Sri Vani School', '2017-12-04 12:21:20', '192.168.1.105', 'YES'),
(26, 'admin', 'admin', 'Sri Vani School', '2017-12-04 04:08:45', '192.168.1.101', 'YES'),
(27, 'admin', 'admin', 'Sri Vani School', '2017-12-04 05:54:02', '192.168.1.105', 'YES'),
(28, 'admin', 'admn', 'Sri Vani School', '2017-12-04 05:54:43', '192.168.1.105', 'NO'),
(29, 'admin', 'admin', 'Sri Vani School', '2017-12-04 05:54:52', '192.168.1.105', 'YES'),
(30, 'admin', 'admin', 'Sri Vani School', '2017-12-05 09:31:39', '192.168.1.105', 'YES'),
(31, 'admin', 'admin', 'Sri Vani School', '2017-12-05 09:51:20', '192.168.1.105', 'YES'),
(32, 'admin', 'admin', 'Sri Vani School', '2017-12-06 09:49:26', '192.168.1.105', 'YES'),
(33, 'admin', 'admin', 'Sri Vani School', '2017-12-06 10:58:42', '192.168.1.105', 'YES'),
(34, 'admin', 'admin', 'Sri Vani School', '2017-12-06 01:59:53', '192.168.1.105', 'YES'),
(35, 'admin', 'admin', 'Sri Vani School', '2017-12-06 02:13:07', '192.168.1.105', 'YES'),
(36, 'admin', 'admin', 'Sri Vani School', '2017-12-06 04:29:11', '192.168.1.105', 'YES'),
(37, 'admin', 'admin', 'Sri Vani School', '2017-12-07 09:28:44', '192.168.1.105', 'YES'),
(38, 'admin', 'admin', 'Sri Vani School', '2017-12-07 09:53:30', '192.168.1.101', 'YES'),
(39, 'nandhini', 'nandhini', 'Sri Vani School', '2017-12-25 09:57:00', '::1', 'NO'),
(40, 'admin', 'admin', 'Sri Vani School', '2017-12-25 09:57:10', '::1', 'YES'),
(41, 'admin', 'admin', 'Sri Vani School', '2017-12-27 03:59:21', '::1', 'YES'),
(42, 'stnandhini', 'stnandhini', 'Sri Vani School', '2018-01-02 04:06:25', '::1', 'NO'),
(43, 'admin', 'admin', 'Sri Vani School', '2018-01-02 04:06:49', '::1', 'YES'),
(44, 'admin', 'admin', 'Sri Vani School', '2018-01-02 04:09:57', '::1', 'YES'),
(45, 'admin', 'admin', 'Sri Vani School', '2018-01-02 04:14:30', '::1', 'YES'),
(46, 'admin', 'admin', 'Sri Vani School', '2018-01-02 04:19:25', '::1', 'YES'),
(47, 'Admin', 'admin', 'Sri Vani School', '2018-01-02 05:12:38', '103.72.176.194', 'YES'),
(48, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:14:23', '103.72.176.194', 'YES'),
(49, 'Admin', 'admin', 'Sri Vani School', '2018-01-02 05:14:33', '103.72.176.194', 'YES'),
(50, 'Admin', 'admin', 'Sri Vani School', '2018-01-02 05:16:54', '103.72.176.194', 'YES'),
(51, 'Admin', 'admin', 'Sri Vani School', '2018-01-02 05:17:04', '103.72.176.194', 'YES'),
(52, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:18:30', '103.72.176.194', 'YES'),
(53, 'Admin', 'admin', 'Sri Vani School', '2018-01-02 05:18:36', '103.72.176.194', 'YES'),
(54, 'Admin', 'admin', 'Sri Vani School', '2018-01-02 05:18:47', '103.72.176.194', 'YES'),
(55, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:33:51', '103.72.176.194', 'YES'),
(56, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:34:29', '103.72.176.194', 'YES'),
(57, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:37:10', '103.72.176.194', 'YES'),
(58, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:56:26', '103.72.176.194', 'YES'),
(59, 'admin', 'admin', 'Sri Vani School', '2018-01-02 05:57:32', '103.72.176.194', 'YES'),
(60, 'admin', 'admin', 'Sri Vani School', '2018-01-02 06:03:44', '103.72.176.194', 'YES'),
(61, 'admin', 'admin', 'Sri Vani School', '2018-01-02 06:10:54', '103.72.176.194', 'YES'),
(62, 'admin', 'admin', 'Sri Vani School', '2018-01-03 11:05:41', '103.72.176.194', 'YES'),
(63, 'admin', 'admin', 'Sri Vani School', '2018-01-03 12:02:17', '103.72.176.194', 'YES'),
(64, 'admin', 'admin', 'Sri Vani School', '2018-01-03 12:04:36', '103.72.176.194', 'YES'),
(65, 'admin', 'admin', 'Sri Vani School', '2018-01-05 04:11:37', '103.72.176.194', 'YES'),
(66, 'admin', 'admin', 'Sri Vani School', '2018-01-06 12:02:13', '103.72.176.194', 'YES'),
(67, 'admin', 'admin', 'Sri Vani School', '2018-01-08 10:00:04', '103.72.176.194', 'YES'),
(68, 'admin', 'admin', 'Sri Vani School', '2018-01-09 06:20:29', '103.72.176.194', 'YES'),
(69, 'admin', 'admin', 'Sri Vani School', '2018-01-10 09:45:59', '103.72.176.194', 'YES'),
(70, 'admin', 'admin', 'Sri Vani School', '2018-01-10 09:45:59', '103.72.176.194', 'YES'),
(71, 'admin', 'admin', 'Sri Vani School', '2018-01-10 09:47:36', '103.72.176.194', 'YES'),
(72, 'admin', 'admin', 'Sri Vani School', '2018-01-11 05:27:52', '103.72.176.194', 'YES'),
(73, 'admin', 'admin', 'Sri Vani School', '2018-01-19 04:39:24', '103.72.176.194', 'YES'),
(74, 'admin', 'admin', 'Sri Vani School', '2018-01-19 05:48:42', '103.72.176.194', 'YES'),
(75, 'admin', 'admin', 'Sri Vani School', '2018-01-19 05:59:26', '103.72.176.194', 'YES'),
(76, 'admin', 'admin', 'Sri Vani School', '2018-01-29 04:23:09', '103.72.176.194', 'YES'),
(77, 'admin', 'admin', 'Sri Vani School', '2018-01-29 04:29:27', '103.72.176.194', 'YES'),
(78, 'admin', 'admin', 'Sri Vani School', '2018-01-29 04:43:40', '103.72.176.194', 'YES'),
(79, 'admin', 'admin', 'Sri Vani School', '2018-02-12 03:49:22', '103.72.176.194', 'YES'),
(80, 'admin', 'adminadmin', 'Sri Vani School', '2018-02-15 02:11:20', '103.72.176.194', 'NO'),
(81, 'admin', 'admin', 'Sri Vani School', '2018-02-15 02:11:29', '103.72.176.194', 'YES'),
(82, 'admin', 'admin', 'Sri Vani School', '2018-03-06 02:57:03', '103.72.176.194', 'YES'),
(83, 'admin', 'admin', 'Sri Vani School', '2018-03-08 11:30:03', '103.72.176.194', 'YES'),
(84, 'admin', 'admin', 'Sri Vani School', '2018-03-08 03:11:25', '103.72.176.194', 'YES'),
(85, 'admin', 'admin', 'Sri Vani School', '2018-03-08 06:20:28', '103.72.176.194', 'YES'),
(86, 'admin', 'admin', 'Sri Vani School', '2018-03-10 10:56:32', '103.72.176.194', 'YES'),
(87, 'admin', 'admin', 'Sri Vani School', '2018-03-10 11:10:20', '103.72.176.194', 'YES'),
(88, 'admin', 'admin', 'Sri Vani School', '2018-03-10 11:11:26', '103.72.176.194', 'YES'),
(89, 'admin', 'admin', 'Sri Vani School', '2018-03-10 11:17:45', '103.72.176.194', 'YES'),
(90, 'admin', 'admin', 'Sri Vani School', '2018-03-10 11:48:02', '103.72.176.194', 'YES'),
(91, 'admin', 'admin', 'Sri Vani School', '2018-03-10 12:51:50', '103.72.176.194', 'YES'),
(92, 'admin', 'admin', 'Sri Vani School', '2018-03-10 01:45:13', '103.72.176.194', 'YES'),
(93, 'admin', 'admin', 'Sri Vani School', '2018-03-10 02:13:46', '103.72.176.194', 'YES'),
(94, 'admin', 'admin', 'Sri Vani School', '2018-03-10 02:15:38', '103.72.176.194', 'YES'),
(95, 'admin', 'admin', 'Sri Vani School', '2018-03-10 02:56:17', '103.58.116.194', 'YES'),
(96, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:15:06', '103.58.116.194', 'YES'),
(97, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:18:43', '103.72.176.194', 'YES'),
(98, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:24:15', '103.58.116.194', 'YES'),
(99, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:32:06', '103.58.116.194', 'YES'),
(100, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:34:50', '103.72.176.194', 'YES'),
(101, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:38:06', '103.72.176.194', 'YES'),
(102, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:39:32', '103.58.116.194', 'YES'),
(103, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:44:47', '103.72.176.194', 'YES'),
(104, 'admin', 'admin', 'Sri Vani School', '2018-03-10 03:57:18', '103.72.176.194', 'YES'),
(105, 'admin', 'admin', 'Sri Vani School', '2018-03-10 04:32:57', '103.72.176.194', 'YES'),
(106, 'admin', 'admin', 'Sri Vani School', '2018-03-10 04:35:44', '103.72.176.194', 'YES'),
(107, 'admin', 'admin', 'Sri Vani School', '2018-03-10 04:45:21', '103.58.116.194', 'YES'),
(108, 'admin', 'admin', 'Sri Vani School', '2018-03-10 05:01:14', '103.72.176.194', 'YES'),
(109, 'admin', 'admin', 'Sri Vani School', '2018-03-10 06:08:02', '103.72.176.194', 'YES'),
(110, 'admin', 'admin', 'Sri Vani School', '2018-03-10 06:12:12', '103.72.176.194', 'YES'),
(111, 'admin', 'admin', 'Sri Vani School', '2018-03-10 06:49:03', '103.72.176.194', 'YES'),
(112, 'admin', 'admin', 'Sri Vani School', '2018-04-03 02:54:42', '103.72.176.194', 'YES'),
(113, 'admin', 'admin', 'Sri Vani School', '2018-04-09 03:10:58', '103.72.176.194', 'YES'),
(114, 'admin', 'admin', 'Sri Vani School', '2018-04-09 05:35:51', '103.72.176.194', 'YES'),
(115, 'admin', 'admin', 'Sri Vani School', '2018-04-09 05:55:30', '103.72.176.211', 'YES'),
(116, 'admin', 'admin', 'Sri Vani School', '2018-04-10 09:22:33', '103.58.116.194', 'YES'),
(117, 'admin', 'admin', 'Sri Vani School', '2018-04-10 09:37:07', '103.72.176.194', 'YES'),
(118, 'admin', 'admin', 'Sri Vani School', '2018-04-10 09:39:52', '103.58.116.194', 'YES'),
(119, 'admin', 'admin', 'Sri Vani School', '2018-04-10 10:01:04', '103.58.116.194', 'YES'),
(120, 'admin', 'admin', 'Sri Vani School', '2018-04-10 10:29:18', '103.58.116.194', 'YES'),
(121, 'admin', 'admin', 'Sri Vani School', '2018-04-10 11:37:17', '103.58.116.194', 'YES'),
(122, 'admin', 'admin', 'Sri Vani School', '2018-04-10 11:42:40', '103.58.116.194', 'YES'),
(123, 'admin', 'admin', 'Sri Vani School', '2018-04-10 12:03:47', '103.58.116.194', 'YES'),
(124, 'admin', 'admin', 'Sri Vani School', '2018-04-10 12:16:26', '103.58.116.194', 'YES'),
(125, 'admin', 'admin', 'Sri Vani School', '2018-04-13 04:55:55', '103.72.176.194', 'YES'),
(126, 'admin', 'admin', 'Sri Vani School', '2018-04-16 12:09:37', '103.58.116.194', 'YES'),
(127, 'admin', 'admin', 'Sri Vani School', '2018-04-16 12:54:40', '103.58.116.194', 'YES'),
(128, 'admin', 'admin', 'Sri Vani School', '2018-04-16 01:13:08', '103.58.116.194', 'YES'),
(129, 'admin', 'admin', 'Sri Vani School', '2018-04-16 01:22:18', '103.58.116.194', 'YES'),
(130, 'admin', 'admin', 'Sri Vani School', '2018-04-16 03:12:13', '103.58.116.194', 'YES'),
(131, 'admin', 'admin', 'Sri Vani School', '2018-04-16 04:45:52', '103.58.116.194', 'YES'),
(132, 'admin', 'admin', 'Sri Vani School', '2018-04-17 09:35:44', '103.58.116.194', 'YES'),
(133, 'admin', 'admin', 'Sri Vani School', '2018-04-17 09:36:33', '103.58.116.194', 'YES'),
(134, 'admin', 'admin', 'Sri Vani School', '2018-04-17 03:16:10', '103.72.176.194', 'YES'),
(135, 'admin', 'admin', 'Sri Vani School', '2018-04-17 03:43:30', '103.58.116.194', 'YES'),
(136, 'admin', 'admin', 'Sri Vani School', '2018-04-17 03:48:57', '103.72.176.194', 'YES'),
(137, 'admin', 'admin', 'Sri Vani School', '2018-04-17 04:33:48', '103.58.116.194', 'YES'),
(138, 'admin', 'admin', 'Sri Vani School', '2018-04-19 09:41:47', '103.58.116.194', 'YES'),
(139, '\\\' OR \\\'1\\\'=\\\'1', '\\\' OR \\\'1\\\'=\\\'1', 'Sri Vani School', '2018-04-19 04:45:04', '103.72.176.194', 'NO'),
(140, 'admin', 'admin', 'Sri Vani School', '2018-05-01 12:39:10', '103.58.116.194', 'YES'),
(141, 'admin', 'admin', 'Sri Vani School', '2018-06-22 11:19:49', '103.58.116.194', 'YES'),
(142, 'admin', 'admin', 'Sri Vani School', '2018-06-22 11:37:04', '103.58.116.194', 'YES'),
(143, 'admin', 'admin', 'Sri Vani School', '2018-06-22 11:40:12', '103.58.116.194', 'YES'),
(144, 'admin', 'admin', 'Sri Vani School', '2018-06-23 10:24:22', '103.58.116.194', 'YES'),
(145, 'admin', 'admin', 'Sri Vani School', '2018-06-23 10:38:15', '103.58.116.194', 'YES'),
(146, 'admin', 'ADMIN', 'Sri Vani School', '2018-06-25 03:31:00', '103.58.116.194', 'YES'),
(147, 'admin', 'admin', 'Sri Vani School', '2018-06-29 03:27:17', '103.58.116.194', 'YES'),
(148, 'admin', 'admin', 'Sri Vani School', '2018-06-29 03:28:46', '103.58.116.194', 'YES'),
(149, '\\\'=\\\' \\\'or\\\'', '\\\'=\\\' \\\'or\\\'', 'Sri Vani School', '2018-07-03 11:35:43', '103.9.125.242', 'NO'),
(150, 'admin', 'admin', 'Sri Vani School', '2018-07-03 11:35:45', '103.9.125.242', 'YES'),
(151, 'admin', 'admin', 'Sri Vani School', '2018-07-16 04:12:42', '103.58.116.194', 'YES'),
(152, 'admin', 'admin', 'Sri Vani School', '2018-07-16 04:47:43', '103.58.116.194', 'YES'),
(153, 'admin', 'admin', 'Sri Vani School', '2018-07-16 05:21:47', '103.58.116.194', 'YES'),
(154, 'admin', 'admin', 'Sri Vani School', '2018-07-27 05:32:12', '103.58.116.194', 'YES'),
(155, 'admin', 'ADMIN', 'Sri Vani School', '2018-07-27 05:35:56', '103.58.116.194', 'YES'),
(156, 'admin', 'admin', 'Sri Vani School', '2018-07-31 02:53:10', '103.58.116.194', 'YES'),
(157, 'admin', 'admin', 'Sri Vani School', '2018-08-10 04:07:45', '103.58.116.194', 'YES'),
(158, 'admin', 'admin', 'Sri Vani School', '2018-08-10 05:54:19', '103.58.116.194', 'YES'),
(159, 'admin', 'admin', 'Sri Vani School', '2018-08-10 06:02:04', '103.58.116.194', 'YES'),
(160, 'admin', 'admin', 'Sri Vani School', '2018-08-21 09:15:53', '103.58.116.194', 'YES'),
(161, 'admin', 'admin', 'Sri Vani School', '2018-09-03 02:02:22', '103.58.116.194', 'YES'),
(162, 'admin', 'admin', 'Sri Vani School', '2018-09-04 05:41:21', '103.58.116.194', 'YES'),
(163, 'admin', 'admin', 'Sri Vani School', '2018-10-10 05:38:39', '103.58.116.194', 'YES'),
(164, 'admin', 'admin', 'Sri Vani School', '2018-10-10 05:39:53', '103.58.116.194', 'YES'),
(165, 'admin', 'admin', 'Sri Vani School', '2018-10-11 09:51:39', '103.58.116.194', 'YES'),
(166, 'admin', 'admin', 'Sri Vani School', '2018-10-11 05:26:58', '103.58.116.194', 'YES'),
(167, 'admin', 'admin', 'Sri Vani School', '2018-10-19 03:06:09', '103.58.116.194', 'YES'),
(168, '\\\' or 1=1 limit 1 -- -+', '\\\' or 1=1 limit 1 -- -+', 'Sri Vani School', '2018-11-15 01:51:18', '115.178.253.188', 'NO'),
(169, '\\\'=\\\'\\\'or\\\'', '\\\'=\\\'\\\'or\\\'', 'Sri Vani School', '2018-11-27 04:57:51', '182.0.196.123', 'NO'),
(170, 'admin', 'admin', 'Sri Vani School', '2018-11-27 04:58:10', '182.0.196.123', 'YES'),
(171, 'nandhini', 'nandhini', 'Sri Vani School', '2018-12-01 03:42:34', '103.70.188.34', 'NO'),
(172, 'admin', 'admin', 'Sri Vani School', '2018-12-01 03:42:39', '103.70.188.34', 'YES'),
(173, 'admin', 'admin', 'Sri Vani School', '2018-12-01 03:46:51', '103.70.188.34', 'YES'),
(174, '105 OR 1=1', '105 OR 1=1', 'Sri Vani School', '2018-12-01 03:48:34', '103.70.188.34', 'NO'),
(175, '\\\" or \\\"\\\"=\\\"', '\\\" or \\\"\\\"=\\\"', 'Sri Vani School', '2018-12-01 03:49:03', '103.70.188.34', 'NO'),
(176, 'admin', 'admin', 'Sri Vani School', '2018-12-01 03:49:07', '103.70.188.34', 'YES'),
(177, 'admin', 'admin', 'Sri Vani School', '2018-12-01 03:49:23', '103.70.188.34', 'YES'),
(178, 'admin', 'ricky_pass_', 'Sri Vani School', '2018-12-01 04:24:30', '103.70.188.34', 'NO'),
(179, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-01 04:27:40', '103.70.188.34', 'NO'),
(180, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-01 04:27:58', '103.70.188.34', 'NO'),
(181, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-01 04:28:26', '103.70.188.34', 'NO'),
(182, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-01 04:33:23', '103.70.188.34', 'YES'),
(183, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-01 05:27:44', '103.70.188.34', 'YES'),
(184, 'admin', 'admin', 'Sri Vani School', '2018-12-03 08:55:01', '103.58.116.194', 'NO'),
(185, 'admin', 'Riskyadmin', 'Sri Vani School', '2018-12-03 08:55:47', '103.58.116.194', 'NO'),
(186, 'admin', 'Riskyadminpassword', 'Sri Vani School', '2018-12-03 08:56:05', '103.58.116.194', 'NO'),
(187, 'admin', 'Risky-Admin-Password', 'Sri Vani School', '2018-12-03 08:56:44', '103.58.116.194', 'NO'),
(188, 'admin', 'RiskyAdminPassword', 'Sri Vani School', '2018-12-03 08:57:17', '103.58.116.194', 'NO'),
(189, 'admin', 'admin', 'Sri Vani School', '2018-12-03 08:58:19', '103.58.116.194', 'NO'),
(190, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-03 08:59:22', '103.58.116.194', 'YES'),
(191, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-07 11:35:35', '103.58.116.194', 'YES'),
(192, 'admin', 'admin', 'Sri Vani School', '2018-12-09 12:44:05', '36.84.62.50', 'NO'),
(193, '\\\\', '||1#', 'Sri Vani School', '2018-12-09 12:44:10', '36.84.62.50', 'NO'),
(194, '\\\'=\\\' \\\'or\\\'', '\\\'=\\\' \\\'or\\\'', 'Sri Vani School', '2018-12-09 12:44:17', '36.84.62.50', 'NO'),
(195, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-24 04:09:40', '::1', 'YES'),
(196, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-24 04:43:48', '192.168.57.26', 'YES'),
(197, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-26 03:59:51', '192.168.57.26', 'YES'),
(198, 'root', 'nithra', 'Sri Vani School', '2018-12-26 04:54:42', '::1', 'NO'),
(199, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-26 04:55:09', '::1', 'YES'),
(200, 'admin', 'Risky_Amin_Password', 'Sri Vani School', '2018-12-26 05:13:45', '192.168.57.26', 'NO'),
(201, 'admin', 'All Files	E:\\xampp\\htdocs\\vani\\website\\admin', 'Sri Vani School', '2018-12-26 05:14:48', '192.168.57.26', 'NO'),
(202, 'admin', 'Risky_Admin_Password', 'Sri Vani School', '2018-12-26 05:15:01', '192.168.57.26', 'YES'),
(203, 'admin', 'admin', 'Sri Vani School', '2018-12-28 11:12:44', '::1', 'NO'),
(204, 'admin', 'admin', 'Sri Vani School', '2018-12-28 11:12:49', '::1', 'NO'),
(205, 'admin', 'admin', 'Sri Vani School', '2018-12-28 11:12:53', '::1', 'NO'),
(206, 'admin', 'admin', 'Sri Vani School', '2018-12-28 05:54:39', '::1', 'NO'),
(207, 'admin', 'admin', 'Sri Vani School', '2018-12-28 05:54:42', '::1', 'NO'),
(208, 'admin', 'admin', 'Sri Vani School', '2018-12-28 05:56:31', '::1', 'NO'),
(209, 'admin', 'admin123', 'Sri Vani School', '2019-10-14 15:11:16', '192.168.57.180', 'NO'),
(210, 'admin', 'admin123', 'Sri Vani School', '2019-10-14 15:11:28', '192.168.57.180', 'NO'),
(211, 'admin', 'admin123', 'Sri Vani School', '2019-10-14 15:13:22', '192.168.57.180', 'YES'),
(212, 'admin', 'admin123', 'Sri Vani School', '2019-10-15 09:43:27', '192.168.57.180', 'YES'),
(213, 'admin', 'admin123', 'Sri Vani School', '2019-10-15 10:01:34', '192.168.57.180', 'YES'),
(214, 'admin', 'admin1233', 'Sri Vani School', '2019-10-15 17:52:00', '192.168.57.30', 'NO'),
(215, 'admin', 'admin123', 'Sri Vani School', '2019-10-15 17:52:12', '192.168.57.30', 'YES'),
(216, 'admin', 'admin123', 'Sri Vani School', '2019-10-16 10:04:53', '192.168.57.180', 'YES'),
(217, 'admin', 'admin123', 'Sri Vani School', '2019-10-16 17:39:02', '192.168.57.180', 'YES'),
(218, 'admin', 'admin123', 'Sri Vani School', '2019-10-17 09:39:09', '192.168.57.180', 'YES'),
(219, 'admin', 'admin123', 'Sri Vani School', '2019-10-18 09:28:42', '192.168.57.180', 'YES'),
(220, 'admin', 'admin123', 'Sri Vani School', '2019-10-18 13:22:52', '192.168.57.180', 'YES'),
(221, 'admin', 'admin123', 'Sri Vani School', '2019-10-18 13:25:38', '192.168.57.180', 'YES'),
(222, 'admin', 'admin123', 'Sri Vani School', '2019-10-18 13:29:40', '192.168.57.180', 'YES'),
(223, 'admin', 'admin123', 'Sri Vani School', '2019-10-21 14:52:41', '192.168.57.180', 'YES'),
(224, 'admin', 'admin123', 'Sri Vani School', '2019-10-21 16:56:06', '192.168.57.180', 'YES'),
(225, 'admin', 'admin123', 'Sri Vani School', '2019-10-22 09:37:22', '192.168.57.180', 'YES'),
(226, 'admin', 'ADMIN123', 'Sri Vani School', '2019-10-23 12:48:32', '192.168.57.180', 'YES'),
(227, 'admin', 'admin123.', 'Sri Vani School', '2019-10-23 14:32:36', '192.168.57.180', 'NO'),
(228, 'admin', 'admin123', 'Sri Vani School', '2019-10-23 14:32:49', '192.168.57.180', 'YES'),
(229, 'admin', 'admin123', 'Sri Vani School', '2019-10-23 15:00:53', '192.168.57.180', 'YES'),
(230, 'admin', 'admin123', 'Sri Vani School', '2019-10-23 17:12:22', '192.168.57.180', 'YES'),
(231, 'admin', 'admin123', 'Sri Vani School', '2019-10-25 10:09:51', '192.168.57.180', 'YES'),
(232, 'admin', 'admin123', 'Sri Vani School', '2019-10-25 11:34:01', '192.168.57.180', 'YES'),
(233, 'admin', 'admin1233', 'Sri Vani School', '2019-10-25 11:51:20', '192.168.57.180', 'NO'),
(234, 'admin', 'admin123', 'Sri Vani School', '2019-10-25 11:51:27', '192.168.57.180', 'YES'),
(235, 'admin', 'adm,in123', 'Sri Vani School', '2019-10-29 11:23:52', '192.168.57.180', 'NO'),
(236, 'admin', 'admin123', 'Sri Vani School', '2019-10-29 11:24:02', '192.168.57.180', 'YES'),
(237, 'admin', 'admin123', 'Sri Vani School', '2019-10-29 18:02:16', '192.168.57.180', 'YES'),
(238, 'admin', 'admin123', 'Sri Vani School', '2019-10-30 09:53:07', '192.168.57.180', 'YES'),
(239, 'admin', 'admin123', 'Sri Vani School', '2019-10-31 11:29:54', '192.168.57.180', 'YES'),
(240, 'admin', 'admin124', 'Sri Vani School', '2019-11-05 11:26:32', '192.168.57.180', 'NO'),
(241, 'admin', 'admin123', 'Sri Vani School', '2019-11-05 11:26:42', '192.168.57.180', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_advertisement`
--

CREATE TABLE `vdca_advertisement` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `addate` datetime NOT NULL,
  `adimage` text NOT NULL,
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

INSERT INTO `vdca_advertisement` (`id`, `title`, `addate`, `adimage`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(7, 'VDCA Achievements', '2019-10-25 10:25:00', 'gallery/[207967Maheswaran-Karurwinner]619490_1571979341.JPG', 'admin', '2019-10-25 10:25:41', '192.168.57.180', '', '', ''),
(8, 'VDCA Achievements', '2019-10-25 10:25:00', 'gallery/[3006387ShyamNikilrecivingthetrophyfromAGopalsamyofTPTextiles]898286_1571979354.JPG', 'admin', '2019-10-25 10:25:54', '192.168.57.180', '', '', ''),
(10, 'slider2', '2019-10-25 11:18:00', 'gallery/[bg-2]436261_1571982527.jpg', 'admin', '2019-10-25 11:18:47', '192.168.57.180', '', '', ''),
(11, 'Slider-3', '2019-10-25 11:19:00', 'gallery/[bg-113]390397_1571982549.jpg', 'admin', '2019-10-25 11:19:09', '192.168.57.180', '', '', ''),
(12, 'Slider-4', '2019-10-25 11:19:00', 'gallery/[vdca_img4]621930_1571982579.jpg', 'admin', '2019-10-25 11:19:39', '192.168.57.180', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_event`
--

CREATE TABLE `vdca_event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
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

INSERT INTO `vdca_event` (`id`, `title`, `datetime`, `description`, `image`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(7, 'M Paramasivam of Aruppukottai tops the rating category in 4 Queens, Ernakulam tournament', '2019-10-16 10:30:00', 'M Paramasivam of Aruppukottai tops the rating category in 4 Queens, Ernakulam tournament', '', 'admin', '2019-10-25 10:30:28', '192.168.57.180', '|admin', '|2019-10-25-10:49:04', '|192.168.57.180'),
(8, 'K Marimuthu of Sivakasi Chess Club wins fide rated tournament for visually impaired at Hyderabad', '2019-10-01 10:30:00', 'K Marimuthu of Sivakasi Chess Club wins fide rated tournament for visually impaired at Hyderabad', '', 'admin', '2019-10-25 10:30:52', '192.168.57.180', '|admin', '|2019-10-25-10:48:52', '|192.168.57.180'),
(9, 'M Kunal of Trichy wins Ramco IT FIDE Rated tournament, Rajapalayam', '2019-10-25 10:31:00', 'M Kunal of Trichy wins Ramco IT FIDE Rated tournament, Rajapalayam', '', 'admin', '2019-10-25 10:31:12', '192.168.57.180', '|admin', '|2019-10-25-10:48:41', '|192.168.57.180'),
(10, 'Shaadurshan R of Aruppukottai is third at the State School Games', '2019-10-25 10:31:00', 'Shaadurshan R of Aruppukottai is third at the State School Games', '', 'admin', '2019-10-25 10:31:28', '192.168.57.180', '|admin', '|2019-10-25-10:48:24', '|192.168.57.180');

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
(1, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(2, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(3, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(4, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(5, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(6, '', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(7, '', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(8, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(9, 'boopathi', '', 'gfugyuity2@ftr.tutyu', 'ytiyuouipiopuoipiop', '2019-10-22'),
(10, ' ', '', 'dhanra@gmsail.vom', ' ', '2019-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_franchise_company_debits`
--

CREATE TABLE `vdca_franchise_company_debits` (
  `debit_id` int(11) NOT NULL,
  `inv_prefix` text NOT NULL,
  `inv_no` text NOT NULL,
  `employer_id` int(11) NOT NULL,
  `franchise_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(200) NOT NULL,
  `plan_type` text NOT NULL,
  `post_count` int(11) NOT NULL,
  `actual_amount` int(11) NOT NULL,
  `debited_amount` float NOT NULL,
  `validity` int(11) NOT NULL,
  `job_validity` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `balance` float NOT NULL,
  `order_id` text NOT NULL,
  `m_id` text NOT NULL,
  `txn_id` text NOT NULL,
  `txn_amt` text NOT NULL,
  `gst_amount` float NOT NULL,
  `actual_amount1` float NOT NULL,
  `gst_percent` float NOT NULL,
  `paymentmode` varchar(200) NOT NULL,
  `currency` text NOT NULL,
  `txn_date` datetime NOT NULL,
  `status` text NOT NULL,
  `resp_code` text NOT NULL,
  `res_msg` text NOT NULL,
  `gatewayname` text NOT NULL,
  `banktxn_id` text NOT NULL,
  `bank_name` text NOT NULL,
  `checksumhash` text NOT NULL,
  `gst_percentage` int(11) NOT NULL,
  `tds_percentage` int(11) NOT NULL,
  `android_id` text NOT NULL,
  `vcode` text NOT NULL,
  `mob_number` text NOT NULL,
  `invoice_pdf` text NOT NULL,
  `cdate` datetime NOT NULL,
  `cip` text NOT NULL,
  `cby` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_franchise_company_debits`
--

INSERT INTO `vdca_franchise_company_debits` (`debit_id`, `inv_prefix`, `inv_no`, `employer_id`, `franchise_id`, `plan_id`, `plan_name`, `plan_type`, `post_count`, `actual_amount`, `debited_amount`, `validity`, `job_validity`, `starting_date`, `expired_date`, `balance`, `order_id`, `m_id`, `txn_id`, `txn_amt`, `gst_amount`, `actual_amount1`, `gst_percent`, `paymentmode`, `currency`, `txn_date`, `status`, `resp_code`, `res_msg`, `gatewayname`, `banktxn_id`, `bank_name`, `checksumhash`, `gst_percentage`, `tds_percentage`, `android_id`, `vcode`, `mob_number`, `invoice_pdf`, `cdate`, `cip`, `cby`) VALUES
(1, '2018-19/J', '00001', 3563, 0, 2, 'diamond', '', 0, 0, 5000, 30, 40, '2019-02-09', '2019-02-12', 0, '111ORDER100008789 ', '', 'None', '0', 0, 0, 0, 'Offer', 'INR', '2019-02-09 16:33:18', 'TXN_FAILURE', '', '', '', '', '', '', 0, 0, '38af50e5f81148e', '34', '9942962360', '', '2019-02-09 15:45:49', '192.168.57.26', ''),
(2, '2018-19/J', '00002', 0, 0, 1, 'gold', '', 0, 0, 500, 10, 0, '2019-08-02', '2019-08-12', 0, '2111111111111111111111111111111ORDER100008789 ', '', 'sdfsdf', '0', 0, 0, 0, 'Offer', 'INR', '2019-02-09 16:33:18', 'TXN_SUCCESS', '', '', '', '', '', '', 0, 0, '38af50e5f81148e', '34', 'validity', '', '2019-02-09 15:46:14', '192.168.57.26', ''),
(3, '2018-19/J', '00002', 0, 0, 6, 'silver', '', 0, 0, 0, 20, 0, '2019-05-23', '2019-06-12', 0, 'ORDER100008789 ', '', 'sdfsdf', '0', 0, 0, 0, 'Offer', 'INR', '2019-02-09 16:33:18', 'TXN_SUCCESS', '', '', '', '', '', '', 0, 0, '38af50e5f81148e', '34', '8508442220', '', '2019-02-09 15:46:14', '192.168.57.26', ''),
(4, '2018-19/J', '00002', 0, 0, 7, 'Free trial', '', 0, 0, 0, 10, 0, '2019-05-23', '2019-06-02', 0, 'ORDER100008789 ', '', 'None', '0', 0, 0, 0, 'Offer', 'INR', '2019-02-09 16:33:18', 'TXN_SUCCESS', '', '', '', '', '', '', 0, 0, '38af50e5f81148e', '34', '8508187299', '', '2019-02-09 15:46:14', '192.168.57.26', ''),
(5, '2018-19/J', '00002', 0, 0, 0, '', '', 0, 0, 0, 20, 0, '2019-05-23', '2019-06-12', 0, 'ORDER100008789 ', '', 'None', '0', 0, 0, 0, 'Offer', 'INR', '2019-02-09 16:33:18', 'TXN_SUCCESS', '', '', '', '', '', '', 0, 0, '38af50e5f81148e', '34', '9942962360', '', '2019-02-09 15:46:14', '192.168.57.26', ''),
(6, '2018-19/J', '00002', 0, 0, 0, '', '', 0, 0, 0, 30, 0, '0000-00-00', '2019-02-02', 0, 'ORDER100008789 ', '', 'None', '0', 0, 0, 0, 'Offer', 'INR', '2019-02-09 16:33:18', 'TXN_SUCCESS', '', '', '', '', '', '', 0, 0, '38af50e5f81148e', '34', '9942962360', '', '2019-02-09 15:46:14', '192.168.57.26', ''),
(7, '2019-20/J', '00000', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '', '', '2019-10-21 09:56:48', '192.168.57.180', ''),
(8, '2019-20/J', '00000', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '', '', '2019-10-21 09:57:43', '192.168.57.180', ''),
(9, '2019-20/J', '00000', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '', '', '2019-10-21 09:57:51', '192.168.57.180', ''),
(10, '2019-20/J', '00000', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '', '', '2019-10-21 09:58:00', '192.168.57.180', ''),
(11, '2019-20/VDCA', '00000', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '', '', '2019-10-21 10:04:38', '192.168.57.180', ''),
(12, '2019-20/VDCA', '00000', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '', '', '2019-10-21 11:36:47', '192.168.57.180', ''),
(13, '2019-20/VDCA', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '9842701007', '', '2019-10-21 11:53:12', '192.168.57.180', ''),
(14, '2019-20/VDCA', '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, '2018-11-02', '2018-11-02', 0, 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', '350', 0, 0, 0, 'PPI', 'INR', '2018-11-02 11:15:25', 'TXN_SUCCESS', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', 0, 0, '', '', '9842701007', '', '2019-10-21 11:53:42', '192.168.57.180', '');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_gallery`
--

CREATE TABLE `vdca_gallery` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `image` mediumtext NOT NULL,
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

INSERT INTO `vdca_gallery` (`id`, `title`, `date`, `description`, `image`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(1, 'VDCA Achievements', '2019-10-25 10:12:00', '', 'gallery/[207967Maheswaran-Karurwinner]358248_1571978812.JPG', 'admin', '2019-10-25 10:16:52', '192.168.57.180', '', '', ''),
(3, 'VDCA Achievements', '2019-10-25 10:18:00', '', 'gallery/[1808811AnantharamwiththeIndianteamattheGreatwallinChinaduringWorldMindSports2008]503119_1571978930.JPG', 'admin', '2019-10-25 10:18:50', '192.168.57.180', '', '', ''),
(4, 'VDCA Achievements', '2019-10-10 10:19:00', '', 'gallery/[1413411AnantharamandXieJunformerWorldwomenchampionattheWorldchampionship2000]939372_1571979988.jpg,gallery/[1158504AnantharamandformerworldchampionKarpovinLebanon]387952_1571979966.jpg,gallery/[3398854NPSSRathinanadarandFlorentioCampamonas]237608_1571979033.jpg', 'admin', '2019-10-25 10:19:50', '192.168.57.180', '|admin|admin|admin|admin', '|2019-10-25-10:20:11|2019-10-25-10:20:33|2019-10-25-10:36:06|2019-10-25-10:36:28', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180'),
(7, 'VDCA Achievements', '2019-10-25 10:21:00', '', 'gallery/[2033558CampamonasAsianJr]657003_1571979096.jpg', 'admin', '2019-10-25 10:21:36', '192.168.57.180', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_notes`
--

CREATE TABLE `vdca_notes` (
  `id` int(11) NOT NULL,
  `info` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `cby` mediumtext NOT NULL,
  `cdate` datetime NOT NULL,
  `cip` mediumtext NOT NULL,
  `mby` mediumtext NOT NULL,
  `mdate` mediumtext NOT NULL,
  `mip` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vdca_notes`
--

INSERT INTO `vdca_notes` (`id`, `info`, `description`, `cby`, `cdate`, `cip`, `mby`, `mdate`, `mip`) VALUES
(1, 'principal', '<div style=\"text-align: justify;\"><p><span style=\"font-size: 17.5px;\"><b>Those who educate children well are more to be honoured than parents, for these only gave life, those, the art of living well” - Aristotle.</b></span></p><p>A class is a group of students coming from varied backgrounds with varied abilities, aptitude and interests, different desires and dreams. The only thing they have in common is their age range. The time spent in classrooms is the most valuable time in one’s life. It is the place where a child prepares himself / herself to step into the world. </p></div><div style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br></div><p class=\"MsoListParagraph\" style=\"margin-left: 0.3in;\"><span style=\"font-size: 12pt; line-height: 18.4px;\"></span></p><p style=\"text-align: justify; \"><span style=\"font-weight: 700; color: rgb(51, 60, 78); font-size: 17.5px;\">“Parents are the divinely appointed teachers of children. The Home is the divinely established school” - Herbert Hoofer.</span><br></p><p style=\"text-align: justify; \">It is true that a child’s education begins on the lap of the mother. It is the duty of the parents to support the child to learn things by answering their queries patiently. When the child comes to school, a teacher can guide him/her in the right way. A teacher hence has a great role to play in the life and development of a child. </p><p></p><p class=\"MsoListParagraph\" style=\"text-align: justify; margin-left: 0.3in;\"><span style=\"font-size: 12pt; line-height: 18.4px;\"><br></span></p><p style=\"text-align: justify; color: rgb(250, 200, 0);\"><span style=\"color: rgb(0, 0, 0);\">At&nbsp;</span><span style=\"color: rgb(0, 0, 0);\">Vani Vidyalaya</span><span style=\"color: rgb(0, 0, 0);\">, every child entrusted in our care is precious and we aim to provide a safe and secure environment for them to learn. We also provide a wide range of enrichment activities which strengthen the holistic development of the children.</span><span style=\"color: rgb(0, 0, 0);\">The commitment and compassion of the staff in SVIS are above and beyond the call of duty. Every child is unique and we provide opportunities in visualizing their dreams above the sky and beyond the horizon.</span></p><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><p>We believe that, with the support and co-operation from the parents, our children would emerge as true citizens.</p></div><div style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <br></div><div style=\"text-align: justify;\"><p>Vani Vidyalaya School can proudly claim to be one of the most progressive and esteemed Institutions.</p></div><div style=\"text-align: center; margin-left: 25px;\"><br></div><div style=\"text-align: center; margin-left: 25px;\">With blessings and Good Luck.</div><div style=\"text-align: center; margin-left: 25px;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mr.<b>P.SANKAR&nbsp;</b>M.sc.,MA.,B.Ed.,</div><div style=\"text-align: center; margin-left: 25px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"text-align: right;\">Principal</span><br></div>', 'admin', '2017-12-22 00:00:00', '192.168.1.105', '|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin', '|2017-12-04-03:51:10|2017-12-04-04:51:29|2017-12-04-04:51:52|2017-12-04-04:57:16|2017-12-25-10:00:44|2017-12-25-10:11:30|2017-12-25-10:14:34|2017-12-25-10:18:52|2017-12-25-10:28:07|2017-12-25-10:29:40|2017-12-25-10:34:25|2017-12-25-10:35:55|2017-12-25-10:37:24|2017-12-25-10:45:31|2017-12-25-10:49:37|2017-12-25-10:51:40|2017-12-25-10:52:38|2017-12-25-10:53:28|2017-12-25-10:59:15|2017-12-25-11:06:51|2017-12-25-11:10:35|2017-12-25-11:12:23|2017-12-25-11:13:01|2017-12-25-11:13:13|2017-12-25-11:14:07|2017-12-25-11:14:38|2017-12-25-11:15:15|2017-12-25-11:16:15|2017-12-25-11:17:06|2017-12-25-11:18:43|2017-12-25-11:31:25|2017-12-25-11:31:53|2017-12-25-11:32:23|2017-12-25-11:46:03|2017-12-25-11:49:08|2017-12-25-11:49:29|2017-12-25-11:54:39|2017-12-25-11:55:26|2017-12-25-11:55:42|2017-12-25-11:56:37|2017-12-25-11:57:07|2017-12-25-11:57:35|2017-12-25-11:58:33|2017-12-25-11:58:49|2017-12-25-11:59:22|2017-12-25-11:59:57|2017-12-25-12:01:03|2017-12-25-12:01:46|2017-12-25-12:01:48|2017-12-25-12:02:56|2017-12-25-12:02:58|2017-12-25-12:03:32|2017-12-25-12:03:50|2017-12-25-12:04:12|2017-12-25-12:04:52|2017-12-25-12:12:20|2017-12-25-12:14:19|2017-12-25-12:37:55|2017-12-25-12:38:02|2017-12-25-12:38:28|2017-12-25-12:38:31|2017-12-25-12:39:40|2017-12-25-12:39:51|2017-12-25-12:39:58|2017-12-25-12:40:03|2017-12-25-12:40:24|2017-12-25-12:41:49|2017-12-25-12:42:06|2017-12-25-12:42:21|2017-12-25-12:42:37|2017-12-25-12:42:40|2017-12-25-12:44:20|2017-12-25-12:44:23|2017-12-25-12:44:35|2017-12-25-12:44:54|2017-12-25-12:45:00|2017-12-25-12:45:05|2017-12-25-12:46:10|2017-12-25-12:49:57|2017-12-25-12:53:53|2017-12-25-12:54:22|2017-12-25-12:54:25|2017-12-25-12:55:50|2017-12-25-12:55:55|2017-12-25-01:59:09|2018-01-05-04:20:14|2018-01-09-06:30:41|2018-01-09-06:31:03|2018-01-19-06:03:20|2018-01-19-06:07:52|2018-02-12-03:49:57|2018-02-12-03:50:51|2018-03-10-01:49:53|2018-03-10-03:48:06|2018-03-10-03:48:28|2018-11-27-05:18:18|2018-12-01-04:43:46|2018-12-01-04:44:01|2018-12-24-04:12:21|2018-12-24-04:18:32|2018-12-24-04:20:12|2018-12-24-04:25:16|2018-12-24-04:25:33|2018-12-24-04:26:34', '|192.168.1.105|192.168.1.104|192.168.1.104|192.168.1.105|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.58.116.194|103.58.116.194|182.0.198.90|103.70.188.34|103.70.188.34|::1|::1|::1|::1|::1|::1'),
(2, 'chairman', '<div style=\"text-align: justify;\"><p class=\"MsoListParagraphCxSpFirst\"><span style=\"font-weight: 700; color: rgb(51, 60, 78); font-size: 17.5px;\">“Education is the&nbsp; manifestation of the perfection already in man” - Aristotle.</span><b><span style=\"font-size:12.0pt;line-height:115%;mso-bidi-font-family:\r\nArial\"><br></span></b></p><p class=\"MsoListParagraphCxSpFirst\"><b><span style=\"font-size:12.0pt;line-height:115%;mso-bidi-font-family:\r\nArial\">Sri Vani International School, </span></b><span style=\"font-size:12.0pt;\r\nline-height:115%;mso-bidi-font-family:Arial\">established with a dream and\r\nvision to provide quality education in par with the International Standards,\r\nprepare the children to reach their full potential as responsible citizens of\r\nIndia. Our happiness lies in seeing them execute &nbsp;what we have taught them and living by\r\nupholding the values.<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\"><span style=\"font-size:12.0pt;line-height:\r\n115%;mso-bidi-font-family:Arial\">SVIS\r\nfirmly believe in being facilitators and provide excellent learning opportunity\r\nfor the young minds through real classroom situations and practical knowledge.<o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n</p><p class=\"MsoListParagraphCxSpLast\"><span style=\"font-size:12.0pt;line-height:\r\n115%;mso-bidi-font-family:Arial\">It\r\nis our objective to help every child to achieve their goal of excellence in\r\ntheir endeavours. We sincerely believe that every child who step in SVIS reach\r\ntheir goal.</span></p><p class=\"MsoListParagraphCxSpLast\"><span style=\"font-size:12.0pt;line-height:\r\n115%;mso-bidi-font-family:Arial\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; With Blessings,<o:p></o:p></span></p><p> </p></div><div style=\"text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div><div style=\"text-align: justify; margin-left: 25px;\"><p class=\"MsoNormal\" style=\"text-align: right; line-height: normal; margin-left: 25px;\"><b style=\"text-align: justify;\"><span style=\"font-size:12.0pt;line-height:115%;font-family:\" calibri\",\"sans-serif\";=\"\" mso-ascii-theme-font:minor-latin;mso-fareast-font-family:calibri;mso-fareast-theme-font:=\"\" minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:arial;=\"\" mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:hi\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;N.Prakash</span></b><b>,</b></p><p class=\"MsoNormal\" style=\"text-align: right; line-height: normal; margin-left: 25px;\">chairman</p></div>', 'admin', '2017-12-22 00:00:00', '192.168.1.105', '|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin|admin', '|2017-12-04-03:51:10|2017-12-04-03:54:00|2017-12-25-11:41:11|2017-12-25-11:41:34|2017-12-25-11:41:56|2017-12-25-11:42:01|2017-12-25-11:42:08|2017-12-25-11:43:05|2017-12-25-11:44:04|2017-12-25-11:44:27|2017-12-25-12:07:22|2017-12-25-12:07:52|2017-12-25-12:07:59|2017-12-25-12:08:03|2017-12-25-12:08:30|2017-12-25-12:08:52|2017-12-25-12:10:22|2017-12-25-12:10:48|2017-12-25-12:10:50|2017-12-25-12:11:04|2017-12-25-12:11:30|2017-12-25-12:13:18|2017-12-25-12:14:07|2017-12-25-12:19:42|2017-12-25-12:20:23|2017-12-25-12:20:44|2017-12-25-12:23:26|2017-12-25-12:25:11|2017-12-25-12:25:40|2017-12-25-12:25:58|2017-12-25-12:26:03|2017-12-25-12:26:24|2017-12-25-12:26:27|2017-12-25-12:27:21|2017-12-25-12:27:42|2017-12-25-12:27:45|2017-12-25-12:27:48|2017-12-25-12:28:21|2017-12-25-12:28:24|2017-12-25-12:28:40|2017-12-25-12:29:45|2017-12-25-12:29:48|2017-12-25-12:30:19|2017-12-25-12:30:37|2017-12-25-12:30:42|2017-12-25-12:30:59|2017-12-25-12:31:33|2017-12-25-12:31:43|2018-01-05-04:13:30|2018-01-09-06:29:03|2018-01-09-06:29:42|2018-01-19-06:03:17|2018-01-19-06:05:26|2018-01-19-06:08:17|2018-02-12-04:06:39|2018-03-06-02:57:31|2018-03-08-03:13:30|2018-11-27-05:06:54|2018-12-01-04:43:02|2018-12-01-04:58:00|2018-12-01-04:58:33|2018-12-01-05:00:00|2018-12-01-05:01:27|2018-12-01-05:02:18|2018-12-01-05:02:32|2018-12-01-05:02:49|2018-12-01-05:03:19|2018-12-01-05:04:10|2018-12-01-05:08:17|2018-12-01-05:08:35|2018-12-01-05:09:24|2018-12-01-05:12:04|2018-12-01-05:14:50|2018-12-24-04:27:00|2018-12-24-04:27:14', '|192.168.1.105|192.168.1.105|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|::1|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|103.72.176.194|182.0.197.89|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|103.70.188.34|::1|::1');

-- --------------------------------------------------------

--
-- Table structure for table `vdca_payments`
--

CREATE TABLE `vdca_payments` (
  `id` int(6) NOT NULL,
  `plan_id` varchar(20) NOT NULL,
  `name` varchar(15) NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `date` datetime NOT NULL,
  `validity` varchar(50) NOT NULL,
  `ORDERID` text NOT NULL,
  `MID` text NOT NULL,
  `TXNID` text NOT NULL,
  `TXNAMOUNT` float NOT NULL,
  `PAYMENTMODE` varchar(255) NOT NULL,
  `CURRENCY` text NOT NULL,
  `TXNDATE` datetime(6) NOT NULL,
  `RESPCODE` text NOT NULL,
  `RESPMSG` text NOT NULL,
  `GATEWAYNAME` text NOT NULL,
  `BANKTXNID` text NOT NULL,
  `BANKNAME` text NOT NULL,
  `CHECKSUMHASH` text NOT NULL,
  `remitter` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vdca_payments`
--

INSERT INTO `vdca_payments` (`id`, `plan_id`, `name`, `amount`, `payment_status`, `phone_no`, `date`, `validity`, `ORDERID`, `MID`, `TXNID`, `TXNAMOUNT`, `PAYMENTMODE`, `CURRENCY`, `TXNDATE`, `RESPCODE`, `RESPMSG`, `GATEWAYNAME`, `BANKTXNID`, `BANKNAME`, `CHECKSUMHASH`, `remitter`) VALUES
(24, '', '', '1000.00', 'PENDING', '8870719103', '2019-10-25 12:33:16', '365', 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', 350, 'PPI', 'INR', '2018-11-02 11:15:25.000000', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', ''),
(22, '', '', '1000.00', 'TXN_SUCCESS', '9865691812', '2019-10-21 13:58:07', '365', 'NITHRA05bd2b79a3ec36', 'sdsds34343434', 'dsd3434343434', 350, 'PPI', 'INR', '2018-11-02 11:15:25.000000', '01', 'Txn Success', 'WALLET', '645654645', 'WALLET', 'sd64sdsd56s4ds5dsds6ds4d', '');

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
  `email_id` varchar(50) NOT NULL,
  `father_name` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `lapsed` varchar(50) NOT NULL,
  `birth_cf` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `vdca_id` varchar(20) NOT NULL,
  `otp` int(6) NOT NULL,
  `year` text NOT NULL,
  `ststus` text NOT NULL,
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

INSERT INTO `vdca_players_db` (`id`, `fide_id`, `name`, `gender`, `city`, `Institution`, `rating`, `aicf`, `tnsca`, `dob`, `phone_no`, `email_id`, `father_name`, `address`, `lapsed`, `birth_cf`, `photo`, `vdca_id`, `otp`, `year`, `ststus`, `cip`, `cby`, `cdate`, `mby`, `mip`, `mdate`) VALUES
(10001, '45023786', 'Jeyam Subbaiah C', 'Male', 'Sivakasi East', 'Green Park International Senior Sec.School, Namakk', '1189', '59113TN2014', '51886/VNR/2017', '26-10-2002', '9842125501, 9488705501', 'spchockalingam@gmail.com', 'Chockalingam SP', '4/725-C4, PSK Nagar\r\nNear Hussain Colony\r\nBye Pass Road,\r\nSivakasi East', '31-03-2019', '1253341870Jeyam Subbaiah C_45023786.jpg', '1200670505jeyam subbaiah.jpg', 'VDCA-2016-10001', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10002, '45024260', 'Vigneshwaran K', 'Male', 'Sivakasi', 'S.H.N.V.Hr.Sec.School, Sivakasi', '1445', '59148TN2014', '17800', '29-08-2002', '8870719103', 'vpmfriends88707@gmail.com', 'Karuppusamy G', '724/A, Kamarajar Salai, Sivakasi', '31-03-2020', '85266161Vigneswaran.jpg', '1870822398Vigneswaran Photo.jpg', 'VDCA-2016-10002', 845810, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10003, '45023859', 'Marimuthu K', 'Male', 'Sivakasi', 'Thirunelveli Blind School, Palayamkottai', '1710', '59118TN2014', '17846', '12-01-2001', '8870719103', 'vpmfriends88707@gmail.com', 'Karuppusamy G', '724/A, Kamarajar Salai, Sivakasi', '31-03-2020', '1385337584Marimuthu.jpg', '135374315Marimuthu Photo.jpg', 'VDCA-2016-10003', 845810, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10004, '45073856', 'Kishore S V', 'Male', 'Sivakasi', 'Vinayakar Matriculation Hr Sec School, Sivakasi', '1178', '64839TN2015', '17850', '26-05-2003', '9865691812', 'kishoresvks01@gmail.com', 'Venugopal S', '1/448, I, Munees Nagar,Opp:Jaycees School, Sivakasi\r\n', '31-03-2020', '349181862Kishore.jpg', '1706280198Kishore Photo.jpg', 'VDCA-2016-10004', 670945, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10005, '45052034', 'Jayarathi Kamak N', 'Female', 'Sivakasi', 'Y.R.T.V.Matriculation Hr.Sec.School, Sivakasi', '0', '62385TN2014', '22354', '26-02-2008', '9843426884', 'nnk30@yahoo.com', 'Narendran Kamak N', '1/462 K1, NGO Colony,\r\nSivakasi-626124', '31-03-2020', '1368283765Jeyarathi.jpg', '1839032020Jayarathi Kamak N.jpg', 'VDCA-10005', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10006, '45009619', 'Jagendran Kamak N', 'Male', 'Sivakasi', 'Y.R.T.V.Matriculation Hr.Sec.School, Sivakasi', '1244', '57153TN2014', '15245', '29-05-2006', '9843426884', 'nnk30@yahoo.com', 'Narendran Kamak N', '1/462-K1, NGO Colony,\r\nSivakasi-626124', '31-03-2020', '716731415jagendran.jpg', '728590855Jagendran Kamak N.jpg', 'VDCA-10006', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10007, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '19-09-2016', '', '', 'VDCA-10007', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10008, '45023654', 'Dhananjeyam M', 'Male', 'Virudhunagar', 'KVS Mtr Hr Sec School', '', '59152TN2014', '01', '06-12-2007', '9943294411', 'dhananijeyan@gmail.com', 'Mani Selvam', '35/1/14-E, Dharanijeyam Illam, A.Aroad, VNR', '31-03-2020', '1439057177Dhananjeyan M_45023654.jpg', '192869598945023654-page-001.jpg', 'VDCA-10008', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10009, '45023662', 'Dharanidaran M', 'Male', 'Virudhunagar', 'KVS Mtr Hr Sec School', '', '59153TN2014', '6394', '06-12-2007', '9943294411', 'dhananijeyan@gmail.com', 'Maniselvam', '35/1/14-E, Dharanijeyam Illam, A.Aroad, VNR', '31-03-2020', '1049204096Dharanidharan M_45023662.jpg', '267035669DharaniDhran.JPG', 'VDCA-10009', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10010, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '19-09-2016', '', '', 'VDCA-10010', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10011, '25684520', 'Inian G', 'Male', 'Virudhunager', '', '0', '76762TN2016', '-', '18-08-2010', '9486040303', 'janusid.indu@gmail.com', 'Gopinath P N', '51, LIG Colony(opp Bombay Arangam) VNR', '31-03-2020', '221912302Inian G_25682520.jpg', '327326468Inian G.jpg', 'VDCA-10011', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10012, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '19-09-2016', '', '', 'VDCA-10012', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10013, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10013', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10014, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10014', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10015, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10015', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10016, '25682644', 'Nithya Padmashree K', 'Female', 'Virudhunagar', 'KVS Centenary School', '0', '77462TN2016', '00', '15-09-2008', '9994446880', 'balajikannanti@gmail.com', 'Kannan M', '73/D, Linkroad, Viruthunagar', '31-03-2020', '1845583240Nithya padmashree K_25682644.jpg', '859011829nithya.jpg', 'VDCA-10016', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10017, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10017', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10018, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10018', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10019, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10019', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10020, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10020', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10021, '25682717', 'Rhea S', 'Female', 'Sivakasi', '', '0', '77444TN2016', '0', '28-03-2010', '9787628179', 'Sundar007701@gmail.com', 'Shyamsunder', '40, Gnanagiri Road, Cornation Colony, Sivakasi.', '31-03-2020', '1313985478Rhea S_25682717.jpg', '1436772396rhea.jpg', 'VDCA-10021', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10022, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10022', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10023, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10023', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10024, '25682873', 'Sanjay G', 'Male', 'Sivakasi', '', '1475', '77446TN2016', '00000', '22-08-2005', '9843757767', 'akganesh23@gmail.com', 'Ganesh pandi', '5/520, Muthamilpuram Colony, Sivakasi.', '31-03-2020', '1449630733Sanjay G_25682873.jpg', '583093302sanjay g .jpg', 'VDCA-10024', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10025, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10025', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10026, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10026', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10027, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10027', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10028, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10028', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10029, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10029', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10030, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10030', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10031, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10031', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10032, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10032', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10036, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10036', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10035, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '20-09-2016', '', '', 'VDCA-10035', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10037, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10037', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10038, '25978314', 'Nitheesh V', 'Male', 'Rajapalayam', 'Chinmaya Vidyalaya SLR', 'Not rated', '99775TN2018', '000000', '30-10-2005', '9486667755', 'nitheesh2005@gmail.com', 'Venkata Subramanian S', '44/392 Srirengapalayam,\r\nRajapalayam\r\n', '31-03-2019', '1072902886Birth Certificate.jpg', '161525906Photo.jpg', 'VDCA-10038', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10039, '45023727', 'Hariharan A C G', 'Male', 'Sivakasi', 'Ayyanadar Janaki Ammal College', '1332', '59108TN2014', '60923/VNR/2018', '18-04-2001', '04562272562', 'acganeshsvks@gmail.com', 'Ganesh A C', '2/2186E3,Sri Srinivasa Nagar,\r\nSivakasi\r\n', '31-03-2020', '444592574Birth Certificate.jpg', '218226724Photo.jpg', 'VDCA-10039', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10040, '25709445', 'Karthick V', 'Male', 'Rajapalayam', '', 'NA', '79772TN2016', '', '16-09-2005', '9487054446', '', 'Vallinayagam ', 'Muthunathi Colony, Rajapalayam', '31-03-2019', '786389195birth certificate.jpg', '2083478395Photo.jpg', 'VDCA-10040', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10041, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10041', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10042, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10042', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10043, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10043', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10044, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10044', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10045, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10045', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10046, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10046', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10047, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10047', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10048, '', 'Gokulnath N', 'Male', 'Virudhunagar', '', '', '', '', '23-09-2003', '8489905380', 'kvkarishma3@gmail.com', 'Navaneethan M', '35,ceylon retuees camp,Anaikuttam,Near Tirutangal', '31-03-2019', '700009691Photo.jpg', '153585244Birth Certificate.jpg', 'VDCA-10048', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10049, '', 'Mohanaprasath G', 'Male', 'Virudhunagar', '', '', '', '', '01-08-2003', '8754318861', 'kvkarishma3@gmail.com', 'Gowindaraj S', '1/177,Meddle Street,\r\nAnaikuttam.\r\n', '31-03-2019', '218731279Photo.jpg', '1803258446Birth Certificate.jpg', 'VDCA-10049', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10050, '', 'Dhanujan T', 'Male', 'Virudhunagar', '', '', '', '', '04-01-2003', '9943743806', 'kvkarishma3@gmail.com', 'Thaya Nathan T', '274,ceylon refuees Camp,\r\nAnai Kuttam, Near Tirutangal.', '31-03-2019', '1714751325Photo.jpg', '812073306Birth Certificate.jpg', 'VDCA-10050', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10051, '', 'Hari Krishna B', 'Male', 'Sivakasi', 'S.S.V.M Hr Sec School.', '', '', '', '21-11-2005', '9787107550', 'abiramirajeswarib@gmail.com', 'Balamurugan M', '1/11, Balaji Nagar,\r\nSithurajapuram.', '31-03-2019', '1004468562Photo.jpg', '1127108586Birth Certificate.jpg', 'VDCA-10051', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10052, '', 'Hari Prakkash S', 'Male', 'Sivakasi', 'S.S.V.M Hr Sec School.', '', '', '', '16-04-2005', '9566966762', 'ricksprashanna@gmail.com', 'Selvam V', '2/1008, East Street, \r\nSithurajapuram.', '31-03-2019', '1850672448Photo.jpg', '1761226020Birth Certificate.jpg', 'VDCA-10052', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10053, '', 'sahaana V', 'Male', 'Sivakasi', 'V.S.K.D Mat Hr Sec School', '', '', '', '10-02-2005', '9786660508', '', 'vairamuthu G', '6/1053,Meenakshi Colony,2d Straat, Narana Puram Road.', '31-03-2019', '919847094Photo.jpg', '1637117417Birth Certificate.jpg', 'VDCA-10053', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10054, '', 'Kishan R', 'Male', 'Sivakasi West', '', '', '', '', '01-08-2005', '7708160776', 'ragunathan1975@gmail.com', 'Ragunathan M', '3/645, Gandi Nagar, Ceylon Colony, Reserve Line, Sivakasi West.', '31-03-2019', '745828199Photo.jpg', '583907252Birth Certificate.jpg', 'VDCA-10054', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10055, '', 'Seyad Rifaideen', 'Male', 'Sivakasi', '', '', '', '', '05-05-2005', '9843024319', '', 'Dasthagir L', '227 Muslim Middle Street, Sivakasi', '31-03-2019', '1234396659Photo.jpg', '1037230613Birth Certificate.jpg', 'VDCA-10055', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10056, '', 'Santhosh C K', 'Male', 'Sivakasi', '', '', '', '', '29-09-2004', '9442117737', '', 'Kani C', '2/44,Bose Colony, Naranapuram Road,Sivakasi ', '31-03-2019', '1919520138Photo.jpg', '1469194454Birth Certificate.jpg', 'VDCA-10056', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10057, '', 'Sanjay Srinivas S', 'Male', 'Sivakasi', '', '', '', '', '08-12-2005', '9790143152', '', 'Subburaj S', '2/655A, KSA Rajdurai Nagar, Anaiyer Post,\r\nSivakasi.', '31-03-2019', '1724729160Photo.jpg', '1653189600Birth Certificate.jpg', 'VDCA-10057', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10058, '', 'Darshana N', 'Female', 'Sivakasi West', 'Sivkasi Lions Mat Hr Sec School', '', '', '', '27-12-2006', '9047031696', 'yamunadevinatesh@gmail.com', 'Natesh M', '7/951, Asari Colony, Reserveline, Sivakasi West.', '31-03-2019', '1857083966Photo.jpg', '394526784Birth Certificate.jpg', 'VDCA-10058', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10059, '', 'Gayathiri N', 'Female', 'Sivakasi West', 'Sivkasi Lions Mat Hr Sec School', '', '', '', '07-01-2012', '9047031696', 'yamunadevinatesh@gmail.com', 'Natesh M', '7/951, Asari Colony, Reserveline, Sivakasi West.', '31-03-2019', '1734801212Photo.jpg', '1775355903Birth Certificate.jpg', 'VDCA-10059', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10060, '', 'Jiya Harshatha H', 'Female', 'Sivakasi West', 'Sivkasi Lions Mat Hr Sec School', '', '', '', '08-09-2011', '9944938696', 'hariharan84@gmail.com', 'Hariharan M', '7/94 Asari Colony, Reserveline, Anaiyur', '31-03-2019', '967153810Photo.jpg', '137812700Birth Certificate.jpg', 'VDCA-10060', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10061, '', 'Sanjith Sakthi S', 'Male', 'Sivakasi', 'Sivkasi Lions Mat Hr Sec School', '', '', '', '14-04-2010', '9443718123', 'Sakiv2k4u@gmail.com', 'Sakthinath', '172/A1,Thiruthangal Road, Sivakasi.', '31-03-2019', '114740905Photo.jpg', '2092115148Birth Certificate.jpg', 'VDCA-10061', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10062, '', 'Lakshin Yogan C T', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '28-02-2012', '9443126276', 'venkateshh78@gmail.com', 'Thangamani Venketesh C', '27/Z Kattalaipatty Road, Ayyappan Colony, Sivakasi.', '31-03-2020', '2014588921Photo.jpg', '572836518Birth Certificate.jpg', 'VDCA-10062', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10063, '', 'Ahsan Ahmed S', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '29-03-2010', '8608492274', 'ahsannosha1984@gmail.com.', 'Syed Thajudeen Ahmed N', '18, Meera Hussain Street, Sivaksi.', '31-03-2019', '1541162534Photo.jpg', '1887082116Birth Certificate.jpg', 'VDCA-10063', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10064, '', 'Siddharthan K K', 'Male', 'Virudhunagar', 'Kendra Vidyalaya- Viruthunagar', '', '', '', '28-10-2012', '9843698489', 'karthikkgd@gmail.com', 'Karthik K G D', '3A, H4 Road, Near Central Ware House, Viruthunagar.', '31-03-2019', '1439810838Photo.jpg', '442683483Birth Certificate.jpg', 'VDCA-10064', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10065, '', 'Balashanchita B', 'Female', 'Virudhunagar', 'P.S Chidambaram Nadar Senier English School', '', '', '', '12-04-2012', '9487259033', 'balammready@gmail.com', 'Balakrishnan M', '53A, Vellayan Street, Muthuramanpatti, Viruthunagar', '31-03-2019', '399153676Photo.jpg', '195787697Birth Certificate.jpg', 'VDCA-10065', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10066, '', 'Ilakiyan G', 'Male', 'Virudhunagar', 'B.C.A', '', '', '', '31-03-2013', '9894675431', '', 'Gopinath P N', '51, L I G Colony, Viruthunagar.', '31-03-2019', '1991739541Photo.jpg', '1317584803Birth Certificate.jpg', 'VDCA-10066', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10067, '', 'Roshmi A', 'Female', 'Sivakasi', '', '', '', '', '28-04-2010', '9843355551', '', 'Arun Kumar S', '6/1438,Srivilliputhur Road, Satchiyapuram, Sivakasi.\r\n', '31-03-2019', '1551025751Photo.jpg', '12660924Birth Certificate.jpg', 'VDCA-10067', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10068, '', 'Prajith A', 'Male', 'Sivakasi', '', '', '', '', '14-10-2012', '9843355551', '', 'Arun Kumar S', '6/1438, Srivillputhur Road, Sachiyapuram, Sivakasi\r\n', '31-03-2019', '1080782979Photo.jpg', '1476776045Birth Certificate.jpg', 'VDCA-10068', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10069, '', 'Sasmitha Sri A', 'Female', 'Sivakasi', 'V.S.K.D Mat Hr Sec School', '', '', '', '17-02-2010', '9943396625', '', 'Amarnath Prathap V', '1/524, Rajv Ganthi Nagar, Sithurajapuram, Sivakasi', '31-03-2019', '361127944Photo.jpg', '1995552833Birth Certificate.jpg', 'VDCA-10069', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10070, '', 'Mahini Roshini S', 'Female', 'Sivakasi', 'V.S.K.D Mat Hr Sec School', '', '', '', '23-06-2010', '8072084185', '', '', '266, Ammankovil Patti Middle Street, Sivakasi', '31-03-2019', '1245369156Photo.jpg', '198666033Birth Certificate.jpg', 'VDCA-10070', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10071, '', 'Vishak Honey P', 'Female', 'Sivakasi', 'V.S.K.D Mat Hr Sec School', '', '', '', '04-12-2010', '9943702973', '', 'Prassanna M', '90 A, Karuppanan Street, Sivakasi.', '31-03-2019', '1088143617Photo.jpg', '443383165Birth Certificate.jpg', 'VDCA-10071', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10072, '', 'Siddarth Abinav Raja M', 'Male', 'Sivakasi', 'Mount Litera, Sivakasi', '', '', '', '24-08-2011', '04562-225193', 'Banumurus@gmail.com', 'Murugesa Raja G', '267, Dhamayanthi Bhavanam, Manicka Vinayagar Colony, Police Station Road , Sivakasi.', '31-03-2019', '720669612Photo.jpg', '306111648Birth Certificate.jpg', 'VDCA-10072', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10073, '', 'Anusha S', 'Female', 'Sivakasi', 'V.S.K.D Mat Hr Sec School', '', '', '', '18-12-2010', '9894884938', '', 'Siva Sankar N', '2/584A, Kanna Nagar, Sivakasi.', '31-03-2019', '293724408Photo.jpg', '1047255245Birth Certificate.jpg', 'VDCA-10073', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10074, '', 'Menaga J', 'Female', 'Sivakasi', 'S.H.N Girls School Sivakasi', '', '', '', '07-11-2004', '9159133979', 'jeyabhasher@gmail.com', 'Jeya Bhasker G', '2/2139/11, Sri srinivasa Nagar, Sivakasi.', '31-03-2020', '1481854410Photo.jpg', '190795331Birth Certificate.jpg', 'VDCA-10074', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10075, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '21-08-2018', '', '', 'VDCA-10075', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10076, '', 'Harini M D', 'Female', 'Sivakasi West', 'A.A.A', '', '', '', '26-10-2009', '9994454253', 'rammani497@gmail.com', 'Manikandan R', '2/1677 Chellappa Nagar, Reserveline, Sivakasi West.', '31-03-2020', '1759566498Photo.jpg', '950171660Birth Certificate.jpg', 'VDCA-10076', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10077, '', 'Reasanna P', 'Male', 'Thiruthangal', 'Sunderavel Mat Hr Sec School', '', '', '', '02-03-2008', '9566519082', 'Murugalakshmi889@gmail.com', 'Prakash N', 'C/15 S N Puram Road, Thiruthuangal.\r\n', '31-03-2019', '1741169679Photo.jpg', '1170733382Birth Certificate.jpg', 'VDCA-10077', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10078, '', 'Gokul R', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '24-07-2009', '9443854625', 'jayadurgaa@gmail.com', 'Ravisankar S', 'New378,Old 109 C, Amman Kovil Patti South Street, Sivakasi.', '31-03-2019', '45253373Photo.jpg', '111384646Birth Certificate.jpg', 'VDCA-10078', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10079, '', 'Vasantha Balamurugan S', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '14-08-2009', '82703294078', '', 'Sambukeswaran S', '5/2900, Muneeswaran Colony, Sivakasi.', '31-03-2019', '1959071157Photo.jpg', '685077305Birth Certificate.jpg', 'VDCA-10079', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10080, '', 'Mohiha G V', 'Female', 'Sivakasi', '', '', '', '', '09-12-2009', '9047737827', '', 'Venkatesh G', '2/692, K.S.A Rajadurai Nagar, Vilampatti road, Sivakasi', '31-03-2019', '1120105433Photo.jpg', '389448613Birth Certificate.jpg', 'VDCA-10080', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10081, '', 'Thurubaveal A', 'Male', 'Sivakasi', 'Mount Litera, Sivakasi', '', '', '', '05-09-2008', '9894258021', '', 'Amarjith Babu G', '21C, N.K.R Periyannan Road, Kaliyappa Nagar, Vilampatti Road, Sivakasi.', '31-03-2019', '13299431Photo.jpg', '1307440102Birth Certificate.jpg', 'VDCA-10081', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10082, '', 'Ragavan R K', 'Male', 'Sivakasi', 'Kamaraajar Junier School', '', '', '', '02-06-2009', '9443134244', '', 'Ramesh Kannan K', '4/8/295, Nehruji Nagar, Reserveline, Sivakasi.', '31-03-2019', '199519869Photo.jpg', '1183900708Birth Certificate.jpg', 'VDCA-10082', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10083, '', 'Akshat Agarwal M', 'Male', 'Sivakasi', 'YRTV', '', '', '', '10-12-2008', '9442610881', '', 'Mukesh Agarwal ', '7K, Velayutham Road, Sivakasi.', '31-03-2019', '1452501353Photo.jpg', '1047207954Birth Certificate.jpg', 'VDCA-10083', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10084, '', 'Supriya S', 'Female', 'Sivakasi', 'YRTV', '', '', '', '27-01-2008', '9578370955', '', 'Shenbagaram C', '201/4C, Kamaraj Road, Sivakasi', '31-03-2019', '555924557Photo.jpg', '262596646Birth Certificate.jpg', 'VDCA-10084', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10085, '', 'Santhika K', 'Female', 'Sivakasi', 'YRTV', '', '', '', '27-11-2008', '9487546047', '', 'Karthikeya Kumar R', '498,B Thendral Nagar, Near Railway station, Sivakasi', '31-03-2019', '1973771517Photo.jpg', '460161186Birth Certificate.jpg', 'VDCA-10085', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10086, '', 'Amrutha A', 'Female', 'Sivakasi', 'YRTV', '', '', '', '16-05-2008', '9994599950', '', 'Annamalai Raj S', '115,H Velayutham Road, Sivakasi', '31-03-2019', '870054876Photo.jpg', '349289451Birth Certificate.jpg', 'VDCA-10086', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10087, '', 'RudraSayee R', 'Female', 'Sivakasi', 'Hayagirivas International School', '', '', '', '07-08-2008', '9894056299', 'ramoffsetprinters@gmail.com', 'Ramasamy S', '4/1672 B Kannanagar Road, Sivakasi,', '31-03-2020', '340932014Photo.jpg', '1173863081Birth Certificate.jpg', 'VDCA-10087', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10088, '', 'Madesh J J', 'Male', 'Sivakasi', 'YRTV', '', '', '', '30-05-2009', '9443117054', '', 'Jagadash J', '2/174, Renga Pasam Angar, Satchiyapuram, Sivakasi', '31-03-2019', '754955950Photo.jpg', '1078978474Birth Certificate.jpg', 'VDCA-10088', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10089, '', 'Hari Prasath T', 'Male', 'Sivakasi', 'Kamaraajar Junier School', '', '', '', '14-09-2008', '9789566301', 'thiruharis@gmail.com', 'Thirupathi A', '23D,Kaliappa Nagar, Vilampatti Road,\r\nSivakasi\r\n', '31-03-2019', '182804021Photo.jpg', '579717988Birth Certificate.jpg', 'VDCA-10089', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10090, '', 'Harshitha S', 'Female', 'Rajapalayam', '', '', '', '', '04-06-2008', '9486738430', '', 'Saravanan A', '14A3,J.P Mill Road, Rajapalayam', '31-03-2019', '16948895071.Harshitha S1.jpg', '13776146351.Harshitha S.jpg', 'VDCA-10090', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10091, '', 'Praneash B', 'Male', 'Virudhunagar', '', '', '', '', '23-05-2010', '9443126937', '', 'Balamurugan R', '2/1/9A, Kattalai Patty\r\n', '31-03-2019', '2141844301Photo.jpg', '814716437Birth Certificate.jpg', 'VDCA-10091', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10092, '', 'Karthik Kumar M S', 'Male', '', 'K.Kamarajar Mat Hr Sec School', '', '', '', '13-09-2008', '9444548041', '', 'Soundarapandian K M S', '', '31-03-2019', '786678272Photo.jpg', '1411623883Birth Certificate.jpg', 'VDCA-10092', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10093, '', 'Alahu Shri A', 'Female', 'Sivakasi', 'V.S.K.D Mat Hr Sec School', '', '', '', '27-08-2009', '9787009887', '', 'Anand R', '', '31-03-2019', '1076186523Photo.jpg', '280939318Birth Certificate.jpg', 'VDCA-10093', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10094, '', 'Akshaya Shri S', 'Female', '', 'V.S.K.D Mat Hr Sec School', '', '', '', '07-08-2009', '9943364435', '', 'Selvakumar C', '', '31-03-2019', '137317095Photo.jpg', '146147936Birth Certificate.jpg', 'VDCA-10094', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10095, '', 'Ranjith Sakthi S', 'Male', 'Sivakasi', 'Sivkasi Lions Mat Hr Sec School', '', '', '', '07-08-2008', '9443718123', 'Sakiv2k4u@gmail.com', 'Sakthinath M', '172/A1 Thiruthangal Road, Sivakasi', '31-03-2019', '1339646914Photo.jpg', '1647421449Birth Certificate.jpg', 'VDCA-10095', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10096, '', 'Prakash Raj A', 'Male', 'Thiruthangal', 'Glory Matric Hr Sec School', '', '', '', '04-09-2009', '9790191795', '', 'Anthony Raj F', '216/14, Muniyasami Nagar, Thiruthangal\r\n', '31-03-2019', '745760006Photo.jpg', '1911686655Birth Certificate.jpg', 'VDCA-10096', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10097, '', 'Shriyaash J', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '28-06-2008', '7639151997', '', 'Jegasesan K K', 'Satchiyapuram, Aasari Colony, 4th Street, Sivakasi\r\n', '31-03-2019', '1753494855Photo.jpg', '1827935089Birth Certificate.jpg', 'VDCA-10097', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10098, '', 'Shivapriya S', 'Female', 'Sivakasi', '', '', '', '', '15-05-2008', '9443570323', '', 'Senthil Kumar R', '344,P.K.S.A Arumugam Road, Sivakasi', '31-03-2019', '1584158672Photo.jpg', '22623198Birth Certificate.jpg', 'VDCA-10098', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10099, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10099', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10100, '', 'shyam harish K G', 'Male', 'Sivakasi', '', '', '', '', '07-03-2008', '9843629357', '', 'Ganesh Kumar K', '4/1683, Hussian Colony, Sivakasi', '31-03-2019', '680880097Photo.jpg', '314401579Birth Certificate.jpg', 'VDCA-10100', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10101, '', 'Divakar S', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '25-12-2008', '9443571074', '', 'Senthil Kumar P', 'Reserveline, Arumugam Colony, Sivakasi', '31-03-2019', '1249467017Photo.jpg', '1477323694Birth Certificate.jpg', 'VDCA-10101', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10102, '', 'Kabilan J', 'Male', 'Sivakasi', 'Mount Litera, Sivakasi', '', '', '', '26-05-2009', '9486858987', '', 'Jeyachandran', 'Samapuranm Colony,\r\nRathinavilas Stop, Sivakasi', '31-03-2019', '924740918Photo.jpg', '511053529Birth Certificate.jpg', 'VDCA-10102', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10103, '', 'Nimalan S', 'Male', 'Sivakasi', '', '', '', '', '26-01-2008', '9976643123', '', 'Sentil Kumar R', '62/5/3B, Thirupathi Nagar', '31-03-2019', '1692884006Photo.jpg', '391108069Birth Certificate.jpg', 'VDCA-10103', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10104, '', 'Sanjay T', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '01-09-2008', '9487592792', 'Sriabiramipolypack@gmail.com', 'Tanga Thirupathi C', '7/320 Muthuramalinga Nagar, Naranapuram Road, Sivakasi.', '31-03-2019', '1006318603Photo.jpg', '1900577414Birth Certificate.jpg', 'VDCA-10104', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10105, '', 'Kubherr Ayyan P', 'Male', 'Sivakasi', 'S.S.V.M Hr Sec School.', '', '', '', '16-08-2008', '9487599980', '', 'Patturajan M', '269F, Sri Lakshmi Nivas, Rettapalam, Periyakulam Trunk Road, Sivakasi.', '31-03-2019', '1884286402Photo.jpg', '356367368Birth Certificate.jpg', 'VDCA-10105', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10106, '', 'Siva S', 'Male', 'Sivakasi', 'Glory Matric Hr Sec School', '', '', '', '11-02-2008', '9843434397', '', 'Santhosh V', '1299 Solai Colony', '31-03-2019', '763916009Photo.jpg', '1621542834Birth Certificate.jpg', 'VDCA-10106', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10107, '', 'Shanmugesh V', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '06-12-2008', '9344881181', '', 'Vairaprakasam C', '103E/3, Arumugam Road, Sivakasi', '31-03-2019', '1704148351Photo.jpg', '1333709703Birth Certificate.jpg', 'VDCA-10107', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10108, '', 'Aathijaya Prakash A', 'Male', 'Sivakasi', '', '', '', '', '07-06-2009', '9786508421', 'veeramaniarul1@gmail.com', 'Arulanatham V', '107E, P.K.N Road,\r\nSivakasi', '31-03-2019', '614846897Photo.jpg', '686002010Birth Certificate.jpg', 'VDCA-10108', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10109, '', 'Vigneswaran K', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '24-06-2008', '9942208841', '', 'Karthikeyan G', '14B Ganthi Road, Mani Nagar, Sivakasi', '31-03-2019', '1885003943Photo.jpg', '815599477Birth Certificate.jpg', 'VDCA-10109', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10110, '', 'Sahanaa V', 'Female', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '14-10-2008', '9943703141', '', 'Vairamuthu R', '1835, P K N Road, Solai Colony, Sivakasi', '31-03-2019', '1903872523Photo.jpg', '359441676Birth Certificate.jpg', 'VDCA-10110', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10111, '', 'Oviya S K', 'Female', 'Sivakasi', '', '', '', '', '17-11-2010', '6381597553', '', 'Saravanan P', 'D800, Mundaganagar Street, Sivaksi.', '31-03-2019', '2067796118Photo.jpg', '1483305466Birth Certificate.jpg', 'VDCA-10111', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10112, '', 'Shoniya A', 'Female', 'Sivakasi', 'Mount Litera, Sivakasi', '', '', '', '23-12-2008', '9894661141', 'rockashoh@gmail.com', 'Ashok Kumar R', '1564, P.K.N Road, Sivakasi', '31-03-2019', '485716246Photo.jpg', '497222177Birth Certificate.jpg', 'VDCA-10112', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10113, '', 'Kiruhanika B', 'Female', 'Srivilliputhur', 'Linga Global School', '', '', '', '22-12-2008', '9952084512', '', 'Balamuruga B', '5/790, Sri Ram Nagar, West Kunnur Post, Srivillputhur.', '31-03-2019', '665549734Photo.jpg', '1530159431Birth Certificate.jpg', 'VDCA-10113', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10114, '', 'Kaleeswari K', 'Female', 'Vilampatti', 'A.V.M MArimuthu Nadar Hr Sec School', '', '', '', '23-02-2003', '9500847211', '', 'Karthigairajan L', '3/342A, Teachers Colony, Vilampatti.', '31-03-2020', '1489945912Photo.jpg', '1039181729Birth Certificate.jpg', 'VDCA-10114', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10115, '', 'Rama Guru R', 'Male', 'Rajapalayam', 'Living Hope Marric School', '', '', '', '20-09-2003', '9842429814', '', 'Rama Chandran', 'solupuram, Rajapalayam.', '31-03-2019', '1657527665Photo.jpg', '1829817373Birth Certificate.jpg', 'VDCA-10115', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10116, '', 'Ramakrishnan S', 'Male', 'Rajapalayam', 'N.A Annaparaja memoriel Hr.Sec School', '', '', '', '04-01-2003', '9698030548', '', 'Samuthiram R', '20, Gnana Sommanathapuran, Rajapalayam.', '31-03-2019', '558496368Photo.jpg', '877777401Birth Certificate.jpg', 'VDCA-10116', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10117, '', 'Stone Gold M', 'Male', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '11-01-2003', '9894916262', '', 'Muthuvel A', '125/1,11st Street, Rajiv Ganthi Nagar, Srivilliputhur.', '31-03-2019', '695748895Photo.jpg', '323857433Birth Certificate.jpg', 'VDCA-10117', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10118, '', 'Lavanya P', 'Female', 'Sivakasi', 'Jaycees Matric Hr Sec School', '', '', '', '06-08-2007', '9171566226', 'premsvks@gmail.com', 'Prem Anand R M', '2/633, K.S.A, Rajadurai Nagar, Sivakasi.', '31-03-2019', '867871010Photo.jpg', '1320451842Birth Certificate.jpg', 'VDCA-10118', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10119, '', 'Kirthivarashan S', 'Male', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '04-10-2006', '9940997369', 'kirtisrini@gmail.com', 'Srinivasan V', '43/3, Periya Peumal Keela Mada Street, Srivilliputhur.', '31-03-2019', '36433139Karthivarshan S1.jpg', '1009936413Karthivarshan S.jpg', 'VDCA-10119', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10120, '', 'Kavya Sri G', 'Female', 'Srivilliputhur', 'Valluvar Vidhyalaya', '', '', '', '10-04-2010', '9443207681', '', 'Govindha Raj M', '5C-1-10 Pandit Jawaharlal Nehru Road, Srivilliputhur.', '31-03-2019', '1280465318Photo.jpg', '143987045Birth Certificate.jpg', 'VDCA-10120', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10121, '', 'Kishore Kanth R', 'Male', 'Srivilliputhur', '', '', '', '', '01-08-2005', '9629931084', '', 'Ravi Chandran M', '22C, Sakkarai Kulam Street, Srivilliputhur.\r\n', '31-03-2019', '756158757Photo.jpg', '1158526863Birth Certificate.jpg', 'VDCA-10121', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10122, '', 'Kumareswari V', 'Female', 'Rajapalayam', 'Govt Hr Sec School, Kilavakulam', '', '', '', '01-12-2007', '9655813693', '', 'Vinayagamoorthy L', 'South Street, Kilavikulam, Rajapalayam.', '31-03-2019', '343181668Photo.jpg', '784522226Birth Certificate.jpg', 'VDCA-10122', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10123, '', 'Alageswari S', 'Female', 'Kilavikulam', 'Govt Hr Sec School, Kilavakulam', '', '', '', '16-12-2003', '9159967123', '', 'Sundharaj', '314/1, Colony Street, Kilavikulam.', '31-03-2019', '311849360Photo.jpg', '1078849435Birth Certificate.jpg', 'VDCA-10123', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10124, '', 'Madhan D', 'Male', 'Rajapalayam', 'Nadar Mat Hr Sec School', '', '', '', '24-04-2006', '8098455235', '', 'Dharma Ligam S', '14 Ambadkar Nagar, Rajur College (opp), Rajapalayam. ', '31-03-2019', '1881223908Photo.jpg', '517439653Birth Certificate.jpg', 'VDCA-10124', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10125, '', 'Madhavan D', 'Male', 'Rajapalayam', 'Nadar Mat Hr Sec School', '', '', '', '09-06-2004', '8098455235', '', 'Dharma Ligam S', '141, Ambadker Nagar, Najur College (opp), Rajapalayam.', '31-03-2019', '1713122308Photo.jpg', '5053787Birth Certificate.jpg', 'VDCA-10125', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10126, '', 'Menaka M', 'Female', 'Asilapuram', 'Living Hope Marric School', '', '', '', '07-12-2009', '8870024670', '', 'Meirandan Sethupathi M', '18/C/15, South Street, Pillayarkovil Street, Asilapuram ', '31-03-2019', '401972506Photo.jpg', '2092356436Birth Certificate.jpg', 'VDCA-10126', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10127, '', 'Maarshal Stalinn J S', 'Male', 'Srivilliputhur', 'Maharishi Vidya Mandir(CBSC) ', '', '', '', '01-05-2009', '9976962930', '', 'Stalin J', '19/3 Middle Street, Kammapatti, Srivilliputhur.', '31-03-2019', '1568904511Photo.jpg', '783727900Birth Certificate.jpg', 'VDCA-10127', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10128, '', 'Manoj Kumar M', 'Male', 'Kilavikulam', '', '', '', '', '02-10-2006', '9751136580', '', 'Marimuthu M', '1/213, Middle Street, Kilavikulam', '31-03-2019', '1831700492Photo.jpg', '1859366795Birth Certificate.jpg', 'VDCA-10128', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10129, '', 'Logeshwaran T', 'Male', 'Virudhunagar', 'R.C Hr Sec School', '', '', '', '24-03-2004', '9442840480', '', 'Thangaraj M', '16, Sivathi Puram Street, Muthuraman Patti', '31-03-2019', '919165445Photo.jpg', '1747522964Birth Certificate.jpg', 'VDCA-10129', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10130, '', 'Shailenthira Kumar P', 'Male', '', 'Sri Ramana Acadamy', '', '', '', '23-11-2008', '9750497448', '', 'Puvanenthiran R', '557, West street, Asilapuram, Solapuram Post ', '31-03-2019', '1956210142Photo.jpg', '1264134201Birth Certificate.jpg', 'VDCA-10130', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10131, '', 'Sriramachandran P', 'Male', '', 'Sri Ramana Acadamy', '', '', '', '22-12-2005', '9750497448', '', 'Puvanenthiran R', '557, West Street, Asilapuram, Solapuram Post.', '31-03-2019', '1976819690Photo.jpg', '515898495Birth Certificate.jpg', 'VDCA-10131', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10132, '', 'Solai Ram Prasad M', 'Male', 'Srivilliputhur', '', '', '', '', '20-02-2009', '8220355717', 'r.mayap@gmail.com', 'Mayaperumal R', '54, Perumal Chettiar Street, Mamsapuram (post), Srivilliputhur.', '31-03-2019', '1524338086Photo.jpg', '1708346676Birth Certificate.jpg', 'VDCA-10132', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10133, '', 'Solai Pooja Lakshmi M', 'Female', 'Srivilliputhur', '', '', '', '', '20-02-2009', '8220355717', 'r.mayap@gmail.com', 'Mayaperumal R', '54,Perumal Chettiar street, Mamsapuram, Srivilliputhur', '31-03-2019', '389701492Photo.jpg', '1192922438Birth Certificate.jpg', 'VDCA-10133', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10134, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10134', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10135, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10135', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10136, '', 'Selva Bindha S', 'Female', 'Srivilliputhur', '', '', '', '', '06-04-2009', '9448381683', '', 'Senthamarai K', '330,Thiruvannamalai Road, Srivilliputhur', '31-03-2019', '591590920Photo.jpg', '1864579397Birth Certificate.jpg', 'VDCA-10136', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10137, '', 'Varshini P K', 'Female', 'Srivilliputhur', '', '', '', '', '18-07-2009', '9944160073', 'grlakshmi03@gmail.com', 'Kalidhasan K P', '159/5-6c Rottadi Street, Watrap', '31-03-2019', '1316793991Photo.jpg', '1443526392Birth Certificate.jpg', 'VDCA-10137', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10138, '', 'Veeralakshmi T', 'Female', 'Rajapalayam', 'P.A.C.R Ammani Ammal Girls School', '', '', '', '12-04-2007', '9976535398', '', 'Thirupathi R', '2/232, Kumaran Street, Rajapalayam.', '31-03-2019', '557340339Photo.jpg', '1462143910Birth Certificate.jpg', 'VDCA-10138', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10139, '', 'Visvesh M', 'Male', 'Virudhunagar', 'V.M.G.R.R Sri saratha Sakthi School', '', '', '', '20-07-2006', '9944930033', '', 'Manickam.P', '181,6B 2APound Street, Muthuramanpatti, Viruthunagar.', '31-03-2020', '1088100900Photo.jpg', '1783123968Birth Certificate.jpg', 'VDCA-10139', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10140, '', 'Vishnu Dharshan V', 'Male', '', '', '', '', '', '28-05-2006', '9842109638', 'yuvarani9842@gmail.com', 'Vairamuthu G', '66, Thambapalli Street', '31-03-2019', '881530747Photo.jpg', '534613918Birth Certificate.jpg', 'VDCA-10140', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10141, '', 'Vijayraj J', 'Male', 'Rajapalayam', '', '', '', '', '13-07-2008', '7010742011', '', 'Jeyaprakash K', '218,Aiagai Nagar, Rajapalayam.', '31-03-2019', '397709657Photo.jpg', '308921599Birth Certificate.jpg', 'VDCA-10141', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10142, '', 'Thilothama R', 'Female', 'Srivilliputhur', '', '', '', '', '04-01-2008', '9629931084', '', 'Ravi Chandran M', '22C, Sakkarai Kulam Street, Srivilliputhur.', '31-03-2019', '881513378Photo.jpg', '1035198404Birth Certificate.jpg', 'VDCA-10142', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10143, '', 'Sri Ganesh R', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '03-12-2006', '9843183480', '', 'Ramasubramanian', 'Andanpuram, Prestige Nagar, Rajapalayam.', '31-03-2019', '1048130051Photo.jpg', '446737869Birth Certificate.jpg', 'VDCA-10143', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10144, '', 'Swathi M', 'Female', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '29-08-2006', '9597208662', '', 'Mariappan V', 'Mowshin Road, Rajapalayam', '31-03-2019', '1113451566Photo.jpg', '1900634791Birth Certificate.jpg', 'VDCA-10144', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10145, '', 'Siva Kumar M', 'Male', '', 'T.N.P.M Marimuthunadar Sec School', '', '', '', '05-10-2007', '9345972723', '', 'Marimuthu C', 'Thalavaipuram', '31-03-2019', '1443373774Photo.jpg', '1921074728Birth Certificate.jpg', 'VDCA-10145', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10146, '', 'Suriya G', 'Male', 'Srivilliputhur ', 'C.M.S Hr Sec School', '', '', '', '04-11-2005', '9600262162', 'Muthuvairam61@gmail.com', 'Ganesh Kumar P', '64, Raittan Patti Street, Srivilliputhur', '31-03-2019', '1393056641Photo.jpg', '1410529747Birth Certificate.jpg', 'VDCA-10146', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10147, '', 'Sri Rama Sidhan B', 'Male', '', 'Palaniappa Hr Sec School', '', '', '', '16-06-2005', '8489820304', '', 'Packeeswaran P', '84A, RajaVinayagar Kovil Street', '31-03-2019', '1821267911Photo.jpg', '119972609Birth Certificate.jpg', 'VDCA-10147', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10148, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10148', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10149, '', 'Nithish Kumar P', 'Male', 'Arupukottai', '', '', '', '', '23-04-2008', '9791915938', '', 'Punitha Sekar A', '3/986 Gangai Street, Aathipatty, Jeyaram Nagar, Arupukottai', '31-03-2019', '1542001274Photo.jpg', '1390346744Birth Certificate.jpg', 'VDCA-10149', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10150, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10150', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10151, '', 'Muthuraj P', 'Male', '', 'Chinmaya Vidyalaya SLR', '', '', '', '16-06-2009', '9842520809', '', 'Paramasivam K', '', '31-03-2019', '1569858149Photo.jpg', '1969362926Birth Certificate.jpg', 'VDCA-10151', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10152, '', 'sanjana R', 'Female', 'Rajapalayam', '', '', '', '', '22-07-2001', '8883780404', 'ramasubbu.raja@gmail.com', 'Ramasubramaniya Raja S', '73, Selalpatti North Street, Rajapalayam', '31-03-2019', '2043713127Photo.jpg', '2094743942Birth Certificate.jpg', 'VDCA-10152', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10153, '', 'Selva Priya K', 'Female', 'Kilavikulam', '', '', '', '', '25-12-2006', '9047467430', '', 'Kamaraj M', '1/214, Middle Street, Kilavikulam', '03-03-2019', '1712774960Photo.jpg', '480941200Birth Certificate.jpg', 'VDCA-10153', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10154, '', 'Risikarthika M', 'Female', '', '', '', '', '', '23-03-2008', '9042949592', '', 'Muneeswaran K', 'Sakthi Nagar', '31-03-2019', '311445629Photo.jpg', '302979739Birth Certificate.jpg', 'VDCA-10154', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10155, '', 'Umaa R', 'Female', 'Sivakasi East ', 'V.S.K.D Mat Hr Sec School', '', '', '', '01-08-2007', '9443426045', 'msckavi2011@gmail.com', 'Ramasamy P', '2/190 Bharma Colony, Narnapuram Road, Sivakasi', '31-03-2019', '1484790265Photo.jpg', '1480017995Birth Certificate.jpg', 'VDCA-10155', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10156, '25999800', 'Rajeswari E', 'Female', 'Srivilliputhur', 'M.N.R.D Girls Hr Sec School', '1139', '', '', '31-12-2005', '9994864179', '', 'Eswaran A', '24A,Sivagnanapuram Street, srivillipthur', '31-03-2020', '575311736Photo.jpg', '1599454482Birth Certificate.jpg', 'VDCA-10156', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10157, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10157', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10158, '', 'Raman M', 'Male', 'Virudhunagar', 'T.N.P.M Marimuthunadar Sec School', '', '', '', '04-03-2007', '9938084423', '', 'Manikandan S', 'Vadamoorthy Lingam Street, Virythunagar', '31-03-2019', '1530874287Photo.jpg', '1165564279Birth Certificate.jpg', 'VDCA-10158', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10159, '', 'Padmesh S M', 'Male', 'Madura', 'Linga Global School', '', '', '', '30-08-2009', '9443422342', '', 'Senthil Kumar ', '1-177I2 K.R.K Nagar,\r\nPeraiyur (T.K), Madura', '31-03-2019', '810240160Photo.jpg', '655728202Birth Certificate.jpg', 'VDCA-10159', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00');
INSERT INTO `vdca_players_db` (`id`, `fide_id`, `name`, `gender`, `city`, `Institution`, `rating`, `aicf`, `tnsca`, `dob`, `phone_no`, `email_id`, `father_name`, `address`, `lapsed`, `birth_cf`, `photo`, `vdca_id`, `otp`, `year`, `ststus`, `cip`, `cby`, `cdate`, `mby`, `mip`, `mdate`) VALUES
(10160, '', 'Promoj J', 'Male', '', 'Ananda Vidyalaya Matric Hr School', '', '', '', '11-10-2005', '9715611149', '', 'Jaya Mohan J', '288/260 Sakaraja Kottai Street,', '31-03-2019', '1169974587Photo.jpg', '934054615Birth Certificate.jpg', 'VDCA-10160', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10161, '', 'Poorna Santhoshi', 'Female', 'Rajapalayam', 'Chinmaya Vidyalaya SLR', '', '', '', '28-01-2009', '9443569774', '', 'Sridhar S M', 'Lotus House, Sanjivinathapuram 2d Street, J.P Mill Road, Rajapalayam.', '31-03-2019', '883866397Photo.jpg', '560578778Birth Certificate.jpg', 'VDCA-10161', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10162, '', 'Nikhil Kumar M', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '12-12-2007', '9894154781', 'nikilkrishna@gmail.com', 'Murali Krishnan S', '161,Sakthi Nagar, Senbagathoppu Road, Rajapalayam.', '31-03-2019', '656676666Photo.jpg', '2098854105Birth Certificate.jpg', 'VDCA-10162', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10163, '', 'Ahilesh T', 'Male', 'Virudhunagar', '', '', '', '', '28-03-2007', '9489268666', '', 'Thilakar N', '32,Vadiyan Street, Viruthunagar.', '31-03-2019', '650637847Photo.jpg', '1641352478Birth Certificate.jpg', 'VDCA-10163', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10164, '', 'Abinaya P', 'Female', 'Asilapuram', 'Living Hope Matric School', '', '', '', '29-10-2009', '9790494126', '', 'Pichaikani S', '397/1 Railway Feedar Road, Asilapuram.', '31-03-2019', '950887752Photo.jpg', '66406153Birth Certificate.jpg', 'VDCA-10164', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10165, '', 'Abinaya P', 'Female', 'Asilapuram', 'Living Hope Matric School', '', '', '', '29-10-2009', '9790494126', '', 'Pichaikani S', '397/1 Railway Feedar Road, Asilapuram.', '31-03-2019', '987177609Photo.jpg', '1290142786Birth Certificate.jpg', 'VDCA-10165', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10166, '25989383', 'Arav A', 'Male', 'Virudhunagar', 'Brilliand Chess Acadamy', '', '', '', '23-11-2012', '9789493817', 'Vaishaliamar27@gmail.com', 'Amar Nagarajan ', '75/6B, ICA Colony, Viruthunagar.', '31-03-2020', '346646009Photo.jpg', '2052211455Birth Certificate.jpg', 'VDCA-10166', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10167, '', 'Ahilan A R', 'Male', '', 'APS Chess Acadamy', '', '', '', '19-10-2007', '9952533289', '', 'Ramaraju A', 'Javagarmaidhanam', '31-03-2019', '626265930Photo.jpg', '1526141678Birth Certificate.jpg', 'VDCA-10167', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10168, '25999460', 'Reya Bala Vani P', 'Female', 'Rajapalayam', 'Chinmaya Vidyalaya SLR', '', '', '', '26-12-2005', '04563223799', 'reyapaul26@gmail.com', 'Pauraj S', '1/20 Banker colony, Rajapalayam.', '31-03-2020', '731474511Photo.jpg', '2114945858Birth Certificate.jpg', 'VDCA-10168', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10169, '', 'Ragavan M', 'Male', 'Kunnakudi', 'Living Hope Matric School', '', '', '', '09-03-2008', '9843559904', '', 'Muthuveli V', 'Kunnakudi', '31-03-2019', '1530034807Photo.jpg', '339670165Birth Certificate.jpg', 'VDCA-10169', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10170, '', 'Ram Ganesh K', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '27-06-2006', '9600863090', 'rchitra25486@gmail.com', 'Kamala Kannan P', '11/234 A57, Absara Akilash Nagar, P.R.R Nagar, Rajapalayam', '31-03-2019', '1298178330Photo.jpg', '2132124787Birth Certificate.jpg', 'VDCA-10170', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10171, '', 'Vivek Arun N R', 'Male', 'Rajapalayam', '', '', '', '', '31-05-2003', '9443132022', 'chitrad976@gmail.com', 'Rajndiran N K', '436, Darmaraj Big Street', '31-03-2020', '753603219Photo.jpg', '643612382Birth Certificate.jpg', 'VDCA-10171', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10172, '', 'Yuvan Selvam S V', 'Male', 'Rajapalayam', 'Chinmaya Vidyalaya SLR', '', '', '', '09-07-2006', '9095220254', 'yuvanselvam626117@gmail.com', 'Sakthi Kumara Guru S', '48 P.K kuppusamy Raj Street, Rajapalayam', '31-03-2019', '1384563598Photo.jpg', '1244286347Birth Certificate.jpg', 'VDCA-10172', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10173, '', 'Bavya Suryasree D', 'Female', 'Sivakasi', 'Jaycees Matric Hr Sec School', '', '', '', '02-09-2007', '9787634341', 'bavisang@gmail.com', 'Dhanapalraj S', '1/100, Amman Kovil street, Vilampatti, Sivakasi.', '31-03-2019', '1879371722Photo.jpg', '1381927680Birth Certificate.jpg', 'VDCA-10173', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10174, '', 'Balayogesh A', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '26-01-2006', '9486447666', 'ashokkumar27174@gmail.com', 'Ashok Kumar P', '11/339J1 5th Cross Street, V O C Nagar, Rajapalayam', '31-03-2019', '291603894Photo.jpg', '294934506Birth Certificate.jpg', 'VDCA-10174', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10175, '', 'Bhavesh S', 'Male', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '23-04-2010', '9994752114', 'selvaboops.balu@gmail.com', 'Selva Bhoopathy B', '2/758, Pasumpon Nagar Near, Krishnan Kovil Street, Srivilliputhur', '31-03-2019', '361397764Bhavesh1.jpg', '415548345Bhavesh.jpg', 'VDCA-10175', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10176, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10176', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10177, '', 'Anandavel N', 'Male', 'Virudhunagar', 'Kendra Vidyalaya- Viruthunagar', '', '', '', '09-08-2004', '9488001885', 'bhavichuti15@gmail.com', 'Nagajan R', '15/9H/24E, 1st Street, Alampatti', '31-03-2019', '1437290812Photo.jpg', '1826355017Birth Certificate.jpg', 'VDCA-10177', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10178, '', 'Arjun J', 'Male', 'Virudhunagar', 'T.N.P.M Marimuthunadar Sec School', '', '', '', '26-06-2007', '8940026901', '', 'Jhanga Mari Muthu', '2/150, South Street, Jamin Kollam Kondan, Viruthunagar', '31-03-2019', '1603864350Photo.jpg', '1443273892Birth Certificate.jpg', 'VDCA-10178', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10179, '', 'Aadhithyaa T', 'Male', 'Rajapalayam', 'P.A.C.R Ammani Ammal Girls School', '', '', '', '22-10-2005', '9976535398', '', 'Thirupathi R ', '233/4 Selam North Street', '31-03-2019', '1859331414Photo.jpg', '1385283852Birth Certificate.jpg', 'VDCA-10179', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10180, '', 'Akshay J', 'Male', 'Rajapalayam', 'Prasatha', '', '', '', '23-05-2011', '9715611149', '', 'Jaya Mohan S', '288/260, Sakaraja Kottai Street, Rajapalayam', '31-03-2019', '238081838Photo.jpg', '1881231341Birth Certificate.jpg', 'VDCA-10180', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10181, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10181', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10182, '', 'Jayanthi P', 'Female', 'Rajapalayam', 'Living Hope Matric School', '', '', '', '29-06-2009', '9698685332', '', 'Praphu J', 'Muthukudi, Rajapalayam', '31-03-2019', '908760204Photo.jpg', '1370938633Birth Certificate.jpg', 'VDCA-10182', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10183, '', 'Johnson R', 'Male', 'Virudhunagar', 'T.N.P.M Marimuthunadar Sec School', '', '', '', '01-05-2007', '9786183526', '', 'Rama Moorthy', '3/775, Pillayar Kovil Street, Viruthunagar', '31-03-2019', '477731062Photo.jpg', '436110343Birth Certificate.jpg', 'VDCA-10183', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10184, '', 'Ilayanithi J', 'Male', 'Rajapalayam', 'Nadar Mat Hr Sec School', '', '', '', '01-01-2010', '9498184561', '', 'Jeyaraj T', '30/50A, Othpatti Street, Rajapalayam', '31-03-2019', '929785569Photo.jpg', '1593443764Birth Certificate.jpg', 'VDCA-10184', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10185, '', 'Hari Prasaadh K', 'Male', 'Srivilliputhur', 'G.S. Hindu Hr Sec School', '', '', '', '25-11-2006', '8220312572', '', 'Krishnasamy A', '74, Mettu Street, Srivilliputhur', '31-03-2019', '765642026Photo.jpg', '522667184Hari Prasaadh Krishnasamy.jpg', 'VDCA-10185', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10186, '', 'Hariharasudhan A', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '19-01-2008', '9486447666', 'ashokkumar27174@gmail.com', 'Ashok Kumar P', '11/33,5th Cross Street, VOC Nagar, Rajapalayam', '31-03-2019', '762663179Photo.jpg', '809115329Birth Certificate.jpg', 'VDCA-10186', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10187, '', 'Gopika R', 'Female', 'Rajapalayam', 'A.K.D Girls School', '', '', '', '16-04-2007', '944180575', '', 'Rajesh S', 'B179, Thendral Nagar, Rajapalayam', '31-03-2019', '555097303Photo.jpg', '1689560356Birth Certificate.jpg', 'VDCA-10187', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10188, '', 'Gayathri G S', 'Female', 'Rajapalayam', 'A.K.D Girls School', '', '', '', '03-03-2007', '9944735480', '', 'Saravanan M', '9B Perumal Kovil Street, Avaram Patti, Rajapalayam', '31-03-2019', '126345164Photo.jpg', '1347714154Birth Certificate.jpg', 'VDCA-10188', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10189, '', 'Dhuseiyanthan P', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '09-08-2008', '9894331944', '', 'Palani Murugan R', '430,F5 Mapplai Subbiah Street, Rajapalayam', '31-03-2019', '1742391252Photo.jpg', '1438102504Birth Certificate.jpg', 'VDCA-10189', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10190, '', 'Dharini K', 'Female', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '25-03-2009', '9940661236', 'gkumaran77@gmail.com', 'Kumaran G', '247-B/3, Vishnu Nagar, R.R Nagar North, Rajapalayam', '31-03-2019', '639762581Photo.jpg', '997598378Birth Certificate.jpg', 'VDCA-10190', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10191, '', 'Chae Kuevara J S', 'Male', 'Srivilliputhur', '', '', '', '', '23-09-2010', '9976962930', 'meka-nila@yahoo.com', 'Stalin J', '19/3,Middle Street, Kammapatti, Srivillaputhur', '31-03-2020', '1552530468Photo.jpg', '306925925Birth Certificate.jpg', 'VDCA-10191', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10192, '', 'Siddarth V', 'Male', 'Rajapalayam', 'Chinmaya Vidyalaya SLR', '', '', '', '19-03-2007', '9965520064', '', 'Vijaya Kumar', '111A,Panayar Street, rajapalayam', '31-03-2019', '1897667371Photo.jpg', '936318815Birth Certificate.jpg', 'VDCA-10192', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10193, '', 'Shanmugapriya T', 'Female', 'Rajapalayam', 'Casndimar Met Hr Sec Sachool', '', '', '', '22-01-2007', '9363355110', '', 'Thirumalai Murugan ', '116/171A, Sanjeevinathapuram, Rajapalayam', '31-03-2019', '1866924181Photo.jpg', '1097341039Birth Certificate.jpg', 'VDCA-10193', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10194, '', 'Suba Rakshana R', 'Female', 'Rajapalayam', '', '', '', '', '25-08-2009', '8883780404', 'ramasubbu.raja@gmail.com', 'Ramasubramaniya Raja S', '73-Sevalpatti North Street, Rajapalayam', '31-03-2019', '979395118Photo.jpg', '1093949316Birth Certificate.jpg', 'VDCA-10194', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10195, '', 'Karishma M', 'Female', 'Koonamkulam', 'Living Hope Matric School', '', '', '', '29-03-2009', '8489595744', '', 'Mailsamy R', 'Kunamkoolam', '31-03-2019', '120797209Photo.jpg', '145981299Birth Certificate.jpg', 'VDCA-10195', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10196, '', 'Krishnaveni P', 'Female', 'Kunnakudi', 'Living Hope Matric School', '', '', '', '05-05-2006', '9943682694', '', 'parameswaran S', '220/5A,Pilayar Kovil Street, Koonakudi', '31-03-2019', '2113849556Photo.jpg', '987275694Birth Certificate.jpg', 'VDCA-10196', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10197, '', 'Kapil M K', 'Male', 'Rajapalayam', 'Sri Ramana Acadamy', '', '', '', '02-12-2009', '959720866', '', 'Mariappan V', 'Mowshin Road, Murannbu, Rajapalayam', '31-03-2019', '1325432076Photo.jpg', '1765910940Birth Certificate.jpg', 'VDCA-10197', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10198, '', 'Karthik U', 'Male', 'Rajapalayam', 'Sri Ramana Vidyalaya Mat Hr Sec School', '', '', '', '05-09-2007', '9786922253', 'ukr1977@gmail.com', 'Vthaya Kumar J', '209, Akigai Nagar, Rajapalayam ', '31-03-2019', '1960028169Photo.jpg', '630534161Birth Certificate.jpg', 'VDCA-10198', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10199, '', 'Jesika C', 'Female', 'Srivilliputhur', 'Valluvar Vidhyalaya', '', '', '', '19-04-2009', '9629052594', '', 'Christy Thanganayagam', '5/688H, Sri Ram Nagar West, KrishnanKovil, Kunnur(PO), Srivillputhur', '31-03-2019', '1548561014Photo.jpg', '141681534Birth Certificate.jpg', 'VDCA-10199', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10200, '', 'Jeya Varsha r', 'Female', '', 'Sri Ramana Acadamy', '', '', '', '14-03-2007', '9842112359', '', 'Ram Kumar P', 'Vijayarengapuram, Karirisathan Post, Sangarakovil, Nellai', '31-03-2019', '2082508281Photo.jpg', '174943073Birth Certificate.jpg', 'VDCA-10200', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10201, '', 'Jegan Perumal J', 'Male', 'Rajapalayam', 'Nadar Mat Hr Sec School', '', '', '', '12-11-2008', '9498184561', '', 'Jeyaraj T', '30/50, Othapatti Street, Rajapalayam.', '31-03-2019', '2095401713Photo.jpg', '1530903140Birth Certificate.jpg', 'VDCA-10201', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10202, '', 'Harshini D', 'Female', 'Srivilliputhur', '', '', '', '', '22-03-2007', '9942439045', '', 'Durai Raj P', '18/1 Mettu Street, Srivilliputhur.', '31-03-2019', '1297139242Birth Certificate.jpg', '136794477Photo.jpg', 'VDCA-10202', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10203, '', 'Saravana Kumar V', 'Male', 'Sivakasi', '', '', '', '', '05-10-2006', '8940644107', '', 'Vairamuthu N', '6/289 Bose Colony Sivakasi.', '31-03-2019', '10869688135.Saravana kumar V1.jpg', '2690492325.Saravana kumar V.jpg', 'VDCA-10203', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10204, '', 'Vijay Sarathi S', 'Male', 'Sivakasi', '', '', '', '', '10-12-2002', '9159169199', 'svijaysarathi2001@gmail.com', 'Seenivasan', '2/1236A, RSS Nagar, Sithurajapuram, Sivakasi.', '31-03-2019', '1254983941Vijay Sarathi S1.jpg', '2110648506Vijay Sarathi S.jpg', 'VDCA-10204', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10205, '', 'Balaji S', 'Male', 'Rajapalayam', '', '', '', '', '05-12-2007', '9047541049', '', 'Somasundaram T', '3/162 Pillaitar Kovil Strret, S.Ramalingapuram, Rajapalayam', '31-03-2019', '1894003264Balaji S1.jpg', '320509850Balaji S.jpg', 'VDCA-10205', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10206, '', 'Rakulkannan M', 'Male', 'Rajapalayam', '', '', '', '', '07-05-2008', '9443257121', 'drmanikannan@gmail.com', 'Manikannan', '108, bharathi Nagar, P A C R Salai, K R Nagar post, Rajaplalayam\r\n', '31-03-2019', '99463715Rahul Kannan M1.jpg', '519501975Rahul Kannan M.jpg', 'VDCA-10206', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10207, '', 'Sai Prasanna B', 'Male', 'Srivilliputhur', '', '', '', '', '28-09-2006', '9443302553', '', 'Balu S', '33A,Kottai Thalaivasal, Melside South street, Srivilliputhur', '31-03-2019', '1321345495Sri Prasanna B1.jpg', '331148895Sri Prasanna B.jpg', 'VDCA-10207', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10208, '', 'Kirthi Varshan S', 'Male', 'Srivilliputhur', '', '', '', '', '04-10-2006', '9940997369', 'kirtisrini71@gmail.com', 'Srinivasan V', '43/3, PeriyaPerumaal East mada Street, Srivilliputhur', '31-03-2019', '1998558773Kirthivarsan S1.jpg', '1751418090Kirthivarsan S.jpg', 'VDCA-10208', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10209, '', 'Archana Devi M', 'Female', 'Virudhunagar', '', '', '', '', '21-10-2003', '9486805180', '', 'Manikandan S', '8, Middle Street, Nachiyarpatti', '31-03-2019', '444035003Archana Devi M1.jpg', '1042685128Archana Devi M.jpg', 'VDCA-10209', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10210, '', 'Kamal raga J', 'Male', 'Virudhunagar', '', '', '', '', '23-11-2009', '9487605188', 'vimaladevijk@gmail.com', 'Jaya Kumar  V', '9/1, Narayanamadam Street, Viruthunagar', '31-03-2019', '907002874Kamal Raja J1.jpg', '515102732Kamal Raja J.jpg', 'VDCA-10210', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10211, '', 'Kamal raga J', 'Male', 'Virudhunagar', '', '', '', '', '23-11-2009', '9487605188', 'vimaladevijk@gmail.com', 'Jaya Kumar  V', '9/1, Narayanamadam Street, Viruthunagar', '31-03-2019', '238742440Kamal Raja J1.jpg', '1417425254Kamal Raja J.jpg', 'VDCA-10211', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10212, '', 'Hema Ruthrra R', 'Female', 'Rajapalayam', '', '', '', '', '28-08-2008', '9487970205', 'babussr@gmail.com', 'Ramesh Babu C', '61c5/1, Subburaja Madam Street, Rajapalayam', '31-03-2019', '1036078881Hemaruthrra R1.jpg', '1053362046Hemaruthrra R.jpg', 'VDCA-10212', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10213, '', 'Kanthavel G', 'Male', 'Srivilliputhur', '', '', '', '', '26-08-2009', '8667236372', 'tganesh1654@gmail.com', 'Ganesan', '205,Andalsamy Nagar, Renganathapuram', '31-03-2019', '672005669Kanthavel G2.jpg', '1681545693Kanthavel G1.jpg', 'VDCA-10213', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10214, '', 'Naga Arjun S', 'Male', 'Sivakasi', '', '', '', '', '07-03-2003', '9159122207', 'meena1995pp@gmail.com', 'Suruli Vale R', '2/139, Bharathiyaar Strret, Sithurajapuram', '31-03-2019', '385813489Naga Arjun S1.jpg', '1531678860Naga Arjun S.jpg', 'VDCA-10214', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10215, '', 'Janarthanan S', 'Male', 'Srivilliputhur', '', '', '', '', '11-06-2009', '9445528637', '', 'Sundaramahalingam L', '6/8A, Raitton Patti Street, Srivilliputhur', '31-03-2019', '1601685373Birth Certificate.jpg', '563794158Janarthanan S.jpg', 'VDCA-10215', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10216, '', 'Gokul karthick I', 'Male', 'Sivakasi', '', '', '', '', '01-07-2010', '948612268', 'anbukaras.net@gmail.com', 'Anbukarasi R', 'C-145,New Housing Board, Reserveline,Sivakasi', '31-03-2019', '573860413Birth Certificate.jpg', '2024230874Gokul Karthik T.jpg', 'VDCA-10216', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10217, '', 'Sahana S', 'Female', 'Madurai', 'Linga Global School', '', '', '', '15-12-2010', '9842996480', 'selvaraj6480@gmail.com', 'selvaraj S', '3/21,A.L.Kottanipatti,\r\nNallamaram(po),\r\nT.Kallupatti,\r\nPeraiyur(T.K)\r\nMadurai - 625702\r\n\r\n\r\n', '31-03-2019', '274117621Birth Certificate.jpg', '1093110083Photo.png', 'VDCA-10217', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10218, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10218', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10219, '', 'Sakaana Sri K', 'Female', 'Virudhunagar', 'Linga Global School', '', '', '', '14-08-2011', '8489048758', 'tkpandian78@gmail.com', 'Karuppanapandian', 'Thailapuram, Maharajapuram(Via),\r\nViruthunagar', '31-03-2019', '1784464398Birth Certificate.jpg', '1367277042Photo.png', 'VDCA-10219', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10220, '', 'Subarna M', 'Female', 'Sivakasi', 'A.A.A', '', '', '', '04-12-2010', '9566712628', '', 'Madasamy S', '144/A2 Muththumariyaman Colony, Pallapatti Road, Sivakasi.', '31-03-2019', '974024572Birth Certificate.jpg', '1550217Photo.png', 'VDCA-10220', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10221, '', 'Yashwanth G', 'Male', 'Srivilliputhur', 'Linga Global School', '', '', '', '22-04-2011', '9487142603', 'arthga@rediffmail.com', 'Gurusamy K', '5/528U 4th Street,\r\nSriramnagar East, Srivilliputhur', '31-03-2019', '179749174Birth Certificate.jpg', '1047696654Photo.png', 'VDCA-10221', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10222, '', 'Gubera Guru K', 'Male', 'Srivilliputhur', '', '', '', '', '16-11-2001', '9965055103', '', 'Kannan P', '4/195, South Street,\r\nKottaiyur- 626149 ', '31-03-2019', '1270927834Birth Certificate.jpg', '2094978201Photo.png', 'VDCA-10222', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10223, '', 'Adheeb M', 'Male', 'Rajapalayam', 'Casndimar Met Hr Sec Sachool', '', '', '', '29-06-2009', '7868020639', '', 'Mohamed Mydeen', 'L125 Mudangiar Road, \r\nThiruvalluvar Nagar,\r\nRajapalayam', '31-03-2019', '1549771833Birth Certificate.jpg', '1241055434Photo.png', 'VDCA-10223', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10224, '', 'Sai Karthik S', 'Male', 'Virudhunagar', '', '', '', '', '23-11-2009', '9487383795', '', 'Sivakumar V', '1/198 C6A Guru colony,\r\nThavarklam Road,\r\nSivakasi West, Sivakasi', '31-03-2019', '1159285330Birth Certificate.jpg', '240383621Photo.png', 'VDCA-10224', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10225, '', 'Bharath Kumar T', 'Male', 'peranjur', 'Linga Global School', '', '', '', '07-07-2009', '9843591377', 'tmkbs1970@gmail.com', 'Thirumurugan T', 'Syeel Illam , Abas Nagar, Peranjur.', '31-03-2019', '807718056Birth Certificate.jpg', '970435711Photo.png', 'VDCA-10225', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10226, '', 'Jai Bharath R', 'Male', 'Virudhunagar', 'S V V M', '', '', '', '12-03-2009', '9345010638', '', 'Raendran', '1/224,A Kottaiyur,\r\nNela Street', '31-03-2019', '882053156Birth Certificate.jpg', '953648112Photo.png', 'VDCA-10226', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10227, '', 'Jeeva A', 'Male', 'Virudhunagar', 'S V V M', '', '', '', '17-04-2009', '9843312791', '', 'Annakodi', 'Akkanapuram Colony', '31-03-2019', '1511135609Birth Certificate.jpg', '1111324748Photo.png', 'VDCA-10227', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10228, '', 'Sri Hari Krishna', 'Male', 'Virudhunagar', 'S V V M', '', '', '', '18-08-2009', '6380962732', '', 'Murugan', 'Koontapatti', '31-03-2019', '588683458Birth Certificate.jpg', '715954892Photo.png', 'VDCA-10228', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10229, '', 'Vishnu A', 'Male', '', '', '', '', '', '04-09-2007', '9943262347', '', 'Algarsamy P', '', '31-03-2019', '2028527570Birth Certificate.jpg', '1729723348Photo.png', 'VDCA-10229', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10230, '', 'Ilayakrishna I', 'Male', 'Rajapalayam', 'S S Gov Hr Sec School', '', '', '', '30-03-2007', '9688796412', '', 'Ilayaraja M', '84A, Amman Patti Street, Rajapalayam ', '31-03-2019', '225540331Birth Certificate.jpg', '326574893Photo.png', 'VDCA-10230', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10231, '', 'Naveena', 'Male', 'Sivakasi', '', '', '', '', '08-07-2006', '94437883860', '', 'Ganesh', '3/63, North Street', '31-03-2019', '416821892Birth Certificate.jpg', '481338389Photo.png', 'VDCA-10231', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10232, '', 'Karthik Kumar T', 'Male', 'Virudhunagar', 'L G S Krishnan Kovil', '', '', '', '15-06-2007', '9843591377', 'tmkbs1970@gmail.com', 'Thiru Murugan T', 'Syed Illam, Abas Nagar, Peraiyur.', '31-03-2019', '1049249478Birth Certificate.jpg', '1115188918Photo.png', 'VDCA-10232', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10233, '', 'Abimanyu S', 'Male', 'Virudhunagar', '', '', '', '', '01-01-2010', '9003896402', '', 'Sabari Prakash T', 'Alagar Kovil Street, Thailpuram.', '31-03-2019', '144329801Birth Certificate.jpg', '291157138Photo.png', 'VDCA-10233', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10234, '', 'Barath Raj M', 'Male', 'Virudhunagar', 'Linga Global School', '', '', '', '07-12-2007', '7667583222', '', 'Mohan', '2A/286 Pilliar Kovil Street, Ramaramiyapuram, Koomapati.', '31-03-2019', '2077445454Birth Certificate.jpg', '1887692420Photo.png', 'VDCA-10234', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10235, '', 'Sivaranjani P', 'Female', 'Virudhunagar', '', '', '', '', '15-12-2005', '965521184', '', 'Pandi R', '5/121, Kaliamman Kovil Street', '31-03-2019', '827143015Birth Certificate.jpg', '374114588Photo.png', 'VDCA-10235', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10236, '', 'Birithika G', 'Female', 'Virudhunagar', '', '', '', '', '13-09-2007', '9884910973', '', 'Ganesan P', '3299, Mela theru, Nallurpatty', '31-03-2019', '1435156262Birth Certificate.jpg', '33633954Photo.png', 'VDCA-10236', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10237, '', 'Dhaarani S', 'Female', 'Virudhunagar', '', '', '', '', '08-06-2007', '9843768591', '', 'Sanmuga Sundaram M', '3/32 North Street, Thailapuram.', '31-03-2019', '2135801411Birth Certificate.jpg', '945616057Photo.png', 'VDCA-10237', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10238, '', 'Sakthivel R', 'Male', 'Sivakasi', 'Lord P.C.A.A Lion Mat.Hr.Sec.School', '', '', '', '05-08-2012', '9442914890', '', 'Ramesh R', '4B/8/2291, Thirumalai Thirupathi Nagar, \r\nReserveline, Sivakasi - 626124', '31-03-2019', '462203899Birth Certificate.jpg', '500253557Photo.png', 'VDCA-10238', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10239, '', 'Rhea S', 'Female', 'Sivakasi', '', '', '', '', '28-03-2010', '9843428179', 'sundar00701@gmail.com', 'Shyam Sundar G V', '40, Coronation Colony,\r\nSivakasi-626123.', '31-03-2019', '2026162936Birth Certificate.jpg', '1112630440Photo.png', 'VDCA-10239', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10240, '', 'Manimaran E', 'Male', 'Virudhunagar', 'Hayagirivas International School', '', '', '', '17-03-2010', '9442978876', '', 'Eswaran M', '1/606, IOB Back Side, Vembakottai Post, Viruthunagar.', '31-03-2019', '825972528Birth Certificate.jpg', '1470803601Photo.png', 'VDCA-10240', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10241, '', 'Chir Dariv R', 'Male', 'Virudhunagar', 'Hayagirivas International School', '', '', '', '05-03-2010', '8610105928', '', 'Raja Singh', '1/99H,Anaikuttam,\r\nA Meenakshipuram', '31-03-2019', '199804307Birth Certificate.jpg', '354932129Photo.png', 'VDCA-10241', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10242, '', 'Srimitha J', 'Female', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '07-06-2010', '8148819540', 'yuvasrima@2010gmail.com', 'Janagaraj N', '18, Gopura Vasal, Srivilliputhur.', '31-03-2019', '57634833201.Srimitha J.jpg', '77308192Photo.png', 'VDCA-10242', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10243, '', 'Vijayaragav P', 'Male', 'Srivilliputhur', '', '', '', '', '08-06-2010', '9944735746', 'pandiansur@gmail.com', 'Pandian ', '15a/al VOC Nagar,\r\nSrivillputhur', '31-03-2020', '89025580602.Vijayaragav P.jpg', '1623864191Photo.png', 'VDCA-10243', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10244, '', 'Rohith P', 'Male', 'Srivilliputhur', 'Srivi lions International School', '', '', '', '20-06-2011', '9944735746', 'gpandian27041984@gmail.com', 'Pandian ', '15a/al VOC Nagar,\r\nSrivilliputhur.', '31-03-2020', '45259228703.Rihit P.jpg', '400852121Photo.png', 'VDCA-10244', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10245, '', 'Athish A.K', 'Male', '', '', '', '', '', '25-07-2010', '9789017115', '', 'Krishnamoorthy R', '1/137, East Street Kangerseval Patti.', '31-03-2019', '1505373228Birth Certificate.jpg', '78965523804.AthishA K.jpg', 'VDCA-10245', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10246, '', 'Yuvan Adhiban S', 'Male', 'Thiruthangal', 'Rathinam Chess Academy', '', '', '', '09-11-2010', '9943918165, 9840304848', 'saravanakumarjeyaraj@gmail.com', 'Saravanakumar J', '1-Koodalinga Nagar Stret, Thiruthangal', '31-03-2019', '201889061705.Yuvan Adhiban.jpg', '22271246905.Yuvan Adhiban S.jpg', 'VDCA-10246', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10247, '', 'Sree Lakshita B', 'Female', 'Sivakasi', 'Hayagirivas International School', '', '', '', '23-09-2010', '9944188875', 'dbalajiraj@gmail.com', 'Balaji D', '4/666-8, Kattanaseval Street, Thayilpatti, Sivakasi.', '31-03-2019', '68405040806.Sree Lakshita B1.jpg', '38439480206.Sree Lakshita B.jpg', 'VDCA-10247', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10248, '', 'Ramkishore S', 'Male', 'Virudhunagar', 'Hayagirivas International School', '', '', '', '21-06-2010', '9944061704', 'pv88183@gmail.com', 'Senthil Kumar V', '2/2206-2,Devinagar, Sithurahapuram, Sivakasi', '31-03-2019', '156107574607.Rmakishore S1.jpg', '169102382807.Rmakishore S.jpg', 'VDCA-10248', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10249, '', 'Gayash S', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '18-10-2010', '9943430178', 'senthilmuruganbba@gmail.com', 'Senthilmurugan P', '2/2199-E, Devi Nagar,\r\nSithurajapuram, Near RSR Home, Sivakasi.', '31-03-2019', '93268585808.Kayash S1.jpg', '102396369408.Kayash S.jpg', 'VDCA-10249', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10250, '25682792', 'Surya Kumar S', 'Male', 'Sivakasi', 'Arasan Middle School', '', '', '', '31-05-2008', '9843428179', 'sundar00701@gmail.com', 'Shyam Sundar G V', '40, Coronation Colony, \r\nSivakasi', '31-03-2020', '1298798104Birth Certificate.jpg', '1719599978Photo.png', 'VDCA-10250', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10251, '', 'Gokul D C', 'Male', 'Sivakasi', 'Jaycees Matric Hr Sec School', '', '', '', '04-07-2008', '9443962676', 'Kasimadura@gmail.com', 'Chidambaram D', '21 B, Sivan Sannathi,\r\nSivakasi\r\n', '31-03-2019', '2017814840Birth Certificate.jpg', '356121019Photo.png', 'VDCA-10251', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10252, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10252', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10253, '', 'Varnika B', 'Female', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '20-09-2008', '9976905450', '', 'Balamurugan M', '24-C, Perumal Patti Pillaimar 2d West Street, Srivilliputhur', '31-03-2019', '5705234609.Varnika B.jpg', '1453262715Photo.png', 'VDCA-10253', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10254, '', 'Sri Raja Nandhini R K', 'Female', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '15-07-2009', '9994847009', 'rakayaha@gmail.com', 'Ramesh Kumar G', '2/25, Main Road,\r\nKunnur, Srivilliputhur\r\n', '31-03-2019', '138732891510.Sri Raja Nandhini R K.jpg', '1893168462Photo.png', 'VDCA-10254', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10255, '', 'Mukes R', 'Male', 'Virudhunagar', 'Hayagirivas International School', '', '', '', '09-06-2008', '9789107115', '', 'Krishnamoorthy R', '1/137, East StreetKangersevel Patti.', '31-03-2019', '1996335423Birth Certificate.jpg', '123974672111.Mukes K.jpg', 'VDCA-10255', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10256, '', 'Santhosh Prabhu M', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '12-07-2009', '8925653332', 'abisanthfamily@gmail.com', 'Murugan P', '6/110C, Annamalayan Colony, Sivakasi', '31-03-2019', '169434720012.Santhosh Prabhu M1.jpg', '107986571612.Santhosh Prabhu M.jpg', 'VDCA-10256', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10257, '', 'Sanjay T', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '01-09-2008', '9443376792', 'Sriabiramipolypack@gmail.com', 'Thanga Thirupathi C', '2/693, Muthuramalinga Nagar, Narnapuram Road, Sivakasi', '31-03-2019', '212871326313.Sanjay T1.jpg', '106743741413.Sanjay T.jpg', 'VDCA-10257', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10258, '', 'Nishanth S', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '13-08-2009', '9442219240, 9442419240', 'varalakshmi988@gmail.com', 'Subburaj G S', '2/27 West Street, Subramaniyapuram, Thayilpatti,Sivakasi', '31-03-2019', '142384870914.Nishanth S1.jpg', '183673312014.Nishanth S.jpg', 'VDCA-10258', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10259, '', 'Yogeswaran J', 'Male', 'Sivakasi', 'Lord P.C.A.A Lion Mat.Hr.Sec.School', '', '', '', '12-07-2005', '9159287975', 'www.yokes@gmail.com', 'Jegatheesan R', '4/8/509, Nehruji Nagar, Reserveline, Sivaksi', '31-03-2019', '243010Birth Certificate.jpg', '832319361Photo.png', 'VDCA-10259', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10260, '', 'Santhosh T', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '04-03-2006', '9443376792', 'Sriabiramipolypack@gmail.com', 'Thanga Thirupathi C', '2/693, Muthuramalinga Nagar, Sivakasi', '31-03-2019', '1381917296Birth Certificate.jpg', '1627043242Photo.png', 'VDCA-10260', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10261, '', 'Rishe D C', 'Male', 'Sivakasi', 'Jaycees Matric Hr Sec School', '', '', '', '24-09-2006', '9443962676', 'Kasimadura@gmail.com', 'Chidambaram D', '21-B, Sivan Sanathi,\r\nSivakasi\r\n', '31-03-2019', '1866757745Birth Certificate.jpg', '342813343Photo.png', 'VDCA-10261', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10262, '', 'Durga K', 'Female', 'Sivakasi', '', '', '', '', '13-10-2007', '9442585185', '', 'Kathiresan S', '76, Bilal Compound, Aruna Nagar, Sivakasi', '31-03-2019', '1199293647Birth Certificate.jpg', '807927776Photo.png', 'VDCA-10262', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10263, '', 'Sri raja Priya R K', 'Female', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '27-06-2007', '9994847009', 'rakayaha@gmail.com', 'Ramesh Kumar G', '2/25, Main Road, Kunnur,Srivilliputhur.', '31-03-2019', '98304891115.Sri Raja Priyan R K.jpg', '35667844Photo.png', 'VDCA-10263', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10264, '', 'Kanish Kumar K', 'Male', 'Srivilliputhur', 'Hindu Hr.Sec.School', '', '', '', '01-09-2007', '6369894770', '', 'Karuppiah K', '2/211, Pillaiyar Kovil Srteet, Kunnur, Srivilliputhur.', '31-03-2019', '118990687816.Kanish Kumar K.jpg', '858265118Photo.png', 'VDCA-10264', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10265, '', 'Abimanyu M', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '21-12-2006', '8925653332', 'abisanthfamily@gmail.com', 'Murugan P', '6/110C, Annamalaiyar Colony, Sivakasi', '31-03-2019', '89045971217.Abimanyu M1.jpg', '69348027417.Abimanyu M.jpg', 'VDCA-10265', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10266, '', 'Ajay J', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '08-03-2005', '9865127882', 'ajayaswin1212@gmail.com', 'Jaya Kumar S', '3/1270- B, Lakshmi Nagar, Parapatti, Sivakasi', '31-03-2019', '484845377Birth Certificate.jpg', '394443916Photo.png', 'VDCA-10266', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10267, '', 'Ajmal Dhahsim K', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '08-06-2003', '9894130331', '', 'Kaja Mydeen', '183, Seethakahi North Street, Sivakasi', '31-03-2019', '13869787Birth Certificate.jpg', '1406531514Photo.png', 'VDCA-10267', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10268, '', 'Gayathri K', 'Female', 'Sivakasi', '', '', '', '', '07-08-2003', '9442585185', '', 'Kathirasan S', '76, Bilal Compound, Arun Nagar, Sivakasi', '31-03-2019', '1260461334Birth Certificate.jpg', '1241926384Photo.png', 'VDCA-10268', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10269, '', 'Haresh R', 'Male', 'Sivakasi', 'Hayagirivas International School', '', '', '', '26-03-2004', '9443661454', 'haresh26svks@gmail.com', 'Ramasamy A', '2/677-F, K.S.A Rajadurai Nagar Sivakasi', '31-03-2019', '1154908287Birth Certificate.jpg', '1372624481Photo.png', 'VDCA-10269', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10270, '', 'Jai Vishal S', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '28-11-2003', '7373844267', '', 'Senthil Kumat R', '1/6,584,Kamarapuram Colony, Sivaksi', '31-03-2019', '45670554Birth Certificate.jpg', '327525097Photo.png', 'VDCA-10270', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10271, '', 'Jeya Senduram M', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '27-02-2003', '9443793929', '', 'Muthuraj R.K', '6/631, Kamarajapuram Colony, Sivakasi', '31-03-2019', '1729455952Birth Certificate.jpg', '1150732218Photo.png', 'VDCA-10271', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10272, '25042734', 'Vigneshwar D P', 'Male', 'Viruthunagar', 'K V S English Medium School', '1328', '', '', '15-10-2003', '9788252500', '', 'Ponnappan N D', '70J/C, Gogown Street, Viruthunagar', '31-03-2019', '1683578673Birth Certificate.jpg', '1582791108Photo.png', 'VDCA-10272', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10273, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10273', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10274, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10274', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10275, '46684700', 'Avinash Kumar G', 'Male', 'Rajapalayam', '', '1150', '', '', '05-04-2000', '6379277922', 'gavineshkumar2000@gmail.com', 'Ganesan T', '211,Chellam South St,\r\nRajapalayam.', '31-03-2020', '835269819Birth Certificate.jpg', '2105474048Photo.jpg', 'VDCA-10275', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10276, '45023689', 'Gobalakrishnan K', 'Male', 'Rajapalayam', 'Chinmaya Vidyalaya SLR', '', '', '', '30-12-2004', '9150462432', '', 'Karthikeyan R', '35/2791Ayodhi Ram Nagar,\r\nRajapalayam', '31-03-2019', '1047120194Birth Certificate.jpg', '1560831369Photo.jpg', 'VDCA-10276', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10277, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10277', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10278, '25015109', 'Pulkitrathi V', 'Male', 'Sivakasi', 'Symbosis Puna', '1539', '', '', '16-04-2001', '9843187145', '', 'Vishal Rathi', '2/800T2,Shanmuga Nagar,\r\nS.N Puram,\r\nSivakasi.', '31-03-2019', '144385177Birth Certificate.jpg', '1171899540Photo.jpg', 'VDCA-10278', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10279, '', 'Athiban Bose C', 'Male', 'Srivilliputhur', 'Kalasalingam Institute Of Technology', '', '', '', '01-06-2001', '9994408749', 'anbukeerthi98@gmail.com', 'Chandira Bose S', '4/3, Indra nagar,Srivilliputhur.', '31-03-2019', '1330067567Athiban Bose C.jpg', '945747380Photo.jpg', 'VDCA-10279', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10280, '', 'Srinivasa Balan S', 'Male', 'Rajapalayam', 'Sri Ramana Vidyalaya Mat Hr Sec School', '', '', '', '29-09-2004', '9787761230', 'swarna@ritrjpm.ac.in', 'Selvamuthukumar M', '10B/114, Arumuga Nagar,\r\nThiruvalluvar Nagar North,\r\nRajapalayam\r\n', '31-03-2019', '1312431740Srinivasabalan S.jpg', '1383422434Photo.jpg', 'VDCA-10280', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10281, '', 'Vishvvesh S', 'Male', 'Rajapalayam', 'Sathya Vidyalaya CBSE', '', '', '', '22-12-2006', '9952195649', 'chirasankar01@gmail.com', 'Sankar G', '63, Sivagami Puram,\r\nRajapalayam', '31-03-2019', '253918014Vishvesh S.jpg', '672231946Photo.jpg', 'VDCA-10281', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10282, '', 'SelvamenaT', 'Female', 'Rajapalayam', '', '', '', '', '12-03-1992', '8144007929', 'selvameenamaths@gmail.com', 'Thangaraj M', '2/5E, Kurukkalairaj Chandu, Seithur, rajapalayam.', '31-03-2019', '1064625304Selva Meena.jpg', '1597631849Photo.jpg', 'VDCA-10282', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10283, '', 'Siva prakash S', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '29-12-2005', '9894138751', '', 'Sankara Narayanan G', '2/1438,I Ramasamy Nagar, Sithurajapuram,\r\nSivakasi.', '31-03-2019', '636914558Birth Certificate.jpg', '1832639669Photo.jpg', 'VDCA-10283', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10284, '', 'Genga Raj R', 'Male', 'Sivakasi', 'Jaycees Matric Hr Sec School', '', '', '', '25-12-2006', '9944185770', '', 'Ramamoorthy G', 'K.S.A Rajadurai Nagar', '31-03-2019', '1383863976Birth Certificate.jpg', '1205949683Photo.jpg', 'VDCA-10284', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10285, '', 'Pratyush S', 'Male', 'Rajapalayam', 'APS Chess Acadamy', '', '', '', '01-08-2012', '9443184133', 'radhy@ymail.com', 'Saravana R', '25/ G-3, Alagudevankulam Street,\r\nAwaram Patti, Rajapalayam', '31-03-2019', '1116221462Birth Certificate.jpg', '347601547Photo.jpg', 'VDCA-10285', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10286, '', 'Jalishaanhigreev R', 'Male', 'Arupukottai', '', '', '', '', '05-09-2013', '9788727426', 'pramar1987@gmail.com', 'Ramar P', '11,Nanthavanam St,\r\nChinnapuliyam Patti,\r\nArupukottai', '31-03-2019', '2075901417Birth Certificate.jpg', '84119421Photo.jpg', 'VDCA-10286', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10287, '', 'Hyriya S', 'Female', 'Srivilliputhur', '', '', '', '', '30-11-2013', '9994752114', 'sivapriya2008@gmail.com', 'Selva Bhoopathy B', '2/758,Pasumpon Nagar,\r\nNear Krishnankovil Street, Srivilliputhur', '31-03-2019', '1567057852Birth Certificate.jpg', '1416863339Photo.jpg', 'VDCA-10287', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10288, '', 'Harihararuban A', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '25-04-2005', '9486287980', '', 'Arputha ramesh P', '256, Mundaganadar Street, Sivakasi.', '31-03-2019', '1451762553Birth Certificate.jpg', '177323012Photo.jpg', 'VDCA-10288', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10289, '', 'Kadieswaran K K', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '26-01-2004', '9345569863', '', 'Kannan K', '1473 A Solai Colony,\r\nP.K.N Road, Sivakasi', '31-03-2019', '615668234Birth Certificate.jpg', '8308437Photo.jpg', 'VDCA-10289', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10290, '', 'Yadeswaran M', 'Male', 'Sivakasi', 'S.H.N.V.Hr Sec School', '', '', '', '04-03-2005', '9789351733', '', 'Muneeswaran V', '4/126, Kamarajar puram Colony, Pllapatti, Sivakasi', '31-03-2019', '1628217632Birth Certificate.jpg', '1650351521Photo.jpg', 'VDCA-10290', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10291, '', 'Mutheeswaran S', 'Male', 'Sivakasi', 'Arasan Ganesan Mat Hr Sec School', '', '', '', '07-04-2007', '8778612377', '', 'Sundhara Moorthy', '157-A, Sundharam Street, Sivakasi', '31-03-2019', '947062463Birth Certificate.jpg', '1006067298Photo.jpg', 'VDCA-10291', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10292, '', 'Afsin Filga S', 'Female', 'Sivakasi', 'K K M H S School', '', '', '', '18-06-2012', '8608492274', '', 'Syed Thajudeen Ahamed N', '18,Meera Hussain Street, Sivakasi', '31-03-2019', '1856660895Birth Certificate.jpg', '1521618014Photo.jpg', 'VDCA-10292', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10293, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10293', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10294, '', 'Gnana Sekar T', 'Male', 'Arupukottai', 'Saliar Mahajana Hr. Sec School', '', '', '', '03-05-2008', '9788728473', '', 'Tamil Selvan G', '5/19/58, T S Ramalinga Nagar, Arupukottai.\r\n', '31-03-2019', '1829486391Birth Certificate.jpg', '988428740Photo.jpg', 'VDCA-10294', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10295, '', 'Hema K', 'Female', 'Virudhunagar', 'S.F.S Mat.Hr Sec School', '', '', '', '06-10-2007', '7340019903', 'p.kathiresan1531@gmail.com', 'Kathiresan P', '101M/9A, Annanagar West, Mallankinar(PO),\r\nKariapati (TK),\r\nViruthunagar.', '31-03-2019', '538600433Birth Certificate.jpg', '804104715Photo.jpg', 'VDCA-10295', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10296, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10296', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10297, '', 'Megal Sriram M', 'Male', 'Arupukottai', '', '', '', '', '17-12-2010', '8754477346', 'gssathiyadevi@gmail.com', 'Manivannan M', '68, Viruthunagar Main Road, Arrupukottai.', '31-03-2019', '324601012Birth Certificate.jpg', '424289947Photo.jpg', 'VDCA-10297', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10298, '', 'Prajit A', 'Male', 'Arupukottai', '', '', '', '', '01-11-2011', '9003655859', '', 'Ashok Raju R', '9/4, Pampalamman Kovil North Street, Periyapullion Patti, Arupukottai.', '31-03-2019', '1735303945Birth Certificate.jpg', '1789858147Photo.jpg', 'VDCA-10298', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10299, '', 'Sanjith P', 'Male', 'Virudhunagar', '', '', '', '', '22-11-2011', '9543194918', '', 'Parthipan R', '31/1,A2, A.S.S.S.S Road,Viruthunagar.', '31-03-2019', '1865992432Birth Certificate.jpg', '921286515Photo.jpg', 'VDCA-10299', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10300, '', 'Shugadev V K ', 'Male', 'Virudhunagar', '', '', '', '', '17-09-2012', '9952500861', 'jayaviji19@gmail.com', 'Vijayakumar V', '16 A,Thirumeni Street, Arupukottai, Viruthunagar..', '31-03-2019', '785188689Birth Certificate.jpg', '1019770542Photo.jpg', 'VDCA-10300', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10301, '', 'Smrithi V S', 'Female', 'Arupukottai', 'Hinerva Public School', '', '', '', '18-05-2006', '944518908', 'vpsivakumar22@yahoo.com', 'Sivakumar V P', '51, Malayarasan Kovil Road, Therikutheru, Kezha Mezha Street, Arupukottai.', '31-03-2019', '234689541Birth Certificate.jpg', '64957984Photo.jpg', 'VDCA-10301', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10302, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10302', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10303, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10303', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10304, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10304', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10305, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10305', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10306, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10306', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10307, '', 'Diya Sri S', 'Female', 'Sattur', 'S.H.N Ethel Harvay Girls Hr. Sec. School', '', '', '', '20-08-2007', '9942322074', '', 'Selvaraj K', '7, Pillayar Kovil Middle Street, Sattur.', '31-03-2019', '1680274977Birth Certificate.jpg', '1744681580Photo.jpg', 'VDCA-10307', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10308, '', 'Dhayalan P', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '29-11-2006', '7094256062', '', 'Packiyaraj M', '5/123A, Middle Street, Nadusurangudi, Pudhusurankudi(PO), Sattur.', '31-03-2019', '1770951522Birth Certificate.jpg', '996642393Photo.jpg', 'VDCA-10308', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10309, '', 'Durga Prasath S', 'Male', 'Rajapalayam', 'St.Josheph International School', '', '', '', '21-01-2006', '7868842903', '', 'Sankar T', '250/311, Marriamman Kovil Street, Rajapalayam.', '31-03-2019', '1660588782Birth Certificate.jpg', '1138791643Photo.jpg', 'VDCA-10309', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10310, '', 'Harshitha T', 'Female', 'Sattur', 'S.H.N Ethel Harvay Girls Hr. Sec. School', '', '', '', '24-01-2005', '9443414655', '', 'Thangaraja T', '3/56, A12 Chidhambaram Nagar, Sattur.', '31-03-2019', '97950592Birth Certificate.jpg', '492664042Photo.jpg', 'VDCA-10310', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10311, '', 'Jasmine J', 'Female', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '27-02-2008', '9245186888', '', 'John M', '5/353B, North Street, Nadusuragudi, Sattur.', '31-03-2019', '1960796025Birth Certificate.jpg', '1131043643Photo.jpg', 'VDCA-10311', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10312, '', 'Kartheeswari S', 'Female', 'Sattur', '', '', '', '', '17-03-2005', '9894388250', '', 'Senthil Kumar S', '9/259, Raja Gopal Kalyan Mandabam Street, Sattur.', '31-03-2019', '1432234859Birth Certificate.jpg', '1750773873Photo.jpg', 'VDCA-10312', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00');
INSERT INTO `vdca_players_db` (`id`, `fide_id`, `name`, `gender`, `city`, `Institution`, `rating`, `aicf`, `tnsca`, `dob`, `phone_no`, `email_id`, `father_name`, `address`, `lapsed`, `birth_cf`, `photo`, `vdca_id`, `otp`, `year`, `ststus`, `cip`, `cby`, `cdate`, `mby`, `mip`, `mdate`) VALUES
(10313, '', 'Kathir A', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '15-03-2007', '8940602076', '', 'Aadhavan J', '160,Centre Street, Srirengupuram, Sattur.', '31-03-2019', '2055873830Birth Certificate.jpg', '1375611913Photo.jpg', 'VDCA-10313', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10314, '', 'Rajeswari V', 'Female', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '18-10-2005', '8870137545', '', 'Vadivel Raj K', '1/527, Mela Street, Pudhasurangudi, Sattur.', '31-03-2019', '701322355Birth Certificate.jpg', '831159513Photo.jpg', 'VDCA-10314', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10315, '', 'Raj bharathi R', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '14-11-2007', '9751509627', '', 'Ramuni ', '4/343, South Street, Srienggapuram, Sattur.', '31-03-2019', '1019307402Birth Certificate.jpg', '2092028893Photo.jpg', 'VDCA-10315', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10316, '', 'Ranjini P', 'Female', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '15-05-2007', '9543497665', '', 'Palraj G', '4/259, South Street, Srirengapuram, Sattur.', '31-03-2019', '1225189745Birth Certificate.jpg', '763485945Photo.jpg', 'VDCA-10316', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10317, '', 'Ravi Raj R', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '02-07-1983', '9751506127', '', 'Ramuni R', '4/234, South Street, Srirengapuram, Sattur.', '28-01-2019', '1608504047Birth Certificate.jpg', '50078386Photo.jpg', 'VDCA-10317', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10318, '', 'Sandhiya P', 'Female', 'Sattur', 'S.H.N Ethel Harvay Girls Hr. Sec. School', '', '', '', '26-09-2004', '9894918419', '', 'Periyasamy R', '67/20, Nataraja Theatre Road, Sattur.', '31-03-2019', '1190624712Birth Certificate.jpg', '1836341505Photo.jpg', 'VDCA-10318', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10319, '', 'Sasidhar G', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '18-08-2008', '8525010743', '', 'Gajendran ', '1/44 East Streetr, Pudhusurangudi, Sattur.', '31-03-2019', '1163104294Birth Certificate.jpg', '1574930935Photo.jpg', 'VDCA-10319', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10320, '', 'Selvaganesh S', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '16-01-2008', '8870308368', '', 'Sathuragiri ', '1/512, Mela Street,Puthusurangi, Sattur.', '31-03-2019', '969498329Birth Certificate.jpg', '507880469Photo.jpg', 'VDCA-10320', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10321, '', 'Sridharan A', 'Male', 'Sattur', 'G.H.S Pudhusurangudi', '', '', '', '18-10-2007', '9655271731', '', 'Arumugam T', '4/20 North Street, Srirangapuram, Sattur.', '31-03-2019', '176545290Birth Certificate.jpg', '1701794144Photo.jpg', 'VDCA-10321', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10322, '', 'Jarshebaa Mary M', 'Female', 'Thiruthangal', 'K M K A Mat.Hr.Sec.School', '', '', '', '14-05-2008', '9842613381', 'jenydailycalender@gmail.com', 'Micheal Ramesh M', '307/A, Alamaruthupatti Road, Thiruthangal', '31-03-2019', '3879184351.Jarshelaa Mary.jpg', '718876361.Jarshelaa Mary1.jpg', 'VDCA-10322', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10323, '', 'Akash P', 'Male', 'Thiruthangal', 'Glory Matric Hr Sec School', '', '', '', '20-10-2005', '7871234789', 'preethapraba86@gmail.com', 'Prabagar Singh', '464, Prala Furniture, Sony Grount Opp, Thiruthangal', '31-03-2019', '12625578962.Akash.jpg', '583292473Photo.jpg', 'VDCA-10323', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10324, '', 'Shiva Balan P', 'Male', 'Thiruthangal', 'A.A.A International School', '', '', '', '07-08-2010', '9786632662', 'anandshiva8727@gmail.com', 'Palanisamy S', '65/18, 32 House Colony,\r\nThiruthangal', '31-03-2019', '6189450733.Shiva Balan.jpg', '647360715Photo.jpg', 'VDCA-10324', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10325, '', 'Dhinesh Kumar A', 'Male', 'Sivakasi', '', '', '', '', '05-06-2009', '9486462185', '', 'Arumugasammy G', '518/2097, Indiranagar, Reserveline, Sivakasi', '31-03-2019', '15748582814.Dhinesh Kumar A1.jpg', '21390362694.Dhinesh Kumar A.jpg', 'VDCA-10325', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10326, '', 'Darshan G', 'Male', 'Virudhunagar', 'Brilliant Chess Acadamy', '', '', '', '30-01-2013', '6383335228', 'arunanagendran@gmail.com', 'Gurukanthan J', '23C/16-B, Rajaji Nagar, B B Road, Viruthunagar', '31-03-2020', '18235024245.Dhrshan G.jpg', '1153412104Photo.jpg', 'VDCA-10326', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10327, '', 'Siddharth M', 'Male', 'Sivakasi', '', '', '', '', '28-04-2011', '9894700044', '', 'Muthukumar G', '623, C3, Visalakshi Nagar, Gnanagiri Road, Sivakasi.', '31-03-2019', '8195306646.Siddharth.jpg', '1269246824Photo.jpg', 'VDCA-10327', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10328, '', 'Sivasruthi A', 'Female', 'Sivakasi', 'K M K A Mat.Hr.Sec.School', '', '', '', '08-06-2008', '9486214866', 'Fireworksnyki@gmail.com', 'Anandha Raja Gobal T', '24, Chakka Nadar Street, Thiruthangal - 626130', '31-03-2019', '11218295537.Siva Suruthi1.jpg', '17935688087.Siva Suruthi.jpg', 'VDCA-10328', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10329, '', 'Udhishta Sri Shashika', 'Female', 'Sivakasi', 'A.A.A International School', '', '', '', '01-10-2011', '7708166080', '', 'Diwakar Ganesh ', '81-B,T.C.N Street, (opp) Rajan Ice Company, Sivakasi', '31-03-2019', '188155285Birth Certificate.jpg', '20503355398.Udhishta Sri Shashika.jpg', 'VDCA-10329', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10330, '', 'Paremeswaran S', 'Male', 'Arupukottai', '', '', '', '', '14-08-1977', '8903968852', '', 'Sarweswaran M', '5/17/29C, Pasumpon Nagar, Palayam Patti, Arupukottai', '31-03-2019', '732125861Birth Certificate.jpg', '139070512Photo.jpg', 'VDCA-10330', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10331, '', 'Pon Malar P', 'Female', 'Sivakasi', '', '', '', '', '26-09-2006', '9047540616', 'pandiagp@gmail.com', 'Pandi Murugan V', '2/1934-c P.S.R Nagar, Sivakasi\r\n', '31-03-2020', '1789009679Birth Certificate.jpg', '1760472467Photo.jpg', 'VDCA-10331', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10332, '', 'Raj Kumar D', 'Male', 'Sivakasi', 'A.A.A International School', '', '', '', '27-06-2004', '9498184165', '', 'Dhamotharan', 'Then Thirupathi Nagar, S N Puram Sivakasi.', '31-03-2019', '2131015915Birth Certificate.jpg', '52429837Photo.jpg', 'VDCA-10332', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10333, '', 'Madhan K', 'Male', 'Sivakasi', '', '', '', '', '24-07-1983', '9941055532', 'spicymadhan@gmail.com', 'Karmegam N', '123, State Bank Colony,Sivakasi.', '31-03-2019', '2046379332Birth Certificate.jpg', '1017032026Photo.jpg', 'VDCA-10333', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10334, '', 'Akash M', 'Male', 'Srivilliputhur', 'Srivi Loins Mat Hr Sec School', '', '', '', '31-08-2005', '8270338751', '', 'Mariappan G', '15A/A2. VOC Nagar, Srivilliputhur', '31-03-2019', '1036388587Birth Certificate.jpg', '1974918648Photo.jpg', 'VDCA-10334', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10335, '', 'Arulnantham V', 'Male', 'Sivakasi ', '', '', '', '', '05-06-1977', '9843115081', 'kvarul@yahoo.com', 'Vadivel K', '48,Navetti Nagar Street, Sivakasi', '31-03-2019', '1852532455Birth Certificate.jpg', '671905333Photo.jpg', 'VDCA-10335', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10336, '', 'Sukaanth S', 'Male', 'Sivakasi', '', '', '', '', '21-12-2011', '9843325796', 'saravananwelcomessss@gmail.com', 'Saravana Kumar G', '316, PKSA Arumuganadar Road, Sivakasi', '31-03-2019', '1023520392Birth Certificate.jpg', '1450900780Photo.jpg', 'VDCA-10336', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10337, '', 'Hasini P.V', 'Female', 'Sivakasi', 'A.A.A International School', '', '', '', '24-02-2011', '9486084499', 'prakashonline2005@gmail.com', 'Prakash G', '2/905, D1, Rangabasyam Nagar, Satchiapuram, Sivakasi', '31-03-2019', '1212824466Birth Certificate.jpg', '1806383831Photo.jpg', 'VDCA-10337', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10338, '', 'Sashanth S', 'Male', 'Sivakasi', '', '', '', '', '16-11-2008', '9843325796', 'saravananwelcomessss@gmail.com', 'Saravana Kumar G', '316, PKSA Arumuganadar Road, Sivakais', '31-03-2019', '938457663Birth Certificate.jpg', '2078309951Photo.jpg', 'VDCA-10338', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10339, '', ' Sriram Sanjeev R', 'Male', 'Sivakasi', 'K.Kamarajar Mat Hr Sec School', '', '', '', '04-07-2010', '9364546999', 'shreelakshmiagency@gmail.com', 'Rajesh S', '1/6/135B,Annamalayar Colony, Second Street, Sivakasi.', '31-03-2019', '1791516347Birth Certificate.jpg', '1379189094Photo.jpg', 'VDCA-10339', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10340, '', 'Vivek P', 'Male', 'Arupukottai', '', '', '', '', '21-03-1996', '9488954920', 'Vivekpvm213@gmail.com', 'Perumal P', '6/1108, North Street, Palavanatham, Arupukottai.', '31-03-2019', '692728221Birth Certificate.jpg', '1192022762Photo.jpg', 'VDCA-10340', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10341, '', 'Vijaya Kumar M', 'Male', 'Madurai', '', '', '', '', '17-03-1999', '8270269602', '', 'Murugan K', '10/198 North Street, Uvari, Thirumangalam, Madurai.', '31-03-2019', '439482058Birth Certificate.jpg', '229706168Photo.jpg', 'VDCA-10341', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10342, '', 'Barath Raj J', 'Male', 'Sivakasi', 'Glory Matric Hr Sec School', '', '', '', '30-01-2007', '9486946256', 'muniyandijeyapandi@gmail.com', 'Jaya Pandi M', 'Ganga Kulam, S N Puram, Sivakasi.', '31-03-2019', '1618303686Birth Certificate.jpg', '697008592Photo.jpg', 'VDCA-10342', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10343, '', 'Jishnu A', 'Male', 'Sivakasi', 'Sri  Shenbaga Vinanyagar Matric Hr Sec School', '', '', '', '06-10-2011', '9843115081', 'kvarul@yahoo.com', 'Arulanatham V', '48,NNavetti Nadar Street, Sivakasi.', '31-03-2019', '546878046Birth Certificate.jpg', '1781317507Photo.jpg', 'VDCA-10343', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10344, '', 'Iniko Inbaraj R', 'Male', 'Sivakasi', '', '', '', '', '20-10-1974', '9442307759', '', 'Rajarathinam K', '8/880 Nehruti Nagar, Reserveline, Sivakasi', '31-03-2019', '636957363Birth Certificate.jpg', '1886905629Photo.jpg', 'VDCA-10344', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10345, '', 'Anandh R', 'Male', 'Sivakasi', '', '', '', '', '19-05-1976', '9488033759', '', 'Rajarathinam K', '8/880, Nehruji Nagar, Reserveline. Sivakasi', '31-03-2019', '559505098Birth Certificate.jpg', '983762390Photo.jpg', 'VDCA-10345', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10346, '', 'Gangadharan G', 'Male', 'Sivakasi', '', '', '', '', '05-10-1979', '9788154640', 'murariganga@gmail.com', 'Gothanda Raman A', '4/34, NGO Colony, Sattur.', '31-03-2019', '365549313Birth Certificate.jpg', '1773372443Photo.jpg', 'VDCA-10346', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10347, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10347', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10348, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10348', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10349, '', 'Kishore Kanth R', 'Male', 'Srivilliputhur', '', '', '', '', '01-08-2005', '9123596957', '', 'Ravi Chandran R', '22C, Sakkarrai Kulam Street, Srivilliputhur.', '31-03-2019', '1588641631Birth Certificate.jpg', '565082813Photo.jpg', 'VDCA-10349', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10350, '', 'Dharun V', 'Male', 'Arupukottai', 'Noble Matric Hr Sec School', '', '', '', '13-10-2008', '9443570057', '', 'Vairamuthu M', '5-34-4D, EB Colony, Kamaraj Nagar, Aruppukottai.', '31-03-2019', '1662806361Birth Certificate.jpg', '2059024075Photo.jpg', 'VDCA-10350', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10351, '', 'Santhosh R', 'Male', 'Srivilliputhur', '', '', '', '', '05-06-2009', '6381168944', 'santhoshbala779@gmail.com', 'Ramesh P', '20/1 Emarajakovil Backside, Kammapatti, Srivilliputhur, Viruthunagar', '31-03-2019', '734707972Birth Certificate.jpg', '1053213094Photo.jpg', 'VDCA-10351', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10352, '', 'Ranjan J', 'Male', 'Thiruthangal', '', '', '', '', '19-05-2008', '9486946250', 'jayapandimuniyandi@gmail.com', 'Jaya Pandi M', '1/57K, Kangakulam, SN Pauram, Thiruthangal', '31-03-2019', '1578275926Birth Certificate.jpg', '1183868408Photo.jpg', 'VDCA-10352', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10353, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10353', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10354, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10354', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10355, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2019', '', '', 'VDCA-10355', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10356, '', 'Keerthana Parmeshvari M', 'Male', 'Srivilliputhur', 'M.N.R.D Girls Hr Sec School', '', '', '', '17-11-2007', '9994752350', '', 'Manikandan V G', '38H, Chettiyakudi Kaliyamman Kovil Street, Gnanaguru Compound, Srivilliputhur', '31-03-2019', '1113535397Birth Certificate.jpg', '502489428Photo.jpg', 'VDCA-10356', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10357, '25121731', 'John A C G', 'Male', 'Rajapalayam', '', '1061', '', '', '20-01-1987', '9443962210', 'reyapaul26@gmail.com', 'Anthony J', '225,Ooranipatti Street, Srivilliputhur', '31-03-2020', '1694040715Birth Certificate.jpg', '1565809065Photo.jpg', 'VDCA-10357', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10358, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10358', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10359, '25947524', 'Khavin M', 'Male', 'Sattur', 'Brilliant Chess Acadamy', '', '', '', '20-07-2010', '9941055532', 'spicymadhan@gmail.com', 'Madhan K', '35,Anna Nagar, Sattur.', '31-03-2020', '895208448Birth Certificate.jpg', '185158250Photo.jpg', 'VDCA-10359', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10360, '25128140', 'Anandha Krishnan R', 'Male', 'Viruthunagar', 'Brilliant Chess Acadamy', '', '', '', '14-11-2010', '9894646473', 'rajeshbalajia@gmail.com', 'Rajesh A', '46, Seethakthi Street, Viruthunagar.', '31-03-2020', '111206910Birth Certificate.jpg', '1919420950Photo.jpg', 'VDCA-10360', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10361, '45090866', 'Jegathees M', 'Male', 'Thiruthangal', '', '', '', '', '17-08-2000', '7305655834', 'jegarex09@gmail.com', 'Mariyappan K P', '60/B Sathya Nagar, Thiruthangal.', '31-03-2020', '1253406327Birth Certificate.jpg', '1794978257Photo.jpg', 'VDCA-10361', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10362, '45023816', 'Karuppasamy M', 'Male', 'Thiruthangal', '', '', '', '', '01-07-1971', '9787338289', '', 'Macha Kala A', '64 A, K.K Nagar, Thiruthangal.', '31-03-2020', '799275030Birth Certificate.jpg', '2144186399Photo.jpg', 'VDCA-10362', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10363, '25759949', 'Vidya C', 'Female', 'Sivakasi', '', '', '', '', '05-12-1985', '9843428179', 'shyam@arasanshirts.com', 'Chandra Mohan C', '40, Gnanagiri Road, Cornation Colony, Sivakasi.', '31-03-2020', '751791338Birth Certificate.jpg', '1525527169Photo.jpg', 'VDCA-10363', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10364, '25671715', 'Shri Nimeshika K', 'Male', 'Sivakasi', '', '', '', '', '22-11-2008', '9629298889', 'niranchala@gmail.com', 'Karthikeyan V', '1/604,E N G O Colony, Satchiyapuram, sivakasi', '31-03-2020', '309467573BC.jpg', '1660298207VDCA.jpg', 'VDCA-10364', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10365, '45023689', 'GopalaKrishnan K', 'Male', 'Rajapalayam', '', '', '', '', '30-12-2004', '9150462432', 'shrgopi@gmail.com', 'Karthikeyan R', '35, Jyodhi Ram Nagar, Rajapalayam', '31-03-2020', '1236520156BC.jpg', '279024240VDCA.jpg', 'VDCA-10365', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10366, '25671537', 'Nishanthini P R', 'Female', 'Thiruthangal', '', '', '', '', '16-04-2006', '9442324387', 'kiramaketing@gmail.com', 'Palanirajan M', '136 A, Sathiya Nagar, Thiruthangal', '31-03-2020', '1559789396BC.jpg', '1824381976VDCA.jpg', 'VDCA-10366', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10367, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10367', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10368, '45090726', 'Bhuvana priyadharshini G', 'Female', 'Sivakasi', '', '', '', '', '22-09-2006', '04562-272562', 'acganeshsvks@gmail.com', 'Ganesh A C ', '2/2186E 3, Sri srinivasa Nagar, Sivakasi', '31-03-2020', '1414639546BC.jpg', '1820745229VDCA.jpg', 'VDCA-10368', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10369, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10369', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10370, '25759523', 'Kirpesh I', 'Male', 'Sivakasi', '', '', '', '', '27-08-2008', '7010656213', 'inbarani@gmail.com', 'Inbarajalingam R', '1723 T K, Renghabhasyam Nagar, Reservline, Sivakasi', '31-03-2020', '1288249569BC.jpg', '1592366139VDCA.jpg', 'VDCA-10370', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10371, '45090815', 'Gurubaran K', 'Male', 'Sivakasi', '', '', '', '', '21-10-2005', '9843037910', '', 'Kamalakannan V', '75, Vetri Gnaniyar Street, Sivakasi', '31-03-2020', '270394952BC.jpg', '419628616VDCA.jpg', 'VDCA-10371', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10372, '45022259', 'Kumaresh A', 'Male', 'Viruthunagar', 'KVS Mtr Hr Sec School', '1638', '', '', '08-06-2004', '9442803418', 'kumareshayyachamy0408@gmail.com', 'Ayyachamy K', '78 A, A T M P N Nagar, Viruthunagar', '31-03-2020', '1678951802BC.jpg', '1084962930VDCA.jpg', 'VDCA-10372', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10373, '25954253', 'Raja Vaishnave J', 'Female', 'Viruthunagar', 'Brilliant Chess Acadamy', '', '', '', '10-05-2008', '9487602188', 'vimaladevijk@gmail.com', 'Jaya Kumar V', '9/1, Narayana Madam Street, Viruthunagar', '31-03-2020', '1870009567BC.jpg', '1410091950VDCA.jpg', 'VDCA-10373', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10374, '5037417', 'Lenin AG', 'Male', 'Rajapalayam', '', '1350', '', '', '21-04-1972', '9894257913', '', 'Gurusamy A', '8/3 South Street, Chatrmatti, Rajapalauam', '31-03-2020', '532006377BC.jpg', '486555767VDCA.jpg', 'VDCA-10374', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10375, '35085255', 'Porkalaivani N', 'Female', 'Viruthunagar', 'PSC School', '1320', '', '', '13-09-2003', '9894926761', 'greenpearl68150@gmail.com', 'Nagarajan R', '1/2171, Muthal Nagar, Pandian Nagar, VNR', '31-03-2020', '922639417BC.jpg', '1479731310VDCA.jpg', 'VDCA-10375', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10376, '45002592', 'Thirumalai rajan M', 'Male', 'Viruthunagar', '', '1131', '', '', '22-04-1978', '9488392209', 'thirurajan6666@gmail.com', 'Mottaiyan M', '6/638/9A, Cholan Street,Lakshmi Nagar, VNR', '31-03-2020', '447547448BC.jpg', '264560966VDCA.jpg', 'VDCA-10376', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10377, '25932004', 'Kishor S', 'Male', 'Srivilliputhur', '', '1088', '', '', '18-03-2005', '9842198625', '', 'Siva Guru nathan ', '46, Manjapoo St, Srivilliputhur.', '31-03-2020', '865217208BC.jpg', '1116964012VDCA.jpg', 'VDCA-10377', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10378, '25756559', 'Rajajeevananthan T', 'Male', 'Arupukottai', '', '', '', '', '30-06-2008', '9003664396', 'rajajeeva2008@gmail.com', 'Thangaraj ', '36, Chiorambapuram Street, Thirynagarm, Arupukottai', '31-03-2020', '1085609665BC.jpg', '175317223VDCA.jpg', 'VDCA-10378', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10379, '45024138', 'Shadhursshaan R', 'Male', 'Arupukottai', '', '', '', '', '31-08-2007', '9788727426', 'pramar1987@gmail.com', 'Ramar P', '11, Nanthavanam Street, Chinna Puliyam patti, Arupukottai', '31-03-2020', '1002904646BC.jpg', '1713293862VDCA.jpg', 'VDCA-10379', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10380, '25954210', 'Muhundan M', 'Male', 'Sivakasi', '', '1043', '', '', '04-09-2007', '04562-226681', '', 'Muralitharan N V', '377, Kamarajar Road, Sivakasi.', '31-03-2020', '1850471689BC.jpg', '470586271VDCA.jpg', 'VDCA-10380', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10381, '45009880', 'Sajan J', 'Male', 'Sivakasi', '', '1553', '', '', '11-12-2005', '9843669670', '', 'Jai kumar A', '830, Mundagannadar Street, Periyandavar Colony, Sivakasi', '31-03-2020', '1819945703BC.jpg', '177684134VDCA.jpg', 'VDCA-10381', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10382, '35049097', 'Boophesh Kumar M', 'Male', 'Sivakasi', '', '1300', '', '', '29-04-2005', '9843322439', '', 'Mani Kandan P', '1327 Solai Colony, Sivakasi', '31-03-2020', '26927589BC.jpg', '1085203403VDCA.jpg', 'VDCA-10382', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10383, '25954156', 'Agaash V', 'Male', 'Sivakasi', 'Arasan Model  School', '1094', '', '', '23-01-2005', '9443139483', 'mahalakshmivichu@gmail.com', 'Vignesh', '169/V Kattalai Patti Road, Sivakasi', '31-03-2020', '349033243BC.jpg', '1932415197VDCA.jpg', 'VDCA-10383', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10384, '25042564', 'Saravanan A', 'Male', 'Viruthunagar', '', '1004', '', '', '09-05-1989', '6380256959', 'saravanasankar@gmail.com', 'Alagarsamy P', '1/114 West Street, Mettugundu(PO) VNR', '31-03-2020', '1116976636BC.jpg', '1807678216VDCA.jpg', 'VDCA-10384', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10385, '46655298', 'Sivanandha V', 'Male', 'Viruthunagar', '', '1277', '', '', '08-12-2002', '9952156275', '', 'Vijayan M', '6/618,lakshmi Nagar, VNR', '31-03-2020', '108018466BC.jpg', '2071555512VDCA.jpg', 'VDCA-10385', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10386, '', 'Sharveshraj G', 'Male', 'Arupukottai', 'Sri Iishwas Vidhyalaya', '', '', '', '12-05-2005', '9894442828', 'sharveshraj12@gmail.com', 'Gurunathan P', '68, Viruthunagar Main Road, Arupukottai', '31-03-2020', '901926459BC.jpg', '878439042VDCA.jpg', 'VDCA-10386', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10387, '', 'Brabhu Sankar Raja R', 'Male', 'Thiruthangal', 'Thiruthangal lionsn Mat Hr Sec School', '', '', '', '12-02-2009', '9486737398', 'nanthanraja123@gmail.com', 'Raja S', '4/173A, AJ Nagar, Pallapatti Road, Thiruthangal', '31-03-2020', '64884545BC.jpg', '1400705803VDCA.jpg', 'VDCA-10387', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10388, '', 'Oviya B', 'Female', '', '', '', '', '', '07-09-2004', '9566734363', 'divyaoviya@gmail.com', 'Bala Murugan K', '82/A, Chairman, N K R road, Sivakasi', '31-03-2020', '2138473600BC.jpg', '1281532231VDCA.jpg', 'VDCA-10388', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10389, '5013232', 'Maheswaran P', 'Male', 'Sivakasi', '', '2175', '', '', '10-10-1986', '9843372842', 'maheswaranpalsamy@gmail.com', 'Palsamy M', '249/1 Ayyapan Colony, attalai Patti Road, Sivakasi\r\n', '31-03-2020', '1057888565BC.jpg', '1512678527VDCA.jpg', 'VDCA-10389', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10390, '', 'Kanirathinam A', 'Male', 'Rajapalayam', '', '', '', '', '19-01-2005', '9976810902', '', 'Abrahamdevadhas ', '3/219V Sivan Kovil Street, Mankudi, rajapalayam', '31-03-2020', '2066386035BC.jpg', '920204460VDCA.jpg', 'VDCA-10390', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10391, '', 'Arun M', 'Male', 'Arupukottai', 'Sengunthar Primery School', '', '', '', '30-11-2008', '9597909871', 'arunmaheswari@gmail.com', 'Murugesan', '130, Sownthar Rajapuram Street, Arupukottai', '31-03-2020', '1543665719BC.jpg', '703998738VDCA.jpg', 'VDCA-10391', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10392, '', 'Kabilan K', 'Male', 'Rajapalayam', '', '', '', '', '30-08-2004', '9894677619', '953614114010@ritrjpm.ac.in', 'Karuppalagu S', '95/125, K M D V P Street, Rajapalayam', '31-03-2020', '953493521BC.jpg', '720552678VDCA.jpg', 'VDCA-10392', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10393, '', 'Farhan Siddia MZ', 'Male', 'Sivakasi', '', '', '', '', '08-02-2010', '04562-223786', 'zindamalar@gmail.com', 'Mohamed Zindha Madhar H', '67, Seethakathi North Street, Sivakasi', '31-03-2020', '949324840BC.jpg', '1995321271VDCA.jpg', 'VDCA-10393', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10394, '', 'Harsith V', 'Male', 'Rajapalayam', '', '', '', '', '15-06-2010', '9842109638', 'preethikarmasamy34@gmail.com', 'Vairamuthu G', '66A, Thambapillai Street, rajapalayam.', '31-03-2020', '1806220332BC.jpg', '1520968842VDCA.jpg', 'VDCA-10394', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10395, '', 'Mukesh V', 'Male', '', '', '', '', '', '09-06-2008', '8778452429', 'sanjumugi@gmail.com', 'Vanaraj S', '146 F 1, Chinna Suraki Patti Street', '31-03-2020', '1832114997BC.jpg', '2060083183VDCA.jpg', 'VDCA-10395', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10396, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10396', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10397, '', 'Vijaya Kumar M', 'Male', 'Rajapalayam', '', '', '', '', '05-04-2003', '9360485320', '', 'Murugan V', '46, Maniapoo Street, rajapalayam', '31-03-2020', '472106417BC.jpg', '1074079512VDCA.jpg', 'VDCA-10397', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10398, '', 'Vasanth S ', 'Male', 'Sivakasi', '', '', '', '', '20-10-2006', '9787287159', 'jeyanthmass@gmail.com', 'Srinivasamurugesan A', '1/122 middle Street, Meenampatti, Sivakasi', '31-03-2020', '1322931718BC.jpg', '140296469VDCA.jpg', 'VDCA-10398', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10399, '', 'Pragalathan J', 'Male', 'Sivakasi', '', '', '', '', '16-08-2008', '9486407116', 'thillaisumanju@gmail.com', 'Jayaraman C', '264F, Kasthuri Complex, sivakasi', '31-03-2020', '1573439119BC.jpg', '329013977VDCA.jpg', 'VDCA-10399', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10400, '', 'Shweta K S', 'Female', 'Sivakasi', 'The Sivakasi Lions Mat Hr Sec School', '', '', '', '29-09-2009', '9367412181', 'srishiv2017@gmail.com', 'Sriram P K', '108/3 Velayutham Road, Sivakasi', '31-03-2020', '1446391637BC.jpg', '960631709VDCA.jpg', 'VDCA-10400', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10401, '', 'Shyam K S', 'Male', 'Sivakasi', '', '', '', '', '16-02-2013', '9367412181', 'srishiv2017@gmail.com', 'Sriram P K', '108/3 Velayutham Road, Sivakasi', '31-03-2020', '2028264097BC.jpg', '908252436VDCA.jpg', 'VDCA-10401', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10402, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10402', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10403, '', 'Dhaarukeesh A', 'Male', 'Sivakasi', '', '', '', '', '18-10-2007', '9843355551', '', 'Arun Kumar S', '6/1438, Srivilliputhur Road, Sachiyapuram, Sivakasi.', '31-03-2020', '807575210BC.jpg', '1201622686VDCA.jpg', 'VDCA-10403', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10404, '', 'Sri Aadhya S A', 'Male', 'Sivakasi', 'Arasan Model  School', '', '', '', '21-11-2011', '9750957908', 'sjsivanesh@gmail.com', 'Sivanesh Kumaran J', '17B, Chairman A R Arunachalam Road, Sivakasi', '31-03-2020', '1285325405BC.jpg', '292531835VDCA.jpg', 'VDCA-10404', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10405, '', 'Haribalan K', 'Male', 'Sivakasi', '', '', '', '', '18-08-2009', '9791501133', '', 'Kanagavel P', '2/356F, South Street, Poolapurani, Sivakasi', '31-03-2020', '1517759367BC.jpg', '873126130VDCA.jpg', 'VDCA-10405', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10406, '', 'Jeya Shree', 'Female', 'Viruthunagar', 'Brilliant Chess Academy', '', '', '', '29-06-2012', '9894646473', 'yajeshbalaji@gmail.com', 'Rajesh A', '46,Seethakathi Street, Viruthunagar', '31-03-2020', '803216132BC.jpg', '280692213VDCA.jpg', 'VDCA-10406', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10407, '25671502', 'Mareeswari K', 'Female', 'Rajapalayam', '', '', '', '', '24-11-2003', '9942962962', 'mareeswari406@gmail.com', 'Karuppasamy G', '1/307. Colony Street, Kilavikulam, rajapalayam ', '31-03-2020', '2096199574BC.jpg', '160767444VDCA.jpg', 'VDCA-10407', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10408, '7686', '325456', 'female', '', 'yityi', '768', '5678', '67', '', '', '5747@uio.uiotr', 'tyuiku', 'ty5try', '31-03-2020', '', '', 'VDCA-10408', 0, '', '', '', '', '0000-00-00', '|||', '|192.168.57.180|192.168.57.180|192.168.57.180|192.168.57.180', '0000-00-00'),
(10409, '', 'Mohnish S', 'Male', 'Sivakasi', 'Jaycess School, Sivakasi', '', '', '', '04-06-2006', '9994378280', 'sujasubbu2@gmail.com', 'Subburaj E', '1/583 - South St Narnapuram, Sivakasi', '31-03-2020', '79232405Mohnish.jpg', '307226953VDCA.jpg', 'VDCA-10409', 0, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10410, '25954229', 'Naveen Saravana Kumar', 'Male', 'Sivakasi', '', '', '', '', '30-08-2007', '9585773307', 'naveensaravanakumar@gmail.com', 'Saravanakumar T S', '134, Palaniandavar Puram Colony, E.B Back side, Sivakasi', '31-03-2020', '1940700376BC.jpg', '1443811607Naveen.jpg', 'VDCA-10410', 801438, '', '', '', '', '0000-00-00', '', '', '0000-00-00'),
(10451, '', 'boopathi', 'Male', 'Namakkal', '', '', '', '', '1998-08-06', '7373335016', 'iu@yut.uou', 'boopathi', '2 / 205, 87  Goundampalayams,, Kumaramangalam (Po),, Tiruchengode (Tk),, Namakkal (Dt)  637205.', '', '', '', 'VDCA-.10451', 566606, '', '', '', '', '0000-00-00', '', '|192.168.57.180', '0000-00-00');

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

INSERT INTO `vdca_ratedplayer` (`id`, `name`, `irtg`, `club`, `dob`, `fide_id`, `cip`, `cby`, `cdate`, `mby`, `mdate`, `mip`) VALUES
(1, 'Maheswaran .P', '2182', 'SVKS', '1986-00-00', '5013232', 'admin', '19/11/05', '0000-00-00', '', '0000-00-00', ''),
(2, 'Safira Shahnaz', '2117', 'RJPM', '0000-00-00', '5003482', 'admin', '19/11/05', '0000-00-00', '', '0000-00-00', '');

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
-- Indexes for table `vdca_franchise_company_debits`
--
ALTER TABLE `vdca_franchise_company_debits`
  ADD PRIMARY KEY (`debit_id`);

--
-- Indexes for table `vdca_gallery`
--
ALTER TABLE `vdca_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_notes`
--
ALTER TABLE `vdca_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_payments`
--
ALTER TABLE `vdca_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vdca_players_db`
--
ALTER TABLE `vdca_players_db`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT for table `vdca_advertisement`
--
ALTER TABLE `vdca_advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vdca_event`
--
ALTER TABLE `vdca_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vdca_feedback`
--
ALTER TABLE `vdca_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vdca_franchise_company_debits`
--
ALTER TABLE `vdca_franchise_company_debits`
  MODIFY `debit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `vdca_gallery`
--
ALTER TABLE `vdca_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vdca_notes`
--
ALTER TABLE `vdca_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vdca_payments`
--
ALTER TABLE `vdca_payments`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `vdca_players_db`
--
ALTER TABLE `vdca_players_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10454;
--
-- AUTO_INCREMENT for table `vdca_ratedplayer`
--
ALTER TABLE `vdca_ratedplayer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
