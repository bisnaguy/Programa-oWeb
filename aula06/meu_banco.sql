DROP DATABASE meu_banco;
CREATE DATABASE meu_banco;
CREATE TABLE usuario(
	id_usuario INTEGER PRIMARY KEY,
	nm_usuario VARCHAR(100),
	email VARCHAR(150),
	senha VARCHAR(30),
	cpf CHAR(14)
);

/**/
INSERT INTO usuario("gabriel", "gabriel@fatec", "galec96032", "546.694.348-70");