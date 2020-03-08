create database vendas;
use vendas;

CREATE TABLE `contato` (
  `id_contato` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `fone` CHAR(11) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `modelo_carro` VARCHAR(45) NOT NULL,
  `hora_ligar` VARCHAR(20) NOT NULL,
  `mensagem` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`id_contato`));
