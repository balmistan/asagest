SET foreign_key_checks = 0;

--
-- Struttura della tabella `all8product`
--

DROP TABLE IF EXISTS `all8product`;
CREATE TABLE IF NOT EXISTS `all8product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_insert` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `carico` float(6,2) DEFAULT NULL,
  `scarico` float(6,2) DEFAULT NULL,
  `giacza` float(6,2) DEFAULT NULL,
  `sheet_id` int(11) DEFAULT '0',
  `isload` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `all8productcum`
--

DROP TABLE IF EXISTS `all8productcum`;
CREATE TABLE IF NOT EXISTS `all8productcum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_insert` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `carico` float(6,2) DEFAULT NULL,
  `scarico` float(6,2) DEFAULT NULL,
  `giacza` float(6,2) DEFAULT NULL,
  `isload` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `all8register`
--

DROP TABLE IF EXISTS `all8register`;
CREATE TABLE IF NOT EXISTS `all8register` (
  `id_insert` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `numrif` varchar(5) DEFAULT NULL,
  `numindig` varchar(100) DEFAULT NULL,
  `sheet_id` int(11) DEFAULT '0',
  `isload` int(1) DEFAULT '0',
  PRIMARY KEY (`id_insert`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `all8registercum`
--

DROP TABLE IF EXISTS `all8registercum`;
CREATE TABLE IF NOT EXISTS `all8registercum` (
  `id_insert` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `numrif` varchar(5) DEFAULT NULL,
  `numindig` varchar(100) DEFAULT NULL,
  `isload` int(1) DEFAULT '0',
  PRIMARY KEY (`id_insert`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `blocksheet`
--

DROP TABLE IF EXISTS `blocksheet`;
CREATE TABLE IF NOT EXISTS `blocksheet` (
  `sheetId` int(11) NOT NULL AUTO_INCREMENT,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `personId` int(11) NOT NULL,
  `num_indig` int(3) DEFAULT 0,
  `signature` mediumtext,
  `modifiable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sheetId`),
  KEY `personId` (`personId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `blocksheet_bancoalim`
--

DROP TABLE IF EXISTS `blocksheet_bancoalim`;
CREATE TABLE IF NOT EXISTS `blocksheet_bancoalim` (
  `sheetId` int(11) NOT NULL AUTO_INCREMENT,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `personId` int(11) NOT NULL,
  `signature` mediumtext,
  `modifiable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sheetId`),
  KEY `personId` (`personId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Struttura della tabella `distributedproduct`
--

DROP TABLE IF EXISTS `distributedproduct`;
CREATE TABLE IF NOT EXISTS `distributedproduct` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sheetId` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `qty` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `sheetId` (`sheetId`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `distributedproductbanco`
--

DROP TABLE IF EXISTS `distributedproductbanco`;
CREATE TABLE IF NOT EXISTS `distributedproductbanco` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sheetId` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `qty` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `sheetId` (`sheetId`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Struttura della tabella `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id_person` int(11) NOT NULL AUTO_INCREMENT,
  `imagelink` varchar(100) DEFAULT NULL,
  `vPosition` int(3) DEFAULT NULL,
  `family_register_number` int(11) DEFAULT NULL,
  `surname` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `fiscal_code` varchar(16) DEFAULT NULL,
  `born_date` date DEFAULT NULL,
  `search_result` enum('on','off') DEFAULT 'off',
  PRIMARY KEY (`id_person`),
  KEY `family_register_number` (`family_register_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


--
-- Struttura della tabella `family`
--

DROP TABLE IF EXISTS `family`;
CREATE TABLE IF NOT EXISTS `family` (
  `family_register_number` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(200) DEFAULT '',
  `district` varchar(200) DEFAULT '',
  `district_id` int(11) DEFAULT '0',
  `num_indig` int(3),
  `phonenumber` varchar(200) DEFAULT '',
  `state` enum('complete','incomplete','deleted') NOT NULL DEFAULT 'incomplete',
  `note` text,
  `expirydate_isee` date DEFAULT NULL,
  PRIMARY KEY (`family_register_number`),
  UNIQUE KEY `family_register_number` (`family_register_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

update product set modifiable=1;
update productbancoalim set modifiable=1;
update memorylist set strjson ="[]";


--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `all8product`
--
ALTER TABLE `all8product`
  ADD CONSTRAINT `all8product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `all8productcum`
--
ALTER TABLE `all8productcum`
  ADD CONSTRAINT `all8productcum_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `blocksheet`
--
ALTER TABLE `blocksheet`
  ADD CONSTRAINT `blocksheet_ibfk_1` FOREIGN KEY (`personId`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `blocksheet_bancoalim`
--
ALTER TABLE `blocksheet_bancoalim`
  ADD CONSTRAINT `blocksheet_bancoalim_ibfk_1` FOREIGN KEY (`personId`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `distributedproduct`
--
ALTER TABLE `distributedproduct`
  ADD CONSTRAINT `distributedproduct_ibfk_1` FOREIGN KEY (`sheetId`) REFERENCES `blocksheet` (`sheetId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distributedproduct_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `distributedproductbanco`
--
ALTER TABLE `distributedproductbanco`
  ADD CONSTRAINT `distributedproductbanco_ibfk_1` FOREIGN KEY (`sheetId`) REFERENCES `blocksheet` (`sheetId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distributedproductbanco_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `productbancoalim` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`family_register_number`) REFERENCES `family` (`family_register_number`) ON DELETE CASCADE ON UPDATE CASCADE;



SET foreign_key_checks = 1;
