-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iul. 04, 2026 la 10:55 PM
-- Versiune server: 10.4.32-MariaDB
-- Versiune PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `dialiay`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `rezervari`
--

CREATE TABLE `rezervari` (
  `id` int(11) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Prenume` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Artist` varchar(100) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `rezervari`
--

INSERT INTO `rezervari` (`id`, `Nume`, `Prenume`, `Email`, `Telefon`, `Artist`, `Data`) VALUES
(1, 'Maria', 'Notrademus', 'test@gmail.com', '0732542342342', 'Marius', '2025-04-26 19:14:09'),
(2, 'Maria', 'Notrademus', 'test@gmail.com', '0732542342342', 'Marius', '2025-04-26 19:16:19'),
(3, 'OPRIS', 'ELISA', 'opris.elisa@yahoo.com', '075246279', 'Marius', '2025-04-30 06:11:46');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `rezervari`
--
ALTER TABLE `rezervari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `rezervari`
--
ALTER TABLE `rezervari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
