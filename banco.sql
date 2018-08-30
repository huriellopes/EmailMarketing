/**
 * Arquivo SQL do banco de dados do sistema de E-Mail Marketing!
 *
 * @author: Huriel Lopes
 */

-- Cria o Banco de dados
CREATE DATABASE emailmarketing;

-- Usa o Banco
USE emailmarketing;

-- Exclui a tabela se ela existir!
DROP TABLE IF EXISTS emails;
DROP VIEW IF EXISTS email_cad;

-- Cria a tabela de emails
CREATE TABLE emails(
	idEmail int UNSIGNED not null auto_increment,
	nome varchar(255) not null,
	email varchar(150) UNIQUE not null,
	ativo char(2) not null DEFAULT '1',
	dt_created TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY(idEmail)
);

ALTER TABLE emails ADD CONSTRAINT CK_ativo CHECK(ativo in('0','1'));

CREATE VIEW email_cad as
SELECT
	nome,
	email,
	dt_created as cadastro,
	ativo as status
FROM
	emails;