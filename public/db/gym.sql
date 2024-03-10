-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2024 at 08:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

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
-- Table structure for table `Addon_Services`
--

CREATE TABLE `Addon_Services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Class_Schedules`
--

CREATE TABLE `Class_Schedules` (
  `schedule_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `instructor_id` int(11) NOT NULL,
  `class_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Class_Schedules`
--

INSERT INTO `Class_Schedules` (`schedule_id`, `class_name`, `instructor_id`, `class_date`, `start_time`, `end_time`, `capacity`) VALUES
(1, 'Aerobics', 2, '2024-03-10', '12:31:35', '18:31:35', 10),
(3, 'Swimming', 1, '2024-03-13', '06:54:00', '08:55:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `name` text NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`name`, `description`, `date`, `event_id`) VALUES
('Gym Fitness Challenge', 'Join us for an exciting fitness challenge at our gym! Test your strength, endurance, and agility in a series of fun and challenging activities. Whether you\'re a seasoned athlete or a beginner, there\'s something for everyone. Sign up now to secure your spot and compete for fantastic prizes!', '2024-03-10', 1),
('Nutrition Workshop', ' Learn the fundamentals of nutrition and how to optimize your diet for better health and fitness results. Our expert nutritionist will provide valuable insights, practical tips, and personalized advice to help you achieve your fitness goals. Reserve your spot now for this informative workshop!', '2024-03-01', 2),
('Charity Fundraiser Workout', 'Make a difference while you work out! Join us for a special charity fundraiser workout where every rep, every mile, and every minute counts. Support a worthy cause and sweat it out with fellow gym members for an unforgettable fitness experience. Register now and be a part of something meaningful!', '2024-05-21', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Instructors`
--

CREATE TABLE `Instructors` (
  `instructor_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `expertise` varchar(100) NOT NULL COMMENT 'Area of expertise (e.g., Muscle Training, Power Training, Yoga, etc.)',
  `picture` varchar(255) DEFAULT 'default_profile_picture.jpg' COMMENT 'File path for profile picture, default to a placeholder image'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Instructors`
--

INSERT INTO `Instructors` (`instructor_id`, `full_name`, `email`, `expertise`, `picture`) VALUES
(1, 'John Snow', 'john@gymstack.com', 'muscle training', 'default_profile_picture.jpg'),
(2, 'Francis Nganou', 'nganou@gymstack.com', 'Cadio', 'default_profile_picture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE `Inventory` (
  `equipment_id` int(11) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
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
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`member_id`, `first_name`, `last_name`, `email`, `phone_number`, `dob`, `plan_id`, `role_id`, `date_subscribed`) VALUES
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
-- Table structure for table `Subscription_History`
--

CREATE TABLE `Subscription_History` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Subscription_Plans`
--

CREATE TABLE `Subscription_Plans` (
  `plan_id` int(11) NOT NULL,
  `plan_name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration_months` int(11) NOT NULL COMMENT 'Duration of the subscription plan in months',
  `benefits` text DEFAULT NULL COMMENT 'List of benefits included in the subscription plan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Subscription_Plans`
--

INSERT INTO `Subscription_Plans` (`plan_id`, `plan_name`, `description`, `price`, `duration_months`, `benefits`) VALUES
(1, 'Basic Plan', NULL, '30.00', 1, 'Access to cardio equipment (treadmills, ellipticals, stationary bikes)\r\nLimited access to strength training machines (basic weight machines)\r\nLocker rooms and showers'),
(2, 'Standard Plan', '', '50.00', 1, 'Access to cardio equipment, strength training machines, and free weights\r\nLocker rooms, showers, and towel service\r\nLimited access to specialty equipment \r\nUnlimited access to group fitness classes (yoga, spinning, HIIT)\r\nDiscounts on personal training sessions'),
(3, 'Premium Plan', NULL, '80.00', 1, 'Access to all gym equipment, including cardio machines, strength training machines, free weights, and specialty equipment\r\nFull access to amenities (sauna, steam room, swimming pool)\r\nPrivate locker rooms with additional amenities\r\nUnlimited access to all group fitness classes\r\nPriority booking for personal training sessions\r\nDiscounts on merchandise and cafe purchases'),
(4, 'No Plan', NULL, '0.00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Transactions`
--

CREATE TABLE `Transactions` (
  `transaction_id` int(11) NOT NULL,
  `equipment_id` int(11) DEFAULT NULL,
  `transaction_type` enum('IN','OUT') NOT NULL COMMENT 'IN for addition to inventory, OUT for removal from inventory',
  `quantity` int(11) DEFAULT NULL,
  `monetary_value` int(11) NOT NULL,
  `descriptions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Transactions`
--

INSERT INTO `Transactions` (`transaction_id`, `equipment_id`, `transaction_type`, `quantity`, `monetary_value`, `descriptions`) VALUES
(2, NULL, 'OUT', NULL, 455, 'Water'),
(3, NULL, 'IN', NULL, 5000, 'Classes fee');

-- --------------------------------------------------------

--
-- Table structure for table `User_AddonServices`
--

CREATE TABLE `User_AddonServices` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `subscription_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_Class`
--

CREATE TABLE `User_Class` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_Feedbacks`
--

CREATE TABLE `User_Feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `feedback_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Addon_Services`
--
ALTER TABLE `Addon_Services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `Class_Schedules`
--
ALTER TABLE `Class_Schedules`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `Instructors`
--
ALTER TABLE `Instructors`
  ADD PRIMARY KEY (`instructor_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Inventory`
--
ALTER TABLE `Inventory`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
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
-- Indexes for table `Subscription_History`
--
ALTER TABLE `Subscription_History`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `plan_id` (`plan_id`);

--
-- Indexes for table `Subscription_Plans`
--
ALTER TABLE `Subscription_Plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `User_AddonServices`
--
ALTER TABLE `User_AddonServices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `User_Class`
--
ALTER TABLE `User_Class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `User_Feedbacks`
--
ALTER TABLE `User_Feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Addon_Services`
--
ALTER TABLE `Addon_Services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Class_Schedules`
--
ALTER TABLE `Class_Schedules`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Instructors`
--
ALTER TABLE `Instructors`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Inventory`
--
ALTER TABLE `Inventory`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Members`
--
ALTER TABLE `Members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Subscription_History`
--
ALTER TABLE `Subscription_History`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Subscription_Plans`
--
ALTER TABLE `Subscription_Plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `User_AddonServices`
--
ALTER TABLE `User_AddonServices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User_Class`
--
ALTER TABLE `User_Class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User_Feedbacks`
--
ALTER TABLE `User_Feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Class_Schedules`
--
ALTER TABLE `Class_Schedules`
  ADD CONSTRAINT `class_schedules_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `Instructors` (`instructor_id`);

--
-- Constraints for table `Members`
--
ALTER TABLE `Members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `Subscription_Plans` (`plan_id`),
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `Roles` (`role_id`);

--
-- Constraints for table `Subscription_History`
--
ALTER TABLE `Subscription_History`
  ADD CONSTRAINT `subscription_history_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `Members` (`member_id`),
  ADD CONSTRAINT `subscription_history_ibfk_2` FOREIGN KEY (`plan_id`) REFERENCES `Subscription_Plans` (`plan_id`);

--
-- Constraints for table `Transactions`
--
ALTER TABLE `Transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `Inventory` (`equipment_id`);

--
-- Constraints for table `User_AddonServices`
--
ALTER TABLE `User_AddonServices`
  ADD CONSTRAINT `user_addonservices_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `Members` (`member_id`),
  ADD CONSTRAINT `user_addonservices_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `Addon_Services` (`service_id`);

--
-- Constraints for table `User_Class`
--
ALTER TABLE `User_Class`
  ADD CONSTRAINT `user_class_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `Members` (`member_id`),
  ADD CONSTRAINT `user_class_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `Class_Schedules` (`schedule_id`);

--
-- Constraints for table `User_Feedbacks`
--
ALTER TABLE `User_Feedbacks`
  ADD CONSTRAINT `user_feedbacks_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `Members` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
