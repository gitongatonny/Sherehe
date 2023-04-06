-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 01:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sherehe`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `period` int(2) NOT NULL,
  `price` float NOT NULL,
  `Timestamp` timestamp(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `phone`, `email`, `date`, `period`, `price`, `Timestamp`) VALUES
(1, 'Danny', '798229300', 'tyoung@gmail.com', '2023-04-26', 4, 60000, '2023-03-24 11:39:42.42488'),
(2, 'Danny', '798229300', 'tyoung@gmail.com', '2023-04-07', 1, 50000, '2023-03-24 11:39:42.42488'),
(3, 'Con Williams', '798765432', 'ushuru@gmail.com', '2023-03-25', 4, 200000, '2023-03-24 11:39:42.42488'),
(4, 'Danny', '798229300', 'tyoung@gmail.com', '2023-04-28', 6, 300000, '2023-03-24 11:39:42.42488'),
(5, 'Danny', '798229300', 'tyoung@gmail.com', '2023-04-28', 6, 300000, '2023-03-24 11:40:04.27794'),
(6, 'Con Williams', '798765432', 'ushuru@gmail.com', '2023-03-04', 4, 140000, '2023-03-24 11:43:50.63263'),
(7, 'Mkuu', '2147483647', 'ulemsee@gmail.com', '2023-04-01', 2, 20000, '2023-03-24 12:26:29.09507'),
(8, 'Mike Taxson', '712345678', 'mkuu@gmail.com', '2023-03-26', 7, 245000, '2023-03-25 14:16:14.90681'),
(9, 'Mkuu', '2147483647', 'ulemsee@gmail.com', '2023-03-22', 1, 15000, '2023-03-25 16:02:55.25367'),
(10, 'Mkuu', '2147483647', 'ulemsee@gmail.com', '2023-03-22', 1, 15000, '2023-03-25 16:03:40.14266'),
(11, 'Mkuu', '2147483647', 'ulemsee@gmail.com', '2023-03-22', 1, 15000, '2023-03-25 16:04:12.23025'),
(12, 'Mkuu', '2147483647', 'ulemsee@gmail.com', '2023-03-22', 1, 15000, '2023-03-25 16:05:00.62179'),
(13, 'Tonny Gitonga', '794409113', 'tonnyg@gmail.com', '2023-03-29', 3, 45000, '2023-03-25 18:53:41.66379'),
(14, 'Tonny Gitonga', '794409113', 'tonnyg@gmail.com', '2023-04-07', 1, 32000, '2023-04-06 22:09:46.82277'),
(15, 'Con Williams', '798352671', 'conwilly@outlook.com', '2023-04-12', 2, 114000, '2023-04-06 22:33:38.79613'),
(16, 'Con Williams', '798352671', 'conwilly@outlook.com', '2023-04-21', 4, 18000, '2023-04-06 22:36:25.96962'),
(17, 'Andrew Kifeee', '789676543', 'kifee@whips.com', '2023-04-26', 6, 150000, '2023-04-06 22:53:14.46949'),
(18, 'Andrew Kifeee', '789676543', 'kifee@whips.com', '2023-04-28', 4, 84000, '2023-04-06 22:54:42.59192'),
(19, 'Andrew Kifeee', '789676543', 'kifee@whips.com', '2023-04-29', 1, 5000, '2023-04-06 22:59:20.38391');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(20) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `customer_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `username`, `password`, `customer_phone`) VALUES
(1, 'System Administrator', 'admin@sherehe.com', 'admin', 'admin123', 712345678),
(2, 'Mike Taxson', 'miketax@ke.com', 'miketax', 'lipaushuru', 728946278),
(3, 'Con Williams', 'conwilly@outlook.com', 'conwilly', 'willythecon', 798352671),
(4, 'Bridget Ngugi', 'bridget@gmail.com', 'bree', 'breengugi', 743526718),
(5, 'Moses Etyang', 'etyang@gmail.com', 'tyoung', 'tyoung98', 724356748),
(6, 'Tonny Gitonga', 'tonnyg@gmail.com', 'tonnyg', 'tgk', 794409113),
(7, 'Ule Msee', 'ulemsee@gmal.com', 'ulemsee', 'asdf12', 799443217),
(8, 'We Mzee', 'mzee@outlook.com', 'mhenga', 'zamani@65', 700348765),
(9, 'Andrew Kifeee', 'kifee@whips.com', 'kifeee', 'whips!!', 789676543),
(10, 'The Nganuthia', 'nganuthia@yahoo.com', 'nganuthia', 'zxcv??', 712435678),
(11, 'Test User', 'testing@yahoo.com', 'testuser', 'testing', 789674523);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `topic` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `name`, `email`, `topic`, `message`, `date`) VALUES
(1, 'Peter', 'peter@gmail.com', 'Review', 'It is a good system with a lot of potential', '2023-02-28'),
(2, 'Mutua', 'Mutua@gmail.com', 'Inquiry', 'Is the system up for sale?', '2023-02-28'),
(3, 'Faith', 'faith@gmail.com', 'Review', 'It Is a good system, keep on improving it.', '2023-02-28'),
(4, 'Danny', 'tyoung@gmail.com', 'plan', 'Event wedding time - tomorrow date: 3/3/2023', '2023-03-02'),
(5, 'bridget', 'bridget@gmail.com', 'event creation', 'I\'m happy that I can create an event at my convenience', '2023-03-20'),
(6, 'Tonny Gitonga', 'tonnyg@gmail.com', 'Review', 'This is a great system', '2023-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(5) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `capacity` int(5) NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `rating` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `venue`, `type`, `amenities`, `capacity`, `price`, `image`, `rating`) VALUES
(1, 'Hotel Starbucks Conference Room', 'Conference Center', 'Air Conditioning\r\nAmple Parking Space\r\nProjector\r\nSecurity\r\nAdequate Power Supply Units', 100, 5000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Hotel-Starbucks-Conference-Room/15434998085b0d88.jpg', '3.8'),
(2, 'Green Hills Hotel - Mazingira Conference Room', 'Conference Center', 'Can accommodate large number of guests\r\nAmple Parking Space\r\nSecurity is provided\r\nProjector available\r\nWhiteboard available\r\nAdequate lighting', 600, 10000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Green-Hills-Hotel-Mazingira-Conference-Room/15477980481dfbf8.jpg', '4.1'),
(3, 'Outspan Hotel - Kirinyaga Room', 'Conference Center', 'Serene Green Surroundings\r\nSecurity is provided\r\nModern Furniture and Architecture\r\nAmple Parking Space\r\nProjector available\r\nWhiteboard available\r\nSuitable for Executive Meetings', 80, 15000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Outspan-Hotel-Kirinyaga-Room/1549287616e0d85c.jpg', '4.5'),
(4, 'Eland Hotel - Conference Hall', 'Conference Center', 'Suitable for small meetings.\r\nAmple parking space.\r\nSecurity is provided.\r\nProjector is available.', 60, 4500, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Eland-Hotel-Hall-3/15593017204692c4.jpg', '3.9'),
(5, 'Gitandara Garden', 'Garden', 'Outdoor event location.\r\nSerene natural environment.\r\nSecurity is provided.\r\nLarge open space.\r\nMicrophones and speakers are available.\r\nGrills are available.', 300, 20000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Gitandara-garden/15592979386e3d75.jpg', '4.0'),
(6, 'Sangare Gardens', 'Garden', 'Large green garden area.\r\nQuiet and isolated area.\r\nLuxurious cabin homes.\r\nFarm located inside.\r\nFreshly sourced food.\r\nScenic Views of Mt.Kenya & Aberdare Ranges.', 40, 25000, 'https://sangaregardens.com/images/sangare.jpg', '4.9'),
(7, 'Legacy Gardens', 'Garden', 'Free ample parking.\r\nPet-friendly zone.\r\nFree Wi-Fi available.\r\nAirport transport available.\r\nLarge and naturally green environment.\r\nSecurity is provided.\r\nNon-smoking zone.', 100, 35000, 'https://i.ytimg.com/vi/XB6Jlj-8jqA/maxresdefault.jpg', '4.3'),
(8, 'Brookridge Gardens', 'Garden', 'Green and quite area.\r\nTents and chairs are available.\r\nCan accommodate a large number of guests.\r\nAmple parking space.\r\nSecurity is provided. ', 200, 21000, 'https://lh5.googleusercontent.com/p/AF1QipNtZRczOtRFH8QWzKoFq7DWfmeggdy-70_fwzVw=w426-h240-k-no', '3.7'),
(9, 'The White Rhino Hotel', 'Hotel', 'Can accommodate a large number of staying guests.\r\nHas 3 restaurants.\r\nHas 3 bars and a nightclub.\r\nConference facilities are available.\r\nAmple parking space.\r\nSecurity is provided.\r\n24/7 Customer Service.  ', 200, 45000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/98/a6/0a/the-white-rhino-hotel.jpg?w=1200&h=-1&s=1', '4.7'),
(10, 'The Nelion', 'Hotel', 'Swimming Pool.\r\nFree Wi-Fi.\r\nBabysitting services available.\r\nKaraoke available.\r\nKids\' activities available.\r\nEvening entertainment.\r\nAmple parking space.\r\nSecurity is provided. ', 100, 27000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/7e/88/6c/the-nelion.jpg?w=800&h=-1&s=1', '4.4'),
(11, 'The Ark Lodge', 'Hotel', 'Restaurant.\r\nBar and Lounge.\r\nFree Wi-Fi.\r\nBreakfast buffet.\r\nComplimentary toiletries in the rooms.\r\nFree breakfast.\r\n24/7 Customer Service.\r\nAmple parking space.\r\nSecurity is provided.', 70, 32000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/e6/a8/8b/the-ark-lodge.jpg?w=1200&h=-1&s=1', '4.8'),
(12, 'Jaqanaz Resort', 'Hotel', 'Swimming Pool.\r\nFree Wi-Fi.\r\nAirport Transport is provided.\r\nRoom Service.\r\nKids\' activities are available.\r\nFree breakfast.\r\nAmple parking space.\r\nSecurity is provided.', 85, 33000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/45/2f/09/jaqanaz-resort.jpg?w=1200&h=-1&s=1', '4.0'),
(13, 'Rhino Watch Safari Lodge', 'Hotel', 'Swimming Pool.\r\nBar and Lounge.\r\nBike track and renting available.\r\nNature filled and serene environment.\r\nSauna.\r\nBabysitting services available.\r\nFree Wi-Fi.\r\nEvening entertainment.\r\nAmple parking space.\r\n24/7 Security.', 100, 46000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/84/25/2d/luxury-tents.jpg?w=1200&h=-1&s=1', '4.8'),
(14, 'Tafaria Castle and Country Lodge', 'Hotel', 'Swimming Pool.\r\nBabysitting services available.\r\nBar and Lounge.\r\nEvening entertainment.\r\nBike track and renting available.\r\nNature filled and serene environment.\r\nFree Wi-Fi.\r\nAmple parking space.\r\n24/7 Security.', 50, 39000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/b0/91/8d/img-20170625-091420-largejpg.jpg?w=1200&h=-1&s=1', '4.5'),
(15, 'Sandai Farm Gastehaus & Ferienhauser', 'Hotel', 'Pet-friendly zone.\r\nLaundry services provided.\r\nAirport transport provided.\r\nFree Wi-Fi.\r\nBar and Lounge available.\r\nDry cleaning services available.\r\nKids\' activities available.\r\nFamily rooms and suites available.\r\n', 90, 55000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/4a/2b/61/sandai-homestay-cottages.jpg?w=1200&h=-1&s=1', '4.6'),
(16, 'Green Hills Hotel', 'Hotel', 'Swimming Pool.\r\nGolf Course.\r\nFitness Center with Gym.\r\nBabysitting services provided.\r\nFree Wi-Fi.\r\nBicycle track and renting.\r\nAmple parking space.\r\nSecurity is provided.', 120, 57000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/a7/50/f0/green-hills-hotel.jpg?w=1200&h=-1&s=1', '4.9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `customer_phone` (`customer_phone`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
