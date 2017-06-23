CREATE TABLE `classifica_moto1` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Pilota` varchar(255) DEFAULT NULL,
  `Posizione` varchar(255) DEFAULT NULL,
  `Nazione` varchar(255) DEFAULT NULL,
  `Moto` varchar(255) DEFAULT NULL,
  `Punti` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `classifica_moto2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Pilota` varchar(255) DEFAULT NULL,
  `Posizione` varchar(255) DEFAULT NULL,
  `Nazione` varchar(255) DEFAULT NULL,
  `Moto` varchar(255) DEFAULT NULL,
  `Punti` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `classifica_moto3` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Pilota` varchar(255) DEFAULT NULL,
  `Posizione` varchar(255) DEFAULT NULL,
  `Nazione` varchar(255) DEFAULT NULL,
  `Moto` varchar(255) DEFAULT NULL,
  `Punti` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;