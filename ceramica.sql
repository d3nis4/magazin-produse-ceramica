-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 10:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceramica`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(138, 8, 16, 1, '2023-12-02 14:25:12'),
(140, 10, 12, 3, '2023-12-05 07:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(6, 'Farfurii', 'farfurii', 'dsadsa', 1, 0, '1701340988.png', 'sadsa', 'saddsdf', 'dsfsdfadsfads', '2023-11-30 10:43:08'),
(7, 'Pahare si cani', 'pahare cani', 'Para si cani pt tine', 1, 0, '1701425161.png', 'pahare cani', 'cani pahare cesti cescute', 'cani pahare cesti cescute', '2023-12-01 10:06:01'),
(8, 'Decoratiuni', 'decor', 'decoratiuni speciale pentru casa ta', 1, 0, '1701425209.png', 'DECO', 'decoratiuni decoratii decor', 'decoratiuni decoratii decor', '2023-12-01 10:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email`) VALUES
(1, ''),
(2, 'ssdsadd@fff');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `adress` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `adress`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(1, 'comanda241sfdsfd', 8, 'ddsd', 'fdsfds', 'fdsfdsfd', 'fds', 0, 40, 'COD', '', 1, NULL, '2023-12-01 18:41:18'),
(2, 'comanda253fdsf', 8, 'f', 'ddsfdf', 'dsfdsf', 'dssdf', 0, 40, '', '', 0, NULL, '2023-12-01 18:51:29'),
(3, 'comanda740fgf', 8, 'gfdgdgfdg', 'denisa@gmail.com', 'fdfgf', 'fdgfdg', 0, 40, 'COD', '', 0, NULL, '2023-12-01 18:51:51'),
(4, 'comanda979hgfh', 8, 'hhfg', 'miau@miau.com', 'gfhgfh', 'gfhgf', 0, 40, 'COD', '', 0, NULL, '2023-12-01 18:54:35'),
(5, 'comanda333dsa', 8, 'dsadas', 'denisa@gmail.com', 'sadsa', 'sdasd', 0, 40, 'COD', '', 0, NULL, '2023-12-01 18:55:11'),
(6, 'comanda476sdsad', 8, 'asdasd', 'asdsad@asdsadsa', 'dasdsad', 'sadsadsddssdfds', 0, 200, 'COD', '', 0, NULL, '2023-12-02 09:26:46'),
(7, 'comanda852f', 8, 'dfsdf', 'admin@2mail', 'dsf', 'dsfds', 0, 160, 'COD', '', 0, NULL, '2023-12-02 09:28:22'),
(8, 'comanda9352526', 8, 'ion popescu', 'ion@popescu', '332526', 'dsa ffd grfgfd ', 369, 180, 'COD', '', 0, NULL, '2023-12-02 10:51:17'),
(9, '307659', 8, 'ion popescu', 'ionpopescu@mail.com', '23659', 'ssa sdd asd sasda ', 222, 95, 'COD', '', 1, NULL, '2023-12-02 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 1, 12, 1, 40, '2023-12-01 18:41:18'),
(2, 2, 12, 1, 40, '2023-12-01 18:51:29'),
(3, 3, 12, 1, 40, '2023-12-01 18:51:51'),
(4, 4, 12, 1, 40, '2023-12-01 18:54:35'),
(5, 5, 12, 1, 40, '2023-12-01 18:55:11'),
(6, 6, 12, 5, 40, '2023-12-02 09:26:46'),
(7, 6, 12, 5, 40, '2023-12-02 09:26:46'),
(8, 7, 12, 4, 40, '2023-12-02 09:28:22'),
(9, 8, 12, 3, 40, '2023-12-02 10:51:17'),
(10, 8, 13, 1, 60, '2023-12-02 10:51:17'),
(11, 9, 13, 1, 60, '2023-12-02 13:15:04'),
(12, 9, 14, 1, 35, '2023-12-02 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(12, 6, 'Farfurii albastre', 'f-albastra', 'gf', 'Descoperă rafinamentul suprem cu acest set impresionant de 6 cesti pentru \r\n                    espresso din portelan de calitate superioară. Cu o capacitate de 80 ml, \r\n                    aceste cesti oferă cea mai autentică experiență de degustare a espresso-ului. \r\n                    Cu un design ergonomic, aceste cesti conferă o notă de eleganță fiecărei băuturi. \r\n                    Aceste cesti nu se vând separat, oferindu-ți o colecție completă de obiecte \r\n                    deosebite. Adaugă acest set de cesti superbe la colecția ta și \r\n                    transformă servirea cafelei într-o experiență de neuitat.', 60, 40, '1701348482.png', 8, 1, 1, 'sdfd', 'dsfsd', 'dsfdf', '2023-11-30 12:48:02'),
(13, 6, 'Farfurii ', 'farfurii-2', 'Farfuriile roșii strălucesc cu o eleganță aparte, conturând imagini rafinate și culori vii. Picturile delicate aduc un farmec aparte oricărei mese și adaugă o notă de rafinament în orice interior.', 'Farfuriile roșii strălucesc cu o eleganță aparte, conturând imagini rafinate și culori vii. Picturile delicate aduc un farmec aparte oricărei mese și adaugă o notă de rafinament în orice interior.', 900, 60, '1701514210.png', 4, 1, 1, 'Farfurii2', 'Farfuriile roșii strălucesc cu o eleganță aparte, conturând imagini rafinate și culori vii. Picturile delicate aduc un farmec aparte oricărei mese și adaugă o notă de rafinament în orice interior.', 'Farfuriile roșii strălucesc cu o eleganță aparte, conturând imagini rafinate și culori vii. Picturile delicate aduc un farmec aparte oricărei mese și adaugă o notă de rafinament în orice interior.', '2023-12-02 10:50:10'),
(14, 7, 'Cana ', 'cana-vintage', 'Experimentați eleganța clasică cu această cană vintage albă și maro. Designul său simplu, dar rafinat, combină albul curat cu accentele de maro, aducând o notă de distincție la fiecare băutură.', 'Experimentați eleganța clasică cu această cană vintage albă și maro. Designul său simplu, dar rafinat, combină albul curat cu accentele de maro, aducând o notă de distincție la fiecare băutură.', 60, 35, '1701517739.png', 13, 1, 1, 'Cana maro', 'Experimentați eleganța clasică cu această cană vintage albă și maro. Designul său simplu, dar rafinat, combină albul curat cu accentele de maro, aducând o notă de distincție la fiecare băutură.', 'Experimentați eleganța clasică cu această cană vintage albă și maro. Designul său simplu, dar rafinat, combină albul curat cu accentele de maro, aducând o notă de distincție la fiecare băutură.', '2023-12-02 11:48:59'),
(15, 8, 'Suport Lumanare Craciun', 'Suport Lumanare Craciun casuta bookstore', 'Îmbrățișați magia sărbătorilor cu suportul nostru de lumânare în formă de casă de cărți, un element distinctiv ce aduce farmecul Crăciunului în orice colț al casei dumneavoastră. Această casetă artistică, decorată cu detalii de carte și ornamente festive, reprezintă o reinterpretare captivantă a atmosferei călduroase a sărbătorilor.', 'Îmbrățișați magia sărbătorilor cu suportul nostru de lumânare în formă de casă de cărți, un element distinctiv ce aduce farmecul Crăciunului în orice colț al casei dumneavoastră. Această casetă artistică, decorată cu detalii de carte și ornamente festive, reprezintă o reinterpretare captivantă a atmosferei călduroase a sărbătorilor.', 90, 30, '1701518484.png', 8, 1, 1, 'Suport Lumanare Craciun casuta bookstore', 'Suport Lumanare Craciun casuta bookstore', 'Îmbrățișați magia sărbătorilor cu suportul nostru de lumânare în formă de casă de cărți, un element distinctiv ce aduce farmecul Crăciunului în orice colț al casei dumneavoastră. Această casetă artistică, decorată cu detalii de carte și ornamente festive, reprezintă o reinterpretare captivantă a atmosferei călduroase a sărbătorilor.', '2023-12-02 12:01:24'),
(16, 8, 'Suport lumanare', 'Suport Lumanare casuta de la tara ', 'Suportul nostru de lumânare, sub formă de casă de la țară, este un tribut adus frumuseții simplificării și naturaleții. Realizată cu atenție la detalii și conturată de linii curate, această casă aduce un aer plin de autenticitate, completând atmosfera relaxată și confortabilă a unei case de la țară.', 'Suportul nostru de lumânare, sub formă de casă de la țară, este un tribut adus frumuseții simplificării și naturaleții. Realizată cu atenție la detalii și conturată de linii curate, această casă aduce un aer plin de autenticitate, completând atmosfera relaxată și confortabilă a unei case de la țară.', 60, 24, '1701518582.png', 9, 1, 1, 'Suport Lumanare casuta de la tara ', 'Suport Lumanare casuta de la tara ', 'Suportul nostru de lumânare, sub formă de casă de la țară, este un tribut adus frumuseții simplificării și naturaleții. Realizată cu atenție la detalii și conturată de linii curate, această casă aduce un aer plin de autenticitate, completând atmosfera relaxată și confortabilă a unei case de la țară.', '2023-12-02 12:03:02'),
(18, 6, 'Farfurie vintage', 'farfurie vintage 1', ' O farfurie vintage albastru cu detalii albe încântătoare și desene distincte este o piesă de ceramică rafinată, cu o aură clasică și farmec nostalgic. Fondul albastru închis, decorat cu modele subtile sau intricate în alb, adaugă eleganță și un aspect distinct fiecărei farfurii. Această combinație de culori poate evoca o atmosferă fermecătoare și poate oferi o notă de rafinament unei mese sau chiar unei colecții de obiecte vintage.', ' O farfurie vintage albastru cu detalii albe încântătoare și desene distincte este o piesă de ceramică rafinată, cu o aură clasică și farmec nostalgic. Fondul albastru închis, decorat cu modele subtile sau intricate în alb, adaugă eleganță și un aspect distinct fiecărei farfurii. Această combinație de culori poate evoca o atmosferă fermecătoare și poate oferi o notă de rafinament unei mese sau chiar unei colecții de obiecte vintage.', 600, 35, '1701542994.png', 11, 1, 0, 'Farfurie vintage', ' O farfurie vintage albastru cu detalii albe încântătoare și desene distincte este o piesă de ceramică rafinată, cu o aură clasică și farmec nostalgic. Fondul albastru închis, decorat cu modele subtile sau intricate în alb, adaugă eleganță și un aspect distinct fiecărei farfurii. Această combinație de culori poate evoca o atmosferă fermecătoare și poate oferi o notă de rafinament unei mese sau chiar unei colecții de obiecte vintage.', ' O farfurie vintage albastru cu detalii albe încântătoare și desene distincte este o piesă de ceramică rafinată, cu o aură clasică și farmec nostalgic. Fondul albastru închis, decorat cu modele subtile sau intricate în alb, adaugă eleganță și un aspect distinct fiecărei farfurii. Această combinație de culori poate evoca o atmosferă fermecătoare și poate oferi o notă de rafinament unei mese sau chiar unei colecții de obiecte vintage.', '2023-12-02 18:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` varchar(191) NOT NULL,
  `parere` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `created_at`, `parere`) VALUES
(1, 'mihai', '2023-12-02 20:36:58', 'super echipa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `prenume` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `phone` int(191) NOT NULL,
  `adress` varchar(191) NOT NULL,
  `pincode` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `prenume`, `email`, `password`, `role_as`, `phone`, `adress`, `pincode`) VALUES
(7, '', 'denisa', 'denisa@gmail.com', '1234', 1, 0, '', 0),
(8, '   Ion', '   Popescu', 'ionpopescu@mail.com', ' 1234', 0, 7215963, 'Str amurgului', 963),
(9, 'ionescu', 'andrei', 'andrei@ionescu.com', '1234', 0, 0, '', 0),
(10, '  vlad', '  popescu', 'vlad@mail.com', '1234', 0, 7215963, '', 963);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
