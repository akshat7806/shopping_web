-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 12:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(0, 'admin', '123456', NULL, NULL, NULL, ''),
(1, 'akshat', '123456', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--
-- Error reading structure for table shopping.categories: #1932 - Table 'shopping.categories' doesn't exist in engine
-- Error reading data for table shopping.categories: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `shopping`.`categories`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `img_path`) VALUES
(5, 'Tshirts', 'assets/category-upload/s-ts24-vebnor-original-imagr95fjzgazzng.webp'),
(6, 'Jeans', 'assets/category-upload/32-mss22mjn306-metronaut-original-imagtkt8d5kyj7ww.webp'),
(7, 'Watches', 'assets/category-upload/-original-imagnqcgfgeufxvv.webp'),
(8, 'Shoes', 'assets/category-upload/6-rsl018-red-tape-beige-green-original-imagsz5fu9qcxfx4.webp'),
(9, 'Shirts', 'assets/category-upload/shirt06.webp');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discountprice` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `brand`, `title`, `price`, `discountprice`, `img_path`) VALUES
(11, 'Jeans', '17 edition', 'Men Regular Mid Rise Dark Blue Jeans', 999, 799, '../uploads/36-ucslim-7080-18-edition-original-imagkh5javmphjww.webp'),
(13, 'Jeans', 'METRONAUTz', 'Men Slim Mid Rise Blue J', 1499, 999, '../uploads/36-suplpsjean-lblue-supernova-inc-original-imafvvajnhrvpqhw.webp'),
(14, 'Jeans', 'Marsh-X', 'Men Slim Mid Rise Grey Jeans', 14999, 999, '../uploads/28-shdb83-lzard-original-imagqh7asrvxxckv.webp'),
(15, 'Jeans', 'Supernova Inc', 'Men Slim Mid Rise Light', 1399, 999, '../uploads/36-suplpsjean-lblue-supernova-inc-original-imafvvajnhrvpqhw.webp'),
(16, 'Jackets', 'h&M', 'Premium jacket', 2999, 1999, '../uploads/m-no-bomberjacketn-whiteblack-a-to-z-creation-original-imaggzycsyzuur3s.webp'),
(17, 'Jackets', 'zara', 'mens jacket', 4999, 2999, '../uploads/xl-no-rfj0217-red-tape-original-imaghb9puy9fthcx.webp'),
(18, 'Jackets', 'U-TURN', 'DENIM JACKET', 3999, 2999, '../uploads/xl-nmnt-7004-montrez-original-imag5t3nfpbqhgrx-bb.webp'),
(19, 'Suits', 'Darbar In', 'Men Slim Fit Solid Suit', 9999, 6999, '../uploads/42-navy-blue-special-collection-darbar-in-original-imag87kyrgaysphj-bb.webp'),
(20, 'Suits', 'ALJAAMI', 'Men jodhpuri bandhgala', 5999, 3999, '../uploads/40-tlr-rudrshri-original-imagz2z9xs8hm9my.webp'),
(21, 'Suits', 'PETER ENGLAND', 'Men Single Breasted ', 8999, 6999, '../uploads/36-superb-navy-blue-darbar-in-original-imagpfksyynhku8m.webp'),
(22, 'Suits', 'Darbar In', 'Men Single Breasted', 6999, 4999, '../uploads/40-aj-suit-tr-grey-aljaami-original-imagsyfzsgdzsz5y.webp'),
(23, 'Watches', 'Titan', 'Karishma refresher', 5999, 3999, '../uploads/-original-imagnqcgfgeufxvv.webp'),
(24, 'Watches', 'PIRASO', 'Analog Watch - For Men TW000G916', 5999, 3999, '../uploads/1-7106-black-hmtr-men-original-imagvsgcgznejj9p.webp'),
(25, 'Watches', 'fastrack', 'FK Exclusive Analog', 3999, 2999, '../uploads/-original-imagrtbrsgzmrec6.webp'),
(26, 'Shoes', 'RED TAPE', 'Casual Sneakers Shoes', 5999, 3999, '../uploads/9-5g-845-campus-mod-blu-wht-original-imag4g3xnanhz7zk-bb.webp'),
(28, 'Shoes', 'Red tape', 'Casual Sneakers Shoes', 8999, 6999, '../uploads/7-rsl049-red-tape-navy-original-imagxw2tawzyegn2.webp'),
(33, 'Shoes', 'max', 'branded shirt', 899, 799, '../uploads/7-na-rng-854-grey-41-bruton-grey-original-imagzye9vqcxhegh.webp'),
(34, 'Shirts', 'max', 'branded shirt', 899, 799, '../uploads/shirt06.webp'),
(35, 'Shirts', 'max', 'branded shirt', 899, 799, '../uploads/shirt05.webp'),
(36, 'Shirts', 'max', 'branded shirt', 899, 799, '../uploads/shirt02.jpg'),
(37, 'Shirts', 'max', 'branded shirt', 899, 799, '../uploads/shirt01.jpeg'),
(38, 'Tshirts', 'max', 'branded shirt', 899, 799, '../uploads/-original-imaghhfg8ckemkde.webp'),
(39, 'Tshirts', 'WAax', 'branded shirt', 899, 799, '../uploads/s-ts24-vebnor-original-imagr95fjzgazzng.webp'),
(40, 'Tshirts', 'max', 'branded shirt', 899, 799, '../uploads/l-men-s-stylish-trendy-half-sleeve-digital-printed-latest-design-original-imagqz69mu8sryvh.webp'),
(41, 'Shirts', 'hey', 'branded shirt', 899, 799, '../uploads/7-rsl049-red-tape-navy-original-imagxw2tawzyegn2.webp'),
(42, 'Shirts', 'B TURN shoes', 'finance manager', 499, 999, '../uploads/6-rsl018-red-tape-beige-green-original-imagsz5fu9qcxfx4.webp'),
(43, 'Shoes', 'bata', 'shoes with light', 999, 799, '../uploads/o.642.jpg'),
(45, 'Watches', 'titan', 'Men Regular Fit', 600, 300, '../uploads/-original-imagnqcgfgeufxvv.webp');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `main_img` varchar(255) NOT NULL,
  `f1` varchar(255) NOT NULL,
  `f2` varchar(255) NOT NULL,
  `f3` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `main_img`, `f1`, `f2`, `f3`, `title`, `heading`, `paragraph`) VALUES
(2, 'assets/category-upload/-original-imagyh62x7zjcpqy.webp', 'assets/category-upload/s-167a-eppe-original-imaftryemvkbkcan.webp', 'assets/category-upload/xl-168a-eppe-original-imaftryedcqejztm.webp', 'assets/category-upload/m-166a-eppe-original-imaghptctz2my2rt.webp', 'Top Offers Of The Week', 'Choose Your Summer Wear This Week', 'Special Offers On Summer Wears End Sale'),
(3, 'assets/category-upload/1713BM02_3.webp', 'assets/category-upload/1713BM02_1.jpg', 'assets/category-upload/1713BM02_6.webp', 'assets/category-upload/1713BM02_4.webp', 'Branded Watch', 'Top Seller Watches Of This Week', 'Buy Premium watches Look Good And Taste Even Better');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `user_password`) VALUES
(31, 'akshatjain@123.gmail.com', '$2y$10$PU1Kw1BavXR23BE4XcfIbueTcUQCkqquH8k/eujeDurXqMvpG4D/i'),
(32, 'akshatjain@123', '$2y$10$oXRNPF1kyO6fsg7Z/baqk.IFvA7Ord4P4iHVAf.BTUEmKbegoT6kK'),
(33, 'akshatjain@123', '$2y$10$f9uA4UjhZJXfUxnjIrXIK..gyhj2eejP0AluLeeRBnb4aw5AWextW'),
(34, 'admin@123.gmail.com', '$2y$10$8a002f.Gf890c3Xquq47kOQywipyTQusD6kXCsCwljvFMgH1FA06y'),
(35, 'admin@123.gmail.com', '$2y$10$bB05rzddfhvpKJvXuBkqhO9vFWJiJzKXdazRn3f6GfGtOtaX80D.m'),
(36, 'akshatjain@123', '$2y$10$4FHxH.TBQed7DTWv6am1I.jjrfU1loscMiD3DIBc4DeCZzU4bFPGK'),
(37, 'akshatjain@123', '$2y$10$chOub2qK.sVfV.YnQSDWTe8qLSVPY60TSQ85wznCJADaBYzmMOIuC'),
(38, 'akshatjain@123.gmail.com', '$2y$10$UdIVtNBsQrHepiwnao6Cs.EfRKVu4kjW8Azt2ZlYePQUzjCWiM7Q2'),
(39, 'akshatjain@123gmail.com', '$2y$10$U1p1.cR1vcmXvNozGbtBM.Uv12MTP.AhiDu8jAvPBSD7Eg2kZCanC'),
(40, 'akshatjain@123gmail.com', '$2y$10$CD/ox/Sb9Wv3Wj6OlbbLLOsoru02./uc20oQI1suzdVLe1NALazmi'),
(41, 'akshatjain@123', '$2y$10$5f0sDGtJEr9tDVta6j4kTunrA92m8vNxJHclDTBveHyLImZB/Z2v6'),
(42, 'akshatjain@123', '$2y$10$WIFmnE6R3dLP4uaaUnLTn.XGYv0a2R2wPVIHRxtrGcuazr2VPoZrG'),
(43, 'akshatjain@123.gmail.com', '$2y$10$lANcgW0hBmM0Mi9Lokla0.pN4uOuN.y53RpdUlD/7ys4lmsXfh/am'),
(44, 'akshatjain@123.gmail.com', '$2y$10$uKZqrlHRlz1hOJto68MPHeSilT83K.gQFle547seAlNfHRb85UGxO'),
(45, 'akshatjain@123.gmail.com', '$2y$10$h7D/AI6O2BS2JSotAr8DFuw1eLaO9vNUEEYrILjBkmssgzRXsDiBm'),
(46, 'akshatjain@123.gmail.com', '$2y$10$KgFMRZeAgJxHEqDHzAvLgespiF3fEQ6PH12KdnPgNFB8moR5EZXHy'),
(47, 'akshatjain@123', '$2y$10$9Gq6T.36U1JfOupU5PzPo.LKpn/uYdvu7etRiMMt6EkBTwtUon/NK'),
(48, 'akshatjain@123', '$2y$10$lnHCMeASpDYvjE9zOB52ge2dsUs.Un5ZRVuKI3PyZTUKKA0d2q.ou'),
(49, 'akshatjain@123.gmail.com', '$2y$10$zUDLFL4OONnPIjXsXGQyAeCz1CwH49O4BVoEnti4bSbBrKnG8Il4a'),
(50, 'akshatjain@123.gmail.com', '$2y$10$gpB3nklJ3sxD33.inEknCuJ8vPlxyYnEg873SiaA47b6jB9cUssUa'),
(51, 'akshatjain@123.gmail.com', '$2y$10$gaqwTXYIZyeMw8sC3sukSeUt4Arxj9zOMIqRBp5FAPfX6XLpKFRd2'),
(52, 'akshatjain@123.gmail.com', '$2y$10$VI6jpwTXaa.xlPmJcGMUtuBd4SLd.gkrsArZj7Ox43gH5vknIgumG'),
(53, 'akshatjain@123.gmail.com', '$2y$10$1cdNLptgMWRbRnGM9193w./MNg3M4MzAuDEafTBES0XWrBJ/4mU7.'),
(54, 'akshatjain@123.gmail.com', '$2y$10$VGqjarIrEiG.IMrRHl8LS.pzmvgtdmA/JiqawLR5qTKEl3ErRSxLS'),
(55, 'akshatjain@123.gmail.com', '$2y$10$VxL5kug5I8cO2v3ozArDZu6gP3tY59jCneTIfl6aTY2cJegclsEsS'),
(56, 'admin@123.gmail.com', '$2y$10$Js6rOdBqoUk6Ko8ELvihIe76aVgEWYZBw3I3whc/UmZHmzYvNIY8C'),
(57, 'admin@123.gmail.com', '$2y$10$7UR8iAws375/lp/kpVNsruvZI3iNBY8Xd.IOM3meYC4L5fmaxz22O'),
(58, 'admin@123.gmail.com', '$2y$10$766YaJe9ev3DKUlQVpadN.V5BpqSfHjjaJICnc4CbP5ZC9pR7QzsK'),
(59, 'akshatjain@123.gmail.com', '$2y$10$n5u78Tk/cl.3oZVuIkEcqe6M/hxGRrICxSVcVHz0BHO1Qg91ibMDO'),
(60, 'akshatjain@123.gmail.com', '$2y$10$8KdIYsAo/Ggl49wnGWvO7Ot1edYikLNZnjbpx15V0XoHU4eB7uB6q'),
(61, 'akshat0109@gmail.com', '$2y$10$sWxPpIACOKoVqTioWOqeP.3U3WCPKYKjc6U7g4PQw6h2oQf4U4DUK'),
(62, 'akshat0109@gmail.com', '$2y$10$fItHNzEGbv7AvTXAfbxPi.cGg38cGIVSNaDtaPGIEc0RQM8RHLq7q'),
(63, 'akshatjain0109@gmail.com', '$2y$10$msUHdq0LiYjryfKKt3u7.uUAg8qWhC9U8QKOYHMX6z4lPVN0EizRK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
