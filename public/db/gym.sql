-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Mar 17, 2024 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `addon_services`
--

CREATE TABLE `addon_services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_schedules`
--

CREATE TABLE `class_schedules` (
  `schedule_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_schedules`
--

INSERT INTO `class_schedules` (`schedule_id`, `class_name`, `instructor_id`, `class_date`, `start_time`, `end_time`, `capacity`) VALUES
(1, 'Aerobics', 2, '2024-03-10', '12:31:35', '18:31:35', 10),
(3, 'Swimming', 1, '2024-03-13', '06:54:00', '08:55:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `name` text NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`name`, `description`, `date`, `event_id`) VALUES
('Gym Fitness Challenge', 'Join us for an exciting fitness challenge at our gym! Test your strength, endurance, and agility in a series of fun and challenging activities. Whether you\'re a seasoned athlete or a beginner, there\'s something for everyone. Sign up now to secure your spot and compete for fantastic prizes!', '2024-03-10', 1),
('Nutrition Workshop', ' Learn the fundamentals of nutrition and how to optimize your diet for better health and fitness results. Our expert nutritionist will provide valuable insights, practical tips, and personalized advice to help you achieve your fitness goals. Reserve your spot now for this informative workshop!', '2024-03-01', 2),
('Charity Fundraiser Workout', 'Make a difference while you work out! Join us for a special charity fundraiser workout where every rep, every mile, and every minute counts. Support a worthy cause and sweat it out with fellow gym members for an unforgettable fitness experience. Register now and be a part of something meaningful!', '2024-05-21', 3);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructor_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `expertise` varchar(100) NOT NULL COMMENT 'Area of expertise (e.g., Muscle Training, Power Training, Yoga, etc.)',
  `picture` varchar(255) DEFAULT 'default_profile_picture.jpg' COMMENT 'File path for profile picture, default to a placeholder image'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_id`, `full_name`, `email`, `expertise`, `picture`) VALUES
(1, 'John Snow', 'john@gymstack.com', 'muscle training', 'default_profile_picture.jpg'),
(2, 'Francis Nganou', 'nganou@gymstack.com', 'Cadio', 'default_profile_picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `equipment_id` int(11) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `date_subscribed` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `first_name`, `last_name`, `email`, `phone_number`, `dob`, `plan_id`, `role_id`, `date_subscribed`) VALUES
(1, 'Mark', 'Ottooo', 'nds@gmail.com', '02345566778', '2024-03-12', 4, 1, '2024-03-15'),
(4, 'Zeumo Lekane', 'Styve Orel', 'styve.zeumo@ashesi.edu.gh', '455666777', NULL, 3, 2, '2024-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL COMMENT 'Name of the role (e.g., Standard, Admin)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_history`
--

CREATE TABLE `subscription_history` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration_months` int(11) NOT NULL COMMENT 'Duration of the subscription plan in months',
  `benefits` text DEFAULT NULL COMMENT 'List of benefits included in the subscription plan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`plan_id`, `plan_name`, `description`, `price`, `duration_months`, `benefits`) VALUES
(1, 'Basic Plan', NULL, 30.00, 1, 'Access to cardio equipment (treadmills, ellipticals, stationary bikes)\r\nLimited access to strength training machines (basic weight machines)\r\nLocker rooms and showers'),
(2, 'Standard Plan', '', 50.00, 1, 'Access to cardio equipment, strength training machines, and free weights\r\nLocker rooms, showers, and towel service\r\nLimited access to specialty equipment \r\nUnlimited access to group fitness classes (yoga, spinning, HIIT)\r\nDiscounts on personal training sessions'),
(3, 'Premium Plan', NULL, 80.00, 1, 'Access to all gym equipment, including cardio machines, strength training machines, free weights, and specialty equipment\r\nFull access to amenities (sauna, steam room, swimming pool)\r\nPrivate locker rooms with additional amenities\r\nUnlimited access to all group fitness classes\r\nPriority booking for personal training sessions\r\nDiscounts on merchandise and cafe purchases'),
(4, 'No Plan', NULL, 0.00, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `equipment_id` int(11) DEFAULT NULL,
  `transaction_type` enum('IN','OUT') NOT NULL COMMENT 'IN for addition to inventory, OUT for removal from inventory',
  `quantity` int(11) DEFAULT NULL,
  `monetary_value` int(11) NOT NULL,
  `descriptions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `equipment_id`, `transaction_type`, `quantity`, `monetary_value`, `descriptions`) VALUES
(2, NULL, 'OUT', NULL, 455, 'Water'),
(3, NULL, 'IN', NULL, 5000, 'Classes fee');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `phoneNumber` text NOT NULL,
  `password` text NOT NULL,
  `gymname` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `phoneNumber`, `password`, `gymname`, `user_id`) VALUES
('Dora Hartman', 'Wynter Wooten', 'pycebuje@mailinator.com', '+1 (788) 528-2787', '$2y$10$oAgZUmJZw1asXv.oriH8cu1itp3ZQPkbeuheIEp4CeheZnzkoxm4K', 'Amela Dickerson', 1),
('Faith', 'Rovina', 'faith@gmail.com', '0549669809', '$2y$10$6EtDmSwkAXBkhdMFZa0Pp.fR3djmoC7SogoQBehQ68XT34Za9OcjW', 'Ashesi', 2),
('Akosua', 'Asante', 'akosua@gmail.com', '0546779999', '$2y$10$YYl3fj4efwwUTfNuAnNEauVdH/E56c3H7ONCrlcKg.Wvu1xG1.QBm', 'GymStack', 3),
('Ngala', 'Rovina', 'ngala@gmail.com', '254758426971', '$2y$10$ea4UmhmjveRtlxV9gdE3tudGevKTbdexGnnej8EeR1yPwXxgUO6tO', 'Fay', 4),
('Isaac Goodwin', 'Erich Brown', 'qewov@mailinator.com', '+1 (292) 647-4938', '$2y$10$R0jeslUNjuMvaOtnscSeX.6LIBqh93st7SyfPm1/bs/0WLM/4clwq', 'Samson Church', 5),
('Alvin', 'Memo', 'alvin@gmail.com', '0987453423', '$2y$10$OX0oYa1/9XCTpV7iuBsvB.E9wVo3YPW20JR.gG5qiCln12QDDEnMW', 'Alvo', 6),
('musimbi', 'toto', 'toto@gmail.com', '0789096534', '$2y$10$mIascuscO39Lhq1ybLGxuuZntBKi9bzlQiAGnmC8L.ZCNNIVz4vgC', 'Toto', 8),
('Anita', 'Nderu', 'anita@gmail.com', '0756235643', '$2y$10$fTDwxFZkbKvDo9fJvtsxGet4bSD19rsXdLnEvgn1I5Jt47Sao/6hS', 'AG', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_addonservices`
--

CREATE TABLE `user_addonservices` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `subscription_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_class`
--

CREATE TABLE `user_class` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_feedbacks`
--

CREATE TABLE `user_feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addon_services`
--
ALTER TABLE `addon_services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `class_schedules`
--
ALTER TABLE `class_schedules`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `plan_id` (`plan_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `subscription_history`
--
ALTER TABLE `subscription_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transactions_ibfk_1` (`equipment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_addonservices`
--
ALTER TABLE `user_addonservices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `user_class`
--
ALTER TABLE `user_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `user_feedbacks`
--
ALTER TABLE `user_feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addon_services`
--
ALTER TABLE `addon_services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_schedules`
--
ALTER TABLE `class_schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscription_history`
--
ALTER TABLE `subscription_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_addonservices`
--
ALTER TABLE `user_addonservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_class`
--
ALTER TABLE `user_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_feedbacks`
--
ALTER TABLE `user_feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_schedules`
--
ALTER TABLE `class_schedules`
  ADD CONSTRAINT `class_schedules_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `instructors` (`instructor_id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `subscription_plans` (`plan_id`),
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `subscription_history`
--
ALTER TABLE `subscription_history`
  ADD CONSTRAINT `subscription_history_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `subscription_history_ibfk_2` FOREIGN KEY (`plan_id`) REFERENCES `subscription_plans` (`plan_id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `inventory` (`equipment_id`);

--
-- Constraints for table `user_addonservices`
--
ALTER TABLE `user_addonservices`
  ADD CONSTRAINT `user_addonservices_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `user_addonservices_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `addon_services` (`service_id`);

--
-- Constraints for table `user_class`
--
ALTER TABLE `user_class`
  ADD CONSTRAINT `user_class_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`),
  ADD CONSTRAINT `user_class_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class_schedules` (`schedule_id`);

--
-- Constraints for table `user_feedbacks`
--
ALTER TABLE `user_feedbacks`
  ADD CONSTRAINT `user_feedbacks_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
