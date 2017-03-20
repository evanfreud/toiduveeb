-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pon 20. bře 2017, 20:40
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

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`id_category`, `ctg_name`, `ctg_pricefc`) VALUES
(1010, 'Piim', 100),
(1011, 'Kohupiimatooted', 100),
(1012, 'Või', 100),
(1013, 'Juust', 100),
(1014, 'Jogurtid', 100),
(1110, 'Makaronid', 100),
(1111, 'Maitseained', 100),
(1112, 'Õli', 100),
(1113, 'Jahu', 100),
(1114, 'Helbed', 100),
(1115, 'Tangud', 100),
(1116, 'Konservid', 100),
(1117, 'Kiirtoit', 100),
(1118, 'Krõpsud', 100),
(1119, 'Konserveeritud köögiviljad', 100),
(1120, 'Moosid', 100),
(1210, 'Värske liha', 100),
(1211, 'Pasteedid', 100),
(1212, 'Töödeldud liha', 100),
(1213, 'Vorstid, Viinerid', 100),
(1290, 'Kalatooted', 100),
(1310, 'Leib', 100),
(1311, 'Sai', 100),
(1410, 'Kommid', 100),
(1411, 'Kommikarbid', 100),
(1412, 'Šokolaad', 100),
(1413, 'Šokolaadibatoonikesed', 100),
(1414, 'Küpsised', 100),
(1415, 'Muud maiustused', 100),
(1510, 'Kohv', 100),
(1511, 'Tee', 100),
(1512, 'Karastusjoogid', 100),
(1513, 'Mahlad', 100),
(1580, 'Vein', 100),
(1581, 'Vahuvein', 100),
(1582, 'Õlu', 100),
(1610, 'Juurviljad', 100),
(1611, 'Luuviljalised', 100),
(1612, 'Tsitruselised', 100),
(1613, 'Eksootilised puuviljad', 100),
(1614, 'Muud viljad', 100),
(1710, 'Külmutatud toit', 100),
(1711, 'Jäätis', 100),
(1712, 'Külmutatud kala', 100),
(1810, 'Koeratoit', 100),
(1811, 'Kassitoit', 100),
(1812, 'Lemmikloomatarbed', 100),
(1910, 'Nõudepesuvahendid', 100),
(1911, 'Pesuvahendud', 100),
(1912, 'Paber', 100),
(1913, 'Puhastusvahendid', 100);

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

--
-- Vypisuji data pro tabulku `products`
--

INSERT INTO `products` (`id_product`, `prd_name`, `prd_brand`, `prd_price`, `prd_weight`, `prg_category`, `prd_status`) VALUES
(1111, 'TERE PIIM 2.5%  1.0L KILE', 'Tere', 0.49, 1, 1010, 'Z1'),
(1112, 'TERE PIIM 3.5% 1L TETRA TOP', 'Tere', 0.75, 1, 1010, 'Z1'),
(1113, 'KOHVIKOOR 10% 380ML TERE', 'Tere', 0.69, 0.38, 1010, 'Z1'),
(1114, 'KODUJUUST KLASSIKALINE 300G', 'Tere', 1.15, 0.3, 1011, 'Z1'),
(1115, 'KOHUPIIM 5% TERE', 'Tere', 0.75, 0.2, 1011, 'Z1'),
(1116, 'SAARE KOORENE KOHUKE TOFFE 40G', 'Saare (Remedia)', 0.29, 0.04, 1011, 'Z1'),
(1117, 'KOHUKE KARUMS ŠOKOLAADI 45G', 'Karums', 0.34, 0.05, 1011, 'Z1'),
(1118, 'TERE VÕI 82% 200G', 'Tere', 1.29, 0.2, 1012, 'Z1'),
(1119, 'RASVASEGUVÕIE VÕIDEKS 66% 200G', 'Tere', 0.85, 0.2, 1012, 'Z1'),
(1120, 'SULATATUD JUUST MEREVAIK 200G', 'Tere', 1.29, 0.2, 1013, 'Z1'),
(1121, 'JUUST EESTI VIIL. 25.2% 200G ESTOVER', 'ESTOVER OÜ', 1.99, 0.2, 1013, 'Z1'),
(1122, 'JUUST EESTI VIIL. 25.2% 500G ESTOVER', 'ESTOVER OÜ', 3.89, 0.5, 1013, 'Z1'),
(1123, 'FARMI KOORENE JOGURT MUSTIKATEGA 400G', 'Farmi', 1.05, 0.4, 1014, 'Z1'),
(1124, 'FARMI KOORENE JOGURT MUST KIRSS 400G', 'Farmi', 1.09, 0.4, 1014, 'Z1'),
(1125, 'FARMI KOORENE JOGURT VAARIKA 400G', 'Farmi', 1.09, 0.4, 1014, 'Z1'),
(1126, 'JOGURT FARMI KOORENE VIRSIKUTEGA 400G', 'Farmi', 1.05, 0.4, 1014, 'Z1'),
(1127, 'TARTU MILL FUSILLI DURUMNISUPASTA', 'TARTU MILL AS', 0.69, 0.5, 1110, 'Z1'),
(1128, 'TARTU MILL PENNE DURUMNISUPASTA', 'TARTU MILL AS', 0.69, 0.5, 1110, 'Z1'),
(1129, 'BASIILIK 5G S.M.', 'Santa Maria', 0.63, 0.01, 1111, 'Z1'),
(1130, 'KARTULIMAITSEAINE 30G S.M.', 'Santa Maria', 0.59, 0.03, 1111, 'Z1'),
(1131, 'MERESOOL JÄME KILES 1KG ', 'TAPROBAN AS', 0.49, 1, 1111, 'Z1'),
(1132, 'RAPSIÕLI OLIVIA 1L', 'Olivia', 0.85, 1, 1112, 'Z1'),
(1133, 'MAJONEES PROVANSAAL 900G TARPLAN', 'Tarplan', 1.99, 0.9, 1112, 'Z1'),
(1134, 'TOMATIKETŠUP 1000G FELIX', 'Felix', 2.59, 1, 1112, 'Z1'),
(1135, 'JAHU NISUJAHU 2KG T-550 KALEW', 'Kalew', 1.09, 2, 1113, 'Z1'),
(1136, 'NISUJAHU KÕRGEIMA SORDI T-405KALEW 2KG', 'Kalew', 1.25, 2, 1113, 'Z1'),
(1137, 'NELJAVILJAHELBED HELENI 500G', 'Helen', 0.75, 0.5, 1114, 'Z1'),
(1138, 'RIISIHELBED HELENI 500G', 'Helen', 1.19, 0.5, 1114, 'Z1'),
(1139, 'TATAR 4*100G', 'WORLDLINE OÜ', 0.99, 0.4, 1115, 'Z1'),
(1140, 'RIIS KULDNE BALTIX 1KG', 'WORLDLINE OÜ', 0.74, 1, 1115, 'Z1'),
(1141, 'VEISELIHA OMAS MAHLAS 240G RANNAROOTSI', 'RANNAROOTSI ', 1.29, 0.24, 1116, 'Z1'),
(1142, 'SUPP KODUNE SELJANKA 530G SALVEST', 'Salvest', 2.99, 0.53, 1116, 'Z1'),
(1143, 'KIIRSUPP KANAPÜREE SAIAK. MAGGI 16G', 'Maggi', 0.33, 0.02, 1117, 'Z1'),
(1144, 'KIIRNUUDLID KANALIHAMAITSELISED 50G MIVINA', 'Maggi', 0.24, 0.05, 1117, 'Z1'),
(1145, 'ESTRELLA KRÕPSUD MAHLAKA SIBULA&JUUSTUGA 200G', 'Estrella', 1.75, 0.2, 1118, 'Z1'),
(1146, 'ESTRELLA KRÕPSUD HAPUKOORE&SIBULA 200G', 'Estrella', 1.79, 0.2, 1118, 'Z1'),
(1147, 'KURK FELIX PEREKURK TERVE 680G', 'Felix', 1.65, 0.68, 1119, 'Z1'),
(1148, 'HERNES KONSERV. 720ML BONDUELLE', 'Bonduelle', 1.65, 0.72, 1119, 'Z1'),
(1149, 'PÕLTSAMAA VAARIKAMOOS 430G', 'Poltsamaa', 2.47, 0.43, 1120, 'Z1'),
(1150, 'JAHUTATUD KANAFILEE 300G', 'Tallegg', 1.69, 1, 1210, 'Z1'),
(1151, 'KODUNE HAKKLIHASEGU 400G', 'Rakvere', 1.61, 0.25, 1210, 'Z1'),
(1152, 'RANNAROOTSI MAKSAPASTEET 200g', 'RANNAROOTSI AS', 0.69, 0.2, 1211, 'Z1'),
(1153, 'PASTEET KODUNE 180G', 'RANNAROOTSI AS', 0.99, 0.18, 1211, 'Z1'),
(1154, 'KANAPALLID 500G', 'Tallegg', 1.19, 0.5, 1212, 'Z1'),
(1155, 'KANA-JUUSTUPIHVID 320G TALLEGG', 'Tallegg', 1.05, 0.32, 1212, 'Z1'),
(1156, 'VIINER RAKVERE 500G KILETA RAKVERE', 'Rakvere', 1.89, 0.5, 1213, 'Z1'),
(1157, 'LASTEVORST 600G', 'Rakvere', 2.09, 0.6, 1213, 'Z1'),
(1158, 'LASTEVORST 190G VIIL RAKVERE', 'Rakvere', 0.89, 0.19, 1213, 'Z1'),
(1159, 'HEERINGAFILEETRADITSIOONILINE 400G VICI', 'Viciunai Baltic', 2.29, 0.4, 1290, 'Z1'),
(1160, 'KREVETID SOOLVEES 200G', 'Viciunai Baltic', 3.45, 0.2, 1290, 'Z1'),
(1161, 'KRABIMAITS.PULK JAHUT.300G  VICI', 'Viciunai Baltic', 1.65, 0.3, 1290, 'Z1'),
(1162, 'KRABIMAITSELISED PULGAD 100G JAHUTATUD', 'Viciunai Baltic', 0.59, 0.1, 1290, 'Z1'),
(1163, 'LEIB RUKKIPALA  6TK 330G LEIBUR', 'Leibur', 0.71, 0.33, 1310, 'Z1'),
(1164, 'LEIBURI RUKS 800G', 'Leibur', 0.97, 0.8, 1310, 'Z1'),
(1165, 'LEIB TALLINNA PEENLEIB VIIL 1KG LEIBUR', 'Leibur', 1.19, 1, 1310, 'Z1'),
(1166, 'SAI KIRDE VIIL 330G LEIBUR', 'Leibur', 0.4, 0.33, 1311, 'Z1'),
(1167, 'LEIBURI KLASSIKALINE SUUR KIRDE SAI 500G', 'LEIBUR AS', 0.64, 0.5, 1311, 'Z1'),
(1168, 'PERENAISE SAI SUUR EESTI PAGAR', 'EESTI PAGAR AS', 0.62, 0.5, 1311, 'Z1'),
(1169, 'KOMM ANANASSI 150G KALEV', 'Kalev', 1.39, 0.15, 1410, 'Z1'),
(1170, 'KOMM KOMEET 175G', 'Kalev', 1.19, 0.18, 1410, 'Z1'),
(1171, 'KOMM TEEKONNA 175G KALEV', 'Kalev', 1.29, 0.15, 1410, 'Z1'),
(1172, 'KOMMIKARP MERCI ASSORTED 250G', 'Merci', 4.39, 0.25, 1411, 'Z1'),
(1173, 'KOMMIKARP GEISHA 150G FAZER', 'Geisha', 2.49, 0.15, 1411, 'Z1'),
(1174, 'ŠOKOLAAD KALEV 300G KALEV', 'Kalev', 3.79, 0.3, 1412, 'Z1'),
(1175, 'ŠOKOLAAD KALEVIPOEG 300G KALEV', 'Kalev', 3.95, 0.3, 1412, 'Z1'),
(1176, 'ŠOKOLAAD LINDA 300G KALEV', 'Kalev', 3.95, 0.3, 1412, 'Z1'),
(1177, 'ŠOKOLAAD SNICKERS 50G', 'Mars', 0.45, 0.5, 1413, 'Z1'),
(1178, 'SOKOLAAD MILKY WAY 21.5G', 'Mars', 0.29, 0.2, 1413, 'Z1'),
(1179, 'ŠOKOLAAD MARS 47G', 'Mars', 0.41, 0.5, 1413, 'Z1'),
(1180, 'KÜPSIS ROSINA KALEV 165G', 'Kalev', 0.51, 0.17, 1414, 'Z1'),
(1181, 'KÜPSIS SIDRUNI KALEV 165G', 'Kalev', 0.55, 0.17, 1414, 'Z1'),
(1182, 'SEFIIR VALGE 200G LAIMA', 'Laima', 1.09, 0.2, 1415, 'Z1'),
(1183, 'KOHV LUXUS PRESSKANNU 500G', 'Luxus', 4.99, 0.5, 1510, 'Z1'),
(1184, 'KOHV PRESIDENT 500G PAULIG', 'Paulig', 4.19, 0.5, 1510, 'Z1'),
(1185, 'LIPTON YELLOW LABEL 25 PK', 'Lipton (Unilever)', 0.96, 0.05, 1511, 'Z1'),
(1186, 'KARASTUSJOOK KELLUKE 0.5L PET', 'AS A.LE COQ', 0.49, 0.5, 1512, 'Z1'),
(1187, 'KARASTUSJOOK RC COLA 1.5L', 'Balsnack', 0.89, 1.5, 1512, 'Z1'),
(1188, 'KAR.JOOK ÕUNAMAHLAGA VALGE KLAAR 1.5L', 'AS A.LE COQ', 0.89, 1.5, 1512, 'Z1'),
(1189, 'MAHL APELSINI 1L AURA', 'Aura', 0.97, 1, 1513, 'Z1'),
(1190, 'MAHL ÕUNA 1L AURA', 'Aura', 0.91, 1, 1513, 'Z1'),
(1191, 'KGT.VEIN B&G CABER.SAUVIG.RESERVE 0.75L', 'Barton & Guestier', 6.59, 0.75, 1580, 'Z1'),
(1192, 'GEOGR.T.L.VEIN B&G SAUVIGNON BLANC 0.75L', 'Barton & Guestier', 6.59, 0.75, 1580, 'Z1'),
(1193, 'KPN KV.VAHUVEIN MARTINI ASTI  0.75L', 'Martini', 7.29, 0.75, 1581, 'Z1'),
(1194, 'ÕLU ALEXANDER 5.2% 0.5L PDL', 'AS A.LE COQ', 0.99, 0.5, 1582, 'Z1'),
(1195, 'ÕLU ALEXANDER 5.2% 0.568L 6PAKK', 'AS A.LE COQ', 5.99, 3.2, 1582, 'Z1'),
(1196, 'KARTUL PESTUD LAURA PAKITUD 2KG', 'EESTI', 1.59, 2, 1610, 'Z1'),
(1197, 'KAALIKAS TK 1KL', 'EESTI', 0.39, 0.3, 1610, 'Z1'),
(1198, 'PORGAND 0.5KG KOTIS KADARBIKU', 'EESTI', 0.59, 0.5, 1610, 'Z1'),
(1199, 'ÕUN PAULARED VÕRGUS 1.5KG', 'POOLA', 0.89, 1.5, 1611, 'Z1'),
(1200, 'ÕUN GOLDEN DELICIOUS TK 1KL', 'ITAALIA', 0.79, 0.2, 1611, 'Z1'),
(1201, 'PIRN CONFERENCE TK 1KL', 'ITAALIA', 0.49, 0.2, 1611, 'Z1'),
(1202, 'SIDRUN TK 1KL', 'ITAALIA', 0.49, 0.2, 1612, 'Z1'),
(1203, 'MANDARIIN VÕRGUS CLEMENTINES 1KG ', 'ITAALIA', 1.39, 1, 1612, 'Z1'),
(1204, 'APELSIN VÕRGUS 900G', 'ITAALIA', 1.29, 1, 1612, 'Z1'),
(1205, 'ANANASS TK 1KL', 'COSTA RICA', 1.39, 0.6, 1613, 'Z1'),
(1206, 'MELON KOLLANE TK 1KL', 'ITAALIA', 1.29, 0.6, 1613, 'Z1'),
(1207, 'PLOOMTOMAT 250GR', 'HISPAANIA', 2.09, 0.25, 1614, 'Z1'),
(1208, 'KURK LUUNJA TK 1KL', 'EESTI', 0.79, 0.3, 1614, 'Z1'),
(1209, 'SUVIKÕRVITS TK 1KL', 'LÄTI', 0.99, 0.3, 1614, 'Z1'),
(1210, 'PEALINNA MINIPELMEENID 350G PREMIA', 'Premia AS', 1.19, 0.35, 1710, 'Z1'),
(1211, 'PELMEENID SAAREMAA 600G', 'Saaremaa LT OÜ', 1.89, 0.6, 1710, 'Z1'),
(1212, 'PITSA DR.OETKER RISTORANTE HAWAII 340G', 'Ristorante', 2.35, 0.34, 1710, 'Z1'),
(1213, 'VANILJEJÄÄTIS MAGNUM ŠOKOLAADI-MANDLI GLASUURIS', 'Magnum', 1.15, 0.09, 1711, 'Z1'),
(1214, 'VANILJEJÄÄTIS MAGNUM PIIMAŠOKOLAADI GLASUURIS', 'Magnum', 1.15, 0.09, 1711, 'Z1'),
(1215, 'JÄÄTIS MAASIKA VALGE ŠOKOLAADIGA 90G', 'Magnum', 1.09, 0.09, 1711, 'Z1'),
(1216, 'KALAPULGAD ESVA 250G', 'Esva', 0.99, 0.25, 1712, 'Z1'),
(1217, 'ESVA KALAPULGAD 400G', 'Esva', 1.65, 0.4, 1712, 'Z1'),
(1218, 'KOERATOIT ROKUS 1.2KG KANA KONSERV', 'Rokus', 1.29, 1.2, 1810, 'Z1'),
(1219, 'KOERATOIT DARLING 3KG KANA KUIV', 'Purina', 4.15, 3, 1810, 'Z1'),
(1220, 'KOERATOIT DARLING 10KG KANA KUIV', 'Purina', 15.49, 10, 1810, 'Z1'),
(1221, 'KIISUEINE KITEKAT 12X100G', 'Kitekat', 3.19, 1.2, 1811, 'Z1'),
(1222, 'KASSITOIT KITEKAT 4X100G MP KALAMENÜÜ', 'Kitekat', 1.05, 0.4, 1811, 'Z1'),
(1223, 'KASSILIIV NATUSAN PAAKUV 5L ROHELINE', 'Natusan', 3.45, 5, 1812, 'Z1'),
(1224, 'NÕUDEPESUVAHEND FAIRY SIDRUNI 750L ', 'Fairy', 1.69, 0.75, 1910, 'Z1'),
(1225, 'NÕUDEPESUVAHEND FAIRY SENSITIVE KUMMELIGA 500ML', 'Fairy', 1.05, 0.5, 1910, 'Z1'),
(1226, 'FINISH All-in-1 Max 24 tab.', 'Finish', 7.59, 1, 1910, 'Z1'),
(1227, 'PLEKIEEMALDAJA VANISH 500G OXI-ACTION', 'Vanish', 7.29, 0.5, 1911, 'Z1'),
(1228, 'PESULOPUTUSVAHEND SILAN FRESH SKY 1L', 'Lenor', 3.19, 1, 1911, 'Z1'),
(1229, 'PESUPULBER ARIEL MOUNTAIN SPRING 20PK 1.5KG', 'Ariel', 6.19, 1.5, 1911, 'Z1'),
(1230, 'LEHTKÄTERÄTT EASY STANDARD VALGE 2K 120T', 'Zewa', 2.45, 0.5, 1912, 'Z1'),
(1231, 'TUALETTPABER Nature Lover 3-KIHILINE 8RULLI', 'Zewa', 3.35, 0.5, 1912, 'Z1'),
(1232, 'TUALETTP.ZEWA DELUXE PURE WHITE 8RL 3K', 'Zewa', 3.39, 0.5, 1912, 'Z1'),
(1233, 'PUHASTUSVAHEND DOMESTOS 750ML PINE FRESH', 'Domestos', 1.75, 0.75, 1913, 'Z1'),
(1234, 'PUHASTUSVAHEND CILLIT BANG 750ML', 'Cillit', 4.09, 0.45, 1913, 'Z1'),
(1235, 'PUHASTUSVAHEND CIF 500ML KREEM SIDRUN', 'Cif', 1.79, 0.5, 1913, 'Z1');

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
