drop database if exists loja;
create database loja;
use loja;

CREATE TABLE usuario (
idUsuario INT(11) NOT NULL AUTO_INCREMENT,
nomeUsuario VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
senha VARCHAR(60) NOT NULL,
cpf VARCHAR(60) NOT NULL,
datadenascimento VARCHAR(10) NOT NULL,
sexo VARCHAR(60) NOT NULL,
tipoUsuario VARCHAR(5) NOT NULL,
PRIMARY KEY (idUsuario)
);

CREATE TABLE categoria(
idcategoria INT auto_increment  NOT NULL,
descricao VARCHAR (50) NOT NULL,
PRIMARY KEY (idcategoria)
);

CREATE TABLE produtos (
idproduto INT(11) auto_increment NOT NULL,
idcategoria INT  NOT NULL,
preco double NOT NULL,
nomeproduto VARCHAR(30) NOT NULL,
descricao VARCHAR(60) NOT NULL,
imagem VARCHAR(60) NOT NULL,
estoque_minimo INT(11) NOT NULL,
estoque_maximo INT(11) NOT NULL,
quant_estoque INT(11) NOT NULL,
PRIMARY KEY (idproduto),
FOREIGN KEY(idcategoria) REFERENCES categoria(idcategoria)) ;

CREATE TABLE log_produto(
id_Log INT (11) auto_increment  NOT NULL,
Tabela VARCHAR (45) NOT NULL,
Usuario VARCHAR (45) NOT NULL,
Data_Hora Datetime NOT NULL,
Acao VARCHAR (45) NOT NULL,
Dados VARCHAR (100) NOT NULL,
PRIMARY KEY (id_Log)
);

CREATE TABLE cupom(
idcupom INT (11) auto_increment  NOT NULL,
nomecupom VARCHAR (60) NOT NULL,
desconto INT (11) NOT NULL,
PRIMARY KEY (idcupom)
);


CREATE TABLE endereco(
idendereco INT(11) NOT NULL auto_increment,
idusuario INT(11) NOT NULL,
logradouro VARCHAR(60) NOT NULL,
numero VARCHAR(7) NOT NULL,
complemento VARCHAR(60) NOT NULL,
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
cep VARCHAR(60) NOT NULL,
PRIMARY KEY(idendereco),
FOREIGN KEY(idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE formapagamento(
idformapagamento BIGINT NOT NULL AUTO_INCREMENT,
descricao VARCHAR(25) NOT NULL,
PRIMARY KEY (idformapagamento)
);

CREATE TABLE pedido (
idPedido INT (11) auto_increment  NOT NULL,
idUsuario INT(11) NOT NULL,
idendereco INT(11) NOT NULL,
idformapagamento BIGINT NOT NULL,
datacompra date NOT NULL,
total varchar(15) NOT NULL,
PRIMARY KEY (idPedido),
FOREIGN KEY(idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(idendereco) REFERENCES endereco(idendereco) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(idformapagamento) REFERENCES formapagamento(idformapagamento) ON DELETE CASCADE ON UPDATE CASCADE
);


CREATE TABLE pedido_produto (
idproduto INT(11) auto_increment NOT NULL,
idpedido INT (11)  NOT NULL,
quantidade INT(11) NOT NULL,
FOREIGN KEY(idproduto) REFERENCES produtos(idproduto) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(idpedido) REFERENCES pedido(idpedido) ON DELETE CASCADE ON UPDATE CASCADE
);