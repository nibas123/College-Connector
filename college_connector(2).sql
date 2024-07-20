-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 03:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_connector`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alott_staff`
--

CREATE TABLE `tbl_alott_staff` (
  `alott_id` int(11) NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `time_period` int(11) NOT NULL,
  `day` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alott_staff`
--

INSERT INTO `tbl_alott_staff` (`alott_id`, `teacher_login_id`, `subject_id`, `time_period`, `day`) VALUES
(4, 9, 2, 3, 'Tuesday'),
(2, 8, 2, 1, 'Monday'),
(3, 8, 2, 1, 'Tuesday'),
(5, 8, 2, 5, 'Tuesday'),
(6, 8, 2, 1, 'Wednesday'),
(7, 28, 2, 1, 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment`
--

CREATE TABLE `tbl_assignment` (
  `assign_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `assign_date` varchar(20) NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `out_of_mark` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assignment`
--

INSERT INTO `tbl_assignment` (`assign_id`, `subject_id`, `topic`, `assign_date`, `teacher_login_id`, `out_of_mark`) VALUES
(1, 2, 'ff ff ff', '2019-08-20', 8, 100),
(4, 2, 'yfg', '2019-08-16', 9, 120),
(5, 2, 'CRYPTOGRAPHY', '2019-08-30', 25, 50),
(6, 7, 'Basic Concept of Java', '2019-09-30', 28, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment_result`
--

CREATE TABLE `tbl_assignment_result` (
  `result_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assign_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_assignment_result`
--

INSERT INTO `tbl_assignment_result` (`result_id`, `student_login_id`, `mark`, `entry_date`, `assign_id`) VALUES
(1, 6, 25, '2019-08-06 15:24:44', 1),
(2, 6, 59, '2019-08-09 11:35:51', 1),
(3, 0, 0, '2019-08-09 12:17:26', 0),
(4, 6, 0, '2019-08-09 12:18:01', 0),
(5, 0, 0, '2019-08-09 12:18:52', 0),
(6, 6, 36, '2019-08-09 12:21:53', 4),
(7, 6, 40, '2019-08-26 04:16:58', 5),
(8, 15, 49, '2019-08-26 06:16:09', 5),
(9, 26, 38, '2019-09-18 06:22:54', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `entry_id` int(11) NOT NULL,
  `attendance_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alott_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL,
  `attendance_status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`entry_id`, `attendance_date`, `alott_id`, `student_login_id`, `attendance_status`) VALUES
(1, '2019-08-06 04:12:40', 3, 6, 'Present'),
(2, '2019-08-07 05:29:13', 6, 6, 'Absent'),
(3, '2019-08-07 05:29:27', 6, 15, 'Present'),
(4, '2019-09-18 06:44:30', 7, 6, 'Present'),
(5, '2019-09-18 06:44:33', 7, 15, 'Absent'),
(6, '2019-09-18 06:44:35', 7, 23, 'Present'),
(7, '2019-09-18 06:44:37', 7, 26, 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `duration` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `duration`, `department_id`) VALUES
(1, 'MBA', 2, 14),
(2, 'BA', 3, 13),
(3, 'M.Com', 2, 9),
(6, 'MCA', 3, 3),
(7, 'MSc', 2, 3),
(10, 'BBA', 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(3, 'Computer Science'),
(7, 'Civil'),
(5, 'Electronics'),
(6, 'Mechanical'),
(9, 'Commerce '),
(10, 'Chemistry'),
(11, 'Physics'),
(12, 'Mathmatics'),
(13, 'English'),
(14, ' Management');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_announce`
--

CREATE TABLE `tbl_exam_announce` (
  `exam_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `exam_date` date NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `out_of_mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam_announce`
--

INSERT INTO `tbl_exam_announce` (`exam_id`, `subject_id`, `topic`, `exam_date`, `teacher_login_id`, `out_of_mark`) VALUES
(1, 1, 'modules 1,2,3', '0000-00-00', 0, 0),
(2, 2, 'dddddddd', '0000-00-00', 0, 0),
(3, 1, 'ssssss', '0000-00-00', 0, 0),
(4, 2, 'ddd', '0000-00-00', 0, 0),
(7, 2, 'sd', '2019-08-06', 8, 100),
(8, 2, 'dsf', '2019-08-14', 9, 123),
(9, 2, 'fg', '0000-00-00', 8, 0),
(10, 2, 'RAM ROM', '2019-08-27', 25, 50),
(11, 7, 'Java Concepts', '2019-09-25', 28, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_result`
--

CREATE TABLE `tbl_exam_result` (
  `result_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `exam_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam_result`
--

INSERT INTO `tbl_exam_result` (`result_id`, `student_login_id`, `mark`, `entry_date`, `exam_id`) VALUES
(1, 6, 58, '2019-08-06 12:01:29', 7),
(3, 0, 0, '2019-08-09 11:15:07', 0),
(5, 6, 120, '2019-08-09 12:11:24', 8),
(7, 6, 45, '2019-08-26 04:16:20', 10),
(8, 15, 45, '2019-08-26 06:15:45', 10),
(9, 26, 45, '2019-09-18 06:21:49', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE `tbl_fee` (
  `fee_id` int(100) NOT NULL,
  `student_login_id` int(100) NOT NULL,
  `semester_id` int(100) NOT NULL,
  `fee_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`fee_id`, `student_login_id`, `semester_id`, `fee_date`) VALUES
(1, 6, 1, '2019-10-14 12:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `parent_login_id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `response` varchar(50) NOT NULL DEFAULT 'Nil',
  `feedback_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `parent_login_id`, `feedback`, `response`, `feedback_date`) VALUES
(1, 16, 'xcvcxvcx', 'gg gg', '2019-08-23 10:36:49'),
(2, 24, 'Good Teaching', 'Okk', '2019-08-26 06:20:12'),
(3, 27, 'Thank you', 'Nil', '2019-09-18 06:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hod`
--

CREATE TABLE `tbl_hod` (
  `hod_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `teacher_login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hod`
--

INSERT INTO `tbl_hod` (`hod_id`, `department_id`, `teacher_login_id`) VALUES
(2, 0, 0),
(4, 3, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(23, 'meera', '55232d6cee75030476853a5ee47588fa', 'student', 1),
(24, 'abraham23@gmail.com', '248706c023957db08d14f39749879207', 'parent', 1),
(25, 'geethu', '21232f297a57a5a743894a0e4a801fc3', 'Teacher', 1),
(26, 'geethu', '4045f56cd6a8d853f2fd7d66cffad1bf', 'student', 1),
(27, 'murali@gmail.com', '34cc2d6881fa3b48cf5de52384755dd7', 'parent', 1),
(28, 'kavya', 'e7476ca55559e029965da4e8f1018e45', 'Teacher', 1),
(29, 'reenu', '389a2ef6610968d7a8e72322a587662d', 'Teacher', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_note`
--

CREATE TABLE `tbl_note` (
  `note_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `note_name` varchar(60) NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_note`
--

INSERT INTO `tbl_note` (`note_id`, `subject_id`, `note_name`, `teacher_login_id`, `entry_date`, `title`) VALUES
(8, 2, '7.jpg', 8, '2019-08-09 11:48:30', 'df'),
(9, 2, '8.', 9, '2019-08-09 12:23:52', 'hg'),
(10, 2, '8.pdf', 25, '2019-08-26 04:17:57', 'CRYPTOGRAPHY'),
(11, 2, '9.pdf', 25, '2019-08-26 06:16:45', 'RAM'),
(12, 7, '10.pdf', 28, '2019-09-18 06:24:00', 'Java Structure');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent_reg`
--

CREATE TABLE `tbl_parent_reg` (
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parent_reg`
--

INSERT INTO `tbl_parent_reg` (`parent_id`, `name`, `gender`, `occupation`, `phone`, `email`, `login_id`, `student_login_id`) VALUES
(1, 'rajan', '', 'farmer', 879389589, 'rajan@gmail.com', 6, 1),
(2, 'ravi', '', 'farmer', 22, 'ravi@gmail.com', 8, 2),
(3, 'krishnan', '', 'farmer', 97755666, 'krishnan@gmail.com', 11, 3),
(4, 'ggggg', '', 'dddddddd', 12323, 'gg@gg.com', 15, 4),
(5, 'Mark', '', 'Teacher', 2147483647, 'mark@gmail.com', 19, 5),
(6, 'Mark', '', 'Teacher', 2147483647, 'mark@gmail.com', 7, 6),
(7, 'John', '', 'Engineer', 2147483647, 'john@gmail.com', 16, 15),
(8, 'Abraham', '', 'Retired ', 8547854125, 'abraham23@gmail.com', 24, 23),
(9, 'Murali', '', 'Degree', 9207568945, 'murali@gmail.com', 27, 26);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rules`
--

CREATE TABLE `tbl_rules` (
  `rule_id` int(11) NOT NULL,
  `rule_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rules`
--

INSERT INTO `tbl_rules` (`rule_id`, `rule_name`, `description`, `fine`) VALUES
(7, 'Garden', 'Damage to the College Gardens', 100),
(6, 'Violating the Univer', 'Violating the University’s internet transfer protocol, including violating intellectual copyright by using Peer-to-Peer (P2P) software applications. Use of Bit Torrent software is forbidden anywhere on the College network.', 1000),
(4, 'Anti-social behaviou', 'Anti-social behaviour associated with excessive drinking (incl. verbal excess causing disturbance to others, vomiting in Hall or elsewhere on College property, and pennying in Hall)', 500),
(8, 'Uniform', 'Uniform', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule_violation`
--

CREATE TABLE `tbl_rule_violation` (
  `rule_violation_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `date_fine` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rule_violation`
--

INSERT INTO `tbl_rule_violation` (`rule_violation_id`, `student_login_id`, `rule_id`, `date_fine`) VALUES
(1, 6, 7, '2019-08-06 16:27:40'),
(2, 6, 0, '2019-08-06 17:13:28'),
(3, 6, 7, '2019-08-09 09:17:44'),
(4, 23, 7, '2019-09-18 05:36:28'),
(0, 15, 0, '2019-10-14 12:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(20) NOT NULL,
  `fee_amount` float(20,2) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_name`, `fee_amount`, `course_id`) VALUES
(1, 'I Semester', 16000.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_reg`
--

CREATE TABLE `tbl_staff_reg` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department_id` int(11) NOT NULL,
  `educational_qualification` varchar(60) NOT NULL,
  `date_of_join` varchar(30) NOT NULL,
  `login_id` int(11) NOT NULL,
  `certificate` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff_reg`
--

INSERT INTO `tbl_staff_reg` (`staff_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `phone`, `email`, `department_id`, `educational_qualification`, `date_of_join`, `login_id`, `certificate`) VALUES
(1, 'Tom', 'Thomas', '3', '1978-08-08', 'Tom Villa', 986532124578, 'tom@gmail.com', 3, 'MCA phd', '2019-06-26', 8, '2.jpg'),
(2, 'Jancy', 'Thomas', '3', '1989-03-16', 'Jan Villa', 7845122356, 'jancy@gmail.com', 3, 'MCA', '2019-06-26', 9, '4.jpg'),
(3, 'Sreelatha', 'S', '3', '1982-06-09', 'Sree Vilasam', 7894561234, 'sreelatha@gmail.com', 3, 'MSc BEd', '2019-06-26', 10, '3.jpg'),
(4, 'ewr', 'e', '3', '2019-08-08', 'e', 9865321245, 'ss@ff.com', 3, '', '', 19, '1.jpg'),
(7, 'd', 'd', '3', '2019-08-22', 'sd', 9876543245, 's@ss.com', 3, 'sdds', '2019-08-22', 22, '0.jpg'),
(8, 'Geethu', 'Nair', '3', '1995-11-21', 'PALLATTU House\r\n\r\nRamapuram,Pala', 8547541254, 'geethu@gmail.com', 3, 'MCA', '2019-08-01', 25, '6.jpg'),
(9, 'Kavya', 'Vijay', 'female', '2000-11-15', 'Kottayam', 9824569874, 'kavya@gmail.com', 3, 'Mtech', '2019-09-01', 28, '6.jpg'),
(10, 'Reenu', 'Mathew', 'female', '1981-06-17', 'Pala', 9857462154, 'reenu@gmail.com', 14, 'MBA', '2019-09-01', 29, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_reg`
--

CREATE TABLE `tbl_student_reg` (
  `stud_reg_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_reg`
--

INSERT INTO `tbl_student_reg` (`stud_reg_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `phone`, `email`, `login_id`, `course_id`, `semester_id`, `entry_date`) VALUES
(1, 'Pheba', 'Eben', 'male', '1983-03-22', 'Pheba villa', 2147483647, 'pheba_ebenezer@gmail.com', 6, 6, 1, '2019-06-26 06:57:23'),
(4, 'Nithin', 'John', 'male', '1999-04-22', 'Nithin Villa', 2147483647, 'nithin@gmail.com', 15, 6, 1, '2019-08-07 02:13:51'),
(5, 'Meera', 'Abraham', 'female', '1995-03-17', 'Kalloor House,Veloor P.o Kottayam', 2147483647, 'meera123@gmail.com', 23, 6, 1, '2019-08-26 04:03:40'),
(6, 'Geethu', 'Murali', 'female', '1995-11-21', 'Pala', 2147483647, 'geethu@gmail.com', 26, 6, 1, '2019-09-18 05:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `subject_name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `semester_id`, `subject_name`) VALUES
(2, 1, 'Computer Organization'),
(4, 1, 'g'),
(7, 1, 'Java'),
(8, 1, 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weightage`
--

CREATE TABLE `tbl_weightage` (
  `weightage_id` int(11) NOT NULL,
  `weightage` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_weightage`
--

INSERT INTO `tbl_weightage` (`weightage_id`, `weightage`, `type`) VALUES
(1, 50, 'Examination'),
(2, 20, 'Attendance'),
(3, 20, 'Assignment'),
(5, 10, 'Rule');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alott_staff`
--
ALTER TABLE `tbl_alott_staff`
  ADD PRIMARY KEY (`alott_id`);

--
-- Indexes for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `tbl_assignment_result`
--
ALTER TABLE `tbl_assignment_result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_exam_announce`
--
ALTER TABLE `tbl_exam_announce`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `tbl_exam_result`
--
ALTER TABLE `tbl_exam_result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_hod`
--
ALTER TABLE `tbl_hod`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_note`
--
ALTER TABLE `tbl_note`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `tbl_parent_reg`
--
ALTER TABLE `tbl_parent_reg`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `tbl_rules`
--
ALTER TABLE `tbl_rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `tbl_rule_violation`
--
ALTER TABLE `tbl_rule_violation`
  ADD PRIMARY KEY (`rule_violation_id`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `tbl_staff_reg`
--
ALTER TABLE `tbl_staff_reg`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_student_reg`
--
ALTER TABLE `tbl_student_reg`
  ADD PRIMARY KEY (`stud_reg_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_weightage`
--
ALTER TABLE `tbl_weightage`
  ADD PRIMARY KEY (`weightage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alott_staff`
--
ALTER TABLE `tbl_alott_staff`
  MODIFY `alott_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_assignment_result`
--
ALTER TABLE `tbl_assignment_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
