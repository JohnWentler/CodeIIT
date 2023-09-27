-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 12:26 AM
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
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `student_name` longtext NOT NULL,
  `personal_link` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `student_image` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `student_name`, `personal_link`, `student_image`) VALUES
(1, 'student_1', '', 'Profile.png'),
(2, 'student_2', '', 'Profile.png'),
(3, 'student_3', '', 'Profile.png'),
(4, 'student_4', '', 'Profile.png'),
(5, 'student_5', '', 'Profile.png'),
(6, 'student_6', '', 'Profile.png'),
(7, 'student_7', '', 'Profile.png'),
(8, 'student_8', '', 'Profile.png'),
(9, 'student_9', '', 'Profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(80) NOT NULL,
  `course_description` varchar(500) NOT NULL;
  `Credits` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  `T` int(11) NOT NULL,
  `P` int(11) NOT NULL,
  `preferred_sem_btech` int(11) NOT NULL,
  `preferred_sem_mtech` int(11) NOT NULL,
  `offered_in` varchar(30) NOT NULL,
  `type` mediumtext NOT NULL,
  `area` mediumtext NOT NULL,
  `course_link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course_name`, `Credits`, `L`, `T`, `P`, `preferred_sem_btech`, `preferred_sem_mtech`, `offered_in`, `type`, `area`, `course_link`) VALUES
('BE101', 'Introduction to Life Sciences: Fundamentals of Life', 4, 3, 1, 0, 1, 0, '', 'Biological Engineering', '', 'https://drive.google.com/file/d/1Nuo7yDokvHluMX6W8p_zoxrqUmm3KK7R/view'),
('CH201', 'General Chemistry', 4, 3, 0, 0, 3, 0, 'Odd', 'Chemistry', '', 'https://drive.google.com/file/d/1lsCncMdQPALalCIqPc9OaDVaB43P1b6x/view'),
('CH202', 'Chemistry Laboratory', 2, 0, 0, 4, 2, 0, 'Even', 'Chemistry', '', 'https://drive.google.com/file/d/1UDC8aBe53lQb96kPQcnd64l6Vx_8Mgve/view'),
('CS301', 'Operating Systems', 5, 3, 0, 2, 5, 0, 'Odd', 'Core', 'Operating Systems ', 'https://drive.google.com/file/d/1H3b6c4FP1ZAlfG1siWw8DdO5AahX5xOU/view'),
('CS302', 'Theory of Computation', 4, 3, 1, 0, 5, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/17RKXWVo7KQS8ZlsvEkxVmuXpmGFXv8gh/view'),
('CS327', 'Compilers', 5, 3, 0, 2, 5, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/1fu3uMOavsHrhcQlwIGFxoBsaMit6UE4j/view'),
('CS328', 'Introduction to Data Science', 4, 3, 1, 0, 5, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/1aLtAqnC8YvsWS7hbSn9kp67tg82_ywgS/view'),
('CS422', 'Data Mining ', 4, 3, 0, 0, 0, 0, 'Even', 'Core', 'Data Science', 'https://drive.google.com/file/d/15c2pz8ufHYHG2TghTehTWN4e8veODelv/view'),
('CS425', 'Introduction to Computational Complexity Theory', 4, 3, 0, 0, 0, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/1jwVATHbTJsTQJsdp2oLEzrMIm7tWdiWX/view'),
('CS428', 'Introduction to Applied Crytography', 4, 3, 0, 0, 0, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1GICC1xeFTXxPUh4T5INmYQM7c8S9CeGN/view'),
('CS431', 'Computer and Network Security', 4, 3, 0, 0, 0, 0, 'Even', '', '', 'https://drive.google.com/file/d/16rsyxxlLT0HS_kB12XxbZqdwoyiU5UNT/view'),
('CS432', 'Databases', 4, 3, 0, 0, 0, 0, 'Even', '', '', 'https://drive.google.com/file/d/1M3xpKvRfyStzGb1UD60ml9lKxjOimgH8/view'),
('CS433', 'Computer Networks', 4, 3, 0, 0, 0, 0, 'Even', '', '', 'https://drive.google.com/file/d/1cEh7mN9uaw4p9Yq0N7HWxVCAMgZPYo-F/view'),
('CS603', 'Computational Photography', 4, 3, 0, 0, 7, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1o9ijeai-MFbXA_iIK2YfdN-YFBol56xt/view'),
('CS606', 'Advanced Topics in Cryptology', 4, 3, 0, 0, 0, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1HRecGHyVVFR2DwmqcyRlEnQfxfmgROvN/view'),
('CS607', 'Combinatorics with Applications in Computer Science', 4, 3, 0, 0, 0, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1IxVEoCJevPkYO2f_UGb35u9Lxdka2fKY/view'),
('CS609', 'Advanced Data Structures', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/11AUS9wnuLaBtztqc4DT2RaYEcFYATjbW/view'),
('CS610', 'Algorithms', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/1IZjF3SfbiTMEafzlFXnX-vbVm4oGJG8Z/view'),
('CS612', 'Computer Systems', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/1Kb4o88AZDYcdu96VuIRVreJmWhkKrpkF/view'),
('CS613', 'Natural Language Processing', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/14iwtwyUsysTyJvdMCYkG0vG4_yrBt6Bj/view'),
('CS614', 'Advanced Algorithms', 4, 3, 0, 0, 0, 2, 'Even', '', '', 'https://drive.google.com/file/d/1D9TG-OC2gSSeLWgAIPboa-AUCWRyxJ7z/view'),
('CS615', 'Advanced Computer Networks', 4, 3, 0, 0, 0, 2, 'Even', '', '', 'https://drive.google.com/file/d/1MbUtrdKTuTxGLI_ZxtEDKPX4lalOrNXi/view'),
('CS616', 'Parallel and Distributed Systems', 5, 3, 0, 2, 0, 2, 'Even', 'Core', '', 'https://docs.google.com/document/d/1CEUtgi8Lqm7E-fhltD4EKk0jJwqIZK8c/edit'),
('ES101', 'Engineering Graphics', 3, 2, 0, 3, 1, 0, '', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1RJr0g6hzjyUDuOUB3WSKoKa9X-PJIIt4/view'),
('ES102', 'Introduction To Computing', 3, 2, 0, 2, 1, 0, '', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1aAEy8XbrhKobhnOKpDbakKKkSkcVLbW1/view'),
('ES103', 'Introduction To Electrical Systems', 4, 3, 1, 0, 1, 0, '', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1Q-ka8pH6ZQkmH3zZtoPKGGQKPVTirc2I/view'),
('ES104', 'Introduction to Analog and Digital Electronics', 4, 3, 2, 0, 2, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1duJxP6cdDzwGcZWdzsBJ83Bd1wpTxdVy/view'),
('ES105', 'Electrical and Electronics Lab', 2, 0, 0, 4, 2, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1j6DfeY6HPzCLUYEc5Gz516p1hz3bHerl/view'),
('ES106', 'Manufacturing and Workshop Practice', 4, 2, 0, 3, 2, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1Z0Vac2RymQwptmrV2pdM-YDT2imum-Rn/view'),
('ES201', 'Introduction to Design and Innovation', 4, 2, 0, 4, 3, 0, 'Odd', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1xRHD-Jye02x3eMOdDorKdDL60uRT0I6A/view'),
('ES202', 'Introduction to Materials', 4, 3, 0, 0, 4, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1w-gPBscGYxlLEzb_fXiENa6VO9iHlnXw/view'),
('ES203', 'Digital Systems', 4, 2, 1, 3, 3, 0, 'Odd', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1n3I9UW2Zw_Fc3BuhVOQV5a8hJtJd_8ey/view'),
('ES214', 'Discrete Mathematics', 4, 3, 1, 0, 4, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1zvn8gY-h74F2h7hCh5h5LHUekASNHNko/view'),
('ES215', 'Computer Organisation & Architecture', 4, 3, 1, 0, 4, 0, 'Even', 'Core', '', 'https://drive.google.com/file/d/1YhbvUU2ZyWHL7_r-6ZMFFOgBElr5mN8J/view'),
('ES242', 'Data Structures and Algorithms-1', 3, 2, 0, 2, 3, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/17D6zJz4uXCG7Co0TPSgcQa8gfEyWZwrN/view'),
('ES301', 'Data Structures and Algorithms II', 4, 3, 1, 0, 4, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/17UNe3FZxBOebir6BnVC6nlP-QIuBLSd6/view'),
('FP100', 'Foundation Programme', 4, 0, 0, 0, 1, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1ggk6DKoDSpAcLG6ofv3wj-BPgtCLdcwG/view'),
('FP101', 'Introduction to Engineering', 1, 0, 0, 2, 2, 0, 'Even', 'Foundational Programme', '', 'https://drive.google.com/file/d/1uwWjpGkLC6jJQg3G47E4ujgWWtB3O5EX/view'),
('HS101', 'English Studies', 4, 3, 0, 0, 1, 0, 'Odd', 'Humanities', '', 'https://drive.google.com/file/d/1Tuu6-EC05aRcz0pZlkrR98P8Y0QeoXfQ/view'),
('HS102', 'Pleasures of English Studies', 4, 3, 0, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1N-YVix0iQc7ZlCYs3J3HmwtaJbJGHZM6/view'),
('HS103', 'French Studies', 4, 3, 1, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/11hUruPxzNlK34jijW8z4_bbl5LAWRCh7/view'),
('HS104', 'Foundational Sanskrit', 4, 3, 1, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1eyCFT4V-yR6RdKkJthfGJFZBseiutV3p/view'),
('HS105', 'Chinese Language &amp; Culture for Beginners', 4, 3, 0, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1WCh767qC3Uknq6U9RdrtuH524evSueLj/view'),
('HS107', 'Chinese Studies- 2', 4, 3, 0, 0, 1, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1g_z4hA6KwdDWupPl6GB6gSv5p3Jt2uUP/view'),
('HS108', 'Japan Studies', 2, 3, 0, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1zVwOCMJ1dTK4dPO691Y6fN6qA5zNYOi7/view'),
('HS151', 'Economics', 4, 3, 1, 0, 2, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1Xa2TrBa-Yo0pe8aDYjG8OlofFvAyvzoZ/view'),
('HS201', 'World Civilizations and Cultures', 4, 3, 0, 0, 4, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1e0yC2rXNBkV-xc1xEUZ7n3PMZt-ndI8Q/view'),
('HS202', 'History: Making of the Modern World', 4, 3, 1, 0, 4, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1wVXoCC-3kndwtdReZRU49OQOh68Svsa2/view'),
('HS221', 'Introduction to Philosophy', 4, 3, 0, 0, 3, 0, 'Odd', 'Humanities', '', 'https://drive.google.com/file/d/1-3g2R9WgiaSKsEB8OqM_A7N29MVYBp7N/view'),
('MA101', 'Mathematics 1: Calculus', 4, 4, 2, 0, 1, 0, '', 'Mathematics', '', 'https://drive.google.com/file/d/1oUYBGy6nAfCEe3gEr5HOw7jtC7xxR3iR/view'),
('MA102', 'Mathematics II: Linear Algebra, and Differential Equations I', 4, 3, 2, 0, 2, 0, 'Even', 'Mathematics', '', 'https://drive.google.com/file/d/1R9gkBCYqNpDJ7WDGiBmZxaQPtBZfSaqv/view'),
('MA201', 'Mathematics III: Complex Analysis, and Differential Equations II', 4, 3, 1, 0, 3, 0, 'Odd', 'Mathematics', '', 'https://drive.google.com/file/d/18aZEEYVVThDJTfcvDYknCbCwV6U8Hlzo/view'),
('MA202', 'Mathematics IV: Probability &amp; Statistics, and Numerical Methods', 4, 3, 2, 0, 4, 0, 'Even', 'Mathematics', '', 'https://drive.google.com/file/d/1DcpGZ3MEokzau4jujMzKEcSoLCmHl51B/view'),
('PE101', 'Physical Education', 0, 0, 0, 0, 1, 0, '', 'Physical Education', '', ''),
('PH101', 'Physics', 4, 3, 2, 0, 2, 0, 'Even', 'Physics', '', 'https://drive.google.com/file/d/10KTnkOyEl2N41At2km3FLajew7W3TE4y/view'),
('PH102', 'Physics Laboratory', 2, 0, 0, 4, 3, 0, 'Odd', 'Physics', '', 'https://drive.google.com/file/d/1VpE-11Gl61b0rLblEeZtUkKOXIakYxPH/view');

-- --------------------------------------------------------

--
-- Table structure for table `csefaculty`
--

CREATE TABLE `csefaculty` (
  `first_name` mediumtext NOT NULL,
  `middle_name` mediumtext NOT NULL,
  `last_name` mediumtext NOT NULL,
  `email_id` longtext NOT NULL,
  `google_scholar` longtext NOT NULL,
  `dblp_link` longtext NOT NULL,
  `personal_link` mediumtext NOT NULL,
  `image_file` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `csefaculty`
--

INSERT INTO `csefaculty` (`first_name`, `middle_name`, `last_name`, `email_id`, `google_scholar`, `dblp_link`, `personal_link`, `image_file`, `id`) VALUES
('Nipun', '', 'Batra', 'nipun.batra@iitgn.ac.in', 'https://scholar.google.co.in/citations?user=rFGzHlIAAAAJ&hl=en&oi=ao', 'https://dblp.uni-trier.de/pid/19/2128.html', 'https://nipunbatra.github.io/', 'nipun_4.jpg', 1),
('Bireswar', '', 'Das', 'bireswar@iitgn.ac.in', 'https://scholar.google.com/citations?user=RcBEsucAAAAJ&hl=en', 'https://dblp.dagstuhl.de/pid/93/3858.html', 'https://sites.google.com/site/bireswar/home', 'bireswar_das.jpg', 2),
('Anirban', '', 'Dasgupta', 'anirbandg@iitgn.ac.in', 'https://scholar.google.com/citations?user=plJC8R0AAAAJ&hl=en', 'https://dblp.uni-trier.de/pid/54/385-1.html', 'https://sites.google.com/site/anirbandasgupta', 'anirban-dasgupta.jpg', 3),
('Manoj', '', 'Gupta', 'gmanoj@iitgn.ac.in', 'https://scholar.google.com/citations?user=jt38uQ8AAAAJ&hl=en', 'https://dblp.dagstuhl.de/pid/05/5157.html', 'http://people.iitgn.ac.in/~gmanoj/', 'manoj-gupta.jpg', 4),
('Neeldhara', '', 'Misra', 'neeldhara.m@iitgn.ac.in', 'https://scholar.google.com/citations?user=XFgieDYAAAAJ&hl=en', 'https://dblp.dagstuhl.de/pid/85/6789.html', 'https://neeldhara.com/', 'neeldhara-misra.jpg', 5),
('Krishna', 'P', 'Miyapuram', 'kprasad@iitgn.ac.in', 'https://scholar.google.com/citations?user=R20YmxkAAAAJ&hl=en', '', 'https://cogs.iitgn.ac.in/team/krishna-prasad-miyapuram/', 'kp.jpg', 6),
('Shanmuganathan', '', 'Raman', 'shanmuga@iitgn.ac.in', 'https://scholar.google.com/citations?user=3YWptB8AAAAJ&hl=en', 'https://dblp.uni-trier.de/pid/70/4688.html', 'http://people.iitgn.ac.in/~shanmuga/', 'shanmuga.jpg', 7),
('Mayank', '', 'Singh', 'singh.mayank@iitgn.ac.in', '', 'https://dblp.uni-trier.de/pid/96/4770.html', 'https://mayank4490.github.io/', 'mayank.jpg', 8),
('Balagopal', '', 'Komarath', 'bkomarath@iitgn.ac.in', '', 'https://dblp.org/pid/124/2629.htmll', 'http://bkomarath.rbgo.in/', 'bk_profile.jpg', 9),
('Sameer', 'G.', 'Kulkarni', 'sameergk@iitgn.ac.in', 'https://scholar.google.com/citations?user=CnPfKYUAAAAJ&hl=en', 'https://dblp.org/pid/185/5705.html', 'https://sameergk.github.io/', 'samirsir.jpg', 10),
('Abhishek', '', 'Bichhawat', 'abhishek.b@iitgn.ac.in', 'https://scholar.google.com/citations?user=qJavKW4AAAAJ&hl=en', 'https://dblp.org/pid/61/10308.html', 'http://people.iitgn.ac.in/~abhishek/', 'abhishek.jpg', 11),
('Yogesh', 'Kumar', 'Meena', 'yk.meena@iitgn.ac.in', 'https://scholar.google.it/citations?user=5xxepFkAAAAJ&hl=en', 'https://dblp.org/pid/66/10604.html', 'http://yogeshmeena.com/', 'yogesh.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `event_description` longtext NOT NULL,
  `event_date` date NOT NULL,
  `event_venue` mediumtext NOT NULL,
  `event_link` mediumtext NOT NULL,
  `event_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_description`, `event_date`, `event_venue`, `event_link`, `event_time`) VALUES
(1, 'Advanced Networks and Telecommunications Systems(IEEE - ANTS)', 'IEEE ANTS is a premier IEEE conference on advanced networking and telecommunications topics. IEEE ANTS is financially and technically supported by IEEE Communications Society. The distinguishing characteristic of IEEE ANTS is the promotion of an intense dialogue between academic and industry to bridge the gap between academic research, industry initiatives, and governmental policies. This is fostered through panel discussions, keynotes, invited talks, and industry exhibits, where academia is exposed to state-of-the-practice and results from trials and interoperability experiments. The industry, in turn, benefits from exposure to leading-edge research as well as an opportunity to communicate and collaborate with academic researchers regarding practical problems. This year the theme is Scalable, Secure and Sustainable Connectivity for All. In addition to the myriad of topics mentioned in the list below, technical papers are invited which have special focus on enabling technologies that are aligned with the theme of the conference i.e. Scalable, Secure and Sustainable digital connectivity.\n\n', '2022-12-18', 'IIT Gandhinagar', 'https://ants2022.ieee-ants.org/', '08:00:00'),
(2, 'IndoML - 2022 (Indian Symposium on Machine Learning )', 'The Third Indian Symposium on Machine Learning (IndoML) will be hosted by the Indian Institute of Technology Gandhinagar (IITGN) between 15-17 December 2022. The symposium aims to be a forum to discuss state-of-the-art ML research through invited talks from leading experts within India and abroad. IndoML fosters mentoring of Indian Ph.D./Master students to network with their peers, seek expert guidance and develop early-stage collaborations.', '2022-12-15', 'IIT Gandhinagar', 'https://indoml.in/', '10:00:00'),
(12, 'GIAN Course on Randomised Methods in Parameterized Algorithms', 'This is a GIAN course taught by Prof. Daniel Lokshtanov (UCSB). Over the last two decades, sophisticated probabilistic techniques have been developed for a broad range of challenging computing applications. To begin with, this course will introduce the basic probabilistic techniques used in the design of randomized algorithms and in probabilistic analysis of algorithms. The course covers the basic probability theory required for working with these techniques and demonstrates their use in various computing applications, especially in the context of parameterized and approximation algorithms.', '2022-12-08', 'AB 1/101 (tentative)', 'https://randomizedalgos.netlify.app/', '10:00:00'),
(27, 'Sundar Pichai ', 'Sundar Pichai is the CEO of Alphabet Inc. and its subsidiary Google. He was born in Madurai, India, in 1972. He studied engineering at the Indian Institute of Technology Kharagpur and Stanford University. After graduating from Stanford, he worked as a management consultant at McKinsey & Company. In 2004, he joined Google as a product manager. He has held a variety of leadership positions at Google, including head of product management for Chrome and ChromeOS, and vice president of product development. In 2015, he was appointed CEO of Google.', '2123-12-12', '', 'https://bard.google.com/', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('cse@iitgn.ac.in', 'e75b7a7b75736c81ce8ea19a40d6cc72'),
('anirbandg@iitgn.ac.in', 'e182ebbc166d73366e7986813a7fc5f1'),
('yk.meena@iitgn.ac.in', 'c87fbe8e5915db5a5424ea722ad2475d'),
('singh.mayank@iitgn.ac.in', '937e9d0a26cb45c73fe4ee6ef4fcd81a'),
('mi@iitgn.ac.in', '29bfe372865737fe2bfcfd3618b1da7d');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(40) NOT NULL,
  `years` text NOT NULL,
  `title` longtext NOT NULL,
  `paper_link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `faculty_name`, `years`, `title`, `paper_link`) VALUES
(1, 'NB', '2021-01', 'Generative Fashion for Indian Clothing', 'https://dl.acm.org/doi/10.1145/3430984.3431057'),
(2, 'NB', '2020-01', 'PlantDoc: A Dataset for Visual Plant Disease Detection.', 'https://dl.acm.org/doi/10.1145/3371158.3371196'),
(3, 'NB', '2020-01', 'Active Learning for Air Quality Station Location Recommendation', 'https://dl.acm.org/doi/10.1145/3371158.3371208'),
(4, 'NB', '2020-01', 'Solar Energy Forecasting Using Machine Learning', 'https://dl.acm.org/doi/10.1145/3371158.3371212'),
(5, 'NB', '2021-04', 'Vartalaap: What Drives #AirQuality Discussions: Politics, Pollution or Pseudo-science?', 'https://dl.acm.org/doi/10.1145/3449170'),
(6, 'BD', '2021-10', 'Nearly Linear Time Isomorphism Algorithms for Some Nonabelian Group Classes', 'https://link.springer.com/article/10.1007%2Fs00224-020-10010-z'),
(7, 'BD', '2021-02', 'Compact Data Structures for Dedekind Groups and Finite Rings.', 'https://link.springer.com/chapter/10.1007%2F978-3-030-68211-8_8'),
(8, 'BD', '2020-12', 'Space efficient representations of finite groups', 'https://www.sciencedirect.com/science/article/abs/pii/S0022000020300660?via%3Dihub'),
(9, 'BD', '2020-06', 'Polynomial-time algorithm for isomorphism of graphs with clique-width at most three', 'https://www.sciencedirect.com/science/article/abs/pii/S0304397517306758?via%3Dihub'),
(10, 'BD', '2020-02', 'Space Efficient Representations of Finite Groups', 'https://arxiv.org/abs/2002.11391'),
(11, 'AD', '2021-05', 'Analyzing Topic Transitions in Text-Based Social Cascades Using Dual-Network Hawkes Process', 'https://link.springer.com/chapter/10.1007%2F978-3-030-75762-5_25'),
(12, 'AD', '2020-12', 'Streaming Coresets for Symmetric Tensor Factorization', 'http://proceedings.mlr.press/v119/chhaya20a.html'),
(13, 'AD', '2020-12', 'On Coresets for Regularized Regression', 'http://proceedings.mlr.press/v119/chhaya20b.html'),
(14, 'AD', '2020-08', 'Efficient Hierarchical Clustering for Classification and Anomaly Detection', 'https://arxiv.org/abs/2008.10828'),
(15, 'AD', '2020-10', 'On Additive Approximate Submodularity', 'https://arxiv.org/abs/2010.02912'),
(16, 'MG', '2021-04', 'Artificial Neural Networks to Solve the Singular Model with Neumann-Robin, Dirichlet and Neumann Boundary Conditions', 'https://www.mdpi.com/1424-8220/21/19/6498'),
(17, 'MG', '2021-03', 'Computational Intelligent Paradigms to Solve the Nonlinear SIR System for Spreading Infection and Treatment Using Levenberg–Marquardt Backpropagation', 'https://www.mdpi.com/2073-8994/13/4/618'),
(18, 'MG', '2021-10', 'Deep Learning for Brain Tumor Segmentation using Magnetic Resonance Images', 'https://ieeexplore.ieee.org/document/9562890'),
(19, 'MG', '2020-08', 'Future 5G Network Based Smart Hospitals: Hybrid Detection Technique for Latency Improvement', 'https://ieeexplore.ieee.org/document/9170504'),
(20, 'MG', '2020-09', 'A Stochastic Intelligent Computing with Neuro-Evolution Heuristics for Nonlinear SITR System of Novel COVID-19 Dynamics', 'https://www.mdpi.com/2073-8994/12/10/1628'),
(21, 'NM', '2021-06', 'A parameterized perspective on protecting elections', 'https://www.sciencedirect.com/science/article/abs/pii/S0304397521002656?via%3Dihub'),
(22, 'NM', '2021-01', 'Fair Division Is Hard Even for Amicable Agents', 'https://link.springer.com/chapter/10.1007%2F978-3-030-67731-2_31'),
(23, 'NM', '2021-01', 'Equitable Division of a Path', 'https://arxiv.org/abs/2101.09794'),
(24, 'NM', '2020-09', 'Special Issue “New Frontiers in Parameterized Complexity and Algorithms”: Foreward by the Guest Editors', 'https://www.mdpi.com/1999-4893/13/9/236'),
(25, 'NM', '2020-06', 'Color spanning objects: Algorithms and hardness results', 'https://www.sciencedirect.com/science/article/abs/pii/S0166218X18300738?via%3Dihub'),
(26, 'SR', '2021-06', 'DeepObjStyle: Deep Object-based Photo Style Transfer', 'https://ieeexplore.ieee.org/document/9522793'),
(27, 'SR', '2021-01', 'DeepCFL: Deep Contextual Features Learning from a Single Image', 'https://ieeexplore.ieee.org/document/9423133'),
(28, 'SR', '2021-01', 'APEX-Net: Automatic Plot Extractor Network', 'https://arxiv.org/abs/2101.06217'),
(29, 'SR', '2021-01', 'LS-HDIB: A Large Scale Handwritten Document Image Binarization Dataset', 'https://arxiv.org/abs/2101.11674'),
(30, 'SR', '2021-06', 'ShuffleBlock: Shuffle to Regularize Deep Convolutional Neural Networks', 'https://arxiv.org/abs/2106.09358'),
(31, 'MS', '2021-02', 'Augmented Convolutional LSTMs for Generation of High-Resolution Climate Change Projections', 'https://ieeexplore.ieee.org/document/9348885'),
(32, 'MS', '2021-01', 'Reverse Dictionary Using an Improved CBoW Model', 'https://dl.acm.org/doi/10.1145/3430984.3431068'),
(33, 'MS', '2021-01', 'ACL-SQL: Generating SQL Queries from Natural Language', 'https://dl.acm.org/doi/10.1145/3430984.3431046'),
(34, 'MS', '2021-01', 'Review Based Recommendations with Human-like Reasons', 'https://dl.acm.org/doi/10.1145/3430984.3431069'),
(35, 'MS', '2021-01', 'Genealogical Tree Construction of Research Paper', 'https://dl.acm.org/doi/10.1145/3430984.3431056'),
(36, 'AB', '2021-06', 'Permissive runtime information flow control in the presence of exceptions', 'https://content.iospress.com/articles/journal-of-computer-security/jcs211385'),
(37, 'AB', '2021-06', 'Automating Audit with Policy Inference', 'https://ieeexplore.ieee.org/document/9505224'),
(38, 'AB', '2021-06', 'Gradual Security Types and Gradual Guarantees', 'https://ieeexplore.ieee.org/document/9505218'),
(39, 'AB', '2020-10', 'Contextual and Granular Policy Enforcement in Database-backed Applications', 'https://dl.acm.org/doi/10.1145/3320269.3384759'),
(40, 'AB', '2020-03', 'First-order Gradual Information Flow Types with Gradual Guarantees', 'https://arxiv.org/abs/2003.12819'),
(41, 'BK', '2021-07', 'Karchmer-Wigderson Games for Hazard-free Computation', 'https://arxiv.org/abs/2107.05128'),
(42, 'BK', '2021-10', 'On the complexity of detecting hazards', 'https://www.sciencedirect.com/science/article/abs/pii/S0020019020300673?via%3Dihub'),
(43, 'BK', '2020-11', 'Graph Homomorphism Polynomials: Algorithms and Complexity', 'https://arxiv.org/abs/2011.04778'),
(44, 'BK', '2019-08', 'On the Complexity of Hazard-free Circuits', 'https://dl.acm.org/doi/10.1145/3320123'),
(45, 'BK', '2018-08', 'Comparator Circuits over Finite Bounded Posets', 'https://www.sciencedirect.com/science/article/abs/pii/S0890540118300051?via%3Dihub'),
(46, 'SGK', '2021-01', 'Assessing Container Network Interface Plugins: Functionality, Performance, and Scalability', 'https://ieeexplore.ieee.org/document/9309003'),
(47, 'SGK', '2021-11', 'Mu: An Efficient, Fair and Responsive Serverless Framework for Resource-Constrained Edge Clouds', 'https://dl.acm.org/doi/10.1145/3472883.3487014'),
(48, 'SGK', '2021-06', 'Analyzing Open-Source Serverless Platforms: Characteristics and Performance', 'https://arxiv.org/abs/2106.03601'),
(49, 'SGK', '2020-02', 'NFVnice: Dynamic Backpressure and Scheduling for NFV Service Chains', 'https://ieeexplore.ieee.org/document/9007052'),
(50, 'SGK', '2020-02', 'REINFORCE: Achieving Efficient Failure Resiliency for Network Function Virtualization-Based Services', 'https://ieeexplore.ieee.org/document/9007021'),
(52, 'KPM', '2021-12', 'Classifying Oscillatory Brain Activity Associated With Indian Rasas Using Network Metrics', 'https://assets.researchsquare.com/files/rs-1156636/v1_covered.pdf?c=1640026660'),
(53, 'KPM', '2021-12', 'Risk prediction of prodromal Alzheimer’s disease using deep learning of MRI scans', 'https://alz-journals.onlinelibrary.wiley.com/doi/abs/10.1002/alz.054803'),
(54, 'KPM', '2021-09', ' A Novel Approach Towards Early Detection of Alzheimer’s Disease Using Deep Learning on Magnetic Resonance Images', 'https://link.springer.com/chapter/10.1007/978-3-030-86993-9_43'),
(55, 'KPM', '2021-09', 'Brain Connectivity Based Classification of Meditation Expertise', 'https://link.springer.com/chapter/10.1007/978-3-030-86993-9_9'),
(56, 'KPM', '2021-09', 'Movie Identification from Electroencephalography Response Using Convolutional Neural Network', 'https://link.springer.com/chapter/10.1007/978-3-030-86993-9_25');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE `staff_details` (
  `id` int(11) NOT NULL,
  `staff_Name` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `personal_link` longtext NOT NULL,
  `staff_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`id`, `staff_Name`, `email_id`, `personal_link`, `staff_image`) VALUES
(2, 'Raviraj Sukhadiya', 'raviraj.s@iitgn.ac.in', '', 'RavirajSukhadiya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `student_Name` longtext NOT NULL,
  `personal_link` longtext NOT NULL,
  `student_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_Name`, `personal_link`, `student_image`) VALUES
(23, 'Rachit Chaya', 'https://sites.google.com/view/rachitchhaya/', 'rachit.jpg'),
(24, 'Tom Glint Issac', 'https://sites.google.com/view/tomglint', 'tom.jpg'),
(25, 'Pankaj Pandey', 'https://pandey-pankaj.github.io/', 'pankaj.jpg'),
(26, 'Akash Pareek', '', 'akash.jpeg'),
(27, 'Anant Kumar ', 'https://sites.google.com/iitgn.ac.in/anant-kumar/home', 'anant.jpeg'),
(28, 'Shruti Singh ', 'https://shruti-singh.github.io/', 'shruti.jpg'),
(29, 'Rishiraj Adhikary ', 'https://rishi-a.github.io/', 'rishi.jpg'),
(30, 'Shriraj Sawant', 'https://www.linkedin.com/in/shriraj-aka-sr13/', 'shriraj.jfif'),
(31, 'Aditi Sethia', 'https://sites.google.com/iitgn.ac.in/aditi-sethia', 'aditi.jpg'),
(32, 'Dhara Thakkar', 'https://sites.google.com/iitgn.ac.in/dharathakkar', 'dhara.jpg'),
(33, 'Jayesh Malaviya', 'https://www.linkedin.com/in/jayeshmalaviya/', 'jayesh.jpg'),
(34, 'Zeel B. Patel', 'https://patel-zeel.github.io/', 'zeel.jpg'),
(35, 'Susmita Mondal', 'https://www.linkedin.com/in/susmita-mondal-378949143', 'susmita.jpg'),
(36, 'Harshil Mittal', '', 'harshil.jpg'),
(37, 'Dipan Dey', '', 'dipan.jpg'),
(38, 'Gayatri Priyadarshini', 'https://www.linkedin.com/in/gayatri-priyadarsini-22638b193', 'gaytri.jpg'),
(39, 'Shrutimoy Das', 'https://sites.google.com/iitgn.ac.in/shrutimoy', 'shrutimoy.jpg'),
(40, 'Jinia Ghosh', '', 'Jinia.jpg'),
(41, 'Himanshu Beniwal', 'http://himanshubeniwal.tech/', 'himanshu.jpg'),
(42, 'Pritam Kadasi', 'https://pskadasi.github.io/', 'pritam.jpg'),
(43, 'Binita Maity', 'https://www.linkedin.com/in/binita-maity-212746175', 'binita.jpg'),
(44, 'Sarth Dubey', 'https://dubeysarth.github.io/About/', 'SarthDubey.jpg'),
(45, 'Prajwal Singh', 'https://prajwalsingh.github.io/', 'prajwal.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `csefaculty`
--
ALTER TABLE `csefaculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_details`
--
ALTER TABLE `staff_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `csefaculty`
--
ALTER TABLE `csefaculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
