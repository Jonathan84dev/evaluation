CREATE TABLE logement (
id_logement INT  AUTO_INCREMENT,
titre VARCHAR(60),
adresse VARCHAR (100),
ville VARCHAR (60),
cp INT,
surface INT,
prix INT,
photo VARCHAR (100),
type INT,
description VARCHAR (1000),
CONSTRAINT PK_logement PRIMARY KEY(id_logement)
);