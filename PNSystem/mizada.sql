-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 04:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mizada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `user`, `password`) VALUES
(1, 'zigm', '917b09a4067807a469ecc56899ad3f35305a020c');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` int(10) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `TotalAmount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `ID` int(11) NOT NULL,
  `UserId` int(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactEmail` varchar(255) NOT NULL,
  `TypeOfPayment` varchar(255) NOT NULL,
  `Comments` varchar(255) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `TotalPayment` int(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Delivering..',
  `Created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`ID`, `UserId`, `Address`, `ContactEmail`, `TypeOfPayment`, `Comments`, `ProductName`, `TotalPayment`, `Status`, `Created`) VALUES
(17, 90, 'talamban cebu wetwew ', ' eleasar@gmail.com', ' cod', ' ok', '', 1050, 'Delivering..', '2021-05-06 22:34:54'),
(19, 88, 'casay', ' migz@gmail.com', ' COD', ' hi', '', 1050, 'Delivering..', '2021-05-07 08:18:58'),
(20, 88, 'nasipit', ' migz@gmail.com', ' COD', ' paspasi', '', 35000, 'Delivering..', '2021-05-07 08:22:54'),
(22, 88, 'wrw', ' wrw', ' COD', ' qwrwq', '  Fantasy Jacket', 1400, 'Delivering..', '2021-05-07 09:19:15'),
(23, 88, 'nasipit', ' migz@gmail.com', ' COD', ' okojk', ' Realme X7 Pro 5G', 511033, 'Delivering..', '2021-05-07 09:21:56'),
(24, 88, 'fsdfdf', ' gfdgf', ' fgfg', ' gffg', '   Fantasy Jacket Realme X7 Pro 5G', 91397, 'Delivering..', '2021-05-07 09:29:20'),
(25, 88, 'awer', ' awer', ' awe', ' awer', '  Realme X7 Pro 5G', 89997, 'Delivering..', '2021-05-07 09:33:57'),
(26, 88, 'dsd', ' fdfdf', ' dfdf', ' dfffd', ' Array', 700, 'Delivering..', '2021-05-07 09:47:17'),
(27, 88, 'dsd', ' fdfdf', ' dfdf', ' dfffd', '   Fantasy Jacket', 700, 'Delivering..', '2021-05-07 09:47:46'),
(28, 88, 'dsd', ' fdfdf', ' dfdf', ' dfffd', '   Fantasy Jacket', 700, 'Delivering..', '2021-05-07 09:48:11'),
(29, 88, 'dsd', ' fdfdf', ' dfdf', ' dfffd', '   Fantasy Jacket', 700, 'Delivering..', '2021-05-07 09:48:13'),
(30, 88, 'dsd', ' fdfdf', ' dfdf', ' dfffd', '   Fantasy Jacket', 700, 'Delivering..', '2021-05-07 09:48:24'),
(31, 88, 'dsd', ' fdfdf', ' dfdf', ' dfffd', '   Fantasy Jacket', 700, 'Delivering..', '2021-05-07 09:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `CartId` int(11) NOT NULL,
  `UserId` int(10) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `CartId`, `UserId`, `Status`) VALUES
(34, 12, 88, 1),
(39, 14, 88, 1),
(41, 15, 88, 1),
(44, 17, 88, 1),
(45, 18, 88, 1),
(47, 19, 88, 1),
(51, 20, 88, 1),
(54, 21, 88, 1),
(57, 22, 88, 1),
(59, 23, 88, 1),
(62, 24, 88, 1),
(64, 25, 88, 1),
(67, 26, 88, 1),
(72, 28, 88, 1),
(76, 29, 88, 1),
(80, 30, 88, 1),
(92, 31, 88, 1),
(93, 32, 88, 1),
(94, 34, 88, 1),
(95, 35, 88, 1),
(96, 37, 88, 1),
(97, 38, 88, 1),
(99, 39, 88, 1),
(103, 40, 88, 1),
(104, 42, 88, 1),
(106, 43, 88, 1),
(107, 44, 88, 1),
(108, 46, 88, 1),
(109, 51, 89, 1),
(110, 54, 89, 1),
(112, 57, 89, 1),
(113, 56, 88, 1),
(114, 59, 88, 1),
(115, 58, 89, 1),
(117, 61, 88, 1),
(118, 62, 88, 1),
(119, 63, 88, 1),
(121, 64, 88, 1),
(122, 65, 88, 1),
(123, 66, 88, 1),
(124, 67, 88, 1),
(125, 68, 88, 1),
(126, 69, 88, 1),
(127, 70, 88, 1),
(128, 71, 88, 1),
(129, 73, 88, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `StatusId` int(11) NOT NULL,
  `Description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`StatusId`, `Description`) VALUES
(1, 'Processing'),
(2, 'Delivering'),
(3, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` int(11) NOT NULL,
  `ProductPhoto` text NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductType` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `OriginalPrice` double NOT NULL,
  `Price` double NOT NULL,
  `Rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProductPhoto`, `ProductName`, `ProductType`, `Description`, `OriginalPrice`, `Price`, `Rating`) VALUES
(1, 'https://purepng.com/public/uploads/large/purepng.com-jacketclothingjacketfashion-men-dress-wear-cloth-coat-jacket-631522326867zvwfe.png', ' Fantasy Jacket', 'Jacket', 'This is a nice jacket both for hot and cold weather. It is very affordable but of great use to your daily life.', 500, 350, 4),
(2, 'https://pngimg.com/uploads/running_shoes/running_shoes_PNG5816.png', 'Adidas Shoes', 'Shoes', 'Adidas shoes will make you run faster and longer. Adidas lang sakalam. Check it out.', 850.5, 550, 3),
(3, 'https://images.fonearena.com/blog/wp-content/uploads/2020/09/realme-V5-5G.jpg', 'Realme X7 Pro 5G', 'Mobile Phone', 'Realme X7 Pro\r\nRealme X7 Pro\r\nRealme X7 Pro\r\nBrand: realme\r\nCategory: Mobiles\r\nProcessor: Mediatek Dimensity 1000+\r\nRAM: 6 GB, 8 GB\r\nStorage: 128 GB, 256 GB\r\nDisplay: 6.55 inches\r\nCamera: Quad Camera\r\nBattery: 4500 mAh\r\nOUR RATING\r\nThe overall rating is based on review by our editors\r\n\r\n9.1\r\nDesign9 / 10\r\nDisplay9 / 10\r\nCamera8 / 10\r\nFeatures9 / 10\r\nConnectivity9 / 10\r\nUsability10 / 10\r\nPerformance10 / 10\r\nBattery9 / 10\r\nRealme X7 Pro is not officially announced. The mentioned-below specifications are based on rumors.\r\n\r\nThe smartphone comes with a 120Hz refresh rate that provides 1080 x 2400 pixels resolution. The display size of the device is 6.55 inches AMOLED capacitive touchscreen.\r\n\r\nWhile the operating system runs on Android 10 + Realme UI, it is powered by Mediatek Dimensity 1000+ Octa-core processor.\r\n\r\nRealme X7 Pro consists of a quad-camera 64 MP (wide) + 8 MP (ultrawide) + 2 MP (macro) + 2 MP (depth) while on the front there is a single 32 MP (wide) camera. The sensors include Fingerprint (under display, optical), accelerometer, proximity, and compass.\r\n\r\nThe smartphone is available in three colors such as Black, White, and Purple. The smartphone is fueled with a non-removable Li-Po 4500 mAh battery + Fast charging 65W.\r\n\r\nIt features Bluetooth 5.0, GPS with dual-band A-GPS, GLONASS, BDS, GALILEO, QZSS, and USB 2.0, Type-C 1.0 reversible connector. The smartphone is incorporated with 128 GB and 256 GB internal storage with 6 GB and 8 GB RAM options.', 32000, 29999, 5),
(4, 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/mavi-jeans-1551397594.jpg?crop=1xw:1xh;center,top&resize=480:*', 'Ripped Jeans', 'Jeans', 'Renato \"Rene\" L. Requiestas (January 22, 1957 – July 24, 1993) was a Filipino actor and comedian. Requiestas was one of the top Filipino comedians of the late 1980s up to the early 1990s. Requiestas has known for his sidekick roles alongside other comedy actors such as Joey de Leon and his pairing with Kris Aquino in romantic comedies, as well as his distinctive gaunt, toothless appearance.', 850.75, 625.65, 1),
(5, 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/vu8wrorwyt2psztlp6ia/lunar-control-vapor-2-golf-shoe-kdov9O.png', 'Nike Lunar Control Vapor 2', 'Shoes', 'The Nike Lunar Control Vapor 2 Men\'s Golf Shoe delivers the grip, support and comfort you need to drive further off the tee.', 7995, 7500, 5),
(6, 'data:image/jpeg;base64,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', 'Nike Free RN 5.0 2020', 'Shoes', 'The Nike Free RN 5.0 2020 is a lightweight, firm-riding and stable trainer. It has a highly flexible forefoot and is suitable for distances up to 10km. It has a firmer midsole compared to previous Free RN 5.0 versions which results in better stability and excellent ground-feel.', 5000, 4500, 5),
(7, '', '', '', '', 0, 0, 0),
(8, '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UserId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `Account_Created_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(255) NOT NULL DEFAULT 'Offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UserId`, `firstname`, `lastname`, `email`, `password`, `image`, `Account_Created_Date`, `Status`) VALUES
(88, 'miguel', 'estopa', 'zigm@gmail.com', '917b09a4067807a469ecc56899ad3f35305a020c', 'https://pbs.twimg.com/profile_images/1246085407097253890/QA2g7EoI.jpg', '2021-05-02 10:58:50', 'Offline'),
(89, 'dave', 'millan', 'dave@gmail.com', 'bfcdf3e6ca6cef45543bfbb57509c92aec9a39fb', 'https://media-exp1.licdn.com/dms/image/C4E03AQFisMIW2P7mgg/profile-displayphoto-shrink_100_100/0/1616488312756?e=1623888000&v=beta&t=ByevqkuF6ve6K_T-GIohWfRD8uDni6FTbGIyP1MhtPw', '2021-05-06 20:34:08', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `StockId` int(11) NOT NULL,
  `ProductId` int(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Colors` varchar(50) NOT NULL,
  `Quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`StockId`, `ProductId`, `Size`, `Colors`, `Quantity`) VALUES
(1, 1, 'Small', 'White', 890),
(2, 1, 'Medium', 'White', 100),
(3, 1, 'Small', 'Black', 50),
(4, 1, 'Medium', 'Black', 50),
(5, 1, 'Small', 'Red', 997),
(6, 1, 'Medium', 'Red', 1000),
(7, 2, '35', 'White', 50),
(8, 2, '36', 'White', 40),
(9, 3, '12/256GB', 'Blue', 50),
(10, 3, '12/128GB', 'Black', 980),
(11, 4, '36', 'Blue', 20),
(12, 4, '37', 'Black', 20),
(13, 5, '40', 'White', 50),
(14, 6, '40', 'White', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`),
  ADD KEY `FK_ProductCart` (`ProductId`),
  ADD KEY `FK_UserCart` (`UserId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`),
  ADD UNIQUE KEY `CartId` (`CartId`),
  ADD KEY `statusToOrder` (`Status`),
  ADD KEY `orderTUser` (`UserId`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`StockId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `StockId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_ProductCart` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UserCart` FOREIGN KEY (`UserId`) REFERENCES `register` (`UserId`) ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orderTUser` FOREIGN KEY (`UserId`) REFERENCES `register` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`),
  ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
