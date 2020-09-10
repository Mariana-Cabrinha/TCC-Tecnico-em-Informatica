-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para tcc_pskids
DROP DATABASE IF EXISTS `tcc_pskids`;
CREATE DATABASE IF NOT EXISTS `tcc_pskids` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tcc_pskids`;


-- Copiando estrutura para tabela tcc_pskids.fase_acidente
CREATE TABLE IF NOT EXISTS `fase_acidente` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio10` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_acidente: ~0 rows (aproximadamente)
DELETE FROM `fase_acidente`;
/*!40000 ALTER TABLE `fase_acidente` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_acidente` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_afogamento
CREATE TABLE IF NOT EXISTS `fase_afogamento` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_afogamento: ~0 rows (aproximadamente)
DELETE FROM `fase_afogamento`;
/*!40000 ALTER TABLE `fase_afogamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_afogamento` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_animal
CREATE TABLE IF NOT EXISTS `fase_animal` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio9` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_animal: ~0 rows (aproximadamente)
DELETE FROM `fase_animal`;
/*!40000 ALTER TABLE `fase_animal` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_animal` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_choque
CREATE TABLE IF NOT EXISTS `fase_choque` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio2` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_choque: ~0 rows (aproximadamente)
DELETE FROM `fase_choque`;
/*!40000 ALTER TABLE `fase_choque` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_choque` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_convulsao
CREATE TABLE IF NOT EXISTS `fase_convulsao` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio6` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_convulsao: ~0 rows (aproximadamente)
DELETE FROM `fase_convulsao`;
/*!40000 ALTER TABLE `fase_convulsao` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_convulsao` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_corte
CREATE TABLE IF NOT EXISTS `fase_corte` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio5` int(11) DEFAULT '0',
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_corte: ~0 rows (aproximadamente)
DELETE FROM `fase_corte`;
/*!40000 ALTER TABLE `fase_corte` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_corte` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_desmaio
CREATE TABLE IF NOT EXISTS `fase_desmaio` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio4` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_desmaio: ~0 rows (aproximadamente)
DELETE FROM `fase_desmaio`;
/*!40000 ALTER TABLE `fase_desmaio` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_desmaio` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_fogo
CREATE TABLE IF NOT EXISTS `fase_fogo` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio3` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_fogo: ~0 rows (aproximadamente)
DELETE FROM `fase_fogo`;
/*!40000 ALTER TABLE `fase_fogo` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_fogo` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_queda
CREATE TABLE IF NOT EXISTS `fase_queda` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio8` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_queda: ~0 rows (aproximadamente)
DELETE FROM `fase_queda`;
/*!40000 ALTER TABLE `fase_queda` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_queda` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.fase_queimadura
CREATE TABLE IF NOT EXISTS `fase_queimadura` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_Valorradio7` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.fase_queimadura: ~0 rows (aproximadamente)
DELETE FROM `fase_queimadura`;
/*!40000 ALTER TABLE `fase_queimadura` DISABLE KEYS */;
/*!40000 ALTER TABLE `fase_queimadura` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_acidente
CREATE TABLE IF NOT EXISTS `opcao_fase_acidente` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_acidente: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_acidente`;
/*!40000 ALTER TABLE `opcao_fase_acidente` DISABLE KEYS */;
INSERT INTO `opcao_fase_acidente` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(1, 2);
/*!40000 ALTER TABLE `opcao_fase_acidente` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_afogamento
CREATE TABLE IF NOT EXISTS `opcao_fase_afogamento` (
  `Valor_Código` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT '0',
  PRIMARY KEY (`Valor_Código`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_afogamento: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_afogamento`;
/*!40000 ALTER TABLE `opcao_fase_afogamento` DISABLE KEYS */;
INSERT INTO `opcao_fase_afogamento` (`Valor_Código`, `Valor_ValorCerto`) VALUES
	(2, 2);
/*!40000 ALTER TABLE `opcao_fase_afogamento` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_animal
CREATE TABLE IF NOT EXISTS `opcao_fase_animal` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_animal: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_animal`;
/*!40000 ALTER TABLE `opcao_fase_animal` DISABLE KEYS */;
INSERT INTO `opcao_fase_animal` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(1, 2);
/*!40000 ALTER TABLE `opcao_fase_animal` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_choque
CREATE TABLE IF NOT EXISTS `opcao_fase_choque` (
  `Valor_Código` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Código`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_choque: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_choque`;
/*!40000 ALTER TABLE `opcao_fase_choque` DISABLE KEYS */;
INSERT INTO `opcao_fase_choque` (`Valor_Código`, `Valor_ValorCerto`) VALUES
	(2, 2);
/*!40000 ALTER TABLE `opcao_fase_choque` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_convulsao
CREATE TABLE IF NOT EXISTS `opcao_fase_convulsao` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_convulsao: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_convulsao`;
/*!40000 ALTER TABLE `opcao_fase_convulsao` DISABLE KEYS */;
INSERT INTO `opcao_fase_convulsao` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `opcao_fase_convulsao` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_corte
CREATE TABLE IF NOT EXISTS `opcao_fase_corte` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT '0',
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_corte: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_corte`;
/*!40000 ALTER TABLE `opcao_fase_corte` DISABLE KEYS */;
INSERT INTO `opcao_fase_corte` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(1, 3);
/*!40000 ALTER TABLE `opcao_fase_corte` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_desmaio
CREATE TABLE IF NOT EXISTS `opcao_fase_desmaio` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_desmaio: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_desmaio`;
/*!40000 ALTER TABLE `opcao_fase_desmaio` DISABLE KEYS */;
INSERT INTO `opcao_fase_desmaio` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(2, 1);
/*!40000 ALTER TABLE `opcao_fase_desmaio` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_fogo
CREATE TABLE IF NOT EXISTS `opcao_fase_fogo` (
  `Valor_Código` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Código`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_fogo: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_fogo`;
/*!40000 ALTER TABLE `opcao_fase_fogo` DISABLE KEYS */;
INSERT INTO `opcao_fase_fogo` (`Valor_Código`, `Valor_ValorCerto`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `opcao_fase_fogo` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_queda
CREATE TABLE IF NOT EXISTS `opcao_fase_queda` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_queda: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_queda`;
/*!40000 ALTER TABLE `opcao_fase_queda` DISABLE KEYS */;
INSERT INTO `opcao_fase_queda` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(1, 1);
/*!40000 ALTER TABLE `opcao_fase_queda` ENABLE KEYS */;


-- Copiando estrutura para tabela tcc_pskids.opcao_fase_queimadura
CREATE TABLE IF NOT EXISTS `opcao_fase_queimadura` (
  `Valor_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Valor_ValorCerto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Valor_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_pskids.opcao_fase_queimadura: ~1 rows (aproximadamente)
DELETE FROM `opcao_fase_queimadura`;
/*!40000 ALTER TABLE `opcao_fase_queimadura` DISABLE KEYS */;
INSERT INTO `opcao_fase_queimadura` (`Valor_Codigo`, `Valor_ValorCerto`) VALUES
	(1, 3);
/*!40000 ALTER TABLE `opcao_fase_queimadura` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
