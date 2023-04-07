-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 07:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `amenities` varchar(500) NOT NULL,
  `capacity` int(5) NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `rating` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `venue`, `type`, `amenities`, `capacity`, `price`, `image`, `rating`) VALUES
(1, 'Hotel Starbucks Conference Room', 'Conference Center', 'Air Conditioning.<br />\r\nAmple Parking Space.<br />\r\nProjector.<br />\r\nSecurity.<br />\r\nAdequate Power Supply Units.<br />\r\nFree Wi-Fi.<br />', 100, 5000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Hotel-Starbucks-Conference-Room/15434998085b0d88.jpg', 3.8),
(2, 'Green Hills Hotel - Mazingira Conference Room', 'Conference Center', 'Can accommodate large number of guests.<br />\r\nAmple Parking Space.<br />\r\nSecurity is provided.<br />\r\nProjector available.<br />\r\nWhiteboard available.<br />\r\nAdequate lighting.<br />', 600, 10000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Green-Hills-Hotel-Mazingira-Conference-Room/15477980481dfbf8.jpg', 4.1),
(3, 'Outspan Hotel - Kirinyaga Room', 'Conference Center', 'Serene Green Surroundings.<br />\r\nSecurity is provided.<br />\r\nModern Furniture and Architecture.<br />\r\nAmple Parking Space.<br />\r\nProjector available.<br />\r\nWhiteboard available.<br />\r\nSuitable for Executive Meetings.<br />', 80, 15000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Outspan-Hotel-Kirinyaga-Room/1549287616e0d85c.jpg', 4.5),
(4, 'Eland Hotel - Conference Hall', 'Conference Center', 'Suitable for small meetings.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br />\r\nProjector is available.<br />', 60, 4500, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Eland-Hotel-Hall-3/15593017204692c4.jpg', 3.9),
(5, 'Gitandara Garden', 'Garden', 'Outdoor event location.<br />\r\nSerene natural environment.<br />\r\nSecurity is provided.<br />\r\nLarge open space.<br />\r\nMicrophones and speakers are available.<br />\r\nGrills are available.<br />', 300, 20000, 'https://files.ogavenue.com/venues/Nyeri/Nyeri/Nyeri/Gitandara-garden/15592979386e3d75.jpg', 4.0),
(6, 'Sangare Gardens', 'Garden', 'Large green garden area.<br />\r\nQuiet and isolated area.<br />\r\nLuxurious cabin homes.<br />\r\nFarm located inside.<br />\r\nFreshly sourced food.<br />\r\nScenic Views of Mt.Kenya & Aberdare Ranges.<br />', 40, 25000, 'https://sangaregardens.com/images/sangare.jpg', 4.9),
(7, 'Legacy Gardens', 'Garden', 'Free ample parking.<br />\r\nPet-friendly zone.<br />\r\nFree Wi-Fi available.<br />\r\nAirport transport available.<br />\r\nLarge and naturally green environment.<br />\r\nSecurity is provided.<br />\r\nNon-smoking zone.<br />', 100, 35000, 'https://i.ytimg.com/vi/XB6Jlj-8jqA/maxresdefault.jpg', 4.3),
(8, 'Brookridge Gardens', 'Garden', 'Green and quite area.<br />\r\nTents and chairs are available.<br />\r\nCan accommodate a large number of guests.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br /> ', 200, 21000, 'https://lh5.googleusercontent.com/p/AF1QipNtZRczOtRFH8QWzKoFq7DWfmeggdy-70_fwzVw=w426-h240-k-no', 3.7),
(9, 'The White Rhino Hotel', 'Hotel', 'Can accommodate a large number of staying guests.<br />\r\nHas 3 restaurants.<br />\r\nHas 3 bars and a nightclub.<br />\r\nConference facilities are available.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br />\r\n24/7 Customer Service.<br />', 200, 45000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/98/a6/0a/the-white-rhino-hotel.jpg?w=1200&h=-1&s=1', 4.7),
(10, 'The Nelion', 'Hotel', 'Swimming Pool.<br />\r\nFree Wi-Fi.<br />\r\nBabysitting services available.<br />\r\nKaraoke available.<br />\r\nKids\' activities available.<br />\r\nEvening entertainment.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br />', 100, 27000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/7e/88/6c/the-nelion.jpg?w=800&h=-1&s=1', 4.4),
(11, 'The Ark Lodge', 'Hotel', 'Restaurant.<br />\r\nBar and Lounge.<br />\r\nFree Wi-Fi.<br />\r\nBreakfast buffet.<br />\r\nComplimentary toiletries in the rooms.<br />\r\nFree breakfast.<br />\r\n24/7 Customer Service.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br />', 70, 32000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/03/e6/a8/8b/the-ark-lodge.jpg?w=1200&h=-1&s=1', 4.8),
(12, 'Jaqanaz Resort', 'Hotel', 'Swimming Pool.<br />\r\nFree Wi-Fi.<br />\r\nAirport Transport is provided.<br />\r\nRoom Service.<br />\r\nKids\' activities are available.<br />\r\nFree breakfast.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br />', 85, 33000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/13/45/2f/09/jaqanaz-resort.jpg?w=1200&h=-1&s=1', 4.0),
(13, 'Rhino Watch Safari Lodge', 'Hotel', 'Swimming Pool.<br />\r\nBar and Lounge.<br />\r\nBike track and renting available.<br />\r\nNature filled and serene environment.<br />\r\nSauna.<br />\r\nBabysitting services available.<br />\r\nFree Wi-Fi.<br />\r\nEvening entertainment.<br />\r\nAmple parking space.<br />\r\n24/7 Security.<br />', 100, 46000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/08/84/25/2d/luxury-tents.jpg?w=1200&h=-1&s=1', 4.8),
(14, 'Tafaria Castle and Country Lodge', 'Hotel', 'Swimming Pool.<br />\r\nBabysitting services available.<br />\r\nBar and Lounge.<br />\r\nEvening entertainment.<br />\r\nBike track and renting available.<br />\r\nNature filled and serene environment.<br />\r\nFree Wi-Fi.<br />\r\nAmple parking space.<br />\r\n24/7 Security.<br />', 50, 39000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/b0/91/8d/img-20170625-091420-largejpg.jpg?w=1200&h=-1&s=1', 4.5),
(15, 'Sandai Farm Gastehaus & Ferienhauser', 'Hotel', 'Pet-friendly zone.<br />\r\nLaundry services provided.<br />\r\nAirport transport provided.<br />\r\nFree Wi-Fi.<br />\r\nBar and Lounge available.<br />\r\nDry cleaning services available.<br />\r\nKids\' activities available.<br />\r\nFamily rooms and suites available.<br />\r\n', 90, 55000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/07/4a/2b/61/sandai-homestay-cottages.jpg?w=1200&h=-1&s=1', 4.6),
(16, 'Green Hills Hotel', 'Hotel', 'Swimming Pool.<br />\r\nGolf Course.<br />\r\nFitness Center with Gym.<br />\r\nBabysitting services provided.<br />\r\nFree Wi-Fi.<br />\r\nBicycle track and renting.<br />\r\nAmple parking space.<br />\r\nSecurity is provided.<br />', 120, 57000, 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/a7/50/f0/green-hills-hotel.jpg?w=1200&h=-1&s=1', 4.9),
(17, 'The Peak Meadows', 'Hotel', 'Free Wi-Fi.<br />\r\nGarden.<br />\r\nShared Lodge.<br />\r\nTerrace.<br />\r\nRestaurant.<br />\r\nBar.<br />\r\n24/7 Front Desk.<br />\r\nAmple Parking.<br />\r\nSecurity is provided.<br />', 50, 11500, 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/321309087.jpg?k=074b9c02530d5ca635eae7779e2c01394b3948844232f5973233f1ba9797d7b9&o=&hp=1', 4.2),
(18, 'FK Resort & Spa', 'Resort', 'Spa<br />\r\nFitness Room<br />\r\nTennis Court<br />\r\nOutdoor Swimming Pool<br />\r\nBar<br />\r\nCafe<br />\r\nAmple Parking Space<br />\r\nSecurity is provided<br />\r\nRestaurant<br />\r\nFree Wi-Fi<br />\r\nHas a smoking area<br />\r\nMeeting Room<br />\r\nMultilingual Staff', 320, 37000, 'https://ak-d.tripcdn.com/images/0226212000akvid8uBACB_R_600_400_R5_D.jpg_.webp', 4.6),
(19, 'Bantu Africa Resort', 'Resort', 'Swimming Pool<br />\r\nBar &amp; NightClub.<br />\r\nFree Wi-Fi<br />\r\nAmple Parking Space<br />\r\nSecurity is provided.<br />\r\nRestaurant &amp; Grill.<br />\r\nKids&#039; Activities available.<br />\r\nGarden &amp; Terrace.<br />\r\nWater Park.', 120, 26000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT6IWczutfiMGoSeDIZ4BPxxgk3d4lmFOE_A&usqp=CAU', 3.6);

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
