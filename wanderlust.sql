-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Nov 14, 2020 at 07:34 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wanderlust`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_types`
--

CREATE TABLE `bussiness_types` (
  `typeID` varchar(10) NOT NULL,
  `typeName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bussiness_types`
--

INSERT INTO `bussiness_types` (`typeID`, `typeName`) VALUES
('type1', 'hotel'),
('type2', 'restaurant'),
('type3', 'transport');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_users`
--

CREATE TABLE `bussiness_users` (
  `email` varchar(100) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `bio` varchar(350) DEFAULT NULL,
  `coverpic` varchar(100) DEFAULT NULL,
  `profilepic` varchar(100) DEFAULT NULL,
  `typeID` varchar(10) DEFAULT NULL,
  `licenseNo` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phNo` varchar(40) DEFAULT NULL,
  `website` varchar(60) DEFAULT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bussiness_users`
--

INSERT INTO `bussiness_users` (`email`, `pwd`, `name`, `bio`, `coverpic`, `profilepic`, `typeID`, `licenseNo`, `address`, `phNo`, `website`, `location`) VALUES
('baganview@gmail.com', 'baganview', 'Bagan View Hotel', '\"Bagan View Hotel\" is located in the heart of the New Bagan which is in the characteristic and lively area and is within short distances to historical pagodas. It is also surrounded by restaurants, spa, tea shops, and lacquerware workshop, etc. The Main Advantage of the hotel is the rooftop, a perfect place to enjoy the beauty of the sunrise or sun', 'baganview2.jpg', 'baganview1.jpg', 'type1', NULL, '9 Jasmin Road, Bagan 05232 Myanmar', '09 44479 0476', NULL, 'Bagan, Mandalay'),
('bayview@gmail.com', 'bayview', ' Bayview The Beach Resort', 'Bayview - the beach resort is a four- star- boutique hotel. It is located on the idyllic Ngapali Beach in Myanmar\'s Rakhine State - its coastline forms part of the Bay of Bengal. The resorts\' 45 deluxe bungalows and rooms including 2 suites are all situated either directly at the beach or in a beautiful exotic garden under countless palm trees.\r\n', 'bayview8.jpg', 'bayview1.jpg', 'type1', '123789', '205 Hgnet Pyaw Khaung Kwin\r\nLin Thar, Ngapali\r\nThe Republic of the Union of Myanmar', '043 42 299\r\n', 'https://bayview-myanmar.com', 'Ngapali, Rakhine'),
('elite@gmail.com', 'elite', 'Elite Exprerss', NULL, 'elite6.jpg', 'elite1.jpg', 'type3', NULL, NULL, '09 977 838411', 'www.eliteexpressmyanmar.com', ''),
('elodie@gmail.com', 'elodie', 'Elodie Restaurant', NULL, 'elodie4.jpg', 'elodie1.jpg', 'type2', '4569236', ' No. 3rd Road, Between Khatter St &, Khwanyo St, New Bagan', '+95 9 42294 3320', NULL, 'Bagan, Mandalay'),
('hardwood@gmail.com', 'hardwood', 'Hard Wood Lodge', NULL, NULL, 'hardwood2.jpg', 'type1', '1246', 'Corner of Kantar 2nd street and Sao San Tun Street Nyaung Shwe', '09 785 874494', 'www.hardwoodlodge.com', 'Inlay, Shan'),
('hiltonhotel@gmail.com', 'HotelHilton', 'Hilton Hotel', 'Hilton Mandalay is the perfect Mandalay lodging choice for your trip to Myanmar. With numerous amenities for guests such as room service, 24 hour front desk, fitness center, you will wake up at Hilton Mandalay feeling excited every day for your time in Mandalay.', 'hilton1.jpg', 'hiltonhotel.png', 'type1', '1346789', 'Corner 26-66th St Chan Aye Tharzan, Mandalay, 11121, Myanmar', '(866) 238-421', 'https://www.hilton.com', 'Mandalay, Mandalay'),
('inlecottage@gmail.com', 'inlecottage', 'Inle Cottage Boutique Hotel', NULL, NULL, 'inlecottage1.jpg', 'type1', '12331559', '124/36,Mingalar Street Nyaung Shwe', '0945919191', 'www.inlecottage.com', 'Inlay, Shan'),
('mercurehotel@gmail.com', 'MercureHotel', 'Mercure Hotel', 'Mercure is a midscale brand of hotels between 3 to 4 star hotels run by its parent company AccorHotels, a French multinational corporation. As of 30 June 2018, Mercure has more than 790 hotels in 63 countries.', 'mercure2.jpg', 'mercure1.jpg', 'type1', '45789123', '9 Kwin 416 B 10th Street\r\nAt The Foot Of Mandalay\r\nAungmyaythazan Township,\r\nmandalay\r\nmyanmar ', '+9524035638 ', 'www.mercure.com', 'Mandalay, Mandalay'),
('mingalarbar@gmail.com', 'mingalarbar', 'Mingalabar', NULL, NULL, 'mingalarbar1.jpg', 'type2', '123789', '71st Between 28th & 29th Street | Chan Aye Tharzan Township, Mandalay, Myanmar', '+95 2 406 0480', 'https://www.mingalabarrestaurant.com', 'Mandalay, Mandalay'),
('paradise@gmail.com', 'paradise', 'Ngapali Paradise Hotel', 'A newly opened three-star hotel located right on the shores of Myanmar\'s most gorgeous Ngapali Beach, \'Ngapali Paradise Hotel\' covers more than six acres of tropical wonderland and luxuriously accomodates guests in a total 75 Beachfront and Seaview Deluxe rooms. \'Ngapali Paradise Hotel\' is located just a stone\'s throw away from Thandwe Airport and ', NULL, NULL, 'type1', '4456789', 'Zee Phyu Gone, Ngapali Beach, Ngapali Main Rd, Thandwe 11221', ' 01 227 784', NULL, 'Ngapali, Rakhine'),
('pleasantview@gmail.com', 'pleasantview', 'Pleasant View Islet Restaurant', '', 'pleasantview1.jpg', 'pleasantview3.jpg', 'type2', '1346789', 'Ngapali Beach | In-front of Pleasant View Resort, Ngapali 07172, Myanmar', '+95 9 44411 2207', '', 'Ngapali, Rakhine'),
('shaniintar@gmail.com', 'shaninthar', 'Shwe InnTarr Hotel', NULL, 'shaninthar1.jpg', NULL, 'type1', NULL, 'Thar Lay Village, Inle Lake, Nyaung Shwe, Shan State, Myanmar.', '+95-9-51-92952', 'www.inlefloatingresort.com', 'Inlay, Shan'),
('super81@gmail.com', 'super81', 'Super81', NULL, NULL, 'super-81.jpg', 'type2', '12345678', 'No 582 81st Street | Between 38th and 39th Street, Mandalay, Myanmar', '+95 9 777 790081', NULL, 'Mandalay, Mandalay'),
('thande@gmail.com', 'thande', 'Thande Beach Hotel', NULL, 'thande1.jpg', NULL, 'type1', NULL, 'Gyeiktaw Main St, Mya Pyin', ' 043 42 278', NULL, 'Ngapali, Rakhine');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_transport_service`
--

CREATE TABLE `hotel_transport_service` (
  `hotel_transport_service_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `serviceName` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_transport_service`
--

INSERT INTO `hotel_transport_service` (`hotel_transport_service_id`, `email`, `serviceName`) VALUES
(22, 'hiltonhotel@gmail.com', 'Free Wifi'),
(23, 'hiltonhotel@gmail.com', 'Room service'),
(24, 'hiltonhotel@gmail.com', 'Free Parking'),
(25, 'hiltonhotel@gmail.com', 'Air Conditioned'),
(26, 'hiltonhotel@gmail.com', 'Outdoor pool'),
(27, 'hiltonhotel@gmail.com', 'Laundry service'),
(28, 'hiltonhotel@gmail.com', 'Fitness Center'),
(29, 'hiltonhotel@gmail.com', 'Bar'),
(30, 'mercurehotel@gmail.com', 'Wifi and Internet Access'),
(31, 'mercurehotel@gmail.com', 'Parking'),
(32, 'mercurehotel@gmail.com', 'Babysitting Request'),
(33, 'mercurehotel@gmail.com', 'Pool'),
(34, 'mercurehotel@gmail.com', 'Massage'),
(35, 'mercurehotel@gmail.com', '2 Bars'),
(36, 'mercurehotel@gmail.com', '3 Restaurants'),
(37, 'mercurehotel@gmail.com', 'Room service'),
(38, 'thande@gmail.com', 'Poolside Bar'),
(39, 'thande@gmail.com', 'Free Parking'),
(40, 'thande@gmail.com', 'Breakfast buffet'),
(41, 'thande@gmail.com', 'Restaurant'),
(42, 'thande@gmail.com', 'Shuttle bus service'),
(43, 'thande@gmail.com', 'Laundry service'),
(44, 'thande@gmail.com', 'Dry cleaning'),
(45, 'thande@gmail.com', 'Spa'),
(46, 'thande@gmail.com', 'Airport transportation'),
(47, 'thande@gmail.com', 'Outdoor pool'),
(48, 'bayview@gmail.com', 'Free Parking'),
(49, 'bayview@gmail.com', 'Free Internet'),
(50, 'bayview@gmail.com', 'Bar / lounge'),
(51, 'bayview@gmail.com', 'Breakfast buffet'),
(52, 'bayview@gmail.com', 'Room service'),
(53, 'paradise@gmail.com', 'Bicycles available'),
(54, 'paradise@gmail.com', 'Free airport transportation'),
(55, 'paradise@gmail.com', 'Bar / lounge'),
(56, 'paradise@gmail.com', 'Fishing'),
(57, 'paradise@gmail.com', 'Karaoke'),
(58, 'paradise@gmail.com', 'Car hire'),
(59, 'paradise@gmail.com', 'Picnic area'),
(60, 'paradise@gmail.com', 'Ironing service'),
(61, 'paradise@gmail.com', 'Laundry service'),
(62, 'hardwood@gmail.com', 'Breakfast [free]'),
(63, 'hardwood@gmail.com', 'Room service'),
(64, 'hardwood@gmail.com', 'Luggage storage'),
(65, 'hardwood@gmail.com', 'Smoking area'),
(66, 'hardwood@gmail.com', 'Smoke-free property'),
(67, 'hardwood@gmail.com', 'Library'),
(68, 'hardwood@gmail.com', 'Safety deposit boxes'),
(69, 'inlecottage@gmail.com', 'Gift/souvenir shop'),
(70, 'inlecottage@gmail.com', 'Safety deposit boxes'),
(71, 'inlecottage@gmail.com', 'Luggage storage'),
(72, 'inlecottage@gmail.com', 'Daily housekeeping'),
(73, 'inlecottage@gmail.com', 'Mini bar'),
(74, 'inlecottage@gmail.com', 'Wake-up service'),
(75, 'inlecottage@gmail.com', 'Complimentary tea'),
(76, 'shaniintar@gmail.com', 'Swimming Pool'),
(77, 'shaniintar@gmail.com', 'Spa'),
(78, 'shaniintar@gmail.com', 'Traditional massage'),
(79, 'shaniintar@gmail.com', 'Bar & lounge'),
(80, 'baganview@gmail.com', 'Free parking'),
(81, 'baganview@gmail.com', 'Free breakfast'),
(82, 'baganview@gmail.com', 'Bicycle rental'),
(83, 'baganview@gmail.com', 'Airport transportation'),
(84, 'baganview@gmail.com', 'Rooftop terrace'),
(85, 'baganview@gmail.com', 'Meeting rooms'),
(86, 'baganview@gmail.com', 'Air conditioning'),
(87, 'baganview@gmail.com', 'Housekeeping'),
(89, 'elite@gmail.com', 'Blanket'),
(90, 'elite@gmail.com', 'Pillow'),
(91, 'elite@gmail.com', 'Water'),
(92, 'elite@gmail.com', 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `journey`
--

CREATE TABLE `journey` (
  `journey_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `journey_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journey`
--

INSERT INTO `journey` (`journey_id`, `email`, `journey_name`) VALUES
(12, 'elite@gmail.com', 'Yangon to Naypyitaw'),
(13, 'elite@gmail.com', 'Thanphyuzayat to Yangon'),
(14, 'elite@gmail.com', 'Pyin Oo Lwin to Yangon'),
(15, 'elite@gmail.com', 'Nyaung Shwe to Yangon'),
(16, 'elite@gmail.com', 'Naypyitaw to Mandalay');

-- --------------------------------------------------------

--
-- Table structure for table `normal_users`
--

CREATE TABLE `normal_users` (
  `email` varchar(100) NOT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `coverpic` varchar(100) DEFAULT NULL,
  `profilepic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normal_users`
--

INSERT INTO `normal_users` (`email`, `pwd`, `name`, `bio`, `coverpic`, `profilepic`) VALUES
('aerialmoon@gmail.com', 'moon', NULL, NULL, NULL, NULL),
('cece@gmail.com', 'ccece', NULL, NULL, NULL, NULL),
('chawchitsuthwe.99@gmail.com', 'chawchit', 'Chaw Chit', NULL, NULL, NULL),
('chawchitsuthwe3699@gmail.com', 'Chawchit', 'Chaw Chit Su Thwe', 'Hey I am CHAW CHIT', NULL, '262340_girly-wallpapers-hd-resolution_1366x768_h.jpg'),
('shwela123@gmail.com', 'shwelaminaye', 'Shwe Lamin Aye', 'Hello Shwe Lamin Aye', NULL, NULL),
('super81@gmail.com', 'super81', NULL, NULL, NULL, NULL),
('testtt@j.v', '12345', 'aham aham', 'fell from sky', NULL, NULL),
('zinnwe@gmail.com', 'ZinNwe', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos_storage`
--

CREATE TABLE `photos_storage` (
  `photo_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `photofile` varchar(100) DEFAULT NULL,
  `photo_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos_storage`
--

INSERT INTO `photos_storage` (`photo_id`, `email`, `photofile`, `photo_name`) VALUES
(13, 'hiltonhotel@gmail.com', 'hilton2.jpg', 'Dining Room'),
(14, 'hiltonhotel@gmail.com', 'hilton3.jpg', 'Bedroom'),
(15, 'hiltonhotel@gmail.com', 'hilton4.jpg', 'Bedroom'),
(16, 'mercurehotel@gmail.com', 'mercure3.jpg', 'Pool'),
(17, 'mercurehotel@gmail.com', 'mercure4.jpg', 'Pool'),
(18, 'mercurehotel@gmail.com', 'mercure5.jpg', 'Dining Room'),
(19, 'mercurehotel@gmail.com', 'mercure7.jpg', 'Dinner'),
(20, 'mercurehotel@gmail.com', 'mercure6.jpg', 'Dining at outside'),
(21, 'mercurehotel@gmail.com', 'mercure8.jpg', 'Bedroom1'),
(22, 'mercurehotel@gmail.com', 'mercure9.jpg', 'Bedroom2'),
(23, 'super81@gmail.com', 'super811.jpg', 'menu1'),
(24, 'super81@gmail.com', 'super812.jpg', 'menu2'),
(25, 'super81@gmail.com', 'super813.jpg', 'menu3'),
(26, 'mingalarbar@gmail.com', 'mingalarbar2.jpg', 'Room1'),
(27, 'mingalarbar@gmail.com', 'mingalarbar3.jpg', 'Room2'),
(28, 'thande@gmail.com', 'thande2.jpg', '1'),
(29, 'thande@gmail.com', 'thande3.jpg', '2'),
(30, 'thande@gmail.com', 'thande4.jpg', '3'),
(31, 'thande@gmail.com', 'thande5.jpg', '6'),
(32, 'thande@gmail.com', 'thande6.jpg', '5'),
(33, 'thande@gmail.com', 'thande7.jpg', '6'),
(34, 'bayview@gmail.com', 'bayview2.jpg', '1'),
(35, 'bayview@gmail.com', 'bayview3.jpg', '2'),
(36, 'bayview@gmail.com', 'bayview4.jpg', '3'),
(37, 'paradise@gmail.com', 'paradise1.jpg', '1'),
(38, 'paradise@gmail.com', 'paradise2.jpg', '2'),
(39, 'paradise@gmail.com', 'paradise5.jpg', '3'),
(40, 'pleasantview@gmail.com', 'pleasantview2.jpg', '1'),
(41, 'pleasantview@gmail.com', 'pleasantview4.jpg', '2'),
(42, 'pleasantview@gmail.com', 'pleasantview5.jpg', '3'),
(43, 'hardwood@gmail.com', 'hardwood1.jpg', '1'),
(44, 'hardwood@gmail.com', 'hardwood3.jpg', '2'),
(45, 'hardwood@gmail.com', 'hardwood4.jpg', '3'),
(46, 'inlecottage@gmail.com', 'inlecottage2.jpg', '1'),
(47, 'inlecottage@gmail.com', 'inlecottage3.jpg', '2'),
(58, 'shaniintar@gmail.com', 'shaninthar2.png', '1'),
(59, 'shaniintar@gmail.com', 'shaninthar3.png', '2'),
(61, 'shaniintar@gmail.com', 'shaninthar4.png', '3'),
(62, 'baganview@gmail.com', 'baganview3.jpg', '1'),
(63, 'baganview@gmail.com', 'baganview4.jpg', '2'),
(64, 'baganview@gmail.com', 'baganview5.jpg', '3'),
(65, 'baganview@gmail.com', 'baganview6.jpg', '4'),
(66, 'elodie@gmail.com', 'elodie2.jpg', '1'),
(67, 'elodie@gmail.com', 'elodie3.jpg', '2'),
(68, 'elodie@gmail.com', 'elodie5.jpg', '3'),
(69, 'elite@gmail.com', 'elite2.jpg', '1'),
(70, 'elite@gmail.com', 'elite3.jpg', '2'),
(71, 'elite@gmail.com', 'elite5.png', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rating_review`
--

CREATE TABLE `rating_review` (
  `rating_review_id` int(11) NOT NULL,
  `normal_email` varchar(100) DEFAULT NULL,
  `business_email` varchar(100) DEFAULT NULL,
  `review_title` varchar(150) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating_review`
--

INSERT INTO `rating_review` (`rating_review_id`, `normal_email`, `business_email`, `review_title`, `rating`, `review`) VALUES
(17, 'chawchitsuthwe3699@gmail.com', 'hiltonhotel@gmail.com', 'Best hotel ever', 4, 'I went to Hilton Jbr, the walk in Dubai in mid June and the service was incredible. I had paid my booking through a travel agent at a decent price but wasnâ€™t aware of the extra charge to be paid at the hotel upon arrival but the receptionist was very hospitable and allowed us to check in first before sorting out payments as it was late and a surprise shock to pay extra Â£400 deposit. The stay was lovely, the food was great, the staff were very helpful. A few hours before check out, my friend staying with me got into an accident which meant we had to go to the hospital and I hadnâ€™t time to pack but the staff offered I check out late 5pm without charge which was very nice. Definitely going back in November. '),
(18, 'chawchitsuthwe3699@gmail.com', 'baganview@gmail.com', 'It is good', 3, 'Huge comfy bed in a nice room with air conditioning. Bed was incredibly comfy. Hotel was quiet and relaxing with rooftop bar and restaurant. Free tea and coffee making facilities in reception. Good WiFi, free bikes and e-bike rental available. Staff were incredibly helpful and friendly Thapyay In particular gave us good recommendations and helped us out with transport etc. Would definitely stay again.'),
(19, 'chawchitsuthwe3699@gmail.com', 'bayview@gmail.com', 'Amazing time in Bay View', 3, 'Amazing times three! Perfect beaches for relaxing and swimming. Great resort with incredible food. The food was especially good at breakfast and dinner. They had an extensive seafood menu that was fresh, perfectly prepared and delicious. Our room was comfortable and nice. To top it off their spa was equally terrific. Katrina, the manager was attentive send helpful. Completely interested and involved in keeping things running smoothly.'),
(20, 'chawchitsuthwe3699@gmail.com', 'elite@gmail.com', 'The best in myanmar', 5, 'Good service.  Safe and secure.'),
(21, 'chawchitsuthwe3699@gmail.com', 'elodie@gmail.com', 'Best roasted duck restaurant in Bagan', 5, 'We can have best roasted duck here with fair price.( meat is tender and juicy ).Small , quite and cozy place to hang out with friends when you are in Bagan.Owner also friendly too with sweet smile.'),
(22, 'chawchitsuthwe3699@gmail.com', 'hardwood@gmail.com', 'Not bad', 3, 'Very clean bedsheets, room, bed, toilet, shower, with hot water.'),
(23, 'chawchitsuthwe3699@gmail.com', 'mercurehotel@gmail.com', 'I like here', 5, 'The bed was Comfortable, clean and the room so big. The staffs were so nice,they always said hello to you with a smile. They also provided the variety of breakfast. And they served the drink to your table. The location is also very good, near the shopping mall '),
(24, 'chawchitsuthwe3699@gmail.com', 'mingalarbar@gmail.com', 'Great lunch spot while out on the temple circuit ', 5, 'I  passed through here at lunch time and the food was really nice. The owners gave me some free fruit after my meal which was a nice gesture. Nice atmosphere along the road with outdoor or indoor seating. I had the fried cauliflower which wasnâ€™t fried (I didnâ€™t want it fried so it worked out well). Good fresh vegetables and food.'),
(25, 'chawchitsuthwe3699@gmail.com', 'paradise@gmail.com', 'A big let down', 2, 'Staff nice but place a big let down. We upgraded to beach front and still not a good room. Dirty in places. Very worn. Bathroom flooded every time we had a shower and stayed flooded. No WiFi even though they kept giving codes to new customers which is Really bad.\r\nUnfinished bar or something by pool meant it felt very ugly.\r\nDust inside cupboards wasnâ€™t nice.\r\nReduced our stay to only 2 days and reason for second star is because they honoured the refund.'),
(26, 'chawchitsuthwe3699@gmail.com', 'pleasantview@gmail.com', 'Amazing', 5, 'Location is amazing. Right on the beach. Near fishing village - fascinating. Great staff. We stayed in private bungalow. We loved every minute and will be returning with our grown children whom we are sure will love it as well.'),
(30, 'chawchitsuthwe3699@gmail.com', 'shaniintar@gmail.com', 'Good', 4, 'We stopped of here for lunch on our way out of New Bagan. The staff were really friendly so we were surprised to read bad reviews. Food was reasonable and tasty. They have a huge outside seating area that goes out the back.'),
(31, 'chawchitsuthwe3699@gmail.com', 'thande@gmail.com', 'Room are nice.', 4, 'Rooms had views.Guests liked the large rooms, though some said they were dated & maintenance could be improved.'),
(32, NULL, 'super81@gmail.com', '', NULL, NULL),
(33, 'shwela123@gmail.com', 'mercurehotel@gmail.com', 'Clean & Tidy', 4, 'Guests liked the large, clean & well-maintained rooms, though some said they were datedÂ·Guests liked the comfortable bedsÂ·Rooms had kitchenettes'),
(34, 'shwela123@gmail.com', 'bayview@gmail.com', 'Amazing', 5, 'Guests liked the large, clean, well-maintained roomsÂ·Guests appreciated the bathrooms'),
(35, 'shwela123@gmail.com', 'thande@gmail.com', 'Wonderful', 5, 'Nice hotel and friendly staff, we bought seafood from outside and cook in the hotel, they are very helpful to make us a delicious dinner by the beach. great service and great experienced.'),
(36, 'shwela123@gmail.com', 'hiltonhotel@gmail.com', 'Good Hotel', 4, 'Guests appreciated the friendly, professional staff'),
(37, 'shwela123@gmail.com', 'pleasantview@gmail.com', 'Delicious', 4, 'Beautiful hotel with lovely staff and the restaurant is great'),
(38, 'shwela123@gmail.com', 'elodie@gmail.com', 'Wonderful', 4, 'Beautiful hotel with lovely staff and the restaurant is great'),
(39, 'shwela123@gmail.com', 'super81@gmail.com', 'Amazing place to hangout', 5, 'Nice place to chill with friends. They have 2 floors so even on weekends, you can still get a table. Food is great.'),
(40, 'shwela123@gmail.com', 'elite@gmail.com', 'Safe ', 5, 'Good service & safe drive'),
(41, 'testtt@j.v', 'pleasantview@gmail.com', 'hh', 5, 'nice'),
(42, 'testtt@j.v', 'elite@gmail.com', 'ggg', 5, 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_details`
--

CREATE TABLE `restaurant_details` (
  `restaurant_details_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `starttime` varchar(20) DEFAULT NULL,
  `endtime` varchar(20) DEFAULT NULL,
  `cuisine` varchar(50) DEFAULT NULL,
  `meal_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_details`
--

INSERT INTO `restaurant_details` (`restaurant_details_id`, `email`, `starttime`, `endtime`, `cuisine`, `meal_type`) VALUES
(4, 'super81@gmail.com', '09:00', '11:00', 'Asian, Burmese, Chinese', 'Lunch, Dinner, Late '),
(5, 'mingalarbar@gmail.com', '00:00', '00:00', 'Burmese', 'Breakfast, Dinner, L'),
(6, 'pleasantview@gmail.com', '00:00', '00:00', 'European, Seafood, Asian, Burmese, Chinese', 'Lunch, Dinner, Late '),
(7, 'elodie@gmail.com', '12:00', '10:00', 'Chinese, Asian, Thai, Burmese, Central European', 'Lunch, Dinner, Brunc');

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `saved_id` int(11) NOT NULL,
  `saver_email` varchar(150) NOT NULL,
  `saved_email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`saved_id`, `saver_email`, `saved_email`) VALUES
(50, 'chawchitsuthwe3699@gmail.com', 'elodie@gmail.com'),
(52, 'super81@gmail.com', 'super81@gmail.com'),
(53, 'chawchitsuthwe3699@gmail.com', 'bayview@gmail.com'),
(54, 'elite@gmail.com', 'shaniintar@gmail.com'),
(55, 'chawchitsuthwe3699@gmail.com', 'baganview@gmail.com'),
(57, 'hiltonhotel@gmail.com', 'bayview@gmail.com'),
(58, 'chawchitsuthwe.99@gmail.com', 'bayview@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bussiness_types`
--
ALTER TABLE `bussiness_types`
  ADD PRIMARY KEY (`typeID`);

--
-- Indexes for table `bussiness_users`
--
ALTER TABLE `bussiness_users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `typeID` (`typeID`);

--
-- Indexes for table `hotel_transport_service`
--
ALTER TABLE `hotel_transport_service`
  ADD PRIMARY KEY (`hotel_transport_service_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `journey`
--
ALTER TABLE `journey`
  ADD PRIMARY KEY (`journey_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `normal_users`
--
ALTER TABLE `normal_users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `photos_storage`
--
ALTER TABLE `photos_storage`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `photos_storage_ibfk_1` (`email`);

--
-- Indexes for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD PRIMARY KEY (`rating_review_id`),
  ADD KEY `normal_email` (`normal_email`),
  ADD KEY `business_email` (`business_email`);

--
-- Indexes for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  ADD PRIMARY KEY (`restaurant_details_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`saved_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_transport_service`
--
ALTER TABLE `hotel_transport_service`
  MODIFY `hotel_transport_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `journey`
--
ALTER TABLE `journey`
  MODIFY `journey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photos_storage`
--
ALTER TABLE `photos_storage`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `rating_review`
--
ALTER TABLE `rating_review`
  MODIFY `rating_review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  MODIFY `restaurant_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `saved_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bussiness_users`
--
ALTER TABLE `bussiness_users`
  ADD CONSTRAINT `bussiness_users_ibfk_1` FOREIGN KEY (`typeID`) REFERENCES `bussiness_types` (`typeID`);

--
-- Constraints for table `hotel_transport_service`
--
ALTER TABLE `hotel_transport_service`
  ADD CONSTRAINT `hotel_transport_service_ibfk_1` FOREIGN KEY (`email`) REFERENCES `bussiness_users` (`email`);

--
-- Constraints for table `journey`
--
ALTER TABLE `journey`
  ADD CONSTRAINT `journey_ibfk_1` FOREIGN KEY (`email`) REFERENCES `bussiness_users` (`email`);

--
-- Constraints for table `photos_storage`
--
ALTER TABLE `photos_storage`
  ADD CONSTRAINT `photos_storage_ibfk_1` FOREIGN KEY (`email`) REFERENCES `bussiness_users` (`email`);

--
-- Constraints for table `rating_review`
--
ALTER TABLE `rating_review`
  ADD CONSTRAINT `rating_review_ibfk_1` FOREIGN KEY (`normal_email`) REFERENCES `normal_users` (`email`),
  ADD CONSTRAINT `rating_review_ibfk_2` FOREIGN KEY (`business_email`) REFERENCES `bussiness_users` (`email`);

--
-- Constraints for table `restaurant_details`
--
ALTER TABLE `restaurant_details`
  ADD CONSTRAINT `restaurant_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `bussiness_users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
