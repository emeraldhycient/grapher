-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graphic_designers`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `mssg` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `files` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `extension` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` text COLLATE utf8mb4_bin NOT NULL DEFAULT 's'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender`, `receiver`, `mssg`, `files`, `extension`, `time`, `status`) VALUES
(24, 11, 3, 'hello', '', '', '2020-04-19 15:38:56', 's'),
(25, 3, 11, 'i dy o and you', '', '', '2020-04-19 16:22:16', 's'),
(26, 11, 3, 'i hear say your wife dn born', '', '', '2020-04-19 16:30:27', 's'),
(27, 3, 11, 'yes o my brother we thank GOD', '', '', '2020-04-19 16:30:27', 's'),
(28, 11, 3, 'how is the baby', '', '', '2020-04-19 17:05:49', 's'),
(29, 3, 11, 'his doing great', '', '', '2020-04-19 17:11:01', 's'),
(30, 11, 3, 'was it a boy or girl', '', '', '2020-04-20 21:09:35', 's'),
(31, 11, 3, 'hellooo', '', '', '2020-04-20 21:09:47', 's'),
(32, 11, 3, 'mad oo', '', '', '2020-04-20 21:11:22', 's'),
(33, 11, 3, 'hmmmm', '', '', '2020-04-20 21:11:58', 's'),
(34, 11, 3, '', 'toonstore/Screenshot (10).png', 'png', '2020-04-23 09:32:42', 's'),
(35, 11, 3, 'you havent responded in a while now', '', '', '2020-05-12 21:06:35', 's'),
(36, 11, 3, 'did you see the image', '', '', '2020-05-12 21:07:47', 's'),
(37, 11, 3, 'did you see the image', '', '', '2020-05-12 21:07:47', 's'),
(38, 11, 3, 'huh', '', '', '2020-05-12 21:07:57', 's');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `commetor` int(255) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `post_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `person_id` int(255) NOT NULL,
  `friend_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `person_id`, `friend_id`) VALUES
(2, 11, 4),
(4, 11, 3),
(6, 8, 11),
(8, 3, 11),
(9, 11, 6);

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(11) NOT NULL,
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'p',
  `sent_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `sender`, `receiver`, `status`, `sent_on`) VALUES
(5, 10, 1, 'p', '2020-03-19 21:26:50'),
(6, 10, 2, 'p', '2020-03-19 21:27:38'),
(11, 10, 3, 'p', '2020-03-24 02:22:13'),
(13, 2, 11, 'p', '2020-04-02 12:56:08'),
(16, 4, 11, 'p', '2020-04-02 12:57:08'),
(18, 7, 11, 'p', '2020-04-04 10:22:50'),
(20, 9, 11, 'p', '2020-04-04 10:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(255) NOT NULL,
  `liker_id` int(255) NOT NULL,
  `liked_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `toon`
--

CREATE TABLE `toon` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `toon` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `toonist_id` int(255) DEFAULT NULL,
  `date1` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toon`
--

INSERT INTO `toon` (`id`, `caption`, `toon`, `extension`, `toonist_id`, `date1`, `username`) VALUES
(5, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta', 'wristwatchonhand.jpeg', 'jpeg', 11, '2019-11-09 13:27:49', 'chris'),
(26, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt molliti', 'Moncler_The_Bubble_Sneaker_White_Blue_Red__0736_540x.jpg', 'jpg', 2, '2019-11-12 18:18:27', ''),
(27, 'quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliq', 'Black_White_BV4594_001_6872_540x.jpg', 'jpg', 4, '2019-11-14 20:19:37', ''),
(28, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta', 'watch 3.jpeg', 'jpeg', 5, '2019-11-14 21:06:35', ''),
(29, 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Nike_Air_Force_1_Low_CMFT_Equality_White_Black_AQ2118_100_9605_720x-1-600x600.jpg', 'jpg', 6, '2019-11-14 21:11:55', ''),
(30, 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'watch 3.jpeg', 'jpeg', 7, '2019-11-14 21:15:24', ''),
(31, 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'wristwatchonhand.jpeg', 'jpeg', 8, '2019-11-16 15:04:14', ''),
(32, 'in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'placeholder.png', 'png', 9, '2020-04-06 12:17:13', ''),
(33, 'video functionality test', 'A Guide to Web Scraping with Node.js(480P).mp4', 'mp4', 11, '2020-04-09 23:39:55', ''),
(34, ' natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore isquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore e', 'BeautyPlus_video_20190814083655094.mp4', 'mp4', 3, '2020-04-30 18:56:40', ''),
(35, ' omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odi', 'Shopping Cart Implementation in CodeIgniter(360P).mp4', 'mp4', 3, '2020-05-01 16:45:00', ''),
(36, ' omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odi', 'Make a YouTube Clone from Scratch JavaScript PHP and MySQL (Part-3) Creating the Main Content(360P).mp4', 'mp4', 11, '2020-05-01 16:49:42', ''),
(37, '&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure d', 'Screenshot (14).png', 'png', 11, '2020-05-13 14:12:53', '');

-- --------------------------------------------------------

--
-- Table structure for table `toonist`
--

CREATE TABLE `toonist` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `datejoined` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toonist`
--

INSERT INTO `toonist` (`id`, `username`, `pass`, `logo`, `phone`, `facebook`, `datejoined`) VALUES
(1, 'igwezehycient', '202cb962ac59075b964b07152d234b70', '', 90, 'emeraldhycient', '2019-11-13 21:15:52'),
(3, 'raldinc', '827ccb0eea8a706c4c34a16891f84e7b', '', 123, 'emeraldhycient', '2019-11-13 21:25:56'),
(4, 'mycomp', '098f6bcd4621d373cade4e832627b4f6', '', 45, 'testing', '2019-11-13 21:27:27'),
(5, 'codco', '$2y$10$pEhHSSDZfIxB17blGdiWXOGOAmwfC9FGxYGGVDSVfM7M7QuO5Q2ie', 'Black_White_BV4594_001_6872_540x.jpg', 708864, 'commado', '2019-11-14 19:55:32'),
(6, 'peopleincome', '$2y$10$XEejUhVACpRJhWAxpnBqyu5WCNqpqHJO1ntQDp.e9WzcH5MUo.wfm', 'watch1.jpeg', 38957463, 'commado', '2019-11-14 20:25:44'),
(7, 'chemlaber', '$2y$10$jM2Lrfq5/mtMsQ4EK8zVu.GkRIlD/XMWHIDx9ObIGCNeEIunp2knW', 'watch 3.jpeg', 974633, 'test burea', '2019-11-14 21:06:01'),
(8, 'mepeople', '$2y$10$vqZmz5GauDQFY98fWCzOIe3SEpW816Sae1eeXOkhHYjdKH7prPFnO', 'Black_White_BV4594_001_6872_540x - Copy.jpg', 1234567, 'test burea', '2019-11-14 21:24:13'),
(9, 'chemlaber2', '$2y$10$PmOdKYw.Bb7Sbdec.UDuCuik2Ujd/BGzGnNOtEAkaiTYlwLy8gkXG', 'insta.png', 2147483647, 'emeraldhycient', '2020-03-13 17:05:34'),
(10, 'tester', '$2y$10$HH2oJ51xI2nWheMMySj1SOGaihUG2jZNqGMSwS9X8FlLC3t5PfxDq', 'man.png', 2147483647, 'commadon', '2020-03-19 20:20:11'),
(11, 'testing34', '$2y$10$AvSp0tdxMOtMhdNtqgJiveCqOOx/FOUDwZ6S7bI2jj.jhVxZ1.WLy', 'play-button.png', 2147483647, 'commado', '2020-03-31 21:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `group_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `joined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toon`
--
ALTER TABLE `toon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toonist`
--
ALTER TABLE `toonist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `datejoined` (`id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toon`
--
ALTER TABLE `toon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `toonist`
--
ALTER TABLE `toonist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
