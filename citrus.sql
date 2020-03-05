-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2020 at 01:14 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(2, 'admin', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `avatar` varchar(255) DEFAULT 'images/logo.svg',
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `user_email`, `text`, `avatar`, `status`) VALUES
(1, 'John Doe', 'jdoe@gmail.com', 'Test Comment', NULL, '1'),
(10, 'Dave Johnson', 'dave@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas amet labore ad sunt asperiores corporis ipsa a alias ea, et beatae praesentium hic aspernatur, accusamus ipsum animi porro. Excepturi velit delectus, unde? Qui harum repellat consequuntur similique dolor illum laudantium voluptas! Assumenda corrupti quibusdam est consequatur incidunt nostrum qui accusantium enim cumque officia et, quos laudantium, praesentium minus nihil voluptatem cupiditate aliquam ipsa, reiciendis fugit dolor illo pariatur modi ad atque. Commodi expedita dignissimos assumenda non sint magni culpa odio eius sequi explicabo tenetur minima eaque, officiis nostrum, accusamus, minus quo aut a perspiciatis. Velit!', 'images/comments/manface1583413458.jpg', '1'),
(5, 'Jana Doe', 'jdoe@gmail.com', 'Tart tart pastry pastry chocolate cake icing toffee. Toffee chocolate cake pastry tiramisu carrot cake bonbon sweet roll caramels. Wafer candy canes soufflÃ© chupa chups tart. Chocolate cake sweet roll cupcake soufflÃ© chocolate bar. Macaroon chocolate cake liquorice donut sweet roll topping sweet macaroon. Danish halvah pie cheesecake cookie caramels candy canes carrot cake. Cake fruitcake danish tiramisu pudding jelly beans croissant sweet. Pastry carrot cake cookie cookie. Muffin carrot cake carrot cake chupa chups. Chupa chups cookie soufflÃ© cheesecake caramels bear claw chupa chups. SoufflÃ© chupa chups tootsie roll tootsie roll. Dessert jelly fruitcake sweet cupcake.', 'images/comments/girl1583409859.jpg', '1'),
(12, 'Jason', 'jason@gmail.com', 'Proin facilisis quam congue, efficitur felis ut, interdum sem. Maecenas pellentesque, lorem eu ornare elementum, nibh dui dapibus nunc, at fermentum velit enim et turpis. Suspendisse potenti.\r\n\r\nDuis ultricies id orci vitae facilisis. Suspendisse sed rutrum odio. Donec tincidunt feugiat nunc sit amet hendrerit. Quisque vel justo ligula. Proin vel mi vel velit porta dapibus eu quis enim.', '', '0'),
(8, 'James', 'james@gmail.com', 'Maecenas quis nisl placerat, hendrerit sem ultricies, eleifend dui. Nunc id urna non justo viverra consectetur sit amet et enim. Donec in sagittis enim. Sed tincidunt dui in velit maximus sodales. Mauris fringilla semper urna, non luctus arcu sagittis a. In mauris sapien, porttitor sit amet mauris eu, tincidunt volutpat tellus. Nunc at ex id lectus porttitor laoreet. Phasellus maximus, velit vel feugiat porta, urna nibh feugiat orci, sed eleifend massa ipsum in risus. Quisque et molestie urna. Fusce feugiat volutpat sapien, non iaculis justo vehicula non. Maecenas laoreet viverra lectus, non fermentum purus. Sed luctus sagittis nisl in porttitor.', 'images/comments/oldman1583409946.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `created_at`) VALUES
(11, 'Lime', 'A lime is a citrus fruit, which is typically round, green in color, 3â€“6 centimetres in diameter, and contains acidic juice vesicles', 'images/products/lime1583405242.jpg', '2020-03-05 10:50:08'),
(10, 'Kiwi', 'Small Kiwi', 'images/products/kiwi1583405208.jpg', '2020-03-05 10:58:08'),
(9, 'Lemons', 'Lemon Fruit', 'images/products/lemons1583405168.jpg', '2020-03-05 10:58:08'),
(8, 'Orange', 'Super Cool Orange', 'images/products/oranges1583405153.jpg', '2020-03-05 10:55:08'),
(19, 'Mandarin', 'Mandarin #2', 'images/products/fruit-1960405_6401583406667.jpg', '2020-03-05 11:11:06'),
(12, 'Mandarin', 'The mandarin orange, also known as the mandarin or mandarine, is a small citrus tree with fruit resembling other oranges, usually eaten plain or in fruit salads.', 'images/products/mandarin1583405263.jpg', '2020-03-05 10:50:08'),
(13, 'Tangerine', 'The tangerine is a group of orange-colored citrus fruit consisting of hybrids of mandarin orange.', 'images/products/tangerine1583405293.jpg', '2020-03-05 10:50:08'),
(14, 'Grape', 'The grapefruit is a subtropical citrus tree known for its relatively large sour to semi-sweet, somewhat bitter fruit.', 'images/products/grape1583405334.jpg', '2020-03-05 10:50:08'),
(15, 'Citrus', 'Citrus is a genus of flowering trees and shrubs in the rue family, Rutaceae. Plants in the genus produce citrus fruits, including important crops such as oranges, lemons, grapefruits, pomelos, and limes.', 'images/products/citrus1583405359.jpg', '2020-03-05 10:50:08'),
(16, 'Box', 'Box One', 'images/products/box11583405384.jpg', '2020-03-05 10:40:00'),
(20, 'Orange #2', 'New orange', 'images/products/oranges1583413621.jpg', '2020-03-05 13:07:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
