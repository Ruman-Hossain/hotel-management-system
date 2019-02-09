-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 01:18 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, 'A paragraph is a collection of sentences which all relate to one main idea or topic. Effective paragraphs have four main characteristics: a topic sentence, unity, coherence, and \r\nadequate development. Each of these characteristics is discussed below.\r\n\r\nUnity\r\nUnity refers to the extent to which all of the ideas contained within a given paragraph \"hang together\" in a way that is easy for the reader to understand. When the writer changes to a\r\n new idea -- one which is not consistent with the topic sentence of the paragraph -- the writer should begin a new paragraph. Unity is important because it aids the reader in \r\n following along with the writer\'s ideas. The reader can expect that a given paragraph will deal only with one main topic; when a new paragraph begins, this signals that the writer \r\n is moving on to a new topic.\r\nConsider the following example. Note that there are two main ideas presented in this paragraph. The topic sentence indicates that the paragraph will deal with the subject of \r\n\"employees\' attitudes,\" but the paragraph shifts unexpectedly to the topic of \"management\'s attitudes.\" To achieve unity in this paragraph, the writer should begin a new paragraph \r\nwhen the switch is made from employees to managers.\r\n\r\nExample\r\n\"Employees\' attitudes at Jonstone Electric Company should be improved. The workers do not feel that they are a working team instead of just individuals. If people felt they were a \r\npart of a team, they would not misuse the tools, or deliberately undermine the work of others. Management\'s attitude toward its employees should also be improved. Managers at \r\nJonstone Electric act as though their employees are incapable of making decisions or doing their own work. Managers treat workers like objects, not human beings.\"\r\n\r\nCoherence\r\nCoherence refers to the extent to which the flow of ideas in a paragraph is easily understood by the reader. For this reason, coherence is closely related to unity. When a writer \r\nchanges main ideas or topics within a paragraph, confusion often results. To achieve coherence, then, a writer should show how all of the ideas contained in a paragraph are relevant \r\nto the main topic.\r\n\r\nConsider the example below. In this paragraph, the writer begins with the topic of job-skills courses, but veers off onto the topic of algebra and history before returning to the \r\nsubject of courses on employment. As a result, the paragraph is disjointed and difficult to understand.\r\n\r\nExample\r\n\"Schools should offer courses to help students with the problems of unemployment. Such a course might begin with a discussion of where to find employment, then cover resume writing \r\nand interviewing. Algebra and history don\'t help students with real-world needs. They are required courses that students aren\'t interested in, and this is frustrating for students \r\nwho would rather learn about other subjects. If schools offered job-skills courses, students would be well prepared for the difficult task of finding a job once they finish school.\"\r\nAdequate Development\r\nA paragraph is adequately developed when it describes, explains and supports the topic sentence. If the \"promise\" of the topic sentence is not fulfilled, or if the reader is left with\r\n questions after reading the paragraph, the paragraph has not been adequately developed. Generally speaking, a paragraph which consists of only two or three sentences is under-develop\r\n ed. A good rule of thumb to follow is to make sure that a paragraph contains at least four sentences which explain and elaborate on the topic sentence.\r\n\r\nConsider the paragraph below. The topic sentence promises to discuss \"several\" points of comparison and contrast between leadership and management, but the remainder of the paragraph\r\n falls short of fulfilling this promise. Only one point of comparison is raised, and this point is left unexplained. Several questions remain unanswered. How are leaders different \r\n from managers? In what specific ways are the two alike? Why must a manager be a good leader to be effective? Why must good leaders know how to manage people effectively? To achieve \r\n adequate development in this paragraph, these questions should be addressed.\r\n\r\nExample\r\n\"The topics of leadership and management are both similar to and different from one another in several important ways. To be effective, a manager should be a good leader. And good \r\nleaders know how to manage people effectively.\"\r\n\r\nGenerally speaking, a paragraph should contain between three and five sentences, all of which help clarify and support the main idea of the paragraph. When a writer begins a new \r\nparagraph, it signals to the reader that the writer is changing thoughts or ideas, or is moving on to discuss a different aspect of a main idea.\r\n\r\nTopic Sentences\r\nBeginning a paragraph with a topic sentence is one of the best ways to achieve clarity and unity in one\'s writing. The function of a topic sentence is to describe what the paragraph \r\nwill be about, such that the reader has clear expectations about what will follow. An effective topic sentence typically contains only one main idea. The remainder of the paragraph \r\nthen develops that idea more fully, offering supporting points and examples. After reading a topic sentence, one should be able to anticipate the type of information contained in the\r\n rest of the paragraph. If the remainder of the paragraph does not fulfill the \"promise\" of the topic sentence, the paragraph will lack unity, coherence and adequate development.\r\n\r\nExamples\r\n\"The cockroaches that inhabit many city apartments and homes are parasites that are almost impossible to exterminate completely.\"\r\n\r\nNotice that this sentence clearly identifies that the key topic of the paragraph is cockroaches. It also indicates what the remainder of the paragraph will discuss: the difficulty of\r\n exterminating cockroaches. The reader can then expect the rest of the paragraph to explain how and why cockroaches are difficult to eliminate.\r\n\r\n\"Many television cartoons contain an unhealthy amount of violence.\"\r\n\r\nNotice that this sentence clearly identifies that the key topic of the paragraph is violence in television cartoons. It also indicates that the remainder of the paragraph will discuss\r\n how much violence cartoons typically contain, and how/why this violence is unhealthy for viewers.\r\n\r\n\"An increasing number of people in America are enjoying the benefits of organically grown fruits and vegetables.\"\r\n\r\nThis topic sentence indicates that the remainder of the paragraph will cover the trend in the United States toward eating organic foods. The reader can also anticipate learning more \r\nin this paragraph about the specific benefits of organic foods.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'ruman', 'b9d245bf34338b07abd14df558d1f60e');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `room_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_title`
--

CREATE TABLE `employee_title` (
  `emp_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `img_loc` varchar(50) NOT NULL,
  `booking` varchar(15) DEFAULT 'No',
  `room_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `room_no`, `description`, `price`, `img_loc`, `booking`, `room_type`) VALUES
(1, '11011', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '12000', 'images/rooms/11.jpg', 'No', 'Marriage C'),
(2, '11001', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '12500', 'images/rooms/22.jpg', 'No', 'Boot Camp'),
(3, '11010', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '12500', 'images/rooms/33.jpg', 'no', 'Cultural P');

-- --------------------------------------------------------

--
-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `room_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_booking_history`
--

CREATE TABLE `event_booking_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_booking_history`
--

INSERT INTO `event_booking_history` (`id`, `room_no`, `fdate`, `tdate`, `name`, `phone`, `code`, `address`, `price`) VALUES
(1, '11011', '2019-02-13', '2019-02-15', 'Md Ruman Hossain', '01723974489', 'qwerty', '17/M, Rangpur Medical Campus', '12000'),
(2, '11001', '2019-02-07', '2019-02-21', 'Md Ruman Hossain', '01723974489', 'qwerty', 'Home#273, Road#10 - Burirhat Road, Dhap Medical Pu', '12500');

-- --------------------------------------------------------

--
-- Table structure for table `expense_details`
--

CREATE TABLE `expense_details` (
  `id` int(20) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(10) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `featured_booking`
--

CREATE TABLE `featured_booking` (
  `id` int(10) UNSIGNED NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `room_no` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `featured_rooms`
--

CREATE TABLE `featured_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `img_loc` varchar(50) NOT NULL,
  `booking` varchar(15) DEFAULT 'No',
  `assigned_to` varchar(50) NOT NULL,
  `room_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_rooms`
--

INSERT INTO `featured_rooms` (`id`, `room_no`, `description`, `price`, `img_loc`, `booking`, `assigned_to`, `room_type`) VALUES
(1, '101', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1250', 'images/rooms/feature_1.jpg', 'No', '', 'Single'),
(2, '103', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1750', 'images/rooms/feature_3.jpg', 'No', '', 'Double'),
(4, '201', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1500', 'images/rooms/feature_4.jpg', 'No', '', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `featured_room_booking_history`
--

CREATE TABLE `featured_room_booking_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_room_booking_history`
--

INSERT INTO `featured_room_booking_history` (`id`, `room_no`, `fdate`, `tdate`, `name`, `phone`, `code`, `address`, `price`) VALUES
(1, '101', '2019-02-11', '2019-02-20', 'Md Ruman Hossain', '01723974489', 'qwerty', '17/M, Rangpur Medical Campus', '1250'),
(2, '103', '2019-02-14', '2019-02-20', 'Ruman Hossain', '01723974489', 'qwerty', '17/M, Rangpur Medical Campus', '1750'),
(3, '201', '2019-02-21', '2019-02-18', 'Md Ruman Hossain', '01723974489', 'qwerty', '17/M, Rangpur Medical Campus', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `img_loc` varchar(50) NOT NULL,
  `booking` varchar(15) DEFAULT 'No',
  `assigned_to` varchar(50) NOT NULL,
  `room_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `description`, `price`, `img_loc`, `booking`, `assigned_to`, `room_type`) VALUES
(1, '101', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1000', 'images/rooms/3.jpeg', 'no', '', 'Single'),
(2, '102', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1500', 'images/rooms/3.jpeg', 'no', '', 'Double'),
(3, '201', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1000', 'images/rooms/8.jpg', 'no', '', 'Single'),
(4, '301', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', '1550', 'images/rooms/5.jpg', 'no', '', 'doublee');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking_history`
--

CREATE TABLE `room_booking_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `fdate` varchar(50) NOT NULL,
  `tdate` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_booking_history`
--

INSERT INTO `room_booking_history` (`id`, `room_no`, `fdate`, `tdate`, `name`, `phone`, `code`, `address`, `price`) VALUES
(1, '101', '2019-02-14', '2019-02-20', 'Md Ruman Hossain', '01723974489', 'qwerty', '17/M, Rangpur Medical Campus', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `img_loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `img_loc`) VALUES
(4, 'Entertainment', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', 'images/service/33.jpg'),
(7, 'Food Corner', 'Article Posted Under: Articles and Blog Posts Top 7 Gym Tips that You Probably Donâ€™t Follow But Shouldnâ€™t Be Missing Out On Top 7 Gym Tips that You Probably Donâ€™t Follow But Shouldnâ€™t Be Missing Out On Save If youâ€™re a gym-goer, or a self proclaimed gym rat, you will almost certainly have noticed that, this January, and indeed many Januaries past, had an influx of new faces and members in your local gym.  Often referred to as New Years Resolutioners, these new members often join the gy', 'images/service/our-serivesc-bar.jpg'),
(8, 'GYM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', 'images/service/gym3.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_loc_one` varchar(50) NOT NULL,
  `img_loc_two` varchar(50) NOT NULL,
  `img_loc_three` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img_loc_one`, `img_loc_two`, `img_loc_three`) VALUES
(1, 'images/slide/11.jpg', 'images/slide/55.jpg', 'images/slide/8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_title`
--
ALTER TABLE `employee_title`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_booking_history`
--
ALTER TABLE `event_booking_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_details`
--
ALTER TABLE `expense_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_booking`
--
ALTER TABLE `featured_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_rooms`
--
ALTER TABLE `featured_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_room_booking_history`
--
ALTER TABLE `featured_room_booking_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_booking_history`
--
ALTER TABLE `room_booking_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_title`
--
ALTER TABLE `employee_title`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_booking_history`
--
ALTER TABLE `event_booking_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense_details`
--
ALTER TABLE `expense_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_booking`
--
ALTER TABLE `featured_booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `featured_rooms`
--
ALTER TABLE `featured_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featured_room_booking_history`
--
ALTER TABLE `featured_room_booking_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_booking_history`
--
ALTER TABLE `room_booking_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
