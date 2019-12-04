-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 05:22 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybercrimedatabase`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getOpenComplaints` ()  SELECT * FROM complaint WHERE status IN ('NEW','INPROGRESS','VERIFICATION')  ORDER BY datetime$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` varchar(10) NOT NULL,
  `category` varchar(36) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `url` varchar(100) NOT NULL,
  `social_media` varchar(40) NOT NULL,
  `datetime` date NOT NULL,
  `suspect` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'NEW',
  `priority` varchar(20) NOT NULL DEFAULT 'MEDIUM',
  `bureau_notes` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `category`, `subject`, `details`, `url`, `social_media`, `datetime`, `suspect`, `area`, `status`, `priority`, `bureau_notes`) VALUES
('C006', 'E-Commerce Scam', 'Amazon Refund', 'Refund is not processed but website says it is processed.', 'www.amazon.in', '', '2018-12-23', 'Identity theft', 'Nasik', 'NEW', '', ''),
('C118', 'Identity Theft', 'My username/password stolen for bank', 'I have seen an unauthorized login in my Citibank online account.', 'www.citibank.co.in', '', '2018-11-23', 'Chinese hackers', 'Mysore', 'CLOSED', 'HIGH', 'Getting in touch with the bank Citibank.'),
('C246', 'Bank Account Fraud', 'credits frauds', 'someone is using my account', 'www.icic.com', 'gmail', '1999-08-21', 'michael', 'kanpur', 'INPROGRESS', 'LOW', 'checking your account details'),
('C253', 'Identity Theft', 'missuse of my picture', 'someone is using my pictures', 'www.facebook.com', 'facebook', '2000-04-18', 'michael', 'delhi', 'VERIFICATION', 'HIGH', 'i am checking the id of the suspect.'),
('C381', 'Bank Account Fraud', 'sbi', 'my account is hacked', 'www.sbi.com', 'facebook', '2018-12-05', 'michael', 'kanpur', 'INPROGRESS', 'MEDIUM', 'WE ARE CHECKING YOUR ACCOUNT DETAILS'),
('C764', 'Bank Account Fraud', 'dwsdwdw', 'wdw', 'www.facebook.com', 'facebook', '2018-12-07', 'sd', 'kanpur', 'NEW', '', ''),
('C853', 'Email or Phone Call Scam', 'Phone call', 'Phone call asking for bank account details from no. 123456789', 'www.account.com', '', '2018-11-25', '', 'Faridabad', 'INVALID', 'LOW', 'complaint not valid'),
('C898', 'Hacking and Viruses', 'My computer is hacked', 'Got an email from someone to download a file.', 'www.gmail.com', 'Gmail', '2018-11-24', 'Russian hackers', 'Nashik', 'INPROGRESS', 'MEDIUM', 'Checking the email.');

--
-- Triggers `complaint`
--
DELIMITER $$
CREATE TRIGGER `insertLogComplaint` AFTER INSERT ON `complaint` FOR EACH ROW INSERT INTO logs VALUES (null, "Complaint Entry Inserted", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLogComplaint` AFTER UPDATE ON `complaint` FOR EACH ROW INSERT INTO logs VALUES (null, "Complaint Entry Updated", NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `action`, `cdate`) VALUES
(3, 'User Entry Inserted', '2018-11-25 13:30:49'),
(4, 'User Entry Updated', '2018-11-25 13:31:26'),
(5, 'Complaint Entry Upda', '2018-11-25 13:32:17'),
(6, 'User Entry Inserted', '2018-11-25 16:27:05'),
(7, 'User Entry Updated', '2018-11-25 16:28:47'),
(8, 'Complaint Entry Inse', '2018-11-25 16:31:18'),
(9, 'Police Entry Inserte', '2018-11-25 16:34:11'),
(10, 'Complaint Entry Upda', '2018-11-25 16:37:28'),
(11, 'Complaint Entry Upda', '2018-11-25 16:43:29'),
(12, 'Complaint Entry Upda', '2018-11-25 16:43:37'),
(24, 'Complaint Entry Upda', '2018-11-27 15:19:58'),
(25, 'User Entry Inserted', '2018-11-28 15:08:07'),
(26, 'User Entry Updated', '2018-11-28 15:08:57'),
(27, 'Complaint Entry Inse', '2018-11-28 15:11:04'),
(28, 'Police Entry Inserte', '2018-11-28 15:12:54'),
(29, 'Complaint Entry Upda', '2018-11-28 15:14:50'),
(30, 'User Entry Inserted', '2018-11-29 16:39:04'),
(31, 'Complaint Entry Upda', '2018-11-29 16:41:42'),
(32, 'Complaint Entry Upda', '2018-12-04 14:52:19'),
(33, 'Complaint Entry Upda', '2018-12-04 14:52:51'),
(34, 'User Entry Inserted', '2018-12-05 15:45:00'),
(35, 'Complaint Entry Inse', '2018-12-05 15:48:32'),
(36, 'Complaint Entry Inse', '2018-12-05 15:49:27'),
(37, 'Police Entry Inserte', '2018-12-05 15:50:52'),
(38, 'Complaint Entry Upda', '2018-12-05 15:52:06'),
(39, 'Police Entry Updated', '2019-11-11 23:01:32'),
(40, 'Police Entry Updated', '2019-11-11 23:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `police_id` varchar(8) NOT NULL,
  `name` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `specialization` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`police_id`, `name`, `password`, `phone`, `gender`, `address`, `specialization`) VALUES
('alex', 'alex', '1234', '1111', 'female', 'london', 'Cyberbullying'),
('amit', 'amit', '1234', '9971531', 'male', 'Nagpur', 'Hacking and Viruses'),
('ashwini', 'ashwini', '1234', '123456789', 'female', 'hyderabad', 'Email or Phone Call Scam'),
('MOHIT', 'MOHIT', '1234', '123456789', 'male', 'nashik', 'Bank Account Fraud'),
('sachin', 'sachin', '1234', '1234567', 'male', 'Mumbai', 'Social Media Crime'),
('shinde', 'shinde', '1234', '88079719', 'female', 'Chandigarh', 'Identity Theft'),
('shivam', 'shivam', '1234', '123456789', 'male', 'up', 'Bank Account Fraud');

--
-- Triggers `police`
--
DELIMITER $$
CREATE TRIGGER `insertLogPolice` AFTER INSERT ON `police` FOR EACH ROW INSERT INTO logs VALUES (null, "Police Entry Inserted", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLogPolice` AFTER UPDATE ON `police` FOR EACH ROW INSERT INTO logs VALUES (null, "Police Entry Updated", NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `specialization` varchar(40) NOT NULL,
  `s_desc` varchar(200) NOT NULL,
  `s_location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`specialization`, `s_desc`, `s_location`) VALUES
('Bank Account Fraud', 'Bank account fraud has occurred if transactions you haven’t made show up on your bank statement.', 'Mumbai'),
('Child Pornography', 'Child pornography is pornography that exploits children for sexual stimulation.', 'Chennai'),
('Cyberbullying', 'Cyberbullying is when someone, typically teens, bully or harass others on social media sites.', 'Bengaluru'),
('E-Commerce Scam', 'E-Commerce fraud includes credit card, refund, merchant, authenticity and friendly fraud.', 'Kolkata'),
('Email or Phone Call Scam', 'A fraud company or person emails or calls up a victim to get personal or bank information for financial benefits.', 'Pune'),
('Hacking and Viruses', 'Computer hacking involves violation on the privacy of others by invading their network security and causing damage to the software.', 'Jaipur'),
('Identity Theft', 'Identity theft is the deliberate use of someone else identity, usually as a method to gain a financial advantage or obtain credit and other benefits in the other persons name.', 'Hyderabad'),
('Social Media Crime', 'Crime that happens on social media platforms such as facebook, twitter to send offensive messages, videos or pictures.', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status`, `description`) VALUES
('CLOSED', 'Complaint has been closed with appropriate details.'),
('INPROGRESS', 'Complaint has been assigned to someone and is in progress.'),
('INVALID', 'Complaint does not comply with the minimum cyber crime standards.'),
('NEW', 'New complaint raised and is yet to be processed.'),
('VERIFICATION', 'Complaint has been solved but yet to be closed and is in scrutinization.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `email` varchar(36) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `address`, `pincode`, `email`, `phone`, `gender`) VALUES
('akhil', '1234', 'akhil', 'pune', '560089', 'akhil@gmail.com', '123456789', 'male'),
('david', '1234', 'David', 'Bhopal', '123456', 'david@outlook.com', '123456787', 'male'),
('hemd', '1234', 'hemd', 'mumbai', '422221', 'hemd@gmail.com', '44444', 'female'),
('michael', '1234', 'michael', 'Indore', '456789', 'michael1234@gmail.com', '99715', 'male'),
('schmidt', '1234', 'schmidt', 'kolkata', '123456', 'sk@gmail.com', '123456789', 'male'),
('muller', '1234', 'muller', 'bangalore', '560048', 'sb@gmail.com', '1234', 'Male'),
('sid', '1234', 'sid', 'chennai', '560048', 'sid1234@gmail.com', '123456781', 'male');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `insertLogUser` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO logs VALUES (null,"User Entry Inserted", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLogUser` AFTER UPDATE ON `user` FOR EACH ROW INSERT INTO logs VALUES (null, "User Entry Updated", NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`police_id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`specialization`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
