CREATE TABLE `adopt-out-form` (
  `user_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `age` int NOT NULL,
  `reasons` varchar(15) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `adopt-out-form`
--

INSERT INTO `adopt-out-form` (`user_id`, `cat_name`, `fname`, `user_email`, `phone`, `age`, `reasons`, `comments`) VALUES
(7, 'Mei Mei', 'anna', 'anna@gmail.com', 500213004, 1, 'behavior', 'he pooped'),
(7, 'Mei Mei', 'anna', 'anna@gmail.com', 500213004, 2, 'behavior', 'he pooped on my bed'),
(7, 'sail', 'anna barcikowska', 'anna@gmail.com', 403632631, 22, 'allergy', '..'),
(7, 'sail', 'anna barcikowska', 'anna@gmail.com', 403632631, 22, 'allergy', '..'),
(7, 'ahhh', 'anna barcikowska', 'anna@gmail.com', 403632631, 22, 'allergy', 'bah bah'),
(9, 'jager', 'sahil', 'sahil@gmail.com', 403632631, 3, 'allergy', 'asdsd');

-- --------------------------------------------------------

--
-- Table structure for table `adoption_form`
--

CREATE TABLE `adoption_form` (
  `cat_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `experience` varchar(15) NOT NULL,
  `house_type` varchar(15) NOT NULL,
  `reasons` varchar(15) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `adoption_form`
--

INSERT INTO `adoption_form` (`cat_id`, `fname`, `user_email`, `phone`, `address`, `age`, `occupation`, `experience`, `house_type`, `reasons`, `comments`) VALUES
(1, 'anna', 'ania@gmail.com', 735916261, 'Lehmustie ', 23, 'none', 'beginner', 'house', 'companionship', 'aaa'),
(4, 'anna barcikowska', 'ania.bar25@gmail.com', 735916261, 'Lehmustie 5 A 6', 22, 'none', 'beginner', 'house', 'companionship', '22qdws'),
(4, 'anna barcikowska', 'ania.bar25@gmail.com', 35916261, 'Lehmustie 5 A 6', 22, 'none', 'beginner', 'house', 'companionship', '22qdws'),
(2, 'sahil', 'sahil@gmail.com', 403632631, 'Lehmustie\r\n5 A 6', 23, 'none', 'beginner', 'house', 'companionship', 'asasa'),
(2, 'sahil', 'sahil@gmail.com', 403632631, 'Lehmustie\r\n5 A 6', 23, 'none', 'beginner', 'house', 'companionship', 'asasa'),
(2, 'janika', 'janika@gmail.com', 345467345, 'qweqwe', 22, 'aa', 'beginner', 'house', 'companionship', 'aaa'),
(2, 'anna barcikowska', 'ania.bar25@gmail.com', 735916261, 'Lehmustie 5 A 6', 23, 'none', 'beginner', 'house', 'companionship', 'hb'),
(1, 'qew', 'janika@gmail.com', 345467345, 'sfdd', 22, 'qwe', 'beginner', 'house', 'companionship', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `available_cats`
--

CREATE TABLE `available_cats` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `adoption_status` enum('Available','Adopted') NOT NULL,
  `owner` varchar(50) NOT NULL COMMENT 'email/Silicate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `available_cats`
--

INSERT INTO `available_cats` (`cat_id`, `cat_name`, `adoption_status`, `owner`) VALUES
(1, 'Bunker Buster', 'Available', 'Silicate'),
(2, 'Tole Tole', 'Available', 'Silicate'),
(3, 'JÃ¤germeister', 'Available', 'Silicate'),
(4, 'Herbert', 'Available', 'Silicate');

-- --------------------------------------------------------

--
-- Table structure for table `Contact_form`
--

CREATE TABLE `Contact_form` (
  `user_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `Inquiry` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `Contact_form`
--

INSERT INTO `Contact_form` (`user_id`, `fname`, `user_email`, `phone`, `Inquiry`) VALUES
(7, 'anna barcikowsk', 'anna@gmail.com', 735916261, 'aaaaaaaaa'),
(7, 'anna barcikowsk', 'anna@gmail.com', 735916261, 'aaaaaaaaa'),
(7, 'anna barcikowska', 'anna@gmail.com', 403632631, 'oduhwsdfhiuowsk'),
(9, 'sahil', 'sahil@gmail.com', 735916261, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `fname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `quantity`, `fname`, `user_email`, `phone`, `address`, `payment_method`, `total_price`) VALUES
(4, 1, 1, 'Viktor Trilar', 'viktor.trilar1@gmail.com', '+38640239095', 'Ljubljanska cesta 31A', 'VISA', '30.99'),
(5, 3, 1, 'anna barcikowska', 'anna@gmail.com', '735916261', 'Lehmustie 5 A 6', 'VISA', '70.00'),
(6, 3, 1, 'sahil', 'sahil@gmail.com', '0403632631', 'Lehmustie\r\n43534', 'AMERICAN EXPRESS', '70.00'),
(7, 2, 1, 'sahil', 'sahil@gmail.com', '0403632631', 'Lehmustie\r\n43534', 'AMERICAN EXPRESS', '80.99'),
(8, 4, 1, 'janika', 'janika@gmail.com', '345467345', 'test', 'VISA', '16.40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(1, 'Lasagna', '30.99', 'images/lasagna.jpg'),
(2, 'Anxiety Relief', '10.99', 'images/cat-anxiety.jpg'),
(3, 'Cat Maid Outfit', '70.00', 'images/maid-outfit.jpg'),
(4, 'Cat Crack', '16.40', 'images/cat-crack.jpg'),
(5, 'Canned Tuna', '3.00', 'images/cat-tuna.png'),
(6, 'Cat Stress Ball', '20.00', 'images/cat-ball.webp'),
(7, 'Cat Bong Toy', '9.99', 'images/cat-bong.jpg'),
(8, 'Cat-Cus Tower', '99.99', 'images/catcus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `user_email`, `user_password`) VALUES
(7, 'asd', 'anna@gmail.com', 'sad'),
(9, 'sahil', 'sahil@gmail.com', 'poop'),
(14, 'Janika', 'janika@gmail.com', 'nomnom'),
(15, 'Viktor', 'viktor@gmail.com', 'aaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt-out-form`
--
ALTER TABLE `adopt-out-form`
  ADD KEY `fk_adoptout_users` (`user_id`);

--
-- Indexes for table `adoption_form`
--
ALTER TABLE `adoption_form`
  ADD KEY `fk_adoption_avcats` (`cat_id`);

--
-- Indexes for table `available_cats`
--
ALTER TABLE `available_cats`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `Contact_form`
--
ALTER TABLE `Contact_form`
  ADD KEY `fk_contact_users` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_cats`
--
ALTER TABLE `available_cats`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopt-out-form`
--
ALTER TABLE `adopt-out-form`
  ADD CONSTRAINT `fk_adoptout_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Contact_form`
--
ALTER TABLE `Contact_form`
  ADD CONSTRAINT `fk_contact_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
