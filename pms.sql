-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 06:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(15) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `homepage` varchar(70) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `position`, `phone`, `email`, `homepage`, `validity`) VALUES
('21', 'whoever', 'staff', '9918888881', 'whoever@gmail.com', 'http://localhost/wp/', '1'),
('24', 'Gyan', 'coordinator', '9877656677', 'gyan@gmail.com', 'http://localhost/wp/', '1'),
('28', 'Someone', 'Coordinator', '', 'some@some.com', 'http://wert', '1'),
('29', 'Mahesh', 'coordinator', '9876545678', 'mahimahesh@gmail.com', 'http://localhost/wp/', '1'),
('50', 'Shivam', 'coordinator', '7905032556', 'shivam21ballia@gmail.com', 'http://localhost/wp/', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Password`, `position`, `validity`) VALUES
('', '', 'Coordinator', '1'),
('21', 'eeee', 'Admin', '1'),
('24', 'gps', 'coordinator', '1'),
('28', 'qwer', 'Coordinator', '1'),
('29', 'limani', 'coordinator', '1'),
('50', 'tiwari', 'coordinator', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `Rollno` varchar(15) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Programme` varchar(10) NOT NULL,
  `cpi` varchar(10) NOT NULL,
  `c_id` varchar(15) NOT NULL,
  `j_id` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Jobname` varchar(50) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`Rollno`, `Name`, `Department`, `Programme`, `cpi`, `c_id`, `j_id`, `email`, `Jobname`, `validity`) VALUES
('1601006', 'Ankit Gupta', 'ECE', 'BTech', '8.1', '7', '11', 'ankit5@gmail.com', 'Network Engineer', '1'),
('1601006', 'Ankit Gupta', 'ECE', 'BTech', '8.0', '7', '12', 'ankit5@gmail.com', 'Software Engineer', '1'),
('1601020', 'Sourish Dhekane', 'CSE', 'BTECH', '9.0', '4', '7', 'souru@gmail.com', 'Software Engineer', '1'),
('1601024', 'Gyan Prakash', 'CSE', 'Btech', '8.0', '8', '15', 'gps@gmail.com', 'System Analyst', '1'),
('1601024', 'Gyan Prakash', 'CSE', 'Btech', '8.0', '4', '7', 'gps@gmail.com', 'Software Engineer', '1'),
('1601024', 'Gyan Prakash', 'CSE', 'Btech', '8.0', '4', '8', 'gps@gmail.com', 'Business  Analyst', '1'),
('1601029', 'Mahesh Limani', 'CSE', 'Btech', '7.9', '4', '7', 'mahesh@gmail.com', 'Software Engineer', '1'),
('1601035', 'Naukesh Kumar', 'CSE', 'BTech', '8.4', '4', '9', 'naukeshkumar12@gmail.com', 'Data Scientist', '1'),
('1601037', 'Nilesh Agarwal', 'CSE', 'BTECH', '8.7', '4', '7', 'nilu@gmail.com', 'Software Engineer', '0'),
('1601039', 'Pragyanshu Verma', 'ECE', 'BTech', '8.2', '7', '11', 'pragya@gmail.com', 'Network Engineer', '1'),
('1601039', 'Pragyanshu Verma', 'ECE', 'BTech', '8.2', '8', '15', 'pragya@gmail.com', 'System Analyst', '1'),
('1601039', 'Pragyanshu Verma', 'ECE', 'BTech', '8.2', '4', '8', 'pragya@gmail.com', 'Business  Analyst', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `C_ID` int(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Website` varchar(70) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone_No` varchar(20) NOT NULL,
  `No_Of_Jobs_Offer` int(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Countryy` varchar(30) NOT NULL,
  `Org_Type` varchar(30) NOT NULL,
  `Contact_Person` varchar(50) NOT NULL,
  `Desgination` varchar(40) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`C_ID`, `Name`, `Website`, `Email`, `Telephone_No`, `No_Of_Jobs_Offer`, `Address`, `Countryy`, `Org_Type`, `Contact_Person`, `Desgination`, `Phone_No`, `validity`) VALUES
(4, 'Apple', 'http://www.apple.com', 'support@apple.com', '9876362811', 5, 'Cupertino,California', 'USA', 'Private', 'Viru', 'HR', '7905032556', '1'),
(7, 'Microsoft.Ltd', 'http://www.microsoft.com', 'support@microsoft.com', '9382930240', 2, 'Redmond,Washington', 'USA', 'Private', 'Jai', 'HR', '6661783910', '1'),
(8, 'Amazon', 'http://www.amazon.com', 'support@amazon.com', '9372839391', 3, 'Seattle', 'USA', 'Private', 'No name', 'Arbitrary', '9876543210', '1'),
(9, 'Flipkart', 'http://www.flipkart.com', 'support@flipkart.com', '45553234555', 5, 'Bengaluru', 'India', 'Private', 'abc', 'HR', '3456787564534', '1'),
(12, 'Facebook', 'http://www.facebook.com', 'support@facebook.com', '9283919199', 5, 'California', 'USA', 'Private', 'abc', 'se', '12394848390', '1'),
(13, 'IBM', 'http://www.ibm.com', 'support@ibm.com', '9289209929', 4, 'North Castle,New York', 'USA', 'Private', 'Rahul', 'dg', '9283491182', '1'),
(14, 'Snapdeal', 'http://www.snapdeal.com', 'support@snapdeal.com', '9889992900', 3, 'New Delhi', 'India', 'Private', 'Ron', 'H.R.', '7534567898', '1');

-- --------------------------------------------------------

--
-- Table structure for table `company_login`
--

CREATE TABLE `company_login` (
  `username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ID` int(15) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_login`
--

INSERT INTO `company_login` (`username`, `Password`, `ID`, `validity`) VALUES
('apple', 'apple', 4, '1'),
('microsoft', 'micro', 7, '1'),
('amaze', 'amaze', 8, '1'),
('flipkart', 'flip', 9, '1'),
('yahoo', 'wert', 10, '0'),
('moto', '234', 11, '1'),
('fb', 'fb123', 12, '1'),
('IBM', '1234', 13, '1'),
('snapdeal', '1234', 14, '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_id` varchar(20) NOT NULL,
  `Programme` varchar(20) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Total_students` int(11) NOT NULL,
  `Placed` int(11) NOT NULL,
  `Unplaced` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `J_ID` int(20) NOT NULL,
  `C_ID` varchar(20) NOT NULL,
  `Position_offering` varchar(50) NOT NULL,
  `Vacancies` varchar(11) NOT NULL,
  `Job_location` varchar(60) NOT NULL,
  `Salary` varchar(11) NOT NULL,
  `Bond` varchar(11) NOT NULL,
  `CPI_req` varchar(8) NOT NULL,
  `Recruitment_start` varchar(20) NOT NULL,
  `No_of_rounds` varchar(11) NOT NULL,
  `Exam_process` varchar(30) NOT NULL,
  `Recruitment_end` varchar(20) NOT NULL,
  `Preffered_deptt` varchar(40) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`J_ID`, `C_ID`, `Position_offering`, `Vacancies`, `Job_location`, `Salary`, `Bond`, `CPI_req`, `Recruitment_start`, `No_of_rounds`, `Exam_process`, `Recruitment_end`, `Preffered_deptt`, `validity`) VALUES
(7, '4', 'Software Engineer', '10', 'San Francisco', '1500000', '3', '8.8', '6/4/2018', '3', 'online', '2018-10-10', 'CSE', '1'),
(8, '4', 'Business  Analyst', '12', 'Mumbai,Maharashtra', '1200000', '2', '8.2', '2/3/2019', '4', 'offline', '2019-06-10', 'Any', '1'),
(9, '4', 'Data Scientist', '4', 'Greater Noida,India', '1400000', '1', '8.4', '10/4/2018', '2', 'online', '2018-04-28', 'CSE', '1'),
(10, '7', 'Systems Analyst', '100', 'Washinton DC', '1000000', '4', '8.9', '13/3/2018', '6', 'online', '2018-04-14', 'CSE', '0'),
(11, '7', 'Network Engineer', '20', 'Singapore', '1000000', '2', '8.1', '2018-01-01', '1', 'online', '2018-01-17', 'CSE', '0'),
(12, '7', 'Software Engineer', '30', 'Bangalore', '1500000', '3', '8.6', '11/5/2018', '4', 'online', '2018-05-23', 'CSE', '1'),
(13, '7', 'Web Developer', '50', 'New Delhi', '1000000', '0', '7.9', '12/4/2018', '1', 'online', '2018-05-12', 'CSE', '1'),
(14, '7', 'Software Engineer', '30', 'Bangalore', '1500000', '3', '8.6', '11/5/2018', '4', 'online', '2018-05-23', 'CSE', '1'),
(15, '8', 'System Analyst', '30', 'Greater Noida,India', '1200000', '2', '8.3', '19/2/2018', '2', 'offline', '2018-05-20', 'CSE', '1');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `Rollno` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Programme` varchar(30) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `package` varchar(30) NOT NULL,
  `work_location` varchar(50) NOT NULL,
  `validity` varchar(2) NOT NULL,
  `Year_Of_Placement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`Rollno`, `student_name`, `Department`, `Programme`, `Company`, `position`, `package`, `work_location`, `validity`, `Year_Of_Placement`) VALUES
(1601006, 'Ankit Gupta', 'ECE', 'BTech', 'Microsoft.Ltd', 'Network Engineer', '1000000', 'Singapore', '1', 2018),
(1601024, 'Gyan Prakash', 'CSE', 'Btech', 'Apple', 'Software Engineer', '1500000', 'San Francisco', '1', 2018),
(1601037, 'Nilesh Agarwal', 'CSE', 'BTECH', 'Apple', 'Software Engineer', '1500000', 'San Francisco', '0', 2018),
(1601006, 'Ankit Gupta', 'ECE', 'BTech', 'Microsoft.Ltd', 'Software Engineer', '1500000', 'Bangalore', '1', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `J_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `location_alotted` varchar(40) NOT NULL,
  `date_alotted` date NOT NULL,
  `start_time` time NOT NULL,
  `finish_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll_No` varchar(15) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Dept_Name` varchar(100) NOT NULL,
  `Prog_Name` varchar(50) NOT NULL,
  `CPI` varchar(5) NOT NULL,
  `Phone_No` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Website` varchar(50) DEFAULT NULL,
  `Locality` varchar(100) NOT NULL,
  `District` varchar(30) DEFAULT NULL,
  `State` varchar(30) DEFAULT NULL,
  `CV` varchar(100) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Day` varchar(10) DEFAULT NULL,
  `Month` varchar(10) DEFAULT NULL,
  `Yr` varchar(10) DEFAULT NULL,
  `validity` varchar(2) NOT NULL,
  `Profile` varchar(100) NOT NULL,
  `Year_Of_Admission` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll_No`, `Name`, `Dept_Name`, `Prog_Name`, `CPI`, `Phone_No`, `Email`, `Website`, `Locality`, `District`, `State`, `CV`, `Gender`, `Day`, `Month`, `Yr`, `validity`, `Profile`, `Year_Of_Admission`) VALUES
('1601006', 'Ankit Gupta', 'ECE', 'BTech', '8.0', '8534943453', 'ankit5@gmail.com', 'http://jdfkff.com/', 'Near', 'Patna', 'Patna', 'ENGLISH(COMPULSORY).pdf', 'Male', '1', '1', '1997', '1', 'anku.jpg', '2014'),
('1601009', 'Ashok Kumar', 'CSE', 'BTECH', '8.2', '98765445611', 'ashok@gmail.com', 'http://wp.com/', '221B', 'Jodhpur', 'Rajasthan', 'errorcorrectionandneural.pdf', 'Male', '1', '1', '1998', '1', 'ashok.jpg', '2014'),
('1601015', 'Chandan', 'CSE', 'BTech', '8.9', '9132422219', 'cchaudhary258@gmail.com', '', 'Sitamarhi', 'Madhubani', 'Bihar', 'GENERAL STUDIES-I (1).pdf', 'Male', '1', '1', '1998', '1', 'iiitg.jpg', '2014'),
('1601020', 'Sourish Dhekane', 'CSE', 'BTECH', '9.0', '9349494949', 'souru@gmail.com', 'http://www.dfg.com/', 'Pune', 'Mumbai', 'Maharashtra', '', 'Male', '1', '1', '1998', '1', 'souru.jpg', '2014'),
('1601024', 'Gyan Prakash', 'CSE', 'Btech', '8.0', '9872637893', 'gps@gmail.com', 'http://gyanam.com////', 'Naubatpur', 'Chandauli', 'U.p.', 'ECONOMICS-II.pdf', 'Male', '1', '1', '1998', '1', 'gyan.jpg', '2014'),
('1601029', 'Mahesh Limani', 'CSE', 'Btech', '7.9', '9876556781', 'mahesh@gmail.com', 'http://whatevers.com', '221B', 'Jaipur', 'Rajasthan', '', 'Male', '1', '1', '1998', '1', 'vanquisher-wallpaper-1440x1080.jpg', '2014'),
('1601030', 'Manan Sharma', 'CSE', 'BTECH', '8.9', '9494954933', 'mannu@gmail.com', 'http://www.fg.com/', '221B', 'Ghaziabad', 'U.P.', '', 'Male', '1', '1', '1997', '1', 'mannu.jpg', '2014'),
('1601035', 'Naukesh Kumar', 'CSE', 'BTech', '7.2', '6738920230', 'naukeshkumar12@gmail.com', 'http://wwer.com//', 'werty', 'Ranchi', 'Jharkhand', 'EASSY.pdf', '', '1', '1', '1997', '1', 'naukii.jpg', '2014'),
('1601037', 'Nilesh Agarwal', 'CSE', 'BTECH', '8.7', '38339999292', 'nilu@gmail.com', 'http://google.com/', 'Siliguri', 'Kolkata', 'West', '', 'Male', '1', '1', '1998', '0', 'nilu.jpg', '2012'),
('1601039', 'Pragyanshu Verma', 'ECE', 'BTech', '8.2', '9132400311', 'pragya@gmail.com', 'http://dfgh.com//', 'Barabanki', 'Lucknow', 'Uttar Pradesh', '', 'Male', '1', '1', '1996', '1', 'pragya.jpg', '2014'),
('1601042', 'Rakesh', 'CSE', 'BTech', '9.0', '1234567890', 'rsenwar@gmail.com', 'http://wert', '221C', 'Jodhpur', 'Rajasthan', 'exam-1-sampleQuestions.pdf', 'Male', '1', '1', '1997', '0', 'rakas.jpg', '2013'),
('1601049', 'Shikhar Yadav', 'CSE', 'BTECH', '8.3', '84949', 'aoex01@gmail.com', 'http://yuvaan@iiitg.ac.in/', 'Gorakhnath', 'Gorakhpur', 'U.P.', '', 'Male', '1', '1', '1997', '1', 'shikha.jpg', '2014');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `stu1` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM record where Rollno NOT in (SELECT Roll_No from student)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `Rollno` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `validity` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Rollno`, `Password`, `validity`) VALUES
('1601006', 'anku', '1'),
('1601009', 'ash', '1'),
('1601015', 'chandan', '1'),
('1601020', 'souru', '1'),
('1601024', 'gps', '1'),
('1601029', 'mahesh', '1'),
('1601030', 'mannu', '1'),
('1601035', 'nauki', '1'),
('1601037', 'nilu', '0'),
('1601039', 'pragya', '1'),
('1601042', 'raka', '0'),
('1601049', 'shikha', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`Rollno`,`j_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `company_login`
--
ALTER TABLE `company_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`J_ID`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`J_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll_No`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`Rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_login`
--
ALTER TABLE `company_login`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `J_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
