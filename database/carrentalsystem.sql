-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 07:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('admin');

-- --------------------------------------------------------

--
-- Table structure for table `aprroval`
--

CREATE TABLE `aprroval` (
  `idupdate` int(11) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `bookingstatus` varchar(30) NOT NULL,
  `carcondition` varchar(30) NOT NULL,
  `currentioc` varchar(30) NOT NULL,
  `staffname` varchar(30) NOT NULL,
  `number` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aprroval`
--

INSERT INTO `aprroval` (`idupdate`, `availability`, `bookingstatus`, `carcondition`, `currentioc`, `staffname`, `number`) VALUES
(4, 'IRIZ ', 'BOOKED', 'GOOD', 'SUNGAI PETANI', 'DANISH', 1255345663),
(7, 'Bezza', 'Cancel', 'Average', 'Workshop', 'leo', 1111482788),
(8, 'Myvi', 'Pending', 'Good', 'Kuala Lumpur', 'Priya', 125543636);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL,
  `idCustomer` int(20) NOT NULL,
  `idCar` int(11) NOT NULL,
  `bookingdate` date NOT NULL,
  `returndate` date NOT NULL,
  `goingto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idbooking`, `idCustomer`, `idCar`, `bookingdate`, `returndate`, `goingto`) VALUES
(2, 3, 4, '2020-11-08', '2020-11-16', 'sungai petani'),
(10, 22, 2, '2021-02-03', '2021-01-04', 'Johor'),
(13, 41, 7, '2021-01-22', '2021-01-23', 'Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `idCar` int(11) NOT NULL,
  `carname` varchar(255) NOT NULL,
  `carbrand` varchar(255) NOT NULL,
  `priceperhour` int(11) NOT NULL,
  `priceperday` int(11) NOT NULL,
  `priceperweek` int(11) NOT NULL,
  `carpicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`idCar`, `carname`, `carbrand`, `priceperhour`, `priceperday`, `priceperweek`, `carpicture`) VALUES
(2, 'BEZZA', 'Proton', 20, 60, 160, 'images/pic2.jpg'),
(4, 'IRIZ', 'Proton', 30, 450, 100, 'uploads/pic1.jpg'),
(6, 'Exora', 'Proton', 35, 255, 120, 'uploads/pic4.jpg'),
(7, 'Myvi', 'Perudua', 30, 290, 100, 'uploads/Myvi-1.5-SE_1_4_FRONT-LEFT_LIGHTS-ON.jpg'),
(8, 'Hiece', 'Toyota', 50, 400, 200, 'uploads/toyota-hiace-for-rent-kl-selangor.png'),
(9, 'Civic', 'Honda', 45, 300, 230, 'uploads/6d4edd4fecdf4b1f92d0468e0d31e84c_750x420.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idCustomer` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `icnum` int(100) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `licensetype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactnumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idCustomer`, `username`, `password`, `fullname`, `age`, `icnum`, `caddress`, `licensetype`, `email`, `contactnumber`) VALUES
(3, 'Thurkes', '123', 'suganesan', 30, 4287763, 'Banting', 'D', 'suganesan@gmail.com', 14272425),
(22, 'daarwin', '2986', 'Daarwin Raj', 21, 238839393, 'Australia', 'D', 'daarwinraj@gmail.com', 12356777),
(41, 'suzana', 'ann2000', 'Suzana Ann', 24, 510090788, 'Kangar', 'D', 'suzanaann@gmail.com', 124544326);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `idStaff` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`idStaff`, `username`, `password`) VALUES
(1, 'staff', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aprroval`
--
ALTER TABLE `aprroval`
  ADD PRIMARY KEY (`idupdate`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`idCar`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idCustomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aprroval`
--
ALTER TABLE `aprroval`
  MODIFY `idupdate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `idCar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idCustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
