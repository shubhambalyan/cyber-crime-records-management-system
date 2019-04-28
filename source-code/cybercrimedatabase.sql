-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 07:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
('C118', 'Identity Theft', 'My username/password stolen for bank', 'I have seen an unauthorized login in my Citibank online account.', 'www.citibank.co.in', '', '2018-11-23', 'Chinese hackers', 'Mysore', 'CLOSED', 'HIGH', 'Getting in touch with the bank.'),
('C480', 'Cyberbullying', 'Bullying on Facebook', 'Offensive messages and images posted on my timeline', 'www.fb.com', 'fb', '2018-02-12', 'alex', 'bangalore', 'INPROGRESS', 'LOW', 'Contacting suspect Alex for details'),
('C898', 'Hacking and Viruses', 'My computer is hacked', 'Got an email from someone to download a file.', 'www.gmail.com', 'Gmail', '2018-11-24', 'Russian hackers', 'Nashik', 'INPROGRESS', 'MEDIUM', 'Checking the email.');

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
('amit', 'amit', '1234', '9971559931', 'male', 'Nagpur', 'Hacking and Viruses'),
('shinde', 'shinde', '1234', '8807559719', 'female', 'Chandigarh', 'Identity Theft');

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
('hemant', '1234', 'hemant', 'mumbai', '422221', 'hemant@gmail.com', '44444', 'female'),
('saksham', '1234', 'saksham', 'pune', '456789', 'saksham1234@gmail.com', '9971559931', 'male'),
('saksham1234', '1234', 'saksham', 'delhi', '110010', 'saksham@gmail.com', '', 'male'),
('shubham', '1234', 'shubham', 'bangalore', '560048', 'sb@gmail.com', '1234', 'Male'),
('sparsh', '1234', 'sparsh', 'chennai', '632014', 'sparsh@gmail.com', '99898', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
