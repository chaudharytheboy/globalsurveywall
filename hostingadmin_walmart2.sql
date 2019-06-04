-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2019 at 06:06 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostingadmin_walmart2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `regular_price` varchar(100) DEFAULT NULL,
  `shipping` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `img_popular` varchar(225) NOT NULL,
  `review_users` int(11) DEFAULT NULL,
  `reviews` varchar(255) DEFAULT NULL,
  `url_1` varchar(255) DEFAULT NULL,
  `url_2` varchar(255) DEFAULT NULL,
  `ct_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `product_price`, `regular_price`, `shipping`, `quantity`, `images`, `img_popular`, `review_users`, `reviews`, `url_1`, `url_2`, `ct_dt`) VALUES
(1, 'Anti-Aging Skin CreamÂ©', 'Scientifically proven deep moisturizing anti-aging skin cream. Winner of the Natural Health Beauty', '120.99', '0.00', '4.95', 1, 'images/products_image/srvyskin.png', 'images/popular_image/mostpopuler.png', 413, 'images/4-half-star.png', 'https://utxxqbi.com/path/out.php?b=4911', '', '2019-05-29 20:46:03'),
(2, 'Most Popular Pure Keto FormulaÂ©', 'All natural miracle weight-loss supplement! Lose weight safely without diet or exercise!', '109.95', '0.00', '4.95', 3, 'images/products_image/keto1.png', 'images/popular_image/toprated.png', 614, 'images/5-star.png', 'https://utxxqbi.com/path/out.php?b=2097', '', '2019-05-29 20:47:59'),
(3, '#1 Brain Enhancer In The WorldÂ©', 'Intense Focus.. New Formula. Activate Your Brain Power. Think Faster.', '189.97', '0.00', '4.95', 4, 'images/products_image/srvybrain.jpeg', 'images/popular_image/bestoffer.png', 891, 'images/4-half-star.png', 'https://utxxqbi.com/path/out.php?b=5780', '', '2019-05-29 20:49:05'),
(4, '#1 Male ENHANCEMENT In The CountryÂ©', 'Get Bigger, Last Longer, Stay Harder(Limited Time Promotion)', '124.95', '0.00', '4.95', 2, 'images/products_image/4.png', '', 514, 'images/5-star.png', 'https://utxxqbi.com/path/out.php?b=5780', '', '2019-05-29 20:48:35'),
(5, 'Nitro Ultramax', 'Build muscle, get super lean, have an awesome six-pack. Supplement endorsed by Fit2Fat2Fit', '209.95', '0.00', '4.95', 2, 'images/products_image/5.png', '', 813, 'images/4-half-star.png', 'https://utxxqbi.com/path/out.php?b=5780', NULL, '2019-05-29 20:48:16'),
(6, 'Forskolin Keto Complete', 'Flush Pounds and Detoxify your Body!', '95.99', '0.00', '4.95', 2, 'images/products_image/3.png', '', 917, 'images/5-star.png', 'https://utxxqbi.com/path/out.php?b=5780', '', '2019-05-29 20:48:21'),
(7, 'Clinically Validated Canabidiol', 'Relieves anxiety, reduces blood sugar levels, promotes bone growth!', '288.99', '0.00', '4.95', 4, 'images/products_image/6.jpg', '', 815, 'images/4-half-star.png', 'https://utxxqbi.com/path/out.php?b=5780', '', '2019-05-29 20:48:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ct_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ct_dt`) VALUES
(1, 'wmtrus@tcrm.com', 'Admin@3', '2019-04-19 05:20:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
