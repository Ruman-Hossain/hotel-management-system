-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 07:23 PM
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
-- Database: `hotelroyal`
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
(1, 'anwar', 'ruman');

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

--
-- Dumping data for table `employee_title`
--

INSERT INTO `employee_title` (`emp_id`, `title`) VALUES
(1, 'Ruman'),
(2, 'Anwar'),
(3, 'Hotel Royal Manager');

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
(1, '456', 'Marriage Anniversary', '1400', 'images/rooms/4.jpg', 'No', 'Marriage'),
(2, '1233', 'Marriage', '45300', 'images/rooms/7.jpg', 'No', 'Marriage'),
(3, '123', 'Ecare', '54780', 'images/rooms/5.jpg', 'no', 'Conference');

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
-- Table structure for table `expense_details`
--

CREATE TABLE `expense_details` (
  `id` int(20) NOT NULL,
  `emp_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(10) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense_details`
--

INSERT INTO `expense_details` (`id`, `emp_id`, `date`, `amount`, `details`) VALUES
(1, 1, '2018-11-29 09:48:11', 20, 'checking ruman'),
(2, 1, '2018-11-29 23:03:42', 500, 'checking'),
(3, 3, '2018-11-29 23:04:21', 58000, 'Hotel Royal Manager'),
(4, 2, '2018-11-29 23:06:02', 8562, '789');

-- --------------------------------------------------------

--
-- Table structure for table `featured_rooms`
--

CREATE TABLE `featured_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img_loc` varchar(50) NOT NULL,
  `room_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured_rooms`
--

INSERT INTO `featured_rooms` (`id`, `description`, `price`, `img_loc`, `room_type`) VALUES
(1, 'Double Room', '1500', 'images/featured_rooms/4.jpg', 'Double'),
(2, 'Single Rooms', '1000', 'images/featured_rooms/8.jpg', 'Single'),
(3, 'Vip Featured Room', '2000', 'images/featured_rooms/2.jpg', 'VIP'),
(4, 'dddddddddd', '2500', 'images/featured_rooms/6.jpg', 'sss'),
(5, 'dilux room featured', '3000', 'images/featured_rooms/feature_1.jpg', 'Dilux'),
(6, 'super Dilux', '3500', 'images/featured_rooms/feature_2.jpg', 'Super Dilu'),
(7, 'super Dilux', '3500', 'images/featured_rooms/feature_2.jpg', 'Super Dilu');

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
(1, '123', 'Sinlge Room', '1234', 'images/rooms/1.jpg', 'No', '', 'Single'),
(2, '456', 'Ruman', '1401', 'images/rooms/2.jpg', 'No', '', 'double'),
(3, '1233', 'Double Room', '5478', 'images/rooms/3.jpg', 'No', '', 'sss'),
(5, '125', 'fgh', '4586', 'images/rooms/8.jpg', 'No', '', 'double');

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
(1, 'GYM', 'Article Posted Under: Articles and Blog Posts Top 7 Gym Tips that You Probably Donâ€™t Follow But Shouldnâ€™t Be Missing Out On Top 7 Gym Tips that You Probably Donâ€™t Follow But Shouldnâ€™t Be Missing Out On Save If youâ€™re a gym-goer, or a self proclaimed gym rat, you will almost certainly have noticed that, this January, and indeed many Januaries past, had an influx of new faces and members in your local gym.  Often referred to as New Years Resolutioners, these new members often join the gy', 'images/service/gym1.png'),
(2, 'Fitness Care', 'Articles and Blog Posts Top 7 Gym Tips that You Probably Donâ€™t Follow But Shouldnâ€™t Be Missing Out On Top 7 Gym Tips that You Probably Donâ€™t Follow But Shouldnâ€™t Be Missing Out On Save If youâ€™re a gym-goer, or a self proclaimed gym rat, you will almost certainly have noticed that, this January, and indeed many Januaries past, had an influx of new faces and members in your local gym.  Often referred to as New Years Resolutioners, these new members often join the gym in a bid to undo all', 'images/service/gym3.png'),
(3, 'Test', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibu', 'images/service/gym2.png');

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
(1, 'images/slide/feature_3.jpg', 'images/slide/feature_2.jpg', 'images/slide/2.jpg'),
(2, 'images/slide/1.jpg', 'images/slide/2.jpg', 'images/slide/3.jpg');

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
-- Indexes for table `expense_details`
--
ALTER TABLE `expense_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_rooms`
--
ALTER TABLE `featured_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_title`
--
ALTER TABLE `employee_title`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense_details`
--
ALTER TABLE `expense_details`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featured_rooms`
--
ALTER TABLE `featured_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
