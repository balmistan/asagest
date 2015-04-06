SET foreign_key_checks = 0;

--
-- Struttura della tabella `all8productcumprog1415`
--

DROP TABLE IF EXISTS `all8productcumprog1415`;
CREATE TABLE IF NOT EXISTS `all8productcumprog1415` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_insert` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `carico` float(6,2) DEFAULT '0.00',
  `scarico` float(6,2) DEFAULT '0.00',
  `giacza` float(6,2) DEFAULT '0.00',
  `isload` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `all8registercumprog1415`
--

DROP TABLE IF EXISTS `all8registercumprog1415`;
CREATE TABLE IF NOT EXISTS `all8registercumprog1415` (
  `id_insert` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `numrif` varchar(5) DEFAULT NULL,
  `numindig` varchar(100) DEFAULT NULL,
  `isload` int(1) DEFAULT '0',
  PRIMARY KEY (`id_insert`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blocksheet2015`
--

DROP TABLE IF EXISTS `blocksheet2015`;
CREATE TABLE IF NOT EXISTS `blocksheet2015` (
  `sheetId` int(11) NOT NULL AUTO_INCREMENT,
  `dtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `personId` int(11) NOT NULL,
  `signature` mediumtext,
  `modifiable` tinyint(1) NOT NULL DEFAULT '0',
  `num_indig` int(3) DEFAULT '0',
  PRIMARY KEY (`sheetId`),
  KEY `personId` (`personId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `distributedproductbanco2015`
--

DROP TABLE IF EXISTS `distributedproductbanco2015`;
CREATE TABLE IF NOT EXISTS `distributedproductbanco2015` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sheetId` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `qty` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `sheetId` (`sheetId`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


--
-- Table structure for table `distributedproduct2015`
--

DROP TABLE IF EXISTS `distributedproduct2015`;
CREATE TABLE IF NOT EXISTS `distributedproduct2015` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `sheetId` int(11) DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `qty` decimal(6,2) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `sheetId` (`sheetId`),
  KEY `id_product` (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Constraints for table `all8productcumprog1415`
--
ALTER TABLE `all8productcumprog1415`
  ADD CONSTRAINT `all8productcumprog1415_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blocksheet2015`
--
ALTER TABLE `blocksheet2015`
  ADD CONSTRAINT `blocksheet2015_ibfk_1` FOREIGN KEY (`personId`) REFERENCES `person` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `distributedproduct2015`
--
ALTER TABLE `distributedproduct2015`
  ADD CONSTRAINT `distributedproduct2015_ibfk_1` FOREIGN KEY (`sheetId`) REFERENCES `blocksheet2015` (`sheetId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distributedproduct2015_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `distributedproductbanco2015`
--
ALTER TABLE `distributedproductbanco2015`
  ADD CONSTRAINT `distributedproductbanco2015_ibfk_1` FOREIGN KEY (`sheetId`) REFERENCES `blocksheet2015` (`sheetId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `distributedproductbanco2015_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `productbancoalim` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;




SET foreign_key_checks = 1;
