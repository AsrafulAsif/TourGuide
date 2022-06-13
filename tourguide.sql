-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 12:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Asif', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dhaka`
--

CREATE TABLE `dhaka` (
  `id` int(100) NOT NULL,
  `dplace_image` varchar(255) NOT NULL,
  `dplace_title` varchar(255) NOT NULL,
  `dplace_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dhaka`
--

INSERT INTO `dhaka` (`id`, `dplace_image`, `dplace_title`, `dplace_description`) VALUES
(2, 'image/Screenshot (357).png', 'dhaka', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `place_id` int(100) NOT NULL,
  `place_division` varchar(1000) NOT NULL,
  `place_name` varchar(1000) NOT NULL,
  `place_address` varchar(1000) NOT NULL,
  `place_log` varchar(1000) NOT NULL,
  `place_lat` varchar(1000) NOT NULL,
  `place_image` varchar(1000) NOT NULL,
  `place_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`place_id`, `place_division`, `place_name`, `place_address`, `place_log`, `place_lat`, `place_image`, `place_description`) VALUES
(1, 'Sylhet', 'Ratargul Swamp Forest', '2W79+MFG', '23.7189194200391', '90.38815959731572', 'image/sylhetratargulforest.jpg', 'Ratargul Swamp Forest is a freshwater swamp forest located in Gowain River, Fatehpur Union, Gowainghat, Sylhet, Bangladesh. It is the only swamp forest located in Bangladesh and one of the few freshwater swamp forests in the world. The forest is naturally conserved under the Department of Forestry, Government of Bangladesh.'),
(2, 'Sylhet', 'Lala Khal', 'Lala Khal to Sharighat, Lala Khal', '25.112229542485814', '92.17971321440534', 'image/লালাখাল.png', 'Lalakhal (Bengali: লালাখাল) is a tourist spot in Jaintiapur, Sylhet District, Bangladesh.Lalakhal is a wide channel in the Sharee River near the Tamabil road. The river is not very deep and is one of the sources of sand in Sylhet. The focal point of the feature is the variety of colours of the water, which varies from blue to green to clear at different points.'),
(7, 'Sylhet', 'Bichnakandi', '5VCJ+WPG, Bisnakandi', '25.172688911746665', '91.88155886603155', 'image/Bichnakandi.jpg', 'Bichnakandi (Bengali: বিছানাকান্দি, romanized: Bichhanakandi), also known as Bisnakandi, is a village in Rustompur Union, Gowainghat Upazila of Bangladesh\'s Sylhet District. In recent years, there has been an influx of tourists to its river.'),
(8, 'Dhaka', 'Lalbagh Fort', 'Lalbagh Rd, Dhaka 1211', '23.718909597463547', '90.38809522411263', 'image/Lalbagh_Fort.jpg', 'Lalbagh Fort (also Fort Aurangabad) is an incomplete 17th-century Mughal fort complex that stands before the Buriganga River in the southwestern part of Dhaka, Bangladesh.The construction was started in 1678 AD by Mughal Subahdar Muhammad Azam Shah, who was a son of Emperor Aurangzeb and later emperor himself. His successor, Shaista Khan, did not continue the work, though he stayed in Dhaka up to 1688.'),
(9, 'Dhaka', 'Ahsan Manzil Museum', 'Ahsanullah Rd, Dhaka 1100', '23.708758481406456', '90.40599666847953', 'image/AhsanManzilFront.jpg', 'Ahsan Manzil used to be the official residential palace and seat of the Nawab of Dhaka. The building is situated at Kumartoli along the banks of the Buriganga River in Dhaka, Bangladesh. Construction was started in 1859 and was completed in 1872.It was constructed in the Indo-Saracenic Revival architecture.It has been designated as a national museum.'),
(11, 'Dhaka', 'Bangladesh National Zoo', 'Zoo Road, Dhaka 1216', '23.812344270841105', '90.34698291247311', 'image/Bangladeshnationalzoo.jpg', 'Bangladesh National Zoo, (Bengali: বাংলাদেশ জাতীয় চিড়িয়াখানা) is a zoo located in the Mirpur section of Dhaka, the capital city of Bangladesh. The zoo contains many native and non-native animals and wild life, and hosts about three million visitors each year. The name of zoo has been changed from 5 February 2015 from Dhaka Zoo to Bangladesh National Zoo.'),
(12, 'Chittagong', 'Patenga Sea Beach', 'Chattogram', '22.235652252361174', '91.79135562035854', 'image/Patengaseabeach.jpg', 'Patenga (Bengali: পতেঙ্গা) is a sea beach of the Bay of Bengal, located 14 kilometres (8.7 mi) south from the port city of Chattogram, Bangladesh. It is near to the mouth of the Karnaphuli River. The beach is very close to the Bangladesh Naval Academy of the Bangladesh Navy and Shah Amanat International Airport.'),
(13, 'Chittagong', 'Zia Memorial Museum', 'Shahid Saifuddin Khaled Rd, Chattogram', '22.348370407126065', '91.82390225477047', 'image/ZiaMemorialMuseum.jpg', 'One of the most remembered war heroes and politicians in the history of Bangladesh is Lieutenant General Ziaur Rahman. Born on 19 January 1936, Zia went on to establish the Bangladesh Nationalist Party and became the President of Bangladesh on 21 April 1977. Tragedy struck the country when Ziaur Rahman was assassinated in 1981. In honor of this revered man, the Zia Memorial Museum was established to keep his memory and contributions to Bangladesh alive. The Zia Memorial Museum is more than just a journey through the life of the late President Rahman, it is also a significant architectural piece of history.'),
(14, 'Chittagong', 'Vatiary Lake', 'Bhatiari', '22.43295159128184', '91.76605228021897', 'image/Vatiarylake.jpg', 'Bhatiari is a place situated at Bhatiari Union in Sitakunda, Chittagong. It is famous for tourism spot in Chittagong. The place is surrounded by several lakes and hills. The hilly area in Bhatiary is under control of Bangladesh Army.'),
(17, 'Khulna', 'Shaṭ Gombuj Moshjid', 'Bagerhat - Khulna Rd, 9300', '89.73940045152092', '22.675506641187198', 'image/SixtyDomeMosque.jpg', 'The Sixty Dome Mosque (Bengali: ষাট গম্বুজ মসজিদ Shaṭ Gombuj Moshjid; more commonly known as Shait Gambuj Mosque or Saith Gunbad Masjid), is a mosque in Bagerhat, Bangladesh. It is a part of the Mosque City of Bagerhat, a UNESCO World Heritage Site. It is the largest mosque in Bangladesh from the sultanate period (2021–1576). It was built during the Bengal Sultanate by Khan Jahan Ali, the governor of the Sundarbans. It has been described as \"one of the most impressive Muslim monuments in the whole of South Asia.'),
(18, 'Khulna', 'Mongla Sea Port', 'Khulna - Mongla Hwy, Mongla', '22.520114468113075', '89.59944262322597', 'image/MonglaPort.jpg', 'The Port of Mongla is the second busiest seaport of Bangladesh. It is located in Bagerhat District in the southwestern part of the country.'),
(19, 'Barisal', 'Barishal Divisional Museum', 'Fazlul Haque Ave, Barishal', '22.72670256830787', '90.37395647281784', 'image/barisalmuseum.jpg', 'Barisal Divisional Museum has been established in the old Collectorate building of the district.'),
(20, 'Barisal', 'Durga Sagar', 'Durga Sagar, 8213 Swarupkathi - Barisal Rd, Madhabpasha 8213', '22.761129611833578', '90.2896008277941', 'image/durgasaGor.jpg', 'Durga Sagar, known locally as Madhabpasha Dighi,is the largest lake in southern Bangladesh. It has a total area of about 25 hectares (62 acres). The lake is about 11 kilometres (6.8 mi) away from Barisal city. Rani Durgabati, mother of Raja Joy Narayan, had the pond excavated in 1780. There is a small island in the middle of the lake; this island was originally not part of the lake - it was created artificially to beautify and increase tourist attraction.'),
(22, 'Mymensingh', 'Muktagasa Zamindar House', 'College Rd, Muktagacha 2210', '24.769518820015556', '90.25498078180765', 'image/MuktagasaZamindarBariMymensingh.jpg', 'Muktagasa Zamindar House is a traditional ancient structure of Muktaghasa Upazila in the Mymensingh district. This Muktaghasa palace is located 17 km from Mymensingh.The zamindar of the then Muktagasa got the title of king first and then maharaja from the British.So this residence of the zamindaris called Muktagasa Rajbari. 16 parts of Muktagasa zamindari were ruled by 16 zamindars.The entrance of the Muktaghasa Zamindar house has a giant lion door. Inside the palace are the zamindar’s mother’s house, temple, darbar hall, kacharighar, guest house, ark room, and other buildings.'),
(23, 'Mymensingh', 'Botanical Garden', 'PCGR+CQV, Mymensingh', '24.74113581830043', '90.44407777704477', 'image/BotanicalGardenMymensingh.jpg', 'Bangladesh Agricultural University in Mymensingh district has a reputation as a quiet place covered with green. Botanical Garden was established in 1963 with rare species of plants collecting around 25 acres of the university campus on the banks of the old Brahmaputra river.The first botanical garden in Bangladesh, recognized by the international organization Botanic Gardens Conservation International (BGCI), has about 600 different plants, including 1,000 large, 1278 medium, and 4467 small trees.'),
(24, 'Rajshahi', 'Bil Halti', 'Naldanga', '24.551861122546676', '89.02133733548013', 'image/HaltiBeelNatore.jpg', 'Bil Halti Trimohoni Degree College is an academic institute located at Nagar Majhgram Singra Natore. Its institute code (EIIN) is 124316.'),
(25, 'Rajshahi', 'Shahid Sagar', 'Rajshahi', '24.214169823964955', '88.99685385481025', 'image/sahidsagor.jpg', 'Shaheed Sagar is located at Gopalpur, LalPur , Natore. Besides this landmark, there are eight more landmarks listed in Natore.'),
(26, 'Rangpur', 'Tajhat Jamidar Bari', 'Tajhat Road, Rangpur 5400', '25.725360172709514', '89.27991402600885', 'image/Tajhatrajbari.jpg', 'Tajhat Palace, Tajhat Rajbari, is a historic palace of Bangladesh, located in Tajhat, Rangpur.This palace now holds the Rangpur museum.Tajhat Palace is situated three km. south-east of the city of Rangpur, on the outskirts of town.'),
(27, 'Rangpur', 'Rangpur Zoo', 'Police Line Road, Rangpur', '25.75715736847149', '89.25003146517221', 'image/Rongpurzoo.jpg', 'Recreation Park and Rangpur Zoo, (Bengali: বিনোদন উদ্যান ও রংপুর চিড়িয়াখানা) is located in Rangpur, Bangladesh, is the largest zoo in North Bengal and the second largest in Bangladesh in terms of size. With an area of 21.51 acres (8.70 ha) of lush green trees and grasses, the zoo is located east side of Hanuman-tola road beside Police Line Road, not far from Rangpur District Administration Office.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `EPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Email`, `PhoneNumber`, `UserName`, `EPassword`) VALUES
(48, 'asif@gmail.com', 12345678912, 'asif', '2b00159b9a1e6e5fe9ccd6fafb011ce8c9d65b01'),
(49, 'akramhossainfahim@gmail.com', 1731647610, 'akram', '2b00159b9a1e6e5fe9ccd6fafb011ce8c9d65b01'),
(50, 'akram@gmail.com', 12345678945, 'hossain', '1a84644b4a4a71bacefe9ec81b192e965f02cc17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `explore_id` int(100) NOT NULL,
  `place_name` varchar(200) NOT NULL,
  `place_image` varchar(100) NOT NULL,
  `place_description` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `explore_id`, `place_name`, `place_image`, `place_description`) VALUES
(51, 49, 11, 'Bangladesh National Zoo', 'image/Bangladeshnationalzoo.jpg', 'Bangladesh National Zoo, (Bengali: বাংলাদেশ জাতীয় চিড়িয়াখানা) is a zoo located in the Mirpur section of Dhaka, the capital city of Bangladesh. The zoo contains many native and non-native animals and wild life, and hosts about three million visitors each year. The name of zoo has been changed from 5 February 2015 from Dhaka Zoo to Bangladesh National Zoo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dhaka`
--
ALTER TABLE `dhaka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dhaka`
--
ALTER TABLE `dhaka`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `place_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
