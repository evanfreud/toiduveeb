-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 20. bře 2017, 17:20
-- Verze serveru: 10.1.21-MariaDB
-- Verze PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `authentication`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `ctg_name` varchar(50) NOT NULL,
  `ctg_pricefc` int(11) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `deliveries`
--

CREATE TABLE `deliveries` (
  `id_delivery` int(11) NOT NULL,
  `dlvr_user` int(11) NOT NULL,
  `dlvr_region` int(11) NOT NULL,
  `dlvr_scart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `products`
--

CREATE TABLE `products` (
  `id_product` int(4) NOT NULL,
  `prd_name` varchar(50) NOT NULL,
  `prd_brand` varchar(50) NOT NULL,
  `prd_price` double NOT NULL,
  `prd_weight` double NOT NULL,
  `prg_category` int(4) NOT NULL,
  `prd_status` varchar(2) NOT NULL DEFAULT 'Z1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `products_to_scart`
--

CREATE TABLE `products_to_scart` (
  `scart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `rgn_name` varchar(25) NOT NULL,
  `rgn_shipcost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `scart`
--

CREATE TABLE `scart` (
  `id_scart` int(11) NOT NULL,
  `scrt_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scrt_user` int(11) NOT NULL,
  `scrt_delivery` int(11) NOT NULL,
  `scrt_status` varchar(2) NOT NULL DEFAULT 'Y1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `usr_surname` varchar(50) NOT NULL,
  `usr_datebirth` date NOT NULL,
  `usr_email` varchar(100) NOT NULL,
  `usr_tmoney` double NOT NULL,
  `usr_password` varchar(100) NOT NULL,
  `usr_region_id` int(2) NOT NULL,
  `usr_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id_user`, `usr_name`, `usr_surname`, `usr_datebirth`, `usr_email`, `usr_tmoney`, `usr_password`, `usr_region_id`, `usr_level`) VALUES
(21, 'Reemet', '', '0000-00-00', 'reemet.ammer@gmail.com', 0, 'Parool', 0, 0),
(23, 'Ilja', '', '0000-00-00', 'ilja.zolotnikov@gmail.com', 0, '010203', 0, 0);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Klíče pro tabulku `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id_delivery`),
  ADD KEY `dlvr_region` (`dlvr_region`),
  ADD KEY `dlvr_user` (`dlvr_user`),
  ADD KEY `dlvr_scart` (`dlvr_scart`);

--
-- Klíče pro tabulku `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `prg_category` (`prg_category`);

--
-- Klíče pro tabulku `products_to_scart`
--
ALTER TABLE `products_to_scart`
  ADD KEY `scart_id` (`scart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Klíče pro tabulku `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Klíče pro tabulku `scart`
--
ALTER TABLE `scart`
  ADD PRIMARY KEY (`id_scart`),
  ADD KEY `scrt_user` (`scrt_user`),
  ADD KEY `scrt_delivery` (`scrt_delivery`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`,`usr_name`),
  ADD KEY `usr_region_id` (`usr_region_id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id_delivery` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `scart`
--
ALTER TABLE `scart`
  MODIFY `id_scart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_ibfk_1` FOREIGN KEY (`dlvr_region`) REFERENCES `region` (`id_region`) ON UPDATE CASCADE,
  ADD CONSTRAINT `deliveries_ibfk_2` FOREIGN KEY (`dlvr_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `deliveries_ibfk_3` FOREIGN KEY (`dlvr_scart`) REFERENCES `scart` (`id_scart`);

--
-- Omezení pro tabulku `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`prg_category`) REFERENCES `categories` (`id_category`);

--
-- Omezení pro tabulku `products_to_scart`
--
ALTER TABLE `products_to_scart`
  ADD CONSTRAINT `products_to_scart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `products_to_scart_ibfk_2` FOREIGN KEY (`scart_id`) REFERENCES `scart` (`id_scart`);

--
-- Omezení pro tabulku `scart`
--
ALTER TABLE `scart`
  ADD CONSTRAINT `scart_ibfk_1` FOREIGN KEY (`scrt_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `scart_ibfk_2` FOREIGN KEY (`scrt_delivery`) REFERENCES `deliveries` (`id_delivery`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
