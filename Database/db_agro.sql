-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2018 at 05:08 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `gpic` varchar(100) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `gpic`) VALUES
(4, 'farm.JPG'),
(5, '001.jpg'),
(6, 'Agricultural-Land.jpg'),
(7, 'ser_pic1.jpg'),
(10, 'ber-wadi.jpg'),
(11, 'g5.jpg'),
(12, 'g3.jpg'),
(13, '607003141.jpg'),
(14, 'images (1).jpg'),
(15, 'maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_mgmt`
--

CREATE TABLE IF NOT EXISTS `inquiry_mgmt` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `inquiry_mgmt`
--

INSERT INTO `inquiry_mgmt` (`iid`, `name`, `address`, `mobile`, `email`, `comments`) VALUES
(5, 'vedant jadeja', '122/B,sabarbag society,amdavad', '7405229691', 'vedjadeja123@gmail.com', 'for knowing the poducts'),
(7, 'komal patel', '85-PD,mira road,mumbai', '7011554431', 'komal985@gmail.com', 'how to know for products prize etc');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_farmer`
--

CREATE TABLE IF NOT EXISTS `invoice_farmer` (
  `ifid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `wholeseller_name` varchar(15) NOT NULL,
  `shop_name` varchar(15) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(8) NOT NULL,
  `weight_type` varchar(50) NOT NULL,
  `discount` int(8) NOT NULL,
  `gst` int(3) NOT NULL,
  `net_amount` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `flag` int(1) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`ifid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `invoice_farmer`
--

INSERT INTO `invoice_farmer` (`ifid`, `mc_name`, `sc_name`, `wholeseller_name`, `shop_name`, `shop_address`, `date`, `qty`, `rate`, `weight_type`, `discount`, `gst`, `net_amount`, `email`, `mobile`, `flag`, `uid`) VALUES
(1, 'crops', 'Rice', '', '', '', '08/04/2018', 10, 98, '1', 0, 118, 1000, '', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_grocerystore`
--

CREATE TABLE IF NOT EXISTS `invoice_grocerystore` (
  `igid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `uaddress` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(8) NOT NULL,
  `weight_type` varchar(50) NOT NULL,
  `discount` int(8) NOT NULL,
  `gst` int(3) NOT NULL,
  `net_amount` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `flag` int(1) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`igid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `invoice_grocerystore`
--

INSERT INTO `invoice_grocerystore` (`igid`, `mc_name`, `sc_name`, `uname`, `uaddress`, `date`, `qty`, `rate`, `weight_type`, `discount`, `gst`, `net_amount`, `email`, `mobile`, `flag`, `uid`) VALUES
(1, 'fruits', 'apple', 'Amit Thakkar', '', '10-04-2018', 5, 10, 'Per Piece', 0, 6, 51, '', '', 0, 4),
(2, 'fruits', 'apple', 'Amit Thakkar', '', '10-04-2018', 6, 10, 'Per Piece', 0, 7, 61, '', '', 0, 4),
(3, 'fruits', 'apple', 'Sheetal Moradiy', '', '10-04-2018', 15, 10, 'Per Piece', 0, 18, 153, '', '', 0, 2),
(4, 'fruits', 'banana', 'pooja trivedi', '', '11-04-2018', 15, 7, 'Per Piece', 0, 13, 107, '', '', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_wholesaler`
--

CREATE TABLE IF NOT EXISTS `invoice_wholesaler` (
  `iwid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `grocerystore_name` varchar(15) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `date` varchar(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(8) NOT NULL,
  `weight_type` varchar(50) NOT NULL,
  `discount` int(8) NOT NULL,
  `gst` int(3) NOT NULL,
  `net_amount` int(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `flag` int(1) NOT NULL,
  `uid` int(10) NOT NULL,
  PRIMARY KEY (`iwid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `invoice_wholesaler`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `login_id` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `a_photo` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `login_id`, `password`, `name`, `email`, `mobile`, `a_photo`, `flag`) VALUES
(2, 'admin', 'admin321', 'sheetal moradiy', 'sheetal123@gmail.com', '7405685682', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`cid`, `s_name`, `c_name`, `flag`) VALUES
(1, 'Gujarat', 'Bhavnagar', 0),
(2, 'Gujarat', 'Ahmedabad', 0),
(3, '	Kerala', 'Thiruvananthapuram	', 0),
(4, '	Kerala', 'Kochi', 0),
(5, 'Chhattisgarh	', 'Naya Raipur[d]', 0),
(6, 'Delhi', 'New Delhi', 0),
(7, 'Jharkhand	', 'Ranchi', 0),
(8, 'Madhya Pradesh', 'Bhopal', 0),
(9, 'Madhya Pradesh', 'Jabalpur', 0),
(10, 'Rajasthan', 'Jaipur', 0),
(11, 'Rajasthan', 'Jodhpur', 0),
(12, 'Uttar Pradesh', 'Lucknow', 0),
(13, 'Uttar Pradesh', 'Allahbad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_farmer`
--

CREATE TABLE IF NOT EXISTS `tbl_farmer` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_login` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `faddress` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `details` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `f_pic` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_farmer`
--

INSERT INTO `tbl_farmer` (`f_id`, `f_login`, `password`, `fname`, `faddress`, `pincode`, `mobile`, `details`, `email`, `f_pic`, `flag`) VALUES
(1, 'tushar123', '111', 'tushar moradiya', '166,b subhashnagar', '364001', '7405868854', 'farmer', 'tushar123@gmail.com', 'gs3.jpg', 0),
(2, 'sanjay1994', '63558', 'sanjay', '122/c,jodhpur', '445010', '9994871231', 'wholeseller and retailer', 'sanjay23@gmail.com', 'fr1.jpg', 0),
(3, 'somya@456', '27925', 'somya', '366,palanpur', '740541', '7775514869', 'farmer', 'somya555@yahoo.com', 'f1.jpg', 0),
(4, 'rudra777', '77404', 'rudra', '9601,levis burg,rajkot', '654005', '8546218794', 'lvisburg ', 'rudrasingh@gmail.com', 'gs4.jpg', 0),
(5, 'shivay321', '98303', 'shivay', '346,panvadi bhvangar', '348001', '9521458792', 'as farmer', 'shivayoberoi@yahoo.com', 'gs1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grocerystore`
--

CREATE TABLE IF NOT EXISTS `tbl_grocerystore` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_login` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `gname` varchar(15) NOT NULL,
  `gaddress` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `details` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_grocerystore`
--

INSERT INTO `tbl_grocerystore` (`g_id`, `g_login`, `password`, `gname`, `gaddress`, `pincode`, `mobile`, `details`, `email`, `flag`) VALUES
(1, 'Dmart', '25547', 'sanjaybhai pate', 'thane,mumbai', 654001, '7408659450', 'sajhjashj', 'dmart@gmail.com', 0),
(2, 'Food@Hall', '51047', 'rameshbhai vyas', '201,shivrajnagar,rajkot', 840125, '8402154820', 'jgshdjhj', 'foodHall123@yahoo.in', 0),
(3, 'Cromaa', '77794', 'maganbhai shah', '45,kusumbaa patula,maharastra', 658001, '9922142530', 'kjashkasjdah', 'croma46@gmail.com', 0),
(4, 'Debenhams', '3111', 'nikhilbhai sava', '409,trisha-one,vadodara', 450778, '8855412650', 'jsaghjdah', 'Debenhams@gmail.com', 0),
(5, 'Central-Mart', '65848', 'Swapnil mukhi', '78,airport road,bhavnagar', 364005, '7045128593', 'kjsdh', 'Centralmart123@yahoo.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_main_cat` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `pic_mcat` varchar(100) NOT NULL,
  `Flag` int(1) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_main_cat`
--

INSERT INTO `tbl_main_cat` (`mid`, `mc_name`, `pic_mcat`, `Flag`) VALUES
(3, 'fruits', 'fruits.jpg', 0),
(4, 'vegitables', 'vg1.jpg', 0),
(5, 'crops', 'seeds.png', 0),
(6, 'garam-masala', 'Organic_garam-masala.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_farmer`
--

CREATE TABLE IF NOT EXISTS `tbl_products_farmer` (
  `pfid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(8) NOT NULL,
  `weight_type` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`pfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_products_farmer`
--

INSERT INTO `tbl_products_farmer` (`pfid`, `mc_name`, `sc_name`, `qty`, `rate`, `weight_type`, `date`, `description`, `pic1`, `pic2`, `pic3`, `flag`) VALUES
(1, 'crops', 'Rice', 25, 98, 'Per Kg', '08/04/2018', 'basmati rice', '25.jpg', '24.jpg', '', 0),
(2, 'fruits', 'banana', 5, 7, 'Per Piece', '06/04/2018', 'banana ', '3.jpg', '2.jpg', '', 0),
(3, 'fruits', 'banana', 1, 6, 'Per Piece', '10-04-2018', 'fresh banana', '3.jpg', '2.jpg', '1.jpg', 0),
(4, 'crops', 'Rice', 2, 150, 'Per Kg', '10-04-2018', 'basmati rice', '25.jpg', '23.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_grocerystore`
--

CREATE TABLE IF NOT EXISTS `tbl_products_grocerystore` (
  `pgtid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(8) NOT NULL,
  `weight_type` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`pgtid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_products_grocerystore`
--

INSERT INTO `tbl_products_grocerystore` (`pgtid`, `mc_name`, `sc_name`, `qty`, `rate`, `weight_type`, `date`, `description`, `pic1`, `pic2`, `pic3`, `flag`) VALUES
(1, 'fruits', 'apple', 100, 10, 'Per Piece', '10-04-2018', 'A very fresh fruits available from us...', '4.jpg', '7.jpg', '5.jpg', 0),
(2, 'crops', 'Rice', 5, 450, 'Per Kg', '10-04-2018', 'basmati rice', '23.jpg', '25.jpg', '24.jpg', 0),
(3, 'fruits', 'banana', 15, 7, 'Per Piece', '11-04-2018', 'fresh banana', '2.jpg', '3.jpg', '1.jpg', 0),
(4, 'garam-masala', 'black-paper', 500, 48, 'Per Gram', '11-04-2018', 'balck paper', 'grainfinal.jpg', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_wholesaler`
--

CREATE TABLE IF NOT EXISTS `tbl_products_wholesaler` (
  `pwid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(30) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `qty` int(10) NOT NULL,
  `rate` int(8) NOT NULL,
  `weight_type` varchar(50) NOT NULL,
  `date` varchar(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`pwid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_products_wholesaler`
--

INSERT INTO `tbl_products_wholesaler` (`pwid`, `mc_name`, `sc_name`, `qty`, `rate`, `weight_type`, `date`, `description`, `pic1`, `pic2`, `pic3`, `flag`) VALUES
(1, 'vegitables', 'cardamom', 10, 3, 'Per Kg', '05-04-2018', 'fresh cardamom', 'vg1.jpg', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(15) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`sid`, `s_name`, `flag`) VALUES
(2, 'Gujarat', 0),
(3, 'Maharastra', 0),
(5, 'Uttar Pradesh', 0),
(6, 'Madhya Pradesh', 0),
(7, 'Rajasthan', 0),
(8, 'Delhi', 0),
(9, 'Daman and Diu	', 0),
(10, 'Chhattisgarh	', 0),
(11, '	Kerala', 0),
(12, 'Jharkhand	', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_cat` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(100) NOT NULL,
  `sc_name` varchar(30) NOT NULL,
  `pic_scat` varchar(100) NOT NULL,
  `Flag` int(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_sub_cat`
--

INSERT INTO `tbl_sub_cat` (`sid`, `mc_name`, `sc_name`, `pic_scat`, `Flag`) VALUES
(5, 'fruits', 'apple', '6.jpg', 0),
(6, 'fruits', 'banana', 'banana 1.jpg', 0),
(7, 'fruits', 'graps', '8.jpg', 0),
(8, 'fruits', 'dragon-pitaya', 'dragon-pitaya.jpg', 0),
(9, 'crops', 'Rice', '25.jpg', 0),
(10, 'vegitables', 'beetroot', 'beetroot.jpg', 0),
(11, 'vegitables', 'potatos', '11.jpg', 0),
(12, 'vegitables', 'carrots', 'carrot.jpg', 0),
(13, 'garam-masala', 'turmeric-powder', 'turmeric powder.jpg', 0),
(14, 'garam-masala', 'cardamom', 'cardamom.jpg', 0),
(15, 'crops', 'bolita-beans', 'Bean-Bolita-BN133-web.jpg', 0),
(16, 'garam-masala', 'black-paper', 'black-pepper-powder-organic.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_login` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `uaddress` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `details` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`u_id`, `u_login`, `password`, `uname`, `uaddress`, `pincode`, `mobile`, `details`, `email`, `flag`) VALUES
(2, 'sheetal123', 'krishna', 'Sheetal Moradiy', 'inq', 364001, '7405229691', 'hello friends...', 'sheetalpatel@gmail.com', 0),
(3, '102', 'abc123', 'komal', 'inq', 360084, '8320933134', 'jsdgjgfh', 'komal@gmail.com', 0),
(4, 'amit', 'amit', 'Amit Thakkar', 'inq', 364001, '8844774455', '-', 'amit@gmail.com', 0),
(5, 'pooja123', '123456', 'pooja trivedi', 'inq', 364504, '8844774455', 'asahdgjhg', 'poojatrivedi11@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wholesaler`
--

CREATE TABLE IF NOT EXISTS `tbl_wholesaler` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_login` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `wname` varchar(15) NOT NULL,
  `shop_name` varchar(15) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `details` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `w_pic` varchar(100) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_wholesaler`
--

INSERT INTO `tbl_wholesaler` (`w_id`, `w_login`, `password`, `wname`, `shop_name`, `shop_address`, `pincode`, `mobile`, `details`, `email`, `w_pic`, `flag`) VALUES
(1, 'sweta999', '111', 'Sweta Thakkar', 'ambika provizio', 'vraj vihar appart.,bhavnagar', 364002, '7458645210', 'grocery wholeseler', 'sweta999@gmail.com', 'images (8).jpg', 0),
(2, 'omkara459', '43684', 'omkara shah', 'anand provision', 'panvadi', 421002, '9999222163', 'abc', 'omkara45@yahoo.in', 'fresh&fine.jpg', 0),
(3, 'shivam789', '4815', 'patel Brothers', 'patelBro', 'jwell circle', 650012, '8012004455', 'abcxyz', 'shivamdave@gmail.com', 'flavorsofindia.jpg', 0),
(4, 'vatsal98', '62612', 'vatsalbhai dave', 'super99', 'levis burg,PV', 7400548, '7008846307', 'agshA', 'vatsalpujara@yahoo.com', 'super99.jpg', 0),
(5, 'ankita65', '20475', 'ankitaben patel', 'pic & pay', 'gayatringara,surat', 125783, '9920246521', 'shasj', 'ankitaKK@gmail.com', 'pic&pay.jpg', 0),
(7, 'sidhraj jadeja', '22644', '', '', '', 0, '6688552211', '', 'sidhrajJAdeja@gmail.com', '', 0);
