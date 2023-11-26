-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 07:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_group`
--

CREATE TABLE `auth_group` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_group_permissions`
--

CREATE TABLE `auth_group_permissions` (
  `id` bigint(20) NOT NULL,
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_permission`
--

CREATE TABLE `auth_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `codename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_permission`
--

INSERT INTO `auth_permission` (`id`, `name`, `content_type_id`, `codename`) VALUES
(1, 'Can add log entry', 1, 'add_logentry'),
(2, 'Can change log entry', 1, 'change_logentry'),
(3, 'Can delete log entry', 1, 'delete_logentry'),
(4, 'Can view log entry', 1, 'view_logentry'),
(5, 'Can add permission', 2, 'add_permission'),
(6, 'Can change permission', 2, 'change_permission'),
(7, 'Can delete permission', 2, 'delete_permission'),
(8, 'Can view permission', 2, 'view_permission'),
(9, 'Can add group', 3, 'add_group'),
(10, 'Can change group', 3, 'change_group'),
(11, 'Can delete group', 3, 'delete_group'),
(12, 'Can view group', 3, 'view_group'),
(13, 'Can add user', 4, 'add_user'),
(14, 'Can change user', 4, 'change_user'),
(15, 'Can delete user', 4, 'delete_user'),
(16, 'Can view user', 4, 'view_user'),
(17, 'Can add content type', 5, 'add_contenttype'),
(18, 'Can change content type', 5, 'change_contenttype'),
(19, 'Can delete content type', 5, 'delete_contenttype'),
(20, 'Can view content type', 5, 'view_contenttype'),
(21, 'Can add session', 6, 'add_session'),
(22, 'Can change session', 6, 'change_session'),
(23, 'Can delete session', 6, 'delete_session'),
(24, 'Can view session', 6, 'view_session');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `last_login` datetime(6) DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(254) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_joined` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `password`, `last_login`, `is_superuser`, `username`, `first_name`, `last_name`, `email`, `is_staff`, `is_active`, `date_joined`) VALUES
(1, 'pbkdf2_sha256$260000$uyXggSt0JmG8jllp2plElg$NcBrlzb0P0iyBUY3flCI37YTrzIdVkQAb4oAyPVOW50=', '2021-04-17 13:18:23.876969', 1, 'superadmin', '', '', 'admin@gmail.com', 1, 1, '2021-04-17 13:17:44.841231');

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_groups`
--

CREATE TABLE `auth_user_groups` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `auth_user_user_permissions`
--

CREATE TABLE `auth_user_user_permissions` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bprecords`
--

CREATE TABLE `bprecords` (
  `uid` varchar(20) NOT NULL,
  `dateofrecord` date NOT NULL,
  `dia` int(11) NOT NULL,
  `syst` int(11) NOT NULL,
  `pulse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bprecords`
--

INSERT INTO `bprecords` (`uid`, `dateofrecord`, `dia`, `syst`, `pulse`) VALUES
('44', '2020-07-07', 95, 165, ''),
('55', '2020-07-15', 65, 120, ''),
('12', '2020-07-01', 56, 54, ''),
('simmy@gmail.com', '2020-07-07', 100, 50, ''),
('', '0000-00-00', 0, 0, ''),
('', '0000-00-00', 0, 0, ''),
('', '0000-00-00', 0, 0, ''),
('simmy@gmail.com', '2020-07-07', 100, 50, '60'),
('', '0000-00-00', 0, 0, ''),
('', '0000-00-00', 0, 0, ''),
('', '0000-00-00', 0, 0, ''),
('chimanlal@gmail.com', '2020-07-08', 70, 90, '62'),
('abcd@gmail.com', '2020-07-07', 90, 120, '72'),
('aakarsahit@gmail.com', '2020-07-08', 80, 110, '70'),
('a@gmail.com', '2020-08-11', 75, 110, '72'),
('a@gmail.com', '2020-08-13', 85, 120, '72');

-- --------------------------------------------------------

--
-- Table structure for table `django_admin_log`
--

CREATE TABLE `django_admin_log` (
  `id` int(11) NOT NULL,
  `action_time` datetime(6) NOT NULL,
  `object_id` longtext DEFAULT NULL,
  `object_repr` varchar(200) NOT NULL,
  `action_flag` smallint(5) UNSIGNED NOT NULL CHECK (`action_flag` >= 0),
  `change_message` longtext NOT NULL,
  `content_type_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `django_content_type`
--

CREATE TABLE `django_content_type` (
  `id` int(11) NOT NULL,
  `app_label` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_content_type`
--

INSERT INTO `django_content_type` (`id`, `app_label`, `model`) VALUES
(1, 'admin', 'logentry'),
(3, 'auth', 'group'),
(2, 'auth', 'permission'),
(4, 'auth', 'user'),
(5, 'contenttypes', 'contenttype'),
(6, 'sessions', 'session');

-- --------------------------------------------------------

--
-- Table structure for table `django_migrations`
--

CREATE TABLE `django_migrations` (
  `id` bigint(20) NOT NULL,
  `app` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applied` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `django_migrations`
--

INSERT INTO `django_migrations` (`id`, `app`, `name`, `applied`) VALUES
(1, 'contenttypes', '0001_initial', '2021-04-17 13:14:36.024749'),
(2, 'auth', '0001_initial', '2021-04-17 13:14:50.996360'),
(3, 'admin', '0001_initial', '2021-04-17 13:14:54.574519'),
(4, 'admin', '0002_logentry_remove_auto_add', '2021-04-17 13:14:54.637025'),
(5, 'admin', '0003_logentry_add_action_flag_choices', '2021-04-17 13:14:54.683900'),
(6, 'contenttypes', '0002_remove_content_type_name', '2021-04-17 13:14:56.980772'),
(7, 'auth', '0002_alter_permission_name_max_length', '2021-04-17 13:15:02.043397'),
(8, 'auth', '0003_alter_user_email_max_length', '2021-04-17 13:15:02.980947'),
(9, 'auth', '0004_alter_user_username_opts', '2021-04-17 13:15:03.199654'),
(10, 'auth', '0005_alter_user_last_login_null', '2021-04-17 13:15:09.110212'),
(11, 'auth', '0006_require_contenttypes_0002', '2021-04-17 13:15:10.813765'),
(12, 'auth', '0007_alter_validators_add_error_messages', '2021-04-17 13:15:10.997767'),
(13, 'auth', '0008_alter_user_username_max_length', '2021-04-17 13:15:11.261767'),
(14, 'auth', '0009_alter_user_last_name_max_length', '2021-04-17 13:15:11.493763'),
(15, 'auth', '0010_alter_group_name_max_length', '2021-04-17 13:15:11.701766'),
(16, 'auth', '0011_update_proxy_permissions', '2021-04-17 13:15:11.837766'),
(17, 'auth', '0012_alter_user_first_name_max_length', '2021-04-17 13:15:12.549772'),
(18, 'sessions', '0001_initial', '2021-04-17 13:15:13.109767');

-- --------------------------------------------------------

--
-- Table structure for table `django_session`
--

CREATE TABLE `django_session` (
  `session_key` varchar(40) NOT NULL,
  `session_data` longtext NOT NULL,
  `expire_date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `uid` varchar(11) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `spl` varchar(100) NOT NULL,
  `qual` varchar(100) NOT NULL,
  `studied` varchar(100) NOT NULL,
  `exp` int(11) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `ppic` varchar(50) NOT NULL,
  `cpic` varchar(50) NOT NULL,
  `info` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`uid`, `dname`, `contact`, `spl`, `qual`, `studied`, `exp`, `hospital`, `address`, `city`, `email`, `website`, `ppic`, `cpic`, `info`) VALUES
('1', '1', '1', '', '1', '1', 1, '1', '1', '0', '1@gmail.com', '1', 'admininfo.png', 'adds2.gif', 'jHBFDGFYDASOGYA'),
('100', 'Dani Goyal', '9988271419', 'Radiologists', 'M.B.B.S,M.D', 'PIMS', 12, 'DELHI HEART HOSPITAL , BATHINDA', 'SECTOR 32 , CHANDIGARH', 'CHANDIGARH', 'dani1234@gmail.com', 'danimedicare.com', 'and2.jpg', 'img1.jpg', 'I HAVE COMPLETED MY SCHOLLING FROM SACRED HEART CONVENT SCHOOL, MALOUT. '),
('1000', 'dfrd', '', 'Allergists', '', '', 0, '', '', '', '', '', '', '', ''),
('12', 'ajay goyal', '9988271419', 'Oncologists', 'M.B.B.S,M.D', 'PIMS', 20, 'DELHI HEART HOSPITAL , BATHINDA', 'Burf Wali Gali , Bathinda', 'CHANDIGARH', 'singla@gmail.com', 'singla.com', 'and2.jpg', 'img2.jpg', ''),
('2000', 'b', '9988335577', 'Otalaryngologists', 'ssaf', 'sdfq', 5, '', '', '', 'de@gmail.com', '', '', '', ''),
('agam12', 'Dr.Agam', '9988271419', 'Gastroenterologists', 'M.B.B.S,M.D and further', 'PIMS', 18, 'PGI , CHANDIGARH', 'SECTOR 32 , CHANDIGARH', 'CHANDIGARH', 'agam@gmail.com', 'agamhealthcare.com', 'img2.jpg', 'contacts.jpg', 'I am a athelete too.\r\nI got 650/720 in NEET exam in 2000.\r\nI was university topper.\r\nI have achieved awards under my specialisation.'),
('dani1234', 'Dani Goyal', '9872656111', 'Oncologists', 'M.B.B.S,M.D', 'PIMS', 12, 'DELHI HEART HOSPITAL , BATHINDA', 'Burf Wali Gali , Bathinda', 'Bathinda', 'dani@gmail.com', 'dani1234.com', 'and2.jpg', 'contacts.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `uid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `problems` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`uid`, `name`, `gender`, `age`, `address`, `city`, `email`, `contact`, `problems`) VALUES
('154', 'agam', 'male', 20, 'bnadsjlfhweuilheuifhqwhfhbqwhb#1232', 'bathinda', 'a@g.com', 'a@g.com', 'a@g.com'),
('16', 'danish', 'male', 16, 'gwjeighoiewgjioergwohihjwhji', 'bti', 'jhjnewu2@g.com', '9998866666', 'SUGAR\r\nBP\r\nDIARRHOEA          \r\n               '),
('a@gmail.com', 'agam', 'male', 22, 'Burf Wali Gali , Bathinda', 'Bathinda', 'a@gmail.com', '7814940066', 'BP,SUGAR                   \r\n               '),
('aakarsahit@gmail.com', 'aakarshit', 'male', 20, 'Burf Wali Gali , Bathinda', 'Bathinda', 'aakarsahit@gmail.com', '6284224158', 'BP\r\nSUGAR\r\nURINE INFECTION                   \r\n               '),
('abcd@gmail.com', 'abcd', 'male', 20, 'Burf Wali Gali , Bathinda', 'CHANDIGARH', 'abcd@gmail.com', '8264789311', 'BP\r\nSUGAR                   \r\n               '),
('abcdef@gmail.com', 'agam', 'male', 22, 'Burf Wali Gali , Bathinda', 'Bathinda', 'agam@gmail.com', '9988271419', 'BP                   \r\n               '),
('chimanlal@gmail.com', 'Chiman lal', 'male', 50, 'SECTOR 32 , CHANDIGARH', 'CHANDIGARH', 'chimanlal@gmail.com', '7508871419', 'HEART PROBLEMS                   \r\n               '),
('danish@gmail.com', 'danish', 'male', 17, 'Burf Wali Gali , Bathinda', 'Bathinda', 'danish@gmail.com', '9815709858', 'BP\r\nSUGAR           \r\n        '),
('simmy@gmail.com', 'Simmy', 'female', 42, 'Burf Wali Gali , Bathinda', 'Bathinda', 'simmy@gmail.com', '9888363416', 'BP\r\nSUGAR\r\nTHYROID\r\nURINE INFECTION              \r\n               ');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `uid` int(11) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `dos` date NOT NULL,
  `ppic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`uid`, `pwd`, `mob`, `dos`, `ppic`) VALUES
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '12', '123', '2020-06-11', 'addSide5.jpg'),
(0, '00', '2020-06-25', '0000-00-00', 'admininfo.png'),
(0, '12', '2020-07-03', '0000-00-00', 'addSide5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slips`
--

CREATE TABLE `slips` (
  `rid` int(11) NOT NULL,
  `patientid` varchar(20) NOT NULL,
  `doctorname` varchar(20) NOT NULL,
  `dovisit` date NOT NULL,
  `city` varchar(100) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `nextdov` date NOT NULL,
  `discussion` varchar(1000) NOT NULL,
  `slippic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slips`
--

INSERT INTO `slips` (`rid`, `patientid`, `doctorname`, `dovisit`, `city`, `hospital`, `problem`, `nextdov`, `discussion`, `slippic`) VALUES
(1, '12', 'agam', '0000-00-00', 'bathinda', 'pims', 'bp', '0000-00-00', 'a', 'and2.jpg'),
(2, '<br /><b>Notice</b>:', 'mahajan', '2020-07-01', 'Bathinda', 'DELHI HEART HOSPITAL , BATHINDA', 'BP,SUGAR', '2020-07-30', '', 'contacts.jpg'),
(3, '<br /><b>Notice</b>:', 'mahajan', '2020-07-01', 'Bathinda', 'DELHI HEART HOSPITAL , BATHINDA', 'BP,SUGAR', '2020-07-30', '', 'contacts.jpg'),
(4, 'simmy@gmail.com', 'mahajan', '2020-07-07', 'Bathinda', 'DELHI HEART HOSPITAL , BATHINDA', 'BP,SUGAR,URINE INFECTION,THYROID', '2020-07-31', '3 GLASSES OF WATER DAILY.\r\nTAKE MEDICINES DAILY ON TIME.', 'and2.jpg'),
(5, 'chimanlal@gmail.com', 'Ashutosh', '2020-07-08', 'CHANDIGARH', 'PGI , CHANDIGARH', 'HEART PROBLEMS', '2020-07-27', 'EAT HEALTHY VEGETABLES', 'contacts.jpg'),
(6, 'abcd@gmail.com', 'ashutosh', '2020-07-07', 'Bathinda', 'DELHI HEART HOSPITAL , BATHINDA', 'BP,SUGAR', '2020-07-29', '', 'contacts.jpg'),
(7, 'aakarsahit@gmail.com', 'aakarshit', '2020-07-08', 'Bathinda', 'DELHI HEART HOSPITAL , BATHINDA', 'BP,SUGAR,URINE INFECTION', '2020-07-29', 'DO EXERCISE DAILY.', 'contacts.jpg'),
(8, 'a@gmail.com', 'ashutosh', '2020-08-04', 'Bathinda', 'DELHI HEART HOSPITAL , BATHINDA', 'BP', '2020-08-18', '', 'contacts.jpg'),
(9, 'agu@gmail.com', '', '0000-00-00', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sugarrecord`
--

CREATE TABLE `sugarrecord` (
  `uid` varchar(50) NOT NULL,
  `dateofrecord` date NOT NULL,
  `timerecord` time NOT NULL,
  `sugartime` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sugarresult` float NOT NULL,
  `medintake` varchar(500) NOT NULL,
  `urineresult` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sugarrecord`
--

INSERT INTO `sugarrecord` (`uid`, `dateofrecord`, `timerecord`, `sugartime`, `age`, `sugarresult`, `medintake`, `urineresult`) VALUES
('12', '2020-07-08', '02:41:00', '00:00:00', 55, 56, 'akjsabdksh', 70),
('10', '2020-07-02', '04:45:00', 'Before Exercise', 40, 56.25, 'Disprin', 54.55),
('0', '2020-07-14', '10:09:00', 'After Meal', 20, 56.55, 'Disprin', 60.56),
('0', '2020-07-07', '11:14:00', 'Before Exercise', 42, 56, 'DISPRIN', 70),
('0', '2020-07-02', '15:29:00', 'Bedtime', 42, 45, '', 0),
('0', '2020-07-02', '15:29:00', 'Bedtime', 42, 45, '', 0),
('0', '2020-07-16', '14:35:00', 'Fasting', 42, 56, 'DISPRIN', 75),
('0', '2020-07-23', '14:38:00', 'Bedtime', 20, 86, '', 0),
('0', '2020-07-02', '13:38:00', 'Before Meal', 17, 12, '', 0),
('0', '2020-07-01', '13:43:00', 'Before Exercise', 17, 10, '', 0),
('0', '2020-07-02', '13:43:00', 'Before Exercise', 20, 20, '', 0),
('0', '0000-00-00', '00:00:00', '', 0, 0, '', 0),
('danish@gmail.com', '2020-07-08', '16:20:00', 'Before Exercise', 42, 58, 'DISPRIN', 20),
('chimanlal@gmail.com', '2020-07-08', '15:25:00', 'After Exercise', 50, 56, 'CROCIN', 72),
('abcd@gmail.com', '2020-07-07', '13:48:00', 'Bedtime', 20, 56, 'CROCIN', 56),
('aakarsahit@gmail.com', '2020-07-08', '14:57:00', 'Fasting', 20, 56.25, 'DISPRIN', 75.5),
('a@gmail.com', '2020-08-11', '17:02:00', 'Before Exercise', 22, 65, 'DISPRIN', 57);

-- --------------------------------------------------------

--
-- Table structure for table `trainees`
--

CREATE TABLE `trainees` (
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dos` text NOT NULL,
  `mob` varchar(20) NOT NULL,
  `ppic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uid` varchar(20) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Mob` varchar(20) NOT NULL,
  `dos` date NOT NULL DEFAULT current_timestamp(),
  `occupation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uid`, `Pass`, `Mob`, `dos`, `occupation`) VALUES
('dfsghe@ggg.com', '789', '546531', '0000-00-00', ''),
('agamgoyal71419@gmail', '123', '9988271419', '0000-00-00', ''),
('abc@gmail.com', '5656', '9988972419', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('', '', '', '0000-00-00', ''),
('chandan@gmail.com', '123', '9056530801', '0000-00-00', ''),
('za@g.com', '3', '3', '0000-00-00', '2020-07-03'),
('a@g.com', '12', '12', '2020-07-03', 'undefined'),
('hg@g.com', '123', '321', '2020-07-03', 'Doctor'),
('dfsghe@ggg.com', '12', '221', '2020-07-03', 'Doctor'),
('', '', '', '2020-07-03', ''),
('', '', '', '2020-07-03', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-04', ''),
('', '', '', '2020-07-05', ''),
('', '', '', '2020-07-06', ''),
('gabbar', '123', '2234', '2020-07-21', 'Doctor'),
('', '', '', '2020-07-21', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('aa@gmail.com', '123123', '6565', '2020-07-22', 'Doctor'),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('abc@gmail.com', '123456', '8989', '2020-07-22', 'Doctor'),
('abc@gmail.com', '123456', '8989', '2020-07-22', 'Doctor'),
('d@gmail.com', '0000', '5656', '2020-07-22', 'Doctor'),
('s@gmail.com', '00', '1212', '2020-07-22', 'Doctor'),
('s@gmail.com', '00', '1212', '2020-07-22', 'Doctor'),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('dshgbuidh', '2525', '0000', '2020-07-22', 'Doctor'),
('sdager', 'wqet', 'gag', '2020-07-22', 'Doctor'),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('', '', '', '2020-07-22', ''),
('1212', '1212', '1212', '2020-07-24', 'Doctor'),
('agam12345@g.com', 'Agam@2000', '9988271419', '2020-07-24', 'undefined'),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('agam1234@gmail.com', 'Agam@1234', '9988271419', '2020-07-24', 'undefined'),
('agam@gmail.com', 'Agam@1234', '9988271419', '2020-07-24', 'undefined'),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('agam@gmail.com', 'Agam@1234', '9988271419', '2020-07-24', 'undefined'),
('agam12@gmail.com', 'Agam@12345', '9988972419', '2020-07-24', 'Patient'),
('agam12@gmail.com', 'Agam@12345', '9988972419', '2020-07-24', 'Patient'),
('agam12@gmail.com', 'Agam@12345', '9988972419', '2020-07-24', 'Patient'),
('anuradha@gmail.com', 'Anu@1234', '9815709858', '2020-07-24', 'Doctor'),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('ag@gmail.com', 'Ag@123456', '9988271419', '2020-07-24', 'Patient'),
('', '', '', '2020-07-24', ''),
('', '', '', '2020-07-24', ''),
('danish@gmail.com', 'Danish@1234', '9815709858', '2020-07-24', 'Patient'),
('simmy@gmail.com', 'Simmy@1234', '9888363416', '2020-07-25', 'Patient'),
('dani@gmail.com', 'Dani@1234', '9872656111', '2020-07-25', 'Doctor'),
('chimanlal@gmail.com', 'Chiman@1234', '7508871419', '2020-07-25', 'Patient'),
('abcd@gmail.com', 'Abcd@1234', '8264789311', '2020-07-25', 'Patient'),
('', '', '', '2020-07-25', ''),
('ab@gmail.com', 'Ab@123456', '8787878787', '2020-07-25', 'Doctor'),
('aakarsahit@gmail.com', 'Aakarshit@1234', '6284224158', '2020-07-25', 'Patient'),
('aakarsahit@gmail.com', 'Aakarshit@1234', '6284224158', '2020-07-25', 'Patient'),
('singla@gmail.com', 'Singla@1234', '9988271419', '2020-07-25', 'Doctor'),
('a@gmail.com', 'Agam@123456', '7814940066', '2020-08-07', 'Patient'),
('a@gmail.com', 'Agam@123456', '7814940066', '2020-08-07', 'Patient'),
('ab@gmail.com', 'Agam@1234', '9988271419', '2020-08-07', 'Doctor'),
('dani1234@gmail.com', 'Dani1234@1234', '9988271419', '2020-08-09', 'Doctor'),
('agu@gmail.com', 'Agu@123456', '9988972419', '2020-08-09', 'Patient'),
('abcde@gmail.com', 'Abcde@1234', '9988271419', '2020-08-18', 'Doctor'),
('abcdef@gmail.com', 'Abcdef@1234', '9988271419', '2020-08-18', 'Patient'),
('agamgoyal71419@gmail', 'Agam@1234', '9988271419', '2021-01-29', 'Patient'),
('agamgoyal71419@gmail', 'Agam@12345', '9988271419', '2021-01-29', 'Patient'),
('agamg@gmail.com', 'Agam@12345', '9988271419', '2021-01-29', 'Patient'),
('xyz@gmail.com', 'Xyz@1234', '9815709858', '2021-01-29', 'Doctor'),
('abcdef@gmail.com', 'Abcdef@1234', '9988271419', '2021-03-28', 'Doctor'),
('de@gmail.com', 'De@12345678', '9988271419', '2021-06-09', 'Doctor'),
('de@gmail.com', 'De@12345678', '9988271419', '2021-06-09', 'Doctor'),
('ef@gmail.com', 'Ef@12345678', '9988271419', '2021-06-09', 'Patient'),
('asd@gmail.com', 'Asd@12345678', '9988271419', '2021-06-15', 'Doctor'),
('qwe@gmail.com', 'Qwe@12345678', '9988271419', '2021-06-15', 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `roll` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `per` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`roll`, `name`, `per`) VALUES
(101, 'ggg', 98),
(102, 'aa', 97),
(103, 'a', 90),
(104, 'bb', 70),
(105, 'ab', 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_group`
--
ALTER TABLE `auth_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_group_permissions_group_id_permission_id_0cd325b0_uniq` (`group_id`,`permission_id`),
  ADD KEY `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_permission_content_type_id_codename_01ab375a_uniq` (`content_type_id`,`codename`);

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_groups_user_id_group_id_94350c0c_uniq` (`user_id`,`group_id`),
  ADD KEY `auth_user_groups_group_id_97559544_fk_auth_group_id` (`group_id`);

--
-- Indexes for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_user_user_permissions_user_id_permission_id_14a6b632_uniq` (`user_id`,`permission_id`),
  ADD KEY `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` (`permission_id`);

--
-- Indexes for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `django_admin_log_content_type_id_c4bce8eb_fk_django_co` (`content_type_id`),
  ADD KEY `django_admin_log_user_id_c564eba6_fk_auth_user_id` (`user_id`);

--
-- Indexes for table `django_content_type`
--
ALTER TABLE `django_content_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `django_content_type_app_label_model_76bd3d3b_uniq` (`app_label`,`model`);

--
-- Indexes for table `django_migrations`
--
ALTER TABLE `django_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `django_session`
--
ALTER TABLE `django_session`
  ADD PRIMARY KEY (`session_key`),
  ADD KEY `django_session_expire_date_a5c62663` (`expire_date`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `slips`
--
ALTER TABLE `slips`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `trainees`
--
ALTER TABLE `trainees`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_group`
--
ALTER TABLE `auth_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_permission`
--
ALTER TABLE `auth_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `django_content_type`
--
ALTER TABLE `django_content_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `django_migrations`
--
ALTER TABLE `django_migrations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slips`
--
ALTER TABLE `slips`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_group_permissions`
--
ALTER TABLE `auth_group_permissions`
  ADD CONSTRAINT `auth_group_permissio_permission_id_84c5c92e_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_group_permissions_group_id_b120cbf9_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`);

--
-- Constraints for table `auth_permission`
--
ALTER TABLE `auth_permission`
  ADD CONSTRAINT `auth_permission_content_type_id_2f476e4b_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`);

--
-- Constraints for table `auth_user_groups`
--
ALTER TABLE `auth_user_groups`
  ADD CONSTRAINT `auth_user_groups_group_id_97559544_fk_auth_group_id` FOREIGN KEY (`group_id`) REFERENCES `auth_group` (`id`),
  ADD CONSTRAINT `auth_user_groups_user_id_6a12ed8b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `auth_user_user_permissions`
--
ALTER TABLE `auth_user_user_permissions`
  ADD CONSTRAINT `auth_user_user_permi_permission_id_1fbb5f2c_fk_auth_perm` FOREIGN KEY (`permission_id`) REFERENCES `auth_permission` (`id`),
  ADD CONSTRAINT `auth_user_user_permissions_user_id_a95ead1b_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);

--
-- Constraints for table `django_admin_log`
--
ALTER TABLE `django_admin_log`
  ADD CONSTRAINT `django_admin_log_content_type_id_c4bce8eb_fk_django_co` FOREIGN KEY (`content_type_id`) REFERENCES `django_content_type` (`id`),
  ADD CONSTRAINT `django_admin_log_user_id_c564eba6_fk_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `auth_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
