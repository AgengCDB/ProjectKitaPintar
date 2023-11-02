-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 04:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitapintar`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `answertext` varchar(500) NOT NULL,
  `answerup` int(11) NOT NULL DEFAULT 0,
  `answerdown` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerid`, `questionid`, `userid`, `answertext`, `answerup`, `answerdown`) VALUES
(5, 1, 3, 'test', 0, 0),
(18, 2, 2, 'Fisika', 0, 0),
(19, 1, 2, 'Biologi', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `questiontext` varchar(1000) NOT NULL,
  `questionup` int(11) NOT NULL DEFAULT 0,
  `questiondown` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `userid`, `subjectid`, `questiontext`, `questionup`, `questiondown`) VALUES
(1, 1, 2, 'Apa arti makhluk hidup?', 4, 1),
(2, 1, 5, 'Berapa kecepatan ....?', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(11) NOT NULL,
  `subjectname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subjectname`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Biologi'),
(3, 'Bahasa Inggris'),
(4, 'Matematika'),
(5, 'Fisika');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userrole` enum('owner','admin','user','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `useremail`, `password`, `userrole`) VALUES
(1, 'Abdul123', '', '1', 'user'),
(2, 'Ayam1234', 'ayam.1234@gmail.com', '$2y$10$R1ZmGJNUfftPPpt8bFVSeOat2wAAT0P6u7LDTx41HkA.kh.ADwAvy', 'user'),
(3, 'Kucing123', 'kucing123@gmail.com', '$2y$10$E7YhO.xKG/00No3t0Wm3PeePm9a3sXFa.SB.3ictNF79Afw.DqAzK', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `questionid` (`questionid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionid`),
  ADD KEY `userid` (`userid`,`subjectid`),
  ADD KEY `question_ibfk_2` (`subjectid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `userid_2` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `question` (`questionid`) ON DELETE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
