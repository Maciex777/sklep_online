-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 29 Sty 2018, 11:13
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
-- Struktura tabeli dla tabeli `call_requests`
--

CREATE TABLE `call_requests` (
  `id` int(11) NOT NULL,
  `requester` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `requester_mail` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `requester_phone` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `request_identifier` varchar(9) COLLATE utf8_general_mysql500_ci NOT NULL,
  `request_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_topic` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `parent_category_id` text NOT NULL,
  `category_description` text NOT NULL,
  `category_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent_category_id`, `category_description`, `category_photo`) VALUES
(1, 'pan', '0', 'Odzież męska', ''),
(2, 'bielizna', '1', 'Bielizna męska', ''),
(3, 'pizamy_i_szlafroki', '1', 'Piżamy i szlafroki męskie', ''),
(4, 'podkoszulki', '1', 'Podkoszulki męskie', ''),
(5, 'spodnie', '1', 'Spodnie męskie', ''),
(6, 'spodnie_dresowe', '5', 'Spodnie dresowe męskie', ''),
(7, 'jeansy', '5', 'Jeansy męskie', ''),
(8, 'kalesony', '5', 'Kalesony męskie', ''),
(9, 'pani', '0', 'Odzież damska', ''),
(10, 'bielizna', '9', 'Bielizna damska', ''),
(11, 'bielizna_wyszczuplajaca', '10', 'Bielizna wyszczuplająca', ''),
(12, 'biustonosze', '10', 'Biustonosze', ''),
(13, 'majtki', '10', 'Majtki damskie', ''),
(14, 'halki_i_spodnice', '9', 'Halki i spódnice', ''),
(15, 'kuchnia', '9', 'Odzież i artykuły kuchenne', ''),
(16, 'pizamy_i_szlafroki', '9', 'Piżamy i szlafroki damskie', ''),
(17, 'rajstopy_i_getry', '9', 'Rajstopy i getry damskie', ''),
(18, 'spodnie', '9', 'Spodnie damskie', ''),
(19, 'spodnie_dresowe', '18', 'Spodnie dresowe damskie', ''),
(20, 'podkoszulki', '9', 'Podkoszulki damskie', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `main` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `parent` tinyint(1) NOT NULL DEFAULT '0',
  `where_child` text COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Zrzut danych tabeli `menu`
--

INSERT INTO `menu` (`id`, `main`, `parent`, `where_child`) VALUES
(1, 'Pan', 1, 'categories'),
(2, 'Pani', 1, 'categories'),
(3, 'O sklepie', 0, ''),
(4, 'Kontakt', 0, '');

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
(2, 'Biustonosz Dar-Syl', '12', 50, '10', 'assets/img/products/pani/dar_w.jpg', 'biustonosz zwykły, tradycyjny, szerokie ramiączka'),
(3, 'Figi', '6', 100, '10', 'assets/img/products/pani/majpro_w.jpg', 'majtki damskie, bawełna 100%, prążek'),
(4, 'Kalesony', '12', 40, '5', 'assets/img/products/pan/kal_gray.jpg', 'bawełna 100%, gładkie'),
(5, 'Podkoszulka na ramiączkach', '12', 50, '20', 'assets/img/products/pani/tsh_2.jpg', 'gładka, bawełna 100%, delikatna koronka na dekolcie'),
(6, 'Piżama (krótki rękaw)', '48', 10, '15', 'assets/img/products/pani/piz_2.jpg', 'bawełna 100%, gładka, '),
(7, 'Halka na ramiączkach', '15', 10, '14', 'assets/img/products/pani/halka_1.jpg', '60% wiskoza, 40% poliamid, na dekolcie delikatna koronka\r\n'),
(8, 'Fartuch kuchenny, długi z guzikami', '14', 300, '15', 'assets/img/products/pani/far_dg.jpg', '100% jedwab poliestrowy, wykończony pliską, dwie kieszenie, zapinany na guziki'),
(9, 'Fartuch kuchenny, krótki z guzikami', '16', 200, '15', 'assets/img/products/pani/', 'z kołnierzykiem, 100% jedwab poliestrowy, wykończony pliską, również przy kieszeniach, dwie kieszenie, zapinany na guziki'),
(10, 'Fartuch kuchenny plamoodporny', '12', 100, '15', 'assets/img/products/pani/farpla_b.jpg', 'wykonany z materiału plamoodpornego, wiązany na szyję, na biodrach wiązany z tyłu'),
(11, 'Fartuszek kuchenny dziecięcy', '10', 100, '', 'assets/img/products/pani/farkid.jpg', '100% jedwab poliestrowy, wykończony pliską, jedna kieszeń pośrodku, na biodrach wiązane z tyłu'),
(12, 'Szlafrok wiązany', '100', 20, '16', 'assets/img/products/pani/szlf_w.jpg', 'materiał typu Wellsoft, szlafrok wiązany na biodrach pasem, z kapturem i kieszeniami'),
(13, 'Podomka VIenetta Secret', '60', 50, '16', 'assets/img/products/pani/podomka.jpg', 'bawełna 100%, rozpinana na zamek, posiada boczną kieszonkę, wzór w drobne paseczki, produkt turecki'),
(14, 'Szlafrok wiązany', '120', 20, '3', 'assets/img/products/pan/szlf_1.jpg', 'materiał typu Wellsoft, szlafrok wiązany na biodrach pasem, z kołnierzem i kieszeniami'),
(15, 'Getry długie', '14', 100, '17', 'assets/img/products/pani/get_b.jpg', 'bawełna 100%, produkt polski, zwężane, przylegające do ciała'),
(16, 'Getry 3/4', '12', 100, '17', 'assets/img/products/pani/get34_g.jpg', 'bawełna 100%, produkt polski, zwężane, przylegające do ciała'),
(17, 'Getry z klinem, długie', '15', 50, '17', 'assets/img/products/pani/get_2.jpg', 'bawełna 100%, produkt polski, zwężane, przylegające do ciała, klin w kroku'),
(18, 'Spodnie dresowe z pluszem', '30', 200, '18', 'assets/img/products/pani/dres_3.jpg', 'stan wysoki, fason prosty, nieuciskająca guma w pasie, 100% poliester, produkt polski'),
(19, 'Spodnie - prążek', '25', 100, '18', 'assets/img/products/pani/spod_1.jpg', 'stan wysoki, elastyczne, spodnie na kant,  fason prosty, nieuciskająca guma w pasie, 100% poliester, produkt polski'),
(20, 'Spodnie dresowe ze ściągaczem', '20', 60, '5', 'assets/img/products/pan/dres_1.jpg', 'bawełna 100%, produkt polski, nogawki ze ściągaczami, dwie kieszenie, nieuciskająca guma w pasie z dodatkową regulacją'),
(21, 'Spodnie dresowe bez ściągacza', '20', 60, '5', 'assets/img/products/pan/dresbez_2.jpg', 'bawełna 100%, produkt polski, nogawki proste, dwie kieszenie, nieuciskająca guma w pasie z dodatkową regulacją'),
(22, 'Biustonosz Linaise', '18', 20, '10', 'assets/img/products/pani/lin_c.jpg', 'produkt polski, miseczki pokryte koronką, potrójne zapięcie z tyłu, ramiączka nieodpinane'),
(23, 'Koszula nocna, krótki rękaw', '25', 40, '16', 'assets/img/products/pani/noc_1.jpg', 'bawełna 100%, produkt turecki '),
(24, 'Koszula nocna - ciążowa', '30', 20, '16', 'assets/img/products/pani/ciaza_1.jpg', 'bawełna 100%, produkt turecki, rozcięcie do karmienia piersią, krótki rękaw'),
(25, 'Majtki modelujące sylwetkę', '18', 50, '10', 'assets/img/products/pani/majmod_t.jpg', 'dopasowane do ciała, wysoki stan, dzianina z mikrofibry, podtrzymują pośladki oraz wyszczuplają brzuch, produkt polski'),
(26, 'Figi bawełnianie', '5', 300, '10', 'assets/img/products/pani/figa_1.jpg', 'bawełna 100%, produkt polski, w delikatny kwiatowy wzór, guma w pasie'),
(27, 'Podkoszulek, długi rękaw', '12', 200, '4', 'assets/img/products/pan/ths_gray.jpg', 'bawełna 100%, produkt polski, długi rękaw ze ściągaczem, prążek'),
(28, 'Pas uciskowy - medyczny', '14', 60, '11', 'assets/img/products/pani/pmed_p.jpg', 'wykonany z naturalnego włosia zwierzęcego, produkt medyczny'),
(29, 'Piżama - długi rękaw', '36', 40, '3', 'assets/img/products/pan/piz_2.jpg', 'bawełna 100%, produkt turecki'),
(30, 'Rajstopy z klinem', '5', 300, '17', 'assets/img/products/pani/raj_t.jpg', 'rajstopy ze stretchu, wysoki stan, klin w kroku, produkt polski ');

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
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phone_number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `role`, `registration_date`, `phone_number`) VALUES
(1, 'Tomek', 'Test', 'test@test.pl', '$2y$10$WemDkdPVO.SuR7dD3HS..u8lXgrZqjv1ho05.gcWxtJtRTHp7XPdG', 'user', '2018-01-21 11:37:38', '123456789');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_adres_data`
--

CREATE TABLE `users_adres_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `street` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `building` int(11) NOT NULL,
  `appartment` int(11) NOT NULL,
  `city` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL,
  `post_code` varchar(6) COLLATE utf8_general_mysql500_ci NOT NULL,
  `country` varchar(20) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'Polska'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Zrzut danych tabeli `users_adres_data`
--

INSERT INTO `users_adres_data` (`id`, `user_id`, `street`, `building`, `appartment`, `city`, `post_code`, `country`) VALUES
(1, 1, 'Szubińska', 25, 40, 'Bydgoszcz', '85-040', 'Polska');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `call_requests`
--
ALTER TABLE `call_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
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
-- Indexes for table `users_adres_data`
--
ALTER TABLE `users_adres_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `call_requests`
--
ALTER TABLE `call_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- AUTO_INCREMENT dla tabeli `users_adres_data`
--
ALTER TABLE `users_adres_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
