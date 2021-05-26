-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 11:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `its`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_apply`
--

CREATE TABLE `tb_apply` (
  `app_id` int(10) NOT NULL,
  `app_student` varchar(10) NOT NULL,
  `app_company` int(10) NOT NULL,
  `app_date` date NOT NULL,
  `app_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_apply`
--

INSERT INTO `tb_apply` (`app_id`, `app_student`, `app_company`, `app_date`, `app_status`) VALUES
(5, 'A18CS0202', 6, '2021-05-17', 0),
(6, 'A18CS0001', 5, '2021-04-27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_apply_status`
--

CREATE TABLE `tb_apply_status` (
  `status_id` int(2) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_apply_status`
--

INSERT INTO `tb_apply_status` (`status_id`, `status_name`) VALUES
(0, 'Pending'),
(1, 'Approved'),
(3, 'Accepted'),
(4, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tb_assign`
--

CREATE TABLE `tb_assign` (
  `a_id` int(10) NOT NULL,
  `a_student` varchar(10) NOT NULL,
  `a_staff` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_assign`
--

INSERT INTO `tb_assign` (`a_id`, `a_student`, `a_staff`) VALUES
(6, 'A18CS0202', 'U001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_icoach`
--

CREATE TABLE `tb_icoach` (
  `i_id` varchar(10) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `i_email` varchar(50) NOT NULL,
  `i_contact` int(11) NOT NULL,
  `i_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_icoach`
--

INSERT INTO `tb_icoach` (`i_id`, `i_name`, `i_email`, `i_contact`, `i_password`) VALUES
('C001', 'RIANA BIN SAID', 'riana@gmail.com', 1298776543, 'c001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_industry`
--

CREATE TABLE `tb_industry` (
  `comp_id` int(10) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `comp_address` varchar(100) NOT NULL,
  `comp_email` varchar(20) NOT NULL,
  `comp_contact` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_industry`
--

INSERT INTO `tb_industry` (`comp_id`, `comp_name`, `comp_address`, `comp_email`, `comp_contact`) VALUES
(3, 'Celcom', 'Kuala Lumpur', 'celcom@gmail.com', 7234254),
(4, 'U mobile', 'Johor Bahru, Johor', 'umobile@gmail.com', 72567354),
(5, 'Air Asia', 'KLIA', 'aasia@gmail.com', 78973826),
(6, 'DOSM', 'Putrajaya', 'dosm@gmail.com', 723764738),
(7, 'TM ONE', 'Damansara', 'tmone@gmail.com', 78732647);

-- --------------------------------------------------------

--
-- Table structure for table `tb_logbook`
--

CREATE TABLE `tb_logbook` (
  `lb_id` int(10) NOT NULL,
  `lb_student` varchar(10) DEFAULT NULL,
  `lb_date` date NOT NULL,
  `lb_week` varchar(10) NOT NULL,
  `lb_file` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_logbook`
--

INSERT INTO `tb_logbook` (`lb_id`, `lb_student`, `lb_date`, `lb_week`, `lb_file`) VALUES
(5, 'A18CS0202', '2021-06-02', 'Week 1', 0x5352495f4e4142432e646f63),
(6, 'A18CS0202', '2021-06-03', 'Week 1', 0x50524a31202d2050726f706f73616c2e646f63),
(7, 'A18CS0202', '2021-05-27', 'Week 1', 0x4737202d204147494c45204d4f44454c2e706466),
(8, NULL, '2021-05-22', 'Week 2', 0x4736202d20524144204d4f44454c2e706466);

-- --------------------------------------------------------

--
-- Table structure for table `tb_resources`
--

CREATE TABLE `tb_resources` (
  `r_id` int(10) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `r_file` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_resources`
--

INSERT INTO `tb_resources` (`r_id`, `r_name`, `r_file`) VALUES
(29, 'Borang BLI 2A', 0x424c495f32412e646f6378),
(30, 'Borang BLI 1C', 0x424c492d31432e646f6378),
(31, 'Borang BLI 1D', 0x424c4931445f323032302e706466),
(32, 'Borang BLI 2D', 0x424c495f32442d4c6f672d426f6f6b2d766572696669636174696f6e2d666f726d2d62792d4f7267616e69736174696f6e2d53757065727669736f722e706466),
(33, 'Utm Logo', 0x4c4f474f2d55544d2e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `tb_resume`
--

CREATE TABLE `tb_resume` (
  `resume_id` int(10) NOT NULL,
  `resume_student` varchar(10) DEFAULT NULL,
  `resume_file` varbinary(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_resume`
--

INSERT INTO `tb_resume` (`resume_id`, `resume_student`, `resume_file`) VALUES
(0, 'A18CS0202', 0x50617373706f72742050686f746f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `staff_id` varchar(10) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `staff_contact` int(11) NOT NULL,
  `staff_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_staff`
--

INSERT INTO `tb_staff` (`staff_id`, `staff_name`, `staff_email`, `staff_contact`, `staff_password`) VALUES
('123', 'DR RAHMAT', 'rahmat@gmail.com', 197653422, '$2y$10$yeJ1249GSjaC7');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `student_id` varchar(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_contact` int(11) NOT NULL,
  `student_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`student_id`, `student_name`, `student_email`, `student_contact`, `student_password`) VALUES
('A18CS0001', 'AHMAD BIN ALI', 'ahmad@graduate.utm.my', 123456789, 'a18cs0001'),
('A18CS0002', 'BAKAR BIN RABU', 'bakar@graduate.utm.my', 129876543, 'a18cs0002'),
('A18CS0202', 'NUR SYAFIRA BINTI MOHD SYARIPUDDIN', 'nur.syafira@graduate.utm.my', 1137786371, 'a18cs0202');

-- --------------------------------------------------------

--
-- Table structure for table `tb_technical`
--

CREATE TABLE `tb_technical` (
  `t_id` int(10) NOT NULL,
  `t_student` varchar(10) DEFAULT NULL,
  `t_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_technical`
--

INSERT INTO `tb_technical` (`t_id`, `t_student`, `t_file`) VALUES
(3, 'A18CS0202', 'AA MidTerm Rubrics WBL.pdf'),
(7, 'A18CS0202', 'SRI_NABC (1).doc'),
(8, NULL, 'G3 - SPIRAL MODEL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unicoach`
--

CREATE TABLE `tb_unicoach` (
  `uni_id` varchar(10) NOT NULL,
  `uni_name` varchar(50) NOT NULL,
  `uni_email` varchar(50) NOT NULL,
  `uni_contact` int(11) NOT NULL,
  `uni_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_unicoach`
--

INSERT INTO `tb_unicoach` (`uni_id`, `uni_name`, `uni_email`, `uni_contact`, `uni_password`) VALUES
('U001', 'DR RAHIM', 'rahim@gmail.com', 123456789, 'u001'),
('U002', 'DR KHAMIS BIN RABU', 'khamis', 324234313, 'u002'),
('U003', 'DR NIK ', 'nik@gmail.com', 123426589, 'u003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_apply`
--
ALTER TABLE `tb_apply`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `app_matric` (`app_student`),
  ADD KEY `app_comp` (`app_company`),
  ADD KEY `app_status` (`app_status`),
  ADD KEY `app_student` (`app_student`);

--
-- Indexes for table `tb_apply_status`
--
ALTER TABLE `tb_apply_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tb_assign`
--
ALTER TABLE `tb_assign`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `a_student` (`a_student`),
  ADD KEY `a_staff` (`a_staff`);

--
-- Indexes for table `tb_icoach`
--
ALTER TABLE `tb_icoach`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `tb_industry`
--
ALTER TABLE `tb_industry`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD PRIMARY KEY (`lb_id`),
  ADD KEY `lb_matric` (`lb_student`);

--
-- Indexes for table `tb_resources`
--
ALTER TABLE `tb_resources`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tb_resume`
--
ALTER TABLE `tb_resume`
  ADD PRIMARY KEY (`resume_id`),
  ADD KEY `resume_matric` (`resume_student`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tb_technical`
--
ALTER TABLE `tb_technical`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `t_student` (`t_student`);

--
-- Indexes for table `tb_unicoach`
--
ALTER TABLE `tb_unicoach`
  ADD PRIMARY KEY (`uni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_apply`
--
ALTER TABLE `tb_apply`
  MODIFY `app_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_assign`
--
ALTER TABLE `tb_assign`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_industry`
--
ALTER TABLE `tb_industry`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  MODIFY `lb_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_resources`
--
ALTER TABLE `tb_resources`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_technical`
--
ALTER TABLE `tb_technical`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_apply`
--
ALTER TABLE `tb_apply`
  ADD CONSTRAINT `tb_apply_ibfk_1` FOREIGN KEY (`app_status`) REFERENCES `tb_apply_status` (`status_id`),
  ADD CONSTRAINT `tb_apply_ibfk_2` FOREIGN KEY (`app_student`) REFERENCES `tb_student` (`student_id`),
  ADD CONSTRAINT `tb_apply_ibfk_3` FOREIGN KEY (`app_company`) REFERENCES `tb_industry` (`comp_id`);

--
-- Constraints for table `tb_assign`
--
ALTER TABLE `tb_assign`
  ADD CONSTRAINT `tb_assign_ibfk_1` FOREIGN KEY (`a_staff`) REFERENCES `tb_unicoach` (`uni_id`),
  ADD CONSTRAINT `tb_assign_ibfk_2` FOREIGN KEY (`a_student`) REFERENCES `tb_student` (`student_id`);

--
-- Constraints for table `tb_logbook`
--
ALTER TABLE `tb_logbook`
  ADD CONSTRAINT `tb_logbook_ibfk_1` FOREIGN KEY (`lb_student`) REFERENCES `tb_student` (`student_id`);

--
-- Constraints for table `tb_resume`
--
ALTER TABLE `tb_resume`
  ADD CONSTRAINT `tb_resume_ibfk_1` FOREIGN KEY (`resume_student`) REFERENCES `tb_student` (`student_id`);

--
-- Constraints for table `tb_technical`
--
ALTER TABLE `tb_technical`
  ADD CONSTRAINT `tb_technical_ibfk_1` FOREIGN KEY (`t_student`) REFERENCES `tb_student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
