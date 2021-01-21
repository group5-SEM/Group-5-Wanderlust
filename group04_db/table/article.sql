-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 01:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group04_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(11) NOT NULL,
  `ArticleTitle` varchar(50) NOT NULL,
  `ArticleDescription` varchar(500) NOT NULL,
  `ArticleLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `ArticleTitle`, `ArticleDescription`, `ArticleLink`) VALUES
(6, '9 Cool Places To Stay At In KL For An Awesome Week', 'Just a stone\'s throw away from all the amazing spots in downtown Kuala Lumpur!', 'https://says.com/my/lifestyle/best-places-to-stay-at-in-kuala-lumpur'),
(7, '25 Best Things to Do in Malaysia', 'Malaysia is located in the Malay Peninsula and stretches to parts of Borneo where it shares a border with neighboring Indonesia, and as such visitors should not be confused by the terms Peninsular Malaysia and East Malaysia, which comprises Sarawak and Sabah (also known as Malaysian Borneo).\r\n\r\nWith a total landmass of over 300,000 square kilometers, Malaysia is known for its capital city of Kuala Lumpur, a powerhouse financial and business hub in South East Asia, as well as its beautiful beache', 'https://www.thecrazytourist.com/top-25-things-to-do-in-malaysia/'),
(8, 'The World’s Longest Waterslide Lasts 4 Minutes and', 'Waterslides are like many of life’s most beautiful moments: over too soon.\r\n\r\nBut a waterpark in Malaysia is hoping to make the ephemera last a bit longer by building the world’s longest waterslide, expected to open to the public in August.\r\n\r\nESCAPE theme park on the island of Penang is building a 3,740-foot waterslide that will smash world records when construction is completed (expected in July). According to the park, the ride will last four minutes and will take visitors down a 230-foot slo', 'https://www.travelandleisure.com/attractions/amusement-parks/malaysia-worlds-longest-waterslide'),
(9, 'Nice ice: A traditional take on Malaysia’s favouri', 'Melaka’s version of Malaysia’s famous cendol dessert is an exotic combination of palm sugar syrup, jelly-like noodles, coconut milk, beans and shaved ice', 'https://www.theguardian.com/travel/2017/may/28/melaka-malacca-malaysia-food-dessert-nyonya-cendol'),
(10, 'Why not to skip Kota Kinabalu: 7 reasons to stick ', 'Often just a transit stop for travellers headed to the wild jungles and pristine coral reefs of eastern Sabah, Kota Kinabalu offers much to those who decide to stay on – from fantastic seafood to tropical island-hopping, orangutan encounters to a steam train ride into a bygone era.', 'https://www.lonelyplanet.com/articles/why-not-to-skip-kota-kinabalu-7-reasons-to-stick-around-sabahs-capital'),
(11, 'Malaysia Backpacking Travel Guide', 'I think traveling around Malaysia (especially spending a long time backpacking through it) is one of the most underrated things to do in the region. The country is visited a lot but not nearly as much as other countries in Southeast Asia.', 'https://www.nomadicmatt.com/travel-guides/malaysia-travel-tips/'),
(12, 'Breathtaking Natural Gems to See in Kuala Selangor', 'Kuala Selangor is a district in the northwestern part of Selangor, well off the beaten tourist path. Characterized largely by flatlands with a few hills to the east and a large coastline to the west, the district still maintains a traditional kampung atmosphere, with paddy fields and fishing villages dominating the scenery.\r\n\r\nBest known for its fireflies, the area has become an increasingly popular family getaway for KL-ites due to its close proximity. While it is a smaller area compared to Hul', 'https://www.lokalocal.com/blog/outdoors/kuala-selangor-natural-gems/'),
(13, '50 Hiking Trails to Conquer in Malaysia', 'Ready to rise to the challenge? Malaysia is home to breathtaking mountains, lush national parks and scenic landscapes that would excite any adventurous soul. In that spirit, we’ve compiled a list of 50 hiking trails across the nation that hiking enthusiasts, new or experienced, can try. The time it takes to complete each course may differ depending on your fitness level and chosen trail, but this should give a rough indication of what to expect.\r\n\r\nThat being said, there are probably many more o', 'https://www.lokalocal.com/blog/outdoors/50-hiking-trails-to-conquer-in-malaysia/'),
(14, 'Kuching, Malaysia: what to see plus the best resta', 'Going there today still reminds me of a time when Asian cities were not clogged with traffic, pollution and skyscrapers. Kuching’s architectural heritage and historic Chinatown are well-preserved, even though it lacks Unesco protection, and there is scarcely a high-rise to spoil the skyline.\r\n\r\nThe street food has always been spectacular here, but now there are also bistros and fun bars, and a great choice of accommodation from boutique hotels to backpacker hostels.', 'https://www.theguardian.com/travel/2017/jan/21/kuching-borneo-malaysia-city-guide-hotels-restaurants-bars'),
(15, 'Malaysia: Why Kelantan Should Be On Your Road Trip', 'A visit to the northeast coast of Peninsular Malaysia will bring you to a laid back town of Kota Bharu in the state of Kelantan. The drive takes about six hours from Kuala Lumpur, with the new highway. This Islamic state has often been overlooked as a travel destination, compared to its’ neighbouring state Terengganu, famous for the blue beaches and islands.\r\n\r\nAlthough this may be true, I find the state to have a lot of traditional charm and unity in the local community who speak the same diale', 'https://www.travelchameleon.net/kelantan-road-trip-list/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
