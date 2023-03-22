-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 07:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cognitare`
--

-- --------------------------------------------------------

--
-- Table structure for table `q_artistic`
--

DROP TABLE IF EXISTS `q_artistic`;
CREATE TABLE `q_artistic` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(81) DEFAULT NULL,
  `COL 3` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `q_artistic`
--

INSERT INTO `q_artistic` (`COL 1`, `COL 2`, `COL 3`) VALUES
('a_id', 'question', 'trait'),
('1', 'I enjoy creating art', 'Artistic'),
('2', 'You have taken an art class or workshop?', 'Artistic'),
('3', 'You enjoy using your imagination and expressing yourself creatively?', 'Artistic'),
('4', 'You are interested in a career in the performing arts or design fields?', 'Artistic'),
('5', 'You have a strong sense of style and attention to detail?', 'Artistic'),
('6', 'You have written a short story, poem, or play?', 'Artistic'),
('7', 'You enjoy working on projects that allow you to be creative and original?', 'Artistic'),
('8', 'You have designed or decorated your own living space?', 'Artistic'),
('9', 'You prefer a work environment that is relaxed and allows for creative expression?', 'Artistic'),
('10', 'You enjoy using your creativity to solve problems and come up with new ideas?', 'Artistic'),
('11', 'Conduct a musical choir.', 'Artistic'),
('12', 'Direct a play.', 'Artistic'),
('13', 'Design artwork for magazines.', 'Artistic'),
('14', 'Write a song.', 'Artistic'),
('15', 'Write books or plays.', 'Artistic'),
('16', 'Play a musical instrument.', 'Artistic'),
('17', 'Perform stunts for a movie or television show.', 'Artistic'),
('18', 'Design sets for plays.', 'Artistic');

-- --------------------------------------------------------

--
-- Table structure for table `q_conventional`
--

DROP TABLE IF EXISTS `q_conventional`;
CREATE TABLE `q_conventional` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(78) DEFAULT NULL,
  `COL 3` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `q_conventional`
--

INSERT INTO `q_conventional` (`COL 1`, `COL 2`, `COL 3`) VALUES
('c_id', 'question', 'trait'),
('1', 'I am good at following rules and procedures', 'Conventional'),
('2', 'You enjoy working with numbers, data, and information systems', 'Conventional'),
('3', 'You have taken a course in accounting, finance, or business management', 'Conventional'),
('4', 'You are interested in a career in banking, finance, or office administration', 'Conventional'),
('5', 'You prefer a work environment that is structured and organized', 'Conventional'),
('6', 'You enjoy following procedures and protocols to ensure accuracy and efficiency', 'Conventional'),
('7', 'You have strong attention to detail and problem-solving skills', 'Conventional'),
('8', 'You prefer a work environment that is stable and predictable', 'Conventional'),
('9', 'You enjoy working with information and data to make informed decisions', 'Conventional'),
('10', 'Generate the monthly payroll checks for an office.', 'Conventional'),
('11', 'Inventory supplies using a hand-held computer.', 'Conventional'),
('12', 'Use a computer program to generate customer bills.', 'Conventional'),
('13', 'Maintain employee records.', 'Conventional'),
('14', 'Compute and record statistical and other numerical data.', 'Conventional'),
('15', 'Operate a calculator.', 'Conventional'),
('16', 'Handle customers\' bank transactions.', 'Conventional'),
('17', 'Keep shipping and receiving records.', 'Conventional');

-- --------------------------------------------------------

--
-- Table structure for table `q_enterprising`
--

DROP TABLE IF EXISTS `q_enterprising`;
CREATE TABLE `q_enterprising` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(76) DEFAULT NULL,
  `COL 3` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `q_enterprising`
--

INSERT INTO `q_enterprising` (`COL 1`, `COL 2`, `COL 3`) VALUES
('e_id', 'question', 'trait'),
('1', 'I am confident in my ability to sell products.', 'Enterprising'),
('2', 'Start your own business or been self-employed', 'Enterprising'),
('3', 'You enjoy taking risks and being in charge', 'Enterprising'),
('4', 'You are interested in a career in sales, marketing, or management', 'Enterprising'),
('5', 'You enjoy negotiating and persuading others', 'Enterprising'),
('6', 'Serve as a class president or student government leader', 'Enterprising'),
('7', 'You have strong leadership skills and enjoy being in a position of authority', 'Enterprising'),
('8', 'You prefer a work environment that is fast-paced and competitive', 'Enterprising'),
('9', 'You enjoy taking on new challenges and finding new business opportunities', 'Enterprising'),
('10', 'You have a strong desire to succeed and be recognized for your achievements', 'Enterprising'),
('11', 'Sell restaurant franchises to individuals.', 'Enterprising'),
('12', 'Sell merchandise at a department store.', 'Enterprising'),
('13', 'Manage the operations of a hotel.', 'Enterprising'),
('14', 'Operate a beauty salon or barber shop.', 'Enterprising'),
('15', 'Manage a department within a large company.', 'Enterprising'),
('16', 'Manage a clothing store.', 'Enterprising'),
('17', 'Sell houses.', 'Enterprising'),
('18', 'Run a toy store.', 'Enterprising');

-- --------------------------------------------------------

--
-- Table structure for table `q_investigative`
--

DROP TABLE IF EXISTS `q_investigative`;
CREATE TABLE `q_investigative` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(84) DEFAULT NULL,
  `COL 3` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `q_investigative`
--

INSERT INTO `q_investigative` (`COL 1`, `COL 2`, `COL 3`) VALUES
('i_id', 'question', 'trait'),
('1', 'I am interested in understanding about how things work.', 'Investigative'),
('2', 'You enjoy learning about new ideas and theories', 'Investigative'),
('3', 'You enjoy learning about new ideas and theories', 'Investigative'),
('4', 'You have a strong curiosity about how things work', 'Investigative'),
('5', 'You have read a book or article about a scientific or technological breakthrough', 'Investigative'),
('6', 'You are interested in a career in research or development', 'Investigative'),
('7', 'You prefer a job that allows you to use your analytical and critical thinking skills', 'Investigative'),
('8', 'Study the structure of the human body.', 'Investigative'),
('9', 'Study animal behavior.', 'Investigative'),
('10', 'Do research on plants or animals.', 'Investigative'),
('11', 'Develop a new medical treatment or procedure.', 'Investigative'),
('12', 'Conduct biological research.', 'Investigative'),
('13', 'Study whales and other types of marine life.', 'Investigative'),
('14', 'Work in a biology lab.', 'Investigative'),
('15', 'Make a map of the bottom of an ocean.', 'Investigative');

-- --------------------------------------------------------

--
-- Table structure for table `q_realistic`
--

DROP TABLE IF EXISTS `q_realistic`;
CREATE TABLE `q_realistic` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(75) DEFAULT NULL,
  `COL 3` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `q_realistic`
--

INSERT INTO `q_realistic` (`COL 1`, `COL 2`, `COL 3`) VALUES
('r_id', 'question', 'trait'),
('1', 'I enjoy working with tools and machines.', 'Realistic'),
('2', 'What outdoor activities do you enjoy the most?', 'Realistic'),
('3', 'Have you ever worked with your hands to build or fix something?', 'Realistic'),
('4', 'Do you consider yourself to be a practical person?', 'Realistic'),
('5', 'Are you comfortable working with machinery or tools?', 'Realistic'),
('6', 'Do you enjoy working with animals?', 'Realistic'),
('7', 'Have you ever taken a woodworking or auto repair class?', 'Realistic'),
('8', 'Do you prefer working in a hands-on environment rather than in an office?', 'Realistic'),
('9', 'Have you ever worked as a mechanic or construction worker?', 'Realistic'),
('10', 'Do you enjoy being physically active and using your body to complete tasks?', 'Realistic'),
('11', 'Do you prefer tasks that have a clear and tangible outcome?', 'Realistic'),
('12', 'Test the quality of parts before shipment.', 'Realistic'),
('13', 'Lay brick or tile.', 'Realistic'),
('14', 'Work on an offshore oil-drilling rig.', 'Realistic'),
('15', 'Assemble electronic parts.', 'Realistic'),
('16', 'Operate a grinding machine in a factory.', 'Realistic'),
('17', 'Fix a broken faucet.', 'Realistic'),
('18', 'Assemble products in a factory.', 'Realistic'),
('19', 'Install flooring in houses.', 'Realistic');

-- --------------------------------------------------------

--
-- Table structure for table `q_social`
--

DROP TABLE IF EXISTS `q_social`;
CREATE TABLE `q_social` (
  `COL 1` varchar(4) DEFAULT NULL,
  `COL 2` varchar(75) DEFAULT NULL,
  `COL 3` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `q_social`
--

INSERT INTO `q_social` (`COL 1`, `COL 2`, `COL 3`) VALUES
('s_id', 'question', 'trait'),
('1', 'I enjoy helping others', 'Social'),
('2', 'You have been a leader or member of a team or club.', 'Social'),
('3', 'You enjoy helping others and making a positive impact in the lives of people.', 'Social'),
('4', 'You are interested in a career in counseling, education, or human services.', 'Social'),
('5', 'You enjoy working with people from diverse backgrounds and cultures.', 'Social'),
('6', 'You have volunteered or worked on a community service project.', 'Social'),
('7', 'You prefer a work environment that is social and interactive?.', 'Social'),
('8', 'You have strong communication and interpersonal skills?.', 'Social'),
('9', 'You have served as a mediator or conflict resolution specialist?.', 'Social'),
('10', 'You enjoy working with others to achieve a common goal.', 'Social'),
('11', 'Give career guidance to people.', 'Social'),
('12', 'Do volunteer work at a non-profit organization.', 'Social'),
('13', 'Help people who have problems with drugs or alcohol.', 'Social'),
('14', 'Teach an individual an exercise routine.', 'Social'),
('15', 'Help people with family-related problems.', 'Social'),
('16', 'Supervise the activities of children at a camp.', 'Social'),
('17', 'Teach children how to read.', 'Social'),
('18', 'Help elderly people with their daily activities.', 'Social');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
