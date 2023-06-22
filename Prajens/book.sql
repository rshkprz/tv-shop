-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 06:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: shop_db
--

-- --------------------------------------------------------

--
-- Table structure for table cart
--

CREATE TABLE cart (
  id int NOT NULL,
  user_id int NOT NULL,
  name varchar(100) NOT NULL,
  price int NOT NULL,
  quantity int NOT NULL,
  image varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table cart
--

INSERT INTO cart (id, user_id, name, price, quantity, image) VALUES
(64, 4, 'Gone Girl', 310, 1, 'gonegirl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table message
--

CREATE TABLE message (
  id int NOT NULL,
  user_id int NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  message varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table message
--

INSERT INTO message (id, user_id, name, email, number, message) VALUES
(10, 4, 'Rita', 'rit2@gmail.com', '986000000', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table orders
--

CREATE TABLE orders (
  id int NOT NULL,
  user_id int NOT NULL,
  name varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  email varchar(100) NOT NULL,
  method varchar(50) NOT NULL,
  address varchar(500) NOT NULL,
  total_products varchar(1000) NOT NULL,
  total_price int NOT NULL,
  placed_on varchar(50) NOT NULL,
  payment_status varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table orders
--

INSERT INTO orders (id, user_id, name, number, email, method, address, total_products, total_price, placed_on, payment_status) VALUES
(10, 4, 'Rohini Maharjan', '9860123456', 'rohini@gmail.com', 'Cash on delivery', 'flat no. , sars tole, , nepal - 1234', ', It Ends With Us (2) ', 1360, '07-Jun-2022', 'completed'),
(11, 4, 'Rita', '9870000000', 'rit2@gmail.com', 'Cash on delivery', 'sars tole, mahalaxmi-8, lalitpur, nepal - 1234', ', The Black Sun (1) ', 740, '07-Jun-2022', 'completed'),
(12, 4, 'swostiii', '5', 'swosti@gmail.com', 'Cash on delivery', 'sars tole, mahalaxmi-8, lalitpur, nepal - 1234', ', War and Peace (2) , Last Summer Boys: A Novel (1) ', 2361, '08-Jun-2022', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table products
--

CREATE TABLE products (
  id int NOT NULL,
  name varchar(100) NOT NULL,
  price int NOT NULL,
  image varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table products
--


INSERT INTO products (id, name, price, image) VALUES
(53, 'Aiersi 21 inch Ukulele with Bag', 2700, 'ukulele.jpg'),
(56, 'Multicolor tall birthday candle', 99, 'candle.jpg'),
(57, 'Party Fun Balloons Big Size', 499, 'ballon1.jpg'),
(58, 'Pistto Rose Gold Happy Birthday Banner', 199, 'ballon2.jpg'),
(59, 'Happy Anniversary Balloon Golden', 240, 'ballon3.jpg'),
(60, 'Baby Pink Artificial Flower Bouquet', 2000, 'bouquet1.jpg'),
(61, 'Butterfly Pendant Necklace', 99, 'pendant.jpg'),
(62, 'Oreo Choco Butter Cake-1 Pound', 1050, 'cake1.jpg'),
(63, 'Scented candles', 450, 'candle2.jpg'),
(64, 'Heart shaped sparkle candle ', 149, 'candle3.jpg'),
(65, 'Leather wallet', 1500, 'wallet1.jpg'),
(67, 'Ladies wallet', 600, 'wallet2.jpg'),
(68, 'Usupso Picture Frame', 599, 'frame1.jpg'),
(69, 'Usupso Photo Frame', 979, 'frame2.jpg'),
(70, 'Round Trendy Light Pink Blue Shades Sunglasses', 590, 'glasses.jpg'),
(71, 'Black Round Sunglass', 799, 'glasses2.jpg'),
(72, 'Sweet Home Sweet - Wooden Wall Clock', 2160, 'clock1.jpg'),
(73, 'Chiya Notebooks Flora 2', 418, 'notebook1.jpg'),
(74, 'Chiya Notebooks Flora 1', 418, 'notebook2.jpg'),
(75, 'Amazfit Bip U Smart Watch', 5999, 'watches1.jpg'),
(76, 'DIZO Watch pro', 7990, 'watches2.jpg'),
(77, 'Artificial Plant with Dhupi Design', 1050, 'plant1.jpg'),
(78, 'Decorative Indoor Artificial Plant', 900, 'plant2.jpg'),
(79, 'Large 7ft Teddy Bear', 6269, 'doll1.jpg'),
(80, 'D- Alloy Car 8 set Trucks', 2100, 'doll2.jpg'),
(81, 'Flower Vessel', 530, 'vase.jpg'),
(82, 'Mothers Day Magic Mug', 550, 'mug1.jpg'),
(83, 'Mug Gifts For Mom', 375, 'mug2.jpg'),
(84, 'Sketch Book A5', 350, 'book1.jpg'),
(85, 'Anx Pu Leather Mini Jewellery Box', 1000, 'giftbox1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  user_type varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table users
--

INSERT INTO users (id, name, email, password, user_type) VALUES
(3, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(4, 'swostiii', 'swosti@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table cart
--
ALTER TABLE cart
  ADD PRIMARY KEY (id);

--
-- Indexes for table message
--
ALTER TABLE message
  ADD PRIMARY KEY (id);

--
-- Indexes for table orders
--
ALTER TABLE orders
  ADD PRIMARY KEY (id);

--
-- Indexes for table products
--
ALTER TABLE products
  ADD PRIMARY KEY (id);

--
-- Indexes for table users
--
ALTER TABLE users
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table cart
--
ALTER TABLE cart
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table message
--
ALTER TABLE message
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table orders
--
ALTER TABLE orders
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table products
--
ALTER TABLE products
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table users
--
ALTER TABLE users
  MODIFY id int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
