-- -----------------------------------------------------
-- Schema file_translator
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `file_translator` ;
CREATE SCHEMA `file_translator` ;
USE `file_translator` ;

-- -----------------------------------------------------
-- Table `file_translator`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`empresas` (
  `id_empresa` INT NOT NULL AUTO_INCREMENT,
  `nm_empresa` VARCHAR(100) NOT NULL,
  `nm_fantasia_empresa` VARCHAR(100) NOT NULL,
  `nr_cnpj` VARCHAR(14) NOT NULL,
  `nr_ie` VARCHAR(45) NULL DEFAULT NULL,
  `tp_emp` INT(1) NOT NULL,
  `in_status` CHAR(1) NOT NULL DEFAULT 'S',
  PRIMARY KEY (`id_empresa`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `file_translator`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`usuarios` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `id_empresa` INT NOT NULL,
  `nm_usuario` VARCHAR(100) NOT NULL,
  `tx_usuario` VARCHAR(100) NOT NULL,
  `tx_senha` VARCHAR(1000) NOT NULL,
  `tx_temp_senha` VARCHAR(45) NULL DEFAULT NULL,
  `tp_usuario` INT(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `id_usuario_UNIQUE` (`id_usuario` ASC) ,
  UNIQUE INDEX `nick_usuario_UNIQUE` (`tx_usuario` ASC) ,
  INDEX `fk_Usuario_Empresa_idx` (`id_empresa` ASC) ,
  CONSTRAINT `fk_Usuario_Empresa`
    FOREIGN KEY (`id_empresa`)
    REFERENCES `file_translator`.`empresas` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `file_translator`.`tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`tipos` (
  `id_tipo_arquivo` INT NOT NULL AUTO_INCREMENT,
  `tx_extencao` VARCHAR(45) NOT NULL,
  `nm_arquivo` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_tipo_arquivo`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `file_translator`.`arquivos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`arquivos` (
  `id_arquivo` INT NOT NULL AUTO_INCREMENT,
  `id_tipo_arquivo` INT NOT NULL,
  `id_empresa origem` INT NOT NULL,
  `id_empresa_destino` INT NOT NULL,
  `nm_arquivo` VARCHAR(1000) NOT NULL,
  `tx_url` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`id_arquivo`),
  UNIQUE INDEX `id_arquivo_UNIQUE` (`id_arquivo` ASC) ,
  INDEX `fk_Arquivos_Empresa1_idx` (`id_empresa origem` ASC) ,
  INDEX `fk_Arquivos_Empresa2_idx` (`id_empresa_destino` ASC) ,
  INDEX `fk_Arquivos_tipo_arquivo1_idx` (`id_tipo_arquivo` ASC) ,
  CONSTRAINT `fk_Arquivos_Empresa1`
    FOREIGN KEY (`id_empresa origem`)
    REFERENCES `file_translator`.`empresas` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Arquivos_Empresa2`
    FOREIGN KEY (`id_empresa_destino`)
    REFERENCES `file_translator`.`empresas` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Arquivos_tipo_arquivo1`
    FOREIGN KEY (`id_tipo_arquivo`)
    REFERENCES `file_translator`.`tipos` (`id_tipo_arquivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `file_translator`.`relatorios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`relatorios` (
  `id_relatorio` INT NOT NULL AUTO_INCREMENT,
  `id_arquivo` INT NOT NULL,
  `tx_url` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_relatorio`),
  UNIQUE INDEX `id_relatorio_UNIQUE` (`id_relatorio` ASC) ,
  INDEX `fk_Relatorio_Arquivos1_idx` (`id_arquivo` ASC) ,
  CONSTRAINT `fk_Relatorio_Arquivos1`
    FOREIGN KEY (`id_arquivo`)
    REFERENCES `file_translator`.`arquivos` (`id_arquivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `file_translator`.`identificador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`identificador` (
  `id_identificador` INT NOT NULL AUTO_INCREMENT,
  `id_tipo_arquivo` INT NOT NULL,
  `id_empresa_origem` INT NOT NULL,
  `id_empresa_destino` INT NOT NULL,
  `tp_informacao` CHAR(1) NOT NULL,
  `tx_identificador_linha` VARCHAR(10) NOT NULL,
  `nr_posicao_identificador` INT(10) NOT NULL,
  PRIMARY KEY (`id_identificador`),
  UNIQUE INDEX `id_identificador_UNIQUE` (`id_identificador` ASC) ,
  INDEX `fk_identificador_tipos1_idx` (`id_tipo_arquivo` ASC) ,
  INDEX `fk_identificador_empresas1_idx` (`id_empresa_origem` ASC) ,
  INDEX `fk_identificador_empresas2_idx` (`id_empresa_destino` ASC) ,
  CONSTRAINT `fk_identificador_tipos1`
    FOREIGN KEY (`id_tipo_arquivo`)
    REFERENCES `file_translator`.`tipos` (`id_tipo_arquivo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_identificador_empresas1`
    FOREIGN KEY (`id_empresa_origem`)
    REFERENCES `file_translator`.`empresas` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_identificador_empresas2`
    FOREIGN KEY (`id_empresa_destino`)
    REFERENCES `file_translator`.`empresas` (`id_empresa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;


-- -----------------------------------------------------
-- Table `file_translator`.`configuracao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `file_translator`.`configuracao` (
  `id_configuracao` INT NOT NULL AUTO_INCREMENT,
  `id_identificador` INT NOT NULL,
  `tp_dado` VARCHAR(50) NOT NULL,
  `nr_tamanho` INT NOT NULL,
  `in_pad_string` CHAR(1) NOT NULL,
  `in_pad_tipo` CHAR(1) NOT NULL,
  PRIMARY KEY (`id_configuracao`),
  UNIQUE INDEX `id_configuracao_UNIQUE` (`id_configuracao` ASC) ,
  INDEX `fk_configuracao_identificador1_idx` (`id_identificador` ASC) ,
  CONSTRAINT `fk_configuracao_identificador1`
    FOREIGN KEY (`id_identificador`)
    REFERENCES `file_translator`.`identificador` (`id_identificador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8;

START TRANSACTION;
USE `file_translator`;

-- -----------------------------------------------------
-- Data for table `file_translator`.`empresas`
-- -----------------------------------------------------
INSERT INTO `file_translator`.`empresas` (`id_empresa`, `nm_empresa`, `nm_fantasia_empresa`, `nr_cnpj`, `nr_ie`, `tp_emp`) VALUES (1, 'SYSTEM', 'SYSTEM', '99999999999999', NULL, 1);
INSERT INTO `file_translator`.`empresas` (`id_empresa`, `nm_empresa`, `nm_fantasia_empresa`, `nr_cnpj`, `nr_ie`, `tp_emp`) VALUES (2, 'Chama Transporte', 'Chama', '78944760000144', NULL, 0);
INSERT INTO `file_translator`.`empresas` (`id_empresa`, `nm_empresa`, `nm_fantasia_empresa`, `nr_cnpj`, `nr_ie`, `tp_emp`) VALUES (3, 'Entidade Transporte', 'Entidade', '88264220000173', NULL, 0);
INSERT INTO `file_translator`.`empresas` (`id_empresa`, `nm_empresa`, `nm_fantasia_empresa`, `nr_cnpj`, `nr_ie`, `tp_emp`) VALUES (4, 'Utopia Transporte', 'Utopia', '33878155000184', NULL, 0);

-- -----------------------------------------------------
-- Data for table `file_translator`.`usuarios`
-- -----------------------------------------------------
INSERT INTO `file_translator`.`usuarios` (`id_usuario`, `id_empresa`, `nm_usuario`, `tx_usuario`, `tx_senha`, `tx_temp_senha`, `tp_usuario`) VALUES (1, 1, 'Administrador', 'admin', 'admin', NULL, 1);

-- -----------------------------------------------------
-- Data for table `file_translator`.`tipos`
-- -----------------------------------------------------
INSERT INTO `file_translator`.`tipos` (`id_tipo_arquivo`, `tx_extencao`, `nm_arquivo`) VALUES (1, 'xml', 'Extensible Markup Language');
INSERT INTO `file_translator`.`tipos` (`id_tipo_arquivo`, `tx_extencao`, `nm_arquivo`) VALUES (2, 'txt', 'Arquivo de texto');
COMMIT;
