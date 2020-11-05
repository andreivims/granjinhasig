-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para granjinha
CREATE DATABASE IF NOT EXISTS `granjinha` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `granjinha`;

-- Copiando estrutura para tabela granjinha.ativopassivo
CREATE TABLE IF NOT EXISTS `ativopassivo` (
  `idAtivoPassivo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `nomeabreviado` varchar(50) DEFAULT NULL,
  `categoria` enum('aves','ovos','ingredientes','embalagens','despesas') DEFAULT NULL,
  `descricao` varchar(150) DEFAULT NULL,
  `medida` enum('UN','DZ','CX','60KG','50KG','30KG','LT','AVE') DEFAULT 'UN',
  PRIMARY KEY (`idAtivoPassivo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.consumoproducao
CREATE TABLE IF NOT EXISTS `consumoproducao` (
  `idConsumoProducao` int(11) NOT NULL AUTO_INCREMENT,
  `idTransacao` int(11) DEFAULT NULL,
  `idAtivoPassivo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idConsumoProducao`),
  KEY `FK_consumoproducao_transacao` (`idTransacao`),
  KEY `FK_consumoproducao_ativopassivo` (`idAtivoPassivo`),
  CONSTRAINT `FK_consumoproducao_ativopassivo` FOREIGN KEY (`idAtivoPassivo`) REFERENCES `ativopassivo` (`idAtivoPassivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_consumoproducao_transacao` FOREIGN KEY (`idTransacao`) REFERENCES `transacao` (`idTransacao`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.estoque
CREATE TABLE IF NOT EXISTS `estoque` (
  `idEstoque` int(11) NOT NULL AUTO_INCREMENT,
  `idTransacao` int(11) DEFAULT NULL,
  `idAtivoPassivo` int(11) DEFAULT NULL,
  `datainicio` date DEFAULT NULL,
  `lote` varchar(50) DEFAULT NULL,
  `vencimento` int(11) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `qtde` float DEFAULT NULL,
  `valor` float DEFAULT NULL,
  PRIMARY KEY (`idEstoque`),
  KEY `FK_estoque_transacao` (`idTransacao`),
  KEY `FK_estoque_ativopassivo` (`idAtivoPassivo`),
  CONSTRAINT `FK_estoque_ativopassivo` FOREIGN KEY (`idAtivoPassivo`) REFERENCES `ativopassivo` (`idAtivoPassivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_estoque_transacao` FOREIGN KEY (`idTransacao`) REFERENCES `transacao` (`idTransacao`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.financeiro
CREATE TABLE IF NOT EXISTS `financeiro` (
  `idFinanceiro` int(11) NOT NULL AUTO_INCREMENT,
  `idTransacao` int(11) DEFAULT NULL,
  `idAtivoPassivo` int(11) DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  PRIMARY KEY (`idFinanceiro`),
  KEY `FK_financeiro_transacao` (`idTransacao`),
  KEY `FK_financeiro_ativopassivo` (`idAtivoPassivo`),
  CONSTRAINT `FK_financeiro_ativopassivo` FOREIGN KEY (`idAtivoPassivo`) REFERENCES `ativopassivo` (`idAtivoPassivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_financeiro_transacao` FOREIGN KEY (`idTransacao`) REFERENCES `transacao` (`idTransacao`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.fone
CREATE TABLE IF NOT EXISTS `fone` (
  `idFone` int(11) NOT NULL AUTO_INCREMENT,
  `idPessoa` int(11) DEFAULT NULL,
  `contato` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idFone`),
  KEY `FK_fone_pessoa` (`idPessoa`),
  CONSTRAINT `FK_fone_pessoa` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`idPessoa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `idPessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `apelido` varchar(50) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `localizacao` int(11) DEFAULT NULL,
  `juridica` tinyint(4) DEFAULT NULL,
  `cnpjcpf` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.precocliente
CREATE TABLE IF NOT EXISTS `precocliente` (
  `idPrecoCliente` int(11) NOT NULL AUTO_INCREMENT,
  `idAtivoPassivo` int(11) DEFAULT NULL,
  `idPessoa` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`idPrecoCliente`),
  KEY `FK_precocliente_ativopassivo` (`idAtivoPassivo`),
  KEY `FK_precocliente_pessoa` (`idPessoa`),
  CONSTRAINT `FK_precocliente_ativopassivo` FOREIGN KEY (`idAtivoPassivo`) REFERENCES `ativopassivo` (`idAtivoPassivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_precocliente_pessoa` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`idPessoa`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.precogeral
CREATE TABLE IF NOT EXISTS `precogeral` (
  `idPrecoGeral` int(11) NOT NULL AUTO_INCREMENT,
  `idAtivoPassivo` int(11) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  PRIMARY KEY (`idPrecoGeral`),
  KEY `FK_precogeral_ativopassivo` (`idAtivoPassivo`),
  CONSTRAINT `FK_precogeral_ativopassivo` FOREIGN KEY (`idAtivoPassivo`) REFERENCES `ativopassivo` (`idAtivoPassivo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela granjinha.transacao
CREATE TABLE IF NOT EXISTS `transacao` (
  `idTransacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `datahora` datetime DEFAULT NULL,
  PRIMARY KEY (`idTransacao`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
