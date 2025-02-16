SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `tblexpense` (
  `ID` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(200) DEFAULT NULL,
  `ExpenseCost` varchar(200) DEFAULT NULL,
  `NoteDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data table `tblexpense`
--

INSERT INTO `tblexpense` (`ID`, `UserId`, `ExpenseDate`, `ExpenseItem`, `ExpenseCost`, `NoteDate`) VALUES
(1, 1, '2024-07-10', 'Coffee', '60', '2024-07-11 10:30:25'),
(2, 1, '2024-07-12', 'Fruits', '200', '2024-07-12 11:15:42'),
(3, 1, '2024-07-08', 'Vegetables, Rice', '520', '2024-07-12 12:05:38'),
(4, 2, '2024-06-25', 'Shoes', '2999', '2024-07-12 13:45:20'),
(5, 2, '2024-05-20', 'Smartwatch', '7999', '2024-07-12 14:30:50'),
(6, 3, '2024-06-05', 'Keyboard', '1500', '2024-07-12 15:10:22'),
(7, 3, '2024-06-28', 'Household Supplies', '2750', '2024-07-12 16:00:18'),
(8, 3, '2024-07-15', 'Water Bill', '980', '2024-07-12 16:30:40'),
(9, 3, '2024-06-20', 'Netflix Subscription', '999', '2024-07-12 17:05:10'),
(10, 3, '2024-07-16', 'Eggs, Cheese, Butter', '180', '2024-07-12 17:40:30');


--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(150) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(1, 'Rahul', 'rahul@test.com', 1414256320, 'f925916e2754e5e03f75dd58a5733251', '2024-08-05 06:37:42'),
(2, 'John Doe', 'johndoe12@gmail.com', 1231231230, 'f925916e2754e5e03f75dd58a5733251', '2024-08-16 04:50:45'),
(3, 'Test User', 'testuser@gmail.com', 1233211230, 'f925916e2754e5e03f75dd58a5733251', '2024-08-16 05:17:22');


ALTER TABLE `tblexpense`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tblexpense`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
