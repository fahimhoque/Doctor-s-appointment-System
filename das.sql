-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 07:15 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `das`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'fharnob', 'fharnob');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `booked_on` date DEFAULT NULL,
  `appointment_time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_fname` varchar(255) NOT NULL,
  `patient_lname` varchar(255) NOT NULL,
  `patient_contact` varchar(255) NOT NULL,
  `patient_gender` varchar(255) NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_bloodType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `appointment_date`, `booked_on`, `appointment_time`, `user_id`, `doctor_id`, `patient_fname`, `patient_lname`, `patient_contact`, `patient_gender`, `patient_age`, `patient_bloodType`) VALUES
(9, '2020-09-04', '0000-00-00', '12:30:00', 1, 2, 'Fahim', 'Hoque', '01722317499', 'Male', 25, 'B+'),
(10, '2020-09-04', '2020-09-04', '13:00:00', 1, 2, 'Farah Diba', 'Hoque', '01720334664', 'Female', 55, 'B+'),
(11, '2020-09-05', '2020-09-04', '12:00:00', 1, 2, 'Patient_1_F', 'Patient_1_L', 'Patient_1_C', 'Female', 22, 'B+'),
(12, '2020-09-04', '2020-09-04', '14:00:00', 1, 2, 'Wahedul', 'Hoque', '01720334664', 'Male', 50, 'O+'),
(13, '2020-09-13', '2020-09-13', '13:00:00', 1, 2, 'test', 'test', '908898', 'Male', 50, 'A+'),
(14, '2020-09-24', '2020-09-24', '15:30:00', 1, 2, 'Shohag', 'Saym', '01722317499', 'Female', 55, 'A+'),
(15, '2020-09-24', '2020-09-24', '19:45:00', 1, 6, 'sgfj', 'kjsdhfkj', '01722317499', 'Male', 80, 'A+'),
(16, '2020-09-25', '2020-09-25', '12:30:00', 1, 2, 'Arnob', 'Arnob', 'Arnob', 'Male', 45, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `id` int(255) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `bloodtype` varchar(5) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`id`, `f_name`, `l_name`, `city`, `bloodtype`, `contact_number`, `email`) VALUES
(1, 'John', 'Doe', 'Dhaka', 'A+', '01700000001', 'john@doe.com'),
(2, 'Test_f', 'test_l', 'Rangpur', 'B+', '01630727996', 'fahim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `disctrict_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `disctrict_name`) VALUES
(1, 'Dhaka'),
(2, 'Rangpur'),
(3, 'Pabna'),
(4, 'Sylhet'),
(5, 'Mymensingh');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `duration` time NOT NULL,
  `cleanup_m` int(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `f_name`, `l_name`, `specialization`, `city`, `start_time`, `end_time`, `duration`, `cleanup_m`, `email`, `contact_number`, `gender`, `age`, `password`) VALUES
(1, 'John', 'Doe', 'Opthalmologist', 'Dhaka', '10:00:00', '22:00:00', '00:30:00', 0, 'john@doe.com', '01700000000', 'Male', 40, 'johndoe1234'),
(2, 'Jane', 'Doe', 'Opthalmologist', 'Dhaka', '12:00:00', '22:00:00', '00:30:00', 0, 'jane', '01700000001', 'Male', 35, 'jane'),
(3, 'Antonio ', 'Bureau', 'Medicine', 'Rangpur', '10:00:00', '22:00:00', '00:30:00', 15, 'antonio@yahoo.com', '01700000006', 'Male', 44, 'antonio'),
(4, 'Damian ', 'Lizaola', 'Neurologist', 'Rangpur', '16:00:00', '22:00:00', '00:30:00', 0, 'damian@yahoo.com', '01700000002', 'Male', 35, 'damian'),
(5, 'Angelica ', 'Brummell', 'Medicine', 'Rangpur', '16:00:00', '22:00:00', '00:30:00', 0, 'angelica@yahoo.com', '01700000003', 'Female', 28, 'angelica'),
(6, 'Karson ', 'Roddick', 'Allergists', 'Pabna', '16:00:00', '22:00:00', '00:30:00', 15, 'karson@yahoo.com', '01700000004', 'Female', 56, 'karson'),
(7, 'Bella ', 'Ahmed', 'Cardiologists', 'Sylhet', '16:00:00', '22:00:00', '00:30:00', 0, 'bella@yahoo.com', '01700000007', 'Female', 27, 'bella');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_reg_num`
--

CREATE TABLE `doctor_reg_num` (
  `doc_id` int(11) NOT NULL,
  `reg_num` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_tickets`
--

CREATE TABLE `doctor_tickets` (
  `doctor_id` int(255) NOT NULL,
  `subject` text NOT NULL,
  `details` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_tickets`
--

INSERT INTO `doctor_tickets` (`doctor_id`, `subject`, `details`, `status`) VALUES
(2, 'wrong gender', 'please correct my gender. It\'ll be female', ''),
(2, 'hello', 'test ticket', ''),
(3, 'John Doe', 'Test Ticket', 'Solved'),
(1, 'test for john doe', 'ticket for john doe', 'Solved');

-- --------------------------------------------------------

--
-- Stand-in structure for view `today_appointment`
-- (See below for the actual view)
--
CREATE TABLE `today_appointment` (
`appointment_id` int(11)
,`appointment_date` date
,`appointment_time` time
,`user_id` int(11)
,`f_name` varchar(20)
,`l_name` varchar(20)
,`patient_fname` varchar(255)
,`patient_lname` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `contact_number`, `gender`, `password`) VALUES
(1, 'arnob', 'hoque', 'arnob', '01722317499', 'Male', 'arnob'),
(2, 'Rofiqul ', 'Islam', 'rofiq', '01630727996', 'Male', '12345'),
(3, 'Ashfaq', 'Afzal', 'aac@gmail.com', '01795602095', 'Male', 'fahim');

-- --------------------------------------------------------

--
-- Table structure for table `user_tickets`
--

CREATE TABLE `user_tickets` (
  `user_id` int(255) NOT NULL,
  `ticket_file_date` date NOT NULL,
  `subject` text NOT NULL,
  `details` text NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tickets`
--

INSERT INTO `user_tickets` (`user_id`, `ticket_file_date`, `subject`, `details`, `status`) VALUES
(1, '2020-09-04', 'test', 'test', NULL),
(1, '2020-09-04', 'TEST2', 'TEST2', NULL),
(1, '2020-09-04', 'TEST3', 'TEST3', NULL);

-- --------------------------------------------------------

--
-- Structure for view `today_appointment`
--
DROP TABLE IF EXISTS `today_appointment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `today_appointment`  AS  select `a`.`appointment_id` AS `appointment_id`,`a`.`appointment_date` AS `appointment_date`,`a`.`appointment_time` AS `appointment_time`,`a`.`user_id` AS `user_id`,`d`.`f_name` AS `f_name`,`d`.`l_name` AS `l_name`,`a`.`patient_fname` AS `patient_fname`,`a`.`patient_lname` AS `patient_lname` from (`appointment` `a` join `doctor` `d`) where `a`.`doctor_id` = `d`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_doctor_id` (`doctor_id`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD KEY `fk_donor_id_doctor` (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_reg_num`
--
ALTER TABLE `doctor_reg_num`
  ADD KEY `fk_doc` (`doc_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_doctor_id` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `doctor_reg_num`
--
ALTER TABLE `doctor_reg_num`
  ADD CONSTRAINT `fk_doc` FOREIGN KEY (`doc_id`) REFERENCES `doctor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
