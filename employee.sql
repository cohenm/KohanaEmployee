CREATE TABLE `employee` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `imie` char(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nazwisko` char(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `stanowisko` char(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pesel` bigint(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

-- 
-- Zrzut danych tabeli `employee`
-- 

INSERT INTO `employee` (`id`, `imie`, `nazwisko`, `stanowisko`, `pesel`) VALUES
(1, 'Jan', 'Kowalski', 'młodszy programista', 89012708878),
(2, 'Kamil', 'Socha', 'starszy programista', 87534765467);
