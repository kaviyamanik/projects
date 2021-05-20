-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 03, 2020 at 05:07 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `oilproject`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admintab`
-- 

CREATE TABLE `admintab` (
  `ID` int(255) NOT NULL auto_increment,
  `NAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `admintab`
-- 

INSERT INTO `admintab` (`ID`, `NAME`, `PASSWORD`) VALUES 
(4, 'ADMIN', 'Admin123'),
(5, 'ADMIN2', 'Admin1ka');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `ID` int(255) NOT NULL auto_increment,
  `NAME` varchar(255) NOT NULL,
  `OILNAME` varchar(255) NOT NULL,
  `QUANTITY` varchar(255) NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` (`ID`, `NAME`, `OILNAME`, `QUANTITY`, `PRICE`, `DATE`) VALUES 
(16, 'KAVIYA', 'FLAXSEED OIL', '1.5', '300', '29/03/2020 '),
(27, 'KAVIYA', 'PALM OIL', '1.5', '200', '31/03/2020 '),
(28, 'MANI', 'PALM OIL', '2', '200', '31/03/2020 '),
(29, 'KAVIYA', 'PALM OIL', '5', '200', '01/04/2020 '),
(30, 'KAVIYA', 'PEANUT OIL', '1.5', '300', '01/04/2020 '),
(31, 'KAVIYA', 'SUNFLOWER OIL', '1', '200', '01/04/2020 '),
(32, 'KAVIYA', 'COCONUT OIL', '1', '100', '01/04/2020 '),
(33, 'KAVIYA', 'OLIVE OIL', '1', '700', '01/04/2020 '),
(34, 'KAVIYA', 'PEANUT OIL', '5', '300', '02/04/2020 '),
(35, 'KAVIYA', 'SUNFLOWER OIL', '1.5', '200', '02/04/2020 '),
(36, 'KAVIYA', 'PALM OIL', '4.5', '200', '02/04/2020 '),
(37, 'MANI', 'RICEBRAN OIL', '6', '600', '02/04/2020 '),
(38, 'KAVIYA', 'RICEBRAN OIL', '4.5', '600', '07/04/2020 '),
(39, 'KAVIYA', 'PEANUT OIL', '2', '300', '07/04/2020 '),
(40, 'KAVIYA', 'PUMPKIN SEED OIL', '2.5', '900', '07/04/2020 '),
(41, 'KAVIYA', 'SOYBEAN OIL', '4.5', '200', '07/04/2020 '),
(42, 'KAVIYA', 'PUMPKIN SEED OIL', '6.5', '900', '08/04/2020 '),
(43, 'KAVIYA', 'PUMPKIN SEED OIL', '1.5', '900', '08/04/2020 ');

-- --------------------------------------------------------

-- 
-- Table structure for table `shopping`
-- 

CREATE TABLE `shopping` (
  `ID` int(255) NOT NULL auto_increment,
  `NAME` varchar(255) NOT NULL,
  `IMAGE` varchar(255) NOT NULL,
  `PRICE` int(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `shopping`
-- 

INSERT INTO `shopping` (`ID`, `NAME`, `IMAGE`, `PRICE`) VALUES 
(1, 'COCONUT OIL', 'coconutoil.jpeg', 100),
(2, 'SUNFLOWER OIL', 'sunfloweroil.jpg', 200),
(3, 'PALM OIL', 'palmoil.jpg', 200),
(4, 'PEANUT OIL', 'peanutoil.jpg', 300),
(5, 'RICEBRAN OIL', 'ricebranoil.jpeg', 600),
(6, 'FLAXSEED OIL', 'flaxseedoil.jpeg', 300),
(7, 'MUSTARD OIL', 'mustardoil.jpeg', 400),
(8, 'PUMPKIN SEED OIL', 'pumpkinoil.jpg', 900),
(9, 'OLIVE OIL', 'oliveoil.jpeg', 700),
(10, 'SOYBEAN OIL', 'soybeanoil.jpeg', 200);

-- --------------------------------------------------------

-- 
-- Table structure for table `signintab`
-- 

CREATE TABLE `signintab` (
  `ID` int(255) NOT NULL auto_increment,
  `NAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `GMAIL` varchar(255) NOT NULL,
  `PHONO` varchar(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `signintab`
-- 

INSERT INTO `signintab` (`ID`, `NAME`, `PASSWORD`, `ADDRESS`, `GMAIL`, `PHONO`) VALUES 
(1, 'ATCHAYA', '1234', 'Mainroad,madurai', 'atchaya24@gmail.com', '987654321'),
(8, 'KAVIYA', 'krish', 'N. K. P. Raju Street, Cumbum.', 'kaviya123@gmail.com', '9123456781'),
(9, 'ANANTHI', 'kavi', '14,mainroad,w.no:24,Madurai.Tamilnadu.', 'ananthi98@gmail.com', '9087654321'),
(10, 'MANI', 'Kaviya98', 'W.NO:24,D.NO:114/76c,RAJU STREET,CUMBUM.THENI(DT)', 'mani1234@gmail.com', '7891234567'),
(11, 'PRIYA', '1234', 'Gandhi Street, Madurai, Tamil Nadu. ', 'priya24@gmail.com', '9012567845');

-- --------------------------------------------------------

-- 
-- Table structure for table `stockdetails`
-- 

CREATE TABLE `stockdetails` (
  `ID` int(255) NOT NULL auto_increment,
  `PRNAME` varchar(255) NOT NULL,
  `QUANTITY` varchar(255) NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `DATE` varchar(255) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- 
-- Dumping data for table `stockdetails`
-- 

INSERT INTO `stockdetails` (`ID`, `PRNAME`, `QUANTITY`, `PRICE`, `DATE`) VALUES 
(2, 'FLAXSEED', '5', '600', '2019-12-28'),
(5, 'MUSTARD', '4', '500', '2019-12-28'),
(6, 'SUNFLOWER SEED', '2', '200', '2020-02-12'),
(7, 'PUMPKIN SEED OIL', '1', '200', '2020-02-12'),
(8, 'COCONUT', '6', '500', '2020-03-31'),
(9, 'OLIVE', '2', '1000', '2020-04-01'),
(10, 'PEANUT ', '6', '450', '2020-04-02'),
(11, 'FLAXSEED', '5', '6', '2019-12-28');
