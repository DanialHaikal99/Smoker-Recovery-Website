-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 02:22 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wings`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `username`, `loginTime`) VALUES
(43, 1, 'admin', '2020-10-07 17:43:07'),
(45, 5, 'OmarHaikal', '2020-10-07 17:47:58'),
(46, 3, 'Fathurio', '2020-10-07 17:53:46'),
(47, 4, 'PuteriUwu', '2020-10-07 17:57:23'),
(48, 5, 'OmarHaikal', '2020-10-07 17:58:17'),
(49, 3, 'Fathurio', '2020-10-07 17:58:31'),
(50, 5, 'OmarHaikal', '2020-10-08 07:50:37'),
(51, 3, 'Fathurio', '2020-10-08 07:54:46'),
(52, 1, 'admin', '2020-10-08 07:56:05'),
(53, 1, 'admin', '2020-10-08 12:28:25'),
(54, 3, 'Fathurio', '2020-10-08 12:29:02'),
(55, 48, 'henryp', '2020-10-08 14:56:21'),
(56, 3, 'Fathurio', '2020-10-08 15:18:18'),
(57, 5, 'OmarHaikal', '2020-10-08 15:39:02'),
(58, 1, 'admin', '2020-10-08 16:51:30'),
(59, 46, 'AzrylHansem', '2020-10-08 17:12:28'),
(60, 49, 'Fathurio22', '2020-10-09 09:48:05'),
(61, 50, 'RickyD', '2020-10-09 09:51:01'),
(62, 51, 'ZamZam', '2020-10-09 09:59:53'),
(63, 49, 'Fathurio22', '2020-10-09 10:19:01'),
(64, 50, 'RickyD', '2020-10-09 10:48:45'),
(65, 49, 'Fathurio22', '2020-10-09 10:50:44'),
(66, 48, 'henryp', '2020-10-09 11:18:37'),
(67, 49, 'Fathurio22', '2020-10-09 11:23:00'),
(68, 50, 'RickyD', '2020-10-09 11:31:40'),
(69, 49, 'Fathurio22', '2020-10-09 11:37:37'),
(70, 50, 'RickyD', '2020-10-09 11:40:14'),
(71, 51, 'ZamZam', '2020-10-09 11:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `wings_details`
--

CREATE TABLE `wings_details` (
  `details_id` bigint(20) NOT NULL,
  `details_username` varchar(60) NOT NULL,
  `details_name` varchar(60) NOT NULL,
  `details_address` varchar(120) NOT NULL,
  `details_phone` varchar(50) NOT NULL,
  `details_email` varchar(60) NOT NULL,
  `details_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_details`
--

INSERT INTO `wings_details` (`details_id`, `details_username`, `details_name`, `details_address`, `details_phone`, `details_email`, `details_type`) VALUES
(2, 'HenryHacker55', 'Law Jun Wei', '17-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0132439265', 'lawjunwei@gmail.com', 'smoker'),
(3, 'Fathurio', 'Fathul Anwar Bin Shahrir', 'something for nothing 222', '0132439333', 'quickkkkkk@yahoo.com', 'socialsupp'),
(4, 'PuteriUwu', 'Puteri Nurhanis', '17-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0132439333', 'put123@gmail.com', 'smoker'),
(5, 'OmarHaikal', 'Omar Bin Haikal', 'No 1-16 Kipark Selayang, Jalan Persiaran 3, Bandar Baru Selayang', '0132439333', 'binmohd42@gmail.com', 'medicalprac'),
(50, 'AzrylHansem', 'Azryl Bin John', '17-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0132439333', 'azryl_john@gmail.com', 'socialsupp'),
(51, 'zaim22', 'Zaim Rasyid Bin Ahmad Hisham', '17-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0132439265', 'zaimblyat@gmail.com', 'medicalprac'),
(52, 'henryp', 'Law Jun Wei', '17-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0132439333', 'henryhackput@yahoo.com', 'smoker'),
(53, 'Fathurio22', 'Fathul Anwar Bin Shahrir', '17-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0112323567', 'quickkkk@gmail.com', 'smoker'),
(54, 'RickyD', 'Pua Ricky', '16-05 , 17 MENARA D PERSIARAN BISTARI THE ARC CYBERJAYA , 63000 SELANGOR MALAYSIA.', '0127843045', 'rickypua@gmail.com', 'medicalprac'),
(55, 'ZamZam', 'Zaim Rasyid Bin Ahmad Hisham', '30 Jalan Wangsa Jaya 1 Taman Wangsa Jaya 53300 Kuala Lumpur Malaysia', '0166642105', 'zaim@gmail.com', 'socialsupp');

-- --------------------------------------------------------

--
-- Table structure for table `wings_medicalprac`
--

CREATE TABLE `wings_medicalprac` (
  `medicalprac_id` bigint(20) NOT NULL,
  `medicalprac_qualification` varchar(60) NOT NULL,
  `medicalprac_yearofex` varchar(60) NOT NULL,
  `medicalprac_reason` varchar(60) NOT NULL,
  `medicalprac_username` varchar(60) NOT NULL,
  `medicalprac_name` varchar(60) NOT NULL,
  `medicalprac_phone` varchar(60) NOT NULL,
  `medicalprac_email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_medicalprac`
--

INSERT INTO `wings_medicalprac` (`medicalprac_id`, `medicalprac_qualification`, `medicalprac_yearofex`, `medicalprac_reason`, `medicalprac_username`, `medicalprac_name`, `medicalprac_phone`, `medicalprac_email`) VALUES
(5, 'Degree In Medicine, MMU', '3 years In Hospital Kota Kinabalu', 'I wanted to help those that are in need.', 'OmarHaikal', 'Omar Bin Haikal', '0132439333', 'binmohd42@gmail.com'),
(24, 'Degree In Medical Research', '2 years in GHKL', 'Admin assigned this one', 'zaim22', 'Zaim Rasyid Bin Ahmad Hisham', '0132439265', 'zaimblyat@gmail.com'),
(25, 'Degree in Medical ', '3 Years', 'I want to help people overcome their smoking habit', 'RickyD', 'Pua Ricky', '0127843045', 'rickypua@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wings_medicationhis`
--

CREATE TABLE `wings_medicationhis` (
  `MedicationHisID` bigint(20) NOT NULL,
  `MedicationHisUsername` varchar(60) NOT NULL,
  `MedicationHisName` varchar(60) NOT NULL,
  `MedicationHisDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_medicationhis`
--

INSERT INTO `wings_medicationhis` (`MedicationHisID`, `MedicationHisUsername`, `MedicationHisName`, `MedicationHisDesc`) VALUES
(2, 'HenryHacker55', 'Law Jun Wei', 'Please Update Your Medication History Here!'),
(4, 'PuteriUwu', 'Puteri Nurhanis', 'Please Update Your Medication History Here!'),
(38, 'henryp', 'Law Jun Wei', ' I only have asthma so the only medication i have taken and im taking an inhaler.'),
(39, 'Fathurio22', 'Fathul Anwar Bin Shahrir', ' I am not taking any medication for the time being, and dont have any medical history worth mentioning.');

-- --------------------------------------------------------

--
-- Table structure for table `wings_schedule`
--

CREATE TABLE `wings_schedule` (
  `ScheduleID` bigint(20) NOT NULL,
  `ScheduleUsername` varchar(60) NOT NULL,
  `ScheduleName` varchar(60) NOT NULL,
  `ScheduleDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_schedule`
--

INSERT INTO `wings_schedule` (`ScheduleID`, `ScheduleUsername`, `ScheduleName`, `ScheduleDesc`) VALUES
(2, 'HenryHacker55', 'Law Jun Wei', 'No Schedule Yet(Please Update Your Smoking & Medication History First, then update the Smoking Report to get a schedule from our medical practitioners,thank you.)'),
(4, 'PuteriUwu', 'Puteri Nurhanis', 'No Schedule Yet(Please Update Your Smoking & Medication History First, then update the Smoking Report to get a schedule from our medical practitioners,thank you.)'),
(14, 'henryp', 'Law Jun Wei', 'No Schedule Yet(Please Update Your Smoking & Medication History First, then update the Smoking Report to get a schedule from our medical practitioners,thank you.)'),
(15, 'Fathurio22', 'Fathul Anwar Bin Shahrir', 'Schedule For This Week, Monday - 1 puff , Tuesday - Break , Wednesday- 2 puff , Thursday - Break , Friday -Break , Saturday - 1 puff , Sunday - Break');

-- --------------------------------------------------------

--
-- Table structure for table `wings_smokerrep`
--

CREATE TABLE `wings_smokerrep` (
  `SmokerRepID` bigint(20) NOT NULL,
  `SmokerRepUsername` varchar(60) NOT NULL,
  `SmokerRepName` varchar(60) NOT NULL,
  `SmokerRepDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_smokerrep`
--

INSERT INTO `wings_smokerrep` (`SmokerRepID`, `SmokerRepUsername`, `SmokerRepName`, `SmokerRepDesc`) VALUES
(2, 'HenryHacker55', 'Law Jun Wei', 'Currently No Feedback From Medical Practitioner(Dont forget to update your smoking and medication history first to start and partake in the system)'),
(4, 'PuteriUwu', 'Puteri Nurhanis', ' Stop smoking 2 puffs and then you ok'),
(16, 'henryp', 'Law Jun Wei', 'Currently No Feedback From Medical Practitioner(Dont forget to update your smoking and medication history first to start and partake in the system)'),
(17, 'Fathurio22', 'Fathul Anwar Bin Shahrir', ' Hello this is Dr Pua Ricky, Overall you are doing good! I am proud of your effort to reduce your smoking tremendously in such a short time. Currently making a schedule that fits your current ability, with regards, Dr Pua Ricky.');

-- --------------------------------------------------------

--
-- Table structure for table `wings_smokinghis`
--

CREATE TABLE `wings_smokinghis` (
  `SmokingHisID` bigint(20) NOT NULL,
  `SmokingHisUsername` varchar(60) NOT NULL,
  `SmokingHisName` varchar(60) NOT NULL,
  `SmokingHisDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_smokinghis`
--

INSERT INTO `wings_smokinghis` (`SmokingHisID`, `SmokingHisUsername`, `SmokingHisName`, `SmokingHisDesc`) VALUES
(2, 'HenryHacker55', 'Law Jun Wei', 'Please Update Your Smoking History Here!'),
(4, 'PuteriUwu', 'Puteri Nurhanis', 'Please Update Your Smoking History Here!'),
(16, 'henryp', 'Law Jun Wei', ' Please Update Your Smoking History Here! \'\'\'\'\'\'\'\'\'\''),
(17, 'Fathurio22', 'Fathul Anwar Bin Shahrir', ' I started smoking when I was 16 in highschool. I am relatively a big smoker, on average i smoke about 5 puffs a day. About a month ago, I started to reflect and wanted to stop smoking for good.');

-- --------------------------------------------------------

--
-- Table structure for table `wings_smokingrep`
--

CREATE TABLE `wings_smokingrep` (
  `SmokingRepID` bigint(20) NOT NULL,
  `SmokingRepUsername` varchar(60) NOT NULL,
  `SmokingRepName` varchar(60) NOT NULL,
  `SmokingRepDesc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_smokingrep`
--

INSERT INTO `wings_smokingrep` (`SmokingRepID`, `SmokingRepUsername`, `SmokingRepName`, `SmokingRepDesc`) VALUES
(2, 'HenryHacker55', 'Law Jun Wei', 'Please Update Your Smoking Report Here!(Dont forget to update your smoking and medication history first to start and partake in the system or this update will be ignored.)'),
(4, 'PuteriUwu', 'Puteri Nurhanis', 'Please Update Your Smoking Report Here!(Dont forget to update your smoking and medication history first to start and partake in the system or this update will be ignored.)'),
(16, 'henryp', 'Law Jun Wei', 'Please Update Your Smoking Report Here!(Dont forget to update your smoking and medication history first to start and partake in the system or this update will be ignored.)'),
(17, 'Fathurio22', 'Fathul Anwar Bin Shahrir', ' I took two puffs for monday and tuesday, wednesday and thursday  i followed the break that was given and then continued to smoke only took 1 puff for friday, saturday and sunday each.');

-- --------------------------------------------------------

--
-- Table structure for table `wings_user`
--

CREATE TABLE `wings_user` (
  `user_id` bigint(20) NOT NULL,
  `user_username` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wings_user`
--

INSERT INTO `wings_user` (`user_id`, `user_username`, `user_password`, `user_type`) VALUES
(1, 'admin', '3051999', 'admin'),
(2, 'HenryHacker55', 'luvmyput', 'smoker'),
(4, 'PuteriUwu', '1234', 'smoker'),
(5, 'OmarHaikal', 'b8turbo', 'medicalprac'),
(46, 'AzrylHansem', 'ihateraj', 'socialsupp'),
(47, 'zaim22', 'blyatmobile', 'medicalprac'),
(48, 'henryp', 'henryp123', 'smoker'),
(49, 'Fathurio22', 'pokok12', 'smoker'),
(50, 'RickyD', 'weeb97', 'medicalprac'),
(51, 'ZamZam', 'zam123', 'socialsupp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wings_details`
--
ALTER TABLE `wings_details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `wings_medicalprac`
--
ALTER TABLE `wings_medicalprac`
  ADD PRIMARY KEY (`medicalprac_id`);

--
-- Indexes for table `wings_medicationhis`
--
ALTER TABLE `wings_medicationhis`
  ADD PRIMARY KEY (`MedicationHisID`);

--
-- Indexes for table `wings_schedule`
--
ALTER TABLE `wings_schedule`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `wings_smokerrep`
--
ALTER TABLE `wings_smokerrep`
  ADD PRIMARY KEY (`SmokerRepID`);

--
-- Indexes for table `wings_smokinghis`
--
ALTER TABLE `wings_smokinghis`
  ADD PRIMARY KEY (`SmokingHisID`);

--
-- Indexes for table `wings_smokingrep`
--
ALTER TABLE `wings_smokingrep`
  ADD PRIMARY KEY (`SmokingRepID`);

--
-- Indexes for table `wings_user`
--
ALTER TABLE `wings_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `wings_details`
--
ALTER TABLE `wings_details`
  MODIFY `details_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `wings_medicalprac`
--
ALTER TABLE `wings_medicalprac`
  MODIFY `medicalprac_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wings_medicationhis`
--
ALTER TABLE `wings_medicationhis`
  MODIFY `MedicationHisID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `wings_schedule`
--
ALTER TABLE `wings_schedule`
  MODIFY `ScheduleID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wings_smokerrep`
--
ALTER TABLE `wings_smokerrep`
  MODIFY `SmokerRepID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wings_smokinghis`
--
ALTER TABLE `wings_smokinghis`
  MODIFY `SmokingHisID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wings_smokingrep`
--
ALTER TABLE `wings_smokingrep`
  MODIFY `SmokingRepID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wings_user`
--
ALTER TABLE `wings_user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
