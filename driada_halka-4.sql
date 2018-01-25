-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 23 Sty 2018, 10:24
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `driada_halka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `parent_category_id` text NOT NULL,
  `category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent_category_id`, `category_description`) VALUES
(1, 'pan', '0', 'Odzież męska'),
(2, 'bielizna', '1', 'Bielizna męska'),
(3, 'pizamy_i_szlafroki', '1', 'Piżamy i szlafroki męskie'),
(4, 'podkoszulki', '1', 'Podkoszulki męskie'),
(5, 'spodnie', '1', 'Spodnie męskie'),
(6, 'spodnie_dresowe', '5', 'Spodnie dresowe męskie'),
(7, 'jeansy', '5', 'Jeansy męskie'),
(8, 'kalesony', '5', 'Kalesony męskie'),
(9, 'pani', '0', 'Odzież damska'),
(10, 'bielizna', '9', 'Bielizna damska'),
(11, 'bielizna_wyszczuplajaca', '10', 'Bielizna wyszczuplająca'),
(12, 'biustonosze', '10', 'Biustonosze'),
(13, 'majtki', '10', 'Majtki damskie'),
(14, 'halki_i_spodnice', '9', 'Halki i spódnice'),
(15, 'kuchnia', '9', 'Odzież i artykuły kuchenne'),
(16, 'pizamy_i_szlafroki', '9', 'Piżamy i szlafroki damskie'),
(17, 'rajstopy_i_getry', '9', 'Rajstopy i getry damskie'),
(18, 'spodnie', '9', 'Spodnie damskie'),
(19, 'spodnie_dresowe', '18', 'Spodnie dresowe damskie'),
(20, 'podkoszulki', '9', 'Podkoszulki damskie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_cost` decimal(10,0) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_category` text NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_cost`, `product_stock`, `product_category`, `product_image`, `product_description`) VALUES
(2, 'biustonosz Dar-Syl', '12', 50, '10', '', 'biustonosz zwykły, tradycyjny, szerokie ramiączka'),
(3, 'majtki damskie', '6', 100, '10', '', 'majtki damskie, bawełna 100%, prążek'),
(4, 'kalesony męskie ', '12', 40, '5', '', 'bawełna 100%, gładkie'),
(5, 'podkoszulka damska na ramiączkach', '12', 50, '20', '', 'gładka, bawełna 100%, delikatna koronka na dekolcie'),
(6, 'piżama damska (krótki rękaw)', '48', 10, '16', '', 'bawełna 100%, gładka, '),
(7, 'halka damska na ramiączkach', '15', 10, '14', '', '60% wiskoza, 40% poliamid, na dekolcie delikatna koronka\r\n'),
(8, 'fartuch kuchenny damski z guzikami, długi', '14', 300, '15', '', '100% jedwab poliestrowy, wykończony pliską, dwie kieszenie, zapinany na guziki'),
(9, 'fartuch kuchenny damski z guzikami, krótki', '16', 200, '15', '', 'z kołnierzykiem, 100% jedwab poliestrowy, wykończony pliską, również przy kieszeniach, dwie kieszenie, zapinany na guziki'),
(10, 'fartuch kuchenny plamoodporny ', '12', 100, '15', '', 'wykonany z materiału plamoodpornego, wiązany na szyję, na biodrach wiązany z tyłu'),
(11, 'fartuszek kuchenny dziecięcy ', '10', 100, '15', '', '100% jedwab poliestrowy, wykończony pliską, jedna kieszeń pośrodku, na biodrach wiązane z tyłu'),
(12, 'szlafrok damski wiązany', '100', 20, '16', '', 'materiał typu Wellsoft, szlafrok wiązany na biodrach pasem, z kapturem i kieszeniami'),
(13, 'podomka Vienetta Secret', '60', 50, '16', '', 'bawełna 100%, rozpinana na zamek, posiada boczną kieszonkę, wzór w drobne paseczki, produkt turecki'),
(14, 'szlafrok męski wiązany ', '120', 20, '3', '', 'materiał typu Wellsoft, szlafrok wiązany na biodrach pasem, z kołnierzem i kieszeniami'),
(15, 'getry damskie długie', '14', 100, '17', '', 'bawełna 100%, produkt polski, zwężane, przylegające do ciała'),
(16, 'getry damskie 3/4', '12', 100, '17', '', 'bawełna 100%, produkt polski, zwężane, przylegające do ciała'),
(17, 'getry damskie długie z klinem', '15', 50, '17', '', 'bawełna 100%, produkt polski, zwężane, przylegające do ciała, klin w kroku'),
(18, 'spodnie dresowe damskie plusz', '30', 200, '18', '', 'stan wysoki, fason prosty, nieuciskająca guma w pasie, 100% poliester, produkt polski'),
(19, 'spodnie damskie prążek', '25', 100, '18', '', 'stan wysoki, elastyczne, spodnie na kant,  fason prosty, nieuciskająca guma w pasie, 100% poliester, produkt polski'),
(20, 'spodnie dresowe męskie ze ściągaczem', '20', 60, '5', '', 'bawełna 100%, produkt polski, nogawki ze ściągaczami, dwie kieszenie, nieuciskająca guma w pasie z dodatkową regulacją'),
(21, 'spodnie dresowe męskie bez ściągacza', '20', 60, '5', '', 'bawełna 100%, produkt polski, nogawki proste, dwie kieszenie, nieuciskająca guma w pasie z dodatkową regulacją'),
(22, 'biustonosz Linaise', '18', 20, '10', '', 'produkt polski, miseczki pokryte koronką, potrójne zapięcie z tyłu, ramiączka nieodpinane'),
(23, 'koszula nocna damska, krótki rękaw', '25', 40, '16', '', 'bawełna 100%, produkt turecki '),
(24, 'koszula nocna ciążowa', '30', 20, '16', '', 'bawełna 100%, produkt turecki, rozcięcie do karmienia piersią, krótki rękaw'),
(25, 'majtki damskie modelujące sylwetkę ', '18', 50, '10', '', 'dopasowane do ciała, wysoki stan, dzianina z mikrofibry, podtrzymują pośladki oraz wyszczuplają brzuch, produkt polski'),
(26, 'figi damskie bawełniane gładkie', '5', 300, '10', '', 'bawełna 100%, produkt polski, w delikatny kwiatowy wzór, guma w pasie'),
(27, 'podkoszulek męski, długi rękaw', '12', 200, '4', '', 'bawełna 100%, produkt polski, długi rękaw ze ściągaczem, prążek'),
(28, 'pas uciskowy medyczny', '14', 60, '11', '', 'wykonany z naturalnego włosia zwierzęcego, produkt medyczny'),
(29, 'piżama męska, długi rękaw', '36', 40, '3', '', 'bawełna 100%, produkt turecki'),
(30, 'rajtopy damskie z klinem', '5', 300, '17', '', 'rajstopy ze stretchu, wysoki stan, klin w kroku, produkt polski ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'user',
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `role`, `registration_date`) VALUES
(1, 'Tomek', 'Test', 'test@test.pl', '$2y$10$sUCtMQmtMODiajKI.dXCIeOYGp/bQhulJ7DXb17WlqT7crXX.rfHm', 'user', '2018-01-21 11:37:38');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
