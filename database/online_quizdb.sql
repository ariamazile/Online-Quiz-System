-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `professor_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`professor_id`, `username`, `password`, `date_time_created`, `date_time_updated`) VALUES
(1, 'admin', 'admin', '2021-10-22 00:00:00', '2021-10-22 00:00:00'),
(2, 'austine', 'austinepogi', '2021-10-22 00:00:00', '2021-10-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(50) NOT NULL,
  `question_no` varchar(50) NOT NULL,
  `question` varchar(80) NOT NULL,
  `choices1` varchar(50) NOT NULL,
  `choices2` varchar(50) NOT NULL,
  `choices3` varchar(50) NOT NULL,
  `choices4` varchar(50) NOT NULL,
  `answer` text NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_no`, `question`, `choices1`, `choices2`, `choices3`, `choices4`, `answer`, `title`) VALUES
(18, '1', 'What is PHP?', 'PHP is a web language based on scripts that allow ', 'PEAR means “PHP Extension and Application Reposito', 'PHP 5 presents many additional OOP (Object Oriente', 'PHP supports only single inheritance; it means tha', 'PHP is a web language based on scripts that allow developers to dynamically create generated web pages.', 'PHP'),
(19, '2', '2) What do the initials of PHP stand for?', 'PHP: Hypertext Preprocessor.', 'Preprocessor Hypertext', 'Philippines Hyperx', 'None of the above', 'PHP: Hypertext Preprocessor.', 'PHP'),
(20, '3', 'Which programming language does PHP resemble?', 'PHP syntax resembles Perl and C', 'PHP syntax resembles Perl and B', 'PHP syntax resembles Perl and A', 'PHP syntax resembles Perl and D', 'PHP syntax resembles Perl and C', 'PHP'),
(21, '4', 'PHP server scripts are surrounded by delimiters, which?', '<?php>...</?>', '<?php...?>', '<script>...</script>', '<&>...</&>', '<?php...?>', 'PHP'),
(23, '6', 'How do you write \"Hello World\" in PHP', 'Document.Write(\"hello world\")', '\"Hello World\";', 'echo \"Hello World\";', '<h1> Hello Word </h1>', 'echo \"Hello World\";', 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(50) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `quiz_time_in_minutes` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `exam_name`, `quiz_time_in_minutes`) VALUES
(1, 'PHP', 30),
(12, 'HCI 101', 30);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `exam_type` varchar(50) NOT NULL,
  `total_question` varchar(100) NOT NULL,
  `correct_answer` varchar(10) NOT NULL,
  `wrong_answer` varchar(10) NOT NULL,
  `exam_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `username`, `exam_type`, `total_question`, `correct_answer`, `wrong_answer`, `exam_time`) VALUES
(1, '1801023', 'PHP', '5', '3', '2', '2021-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(7) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `year_and_course` varchar(50) NOT NULL,
  `contact_number` int(12) NOT NULL,
  `date_time_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_time_updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `year_and_course`, `contact_number`, `date_time_created`, `date_time_updated`) VALUES
(1, '1801023', '123456', 'john raizen', 'gatdula', 'alabata', '3rd year - BSCS', 956617608, '2021-10-22 00:00:00', '2021-10-22 00:00:00'),
(2, '1901508', '123456', 'vincent', 'bactad', 'pagdato', '3rd year - BSCS', 995348593, '2021-10-22 00:00:00', '2021-10-22 00:00:00'),
(4, 'rairai', 'rairai', 'asdkasdas', 'asdkadka', 'daskdakdak', 'kdlskskd', 9084334, '2021-10-24 13:27:19', '2021-10-24 13:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` int(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `units` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `units`) VALUES
(1, 'AR 101', 3),
(2, 'HCI 101', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`professor_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `professor_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
