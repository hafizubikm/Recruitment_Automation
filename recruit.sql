-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2015 at 06:56 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
`id` int(11) NOT NULL,
  `job_post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `job_post_id`, `name`, `email`, `phone`, `file`) VALUES
(1, 1, 'Md. Hafizur Rahman', 'hafiz.ubikm@gmail.com', '01926743629', 'Hafizur_Rahmans_CV.doc'),
(2, 1, 'Kamal Ahmed', 'kamal@gmail.com', '0195454586', 'Hafizur_Rahmans_CV1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
`id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'Accounting'),
(3, 'Accounting Department'),
(9, 'HR department'),
(11, 'Marketing'),
(13, 'Information Technology'),
(14, 'Maintenance'),
(15, 'Sales'),
(16, 'Customer Service'),
(17, 'Finance'),
(18, 'Dispatch Department'),
(20, 'Research and Development');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE IF NOT EXISTS `job_posts` (
`id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `requirement` text NOT NULL,
  `experience` varchar(50) NOT NULL,
  `education` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `salary` varchar(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `department_id`, `job_title`, `requirement`, `experience`, `education`, `start_date`, `end_date`, `salary`) VALUES
(1, 1, 'Web Developer', 'If you need a specific type of JOIN you can specify it via the third parameter of the function. Options are: left, right, outer, inner, left outer, and right outer.', '2 years', 'B.Sc or M.Sc in Computer Science/ Engineering or equivalent.', '2015-07-22', '2015-07-31', '20000/='),
(2, 3, 'Web Designer', 'If you need a specific type of JOIN you can specify it via the third parameter of the function. Options are: left, right, outer, inner, left outer, and right outer.', 'At least 2 years', 'B.Sc or M.Sc in Computer Science/ Engineering or equivalent', '2015-07-10', '2015-08-15', '24000/='),
(3, 9, 'Jr. Web Developer', 'Job descriptions may not be suitable for some senior managers as they should have the freedom to take the initiative and find fruitful new directions;\r\nJob descriptions may be too inflexible in a rapidly changing organization, for instance in an area subject to rapid technological change;\r\nOther changes in job content may lead to the job description being out of date;\r\nThe process that an organization uses to create job descriptions may not be optimal.', '2 years of experience', 'B.Sc or M.Sc in Computer Science/ Engineering or equivalent.', '2015-07-22', '2015-07-25', '58000/='),
(4, 1, 'Account Manager', 'Creates an opening form tag with a base URL built from your config preferences. It will optionally let you add form attributes and hidden input fields, and will always add the attribute accept-charset based on the charset value in your config file.', '2 Years of experience.', 'CSSE, Bsc Engineering.', '2015-07-23', '2015-07-30', '50000/='),
(5, 1, 'Sr. Accountant', '<p><ul><li><span style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 17px;">Assist with Banking activities like setting up new accounts, adding new signatures, bank reconciling items, banking fees, positive pay exceptions, etc. Prepare journal entries and reconciliations for monthly general ledger close. Assist in the preparation and distribution of financial statements.</span><br></li><li><span style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 17px;">Ensure that all deliverables comply with regulatory guidance and professional standards. Provide assistance to Accounting Manager with external audit and DOI examination. Assist with accounting related DCO and general ledger projects. Assist with special projects assigned by management.</span><br></li></ul></p>', 'Minimum 2 Years', 'CSE Background from any University', '2015-07-24', '2015-07-27', '100000/=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
