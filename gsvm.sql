-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 07:32 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gsvm`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_plan`
--

CREATE TABLE IF NOT EXISTS `assign_plan` (
`id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `sub_plan_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('f7f24d3d4e089c091c7a93c3b4ee8ed1', '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36', 1599887703, 'a:26:{s:9:"user_data";s:0:"";s:13:"business_name";s:20:"GSVM Medical College";s:10:"login_type";i:2;s:11:"customer_id";s:3:"464";s:9:"parent_id";N;s:4:"name";N;s:3:"dob";s:10:"1998-02-14";s:5:"image";s:0:"";s:17:"customer_username";s:8:"UMP66236";s:17:"customer_password";s:3:"123";s:13:"mobile_number";s:10:"6391307073";s:14:"currentaddress";s:45:"Vill-Anjahi, post-parawapar, distt-kushinagar";s:16:"permanentaddress";s:0:"";s:4:"city";s:5:"Kasia";s:5:"state";s:2:"up";s:3:"pin";s:6:"274305";s:9:"joiner_id";N;s:11:"joiner_name";N;s:15:"joiner_position";N;s:10:"pan_number";s:1:"0";s:13:"adhaar_number";s:1:"0";s:6:"status";s:1:"1";s:4:"logo";s:0:"";s:8:"is_login";b:1;s:7:"is_lock";b:1;s:10:"login_date";s:11:"12-Sep-2020";}');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
`id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `employee_iname` varchar(250) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobilenumber` varchar(10) NOT NULL,
  `altnumber` varchar(10) NOT NULL,
  `current_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `pannumber` varchar(10) DEFAULT NULL,
  `adhaarnumber` varchar(12) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `joining_date` timestamp NULL DEFAULT NULL,
  `dob` date NOT NULL,
  `bankname` varchar(50) NOT NULL,
  `ifsccode` varchar(20) NOT NULL,
  `branchname` varchar(50) NOT NULL,
  `account_no` varchar(20) NOT NULL,
  `bank_passbook_photo` varchar(150) NOT NULL,
  `adhaar_front_photo` varchar(150) NOT NULL,
  `adhaar_back_photo` varchar(150) NOT NULL,
  `gender` int(1) NOT NULL COMMENT '1 for male 2 for female',
  `nom_name` varchar(20) DEFAULT NULL,
  `nom_rel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=856 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `image`, `employee_iname`, `fname`, `email`, `username`, `password`, `mobilenumber`, `altnumber`, `current_address`, `permanent_address`, `city`, `state`, `pin`, `position`, `pannumber`, `adhaarnumber`, `status`, `joining_date`, `dob`, `bankname`, `ifsccode`, `branchname`, `account_no`, `bank_passbook_photo`, `adhaar_front_photo`, `adhaar_back_photo`, `gender`, `nom_name`, `nom_rel`) VALUES
(1, '', 'Umravati Marketing Pv. Ltd.', '', 'UMRwallet@gmail.com', 'UMR', '123', '9919522351', '0', '0', '0', '0', '0', 0, 1, '0', '123456', 1, '2019-02-19 04:16:29', '0000-00-00', 'vacj11212', 'ifcs', 'raj', '1212121212', '1551417583pool.jpg', '1551417583pool.jpg', '1551417583pool.jpg', 1, NULL, NULL),
(464, '', 'GS', 'rajmnagaL', '', 'UMP66236', '123', '6391307073', '', 'Vill-Anjahi, post-parawapar, distt-kushinagar', '', 'Kasia', 'up', 274305, NULL, '0', '0', 1, '2020-02-14 00:00:00', '1998-02-14', '', '', '', '', '', '', '', 2, NULL, NULL),
(465, '', 'GS', 'rajmnagaL', '', 'UMP69820', '123', '6391307073', '', 'Vill-Anjahi, post-parawarapar, distt-kushinagar', '', 'Kasia', 'up', 274305, NULL, '0', '0', 1, '2020-02-15 00:00:00', '1998-02-14', '', '', '', '', '', '', '', 2, NULL, NULL),
(466, '', 'GS', 'rajmnagaL', '', 'UMP61895', '123', '6391307073', '', 'Vill-Anjahi, post-parawarapar, distt-kushinagar', '', 'Kasia', 'up', 274305, NULL, '0', '0', 1, '2020-02-15 00:00:00', '1998-02-14', '', '', '', '', '', '', '', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE IF NOT EXISTS `general_settings` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `business_name` varchar(100) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `fax_number` varchar(15) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `email1` varchar(60) NOT NULL,
  `email2` varchar(60) NOT NULL,
  `language` varchar(30) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `gst_number` varchar(20) NOT NULL,
  `logo` varchar(60) NOT NULL,
  `ico_logo` varchar(60) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `status`, `admin_username`, `admin_password`, `business_name`, `address_1`, `address_2`, `city`, `state`, `pin`, `nationality`, `phone_number`, `fax_number`, `mobile_number`, `email1`, `email2`, `language`, `customer_name`, `gst_number`, `logo`, `ico_logo`, `created`) VALUES
(1, '1', 'gsvm', 'e10adc3949ba59abbe56e057f20f883e', 'GSVM Medical College', 'Kanpur', '', 'Kanpur', 'Uttar Pradesh', '208019', 'Indian', '8382829593', '', '9580121878', 'info@adl.in.net', '', 'HINDI', 'Dr. Anand Narayan', '', '', '', '2014-06-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reg_alcohol_status`
--

CREATE TABLE IF NOT EXISTS `reg_alcohol_status` (
`id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `drinking_alcohol` varchar(30) NOT NULL,
  `alcoholic_beverages` varchar(20) NOT NULL,
  `times_of_drinking` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_exercise_habit`
--

CREATE TABLE IF NOT EXISTS `reg_exercise_habit` (
`id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `sitting_for_large_time` varchar(30) NOT NULL,
  `yoga` varchar(20) NOT NULL,
  `gym` varchar(20) NOT NULL,
  `sakha` varchar(20) NOT NULL,
  `walk` varchar(20) NOT NULL,
  `running` varchar(20) NOT NULL,
  `swimming` varchar(20) NOT NULL,
  `never` varchar(20) NOT NULL,
  `other` varchar(20) NOT NULL,
  `frequency` varchar(30) NOT NULL,
  `intensity` varchar(30) NOT NULL,
  `sedantary` varchar(30) NOT NULL,
  `moderate` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_family_medical_history`
--

CREATE TABLE IF NOT EXISTS `reg_family_medical_history` (
`id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `father_status` varchar(100) NOT NULL,
  `father_age` varchar(100) NOT NULL,
  `father_general_health` varchar(100) NOT NULL,
  `reason_father_poor_health` varchar(100) NOT NULL,
  `cause_of_fatherdeath` varchar(100) NOT NULL,
  `mother_status` varchar(100) NOT NULL,
  `mother_age` varchar(100) NOT NULL,
  `mother_general_health` varchar(100) NOT NULL,
  `reason_mother_poor_health` varchar(100) NOT NULL,
  `cause_of_motherdeath` varchar(100) NOT NULL,
  `num_of_brothers` varchar(100) NOT NULL,
  `num_of_sister` varchar(100) NOT NULL,
  `health_problem` varchar(100) NOT NULL,
  `familial_disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_medical_history`
--

CREATE TABLE IF NOT EXISTS `reg_medical_history` (
`id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `tuberculosis_status` varchar(30) NOT NULL,
  `liver_disease` varchar(50) NOT NULL,
  `renal_disease` varchar(50) NOT NULL,
  `infectious_disease` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_patient_diet`
--

CREATE TABLE IF NOT EXISTS `reg_patient_diet` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `dietary_habit` varchar(30) NOT NULL,
  `break_fast` varchar(30) NOT NULL,
  `lunch` varchar(30) NOT NULL,
  `snakes` varchar(30) NOT NULL,
  `dinner` varchar(30) NOT NULL,
  `red_meat` varchar(40) NOT NULL,
  `meat_routine` varchar(40) NOT NULL,
  `number_of_meat_timing` varchar(7) NOT NULL,
  `fish_routine` varchar(40) NOT NULL,
  `number_of_fish_timing` varchar(7) NOT NULL,
  `desserts` varchar(40) NOT NULL,
  `desserts_routine` varchar(40) NOT NULL,
  `number_of_desserts_timing` varchar(7) NOT NULL,
  `chicken` varchar(30) NOT NULL,
  `chicken_routine` varchar(30) NOT NULL,
  `number_of_chicken_timing` varchar(7) NOT NULL,
  `fried_food` varchar(40) NOT NULL,
  `fried_routine` varchar(40) NOT NULL,
  `number_of_fried_timing` varchar(7) NOT NULL,
  `milk` varchar(40) NOT NULL,
  `number_of_glassesof_milk` varchar(4) NOT NULL,
  `number_of_timimg` varchar(5) NOT NULL,
  `tea` varchar(30) NOT NULL,
  `number_of_glassesof_tea` varchar(7) NOT NULL,
  `num_of_timing_tea` varchar(8) NOT NULL,
  `coffee` varchar(30) NOT NULL,
  `number_of_cupof_coffee` varchar(8) NOT NULL,
  `num_of_timing_cofee` varchar(20) NOT NULL,
  `water` varchar(30) NOT NULL,
  `number_of_glassesof_water` varchar(200) NOT NULL,
  `num_of_timing_water` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_patient_info`
--

CREATE TABLE IF NOT EXISTS `reg_patient_info` (
`id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mother_name` varchar(200) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(400) NOT NULL,
  `tehsil` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `block` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `age` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `aadhar_card` varchar(12) NOT NULL,
  `pan_card` varchar(200) NOT NULL,
  `voter_id` varchar(200) NOT NULL,
  `telephone_number` varchar(12) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `martial_status` tinyint(1) NOT NULL,
  `bmi` varchar(50) NOT NULL,
  `pulse_rate` varchar(40) NOT NULL,
  `blood_pressure` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_smoking_status`
--

CREATE TABLE IF NOT EXISTS `reg_smoking_status` (
`id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `your_smoking_status` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `when_left` varchar(20) NOT NULL,
  `number_of_cigaratte` varchar(20) NOT NULL,
  `number_of_year` varchar(20) NOT NULL,
  `smokein_family_member` varchar(20) NOT NULL,
  `chewing_tobbacco` varchar(20) NOT NULL,
  `paan_with_tabbacco` varchar(20) NOT NULL,
  `tambakoo` varchar(20) NOT NULL,
  `zarda_khaini` varchar(20) NOT NULL,
  `other` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `study_plan`
--

CREATE TABLE IF NOT EXISTS `study_plan` (
`id` int(11) NOT NULL,
  `plan_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `study_plan`
--

INSERT INTO `study_plan` (`id`, `plan_name`) VALUES
(1, 'Registration Form'),
(2, 'Pesticides Investigation'),
(3, 'Diagnosis of Disease'),
(4, 'BPI (Essential)');

-- --------------------------------------------------------

--
-- Table structure for table `sub_study_plan`
--

CREATE TABLE IF NOT EXISTS `sub_study_plan` (
`id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `sub_plan_name` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_study_plan`
--

INSERT INTO `sub_study_plan` (`id`, `plan_id`, `sub_plan_name`) VALUES
(1, 3, 'Coronary Artery Disease (Optional)'),
(2, 3, 'Breast Cancer (Optional)'),
(3, 3, 'Oral Cancer (Optional)'),
(4, 3, 'Hypertension (Optional)'),
(5, 3, 'Diabetes (Optionsl)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_plan`
--
ALTER TABLE `assign_plan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_alcohol_status`
--
ALTER TABLE `reg_alcohol_status`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `reg_id_3` (`reg_id`), ADD KEY `reg_id` (`reg_id`), ADD KEY `reg_id_2` (`reg_id`);

--
-- Indexes for table `reg_exercise_habit`
--
ALTER TABLE `reg_exercise_habit`
 ADD PRIMARY KEY (`id`), ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `reg_family_medical_history`
--
ALTER TABLE `reg_family_medical_history`
 ADD KEY `id` (`id`), ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `reg_medical_history`
--
ALTER TABLE `reg_medical_history`
 ADD PRIMARY KEY (`id`), ADD KEY `reg_id` (`reg_id`), ADD KEY `reg_id_2` (`reg_id`);

--
-- Indexes for table `reg_patient_diet`
--
ALTER TABLE `reg_patient_diet`
 ADD UNIQUE KEY `id` (`id`), ADD KEY `id_2` (`id`), ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `reg_patient_info`
--
ALTER TABLE `reg_patient_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_smoking_status`
--
ALTER TABLE `reg_smoking_status`
 ADD PRIMARY KEY (`id`), ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `study_plan`
--
ALTER TABLE `study_plan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_study_plan`
--
ALTER TABLE `sub_study_plan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_plan`
--
ALTER TABLE `assign_plan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=856;
--
-- AUTO_INCREMENT for table `reg_alcohol_status`
--
ALTER TABLE `reg_alcohol_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_exercise_habit`
--
ALTER TABLE `reg_exercise_habit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_family_medical_history`
--
ALTER TABLE `reg_family_medical_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_medical_history`
--
ALTER TABLE `reg_medical_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_patient_info`
--
ALTER TABLE `reg_patient_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reg_smoking_status`
--
ALTER TABLE `reg_smoking_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `study_plan`
--
ALTER TABLE `study_plan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_study_plan`
--
ALTER TABLE `sub_study_plan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reg_alcohol_status`
--
ALTER TABLE `reg_alcohol_status`
ADD CONSTRAINT `reg_alcohol_status_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_exercise_habit`
--
ALTER TABLE `reg_exercise_habit`
ADD CONSTRAINT `reg_exercise_habit_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_family_medical_history`
--
ALTER TABLE `reg_family_medical_history`
ADD CONSTRAINT `reg_family_medical_history_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_medical_history`
--
ALTER TABLE `reg_medical_history`
ADD CONSTRAINT `reg_medical_history_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_patient_diet`
--
ALTER TABLE `reg_patient_diet`
ADD CONSTRAINT `reg_patient_diet_ibfk_1` FOREIGN KEY (`id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `reg_patient_diet_ibfk_2` FOREIGN KEY (`reg_id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_smoking_status`
--
ALTER TABLE `reg_smoking_status`
ADD CONSTRAINT `smoking_status_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `reg_patient_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
