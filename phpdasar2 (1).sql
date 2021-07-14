-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 07:05 AM
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
-- Database: `phpdasar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Slackie', '062406104', 'slackie@mail.com', 'Computer Science', '1.jpg'),
(2, ' Mayuki', ' 062406105', ' mayuki@mail.com', ' Computer Sciencesss', '2.jpg'),
(4, 'Megalomen', '    062406107', '    megalomen@mail.combbbb', '    Computer Sciencessss', '4.jpg'),
(5, 'Kashiwagi', '062406108', 'kashiwagi@mail.com', 'Computer Science', '5.jpg'),
(6, ' yuki', ' 062406109', ' yuki@mail.com', ' Computer Scienceaaaaaa', '6.jpg'),
(7, ' milky', ' 062406110', ' milky@mail.com', 'tekhnik informatika', '1.jpg'),
(8, 'watanabe', '062406111', 'watanabe@mail.com', 'Computer Science', '2.jpg'),
(9, '  molly', '  062406112', '  molly@mail.com', '  Computer Science assaas', '60e56d6e4acc4.png'),
(10, 'anata', '062406113', 'anata@mail.com', 'Computer Science', '4.jpg'),
(17, 'asd', '1231456', 'as', 'asd', '60e56a31d6d83.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'slackie', '$2y$10$LuntneiBIdGF.MRgFcD9bumJ64fMdbg2DF3tmlfco5pQwpNW695KS'),
(2, 'admin', '$2y$10$SmhkcQ3eEqtaIgCqysNJVe3L5gyRqZXl9/QY4zE3fW.bJcIRz5jha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
