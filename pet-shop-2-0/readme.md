1- Para criar o banco de dados execute o código:

1
CREATE DATABASE Pets DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;</span></pre>
2- Em seguida selecione o banco:

1
USE Pets;
3- Então crie a tabela contatos:

1
2
3
4
5
6
7
CREATE TABLE animais (
    id INT NOT NULL AUTO_INCREMENT,
    nomeA VARCHAR(45) NOT NULL,
    nomeD VARCHAR(45) NOT NULL,
    Contato VARCHAR(15) DEFAULT NULL,
    PRIMARY KEY(id)
);
4- Para verificar se está tudo certo:

1
SELECT * FROM animias ;
Se você seguir a risca estas etapas acima, não deverá enfrentar nenhum problema.