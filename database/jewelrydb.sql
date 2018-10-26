-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 11:03 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jewelrydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(50) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Rings'),
(2, 'Bracelets'),
(3, 'Earrings');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `address`, `city`, `zipcode`, `state`, `phone`, `lastName`, `email`, `isActive`, `isAdmin`, `password`) VALUES
(1, 'John', '123  circle street', 'Boston', '01898', 'MA', '5987675543', 'Doe', 'john@doe.com', 1, 0, 'john123'),
(2, 'jane', '54 square street', 'Westford', '05643', 'NY', '5456768888', 'Smith', 'jane@smith.com', 1, 0, 'jane123'),
(3, 'William', '30 triangle street', 'Cambridge', '05676', 'MA', '5401112343', 'Smith', 'william@smith.com', 1, 0, 'william123'),
(4, 'Website', '123 admin street', 'Boston', '01783', 'MA', '5098876673', 'Admin', 'admin@admin.com', 1, 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderDetailsID` int(50) NOT NULL,
  `orderID` int(50) NOT NULL,
  `productID` int(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderDetailsID`, `orderID`, `productID`, `price`, `quantity`) VALUES
(4, 5, 2, '150.00', 2),
(5, 5, 10, '90.00', 1),
(25, 19, 2, '150.00', 1),
(26, 19, 13, '75.00', 1),
(32, 24, 10, '90.00', 1),
(33, 25, 17, '200.00', 1),
(36, 27, 6, '110.00', 1),
(37, 28, 1, '100.00', 1),
(38, 29, 11, '150.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(50) NOT NULL,
  `orderNo` int(100) NOT NULL,
  `customerId` int(100) DEFAULT NULL,
  `totalPrice` varchar(500) DEFAULT NULL,
  `cardName` varchar(500) DEFAULT NULL,
  `cardNumber` varchar(100) NOT NULL,
  `cardExpiration` varchar(100) DEFAULT NULL,
  `shipAddress` varchar(500) DEFAULT NULL,
  `shipCity` varchar(100) DEFAULT NULL,
  `shipZipcode` varchar(100) DEFAULT NULL,
  `shipState` varchar(50) DEFAULT NULL,
  `billAdress` varchar(500) DEFAULT NULL,
  `billCity` varchar(100) DEFAULT NULL,
  `billState` varchar(100) DEFAULT NULL,
  `billZipcode` varchar(100) DEFAULT NULL,
  `cardCVV` varchar(50) DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `orderStatus` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderNo`, `customerId`, `totalPrice`, `cardName`, `cardNumber`, `cardExpiration`, `shipAddress`, `shipCity`, `shipZipcode`, `shipState`, `billAdress`, `billCity`, `billState`, `billZipcode`, `cardCVV`, `orderDate`, `orderStatus`) VALUES
(5, 1362282819, 3, '', 'William Smith', '131233234', '12/24', '54 city street', 'boston', '01652', 'MA', '32 city address', 'newCity', 'MA', '09878', '456', '2018-07-23', 'Delivered'),
(19, 259314982, 1, '', 'John Doe', '4716815249600527', '12/22', '390 Ebenezer Church Rd', 'Preston', '3234', 'IA', '390 Ebenezer Church Rd', 'Preston', 'IA', '3234', '344', '2018-08-16', 'New'),
(24, 777435773, 2, '', 'james bob', '122234234', '4234', 'west main street', 'new city', '88972', 'IN', 'west main street', 'new city', 'IN', 'asd', '234', '2018-08-16', 'New'),
(25, 71820952, 1, '', 'john Doe', '2342342343423', '12/24', '12 street address', 'city', '02372', 'MA', '12 street address', 'city', 'MA', '02372', '229', '2018-08-16', 'On hold'),
(27, 336032501, 3, '', 'william smith', '123121212', '09/22', '44 west street', 'new city', '09898', 'AL', '44 west street', 'new city', 'AL', '09898', '123', '2018-08-17', 'New'),
(28, 898099914, 1, '', 'bob smith', '414141414124', '12/22', '123 address', 'city', '2342', 'AL', '123 address', 'city', 'AL', '2342', '123', '2018-08-17', 'New'),
(29, 734733751, 2, '', 'jane smith', '124124121', '12/22', '77 west street', 'boston', '123123', 'LA', '77 west street', 'boston', 'LA', '123123', '123', '2018-08-17', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `statusID` int(10) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`statusID`, `status`) VALUES
(1, 'New'),
(2, 'Shipped'),
(3, 'Delivered'),
(4, 'Returned'),
(5, 'Cancelled'),
(6, 'On hold');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) NOT NULL,
  `productDescription` varchar(500) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `color` varchar(30) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `imgPath` varchar(500) DEFAULT NULL,
  `categoryID` int(10) DEFAULT NULL,
  `listPrice` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `title`, `productDescription`, `price`, `quantity`, `color`, `isActive`, `imgPath`, `categoryID`, `listPrice`) VALUES
(1, '1 CT cussion cut vintage Gold ring', 'Solid 14 Karat Solid-Gold 3/4 Carat Round-Cut Morganite and 0.15 Carat cttw Diamond Engagement Ring. Includes Geometric Style Near Colorless .09 Carat cttw Diamond Stackable Ring Wedding Band (H-I, I1); Band Measures 3.2 mm Long x 19.3 mm Wide x 2.2 mm High; Diameter Varies by Size.', '100.00', 12, 'gold', 1, 'images/rings/ring-new.jpg', 1, '200'),
(2, 'Rose gold zarcoon over silver ', 'Rose Gold Over Silver Simulated Morganite & Cubic Zirconia Square Halo Ring. Make an instant impression when you adorn your hand with this striking, simulated morganite and cubic zirconia ring. Shape: round Setting: prong Gemstones may have been treated to enhance their appearance. Color: Pink. Gender: Female. Age Group: Adult. Material: Gold Plate.', '150.00', 15, 'rose gold', 1, 'images/rings/ring2.jpg', 1, '250'),
(3, 'Silver Diamond Ring', 'Plutus Rhodium Finish Sterling Silver Cubic Zirconia Princess Solitaire. Gorgeously crafted of .925 sterling silver with a lustrous rhodium finish for an elegant look, this solitaire engagement ring is a true stunner.', '200.00', 10, 'silver', 1, 'images/rings/ring3.jpg', 1, '350'),
(4, 'Miabella 5 ct CZ Sterling Silver Halo Engagement ring', 'Just like your love, the sparkling beauty of this Miabella Cubic Zirconia Halo Engagement Ring will last a lifetime. The engagement ring features a dazzling round-cut CZ (9mm) at its center, haloed by 24 round CZ accents.', '180.00', 10, 'silver', 1, 'images/rings/ring4.jpg', 1, '300'),
(5, 'Silver Celtic Claddagh woman ring', 'This Claddagh ring is made from sterling silver and is hallmarked .925.It was individually handcrafted by a Silversmith in Ireland. The Claddagh symbol repeats itself on the opposite side and the two are connected by Celtic knot designs on each side of the ring.', '80.00', 4, NULL, 1, 'images/rings/ring5.jpg', 1, '120'),
(6, 'Diamond 10K Gold Wedding Band', 'Diamond wedding band is the perfect illustration of your eternal bond. 5 ct. t.w. of sparkling round diamonds in a channel setting create a dramatic look that\'s sure will be noticed.', '110.00', 5, '', 1, 'images/rings/ring6.jpg', 1, '210'),
(7, 'Center Stone AquaMarine', 'This Aquamarine ringin 18k White Gold has intricate details that will enchant you  matter which angle you lookat it. Delicate petals reach upyo the stonefrom the engraved style shank. Sweet ribbons wrap around the front completing the antique style of this ring.', '69.00', 2, NULL, 1, 'images/rings/ring7.jpg', 1, '100'),
(8, 'Diamond Ring Sterling Silver 10K yellow Gold', 'This exciting sterling silver ring for her is embellished with diamond accents and a ribbon of 10K yellow gold winding along the design.', '150.00', 9, NULL, 1, 'images/rings/ring8.jpg', 1, '300'),
(9, 'Bracelet 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '50.00', 10, 'blue', 1, 'images/bracelets/bracelet-new.jpg', 2, '100'),
(10, 'Bracelet 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '90.00', 10, 'blue', 1, 'images/bracelets/bracelet2.jpg', 2, '120'),
(11, 'Bracelet 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '150.00', 10, 'blue', 1, 'images/bracelets/bracelet3.jpg', 2, '250'),
(12, 'Bracelet 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '100.00', 10, 'blue', 1, 'images/bracelets/bracelet4.jpg', 2, '200'),
(13, 'Bracelet 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '75.00', 10, 'blue', 1, 'images/bracelets/bracelet5.jpg', 2, '150'),
(14, 'Bracelet 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '150.00', 10, 'blue', 1, 'images/bracelets/bracelet6.jpg', 2, '300'),
(15, 'Bracelet 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '150.00', 10, 'blue', 1, 'images/bracelets/bracelet7.jpg', 2, '180'),
(16, 'Bracelet 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '50.00', 10, 'blue', 1, 'images/bracelets/bracelet8.jpg', 2, '100'),
(17, 'Bracelet 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '200.00', 10, 'blue', 1, 'images/bracelets/bracelet9.jpg', 2, '300'),
(18, 'Bracelet 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '120.00', 10, 'blue', 1, 'images/bracelets/bracelet10.jpg', 2, '180'),
(19, 'Bracelet 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '140.00', 10, 'blue', 1, 'images/bracelets/bracelet11.jpg', 2, '200'),
(21, 'Earring 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '50.00', 4, 'blue', 1, 'images/earrings/earring1.jpg', 3, '100'),
(22, 'Earring 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '50.00', 10, 'blue', 1, 'images/earrings/earring2.jpg', 3, '90'),
(23, 'Earring 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '100.00', 10, 'blue', 1, 'images/earrings/earring3.jpg', 3, '150'),
(24, 'Earring 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '70.00', 10, 'blue', 1, 'images/earrings/earring4.jpg', 3, '150'),
(25, 'Earring 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '110.00', 10, 'blue', 1, 'images/earrings/earring5.jpg', 3, '190'),
(26, 'Earring 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '100.00', 10, 'blue', 1, 'images/earrings/earring6.jpg', 3, '150'),
(27, 'Earring 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '60.00', 10, 'blue', 1, 'images/earrings/earring7.jpg', 3, '150'),
(28, 'Earring 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '50.00', 10, 'blue', 1, 'images/earrings/earring8.jpg', 3, '90'),
(29, 'Earring 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '100.00', 10, 'blue', 1, 'images/earrings/earring9.jpg', 3, '150'),
(30, 'Earring 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '60.00', 10, 'blue', 1, 'images/earrings/earring10.jpg', 3, '90'),
(31, 'Earring 11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sodales aliquet volutpat. Donec viverra erat nec lacus molestie tempor. Cras suscipit elit mollis sollicitudin fermentum. Nam consequat libero urna, et malesuada tellus hendrerit id.', '90.00', 10, 'blue', 1, 'images/earrings/earring11.jpg', 3, '160'),
(32, 'Bracelet 12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '80.00', 12, 'gold', NULL, 'images/bracelets/bracelet12.jpg', 2, '150');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `stateID` int(10) NOT NULL,
  `stateCode` varchar(10) NOT NULL,
  `stateName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`stateID`, `stateCode`, `stateName`) VALUES
(53, 'AL', 'Alabama'),
(54, 'AK', 'Alaska'),
(55, 'AZ', 'Arizona'),
(56, 'AR', 'Arkansas'),
(57, 'CA', 'California'),
(58, 'CO', 'Colorado'),
(59, 'CT', 'Connecticut'),
(60, 'DE', 'Delaware'),
(61, 'DC', 'District of Columbia'),
(62, 'FL', 'Florida'),
(63, 'GA', 'Georgia'),
(64, 'HI', 'Hawaii'),
(65, 'ID', 'Idaho'),
(66, 'IL', 'Illinois'),
(67, 'IN', 'Indiana'),
(68, 'IA', 'Iowa'),
(69, 'KS', 'Kansas'),
(70, 'KY', 'Kentucky'),
(71, 'LA', 'Louisiana'),
(72, 'ME', 'Maine'),
(73, 'MD', 'Maryland'),
(74, 'MA', 'Massachusetts'),
(75, 'MI', 'Michigan'),
(76, 'MN', 'Minnesota'),
(77, 'MS', 'Mississippi'),
(78, 'MO', 'Missouri'),
(79, 'MT', 'Montana'),
(80, 'NE', 'Nebraska'),
(81, 'NV', 'Nevada'),
(82, 'NH', 'New Hampshire'),
(83, 'NJ', 'New Jersey'),
(84, 'NM', 'New Mexico'),
(85, 'NY', 'New York'),
(86, 'NC', 'North Carolina'),
(87, 'ND', 'North Dakota'),
(88, 'OH', 'Ohio'),
(89, 'OK', 'Oklahoma'),
(90, 'OR', 'Oregon'),
(91, 'PA', 'Pennsylvania'),
(92, 'PR', 'Puerto Rico'),
(93, 'RI', 'Rhode Island'),
(94, 'SC', 'South Carolina'),
(95, 'SD', 'South Dakota'),
(96, 'TN', 'Tennessee'),
(97, 'TX', 'Texas'),
(98, 'UT', 'Utah'),
(99, 'VT', 'Vermont'),
(100, 'VA', 'Virginia'),
(101, 'WA', 'Washington'),
(102, 'WV', 'West Virginia'),
(103, 'WI', 'Wisconsin'),
(104, 'WY', 'Wyoming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderDetailsID`),
  ADD KEY `orderdetails_ibfk_1` (`orderID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`statusID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`stateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderDetailsID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `statusID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `stateID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
