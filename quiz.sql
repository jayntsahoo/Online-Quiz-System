-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 03:48 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'PHP'),
(4, 'MYSQL'),
(5, 'BOOTSTRAP');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `comment`) VALUES
(9, 'Jayanta Kumar Sahoo', 9751751712, 'j14352115@gmail.com', 'About Online Quiz System', 'Hello...This is Jayanta...');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `pwd`, `phone`, `image`) VALUES
(44, 'Jayanta', 'Sahoo', 'j14352115@gmail.com', '90fe39de0840860eff19f9bd38be41e2', 9751751712, 'Jayanta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `ans1` varchar(100) NOT NULL,
  `ans2` varchar(100) NOT NULL,
  `ans3` varchar(100) NOT NULL,
  `ans4` varchar(100) NOT NULL,
  `ans` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(2, 'What does HTML stand for?', 'Home Tool Markup Language', 'Hyper Text Markup Language', 'Hyperlinks and Text Markup Language', 'None of the above', 1, 1),
(3, 'Who is making the Web standards?', 'Google', 'WWW Consortium', ' Microsoft', 'Mozilla', 1, 1),
(4, 'How can you make a numbered list?', '&lt;ol&gt;', '&lt;list&gt;', '&lt;ul&gt;', '&lt;dl&gt;', 0, 1),
(5, 'How can you make a bulleted list?', '&lt;ol&gt;', '&lt;dl&gt;', '&lt;list&gt;', '&lt;ul&gt;', 3, 1),
(6, 'What is the correct HTML element for inserting a line break?', '&lt;br&gt;', '&lt;lb&gt;', '&lt;break&gt;', 'None of the above', 0, 1),
(7, 'Choose the correct HTML element for the largest heading:', '&lt;h1&gt;', '&lt;head&gt;', '&lt;h6&gt;', '&lt;heading&gt;', 0, 1),
(8, 'Choose the correct HTML element to define important text ?', '&lt;important&gt;', '&lt;i&gt;', '&lt;strong&gt;', '&lt;b&gt;', 0, 1),
(9, 'Which character is used to indicate an end tag ?', '&lt;', '&gt;', '*', '/', 3, 1),
(11, 'What does CSS stand for ?', 'reative Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', 'Colorful Style Sheets', 2, 2),
(12, 'Where in an HTML document is the correct place to refer to an external style sheet ?', 'In the &lt;head&gt; section', 'In the &lt;body&gt; section', 'At the end of the document', 'None of the above', 0, 2),
(13, 'Which HTML tag is used to define an internal style sheet ?', '&lt;css&gt;', '&lt;style&gt;', '&lt;script&gt;', 'None of the above', 0, 2),
(14, 'Which HTML attribute is used to define inline styles?', 'styles', 'class', 'font', 'style', 3, 2),
(15, 'Which is the correct CSS syntax ?', '{body:color=black;}', '{body;color:black;}', 'body {color: black;}', 'body:color=black;', 2, 2),
(16, 'Which property is used to change the background color?', 'background-color', 'color', 'bgcolor', 'background-color', 0, 2),
(17, 'How do you add a background color for all &lt;h1&gt; elements ?', 'all.h1 {background-color:#FFFFFF;}', 'h1 {background-color:#FFFFFF;}', 'h1.all {background-color:#FFFFFF;}', 'All of the above', 1, 2),
(18, 'Which CSS property is used to change the text color of an element ?', 'fgcolor', 'text-color', 'color', 'All of the above', 2, 2),
(19, 'Which CSS property controls the text size?', 'text-size', 'font-size', 'text-style', 'font-style', 1, 2),
(20, 'What is the correct CSS syntax for making all the &lt;p&gt; elements bold ?', '&lt;p style=&quot;text-size:bold;&quot;&gt;', '&lt;p style=&quot;font-size:bold;&quot;&gt;', 'p {text-size:bold;}', 'p {font-weight:bold;}', 3, 2),
(21, 'What does PHP stand for?', 'Private Home Page', 'Personal Hypertext Processor', 'PHP: Hypertext Preprocessor', 'None of the above', 2, 3),
(22, 'PHP server scripts are surrounded by delimiters, which?', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '&lt;?php&gt;...&lt;/?&gt;', '&lt;?php...?&gt;', '&lt;script&gt;...&lt;/script&gt;', 0, 3),
(23, 'How do you write &quot;Hello World&quot; in PHP ?', 'echo &quot;Hello World&quot;;', '&quot;Hello World&quot;;', 'Document.Write(&quot;Hello World&quot;);', 'All of the above', 0, 3),
(24, 'All variables in PHP start with which symbol?', '!', '@', '&amp;', '$', 0, 3),
(25, 'What is the correct way to end a PHP statement ?', 'New line', '&lt;/php&gt;', '.', ';', 3, 3),
(26, 'The PHP syntax is most similar to:', 'VBScript', 'JavaScript', 'Perl and C', 'None of the above', 2, 3),
(27, 'What is the correct way to include the file &quot;time.inc&quot; ?', '&lt;?php include:&quot;time.inc&quot;; ?&gt;', '&lt;?php include file=&quot;time.inc&quot;; ?&gt;', '&lt;?php include &quot;time.inc&quot;; ?&gt;', '&lt;!-- include file=&quot;time.inc&quot; --&gt;', 0, 3),
(28, 'What is the correct way to create a function in PHP?', 'create myFunction()  ', 'function myFunction()', 'new_function myFunction()', 'None of the above', 1, 3),
(29, 'What is a correct way to add a comment in PHP ?', '*...*', '/*...*/', '&lt;comment&gt;...&lt;/comment&gt;', '&lt;!--...--&gt;', 1, 3),
(30, 'Which one of these variables has an illegal name?', '$my-Var', '$my_Var', '$myVar', 'None of the above', 0, 3),
(31, 'What does SQL stand for?', 'Strong Question Language', 'Structured Question Language', 'Structured Query Language', 'All of the above', 2, 4),
(32, 'Which SQL statement is used to extract data from a database ?', 'OPEN', 'GET', 'EXTRACT', 'SELECT', 3, 4),
(33, 'Which SQL statement is used to update data in a database?', 'UPDATE', 'SELECT', 'GET', 'INSERT', 0, 4),
(34, 'Which SQL statement is used to delete data from a database ?', 'DELETE', 'REMOVE', 'COLLAPSE', 'All of the above', 0, 4),
(35, 'Which SQL statement is used to insert new data in a database ?', 'ADD RECORD', 'ADD NEW', 'INSERT NEW', 'INSERT INTO', 3, 4),
(36, 'With SQL, how do you select a column named &quot;FirstName&quot; from a table named &quot;Persons&quot;?', 'SELECT FirstName FROM Persons', 'SELECT Persons.FirstName', 'EXTRACT FirstName FROM Persons', 'None of the above', 0, 4),
(37, 'With SQL, how do you select all the columns from a table named &quot;Persons&quot;?', 'SELECT * FROM Persons', 'SELECT [all] FROM Persons', 'SELECT Persons', 'SELECT *.Persons', 0, 4),
(38, 'Which SQL keyword is used to sort the result-set?', 'ORDER BY', 'SORT', 'ORDER', 'SORT BY', 0, 4),
(39, 'What is the most common type of join?', 'JOINED', 'JOINED TABLE', 'INSIDE JOIN  ', 'INNER JOIN', 3, 4),
(40, 'Which operator is used to search for a specified pattern in a column?', 'FROM', 'GET', 'LIKE', 'All of the above', 2, 4),
(41, 'What is the correct HTML for making a text input field ?', '&lt;textfield&gt;', '&lt;textinput type=&quot;text&quot;&gt;', '&lt;input type=&quot;text&quot;&gt;', '&lt;input type=&quot;textfield&quot;&gt;', 0, 1),
(42, 'What is the correct HTML for making a drop-down list ?', '&lt;list&gt;', '&lt;select&gt;', '&lt;input type=&quot;list&quot;&gt;', '&lt;input type=&quot;dropdown&quot;&gt;', 0, 1),
(43, 'Which class provides a responsive fixed width container ?', '.container-fluid', '.container Next', '.container-fixed', 'None of the above', 0, 5),
(44, 'Which class provides a full width container, spanning the entire width of the viewport ?', '.container-fluid', '.container-fixed', '.container', 'None of the above', 2, 5),
(45, 'The Bootstrap grid system is based on how many columns?', '9', '3', '6', '12', 3, 5),
(46, 'Which class adds zebra-stripes to a table ?', '.table-zebra', '.table-striped', '.table-bordered', '.even and .odd', 1, 5),
(47, 'Which class shapes an image to a circle?', '.img-rounded', '.img-thumbnail', '.img-round', '.img-circle', 3, 5),
(48, 'Which class is used to create a big box for calling extra attention ?', '.container', '.jumbotron', '.bigbox', 'None of the above', 1, 5),
(49, 'Which button class is used to create a large button ?', 'btn-xl', '.btn-l', '.btn-large', '.btn-lg', 3, 5),
(50, 'Which class is used to create a button group ?', '.group-btn', '.group-button', '.button-group', '.btn-group', 3, 5),
(51, 'Which class is used to create a badge ?', '.tag', '.flag', '.label', '.badge', 3, 5),
(52, 'Which class is used to create a basic pagination?', '.pagination', '.navigation', '.page', '.pages', 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
