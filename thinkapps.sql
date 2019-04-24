-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 08:44 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thinkapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `id` int(11) NOT NULL,
  `course_name` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_master`
--

INSERT INTO `course_master` (`id`, `course_name`, `description`, `status`, `created_date`, `updated_Date`) VALUES
(8, 'Aerospace Engineering', 'WHAT IS AEROSPACE ENGINEERING?\r\nAerospace is a specialized branch of engineering which deals with the design and development of aircraft\'s as well as space crafts The course curriculum covers aspects of two branches of engineering - aeronautical and astronautical engineering. The course also focuses on new technologies in aviation, defense systems, and space exploration. The course is offered at both undergraduate and postgraduate levels awarding B.Tech and M.Tech degrees.\r\nDegree Offered : B.E /Btech, M.E /Mtech., B.Sc., M.Sc.', 0, '2019-03-16 23:55:33', '2019-03-16 18:25:33'),
(9, 'Computer Science Engineering', 'WHAT IS COMPUTER SCIENCE ENGINEERING?\r\nComputer science engineering (CSE) is one of the popular courses among engineering aspirants which focuses on the basic elements of computer programming and networking. Students pursuing computer science courses will gain knowledge of design, implementation, and management of information system of both hardware and software. Going by the name, CSE course deals primarily with the theory of computation and design of computational systems. The course is offered across the globe in technical institutions at undergraduate as well as postgraduate levels awarding B.Tech and M.tech degrees, respectively.\r\nELIGIBILITY CRITERIA', 0, '2019-03-16 23:56:37', '2019-03-16 18:26:37'),
(10, 'Mechanical Engineering', 'WHAT IS MECHANICAL ENGINEERING?\r\n Mechanical engineering is a professional programme which helps students to understand the working mechanisms of heavy tools and machineries.  The branch applies principles of engineering, physics and material science for the design, analysis, manufacturing, and maintenance of mechanical systems. The course covers technical areas like distribution of electricity through generators, transformers, transmission lines, lighting and wiring in buildings. A course in mechanical engineering makes a student gain knowledge and experience in the designing of electric motors, automobiles, aircraft and other heavy vehicles.', 0, '2019-03-16 23:58:02', '2019-03-16 18:28:02'),
(11, 'Electrical Engineering', 'WHAT IS ELECTRICAL ENGINEERING ?\r\nElectrical engineering, one of the core courses of engineering discipline deals with the study of design, development, and maintenance of electrical systems and their components, ensuring quality, safety, reliability, and sustainability. The course focuses on the manufacturing of electrical equipment used in a number of sectors including construction and building and the production and distribution of power. Students pursuing electrical engineering study about semiconductors and microprocessors. The undergraduate course will award a B.Tech / B.E. degree and the postgraduate course, an M.Tech.', 0, '2019-03-16 23:58:43', '2019-03-16 18:28:43'),
(12, 'Civil Engineering', 'WHAT IS CIVIL ENGINEERING ?\r\nThere would have been no historic wonders like Taj Mahal, Coliseum of Rome and the Great Wall of China or modern masterpieces like the London Bridge and Howrah Bridge if there were no civil engineers. The engineering course deals with planning, designing, constructing, maintaining, and operating infrastructures while protecting the public and environmental health as well as improving existing infrastructure. The course also teaches the development of better infrastructural facilities to sustain an eco-friendly environment. Civil engineering course is offered both at the undergraduate and postgraduate levels.\r\nELIGIBILITY CRITERIA', 0, '2019-03-16 23:59:18', '2019-03-16 18:29:18'),
(13, 'Finance', 'WHAT IS FINANCE ?\r\nFinance is a specialisation within commerce which has a wide scope in different domains like banking, IT, healthcare, law and engineering. Students pursuing postgraduate and undergraduate in finance should hold good command in mathematics. Subjects in finance include business modelling, financial markets and investment strategy, valuation and investment, managerial economics, etc. Finance is part of many programmes and may lead to career opportunities in different fields like chartered accountancy, banking, company secretary, actuarial science and financial management.', 0, '2019-03-16 23:59:41', '2019-03-16 18:29:41'),
(14, 'Human Resource Management', 'WHAT IS HUMAN RESOURCE MANAGEMENT ?\r\nA programme in HR management gives a student a strong foundation in best practices in HR. The course helps them inculcate necessary skills and methods required to deal with the challenges of today’s changing workplace. The key concepts of HRM consist of the 4 M (Man, Money, Materials and Machinery), which act as a lifeblood for any business organization.', 0, '2019-03-17 00:00:04', '2019-03-16 18:30:04'),
(15, 'Electronics and Communication Engineering', 'Branch: Electronics\r\nSimilar Courses: Power Electronics | Electronics Product Design Technology | Electronics and Power Engineering | Electronics and Media Technology', 0, '2019-03-17 00:00:33', '2019-03-16 18:30:33'),
(16, 'Sales and Marketing', 'WHAT IS SALES AND MARKETING ?\r\nSales and marketing management programme is designed to help students understand contemporary approaches to sell a product to its valued customer besides teaching the student about packaging, promotion and marketing in an effective way. The management programme offered at the postgraduate level, provides broad understanding of emerging sales and marketing frameworks. In the PG programme, students learn about customer and market orientation for business success. They are also taught about conceptual management techniques for sale and distribution of a product.', 0, '2019-03-17 00:01:17', '2019-03-16 18:31:17'),
(17, 'Operations Management', 'WHAT IS OPERATIONS MANAGEMENT ?\r\nA programme in operations management focuses on the aspect of planning and managing an efficient system right from the production of goods and services to their ultimate delivery. An operations management student is made to understand the entire cycle of a product and how to streamline it to ensure optimum utilisation of resources. The course teaches students to analyse market trends, influence of industries in different domains, forecast demand and work on inventory management besides understanding policies made by the government. Apart from this, students also gain practical understanding of the various fixed and variable costs involved in the business processes through internships, industrial tours and even projects.', 0, '2019-03-17 00:02:13', '2019-03-16 18:32:13'),
(18, 'Information Technology', 'WHAT IS INFORMATION TECHNOLOGY ?\r\nA student holding a degree in Information Technology can work as an IT Engineer responsible for operating computer systems, software, servers, computer networking or network securities. The programme focuses on the theoretical and technical aspects of designing, developing, researching and testing software as well as digital hardware. Information Technology is designed to teach students about various fundamental concepts of information security, web systems, computer networking and software engineering. The programme covers subjects like programming, mathematics, and operations among others.', 0, '2019-03-17 00:04:17', '2019-03-16 18:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `school_course_mapping`
--

CREATE TABLE `school_course_mapping` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_course_mapping`
--

INSERT INTO `school_course_mapping` (`id`, `school_id`, `course_id`, `created_date`, `updated_date`) VALUES
(23, 7, 8, '2019-03-17 00:09:37', '2019-03-16 18:39:37'),
(24, 7, 12, '2019-03-17 00:09:37', '2019-03-16 18:39:37'),
(25, 7, 9, '2019-03-17 00:09:37', '2019-03-16 18:39:37'),
(26, 8, 14, '2019-03-17 00:11:25', '2019-03-16 18:41:25'),
(27, 8, 18, '2019-03-17 00:11:25', '2019-03-16 18:41:25'),
(28, 8, 10, '2019-03-17 00:11:25', '2019-03-16 18:41:25'),
(29, 9, 15, '2019-03-17 00:12:16', '2019-03-16 18:42:16'),
(30, 9, 18, '2019-03-17 00:12:16', '2019-03-16 18:42:16'),
(31, 10, 11, '2019-03-17 00:13:28', '2019-03-16 18:43:28'),
(32, 10, 13, '2019-03-17 00:13:28', '2019-03-16 18:43:28'),
(33, 10, 17, '2019-03-17 00:13:28', '2019-03-16 18:43:28'),
(34, 10, 16, '2019-03-17 00:13:28', '2019-03-16 18:43:28'),
(35, 11, 12, '2019-03-17 00:14:34', '2019-03-16 18:44:34'),
(36, 11, 9, '2019-03-17 00:14:34', '2019-03-16 18:44:34'),
(37, 11, 11, '2019-03-17 00:14:34', '2019-03-16 18:44:34'),
(38, 11, 15, '2019-03-17 00:14:34', '2019-03-16 18:44:34'),
(39, 11, 10, '2019-03-17 00:14:34', '2019-03-16 18:44:34'),
(40, 12, 12, '2019-03-17 00:15:55', '2019-03-16 18:45:55'),
(41, 12, 15, '2019-03-17 00:15:55', '2019-03-16 18:45:55'),
(42, 12, 14, '2019-03-17 00:15:55', '2019-03-16 18:45:55'),
(43, 12, 10, '2019-03-17 00:15:55', '2019-03-16 18:45:55'),
(44, 12, 17, '2019-03-17 00:15:55', '2019-03-16 18:45:55'),
(45, 13, 12, '2019-03-17 00:18:01', '2019-03-16 18:48:01'),
(46, 13, 9, '2019-03-17 00:18:01', '2019-03-16 18:48:01'),
(47, 13, 15, '2019-03-17 00:18:01', '2019-03-16 18:48:01'),
(48, 13, 18, '2019-03-17 00:18:01', '2019-03-16 18:48:01'),
(49, 13, 17, '2019-03-17 00:18:01', '2019-03-16 18:48:01'),
(50, 13, 16, '2019-03-17 00:18:01', '2019-03-16 18:48:01'),
(51, 14, 12, '2019-03-17 00:19:30', '2019-03-16 18:49:30'),
(52, 14, 9, '2019-03-17 00:19:30', '2019-03-16 18:49:30'),
(53, 14, 15, '2019-03-17 00:19:30', '2019-03-16 18:49:30'),
(54, 14, 14, '2019-03-17 00:19:30', '2019-03-16 18:49:30'),
(55, 14, 10, '2019-03-17 00:19:30', '2019-03-16 18:49:30'),
(56, 15, 12, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(57, 15, 9, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(58, 15, 11, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(59, 15, 13, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(60, 15, 14, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(61, 15, 10, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(62, 15, 16, '2019-03-17 00:20:31', '2019-03-16 18:50:31'),
(63, 16, 12, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(64, 16, 9, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(65, 16, 11, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(66, 16, 13, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(67, 16, 14, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(68, 16, 10, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(69, 16, 16, '2019-03-17 00:22:54', '2019-03-16 18:52:54'),
(70, 17, 15, '2019-03-17 00:24:05', '2019-03-16 18:54:05'),
(71, 17, 13, '2019-03-17 00:24:05', '2019-03-16 18:54:05'),
(72, 17, 14, '2019-03-17 00:24:05', '2019-03-16 18:54:05'),
(73, 17, 18, '2019-03-17 00:24:05', '2019-03-16 18:54:05'),
(74, 17, 10, '2019-03-17 00:24:05', '2019-03-16 18:54:05'),
(75, 17, 17, '2019-03-17 00:24:05', '2019-03-16 18:54:05'),
(76, 17, 16, '2019-03-17 00:24:05', '2019-03-16 18:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `school_master`
--

CREATE TABLE `school_master` (
  `id` int(11) NOT NULL,
  `school_name` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_master`
--

INSERT INTO `school_master` (`id`, `school_name`, `address`, `pincode`, `contact_no`, `created_date`, `updated_date`, `status`) VALUES
(8, 'La Martiniere For Girls School', '14, Rawdon Street, Kolkata – 700 017.', 700017, '3322903841', '2019-03-16 18:41:25', '2019-03-16 18:41:25', 0),
(7, 'St. Xavier’s Collegiate School', '30, Mother Teresa Sarani,\r\nKolkata 700 016.', 700016, '3322551171', '2019-03-16 18:39:37', '2019-03-16 18:39:37', 0),
(9, 'The Doon School, Dehradun', 'Mall Road, Dehradun 248001.', 248001, '1352526400', '2019-03-16 18:42:16', '2019-03-16 18:42:16', 0),
(10, 'Mallya Aditi International School, Bangalore', 'Yelahanka, Bangalore 560 106', 560106, '8040447000', '2019-03-16 18:43:28', '2019-03-16 18:43:28', 0),
(11, 'Little Flower High School, Hyderabad', 'Chirag Ali Lane, Abids, Hyderabad 500001.', 500001, '4023202675', '2019-03-16 18:44:34', '2019-03-16 18:44:34', 0),
(12, 'Mother’s International, Delhi', 'Sri Aurobindo Marg, New Delhi – 110016', 110016, '1126854512', '2019-03-16 18:45:55', '2019-03-16 18:45:55', 0),
(13, 'St. John’s High School, Chandigarh', 'Sector 26, Chandigarh 160019.', 160019, '1722792573', '2019-03-16 18:48:01', '2019-03-16 18:48:01', 0),
(14, 'The Valley School, Bangalore', 'Thatguni Post, Kanakpura Road,\r\nBengaluru 560082.', 560082, '8028435241', '2019-03-16 18:49:30', '2019-03-16 18:49:30', 0),
(15, 'Modern School, Barakhamba Road, Delh', 'Barakhamba Road, New Delhi – 110001', 110001, '1123311618', '2019-03-16 18:50:31', '2019-03-16 18:50:31', 0),
(16, 'Emerald Heights International School, Indore', 'Opposite Akashwani, A.B. road,\r\nRau-Indore 453331.', 453331, '8720009993', '2019-03-16 18:52:54', '2019-03-16 18:52:54', 0),
(17, 'Loreto House, Kolkata', 'Loreto House-7, Middleton Row, Kolkata 700071.', 700071, '3322293564', '2019-03-16 18:54:05', '2019-03-16 18:54:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_course_mapping`
--
ALTER TABLE `school_course_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `school_master`
--
ALTER TABLE `school_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_master`
--
ALTER TABLE `course_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `school_course_mapping`
--
ALTER TABLE `school_course_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `school_master`
--
ALTER TABLE `school_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
