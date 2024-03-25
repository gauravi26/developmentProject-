-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 09:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_argument_map`
--

CREATE TABLE `action_argument_map` (
  `id` int(11) NOT NULL,
  `action_library_id` int(11) NOT NULL,
  `argument_display_name` varchar(255) NOT NULL,
  `argument` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action_argument_map`
--

INSERT INTO `action_argument_map` (`id`, `action_library_id`, `argument_display_name`, `argument`) VALUES
(1, 1, 'Background Color ', 'bgcolor'),
(2, 2, 'Font Color ', 'passColor'),
(14, 14, 'Font Style', 'fontStyle'),
(15, 15, 'Font Size', 'fontSize'),
(16, 15, 'Text Decoration', 'textDecoration');

-- --------------------------------------------------------

--
-- Table structure for table `action_library`
--

CREATE TABLE `action_library` (
  `id` int(11) NOT NULL,
  `action_display_name` varchar(255) NOT NULL,
  `action_name` varchar(255) NOT NULL,
  `syntax` text NOT NULL,
  `parameter_count` int(11) NOT NULL,
  `parameter_description` varchar(255) NOT NULL,
  `action_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action_library`
--

INSERT INTO `action_library` (`id`, `action_display_name`, `action_name`, `syntax`, `parameter_count`, `parameter_description`, `action_type`) VALUES
(0, 'null action', 'null action', '', 0, 'null action', 1),
(1, 'Change Background Color', 'changeBackgroundColor', 'function changeBackgroundColor(element, bgcolor) {\r\n        element.style.backgroundColor = bgcolor;\r\n    }', 2, 'Element - Value or element for which background color has to change \r\n\r\nBg Color -  Color of background \r\n\r\nBoth need Text input', 1),
(2, 'Apply Font color ', 'applyColorStyle', 'function applyColorStyle(element,passColor ) {\r\n            element.style.setProperty(\'color\', passColor, \'important\');\r\n   \r\n}', 1, 'The isPass parameter is a boolean value returned from the checkPassFail function.\r\nIf isPass is true, it means the condition (pass) is met, and the passColor is applied to the element\'s color style.\r\nIf isPass is false, it means the condition (fail) is no', 1),
(14, 'Change Font Style', 'changeTextColor', 'function changeFontStyle(element, fontStyle) {\r\n    element.style.fontStyle = style;\r\n}\r\n', 2, 'Element to change color and color ', 1),
(15, 'Add Font Size and Text Decoration', 'changeTextStyle', 'function changeTextStyle(element,fontSize, textDecoration) {\r\n    element.style.textDecoration = textDecoration;\r\n    element.style.fontSize = fontSize;\r\n}\r\n', 2, 'textDecoration, fontSize', 1);

-- --------------------------------------------------------

--
-- Table structure for table `action_type`
--

CREATE TABLE `action_type` (
  `id` int(11) NOT NULL,
  `action_type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action_type`
--

INSERT INTO `action_type` (`id`, `action_type`, `Description`) VALUES
(1, 'Java Script Function ', 'Script which add styling and dynamic effects to elements of web pages using javascript , return a script to append to append on page ');

-- --------------------------------------------------------

--
-- Table structure for table `application_forms`
--

CREATE TABLE `application_forms` (
  `id` int(11) NOT NULL,
  `menu_form` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_forms`
--

INSERT INTO `application_forms` (`id`, `menu_form`, `controller`, `action`) VALUES
(1, 'Faculty', 'faculty', 'create'),
(2, 'Departments', 'departments', 'create'),
(3, 'Courses', 'courses', 'create'),
(4, 'Student_Information', 'studentInformation', 'create'),
(5, 'Themes ', 'themes', 'index'),
(6, 'Course Type', 'courseType', 'create'),
(7, 'Customize Theme ', '', ''),
(8, 'Set Form Theme', '', ''),
(9, 'Effect', 'effects', 'create'),
(10, 'Test Report', 'faculty', 'testReport'),
(11, 'Report', 'report', 'testReport'),
(12, 'Data table', 'tabletheme', 'manage'),
(13, 'report create form', 'report', 'create'),
(14, 'Demo report', 'reportThemeMapping', 'testReport'),
(15, 'Sudent Report', 'studentInformation', 'testReport'),
(16, 'Themes of Report', 'themeForReport', 'reportTestTheme'),
(17, 'Student Dynamic Report', 'studentinformation', 'reportTest'),
(18, 'Course Report', 'courses', 'reportTest'),
(19, 'Customer Report ', 'customers', 'report');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_link` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_link`, `department_id`, `course_type_id`) VALUES
(3, 'B.ScE', 'www.science.com ', 5, 5),
(7, 'Btech', 'www.flipkart.com', 4, 5),
(13, 'B.com', 'www.abc.com ', 7, 6),
(14, 'B.com', 'www.xyz.com ', 5, 9),
(15, 'M.tech', 'www.amazon.com', 3, 6),
(16, 'Bio', 'www.fisnv', 118, 5);

-- --------------------------------------------------------

--
-- Table structure for table `course_type`
--

CREATE TABLE `course_type` (
  `id` int(11) NOT NULL,
  `course_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_type`
--

INSERT INTO `course_type` (`id`, `course_type`) VALUES
(9, '12th'),
(6, 'PG'),
(7, 'PhD'),
(5, 'UG');

-- --------------------------------------------------------

--
-- Table structure for table `css_properties`
--

CREATE TABLE `css_properties` (
  `id` int(11) NOT NULL,
  `property_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `css_properties`
--

INSERT INTO `css_properties` (`id`, `property_name`) VALUES
(0, NULL),
(36, 'align-items'),
(17, 'background'),
(1, 'background-color'),
(4, 'border'),
(39, 'border-collapse'),
(16, 'border-color'),
(20, 'border-color'),
(7, 'border-radius'),
(40, 'border-spacing'),
(26, 'box-shadow'),
(22, 'box-sizing'),
(24, 'clear'),
(3, 'color'),
(8, 'display'),
(42, 'empty'),
(10, 'float'),
(37, 'font-family'),
(2, 'font-size'),
(23, 'font-style'),
(18, 'font-weight'),
(32, 'grid'),
(38, 'grid-column'),
(34, 'grid-gap'),
(33, 'grid-template-columns'),
(21, 'height'),
(35, 'justify-content'),
(5, 'margin'),
(9, 'margin-right'),
(41, 'margin-top'),
(19, 'max-width'),
(27, 'opacity'),
(6, 'padding'),
(11, 'position'),
(31, 'resize'),
(12, 'text-align'),
(25, 'text-decoration'),
(29, 'transition-duration'),
(28, 'transition-property'),
(30, 'transition-timing-function'),
(13, 'width');

-- --------------------------------------------------------

--
-- Table structure for table `current_theme`
--

CREATE TABLE `current_theme` (
  `id` int(11) NOT NULL,
  `theme_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_theme`
--

INSERT INTO `current_theme` (`id`, `theme_ID`) VALUES
(1, 361);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `PhoneNumber` varchar(15) DEFAULT NULL,
  `RegistrationDate` date DEFAULT NULL,
  `Balance` decimal(8,2) DEFAULT NULL,
  `PremiumMember` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `RegistrationDate`, `Balance`, `PremiumMember`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890', '2024-01-01', '200.50', 1),
(2, 'Jane', 'Doe', 'jane.doe@example.com', '098-765-4321', '2024-02-01', '100.25', 0),
(3, 'Jim', 'Beam', 'jim.beam@example.com', '111-222-3333', '2024-03-01', '300.75', 1),
(4, 'Alice', 'Smith', 'alice.smith@example.com', '222-333-4444', '2024-04-01', '150.00', 0),
(5, 'Bob', 'Johnson', 'bob.johnson@example.com', '333-444-5555', '2024-05-01', '250.50', 1),
(6, 'Charlie', 'Williams', 'charlie.williams@example.com', '444-555-6666', '2024-06-01', '350.75', 0),
(7, 'David', 'Brown', 'david.brown@example.com', '555-666-7777', '2024-07-01', '450.25', 1),
(8, 'Eve', 'Jones', 'eve.jones@example.com', '666-777-8888', '2024-08-01', '550.50', 0),
(9, 'Frank', 'Miller', 'frank.miller@example.com', '777-888-9999', '2024-09-01', '650.75', 1),
(10, 'Grace', 'Davis', 'grace.davis@example.com', '888-999-1111', '2024-10-01', '750.25', 0),
(11, 'Harry', 'Garcia', 'harry.garcia@example.com', '999-111-2222', '2024-11-01', '850.50', 1),
(12, 'Ivy', 'Rodriguez', 'ivy.rodriguez@example.com', '111-222-3333', '2024-12-01', '950.75', 0),
(13, 'Jack', 'Wilson', 'jack.wilson@example.com', '222-333-4444', '2025-01-01', '1050.25', 1),
(14, 'Kate', 'Martinez', 'kate.martinez@example.com', '333-444-5555', '2025-02-01', '1150.50', 0),
(15, 'Luke', 'Anderson', 'luke.anderson@example.com', '444-555-6666', '2025-03-01', '1250.75', 1),
(16, 'Mia', 'Taylor', 'mia.taylor@example.com', '555-666-7777', '2025-04-01', '1350.25', 0),
(17, 'Nick', 'Thomas', 'nick.thomas@example.com', '666-777-8888', '2025-05-01', '1450.50', 1),
(18, 'Olivia', 'Hernandez', 'olivia.hernandez@example.com', '777-888-9999', '2025-06-01', '1550.75', 0);

-- --------------------------------------------------------

--
-- Table structure for table `custom_page_properties`
--

CREATE TABLE `custom_page_properties` (
  `id` int(11) NOT NULL,
  `application_forms_id` int(11) NOT NULL,
  `element` varchar(255) NOT NULL,
  `css_properties` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_page_properties`
--

INSERT INTO `custom_page_properties` (`id`, `application_forms_id`, `element`, `css_properties`, `value`) VALUES
(1, 2, 'h1', 'color', 'green'),
(2, 2, 'h1', 'font-size', '30px'),
(6, 2, 'body', 'color', 'blue'),
(7, 2, 'body', 'font-size', '12'),
(8, 2, 'body', 'background-color', 'coral');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_code` varchar(255) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `department_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_code`, `department_name`, `department_desc`) VALUES
(3, '001', 'CSE', 'ABCD'),
(4, '002', 'ETC', 'Electronics '),
(5, '345', 'Civil', 'erty'),
(6, '678', '123', 'qwer'),
(7, '004', 'Commerce ', 'Business'),
(118, '777', 'Food Technology', 'Farm and Food '),
(119, '564', 'Sports', 'Health and Body '),
(120, '3456', 'Sports', 'Health and Body '),
(121, '48538', 'Biotech ', 'Micro-orgranizms'),
(122, '23892u', 'Phy', 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `effects`
--

CREATE TABLE `effects` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `trigger_id` int(11) NOT NULL,
  `FIELD_ID` int(11) NOT NULL,
  `effect_code_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `effects`
--

INSERT INTO `effects` (`id`, `form_id`, `trigger_id`, `FIELD_ID`, `effect_code_id`) VALUES
(1, 2, 0, 4, 'blink'),
(2, 2, 0, 1, 'shake'),
(3, 1, 0, 13, 'blink'),
(4, 2, 0, 4, '3'),
(5, 2, 0, 4, '3'),
(6, 2, 0, 4, '3'),
(7, 2, 0, 4, '3'),
(8, 2, 0, 4, '3'),
(9, 2, 0, 4, '3'),
(10, 2, 0, 4, '3'),
(11, 2, 0, 4, '3'),
(12, 2, 0, 4, '3'),
(13, 2, 0, 4, '3'),
(14, 2, 0, 4, '3'),
(15, 2, 0, 4, '3'),
(16, 2, 0, 4, '3'),
(17, 2, 0, 4, '3'),
(18, 2, 0, 4, '3'),
(19, 2, 0, 4, '3'),
(20, 2, 0, 4, '3'),
(21, 2, 0, 4, '3'),
(22, 2, 0, 4, '3'),
(23, 2, 0, 4, '3'),
(24, 2, 0, 4, '3'),
(25, 1, 0, 22, '1'),
(26, 3, 0, 12, '4'),
(27, 4, 0, 39, '2'),
(28, 4, 0, 39, '2'),
(29, 4, 0, 23, '2'),
(30, 4, 0, 23, '2'),
(31, 6, 0, 9, '1'),
(32, 6, 0, 9, '1'),
(33, 6, 0, 9, '1'),
(34, 6, 0, 9, '1'),
(35, 1, 0, 25, '1'),
(36, 1, 0, 25, '1'),
(37, 1, 0, 25, '1'),
(38, 1, 0, 25, '1'),
(39, 1, 0, 25, '1'),
(40, 1, 0, 25, '1'),
(41, 1, 0, 25, '1'),
(42, 1, 0, 25, '1'),
(43, 1, 0, 25, '1'),
(44, 1, 0, 25, '3'),
(45, 3, 0, 11, '3'),
(46, 3, 0, 11, '3'),
(47, 3, 0, 11, '3'),
(48, 3, 0, 11, '3'),
(49, 3, 0, 11, '3'),
(50, 3, 0, 11, '3'),
(51, 3, 0, 10, '2'),
(52, 1, 0, 19, '3'),
(53, 3, 0, 9, '3'),
(54, 2, 0, 4, '3'),
(55, 1, 0, 22, '4'),
(56, 4, 0, 33, '3'),
(57, 4, 0, 33, '3'),
(58, 4, 0, 33, '3'),
(59, 4, 0, 33, '3'),
(60, 4, 0, 33, '3'),
(61, 4, 0, 33, '3'),
(62, 4, 0, 39, '3'),
(63, 4, 0, 39, '3'),
(64, 4, 0, 39, '3'),
(65, 4, 0, 39, '3'),
(66, 4, 0, 39, '3'),
(67, 2, 0, 2, '3'),
(68, 2, 0, 2, '3'),
(69, 2, 0, 2, '3'),
(70, 2, 0, 2, '3'),
(71, 6, 0, 31, '1'),
(72, 6, 0, 31, '1'),
(73, 6, 0, 31, '1'),
(74, 6, 0, 31, '1'),
(75, 6, 0, 31, '1'),
(76, 6, 0, 31, '1'),
(77, 6, 0, 31, '1'),
(78, 1, 0, 16, '1'),
(79, 1, 0, 18, '3'),
(80, 1, 0, 16, '3'),
(83, 2, 0, 4, '4'),
(84, 2, 0, 4, '4'),
(86, 1, 0, 18, '1'),
(87, 2, 0, 2, '3'),
(89, 2, 0, 3, '3'),
(90, 2, 0, 3, '3'),
(92, 4, 0, 33, '3'),
(93, 4, 0, 33, '3'),
(95, 1, 0, 18, '3'),
(96, 4, 0, 33, '3'),
(97, 2, 0, 3, '3'),
(98, 2, 0, 3, '3'),
(99, 1, 0, 15, '3'),
(100, 1, 0, 15, '3'),
(101, 1, 0, 15, '3'),
(102, 2, 0, 17, '1'),
(103, 1, 0, 17, '1'),
(104, 1, 0, 17, '1'),
(105, 3, 0, 8, '1'),
(106, 3, 0, 8, '1'),
(107, 2, 0, 1, '4'),
(108, 1, 0, 14, '4'),
(109, 1, 0, 20, '4'),
(110, 1, 0, 20, '4'),
(111, 2, 0, 2, '1'),
(112, 2, 0, 2, '1'),
(113, 3, 0, 12, '1'),
(114, 3, 0, 12, '1'),
(115, 3, 0, 12, '1'),
(116, 1, 0, 14, '3'),
(117, 1, 0, 14, '3'),
(118, 3, 0, 8, '3'),
(119, 1, 0, 18, '3'),
(120, 1, 0, 18, '3'),
(121, 3, 0, 9, '3'),
(122, 3, 0, 9, '3'),
(123, 6, 0, 31, '3'),
(124, 3, 0, 8, '3'),
(125, 3, 0, 8, '3'),
(126, 3, 0, 8, '3'),
(127, 3, 0, 8, '3'),
(128, 2, 0, 2, '3'),
(129, 1, 0, 14, '3'),
(130, 1, 0, 14, '3'),
(131, 4, 0, 28, '3'),
(132, 4, 0, 39, '1'),
(133, 4, 0, 39, '1'),
(134, 4, 0, 39, '1'),
(135, 1, 0, 22, '4'),
(136, 1, 0, 15, '3'),
(137, 1, 0, 15, '3'),
(138, 2, 0, 4, '1'),
(139, 2, 0, 1, '1'),
(140, 2, 0, 1, '1'),
(141, 2, 0, 1, '1'),
(142, 2, 0, 1, '1'),
(143, 2, 0, 1, '1'),
(144, 2, 0, 1, '1'),
(145, 2, 0, 1, '1'),
(146, 2, 0, 1, '1'),
(147, 2, 0, 1, '1'),
(148, 2, 0, 1, '1'),
(149, 2, 0, 1, '1'),
(150, 2, 0, 1, '1'),
(151, 2, 0, 1, '1'),
(152, 1, 0, 22, '1'),
(153, 3, 0, 9, '3'),
(154, 2, 0, 4, '3'),
(155, 2, 0, 4, '1'),
(156, 2, 0, 4, '1'),
(157, 1, 0, 21, '1'),
(158, 2, 0, 4, '3'),
(159, 4, 0, 39, '1'),
(160, 3, 0, 12, '4'),
(161, 3, 0, 12, '4'),
(162, 3, 0, 12, '4'),
(163, 3, 0, 12, '4'),
(164, 3, 0, 12, '4'),
(165, 3, 0, 12, '4'),
(166, 3, 0, 12, '4'),
(167, 3, 0, 9, '4'),
(168, 2, 0, 4, '1'),
(169, 2, 0, 4, '1'),
(170, 3, 0, 9, '3'),
(171, 1, 0, 18, '4'),
(172, 1, 0, 18, '4'),
(173, 1, 0, 18, '4'),
(174, 1, 0, 18, '4'),
(175, 1, 0, 18, '4'),
(176, 1, 0, 18, '4'),
(177, 1, 0, 18, '4'),
(178, 1, 0, 18, '4'),
(179, 1, 0, 18, '4'),
(180, 1, 0, 18, '4'),
(181, 1, 0, 18, '4'),
(182, 1, 0, 18, '4'),
(183, 1, 0, 18, '4'),
(184, 1, 0, 18, '4'),
(185, 1, 0, 18, '4'),
(186, 1, 0, 18, '4'),
(187, 1, 0, 18, '4'),
(188, 1, 0, 18, '4'),
(189, 1, 0, 18, '4'),
(190, 1, 0, 18, '4'),
(191, 1, 0, 18, '4'),
(192, 1, 0, 18, '4'),
(193, 1, 0, 18, '4'),
(194, 1, 0, 18, '4'),
(195, 1, 0, 18, '4'),
(196, 1, 0, 18, '4'),
(197, 1, 0, 18, '4'),
(198, 1, 0, 18, '4'),
(199, 1, 0, 18, '4'),
(200, 1, 0, 18, '4'),
(201, 1, 0, 18, '4'),
(202, 1, 0, 18, '4'),
(203, 1, 0, 17, '4'),
(204, 1, 0, 18, '4'),
(205, 1, 0, 18, '4'),
(206, 3, 0, 12, '3'),
(207, 6, 0, 6, '1'),
(208, 6, 0, 6, '1'),
(209, 6, 0, 6, '1'),
(210, 2, 0, 3, '1'),
(211, 6, 1, 6, '1'),
(212, 6, 1, 6, '1'),
(213, 4, 1, 25, '1'),
(214, 4, 1, 25, '1'),
(215, 4, 1, 25, '1'),
(216, 4, 1, 40, '1'),
(217, 4, 1, 40, '1'),
(218, 4, 1, 24, '1'),
(219, 4, 1, 24, '1'),
(220, 4, 1, 24, '1'),
(221, 4, 1, 39, '1'),
(222, 4, 1, 24, '1'),
(223, 4, 1, 36, '1'),
(224, 4, 1, 24, '1'),
(225, 4, 1, 37, '1'),
(226, 4, 1, 37, '1'),
(227, 4, 1, 38, '1'),
(228, 4, 1, 38, '1'),
(229, 4, 1, 26, '1'),
(230, 4, 1, 38, '1'),
(231, 4, 1, 38, '1'),
(232, 4, 1, 23, '1'),
(233, 4, 1, 23, '1'),
(234, 4, 1, 28, '1'),
(235, 4, 1, 28, '1'),
(236, 3, 1, 8, '1'),
(237, 3, 1, 8, '1'),
(238, 2, 2, 2, '1'),
(239, 2, 2, 2, '1'),
(240, 2, 2, 3, '1'),
(241, 2, 2, 3, '1'),
(242, 1, 2, 22, '1'),
(243, 3, 1, 12, '2'),
(244, 3, 2, 9, '1'),
(245, 3, 2, 9, '1'),
(246, 3, 2, 8, '1'),
(247, 3, 2, 8, '1'),
(248, 1, 2, 18, '1'),
(249, 1, 2, 18, '1'),
(250, 1, 2, 17, '1'),
(251, 1, 2, 17, '1'),
(252, 1, 2, 17, '1'),
(253, 1, 2, 17, '1'),
(254, 1, 2, 17, '1'),
(255, 1, 1, 22, '1'),
(256, 2, 1, 2, '3'),
(257, 1, 2, 14, '3'),
(258, 2, 2, 3, '3'),
(259, 2, 1, 4, '4'),
(260, 3, 2, 8, '1'),
(261, 2, 1, 4, '4'),
(262, 2, 1, 4, '4'),
(263, 2, 1, 4, '4'),
(264, 2, 1, 4, '4'),
(265, 2, 1, 4, '1'),
(266, 2, 2, 3, '2'),
(267, 2, 1, 4, '4'),
(268, 3, 1, 9, '1'),
(269, 2, 1, 4, '4'),
(270, 3, 1, 12, '4'),
(271, 1, 1, 22, '4'),
(272, 1, 1, 22, '4'),
(273, 1, 1, 22, '4'),
(274, 1, 1, 22, '4'),
(275, 1, 1, 22, '4'),
(276, 1, 1, 22, '4'),
(277, 1, 1, 22, '4'),
(278, 1, 1, 22, '1'),
(279, 2, 1, 4, '3'),
(280, 6, 1, 6, '3'),
(281, 4, 1, 39, '1'),
(282, 4, 1, 39, '3'),
(283, 6, 1, 6, '1'),
(284, 6, 1, 6, '1'),
(285, 3, 1, 6, '4'),
(286, 6, 1, 6, '1'),
(287, 6, 1, 12, '1'),
(288, 6, 1, 6, '1'),
(289, 3, 1, 12, '4'),
(290, 6, 1, 6, '1'),
(291, 2, 1, 4, '1'),
(292, 1, 1, 22, '2'),
(293, 2, 1, 4, '1'),
(294, 2, 1, 4, '1'),
(295, 3, 1, 12, '1'),
(296, 6, 1, 6, '4'),
(297, 1, 1, 22, '2'),
(298, 1, 1, 14, '2'),
(299, 3, 1, 9, '4'),
(300, 3, 1, 9, '4'),
(301, 3, 1, 11, '4'),
(302, 3, 1, 9, '4'),
(303, 2, 2, 1, '2'),
(304, 3, 1, 12, '3'),
(305, 4, 1, 36, '3'),
(306, 1, 1, 22, '25'),
(307, 1, 1, 21, '25'),
(308, 9, 1, 41, '28'),
(309, 2, 1, 4, '28'),
(310, 3, 1, 9, '30'),
(311, 1, 1, 18, '31'),
(312, 1, 1, 22, '31'),
(313, 4, 1, 25, '32'),
(314, 9, 1, 41, '33'),
(315, 1, 1, 14, '4'),
(316, 9, 1, 41, '82'),
(317, 3, 3, 9, '82'),
(318, 1, 3, 18, '82'),
(319, 2, 3, 2, '82'),
(320, 2, 3, 2, '2'),
(321, 2, 1, 3, '1'),
(322, 2, 1, 4, '83'),
(323, 2, 1, 4, '1'),
(324, 1, 1, 14, '82'),
(325, 1, 12, 14, '82'),
(326, 6, 1, 6, '84'),
(327, 6, 1, 6, '84'),
(328, 6, 1, 6, '86'),
(329, 2, 5, 4, '87'),
(330, 2, 5, 4, '88'),
(331, 2, 5, 4, '89'),
(332, 1, 5, 22, '89'),
(333, 1, 5, 22, '89'),
(334, 3, 5, 12, '89'),
(335, 1, 5, 22, '89'),
(336, 1, 5, 14, '90'),
(337, 4, 1, 39, '1'),
(338, 4, 1, 39, '1'),
(339, 6, 1, 6, '91'),
(340, 3, 1, 9, '1'),
(341, 4, 20, 42, '92'),
(342, 4, 20, 42, '93'),
(343, 4, 20, 42, '94'),
(344, 4, 20, 42, '95'),
(345, 4, 20, 42, '96'),
(353, 2, 20, 42, '96'),
(354, 2, 1, 42, '96'),
(355, 2, 1, 42, '95'),
(356, 2, 1, 25, '95'),
(357, 6, 2, 5, '4'),
(358, 6, 20, 42, '96'),
(359, 6, 2, 31, '96'),
(360, 6, 2, 31, '2'),
(375, 2, 20, 42, '96'),
(376, 8, 20, 42, '96'),
(377, 2, 20, 42, '96'),
(378, 2, 1, 4, '3'),
(379, 2, 1, 4, '3'),
(380, 2, 1, 4, '3'),
(381, 2, 1, 4, '3'),
(382, 2, 1, 4, '3'),
(385, 1, 20, 42, '95'),
(386, 1, 20, 42, '95'),
(387, 4, 20, 42, '95'),
(389, 3, 20, 42, '96'),
(390, 1, 20, 42, '96'),
(391, 4, 4, 42, '96'),
(392, 4, 4, 42, '96'),
(393, 4, 5, 42, '96'),
(394, 4, 4, 42, '96'),
(395, 1, 4, 42, '96'),
(396, 1, 4, 42, '96'),
(397, 1, 4, 42, '96'),
(398, 1, 6, 42, '96'),
(399, 1, 6, 42, '96'),
(400, 4, 2, 42, '96'),
(401, 4, 2, 42, '96'),
(402, 4, 2, 42, '96'),
(403, 4, 15, 42, '96'),
(404, 4, 2, 42, '96'),
(405, 1, 2, 42, '96'),
(406, 1, 2, 42, '96'),
(417, 2, 4, 4, '3'),
(420, 1, 20, 42, '96'),
(421, 1, 20, 42, '96'),
(422, 1, 20, 42, '96'),
(423, 1, 20, 42, '96'),
(424, 4, 20, 42, '96'),
(432, 2, 1, 4, '3'),
(433, 12, 0, 42, '102'),
(434, 14, 0, 42, '101'),
(435, 11, 0, 0, '100'),
(436, 17, 0, 0, '106'),
(437, 4, 1, 24, '1');

-- --------------------------------------------------------

--
-- Table structure for table `effect_trigger`
--

CREATE TABLE `effect_trigger` (
  `id` int(11) NOT NULL,
  `effect_trigger` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `effect_trigger`
--

INSERT INTO `effect_trigger` (`id`, `effect_trigger`) VALUES
(1, 'hover'),
(2, 'click'),
(3, 'load'),
(4, 'focus'),
(5, 'mouseover'),
(6, 'mouseout'),
(7, 'mouseenter'),
(8, 'mouseleave'),
(9, 'blur'),
(10, 'change'),
(11, 'submit'),
(12, 'load'),
(13, 'unload'),
(14, 'resize'),
(15, 'scroll'),
(16, 'keydown'),
(17, 'keyup'),
(18, 'keypress'),
(19, 'dblclick'),
(20, 'DOMContentLoaded');

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(11) NOT NULL,
  `element_name` varchar(255) NOT NULL,
  `element` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `element_name`, `element`) VALUES
(0, '', ''),
(47, 'Heading 1 ', 'h1'),
(48, 'Heading 2 ', 'h2'),
(49, 'Heading 3', 'h3'),
(50, 'Body', 'body'),
(51, 'Paragraph', 'p'),
(52, 'Span', 'span'),
(53, 'Table Header Tag', 'th'),
(54, 'Table Row Tag', 'tr'),
(55, 'Even Table Row', 'tr:nth-child(even)'),
(56, 'Odd Table Row', 'tr:nth-child(odd)'),
(57, 'Hovered Table Row', 'tr:hover'),
(58, 'Table Footer', 'tfoot'),
(59, 'Table Body', 'tbody'),
(60, 'Grid Container ', '.report-container'),
(61, 'Report Table  ', '.report-table '),
(62, 'Grid Template Column', 'grid-template-columns'),
(63, 'Grid Gap', 'grid-gap'),
(64, 'Grid ', 'grid'),
(71, 'Select', 'select'),
(72, 'Radio Input', 'input[type=\"radio\"]'),
(73, 'Checkbox Input', 'input[type=\"checkbox\"]'),
(74, 'File Input', 'input[type=\"file\"]'),
(75, 'Hidden Input', 'input[type=\"hidden\"]'),
(76, 'Submit Input', 'input[type=\"submit\"]'),
(77, 'Button', 'button'),
(78, 'Label', 'label'),
(79, 'Captcha Input', 'input[type=\"captcha\"]'),
(80, 'Checkbox in List', 'ul li input[type=\"checkbox\"]'),
(81, 'Radio in List', 'ul li input[type=\"radio\"]'),
(82, 'Auto Complete Input', 'input[type=\"auto_complete\"]'),
(83, 'Date Input', 'input[type=\"date\"]'),
(84, 'Time Input', 'input[type=\"time\"]'),
(85, 'File Input', 'input[type=\"file\"]'),
(86, 'Textarea', 'textarea'),
(87, 'Multiple Select', 'select[multiple=\"multiple\"]'),
(88, 'Color Input', 'input[type=\"color\"]'),
(89, 'Number Input', 'input[type=\"number\"]'),
(90, 'Email Input', 'input[type=\"email\"]'),
(91, 'URL Input', 'input[type=\"url\"]'),
(92, 'Telephone Input', 'input[type=\"tel\"]'),
(93, 'Range Input', 'input[type=\"range\"]'),
(94, 'Search Input', 'input[type=\"search\"]'),
(95, 'Month Input', 'input[type=\"month\"]'),
(96, 'Week Input', 'input[type=\"week\"]'),
(97, 'Datetime Input', 'input[type=\"datetime\"]'),
(98, 'Datetime-local Input', 'input[type=\"datetime-local\"]'),
(99, 'Form Div', 'div.form'),
(100, 'Form Div Inner', 'div.form'),
(101, 'Form Div Text Input', 'div.form input[type=\"text\"]'),
(102, 'Form Div Password Input', 'div.form input[type=\"password\"]'),
(103, 'Form Div Email Input', 'div.form input[type=\"email\"]'),
(104, 'Form Div Number Input', 'div.form input[type=\"number\"]'),
(105, 'Form Div Color Input', 'div.form input[type=\"color\"]'),
(106, 'Form Div Textarea', 'div.form textarea'),
(107, 'Form Div Label', 'div.form label'),
(108, 'Form Div Select', 'div.form select'),
(109, 'Form Div Submit Input', 'div.form input[type=\"submit\"]'),
(110, 'Form Div Checkbox Input', 'div.form input[type=\"checkbox\"]'),
(111, 'Form Div Radio Input', 'div.form input[type=\"radio\"]'),
(112, 'Table Header ', 'thead'),
(113, 'Table class', '.table'),
(114, 'Table tag', 'table'),
(115, 'Report H2', '.report-container h2'),
(116, 'Table Data Cell', 'td'),
(117, 'Show Entry', '.dataTables_length'),
(118, 'Report Search', '.dataTables_filter'),
(119, 'Report Entry Number', '.dataTables_info'),
(120, 'Report Pagination', '#DataTables_Table_0_paginate');

-- --------------------------------------------------------

--
-- Table structure for table `element_css_properties`
--

CREATE TABLE `element_css_properties` (
  `id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `theme_columns` varchar(500) DEFAULT NULL,
  `css_properties_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `element_css_properties`
--

INSERT INTO `element_css_properties` (`id`, `element_id`, `theme_columns`, `css_properties_id`) VALUES
(1, 2, 'width', 13),
(2, 2, 'padding', 6),
(3, 2, 'border', 4),
(4, 2, 'border_radius', 7),
(5, 2, 'box_sizing', 22),
(6, 2, 'font_size', 18),
(8, 2, 'background_color', 1),
(9, 2, 'color', 19),
(27, 2, 'margin', 5),
(28, 2, 'font_family', 18),
(29, 2, 'display', 8),
(30, 2, 'font_style', 23),
(31, 2, 'border_color', 16),
(32, 2, 'text_align', 12),
(33, 2, 'clear', 24),
(34, 2, 'position', 11),
(36, 2, 'height', 21),
(37, 2, 'text_wrap', 12),
(38, 2, 'box_shadow', 25),
(39, 2, 'opacity', 27),
(40, 2, 'transition_property', 28),
(41, 2, 'transition_duration', 29),
(42, 2, 'transition_timing_function', 30),
(43, 2, 'resize', 31),
(44, 2, 'background', NULL),
(45, 11, 'outline_style', 21),
(46, 2, 'border_style', NULL),
(47, 2, 'border_width', NULL),
(48, 8, 'text_shadow', NULL),
(49, 7, 'background_image', NULL),
(50, 2, 'outline_width', NULL),
(51, 2, 'outline_color', NULL),
(52, 2, 'background_repeat', NULL),
(53, 2, 'background_position', NULL),
(54, 2, 'text_decoration', NULL),
(55, 2, 'border_width', NULL),
(56, 2, 'border_radius', NULL),
(57, 2, 'border_color', NULL),
(58, 2, 'border_style', NULL),
(59, 2, 'background_repeat', NULL),
(60, 2, 'background_position', NULL),
(61, 2, 'box_shadow', NULL),
(62, 2, 'link_color', NULL),
(63, 2, 'text_shadow', NULL),
(64, 2, 'background_position', NULL),
(65, 2, 'background_repeat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `faculty_code` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `theme_column_id` int(11) DEFAULT NULL,
  `column_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_name`, `faculty_code`, `department_id`, `course_id`, `email`, `phone`, `address`, `theme_id`, `theme_column_id`, `column_name`) VALUES
(45, 'Anita Gupta', '9868', 7, 13, 'gauvi099881@gmail.com', '09011689196', 'High Court Aurangabad', NULL, NULL, NULL),
(48, 'Sakshi Joshi', '444', 5, 7, 'sakshi@gmail.com', '91111111111', 'High Court Aurangabad', NULL, NULL, NULL),
(53, 'Vedant Nagpure', '34873', 7, 14, 'gauravidamahe0001@outlook.com', '9011689196', 'Satara Parisar', NULL, NULL, NULL),
(54, 'Test Case', '9879', 7, 13, 'gauravidamahe0001@outlook.com', '+919011689196', 'Satara Parisar', NULL, NULL, NULL),
(58, 'Test Case 02', '98799', 7, 14, 'gauravidamahe0001@outlook.com', '9011689196', 'Satara Parisar', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `FORM_ID` int(11) NOT NULL,
  `FORM_NAME` varchar(128) DEFAULT NULL,
  `BEGIN_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `END_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TYPE_ID` int(10) DEFAULT NULL,
  `CREATED_BY` varchar(255) DEFAULT NULL,
  `LAST_MODIFIED_BY` varchar(255) DEFAULT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LAST_MODIFIED_DATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `orgId` int(11) NOT NULL,
  `proj_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `fm` int(11) NOT NULL,
  `form_type` int(11) NOT NULL,
  `edit_list_filter` varchar(1000) NOT NULL,
  `filter_match_column` varchar(500) NOT NULL,
  `self_mode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`FORM_ID`, `FORM_NAME`, `BEGIN_DATE`, `END_DATE`, `TYPE_ID`, `CREATED_BY`, `LAST_MODIFIED_BY`, `CREATED_DATE`, `LAST_MODIFIED_DATE`, `orgId`, `proj_id`, `module_id`, `fm`, `form_type`, `edit_list_filter`, `filter_match_column`, `self_mode`) VALUES
(1, 'facultyForm', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', 0),
(2, 'departmentForm', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', 0),
(3, 'coursesForm', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', 0),
(4, 'studentForm', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form_element`
--

CREATE TABLE `form_element` (
  `id` int(11) NOT NULL,
  `element_name` varchar(255) NOT NULL,
  `element_type` varchar(255) NOT NULL,
  `input_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_element`
--

INSERT INTO `form_element` (`id`, `element_name`, `element_type`, `input_type`) VALUES
(1, 'Text Field', 'text-field', 'text'),
(2, 'Text Area', 'textarea', 'textarea'),
(3, 'Password Field', 'password-field', 'password'),
(4, 'Drop-down List', 'drop_down_list', 'select'),
(5, 'Radio Button', 'radio_button', 'radio'),
(6, 'Checkboxes', 'checkboxes', 'checkbox'),
(7, 'File Field', 'file_field', 'file'),
(8, 'Hidden Field', 'hidden_field', 'hidden'),
(9, 'Submit Button', 'submit_button', 'submit'),
(10, 'Button', 'button', 'button'),
(11, 'Label', 'label', ''),
(12, 'Captcha', 'captcha', ''),
(13, 'Checkboxes List', 'checkboxes_list', 'checkbox_list'),
(14, 'Radio Button List', 'radio_button_list', 'radio_list'),
(15, 'Auto-Complete Field', 'auto_complete_field', 'text'),
(16, 'Date Picker', 'date_picker', 'text'),
(17, 'Time Picker', 'time_picker', 'text'),
(18, 'File Upload', 'file_upload', 'file'),
(19, 'Rich Text Editor', 'rich_text_editor', 'textarea'),
(20, 'Multiple Select', 'multiple_select', 'select_multiple'),
(21, 'Color Picker', 'color_picker', 'text'),
(22, 'Number Field', 'number_field', 'number'),
(23, 'Email Field', 'email_field', 'email'),
(24, 'URL Field', 'url_field', 'url'),
(25, 'Telephone Field', 'telephone_field', 'tel'),
(26, 'Date Field', 'date_field', 'date'),
(27, 'Time Field', 'time_field', 'time'),
(28, 'Range Field', 'range_field', 'range'),
(29, 'Search Field', 'search_field', 'search'),
(30, 'Month Field', 'month_field', 'month'),
(31, 'Week Field', 'week_field', 'week'),
(32, 'DateTime Field', 'datetime_field', 'datetime'),
(33, 'DateTime-local Field', 'datetime_local_field', 'datetime-local'),
(34, 'Select Field', 'select', 'select'),
(35, 'Input', 'input', 'input\r\n'),
(36, 'Select ', 'select ', 'dropbox text value '),
(37, 'div.from', 'From', ''),
(38, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'Form Input', 'input '),
(39, 'div.form label', 'Form Label', 'Lable'),
(40, 'div.form select\r\n', 'Form select\r\n', 'Select /DropBox '),
(41, 'div.form input[type=\"submit\"]	', 'Form Button', 'submit'),
(42, 'div.form input[type=\"checkbox\"]', 'Form CheckBox ', 'checkbox'),
(43, 'div.form input[type=\"radio\"]', 'Form Radio button', 'radio button');

-- --------------------------------------------------------

--
-- Table structure for table `form_element_css_properties`
--

CREATE TABLE `form_element_css_properties` (
  `id` int(11) NOT NULL,
  `element_id` int(11) DEFAULT NULL,
  `form_element` varchar(255) NOT NULL,
  `css_property` varchar(255) NOT NULL,
  `css_properties_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_element_css_properties`
--

INSERT INTO `form_element_css_properties` (`id`, `element_id`, `form_element`, `css_property`, `css_properties_id`) VALUES
(0, NULL, '', '', NULL),
(1, 35, 'div.form input[type=\"text\"],\r\ndiv.form input[type=\"password\"],\r\ndiv.form input[type=\"email\"],\r\ndiv.form input[type=\"number\"],\r\ndiv.form input[type=\"color\"],\r\ndiv.form textarea', 'width', 13),
(2, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'padding', 6),
(3, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'border', 4),
(4, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'border-radius', NULL),
(5, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'box-sizing', NULL),
(6, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'font-size', NULL),
(7, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'background-color', NULL),
(8, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'color', NULL),
(9, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'margin', NULL),
(10, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'font-weight', NULL),
(11, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'display', NULL),
(12, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'font-style', NULL),
(13, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'border-color', NULL),
(14, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'text-align', NULL),
(15, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'clear', NULL),
(16, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'position', NULL),
(17, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'height', NULL),
(18, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'text-decoration', NULL),
(19, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'box-shadow', NULL),
(20, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'opacity', NULL),
(21, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'transition-property', NULL),
(22, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'transition-duration', NULL),
(23, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'transition-timing-function', NULL),
(24, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'resize', NULL),
(25, 35, 'div.form input[type=\"text\"], div.form input[type=\"password\"], div.form input[type=\"email\"], div.form input[type=\"number\"], div.form input[type=\"color\"], div.form textarea', 'background', NULL),
(26, 11, 'div.form label', 'width', NULL),
(27, 11, 'div.form label', 'padding', NULL),
(28, 11, 'div.form label', 'border', NULL),
(29, 11, 'div.form label', 'border-radius', NULL),
(30, 11, 'div.form label', 'box-sizing', NULL),
(31, 11, 'div.form label', 'font-size', NULL),
(32, 11, 'div.form label', 'background', NULL),
(33, 11, 'div.form label', 'color', NULL),
(34, 11, 'div.form label', 'margin', NULL),
(35, 11, 'div.form label', 'font-weight', NULL),
(36, 11, 'div.form label', 'display', NULL),
(37, 11, 'div.form label', 'font-style', NULL),
(38, 11, 'div.form label', 'border-color', NULL),
(39, 11, 'div.form label', 'text-align', NULL),
(40, 11, 'div.form label', 'clear', NULL),
(41, 11, 'div.form label', 'position', NULL),
(42, 11, 'div.form label', 'height', NULL),
(43, 11, 'div.form label', 'text-decoration', NULL),
(44, 11, 'div.form label', 'box-shadow', NULL),
(45, 11, 'div.form label', 'opacity', NULL),
(46, 11, 'div.form label', 'transition-property', NULL),
(47, 11, 'div.form label', 'transition-duration', NULL),
(48, 11, 'div.form label', 'transition-timing-function', NULL),
(49, 11, 'div.form label', 'resize', NULL),
(50, 11, 'div.form label', 'background', NULL),
(51, 36, 'div.form select', 'width', NULL),
(52, 36, 'div.form select', 'padding', NULL),
(53, 36, 'div.form select', 'border', NULL),
(54, 36, 'div.form select', 'border-radius', NULL),
(55, 36, 'div.form select', 'box-sizing', NULL),
(56, 36, 'div.form select', 'font-size', NULL),
(57, 36, 'div.form select', 'background-color', NULL),
(58, 36, 'div.form select', 'color', NULL),
(59, 36, 'div.form select', 'margin', NULL),
(60, 36, 'div.form select', 'font-weight', NULL),
(61, 36, 'div.form select', 'display', NULL),
(62, 36, 'div.form select', 'font-style', NULL),
(63, 36, 'div.form select', 'border-color', NULL),
(64, 36, 'div.form select', 'text-align', NULL),
(65, 36, 'div.form select', 'clear', NULL),
(66, 36, 'div.form select', 'position', NULL),
(67, 36, 'div.form select', 'height', NULL),
(68, 36, 'div.form select', 'text-decoration', NULL),
(69, 36, 'div.form select', 'box-shadow', NULL),
(70, 36, 'div.form select', 'opacity', NULL),
(71, 36, 'div.form select', 'transition-property', NULL),
(72, 36, 'div.form select', 'transition-duration', NULL),
(73, 36, 'div.form select', 'transition-timing-function', NULL),
(74, 36, 'div.form select', 'resize', NULL),
(75, 36, 'div.form select', 'background', NULL),
(76, 10, 'div.form input[type=\"submit\"]', 'width', NULL),
(77, 10, 'div.form input[type=\"submit\"]', 'padding', NULL),
(78, 10, 'div.form input[type=\"submit\"]', 'border', NULL),
(79, 10, 'div.form input[type=\"submit\"]', 'border-radius', NULL),
(80, 10, 'div.form input[type=\"submit\"]', 'box-sizing', NULL),
(81, 10, 'div.form input[type=\"submit\"]', 'font-size', NULL),
(82, 10, 'div.form input[type=\"submit\"]', 'background-color', NULL),
(83, 10, 'div.form input[type=\"submit\"]', 'color', NULL),
(84, 10, 'div.form input[type=\"submit\"]', 'margin', NULL),
(85, 10, 'div.form input[type=\"submit\"]', 'font-weight', NULL),
(86, 10, 'div.form input[type=\"submit\"]', 'display', NULL),
(87, 10, 'div.form input[type=\"submit\"]', 'font-style', NULL),
(88, 10, 'div.form input[type=\"submit\"]', 'border-color', NULL),
(89, 10, 'div.form input[type=\"submit\"]', 'text-align', NULL),
(90, 10, 'div.form input[type=\"submit\"]', 'clear', NULL),
(91, 10, 'div.form input[type=\"submit\"]', 'position', NULL),
(92, 10, 'div.form input[type=\"submit\"]', 'height', NULL),
(93, 10, 'div.form input[type=\"submit\"]', 'text-decoration', NULL),
(94, 10, 'div.form input[type=\"submit\"]', 'box-shadow', NULL),
(95, 10, 'div.form input[type=\"submit\"]', 'opacity', NULL),
(96, 10, 'div.form input[type=\"submit\"]', 'transition-property', NULL),
(97, 10, 'div.form input[type=\"submit\"]', 'transition-duration', NULL),
(98, 10, 'div.form input[type=\"submit\"]', 'transition-timing-function', NULL),
(99, 10, 'div.form input[type=\"submit\"]', 'resize', NULL),
(100, 10, 'div.form input[type=\"submit\"]', 'background', NULL),
(102, 37, 'div.form', 'width', NULL),
(103, 37, 'div.form', 'padding', NULL),
(104, 37, 'div.form', 'border', NULL),
(105, 37, 'div.form', 'border-radius', NULL),
(106, 37, 'div.form', 'box-sizing', NULL),
(107, 37, 'div.form', 'font-size', NULL),
(108, 37, 'div.form', 'background-color', NULL),
(109, 37, 'div.form', 'color', NULL),
(110, 37, 'div.form', 'margin', NULL),
(111, 37, 'div.form', 'font-weight', NULL),
(112, 37, 'div.form', 'display', NULL),
(113, 37, 'div.form', 'font-style', NULL),
(114, 37, 'div.form', 'border-color', NULL),
(115, 37, 'div.form', 'text-align', NULL),
(116, 37, 'div.form', 'clear', NULL),
(117, 37, 'div.form', 'position', NULL),
(118, 37, 'div.form', 'height', NULL),
(119, 37, 'div.form', 'text-decoration', NULL),
(120, 37, 'div.form', 'box-shadow', NULL),
(121, 37, 'div.form', 'opacity', NULL),
(122, 37, 'div.form', 'transition-property', NULL),
(123, 37, 'div.form', 'transition-duration', NULL),
(124, 37, 'div.form', 'transition-timing-function', NULL),
(125, 37, 'div.form', 'resize', NULL),
(126, 37, 'div.form', 'background', NULL),
(127, 6, 'div.form input[type=\"checkbox\"]', 'width', NULL),
(128, 6, 'div.form input[type=\"checkbox\"]', 'height', NULL),
(129, 6, 'div.form input[type=\"checkbox\"]', 'border', NULL),
(130, 6, 'div.form input[type=\"checkbox\"]', 'border-radius', NULL),
(131, 6, 'div.form input[type=\"checkbox\"]', 'background-color', NULL),
(132, 6, 'div.form input[type=\"checkbox\"]', 'color', NULL),
(133, 6, 'div.form input[type=\"checkbox\"]', 'padding', NULL),
(134, 6, 'div.form input[type=\"checkbox\"]', 'margin', NULL),
(135, 6, 'div.form input[type=\"checkbox\"]', 'display', NULL),
(136, 6, 'div.form input[type=\"checkbox\"]', 'position', NULL),
(137, 6, 'div.form input[type=\"checkbox\"]', 'text-align', NULL),
(138, 6, 'div.form input[type=\"checkbox\"]', 'color', NULL),
(139, 6, 'div.form input[type=\"checkbox\"]', 'clear', NULL),
(140, 6, 'div.form input[type=\"checkbox\"]', 'outline', NULL),
(141, 6, 'div.form input[type=\"checkbox\"]', 'font-size', NULL),
(142, 5, 'div.form input[type=\"radio\"]', 'width', NULL),
(143, 5, 'div.form input[type=\"radio\"]', 'height', NULL),
(144, 5, 'div.form input[type=\"radio\"]', 'border', NULL),
(145, 5, 'div.form input[type=\"radio\"]', 'border-radius', NULL),
(146, 5, 'div.form input[type=\"radio\"]', 'background-color', NULL),
(147, 5, 'div.form input[type=\"radio\"]', 'color', NULL),
(148, 5, 'div.form input[type=\"radio\"]', 'padding', NULL),
(149, 5, 'div.form input[type=\"radio\"]', 'margin', NULL),
(150, 5, 'div.form input[type=\"radio\"]', 'display', NULL),
(151, 5, 'div.form input[type=\"radio\"]', 'position', NULL),
(152, 5, 'div.form input[type=\"radio\"]', 'text-align', NULL),
(153, 5, 'div.form input[type=\"radio\"]', 'vertical-align', NULL),
(154, 5, 'div.form input[type=\"radio\"]', 'cursor', NULL),
(155, 5, 'div.form input[type=\"radio\"]', 'outline', NULL),
(156, 5, 'div.form input[type=\"radio\"]', 'opacity', NULL),
(157, 5, 'div.form input[type=\"radio\"]', 'border-color', 16),
(158, 5, 'div.form input[type=\"radio\"]', 'font-size', 2),
(159, 5, 'div.form input[type=\"radio\"]', 'font-weight', 18),
(160, 5, 'div.form input[type=\"radio\"]', 'font-style', 23);

-- --------------------------------------------------------

--
-- Table structure for table `form_element_css_properties_theme_mapping`
--

CREATE TABLE `form_element_css_properties_theme_mapping` (
  `id` int(11) NOT NULL,
  `theme_ID` int(11) NOT NULL,
  `form_element_css_properties_id` int(11) NOT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_element_css_properties_theme_mapping`
--

INSERT INTO `form_element_css_properties_theme_mapping` (`id`, `theme_ID`, `form_element_css_properties_id`, `value`) VALUES
(8161, 362, 0, NULL),
(8162, 362, 1, '150px'),
(8163, 362, 2, '2px'),
(8164, 362, 3, 'Solid 2px red '),
(8165, 362, 4, '4px'),
(8166, 362, 5, NULL),
(8167, 362, 6, NULL),
(8168, 362, 7, '#f2f2f2'),
(8169, 362, 8, '#d9d9d9'),
(8170, 362, 9, NULL),
(8171, 362, 10, 'normal'),
(8172, 362, 11, 'block'),
(8173, 362, 12, 'normal'),
(8174, 362, 13, '#f7f7f7'),
(8175, 362, 14, 'left'),
(8176, 362, 15, 'none'),
(8177, 362, 16, 'static'),
(8178, 362, 17, '100px'),
(8179, 362, 18, 'none'),
(8180, 362, 19, NULL),
(8181, 362, 20, NULL),
(8182, 362, 21, NULL),
(8183, 362, 22, NULL),
(8184, 362, 23, 'linear'),
(8185, 362, 24, 'none'),
(8186, 362, 25, NULL),
(8187, 362, 26, NULL),
(8188, 362, 27, NULL),
(8189, 362, 28, NULL),
(8190, 362, 29, NULL),
(8191, 362, 30, ' ?>'),
(8192, 362, 31, NULL),
(8193, 362, 32, '#000000'),
(8194, 362, 33, '#000000'),
(8195, 362, 34, NULL),
(8196, 362, 35, 'normal'),
(8197, 362, 36, 'block'),
(8198, 362, 37, 'normal'),
(8199, 362, 38, '#000000'),
(8200, 362, 39, 'left'),
(8201, 362, 40, 'none'),
(8202, 362, 41, 'static'),
(8203, 362, 42, '30px'),
(8204, 362, 43, 'none'),
(8205, 362, 44, NULL),
(8206, 362, 45, NULL),
(8207, 362, 46, NULL),
(8208, 362, 47, NULL),
(8209, 362, 48, 'linear'),
(8210, 362, 49, 'none'),
(8211, 362, 50, NULL),
(8212, 362, 51, NULL),
(8213, 362, 52, NULL),
(8214, 362, 53, NULL),
(8215, 362, 54, NULL),
(8216, 362, 55, NULL),
(8217, 362, 56, NULL),
(8218, 362, 57, NULL),
(8219, 362, 58, NULL),
(8220, 362, 59, NULL),
(8221, 362, 60, NULL),
(8222, 362, 61, NULL),
(8223, 362, 62, NULL),
(8224, 362, 63, NULL),
(8225, 362, 64, NULL),
(8226, 362, 65, NULL),
(8227, 362, 66, NULL),
(8228, 362, 67, NULL),
(8229, 362, 68, NULL),
(8230, 362, 69, NULL),
(8231, 362, 70, NULL),
(8232, 362, 71, NULL),
(8233, 362, 72, NULL),
(8234, 362, 73, NULL),
(8235, 362, 74, NULL),
(8236, 362, 75, NULL),
(8237, 362, 76, NULL),
(8238, 362, 77, NULL),
(8239, 362, 78, NULL),
(8240, 362, 79, NULL),
(8241, 362, 80, NULL),
(8242, 362, 81, NULL),
(8243, 362, 82, NULL),
(8244, 362, 83, NULL),
(8245, 362, 84, NULL),
(8246, 362, 85, NULL),
(8247, 362, 86, NULL),
(8248, 362, 87, NULL),
(8249, 362, 88, NULL),
(8250, 362, 89, NULL),
(8251, 362, 90, NULL),
(8252, 362, 91, NULL),
(8253, 362, 92, NULL),
(8254, 362, 93, NULL),
(8255, 362, 94, NULL),
(8256, 362, 95, NULL),
(8257, 362, 96, NULL),
(8258, 362, 97, NULL),
(8259, 362, 98, NULL),
(8260, 362, 99, NULL),
(8261, 362, 100, NULL),
(8262, 362, 102, NULL),
(8263, 362, 103, NULL),
(8264, 362, 104, NULL),
(8265, 362, 105, NULL),
(8266, 362, 106, NULL),
(8267, 362, 107, NULL),
(8268, 362, 108, NULL),
(8269, 362, 109, NULL),
(8270, 362, 110, NULL),
(8271, 362, 111, NULL),
(8272, 362, 112, NULL),
(8273, 362, 113, NULL),
(8274, 362, 114, NULL),
(8275, 362, 115, NULL),
(8276, 362, 116, NULL),
(8277, 362, 117, NULL),
(8278, 362, 118, NULL),
(8279, 362, 119, NULL),
(8280, 362, 120, NULL),
(8281, 362, 121, NULL),
(8282, 362, 122, NULL),
(8283, 362, 123, NULL),
(8284, 362, 124, NULL),
(8285, 362, 125, NULL),
(8286, 362, 126, NULL),
(8287, 362, 127, NULL),
(8288, 362, 128, NULL),
(8289, 362, 129, NULL),
(8290, 362, 130, NULL),
(8291, 362, 131, NULL),
(8292, 362, 132, NULL),
(8293, 362, 133, NULL),
(8294, 362, 134, NULL),
(8295, 362, 135, NULL),
(8296, 362, 136, NULL),
(8297, 362, 137, NULL),
(8298, 362, 138, NULL),
(8299, 362, 139, NULL),
(8300, 362, 140, NULL),
(8301, 362, 141, NULL),
(8302, 362, 142, NULL),
(8303, 362, 143, NULL),
(8304, 362, 144, NULL),
(8305, 362, 145, NULL),
(8306, 362, 146, NULL),
(8307, 362, 147, NULL),
(8308, 362, 148, NULL),
(8309, 362, 149, NULL),
(8310, 362, 150, NULL),
(8311, 362, 151, NULL),
(8312, 362, 152, NULL),
(8313, 362, 153, NULL),
(8314, 362, 154, NULL),
(8315, 362, 155, NULL),
(8316, 362, 156, NULL),
(8317, 362, 157, NULL),
(8318, 362, 158, NULL),
(8319, 362, 159, NULL),
(8320, 362, 160, NULL),
(8321, 121, 0, NULL),
(8322, 121, 1, '150px'),
(8323, 121, 2, NULL),
(8324, 121, 3, NULL),
(8325, 121, 4, NULL),
(8326, 121, 5, NULL),
(8327, 121, 6, NULL),
(8328, 121, 7, '#92f7b0'),
(8329, 121, 8, '#bbecc8'),
(8330, 121, 9, NULL),
(8331, 121, 10, 'normal'),
(8332, 121, 11, 'block'),
(8333, 121, 12, 'normal'),
(8334, 121, 13, '#4b0b0b'),
(8335, 121, 14, 'left'),
(8336, 121, 15, 'none'),
(8337, 121, 16, 'static'),
(8338, 121, 17, '30px'),
(8339, 121, 18, 'none'),
(8340, 121, 19, NULL),
(8341, 121, 20, NULL),
(8342, 121, 21, NULL),
(8343, 121, 22, NULL),
(8344, 121, 23, 'linear'),
(8345, 121, 24, 'none'),
(8346, 121, 25, NULL),
(8347, 121, 26, NULL),
(8348, 121, 27, NULL),
(8349, 121, 28, NULL),
(8350, 121, 29, NULL),
(8351, 121, 30, NULL),
(8352, 121, 31, NULL),
(8353, 121, 32, NULL),
(8354, 121, 33, NULL),
(8355, 121, 34, NULL),
(8356, 121, 35, NULL),
(8357, 121, 36, NULL),
(8358, 121, 37, NULL),
(8359, 121, 38, NULL),
(8360, 121, 39, NULL),
(8361, 121, 40, NULL),
(8362, 121, 41, NULL),
(8363, 121, 42, NULL),
(8364, 121, 43, NULL),
(8365, 121, 44, NULL),
(8366, 121, 45, NULL),
(8367, 121, 46, NULL),
(8368, 121, 47, NULL),
(8369, 121, 48, NULL),
(8370, 121, 49, NULL),
(8371, 121, 50, NULL),
(8372, 121, 51, NULL),
(8373, 121, 52, NULL),
(8374, 121, 53, NULL),
(8375, 121, 54, NULL),
(8376, 121, 55, NULL),
(8377, 121, 56, NULL),
(8378, 121, 57, NULL),
(8379, 121, 58, NULL),
(8380, 121, 59, NULL),
(8381, 121, 60, NULL),
(8382, 121, 61, NULL),
(8383, 121, 62, NULL),
(8384, 121, 63, NULL),
(8385, 121, 64, NULL),
(8386, 121, 65, NULL),
(8387, 121, 66, NULL),
(8388, 121, 67, NULL),
(8389, 121, 68, NULL),
(8390, 121, 69, NULL),
(8391, 121, 70, NULL),
(8392, 121, 71, NULL),
(8393, 121, 72, NULL),
(8394, 121, 73, NULL),
(8395, 121, 74, NULL),
(8396, 121, 75, NULL),
(8397, 121, 76, NULL),
(8398, 121, 77, NULL),
(8399, 121, 78, NULL),
(8400, 121, 79, NULL),
(8401, 121, 80, NULL),
(8402, 121, 81, NULL),
(8403, 121, 82, NULL),
(8404, 121, 83, NULL),
(8405, 121, 84, NULL),
(8406, 121, 85, NULL),
(8407, 121, 86, NULL),
(8408, 121, 87, NULL),
(8409, 121, 88, NULL),
(8410, 121, 89, NULL),
(8411, 121, 90, NULL),
(8412, 121, 91, NULL),
(8413, 121, 92, NULL),
(8414, 121, 93, NULL),
(8415, 121, 94, NULL),
(8416, 121, 95, NULL),
(8417, 121, 96, NULL),
(8418, 121, 97, NULL),
(8419, 121, 98, NULL),
(8420, 121, 99, NULL),
(8421, 121, 100, NULL),
(8422, 121, 102, NULL),
(8423, 121, 103, NULL),
(8424, 121, 104, NULL),
(8425, 121, 105, NULL),
(8426, 121, 106, NULL),
(8427, 121, 107, NULL),
(8428, 121, 108, NULL),
(8429, 121, 109, NULL),
(8430, 121, 110, NULL),
(8431, 121, 111, NULL),
(8432, 121, 112, NULL),
(8433, 121, 113, NULL),
(8434, 121, 114, NULL),
(8435, 121, 115, NULL),
(8436, 121, 116, NULL),
(8437, 121, 117, NULL),
(8438, 121, 118, NULL),
(8439, 121, 119, NULL),
(8440, 121, 120, NULL),
(8441, 121, 121, NULL),
(8442, 121, 122, NULL),
(8443, 121, 123, NULL),
(8444, 121, 124, NULL),
(8445, 121, 125, NULL),
(8446, 121, 126, NULL),
(8447, 121, 127, NULL),
(8448, 121, 128, NULL),
(8449, 121, 129, NULL),
(8450, 121, 130, NULL),
(8451, 121, 131, NULL),
(8452, 121, 132, NULL),
(8453, 121, 133, NULL),
(8454, 121, 134, NULL),
(8455, 121, 135, NULL),
(8456, 121, 136, NULL),
(8457, 121, 137, NULL),
(8458, 121, 138, NULL),
(8459, 121, 139, NULL),
(8460, 121, 140, NULL),
(8461, 121, 141, NULL),
(8462, 121, 142, NULL),
(8463, 121, 143, NULL),
(8464, 121, 144, NULL),
(8465, 121, 145, NULL),
(8466, 121, 146, NULL),
(8467, 121, 147, NULL),
(8468, 121, 148, NULL),
(8469, 121, 149, NULL),
(8470, 121, 150, NULL),
(8471, 121, 151, NULL),
(8472, 121, 152, NULL),
(8473, 121, 153, NULL),
(8474, 121, 154, NULL),
(8475, 121, 155, NULL),
(8476, 121, 156, NULL),
(8477, 121, 157, NULL),
(8478, 121, 158, NULL),
(8479, 121, 159, NULL),
(8480, 121, 160, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form_element_theme_mapping`
--

CREATE TABLE `form_element_theme_mapping` (
  `id` int(11) NOT NULL,
  `application_forms_id` int(11) NOT NULL,
  `form_element_id` int(11) NOT NULL,
  `theme_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_element_theme_mapping`
--

INSERT INTO `form_element_theme_mapping` (`id`, `application_forms_id`, `form_element_id`, `theme_ID`) VALUES
(1, 1, 11, 1),
(2, 1, 1, 2),
(3, 6, 6, 4),
(4, 1, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `form_fields`
--

CREATE TABLE `form_fields` (
  `FIELD_ID` int(11) NOT NULL,
  `FORM_ID` int(10) DEFAULT NULL,
  `TITLE` varchar(255) NOT NULL DEFAULT '',
  `REQUIRED` int(1) NOT NULL DEFAULT '0',
  `f_MATCH` varchar(255) NOT NULL DEFAULT '',
  `f_RANGE` varchar(255) NOT NULL DEFAULT '',
  `ERROR_MESSAGE` varchar(255) NOT NULL DEFAULT '',
  `OTHER_VALIDATOR` text,
  `WIDGET` varchar(255) NOT NULL DEFAULT '',
  `WIDGETPARAMS` text,
  `POSITION` int(3) NOT NULL DEFAULT '0',
  `VISIBLE` int(1) NOT NULL DEFAULT '0',
  `FORMULA_ID` varchar(50) NOT NULL,
  `INPUT_TYPE` varchar(100) NOT NULL,
  `field_condition_flag` int(11) NOT NULL,
  `filter_query` text NOT NULL,
  `CRUD_VIEW` int(11) NOT NULL,
  `dependent_on` int(11) NOT NULL,
  `dependent_ParentCol` varchar(200) NOT NULL,
  `onchange` int(11) NOT NULL,
  `parent_ConnectedCol` varchar(200) NOT NULL,
  `add_more` int(11) NOT NULL,
  `addMore_inRowOf` int(11) NOT NULL,
  `upload_folder` varchar(200) NOT NULL,
  `language_id` int(11) NOT NULL,
  `unique_flag` int(11) NOT NULL,
  `parent_unique_column` varchar(100) NOT NULL,
  `unique_combination` varchar(500) NOT NULL,
  `active_language_event_table` varchar(200) NOT NULL,
  `active_language_event_column` varchar(200) NOT NULL,
  `readonly` int(11) NOT NULL,
  `form_multivalue_mapping_tableName` varchar(100) NOT NULL,
  `multivalue_mapping_form_value` varchar(200) NOT NULL,
  `multivalue_mapping_data_value` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `external_field` int(11) NOT NULL,
  `table_column_id` int(11) NOT NULL,
  `label_note` varchar(100) NOT NULL,
  `parent_data_entry` int(11) NOT NULL,
  `order_by` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_fields`
--

INSERT INTO `form_fields` (`FIELD_ID`, `FORM_ID`, `TITLE`, `REQUIRED`, `f_MATCH`, `f_RANGE`, `ERROR_MESSAGE`, `OTHER_VALIDATOR`, `WIDGET`, `WIDGETPARAMS`, `POSITION`, `VISIBLE`, `FORMULA_ID`, `INPUT_TYPE`, `field_condition_flag`, `filter_query`, `CRUD_VIEW`, `dependent_on`, `dependent_ParentCol`, `onchange`, `parent_ConnectedCol`, `add_more`, `addMore_inRowOf`, `upload_folder`, `language_id`, `unique_flag`, `parent_unique_column`, `unique_combination`, `active_language_event_table`, `active_language_event_column`, `readonly`, `form_multivalue_mapping_tableName`, `multivalue_mapping_form_value`, `multivalue_mapping_data_value`, `comment`, `external_field`, `table_column_id`, `label_note`, `parent_data_entry`, `order_by`) VALUES
(1, 2, 'department_code', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(2, 2, 'department_name', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(3, 2, 'department_desc', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(4, 2, 'department_btn', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(7, 3, 'header', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(8, 3, 'course_link', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(9, 3, 'course_name', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(10, 3, 'course_page_department_id', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(11, 3, 'course_page_course_type', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(12, 3, 'course_btn', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(13, 1, 'header', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(14, 1, 'faculty_name', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(15, 1, 'faculty_code', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(16, 1, 'faculty_department_id', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(17, 1, 'faculty_course_type', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(18, 1, 'faculty_course', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(19, 1, 'faculty_email', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(20, 1, 'faculty_phone', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(21, 1, 'faculty_address', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(22, 1, 'faculty_btn', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(23, 4, 'student-id', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(24, 4, 'first-name', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(25, 4, 'last-name', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(26, 4, 'date-of-birth', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(27, 4, 'address', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(28, 4, 'phone-number', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(29, 4, 'email-address', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(30, 4, 'department-id', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(31, 4, 'course-type-id', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(32, 4, 'course-id', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(33, 4, 'major', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(34, 4, 'academic-status', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(35, 4, 'theme-ID', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(36, 4, 'emergency-contact-name', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(37, 4, 'emergency-contact-phone', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(38, 4, 'emergency-contact-relationship', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(39, 4, 'student_btn', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, ''),
(42, 4, 'table td:nth-child(8)', 0, '', '', '', NULL, '', NULL, 0, 0, '', '', 0, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, 0, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `form_field_cssproperty_value_mapping`
--

CREATE TABLE `form_field_cssproperty_value_mapping` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `css_property_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_field_cssproperty_value_mapping`
--

INSERT INTO `form_field_cssproperty_value_mapping` (`id`, `form_id`, `field_id`, `css_property_id`, `value`) VALUES
(15, 3, 7, 32, 'green'),
(16, 4, 26, 16, 'green'),
(17, 2, 2, 23, 'italic'),
(18, 2, 2, 4, '3px solid dotted'),
(19, 2, 1, 7, '5px'),
(20, 4, 39, 1, 'green'),
(21, 2, 2, 6, '20px'),
(22, 2, 1, 1, 'grey'),
(23, 4, 24, 1, 'grey'),
(24, 4, 23, 4, '2px solid yellow'),
(25, 1, 15, 1, 'blue'),
(26, 4, 27, 1, 'purple'),
(27, 3, 9, 1, 'green'),
(28, 4, 29, 1, 'orange');

-- --------------------------------------------------------

--
-- Table structure for table `form_theme_mapping`
--

CREATE TABLE `form_theme_mapping` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `theme_ID` int(11) NOT NULL,
  `theme_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_theme_mapping`
--

INSERT INTO `form_theme_mapping` (`id`, `form_id`, `theme_ID`, `theme_name`, `controller`, `action`) VALUES
(116, 2, 362, NULL, 'departments', 'create'),
(117, 3, 121, NULL, 'courses', 'create'),
(118, 4, 121, NULL, 'studentInformation', 'create');

-- --------------------------------------------------------

--
-- Table structure for table `function_argument_map`
--

CREATE TABLE `function_argument_map` (
  `id` int(11) NOT NULL,
  `function_library_id` int(11) NOT NULL,
  `argument_name` varchar(255) NOT NULL,
  `argument` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_argument_map`
--

INSERT INTO `function_argument_map` (`id`, `function_library_id`, `argument_name`, `argument`) VALUES
(7, 7, 'NO PARAMETER NEEDED', ''),
(8, 8, 'Criteria Value', 'markParameter'),
(9, 11, 'Number to Compare', 'value'),
(10, 7, 'Minimum', 'para2'),
(11, 10, 'String to Check', 'value2'),
(12, 9, 'Maximum', 'max'),
(13, 12, 'Minimum Range', 'rangeMin'),
(14, 12, 'Maximum Range', 'rangeMax');

-- --------------------------------------------------------

--
-- Table structure for table `function_category`
--

CREATE TABLE `function_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_category`
--

INSERT INTO `function_category` (`id`, `category`, `description`) VALUES
(1, 'Styling ', 'Add Styling to web application componenets and content '),
(2, 'Scripting ', 'Add script to manipulate element and content using javascript ');

-- --------------------------------------------------------

--
-- Table structure for table `function_library`
--

CREATE TABLE `function_library` (
  `id` int(11) NOT NULL,
  `function_display_name` varchar(255) NOT NULL,
  `function_name` varchar(500) NOT NULL,
  `function_description` text NOT NULL,
  `syntax` text NOT NULL,
  `class_name` varchar(200) NOT NULL,
  `parameter_description` text NOT NULL,
  `return_type` int(11) NOT NULL,
  `function_type` int(11) NOT NULL,
  `button_function` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_library`
--

INSERT INTO `function_library` (`id`, `function_display_name`, `function_name`, `function_description`, `syntax`, `class_name`, `parameter_description`, `return_type`, `function_type`, `button_function`) VALUES
(7, 'Calculate Minimum', 'calculateMin', 'Calculate the min value out of given numbers ', 'function calculateMin(numbers) {\r\n        return Math.min(...numbers);\r\n    }', '', '1. Numbers : Take multiple numbers as series ', 1, 1, 0),
(8, 'Compare with Given number(Value)', 'checkPassFail', 'This function is to set a passing criteria with a mark \r\n\r\nExample 30 is threshold\r\n\r\nif value of column is < 30 false\r\n                      else true \r\n\r\n', 'function checkPassFail(value, markParameter) {\r\n    if (value >= markParameter) {\r\n        return true;\r\n    } else {\r\n        return false;\r\n    }\r\n}', '', 'It have two parameters value that is to be checked and markParameter (criteria of passing)', 3, 1, 0),
(9, 'Maximum', 'calculateMax', 'Calculate maximum out of given range ', 'function calculateMax(numbers) {\r\n    return Math.max(...numbers);\r\n}\r\n', '', 'Array range of numbers', 1, 1, 0),
(10, 'Check String', 'stringCheck', 'Check if value string is equal to given string ', 'function stringCheck(value, checkStrings) {\r\n    return checkStrings.includes(value);\r\n}\r\n', '', 'value  - value of column index \r\n\r\ncheckString - String to check with ', 3, 1, 0),
(11, 'Check Equality Of Two', 'checkEqualityOfTwo', 'Check equality of two number', 'function checkEqualityOfTwo(value1, value2) {\r\n            return value1 === value2;\r\n        }', '', 'Take two numberic parameters', 3, 1, 0),
(12, 'In Range ', 'isInRange', ' returns true if test Number is greater than minValue and smaller then maxValue\r\nparam Integer var value is the Number to be tested.\r\nparam Integer var minValue is the lower limit.\r\nparam Integer var maxValue is the upper limit.\r\nreturn boolean true or false.\r\n', 'function isInRange(value, minValue, maxValue) {\r\n    return value>minValue && value<maxValue;\r\n}', '.', '2 parameter max and min that defines a range', 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `function_library_manager`
--

CREATE TABLE `function_library_manager` (
  `id` int(11) NOT NULL,
  `function_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `enforcement_date_time` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `expiry_datetime` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `access_id` varchar(11) NOT NULL,
  `view_access_id` varchar(100) NOT NULL,
  `original_filename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_library_manager`
--

INSERT INTO `function_library_manager` (`id`, `function_id`, `category_id`, `subcategory_id`, `enforcement_date_time`, `expiry_datetime`, `creation_date`, `status`, `group_id`, `access_id`, `view_access_id`, `original_filename`) VALUES
(1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2024-01-31 11:08:16', 0, 0, '', '', ''),
(2, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2024-02-01 13:24:32', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `function_subcategory`
--

CREATE TABLE `function_subcategory` (
  `id` int(11) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_subcategory`
--

INSERT INTO `function_subcategory` (`id`, `subcategory`, `description`, `category_id`) VALUES
(1, 'Text Style', 'This function text and change styling for text ', 1),
(6, 'Element Styling ', 'This function add style to elements such as input field,button , lables ', 1),
(7, 'Page Script ', 'This add script to whole page manipulate or effecting whole page load , content load or others ', 2),
(8, 'Element Script ', 'This manipulate elements of web application  ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `function_type`
--

CREATE TABLE `function_type` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `function_type`
--

INSERT INTO `function_type` (`id`, `type`, `description`) VALUES
(1, 'Integer Function', 'Script which add styling and dynamic effects to elements of web pages using javascript , return a script to append to append on page ');

-- --------------------------------------------------------

--
-- Table structure for table `night_time_settings`
--

CREATE TABLE `night_time_settings` (
  `id` int(11) NOT NULL,
  `nightStart` time DEFAULT NULL,
  `nightEnd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `night_time_settings`
--

INSERT INTO `night_time_settings` (`id`, `nightStart`, `nightEnd`) VALUES
(1, '23:00:00', '06:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `report_name` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `reportColumn` varchar(255) NOT NULL,
  `reportRow` varchar(255) NOT NULL,
  `report_table_id` varchar(255) NOT NULL,
  `report_grid_container_id` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `report_name`, `query`, `reportColumn`, `reportRow`, `report_table_id`, `report_grid_container_id`, `details`) VALUES
(2, 'Report', 'SELECT first_name,last_name,percentage,course_id,academic_status FROM student_information', 'Roll No., Name, English, Maths, Science, Computer Science, Social Studies, Percent %', '0', '', '', 'test '),
(3, 'Demo', '', '0', '0', '', '', 'Demo'),
(4, 'Theme of Report Dynamic table ', 'ThemeForReport', '0', '0', 'report-table', 'report-container', 'Complete Dynamic Table '),
(5, 'Manage', 'TableTheme', '.', '.', 'report-table', 'report-container', 'Table Theme Report'),
(6, 'Student Report ', 'SELECT first_name,last_name,percentage,course_id,academic_status FROM student_information', 'first_name,last_name,percentage,marks,course_id,academic_status', '', '', '', 'Student Information Report with Name , course ,major,academic_status'),
(7, 'Course Dynamic Report', 'SELECT id,course_name,course_link FROM courses', 'id,course_name,course_link', '', '', '', ''),
(8, 'Customer', '.', 'CustomerID,FirstName,LastName,Email,PhoneNumber,RegistrationDate,PremiumMember,Balance', '', 'report-table', 'report-container', 'Customer Report ');

-- --------------------------------------------------------

--
-- Table structure for table `report_element_css_set`
--

CREATE TABLE `report_element_css_set` (
  `id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `css_property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_element_css_set`
--

INSERT INTO `report_element_css_set` (`id`, `element_id`, `css_property_id`) VALUES
(1, 60, 32),
(2, 60, 33),
(3, 60, 34),
(4, 60, 35),
(5, 60, 36),
(6, 60, 1),
(7, 60, 7),
(8, 60, 6),
(9, 60, 37),
(10, 60, 13),
(11, 60, 5),
(12, 115, 12),
(13, 115, 38),
(14, 115, 3),
(15, 115, 2),
(16, 61, 13),
(17, 61, 39),
(18, 61, 40),
(19, 61, 41),
(20, 61, 1),
(21, 53, 6),
(22, 53, 4),
(23, 53, 1),
(24, 53, 3),
(25, 53, 18),
(26, 55, 1),
(27, 56, 1),
(28, 57, 1),
(29, 116, 6),
(30, 116, 4),
(31, 116, 3),
(32, 58, 1),
(33, 58, 3),
(34, 58, 18),
(35, 53, 2),
(36, 116, 37),
(37, 116, 2),
(38, 116, 23),
(39, 117, 3),
(40, 117, 18),
(41, 117, 2),
(42, 118, 3),
(43, 118, 18),
(44, 118, 2),
(45, 119, 2),
(46, 119, 3),
(47, 119, 18),
(48, 120, 2),
(49, 120, 18);

-- --------------------------------------------------------

--
-- Table structure for table `report_function_action_mapping`
--

CREATE TABLE `report_function_action_mapping` (
  `id` int(11) NOT NULL,
  `report_function_mapping_id` int(11) NOT NULL,
  `action_library_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_function_action_mapping`
--

INSERT INTO `report_function_action_mapping` (`id`, `report_function_mapping_id`, `action_library_id`) VALUES
(1, 1, 15),
(2, 1, 1),
(3, 2, 1),
(4, 3, 2),
(281, 1511, 1),
(282, 1511, 15),
(283, 1511, 2),
(288, 1514, 1),
(289, 1515, 15),
(290, 1515, 2),
(291, 1516, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report_function_arg_value_mapping`
--

CREATE TABLE `report_function_arg_value_mapping` (
  `id` int(11) NOT NULL,
  `report_function_mapping_id` int(11) NOT NULL,
  `function_argument_map_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_function_arg_value_mapping`
--

INSERT INTO `report_function_arg_value_mapping` (`id`, `report_function_mapping_id`, `function_argument_map_id`, `value`) VALUES
(111, 1, 13, '10'),
(112, 1, 14, '90'),
(113, 2, 8, '30'),
(114, 3, 11, 'Enrolled'),
(613, 1511, 11, 'B.com'),
(617, 1514, 8, '1'),
(618, 1515, 13, '200'),
(619, 1515, 14, '550.50'),
(620, 1516, 8, '300.75');

-- --------------------------------------------------------

--
-- Table structure for table `report_function_mapping_action_value`
--

CREATE TABLE `report_function_mapping_action_value` (
  `id` int(11) NOT NULL,
  `report_function_action_mapping_id` int(11) NOT NULL,
  `action_argument_id` int(11) NOT NULL,
  `action_parameter_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_function_mapping_action_value`
--

INSERT INTO `report_function_mapping_action_value` (`id`, `report_function_action_mapping_id`, `action_argument_id`, `action_parameter_value`) VALUES
(413, 1, 15, '30px'),
(414, 1, 16, 'underline'),
(415, 2, 1, 'grey'),
(416, 3, 2, 'green'),
(417, 4, 2, 'orange'),
(822, 281, 1, 'green'),
(823, 282, 15, '30px'),
(824, 282, 16, 'underline'),
(825, 283, 2, 'pink'),
(832, 288, 1, 'yellow'),
(833, 289, 15, '30px'),
(834, 289, 16, 'underline'),
(835, 290, 2, 'blue'),
(836, 291, 1, 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `report_selector_function_mapping`
--

CREATE TABLE `report_selector_function_mapping` (
  `id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `report_column` varchar(255) NOT NULL,
  `report_row` varchar(255) NOT NULL,
  `function_library_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_selector_function_mapping`
--

INSERT INTO `report_selector_function_mapping` (`id`, `report_id`, `report_column`, `report_row`, `function_library_id`) VALUES
(1, 6, 'percentage', '', 12),
(2, 6, 'percentage', '', 8),
(3, 6, 'academic_status', '', 10),
(1511, 7, 'course_name', '', 10),
(1514, 8, 'PremiumMember', '', 8),
(1515, 8, 'Balance', '', 12),
(1516, 8, 'Balance', '', 8);

-- --------------------------------------------------------

--
-- Table structure for table `report_theme`
--

CREATE TABLE `report_theme` (
  `id` int(11) NOT NULL,
  `application_forms_id` int(11) NOT NULL,
  `report_name` varchar(255) NOT NULL,
  `report_column` varchar(255) NOT NULL,
  `theme_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_theme`
--

INSERT INTO `report_theme` (`id`, `application_forms_id`, `report_name`, `report_column`, `theme_ID`) VALUES
(1, 2, 'staff-container', '6', 335),
(2, 3, 'student-container', '8', 335),
(3, 6, '', '8', 335),
(4, 5, 'student-container', '8', 335),
(5, 5, 'student-container', '8', 335),
(6, 5, 'student-container', '8', 335),
(7, 5, 'student-container', '8', 335),
(8, 6, 'student-container', '8', 335),
(9, 2, 'student-container', '8', 335),
(10, 2, 'student-container', '7', 335),
(11, 2, 'student-container', '8', 335),
(12, 2, '1', '0', 0),
(13, 2, '2', '0', 0),
(14, 1, '1', '', 0),
(15, 4, '1', '', 0),
(16, 10, '1', '', 0),
(17, 11, '1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report_theme_mapping`
--

CREATE TABLE `report_theme_mapping` (
  `id` int(11) NOT NULL,
  `application_forms_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `theme_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_theme_mapping`
--

INSERT INTO `report_theme_mapping` (`id`, `application_forms_id`, `report_id`, `theme_ID`) VALUES
(1, 11, 2, 42),
(2, 12, 2, 7),
(3, 13, 2, 42),
(4, 14, 3, 111),
(6, 16, 4, 42),
(8, 18, 7, 111),
(18, 17, 6, 7),
(19, 19, 8, 111),
(20, 19, 8, 1233);

-- --------------------------------------------------------

--
-- Table structure for table `report_trigger_mapping`
--

CREATE TABLE `report_trigger_mapping` (
  `id` int(11) NOT NULL,
  `application_forms_id` int(11) NOT NULL,
  `report_id` int(11) NOT NULL,
  `function_library_id` int(11) NOT NULL,
  `report_columns` varchar(255) NOT NULL,
  `report_row` varchar(255) NOT NULL,
  `applied_script` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_trigger_mapping`
--

INSERT INTO `report_trigger_mapping` (`id`, `application_forms_id`, `report_id`, `function_library_id`, `report_columns`, `report_row`, `applied_script`) VALUES
(101, 18, 7, 103, 'id', 'B.com', 'var targetColumnNames = [\'id\'];\r\nvar highlightColor = \'#FFC000\';\r\n\r\nvar columnIndices = targetColumnNames.map(function (columnName) {\r\n    return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n});\r\n\r\nif (columnIndices.every(index => index !== -1)) {\r\n    columnIndices.forEach(function (columnIndex) {\r\n        var cellsInColumn = document.querySelectorAll(\'table tbody td:nth-child(\' + (columnIndex + 1) + \')\');\r\n\r\n        cellsInColumn.forEach(function (cell) {\r\n            cell.style.setProperty(\'background-color\', highlightColor, \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        });\r\n    });\r\n} else {\r\n    console.error(\'One or more columns not found: \' + targetColumnNames.join(\', \'));\r\n}\r\n'),
(102, 18, 7, 103, 'course_name', 'B.com', 'var targetColumnNames = [\'course_name\'];\r\nvar highlightColor = \'#FFC000\';\r\n\r\nvar columnIndices = targetColumnNames.map(function (columnName) {\r\n    return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n});\r\n\r\nif (columnIndices.every(index => index !== -1)) {\r\n    columnIndices.forEach(function (columnIndex) {\r\n        var cellsInColumn = document.querySelectorAll(\'table tbody td:nth-child(\' + (columnIndex + 1) + \')\');\r\n\r\n        cellsInColumn.forEach(function (cell) {\r\n            cell.style.setProperty(\'background-color\', highlightColor, \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        });\r\n    });\r\n} else {\r\n    console.error(\'One or more columns not found: \' + targetColumnNames.join(\', \'));\r\n}\r\n'),
(103, 18, 7, 106, 'course_link', 'B.com', 'var targetColumnNames = [\'course_link\'];\r\nvar targetWords = [\'B.com\'];\r\n\r\nvar columnIndex = Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === targetColumnNames[0]);\r\n\r\nif (columnIndex !== -1) {\r\n    var rows = document.querySelectorAll(\'table tbody tr\');\r\n\r\n    rows.forEach(function (row) {\r\n        var cell = row.querySelector(\'td:nth-child(\' + (columnIndex + 1) + \')\');\r\n        var value = cell ? cell.textContent.trim() : \'\';\r\n\r\n        if (targetWords.includes(value)) {\r\n            cell.style.setProperty(\'background-color\', \'#6495ED\', \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        }\r\n    });\r\n} else {\r\n    console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n}'),
(105, 11, 2, 106, 'Name', 'Riya', 'var targetColumnNames = [\'Name\'];\r\nvar targetWords = [\'Riya\'];\r\n\r\nvar columnIndex = Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === targetColumnNames[0]);\r\n\r\nif (columnIndex !== -1) {\r\n    var rows = document.querySelectorAll(\'table tbody tr\');\r\n\r\n    rows.forEach(function (row) {\r\n        var cell = row.querySelector(\'td:nth-child(\' + (columnIndex + 1) + \')\');\r\n        var value = cell ? cell.textContent.trim() : \'\';\r\n\r\n        if (targetWords.includes(value)) {\r\n            cell.style.setProperty(\'background-color\', \'#6495ED\', \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        }\r\n    });\r\n} else {\r\n    console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n}'),
(112, 11, 2, 105, 'Roll No.', 'Riya', 'var targetColumnNames = [\'Roll No.\'];\r\n\r\n    var columnIndices = targetColumnNames.map(function (columnName) {\r\n        return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n    });\r\n\r\n    columnIndices.forEach(function (columnIndex) {\r\n        if (columnIndex !== -1) {\r\n            var targetElements = document.querySelectorAll(\'table td:nth-child(\' + (columnIndex + 1) + \')\');\r\n            \r\n            targetElements.forEach(function (element) {\r\n                var value = parseInt(element.textContent);\r\n                if (!isNaN(value)) {\r\n                    if (value >= 30) {\r\n                        element.style.setProperty(\'color\', \'green\', \'important\');\r\n                    } else {\r\n                        element.style.setProperty(\'color\', \'red\', \'important\');\r\n                    }\r\n                }\r\n            });\r\n        } else {\r\n            console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n        }\r\n    });'),
(113, 11, 2, 106, 'Name', 'Nikhil', 'var targetColumnNames = [\'Name\'];\r\nvar targetWords = [\'Nikhil\'];\r\n\r\nvar columnIndex = Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === targetColumnNames[0]);\r\n\r\nif (columnIndex !== -1) {\r\n    var rows = document.querySelectorAll(\'table tbody tr\');\r\n\r\n    rows.forEach(function (row) {\r\n        var cell = row.querySelector(\'td:nth-child(\' + (columnIndex + 1) + \')\');\r\n        var value = cell ? cell.textContent.trim() : \'\';\r\n\r\n        if (targetWords.includes(value)) {\r\n            cell.style.setProperty(\'background-color\', \'#6495ED\', \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        }\r\n    });\r\n} else {\r\n    console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n}'),
(150, 17, 6, 1, 'percentage', 'Gauravi,Nikhil', 'function highlightPassFailByMark(markParameter, passColor, failColor) {\r\n    var targetColumnNames = [\'percentage\'];\r\n\r\n    var columnIndices = targetColumnNames.map(function (columnName) {\r\n        return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n    });\r\n\r\n    columnIndices.forEach(function (columnIndex) {\r\n        if (columnIndex !== -1) {\r\n            var targetElements = document.querySelectorAll(\'table td:nth-child(\' + (columnIndex + 1) + \')\');\r\n            \r\n            targetElements.forEach(function (element) {\r\n                var value = parseInt(element.textContent);\r\n                if (!isNaN(value)) {\r\n                    if (value >= markParameter) {\r\n                        element.style.setProperty(\'color\', passColor, \'important\');\r\n                    } else {\r\n                        element.style.setProperty(\'color\', failColor, \'important\');\r\n                    }\r\n                }\r\n            });\r\n        } else {\r\n            console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n        }\r\n    });\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `return_type`
--

CREATE TABLE `return_type` (
  `id` int(11) NOT NULL,
  `return_type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return_type`
--

INSERT INTO `return_type` (`id`, `return_type`, `Description`) VALUES
(1, 'Integer', 'Returns integer'),
(2, 'String', 'Returns String '),
(3, 'Boolean', 'Return True or False');

-- --------------------------------------------------------

--
-- Table structure for table `script_code`
--

CREATE TABLE `script_code` (
  `id` int(11) NOT NULL,
  `effects` varchar(255) NOT NULL,
  `css` text NOT NULL,
  `code` text NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `script_code`
--

INSERT INTO `script_code` (`id`, `effects`, `css`, `code`, `Description`) VALUES
(1, 'blink', '', '{\r\n  \"css\": \".blink { border: 3px solid #FBB72D; font-weight: bold; border-radius: 5px; }\",\r\n  \"js\": \"$(document).ready(function() { $(\'#elementId\').triggerValue(function() { var element = $(this); element.addClass(\'blink\'); setTimeout(function() { element.removeClass(\'blink\'); }, 1000); }); });\"\r\n}\r\n', 'Blink Button Effect with Yellow color'),
(2, 'toggle', '', '{\r\n      \"css\": \".toggle-button { background-color: #3498db; color: white; padding: 10px 20px; cursor: pointer; } .toggle-button.active { background-color: #e74c3c; }\",\r\n      \"js\": \"$(document).ready(function() { $(\'#elementId\').triggerValue(function() { var element = $(this); element.addClass(\'toggle-button\'); let isToggled = false; element.on(\'click\', function() { isToggled = !isToggled; if (isToggled) { element.addClass(\'active\'); } else { element.removeClass(\'active\'); } }); }); });\"\r\n   }', 'Resize on hover '),
(3, 'shake', '', '{\r\n                \"css\": \".shake { animation: shake 0.5s; } @keyframes shake { 0% { transform: translateX(0); } 20% { transform: translateX(-10px); } 40% { transform: translateX(10px); } 60% { transform: translateX(-10px); } 80% { transform: translateX(10px); } 100% { transform: translateX(0); } }\",\r\n                \"js\": \"$(\'#elementId\').triggerValue(function() { var element = $(this); element.addClass(\'shake\'); setTimeout(function() { element.removeClass(\'shake\'); }, 1000); });\"\r\n             }', 'Shake the element on page load '),
(4, 'slide-in', '', '{\r\n  \"css\": \".slide-in { animation: slide-in 0.5s; } @keyframes slide-in { from { transform: translateX(-10%); } to { transform: translateX(0); } }\",\r\n  \"js\": \"$(document).ready(function() { $(\'#elementId\').triggerValue(function() { var element = $(this); element.addClass(\'slide-in\'); }); });\"\r\n}\r\n', 'It causes an element to smoothly transition onto the screen by sliding in from a hidden or off-screen position'),
(82, 'hide 10', '', '{\n    \"css\": \"\",\n    \"js\": \"  var opacity=0; \\n    var intervalID=0; \\n    window.onload=fadeout; \\n        function fadeout(){ \\n            setInterval(hide, 200); \\n        } \\n    function hide(){ \\n        var body=document.getElementById(\\\"elementId\\\"); \\n        opacity = \\n    Number(window.getComputedStyle(body).getPropertyValue(\\\"opacity\\\")) \\n      \\n            if(opacity>0){ \\n                opacity=opacity-0.1; \\n                        body.style.opacity=opacity \\n            } \\n            else{ \\n                clearInterval(intervalID); \\n            } \\n        } \"\n}', 'Hide the Element in 1 sec'),
(83, 'Move Animation ', '', '{\n    \"css\": \"\",\n    \"js\": \"function myMove() {\\n  let id = null;\\n  const elem = document.getElementById(\\\"elementId\\\");   \\n  let pos = 0;\\n  clearInterval(id);\\n  id = setInterval(frame, 5);\\n  function frame() {\\n    if (pos == 350) {\\n      clearInterval(id);\\n    } else {\\n      pos++; \\n      elem.style.top = pos + \\\"px\\\"; \\n      elem.style.left = pos + \\\"px\\\"; \\n    }\\n  }\\n}\\nmyMove()\"\n}', 'Move the element '),
(84, 'Plain javascript Bubble effect ', '', '{\n    \"css\": \"\",\n    \"js\": \"var animateButton = function(e) {\\n\\n  e.preventDefault;\\n  \\/\\/reset animation\\n  e.target.classList.remove(\'animate\');\\n  \\n  e.target.classList.add(\'animate\');\\n  setTimeout(function(){\\n    e.target.classList.remove(\'animate\');\\n  },700);\\n};\\n\\nvar bubblyButtons = document.getElementsByClassName(\\\"elementId\\\");\\n\\nfor (var i = 0; i < bubblyButtons.length; i++) {\\n  bubblyButtons[i].addEventListener(\'triggerValue\', animateButton, false);\\n}\"\n}', 'color effect'),
(85, '2 Plain javascript Bubble effect ', '$fuschia: #ff0081;\r\n$button-bg: $fuschia;\r\n$button-text-color: #fff;\r\n$baby-blue: #f8faff;\r\n\r\n.department_btn{\r\n  font-family: \'Helvetica\', \'Arial\', sans-serif;\r\n  display: inline-block;\r\n  font-size: 1em;\r\n  padding: 1em 2em;\r\n  margin-top: 100px;\r\n  margin-bottom: 60px;\r\n  -webkit-appearance: none;\r\n  appearance: none;\r\n  background-color: $button-bg;\r\n  color: $button-text-color;\r\n  border-radius: 4px;\r\n  border: none;\r\n  cursor: pointer;\r\n  position: relative;\r\n  transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;\r\n  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);\r\n  \r\n  &:focus {\r\n    outline: 0;\r\n  }\r\n  \r\n  &:before, &:after{\r\n    position: absolute;\r\n    content: \'\';\r\n    display: block;\r\n    width: 140%;\r\n    height: 100%;\r\n    left: -20%;\r\n    z-index: -1000;\r\n    transition: all ease-in-out 0.5s;\r\n    background-repeat: no-repeat;\r\n  }\r\n  \r\n  &:before{\r\n    display: none;\r\n    top: -75%;\r\n    background-image:  \r\n      radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle,  transparent 20%, $button-bg 20%, transparent 30%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%), \r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%);\r\n  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;\r\n  //background-position: 0% 80%, -5% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 85% 30%;\r\n  }\r\n  \r\n  &:after{\r\n    display: none;\r\n    bottom: -75%;\r\n    background-image:  \r\n    radial-gradient(circle, $button-bg 20%, transparent 20%), \r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%);\r\n  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;\r\n  //background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;\r\n  }\r\n \r\n  &:active{\r\n    transform: scale(0.9);\r\n    background-color: darken($button-bg, 5%);\r\n    box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);\r\n  }\r\n  \r\n  &.animate{\r\n    &:before{\r\n      display: block;\r\n      animation: topBubbles ease-in-out 0.75s forwards;\r\n    }\r\n    &:after{\r\n      display: block;\r\n      animation: bottomBubbles ease-in-out 0.75s forwards;\r\n    }\r\n  }\r\n}\r\n\r\n\r\n@keyframes topBubbles {\r\n  0%{\r\n    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;\r\n  }\r\n    50% {\r\n      background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;}\r\n 100% {\r\n    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;\r\n  background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;\r\n  }\r\n}\r\n\r\n@keyframes bottomBubbles {\r\n  0%{\r\n    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;\r\n  }\r\n  50% {\r\n    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;}\r\n 100% {\r\n    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;\r\n  background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;\r\n  }\r\n}', '{\n    \"css\": \"$fuschia:#ff0081;$button-bg:$fuschia;$button-text-color:#fff;$baby-blue:#f8faff;.department_btn{font-family:\'Helvetica\',\'Arial\',sans-serif;display:inline-block;font-size:1em;padding:1em2em;margin-top:100px;margin-bottom:60px;-webkit-appearance:none;appearance:none;background-color:$button-bg;color:$button-text-color;border-radius:4px;border:none;cursor:pointer;position:relative;transition:transformease-in0.1s,box-shadowease-in0.25s;box-shadow:02px25pxrgba(255,0,130,0.5);&:focus{outline:0;}&:before,&:after{position:absolute;content:\'\';display:block;width:140%;height:100%;left:-20%;z-index:-1000;transition:allease-in-out0.5s;background-repeat:no-repeat;}&:before{display:none;top:-75%;background-image:radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,transparent20%,$button-bg20%,transparent30%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,transparent10%,$button-bg15%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%);background-size:10%10%,20%20%,15%15%,20%20%,18%18%,10%10%,15%15%,10%10%,18%18%;\\/\\/background-position:0%80%,-5%20%,10%40%,20%0%,30%30%,22%50%,50%50%,65%20%,85%30%;}&:after{display:none;bottom:-75%;background-image:radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,transparent10%,$button-bg15%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%);background-size:15%15%,20%20%,18%18%,20%20%,15%15%,10%10%,20%20%;\\/\\/background-position:5%90%,10%90%,10%90%,15%90%,25%90%,25%90%,40%90%,55%90%,70%90%;}&:active{transform:scale(0.9);background-color:darken($button-bg,5%);box-shadow:02px25pxrgba(255,0,130,0.2);}&.animate{&:before{display:block;animation:topBubblesease-in-out0.75sforwards;}&:after{display:block;animation:bottomBubblesease-in-out0.75sforwards;}}}@keyframestopBubbles{0%{background-position:5%90%,10%90%,10%90%,15%90%,25%90%,25%90%,40%90%,55%90%,70%90%;}50%{background-position:0%80%,0%20%,10%40%,20%0%,30%30%,22%50%,50%50%,65%20%,90%30%;}100%{background-position:0%70%,0%10%,10%30%,20%-10%,30%20%,22%40%,50%40%,65%10%,90%20%;background-size:0%0%,0%0%,0%0%,0%0%,0%0%,0%0%;}}@keyframesbottomBubbles{0%{background-position:10%-10%,30%10%,55%-10%,70%-10%,85%-10%,70%-10%,70%0%;}50%{background-position:0%80%,20%80%,45%60%,60%100%,75%70%,95%60%,105%0%;}100%{background-position:0%90%,20%90%,45%70%,60%110%,75%80%,95%70%,110%10%;background-size:0%0%,0%0%,0%0%,0%0%,0%0%,0%0%;}}\",\n    \"js\": \"var animateButton = function(e) {\\n\\n  e.preventDefault;\\n  \\/\\/reset animation\\n  e.target.classList.remove(\'animate\');\\n  \\n  e.target.classList.add(\'animate\');\\n  setTimeout(function(){\\n    e.target.classList.remove(\'animate\');\\n  },700);\\n};\\n\\nvar bubblyButtons = document.getElementsByClassName(\\\"elementId\\\");\\n\\nfor (var i = 0; i < bubblyButtons.length; i++) {\\n  bubblyButtons[i].addEventListener(\'triggerValue\', animateButton, false);\\n}\"\n}', 'color effect'),
(86, '2 Plain javascript Bubble effect ', '$fuschia: #ff0081;\r\n$button-bg: $fuschia;\r\n$button-text-color: #fff;\r\n$baby-blue: #f8faff;\r\n\r\n.department_btn{\r\n  font-family: \'Helvetica\', \'Arial\', sans-serif;\r\n  display: inline-block;\r\n  font-size: 1em;\r\n  padding: 1em 2em;\r\n  margin-top: 100px;\r\n  margin-bottom: 60px;\r\n  -webkit-appearance: none;\r\n  appearance: none;\r\n  background-color: $button-bg;\r\n  color: $button-text-color;\r\n  border-radius: 4px;\r\n  border: none;\r\n  cursor: pointer;\r\n  position: relative;\r\n  transition: transform ease-in 0.1s, box-shadow ease-in 0.25s;\r\n  box-shadow: 0 2px 25px rgba(255, 0, 130, 0.5);\r\n  \r\n  &:focus {\r\n    outline: 0;\r\n  }\r\n  \r\n  &:before, &:after{\r\n    position: absolute;\r\n    content: \'\';\r\n    display: block;\r\n    width: 140%;\r\n    height: 100%;\r\n    left: -20%;\r\n    z-index: -1000;\r\n    transition: all ease-in-out 0.5s;\r\n    background-repeat: no-repeat;\r\n  }\r\n  \r\n  &:before{\r\n    display: none;\r\n    top: -75%;\r\n    background-image:  \r\n      radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle,  transparent 20%, $button-bg 20%, transparent 30%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%), \r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%);\r\n  background-size: 10% 10%, 20% 20%, 15% 15%, 20% 20%, 18% 18%, 10% 10%, 15% 15%, 10% 10%, 18% 18%;\r\n  //background-position: 0% 80%, -5% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 85% 30%;\r\n  }\r\n  \r\n  &:after{\r\n    display: none;\r\n    bottom: -75%;\r\n    background-image:  \r\n    radial-gradient(circle, $button-bg 20%, transparent 20%), \r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle,  transparent 10%, $button-bg 15%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%),\r\n    radial-gradient(circle, $button-bg 20%, transparent 20%);\r\n  background-size: 15% 15%, 20% 20%, 18% 18%, 20% 20%, 15% 15%, 10% 10%, 20% 20%;\r\n  //background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;\r\n  }\r\n \r\n  &:active{\r\n    transform: scale(0.9);\r\n    background-color: darken($button-bg, 5%);\r\n    box-shadow: 0 2px 25px rgba(255, 0, 130, 0.2);\r\n  }\r\n  \r\n  &.animate{\r\n    &:before{\r\n      display: block;\r\n      animation: topBubbles ease-in-out 0.75s forwards;\r\n    }\r\n    &:after{\r\n      display: block;\r\n      animation: bottomBubbles ease-in-out 0.75s forwards;\r\n    }\r\n  }\r\n}\r\n\r\n\r\n@keyframes topBubbles {\r\n  0%{\r\n    background-position: 5% 90%, 10% 90%, 10% 90%, 15% 90%, 25% 90%, 25% 90%, 40% 90%, 55% 90%, 70% 90%;\r\n  }\r\n    50% {\r\n      background-position: 0% 80%, 0% 20%, 10% 40%, 20% 0%, 30% 30%, 22% 50%, 50% 50%, 65% 20%, 90% 30%;}\r\n 100% {\r\n    background-position: 0% 70%, 0% 10%, 10% 30%, 20% -10%, 30% 20%, 22% 40%, 50% 40%, 65% 10%, 90% 20%;\r\n  background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;\r\n  }\r\n}\r\n\r\n@keyframes bottomBubbles {\r\n  0%{\r\n    background-position: 10% -10%, 30% 10%, 55% -10%, 70% -10%, 85% -10%, 70% -10%, 70% 0%;\r\n  }\r\n  50% {\r\n    background-position: 0% 80%, 20% 80%, 45% 60%, 60% 100%, 75% 70%, 95% 60%, 105% 0%;}\r\n 100% {\r\n    background-position: 0% 90%, 20% 90%, 45% 70%, 60% 110%, 75% 80%, 95% 70%, 110% 10%;\r\n  background-size: 0% 0%, 0% 0%,  0% 0%,  0% 0%,  0% 0%,  0% 0%;\r\n  }\r\n}', '{\n    \"css\": \"$fuschia:#ff0081;$button-bg:$fuschia;$button-text-color:#fff;$baby-blue:#f8faff;.department_btn{font-family:\'Helvetica\',\'Arial\',sans-serif;display:inline-block;font-size:1em;padding:1em2em;margin-top:100px;margin-bottom:60px;-webkit-appearance:none;appearance:none;background-color:$button-bg;color:$button-text-color;border-radius:4px;border:none;cursor:pointer;position:relative;transition:transformease-in0.1s,box-shadowease-in0.25s;box-shadow:02px25pxrgba(255,0,130,0.5);&:focus{outline:0;}&:before,&:after{position:absolute;content:\'\';display:block;width:140%;height:100%;left:-20%;z-index:-1000;transition:allease-in-out0.5s;background-repeat:no-repeat;}&:before{display:none;top:-75%;background-image:radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,transparent20%,$button-bg20%,transparent30%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,transparent10%,$button-bg15%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%);background-size:10%10%,20%20%,15%15%,20%20%,18%18%,10%10%,15%15%,10%10%,18%18%;\\/\\/background-position:0%80%,-5%20%,10%40%,20%0%,30%30%,22%50%,50%50%,65%20%,85%30%;}&:after{display:none;bottom:-75%;background-image:radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,transparent10%,$button-bg15%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%),radial-gradient(circle,$button-bg20%,transparent20%);background-size:15%15%,20%20%,18%18%,20%20%,15%15%,10%10%,20%20%;\\/\\/background-position:5%90%,10%90%,10%90%,15%90%,25%90%,25%90%,40%90%,55%90%,70%90%;}&:active{transform:scale(0.9);background-color:darken($button-bg,5%);box-shadow:02px25pxrgba(255,0,130,0.2);}&.animate{&:before{display:block;animation:topBubblesease-in-out0.75sforwards;}&:after{display:block;animation:bottomBubblesease-in-out0.75sforwards;}}}@keyframestopBubbles{0%{background-position:5%90%,10%90%,10%90%,15%90%,25%90%,25%90%,40%90%,55%90%,70%90%;}50%{background-position:0%80%,0%20%,10%40%,20%0%,30%30%,22%50%,50%50%,65%20%,90%30%;}100%{background-position:0%70%,0%10%,10%30%,20%-10%,30%20%,22%40%,50%40%,65%10%,90%20%;background-size:0%0%,0%0%,0%0%,0%0%,0%0%,0%0%;}}@keyframesbottomBubbles{0%{background-position:10%-10%,30%10%,55%-10%,70%-10%,85%-10%,70%-10%,70%0%;}50%{background-position:0%80%,20%80%,45%60%,60%100%,75%70%,95%60%,105%0%;}100%{background-position:0%90%,20%90%,45%70%,60%110%,75%80%,95%70%,110%10%;background-size:0%0%,0%0%,0%0%,0%0%,0%0%,0%0%;}}\",\n    \"js\": \"var animateButton = function(e) {\\n\\n  e.preventDefault;\\n  \\/\\/reset animation\\n  e.target.classList.remove(\'animate\');\\n  \\n  e.target.classList.add(\'animate\');\\n  setTimeout(function(){\\n    e.target.classList.remove(\'animate\');\\n  },700);\\n};\\n\\nvar bubblyButtons = document.getElementsByClassName(\\\"elementId\\\");\\n\\nfor (var i = 0; i < bubblyButtons.length; i++) {\\n  bubblyButtons[i].addEventListener(\'triggerValue\', animateButton, false);\\n}\"\n}', 'color effect'),
(87, 'Trasparent effect using toggle ', ',', '{\n    \"css\": \",\",\n    \"js\": \"const fadeButton = document.querySelector(\\\"elementId\\\");\\n\\n\\/\\/ Function to toggle the fading effect\\nfunction toggleFading() {\\n    if (isFaded) {\\n        fadeButton.style.opacity = \'1\';\\n    } else {\\n        fadeButton.style.opacity = \'0.2\';\\n    }\\n    isFaded = !isFaded;\\n}\\n\\n\\/\\/ Flag to track the fading state\\nlet isFaded = false;\\n\\n\\/\\/ Add a mouseover event listener to the button\\nfadeButton.addEventListener(\'triggerValue\', toggleFading);\\n\\n        \"\n}', 'Make Element trasnparent '),
(88, 'Trasparent effect', '//', '{\n    \"css\": \"\\/\\/\",\n    \"js\": \"const fadeButton = document.querySelector(\\\"#elementId\\\");\\n\\n\\/\\/ Function to toggle the fading effect\\nfunction toggleFading() {\\n    if (isFaded) {\\n        fadeButton.style.opacity = \'1\';\\n    } else {\\n        fadeButton.style.opacity = \'0.2\';\\n    }\\n    isFaded = !isFaded;\\n}\\n\\n\\/\\/ Flag to track the fading state\\nlet isFaded = false;\\n\\n\\/\\/ Add a mouseover event listener to the button\\nfadeButton.addEventListener(\'triggerValue\', toggleFading);\\n\\n        \"\n}', 'Transparent'),
(89, 'Final Trasparent effect', '//', '{\n    \"css\": \"\\/\\/\",\n    \"js\": \"\\/ Get the button by its ID using querySelector\\nconst fadeButton = document.querySelector(\'#elementId\');\\n\\n\\/\\/ Function to toggle the fading effect\\nfunction toggleFading() {\\n    if (isFaded) {\\n        fadeButton.style.opacity = \'1\';\\n    } else {\\n        fadeButton.style.opacity = \'0.2\';\\n    }\\n    isFaded = !isFaded;\\n}\\n\\n\\/\\/ Flag to track the fading state\\nlet isFaded = false;\\n\\n\\/\\/ Add a mouseover event listener to the button\\nfadeButton.addEventListener(\'triggerValue\', toggleFading);\\n\"\n}', 'Transparent'),
(90, 'Final HIDE ', ',', '{\n    \"css\": \",\",\n    \"js\": \"  var opacity=0; \\n    var intervalID=0; \\n    window.onload=fadeout; \\n        function fadeout(){ \\n            setInterval(hide, 200); \\n        } \\n    function hide(){ \\n        var body=document.getElementById(\'#elementId\'); \\n        opacity = \\n    Number(window.getComputedStyle(body).getPropertyValue(\\\"opacity\\\")) \\n      \\n            if(opacity>0){ \\n                opacity=opacity-0.1; \\n                        body.style.opacity=opacity \\n            } \\n            else{ \\n                clearInterval(intervalID); \\n            } \\n        } \"\n}', 'HIDE '),
(91, 'Blink', 'color : black; ', '{\n    \"css\": \"color:black;\",\n    \"js\": \"<script>\\nalert (\\\"Hello);\\n\\n<\\/script>\"\n}', 'Alert'),
(94, 'Pass Fail Color Effect 2', '.', '{\n    \"css\": \".\",\n    \"js\": \"document.addEventListener(\'triggerValue\', function () {\\n    var percentageElements = document.querySelector(\'#elementId\');\\n    percentageElements.forEach(function (element) {\\n      var percentage = parseInt(element.textContent);\\n      if (percentage >= 45) {\\n        element.style.setProperty(\'color\', \'green\', \'important\');\\n      } else {\\n        element.style.setProperty(\'color\', \'red\', \'important\');\\n      }\\n    });\\n  });\"\n}', 'y'),
(95, 'P and F', '.', '{\n    \"css\": \".\",\n    \"js\": \"document.addEventListener(\'triggerValue\', function () {\\n  var percentageElements = document.querySelector(\'#elementId\');\\n  percentageElements.forEach(function (element) {\\n    var percentage = parseInt(element.textContent);\\n    if (percentage >= 45) {\\n      element.style.setProperty(\'color\', \'green\', \'important\');\\n    } else {\\n      element.style.setProperty(\'color\', \'red\', \'important\');\\n    }\\n  });\\n});\\n\"\n}', ','),
(96, 'p&f', '.', '{\r\n    \"css\": \".\",\r\n    \"js\": \"document.addEventListener(\'triggerValue\', function () {\\n    var percentageElements = document.querySelectorAll(\'elementId\');\\n    percentageElements.forEach(function (element) {\\n      var percentage = parseInt(element.textContent);\\n      if (percentage >= 45) {\\n        element.style.setProperty(\'color\', \'green\', \'important\');\\n      } else {\\n        element.style.setProperty(\'color\', \'red\', \'important\');\\n      }\\n    });\\n  });\"\r\n}', 'Green Color if content of table column is above 45 or else red '),
(97, 'Updated Report Script ', '.', '{\n    \"css\": \".\",\n    \"js\": \"document.addEventListener(\'triggerValue\', function () {\\n    \\/\\/ Adding a style rule dynamically\\n    var style = document.createElement(\'style\');\\n    style.textContent = \'table td:nth-child(8).red { color: red !important; } table td:nth-child(8).green { color: green !important; }\';\\n    document.head.appendChild(style);\\n\\n    \\/\\/ Now you can use your existing jQuery code\\n    $(document).ready(function () {\\n        $(\'table td:nth-child(8)\').each(function() {\\n            var percentage = parseInt($(this).text());\\n            $(this).removeClass(\'red green\');\\n\\n            if (percentage < 45) {\\n                $(this).addClass(\'red\');\\n            } else {\\n                $(this).addClass(\'green\');\\n            }\\n        });\\n    });\\n});\"\n}', 'Updated Report Script with ready load '),
(98, 'Green and Red ', '', '   document.addEventListener(\'DOMContentLoaded\', function () {\r\n                    var style = document.createElement(\'style\');\r\n                    style.textContent = \'table td:nth-child(8).red { color: red !important; } \' +\r\n                                        \' table td:nth-child(8).green { color: green !important; }\';\r\n\r\n                    document.head.appendChild(style);\r\n\r\n                    $(\'table td:nth-child(8)\').each(function() {\r\n                        var percentage = parseInt($(this).text());\r\n                        $(this).removeClass(\'red green\');\r\n\r\n                        if (percentage < 45) {\r\n                            $(this).addClass(\'red\');\r\n                        } else {\r\n                            $(this).addClass(\'green\');\r\n                        }\r\n                    });\r\n                });', 'Custom Pass and Fail '),
(99, 'Report Toolkit ', '', '`\r\n    document.addEventListener(\'DOMContentLoaded\', function () {\r\n    // Add tooltips to cells with additional information\r\n    var style = document.createElement(\'style\');\r\n    style.textContent = \'table td.tooltip { cursor: pointer; border-bottom: 1px dotted #000; }\';\r\n\r\n    document.head.appendChild(style);\r\n\r\n    // Add \'tooltip\' class to each cell for tooltips\r\n    $(\'table td\').addClass(\'tooltip\').each(function () {\r\n        var cellContent = $(this).text().trim();\r\n        $(this).attr(\'title\', \'Additional Info: \' + cellContent);\r\n    });\r\n});\r\n\r\n`', 'Add a description Box to All cell of report'),
(100, 'Highlight Min and Max ', '.', 'var percentageElements = document.querySelectorAll(\'table td:nth-child(7)\');\r\nvar values = [];\r\n\r\npercentageElements.forEach(function (element) {\r\n  var percentage = parseInt(element.textContent);\r\n  values.push(percentage);\r\n});\r\n\r\nvar minValue = Math.min(...values);\r\nvar maxValue = Math.max(...values);\r\n\r\npercentageElements.forEach(function (element) {\r\n  var percentage = parseInt(element.textContent);\r\n  if (percentage === minValue) {\r\n    element.style.setProperty(\'background-color\', \'red\');\r\n  } else if (percentage === maxValue) {\r\n    element.style.setProperty(\'background-color\', \'green\');\r\n  }\r\n});\r\n', 'Highlight min in red and max in green'),
(101, 'Even and Odd Row Color ', '.', 'var percentageElements = document.querySelectorAll(\'table td:nth-child(8)\');\r\n    percentageElements.forEach(function (element) {\r\n      var percentage = parseInt(element.textContent);\r\n      if (percentage >= 30) {\r\n        element.style.setProperty(\'color\', \'green\', \'important\');\r\n      } else {\r\n        element.style.setProperty(\'color\', \'red\', \'important\');\r\n      }\r\n    });', 'Color even and odd cell in grey and white color '),
(102, 'CELL HighLight', '.', '// Select all cells in the third column of any table\r\nvar thirdColumnCells = document.querySelectorAll(\'table td:nth-child(3)\');\r\nvar keyword = \'Grid Container\';\r\n\r\nthirdColumnCells.forEach(function (element) {\r\n    if (element.textContent.trim() === keyword) {\r\n        // Apply styles to highlight the cell\r\n        element.style.setProperty(\'background-color\', \'yellow\', \'important\');\r\n        element.style.setProperty(\'color\', \'black\', \'important\'); // Example additional CSS\r\n        // Add any other CSS styles as needed\r\n    }\r\n});\r\n', 'Green Color if content of table column is above 45 or else red '),
(103, 'Dynamic Report Column HighLight ', '', 'var targetColumnNames = [\'column_Name\'];\r\nvar highlightColor = \'#FFC000\';\r\n\r\nvar columnIndices = targetColumnNames.map(function (columnName) {\r\n    return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n});\r\n\r\nif (columnIndices.every(index => index !== -1)) {\r\n    columnIndices.forEach(function (columnIndex) {\r\n        var cellsInColumn = document.querySelectorAll(\'table tbody td:nth-child(\' + (columnIndex + 1) + \')\');\r\n\r\n        cellsInColumn.forEach(function (cell) {\r\n            cell.style.setProperty(\'background-color\', highlightColor, \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        });\r\n    });\r\n} else {\r\n    console.error(\'One or more columns not found: \' + targetColumnNames.join(\', \'));\r\n}\r\n', 'HighLight Column Based on Column name '),
(104, 'Row/Record High Light', '', 'var targetWords = [\'word\'];\r\nvar rows = document.querySelectorAll(\'table tbody tr\');\r\n\r\nrows.forEach(function (row) {\r\n    var cells = row.querySelectorAll(\'td\');\r\n\r\n    var shouldHighlight = Array.from(cells).some(function (cell) {\r\n        var value = cell.textContent.trim();\r\n        return targetWords.some(function (word) {\r\n            return value.includes(word);\r\n        });\r\n    });\r\n\r\n    if (shouldHighlight) {\r\n        row.style.setProperty(\'background-color\', \'#6495ED\', \'important\');\r\n        row.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n    }\r\n});\r\n', 'Higlight Rows or record with give word'),
(105, 'Marks Pass', '', 'var targetColumnNames = [\'column_Name\'];\r\n\r\n    var columnIndices = targetColumnNames.map(function (columnName) {\r\n        return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n    });\r\n\r\n    columnIndices.forEach(function (columnIndex) {\r\n        if (columnIndex !== -1) {\r\n            var targetElements = document.querySelectorAll(\'table td:nth-child(\' + (columnIndex + 1) + \')\');\r\n            \r\n            targetElements.forEach(function (element) {\r\n                var value = parseInt(element.textContent);\r\n                if (!isNaN(value)) {\r\n                    if (value >= 30) {\r\n                        element.style.setProperty(\'color\', \'green\', \'important\');\r\n                    } else {\r\n                        element.style.setProperty(\'color\', \'red\', \'important\');\r\n                    }\r\n                }\r\n            });\r\n        } else {\r\n            console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n        }\r\n    });', 'For Numberical Columns only , Show marks less than 30 in red and above 30 in green'),
(106, 'Dynamic Cell Hight Light ', '', 'var targetColumnNames = [\'column_Name\'];\r\nvar targetWords = [\'word\'];\r\n\r\nvar columnIndex = Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === targetColumnNames[0]);\r\n\r\nif (columnIndex !== -1) {\r\n    var rows = document.querySelectorAll(\'table tbody tr\');\r\n\r\n    rows.forEach(function (row) {\r\n        var cell = row.querySelector(\'td:nth-child(\' + (columnIndex + 1) + \')\');\r\n        var value = cell ? cell.textContent.trim() : \'\';\r\n\r\n        if (targetWords.includes(value)) {\r\n            cell.style.setProperty(\'background-color\', \'#6495ED\', \'important\');\r\n            cell.style.setProperty(\'font-weight\', \'bold\', \'important\');\r\n        }\r\n    });\r\n} else {\r\n    console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n}', 'HightLight Cell using column and word.There should be only one column, and words can be multiplely related to that field.'),
(107, 'Function Mark effect ', '', ' function highlightPassFailByMark(markParameter, passColor, failColor) {\r\n    var targetColumnNames = [\'column_Name\'];\r\n\r\n    var columnIndices = targetColumnNames.map(function (columnName) {\r\n        return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n    });\r\n\r\n    columnIndices.forEach(function (columnIndex) {\r\n        if (columnIndex !== -1) {\r\n            var targetElements = document.querySelectorAll(\'table td:nth-child(\' + (columnIndex + 1) + \')\');\r\n            \r\n            targetElements.forEach(function (element) {\r\n                var value = parseInt(element.textContent);\r\n                if (!isNaN(value)) {\r\n                    if (value >= markParameter) {\r\n                        element.style.setProperty(\'color\', passColor, \'important\');\r\n                    } else {\r\n                        element.style.setProperty(\'color\', failColor, \'important\');\r\n                    }\r\n                }\r\n            });\r\n        } else {\r\n            console.error(\'Column not found: \' + targetColumnNames.join(\', \'));\r\n        }\r\n    });\r\n}\r\n\r\nhighlightPassFailByMark(30, \'green\', \'red\');', 'Function for mark based script'),
(108, 'Demo Effect ', '//Styles ', '{\n    \"css\": \"\\/\\/Styles\",\n    \"js\": \"document.load {\\n\\n\\/\\/javascript\\n}\"\n}', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `selector`
--

CREATE TABLE `selector` (
  `id` int(11) NOT NULL,
  `selector_for_element` varchar(255) NOT NULL,
  `syntax` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `selector_return` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selector`
--

INSERT INTO `selector` (`id`, `selector_for_element`, `syntax`, `description`, `selector_return`) VALUES
(1, 'Select Column and its values', '   function fetchData(input) {\r\n            var selectorType = input.selectorType;\r\n            var selectorValue = input.selectorValue;\r\n            var result = []; \r\n            function getReportColumnIndex(columnName) {\r\n                return Array.from(document.querySelectorAll(\'table th\')).findIndex(th => th.textContent.trim() === columnName);\r\n            }\r\n\r\n            switch (selectorType) {\r\n                case \'reportColumn\':\r\n                    if (Array.isArray(selectorValue)) {\r\n                        selectorValue.forEach(function (columnName) {\r\n                            var columnIndex = getReportColumnIndex(columnName);\r\n                            if (columnIndex !== -1) {\r\n                                var columnElements = document.querySelectorAll(\'table td:nth-child(\' + (columnIndex + 1) + \')\');\r\n                                var columnValues = [];\r\n                                columnElements.forEach(function (element) {\r\n                                    var value = element.textContent.trim();\r\n                                    columnValues.push(value);\r\n                                });\r\n                                result.push({\r\n                                    columnIndex: columnIndex,\r\n                                    elements: Array.from(columnElements),\r\n                                    values: columnValues\r\n                                });\r\n                            }\r\n                        });\r\n                    } else {\r\n                        var columnIndex = getReportColumnIndex(selectorValue);\r\n                        if (columnIndex !== -1) {\r\n                            var columnElements = document.querySelectorAll(\'table td:nth-child(\' + (columnIndex + 1) + \')\');\r\n                            var columnValues = [];\r\n                            columnElements.forEach(function (element) {\r\n                                var value = element.textContent.trim();\r\n                                columnValues.push(value);\r\n                            });\r\n                            result.push({\r\n                                columnIndex: columnIndex,\r\n                                elements: Array.from(columnElements),\r\n                                values: columnValues\r\n                            });\r\n                        }\r\n                    }\r\n                    break;\r\n\r\n                default:\r\n                    console.error(\'Invalid selector type\');\r\n            }\r\n\r\n            return result;\r\n        }', 'This is selector function that when call column name give index, target column data and it values \r\n\r\nvar selectorType = \'reportColumn\';\r\nvar targetColumnNames = [\'percentage\',\'marks\']; \r\n\r\nthis is an example how to call it ', 'Column index , values and Target elements');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `percentage` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `course_type_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `academic_status` varchar(50) DEFAULT NULL,
  `theme_ID` int(11) DEFAULT NULL,
  `emergency_contact_name` varchar(100) DEFAULT NULL,
  `emergency_contact_phone` varchar(20) DEFAULT NULL,
  `emergency_contact_relationship` varchar(50) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`student_id`, `first_name`, `last_name`, `percentage`, `date_of_birth`, `address`, `phone_number`, `email_address`, `department_id`, `course_type_id`, `course_id`, `major`, `academic_status`, `theme_ID`, `emergency_contact_name`, `emergency_contact_phone`, `emergency_contact_relationship`, `marks`) VALUES
(1, 'Gauravi', 'Damahe', '7', '2001-01-26', 'High Court Aurangabad', '09011689196', 'gauvi0981@gmail.com', 3, 5, 7, 'Science ', 'Regural ', 87, 'Anita Damahe ', '09011009196', 'Mother ', 90),
(2, 'Priya', 'Sharma', '64', NULL, 'Mumbai', '901179196', 'abc', 3, 6, 14, NULL, NULL, NULL, NULL, NULL, NULL, 6),
(3, 'Prasad ', 'Kumar', '32', '0000-00-00', 'High Court Aurangabad', '09011689190', 'gauravidamahe01@outlook.com', 7, 5, 7, 'Commerce', 'Regural ', 121, 'Gauravi', '9158880035', 'Brother', 32),
(4, 'John', 'Doe', '23', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Computer Science', 'Enrolled', NULL, NULL, NULL, NULL, 35),
(5, 'Alice', 'Smith', '25', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Electrical Engineering', 'Enrolled', NULL, NULL, NULL, NULL, 19),
(6, 'Eve', 'Johnson', '12', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Mechanical Engineering', 'Enrolled', NULL, NULL, NULL, NULL, 96),
(7, 'David', 'Brown', '10', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Civil Engineering', 'Regural ', NULL, NULL, NULL, NULL, 28),
(8, 'Grace', 'Miller', '45', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Chemical Engineering', 'Regural ', NULL, NULL, NULL, NULL, 45),
(9, 'Michael', 'Wilson', '78', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Aerospace Engineering', 'Enrolled', NULL, NULL, NULL, NULL, 42),
(10, 'Sophia', 'Anderson', '76', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Biomedical Engineering', 'Enrolled', NULL, NULL, NULL, NULL, -9),
(11, 'Oliver', 'Thomas', '90', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Environmental Engineering', 'Enrolled', NULL, NULL, NULL, NULL, 47),
(12, 'Emma', 'Harris', '32', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Industrial Engineering', 'Regural ', NULL, NULL, NULL, NULL, 47),
(13, 'Liam', 'Taylor', '56', NULL, NULL, NULL, NULL, NULL, NULL, 7, 'Materials Science', 'Enrolled', NULL, NULL, NULL, NULL, 94);

-- --------------------------------------------------------

--
-- Table structure for table `table_theme`
--

CREATE TABLE `table_theme` (
  `id` int(11) NOT NULL,
  `report_id` varchar(255) NOT NULL,
  `report_element_name` varchar(255) NOT NULL,
  `report_element` varchar(255) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `css_property` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_theme`
--

INSERT INTO `table_theme` (`id`, `report_id`, `report_element_name`, `report_element`, `theme_name`, `css_property`, `value`) VALUES
(1, '1', 'Grid Container ', '.student-container', 'Orange Bright Theme ', 'grid', 'display'),
(2, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'grid-template-columns', 'repeat(3, 1fr)'),
(3, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'grid-gap', '10px'),
(4, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'justify-content', 'center'),
(5, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'align-items', 'center'),
(6, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'background-color', '#E6E6FA'),
(7, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'border-radius', '8px'),
(8, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'padding', '16px'),
(9, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'font-family', '\'Roboto\', sans-serif'),
(10, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'max-width', '800px'),
(11, '1', 'Grid Container', '.student-container', 'Orange Bright Theme', 'margin', '0 auto'),
(12, '1', 'Heading', '.student-container h2', 'Orange Bright Theme', 'text-align', 'center'),
(13, '1', 'Heading', '.student-container h2', 'Orange Bright Theme', 'grid-column', 'span 3'),
(14, '1', 'Heading', '.student-container h2', 'Orange Bright Theme', 'color', '#4CAF50'),
(15, '1', 'Heading', '.student-container h2', 'Orange Bright Theme', 'font-size', '24px'),
(16, '1', 'Table', '.student-report', 'Orange Bright Theme', 'width', '600px'),
(17, '1', 'Table', '.student-report', 'Orange Bright Theme', 'border-collapse', 'separate'),
(18, '1', 'Table', '.student-report', 'Orange Bright Theme', 'border-spacing', '0 8px'),
(19, '1', 'Table', '.student-report', 'Orange Bright Theme', 'margin-top', '16px'),
(20, '1', 'Table', '.student-report', 'Orange Bright Theme', 'background-color', '#FFF8DC'),
(21, '1', 'Table Header', 'th', 'Orange Bright Theme', 'padding', '14px'),
(22, '1', 'Table Header', 'th', 'Orange Bright Theme', 'border', '2px solid #FFD700'),
(23, '1', 'Table Header', 'th', 'Orange Bright Theme', 'background-color', '#FFA500'),
(24, '1', 'Table Header', 'th', 'Orange Bright Theme', 'color', '#fff'),
(25, '1', 'Table Header', 'th', 'Orange Bright Theme', 'font-weight', 'bold'),
(35, '1', 'Table Rows even', 'tr:nth-child(even)', 'Orange Bright Theme', 'background-color', '#FFE4B5'),
(36, '1', 'Table Rows odd', 'tr:nth-child(odd)', 'Orange Bright Theme', 'background-color', '#FFE4B5'),
(37, '1', 'Hover Effect', 'tr:hover', 'Orange Bright Theme', 'background-color', '#ADD8E6'),
(38, '1', 'Table Cells', 'td', 'Orange Bright Theme', 'padding', '12px'),
(39, '1', 'Table Cells', 'td', 'Orange Bright Theme', 'border', '2px solid #87CEEB'),
(40, '1', 'Table Cells', 'td', 'Orange Bright Theme', 'color', '#333'),
(41, '1', 'Footer', 'tfoot', 'Orange Bright Theme', 'background-color', '#FFD700'),
(42, '1', 'Footer', 'tfoot', 'Orange Bright Theme', 'color', '#fff'),
(43, '1', 'Footer', 'tfoot', 'Orange Bright Theme', 'font-weight', 'bold'),
(119, '2', 'Grid Container', '.student-container', 'Blue', 'display', 'grid'),
(120, '2', 'Grid Container', '.student-container', 'Blue', 'grid-template-columns', 'repeat(4, 1fr)'),
(121, '2', 'Grid Container', '.student-container', 'Blue', 'grid-gap', '16px'),
(122, '2', 'Grid Container', '.student-container', 'Blue', 'justify-content', 'center'),
(123, '2', 'Grid Container', '.student-container', 'Blue', 'align-items', 'center'),
(124, '2', 'Grid Container', '.student-container', 'Blue', 'background-color', '#F0FCFF'),
(125, '2', 'Grid Container', '.student-container', 'Blue', 'border-radius', '12px'),
(126, '2', 'Grid Container', '.student-container', 'Blue', 'padding', '12px'),
(127, '2', 'Grid Container', '.student-container', 'Blue', 'font-family', 'Lato'),
(128, '2', 'Grid Container', '.student-container', 'Blue', 'max-width', '750px'),
(129, '2', 'Grid Container', '.student-container', 'Blue', 'margin', '0 auto'),
(130, '2', 'Heading', '.student-container h2', 'Blue', 'text-align', 'center'),
(131, '2', 'Heading', '.student-container h2', 'Blue', 'grid-column', 'span 4'),
(132, '2', 'Table', '.student-report', 'Blue', 'width', '100%'),
(133, '2', 'Table', '.student-report', 'Blue', 'border-collapse', 'collapse'),
(134, '2', 'Table', '.student-report', 'Blue', 'margin-top', '16px'),
(135, '2', 'Table Header', 'th', 'Blue', 'padding', '12px'),
(136, '2', 'Table Header', 'th', 'Blue', 'border', '2px dotted'),
(137, '2', 'Table Header', 'th', 'Blue', 'background-color', '#87CEEB'),
(138, '2', 'Table Rows', 'tr:nth-child(even)', 'Blue', 'background-color', '#F0F8FF'),
(139, '2', 'Hover Effect', 'tr:hover', 'Blue', 'background-color', '#B0E0E6'),
(140, '2', 'Table Cells', 'td', 'Blue', 'padding', '12px'),
(141, '2', 'Table Cells', 'td', 'Blue', 'border', '2px dotted');

-- --------------------------------------------------------

--
-- Table structure for table `target_column`
--

CREATE TABLE `target_column` (
  `id` int(11) NOT NULL,
  `report_function_action_mapping_id` int(11) NOT NULL,
  `target_column` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target_column`
--

INSERT INTO `target_column` (`id`, `report_function_action_mapping_id`, `target_column`) VALUES
(3, 1, 'first_name'),
(4, 2, 'marks'),
(75, 282, 'course_name'),
(76, 282, 'course_link'),
(83, 288, 'FirstName'),
(84, 288, 'PremiumMember'),
(85, 291, 'LastName'),
(86, 291, 'FirstName');

-- --------------------------------------------------------

--
-- Table structure for table `text_css_properties`
--

CREATE TABLE `text_css_properties` (
  `id` int(11) NOT NULL,
  `CSS Property` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_css_properties`
--

INSERT INTO `text_css_properties` (`id`, `CSS Property`) VALUES
(1, 'text-color'),
(2, 'font-size'),
(3, 'text-align'),
(4, 'font-family'),
(5, 'text-shadow '),
(6, 'text-decoration');

-- --------------------------------------------------------

--
-- Table structure for table `text_type`
--

CREATE TABLE `text_type` (
  `id` int(11) NOT NULL,
  `text_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_type`
--

INSERT INTO `text_type` (`id`, `text_type`) VALUES
(1, 'h1'),
(2, 'h2'),
(3, 'h3'),
(4, 'body'),
(5, 'p'),
(6, 'span');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `ID` int(11) NOT NULL,
  `theme_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(6),
  `color` varchar(50) DEFAULT NULL,
  `font_size` varchar(50) DEFAULT NULL,
  `background_color` varchar(50) DEFAULT NULL,
  `background` varchar(255) NOT NULL,
  `padding` varchar(50) DEFAULT NULL,
  `margin` varchar(50) DEFAULT NULL,
  `border` varchar(50) DEFAULT NULL,
  `text_align` varchar(50) DEFAULT NULL,
  `display` varchar(255) NOT NULL,
  `clear` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `text_shadow` varchar(50) DEFAULT NULL,
  `text_indent` varchar(50) DEFAULT NULL,
  `letter_spacing` varchar(50) DEFAULT NULL,
  `word_spacing` varchar(50) DEFAULT NULL,
  `line_height` varchar(50) DEFAULT NULL,
  `text_transform` varchar(50) DEFAULT NULL,
  `text_decoration` varchar(50) DEFAULT NULL,
  `font_family` varchar(50) DEFAULT NULL,
  `font_weight` varchar(50) DEFAULT NULL,
  `text_overflow` varchar(50) DEFAULT NULL,
  `white_space` varchar(50) DEFAULT NULL,
  `text_orientation` varchar(50) DEFAULT NULL,
  `text_wrap` varchar(50) DEFAULT NULL,
  `text_justify` varchar(50) DEFAULT NULL,
  `text_emphasis` varchar(50) DEFAULT NULL,
  `text_spacing` varchar(50) DEFAULT NULL,
  `text_shadow_color` varchar(50) DEFAULT NULL,
  `text_shadow_x` varchar(50) DEFAULT NULL,
  `text_shadow_y` varchar(50) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `background_repeat` varchar(255) DEFAULT NULL,
  `background_attachment` varchar(255) DEFAULT NULL,
  `background_position` varchar(255) DEFAULT NULL,
  `border_width` varchar(255) DEFAULT NULL,
  `border_style` varchar(255) DEFAULT NULL,
  `border_color` varchar(255) DEFAULT NULL,
  `margin_top` varchar(255) DEFAULT NULL,
  `margin_right` varchar(255) DEFAULT NULL,
  `margin_bottom` varchar(255) DEFAULT NULL,
  `margin_left` varchar(255) DEFAULT NULL,
  `padding_top` varchar(255) DEFAULT NULL,
  `padding_right` varchar(255) DEFAULT NULL,
  `padding_bottom` varchar(255) DEFAULT NULL,
  `padding_left` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `max_height` varchar(255) DEFAULT NULL,
  `max_width` varchar(255) DEFAULT NULL,
  `min_height` varchar(255) DEFAULT NULL,
  `min_width` varchar(255) DEFAULT NULL,
  `box_sizing` varchar(255) DEFAULT NULL,
  `outline` varchar(255) DEFAULT NULL,
  `outline_color` varchar(255) DEFAULT NULL,
  `outline_style` varchar(255) DEFAULT NULL,
  `outline_width` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `text_opacity` varchar(255) DEFAULT NULL,
  `text_shadow_blur` varchar(255) DEFAULT NULL,
  `text_shadow_spread` varchar(255) DEFAULT NULL,
  `font_style` varchar(255) DEFAULT NULL,
  `font_variant` varchar(255) DEFAULT NULL,
  `font_stretch` varchar(255) DEFAULT NULL,
  `font_size_adjust` varchar(255) DEFAULT NULL,
  `font_variant_caps` varchar(255) DEFAULT NULL,
  `font_variant_numeric` varchar(255) DEFAULT NULL,
  `font_variant_alternates` varchar(255) DEFAULT NULL,
  `font_variant_ligatures` varchar(255) DEFAULT NULL,
  `font_variant_position` varchar(255) DEFAULT NULL,
  `font_kerning` varchar(255) DEFAULT NULL,
  `font_language_override` varchar(255) DEFAULT NULL,
  `font_feature_settings` varchar(255) DEFAULT NULL,
  `icon_size` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `link_color` varchar(255) DEFAULT NULL,
  `hover` varchar(255) DEFAULT NULL,
  `visited` varchar(255) DEFAULT NULL,
  `list_style` varchar(255) DEFAULT NULL,
  `list_style_type` varchar(255) DEFAULT NULL,
  `list_style_position` varchar(255) DEFAULT NULL,
  `grid_template_rows` varchar(255) DEFAULT NULL,
  `grid_template_columns` varchar(255) DEFAULT NULL,
  `grid_template_areas` varchar(255) DEFAULT NULL,
  `grid_template` varchar(255) DEFAULT NULL,
  `grid_row_gap` varchar(255) DEFAULT NULL,
  `grid_column_gap` varchar(255) DEFAULT NULL,
  `grid_gap` varchar(255) DEFAULT NULL,
  `grid_auto_rows` varchar(255) DEFAULT NULL,
  `grid_auto_columns` varchar(255) DEFAULT NULL,
  `grid_auto_flow` varchar(255) DEFAULT NULL,
  `grid` varchar(255) DEFAULT NULL,
  `grid_row_start` varchar(255) DEFAULT NULL,
  `grid_column_start` varchar(255) DEFAULT NULL,
  `grid_row_end` varchar(255) DEFAULT NULL,
  `grid_column_end` varchar(255) DEFAULT NULL,
  `grid_area` varchar(255) DEFAULT NULL,
  `justify_items` varchar(255) DEFAULT NULL,
  `align_items` varchar(255) DEFAULT NULL,
  `justify_content` varchar(255) DEFAULT NULL,
  `align_content` varchar(255) DEFAULT NULL,
  `place_items` varchar(255) DEFAULT NULL,
  `place_content` varchar(255) DEFAULT NULL,
  `grid_template_rows_mobile` varchar(255) DEFAULT NULL,
  `grid_template_columns_mobile` varchar(255) DEFAULT NULL,
  `grid_template_areas_mobile` varchar(255) DEFAULT NULL,
  `grid_template_mobile` varchar(255) DEFAULT NULL,
  `grid_row_gap_mobile` varchar(255) DEFAULT NULL,
  `grid_column_gap_mobile` varchar(255) DEFAULT NULL,
  `grid_gap_mobile` varchar(255) DEFAULT NULL,
  `grid_auto_rows_mobile` varchar(255) DEFAULT NULL,
  `grid_auto_columns_mobile` varchar(255) DEFAULT NULL,
  `grid_auto_flow_mobile` varchar(255) DEFAULT NULL,
  `grid_mobile` varchar(255) DEFAULT NULL,
  `grid_row_start_mobile` varchar(255) DEFAULT NULL,
  `grid_column_start_mobile` varchar(255) DEFAULT NULL,
  `grid_row_end_mobile` varchar(255) DEFAULT NULL,
  `grid_column_end_mobile` varchar(255) DEFAULT NULL,
  `grid_area_mobile` varchar(255) DEFAULT NULL,
  `justify_items_mobile` varchar(255) DEFAULT NULL,
  `align_items_mobile` varchar(255) DEFAULT NULL,
  `justify_content_mobile` varchar(255) DEFAULT NULL,
  `align_content_mobile` varchar(255) DEFAULT NULL,
  `place_items_mobile` varchar(255) DEFAULT NULL,
  `place_content_mobile` varchar(255) DEFAULT NULL,
  `float_property` float DEFAULT NULL,
  `tab_background_color` varchar(50) DEFAULT NULL,
  `tab_border_color` varchar(50) DEFAULT NULL,
  `tab_border_width` varchar(50) DEFAULT NULL,
  `tab_padding` varchar(50) DEFAULT NULL,
  `tab_margin` varchar(50) DEFAULT NULL,
  `tab_font_color` varchar(50) DEFAULT NULL,
  `tab_font_size` varchar(50) DEFAULT NULL,
  `tab_font_weight` varchar(50) DEFAULT NULL,
  `tab_text_transform` varchar(50) DEFAULT NULL,
  `tab_text_decoration` varchar(50) DEFAULT NULL,
  `box_shadow` varchar(255) DEFAULT NULL,
  `opacity` decimal(4,2) DEFAULT NULL,
  `transition_property` varchar(255) DEFAULT NULL,
  `transition_duration` varchar(50) DEFAULT NULL,
  `transition_timing_function` varchar(50) DEFAULT NULL,
  `resize` varchar(255) NOT NULL,
  `transform` varchar(255) DEFAULT NULL,
  `transform_origin` varchar(50) DEFAULT NULL,
  `animation_name` varchar(255) DEFAULT NULL,
  `animation_duration` varchar(50) DEFAULT NULL,
  `animation_timing_function` varchar(50) DEFAULT NULL,
  `animation_delay` varchar(50) DEFAULT NULL,
  `animation_iteration_count` varchar(50) DEFAULT NULL,
  `animation_direction` varchar(50) DEFAULT NULL,
  `border_radius` varchar(255) DEFAULT NULL,
  `textarea` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`ID`, `theme_name`, `created_at`, `color`, `font_size`, `background_color`, `background`, `padding`, `margin`, `border`, `text_align`, `display`, `clear`, `position`, `text_shadow`, `text_indent`, `letter_spacing`, `word_spacing`, `line_height`, `text_transform`, `text_decoration`, `font_family`, `font_weight`, `text_overflow`, `white_space`, `text_orientation`, `text_wrap`, `text_justify`, `text_emphasis`, `text_spacing`, `text_shadow_color`, `text_shadow_x`, `text_shadow_y`, `background_image`, `background_repeat`, `background_attachment`, `background_position`, `border_width`, `border_style`, `border_color`, `margin_top`, `margin_right`, `margin_bottom`, `margin_left`, `padding_top`, `padding_right`, `padding_bottom`, `padding_left`, `height`, `width`, `max_height`, `max_width`, `min_height`, `min_width`, `box_sizing`, `outline`, `outline_color`, `outline_style`, `outline_width`, `text_color`, `text_opacity`, `text_shadow_blur`, `text_shadow_spread`, `font_style`, `font_variant`, `font_stretch`, `font_size_adjust`, `font_variant_caps`, `font_variant_numeric`, `font_variant_alternates`, `font_variant_ligatures`, `font_variant_position`, `font_kerning`, `font_language_override`, `font_feature_settings`, `icon_size`, `icon`, `link_color`, `hover`, `visited`, `list_style`, `list_style_type`, `list_style_position`, `grid_template_rows`, `grid_template_columns`, `grid_template_areas`, `grid_template`, `grid_row_gap`, `grid_column_gap`, `grid_gap`, `grid_auto_rows`, `grid_auto_columns`, `grid_auto_flow`, `grid`, `grid_row_start`, `grid_column_start`, `grid_row_end`, `grid_column_end`, `grid_area`, `justify_items`, `align_items`, `justify_content`, `align_content`, `place_items`, `place_content`, `grid_template_rows_mobile`, `grid_template_columns_mobile`, `grid_template_areas_mobile`, `grid_template_mobile`, `grid_row_gap_mobile`, `grid_column_gap_mobile`, `grid_gap_mobile`, `grid_auto_rows_mobile`, `grid_auto_columns_mobile`, `grid_auto_flow_mobile`, `grid_mobile`, `grid_row_start_mobile`, `grid_column_start_mobile`, `grid_row_end_mobile`, `grid_column_end_mobile`, `grid_area_mobile`, `justify_items_mobile`, `align_items_mobile`, `justify_content_mobile`, `align_content_mobile`, `place_items_mobile`, `place_content_mobile`, `float_property`, `tab_background_color`, `tab_border_color`, `tab_border_width`, `tab_padding`, `tab_margin`, `tab_font_color`, `tab_font_size`, `tab_font_weight`, `tab_text_transform`, `tab_text_decoration`, `box_shadow`, `opacity`, `transition_property`, `transition_duration`, `transition_timing_function`, `resize`, `transform`, `transform_origin`, `animation_name`, `animation_duration`, `animation_timing_function`, `animation_delay`, `animation_iteration_count`, `animation_direction`, `border_radius`, `textarea`) VALUES
(77, 'Test Custom Theme', '2023-10-02 02:51:03.969224', '#000000', NULL, '#9abcf4', '', NULL, NULL, '1px solid #4CAF50', 'left', '', '', '', '0 1px 1px rgba(255, 255, 255, 0.2)', '1px', '1px', '1px', '2px', 'uppercase', 'none', '', NULL, 'visible', 'normal', 'horizontal', 'normal', NULL, NULL, NULL, '#fff', NULL, NULL, '', 'no-repeat', 'scroll', '0 0', '2px', 'dotted', '#09135d', '15px', '', '15px', '20px', '10px', '15px', '10px', '15px', 'auto', '500px', 'px', 'px', 'px', 'px', 'border-box', NULL, '#b94b4b', 'solid', '2px', '#fff', NULL, NULL, NULL, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#2cb0ba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'color, background-color, text-shadow, border-color, background-image', '0.3s', 'ease-in-out', 'none', 'none', 'center', '', '', '', '', '', '', '4px', ''),
(86, 'Spring Theme', '2023-10-18 05:16:04.656108', '#519051', '18px', '#e8f5e9', '#e8f5e9', '10px', '10px', '1px solid #4CAF50', 'left', 'inline-block', 'both', '', '0 1px 1px rgba(255, 255, 255, 0.2)', 'px', 'px', 'px', 'px', 'none', 'none', '', 'bold', 'visible', 'normal', 'horizontal', '', '', '', '', '#fff', '', '', '', 'no-repeat', 'scroll', '0 0', '', 'dashed', '#000', '', '', '', '', '', '', '', '', 'auto', '80%', 'px', 'px', 'px', 'px', 'border-box', '', '', '', '', '#fff', '', '', '', 'normal', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '#000000', '#000000', 'px', 'px', 'px', '#000000', 'px', 'px', 'none', 'none', '0 0 5px #4CAF50', '0.80', 'color, background-color, text-shadow, border-color, background-image', '0.3s', 'ease-in-out', 'none', 'none', 'center', '', '', '', '', '', '', '4px', ''),
(87, 'Summer', '2023-10-02 02:51:03.969224', '#ffb266', '16px', '#ffffe0', '', '20px', '', '2px solid #FFB266', 'left', '', '', '', '1px 1px 1px rgba(255, 165, 0, 0.5)', '', '', '', '', 'none', 'none', 'Roboto, sans-serif', '', 'visible', 'normal', 'horizontal', '', '', '', '', '#fff', '', '', 'url(', 'no-repeat', 'fixed', 'center top', '', '', '#FFB266', '', '', '10px', '', '', '', '', '', '', '100%', '', '', '', '', 'border-box', '', '', '', '', '#fff', '', '', '', 'capitalize', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '#FFA500', '#FFA500', '2px', '12px 24px', '8px', '#FFF', '18px', 'bold', 'uppercase', '', '0 2px 6px rgba(0, 0, 0, 0.2)', '1.00', 'color, background-color, border-color', '0.4s', 'ease-in-out', 'none', 'none', 'center', '', '', '', '', '', '', '4px', ''),
(94, 'Dark Theme', '2023-10-02 02:51:03.969224', '#78909c', '16px', '#1A2930', '', '20px', NULL, '2px solid #78909C', 'left', '', '', '', '1px 1px 1px rgba(255, 165, 0, 0.5)', '', '', '', '', 'none', 'none', 'Roboto, sans-serif', NULL, 'visible', 'normal', 'horizontal', NULL, NULL, NULL, NULL, '#fff', NULL, NULL, 'url(\"night-sky-background.jpg\")', 'no-repeat', 'fixed', 'center top', NULL, NULL, '#78909C', '', '', '10px', '', '', '', '', '', '', '', '', '', '', '', 'border-box', NULL, '#000000', 'none', 'px', '#fff', NULL, NULL, NULL, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0px', '#000000', '#000000', NULL, NULL, '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#FFA500', '#FFA500', '2px', '12px 24px', '8px', '#FFF', '18px', 'bold', 'uppercase', 'none', '0 2px 6px rgba(0, 0, 0, 0.2)', '1.00', 'color, background-color, border-color', '0.4s', 'ease-in-out', 'none', 'none', 'center', '', '', '', '', '', '', '10px', ''),
(103, 'Elegant', '2023-10-02 02:51:03.969224', '#F3E0E8', '18px', '#3C1642', 'none', '12px', '0', '2px solid #F3E0E8', 'left', '', '', '', '1px 1px 1px rgba(255, 165, 0, 0.5)', NULL, NULL, NULL, NULL, NULL, NULL, 'Georgia, serif', 'normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#fff', NULL, NULL, 'url(\"elegant-background.jpg\")', 'no-repeat', 'fixed', 'center top', NULL, NULL, '#000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'border-box', 'none', '#000000', 'none', '0', '#fff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#FFA500', '#FFA500', '2px', '12px 24px', '8px', '#FFF', '18px', 'bold', 'uppercase', NULL, '0 2px 6px rgba(0, 0, 0, 0.2)', '1.00', 'color, background-color, border-color', '0.4s', 'ease-in-out', 'none', 'none', 'center', '', '', '', '', '', '', '10px', ''),
(104, 'Standard', '2023-10-02 02:51:03.969224', '#000000', '14px', '#000', 'none', '10px', '0', '1px solid #CCCCCC', 'left', '', '', '', '0 1px 1px rgba(255, 255, 255, 0.2)', '', '', '', 'normal', 'none', 'none', 'Arial, sans-serif', 'normal', 'visible', 'normal', 'horizontal', NULL, NULL, NULL, NULL, '#fff', NULL, NULL, '', 'no-repeat', 'scroll', '0 0', '', NULL, '#000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'border-box', 'none', '#000000', 'none', '0', '#f0f0f0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '0.00', 'color, background-color, text-shadow, border-color, background-image', '1s', 'ease-in-out', 'none', 'none', 'center', '', '', '', '', '', '', '4px', ''),
(120, 'Custom', '2023-10-18 05:53:44.224437', '#ff9d8f', '16px', '#E6F0FF', '', NULL, NULL, '2px solid #FF5733', 'left', '', '', 'relative', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Chivo, sans-serif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'url(\"beach-summer-background.jpg\")', NULL, NULL, NULL, NULL, NULL, '#FFCFCF', '', '', '', '', '10px', '10px', '10px', '10px', '', '80%', NULL, NULL, NULL, NULL, 'content-box', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'none', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#1550B2', '#FFCFCF', '2px', '12px 24px', '8px', '#FF9D8F', '18px', 'bold', 'uppercase', NULL, NULL, NULL, 'color, background-color, border-color', '0.4s', 'ease-in-out', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10px', ''),
(121, 'Education Theme', '2023-10-02 02:51:03.969224', '#336699', '16px', '#F2F2F2', '', NULL, NULL, '1px solid #336699', NULL, '', '', '', '1px 1px 1px rgba(0, 0, 0, 0.2)', NULL, NULL, NULL, NULL, NULL, NULL, 'Roboto, sans-serif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'url(\"education-background.jpg\")', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#007BFF', '#007BFF', '2px', '12px 24px', '8px', '#FFF', '14px', 'bold', 'uppercase', NULL, NULL, NULL, 'color, background-color, border-color', '0.4s', 'ease-in-out', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5px', ''),
(122, 'Red Portal Theme', '2023-10-02 02:51:03.969224', '#CC0000', '16px', '#F8F8F8', '', NULL, NULL, '1px solid #CC0000', NULL, '', '', '', '1px 1px 1px rgba(0, 0, 0, 0.2)', NULL, NULL, NULL, NULL, NULL, NULL, 'Open Sans, sans-serif', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'url(\"red-background.jpg\")', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '#FF5733', '#FF5733', '2px', '12px 24px', '8px', '#FFF', '14px', 'bold', 'uppercase', NULL, NULL, NULL, 'color, background-color, border-color', '0.4s', 'ease-in-out', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5px', ''),
(357, 'Default', NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', '', '', NULL, 'px', 'px', 'px', 'px', NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Select', NULL, '', 'px', NULL, NULL, 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', NULL, NULL, NULL, 'none', 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', 'px', 'px', NULL, 'px', 'px', 'none', NULL, 'none', NULL, 'all', NULL, 'ease', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', ''),
(358, 'Course Theme ', '2024-03-12 08:48:25.745239', NULL, NULL, '#525252', '', NULL, NULL, NULL, NULL, '', '', '', NULL, 'px', 'px', 'px', 'px', NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Select', NULL, 'center center', '3px', 'groove', NULL, 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', NULL, NULL, NULL, 'none', 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', 'px', 'px', NULL, 'px', 'px', 'none', NULL, 'none', NULL, 'all', NULL, 'ease', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', ''),
(360, 'default 2.0', '2024-03-15 09:51:01.207311', NULL, NULL, '#fafdff', '', NULL, NULL, NULL, NULL, '', '', '', NULL, 'px', 'px', 'px', 'px', NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Select', NULL, 'center center', '1pxpxpx', 'solid', NULL, 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'pxpx', 'pxpx', 'px', 'px', 'px', 'px', NULL, NULL, NULL, 'none', 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', 'px', 'px', NULL, 'px', 'px', 'none', NULL, 'none', NULL, 'all', NULL, 'ease', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2px', ''),
(361, 'Default 2.1', '2024-03-15 09:53:58.713462', NULL, NULL, '#fafeff', '', NULL, NULL, NULL, NULL, '', '', '', NULL, 'px', 'px', 'px', 'px', NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Select', NULL, 'center center', '1px', 'solid', NULL, 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', NULL, NULL, NULL, 'none', 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', 'px', 'px', NULL, 'px', 'px', 'none', NULL, 'none', NULL, 'all', NULL, 'ease', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2px', ''),
(362, 'Latest Theme ', NULL, NULL, NULL, '#fdbfbf', '', NULL, NULL, NULL, NULL, '', '', '', NULL, 'px', 'px', 'px', 'px', NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Select', NULL, 'center center', '2px', 'dashed', NULL, 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', NULL, NULL, NULL, 'none', 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', 'px', 'px', NULL, 'px', 'px', 'none', NULL, 'none', NULL, 'all', NULL, 'ease', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', ''),
(363, 'Demostration Thee', NULL, NULL, NULL, '#a5cfe9', '', NULL, NULL, NULL, NULL, '', '', '', NULL, 'px', 'px', 'px', 'px', NULL, NULL, NULL, NULL, NULL, 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'url(\"images/Book.jpg\")', 'no-repeat', NULL, 'right top', '2px', 'dashed', NULL, 'px', 'px', 'px', 'px', 'px', 'px', 'px', 'px', '500px', '500px', 'px', 'px', 'px', 'px', NULL, NULL, NULL, 'none', 'px', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', NULL, '#215f28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'row', NULL, NULL, NULL, NULL, NULL, NULL, 'start', 'start', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'px', 'px', 'px', NULL, 'px', 'px', 'none', NULL, '2px 2px 4px rgba(0, 0, 0, 0.2)', NULL, 'all', '3', 'linear', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5px', '');

-- --------------------------------------------------------

--
-- Table structure for table `theme_for_report`
--

CREATE TABLE `theme_for_report` (
  `id` int(11) NOT NULL,
  `reference_id` int(11) NOT NULL,
  `theme_name` varchar(255) NOT NULL,
  `element_id` int(11) NOT NULL,
  `css_property_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme_for_report`
--

INSERT INTO `theme_for_report` (`id`, `reference_id`, `theme_name`, `element_id`, `css_property_id`, `value`) VALUES
(7, 7, 'Orange Theme', 60, 32, 'display'),
(8, 7, 'Orange Theme', 60, 33, 'repeat(3, 1fr)'),
(9, 7, 'Orange Theme', 60, 34, '11px'),
(10, 7, 'Orange Theme', 60, 35, 'center'),
(11, 7, 'Orange Theme', 60, 36, 'center'),
(12, 7, 'Orange Theme', 60, 1, '#E6E6FA'),
(13, 7, 'Orange Theme', 60, 7, '8px'),
(14, 7, 'Orange Theme', 60, 6, '16px'),
(15, 7, 'Orange Theme', 60, 37, '\'Roboto\', sans-serif'),
(16, 7, 'Orange Theme', 60, 13, '880px'),
(17, 7, 'Orange Theme', 60, 5, '0 auto'),
(18, 7, 'Orange Theme', 115, 12, 'center'),
(19, 7, 'Orange Theme', 115, 38, 'span 3'),
(20, 7, 'Orange Theme', 115, 3, '#4CAF50'),
(21, 7, 'Orange Theme', 115, 2, '24px'),
(22, 7, 'Orange Theme', 61, 13, '850px'),
(23, 7, 'Orange Theme', 61, 39, 'separate'),
(24, 7, 'Orange Theme', 61, 40, '0 8px'),
(25, 7, 'Orange Theme', 61, 41, '16px'),
(26, 7, 'Orange Theme', 61, 1, '#FFF8DC'),
(27, 7, 'Orange Theme', 53, 6, '14px'),
(28, 7, 'Orange Theme', 53, 4, '2px solid #FFD700'),
(29, 7, 'Orange Theme', 53, 1, '#FFA500'),
(30, 7, 'Orange Theme', 53, 3, '#fff'),
(31, 7, 'Orange Theme', 53, 18, 'bold'),
(32, 7, 'Orange Theme', 55, 1, '#FFE4B5'),
(33, 7, 'Orange Theme', 56, 1, '#FFE4B5'),
(34, 7, 'Orange Theme', 57, 1, '#ADD8E6'),
(35, 7, 'Orange Theme', 116, 6, '12px'),
(36, 7, 'Orange Theme', 116, 4, '2px solid #87CEEB'),
(37, 7, 'Orange Theme', 116, 3, '#333'),
(38, 7, 'Orange Theme', 58, 1, '#FFD700'),
(39, 7, 'Orange Theme', 58, 3, '#fff'),
(40, 7, 'Orange Theme', 58, 18, 'bold'),
(42, 42, 'Blue theme', 60, 32, 'display'),
(43, 42, 'Blue theme', 60, 33, 'repeat(3, 1fr)'),
(44, 42, 'Blue theme', 60, 34, '10px'),
(45, 42, 'Blue theme', 60, 35, 'center'),
(46, 42, 'Blue theme', 60, 36, 'center'),
(47, 42, 'Blue theme', 60, 1, '#f5f8fa'),
(48, 42, 'Blue theme', 60, 7, '7px'),
(49, 42, 'Blue theme', 60, 6, '25px'),
(50, 42, 'Blue theme', 60, 37, '\'Helvetica\', sans-serif'),
(51, 42, 'Blue theme', 60, 13, '880px'),
(52, 42, 'Blue theme', 60, 5, '0 auto'),
(53, 42, 'Blue theme', 115, 12, 'center '),
(54, 42, 'Blue theme', 115, 38, 'span 3'),
(55, 42, 'Blue theme', 115, 3, '#4d5253'),
(56, 42, 'Blue theme', 115, 2, '30px'),
(57, 42, 'Blue theme', 61, 13, '100%'),
(58, 42, 'Blue theme', 61, 39, 'collapse'),
(59, 42, 'Blue theme', 61, 40, '0 10px'),
(60, 42, 'Blue theme', 61, 41, '18px'),
(61, 42, 'Blue theme', 61, 1, '#87CEEB'),
(62, 42, 'Blue theme', 53, 6, '20px'),
(63, 42, 'Blue theme', 53, 4, '3px groove #ddd'),
(64, 42, 'Blue theme', 53, 1, '#102b47'),
(65, 42, 'Blue theme', 53, 3, '#fff'),
(66, 42, 'Blue theme', 53, 18, 'bold'),
(67, 42, 'Blue theme', 55, 1, '#edfcff'),
(68, 42, 'Blue theme', 56, 1, '#FFF'),
(69, 42, 'Blue theme', 57, 1, '#ADD8E6'),
(70, 42, 'Blue theme', 116, 6, '20px'),
(71, 42, 'Blue theme', 116, 4, '2px dashed #8cc1ed'),
(72, 42, 'Blue theme', 116, 3, '#4d5253'),
(73, 42, 'Blue theme', 58, 1, '#FFD700'),
(74, 42, 'Blue theme', 58, 3, '#fff'),
(75, 42, 'Blue theme', 58, 18, 'bold'),
(111, 111, 'Black Theme', 60, 32, 'display'),
(112, 111, 'Black Theme', 60, 33, 'repeat(4, 1fr)'),
(113, 111, 'Black Theme', 60, 34, '15px'),
(114, 111, 'Black Theme', 60, 35, 'center'),
(115, 111, 'Black Theme', 60, 36, 'center'),
(116, 111, 'Black Theme', 60, 1, '#828582'),
(117, 111, 'Black Theme', 60, 7, '12px'),
(118, 111, 'Black Theme', 60, 6, '20px'),
(119, 111, 'Black Theme', 60, 37, '\'Roboto\''),
(120, 111, 'Black Theme', 60, 13, '900px'),
(121, 111, 'Black Theme', 60, 5, '20px auto'),
(122, 111, 'Black Theme', 115, 12, 'center'),
(123, 111, 'Black Theme', 115, 38, 'span 4'),
(124, 111, 'Black Theme', 115, 3, '#000000'),
(125, 111, 'Black Theme', 115, 2, '28px'),
(126, 111, 'Black Theme', 61, 13, '850px'),
(127, 111, 'Black Theme', 61, 39, 'separate'),
(128, 111, 'Black Theme', 61, 40, '0 12px'),
(129, 111, 'Black Theme', 61, 41, '20px'),
(130, 111, 'Black Theme', 61, 1, '#fff'),
(131, 111, 'Black Theme', 53, 6, '12px'),
(132, 111, 'Black Theme', 53, 4, '2px dotted white'),
(133, 111, 'Black Theme', 53, 1, '#4c4f4c'),
(137, 111, 'Black Theme', 53, 3, '#fff'),
(138, 111, 'Black Theme', 53, 18, 'bold'),
(139, 111, 'Black Theme', 55, 1, '#f8f8f8'),
(140, 111, 'Black Theme', 56, 1, '#fff'),
(141, 111, 'Black Theme', 57, 1, '#e0e0e0'),
(142, 111, 'Black Theme', 116, 6, '14px'),
(143, 111, 'Black Theme', 116, 4, '2px solid '),
(144, 111, 'Black Theme', 116, 3, '#333'),
(145, 111, 'Black Theme', 58, 1, '#008000'),
(146, 111, 'Black Theme', 58, 3, '#fff'),
(147, 111, 'Black Theme', 58, 18, 'bold'),
(224, 42, 'Blue Theme', 53, 2, '18px'),
(225, 111, 'Black Theme', 53, 2, '25px'),
(1182, 0, 'TEST 7', 0, 0, ''),
(1183, 1183, 'TEST 7', 60, 32, ''),
(1184, 1183, 'TEST 7', 60, 33, ''),
(1185, 1183, 'TEST 7', 60, 34, ''),
(1186, 1183, 'TEST 7', 60, 35, ''),
(1187, 1183, 'TEST 7', 60, 36, ''),
(1188, 1183, 'TEST 7', 60, 1, '#f3e1a0'),
(1189, 1183, 'TEST 7', 60, 7, ''),
(1190, 1183, 'TEST 7', 60, 6, ''),
(1191, 1183, 'TEST 7', 60, 37, ''),
(1192, 1183, 'TEST 7', 60, 13, ''),
(1193, 1183, 'TEST 7', 60, 5, ''),
(1194, 1183, 'TEST 7', 115, 12, ''),
(1195, 1183, 'TEST 7', 115, 38, ''),
(1196, 1183, 'TEST 7', 115, 3, '#e1b2b2'),
(1197, 1183, 'TEST 7', 115, 2, '24px'),
(1198, 1183, 'TEST 7', 61, 13, ''),
(1199, 1183, 'TEST 7', 61, 39, 'separate'),
(1200, 1183, 'TEST 7', 61, 40, ''),
(1201, 1183, 'TEST 7', 61, 41, '16px'),
(1202, 1183, 'TEST 7', 61, 1, '#741515'),
(1203, 1183, 'TEST 7', 53, 6, ''),
(1204, 1183, 'TEST 7', 53, 4, ''),
(1205, 1183, 'TEST 7', 53, 1, '#000000'),
(1206, 1183, 'TEST 7', 53, 3, '#896161'),
(1207, 1183, 'TEST 7', 53, 18, 'bold'),
(1208, 1183, 'TEST 7', 55, 1, '#a45656'),
(1209, 1183, 'TEST 7', 56, 1, '#a15e5e'),
(1210, 1183, 'TEST 7', 57, 1, '#69a70c'),
(1211, 1183, 'TEST 7', 116, 6, ''),
(1212, 1183, 'TEST 7', 116, 4, ''),
(1213, 1183, 'TEST 7', 116, 3, '#48fe97'),
(1214, 1183, 'TEST 7', 58, 1, '#c49797'),
(1215, 1183, 'TEST 7', 58, 3, '#c29393'),
(1216, 1183, 'TEST 7', 58, 18, ''),
(1217, 1183, 'TEST 7', 53, 2, ''),
(1218, 1183, 'TEST 7', 116, 37, ''),
(1219, 1183, 'TEST 7', 116, 2, ''),
(1220, 1183, 'TEST 7', 116, 23, ''),
(1221, 1183, 'TEST 7', 117, 3, '#000000'),
(1222, 1183, 'TEST 7', 117, 18, ''),
(1223, 1183, 'TEST 7', 117, 2, ''),
(1224, 1183, 'TEST 7', 118, 3, '#000000'),
(1225, 1183, 'TEST 7', 118, 18, ''),
(1226, 1183, 'TEST 7', 118, 2, ''),
(1227, 1183, 'TEST 7', 119, 2, ''),
(1228, 1183, 'TEST 7', 119, 3, '#000000'),
(1229, 1183, 'TEST 7', 119, 18, ''),
(1230, 1183, 'TEST 7', 120, 2, ''),
(1231, 1183, 'TEST 7', 120, 18, ''),
(1232, 0, 'Demo Report Theme March', 0, 0, ''),
(1233, 1233, 'Demo Report Theme March', 60, 32, ' '),
(1234, 1233, 'Demo Report Theme March', 60, 33, ' '),
(1235, 1233, 'Demo Report Theme March', 60, 34, '10px'),
(1236, 1233, 'Demo Report Theme March', 60, 35, ' '),
(1237, 1233, 'Demo Report Theme March', 60, 36, ' '),
(1238, 1233, 'Demo Report Theme March', 60, 1, '#b5b5b5'),
(1239, 1233, 'Demo Report Theme March', 60, 7, 'px'),
(1240, 1233, 'Demo Report Theme March', 60, 6, 'px'),
(1241, 1233, 'Demo Report Theme March', 60, 37, '\'Times New Roman\', serif'),
(1242, 1233, 'Demo Report Theme March', 60, 13, ''),
(1243, 1233, 'Demo Report Theme March', 60, 5, 'px'),
(1244, 1233, 'Demo Report Theme March', 115, 12, ' '),
(1245, 1233, 'Demo Report Theme March', 115, 38, ' '),
(1246, 1233, 'Demo Report Theme March', 115, 3, '#ffffff'),
(1247, 1233, 'Demo Report Theme March', 115, 2, '35px'),
(1248, 1233, 'Demo Report Theme March', 61, 13, '10px'),
(1249, 1233, 'Demo Report Theme March', 61, 39, 'separate'),
(1250, 1233, 'Demo Report Theme March', 61, 40, '1px 0'),
(1251, 1233, 'Demo Report Theme March', 61, 41, '10px'),
(1252, 1233, 'Demo Report Theme March', 61, 1, '#535bc6'),
(1253, 1233, 'Demo Report Theme March', 53, 6, 'px'),
(1254, 1233, 'Demo Report Theme March', 53, 4, ' '),
(1255, 1233, 'Demo Report Theme March', 53, 1, '#756c6c'),
(1256, 1233, 'Demo Report Theme March', 53, 3, '#d7d973'),
(1257, 1233, 'Demo Report Theme March', 53, 18, 'bolder'),
(1258, 1233, 'Demo Report Theme March', 55, 1, '#d9d9d9'),
(1259, 1233, 'Demo Report Theme March', 56, 1, '#f7f2f2'),
(1260, 1233, 'Demo Report Theme March', 57, 1, '#d56bd6'),
(1261, 1233, 'Demo Report Theme March', 116, 6, 'px'),
(1262, 1233, 'Demo Report Theme March', 116, 4, ' '),
(1263, 1233, 'Demo Report Theme March', 116, 3, '#000000'),
(1264, 1233, 'Demo Report Theme March', 58, 1, '#000000'),
(1265, 1233, 'Demo Report Theme March', 58, 3, '#000000'),
(1266, 1233, 'Demo Report Theme March', 58, 18, 'px'),
(1267, 1233, 'Demo Report Theme March', 53, 2, '20px'),
(1268, 1233, 'Demo Report Theme March', 116, 37, ' '),
(1269, 1233, 'Demo Report Theme March', 116, 2, 'px'),
(1270, 1233, 'Demo Report Theme March', 116, 23, ' '),
(1271, 1233, 'Demo Report Theme March', 117, 3, '#f56161'),
(1272, 1233, 'Demo Report Theme March', 117, 18, 'bolder'),
(1273, 1233, 'Demo Report Theme March', 117, 2, '18px'),
(1274, 1233, 'Demo Report Theme March', 118, 3, '#000000'),
(1275, 1233, 'Demo Report Theme March', 118, 18, ' '),
(1276, 1233, 'Demo Report Theme March', 118, 2, 'px'),
(1277, 1233, 'Demo Report Theme March', 119, 2, 'px'),
(1278, 1233, 'Demo Report Theme March', 119, 3, '#000000'),
(1279, 1233, 'Demo Report Theme March', 119, 18, ' '),
(1280, 1233, 'Demo Report Theme March', 120, 2, 'px'),
(1281, 1233, 'Demo Report Theme March', 120, 18, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `theme_text_css_properties_value`
--

CREATE TABLE `theme_text_css_properties_value` (
  `id` int(11) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `text_type_id` int(11) NOT NULL,
  `text_CSS_Property` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme_text_css_properties_value`
--

INSERT INTO `theme_text_css_properties_value` (`id`, `theme_id`, `text_type_id`, `text_CSS_Property`, `value`, `created_at`, `updated_at`) VALUES
(775, 357, 1, 'color', '#f5f5f5', '2024-03-12 09:13:25', '2024-03-12 02:44:04'),
(776, 358, 1, 'font_size', '30', '2024-03-12 04:14:09', '2024-03-12 04:14:09'),
(777, 358, 1, 'color', '#f5f5f5 !important', '2024-03-12 09:05:06', '2024-03-12 04:14:09'),
(778, 358, 4, 'font_size', '18', '2024-03-12 04:14:09', '2024-03-12 04:14:09'),
(779, 358, 4, 'color', '#497cf3', '2024-03-12 04:14:09', '2024-03-12 04:14:09'),
(780, 358, 4, 'font_family', 'Courier New, Courier, monospace', '2024-03-12 04:14:09', '2024-03-12 04:14:09'),
(781, 357, 4, 'color', 'yellow', '2024-03-12 09:17:32', '0000-00-00 00:00:00'),
(782, 363, 1, 'font_size', '30px', '2024-03-24 02:38:55', '2024-03-24 02:38:55'),
(783, 363, 1, 'color', '#1c53ab', '2024-03-24 02:38:55', '2024-03-24 02:38:55'),
(784, 363, 1, 'font_family', 'Verdana, Geneva, sans-serif', '2024-03-24 02:38:55', '2024-03-24 02:38:55'),
(785, 363, 1, 'text_align', 'center', '2024-03-24 02:38:55', '2024-03-24 02:38:55'),
(786, 363, 1, 'text_decoration', 'underline', '2024-03-24 02:38:55', '2024-03-24 02:38:55'),
(787, 363, 4, 'font_size', '18', '2024-03-24 02:38:55', '2024-03-24 02:38:55'),
(788, 363, 4, 'color', '#7a7575', '2024-03-24 02:38:55', '2024-03-24 02:38:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_argument_map`
--
ALTER TABLE `action_argument_map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_library_id` (`action_library_id`);

--
-- Indexes for table `action_library`
--
ALTER TABLE `action_library`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_type` (`action_type`);

--
-- Indexes for table `action_type`
--
ALTER TABLE `action_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_forms`
--
ALTER TABLE `application_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_name` (`course_name`) USING BTREE,
  ADD KEY `course_link` (`course_link`) USING BTREE,
  ADD KEY `course_type_id` (`course_type_id`) USING BTREE,
  ADD KEY `department_name` (`department_id`) USING BTREE;

--
-- Indexes for table `course_type`
--
ALTER TABLE `course_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_type` (`course_type`);

--
-- Indexes for table `css_properties`
--
ALTER TABLE `css_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_name` (`property_name`);

--
-- Indexes for table `current_theme`
--
ALTER TABLE `current_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `custom_page_properties`
--
ALTER TABLE `custom_page_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_code` (`department_code`) USING BTREE,
  ADD KEY `department_name` (`department_name`) USING BTREE,
  ADD KEY `department_desc` (`department_desc`) USING BTREE;

--
-- Indexes for table `effects`
--
ALTER TABLE `effects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `effect_trigger`
--
ALTER TABLE `effect_trigger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `element_css_properties`
--
ALTER TABLE `element_css_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_element_ibfk_1` (`element_id`),
  ADD KEY `element_id` (`element_id`),
  ADD KEY `css_properties_id` (`css_properties_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty_name` (`faculty_name`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `course_id` (`course_id`) USING BTREE,
  ADD KEY `address` (`address`) USING BTREE,
  ADD KEY `email` (`email`) USING BTREE,
  ADD KEY `phone` (`phone`),
  ADD KEY `faculty_ibfk_4` (`theme_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`FORM_ID`),
  ADD KEY `form_type` (`form_type`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `form_element`
--
ALTER TABLE `form_element`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `element_name` (`element_name`);

--
-- Indexes for table `form_element_css_properties`
--
ALTER TABLE `form_element_css_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `element_id` (`element_id`),
  ADD KEY `css_properties_id` (`css_properties_id`);

--
-- Indexes for table `form_element_css_properties_theme_mapping`
--
ALTER TABLE `form_element_css_properties_theme_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `value` (`value`),
  ADD KEY `theme_ID` (`theme_ID`),
  ADD KEY `form_element_css_properties_id` (`form_element_css_properties_id`);

--
-- Indexes for table `form_element_theme_mapping`
--
ALTER TABLE `form_element_theme_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD PRIMARY KEY (`FIELD_ID`),
  ADD KEY `FORM_ID` (`FORM_ID`),
  ADD KEY `table_column_id` (`table_column_id`),
  ADD KEY `table_column_id_2` (`table_column_id`);

--
-- Indexes for table `form_field_cssproperty_value_mapping`
--
ALTER TABLE `form_field_cssproperty_value_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `field_id` (`field_id`),
  ADD KEY `css_properties_id_2` (`css_property_id`),
  ADD KEY `form_id` (`form_id`);

--
-- Indexes for table `form_theme_mapping`
--
ALTER TABLE `form_theme_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_id` (`form_id`),
  ADD KEY `theme_ID` (`theme_ID`),
  ADD KEY `theme_name` (`theme_name`);

--
-- Indexes for table `function_argument_map`
--
ALTER TABLE `function_argument_map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `function_library_ibfk` (`function_library_id`);

--
-- Indexes for table `function_category`
--
ALTER TABLE `function_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `function_library`
--
ALTER TABLE `function_library`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `function_type` (`function_type`);

--
-- Indexes for table `function_library_manager`
--
ALTER TABLE `function_library_manager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `function_id` (`function_id`,`category_id`,`subcategory_id`,`status`,`group_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `status` (`status`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `function_subcategory`
--
ALTER TABLE `function_subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `function_type`
--
ALTER TABLE `function_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `night_time_settings`
--
ALTER TABLE `night_time_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_element_css_set`
--
ALTER TABLE `report_element_css_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_function_action_mapping`
--
ALTER TABLE `report_function_action_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_function_mapping_id` (`report_function_mapping_id`),
  ADD KEY `action_id` (`action_library_id`);

--
-- Indexes for table `report_function_arg_value_mapping`
--
ALTER TABLE `report_function_arg_value_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report_function_mapping` (`report_function_mapping_id`),
  ADD KEY `function_argument_map` (`function_argument_map_id`);

--
-- Indexes for table `report_function_mapping_action_value`
--
ALTER TABLE `report_function_mapping_action_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_arg` (`action_argument_id`),
  ADD KEY `rfam` (`report_function_action_mapping_id`);

--
-- Indexes for table `report_selector_function_mapping`
--
ALTER TABLE `report_selector_function_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `report` (`report_id`),
  ADD KEY `funtion` (`function_library_id`);

--
-- Indexes for table `report_theme`
--
ALTER TABLE `report_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_theme_mapping`
--
ALTER TABLE `report_theme_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_trigger_mapping`
--
ALTER TABLE `report_trigger_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_type`
--
ALTER TABLE `return_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `script_code`
--
ALTER TABLE `script_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selector`
--
ALTER TABLE `selector`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_information_ibfk_1` (`course_id`),
  ADD KEY `student_information_ibfk_2` (`course_type_id`),
  ADD KEY `student_information_ibfk_3` (`department_id`),
  ADD KEY `student_information_ibfk_4` (`theme_ID`);

--
-- Indexes for table `table_theme`
--
ALTER TABLE `table_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_column`
--
ALTER TABLE `target_column`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rfam_id` (`report_function_action_mapping_id`);

--
-- Indexes for table `text_css_properties`
--
ALTER TABLE `text_css_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_type`
--
ALTER TABLE `text_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `theme_name` (`theme_name`) USING BTREE;

--
-- Indexes for table `theme_for_report`
--
ALTER TABLE `theme_for_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `css_property_id` (`css_property_id`),
  ADD KEY `element_css_properties_ibfk_9` (`element_id`);

--
-- Indexes for table `theme_text_css_properties_value`
--
ALTER TABLE `theme_text_css_properties_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `text_type_id` (`text_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action_argument_map`
--
ALTER TABLE `action_argument_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `action_library`
--
ALTER TABLE `action_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `action_type`
--
ALTER TABLE `action_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `application_forms`
--
ALTER TABLE `application_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_type`
--
ALTER TABLE `course_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `css_properties`
--
ALTER TABLE `css_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `current_theme`
--
ALTER TABLE `current_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom_page_properties`
--
ALTER TABLE `custom_page_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `effects`
--
ALTER TABLE `effects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=438;

--
-- AUTO_INCREMENT for table `effect_trigger`
--
ALTER TABLE `effect_trigger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `element_css_properties`
--
ALTER TABLE `element_css_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `FORM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_element`
--
ALTER TABLE `form_element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `form_element_css_properties`
--
ALTER TABLE `form_element_css_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `form_element_css_properties_theme_mapping`
--
ALTER TABLE `form_element_css_properties_theme_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8481;

--
-- AUTO_INCREMENT for table `form_element_theme_mapping`
--
ALTER TABLE `form_element_theme_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form_fields`
--
ALTER TABLE `form_fields`
  MODIFY `FIELD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `form_field_cssproperty_value_mapping`
--
ALTER TABLE `form_field_cssproperty_value_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `form_theme_mapping`
--
ALTER TABLE `form_theme_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `function_argument_map`
--
ALTER TABLE `function_argument_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `function_category`
--
ALTER TABLE `function_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `function_library`
--
ALTER TABLE `function_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `function_library_manager`
--
ALTER TABLE `function_library_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `function_subcategory`
--
ALTER TABLE `function_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `function_type`
--
ALTER TABLE `function_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `night_time_settings`
--
ALTER TABLE `night_time_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `report_element_css_set`
--
ALTER TABLE `report_element_css_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `report_function_action_mapping`
--
ALTER TABLE `report_function_action_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `report_function_arg_value_mapping`
--
ALTER TABLE `report_function_arg_value_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=621;

--
-- AUTO_INCREMENT for table `report_function_mapping_action_value`
--
ALTER TABLE `report_function_mapping_action_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=837;

--
-- AUTO_INCREMENT for table `report_selector_function_mapping`
--
ALTER TABLE `report_selector_function_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1517;

--
-- AUTO_INCREMENT for table `report_theme`
--
ALTER TABLE `report_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `report_theme_mapping`
--
ALTER TABLE `report_theme_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `report_trigger_mapping`
--
ALTER TABLE `report_trigger_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `return_type`
--
ALTER TABLE `return_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `script_code`
--
ALTER TABLE `script_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `table_theme`
--
ALTER TABLE `table_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `target_column`
--
ALTER TABLE `target_column`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `text_css_properties`
--
ALTER TABLE `text_css_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `text_type`
--
ALTER TABLE `text_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `theme_for_report`
--
ALTER TABLE `theme_for_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1282;

--
-- AUTO_INCREMENT for table `theme_text_css_properties_value`
--
ALTER TABLE `theme_text_css_properties_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action_argument_map`
--
ALTER TABLE `action_argument_map`
  ADD CONSTRAINT `action_library_id` FOREIGN KEY (`action_library_id`) REFERENCES `action_library` (`id`);

--
-- Constraints for table `action_library`
--
ALTER TABLE `action_library`
  ADD CONSTRAINT `action_type` FOREIGN KEY (`action_type`) REFERENCES `action_type` (`id`);

--
-- Constraints for table `element_css_properties`
--
ALTER TABLE `element_css_properties`
  ADD CONSTRAINT `element_css_properties_ibfk_1` FOREIGN KEY (`css_properties_id`) REFERENCES `css_properties` (`id`),
  ADD CONSTRAINT `element_css_properties_ibfk_2` FOREIGN KEY (`element_id`) REFERENCES `form_element` (`id`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `faculty_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `faculty_ibfk_4` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`ID`);

--
-- Constraints for table `form_fields`
--
ALTER TABLE `form_fields`
  ADD CONSTRAINT `form_id` FOREIGN KEY (`FORM_ID`) REFERENCES `forms` (`FORM_ID`);

--
-- Constraints for table `form_field_cssproperty_value_mapping`
--
ALTER TABLE `form_field_cssproperty_value_mapping`
  ADD CONSTRAINT `css_properties_id_2` FOREIGN KEY (`css_property_id`) REFERENCES `css_properties` (`id`),
  ADD CONSTRAINT `field_id` FOREIGN KEY (`field_id`) REFERENCES `form_fields` (`FIELD_ID`);

--
-- Constraints for table `function_argument_map`
--
ALTER TABLE `function_argument_map`
  ADD CONSTRAINT `function_library_ibfk` FOREIGN KEY (`function_library_id`) REFERENCES `function_library` (`id`);

--
-- Constraints for table `report_function_action_mapping`
--
ALTER TABLE `report_function_action_mapping`
  ADD CONSTRAINT `action_id` FOREIGN KEY (`action_library_id`) REFERENCES `action_library` (`id`),
  ADD CONSTRAINT `report_function_mapping_id` FOREIGN KEY (`report_function_mapping_id`) REFERENCES `report_selector_function_mapping` (`id`);

--
-- Constraints for table `report_function_arg_value_mapping`
--
ALTER TABLE `report_function_arg_value_mapping`
  ADD CONSTRAINT `function_argument_map` FOREIGN KEY (`function_argument_map_id`) REFERENCES `function_argument_map` (`id`),
  ADD CONSTRAINT `report_function_mapping` FOREIGN KEY (`report_function_mapping_id`) REFERENCES `report_selector_function_mapping` (`id`);

--
-- Constraints for table `report_function_mapping_action_value`
--
ALTER TABLE `report_function_mapping_action_value`
  ADD CONSTRAINT `action_arg` FOREIGN KEY (`action_argument_id`) REFERENCES `action_argument_map` (`id`),
  ADD CONSTRAINT `rfam` FOREIGN KEY (`report_function_action_mapping_id`) REFERENCES `report_function_action_mapping` (`id`);

--
-- Constraints for table `report_selector_function_mapping`
--
ALTER TABLE `report_selector_function_mapping`
  ADD CONSTRAINT `funtion` FOREIGN KEY (`function_library_id`) REFERENCES `function_library` (`id`),
  ADD CONSTRAINT `report` FOREIGN KEY (`report_id`) REFERENCES `report` (`id`);

--
-- Constraints for table `target_column`
--
ALTER TABLE `target_column`
  ADD CONSTRAINT `rfam_id` FOREIGN KEY (`report_function_action_mapping_id`) REFERENCES `report_function_action_mapping` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
