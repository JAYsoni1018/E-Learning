-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 08:12 AM
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
-- Database: `ischool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `pass` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `subject` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `comment` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `comment`) VALUES
(1, 'jay', 'I have not money', 'jayu@gmail.com', 'JSOIFHOETHWI4 ITHW4IT4IUWFPORJPW ER3PR3IRYIPGTJERFJ\r\nWEOI4HW4FIJPQWO34URJ4WPOJTWPO'),
(2, 'jay', 'I have not money', 'jayu@gmail.com', 'JSOIFHOETHWI4 ITHW4IT4IUWFPORJPW ER3PR3IRYIPGTJERFJ\r\nWEOI4HW4FIJPQWO34URJ4WPOJTWPO');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `author` varchar(40) COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL,
  `duration` varchar(30) COLLATE utf8_bin NOT NULL,
  `sell_price` int(20) NOT NULL,
  `original_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `author`, `img`, `duration`, `sell_price`, `original_price`) VALUES
(6, 'python', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', 'myswamiy', '../img/courseIMG/sql.webp', '3Years', 1000, 5000),
(12, 'C++', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', 'fraw', '../img/courseIMG/sql.webp', '1 year', 400, 2000),
(15, 'Html', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', 'Imkhurana', '../img/courseIMG/sql.webp', '3 months', 1000, 2000),
(16, 'Learn Guitar Easy Way', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', 'jay', '../img/courseIMG/sql.webp', '3 years', 1200, 2000),
(17, 'UI', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', 'Goole', '../img/courseIMG/sql.webp', '2Years', 1000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `content` varchar(400) COLLATE utf8_bin NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `content`, `sid`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', 41),
(4, 'SGSBJVB OSDGBVS EIF IER WIFRTWIETYIG NEWOUFJW PFUWPGWG', 42),
(5, 'SVBSJK SHSVSFBN Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, ', 43),
(6, 'THIS IS OWSEM I LIKE VERY MUCH.', 44);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lid` int(11) NOT NULL,
  `lname` text COLLATE utf8_bin NOT NULL,
  `ldesc` text COLLATE utf8_bin NOT NULL,
  `llink` text COLLATE utf8_bin NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lid`, `lname`, `ldesc`, `llink`, `cid`, `cname`) VALUES
(5, 'Intro to python', 'fafasfaf', '../lessonVIDEO/python_3.mp4', 6, 'python'),
(6, 'ch 1', 'ggsff afafaaaaaaa faaaaaaaaaaaaaaaaaaaaaa', '../lessonVIDEO/Python_2.mp4', 6, 'python'),
(7, 'Intro to C', 'intro c ', '../lessonVIDEO/python_3.mp4', 12, 'C++'),
(8, 'Cheapter1', 'ch1', '../lessonVIDEO/Python_1.mp4', 12, 'C++'),
(9, 'ch 2', 'ddddgdhg rgegeg egrger ', '../lessonVIDEO/python_3.mp4', 12, 'C++'),
(10, 'intro', 'basic about tag,attributes', '../lessonVIDEO/Python_2.mp4', 15, 'Html'),
(11, 'ch 1', 'lorem do fwy hoihf wo wr woghgorihr ej eorh geg  h rghrg', '../lessonVIDEO/Python_1.mp4', 15, 'Html'),
(12, 'ch2', 'rs stwtewt e', '../lessonVIDEO/python_3.mp4', 15, 'Html'),
(13, 'Intro to ui', 'vsgfsr', '../lessonVIDEO/Python_1.mp4', 17, 'UI'),
(14, 'ch1', 'fwfwerfrg gvregegeg', '../lessonVIDEO/Python_2.mp4', 17, 'UI'),
(15, 'Intro to  by learn to use and implement this instrument', 'dgge g y46yh6h 6yryhr', '../lessonVIDEO/python_3.mp4', 16, 'Learn Guitar Easy Way'),
(16, 'ch1', 'wfwt45y 6u5u5u54j5 54j6i7i6ir', '../lessonVIDEO/Python_2.mp4', 16, 'Learn Guitar Easy Way');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(50) COLLATE utf8_bin NOT NULL,
  `cprice` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sname` varchar(50) COLLATE utf8_bin NOT NULL,
  `smail` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `cid`, `cname`, `cprice`, `sid`, `sname`, `smail`, `date`) VALUES
(85, 16, 'Learn Guitar Easy Way', 1200, 45, 'Anant', 'anant@gmail.com', '2023-01-02'),
(87, 17, 'UI', 1000, 45, 'Anant', 'anant@gmail.com', '2023-01-02'),
(102, 17, 'UI', 1000, 42, 'Jay', 'jay@gmail.com', '2023-01-02'),
(103, 16, 'Learn Guitar Easy Way', 1200, 42, 'Jay', 'jay@gmail.com', '2023-01-02'),
(104, 6, 'python', 1000, 42, 'Jay', 'jay@gmail.com', '2023-01-02'),
(105, 15, 'Html', 1000, 42, 'Jay', 'jay@gmail.com', '2023-01-02'),
(106, 12, 'C++', 400, 42, 'Jay', 'jay@gmail.com', '2023-01-02'),
(107, 12, 'C++', 400, 43, 'Vraj', 'vraj@gmail.com', '2023-01-03'),
(108, 6, 'python', 1000, 43, 'Vraj', 'vraj@gmail.com', '2023-01-03'),
(109, 16, 'Learn Guitar Easy Way', 1200, 43, 'Vraj', 'vraj@gmail.com', '2023-01-03'),
(110, 17, 'UI', 1000, 43, 'Vraj', 'vraj@gmail.com', '2023-01-03'),
(115, 17, 'UI', 1000, 47, 'mayur', 'mayur@gmail.com', '2023-01-20'),
(116, 6, 'python', 1000, 44, 'krish', 'krish@gmail.com', '2023-01-20'),
(117, 16, 'Learn Guitar Easy Way', 1200, 44, 'krish', 'krish@gmail.com', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `pass` varchar(40) COLLATE utf8_bin NOT NULL,
  `occ` varchar(200) COLLATE utf8_bin NOT NULL,
  `img` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `pass`, `occ`, `img`) VALUES
(41, 'yash', 'yasu@gmail.com', '1234', 'Sing a song very loudly .......', '../img/stu/pic-1.png'),
(42, 'Jay', 'jay@gmail.com', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', '../img/stu/pic-3.png'),
(43, 'Vraj', 'vraj@gmail.com', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', '../img/stu/pic-5.png'),
(44, 'krish', 'krish@gmail.com', '1234', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, nemo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, nostrum.', '../img/stu/pic-1.png'),
(45, 'Anant', 'anant@gmail.com', '123', 'GVSFSF OSFHSN SHSOHSGV SVSVO;SHFV NBO;IVBHOSH;SHD ', '../img/stu/pic-3.png'),
(46, 'mayur', 'mayur@gmail.com', '123', 'djfbwe qr qwbTGHRHRT HTYHRYH R ', '../img/stu/pic-1.png'),
(47, 'mayur', 'mayur@gmail.com', '123', 'djfbwe qr qwbTGHRHRT HTYHRYH R ', '../img/stu/pic-1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
