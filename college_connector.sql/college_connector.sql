-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2019 at 08:51 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `college_connector`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alott_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_alott_staff` (
  `alott_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_login_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `time_period` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  PRIMARY KEY (`alott_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_alott_staff`
--

INSERT INTO `tbl_alott_staff` (`alott_id`, `teacher_login_id`, `subject_id`, `time_period`, `day`) VALUES
(1, 25, 2, 1, 'Monday'),
(2, 28, 7, 2, 'Tuesday'),
(3, 25, 8, 1, 'Tuesday'),
(6, 0, 4, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment`
--

CREATE TABLE IF NOT EXISTS `tbl_assignment` (
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `assign_date` date NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `out_of_mark` int(11) NOT NULL,
  PRIMARY KEY (`assign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_assignment`
--

INSERT INTO `tbl_assignment` (`assign_id`, `subject_id`, `topic`, `assign_date`, `teacher_login_id`, `out_of_mark`) VALUES
(1, 2, 'ff ff ff', '2019-08-20', 8, 100),
(4, 2, 'yfg', '2019-10-22', 9, 120),
(5, 2, 'CRYPTOGRAPHY', '2019-10-22', 25, 50),
(6, 7, 'Basic Concept of Java', '2019-09-30', 28, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment_result`
--

CREATE TABLE IF NOT EXISTS `tbl_assignment_result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_login_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assign_id` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_assignment_result`
--

INSERT INTO `tbl_assignment_result` (`result_id`, `student_login_id`, `mark`, `entry_date`, `assign_id`) VALUES
(1, 6, 25, '2019-08-06 20:54:44', 1),
(2, 6, 59, '2019-08-09 17:05:51', 1),
(3, 0, 0, '2019-08-09 17:47:26', 0),
(4, 6, 0, '2019-08-09 17:48:01', 0),
(5, 0, 0, '2019-08-09 17:48:52', 0),
(6, 6, 36, '2019-08-09 17:51:53', 4),
(7, 6, 40, '2019-08-26 09:46:58', 5),
(8, 15, 49, '2019-08-26 11:46:09', 5),
(9, 26, 38, '2019-09-18 11:52:54', 6),
(10, 23, 24, '2019-10-21 15:59:59', 5),
(11, 15, 13, '2019-10-21 16:08:07', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `attendance_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alott_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL,
  `attendance_status` varchar(50) NOT NULL,
  `semester_id` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`entry_id`, `attendance_date`, `alott_id`, `student_login_id`, `attendance_status`, `semester_id`) VALUES
(1, '2019-10-22 11:27:16', 2, 23, 'Present', 1),
(2, '2019-10-22 11:27:21', 2, 26, 'Present', 1),
(3, '2019-10-22 11:28:00', 3, 23, 'Present', 1),
(4, '2019-10-22 11:28:02', 3, 26, 'Absent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) NOT NULL,
  `duration` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_name`, `duration`, `department_id`) VALUES
(1, 'MBA', 2, 14),
(2, 'BA', 3, 13),
(3, 'M.Com', 2, 9),
(6, 'MCA', 3, 3),
(7, 'MSc', 2, 3),
(10, 'BBA', 3, 14),
(11, 'Bcom', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(50) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

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

CREATE TABLE IF NOT EXISTS `tbl_exam_announce` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `exam_date` date NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `out_of_mark` int(11) NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_exam_announce`
--

INSERT INTO `tbl_exam_announce` (`exam_id`, `subject_id`, `topic`, `exam_date`, `teacher_login_id`, `out_of_mark`) VALUES
(1, 1, 'modules 1,2,3', '0000-00-00', 0, 0),
(2, 2, 'dddddddd', '0000-00-00', 0, 0),
(3, 1, 'ssssss', '0000-00-00', 0, 0),
(4, 2, 'ddd', '0000-00-00', 0, 0),
(7, 2, 'sd', '2019-08-06', 8, 100),
(8, 2, 'dsf', '2019-10-24', 9, 123),
(9, 2, 'fg', '0000-00-00', 8, 0),
(10, 2, 'RAM ROM', '2019-10-20', 25, 50),
(11, 7, 'Java Concepts', '2019-10-21', 28, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_result`
--

CREATE TABLE IF NOT EXISTS `tbl_exam_result` (
  `result_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_login_id` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `exam_id` int(11) NOT NULL,
  PRIMARY KEY (`result_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_exam_result`
--

INSERT INTO `tbl_exam_result` (`result_id`, `student_login_id`, `mark`, `entry_date`, `exam_id`) VALUES
(1, 6, 58, '2019-08-06 17:31:29', 7),
(3, 0, 0, '2019-08-09 16:45:07', 0),
(5, 6, 120, '2019-08-09 17:41:24', 8),
(7, 6, 45, '2019-08-26 09:46:20', 10),
(8, 15, 45, '2019-08-26 11:45:45', 10),
(9, 26, 45, '2019-09-18 11:51:49', 11),
(13, 23, 23, '2019-10-21 15:42:30', 10),
(14, 15, 16, '2019-10-21 16:07:06', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faculty_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_faculty_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(50) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `response` varchar(50) NOT NULL DEFAULT 'Nill',
  `login_id` int(11) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_faculty_feedback`
--

INSERT INTO `tbl_faculty_feedback` (`feedback_id`, `subject`, `feedback`, `response`, `login_id`) VALUES
(2, 'ybunimo,p[', 'ertbynuimop[', 'ybunm,.', 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE IF NOT EXISTS `tbl_fee` (
  `fee_id` int(100) NOT NULL AUTO_INCREMENT,
  `student_login_id` int(100) NOT NULL,
  `semester_id` int(100) NOT NULL,
  `fee_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`fee_id`, `student_login_id`, `semester_id`, `fee_date`) VALUES
(1, 23, 1, '2019-10-15 12:46:34'),
(2, 26, 1, '2019-11-01 00:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_login_id` int(11) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `response` varchar(50) NOT NULL DEFAULT 'Nil',
  `feedback_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `parent_login_id`, `feedback`, `response`, `feedback_date`) VALUES
(1, 16, 'xcvcxvcx', 'gg gg', '2019-08-23 16:06:49'),
(2, 24, 'Good Teaching', 'nhuji,', '2019-08-26 11:50:12'),
(3, 27, 'Thank you', 'Nil', '2019-09-18 12:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hod`
--

CREATE TABLE IF NOT EXISTS `tbl_hod` (
  `hod_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_id` int(11) NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  PRIMARY KEY (`hod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_hod`
--

INSERT INTO `tbl_hod` (`hod_id`, `department_id`, `teacher_login_id`) VALUES
(4, 3, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(23, 'meera', '55232d6cee75030476853a5ee47588fa', 'student', 1),
(24, 'abraham23@gmail.com', '248706c023957db08d14f39749879207', 'parent', 1),
(25, 'geethu1', 'b960f77efe9bf102f54272f17802eb62 ', 'Teacher', 1),
(26, 'geethu', '4045f56cd6a8d853f2fd7d66cffad1bf', 'student', 1),
(27, 'murali@gmail.com', '34cc2d6881fa3b48cf5de52384755dd7', 'parent', 1),
(28, 'kavya', 'e7476ca55559e029965da4e8f1018e45', 'Teacher', 1),
(29, 'reenu', '389a2ef6610968d7a8e72322a587662d', 'Teacher', 1),
(36, 'tom@gmail.com', '5caf72868c94f184650f43413092e82c', 'parent', 0),
(35, 'fff1234', '310dedfd40110a1a38f853077ae1e914', 'student', 0),
(37, 'dd12345', 'daa9e234370555f657dd3e9d9672e5e9', 'Teacher', 0),
(38, 'ee12345', 'e65002e701d187f71ef84d4640beea6b', 'Teacher', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_note`
--

CREATE TABLE IF NOT EXISTS `tbl_note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL,
  `note_name` varchar(60) NOT NULL,
  `teacher_login_id` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_note`
--

INSERT INTO `tbl_note` (`note_id`, `subject_id`, `note_name`, `teacher_login_id`, `entry_date`, `title`) VALUES
(8, 2, '7.jpg', 8, '2019-08-09 17:18:30', 'df'),
(9, 2, '8.', 9, '2019-08-09 17:53:52', 'hg'),
(10, 2, '8.pdf', 25, '2019-08-26 09:47:57', 'CRYPTOGRAPHY'),
(11, 2, '9.pdf', 25, '2019-08-26 11:46:45', 'RAM'),
(12, 7, '10.pdf', 28, '2019-09-18 11:54:00', 'Java Structure');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_parent_reg` (
  `parent_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login_id` int(11) NOT NULL,
  `student_login_id` int(11) NOT NULL,
  PRIMARY KEY (`parent_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
(9, 'Murali', '', 'Degree', 9207568945, 'murali@gmail.com', 27, 26),
(10, 'tom', '', 'sfdsf', 9865321245, 'tom@gmail.com', 36, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent_teacher_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_parent_teacher_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(100) NOT NULL,
  `response` varchar(100) NOT NULL DEFAULT 'Nill',
  `parent_login_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_parent_teacher_feedback`
--

INSERT INTO `tbl_parent_teacher_feedback` (`feedback_id`, `feedback`, `response`, `parent_login_id`, `staff_id`) VALUES
(1, 'tynyum', 'vtyyyyyyyyyyyyyyyb', 27, 25),
(2, 'rcrrrrrrrrrrrrrrrrrrrrrrrrrt', 'Nill', 27, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rules`
--

CREATE TABLE IF NOT EXISTS `tbl_rules` (
  `rule_id` int(11) NOT NULL AUTO_INCREMENT,
  `rule_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `fine` int(11) NOT NULL,
  PRIMARY KEY (`rule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_rules`
--

INSERT INTO `tbl_rules` (`rule_id`, `rule_name`, `description`, `fine`) VALUES
(7, 'Garden', 'Damage to the College Gardens', 150);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rule_violation`
--

CREATE TABLE IF NOT EXISTS `tbl_rule_violation` (
  `rule_violation_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_login_id` int(11) NOT NULL,
  `rule_id` int(11) NOT NULL,
  `date_fine` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `staff_login_id` int(11) NOT NULL,
  PRIMARY KEY (`rule_violation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_rule_violation`
--

INSERT INTO `tbl_rule_violation` (`rule_violation_id`, `student_login_id`, `rule_id`, `date_fine`, `staff_login_id`) VALUES
(1, 15, 7, '2019-10-21 14:27:02', 28),
(2, 23, 7, '2019-10-21 14:30:29', 28),
(3, 26, 7, '2019-10-21 14:53:56', 25),
(4, 15, 7, '2019-10-21 15:11:06', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE IF NOT EXISTS `tbl_semester` (
  `semester_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester_name` varchar(20) NOT NULL,
  `fee_amount` float(20,2) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`semester_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`semester_id`, `semester_name`, `fee_amount`, `course_id`) VALUES
(1, 'Semester I', 16000.00, 6),
(2, 'Semester II', 16000.00, 6),
(3, 'Semester III', 16000.00, 6),
(4, 'Semester IV', 16000.00, 6),
(5, 'Semester V', 16000.00, 6),
(6, 'Semester VI', 16000.00, 6),
(7, 'Semester I', 12000.00, 7),
(8, 'Semester II', 12000.00, 7),
(9, 'Semester III', 12000.00, 7),
(10, 'Semester IV', 12000.00, 7),
(11, 'Semester I', 22000.00, 1),
(12, 'Semester II', 20000.00, 1),
(13, 'Semester III', 20000.00, 1),
(14, 'Semester IV', 20000.00, 1),
(15, 'Semester V', 20000.00, 1),
(16, 'Semester VI', 25000.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sem_change`
--

CREATE TABLE IF NOT EXISTS `tbl_sem_change` (
  `sem_change_id` int(11) NOT NULL AUTO_INCREMENT,
  `change_date` date NOT NULL,
  `student_login_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  PRIMARY KEY (`sem_change_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_sem_change`
--

INSERT INTO `tbl_sem_change` (`sem_change_id`, `change_date`, `student_login_id`, `semester_id`) VALUES
(1, '2019-10-22', 23, 2),
(2, '2019-11-01', 35, 2),
(3, '2019-11-01', 26, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_staff_reg` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `certificate` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_staff_reg`
--

INSERT INTO `tbl_staff_reg` (`staff_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `phone`, `email`, `department_id`, `educational_qualification`, `date_of_join`, `login_id`, `certificate`, `qualification`) VALUES
(1, 'Tom', 'Thomas', '3', '1978-08-08', 'Tom Villa', 986532124578, 'tom@gmail.com', 3, 'MCA phd', '2019-06-26', 8, '2.jpg', ''),
(2, 'Jancy', 'Thomas', '3', '1989-03-16', 'Jan Villa', 7845122356, 'jancy@gmail.com', 3, 'MCA', '2019-06-26', 9, '4.jpg', ''),
(3, 'Sreelatha', 'S', '3', '1982-06-09', 'Sree Vilasam', 7894561234, 'sreelatha@gmail.com', 3, 'MSc BEd', '2019-06-26', 10, '3.jpg', ''),
(4, 'ewr', 'e', '3', '2019-08-08', 'e', 9865321245, 'ss@ff.com', 3, '', '', 19, '1.jpg', ''),
(7, 'd', 'd', '3', '2019-08-22', 'sd', 9876543245, 's@ss.com', 3, 'sdds', '2019-08-22', 22, '0.jpg', ''),
(8, 'Geethu', 'Nair', '3', '1995-11-21', 'PALLATTU House\r\n\r\nRamapuram,Pala', 8547541254, 'geethu@gmail.com', 3, 'MCA', '2019-08-01', 25, '6.jpg', ''),
(9, 'Kavya', 'Vijay', 'female', '2000-11-15', 'Kottayam', 9824569874, 'kavya@gmail.com', 3, 'Mtech', '2019-09-01', 28, '6.jpg', ''),
(10, 'Reenu', 'Mathew', 'female', '1981-06-17', 'Pala', 9857462154, 'reenu@gmail.com', 14, 'MBA', '2019-09-01', 29, '6.jpg', ''),
(16, 'tyt', 'try', 'male', '2019-10-21', 'tryt', 9865321245, 'ggd@gmail.com', 3, 'dsds', '2019-10-21', 37, '6.jpg', 'MPhil'),
(17, 'tytrewr', 'tryewrew', 'male', '2019-10-21', 'tryt', 9865321245, 'ggd@gmail.com', 3, 'dsds', '2019-10-21', 38, '6.jpg', 'MPhil');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_reg`
--

CREATE TABLE IF NOT EXISTS `tbl_student_reg` (
  `stud_reg_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`stud_reg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Triggers `tbl_student_reg`
--
DROP TRIGGER IF EXISTS `college_connector`.`sem_change`;
DELIMITER //
CREATE TRIGGER `college_connector`.`sem_change` AFTER UPDATE ON `college_connector`.`tbl_student_reg`
 FOR EACH ROW insert into tbl_sem_change(change_date,student_login_id,semester_id) values(date(NOW()),NEW.login_id,NEW.semester_id)
//
DELIMITER ;

--
-- Dumping data for table `tbl_student_reg`
--

INSERT INTO `tbl_student_reg` (`stud_reg_id`, `first_name`, `last_name`, `gender`, `dob`, `address`, `phone`, `email`, `login_id`, `course_id`, `semester_id`, `entry_date`) VALUES
(4, 'Nithin', 'John', 'male', '1999-04-22', 'Nithin Villa', 2147483647, 'nithin@gmail.com', 15, 6, 1, '2019-08-07 07:43:51'),
(5, 'Meera', 'Abraham', 'female', '1995-03-17', 'Kalloor House,Veloor P.o Kottayam', 2147483647, 'meera123@gmail.com', 23, 6, 2, '2019-08-26 09:33:40'),
(6, 'Geethu', 'Murali', 'female', '1995-11-21', 'Pala', 2147483647, 'geethu@gmail.com', 26, 6, 2, '2019-09-18 10:48:30'),
(7, 'fg', 'fhgf', 'female', '2019-10-14', 'fghf', 2147483647, 'gg@gmail.com', 35, 6, 2, '2019-10-15 12:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `semester_id` int(11) NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `semester_id`, `subject_name`) VALUES
(2, 1, 'Computer Organization'),
(4, 1, 'g'),
(7, 1, 'Java'),
(8, 1, 'Software Engineering'),
(11, 1, 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_weightage`
--

CREATE TABLE IF NOT EXISTS `tbl_weightage` (
  `weightage_id` int(11) NOT NULL AUTO_INCREMENT,
  `weightage` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`weightage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_weightage`
--

INSERT INTO `tbl_weightage` (`weightage_id`, `weightage`, `type`) VALUES
(1, 50, 'Examination'),
(2, 20, 'Attendance'),
(3, 20, 'Assignment'),
(5, 10, 'Rule');
