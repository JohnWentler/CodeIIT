-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 12:48 PM
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
  `course_description` varchar(500) NOT NULL,
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

INSERT INTO `courses` (`course_code`, `course_name`, `course_description`, `Credits`, `L`, `T`, `P`, `preferred_sem_btech`, `preferred_sem_mtech`, `offered_in`, `type`, `area`, `course_link`) VALUES
('BE101', 'Introduction to Life Sciences: Fundamentals of Life', 'This course provides an introduction to the major concepts of life sciences, including the structure and function of cells, the chemistry of life, genetics, evolution, and ecology.', 4, 3, 1, 0, 1, 0, ' ', 'Biological Engineering', ' ', 'https://drive.google.com/file/d/1Nuo7yDokvHluMX6W8p_zoxrqUmm3KK7R/view'),
('CH201', 'General Chemistry', 'level chemistry course that covers the basic concepts of chemistry, including atomic structure and bonding, chemical reactions, and solutions. Other topics covered include gases, thermodynamics, kinetics and equilibrium, redox, and chemistry of the elements.', 4, 3, 0, 0, 3, 0, 'Odd', 'Chemistry', ' ', 'https://drive.google.com/file/d/1lsCncMdQPALalCIqPc9OaDVaB43P1b6x/view'),
('CH202', 'Chemistry Laboratory', '', 2, 0, 0, 4, 2, 0, 'Even', 'Chemistry', '', 'https://drive.google.com/file/d/1UDC8aBe53lQb96kPQcnd64l6Vx_8Mgve/view'),
('CS301', 'Operating Systems', '', 5, 3, 0, 2, 5, 0, 'Odd', 'Core', 'Operating Systems ', 'https://drive.google.com/file/d/1H3b6c4FP1ZAlfG1siWw8DdO5AahX5xOU/view'),
('CS302', 'Theory of Computation', '', 4, 3, 1, 0, 5, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/17RKXWVo7KQS8ZlsvEkxVmuXpmGFXv8gh/view'),
('CS327', 'Compilers', '', 5, 3, 0, 2, 5, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/1fu3uMOavsHrhcQlwIGFxoBsaMit6UE4j/view'),
('CS328', 'Introduction to Data Science', '', 4, 3, 1, 0, 5, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/1aLtAqnC8YvsWS7hbSn9kp67tg82_ywgS/view'),
('CS422', 'Data Mining ', '', 4, 3, 0, 0, 0, 0, 'Even', 'Core', 'Data Science', 'https://drive.google.com/file/d/15c2pz8ufHYHG2TghTehTWN4e8veODelv/view'),
('CS425', 'Introduction to Computational Complexity Theory', '', 4, 3, 0, 0, 0, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/1jwVATHbTJsTQJsdp2oLEzrMIm7tWdiWX/view'),
('CS428', 'Introduction to Applied Crytography', '', 4, 3, 0, 0, 0, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1GICC1xeFTXxPUh4T5INmYQM7c8S9CeGN/view'),
('CS431', 'Computer and Network Security', '', 4, 3, 0, 0, 0, 0, 'Even', '', '', 'https://drive.google.com/file/d/16rsyxxlLT0HS_kB12XxbZqdwoyiU5UNT/view'),
('CS432', 'Databases', '', 4, 3, 0, 0, 0, 0, 'Even', '', '', 'https://drive.google.com/file/d/1M3xpKvRfyStzGb1UD60ml9lKxjOimgH8/view'),
('CS433', 'Computer Networks', '', 4, 3, 0, 0, 0, 0, 'Even', '', '', 'https://drive.google.com/file/d/1cEh7mN9uaw4p9Yq0N7HWxVCAMgZPYo-F/view'),
('CS603', 'Computational Photography', '', 4, 3, 0, 0, 7, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1o9ijeai-MFbXA_iIK2YfdN-YFBol56xt/view'),
('CS606', 'Advanced Topics in Cryptology', '', 4, 3, 0, 0, 0, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1HRecGHyVVFR2DwmqcyRlEnQfxfmgROvN/view'),
('CS607', 'Combinatorics with Applications in Computer Science', '', 4, 3, 0, 0, 0, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1IxVEoCJevPkYO2f_UGb35u9Lxdka2fKY/view'),
('CS609', 'Advanced Data Structures', '', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/11AUS9wnuLaBtztqc4DT2RaYEcFYATjbW/view'),
('CS610', 'Algorithms', '', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/1IZjF3SfbiTMEafzlFXnX-vbVm4oGJG8Z/view'),
('CS612', 'Computer Systems', '', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/1Kb4o88AZDYcdu96VuIRVreJmWhkKrpkF/view'),
('CS613', 'Natural Language Processing', '', 4, 3, 0, 0, 0, 1, 'Odd', '', '', 'https://drive.google.com/file/d/14iwtwyUsysTyJvdMCYkG0vG4_yrBt6Bj/view'),
('CS614', 'Advanced Algorithms', '', 4, 3, 0, 0, 0, 2, 'Even', '', '', 'https://drive.google.com/file/d/1D9TG-OC2gSSeLWgAIPboa-AUCWRyxJ7z/view'),
('CS615', 'Advanced Computer Networks', '', 4, 3, 0, 0, 0, 2, 'Even', '', '', 'https://drive.google.com/file/d/1MbUtrdKTuTxGLI_ZxtEDKPX4lalOrNXi/view'),
('CS616', 'Parallel and Distributed Systems', '', 5, 3, 0, 2, 0, 2, 'Even', 'Core', '', 'https://docs.google.com/document/d/1CEUtgi8Lqm7E-fhltD4EKk0jJwqIZK8c/edit'),
('ES101', 'Engineering Graphics', '', 3, 2, 0, 3, 1, 0, '', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1RJr0g6hzjyUDuOUB3WSKoKa9X-PJIIt4/view'),
('ES102', 'Introduction To Computing', '', 3, 2, 0, 2, 1, 0, '', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1aAEy8XbrhKobhnOKpDbakKKkSkcVLbW1/view'),
('ES103', 'Introduction To Electrical Systems', '', 4, 3, 1, 0, 1, 0, '', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1Q-ka8pH6ZQkmH3zZtoPKGGQKPVTirc2I/view'),
('ES104', 'Introduction to Analog and Digital Electronics', '', 4, 3, 2, 0, 2, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1duJxP6cdDzwGcZWdzsBJ83Bd1wpTxdVy/view'),
('ES105', 'Electrical and Electronics Lab', '', 2, 0, 0, 4, 2, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1j6DfeY6HPzCLUYEc5Gz516p1hz3bHerl/view'),
('ES106', 'Manufacturing and Workshop Practice', '', 4, 2, 0, 3, 2, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1Z0Vac2RymQwptmrV2pdM-YDT2imum-Rn/view'),
('ES201', 'Introduction to Design and Innovation', '', 4, 2, 0, 4, 3, 0, 'Odd', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1xRHD-Jye02x3eMOdDorKdDL60uRT0I6A/view'),
('ES202', 'Introduction to Materials', '', 4, 3, 0, 0, 4, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1w-gPBscGYxlLEzb_fXiENa6VO9iHlnXw/view'),
('ES203', 'Digital Systems', '', 4, 2, 1, 3, 3, 0, 'Odd', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1n3I9UW2Zw_Fc3BuhVOQV5a8hJtJd_8ey/view'),
('ES214', 'Discrete Mathematics', '', 4, 3, 1, 0, 4, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/1zvn8gY-h74F2h7hCh5h5LHUekASNHNko/view'),
('ES215', 'Computer Organisation & Architecture', '', 4, 3, 1, 0, 4, 0, 'Even', 'Core', '', 'https://drive.google.com/file/d/1YhbvUU2ZyWHL7_r-6ZMFFOgBElr5mN8J/view'),
('ES242', 'Data Structures and Algorithms-1', '', 3, 2, 0, 2, 3, 0, 'Odd', 'Core', '', 'https://drive.google.com/file/d/17D6zJz4uXCG7Co0TPSgcQa8gfEyWZwrN/view'),
('ES301', 'Data Structures and Algorithms II', '', 4, 3, 1, 0, 4, 0, 'Even', 'Basic Science Engineering', '', 'https://drive.google.com/file/d/17UNe3FZxBOebir6BnVC6nlP-QIuBLSd6/view'),
('FP100', 'Foundation Programme', '', 4, 0, 0, 0, 1, 0, 'Odd', '', '', 'https://drive.google.com/file/d/1ggk6DKoDSpAcLG6ofv3wj-BPgtCLdcwG/view'),
('FP101', 'Introduction to Engineering', '', 1, 0, 0, 2, 2, 0, 'Even', 'Foundational Programme', '', 'https://drive.google.com/file/d/1uwWjpGkLC6jJQg3G47E4ujgWWtB3O5EX/view'),
('HS101', 'English Studies', '', 4, 3, 0, 0, 1, 0, 'Odd', 'Humanities', '', 'https://drive.google.com/file/d/1Tuu6-EC05aRcz0pZlkrR98P8Y0QeoXfQ/view'),
('HS102', 'Pleasures of English Studies', '', 4, 3, 0, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1N-YVix0iQc7ZlCYs3J3HmwtaJbJGHZM6/view'),
('HS103', 'French Studies', '', 4, 3, 1, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/11hUruPxzNlK34jijW8z4_bbl5LAWRCh7/view'),
('HS104', 'Foundational Sanskrit', '', 4, 3, 1, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1eyCFT4V-yR6RdKkJthfGJFZBseiutV3p/view'),
('HS105', 'Chinese Language &amp; Culture for Beginners', '', 4, 3, 0, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1WCh767qC3Uknq6U9RdrtuH524evSueLj/view'),
('HS107', 'Chinese Studies- 2', '', 4, 3, 0, 0, 1, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1g_z4hA6KwdDWupPl6GB6gSv5p3Jt2uUP/view'),
('HS108', 'Japan Studies', '', 2, 3, 0, 0, 1, 0, '', 'Humanities', '', 'https://drive.google.com/file/d/1zVwOCMJ1dTK4dPO691Y6fN6qA5zNYOi7/view'),
('HS151', 'Economics', '', 4, 3, 1, 0, 2, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1Xa2TrBa-Yo0pe8aDYjG8OlofFvAyvzoZ/view'),
('HS201', 'World Civilizations and Cultures', '', 4, 3, 0, 0, 4, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1e0yC2rXNBkV-xc1xEUZ7n3PMZt-ndI8Q/view'),
('HS202', 'History: Making of the Modern World', '', 4, 3, 1, 0, 4, 0, 'Even', 'Humanities', '', 'https://drive.google.com/file/d/1wVXoCC-3kndwtdReZRU49OQOh68Svsa2/view'),
('HS221', 'Introduction to Philosophy', '', 4, 3, 0, 0, 3, 0, 'Odd', 'Humanities', '', 'https://drive.google.com/file/d/1-3g2R9WgiaSKsEB8OqM_A7N29MVYBp7N/view'),
('MA101', 'Mathematics 1: Calculus', '', 4, 4, 2, 0, 1, 0, '', 'Mathematics', '', 'https://drive.google.com/file/d/1oUYBGy6nAfCEe3gEr5HOw7jtC7xxR3iR/view'),
('MA102', 'Mathematics II: Linear Algebra, and Differential Equations I', '', 4, 3, 2, 0, 2, 0, 'Even', 'Mathematics', '', 'https://drive.google.com/file/d/1R9gkBCYqNpDJ7WDGiBmZxaQPtBZfSaqv/view'),
('MA201', 'Mathematics III: Complex Analysis, and Differential Equations II', '', 4, 3, 1, 0, 3, 0, 'Odd', 'Mathematics', '', 'https://drive.google.com/file/d/18aZEEYVVThDJTfcvDYknCbCwV6U8Hlzo/view'),
('MA202', 'Mathematics IV: Probability &amp; Statistics, and Numerical Methods', '', 4, 3, 2, 0, 4, 0, 'Even', 'Mathematics', '', 'https://drive.google.com/file/d/1DcpGZ3MEokzau4jujMzKEcSoLCmHl51B/view'),
('PE101', 'Physical Education', '', 0, 0, 0, 0, 1, 0, '', 'Physical Education', '', ''),
('PH101', 'Physics', '', 4, 3, 2, 0, 2, 0, 'Even', 'Physics', '', 'https://drive.google.com/file/d/10KTnkOyEl2N41At2km3FLajew7W3TE4y/view'),
('PH102', 'Physics Laboratory', '', 2, 0, 0, 4, 3, 0, 'Odd', 'Physics', '', 'https://drive.google.com/file/d/1VpE-11Gl61b0rLblEeZtUkKOXIakYxPH/view');

-- --------------------------------------------------------

--
-- Table structure for table `csefaculty`
--

CREATE TABLE `csefaculty` (
  `full_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
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

INSERT INTO `csefaculty` (`full_name`, `designation`, `email_id`, `google_scholar`, `dblp_link`, `personal_link`, `image_file`, `id`) VALUES
('dnajkedieac', 'kjnsaiuciabbc', 'kjsdaiudawaskjndiua', 'j', 'hiug', 'buyg', 'neeldhara-misra.jpg', 0),
('Nipun Batra', 'Assistant Professor', 'nipun.batra@iitgn.ac.in', 'https://scholar.google.co.in/citations?user=rFGzHlIAAAAJ&hl=en&oi=ao', 'https://dblp.uni-trier.de/pid/19/2128.html', 'https://nipunbatra.github.io/', 'nipun_4.jpg', 1),
('Bireswar Das ', 'Associate Professor', ' bireswar@iitgn.ac.in', ' https://scholar.google.co.in/citations?hl=en&user=RcBEsucAAAAJ', ' https://dblp.uni-trier.de/pid/93/3858.html', 'https://sites.google.com/site/bireswar/', 'bireswar_das.jpg', 2),
('Anirban  Dasgupta  ', 'Chair Professor', 'anirbandg@iitgn.ac.in', 'https://scholar.google.com/citations?user=plJC8R0AAAAJ&hl=en', 'https://dblp.uni-trier.de/pid/54/385-1.html', 'https://sites.google.com/site/anirbandasgupta', 'anirban-dasgupta.jpg', 3),
('Manoj Gupta', 'Assistant Professor', 'gmanoj@iitgn.ac.in', 'https://scholar.google.com/citations?user=jt38uQ8AAAAJ&hl=en', 'https://dblp.dagstuhl.de/pid/05/5157.html', 'http://people.iitgn.ac.in/~gmanoj/', 'manoj-gupta.jpg', 4),
('Neeldhara Misra', 'Associate Professor', 'neeldhara.m@iitgn.ac.in', 'https://scholar.google.com/citations?user=XFgieDYAAAAJ&hl=en', 'https://dblp.dagstuhl.de/pid/85/6789.html', 'https://neeldhara.com/', 'neeldhara-misra.jpg', 5),
('Krishna P  Miyapuram', 'Associate Professor', 'kprasad@iitgn.ac.in', 'https://scholar.google.co.in/citations?hl=en&user=R20YmxkAAAAJ', 'https://dblp.uni-trier.de/pid/00/4508.html', 'http://cogs.iitgn.ac.in/member/krishna-prasad-miyapuram/', 'kpm.jpg', 6),
('Shanmuganathan Raman', 'Chair Associate Professor', 'shanmuga@iitgn.ac.in', 'https://scholar.google.com/citations?user=3YWptB8AAAAJ&hl=en', 'https://dblp.uni-trier.de/pid/70/4688.html', 'http://people.iitgn.ac.in/~shanmuga/', 'shanmuga.jpg', 7),
('Mayank Singh', 'Assistant Professor', 'singh.mayank@iitgn.ac.in', 'https://scholar.google.com/citations?user=U2NUj90AAAAJ&hl=en&oi=ao', 'https://dblp.uni-trier.de/pid/96/4770.html', 'https://mayank4490.github.io/', 'mayank.jpg', 8),
('Balagopal Komarath', 'Assistant Professor', 'bkomarath@iitgn.ac.in', 'https://scholar.google.com/citations?user=uTv7Dl4AAAAJ&hl=en&oi=ao', 'https://dblp.org/pid/124/2629.htmll', 'http://bkomarath.rbgo.in/', 'bk_profile.jpg', 9),
('Sameer G. Kulkarni', ' Assistant Professor', 'sameergk@iitgn.ac.in', 'https://scholar.google.com/citations?user=CnPfKYUAAAAJ&hl=en', 'https://dblp.org/pid/185/5705.html', 'https://sameergk.github.io/', 'samirsir.jpg', 10),
('Abhishek Bichhawat ', 'Assistant Professor', 'abhishek.b@iitgn.ac.in', 'https://scholar.google.com/citations?user=qJavKW4AAAAJ&hl=en', 'https://dblp.org/pid/61/10308.html', 'http://people.iitgn.ac.in/~abhishek/', 'abhishek.jpg', 11),
('Yogesh Kumar Meena ', 'Assistant Professor', 'yk.meena@iitgn.ac.in', 'https://scholar.google.it/citations?user=5xxepFkAAAAJ&hl=en', 'https://dblp.org/pid/66/10604.html', 'http://yogeshmeena.com/', 'yogesh.jpg', 12),
('Shouvick Mondal', 'Assistant Professor', 'shouvick.mondal@iitgn.ac.in', ' ', ' ', 'https://sites.google.com/view/shouvick', 'shouvik2.jpg', 13),
('Rajat Moona', 'Professor', 'moona@iitgn.ac.in', ' ', '  ', ' ', 'rajat-moona.jpg', 14);

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
(1, 'Advanced Networks and Telecommunications Systems(IEEE - ANTS)', 'IEEE ANTS is a premier IEEE conference on advanced networking and telecommunications topics. IEEE ANTS is financially and technically supported by IEEE Communications Society. The distinguishing characteristic of IEEE ANTS is the promotion of an intense dialogue between academic and industry to bridge the gap between academic research, industry initiatives, and governmental policies. This is fostered through panel discussions, keynotes, invited talks, and industry exhibits, where academia is exposed to state-of-the-practice and results from trials and interoperability experiments. The industry, in turn, benefits from exposure to leading-edge research as well as an opportunity to communicate and collaborate with academic researchers regarding practical problems. This year the theme is Scalable, Secure and Sustainable Connectivity for All. In addition to the myriad of topics mentioned in the list below, technical papers are invited which have special focus on enabling technologies that are aligned with the theme of the conference i.e. Scalable, Secure and Sustainable digital connectivity.', '2022-12-18', 'IIT Gandhinagar', 'https://ants2022.ieee-ants.org/', '08:00:00'),
(2, 'IndoML - 2022 (Indian Symposium on Machine Learning )', 'The Third Indian Symposium on Machine Learning (IndoML) will be hosted by the Indian Institute of Technology Gandhinagar (IITGN) between 15-17 December 2022. The symposium aims to be a forum to discuss state-of-the-art ML research through invited talks from leading experts within India and abroad. IndoML fosters mentoring of Indian Ph.D./Master students to network with their peers, seek expert guidance and develop early-stage collaborations.', '2022-12-15', 'IIT Gandhinagar', 'https://indoml.in/', '10:00:00'),
(12, 'GIAN Course on Randomised Methods in Parameterized Algorithms', 'This is a GIAN course taught by Prof. Daniel Lokshtanov (UCSB). Over the last two decades, sophisticated probabilistic techniques have been developed for a broad range of challenging computing applications. To begin with, this course will introduce the basic probabilistic techniques used in the design of randomized algorithms and in probabilistic analysis of algorithms. The course covers the basic probability theory required for working with these techniques and demonstrates their use in various computing applications, especially in the context of parameterized and approximation algorithms.', '2022-12-08', 'AB 1/101 (tentative)', 'https://randomizedalgos.netlify.app/', '10:00:00'),
(28, '2095 Future A.I. New Delhi', 'The future of AI is a topic of much speculation and debate. Some experts believe that AI will eventually surpass human intelligence, while others believe that AI will always be limited by its programming. However, there is no doubt that AI is rapidly evolving and becoming more sophisticated.Here are some of the ways in which AI is expected to change the world in the near future:Self-driving cars: Self-driving cars are already being tested on public roads, and they are expected to become a reality in the next few years. Self-driving cars will have a major impact on transportation, reducing traffic congestion and improving safety.Virtual assistants: Virtual assistants like Amazon Alexa and Google Assistant are becoming increasingly popular. These assistants can help with tasks such as setting alarms, playing music, and controlling smart home devices.Medical diagnosis: AI is already being used to diagnose diseases more accurately and efficiently than humans. In the future, AI is expected to play an even greater role in healthcare, helping to develop new treatments and improve patient outcomes.Education: AI is being used to create personalized learning experiences for students. In the future, AI is expected to revolutionize education, making it more accessible and effective for everyone.Creativity: AI is already being used to create art, music, and literature. In the future, AI is expected to become even more creative, helping humans to explore new ideas and possibilities.These are just a few of the ways in which AI is expected to change the world in the near future. As AI continues to evolve, it is likely to have an even greater impact on our lives.Here are some of the potential benefits of AI:Increased productivity: AI can automate many tasks that are currently done by humans, freeing up time for people to focus on more creative and strategic work.Improved decision-making: AI can analyze large amounts of data to identify patterns and trends that humans may miss. This can help businesses make better decisions about everything from product development to marketing campaigns.Enhanced customer service: AI can be used to provide 24/7 customer support that is both efficient and personalized. This can help businesses improve customer satisfaction and loyalty.Improved safety: AI can be used to detect and prevent accidents, improve traffic flow, and protect people from harm.', '2095-01-01', ' ', 'https://futureai.guru/', '00:00:00');

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
('abhishek.b@iitgn.ac.in', 'b86fc6b051f63d73de262d4c34e3a0a9'),
('nipun.batra@iitgn.ac.in', 'f0e830424544178301073a09bf236472'),
('singh.mayank@iitgn.ac.in', '937e9d0a26cb45c73fe4ee6ef4fcd81a'),
('mi@iitgn.ac.in', '29bfe372865737fe2bfcfd3618b1da7d');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(40) NOT NULL,
  `email_id` longtext NOT NULL,
  `about` varchar(9000) NOT NULL,
  `years` text NOT NULL,
  `title` longtext NOT NULL,
  `paper_link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `faculty_name`, `email_id`, `about`, `years`, `title`, `paper_link`) VALUES
(0, 'Maharshi Panchal', '', ' 1  1  1 Rajat Moona is the current Director of the Indian Institute of Technology Gandhinagar (IITGN). He has been in this position since October 2022. Prior to joining IITGN, he was the Director of IIT Bhilai and the Director General of the Centre for Development of Advanced Computing (C-DAC). He is also a faculty member in the department of Computer Science and Engineering at IIT Kanpur.', '2023-06', 'ksjacnijasncjida', 'https://bard.google.com/'),
(1, 'Nipun Batra', 'nipun.batra@iitgn.ac.in', 'Nipun’s work sits at the intersection of machine learning and ubiquitous computing, for critical domains such as energy consumption, healthcare, and air quality. He summarises his work as scalable sensing, where looks at different perspectives such as:      Lowering sensing cost by retrofitting everyday objects     Active learning     Transfer learning', '2023-06', 'Generative Fashion for Indian Clothing', 'https://dl.acm.org/doi/10.1145/3430984.3431057'),
(2, 'Nipun Batra', 'nipun.batra@iitgn.ac.in', '', '', 'PlantDoc: A Dataset for Visual Plant Disease Detection.', 'https://dl.acm.org/doi/10.1145/3371158.3371196'),
(3, 'Nipun Batra', 'nipun.batra@iitgn.ac.in', '', '2020-01', 'Active Learning for Air Quality Station Location Recommendation', 'https://dl.acm.org/doi/10.1145/3371158.3371208'),
(4, 'Nipun Batra', 'nipun.batra@iitgn.ac.in', '', '2020-01', 'Solar Energy Forecasting Using Machine Learning', 'https://dl.acm.org/doi/10.1145/3371158.3371212'),
(5, 'Nipun Batra', 'nipun.batra@iitgn.ac.in', '', '2021-04', 'Vartalaap: What Drives #AirQuality Discussions: Politics, Pollution or Pseudo-science?', 'https://dl.acm.org/doi/10.1145/3449170'),
(6, 'Bireswar Das', 'bireswar@iitgn.ac.in', 'Bireswar s research interests are in Algorithms for Algebraic and Combinatorial Problems and Computational Complexity Theory.', '2021-10', 'Nearly Linear Time Isomorphism Algorithms for Some Nonabelian Group Classes', 'https://link.springer.com/article/10.1007%2Fs00224-020-10010-z'),
(7, 'Bireswar Das', 'bireswar@iitgn.ac.in', '', '2021-02', 'Compact Data Structures for Dedekind Groups and Finite Rings.', 'https://link.springer.com/chapter/10.1007%2F978-3-030-68211-8_8'),
(8, 'Bireswar Das', 'bireswar@iitgn.ac.in', '', '2020-12', 'Space efficient representations of finite groups', 'https://www.sciencedirect.com/science/article/abs/pii/S0022000020300660?via%3Dihub'),
(9, 'Bireswar Das ', 'bireswar@iitgn.ac.in', '', '', 'Polynomial-time algorithm for isomorphism of graphs with clique-width at most three', 'https://www.sciencedirect.com/science/article/abs/pii/S0304397517306758?via%3Dihub'),
(10, 'Bireswar Das', 'bireswar@iitgn.ac.in', '', '2020-02', 'Space Efficient Representations of Finite Groups', 'https://arxiv.org/abs/2002.11391'),
(11, 'Anirban Dasgupta', 'anirbandg@iitgn.ac.in', ' Anirban works on algorithmic problems for massive data sets, large scale machine learning, analysis of large social networks, and randomized algorithms in general. He is also interested in problems related to quantitative social sciences.', '2021-05', 'Analyzing Topic Transitions in Text-Based Social Cascades Using Dual-Network Hawkes Process', 'https://link.springer.com/chapter/10.1007%2F978-3-030-75762-5_25'),
(12, 'Anirban Dasgupta', 'anirbandg@iitgn.ac.in', '', '2020-12', 'Streaming Coresets for Symmetric Tensor Factorization', 'http://proceedings.mlr.press/v119/chhaya20a.html'),
(13, 'Anirban Dasgupta', 'anirbandg@iitgn.ac.in', '', '2020-12', 'On Coresets for Regularized Regression', 'http://proceedings.mlr.press/v119/chhaya20b.html'),
(14, 'Anirban Dasgupta', 'anirbandg@iitgn.ac.in', '', '2020-08', 'Efficient Hierarchical Clustering for Classification and Anomaly Detection', 'https://arxiv.org/abs/2008.10828'),
(15, 'Anirban Dasgupta', 'anirbandg@iitgn.ac.in', '', '2020-10', 'On Additive Approximate Submodularity', 'https://arxiv.org/abs/2010.02912'),
(16, 'Manoj Gupta', 'gmanoj@iitgn.ac.in', 'Manoj s works span various aspects of Graph Algorithms. We have a reasonably good understanding of efficiently finding properties of a graph like a radius, shortest paths, minimum spanning tree in a static graph. But there are other algorithmic models in which it is unclear how to find or maintain these properties. Some of these models are Dynamic Graphs, Fault-Tolerant Graphs, Graphs in the streaming setting, etc. Manoj works on graph problems in these models. Apart from this, he also likes to explore fundamental data structure problems.', '2021-04', 'Artificial Neural Networks to Solve the Singular Model with Neumann-Robin, Dirichlet and Neumann Boundary Conditions', 'https://www.mdpi.com/1424-8220/21/19/6498'),
(17, 'Manoj Gupta', 'gmanoj@iitgn.ac.in', '', '2021-03', 'Computational Intelligent Paradigms to Solve the Nonlinear SIR System for Spreading Infection and Treatment Using Levenberg–Marquardt Backpropagation', 'https://www.mdpi.com/2073-8994/13/4/618'),
(18, 'Manoj Gupta', 'gmanoj@iitgn.ac.in', '', '2021-10', 'Deep Learning for Brain Tumor Segmentation using Magnetic Resonance Images', 'https://ieeexplore.ieee.org/document/9562890'),
(19, 'Manoj Gupta', 'gmanoj@iitgn.ac.in', '', '2020-08', 'Future 5G Network Based Smart Hospitals: Hybrid Detection Technique for Latency Improvement', 'https://ieeexplore.ieee.org/document/9170504'),
(20, 'Manoj Gupta', 'gmanoj@iitgn.ac.in', '', '2020-09', 'A Stochastic Intelligent Computing with Neuro-Evolution Heuristics for Nonlinear SITR System of Novel COVID-19 Dynamics', 'https://www.mdpi.com/2073-8994/12/10/1628'),
(21, 'Neeldhara Misra\n', 'neeldhara.m@iitgn.ac.in', 'Neeldharas research interests include the interplay of structural graph theory and graph algorithms; tools and techniques in parameterized complexity; computational perspectives on combinatorial games; voting mechanisms, with a special focus on strategic behaviour; fair allocations of resources. She is also keen on understanding means of bringing computational thinking to school education, and using visual tools and narratives for exposition in general. She offers a course on introductory competitive programming on the NPTEL platform.', '2021-06', 'A parameterized perspective on protecting elections', 'https://www.sciencedirect.com/science/article/abs/pii/S0304397521002656?via%3Dihub'),
(22, 'Neeldhara Misra\n', 'neeldhara.m@iitgn.ac.in', '', '2021-01', 'Fair Division Is Hard Even for Amicable Agents', 'https://link.springer.com/chapter/10.1007%2F978-3-030-67731-2_31'),
(23, 'Neeldhara Misra\n', 'neeldhara.m@iitgn.ac.in', '', '2021-01', 'Equitable Division of a Path', 'https://arxiv.org/abs/2101.09794'),
(24, 'Neeldhara Misra\n', 'neeldhara.m@iitgn.ac.in', '', '2020-09', 'Special Issue “New Frontiers in Parameterized Complexity and Algorithms”: Foreward by the Guest Editors', 'https://www.mdpi.com/1999-4893/13/9/236'),
(25, 'Neeldhara Misra\n', 'neeldhara.m@iitgn.ac.in', '', '2020-06', 'Color spanning objects: Algorithms and hardness results', 'https://www.sciencedirect.com/science/article/abs/pii/S0166218X18300738?via%3Dihub'),
(26, 'Shanmuganathan Raman', 'shanmuga@iitgn.ac.in', 'Shanmuganathan Raman (Shanmuga) obtained his MTech (Biomedical Engineering) and PhD (Electrical Engineering) degrees from IIT Bombay. He is currently serving as an Associate Professor in Electrical Engineering jointly with Computer Science and Engineering at IIT Gandhinagar. His research interests include Computer Vision, Deep Learning, and Computer Graphics.  Shanmuga was a recipient of the Microsoft Research India PhD Fellowship for the year 2007. He obtained an Excellence in PhD Thesis Work Award at IIT Bombay in 2012. He has published more than 80 peer-reviewed articles in journals and conferences of repute in the areas of Computer Vision and Signal Processing including ICCV, CVPR, ECCV, WACV, ICASSP, ICIP, ICVGIP, IEEE Transactions on Signal Processing, IEEE Transactions on Pattern Analysis and Machine Intelligence, IEEE Signal Processing Letters, and Pattern Recognition. He is the recipient of several sponsored research projects as PI including SERB Core Research Grant, SERB IMPRINT-2, ISRO RESPOND, and SERB MATRICS. He was the course coordinator for 3D Digitization for Cultural Heritage at IIT Gandhinagar which inaugurated the GIAN program across India. He has also received the Jibaben Patel Chair in AI (2020) and Excellence in Research Award (2021) at IIT Gandhinagar.  Shanmuga is an avid reader and has served as a member of the Senate Library Committee. He is an enthusiastic instructor who has been teaching a wide spectrum of courses in Electrical Engineering and Computer Science and Engineering. He works towards making even the most complex concepts accessible to every student in the classroom.', '2021-06', 'DeepObjStyle: Deep Object-based Photo Style Transfer', 'https://ieeexplore.ieee.org/document/9522793'),
(27, 'Shanmuganathan Raman', 'shanmuga@iitgn.ac.in', '', '2021-01', 'DeepCFL: Deep Contextual Features Learning from a Single Image', 'https://ieeexplore.ieee.org/document/9423133'),
(28, 'Shanmuganathan Raman', 'shanmuga@iitgn.ac.in', '', '2021-01', 'APEX-Net: Automatic Plot Extractor Network', 'https://arxiv.org/abs/2101.06217'),
(29, 'Shanmuganathan Raman', 'shanmuga@iitgn.ac.in', '', '2021-01', 'LS-HDIB: A Large Scale Handwritten Document Image Binarization Dataset', 'https://arxiv.org/abs/2101.11674'),
(30, 'Shanmuganathan Raman', 'shanmuga@iitgn.ac.in', '', '2021-06', 'ShuffleBlock: Shuffle to Regularize Deep Convolutional Neural Networks', 'https://arxiv.org/abs/2106.09358'),
(31, 'Mayank Singh', 'singh.mayank@iitgn.ac.in', 'Mayank Singh’s interest lies in applying data mining, machine learning (ML), natural language processing (NLP), and network science techniques to different problems in scholarly information science. He also works on linguistic problems involving low-resource Indian Languages. He has published extensively in data mining/NLP conferences like SIGKDD, CIKM, ACL, NAACL, ECIR, etc. He has been the recipient of the GYTI award by SRISTI in 2017 and the early career research award, SERB India 2019.', '2023-06', 'Augmented Convolutional LSTMs for Generation of High-Resolution Climate Change Projections', 'https://ieeexplore.ieee.org/document/9348885'),
(32, 'Mayank Singh', 'singh.mayank@iitgn.ac.in', '', '2021-01', 'Reverse Dictionary Using an Improved CBoW Model', 'https://dl.acm.org/doi/10.1145/3430984.3431068'),
(33, 'Mayank Singh', 'singh.mayank@iitgn.ac.in', '', '2021-01', 'ACL-SQL: Generating SQL Queries from Natural Language', 'https://dl.acm.org/doi/10.1145/3430984.3431046'),
(34, 'Mayank Singh', 'singh.mayank@iitgn.ac.in', '', '2021-01', 'Review Based Recommendations with Human-like Reasons', 'https://dl.acm.org/doi/10.1145/3430984.3431069'),
(35, 'Mayank Singh', 'singh.mayank@iitgn.ac.in', '', '2021-01', 'Genealogical Tree Construction of Research Paper', 'https://dl.acm.org/doi/10.1145/3430984.3431056'),
(36, 'Abhishek Bichhawat', 'abhishek.b@iitgn.ac.in', 'Abhishek’s research is primarily focused on building secure systems by “design” while providing formal security guarantees about real systems, with an emphasis on creating solid foundations for practical solutions. Abhishek currently works on verification of security properties of cryptographic protocols used in real-world applications and the extraction of verified reference implementations of these protocols. He also works on securing the flow of secret and confidential data through applications and preventing security leaks due to bugs in the program code. Abhishek is also interested in exploring aspects of inferring security policies from code or logs that may help debug and enforce the policies in different applications.', '2021-06', 'Permissive runtime information flow control in the presence of exceptions', 'https://content.iospress.com/articles/journal-of-computer-security/jcs211385'),
(37, 'Abhishek Bichhawat', 'abhishek.b@iitgn.ac.in', '', '2021-06', 'Automating Audit with Policy Inference', 'https://ieeexplore.ieee.org/document/9505224'),
(38, 'Abhishek Bichhawat', 'abhishek.b@iitgn.ac.in', '', '2021-06', 'Gradual Security Types and Gradual Guarantees', 'https://ieeexplore.ieee.org/document/9505218'),
(39, 'Abhishek Bichhawat', 'abhishek.b@iitgn.ac.in', '', '2020-10', 'Contextual and Granular Policy Enforcement in Database-backed Applications', 'https://dl.acm.org/doi/10.1145/3320269.3384759'),
(40, 'Abhishek Bichhawat', 'abhishek.b@iitgn.ac.in', '', '2020-03', 'First-order Gradual Information Flow Types with Gradual Guarantees', 'https://arxiv.org/abs/2003.12819'),
(41, 'Balagopal Komarath', 'bkomarath@iitgn.ac.in', 'Balagopal’s research interests are in the areas of computational complexity theory and algorithms. His research is mainly about analyzing the power and limitations of natural models of computation which include models that capture a wide variety of algorithms for interesting computational problems and models that are inspired by real-world constraints.', '2021-07', 'Karchmer-Wigderson Games for Hazard-free Computation', 'https://arxiv.org/abs/2107.05128'),
(42, 'Balagopal Komarath', 'bkomarath@iitgn.ac.in', '', '2021-10', 'On the complexity of detecting hazards', 'https://www.sciencedirect.com/science/article/abs/pii/S0020019020300673?via%3Dihub'),
(43, 'Balagopal Komarath', 'bkomarath@iitgn.ac.in', '', '2020-11', 'Graph Homomorphism Polynomials: Algorithms and Complexity', 'https://arxiv.org/abs/2011.04778'),
(44, 'Balagopal Komarath', 'bkomarath@iitgn.ac.in', '', '2019-08', 'On the Complexity of Hazard-free Circuits', 'https://dl.acm.org/doi/10.1145/3320123'),
(45, 'Balagopal Komarath', 'bkomarath@iitgn.ac.in', '', '2018-08', 'Comparator Circuits over Finite Bounded Posets', 'https://www.sciencedirect.com/science/article/abs/pii/S0890540118300051?via%3Dihub'),
(46, 'Sameer G. Kulkarni', 'sameergk@iitgn.ac.in', 'Sameer obtained his Masters (Computer Engineering) from University of Southern California, Los Angeles, USA and PhD (Computer Science) from University of Göttingen, Göttingen, Germany. He is currently serving as an Assistant Professor in Computer Science and Engineering at IIT Gandhinagar. His research interests include Network Function Virtualization, Software Defined Networking, Network Security and Data Reliability and Distributed Systems.  Sameer was the recepient of the Outstanding PhD Dissertation Award at IEEE Technical Committee on Scalable Computing 2019. He has also achieved the Outstanding Reviewer award at “Elsevier Computer Communications”, 2017. He is Seven-time recipient of QUALSTAR award at Qualcomm, San Diego for exemplary work in different aspects of Audio sub system from June 2010 to Feb 2015.', '2021-01', 'Assessing Container Network Interface Plugins: Functionality, Performance, and Scalability', 'https://ieeexplore.ieee.org/document/9309003'),
(47, 'Sameer G. Kulkarni', 'sameergk@iitgn.ac.in', '', '2021-11', 'Mu: An Efficient, Fair and Responsive Serverless Framework for Resource-Constrained Edge Clouds', 'https://dl.acm.org/doi/10.1145/3472883.3487014'),
(48, 'Sameer G. Kulkarni', 'sameergk@iitgn.ac.in', '', '2021-06', 'Analyzing Open-Source Serverless Platforms: Characteristics and Performance', 'https://arxiv.org/abs/2106.03601'),
(49, 'Sameer G. Kulkarni', 'sameergk@iitgn.ac.in', '', '2020-02', 'NFVnice: Dynamic Backpressure and Scheduling for NFV Service Chains', 'https://ieeexplore.ieee.org/document/9007052'),
(50, 'Sameer G. Kulkarni', 'sameergk@iitgn.ac.in', '', '2020-02', 'REINFORCE: Achieving Efficient Failure Resiliency for Network Function Virtualization-Based Services', 'https://ieeexplore.ieee.org/document/9007021'),
(52, 'Krishna P Miyapuram', 'kprasad@iitgn.ac.in', 'Krishnas research integrates the cognitive processes of learning and decision making mechanisms in humans. Ongoing projects include behavioral and neural correlates of statistical learning, perceptual and value-based decision making. A wide range of experimental and analytic techniques such as psychophysics, eye tracking, brain imaging methodologies (EEG, fMRI) and computational modelling (Reinforcement learning, Bayesian approaches) are used. With machine learning approaches applied to structural MRI images, He is working on early detection of Alzheimer’s’ disease.', '2021-12', 'Classifying Oscillatory Brain Activity Associated With Indian Rasas Using Network Metrics', 'https://assets.researchsquare.com/files/rs-1156636/v1_covered.pdf?c=1640026660'),
(53, 'Krishna P Miyapuram', 'kprasad@iitgn.ac.in', '', '2021-12', 'Risk prediction of prodromal Alzheimer’s disease using deep learning of MRI scans', 'https://alz-journals.onlinelibrary.wiley.com/doi/abs/10.1002/alz.054803'),
(54, 'Krishna P Miyapuram', 'kprasad@iitgn.ac.in', '', '2021-09', ' A Novel Approach Towards Early Detection of Alzheimer’s Disease Using Deep Learning on Magnetic Resonance Images', 'https://link.springer.com/chapter/10.1007/978-3-030-86993-9_43'),
(55, 'Krishna P Miyapuram', 'kprasad@iitgn.ac.in', '', '2021-09', 'Brain Connectivity Based Classification of Meditation Expertise', 'https://link.springer.com/chapter/10.1007/978-3-030-86993-9_9'),
(56, 'Krishna P Miyapuram', 'kprasad@iitgn.ac.in', '', '2021-09', 'Movie Identification from Electroencephalography Response Using Convolutional Neural Network', 'https://link.springer.com/chapter/10.1007/978-3-030-86993-9_25'),
(57, 'Shouvick Mondal', 'shouvick.mondal@iitgn.ac.in', 'The domain of Shouvick s research is software engineering and testing. Research activities focus on the improvement of existing and the development of new scalable and performant software analysis methodologies to ensure construction of high-quality and trustworthy software systems. Shouvick has published and presented in conferences and journals such as ICSME, ICST, JSS, and TSE. He regularly serves as a Program Committee member in the Artifact Evaluation track of conferences such as ISSTA, and PPoPP. Shouvick is also a journal reviewer for JSS, and IST.', '', 'ColosseumColosseum:Regression Test Prioritization by Delta Displacement in Test Coverage', 'https://ieeexplore.ieee.org/document/9534659'),
(58, 'Shouvick Mondal', 'shouvick.mondal@iitgn.ac.in', ' ', ' ', 'Soundy Automated Parallelization of Test Execution', 'https://ieeexplore.ieee.org/document/9609219'),
(59, 'Shouvick Mondal', 'shouvick.mondal@iitgn.ac.in', '', '', 'Mahtab: Phase-wise acceleration of regression testing for C', 'https://www.sciencedirect.com/science/article/abs/pii/S0164121219301773via%3Dihub'),
(60, 'Shouvick Mondal', 'shouvick.mondal@iitgn.ac.in', '', '', 'Finding Shortest Triangular Path and its Family inside a Digital Object', 'https://content.iospress.com/articles/fundamenta-informaticae/fi1666'),
(61, 'Shouvick Mondal', 'shouvick.mondal@iitgn.ac.in', '', '', 'Consensus prioritization of regression test-cases supported by parallel execution windows', 'https://scholar.google.com/citations?view_op=view_citation&hl=en&user=QtsJ2pUAAAAJ&citation_for_view=QtsJ2pUAAAAJ:eQOLeE2rZwMC'),
(62, 'Yogesh Kumar Meena', 'yk.meena@iitgn.ac.in', 'Yogesh K Meena is an Assistant Professor at the Indian Institute of Technology Gandhinagar, India, with a Ph.D. in computer science from Ulster University, Londonderry, U.K. He received his Integrated Post-Graduate (B.Tech. and M.Tech.) degree in information technology from the Indian Institute of Information Technology and Management, Gwalior, India.\r\n\r\nPrior to being at IIT Gandhinagar, he was an AI Software Development Engineer and Senior AI Software Development Engineer at the University of Essex, UK, where he worked on an Innovate UK – UKRI-funded project in collaboration with Mersea Homes Ltd. Before that, he was a Postdoctoral Research Officer in the FIT Lab at Swansea University, UK, where he worked on an EPSRC-funded project in collaboration with Google, DST Innovations Ltd, and IIT Bombay. Prior to that, he was a Postdoctoral Research Assistant at the School of Computing, Engineering, and Intelligent Systems at Ulster University, UK, and a Visiting Research Fellow at the Center for Mechatronics and the Department of Humanities and Social Sciences at IIT Kanpur, India. His primary research interests include Human-Computer Interaction, Brain-Computer Interface, Eye Tracking, Motor Control and Rehabilitation, Artificial Intelligence & Machine Learning, Internet of Things, and User Experience and Usability.\r\n\r\nYogesh s work focuses into two main directions: (1) to deliver intelligent technologies and systems; and (2) to transform community health and care. In particular, I have contributed towards development of novel human-centred technologies conducive for use by the elderly, people with disabilities, children with dyslexia, emergent users, and non-tech savvy users.', ' ', ' Detection of Dyslexic Children Using Machine Learning and Multimodal Hindi Language Eye-Gaze Assisted Learning System', 'https://ieeexplore.ieee.org/document/9964264'),
(63, 'Yogesh Kumar Meena', 'yk.meena@iitgn.ac.in', ' ', ' ', 'Light-In-Light-Out (Li-Lo) Displays Harvesting and Manipulating Light to Provide Novel Forms of Communication.', 'https://dl.acm.org/doi/10.1145/3491102.3517730'),
(64, 'Yogesh Kumar Meena', 'yk.meena@iitgn.ac.in', ' ', ' ', 'ProHealth eCoach: User-Centered Design and Development of an eCoach App to Promote Healthy Lifestyle with Personalized Activity Recommendations.', 'https://bmchealthservres.biomedcentral.com/articles/10.1186/s12913-022-08441-0'),
(65, 'Yogesh Kumar Meena', 'yk.meena@iitgn.ac.in', ' ', ' ', 'PV-Pix: Slum Community Co-design of Self-Powered Deformable Smart Messaging Materials.', 'https://dl.acm.org/doi/10.1145/3411764.3445661'),
(66, 'Yogesh Kumar Meena', 'yk.meena@iitgn.ac.in', ' ', ' ', 'PV-Tiles Towards Closely-Coupled Photovoltaic and Digital Materials for Useful, Beautiful and Sustainable Interactive Surfaces.', 'https://dl.acm.org/doi/abs/10.1145/3313831.3376368'),
(69, 'Rajat Moona', 'moona@iitgn.ac.in', 'Rajat Moona is the current Director of the Indian Institute of Technology Gandhinagar (IITGN). He has been in this position since October 2022. Prior to joining IITGN, he was the Director of IIT Bhilai and the Director General of the Centre for Development of Advanced Computing (C-DAC). He is also a faculty member in the department of Computer Science and Engineering at IIT Kanpur.', '', ' ', ' ');

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
(2, 'Raviraj Sukhadiya', 'raviraj.s@iitgn.ac.in', 'https://ravirajsukhadiya.github.io/', 'RavirajSukhadiya.jpg'),
(14, 'Kelly Shelby', 'kelly@saera211gmail.com', '  https://bard.google.com/', 'Profile.png');

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
(1, 'Rachit Chaya', 'https://sites.google.com/view/rachitchhaya/', 'rachit.jpg'),
(2, 'Tom Glint Issac', 'https://sites.google.com/view/tomglint', 'tom.jpg'),
(3, 'Pankaj Pandey', 'https://pandey-pankaj.github.io/', 'pankaj.jpg'),
(4, 'Akash Pareek', 'https://www.linkedin.com/in/akash-pareek-393a09193/?originalSubdomain=in', 'akash.jpeg'),
(5, 'Anant Kumar ', 'https://sites.google.com/iitgn.ac.in/anant-kumar/home', 'anant.jpeg'),
(6, 'Shruti Singh ', 'https://shruti-singh.github.io/', 'shruti.jpg'),
(7, 'Rishiraj Adhikary ', 'https://rishi-a.github.io/', 'rishi.jpg'),
(8, 'Shriraj Sawant', 'https://www.linkedin.com/in/shriraj-aka-sr13/', 'shriraj.jfif'),
(9, 'Aditi Sethia', 'https://sites.google.com/iitgn.ac.in/aditi-sethia', 'aditi.jpg'),
(10, 'Dhara Thakkar', 'https://sites.google.com/iitgn.ac.in/dharathakkar', 'dhara.jpg'),
(11, 'Jayesh Malaviya', 'https://www.linkedin.com/in/jayeshmalaviya/', 'jayesh.jpg'),
(12, 'Zeel B. Patel', 'https://patel-zeel.github.io/', 'zeel.jpg'),
(13, 'Susmita Mondal', 'https://www.linkedin.com/in/susmita-mondal-378949143', 'susmita.jpg'),
(14, 'Harshil Mittal', '', 'harshil.jpg'),
(15, 'Dipan Dey', '', 'dipan.jpg'),
(16, 'Gayatri Priyadarshini', 'https://www.linkedin.com/in/gayatri-priyadarsini-22638b193', 'gaytri.jpg'),
(17, 'Shrutimoy Das', 'https://sites.google.com/iitgn.ac.in/shrutimoy', 'shrutimoy.jpg'),
(18, 'Jinia Ghosh', '', 'Jinia.jpg'),
(19, 'Himanshu Beniwal', 'https://himanshubeniwal.github.io/', 'himanshu.jpg'),
(20, 'Pritam Kadasi', 'https://pskadasi.github.io/', 'pritamk.jpg'),
(21, 'Binita Maity', 'https://www.linkedin.com/in/binita-maity-212746175', 'binita.jpg'),
(22, 'Sarth Dubey', 'https://dubeysarth.github.io/About/', 'SarthDubey.jpg'),
(23, 'Prajwal Singh', 'https://prajwalsingh.github.io/', 'prajwal.png');

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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `staff_details`
--
ALTER TABLE `staff_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
